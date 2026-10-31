<?php
$faqs = [
    [
        'q' => 'How are moving charges calculated? Are there any hidden costs?',
        'a' => 'Our pricing is 100% upfront and transparent with zero hidden fees. Estimates are based on total volume of goods, transport distance between origin and destination, packaging tier (5-layer bubble wrap, foam, crates), floor levels, and optional transit insurance. You receive a guaranteed written quote before booking.',
    ],
    [
        'q' => 'Is comprehensive transit insurance provided for all my goods?',
        'a' => 'Yes, we provide 100% comprehensive all-India transit insurance covering unforeseen physical loss, road mishaps, or transit damage during intercity and intracity relocation. In the rare event of a claim, our dedicated claims desk facilitates fast documentation and settlement.',
    ],
    [
        'q' => 'How many days in advance should I book my relocation?',
        'a' => 'For local within-city shifting, we suggest booking 2 to 3 days in advance. For intercity long-distance relocations, booking 5 to 7 days ahead guarantees dedicated container trailer reservation and your preferred loading time slot.',
    ],
    [
        'q' => 'What packing materials are used for delicate glassware and TVs?',
        'a' => 'We utilize heavy-duty 5-layer certified bubble wrap, corrugated sheets, edge protectors, and specialized wooden crates for large LED TVs, glass dining tables, and delicate artworks. Every fragile box is marked with bright red fragile tags and loaded with hydraulic cushioning.',
    ],
    [
        'q' => 'Can you transport my car or two-wheeler safely across cities?',
        'a' => 'Yes! We operate specialized enclosed multi-car carrier trailers and custom bike crating systems. Every vehicle undergoes a detailed pre-loading inspection report (with photos and odometer reading) and is securely strapped with wheel stoppers during highway transit.',
    ],
    [
        'q' => 'What items are restricted or cannot be loaded into the moving truck?',
        'a' => 'For safety and regulatory compliance, we do not transport flammable liquids, gas cylinders (unless completely emptied and certified), hazardous chemicals, jewellery, liquid cash, and perishable foodstuffs. Our survey team provides a complete pre-move safety checklist.',
    ],
];
?>

<section class="py-5 pm-faqs-section position-relative">
    <div class="container py-lg-4">
        <div class="row">
            <!-- Left Column: Section Header & Side Help Card -->
            <div class="col-lg-5 col-12">
                <div class="text-center text-lg-start mb-4">
                    <span class="badge px-3 py-2 rounded-pill text-uppercase mb-2 pm-service-badge">
                        <i class="bi bi-question-circle-fill me-1"></i> Got Questions?
                    </span>
                    <h2 class="display-7 fw-bold text-dark mb-3 pm-section-title">
                        Frequently Asked <span class="pm-text-red">Questions</span>
                    </h2>
                    <p class="lead text-muted mb-0 pm-section-subtitle">
                        Everything you need to know about our relocation process, transparent pricing, 5-layer packaging, and transit insurance.
                    </p>
                </div>

                <!-- Side Assistance Help Card (Concierge Support Hub) -->
                <div class="pm-faq-help-card text-center text-lg-start">
                    <!-- Top Live Badge & Response Time -->
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="badge rounded-pill pm-faq-live-tag">
                            <span class="pm-live-dot"></span> LIVE 24/7 HELPLINE
                        </span>
                        <span class="text-muted small">
                            <i class="bi bi-clock-history me-1"></i> Fast Reply
                        </span>
                    </div>

                    <!-- Avatar & Title in One Row -->
                    <div class="d-flex align-items-center gap-3 mb-3 text-start">
                        <div class="pm-faq-avatar-wrap flex-shrink-0">
                            <div class="pm-faq-avatar-icon">
                                <i class="bi bi-headset"></i>
                            </div>
                            <span class="pm-online-status-dot"></span>
                        </div>
                        <h3 class="h5 fw-bold mb-0">Need Instant Moving Help?</h3>
                    </div>
                    <p class="text-muted small mb-3">
                        Skip reading &mdash; talk directly to our senior shifting coordinator for instant custom pricing and free survey scheduling.
                    </p>

                    <!-- Action Row: Call Box & Quote Button in One Row -->
                    <div class="pm-faq-action-row mb-3">
                        <!-- Direct Call Box -->
                        <a href="tel:<?= esc($phone1 ?? '+919876543210') ?>" class="pm-help-call-box" aria-label="Call moving direct helpline at <?= esc($phone1 ?? '+91 98765 43210') ?>">
                            <div class="pm-help-call-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="text-start">
                                <div class="pm-help-call-label text-uppercase">Direct Line</div>
                                <div class="pm-help-call-number"><?= esc($phone1 ?? '+91 98765 43210') ?></div>
                            </div>
                        </a>

                        <!-- Primary Quote Button -->
                        <button type="button" class="btn btn-danger pm-help-quote-btn" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <div class="d-flex flex-column align-items-center justify-content-center text-center">
                                <span class="pm-help-quote-label text-uppercase">Instant Survey</span>
                                <span class="pm-help-quote-text">Get Free Quote <i class="bi bi-arrow-right ms-1"></i></span>
                            </div>
                        </button>
                    </div>

                    <!-- Micro Guarantee Checklist -->
                    <div class="pm-help-checklist d-flex flex-column gap-2">
                        <div class="pm-help-check-item">
                            <i class="bi bi-check-circle-fill text-danger"></i>
                            <span>100% Free Doorstep Survey</span>
                        </div>
                        <div class="pm-help-check-item">
                            <i class="bi bi-check-circle-fill text-warning"></i>
                            <span>Zero Hidden Charges Guarantee</span>
                        </div>
                        <div class="pm-help-check-item">
                            <i class="bi bi-check-circle-fill text-success"></i>
                            <span>All-India Comprehensive Insurance</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Bootstrap Accordion -->
            <div class="col-lg-7 col-12">
                <div class="accordion pm-faq-accordion" id="pmFaqAccordion">
                    <?php foreach ($faqs as $idx => $f): ?>
                        <?php
                        $collapseId = 'pmFaqCollapse' . ($idx + 1);
                        $isOpen = ($idx === 0);
                        ?>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="pmFaqHeading<?= $idx + 1 ?>">
                                <button class="accordion-button <?= $isOpen ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>" aria-expanded="<?= $isOpen ? 'true' : 'false' ?>" aria-controls="<?= $collapseId ?>">
                                    <span class="pm-faq-num">0<?= $idx + 1 ?></span>
                                    <span><?= esc($f['q']) ?></span>
                                </button>
                            </h3>
                            <div id="<?= $collapseId ?>" class="accordion-collapse collapse <?= $isOpen ? 'show' : '' ?>" aria-labelledby="pmFaqHeading<?= $idx + 1 ?>" data-bs-parent="#pmFaqAccordion">
                                <div class="accordion-body">
                                    <?= esc($f['a']) ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

