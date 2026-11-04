<?php
$allServicesList = $allServices ?? \Modules\Services\Controllers\Services::getServicesList();
// Filter out current service for the "Other Services" section
$otherServices = array_filter($allServicesList, fn($s) => ($s['slug'] ?? '') !== 'vehicle-transportation');
?>

<!-- Dynamic Breadcrumb -->
<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Car & Bike Transportation',
    'subtitle'    => 'Dedicated enclosed multi-car carriers and customized wooden crating for sports bikes with live GPS tracking from start to finish.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Services', 'url' => site_url('services')],
        ['title' => 'Car & Bike Shifting'],
    ],
]) ?>

<div class="pm-srv-page-wrapper">

    <!-- 1. HERO SECTION -->
    <section class="pm-srv-hero-sec py-5">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill pm-srv-pill-badge mb-3">
                        <i class="bi bi-geo-alt-fill text-danger"></i>
                        <span class="small fw-bold">Live GPS Covered Vehicle Carriers</span>
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-3 pm-srv-hero-title">
                        Car &amp; Bike <span class="pm-text-red">Transportation</span> Services
                    </h1>

                    <p class="lead text-muted mb-4 pm-srv-hero-desc">
                        Driving your automobile across thousands of highway kilometers causes engine wear, tire tear, stone-chip damage, and safety hazards. At <strong><?= $company3 ?></strong>, we ship four-wheelers and two-wheelers inside specially built, enclosed hydraulic container carriers and sturdy custom wooden crates with full transit insurance.
                    </p>

                    <!-- Key Advantage Chips -->
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="pm-hero-chip"><i class="bi bi-truck text-danger me-1"></i> Enclosed Multi-Car Carriers</span>
                        <span class="pm-hero-chip"><i class="bi bi-box-seam text-warning me-1"></i> Heavy-Duty Bike Wooden Crating</span>
                        <span class="pm-hero-chip"><i class="bi bi-shield-fill-check text-success me-1"></i> 100% Transit Insured</span>
                        <span class="pm-hero-chip"><i class="bi bi-broadcast text-primary me-1"></i> Real-Time GPS Tracking</span>
                    </div>

                    <!-- Direct Action Buttons in One Row -->
                    <div class="d-flex flex-wrap align-items-center gap-2 pt-2">
                        <button type="button" class="btn pm-srv-btn-primary rounded-pill px-3 py-2 fw-bold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator-fill me-1"></i> Get Vehicle Freight Quote
                        </button>
                        <a <?= $whatsapphtml ?>?text=<?= urlencode('Hello Sanvi Packers, I need a car and bike transport quote.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2 text-nowrap">
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
                        <div class="h2 fw-bold text-dark mb-0">28,500+</div>
                        <div class="small text-muted fw-semibold">Cars &amp; Bikes Shipped</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-danger mb-0">0%</div>
                        <div class="small text-muted fw-semibold">Transit Damage Ratio</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-dark mb-0">100%</div>
                        <div class="small text-muted fw-semibold">Covered Container Carriers</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-danger mb-0">100%</div>
                        <div class="small text-muted fw-semibold">Doorstep Delivery Hubs</div>
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
                    <i class="bi bi-shield-check me-1"></i> Safety Protocols
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">
                    Vehicle Transport <span class="pm-text-red">Inclusions &amp; Standards</span>
                </h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub">
                    From pre-dispatch photo condition logs to four-point wheel locking clamps, we protect your vehicle with aerospace-grade logistics diligence.
                </p>
            </div>

            <!-- 6 Feature Cards in 3 Columns (Icon & Title in One Row) -->
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-truck"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Enclosed Covered Trailers</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Vehicles travel inside double-deck closed container trailers shielding your car paint against rain, dust, gravel, and flying highway debris.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-box-seam"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Custom Bike Wooden Crates</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Two-wheelers are wrapped with scratch-guard bubble film, foam padding, and encased in sturdy wooden frameworks to prevent balance tipping.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-camera-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">360Â° Photo Inspection Sheet</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Prior to loading, our coordinator conducts a complete digital photographic inspection logging scratch condition, fuel level, and odometer reading.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-wrench-adjustable"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Hydraulic Ramp &amp; Wheel Locks</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Vehicles are loaded over low-incline hydraulic ramps and fastened using high-tensile four-wheel clamp locks to prevent shifting on curves.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Live GPS Highway Tracking</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Real-time GPS tracking link delivered directly to your WhatsApp, providing continuous visibility into trailer speed, location, and toll transit.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-house-door-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Doorstep Pickup &amp; Delivery</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Enjoy effortless doorstep pickup and delivery right outside your new residence, or opt for hub-to-hub transit based on your preference.
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
                    <i class="bi bi-arrow-repeat me-1"></i> Transit Flow
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">How We Transport Your Vehicle</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-650">
                    Zero kilometers clocked on the highway â€” safe, secure, and delivered in pristine condition.
                </p>
            </div>

            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">1</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Inspection &amp; Odometer</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Physical inspection, digital photos taken, document verification, and signed condition sheet.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">2</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Ramp &amp; Wheel Clamp</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Smooth ramp drive onto carrier, 4-wheel chocks installed, and safety harness secured.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">3</div>
                            <h3 class="h6 fw-bold text-dark mb-0">GPS Sealed Transit</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Highway transit in enclosed weatherproof carrier with live location updates shared with you.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">4</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Doorstep Handover</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Unloaded carefully at destination, joint inspection against condition sheet, and keys handover.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. VEHICLE CATEGORIES (4 TIERS) -->
    <section class="py-5 pm-srv-pricing-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-tag-fill me-1"></i> Vehicle Types
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Vehicle Shipping Categories</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-650">
                    Customized freight arrangements suited for two-wheelers, executive sedans, and luxury SUVs.
                </p>
            </div>

            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">TWO-WHEELER</span>
                        <h3 class="h5 fw-bold text-dark mb-2">Scooters &amp; Bikes</h3>
                        <p class="text-muted small mb-3">Activa, Jupiter, Splendor, Pulsar &amp; daily commuter bikes.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Heavy Multi-Ply Bubble Wrapping</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Handlebar &amp; Mirror Cushioning</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> All-India Transit Insurance</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Doorstep Pickup &amp; Drop</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get Bike Quote
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-2 border-danger rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card position-relative">
                        <span class="badge bg-danger text-white fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">POPULAR CAR PLAN</span>
                        <h3 class="h5 fw-bold text-dark mb-2">Hatchback &amp; Sedan</h3>
                        <p class="text-muted small mb-3">Swift, Baleno, Honda City, Verna, Ciaz &amp; sedans.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Enclosed Car Carrier Trailer</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 4-Wheel Lock Clamp Fasteners</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Pre-Move 360Â° Photo Inspection</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Real-Time GPS Tracking Link</li>
                        </ul>
                        <button type="button" class="btn pm-srv-btn-primary w-100 rounded-pill fw-bold text-white" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get Sedan Quote
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">COMPACT &amp; FULL SUV</span>
                        <h3 class="h5 fw-bold text-dark mb-2">Mid-Size &amp; Big SUV</h3>
                        <p class="text-muted small mb-3">Creta, Seltos, Scorpio, Safari, Fortuner &amp; Thar.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> High-Clearance Hydraulic Bay</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Heavy-Duty Axle Fasteners</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Weather &amp; Dust Sealed Box</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Express Highway Transit</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get SUV Quote
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-3 px-3 py-1 rounded-pill mx-auto">LUXURY &amp; CRATES</span>
                        <h3 class="h5 fw-bold text-dark mb-2">Super-Bike &amp; Luxury</h3>
                        <p class="text-muted small mb-3">Harley, BMW, Mercedes, Audi &amp; high-value vehicles.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Custom Treated Wood Crate (Bikes)</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Air-Ride Suspension Truck</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> VIP Single-Vehicle Option</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Max Declared Value Insurance</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get Luxury Quote
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
                <h2 class="display-6 fw-bold text-dark mb-2">Vehicle Shifting FAQs</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-600">
                    Common questions regarding vehicle documentation, fuel requirements, and carrier safety.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="accordion accordion-flush bg-white rounded-4 shadow-sm border p-3 p-md-4" id="vehicleFaqAccordion">
                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqVehHead1">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqVehCollapse1">
                                    What documents are required to transport my car or bike?
                                </button>
                            </h3>
                            <div id="faqVehCollapse1" class="accordion-collapse collapse show" data-bs-parent="#vehicleFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    You will need to provide: (1) Photocopy of Vehicle Registration Certificate (RC), (2) Valid Vehicle Insurance policy copy, (3) Valid PUC Certificate, and (4) Government Photo ID (Aadhaar / Driving License / Passport) of the owner.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqVehHead2">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqVehCollapse2">
                                    How much fuel should be kept in the fuel tank?
                                </button>
                            </h3>
                            <div id="faqVehCollapse2" class="accordion-collapse collapse" data-bs-parent="#vehicleFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    For cars, keep approximately 5 to 10 liters of fuel (about a quarter tank), which is sufficient for loading and unloading onto ramps. For two-wheelers, the fuel tank must be nearly empty for transit safety and fire regulation compliance.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqVehHead3">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqVehCollapse3">
                                    Will my car be driven on the highway?
                                </button>
                            </h3>
                            <div id="faqVehCollapse3" class="accordion-collapse collapse" data-bs-parent="#vehicleFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    No! Your vehicle is only driven for a few meters onto and off the hydraulic carrier trailer ramp. The odometer reading is officially logged and signed on the condition sheet before dispatch, guaranteeing zero highway driving.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqVehHead4">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqVehCollapse4">
                                    Can I place personal luggage or bags inside the car during transit?
                                </button>
                            </h3>
                            <div id="faqVehCollapse4" class="accordion-collapse collapse" data-bs-parent="#vehicleFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Small personal items or locked luggage (up to 50-70 kg) can be stored in the boot/trunk at the owner's risk. However, valuable items such as gold, jewelry, laptops, and cash are strictly prohibited.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqVehHead5">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqVehCollapse5">
                                    How do you protect super-bikes and cruisers like Royal Enfield or KTM?
                                </button>
                            </h3>
                            <div id="faqVehCollapse5" class="accordion-collapse collapse" data-bs-parent="#vehicleFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Cruisers and sports bikes are first covered in multi-layer shock bubble wrap and protective corrugated sheets. They are then anchored inside custom-built wooden crates with wheel braces, ensuring 100% zero-scratch and zero-tip transit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
