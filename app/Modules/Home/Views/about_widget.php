<section class="py-5 pm-about-section">
    <div class="container py-lg-4">
        <!-- Main About Grid -->
        <div class="row g-4 g-lg-5 align-items-center">
            <!-- Left Column: 2-3 Multi-Image Bento Box with Floating Trust Badges -->
            <div class="col-lg-6">
                <div class="position-relative pm-about-media pe-lg-3">
                    <!-- 3-Image Collage Grid -->
                    <div class="row g-3 pm-about-gallery">
                        <!-- Main Large Featured Image (Image 1) -->
                        <div class="col-7">
                            <div class="rounded-4 overflow-hidden shadow-sm pm-about-img-box pm-img-box-lg position-relative">
                                <img src="<?= base_url('assets/img/about/about-1.jpg') ?>" 
                                     alt="Safe Home Relocation" 
                                     class="img-fluid w-100 h-100 object-fit-cover pm-about-img" 
                                     loading="lazy">
                            </div>
                        </div>

                        <!-- 2 Stacked Supporting Images (Image 2 & 3) -->
                        <div class="col-5 d-flex flex-column gap-3">
                            <!-- Image 2: Packing Crew / Materials -->
                            <div class="rounded-4 overflow-hidden shadow-sm pm-about-img-box pm-img-box-sm position-relative">
                                <img src="<?= base_url('assets/img/about/about-2.jpg') ?>" 
                                     alt="Expert Packing Crew and Material" 
                                     class="img-fluid w-100 h-100 object-fit-cover pm-about-img" 
                                     loading="lazy">
                            </div>
                            <!-- Image 3: Transport Truck / Logistics Fleet -->
                            <div class="rounded-4 overflow-hidden shadow-sm pm-about-img-box pm-img-box-sm position-relative">
                                <img src="<?= base_url('assets/img/about/about-3.jpg') ?>" 
                                     alt="Dedicated Moving Trucks Fleet" 
                                     class="img-fluid w-100 h-100 object-fit-cover pm-about-img" 
                                     loading="lazy">
                            </div>
                        </div>
                    </div>

                    <!-- Floating ISO Certified Pill (Top-Right) -->
                    <div class="position-absolute pm-about-iso-pill badge rounded-pill bg-white shadow-sm border py-2 px-3 text-dark d-flex align-items-center gap-2">
                        <i class="bi bi-patch-check-fill text-danger fs-6"></i>
                        <span class="fw-bold small">ISO 9001:2015 Certified</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Story, 4 Value Pillars & Quick Actions -->
            <div class="col-lg-6">
                <div class="ps-lg-2">
                    <span class="text-uppercase fw-bold pm-about-tag small d-inline-flex align-items-center gap-1 mb-2">
                        <i class="bi bi-lightning-charge-fill text-warning"></i> Fast, Reliable &amp; Insured
                    </span>
                    <h2 class="h2 fw-bold text-dark mb-3 pm-about-heading">
                        Making Relocations <span class="pm-text-red">Smooth, Safe</span> &amp; Stress-Free
                    </h2>
                    <p class="text-muted mb-4 pm-about-desc">
                        Founded with a mission to eliminate moving stress, <?= esc($company ?? 'Sanvi Packers & Movers') ?> provides comprehensive home shifting, office relocation, warehousing, and vehicle transport across 500+ Indian cities. Our certified crew, heavy-duty 5-layer bubble packaging, and dedicated move coordinators ensure your valuables arrive in pristine condition.
                    </p>

                    <!-- 4 Key Value Pillars (2x2 Grid) -->
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 bg-white border shadow-sm d-flex align-items-center gap-3 pm-pillar-card h-100">
                                <span class="pm-pillar-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-shield-fill-check"></i>
                                </span>
                                <div>
                                    <h3 class="h6 fw-bold mb-0 text-dark">Zero-Damage Move</h3>
                                    <span class="text-muted small">Transit insurance cover</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 bg-white border shadow-sm d-flex align-items-center gap-3 pm-pillar-card h-100">
                                <span class="pm-pillar-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-box-seam-fill"></i>
                                </span>
                                <div>
                                    <h3 class="h6 fw-bold mb-0 text-dark">5-Layer Packaging</h3>
                                    <span class="text-muted small">Bubble wrap &amp; cartons</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 bg-white border shadow-sm d-flex align-items-center gap-3 pm-pillar-card h-100">
                                <span class="pm-pillar-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-clock-history"></i>
                                </span>
                                <div>
                                    <h3 class="h6 fw-bold mb-0 text-dark">On-Time Shifting</h3>
                                    <span class="text-muted small">Punctual doorstep delivery</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 bg-white border shadow-sm d-flex align-items-center gap-3 pm-pillar-card h-100">
                                <span class="pm-pillar-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </span>
                                <div>
                                    <h3 class="h6 fw-bold mb-0 text-dark">GPS Live Tracking</h3>
                                    <span class="text-muted small">Real-time status updates</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons Row -->
                    <div class="pt-3 d-flex flex-wrap align-items-center gap-2 border-top pm-about-action-row">
                        <a href="<?= site_url('about') ?>" class="btn btn-outline-dark rounded-pill px-4 fw-bold pm-about-btn">
                            Know More <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                        <button type="button" class="btn btn-danger rounded-pill px-4 fw-bold pm-btn-red" data-bs-toggle="modal" data-bs-target="#qteModal">
                            Get Free Quote
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
