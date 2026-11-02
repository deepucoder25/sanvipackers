<?php
$helplinePhone = $phone ?? ($comp['phone'] ?? ($site->phone ?? '+91 70217 10594'));
$cleanPhone    = preg_replace('/[^0-9]/', '', $helplinePhone);
$whatsappNum   = $whatsapp ?? ($comp['whatsapp'] ?? ($site->whatsapp ?? '7021710594'));
$cleanWhatsapp = preg_replace('/[^0-9]/', '', $whatsappNum);
?>
<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Track Your Shipment',
    'subtitle'    => 'Real-time GPS status, checkpoint milestones, and delivery estimates for your consignment.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Consignment Tracking'],
    ],
]) ?>

<div class="pm-srv-page-wrap py-5">
    <div class="container">
        
        <!-- Search Hero Section -->
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">
                <div class="card border-0 pm-tracking-card p-4 p-md-5 mb-4">
                    <div class="text-center mb-4">
                        <span class="badge px-3 py-1 rounded-pill text-uppercase mb-2 pm-srv-hero-badge">
                            <i class="bi bi-geo-alt-fill me-1"></i> Live Fleet &amp; Consignment Tracking
                        </span>
                        <h2 class="h3 fw-bold text-dark mb-2">Track Your Consignment</h2>
                        <p class="text-muted small mb-0">Enter your 6-digit LR No, Consignment ID, or GR Number printed on your moving docket.</p>
                    </div>

                    <form id="trackingForm" onsubmit="handleTrackingSubmit(event)">
                        <div class="pm-tracking-input-group d-flex align-items-center mb-2">
                            <span class="ps-3 pe-2 text-danger">
                                <i class="bi bi-search fs-5"></i>
                            </span>
                            <input type="text" 
                                   id="trackingInput" 
                                   name="trackingNumber" 
                                   class="form-control pm-tracking-input flex-grow-1" 
                                   placeholder="Enter LR / Consignment No (e.g. 123456)..." 
                                   required 
                                   autocomplete="off">
                            <button class="btn pm-tracking-submit-btn d-inline-flex align-items-center gap-2 me-1" type="submit" id="trackBtn">
                                <span>Track Now</span>
                                <i class="bi bi-arrow-right-circle-fill"></i>
                            </button>
                        </div>
                    </form>

                    <!-- Quick Sample Chip & Helpful Hints -->
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mt-3 pt-2 border-top">
                        <div class="d-flex align-items-center gap-2">
                            <span class="small text-muted">Quick test:</span>
                            <button type="button" class="pm-tracking-sample-chip" onclick="fillTracking('123456')">
                                <i class="bi bi-lightning-charge-fill me-1"></i> Sample LR: 123456
                            </button>
                        </div>
                        <span class="small text-muted">
                            <i class="bi bi-info-circle text-danger me-1"></i> LR No is on the top-right of your receipt
                        </span>
                    </div>

                    <!-- Loader State -->
                    <div id="trackingLoader" class="text-center py-4 d-none">
                        <div class="spinner-border text-danger" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p class="text-muted small mt-2 mb-0">Searching dispatch registry and transit scans...</p>
                    </div>

                    <!-- Error Alert -->
                    <div id="trackingError" class="alert alert-danger d-none mt-4 rounded-3 border-danger-subtle" role="alert">
                        <div class="d-flex align-items-start gap-2">
                            <i class="bi bi-exclamation-triangle-fill fs-5 mt-1 flex-shrink-0"></i>
                            <div>
                                <span id="errorMsgText">Tracking record not found.</span>
                                <div class="mt-2">
                                    <a href="https://wa.me/<?= esc($cleanWhatsapp) ?>?text=<?= urlencode('Hello Sanvi Packers, I need help tracking my consignment.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1 fw-bold">
                                        <i class="bi bi-whatsapp me-1"></i> Ask Dispatch on WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dynamic Results Container -->
                <div id="trackingResult" class="d-none">
                    
                    <!-- Shipment Summary Card -->
                    <div class="card border-0 pm-tracking-card p-4 p-md-4 mb-4">
                        <!-- Top Bar -->
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 pb-3 border-bottom mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <h3 class="h5 fw-bold text-dark mb-0">Consignment Summary</h3>
                                <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-2 py-0" onclick="copyTrackingId()" title="Copy LR Number">
                                    <i class="bi bi-clipboard me-1"></i> <span id="copyBtnText">Copy</span>
                                </button>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="badge bg-danger-subtle text-danger border border-danger-subtle px-3 py-1 rounded-pill fw-bold" id="resType">
                                    Household Shifting
                                </span>
                                <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-1 rounded-pill fw-bold d-inline-flex align-items-center gap-1" id="resStatus">
                                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                    <span>Active In-Transit</span>
                                </span>
                            </div>
                        </div>

                        <!-- Route Visual Strip -->
                        <div class="pm-tracking-route-wrap mb-4">
                            <div class="d-flex align-items-center justify-content-between position-relative z-2">
                                <div>
                                    <span class="pm-tracking-city-label"><i class="bi bi-geo-alt-fill text-danger me-1"></i> Origin</span>
                                    <div class="pm-tracking-city-name text-truncate" id="resRouteFrom">-</div>
                                </div>
                                <div class="pm-tracking-truck-path">
                                    <div class="pm-tracking-truck-line"></div>
                                    <div class="pm-tracking-truck-icon">
                                        <i class="bi bi-truck"></i>
                                    </div>
                                    <span class="pm-route-mid-badge d-none d-sm-inline-block"><i class="bi bi-radar me-1"></i> On Route</span>
                                </div>
                                <div class="text-end">
                                    <span class="pm-tracking-city-label"><i class="bi bi-flag-fill text-warning me-1"></i> Destination</span>
                                    <div class="pm-tracking-city-name text-truncate" id="resRouteTo">-</div>
                                </div>
                            </div>
                        </div>

                        <!-- 4-Stage Stepper Progress Bar (Desktop: Horizontal) -->
                        <div class="d-none d-md-block pm-tracking-stepper-wrap mb-4">
                            <div class="pm-tracking-stepper">
                                <div class="pm-tracking-stepper-line"></div>

                                <div class="pm-step-node completed">
                                    <div class="pm-step-circle">
                                        <i class="bi bi-check-lg"></i>
                                    </div>
                                    <span class="pm-step-title">Booked &amp; Packed</span>
                                    <span class="pm-step-desc">Inventory Done</span>
                                </div>

                                <div class="pm-step-node completed">
                                    <div class="pm-step-circle">
                                        <i class="bi bi-check-lg"></i>
                                    </div>
                                    <span class="pm-step-title">Loaded in Fleet</span>
                                    <span class="pm-step-desc">Dispatched</span>
                                </div>

                                <div class="pm-step-node active">
                                    <div class="pm-step-circle">
                                        <i class="bi bi-truck"></i>
                                    </div>
                                    <span class="pm-step-title">In Transit</span>
                                    <span class="pm-step-desc text-danger fw-bold">Live GPS Active</span>
                                </div>

                                <div class="pm-step-node">
                                    <div class="pm-step-circle">
                                        <i class="bi bi-house-door"></i>
                                    </div>
                                    <span class="pm-step-title">Destination Delivery</span>
                                    <span class="pm-step-desc">Unloading &amp; Setup</span>
                                </div>
                            </div>
                        </div>

                        <!-- 4-Stage Stepper Progress Bar (Mobile: Vertical Stack) -->
                        <div class="pm-mobile-stepper d-md-none mb-4">
                            <div class="pm-m-step completed">
                                <div class="pm-m-step-indicator">
                                    <div class="pm-m-circle"><i class="bi bi-check-lg"></i></div>
                                    <div class="pm-m-line"></div>
                                </div>
                                <div class="pm-m-content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="pm-m-title">Booked &amp; Packed</span>
                                        <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2 py-0 small">Done</span>
                                    </div>
                                    <span class="pm-m-desc">Inventory Completed</span>
                                </div>
                            </div>

                            <div class="pm-m-step completed">
                                <div class="pm-m-step-indicator">
                                    <div class="pm-m-circle"><i class="bi bi-check-lg"></i></div>
                                    <div class="pm-m-line"></div>
                                </div>
                                <div class="pm-m-content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="pm-m-title">Loaded in Fleet</span>
                                        <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-2 py-0 small">Done</span>
                                    </div>
                                    <span class="pm-m-desc">Vehicle Dispatched</span>
                                </div>
                            </div>

                            <div class="pm-m-step active">
                                <div class="pm-m-step-indicator">
                                    <div class="pm-m-circle"><i class="bi bi-truck"></i></div>
                                    <div class="pm-m-line"></div>
                                </div>
                                <div class="pm-m-content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="pm-m-title text-danger fw-bold">In Transit</span>
                                        <span class="badge bg-danger text-white rounded-pill px-2 py-0 small">Live GPS</span>
                                    </div>
                                    <span class="pm-m-desc text-danger fw-semibold">Live GPS Active &amp; Moving</span>
                                </div>
                            </div>

                            <div class="pm-m-step">
                                <div class="pm-m-step-indicator">
                                    <div class="pm-m-circle"><i class="bi bi-house-door"></i></div>
                                </div>
                                <div class="pm-m-content">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="pm-m-title text-muted">Destination Delivery</span>
                                        <span class="badge bg-light text-muted border rounded-pill px-2 py-0 small">Upcoming</span>
                                    </div>
                                    <span class="pm-m-desc">Unloading &amp; Room Setup</span>
                                </div>
                            </div>
                        </div>

                        <!-- Metrics Grid -->
                        <div class="row g-2 g-md-3">
                            <div class="col-6 col-md-3">
                                <div class="pm-tracking-metric-card">
                                    <div class="pm-metric-icon red">
                                        <i class="bi bi-receipt-cutoff"></i>
                                    </div>
                                    <div class="min-w-0">
                                        <span class="pm-tracking-metric-label d-block text-truncate">LR / Docket No</span>
                                        <strong class="pm-tracking-metric-val text-danger d-block text-truncate" id="resLrNo">-</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="pm-tracking-metric-card">
                                    <div class="pm-metric-icon blue">
                                        <i class="bi bi-person-fill"></i>
                                    </div>
                                    <div class="min-w-0">
                                        <span class="pm-tracking-metric-label d-block text-truncate">Client Name</span>
                                        <strong class="pm-tracking-metric-val d-block text-truncate" id="resCustomer">-</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="pm-tracking-metric-card">
                                    <div class="pm-metric-icon yellow">
                                        <i class="bi bi-arrow-left-right"></i>
                                    </div>
                                    <div class="min-w-0">
                                        <span class="pm-tracking-metric-label d-block text-truncate">Dispatch Route</span>
                                        <strong class="pm-tracking-metric-val d-block text-truncate"><span id="resFrom">-</span> &rarr; <span id="resTo">-</span></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="pm-tracking-metric-card">
                                    <div class="pm-metric-icon green">
                                        <i class="bi bi-calendar2-check-fill"></i>
                                    </div>
                                    <div class="min-w-0">
                                        <span class="pm-tracking-metric-label d-block text-truncate">Exp. Delivery</span>
                                        <strong class="pm-tracking-metric-val text-success d-block text-truncate" id="resDeliveryDate">-</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Milestones & Checkpoints Timeline Card -->
                    <div class="card border-0 pm-tracking-card p-4 p-md-4 mb-4">
                        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                            <h3 class="h5 fw-bold text-dark mb-0">
                                <i class="bi bi-clock-history text-danger me-2"></i> Live Transit Checkpoints &amp; Milestones
                            </h3>
                            <span class="badge bg-light text-dark border rounded-pill px-3 py-1 small">
                                <i class="bi bi-shield-fill-check text-success me-1"></i> Verified Station Scans
                            </span>
                        </div>
                        <div id="timelineList" class="pm-tracking-timeline">
                            <!-- Injected dynamically by JavaScript -->
                        </div>
                    </div>

                    <!-- Assistance Callout for Live Shipment -->
                    <div class="pm-tracking-help-card mb-4">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-between gap-3">
                            <div class="d-flex align-items-center gap-3">
                                <div class="pm-help-avatar-icon">
                                    <i class="bi bi-headset"></i>
                                </div>
                                <div>
                                    <h4 class="h6 fw-bold mb-1 text-dark">Have questions regarding this consignment?</h4>
                                    <span class="text-muted small">Our move supervisor is on-call to provide driver coordinates and delivery schedule updates.</span>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2 pt-2 pt-sm-0">
                                <a href="tel:<?= esc($cleanPhone) ?>" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center justify-content-center gap-1 flex-grow-1 flex-sm-grow-0">
                                    <i class="bi bi-telephone-fill"></i> <?= esc($helplinePhone) ?>
                                </a>
                                <a href="https://wa.me/<?= esc($cleanWhatsapp) ?>?text=<?= urlencode('Hello Sanvi Packers, I am tracking my consignment and need an update.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center justify-content-center gap-1 flex-grow-1 flex-sm-grow-0">
                                    <i class="bi bi-whatsapp"></i> WhatsApp Dispatch
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</div>

