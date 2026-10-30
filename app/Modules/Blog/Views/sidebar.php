<div class="card border-0 shadow-sm rounded-4 p-4 mb-4 bg-primary text-white">
    <h5 class="fw-bold fs-5 mb-2">Have Questions?</h5>
    <p class="small opacity-75 mb-3">Feel free to reach out to our team for any assistance or inquiries.</p>
    <?php if (!empty($phone)): ?>
        <a href="tel:<?= preg_replace('/[^0-9+]/', '', $phone) ?>" class="btn btn-light fw-bold text-primary w-100 mb-2">
            <i class="bi bi-telephone-fill me-1"></i> <?= esc($phone) ?>
        </a>
    <?php endif; ?>
    <a href="<?= site_url('contact') ?>" class="btn btn-outline-light w-100">
        <i class="bi bi-envelope-fill me-1"></i> Contact Us
    </a>
</div>
