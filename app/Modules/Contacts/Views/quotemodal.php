<?php
$helplinePhone = $phone ?? ($comp['phone'] ?? ($site->phone ?? '+91 70217 10594'));
$cleanPhone    = preg_replace('/[^0-9]/', '', $helplinePhone);
$whatsappNum   = $whatsapp ?? ($comp['whatsapp'] ?? ($site->whatsapp ?? '7021710594'));
$cleanWhatsapp = preg_replace('/[^0-9]/', '', $whatsappNum);
?>

<div class="modal fade pm-quote-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered pm-modal-compact-dialog" role="document">
        <div class="modal-content border-0 shadow-lg rounded-4 overflow-hidden">
            
            <!-- Modal Header -->
            <div class="pm-modal-header px-3 py-2 px-md-3 py-md-2 position-relative">
                <div class="d-flex align-items-center justify-content-between position-relative z-2">
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <span class="badge rounded-pill pm-srv-hero-badge pm-modal-badge">
                                <i class="bi bi-calculator-fill me-1"></i> Quick Estimate
                            </span>
                        </div>
                        <h5 class="h6 fw-bold text-white mb-0 pm-modal-title" id="qteModalLabel">Get Your Free Moving Quote</h5>
                    </div>
                    <button type="button" class="pm-modal-close-btn" data-bs-dismiss="modal" aria-label="Close" onclick="if(typeof setClose === 'function') setClose();">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="modal-body px-3 py-3 px-md-3 py-md-3 bg-white">
                <form id="quotemodal" class="ajax-form" data-url="<?= site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                    
                    <div class="row g-2 mb-2">
                        <!-- Full Name with Floating Label -->
                        <div class="col-6 form-group">
                            <div class="form-floating pm-modal-floating">
                                <input type="text" class="form-control pm-modal-input" id="qteName" name="name" placeholder="Full Name" required autocomplete="name">
                                <label for="qteName" class="pm-modal-flabel">
                                    <i class="bi bi-person-fill me-1 text-danger"></i> Full Name <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- Mobile Number with Floating Label -->
                        <div class="col-6 form-group">
                            <div class="form-floating pm-modal-floating">
                                <input type="tel" class="form-control pm-modal-input" id="qtePhone" name="phone" placeholder="Mobile Number" required autocomplete="tel" maxlength="10">
                                <label for="qtePhone" class="pm-modal-flabel">
                                    <i class="bi bi-telephone-fill me-1 text-danger"></i> Mobile No <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- Moving From with Floating Label -->
                        <div class="col-6 form-group">
                            <div class="form-floating pm-modal-floating">
                                <input type="text" class="form-control pm-modal-input" id="qteFrom" name="mfrom" placeholder="Moving From" required>
                                <label for="qteFrom" class="pm-modal-flabel">
                                    <i class="bi bi-geo-alt-fill me-1 text-danger"></i> Moving From <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- Moving To with Floating Label -->
                        <div class="col-6 form-group">
                            <div class="form-floating pm-modal-floating">
                                <input type="text" class="form-control pm-modal-input" id="qteTo" name="mto" placeholder="Moving To" required>
                                <label for="qteTo" class="pm-modal-flabel">
                                    <i class="bi bi-pin-map-fill me-1 text-danger"></i> Moving To <span class="text-danger">*</span>
                                </label>
                            </div>
                        </div>

                        <!-- Email Address with Floating Label -->
                        <div class="col-12 form-group">
                            <div class="form-floating pm-modal-floating">
                                <input type="email" class="form-control pm-modal-input" id="qteEmail" name="email" placeholder="Email Address" autocomplete="email">
                                <label for="qteEmail" class="pm-modal-flabel">
                                    <i class="bi bi-envelope-fill me-1 text-danger"></i> Email Address <span class="text-muted fw-normal">(Optional)</span>
                                </label>
                            </div>
                        </div>

                        <!-- Relocation Details / Message with Floating Label -->
                        <div class="col-12 form-group">
                            <div class="form-floating pm-modal-floating">
                                <textarea class="form-control pm-modal-input pm-modal-textarea" id="qteMessage" name="message" placeholder="Move Description / Inventory"></textarea>
                                <label for="qteMessage" class="pm-modal-flabel">
                                    <i class="bi bi-chat-left-dots-fill me-1 text-danger"></i> Move Description / Inventory Notes
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Micro Trust Strip -->
                    <div class="pm-modal-trust-strip d-flex align-items-center justify-content-center flex-wrap gap-2 py-1 px-2 mb-2 rounded-2">
                        <span class="pm-modal-trust-item"><i class="bi bi-shield-check text-success me-1"></i> 100% Privacy</span>
                        <span class="text-muted opacity-50">&bull;</span>
                        <span class="pm-modal-trust-item"><i class="bi bi-clock-history text-warning me-1"></i> 15 Min Reply</span>
                        <span class="text-muted opacity-50">&bull;</span>
                        <span class="pm-modal-trust-item"><i class="bi bi-patch-check-fill text-danger me-1"></i> Zero Obligation</span>
                    </div>

                    <!-- Submit & Action Row -->
                    <div class="d-flex gap-2">
                        <button id="submitbquotemodal" type="submit" class="btn pm-modal-submit-btn flex-grow-1 fw-bold d-flex align-items-center justify-content-center gap-2">
                            <span>Get My Free Quote</span>
                            <i class="bi bi-arrow-right-circle-fill"></i>
                        </button>
                        <button onclick="document.getElementById('resultquotemodal').innerHTML = '';" type="reset" class="btn btn-outline-secondary pm-modal-clear-btn fw-semibold">
                            Clear
                        </button>
                    </div>

                    <!-- Result Box -->
                    <div id="resultquotemodal" class="pm-modal-result-box"></div>

                    <!-- WhatsApp Quick Chat Link -->
                    <div class="text-center mt-2 pt-2 border-top">
                        <a href="https://wa.me/<?= esc($cleanWhatsapp) ?>?text=<?= urlencode('Hello Sanvi Packers, I need a quick moving quote.') ?>" target="_blank" rel="noopener noreferrer" class="pm-modal-whatsapp-link text-decoration-none">
                            <i class="bi bi-whatsapp text-success me-1"></i> Chat on WhatsApp &rarr;
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