<script>
function fillTracking(num) {
    const input = document.getElementById('trackingInput');
    input.value = num;
    const form = document.getElementById('trackingForm');
    form.dispatchEvent(new Event('submit', { cancelable: true }));
}

function copyTrackingId() {
    const text = document.getElementById('resLrNo').innerText;
    if (navigator.clipboard) {
        navigator.clipboard.writeText(text);
        const copyBtn = document.getElementById('copyBtnText');
        if (copyBtn) {
            const old = copyBtn.innerText;
            copyBtn.innerText = 'Copied!';
            setTimeout(() => { copyBtn.innerText = old; }, 2000);
        }
    }
}

function escapeHtml(str) {
    return String(str).replace(/[&<>"']/g, function(m) {
        return { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' }[m];
    });
}

function handleTrackingSubmit(e) {
    e.preventDefault();
    const input = document.getElementById('trackingInput');
    const val = input.value.trim();
    if (!val) return;

    const loader = document.getElementById('trackingLoader');
    const errorBox = document.getElementById('trackingError');
    const errorMsg = document.getElementById('errorMsgText');
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
            const lrDisplay = data.main.lr_no || data.main.tracking_id || val;
            const fromCity = data.main.ship_from || 'Origin';
            const toCity = data.main.ship_to || 'Destination';

            document.getElementById('resLrNo').innerText = lrDisplay;
            document.getElementById('resCustomer').innerText = data.main.c_name || 'Valued Client';
            document.getElementById('resFrom').innerText = fromCity;
            document.getElementById('resTo').innerText = toCity;
            document.getElementById('resRouteFrom').innerText = fromCity;
            document.getElementById('resRouteTo').innerText = toCity;
            document.getElementById('resDeliveryDate').innerText = data.main.ex_del_date || 'In Transit';
            document.getElementById('resType').innerText = data.main.ship_type || 'Household Shifting';

            const timeline = document.getElementById('timelineList');
            timeline.innerHTML = '';

            if (data.timeline && data.timeline.length > 0) {
                data.timeline.forEach((step, idx) => {
                    const isLatest = (idx === data.timeline.length - 1);
                    const item = document.createElement('div');
                    item.className = 'pm-timeline-step';
                    item.innerHTML = `
                        <div class="pm-timeline-dot ${isLatest ? 'active' : ''}"></div>
                        <div class="pm-milestone-card">
                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-2">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge ${isLatest ? 'bg-danger' : 'bg-secondary'} rounded-pill px-2 py-1 small">
                                        ${isLatest ? '<i class="bi bi-geo-alt-fill me-1"></i> Current Hub' : '<i class="bi bi-check2 me-1"></i> Checkpoint'}
                                    </span>
                                    <strong class="text-dark fs-6">${step.place ? escapeHtml(step.place) : 'Regional Distribution Hub'}</strong>
                                </div>
                                <span class="badge bg-white text-secondary border shadow-sm px-3 py-1 rounded-pill small">
                                    <i class="bi bi-clock me-1 text-danger"></i> ${step.date ? escapeHtml(step.date) : ''} ${step.time ? escapeHtml(step.time) : ''}
                                </span>
                            </div>
                            <p class="text-muted small mb-2">${step.remarks ? escapeHtml(step.remarks) : 'Consignment verified, weighed, and cleared for onwards transit.'}</p>
                            <div class="d-flex align-items-center gap-3 pt-2 border-top text-muted small">
                                <span class="text-success small fw-semibold"><i class="bi bi-patch-check-fill me-1"></i> Scan Verified</span>
                                <span>&bull;</span>
                                <span class="small"><i class="bi bi-shield-check me-1 text-warning"></i> Seal Intact</span>
                            </div>
                        </div>
                    `;
                    timeline.appendChild(item);
                });
            } else {
                timeline.innerHTML = '<p class="text-muted small mb-0">Record found in dispatch registry. Checkpoint updates will appear here once hub scans occur.</p>';
            }

            resultBox.classList.remove('d-none');
            resultBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        } else {
            errorMsg.innerText = data.message || 'Tracking number not found.';
            errorBox.classList.remove('d-none');
        }
    })
    .catch(err => {
        loader.classList.add('d-none');
        btn.disabled = false;
        errorMsg.innerText = 'Unable to fetch tracking details. Please verify your connection and try again.';
        errorBox.classList.remove('d-none');
    });
}
</script>
