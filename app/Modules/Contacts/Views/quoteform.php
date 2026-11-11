<div class="hero-quote-card-container" itemscope itemtype="https://schema.org/QuoteAction">
    <!-- Card Header -->
    <div class="hero-quote-header">
        <h2 class="hero-quote-title" itemprop="name">Get Your Best Moving Quote</h2>
        <p class="hero-quote-subtitle" itemprop="description">Quick, Fast &amp; Free Estimates</p>
    </div>

    <div class="hero-quote-white-card">
        <!-- Card Body / Form -->
        <div class="card-body-form">
            <form id="quoteform" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="quoteformresults" onsubmit="return false;">

                <div class="form-row-custom">
                    <!-- 1. Name Input with Floating Label -->
                    <div class="form-floating pm-floating-wrap">
                        <input type="text" name="name" class="form-control pm-form-control" id="floatingName" placeholder="Your Name" required>
                        <label for="floatingName" class="pm-floating-label">
                            <i class="bi bi-person-fill pm-floating-icon text-danger"></i>
                            <span>Your Name *</span>
                        </label>
                    </div>

                    <!-- 2. Phone Input with Floating Label -->
                    <div class="form-floating pm-floating-wrap">
                        <input type="tel" name="phone" class="form-control pm-form-control" id="floatingPhone" placeholder="Phone Number" required maxlength="10">
                        <label for="floatingPhone" class="pm-floating-label">
                            <i class="bi bi-telephone-fill pm-floating-icon text-danger"></i>
                            <span>Phone Number *</span>
                        </label>
                    </div>

                    <!-- 3. Moving From with Floating Label -->
                    <div class="form-floating pm-floating-wrap">
                        <input type="text" name="mfrom" class="form-control pm-form-control" id="floatingFrom" value="<?= esc($city ?? '') ?>" placeholder="Moving From" required>
                        <label for="floatingFrom" class="pm-floating-label">
                            <i class="bi bi-geo-alt-fill pm-floating-icon text-danger"></i>
                            <span>Moving From *</span>
                        </label>
                    </div>

                    <!-- 4. Moving To with Floating Label -->
                    <div class="form-floating pm-floating-wrap">
                        <input type="text" name="mto" class="form-control pm-form-control" id="floatingTo" placeholder="Moving To" required>
                        <label for="floatingTo" class="pm-floating-label">
                            <i class="bi bi-pin-map-fill pm-floating-icon text-danger"></i>
                            <span>Moving To *</span>
                        </label>
                    </div>

                    <!-- 5. Select Service with Floating Label -->
                    <div class="form-floating pm-floating-wrap">
                        <select name="service" class="form-select pm-form-control" id="floatingService" required>
                            <option value="" selected disabled></option>
                            <option value="Household Relocation">Household Relocation</option>
                            <option value="Office Relocation">Office Relocation</option>
                            <option value="Vehicle Transportation">Vehicle Transportation</option>
                            <option value="Warehouse & Storage">Warehouse & Storage</option>
                            <option value="Packing & Moving">Packing & Moving</option>
                            <option value="Loading & Unloading">Loading & Unloading</option>
                        </select>
                        <label for="floatingService" class="pm-floating-label">
                            <i class="bi bi-truck pm-floating-icon text-danger"></i>
                            <span>Select Service *</span>
                        </label>
                    </div>

                    <!-- 6. Shifting Size with Floating Label -->
                    <div class="form-floating pm-floating-wrap">
                        <select name="shifting_size" class="form-select pm-form-control" id="floatingSize">
                            <option value="" selected disabled></option>
                            <option value="1 BHK">1 BHK</option>
                            <option value="2 BHK">2 BHK</option>
                            <option value="3 BHK">3 BHK</option>
                            <option value="4+ BHK / Villa">4+ BHK / Villa</option>
                            <option value="1 RK / Studio">1 RK / Studio</option>
                            <option value="Few Household Items">Few Household Items</option>
                            <option value="Complete Office">Complete Office</option>
                            <option value="Vehicle (Car/Bike)">Vehicle (Car/Bike)</option>
                            <option value="Other">Other</option>
                        </select>
                        <label for="floatingSize" class="pm-floating-label">
                            <i class="bi bi-box-seam pm-floating-icon text-danger"></i>
                            <span>Shifting Size</span>
                        </label>
                    </div>

                    <!-- 7. Email Input with Floating Label (Full Width on Desktop) -->
                    <div class="form-floating pm-floating-wrap pm-floating-full">
                        <input type="email" name="email" class="form-control pm-form-control" id="floatingEmail" placeholder="Email Address">
                        <label for="floatingEmail" class="pm-floating-label">
                            <i class="bi bi-envelope-fill pm-floating-icon text-danger"></i>
                            <span>Email Address (Optional)</span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn-submit-custom">
                        <i class="bi bi-send-fill submit-btn-icon-desktop"></i>
                        <span>Get Instant Quote</span>
                    </button>
                </div>

                <div id="quoteformresults" class="mt-3"></div>
            </form>
        </div>

        <!-- Card Footer / Trust Badge Bar -->
        <div class="card-footer-trust d-none d-lg-flex justify-content-between align-items-center">
            <div class="trust-item">
                <i class="bi bi-shield-fill-check trust-icon"></i>
                <div class="trust-text">
                    <strong>100%</strong>
                    <span>Secure</span>
                </div>
            </div>
            <div class="divider-vertical"></div>
            <div class="trust-item">
                <i class="bi bi-lightning-charge-fill trust-icon"></i>
                <div class="trust-text">
                    <strong>Quick</strong>
                    <span>Response</span>
                </div>
            </div>
            <div class="divider-vertical"></div>
            <div class="trust-item">
                <i class="bi bi-trophy-fill trust-icon"></i>
                <div class="trust-text">
                    <strong>Best</strong>
                    <span>Price</span>
                </div>
            </div>
            <div class="divider-vertical"></div>
            <div class="trust-item">
                <i class="bi bi-headset trust-icon"></i>
                <div class="trust-text">
                    <strong>24/7</strong>
                    <span>Support</span>
                </div>
            </div>
        </div>

        <!-- Mobile Security Tag -->
        <div class="mobile-security-tag d-flex d-lg-none justify-content-center align-items-center gap-2 py-3">
            <i class="bi bi-shield-fill-check text-warning"></i>
            <span>100% Secure. We never share your data.</span>
        </div>
    </div>
</div>
