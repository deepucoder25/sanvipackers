<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'About Our Company',
    'subtitle'    => 'Learn about our journey, certified team, and commitment to delivering peace of mind on every move.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'About Us'],
    ],
]) ?>

<div class="pm-about-page-wrap">
    <div class="container">
        <!-- Section 1: Our Story (Full Width Col-12) -->
        <div class="pm-about-card">
            <div class="row">
                <div class="col-12">
                    <span class="section-badge mb-2">
                        <i class="bi bi-clock-history"></i> Our Story &amp; Heritage
                    </span>
                    <h2 class="section-title mb-3">Redefining Moving Standards Across Mumbai, Navi Mumbai and Thane</h2>
                    
                    <p class="pm-about-lead">
                        Welcome to <strong><?= $company3 ?></strong> — your trusted relocation partner dedicated to making home and office shifting completely safe, transparent, and stress-free across Mumbai, Navi Mumbai, and Thane.
                    </p>
                    
                    <p class="pm-about-body">
                        Founded with a mission to deliver 100% damage-free moves, we have grown into the most reliable moving network across Mumbai, Navi Mumbai, and Thane. From dedicated container transport trucks and climate-controlled warehousing to over 150+ certified packing professionals, we handle every household and corporate relocation with utmost care — giving you complete peace of mind.
                    </p>

                    <!-- Mission & Vision Bento Cards -->
                    <div class="pm-mv-grid">
                        <div class="pm-mv-card mission">
                            <div class="pm-mv-header">
                                <div class="pm-mv-icon" aria-hidden="true">
                                    <i class="bi bi-bullseye"></i>
                                </div>
                                <h3 class="pm-mv-title">Our Mission</h3>
                            </div>
                            <p class="pm-mv-desc">To deliver effortless, zero-damage relocation experiences backed by punctuality, care, and technology.</p>
                        </div>

                        <div class="pm-mv-card vision">
                            <div class="pm-mv-header">
                                <div class="pm-mv-icon" aria-hidden="true">
                                    <i class="bi bi-eye-fill"></i>
                                </div>
                                <h3 class="pm-mv-title">Our Vision</h3>
                            </div>
                            <p class="pm-mv-desc">To be the most customer-centric logistics and relocation brand across Mumbai, Navi Mumbai, and Thane through integrity, care, and transparent pricing.</p>
                        </div>
                    </div>

                    <!-- Trust Certifications Strip -->
                    <div class="pm-about-trust-pills">
                        <span class="pm-about-trust-pill">
                            <i class="bi bi-patch-check-fill" aria-hidden="true"></i> ISO 9001:2015 Certified
                        </span>
                        <span class="pm-about-trust-pill">
                            <i class="bi bi-shield-check" aria-hidden="true"></i> 100% Insured Moves
                        </span>
                        <span class="pm-about-trust-pill">
                            <i class="bi bi-geo-alt-fill" aria-hidden="true"></i> Doorstep Moving Service
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 2: 4 Pillars of Relocation Excellence -->
        <div class="pm-about-card">
            <div class="text-center mb-4">
                <span class="section-badge mb-2">
                    <i class="bi bi-gem"></i> Why Choose Us
                </span>
                <h2 class="section-title mb-2">The Pillars of Our Moving Standard</h2>
                <p class="section-subtitle">Every relocation is planned and executed with meticulous safety standards, precision tools, and transparent care.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="pm-pillar-item">
                        <div class="pm-pillar-header">
                            <div class="pm-pillar-icon-box" aria-hidden="true">
                                <i class="bi bi-layers-fill"></i>
                            </div>
                            <h3 class="pm-pillar-title">Multi-Layer Smart Packing</h3>
                        </div>
                        <p class="pm-pillar-text">Heavy-duty bubble wrap, corrugated sheets, foam rolls, and stretch film guarantee scratch-free protection for fragile goods.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="pm-pillar-item">
                        <div class="pm-pillar-header">
                            <div class="pm-pillar-icon-box" aria-hidden="true">
                                <i class="bi bi-truck-front-fill"></i>
                            </div>
                            <h3 class="pm-pillar-title">Closed-Body Container Fleet</h3>
                        </div>
                        <p class="pm-pillar-text">Weatherproof, lock-sealed trucks with air-suspension and live GPS tracking protect shipments from dust, rain, and transit jerks.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="pm-pillar-item">
                        <div class="pm-pillar-header">
                            <div class="pm-pillar-icon-box" aria-hidden="true">
                                <i class="bi bi-person-check-fill"></i>
                            </div>
                            <h3 class="pm-pillar-title">Verified In-House Crew</h3>
                        </div>
                        <p class="pm-pillar-text">Background-checked, full-time packers and experienced moving coordinators handle your items with utmost respect and diligence.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="pm-pillar-item">
                        <div class="pm-pillar-header">
                            <div class="pm-pillar-icon-box" aria-hidden="true">
                                <i class="bi bi-shield-shaded"></i>
                            </div>
                            <h3 class="pm-pillar-title">Comprehensive Insurance</h3>
                        </div>
                        <p class="pm-pillar-text">All-risk comprehensive transit insurance with seamless cashless claim assistance ensures total peace of mind throughout the move.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 3: Our 4-Step Move Workflow -->
        <div class="pm-about-card">
            <div class="text-center mb-4">
                <span class="section-badge mb-2">
                    <i class="bi bi-diagram-3-fill"></i> How It Works
                </span>
                <h2 class="section-title mb-2">A Smooth 4-Step Relocation Journey</h2>
                <p class="section-subtitle">From initial survey to unpacking at your new home, our streamlined process eliminates moving stress completely.</p>
            </div>

            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="pm-step-box">
                        <div class="pm-step-header">
                            <span class="pm-step-badge">01</span>
                            <h3 class="pm-step-name">Instant Survey &amp; Quote</h3>
                        </div>
                        <p class="pm-step-detail">Free in-home or digital video survey to understand your inventory and deliver an upfront transparent price estimate.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="pm-step-box">
                        <div class="pm-step-header">
                            <span class="pm-step-badge">02</span>
                            <h3 class="pm-step-name">Multi-Layer Packing</h3>
                        </div>
                        <p class="pm-step-detail">Uniformed specialists arrive with premium materials to safely pack electronics, glassware, furniture, and personal goods.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="pm-step-box">
                        <div class="pm-step-header">
                            <span class="pm-step-badge">03</span>
                            <h3 class="pm-step-name">Secure GPS Transit</h3>
                        </div>
                        <p class="pm-step-detail">Containerized transport with real-time tracking updates, scheduled route checkpoints, and dedicated move supervision.</p>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="pm-step-box">
                        <div class="pm-step-header">
                            <span class="pm-step-badge">04</span>
                            <h3 class="pm-step-name">Unpacking &amp; Setup</h3>
                        </div>
                        <p class="pm-step-detail">Doorstep unloading, furniture re-assembly, careful room-wise placement, and eco-friendly packing debris removal.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section 4: Direct Action Banner (CTA) -->
        <div class="pm-about-cta-banner">
            <div class="row align-items-center g-4 position-relative z-2">
                <div class="col-lg-7">
                    <h2 class="pm-about-cta-title">Ready for a Smooth Move with <?= $company3 ?>?</h2>
                    <p class="pm-about-cta-desc">
                        Get in touch with our moving coordinators for an upfront estimate with zero hidden fees. Experience Mumbai, Navi Mumbai &amp; Thane’s most reliable relocation service.
                    </p>
                </div>
                <div class="col-lg-5">
                    <div class="pm-about-cta-actions justify-content-lg-end">
                        <a <?= $phonehtml ?> class="pm-btn-red" title="Call Now" aria-label="Call Now">
                            <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                            <span class="d-none d-md-inline">Call <?= $phone ?></span>
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
