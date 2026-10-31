<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Customer Reviews & Ratings',
    'subtitle'    => 'Read verified feedback and ratings from our customers.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Reviews'],
    ],
]) ?>

<section class="section" id="reviewsContainer">
    <div class="container">
        <!-- Header & Action Row -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 pb-3 mb-4 border-bottom">
            <div>
                <h2 class="fw-bold fs-3 mb-1"><i class="bi bi-chat-quote-fill text-primary me-2"></i> Client Feedback</h2>
                <p class="text-muted small mb-0">Showing verified customer feedback and star ratings.</p>
            </div>
            <button class="btn btn-primary rounded-pill px-4 fw-bold shadow-sm" data-bs-toggle="modal" data-bs-target="#reviewModal">
                <i class="bi bi-pencil-square me-1"></i> Write a Review
            </button>
        </div>

        <!-- Star Filter Tabs (Instant switching without page reload) -->
        <div class="d-flex flex-wrap gap-2 mb-4">
            <button type="button" class="btn btn-sm rounded-pill star-tab-btn <?= empty($star_filter) ? 'btn-primary active' : 'btn-light border' ?>" data-star="all" onclick="filterReviewsTab('all', this)">
                All Reviews
            </button>
            <?php for ($s = 5; $s >= 1; $s--): ?>
                <button type="button" class="btn btn-sm rounded-pill star-tab-btn <?= ($star_filter == $s) ? 'btn-primary active' : 'btn-light border' ?>" data-star="<?= $s ?>" onclick="filterReviewsTab(<?= $s ?>, this)">
                    <?= $s ?> <i class="bi bi-star-fill text-warning"></i>
                </button>
            <?php endfor; ?>
        </div>

        <!-- Live Page Success Alert (shown without page reload) -->
        <div id="pageSuccessAlert" class="alert alert-success alert-dismissible fade show rounded-3 d-none" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i><span id="pageSuccessText">Thank you! Your review has been submitted successfully.</span>
            <button type="button" class="btn-close" onclick="document.getElementById('pageSuccessAlert').classList.add('d-none')" aria-label="Close"></button>
        </div>

        <!-- Alerts from PHP Flashdata if any -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show rounded-3" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i><?= esc(session()->getFlashdata('success')) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show rounded-3" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i><?= esc(session()->getFlashdata('error')) ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- Empty state for filtered tabs -->
        <div id="noReviewsMatch" class="alert alert-info text-center py-5 rounded-4 d-none">
            <i class="bi bi-star fs-1 d-block mb-2 text-warning"></i>
            <h4 class="fw-bold">No Reviews In This Rating</h4>
            <p class="text-muted mb-3">Be the first to share your experience with this rating.</p>
            <button class="btn btn-primary rounded-pill px-4 fw-bold" data-bs-toggle="modal" data-bs-target="#reviewModal">
                Write a Review
            </button>
        </div>

        <!-- Reviews Grid -->
        <div class="row g-4" id="reviewsList">
            <?php if (!empty($reviews)): ?>
                <?php foreach ($reviews as $r): 
                    $starsCount = (int) ($r->stars ?? 5);
                    $pDate = !empty($r->posted_date) ? date('M d, Y', strtotime($r->posted_date)) : '';
                    
                    // Mask email
                    $maskedEmail = '';
                    if (!empty($r->email)) {
                        $parts = explode('@', $r->email);
                        $userPart = $parts[0];
                        $domainPart = $parts[1] ?? '';
                        $len = strlen($userPart);
                        $maskedEmail = ($len > 3) 
                            ? substr($userPart, 0, 2) . str_repeat('*', $len - 3) . substr($userPart, -1) . '@' . $domainPart 
                            : '***@' . $domainPart;
                    }
                    
                    $photos = !empty($r->r_img) ? explode(',', $r->r_img) : [];
                ?>
                    <div class="col-lg-4 col-md-6 review-card-item" data-stars="<?= $starsCount ?>">
                        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 d-flex flex-column" itemprop="review" itemscope itemtype="https://schema.org/Review">
                            <meta itemprop="name" content="<?= esc($r->r_title ?: 'Customer Review') ?>" />
                            <div itemprop="itemReviewed" itemscope itemtype="https://schema.org/LocalBusiness">
                                <meta itemprop="name" content="<?= esc($company3 ?? '') ?>" />
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="rating text-warning fs-6" itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
                                    <meta itemprop="ratingValue" content="<?= $starsCount ?>" />
                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                        <i class="bi bi-star<?= ($i <= $starsCount) ? '-fill' : '' ?>"></i>
                                    <?php endfor; ?>
                                </div>
                                <span class="text-muted small"><?= esc($pDate) ?></span>
                            </div>

                            <?php if (!empty($r->r_title) || !empty($r->city)): ?>
                                <h6 class="fw-bold text-primary mb-2 fs-6">
                                    <i class="bi bi-geo-alt-fill me-1"></i> <?= esc($r->city ?: $r->r_title) ?>
                                </h6>
                            <?php endif; ?>

                            <p class="text-secondary small flex-grow-1 mb-3" itemprop="reviewBody">
                                "<?= nl2br(esc($r->r_desc ?? '')) ?>"
                            </p>

                            <?php if (!empty($photos)): ?>
                                <div class="d-flex gap-2 mb-3 overflow-hidden">
                                    <?php foreach ($photos as $ph): ?>
                                        <?php if (!empty(trim($ph))): ?>
                                            <img src="<?= base_url(trim($ph)) ?>" class="rounded-3 border" style="width: 55px; height: 55px; object-fit: cover;" alt="Review photo">
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <div class="pt-3 border-top d-flex align-items-center gap-2">
                                <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center fw-bold" style="width: 38px; height: 38px; font-size: 0.9rem;">
                                    <?= strtoupper(substr($r->name ?? 'C', 0, 1)) ?>
                                </div>
                                <div>
                                    <strong class="d-block text-dark small" itemprop="author" itemscope itemtype="https://schema.org/Person">
                                        <span itemprop="name"><?= esc($r->name ?? 'Customer') ?></span>
                                    </strong>
                                    <span class="text-muted small"><?= esc($maskedEmail) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-12" id="initialEmptyAlert">
                    <div class="alert alert-info text-center py-5 rounded-4">
                        <i class="bi bi-star fs-1 d-block mb-2 text-warning"></i>
                        <h4 class="fw-bold">No Reviews Yet</h4>
                        <p class="text-muted mb-3">Be the first to share your experience with us.</p>
                        <button class="btn btn-primary rounded-pill px-4 fw-bold" data-bs-toggle="modal" data-bs-target="#reviewModal">
                            Write a Review
                        </button>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Pagination -->
        <?php if ($total_rows > $per_page): ?>
            <div class="d-flex justify-content-center mt-5" id="reviewsPagination">
                <ul class="pagination">
                    <?php 
                    $totalPages = ceil($total_rows / $per_page);
                    for ($i = 0; $i < $totalPages; $i++): 
                        $currOffset = $i * $per_page;
                        $active = ($currOffset == $offset) ? 'active' : '';
                        $filterQuery = !empty($star_filter) ? ('&star=' . $star_filter) : '';
                    ?>
                        <li class="page-item <?= $active ?>">
                            <a class="page-link" href="<?= site_url('reviews?per_page=' . $currOffset . $filterQuery) ?>"><?= $i + 1 ?></a>
                        </li>
                    <?php endfor; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</section>

