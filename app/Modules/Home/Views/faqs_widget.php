<?php
$faqs = [
    [
        'q' => 'Which are the relocation services offered by Sanvi Packers and Movers?',
        'a' => 'Sanvi Packers and Movers provides relocation services for household shifting, office relocation, car and bike transportation, warehousing, packing and moving, and loading and unloading. The requirements can be discussed to arrange suitable shifting services.',
    ],
    [
        'q' => 'Is Sanvi Packers and Movers a certified company?',
        'a' => 'Yes, Sanvi Packers and Movers is ISO 9001:2015 Certified and IBA Approved relocation company. Organized relocation processes and professional moving assistance is ensured by our team.',
    ],
    [
        'q' => 'Do Sanvi Packers and Movers provide relocation services throughout India?',
        'a' => 'Yes, our relocation services cover more than 500 cities across India. The customers can get assistance for local or inter-city shifting services, depending on the destination and availability.',
    ],
    [
        'q' => 'How do you pack belongings for transportation?',
        'a' => 'Depending on the nature of the goods, various packing materials will be used. These may be multi-layer bubble sheets, cardboard boxes, protective wrapping materials, and suitable cartons. The fragile items, electronic appliances and furniture will be appropriately packed prior to the process of loading.',
    ],
    [
        'q' => 'How do you move heavy furniture and household appliances?',
        'a' => 'Our moving team uses heavy mechanical dollies, ramps and appliance harness straps for moving the bulky items. Suitable practices are followed while lifting and handling the belongings and property to avoid damage.',
    ],
    [
        'q' => 'Can I track my shipment during transportation?',
        'a' => 'Yes, GPS live tracking facility is provided to update the customers regarding the status of their shipment during transportation. Coordinate with the moving team for relevant information.',
    ],
    [
        'q' => 'Do Sanvi Packers and Movers provide transit insurance?',
        'a' => 'Yes, transit insurance is offered to customers for getting extra protection against the risk involved during transportation. The insurance policy can be discussed prior to the relocation.',
    ],
    [
        'q' => 'What factors affect the cost of hiring packers and movers?',
        'a' => 'There are various factors such as quantity of goods, size of home or office, distance between locations, packing materials, labor and additional services which determine the cost of relocation. Informing us with the details help to prepare a suitable quotation.',
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
                        Everything you need to know about our relocation process, transparent pricing, multi-layer packaging, and transit insurance.
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
                        <a <?= $phonehtml ?> class="pm-help-call-box" aria-label="Call moving direct helpline at <?= $phone ?>">
                            <div class="pm-help-call-icon">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="text-start">
                                <div class="pm-help-call-label text-uppercase">Direct Line</div>
                                <div class="pm-help-call-number"><?= $phone ?></div>
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

