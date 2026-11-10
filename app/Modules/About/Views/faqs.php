<?php

$faqs = [
    [
        'category' => 'Services',
        'q'        => 'Which are the relocation services offered by Sanvi Packers and Movers?',
        'a'        => 'Sanvi Packers and Movers provides relocation services for household shifting, office relocation, car and bike transportation, warehousing, packing and moving, and loading and unloading. The requirements can be discussed to arrange suitable shifting services.',
    ],
    [
        'category' => 'Certifications',
        'q'        => 'Is Sanvi Packers and Movers a certified company?',
        'a'        => 'Yes, Sanvi Packers and Movers is ISO 9001:2015 Certified and IBA Approved relocation company. Organized relocation processes and professional moving assistance is ensured by our team.',
    ],
    [
        'category' => 'Coverage',
        'q'        => 'Do Sanvi Packers and Movers provide relocation services throughout India?',
        'a'        => 'Yes, our relocation services cover more than 500 cities across India. The customers can get assistance for local or inter-city shifting services, depending on the destination and availability.',
    ],
    [
        'category' => 'Packing & Safety',
        'q'        => 'How do you pack belongings for transportation?',
        'a'        => 'Depending on the nature of the goods, various packing materials will be used. These may be multi-layer bubble sheets, cardboard boxes, protective wrapping materials, and suitable cartons. The fragile items, electronic appliances and furniture will be appropriately packed prior to the process of loading.',
    ],
    [
        'category' => 'Equipment',
        'q'        => 'How do you move heavy furniture and household appliances?',
        'a'        => 'Our moving team uses heavy mechanical dollies, ramps and appliance harness straps for moving the bulky items. Suitable practices are followed while lifting and handling the belongings and property to avoid damage.',
    ],
    [
        'category' => 'Tracking',
        'q'        => 'Can I track my shipment during transportation?',
        'a'        => 'Yes, GPS live tracking facility is provided to update the customers regarding the status of their shipment during transportation. Coordinate with the moving team for relevant information.',
    ],
    [
        'category' => 'Transit Insurance',
        'q'        => 'Do Sanvi Packers and Movers provide transit insurance?',
        'a'        => 'Yes, transit insurance is offered to customers for getting extra protection against the risk involved during transportation. The insurance policy can be discussed prior to the relocation.',
    ],
    [
        'category' => 'Vehicle Moving',
        'q'        => 'Do you provide car and bike transportation services?',
        'a'        => 'Yes, our relocation team provides car and bike shifting services for customers moving from one city to another city. The vehicle transportation is carried out using the suitable transportation means.',
    ],
    [
        'category' => 'Warehousing',
        'q'        => 'Can I store my belongings before moving to the new place?',
        'a'        => 'Yes, we have warehousing facilities for customers needing storage of belongings for a certain period before final relocation or delivery. Contact our team to know about storage and other details.',
    ],
    [
        'category' => 'Pricing',
        'q'        => 'What factors affect the cost of hiring packers and movers?',
        'a'        => 'There are various factors such as quantity of goods, size of home or office, distance between locations, packing materials, labor and additional services which determine the cost of relocation. Informing us with the details help to prepare a suitable quotation.',
    ],
    [
        'category' => 'Booking',
        'q'        => 'How far ahead should I book packers and movers for the shifting date?',
        'a'        => 'We suggest our customers contact us at least 5-7 days before the shifting date. This will give us sufficient time to plan transportation and arrange other things required for the same. Early booking is suggested especially during peak seasons.',
    ],
    [
        'category' => 'Booking Process',
        'q'        => 'How do I book Sanvi Packers and Movers for the shifting services?',
        'a'        => 'You can reach out to Sanvi Packers and Movers either from our website or through the customer support desk. You need to communicate the location where you currently are, where you would like to shift, the date of shifting and the number of the items you want to move.',
    ],
];
?>

<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Frequently Asked Questions (FAQs)',
    'subtitle'    => 'Get instant answers to all common questions about Sanvi Packers and Movers relocation services, pricing, packing, and booking.',
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
                        Skip reading &mdash; talk directly to our senior relocation supervisor for personalized price quotes and free moving consultation.
                    </p>

                    <!-- Direct Action Buttons -->
                    <div class="pm-faq-concierge-actions">
                        <a <?= $phonehtml ?> class="pm-btn-red" title="Call Now" aria-label="Call Now">
                            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                            <span class="d-none d-md-inline">Call <?= esc($phone ?? '+91 99304 44433') ?></span>
                            <span class="d-md-none">Call Now</span>
                        </a>
                        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="pm-btn-whatsapp-pill" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                            <i class="bi bi-whatsapp" aria-hidden="true"></i>
                            <span class="d-none d-md-inline">Chat on WhatsApp</span>
                            <span class="d-md-none">WhatsApp</span>
                        </a>
                    </div>

                    <!-- Trust Checklist -->
                    <div class="pm-help-checklist d-flex flex-column gap-2 pt-2 border-top">
                        <div class="pm-help-check-item">
                            <i class="bi bi-patch-check-fill text-danger" aria-hidden="true"></i>
                            <span>ISO 9001:2015 &amp; IBA Approved</span>
                        </div>
                        <div class="pm-help-check-item">
                            <i class="bi bi-shield-fill-check text-warning" aria-hidden="true"></i>
                            <span>Transit Insurance Options</span>
                        </div>
                        <div class="pm-help-check-item">
                            <i class="bi bi-geo-alt-fill text-success" aria-hidden="true"></i>
                            <span>500+ Indian Cities Network</span>
                        </div>
                        <div class="pm-help-check-item">
                            <i class="bi bi-truck text-danger" aria-hidden="true"></i>
                            <span>GPS Live Fleet Tracking</span>
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
                            <h2 class="section-title mb-0">Frequently Asked Questions</h2>
                        </div>
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill small fw-bold">
                            <?= count($faqs) ?> Answered Questions
                        </span>
                    </div>

                    <p class="text-muted small mb-4">
                        Find answers to common questions about our packing materials, safety measures, vehicle shifting, pricing factors, and booking procedures with Sanvi Packers and Movers.
                    </p>

                    <!-- Bootstrap Accordion with Semantic H3 Headers -->
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
                        Our relocation specialists are available round the clock to discuss inventory, shifting dates, route checkpoints, and custom packing requirements.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="pm-about-cta-actions justify-content-lg-end">
                        <a <?= $phonehtml ?> class="pm-btn-red" title="Call Now" aria-label="Call Now">
                            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                            <span class="d-none d-md-inline">Call <?= esc($phone ?? '+91 99304 44433') ?></span>
                            <span class="d-md-none">Call Now</span>
                        </a>
                        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="pm-btn-whatsapp-pill" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
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

<!-- SEO Schema.org FAQPage Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php foreach ($faqs as $i => $item): ?>
    {
      "@type": "Question",
      "name": <?= json_encode($item['q']) ?>,
      "acceptedAnswer": {
        "@type": "Answer",
        "text": <?= json_encode($item['a']) ?>
      }
    }<?= ($i < count($faqs) - 1) ? ',' : '' ?>
    <?php endforeach; ?>
  ]
}
</script>