<?= view('Modules\Reviews\Views\reviewmodal') ?>

<script>
// Filter tabs without refreshing page
function filterReviewsTab(star, btnEl) {
    document.querySelectorAll('.star-tab-btn').forEach(b => {
        b.classList.remove('btn-primary', 'active');
        b.classList.add('btn-light', 'border');
    });
    if (btnEl) {
        btnEl.classList.remove('btn-light', 'border');
        btnEl.classList.add('btn-primary', 'active');
    }

    const items = document.querySelectorAll('.review-card-item');
    let visibleCount = 0;

    items.forEach(card => {
        const cardStar = card.getAttribute('data-stars');
        if (star === 'all' || cardStar === String(star)) {
            card.style.display = '';
            visibleCount++;
        } else {
            card.style.display = 'none';
        }
    });

    const emptyBox = document.getElementById('noReviewsMatch');
    const initialAlert = document.getElementById('initialEmptyAlert');
    if (initialAlert) initialAlert.classList.add('d-none');

    if (emptyBox) {
        if (visibleCount === 0) {
            emptyBox.classList.remove('d-none');
        } else {
            emptyBox.classList.add('d-none');
        }
    }

    const newUrl = (star === 'all') ? '<?= site_url('reviews') ?>' : ('<?= site_url('reviews') ?>?star=' + star);
    window.history.pushState({ star: star }, '', newUrl);
}

// Add newly submitted review without page reload
function prependReviewCard(r) {
    const list = document.getElementById('reviewsList');
    const emptyBox = document.getElementById('noReviewsMatch');
    const initialAlert = document.getElementById('initialEmptyAlert');
    if (emptyBox) emptyBox.classList.add('d-none');
    if (initialAlert) initialAlert.classList.add('d-none');

    const card = document.createElement('div');
    card.className = 'col-lg-4 col-md-6 review-card-item';
    card.setAttribute('data-stars', r.stars || 5);

    let starIcons = '';
    const starsCount = parseInt(r.stars) || 5;
    for (let i = 1; i <= 5; i++) {
        starIcons += `<i class="bi bi-star${i <= starsCount ? '-fill' : ''}"></i>`;
    }

    let maskedEmail = '';
    if (r.email) {
        const parts = r.email.split('@');
        const user = parts[0];
        const dom = parts[1] || '';
        maskedEmail = user.length > 3 ? (user.substr(0, 2) + '*'.repeat(user.length - 3) + user.slice(-1) + '@' + dom) : '***@' + dom;
    }

    const firstLetter = (r.name || 'C').charAt(0).toUpperCase();

    card.innerHTML = `
        <div class="card h-100 border-0 shadow-sm rounded-4 p-4 d-flex flex-column border-start border-4 border-success">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="rating text-warning fs-6">
                    ${starIcons}
                </div>
                <span class="badge bg-success-subtle text-success small">Just now</span>
            </div>

            ${r.city ? `<h6 class="fw-bold text-primary mb-2 fs-6"><i class="bi bi-geo-alt-fill me-1"></i> ${r.city}</h6>` : ''}

            <p class="text-secondary small flex-grow-1 mb-3">
                "${r.r_desc || ''}"
            </p>

            <div class="pt-3 border-top d-flex align-items-center gap-2">
                <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center fw-bold" style="width: 38px; height: 38px; font-size: 0.9rem;">
                    ${firstLetter}
                </div>
                <div>
                    <strong class="d-block text-dark small">${r.name || 'Customer'}</strong>
                    <span class="text-muted small">${maskedEmail}</span>
                </div>
            </div>
        </div>
    `;

    if (list) {
        list.prepend(card);
    }
}
</script>
