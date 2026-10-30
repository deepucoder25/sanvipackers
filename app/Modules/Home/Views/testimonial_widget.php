<?php
$testimonials = [
    [
        'quote'    => 'I was relocating my 3BHK household from Delhi to Bangalore and terrified of fragile glassware damage. Sanvi Packers team packed everything with 5-layer certified bubble wrap without a single scratch. The container truck arrived on schedule with live GPS tracking on WhatsApp. Doorstep unpacking and reassembly was completely smooth and stress-free. Best relocation service I have ever experienced!',
        'name'     => 'Rajesh Sharma',
        'role'     => 'Software Architect, Delhi to Bangalore',
    ],
    [
        'quote'    => 'We shifted our 45-workstation corporate office over the weekend with zero disruption. The crew arrived Friday evening with hydraulic lifting equipment and heavy-duty file cartons. Every desktop and server rack was room-labeled and securely transported. By Monday 9 AM, our entire team resumed operations without an hour of downtime. Truly dependable corporate movers.',
        'name'     => 'Amit Verma',
        'role'     => 'Operations Director, Mumbai to Pune',
    ],
    [
        'quote'    => 'I was extremely nervous about shipping my new SUV along with vintage wooden furniture across states. They loaded the vehicle in a dedicated enclosed car trailer with wheel locks. Safe transit with zero scratches, accurate odometer reading, and instant vehicle inspection report. Transparent quote with zero hidden fees at destination. Highly recommended!',
        'name'     => 'Pooja Kulkarni',
        'role'     => 'Senior HR Consultant, Pune to Hyderabad',
    ],
    [
        'quote'    => 'Having served across India in the defence forces, I have relocated eight times in my career. Sanvi Packers is hands down the most disciplined and polite moving crew I have hired. They handled our delicate brass temple idols, framed art, and antique furniture with genuine care and respect. 100% insured, timely, and honest pricing.',
        'name'     => 'Col. R. K. Nair (Retd.)',
        'role'     => 'Defence Relocation, Chandigarh to Kochi',
    ],
];
?>

<section class="py-5 pm-testimonial-section position-relative">
    <div class="container py-lg-5">
        <div class="row align-items-center g-5">
            <!-- Left Column: Title, Trust Badges, Subtitle & Interactive Navigation Buttons -->
            <div class="col-lg-5 col-12 text-center text-lg-start">
                <span class="badge px-3 py-2 rounded-pill text-uppercase mb-3 pm-service-badge">
                    <i class="bi bi-chat-heart-fill me-1"></i> Customer Stories
                </span>

                <h2 class="pm-testi-title mb-3">
                    Voices From
                    <span class="pm-testi-title-accent">Our Clients</span>
                </h2>
                <p class="pm-testi-desc mb-3 mx-auto mx-lg-0">
                    Real words from real clients who relocated hassle-free, on-time, and damage-free across India.
                </p>

                <!-- 4.9/5 Rating & Verified Moves Trust Strip -->
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3 my-4 py-2 border-top border-bottom border-secondary border-opacity-25">
                    <div class="d-flex align-items-center gap-1 text-warning fs-5">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="border-start border-secondary border-opacity-50 ps-3 text-start">
                        <div class="fw-bold text-white small">4.9 / 5.0 Rating</div>
                        <div class="text-white-50 pm-testi-stat-sub">Based on 25,000+ verified moves</div>
                    </div>
                </div>

                <!-- Trust Guarantee Chips -->
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-2 mb-4">
                    <span class="badge rounded-pill pm-testi-chip">
                        <i class="bi bi-shield-check text-warning me-1"></i> 100% Insured
                    </span>
                    <span class="badge rounded-pill pm-testi-chip">
                        <i class="bi bi-geo-alt-fill text-danger me-1"></i> 500+ Cities
                    </span>
                    <span class="badge rounded-pill pm-testi-chip">
                        <i class="bi bi-patch-check-fill text-warning me-1"></i> IBA Approved
                    </span>
                </div>

                <!-- Navigation Prompt & Page Switcher Buttons -->
                <div class="pt-2">
                    <p class="pm-testi-prompt mb-3">Read what our clients say.</p>
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3">
                        <button class="btn pm-btn-page-prev rounded-pill" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev" aria-label="Previous Testimonial">
                            Page Back
                        </button>
                        <button class="btn pm-btn-page-next rounded-pill" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next" aria-label="Next Testimonial">
                            Page Forward
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right Column: The Spiral Ruled Notepad -->
            <div class="col-lg-7 col-12">
                <div class="pm-notebook-wrapper">
                    <div class="pm-notebook-paper position-relative">
                        <!-- Spiral Binder Spine (9 Wire Coil Rings through Punched Holes) -->
                        <div class="pm-notebook-spine">
                            <?php for ($i = 0; $i < 9; $i++): ?>
                                <div class="pm-spiral-hole">
                                    <span class="pm-spiral-ring"></span>
                                </div>
                            <?php endfor; ?>
                        </div>

                        <!-- Top-Right Page Counter -->
                        <span id="pmPageCounter" class="pm-notebook-counter">1 / <?= count($testimonials) ?></span>

                        <!-- Bootstrap Carousel of Client Reviews with 3D Page-Turn Animation -->
                        <div id="testimonialCarousel" class="carousel slide pm-carousel-pageflip" data-bs-ride="false" data-bs-interval="false">
                            <div class="carousel-inner">
                                <?php foreach ($testimonials as $idx => $t): ?>
                                    <div class="carousel-item <?= $idx === 0 ? 'active' : '' ?>">
                                        <p class="pm-notebook-quote">
                                            &ldquo;<?= esc($t['quote']) ?>&rdquo;
                                        </p>
                                        <div class="pm-notebook-author"><?= esc($t['name']) ?></div>
                                        <div class="pm-notebook-role"><?= esc($t['role']) ?></div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dynamic Carousel Page Counter Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    var tc = document.getElementById('testimonialCarousel');
    var counter = document.getElementById('pmPageCounter');
    if (tc && counter) {
        tc.addEventListener('slide.bs.carousel', function (e) {
            counter.textContent = (e.to + 1) + ' / <?= count($testimonials) ?>';
        });
    }
});
</script>

