<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'We Take Care of Your Relocation, Because Every Move Has a Story',
    'subtitle'    => 'About Sanvi Packers and Movers — ISO 9001:2015 Certified & IBA Approved Relocation Network Across 500+ Indian Cities.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'About Us'],
    ],
]) ?>

<div class="pm-about-page-wrap">
    <div class="container">
        <!-- Section 1: Who We Are -->
        <article class="pm-about-card mb-4 mb-lg-5">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <span class="section-badge mb-2">
                        <i class="bi bi-info-circle-fill text-danger"></i> Who We Are
                    </span>
                    <h2 class="section-title mb-3">Who We Are</h2>
                    
                    <p class="pm-about-lead">
                        Relocation brings many pleasant thoughts, but sometimes packing and transportation can become exhausting due to the number of tasks involved, like moving furniture, kitchen items, electronics and other precious belongings. This is where <strong><?= esc($company3 ?? 'Sanvi Packers and Movers') ?></strong> come to help.
                    </p>
                    
                    <p class="pm-about-body">
                        <strong><?= esc($company3 ?? 'Sanvi Packers and Movers') ?></strong> is a professional packers and movers company that provides shifting services for individuals, families, and businesses. We offer household shifting, office shifting, car and bike transportation, warehouse storage, packing and moving, and loading and unloading. As an ISO 9001:2015 Certified and IBA Approved relocation company, it uses organized moving procedures and takes care of the safety of the goods transported.
                    </p>

                    <p class="pm-about-body mb-3">
                        For moving, our team uses high-quality packing materials such as <strong>multi-layer bubble sheets</strong>, corrugated boxes and wrapping materials. We also use heavy mechanical dollies, ramps, appliance harness straps and padded floor and doorframe runners. Such measures allow us to move heavy furniture, household appliances and other valuable items with care. Our services across 500+ Indian cities help us accommodate different local and intercity relocation requirements.
                    </p>

                    <!-- Trust Certifications Strip -->
                    <div class="pm-about-trust-pills">
                        <span class="pm-about-trust-pill">
                            <i class="bi bi-patch-check-fill text-danger" aria-hidden="true"></i> ISO 9001:2015 Certified
                        </span>
                        <span class="pm-about-trust-pill">
                            <i class="bi bi-award-fill text-primary" aria-hidden="true"></i> IBA Approved Company
                        </span>
                        <span class="pm-about-trust-pill">
                            <i class="bi bi-layers-fill text-warning" aria-hidden="true"></i> Multi-Layer Bubble Packing
                        </span>
                        <span class="pm-about-trust-pill">
                            <i class="bi bi-geo-alt-fill text-success" aria-hidden="true"></i> 500+ Indian Cities
                        </span>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="position-relative rounded-4 overflow-hidden shadow-sm border pm-about-hero-img-wrap">
                        <img src="<?= base_url('assets/img/city_about.jpg') ?>" 
                             alt="Sanvi Packers and Movers Relocation Team" 
                             class="img-fluid w-100 h-100 object-fit-cover" 
                             style="min-height: 380px; max-height: 440px;" 
                             loading="lazy">
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 bg-dark bg-opacity-75 text-white d-flex align-items-center gap-3">
                            <i class="bi bi-shield-check fs-2 text-danger"></i>
                            <div>
                                <strong class="d-block text-white fs-6">100% Safe Shifting</strong>
                                <small class="text-white-50">Trained &amp; Police-Verified Moving Crew</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Section 2: Our Mission & Vision -->
        <article class="pm-about-card mb-4 mb-lg-5">
            <div class="text-center mb-4">
                <span class="section-badge mb-2">
                    <i class="bi bi-compass-fill text-danger"></i> Guiding Principles
                </span>
                <h2 class="section-title mb-2">Our Mission &amp; Vision</h2>
                <p class="section-subtitle">Dedicated to redefining relocation standards through safety, punctuality, and trust.</p>
            </div>

            <div class="pm-mv-grid">
                <div class="pm-mv-card mission">
                    <div class="pm-mv-header">
                        <div class="pm-mv-icon" aria-hidden="true">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h3 class="pm-mv-title">Our Mission</h3>
                    </div>
                    <p class="pm-mv-desc">
                        The main mission of our company is to help to make the process of shifting less stressful and help customers to relax while giving all their belongings into the hands of Sanvi Packers and Movers. To do so, it provides proper packing, loading, transportation and assists in the process of shifting. Also, it tries to understand the requirements of every customer before the planning of shifting.
                    </p>
                </div>

                <div class="pm-mv-card vision">
                    <div class="pm-mv-header">
                        <div class="pm-mv-icon" aria-hidden="true">
                            <i class="bi bi-eye-fill"></i>
                        </div>
                        <h3 class="pm-mv-title">Our Vision</h3>
                    </div>
                    <p class="pm-mv-desc">
                        We see ourselves as a reliable relocation company in India. Our vision is to expand our customer base, improve our relocation facilities and maintain the high quality of service expected from a professional packers and movers company.
                    </p>
                </div>
            </div>
        </article>

        <!-- Section 3: Our Achievements -->
        <article class="pm-about-card mb-4 mb-lg-5">
            <div class="text-center mb-4">
                <span class="section-badge mb-2">
                    <i class="bi bi-trophy-fill text-warning"></i> Key Milestones
                </span>
                <h2 class="section-title mb-2">Our Achievements</h2>
                <p class="section-subtitle">
                    On our journey towards becoming a professional relocation company, we have worked towards achieving several goals. Some of our important milestones and service features include:
                </p>
            </div>

            <div class="row g-3 g-lg-4">
                <div class="col-md-6 col-lg-4">
                    <div class="pm-achievement-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-achievement-badge mb-0 flex-shrink-0">
                                <i class="bi bi-patch-check-fill"></i>
                            </div>
                            <h3 class="pm-pillar-title mb-0">ISO 9001:2015 Certified</h3>
                        </div>
                        <p class="pm-pillar-text">It is a company that follows quality management practices.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pm-achievement-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-achievement-badge mb-0 flex-shrink-0">
                                <i class="bi bi-award-fill"></i>
                            </div>
                            <h3 class="pm-pillar-title mb-0">IBA Approved</h3>
                        </div>
                        <p class="pm-pillar-text">Important certification for a relocation company.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pm-achievement-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-achievement-badge mb-0 flex-shrink-0">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <h3 class="pm-pillar-title mb-0">Relocation Across 500+ Cities in India</h3>
                        </div>
                        <p class="pm-pillar-text">Widespread relocation service network across India.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="pm-achievement-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-achievement-badge mb-0 flex-shrink-0">
                                <i class="bi bi-tools"></i>
                            </div>
                            <h3 class="pm-pillar-title mb-0">High-Quality Equipment</h3>
                        </div>
                        <p class="pm-pillar-text">Dollies, ramps, harness straps, and runners.</p>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6">
                    <div class="pm-achievement-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-achievement-badge mb-0 flex-shrink-0">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h3 class="pm-pillar-title mb-0">Professional Support During Shifting</h3>
                        </div>
                        <p class="pm-pillar-text">Special coordinators and customer support.</p>
                    </div>
                </div>
            </div>
        </article>

        <!-- Section 4: Our Journey -->
        <article class="pm-about-card mb-4 mb-lg-5">
            <div class="row align-items-center g-4">
                <div class="col-12">
                    <span class="section-badge mb-2">
                        <i class="bi bi-signpost-2-fill text-danger"></i> Heritage &amp; Evolution
                    </span>
                    <h2 class="section-title mb-3">Our Journey</h2>
                    
                    <p class="pm-about-lead">
                        Every company has its own history, which is strongly connected with the needs of customers who relocate. At Sanvi Packers and Movers, it understands that customers do not want just a truck and some boxes from packers and movers. They expect to receive all their belongings to be delivered properly and in time without any problems and unnecessary waiting.
                    </p>
                    
                    <p class="pm-about-body mb-0">
                        Keeping these expectations in mind, we have paid special attention to developing better packing techniques, improving relocation equipment and organising the overall moving process. From household relocation to office shifting and vehicle transportation, we continue to develop our services to provide practical solutions for different moving requirements. Every relocation brings new opportunities for us to improve our services and establish stronger customer relationships.
                    </p>
                </div>
            </div>
        </article>

        <!-- Section 5: Our Core Values -->
        <article class="pm-about-card mb-4 mb-lg-5">
            <div class="text-center mb-4">
                <span class="section-badge mb-2">
                    <i class="bi bi-heart-pulse-fill text-danger"></i> What Guides Us
                </span>
                <h2 class="section-title mb-2">Our Core Values</h2>
                <p class="section-subtitle">
                    The way we work is just as important as the services we provide. Here are the core values we follow in our everyday operations:
                </p>
            </div>

            <div class="row g-3 g-lg-4">
                <div class="col-md-6 col-lg-4">
                    <div class="pm-value-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-value-icon mb-0 flex-shrink-0">
                                <i class="bi bi-heart-fill"></i>
                            </div>
                            <h3 class="pm-value-title mb-0">Care</h3>
                        </div>
                        <p class="pm-value-text">Careful handling of customers' belongings.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pm-value-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-value-icon mb-0 flex-shrink-0">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h3 class="pm-value-title mb-0">Honesty</h3>
                        </div>
                        <p class="pm-value-text">Giving honest information regarding services and the requirements of relocation.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pm-value-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-value-icon mb-0 flex-shrink-0">
                                <i class="bi bi-shield-lock-fill"></i>
                            </div>
                            <h3 class="pm-value-title mb-0">Safety</h3>
                        </div>
                        <p class="pm-value-text">Following proper packing, lifting and transportation procedures.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pm-value-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-value-icon mb-0 flex-shrink-0">
                                <i class="bi bi-clipboard2-check-fill"></i>
                            </div>
                            <h3 class="pm-value-title mb-0">Responsibility</h3>
                        </div>
                        <p class="pm-value-text">Being attentive during every stage of the relocation process.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pm-value-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-value-icon mb-0 flex-shrink-0">
                                <i class="bi bi-emoji-smile-fill"></i>
                            </div>
                            <h3 class="pm-value-title mb-0">Customer Satisfaction</h3>
                        </div>
                        <p class="pm-value-text">Understanding the needs of customers.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="pm-value-card">
                        <div class="d-flex align-items-center gap-3 mb-2">
                            <div class="pm-value-icon mb-0 flex-shrink-0">
                                <i class="bi bi-people-fill"></i>
                            </div>
                            <h3 class="pm-value-title mb-0">Teamwork</h3>
                        </div>
                        <p class="pm-value-text">Working in a team to organize every relocation properly.</p>
                    </div>
                </div>
            </div>
        </article>

        <!-- Section 6: How We Work -->
        <article class="pm-about-card mb-4 mb-lg-5">
            <div class="text-center mb-4">
                <span class="section-badge mb-2">
                    <i class="bi bi-diagram-3-fill text-danger"></i> Transparent Process
                </span>
                <h2 class="section-title mb-2">How We Work</h2>
                <p class="section-subtitle">
                    We make our relocation process as clear as possible to inform customers about what is going to happen next.
                </p>
            </div>

            <div class="row g-3 g-lg-4 mb-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="pm-step-box">
                        <div class="pm-step-header">
                            <span class="pm-step-badge">01</span>
                            <h3 class="pm-step-name">Requirement &amp; Quotation</h3>
                        </div>
                        <p class="pm-step-detail">
                            Firstly, there is an understanding of shifting requirements and preparation of the suitable quotation. After confirmation of the relocation process, we start preparing all packing materials and packing the belongings.
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="pm-step-box">
                        <div class="pm-step-header">
                            <span class="pm-step-badge">02</span>
                            <h3 class="pm-step-name">Packing &amp; Balanced Stacking</h3>
                        </div>
                        <p class="pm-step-detail">
                            After packing, the goods are loaded using appropriate equipment and placed carefully inside the vehicle through balanced stacking.
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="pm-step-box">
                        <div class="pm-step-header">
                            <span class="pm-step-badge">03</span>
                            <h3 class="pm-step-name">GPS Tracking &amp; Transit</h3>
                        </div>
                        <p class="pm-step-detail">
                            During transportation, our GPS tracking support system helps keep customers informed about their shipment.
                        </p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="pm-step-box">
                        <div class="pm-step-header">
                            <span class="pm-step-badge">04</span>
                            <h3 class="pm-step-name">Unloading &amp; Placement</h3>
                        </div>
                        <p class="pm-step-detail">
                            Finally, the goods are unloaded and placed in the required rooms.
                        </p>
                    </div>
                </div>
            </div>

            <div class="p-3 rounded-3 bg-light border-start border-4 border-danger">
                <p class="pm-about-body mb-0">
                    At <strong>Sanvi Packers and Movers</strong>, we understand that trust is important when customers entrust their belongings to someone else. We appreciate this trust and do everything possible to make every relocation experience better.
                </p>
            </div>
        </article>

        <!-- Section 7: Direct Action Banner (CTA) -->
        <div class="pm-about-cta-banner">
            <div class="row align-items-center g-4 position-relative z-2">
                <div class="col-lg-7">
                    <h2 class="pm-about-cta-title">Plan Your Relocation with Our Team to Make It Easier!</h2>
                    <p class="pm-about-cta-desc">
                        Contact Sanvi Packers and Movers at <?= esc($phone ?? '+91 99304 44433') ?> for your relocation requirements. Our team is available 24/7 to assist you.
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
