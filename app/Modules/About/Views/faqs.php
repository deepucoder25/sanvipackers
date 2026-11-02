<?php
$companyName   = esc($company3 ?? ($site->name ?? 'Sanvi Packers & Movers'));
$helplinePhone = $phone ?? '+91 70217 10594';
$cleanPhone    = preg_replace('/[^0-9]/', '', $helplinePhone);
$phoneHref     = !empty($phonehtml) ? $phonehtml : 'href="tel:+' . esc($cleanPhone) . '"';

$faqs = [
    [
        'category' => 'Pricing & Estimates',
        'q'        => 'How are moving charges calculated? Are there any hidden costs?',
        'a'        => 'Our shifting charges are 100% upfront and transparent with zero hidden costs. The exact quotation is based on total cargo volume, moving distance between origin and destination cities, floor levels and elevator availability, packaging tier (3-layer or heavy 5-layer foam & bubble), and transit insurance coverage. You receive a guaranteed written invoice before pickup.',
    ],
    [
        'category' => 'Transit & Insurance',
        'q'        => 'Is comprehensive transit insurance provided for all my goods?',
        'a'        => 'Yes, ' . $companyName . ' provides 100% comprehensive all-India transit insurance covering unforeseen physical loss, road mishaps, or transit damage during intercity and intracity relocation. In the rare event of damage, our dedicated claims desk facilitates swift cashless settlement assistance.',
    ],
    [
        'category' => 'Booking & Scheduling',
        'q'        => 'How many days in advance should I book my relocation?',
        'a'        => 'For local within-city shifting, we suggest booking 2 to 3 days in advance. For intercity long-distance moves, booking 5 to 7 days ahead guarantees dedicated closed-body container trailer reservation and your preferred loading time slot.',
    ],
    [
        'category' => 'Packing & Safety',
        'q'        => 'What packing materials are used for delicate glassware, electronics, and LED TVs?',
        'a'        => 'We utilize heavy-duty 5-layer certified bubble wrap, corrugated sheets, foam rolls, edge protectors, and specialized wooden crates for large LED TVs, glass dining tables, and delicate artworks. Every fragile box is marked with bright red warning tags and loaded with hydraulic cushioning.',
    ],
    [
        'category' => 'Vehicle Transport',
        'q'        => 'Can you relocate cars and two-wheelers safely across cities?',
        'a'        => 'Yes! We operate specialized enclosed multi-car carrier trailers and custom bike crating systems. Every vehicle undergoes a detailed pre-loading inspection report (with photos and odometer reading) and is securely strapped with wheel stoppers during highway transit.',
    ],
    [
        'category' => 'Safety & Compliance',
        'q'        => 'What items are restricted or cannot be loaded into the moving truck?',
        'a'        => 'For safety and regulatory compliance, we do not transport flammable liquids, gas cylinders (unless completely emptied and certified), hazardous chemicals, jewellery, physical cash, and perishable foodstuffs. Our survey team provides a complete pre-move safety checklist.',
    ],
    [
        'category' => 'Live Tracking',
        'q'        => 'How can I track the live location of my moving container?',
        'a'        => 'All long-distance moving trucks in our fleet are equipped with real-time GPS tracking. Once your goods are dispatched, your dedicated move supervisor shares live location updates and milestone alerts via WhatsApp until delivery.',
    ],
    [
        'category' => 'Unpacking & Setup',
        'q'        => 'Do you provide doorstep unpacking and furniture re-assembly?',
        'a'        => 'Yes! Our comprehensive door-to-door shifting service includes unloading, unpacking delicate items, assembling dismantled beds/wardrobes, and placing heavy furniture in your designated rooms. We also remove all packing debris.',
    ],
];
?>

<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Frequently Asked Questions (FAQs)',
    'subtitle'    => 'Instant answers to common queries regarding moving charges, 5-layer packing, insurance, and vehicle transport.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'FAQs'],
    ],
]) ?>

