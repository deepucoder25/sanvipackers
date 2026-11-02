<?php
$helplinePhone = $phone ?? ($comp['phone'] ?? ($site->phone ?? '+91 70217 10594'));
$cleanPhone    = preg_replace('/[^0-9]/', '', $helplinePhone);
$whatsappNum   = $whatsapp ?? ($comp['whatsapp'] ?? ($site->whatsapp ?? '7021710594'));
$cleanWhatsapp = preg_replace('/[^0-9]/', '', $whatsappNum);
?>

<!-- Need Moving Assistance? (Branded CTA Card) -->
<div class="pm-sidebar-cta-card p-4 p-md-4 mb-4 text-center">
    <span class="badge px-3 py-1 rounded-pill text-uppercase mb-2 pm-srv-hero-badge">
        <i class="bi bi-shield-check me-1"></i> 100% Insured Moves
    </span>
    <h3 class="h5 fw-bold text-white mb-2">Need A Moving Quote?</h3>
    <p class="small text-white-50 mb-3 text-white">
        Speak with our move coordinator or chat on WhatsApp for customized rates.
    </p>

    <!-- 24/7 Phone Chip -->
    <a href="tel:<?= esc($cleanPhone) ?>" class="pm-sidebar-cta-phone mb-3">
        <i class="bi bi-telephone-fill text-warning"></i>
        <span><?= esc($helplinePhone) ?></span>
    </a>

    <!-- WhatsApp CTA -->
    <a href="https://wa.me/<?= esc($cleanWhatsapp) ?>?text=<?= urlencode('Hello Sanvi Packers, I need a moving quote.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill w-100 py-2 fw-bold d-flex align-items-center justify-content-center gap-2 mb-2">
        <i class="bi bi-whatsapp"></i>
        <span>WhatsApp Instant Quote</span>
    </a>

    <!-- Modal Trigger -->
    <button type="button" class="btn btn-outline-light rounded-pill w-100 py-2 fw-bold small" data-bs-toggle="modal" data-bs-target="#qteModal">
        <i class="bi bi-calculator-fill me-1"></i> Calculate Quote Online
    </button>
</div>
