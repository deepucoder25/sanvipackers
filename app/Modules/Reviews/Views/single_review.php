<?php 
$r = $review; 
$starsCount = (int) ($r->stars ?? 5);
$pDate = !empty($r->posted_date) ? date('M d, Y', strtotime($r->posted_date)) : '';
$photos = !empty($r->r_img) ? explode(',', $r->r_img) : [];
?>
<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Customer Review',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Reviews', 'url' => site_url('reviews')],
        ['title' => 'Review Details'],
    ],
]) ?>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="pm-review-detail-card p-4 p-md-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="rating text-warning fs-5">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <i class="bi bi-star<?= ($i <= $starsCount) ? '-fill' : '' ?>"></i>
                            <?php endfor; ?>
                        </div>
                        <span class="text-muted small"><?= esc($pDate) ?></span>
                    </div>

                    <?php if (!empty($r->r_title) || !empty($r->city)): ?>
                        <span class="pm-review-city-chip mb-3">
                            <i class="bi bi-geo-alt-fill text-danger me-1"></i> <?= esc($r->city ?: $r->r_title) ?>
                        </span>
                    <?php endif; ?>

                    <p class="fs-5 text-secondary lh-lg mb-4">
                        "<?= nl2br(esc($r->r_desc ?? '')) ?>"
                    </p>

                    <?php if (!empty($photos)): ?>
                        <div class="d-flex gap-3 mb-4 flex-wrap">
                            <?php foreach ($photos as $ph): ?>
                                <?php if (!empty(trim($ph))): ?>
                                    <img src="<?= base_url(trim($ph)) ?>" class="rounded-3 border shadow-sm pm-review-detail-img" alt="Review photo">
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <div class="pt-4 border-top d-flex justify-content-between align-items-center flex-wrap gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="pm-review-avatar-lg">
                                <?= strtoupper(substr($r->name ?? 'C', 0, 1)) ?>
                            </div>
                            <div>
                                <strong class="d-block fw-bold text-dark fs-6"><?= esc($r->name ?? 'Customer') ?></strong>
                                <span class="pm-review-verified-pill"><i class="bi bi-patch-check-fill text-success"></i> Verified Move</span>
                            </div>
                        </div>
                        <a href="<?= site_url('reviews') ?>" class="pm-btn-red" title="View All Reviews">
                            <i class="bi bi-arrow-left me-1"></i> View All Reviews
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
