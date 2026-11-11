<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Why Choose Sanvi Packers and Movers',
    'subtitle'    => 'Because The Transportation of Your Belongings Is About More Than Just Transport.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Why Choose Us'],
    ],
]) ?>

<div class="pm-about-page-wrap">
    <div class="container">
        <!-- Section 1: Intro / Core Philosophy -->
        <article class="pm-about-card mb-4 mb-lg-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <span class="section-badge mb-2">
                        <i class="bi bi-shield-check text-danger"></i> Beyond Just Transport
                    </span>
                    <h2 class="section-title mb-3">
                        Because The Transportation of Your Belongings Is About More Than Just Transport.
                    </h2>
                    
                    <p class="pm-about-lead">
                        There are lots of issues that go unnoticed until the time comes for them to become an issue. Will your fridge fit through the staircase? How is your wooden furniture going to be transported? Who is going to lift your appliances? Will the boxes move inside the vehicle? These are real concerns and they deserve the attention they need.
                    </p>
                    
                    <p class="pm-about-body mb-3">
                        At <strong><?= esc($company3 ?? 'Sanvi Packers and Movers') ?></strong>, we believe that the quality moving experience starts with understanding such concerns. Our approach incorporates professional packing, specialised handling equipment, organized loading and proper placement at the destination. We are not using the same approach for all types of cargo because each item has its requirements: fragile glass cabinet, a washing machine and a wooden bed.
                    </p>

                    <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                        <p class="fw-bold text-dark mb-0 d-flex align-items-center gap-2">
                            <i class="bi bi-stars text-danger fs-5"></i>
                            <span>Here is why our relocation services are unique.</span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="position-relative rounded-4 overflow-hidden shadow-sm border pm-about-hero-img-wrap">
                        <img src="<?= base_url('assets/img/city_about.jpg') ?>" 
                             alt="Professional Shifting by Sanvi Packers and Movers" 
                             class="img-fluid w-100 h-100 object-fit-cover" 
                             loading="lazy">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 bg-dark bg-opacity-75 text-white d-flex align-items-center gap-3">
                            <i class="bi bi-patch-check-fill fs-2 text-danger"></i>
                            <div>
                                <strong class="d-block text-white fs-6">ISO &amp; IBA Certified Relocations</strong>
                                <small class="text-white-50">Safe Shifting Across 500+ Indian Cities</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Section 2: Here is why our relocation services are unique -->
        <article class="pm-about-card mb-4 mb-lg-5">
            <div class="text-center mb-4">
                <span class="section-badge mb-2">
                    <i class="bi bi-gem text-danger"></i> Distinctive Moving Excellence
                </span>
                <h2 class="section-title mb-2">Here Is Why Our Relocation Services Are Unique</h2>
                <p class="section-subtitle">
                    Every move is handled with specialized tools, careful preparation, and scientific loading methods.
                </p>
            </div>

            <div class="row g-4">
                <!-- Feature 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="pm-pillar-item">
                        <div class="pm-pillar-header">
                            <div class="pm-pillar-icon-box" aria-hidden="true">
                                <i class="bi bi-door-open-fill"></i>
                            </div>
                            <h3 class="pm-pillar-title">We Care About the Things That Need to Be Done Prior to Loading</h3>
                        </div>
                        <p class="pm-pillar-text">
                            A good relocation process does not start with the arrival of the vehicle but with preparation of the goods and the property for the move. We are using padded door frame protectors and floor runners to minimize the risk of scratches and other marks in movement areas. Furniture and appliances are being treated according to their size, weight and form instead of just being moved randomly.
                        </p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="pm-pillar-item">
                        <div class="pm-pillar-header">
                            <div class="pm-pillar-icon-box" aria-hidden="true">
                                <i class="bi bi-tools"></i>
                            </div>
                            <h3 class="pm-pillar-title">Heavy Goods Require Specialized Equipment</h3>
                        </div>
                        <p class="pm-pillar-text">
                            Lifting a heavy fridge and moving a big wardrobe through a narrow space is not an easy thing. Our team is using heavy mechanical dollies, ramps and appliance harness straps for such kinds of tasks. These tools enable us to control the process and avoid unnecessary stress when lifting and shifting.
                        </p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="pm-pillar-item">
                        <div class="pm-pillar-header">
                            <div class="pm-pillar-icon-box" aria-hidden="true">
                                <i class="bi bi-layers-fill"></i>
                            </div>
                            <h3 class="pm-pillar-title">Specialized Packing Based on the Nature of the Goods</h3>
                        </div>
                        <p class="pm-pillar-text">
                            We understand that there is no universal way to pack things. For crockery, you need cushioning; for electronics, it is necessary to wrap them properly and for furniture, you need protection from scratches and bumps. Multi-layer bubble packing, corrugated sheets, cartons and other packing materials are used by our team depending on the nature of the cargo.
                        </p>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="pm-pillar-item">
                        <div class="pm-pillar-header">
                            <div class="pm-pillar-icon-box" aria-hidden="true">
                                <i class="bi bi-boxes"></i>
                            </div>
                            <h3 class="pm-pillar-title">Proper Loading Instead of Stacking</h3>
                        </div>
                        <p class="pm-pillar-text">
                            The way of arrangement of the goods in the moving vehicle is important during the whole move. Improper loading leads to moving of the boxes, friction of furniture and unnecessary stress on fragile goods. We are following the scientific principles of loading by placing the goods depending on their size, weight and handling requirements.
                        </p>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="pm-pillar-item">
                        <div class="pm-pillar-header">
                            <div class="pm-pillar-icon-box" aria-hidden="true">
                                <i class="bi bi-person-check-fill"></i>
                            </div>
                            <h3 class="pm-pillar-title">Coordination with the Identified Team</h3>
                        </div>
                        <p class="pm-pillar-text">
                            Our police verified uniformed crew uses coordinated work procedures during relocation. We also provide customers with relocation coordinators who facilitate discussion of the requirements and updating. Having a point of contact makes communication simpler especially when the relocation includes multiple phases or long-distance transportation.
                        </p>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="pm-pillar-item">
                        <div class="pm-pillar-header">
                            <div class="pm-pillar-icon-box" aria-hidden="true">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <h3 class="pm-pillar-title">Greater Peace of Mind During Long-Distance Relocation</h3>
                        </div>
                        <p class="pm-pillar-text">
                            Customers always want to track the progress of their goods during transportation when relocating between cities. GPS live tracking support is offered by us as well as the option of transit insurance that covers financial losses in case of covered risks. The arrangements are explained to the customers so they could understand what is involved before the move.
                        </p>
                    </div>
                </div>
            </div>
        </article>

        <!-- Section 3: One Company for Multiple Relocation Requirements -->
        <article class="pm-about-card mb-4 mb-lg-5">
            <div class="text-center mb-4">
                <span class="section-badge mb-2">
                    <i class="bi bi-grid-3x3-gap-fill text-danger"></i> Complete Solutions
                </span>
                <h2 class="section-title mb-2">One Company for Multiple Relocation Requirements</h2>
                <p class="section-subtitle">
                    You might need to relocate your household now, office next week and transport your car somewhere else. Our relocation services include:
                </p>
            </div>

            <div class="row g-3 g-lg-4 mb-4">
                <div class="col-md-6 col-lg-4">
                    <div class="pm-value-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-value-icon mb-0 flex-shrink-0">
                                <i class="bi bi-house-heart-fill"></i>
                            </div>
                            <h3 class="pm-value-title mb-0">Household Relocation</h3>
                        </div>
                        <p class="pm-value-text">Shifting of household and complete household relocation.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pm-value-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-value-icon mb-0 flex-shrink-0">
                                <i class="bi bi-buildings-fill"></i>
                            </div>
                            <h3 class="pm-value-title mb-0">Office Relocation</h3>
                        </div>
                        <p class="pm-value-text">Office relocation and commercial cargo transportation.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pm-value-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-value-icon mb-0 flex-shrink-0">
                                <i class="bi bi-car-front-fill"></i>
                            </div>
                            <h3 class="pm-value-title mb-0">Car &amp; Bike Shifting</h3>
                        </div>
                        <p class="pm-value-text">Car and bike shifting with corresponding transportation arrangements.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="pm-value-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-value-icon mb-0 flex-shrink-0">
                                <i class="bi bi-archive-fill"></i>
                            </div>
                            <h3 class="pm-value-title mb-0">Temporary Warehouse Storage</h3>
                        </div>
                        <p class="pm-value-text">Temporary warehouse storage of the cargo.</p>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="pm-value-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-value-icon mb-0 flex-shrink-0">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <h3 class="pm-value-title mb-0">Packing, Loading &amp; Unloading</h3>
                        </div>
                        <p class="pm-value-text">Professional packing, loading and unloading assistance.</p>
                    </div>
                </div>
            </div>

            <div class="p-3 rounded-3 bg-light border text-center">
                <p class="text-muted mb-0 fw-semibold">
                    <i class="bi bi-geo-alt-fill text-danger me-1"></i> With relocation services in <strong>500+ Indian cities</strong>, we help our customers plan their moves to various destinations.
                </p>
            </div>
        </article>

        <!-- Section 4: Recognition of the Standards of Professional Practices -->
        <article class="pm-about-card mb-4 mb-lg-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <span class="section-badge mb-2">
                        <i class="bi bi-patch-check-fill text-danger"></i> Certified Relocation Standards
                    </span>
                    <h2 class="section-title mb-3">Recognition of the Standards of Professional Practices</h2>
                    <p class="pm-about-body mb-0">
                        <strong><?= esc($company3 ?? 'Sanvi Packers and Movers') ?></strong> is an <strong>ISO 9001:2015 Certified</strong> and <strong>IBA Approved</strong> relocation company. Such certifications prove the adherence of our company to organized relocation processes. We still focus on those aspects that are important during the relocation process: proper packing, handling, loading and delivery of the cargo.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-2">
                        <div class="p-3 rounded-3 bg-white border shadow-sm d-flex align-items-center gap-3">
                            <i class="bi bi-patch-check-fill text-danger fs-3"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-0 text-dark">ISO 9001:2015</h4>
                                <small class="text-muted">Quality Management Certified</small>
                            </div>
                        </div>
                        <div class="p-3 rounded-3 bg-white border shadow-sm d-flex align-items-center gap-3">
                            <i class="bi bi-award-fill text-primary fs-3"></i>
                            <div>
                                <h4 class="h6 fw-bold mb-0 text-dark">IBA Approved</h4>
                                <small class="text-muted">Bank &amp; Govt Approved Relocation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Section 5: Direct Action Banner (CTA) -->
        <div class="pm-about-cta-banner">
            <div class="row align-items-center g-4 position-relative z-2">
                <div class="col-lg-7 col-xl-8">
                    <span class="badge bg-danger text-white px-3 py-1 rounded-pill small fw-bold mb-2 d-inline-block">
                        <i class="bi bi-rocket-takeoff-fill me-1"></i> Start Your Move
                    </span>
                    <h2 class="pm-about-cta-title mb-2">Start Your Next Move with the Right Choice</h2>
                    <p class="pm-about-cta-desc mb-2">
                        We understand that customers remember how their belongings were handled, how clear the communication was and how the relocation process went. This is the experience we would like to provide at Sanvi Packers and Movers.
                    </p>
                    <p class="pm-about-cta-desc mb-3">
                        Whether it is the relocation of your apartment, house or office, our team is ready to understand your requirements and to make relocation plans accordingly.
                    </p>
                    <div class="d-inline-flex align-items-center gap-2 p-2 px-3 rounded-pill bg-white border border-danger border-opacity-25 shadow-sm">
                        <i class="bi bi-telephone-inbound-fill text-danger flex-shrink-0"></i>
                        <span class="text-dark small fw-bold">
                            Do You Have a Move Coming Up? Talk to Sanvi Packers and Movers at 
                            <a href="tel:<?= esc(preg_replace('/[^0-9+]/', '', $phone ?? '+919930444433')) ?>" class="text-danger text-decoration-none fw-bolder">
                                <?= esc($phone ?? '+91 99304 44433') ?>
                            </a> 
                            and let us help you with planning it.
                        </span>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="d-flex flex-column gap-2 justify-content-center">
                        <a <?= $phonehtml ?> class="pm-btn-red text-center py-2 px-4 shadow-sm w-100" title="Call Now" aria-label="Call Now">
                            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                            <span>Call <?= esc($phone ?? '+91 99304 44433') ?></span>
                        </a>
                        <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="pm-btn-whatsapp-pill text-center py-2 px-4 shadow-sm w-100" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                            <i class="bi bi-whatsapp" aria-hidden="true"></i>
                            <span>Chat on WhatsApp</span>
                        </a>
                        <button type="button" class="btn btn-outline-dark rounded-pill py-2 px-4 fw-bold shadow-sm d-flex align-items-center justify-content-center gap-2 w-100" data-bs-toggle="modal" data-bs-target="#qteModal">
                            <i class="bi bi-calculator text-danger"></i>
                            <span>Get Free Quote</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

