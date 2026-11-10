<?php
$hours         = $workingHours ?? ($comp['workingHours'] ?? ($site->workingHours ?? 'Mon - Sat: 9:00 AM - 8:00 PM'));

$servicesList = [
    'Household Moving',
    'Office Relocation',
    'Car & Bike Shifting',
    'Warehouse Storage',
    'Packing & Moving',
    'Loading & Unloading',
];
?>

<!-- Dynamic Breadcrumb -->
<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Contact Us & Get In Touch',
    'subtitle'    => 'Get a transparent, itemized moving estimate within 60 seconds. Our relocation coordinators are available 24/7.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Contact Us'],
    ],
]) ?>

<div class="pm-contact-page-wrap py-5">
    <div class="container">

        <?php if (!empty($success)): ?>
            <div class="alert alert-success d-flex align-items-center gap-2 rounded-4 mb-4 shadow-sm" role="alert">
                <i class="bi bi-check-circle-fill fs-5"></i>
                <div><?= esc($success) ?></div>
            </div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger d-flex align-items-center gap-2 rounded-4 mb-4 shadow-sm" role="alert">
                <i class="bi bi-exclamation-triangle-fill fs-5"></i>
                <div><?= esc($error) ?></div>
            </div>
        <?php endif; ?>

        <!-- Quick Trust Strip -->
        <div class="d-flex align-items-center justify-content-center flex-wrap pm-contact-trust-strip mb-5">
            <span class="pm-contact-trust-pill">
                <i class="bi bi-clock-history text-danger"></i> 60-Second Fast Estimate
            </span>
            <span class="pm-contact-trust-pill">
                <i class="bi bi-shield-fill-check text-success"></i> 100% Insured Transit
            </span>
            <span class="pm-contact-trust-pill">
                <i class="bi bi-patch-check-fill text-warning"></i> ISO 9001:2015 Certified
            </span>
            <span class="pm-contact-trust-pill">
                <i class="bi bi-geo-alt-fill text-danger"></i> Doorstep Pickup &amp; Delivery
            </span>
        </div>

        <!-- Main 2-Column Grid -->
        <div class="row g-4 align-items-stretch mb-5">
            
            <!-- Left Column: Form Card -->
            <div class="col-12 col-lg-7 d-flex">
                <div class="pm-contact-card card w-100 p-4 p-md-5 border-0 rounded-4">
                    <div class="pm-contact-card-topbar"></div>
                    
                    <div class="mb-4">
                        <span class="badge px-3 py-2 rounded-pill text-uppercase mb-2 pm-srv-hero-badge">
                            <i class="bi bi-send-check-fill me-1"></i> Quick Response Guaranteed
                        </span>
                        <h2 class="h3 fw-bold text-dark mb-1">
                            Send An <span class="pm-text-red">Inquiry</span>
                        </h2>
                        <p class="text-muted small mb-0">
                            Fill out this quick form and our dedicated moving coordinator will contact you with a customized estimate.
                        </p>
                    </div>

                    <form id="contactform" class="ajax-form" data-url="<?= site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                        
                        <div class="row g-3 mb-3">
                            <div class="col-12 col-sm-6 form-group">
                                <div class="form-floating pm-contact-floating">
                                    <input type="text" name="name" required placeholder="Your Name" class="form-control pm-contact-floating-input" id="contactName" autocomplete="name">
                                    <label for="contactName" class="pm-contact-floating-label">
                                        <i class="bi bi-person-fill me-1 text-danger"></i> Your Name <span class="text-danger">*</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 form-group">
                                <div class="form-floating pm-contact-floating">
                                    <input type="tel" name="phone" required placeholder="Phone Number" class="form-control pm-contact-floating-input" id="contactPhone" maxlength="10" autocomplete="tel">
                                    <label for="contactPhone" class="pm-contact-floating-label">
                                        <i class="bi bi-telephone-fill me-1 text-danger"></i> Phone Number <span class="text-danger">*</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-12 col-sm-6 form-group">
                                <div class="form-floating pm-contact-floating">
                                    <input type="email" name="email" placeholder="Email Address" class="form-control pm-contact-floating-input" id="contactEmail" autocomplete="email">
                                    <label for="contactEmail" class="pm-contact-floating-label">
                                        <i class="bi bi-envelope-fill me-1 text-danger"></i> Email Address <span class="text-muted fw-normal">(Optional)</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 form-group">
                                <div class="form-floating pm-contact-floating">
                                    <select name="service" class="form-select pm-contact-floating-input" id="contactService">
                                        <?php foreach ($servicesList as $srvOpt): ?>
                                            <option value="<?= esc($srvOpt) ?>"><?= esc($srvOpt) ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="contactService" class="pm-contact-floating-label">
                                        <i class="bi bi-truck me-1 text-danger"></i> Required Service
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 form-group">
                            <div class="form-floating pm-contact-floating">
                                <textarea name="message" placeholder="Moving Details / Message" class="form-control pm-contact-floating-input pm-contact-floating-textarea" id="contactMessage"></textarea>
                                <label for="contactMessage" class="pm-contact-floating-label">
                                    <i class="bi bi-chat-left-text-fill me-1 text-danger"></i> Moving Details / Message (Origin, Destination, Date, Items)
                                </label>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2 text-muted small mb-4">
                            <i class="bi bi-shield-lock-fill text-success fs-6"></i>
                            <span>Zero spam guarantee. Your details are safe, private and never shared.</span>
                        </div>

                        <button type="submit" class="btn pm-contact-submit-btn w-100 d-flex align-items-center justify-content-center gap-2 text-uppercase">
                            <i class="bi bi-send-fill"></i>
                            <span>Submit Inquiry Now</span>
                        </button>

                        <div id="contactformresults" class="mt-3"></div>
                    </form>
                </div>
            </div>

            <!-- Right Column: Info Card -->
            <div class="col-12 col-lg-5 d-flex">
                
                <!-- Contact Hub Card -->
                <div class="pm-contact-card card w-100 p-4 p-md-5 border-0 rounded-4">
                    <div class="pm-contact-card-topbar"></div>
                    
                    <div class="mb-4">
                        <span class="badge px-3 py-2 rounded-pill text-uppercase mb-2 pm-srv-hero-badge">
                            <i class="bi bi-building-check me-1"></i> Direct Support
                        </span>
                        <h2 class="h4 fw-bold text-dark mb-1">Head Office &amp; Helpdesk</h2>
                        <p class="text-muted small mb-0">Reach our team directly for bookings, inquiries, or support.</p>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <!-- Address -->
                        <div class="pm-contact-channel-item">
                            <div class="pm-channel-icon-box pm-channel-icon-red">
                                <i class="bi bi-geo-alt-fill"></i>
                            </div>
                            <div class="pm-channel-meta">
                                <div class="pm-channel-title">Head Office Location</div>
                                <div class="pm-channel-val text-dark"><?= $address ?></div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="pm-contact-channel-item">
                            <div class="pm-channel-icon-box pm-channel-icon-yellow">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div class="pm-channel-meta">
                                <div class="pm-channel-title">24/7 Helpline &amp; Booking</div>
                                <a <?= $phonehtml ?> class="pm-channel-val">
                                    <?= $phone ?>
                                </a>
                                <div class="pm-channel-sub">Toll-free customer assistance round the clock</div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="pm-contact-channel-item">
                            <div class="pm-channel-icon-box pm-channel-icon-blue">
                                <i class="bi bi-envelope-fill"></i>
                            </div>
                            <div class="pm-channel-meta">
                                <div class="pm-channel-title">Email Correspondence</div>
                                <a href="<?= esc($mailhtml) ?>" class="pm-channel-val">
                                    <?= $mail ?>
                                </a>
                                <div class="pm-channel-sub">Average response time: under 2 hours</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Interactive Google Map Section -->
        <div class="pm-contact-map-card card border-0 rounded-4 overflow-hidden mb-5">
            <div class="p-4 bg-white border-bottom d-flex align-items-center justify-content-between flex-wrap gap-2">
                <div>
                    <span class="badge px-3 py-2 rounded-pill text-uppercase mb-1 pm-srv-hero-badge">
                        <i class="bi bi-map-fill me-1"></i> Interactive Map
                    </span>
                    <h2 class="h4 fw-bold text-dark mb-0">Locate Our Head Office On Google Maps</h2>
                </div>
                <a href="https://maps.google.com/?q=<?= $address ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark rounded-pill px-4 py-2 small fw-semibold">
                    Open in Google Maps <i class="bi bi-arrow-up-right ms-1"></i>
                </a>
            </div>
            <iframe 
                class="pm-contact-map-iframe"
                src="https://maps.google.com/maps?q=<?= $address ?>&t=&z=14&ie=UTF8&iwloc=&output=embed"
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                title="Sanvi Packers Office Location">
            </iframe>
        </div>

        <!-- Contact FAQs -->
        <div class="pm-contact-card card p-4 p-md-5 border-0 rounded-4">
            <div class="pm-contact-card-topbar"></div>
            <div class="text-center mb-4">
                <span class="badge px-3 py-2 rounded-pill text-uppercase mb-2 pm-srv-hero-badge">
                    <i class="bi bi-question-circle-fill me-1"></i> Quick Clarifications
                </span>
                <h2 class="h3 fw-bold text-dark mb-1">Frequently Asked Questions About Reaching Us</h2>
                <p class="text-muted small mb-0">Common queries regarding quotations, surveys, and communication.</p>
            </div>

            <div class="accordion accordion-flush" id="contactFaqAccordion">
                <div class="accordion-item border-bottom pm-contact-faq-item">
                    <h3 class="accordion-header" id="cfaqHead1">
                        <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#cfaqCollapse1">
                            How fast will I receive an estimate after submitting this form?
                        </button>
                    </h3>
                    <div id="cfaqCollapse1" class="accordion-collapse collapse show" data-bs-parent="#contactFaqAccordion">
                        <div class="accordion-body text-muted small">
                            Our moving coordinators review incoming inquiries within 60 seconds during working hours and call you directly with a customized itemized estimate.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-bottom pm-contact-faq-item">
                    <h3 class="accordion-header" id="cfaqHead2">
                        <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#cfaqCollapse2">
                            Can I schedule a free doorstep or video pre-move survey?
                        </button>
                    </h3>
                    <div id="cfaqCollapse2" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                        <div class="accordion-body text-muted small">
                            Yes! For large homes (2 BHK, 3 BHK, villas) and corporate offices, we offer 100% free doorstep inspections or virtual video surveys to assess volume and packing requirements accurately.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-bottom pm-contact-faq-item">
                    <h3 class="accordion-header" id="cfaqHead3">
                        <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#cfaqCollapse3">
                            Is WhatsApp quotation legally binding and official?
                        </button>
                    </h3>
                    <div id="cfaqCollapse3" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                        <div class="accordion-body text-muted small">
                            Yes, quotes shared on our official WhatsApp number (+91 70217 10594) are followed by an official PDF booking confirmation with all terms, vehicle specs, and insurance details attached.
                        </div>
                    </div>
                </div>

                <div class="accordion-item pm-contact-faq-item">
                    <h3 class="accordion-header" id="cfaqHead4">
                        <button class="accordion-button collapsed fw-bold text-dark fs-6" type="button" data-bs-toggle="collapse" data-bs-target="#cfaqCollapse4">
                            Are your office phone lines open on Sundays and holidays?
                        </button>
                    </h3>
                    <div id="cfaqCollapse4" class="accordion-collapse collapse" data-bs-parent="#contactFaqAccordion">
                        <div class="accordion-body text-muted small">
                            Our primary telephone support operates Monday through Sunday, and our highway transit tracking desks remain active 24/7/365 for active consignments on the road.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
