<?php
$allServicesList = $allServices ?? \Modules\Services\Controllers\Services::getServicesList();
// Filter out current service for the "Other Services" section
$otherServices = array_filter($allServicesList, fn($s) => ($s['slug'] ?? '') !== 'loading-unloading');
?>

<!-- Dynamic Breadcrumb -->
<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Loading & Unloading Services',
    'subtitle'    => 'Trained, background-checked ground crew equipped with hydraulic lifters, ramps, dollies, and safety belts for heavy equipment.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Services', 'url' => site_url('services')],
        ['title' => 'Loading & Unloading'],
    ],
]) ?>

<div class="pm-srv-page-wrapper">

    <!-- 1. HERO SECTION -->
    <section class="pm-srv-hero-sec py-5">
        <div class="container">
            <div class="row align-items-center">
                
                <div class="col-12">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill pm-srv-pill-badge mb-3">
                        <i class="bi bi-gear-fill text-danger"></i>
                        <span class="small fw-bold">Equipped Certified Ground Handling Force</span>
                    </div>

                    <h1 class="display-5 fw-bold text-dark mb-3 pm-srv-hero-title">
                        Safe Loading &amp; <span class="pm-text-red">Unloading</span> Services
                    </h1>

                    <p class="lead text-muted mb-4 pm-srv-hero-desc">
                        Improper manual lifting causes dented furniture, cracked floor tiles, scraped doorframes, and back injuries. At <strong><?= $company3 ?></strong>, our dedicated loading and unloading workforce utilizes hydraulic lifters, 4-wheel rubber dollies, shoulder-harness straps, and stair runners to safely load and position your heavy cargo without property damage.
                    </p>

                    <!-- Key Advantage Chips -->
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="pm-hero-chip"><i class="bi bi-wrench-adjustable text-danger me-1"></i> Hydraulic Equipment</span>
                        <span class="pm-hero-chip"><i class="bi bi-shield-check text-success me-1"></i> Floor &amp; Door Protectors</span>
                        <span class="pm-hero-chip"><i class="bi bi-arrows-collapse text-warning me-1"></i> Balanced Cargo Stacking</span>
                        <span class="pm-hero-chip"><i class="bi bi-people-fill text-primary me-1"></i> Police-Verified Handlers</span>
                    </div>

                    <!-- Direct Action Buttons in One Row -->
                    <div class="d-flex flex-wrap align-items-center gap-2 pt-2">
                        <button type="button" class="btn pm-srv-btn-primary rounded-pill px-3 py-2 fw-bold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator-fill me-1"></i> Book Loading Labor
                        </button>
                        <a <?= $whatsapphtml ?>?text=<?= urlencode('Hello Sanvi Packers, I need loading and unloading labor.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-2 text-nowrap">
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
                        <div class="h2 fw-bold text-dark mb-0">100%</div>
                        <div class="small text-muted fw-semibold">Police-Verified Staff</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-danger mb-0">0%</div>
                        <div class="small text-muted fw-semibold">Property Damage Record</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-dark mb-0">Hydraulic</div>
                        <div class="small text-muted fw-semibold">Lifter &amp; Dolly Equipped</div>
                    </div>
                </div>
                <div class="col-6 col-lg-3">
                    <div class="pm-stat-box p-3 rounded-4">
                        <div class="h2 fw-bold text-danger mb-0">â‚¹0</div>
                        <div class="small text-muted fw-semibold">Hidden Overtime Fees</div>
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
                    <i class="bi bi-wrench me-1"></i> Handling Equipment
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">
                    Loading &amp; Handling <span class="pm-text-red">Standards &amp; Tools</span>
                </h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub">
                    We equip our workforce with mechanical moving gear, protecting your valuable goods as well as doorways, stairs, and flooring.
                </p>
            </div>

            <!-- 6 Feature Cards in 3 Columns (Icon & Title in One Row) -->
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-tools"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Heavy Mechanical Dollies &amp; Ramps</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Equipped with 4-wheel flatbed dollies, stair-climbing hand trucks, and aluminum vehicle ramps for effortless rolling of heavy weights.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-shield-shaded"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Padded Doorframe &amp; Floor Runners</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Thick doorway edge guards and heavy-duty floor runners placed along corridors to prevent scratches, gouges, and tile chipping.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-arrows-collapse"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Scientific Weight Stacking</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Cargo is placed methodically with heavy bases anchored to the vehicle floor and light fragile cartons placed on top with anchor ratchets.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-box2-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Heavy Appliance Harness Straps</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Double-door refrigerators, front-load washing machines, and heavy fireproof safes are moved with ergonomic shoulder-lifting harnesses.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Police-Verified Uniformed Crew</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Every team member is police background-checked, polite, certified in safe lifting ergonomics, and equipped with company identification.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 rounded-4 shadow-sm p-4 bg-white pm-srv-card hover-lift">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="pm-srv-card-icon flex-shrink-0">
                                <i class="bi bi-house-check-fill"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-0">Room Stacking &amp; Debris Removal</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            After unloading, items are carried directly into designated bedrooms and living areas as instructed, and transport pallets are cleared.
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
                    <i class="bi bi-arrow-repeat me-1"></i> Handling Steps
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Our 4-Stage Handling Protocol</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-650">
                    Careful handling engineered to prevent back injuries, scuffed walls, and damaged goods.
                </p>
            </div>

            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4">
                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">1</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Property Protection</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Corner foam guards on door jambs, stair runners, and neoprene floor mats laid out.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">2</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Dollies &amp; Harnesses</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Heavy appliances shifted on rubber wheels and ergonomic shoulder harness straps.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">3</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Balanced Stacking</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Cargo weight distributed evenly inside container truck with ratchet strap ties.
                        </p>
                    </div>
                </div>

                <div class="col">
                    <div class="p-4 rounded-4 h-100 bg-light border pm-process-step-box position-relative text-start">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="pm-step-num-badge flex-shrink-0">4</div>
                            <h3 class="h6 fw-bold text-dark mb-0">Careful Placement</h3>
                        </div>
                        <p class="text-muted small mb-0">
                            Unloaded room by room at destination with careful placement and debris cleared.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CREW TIERS (4 TIERS & COMPLETE RATE CHARTS) -->
    <section class="py-5 pm-srv-pricing-sec">
        <div class="container">
            <div class="text-center mb-5">
                <span class="badge px-3 py-2 rounded-pill text-uppercase pm-srv-hero-badge mb-2">
                    <i class="bi bi-people-fill me-1"></i> Cost Overview &amp; Rates
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Loading &amp; Unloading Charges &amp; Team Plans</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-650">
                    Hire background-verified, certified moving handlers equipped with heavy-duty dollies, belts, and ramps.
                </p>
            </div>

            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-4 mb-5">
                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-2 px-3 py-1 rounded-pill mx-auto">2 HANDLERS</span>
                        <h3 class="h5 fw-bold text-dark mb-1">Small Assist</h3>
                        <div class="text-danger fw-bold fs-5 mb-2">₹1,500 – ₹3,000 <span class="text-muted small fw-normal d-block fs-6">Up to 3 Hours</span></div>
                        <p class="text-muted small mb-3">1 BHK flat or small truck loading/unloading assistance.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 2 Certified Handlers</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Heavy Duty Hand Truck</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Moving Straps &amp; Belts</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Up to 3 Hours Dedicated Work</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Book 2 Handlers
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-2 border-danger rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card position-relative">
                        <span class="badge bg-danger text-white fw-bold mb-2 px-3 py-1 rounded-pill mx-auto">MOST POPULAR</span>
                        <h3 class="h5 fw-bold text-dark mb-1">4 Handlers Team</h3>
                        <div class="text-danger fw-bold fs-5 mb-2">₹3,000 – ₹6,000 <span class="text-muted small fw-normal d-block fs-6">Up to 6 Hours</span></div>
                        <p class="text-muted small mb-3">Standard 2-3 BHK apartment complete loading and unloading.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 4 Experienced Handlers</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Flatbed Dollies &amp; Ramps</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Floor Runners &amp; Doorway Pads</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Complete Weight-Balanced Stack</li>
                        </ul>
                        <button type="button" class="btn pm-srv-btn-primary w-100 rounded-pill fw-bold text-white" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Book 4 Handlers
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-2 px-3 py-1 rounded-pill mx-auto">6 HANDLERS</span>
                        <h3 class="h5 fw-bold text-dark mb-1">Large Villa / Floor</h3>
                        <div class="text-danger fw-bold fs-5 mb-2">₹5,000 – ₹10,000 <span class="text-muted small fw-normal d-block fs-6">Full Day Operation</span></div>
                        <p class="text-muted small mb-3">Multi-story home or high-volume 3-4 BHK without lift access.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> 6 Senior Ground Crew</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Stair-Climber Machinery</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Dedicated Crew Supervisor</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Full Day Dedicated Operation</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Book 6 Handlers
                        </button>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border rounded-4 shadow-sm p-4 bg-white text-center pm-tier-card">
                        <span class="badge bg-light text-dark fw-bold mb-2 px-3 py-1 rounded-pill mx-auto">SPECIAL MACHINERY</span>
                        <h3 class="h5 fw-bold text-dark mb-1">Vault &amp; Heavy Gear</h3>
                        <div class="text-danger fw-bold fs-5 mb-2">₹6,000 – ₹15,000 <span class="text-muted small fw-normal d-block fs-6">Special Equipment Job</span></div>
                        <p class="text-muted small mb-3">Safes, pianos, medical equipment, and heavy industrial cargo.</p>
                        <hr class="my-3">
                        <ul class="list-unstyled text-start small text-muted mb-4 d-flex flex-column gap-2">
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Hydraulic Tailgate Vehicle</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Heavy Lever Bars &amp; Rollers</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Rigging &amp; Anchor Specialists</li>
                            <li><i class="bi bi-check-circle-fill text-danger me-2"></i> High Declared Value Insurance</li>
                        </ul>
                        <button type="button" class="btn btn-outline-danger w-100 rounded-pill fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Book Special Gear
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table 1: Loading & Labor Charges Breakdown -->
            <div class="card border shadow-sm rounded-3 overflow-hidden bg-white pm-clean-rate-wrapper">
                <div class="card-header bg-white border-bottom py-3 d-flex flex-wrap align-items-center justify-content-between gap-2">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-danger rounded-circle p-2 text-white">
                            <i class="bi bi-person-arms-up"></i>
                        </span>
                        <h3 class="h6 fw-bold mb-0 text-dark">Loading &amp; Unloading Labor Rate Breakdown</h3>
                    </div>
                    <span class="badge bg-light text-secondary border small">Certified &amp; Insured Handlers</span>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover align-middle mb-0 pm-clean-rate-table text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col" class="col-w-25">Crew Configuration</th>
                                <th scope="col" class="text-center col-w-30">Recommended Home / Move Size</th>
                                <th scope="col" class="text-center col-w-20">Standard Duration</th>
                                <th scope="col" class="text-center col-w-25">Estimated Charges</th>
                                <th scope="col" class="text-center col-w-action-md">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>2 Handlers (Small Assist)</strong></td>
                                <td class="text-center text-muted">1 RK / 1 BHK or Partial Shift</td>
                                <td class="text-center text-muted">Up to 3 Hours</td>
                                <td class="text-center fw-bold text-dark">₹1,500 - ₹3,000</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Book Now</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>4 Handlers Team</strong></td>
                                <td class="text-center text-muted">2 BHK – 3 BHK Standard Flat</td>
                                <td class="text-center text-muted">Up to 6 Hours</td>
                                <td class="text-center fw-bold text-dark">₹3,000 - ₹6,000</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Book Now</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>6 Handlers Squad</strong></td>
                                <td class="text-center text-muted">3+ BHK, Duplex / No-Lift Floors</td>
                                <td class="text-center text-muted">Full Day (8 Hours)</td>
                                <td class="text-center fw-bold text-dark">₹5,000 - ₹10,000</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Book Now</button>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Heavy Machinery / Riggers</strong></td>
                                <td class="text-center text-muted">Pianos, Heavy Safes, Industrial Racks</td>
                                <td class="text-center text-muted">Custom Shift Basis</td>
                                <td class="text-center fw-bold text-dark">₹6,000 - ₹15,000</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm rounded-pill px-3 py-1 fw-semibold text-nowrap" data-bs-toggle="modal" data-bs-target="#qteModal">Book Now</button>
                                </td>
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
                    <i class="bi bi-question-circle-fill me-1"></i> FAQ Guide
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">Loading &amp; Handling FAQs</h2>
                <p class="text-muted mx-auto mb-0 pm-srv-section-sub-600">
                    Common questions regarding ground labor booking, equipment, and building protection.
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="accordion accordion-flush bg-white rounded-4 shadow-sm border p-3 p-md-4" id="loadingFaqAccordion">
                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqLoadHead1">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqLoadCollapse1">
                                    Can I hire your team only for loading or unloading my truck?
                                </button>
                            </h3>
                            <div id="faqLoadCollapse1" class="accordion-collapse collapse show" data-bs-parent="#loadingFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Yes! We provide labor-only services. Whether you arranged your own transport vehicle or have an incoming container truck arriving at your warehouse or new home, our team will arrive with dollies and lifting tools to handle the heavy lifting.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqLoadHead2">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqLoadCollapse2">
                                    How do you protect staircases, elevator doors, and doorframes?
                                </button>
                            </h3>
                            <div id="faqLoadCollapse2" class="accordion-collapse collapse" data-bs-parent="#loadingFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Our handlers install padded corner guards on all door jambs and lay heavy-duty neoprene runners along high-traffic floor pathways and elevator entrances, preventing scuffs, scratches, and chipped flooring.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqLoadHead3">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqLoadCollapse3">
                                    Can your team handle heavy items like a piano or fireproof safe?
                                </button>
                            </h3>
                            <div id="faqLoadCollapse3" class="accordion-collapse collapse" data-bs-parent="#loadingFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Yes! We specialize in heavy cargo moving using hydraulic dollies, specialized rigging straps, and mechanical lever rollers specifically designed for pianos, bank vaults, commercial chillers, and industrial safes.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h3 class="accordion-header" id="faqLoadHead4">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqLoadCollapse4">
                                    What if there is no elevator and goods have to be carried via stairs?
                                </button>
                            </h3>
                            <div id="faqLoadCollapse4" class="accordion-collapse collapse" data-bs-parent="#loadingFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Our team is trained in multi-person stair-carrying techniques and brings specialized shoulder harness straps to distribute weight safely across flights of stairs. Please mention the floor number when booking so we assign sufficient manpower.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header" id="faqLoadHead5">
                                <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#faqLoadCollapse5">
                                    Are your loaders verified and insured?
                                </button>
                            </h3>
                            <div id="faqLoadCollapse5" class="accordion-collapse collapse" data-bs-parent="#loadingFaqAccordion">
                                <div class="accordion-body text-muted small">
                                    Yes, all handlers are 100% police background-checked, fully uniformed, insured, and under the supervision of a designated team coordinator throughout the operation.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
