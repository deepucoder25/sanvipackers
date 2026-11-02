<?php
$allServicesList = $allServices ?? \Modules\Services\Controllers\Services::getServicesList();
// Filter out current service for the "Other Services" section
$otherServices = array_filter($allServicesList, fn($s) => ($s['slug'] ?? '') !== 'office-relocation');
?>

<!-- Dynamic Breadcrumb -->
<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Office Relocation Services',
    'subtitle'    => 'Minimal downtime workplace shifting, server racks handling, modular workstation relocation, and confidential files archiving.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Services', 'url' => site_url('services')],
        ['title' => 'Office Relocation'],
    ],
]) ?>

<div class="pm-srv-page-wrapper">

    <!-- 1. HERO SECTION -->
    <section class="pm-srv-hero-sec py-5">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill pm-srv-pill-badge mb-3">
                        <i class="bi bi-briefcase-fill text-danger"></i>
                        <span class="small fw-bold">Commercial &amp; Corporate Moving Solutions</span>
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-3 pm-srv-hero-title">
                        Corporate &amp; <span class="pm-text-red">Office Relocation</span> Services
                    </h1>

                    <p class="lead text-muted mb-4 pm-srv-hero-desc">
                        Preventing operational disruptions is the #1 priority in business shifting. At <strong><?= $company3 ?></strong>, our corporate relocation division executes precision-planned moves over weekends and overnight off-hours. From server racks, data centers, and workstations to executive conference rooms and confidential archives, we ensure total business continuity.
                    </p>

                    <!-- Key Advantage Chips -->
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="pm-hero-chip"><i class="bi bi-clock-history text-danger me-1"></i> Zero Business Downtime</span>
                        <span class="pm-hero-chip"><i class="bi bi-server text-warning me-1"></i> Antistatic IT Server Care</span>
                        <span class="pm-hero-chip"><i class="bi bi-moon-stars text-primary me-1"></i> Weekend &amp; Overnight Moves</span>
                        <span class="pm-hero-chip"><i class="bi bi-shield-lock-fill text-success me-1"></i> Classified Document Chain of Custody</span>
                    </div>

                    <!-- Direct Action Buttons in One Row -->
                    <div class="d-flex flex-wrap align-items-center gap-2 pt-2">
                        <button type="button" class="btn pm-srv-btn-primary rounded-pill px-3 py-2 fw-bold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator-fill me-1"></i> Request Survey
                        </button>
                        <a <?= $whatsapphtml ?>?text=<?= urlencode('Hello Sanvi Packers, I need an office relocation quote.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2 text-nowrap">
                            <i class="bi bi-whatsapp"></i>
                            <span>WhatsApp Quote</span>
                        </a>
                        <a <?= $phonehtml ?> class="btn btn-outline-dark rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2 text-nowrap">
                            <i class="bi bi-telephone-fill text-danger"></i>
                            <span><?= $phone ?></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. TRUST STATS STRIP -->
    <section class="pm-srv-stats-sec py-4 bg-white border-top border-bottom">
        <div class="container">
            <div class="row g-3 text-center align-items-center">
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-dark mb-0">4,200+</div>
                        <div class="small text-muted fw-semibold">Offices Relocated</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-danger mb-0">0 Hours</div>
                        <div class="small text-muted fw-semibold">Working Hours Downtime</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-dark mb-0">99.8%</div>
                        <div class="small text-muted fw-semibold">Punctual Delivery Metric</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-danger mb-0">100%</div>
                        <div class="small text-muted fw-semibold">All-Risk IT Transit Insurance</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. SCOPE & INCLUSIONS (FULL-WIDTH 3-COLUMN BENTO GRID) -->
    <section class="py-5 pm-srv-inclusions-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-building-check me-1"></i> Corporate Scope
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">
                    Commercial Shifting <span class="pm-text-red">Inclusions &amp; Safeguards</span>
                </h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub">
                    Every phase of workplace shifting is handled by certified technicians, IT logistics personnel, and designated corporate coordinators.
                </p>
            </div>

            <!-- 6 Feature Cards in 3 Columns (Icon & Title in One Row) -->
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-moon-stars-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Weekend &amp; Overnight Moves</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Move operations scheduled after 6:00 PM on Friday or across Saturday and Sunday, guaranteeing zero disruption to regular weekday work hours.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-server"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Antistatic IT Equipment Care</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            High-density antistatic bubble wrap, padded shock-mount crates, and air-suspension vehicles dedicated for servers, switches, racks, and PCs.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-grid-3x3-gap-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Modular Workstation Setup</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Certified modular technicians dismantle partition screens, raceways, cubicles, and director conference tables, re-erecting them by floor plan.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-tags-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Desk Cable Tagging &amp; Numbering</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Serialized identification tags assigned to every monitor, docking station, keyboard, and cable bunch, matching employees' designated seating slots.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-file-earmark-lock-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Classified File Archiving</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Heavy-duty tamper-evident sealable plastic file crates for legal, financial, and confidential HR files with signed chain of custody manifests.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-printer-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Printers, Safes &amp; Pantry Shifting</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Specialized mechanical hydraulic dollies to safely transport high-capacity multi-function copiers, office fireproof safes, and cafeteria appliances.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. STEP-BY-STEP WORKFLOW (FULL-WIDTH 4-COLUMN TIMELINE) -->
    <section class="py-5 bg-white border-top border-bottom pm-srv-workflow-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-diagram-3-fill me-1"></i> Systematic Flow
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Our Corporate Relocation Execution</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-650">
                    Engineered protocol designed around your company's operational calendar.
                </p>
            </div>

            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">1</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Site Audit &amp; Color Plan</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Workplace floor assessment, departmental color-coding matrix, and schedule mapping.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">2</div>
                            <h3 class="h6 fw-bold text-dark mb-0">IT &amp; Archive Packing</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Antistatic cushioning for servers, serialized cable bags, and tamper-sealed file crates.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">3</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Off-Hours Highway Transit</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Weatherproof high-capacity container trucks operating overnight with real-time GPS tracking.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">4</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Workstation Reassembly</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Desks positioned, partitions erected, and PCs set up ready for work on Monday morning.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CORPORATE MOVE CAPACITY GUIDE (4 TIERS) -->
    <section class="py-5 pm-srv-pricing-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-buildings me-1"></i> Workplace Scale
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Office Moving Capacity Plans</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-650">
                    Tailored shifting frameworks for startups, regional offices, and multinational corporate headquarters.
                </p>
            </div>

            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">1-10 DESKS</span>
                        <h3 class="h5 fw-bold text-dark mb-2">Startup Office</h3>
                        <p class="text-muted small mb-3">Ideal for co-working expansions, branch offices, and boutique firms.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 1 Dedicated Container Truck</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 4 Professional Handlers</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Overnight Friday/Saturday Move</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Complete Electronics Packing</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get Startup Quote
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-2 border-danger rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card position-relative">
                        <span class="badge bg-danger text-white fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">MOST POPULAR</span>
                        <h3 class="h5 fw-bold text-dark mb-2">10-30 Workstations</h3>
                        <p class="text-muted small mb-3">Standard corporate branch shift with servers, cubicles &amp; files.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 2 Large Fleet Containers</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 8 Certified Handlers + Carpenter</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Modular Workstation Assembly</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Dedicated On-Site Project Head</li>
                        </ul>
                        <button type="button" class="btn pm-srv-btn-primary w-100 rounded-pill fw-bold text-white" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get Mid-Size Quote
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">30-80 DESKS</span>
                        <h3 class="h5 fw-bold text-dark mb-2">Corporate Floor</h3>
                        <p class="text-muted small mb-3">Complete office floor relocation with conference centers and pantry.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Multi-Truck Dedicated Convoy</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 12+ Specialized Crew &amp; Techs</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> IT Server Shock-Mount Crating</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Floor-Wise Priority Setup</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get Floor Quote
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">80+ DESKS / CAMPUS</span>
                        <h3 class="h5 fw-bold text-dark mb-2">Enterprise HQ</h3>
                        <p class="text-muted small mb-3">Multi-phase corporate enterprise migration across buildings or cities.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Phased Staggered Logistics Fleet</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 20+ Senior Technicians</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Full Transit Indemnity Cover</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 24/7 Command Center Liaison</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get Enterprise Plan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. EXPLORE OTHER RELOCATION SERVICES (HORIZONTAL FULL-WIDTH ROW) -->
    <section class="py-5 bg-white border-top border-bottom pm-srv-other-sec">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                <div>
                    <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-1">
                        <i class="bi bi-grid-fill me-1"></i> More Solutions
                    </span>
                    <h2 class="h3 fw-bold text-dark mb-0">Explore Our Other Relocation Services</h2>
                </div>
                <a href="<?= site_url('services') ?>" class="btn btn-outline-dark rounded-pill px-4 py-2 fw-semibold small">
                    View All Services <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>

            <!-- Other Services Cards Grid -->
            <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-lg-5">
                <?php foreach ($otherServices as $os): ?>
                    <div class="col col-6">
                        <a href="<?= site_url('services/' . $os['slug']) ?>" class="card h-100 p-3 rounded-4 border bg-light text-decoration-none pm-other-srv-card hover-lift text-center">
                            <div class="pm-other-icon mx-auto mb-2">
                                <i class="bi <?= esc($os['icon'] ?? 'bi-box-seam') ?>"></i>
                            </div>
                            <h3 class="h6 fw-bold text-dark mb-1"><?= esc($os['title']) ?></h3>
                            <span class="small pm-other-srv-link fw-bold">Learn More &rarr;</span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 7. FREQUENTLY ASKED QUESTIONS (CENTERED ACCORDION) -->
    <section class="py-5 pm-srv-faq-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-question-circle-fill me-1"></i> FAQ Guide
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Office Relocation FAQs</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-600">
                    Common questions regarding corporate moving timelines, IT safety, and compliance.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="accordion accordion-flush bg-white rounded-4 shadow-sm border p-3 p-md-4" id="officeFaqAccordion">
                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqOfficeHead1">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqOfficeCollapse1">
                                    Can our entire office shift be completed over the weekend?
                                </button>
                            </h3>
                            <div id="faqOfficeCollapse1" class="accordion-collapse collapse show" data-bs-parent="#officeFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Yes! The majority of our corporate clients shift between Friday 6:00 PM and Sunday 5:00 PM. Our team completes disassembling, overnight transit, workstation erection, and cabling before Monday morning so your staff can resume work on schedule without losing billable hours.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqOfficeHead2">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqOfficeCollapse2">
                                    How are sensitive IT servers and network equipment handled?
                                </button>
                            </h3>
                            <div id="faqOfficeCollapse2" class="accordion-collapse collapse" data-bs-parent="#officeFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    We employ antistatic bubble wrap, heavy foam corner guards, serialized cable zip tagging, and custom-padded wooden crates. For servers and SAN arrays, we allocate dedicated air-ride suspension trucks to eliminate road vibrations.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqOfficeHead3">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqOfficeCollapse3">
                                    Do you dismantle and reinstall modular partition cubicles?
                                </button>
                            </h3>
                            <div id="faqOfficeCollapse3" class="accordion-collapse collapse" data-bs-parent="#officeFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Yes! Our certified carpentry and modular furniture crew safely deconstruct partition boards, raceways, and modular desk units, reassembling them precisely according to your new office CAD floor layout.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqOfficeHead4">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqOfficeCollapse4">
                                    How is confidential file security maintained?
                                </button>
                            </h3>
                            <div id="faqOfficeCollapse4" class="accordion-collapse collapse" data-bs-parent="#officeFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Confidential files, legal documents, and accounting books are loaded into sealed, numbered plastic crates with tamper-evident security locks. An authorized company representative signs the dispatch and delivery seal manifest.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqOfficeHead5">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqOfficeCollapse5">
                                    Are you compliant with corporate vendor onboarding, GST, and NDA requirements?
                                </button>
                            </h3>
                            <div id="faqOfficeCollapse5" class="accordion-collapse collapse" data-bs-parent="#officeFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Yes, we are a fully GST-registered entity and provide formal purchase orders, GST tax invoices, signed non-disclosure agreements (NDAs), and comprehensive transit insurance certificates as required by corporate compliance departments.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
