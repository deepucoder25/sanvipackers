<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Track Your Shipment',
    'subtitle'    => 'Enter your tracking number below to check current status and updates.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Tracking'],
    ],
]) ?>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Search Box Card -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 mb-4">
                    <div class="text-center mb-4">
                        <h2 class="fw-bold fs-3">Consignment Tracking</h2>
                        <p class="text-muted small">Enter your Tracking ID, LR No., or Reference Number.</p>
                    </div>

                    <form id="trackingForm" onsubmit="handleTrackingSubmit(event)">
                        <div class="input-group input-group-lg mb-3">
                            <span class="input-group-text bg-white border-end-0">
                                <i class="bi bi-search text-primary"></i>
                            </span>
                            <input type="text" 
                                   id="trackingInput" 
                                   name="trackingNumber" 
                                   class="form-control border-start-0" 
                                   placeholder="Enter Tracking Number..." 
                                   required 
                                   autocomplete="off">
                            <button class="btn btn-primary px-4 fw-bold" type="submit" id="trackBtn">
                                Track <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </form>

                    <div id="trackingLoader" class="text-center py-4 d-none">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p class="text-muted small mt-2 mb-0">Searching records...</p>
                    </div>

                    <div id="trackingError" class="alert alert-danger d-none mt-3" role="alert"></div>
                </div>

                <!-- Results Container -->
                <div id="trackingResult" class="d-none">
                    <!-- Shipment Summary Card -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 pb-3 border-bottom mb-3">
                            <div>
                                <span class="text-muted small d-block">Tracking Number</span>
                                <h4 class="fw-bold mb-0 text-primary" id="resLrNo">-</h4>
                            </div>
                            <div class="text-end">
                                <span class="badge bg-success-subtle text-success px-3 py-2 rounded-pill fw-bold" id="resStatus">Active</span>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-sm-6 col-md-3">
                                <div class="p-2 rounded bg-light">
                                    <span class="text-muted small d-block">Client / Name</span>
                                    <strong class="text-dark" id="resCustomer">-</strong>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="p-2 rounded bg-light">
                                    <span class="text-muted small d-block">From</span>
                                    <strong class="text-dark" id="resFrom">-</strong>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="p-2 rounded bg-light">
                                    <span class="text-muted small d-block">To</span>
                                    <strong class="text-dark" id="resTo">-</strong>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="p-2 rounded bg-light">
                                    <span class="text-muted small d-block">Date</span>
                                    <strong class="text-dark" id="resDeliveryDate">-</strong>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline Card -->
                    <div class="card border-0 shadow-sm rounded-4 p-4">
                        <h5 class="fw-bold fs-5 mb-4"><i class="bi bi-clock-history text-primary me-2"></i> Timeline & Updates</h5>
                        <div id="timelineList" class="tracking-timeline position-relative ps-4">
                            <!-- Injected by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function handleTrackingSubmit(e) {
    e.preventDefault();
    const input = document.getElementById('trackingInput');
    const val = input.value.trim();
    if (!val) return;

    const loader = document.getElementById('trackingLoader');
    const errorBox = document.getElementById('trackingError');
    const resultBox = document.getElementById('trackingResult');
    const btn = document.getElementById('trackBtn');

    loader.classList.remove('d-none');
    errorBox.classList.add('d-none');
    resultBox.classList.add('d-none');
    btn.disabled = true;

    const formData = new FormData();
    formData.append('trackingNumber', val);

    fetch('<?= site_url('tracking/track') ?>', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        loader.classList.add('d-none');
        btn.disabled = false;

        if (data.status === 'success' && data.main) {
            document.getElementById('resLrNo').innerText = data.main.lr_no || data.main.tracking_id || val;
            document.getElementById('resCustomer').innerText = data.main.c_name || '-';
            document.getElementById('resFrom').innerText = data.main.ship_from || '-';
            document.getElementById('resTo').innerText = data.main.ship_to || '-';
            document.getElementById('resDeliveryDate').innerText = data.main.ex_del_date || '-';

            const timeline = document.getElementById('timelineList');
            timeline.innerHTML = '';

            if (data.timeline && data.timeline.length > 0) {
                data.timeline.forEach((step, idx) => {
                    const isLast = idx === data.timeline.length - 1;
                    const item = document.createElement('div');
                    item.className = 'timeline-item mb-4 position-relative';
                    item.innerHTML = `
                        <div class="timeline-dot ${isLast ? 'bg-success' : 'bg-primary'}"></div>
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <h6 class="fw-bold mb-1 text-dark">${step.place ? step.place : 'Update'}</h6>
                            <span class="badge bg-light text-muted border">${step.date || ''} ${step.time || ''}</span>
                        </div>
                        <p class="text-muted small mb-0">${step.remarks ? step.remarks : 'Status updated.'}</p>
                    `;
                    timeline.appendChild(item);
                });
            } else {
                timeline.innerHTML = '<p class="text-muted small">Record found. Updates will be posted soon.</p>';
            }

            resultBox.classList.remove('d-none');
        } else {
            errorBox.innerText = data.message || 'Tracking number not found.';
            errorBox.classList.remove('d-none');
        }
    })
    .catch(err => {
        loader.classList.add('d-none');
        btn.disabled = false;
        errorBox.innerText = 'Unable to fetch tracking details. Please try again.';
        errorBox.classList.remove('d-none');
    });
}
</script>