<div class="pm-faqs-page-wrap">
    <div class="container">
        <div class="row g-4 g-lg-5 mb-5">
            <!-- Left Column: Sticky Support Concierge Card -->
            <div class="col-lg-4 col-12 pm-faq-sidebar-col">
                <div class="pm-faq-help-card">
                    <!-- Live Status Badge -->
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <span class="badge rounded-pill pm-faq-live-tag">
                            <span class="pm-live-dot"></span> LIVE 24/7 HELPLINE
                        </span>
                        <span class="text-muted small">
                            <i class="bi bi-clock-history me-1" aria-hidden="true"></i> Fast Reply
                        </span>
                    </div>

                    <!-- Header -->
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="pm-faq-avatar-wrap flex-shrink-0">
                            <div class="pm-faq-avatar-icon" aria-hidden="true">
                                <i class="bi bi-headset"></i>
                            </div>
                            <span class="pm-online-status-dot"></span>
                        </div>
                        <div>
                            <h2 class="h5 fw-bold mb-0 text-dark">Need Moving Advice?</h2>
                            <span class="text-muted small">Direct Coordinator Support</span>
                        </div>
                    </div>

                    <p class="text-muted small mb-3">
                        Skip reading &mdash; talk directly to our senior relocation supervisor for personalized price quotes and free survey scheduling.
                    </p>

                    <!-- Direct Action Buttons -->
                    <div class="pm-faq-concierge-actions">
                        <a <?= $phoneHref ?> class="pm-btn-red" title="Call Now" aria-label="Call Now">
                            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                            <span class="d-none d-md-inline">Call <?= esc($helplinePhone) ?></span>
                            <span class="d-md-none">Call Now</span>
                        </a>
                        <a href="https://wa.me/<?= esc($cleanPhone) ?>" target="_blank" rel="noopener noreferrer" class="pm-btn-whatsapp-pill" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                            <i class="bi bi-whatsapp" aria-hidden="true"></i>
                            <span class="d-none d-md-inline">Chat on WhatsApp</span>
                            <span class="d-md-none">WhatsApp</span>
                        </a>
                    </div>

                    <!-- Trust Checklist -->
                    <div class="pm-help-checklist d-flex flex-column gap-2 pt-2 border-top">
                        <div class="pm-help-check-item">
                            <i class="bi bi-check-circle-fill text-danger" aria-hidden="true"></i>
                            <span>100% Free Doorstep Survey</span>
                        </div>
                        <div class="pm-help-check-item">
                            <i class="bi bi-check-circle-fill text-warning" aria-hidden="true"></i>
                            <span>Zero Hidden Charges Guarantee</span>
                        </div>
                        <div class="pm-help-check-item">
                            <i class="bi bi-check-circle-fill text-success" aria-hidden="true"></i>
                            <span>All-India Transit Insurance</span>
                        </div>
                        <div class="pm-help-check-item">
                            <i class="bi bi-check-circle-fill text-danger" aria-hidden="true"></i>
                            <span>ISO 9001:2015 Certified Movers</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Interactive Accordion -->
            <div class="col-lg-8 col-12">
                <div class="pm-faq-card-container">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                        <div>
                            <span class="section-badge mb-1">
                                <i class="bi bi-question-circle-fill"></i> Clear &amp; Transparent
                            </span>
                            <h2 class="section-title mb-0">Answers to Common Relocation Queries</h2>
                        </div>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill small">
                            <?= count($faqs) ?> Answered Questions
                        </span>
                    </div>

                    <p class="text-muted small mb-4">
                        Click on any question below to see detailed information regarding our pricing structure, 5-layer packing materials, delivery timelines, and transit insurance policies.
                    </p>

                    <!-- Bootstrap Accordion -->
                    <div class="accordion pm-faq-accordion" id="pmFaqAccordion">
                        <?php foreach ($faqs as $idx => $f): ?>
                            <?php
                            $collapseId = 'pmFaqCollapse' . ($idx + 1);
                            $isOpen = ($idx === 0);
                            $numFormatted = str_pad($idx + 1, 2, '0', STR_PAD_LEFT);
                            ?>
                            <div class="accordion-item">
                                <h3 class="accordion-header" id="pmFaqHeading<?= $idx + 1 ?>">
                                    <button class="accordion-button <?= $isOpen ? '' : 'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?= $collapseId ?>" aria-expanded="<?= $isOpen ? 'true' : 'false' ?>" aria-controls="<?= $collapseId ?>">
                                        <span class="pm-faq-num"><?= $numFormatted ?></span>
                                        <span><?= esc($f['q']) ?></span>
                                        <span class="pm-faq-cat-pill"><?= esc($f['category']) ?></span>
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

        <!-- Bottom Action Banner (CTA) -->
        <div class="pm-about-cta-banner">
            <div class="row align-items-center g-4 position-relative z-2">
                <div class="col-lg-7">
                    <h2 class="pm-about-cta-title">Have a Specific Moving Question?</h2>
                    <p class="pm-about-cta-desc">
                        Our relocation specialists are available round the clock to discuss inventory, route checkpoints, and custom wooden crating.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="pm-about-cta-actions justify-content-lg-end">
                        <a <?= $phoneHref ?> class="pm-btn-red" title="Call Now" aria-label="Call Now">
                            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                            <span class="d-none d-md-inline">Call <?= esc($helplinePhone) ?></span>
                            <span class="d-md-none">Call Now</span>
                        </a>
                        <a href="https://wa.me/<?= esc($cleanPhone) ?>" target="_blank" rel="noopener noreferrer" class="pm-btn-whatsapp-pill" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                            <i class="bi bi-whatsapp" aria-hidden="true"></i>
                            <span class="d-none d-md-inline">Chat on WhatsApp</span>
                            <span class="d-md-none">WhatsApp</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
