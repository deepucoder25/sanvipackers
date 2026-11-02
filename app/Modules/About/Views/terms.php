<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Terms & Conditions',
    'subtitle'    => 'Operational standards, moving guidelines, and service agreements governing ' . $company3 . '.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Terms & Conditions'],
    ],
]) ?>

<div class="pm-legal-page-wrap">
    <div class="container">

        <!-- Terms Meta / Document Header Bar -->
        <div class="pm-legal-meta-bar">
            <div>
                <span class="pm-legal-meta-badge">
                    <i class="bi bi-file-earmark-text-fill" aria-hidden="true"></i> Service Agreement
                </span>
                <h1 class="pm-legal-meta-title">Relocation &amp; Transport Terms of Service</h1>
            </div>
            <div>
                <span class="pm-legal-updated-pill">
                    <i class="bi bi-calendar-check text-danger" aria-hidden="true"></i> Effective: October 2026
                </span>
            </div>
        </div>

        <div class="row g-4">
            <!-- Main Legal Content -->
            <div class="col-lg-8">
                <div class="pm-legal-card">

                    <!-- Terms Agreement Callout -->
                    <div class="pm-legal-callout">
                        <p>
                            <strong>Service Agreement:</strong> By booking a moving quotation, signing a consignment note (G.R. / Bilty), or engaging the packing, shifting, vehicle transit, and warehousing services of <strong><?= $company3 ?></strong>, you agree to comply with and be bound by the operational terms and conditions set forth below.
                        </p>
                    </div>

                    <!-- Section 1 -->
                    <div class="pm-legal-section" id="sec-1">
                        <h2 class="pm-legal-sec-title">
                            <span class="pm-legal-num-badge">1</span>
                            Quotations, Surveys &amp; Pricing Estimates
                        </h2>
                        <ul class="pm-legal-list">
                            <li><strong>Inventory Scope:</strong> All relocation quotations are structured strictly based on the consignment inventory agreed upon during the pre-move physical inspection or digital video survey.</li>
                            <li><strong>Supplemental Labor Considerations:</strong> Unscheduled items added on loading day, non-functional elevators on upper floors, or long-carry walks exceeding 50 feet from the parked vehicle may incur modest supplementary labor charges.</li>
                            <li><strong>Specialized Appliance Handling:</strong> Dismantling and re-mounting of wall LED televisions, split air conditioners, modular kitchen chimneys, and ceiling fans are specialized carpenter/electrician services available upon advance request.</li>
                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div class="pm-legal-section" id="sec-2">
                        <h2 class="pm-legal-sec-title">
                            <span class="pm-legal-num-badge">2</span>
                            Prohibited &amp; Restricted Articles
                        </h2>
                        <p>To guarantee public safety and adhere strictly to all interstate highway transport regulations, our vehicles <strong>strictly prohibit</strong> the carriage of:</p>
                        <ul class="pm-legal-list">
                            <li>Combustible substances, gas cylinders, petroleum cans, flammable spirits, or fireworks.</li>
                            <li>Physical currency notes, precious bullion, fine jewelry, bearer bonds, original land deeds, and irreplaceable personal documents (clients must transport these in personal custody).</li>
                            <li>Perishable food items, live plants, domestic pets, unlicensed firearms, or contraband goods.</li>
                        </ul>
                        <div class="pm-legal-warning-box">
                            <i class="bi bi-exclamation-triangle-fill" aria-hidden="true"></i>
                            <div>
                                <strong>Client Responsibility:</strong> The consignor bears complete legal liability if any undeclared prohibited or contraband articles are discovered during highway statutory inspections.
                            </div>
                        </div>
                    </div>

                    <!-- Section 3 -->
                    <div class="pm-legal-section" id="sec-3">
                        <h2 class="pm-legal-sec-title">
                            <span class="pm-legal-num-badge">3</span>
                            Packaging &amp; Vehicle Transport Guidelines
                        </h2>
                        <ul class="pm-legal-list">
                            <li><strong>Vehicle Relocation Standards:</strong> Automobiles and motorcycles must be handed over with fuel levels under 5 liters as required by national fire safety standards. A joint inspection report documenting existing odometer readings and minor paint blemishes will be signed prior to car carrier loading.</li>
                            <li><strong>Refrigeration &amp; Drainage:</strong> Refrigerators must be completely defrosted at least 24 hours before pickup. Washing machines and water filtration systems must be thoroughly drained to prevent transit water seepage.</li>
                            <li><strong>High-Value Articles:</strong> Glassware, marble tabletops, and fine art require mandatory multi-layer corrugated bubble crating executed by our specialized packaging crew.</li>
                        </ul>
                    </div>

                    <!-- Section 4 -->
                    <div class="pm-legal-section" id="sec-4">
                        <h2 class="pm-legal-sec-title">
                            <span class="pm-legal-num-badge">4</span>
                            Transit Insurance &amp; Claims Settlement
                        </h2>
                        <p>Transit risk protection underwrites unforeseen external collision, overturn, transit fire, or non-delivery incidents during intercity transport:</p>
                        <ul class="pm-legal-list">
                            <li><strong>Reporting Window:</strong> Any noticeable exterior damage must be formally endorsed on the delivery copy of the consignment bill and reported to <?= $company3 ?> within <strong>48 hours of delivery</strong>.</li>
                            <li><strong>Documentation Requirements:</strong> Claims assessment necessitates photographic proof of damaged goods, declared valuation receipts, and the countersigned pre-move inventory manifest.</li>
                            <li><strong>Exclusions:</strong> Internal mechanical or digital malfunctions of electronic equipment not resulting from physical exterior transit impact, or boxes packed independently by the client, fall outside transit insurance coverage.</li>
                        </ul>
                    </div>

                    <!-- Section 5 -->
                    <div class="pm-legal-section" id="sec-5">
                        <h2 class="pm-legal-sec-title">
                            <span class="pm-legal-num-badge">5</span>
                            Payment Milestones &amp; Rescheduling Terms
                        </h2>
                        <ul class="pm-legal-list">
                            <li><strong>Payment Schedule:</strong> Relocation bookings require an advance token upon slot confirmation, with the remaining transit balance settled upon vehicle dispatch or prior to unloading at destination as stated in the quotation bill.</li>
                            <li><strong>Rescheduling Flexibility:</strong> Shifting dates can be rescheduled without charge when notified at least 48 hours prior to scheduled packing. Short-notice same-day cancellations may incur nominal dispatch cancellation fees.</li>
                        </ul>
                    </div>

                    <!-- Section 6 -->
                    <div class="pm-legal-section" id="sec-6">
                        <h2 class="pm-legal-sec-title">
                            <span class="pm-legal-num-badge">6</span>
                            Force Majeure &amp; Transit Timelines
                        </h2>
                        <p>
                            While our fleet consistently maintains punctual transit records, <?= $company3 ?> is not held liable for highway schedule disruptions stemming from events beyond reasonable operational control, including severe weather disruptions, landslides, regional curfews, unexpected bridge repairs, or statutory road blockades.
                        </p>
                    </div>

                    <!-- Contact Box -->
                    <div class="pm-legal-contact-card">
                        <h3 class="pm-legal-contact-title">Have Questions About Our Moving Terms?</h3>
                        <p class="text-muted small mb-3">Our dedicated customer care desk is readily available to clarify clauses or assist with customized corporate moving contracts:</p>
                        
                        <div class="pm-legal-contact-grid">
                            <div class="pm-legal-contact-item">
                                <span class="pm-legal-contact-label">Company</span>
                                <div class="pm-legal-contact-val"><?= $company3 ?></div>
                            </div>
                            <div class="pm-legal-contact-item">
                                <span class="pm-legal-contact-label">Customer Support</span>
                                <div class="pm-legal-contact-val">
                                    <a href="<?= $mailhtml ?>"><?= $mail ?></a>
                                </div>
                            </div>
                            <div class="pm-legal-contact-item">
                                <span class="pm-legal-contact-label">Direct Helpline</span>
                                <div class="pm-legal-contact-val">
                                    <a <?= $phonehtml ?>><?= $phone ?></a>
                                </div>
                            </div>
                                <div class="pm-legal-contact-item">
                                    <span class="pm-legal-contact-label">Registered Office</span>
                                    <div class="pm-legal-contact-val small"><?= $address ?></div>
                                </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 pt-2">
                            <a <?= $phonehtml ?> class="pm-btn-red" title="Call Customer Care" aria-label="Call Customer Care">
                                <i class="bi bi-telephone-fill" aria-hidden="true"></i> Call Helpline
                            </a>
                            <a href="<?= $whatsapphtml ?>" target="_blank" rel="noopener noreferrer" class="pm-btn-whatsapp-pill" title="WhatsApp Support" aria-label="WhatsApp Support">
                                <i class="bi bi-whatsapp" aria-hidden="true"></i> WhatsApp Support
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Sticky Sidebar -->
            <div class="col-lg-4 d-none d-lg-block">
                <div class="pm-legal-sidebar-sticky">
                    <!-- Quick Table of Contents -->
                    <div class="pm-legal-toc-card">
                        <div class="pm-legal-toc-header">
                            <i class="bi bi-list-check text-danger" aria-hidden="true"></i> Terms Navigation
                        </div>
                        <ul class="pm-legal-toc-list">
                            <li>
                                <a href="#sec-1" class="pm-legal-toc-link active">
                                    <span class="pm-legal-toc-num">1</span> Quotations &amp; Surveys
                                </a>
                            </li>
                            <li>
                                <a href="#sec-2" class="pm-legal-toc-link">
                                    <span class="pm-legal-toc-num">2</span> Prohibited Articles
                                </a>
                            </li>
                            <li>
                                <a href="#sec-3" class="pm-legal-toc-link">
                                    <span class="pm-legal-toc-num">3</span> Packaging &amp; Vehicles
                                </a>
                            </li>
                            <li>
                                <a href="#sec-4" class="pm-legal-toc-link">
                                    <span class="pm-legal-toc-num">4</span> Insurance &amp; Claims
                                </a>
                            </li>
                            <li>
                                <a href="#sec-5" class="pm-legal-toc-link">
                                    <span class="pm-legal-toc-num">5</span> Payments &amp; Rescheduling
                                </a>
                            </li>
                            <li>
                                <a href="#sec-6" class="pm-legal-toc-link">
                                    <span class="pm-legal-toc-num">6</span> Force Majeure
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Trust Showcase Box -->
                    <div class="pm-legal-trust-card">
                        <h3 class="pm-legal-trust-title">Transparent Relocations</h3>
                        <p class="pm-legal-trust-sub">Clear contracts with zero hidden costs, backed by certified all-India transit insurance.</p>
                        <div class="pm-legal-trust-item">
                            <i class="bi bi-patch-check-fill" aria-hidden="true"></i>
                            <span>Zero Hidden Charges Policy</span>
                        </div>
                        <div class="pm-legal-trust-item">
                            <i class="bi bi-shield-check" aria-hidden="true"></i>
                            <span>100% Comprehensive Transit Cover</span>
                        </div>
                        <div class="pm-legal-trust-item">
                            <i class="bi bi-geo-alt-fill" aria-hidden="true"></i>
                            <span>Nationwide Intercity Network</span>
                        </div>
                        <div class="pm-legal-trust-item">
                            <i class="bi bi-telephone-inbound" aria-hidden="true"></i>
                            <span>Dedicated Moving Supervisor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const sections = document.querySelectorAll('.pm-legal-section, .pm-legal-contact-card');
    const navLinks = document.querySelectorAll('.pm-legal-toc-link');

    if ('IntersectionObserver' in window && sections.length && navLinks.length) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute('id');
                    if (id) {
                        navLinks.forEach(link => {
                            if (link.getAttribute('href') === '#' + id) {
                                link.classList.add('active');
                            } else {
                                link.classList.remove('active');
                            }
                        });
                    }
                }
            });
        }, {
            rootMargin: '-15% 0px -65% 0px'
        });

        sections.forEach(sec => observer.observe(sec));
    }
});
</script>
