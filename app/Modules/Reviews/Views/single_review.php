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
        ['title' => 'Customer Testimonial'],
    ],
]) ?>

<section class="section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="rating text-warning fs-5">
                            <?php for ($i = 1; $i <= 5; $i++): ?>
                                <i class="bi bi-star<?= ($i <= $starsCount) ? '-fill' : '' ?>"></i>
                            <?php endfor; ?>
                        </div>
                        <span class="text-muted small"><?= esc($pDate) ?></span>
                    </div>

                    <?php if (!empty($r->r_title) || !empty($r->city)): ?>
                        <h4 class="fw-bold text-primary mb-3">
                            <i class="bi bi-geo-alt-fill me-1"></i> <?= esc($r->city ?: $r->r_title) ?>
                        </h4>
                    <?php endif; ?>

                    <p class="fs-5 text-secondary lh-lg mb-4">
                        "<?= nl2br(esc($r->r_desc ?? '')) ?>"
                    </p>

                    <?php if (!empty($photos)): ?>
                        <div class="d-flex gap-3 mb-4 flex-wrap">
                            <?php foreach ($photos as $ph): ?>
                                <?php if (!empty(trim($ph))): ?>
                                    <img src="<?= base_url(trim($ph)) ?>" class="rounded-3 border shadow-sm" style="max-width: 140px; height: 100px; object-fit: cover;" alt="Review photo">
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <div class="pt-4 border-top d-flex justify-content-between align-items-center flex-wrap gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-primary-subtle text-primary d-flex align-items-center justify-content-center fw-bold fs-5" style="width: 48px; height: 48px;">
                                <?= strtoupper(substr($r->name ?? 'C', 0, 1)) ?>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark"><?= esc($r->name ?? 'Customer') ?></h6>
                                <span class="text-muted small">Verified Client</span>
                            </div>
                        </div>
                        <a href="<?= site_url('reviews') ?>" class="btn btn-outline-primary rounded-pill">
                            <i class="bi bi-arrow-left me-1"></i> View All Reviews
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
