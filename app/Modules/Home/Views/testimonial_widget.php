<?php
$testimonials = [
    [
        'quote'    => 'Recently we shifted to our new 3BHK house, and there were many things to be packed. Our furniture, kitchenware and appliances have been taken care of by the Sanvi team very well.',
        'name'     => 'Rahul Sharma',
        'role'     => 'Kolkata, West Bengal (3BHK Shifting)',
    ],
    [
        'quote'    => 'Our office equipment including the computers and workstations have been shifted by the team of Sanvi Packers and Movers. Proper planning of packing and loading has helped us get rid of unnecessary confusion. We are satisfied with their cooperation.',
        'name'     => 'Ankit Verma',
        'role'     => 'Gurugram, Haryana (Office Shifting)',
    ],
    [
        'quote'    => 'I was feeling worried about how to transport my newly bought car during relocation. But the team has guided me about the process and provided the facility of GPS tracking. My car reached safely.',
        'name'     => 'Sandeep Mehta',
        'role'     => 'Pune, Maharashtra (Car Shifting)',
    ],
    [
        'quote'    => 'Some heavy furniture and a refrigerator needed special attention, and the team has used proper equipment for the job. The whole process has been done cautiously including handling through narrow doors.',
        'name'     => 'Priya Agarwal',
        'role'     => 'Jaipur, Rajasthan (Household Relocation)',
    ],
    [
        'quote'    => 'Shifting of my entire household has been done to Bengaluru due to my job transfer. The GPS tracking and regular updates of transit have been useful for us during the long-distance shifting process.',
        'name'     => 'Vikram Roy',
        'role'     => 'Bengaluru, Karnataka (Long-Distance Move)',
    ],
];
?>

<section class="py-5 pm-testimonial-section position-relative">
    <div class="container py-lg-5 position-relative z-2">
        <div class="row align-items-center g-5">
            <!-- Left Column: Title, Trust Badges & Metrics -->
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
                <div class="d-flex align-items-center justify-content-center justify-content-lg-start gap-3 my-4 py-2 border-top border-bottom border-danger-subtle">
                    <div class="d-flex align-items-center gap-1 text-warning fs-5">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <div class="border-start border-danger-subtle ps-3 text-start">
                        <div class="fw-bold text-dark small">4.9 / 5.0 Rating</div>
                        <div class="text-muted pm-testi-stat-sub">Based on 25,000+ verified moves</div>
                    </div>
                </div>

                <!-- Trust Guarantee Chips -->
                <div class="d-flex flex-wrap justify-content-center justify-content-lg-start gap-2 mb-3">
                    <span class="badge rounded-pill pm-testi-chip">
                        <i class="bi bi-shield-check text-warning me-1"></i> 100% Insured
                    </span>
                    <span class="badge rounded-pill pm-testi-chip">
                        <i class="bi bi-geo-alt-fill text-danger me-1"></i> Verified Movers
                    </span>
                </div>

                <p class="pm-testi-prompt mb-0 d-none d-lg-block">
                    <i class="bi bi-check2-circle text-danger me-1"></i> Read handwritten relocations diaries from our customers.
                </p>
            </div>

            <!-- Right Column: The Spiral Ruled Notepad with Page Back & Page Forward on Top -->
            <div class="col-lg-7 col-12">
                <!-- Navigation Toolbar placed directly ABOVE the testimonial box -->
                <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between gap-2 mb-3 px-1 pm-testi-top-toolbar">
                    <div class="d-flex align-items-center">
                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 rounded-pill px-3 py-2 small fw-bold">
                            <i class="bi bi-journal-bookmark-fill me-1"></i> Verified Client Diary
                        </span>
                    </div>
                    <div class="d-flex align-items-center gap-2 ms-sm-auto w-100 w-sm-auto justify-content-between justify-content-sm-end pm-testi-nav-btns">
                        <button class="btn pm-btn-page-prev rounded-pill" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev" aria-label="Previous Testimonial">
                            <i class="bi bi-arrow-left me-1"></i> Page Back
                        </button>
                        <button class="btn pm-btn-page-next rounded-pill" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next" aria-label="Next Testimonial">
                            Page Forward <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </div>
                </div>

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

