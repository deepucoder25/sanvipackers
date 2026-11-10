<?php
$allServicesList = $allServices ?? \Modules\Services\Controllers\Services::getServicesList();
// Filter out current service for the "Other Services" section
$otherServices = array_filter($allServicesList, fn($s) => ($s['slug'] ?? '') !== 'household-moving');
?>

<!-- Dynamic Breadcrumb -->
<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Household Moving Services',
    'subtitle'    => 'Complete door-to-door home relocation with multi-layer bubble packaging, specialized wardrobe cartons, and careful furniture assembly.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Services', 'url' => site_url('services')],
        ['title' => 'Household Moving'],
    ],
]) ?>

<div class="pm-srv-page-wrapper">

    <!-- 1. HERO SECTION -->
    <section class="pm-srv-hero-sec py-5">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill pm-srv-pill-badge mb-3">
                        <i class="bi bi-shield-fill-check text-warning"></i>
                        <span class="small fw-bold">100% Insured &amp; Verified Home Relocation</span>
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-3 pm-srv-hero-title">
                        Household Moving &amp; <span class="pm-text-red">Home Shifting</span> Services
                    </h1>

                    <p class="lead text-muted mb-4 pm-srv-hero-desc">
                        Relocating your home means entrusting your memories, fragile glassware, and precious furniture to dependable hands. At <strong><?= $company3 ?></strong>, our dedicated residential relocation crew manages everything from multi-layer bubble packaging and custom wooden crating to GPS-tracked container transport and doorstep unpacking at your new destination.
                    </p>

                    <!-- Key Advantage Chips -->
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="pm-hero-chip"><i class="bi bi-box-seam text-danger me-1"></i> Multi-Layer Bubble Packing</span>
                        <span class="pm-hero-chip"><i class="bi bi-check-circle-fill text-success me-1"></i> Zero Damage Guarantee</span>
                        <span class="pm-hero-chip"><i class="bi bi-truck text-warning me-1"></i> All-Weather Container Fleet</span>
                        <span class="pm-hero-chip"><i class="bi bi-people-fill text-danger me-1"></i> Police-Verified Packing Crew</span>
                    </div>

                    <!-- Direct Action Buttons in One Row -->
                    <div class="d-flex flex-wrap align-items-center gap-2 pt-2">
                        <button type="button" class="btn pm-srv-btn-primary rounded-pill px-3 py-2 fw-bold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator-fill me-1"></i> Get Free Quote
                        </button>
                        <a <?= $whatsapphtml ?>?text=<?= urlencode('Hello Sanvi Packers, I need a free quote for Household Moving.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2 text-nowrap">
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
                        <div class="h2 fw-bold text-dark mb-0">39,850+</div>
                        <div class="small text-muted fw-semibold">Homes Shifted Safely</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-danger mb-0">4.9 / 5.0</div>
                        <div class="small text-muted fw-semibold">Verified Customer Rating</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-dark mb-0">15+</div>
                        <div class="small text-muted fw-semibold">Years of Relocation Service</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-danger mb-0">100%</div>
                        <div class="small text-muted fw-semibold">Transit Insurance Backed</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. WHAT'S INCLUDED: FULL-WIDTH 3-COLUMN FEATURE GRID -->
    <section class="py-5 pm-srv-inclusions-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-box-seam-fill me-1"></i> End-To-End Scope
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">
                    What's Included In Our <span class="pm-text-red">Home Shifting</span> Service
                </h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub">
                    Every home move is backed by multi-layered protection, systematic labeling, and certified ground handlers ensuring zero damage from start to finish.
                </p>
            </div>

            <!-- 6 Feature Cards in 3 Columns (Icon & Title in One Row) -->
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Multi-Layer Bubble Cushioning</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Double-wall virgin kraft cartons, heavy air-bubble rolls, stretch wrap, and foam edge protectors shield furniture and appliances from transit impact.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-tv-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Custom Wooden Crating</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Custom wooden crates engineered on-site for large LED/OLED smart TVs, glass center tables, antique decor, marble artifacts, and delicate chandeliers.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-tools"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Furniture Dismantling &amp; Reassembly</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Skilled carpentry technicians carefully dismantle king/queen beds, modular wardrobes, and dining tables, reassembling them securely in your new home.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-tag-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Wardrobe Boxes &amp; Mattress Covers</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Specialized upright wardrobe boxes with hanger bars keep blazers and dresses wrinkle-free, while waterproof slipcovers protect mattresses from dirt and humidity.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-truck-front-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">GPS Sealed Container Fleet</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Weatherproof containerized vehicles equipped with live GPS tracking, shock-absorbing cargo flooring, and security tamper-evident seals for transit.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-house-check-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Doorstep Unpack &amp; Room Positioning</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Our team unloads, unboxes essential items, places heavy furniture into designated rooms as per your direction, and cleans up empty packing debris.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. STEP-BY-STEP PROCESS FLOW (FULL-WIDTH 4-COLUMN TIMELINE) -->
    <section class="py-5 bg-white border-top border-bottom pm-srv-workflow-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-arrow-repeat me-1"></i> Seamless Flow
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">How Our Household Move Works</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-650">
                    A transparent 4-stage execution protocol engineered for total safety and punctuality.
                </p>
            </div>

            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">1</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Free Pre-Move Survey</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Online video survey or doorstep inventory audit to provide an itemized flat-rate quotation with zero hidden charges.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">2</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Multi-Layer Bubble Packing</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Certified packing team arrives with premium cartons, bubble wrap rolls, and custom labels to safely pack every room.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">3</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Sealed GPS Transit</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Consignment is loaded systematically into closed container trucks with real-time GPS tracking shared with you.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">4</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Doorstep Unpack &amp; Setup</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Safe unloading, bed and almirah reassembly, furniture positioning in each room, and clean removal of empty boxes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. HOME SIZE PRICING GUIDE (4 TIERS & COMPLETE RATE CHARTS) -->
    <section class="py-5 pm-srv-pricing-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-cash-stack me-1"></i> Cost Overview &amp; Rates
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Home Shifting Rates &amp; Volume Estimates</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-650">
                    Transparent rates tailored for studio flats, family apartments, luxury villas, and long-distance home moves.
                </p>
            </div>

            <!-- 4 Tier Capacity Cards with Starting Price Tags -->
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4 mb-5">
                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-2 px-3 py-1 rounded-pill mx-auto">1 RK / 1 BHK</span>
                        <h3 class="h5 fw-bold text-dark mb-1">Studio / Small Flat</h3>
                        <div class="text-danger fw-bold fs-5 mb-2">₹4,000 – ₹8,000 <span class="text-muted small fw-normal d-block fs-6">Local (0-10 Km)</span></div>
                        <p class="text-muted small mb-3">Ideal for singles, bachelors or small 1-bedroom apartments.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 14-ft Dedicated Closed Truck</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 2-3 Trained Packing Crew</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Complete Essential Packing</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Same-Day Local Delivery</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get 1 BHK Quote
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-2 border-danger rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card position-relative">
                        <span class="badge bg-danger text-white fw-bold mb-2 px-3 py-1 rounded-pill mx-auto">MOST POPULAR</span>
                        <h3 class="h5 fw-bold text-dark mb-1">2 BHK Apartment</h3>
                        <div class="text-danger fw-bold fs-5 mb-2">₹5,000 – ₹9,000 <span class="text-muted small fw-normal d-block fs-6">Local (0-10 Km)</span></div>
                        <p class="text-muted small mb-3">Standard family home relocation with electronics &amp; master bedroom furniture.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 17-ft Heavy Container Truck</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 3-4 Certified Packers</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Double Bed &amp; Almirah Assembly</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Full Transit Insurance Cover</li>
                        </ul>
                        <button type="button" class="btn pm-srv-btn-primary w-100 rounded-pill fw-bold text-white" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get 2 BHK Quote
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-2 px-3 py-1 rounded-pill mx-auto">3 BHK FLAT</span>
                        <h3 class="h5 fw-bold text-dark mb-1">Large Family Home</h3>
                        <div class="text-danger fw-bold fs-5 mb-2">₹6,000 – ₹11,000 <span class="text-muted small fw-normal d-block fs-6">Local (0-10 Km)</span></div>
                        <p class="text-muted small mb-3">Comprehensive shift including multiple bedrooms, sofa set, modular kitchen items.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 19-22 ft High-Cube Container</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 4-5 Expert Handlers</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Custom Wooden Crates for TVs</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Dedicated Move Manager</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get 3 BHK Quote
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-2 px-3 py-1 rounded-pill mx-auto">4+ BHK / VILLA</span>
                        <h3 class="h5 fw-bold text-dark mb-1">Luxury Bungalow</h3>
                        <div class="text-danger fw-bold fs-5 mb-2">₹8,000 – ₹12,000 <span class="text-muted small fw-normal d-block fs-6">Local (0-10 Km)</span></div>
                        <p class="text-muted small mb-3">Multi-floor shifting with heavy artifacts, outdoor furniture, and vehicle carrier option.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 24-32 ft Container Truck</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 6+ Senior Packaging Specialists</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> White-Glove VIP Unpacking</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Priority Highway Dispatch</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get Villa Quote
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table 1: Home Relocation Charges (House Size vs Distance) -->
            <div class="card border shadow-sm rounded-3 overflow-hidden bg-white pm-clean-rate-wrapper mb-4">
                <div class="card-header bg-white border-bottom py-3 d-flex flex-wrap align-items-center justify-content-between gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-danger rounded-circle p-2 text-white">
                            <i class="bi bi-house-door-fill"></i>
                        </span>
                        <h3 class="h6 fw-bold mb-0 text-dark">Home Relocation Charges by Distance</h3>
                    </div>
                    <span class="badge bg-light text-secondary border small">Local &amp; Intercity Distance Tiers</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 26%;">House Size / Distance</th>
                                <th scope="col" class="text-center">Up to 10 km</th>
                                <th scope="col" class="text-center">Up to 150 km</th>
                                <th scope="col" class="text-center">Up to 500 km</th>
                                <th scope="col" class="text-center">1200 km &amp; Above</th>
                                <th scope="col" class="text-center" style="width: 100px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1 BHK House</strong></td>
                                <td class="text-center fw-bold text-dark">₹4,000 - ₹7,000</td>
                                <td class="text-center fw-bold text-dark">₹7,000 - ₹15,000</td>
                                <td class="text-center fw-bold text-dark">₹15,000 - ₹25,000</td>
                                <td class="text-center fw-bold text-dark">₹25,000 - ₹50,000</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Book Now</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>2 BHK House</strong></td>
                                <td class="text-center fw-bold text-dark">₹6,000 - ₹12,000</td>
                                <td class="text-center fw-bold text-dark">₹15,000 - ₹35,000</td>
                                <td class="text-center fw-bold text-dark">₹35,000 - ₹75,000</td>
                                <td class="text-center fw-bold text-dark">₹75,000 - ₹1,50,000</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Book Now</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>3 BHK House</strong></td>
                                <td class="text-center fw-bold text-dark">₹8,000 - ₹18,000</td>
                                <td class="text-center fw-bold text-dark">₹22,000 - ₹40,000</td>
                                <td class="text-center fw-bold text-dark">₹50,000 - ₹90,000</td>
                                <td class="text-center fw-bold text-dark">₹90,000 - ₹1,60,000</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Book Now</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>4+ BHK / Villa</strong></td>
                                <td class="text-center fw-bold text-dark">₹9,000 - ₹14,000</td>
                                <td class="text-center fw-bold text-dark">₹40,000 - ₹80,000</td>
                                <td class="text-center fw-bold text-dark">₹80,000 - ₹1,50,000</td>
                                <td class="text-center fw-bold text-dark">₹1,50,000 - ₹3,00,000</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Book Now</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Table 2: Detailed Local Shifting Rates (0-50km) -->
            <div class="card border shadow-sm rounded-3 overflow-hidden bg-white pm-clean-rate-wrapper">
                <div class="card-header bg-white border-bottom py-3 d-flex flex-wrap align-items-center justify-content-between gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-danger rounded-circle p-2 text-white">
                            <i class="bi bi-speedometer2"></i>
                        </span>
                        <h3 class="h6 fw-bold mb-0 text-dark">Detailed Local Shifting Rates by Distance (0-50km)</h3>
                    </div>
                    <span class="badge bg-light text-secondary border small">Within City &amp; Metro Moves</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 30%;">Type of Relocation</th>
                                <th scope="col" class="text-center" style="width: 22%;">0Km - 10Km</th>
                                <th scope="col" class="text-center" style="width: 22%;">10Km - 30Km</th>
                                <th scope="col" class="text-center" style="width: 26%;">30Km - 50Km</th>
                                <th scope="col" class="text-center" style="width: 100px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1BHK Shifting</strong></td>
                                <td class="text-center fw-bold text-dark">₹4,000 - ₹8,000</td>
                                <td class="text-center fw-bold text-dark">₹6,000 - ₹10,000</td>
                                <td class="text-center fw-bold text-dark">₹8,000 - ₹15,000</td>
                                <td class="text-center"><button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Book Now</button></td>
                            </tr>
                            <tr>
                                <td><strong>2BHK Shifting</strong></td>
                                <td class="text-center fw-bold text-dark">₹5,000 - ₹9,000</td>
                                <td class="text-center fw-bold text-dark">₹6,000 - ₹11,000</td>
                                <td class="text-center fw-bold text-dark">₹7,500 - ₹17,000</td>
                                <td class="text-center"><button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Book Now</button></td>
                            </tr>
                            <tr>
                                <td><strong>3BHK Shifting</strong></td>
                                <td class="text-center fw-bold text-dark">₹6,000 - ₹11,000</td>
                                <td class="text-center fw-bold text-dark">₹7,500 - ₹13,000</td>
                                <td class="text-center fw-bold text-dark">₹9,000 - ₹19,000</td>
                                <td class="text-center"><button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Book Now</button></td>
                            </tr>
                            <tr>
                                <td><strong>4BHK Shifting</strong></td>
                                <td class="text-center fw-bold text-dark">₹8,000 - ₹12,000</td>
                                <td class="text-center fw-bold text-dark">₹10,000 - ₹14,500</td>
                                <td class="text-center fw-bold text-dark">₹12,000 - ₹22,000</td>
                                <td class="text-center"><button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Book Now</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Top Localities For Packers And Movers in Mumbai (Clickable Area Links) -->
            <?= view('Modules\Home\Views\mumbai_localities') ?>
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
                    <i class="bi bi-question-circle-fill me-1"></i> Common Questions
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Household Shifting FAQs</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-600">
                    Everything you need to know about preparing for your household move.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="accordion accordion-flush bg-white rounded-4 shadow-sm border p-3 p-md-4" id="homeFaqAccordion">
                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqHead1">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1">
                                    How far in advance should I book my home relocation?
                                </button>
                            </h3>
                            <div id="faqCollapse1" class="accordion-collapse collapse show" data-bs-parent="#homeFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    We recommend booking 3 to 7 days in advance for local shifting and 7 to 10 days in advance for intercity relocation to secure your preferred transit date and time slot. However, emergency or next-day bookings can also be accommodated based on fleet availability.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqHead2">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2">
                                    How do you protect delicate glassware, LED TVs, and crockery?
                                </button>
                            </h3>
                            <div id="faqCollapse2" class="accordion-collapse collapse" data-bs-parent="#homeFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Fragile items are cushioned with thick air-bubble rolls, placed in heavy-duty double-ply corrugated cartons, and separated with foam dividers. LED TVs, mirrors, and glass table tops are placed inside custom wooden crates built specifically for your items.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqHead3">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3">
                                    Is transit insurance included with home shifting?
                                </button>
                            </h3>
                            <div id="faqCollapse3" class="accordion-collapse collapse" data-bs-parent="#homeFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Yes, comprehensive all-risk transit insurance is provided for all intercity moves, covering potential loss or accidental damage during highway haulage. We generate the insurance policy document prior to truck dispatch.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqHead4">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4">
                                    Will your crew dismantle and reassemble beds, wardrobes, and modular furniture?
                                </button>
                            </h3>
                            <div id="faqCollapse4" class="accordion-collapse collapse" data-bs-parent="#homeFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Yes! Our trained packaging staff carry full carpentry toolkits and handle dismantling of beds, almirahs, dining tables, and modular furniture at pickup, and reassemble them securely in the designated rooms of your new home.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqHead5">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5">
                                    Are there any hidden costs like toll charges, GST, or elevator fees?
                                </button>
                            </h3>
                            <div id="faqCollapse5" class="accordion-collapse collapse" data-bs-parent="#homeFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Zero hidden costs! We provide a written, transparent quotation detailing labor, packaging materials, vehicle freight, highway toll, and taxes upfront so that there are never any surprises on moving day.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
