<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Privacy Policy',
    'subtitle'    => 'How ' . $company3 . ' protects, manages, and safeguards your personal data.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Privacy Policy'],
    ],
]) ?>

<div class="pm-legal-page-wrap">
    <div class="container">

        <!-- Policy Meta / Document Header Bar -->
        <div class="pm-legal-meta-bar">
            <div>
                <span class="pm-legal-meta-badge">
                    <i class="bi bi-shield-lock-fill" aria-hidden="true"></i> Document Policy
                </span>
                <h1 class="pm-legal-meta-title">Data Protection &amp; User Privacy Commitment</h1>
            </div>
            <div>
                <span class="pm-legal-updated-pill">
                    <i class="bi bi-calendar-check text-danger" aria-hidden="true"></i> Last Updated: October 2026
                </span>
            </div>
        </div>

        <div class="row g-4">
            <!-- Main Legal Content -->
            <div class="col-lg-8">
                <div class="pm-legal-card">

                    <!-- Privacy Commitment Callout -->
                    <div class="pm-legal-callout">
                        <p>
                            <strong>Privacy Commitment:</strong> At <strong><?= $company3 ?></strong>, we are committed to respecting and protecting the personal privacy of all our clients, website visitors, and corporate logistics partners. This Privacy Policy outlines how we collect, handle, store, and safeguard your data during home shifting, office relocation, vehicle transit, and warehousing services.
                        </p>
                    </div>

                    <!-- Section 1 -->
                    <div class="pm-legal-section" id="sec-1">
                        <h2 class="pm-legal-sec-title">
                            <span class="pm-legal-num-badge">1</span>
                            Information We Collect
                        </h2>
                        <p>When you request a relocation quote, schedule a doorstep survey, or book our shifting services, we may collect the following operational details:</p>
                        <ul class="pm-legal-list">
                            <li><strong>Contact Identifiers:</strong> Full legal name, mobile number, alternate phone number, and verified email address.</li>
                            <li><strong>Relocation Coordinates:</strong> Origin pickup address with floor/elevator details, destination address, and preferred relocation schedule.</li>
                            <li><strong>Consignment Inventory:</strong> Comprehensive list of household articles, delicate glassware, declared valuations, and vehicle registration details (for car/bike carrier transit).</li>
                            <li><strong>Billing &amp; Tax Information:</strong> GSTIN (for corporate and commercial billing), invoice records, and digital payment transaction confirmations.</li>
                            <li><strong>Technical Analytics:</strong> Anonymized device telemetry, IP address, and browser cookies to maintain portal security and prevent automated form spam.</li>
                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div class="pm-legal-section" id="sec-2">
                        <h2 class="pm-legal-sec-title">
                            <span class="pm-legal-num-badge">2</span>
                            How We Use Your Data
                        </h2>
                        <p>Collected customer records are utilized exclusively for legitimate relocation operations and logistics fulfillment:</p>
                        <ul class="pm-legal-list">
                            <li>Generating transparent moving estimates and organizing pre-move physical or virtual video surveys.</li>
                            <li>Assigning certified packing supervisors, dedicated trucks, and regional loading teams to your premises.</li>
                            <li>Underwriting comprehensive all-risk transit insurance policies with licensed general insurance underwriters.</li>
                            <li>Transmitting real-time SMS and WhatsApp milestone notifications regarding consignment loading, highway transit checkpoints, and destination delivery schedules.</li>
                            <li>Addressing post-delivery inquiries, claim evaluations, and client satisfaction feedback.</li>
                        </ul>
                    </div>

                    <!-- Section 3 -->
                    <div class="pm-legal-section" id="sec-3">
                        <h2 class="pm-legal-sec-title">
                            <span class="pm-legal-num-badge">3</span>
                            Strict No-Spam &amp; Zero Third-Party Sale Policy
                        </h2>
                        <p>
                            <strong>We never sell, rent, monetize, or trade your personal information to third-party telemarketers or marketing agencies.</strong> Your data is accessed strictly by verified operations coordinators and logistics crews assigned to your relocation contract.
                        </p>
                        <div class="pm-legal-warning-box">
                            <i class="bi bi-shield-fill-check" aria-hidden="true"></i>
                            <div>
                                <strong>Zero Commercial Data Sharing:</strong> Data sharing occurs only with essential regulatory entities, verified transit drivers, insurance adjusters, or judicial authorities when mandated by Indian statutory regulations.
                            </div>
                        </div>
                    </div>

                    <!-- Section 4 -->
                    <div class="pm-legal-section" id="sec-4">
                        <h2 class="pm-legal-sec-title">
                            <span class="pm-legal-num-badge">4</span>
                            Data Security &amp; Storage Protocols
                        </h2>
                        <p>We deploy enterprise-grade digital and administrative safeguards to protect your personal information against unauthorized access, loss, or manipulation:</p>
                        <ul class="pm-legal-list">
                            <li>End-to-end 256-bit SSL/TLS cryptographic encryption across all website quote requests and contact endpoints.</li>
                            <li>Role-based access management ensuring only vetted moving coordinators can view client consignment files.</li>
                            <li>Automated cloud backups with strict data retention cycles in compliance with statutory Indian accounting and transport standards.</li>
                        </ul>
                    </div>

                    <!-- Section 5 -->
                    <div class="pm-legal-section" id="sec-5">
                        <h2 class="pm-legal-sec-title">
                            <span class="pm-legal-num-badge">5</span>
                            Your Privacy Rights &amp; Consent Control
                        </h2>
                        <p>As our valued client, you retain absolute authority over how your personal details are processed:</p>
                        <ul class="pm-legal-list">
                            <li><strong>Right of Access &amp; Correction:</strong> You may request a summary of your stored client profile or update contact numbers at any point.</li>
                            <li><strong>Data Erasure:</strong> Following the successful completion of your move and statutory audit retention windows, you may request permanent deletion of your records.</li>
                            <li><strong>Communication Preferences:</strong> You can opt out of non-transactional informational updates or newsletters at any time.</li>
                        </ul>
                    </div>

                    <!-- Section 6: Contact & Compliance Desk -->
                    <div class="pm-legal-contact-card" id="sec-6">
                        <h3 class="pm-legal-contact-title">Privacy Grievance &amp; Compliance Desk</h3>
                        <p class="text-muted small mb-3">If you have questions regarding this Privacy Policy or wish to exercise your data rights, please reach our dedicated compliance officer:</p>
                        
                        <div class="pm-legal-contact-grid">
                            <div class="pm-legal-contact-item">
                                <span class="pm-legal-contact-label">Organization</span>
                                <div class="pm-legal-contact-val"><?= $company3 ?></div>
                            </div>
                            <div class="pm-legal-contact-item">
                                <span class="pm-legal-contact-label">Compliance Email</span>
                                <div class="pm-legal-contact-val">
                                    <a href="<?= $mailhtml ?>"><?= $mail ?></a>
                                </div>
                            </div>
                            <div class="pm-legal-contact-item">
                                <span class="pm-legal-contact-label">24/7 Helpline</span>
                                <div class="pm-legal-contact-val">
                                    <a <?= $phonehtml ?>><?= $phone ?></a>
                                </div>
                            </div>
                                <div class="pm-legal-contact-item">
                                    <span class="pm-legal-contact-label">Head Office</span>
                                    <div class="pm-legal-contact-val small"><?= $address ?></div>
                                </div>
                        </div>

                        <div class="d-flex flex-wrap gap-2 pt-2">
                            <a <?= $phonehtml ?> class="pm-btn-red" title="Call Helpline" aria-label="Call Helpline">
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
                            <i class="bi bi-list-nested text-danger" aria-hidden="true"></i> Document Sections
                        </div>
                        <ul class="pm-legal-toc-list">
                            <li>
                                <a href="#sec-1" class="pm-legal-toc-link active">
                                    <span class="pm-legal-toc-num">1</span> Information We Collect
                                </a>
                            </li>
                            <li>
                                <a href="#sec-2" class="pm-legal-toc-link">
                                    <span class="pm-legal-toc-num">2</span> How We Use Data
                                </a>
                            </li>
                            <li>
                                <a href="#sec-3" class="pm-legal-toc-link">
                                    <span class="pm-legal-toc-num">3</span> Strict No-Spam Policy
                                </a>
                            </li>
                            <li>
                                <a href="#sec-4" class="pm-legal-toc-link">
                                    <span class="pm-legal-toc-num">4</span> Data Security Protocols
                                </a>
                            </li>
                            <li>
                                <a href="#sec-5" class="pm-legal-toc-link">
                                    <span class="pm-legal-toc-num">5</span> Your Privacy Rights
                                </a>
                            </li>
                            <li>
                                <a href="#sec-6" class="pm-legal-toc-link">
                                    <span class="pm-legal-toc-num">6</span> Compliance &amp; Contact
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Trust Showcase Box -->
                    <div class="pm-legal-trust-card">
                        <h3 class="pm-legal-trust-title">Why Trust <?= $company3 ?>?</h3>
                        <p class="pm-legal-trust-sub">Over a decade of relocation excellence built on transparency and customer security.</p>
                        <div class="pm-legal-trust-item">
                            <i class="bi bi-patch-check-fill" aria-hidden="true"></i>
                            <span>ISO 9001:2015 Certified Movers</span>
                        </div>
                        <div class="pm-legal-trust-item">
                            <i class="bi bi-shield-check" aria-hidden="true"></i>
                            <span>100% Insured Transit Moves</span>
                        </div>
                        <div class="pm-legal-trust-item">
                            <i class="bi bi-geo-alt-fill" aria-hidden="true"></i>
                            <span>500+ Connected Indian Cities</span>
                        </div>
                        <div class="pm-legal-trust-item">
                            <i class="bi bi-clock-history" aria-hidden="true"></i>
                            <span>24/7 Live Tracking Updates</span>
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
