<div class="modal fade contact-custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="contact-form-header">
                <span>Get a free quote</span>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="if(typeof setClose === 'function') setClose();">
                    <span aria-hidden="true"><i class="fa-solid fa-xmark"></i></span>
                </button>
            </div>
            <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="fa-solid fa-phone"></i>
                                <input type="tel" class="form-control" name="phone" placeholder="Mobile Number (10 digits)" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="email" class="form-control" name="email" placeholder="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="fa-solid fa-location-dot"></i>
                                <input type="text" class="form-control" name="mfrom" placeholder="From City">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="fa-solid fa-map-pin"></i>
                                <input type="text" class="form-control" name="mto" placeholder="To City">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-icon">
                        <i class="fa-solid fa-comment-dots"></i>
                        <textarea name="message" cols="30" rows="4" class="form-control" placeholder="Describe your relocation needs..."></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2 contact-quote-gap" style="gap:10px;">
                    <button id="submitbquotemodal" type="submit" class="btn btn-primary">Get My Free Quote <i class="fa-solid fa-paper-plane"></i></button>
                    <button onclick="document.getElementById('resultquotemodal').innerHTML = '';" type="reset" class="btn btn-secondary">Clear Form</button>
                </div>
 
                <div id="resultquotemodal" style="margin-top: 15px;"></div>
            </form>
        </div>
    </div>
</div>
