<div class="page-banner">
    <div class="container">
        <div class="breadcrumbs">
            <a href="<?= site_url('/') ?>"><i class="fa-solid fa-house"></i> Home</a> / <span>Contact Us</span>
        </div>
        <h1>Contact Us For A Free Quote</h1>
        <p>Have questions about moving dates, packing material, or pricing? Our team is available 24/7 to assist you.</p>
    </div>
</div>

<section class="section">
    <div class="container">

        <?php if (!empty($success)): ?>
            <div style="background: #ecfdf5; color: #065f46; border: 1px solid #a7f3d0; padding: 16px 20px; border-radius: var(--radius-md); font-weight: 600; margin-bottom: 30px; display: flex; align-items: center; gap: 12px;">
                <i class="fa-solid fa-circle-check fa-lg"></i>
                <div><?= esc($success) ?></div>
            </div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <div style="background: #fee2e2; color: #991b1b; padding: 16px 20px; border-radius: var(--radius-md); font-weight: 600; margin-bottom: 30px;">
                <?= esc($error) ?>
            </div>
        <?php endif; ?>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: start;">
            
            <!-- Contact Form Card -->
            <div style="background: #ffffff; padding: 35px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                <h3 style="font-size: 1.5rem; font-weight: 800; color: var(--dark); margin-bottom: 8px;">Send An Inquiry</h3>
                <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 25px;">Fill out this quick form and we will call you with a detailed estimate.</p>

                <form id="contactform" class="ajax-form" data-url="<?= site_url('contacts/contact') ?>" data-result="contactformresults" onsubmit="return false;">
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                        <div class="field-wrap">
                            <label style="display: block; font-weight: 700; font-size: 0.85rem; margin-bottom: 6px;">Your Name *</label>
                            <input type="text" name="name" required placeholder="Full Name" class="form-control">
                        </div>
                        <div class="field-wrap">
                            <label style="display: block; font-weight: 700; font-size: 0.85rem; margin-bottom: 6px;">Phone Number *</label>
                            <input type="tel" name="phone" required placeholder="Mobile Number (10 digits)" class="form-control">
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 16px;">
                        <div class="field-wrap">
                            <label style="display: block; font-weight: 700; font-size: 0.85rem; margin-bottom: 6px;">Email Address</label>
                            <input type="email" name="email" placeholder="you@domain.com" class="form-control">
                        </div>
                        <div class="field-wrap">
                            <label style="display: block; font-weight: 700; font-size: 0.85rem; margin-bottom: 6px;">Required Service</label>
                            <select name="service" class="form-control">
                                <option value="Household Moving">Household Moving</option>
                                <option value="Office Relocation">Office Relocation</option>
                                <option value="Vehicle Transport">Vehicle Transport</option>
                                <option value="Warehouse Storage">Warehouse Storage</option>
                                <option value="Packing & Unpacking">Packing & Unpacking</option>
                            </select>
                        </div>
                    </div>

                    <div style="margin-bottom: 22px;" class="field-wrap">
                        <label style="display: block; font-weight: 700; font-size: 0.85rem; margin-bottom: 6px;">Moving Details / Message</label>
                        <textarea name="message" rows="4" placeholder="From (city), To (city), preferred date, approx items list..." class="form-control"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" style="padding: 14px 32px; font-size: 1rem; width: 100%;">
                        <i class="bi bi-send-fill"></i> Submit Inquiry Now
                    </button>
                    <div id="contactformresults" style="margin-top: 15px;"></div>
                </form>
            </div>

            <!-- Contact Details & Info -->
            <div>
                <div style="background: #ffffff; padding: 30px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); margin-bottom: 25px;">
                    <h4 style="font-weight: 800; font-size: 1.2rem; margin-bottom: 20px; color: var(--dark);">Head Office & Support</h4>
                    
                    <div style="display: flex; gap: 16px; margin-bottom: 18px; align-items: flex-start;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: var(--primary-light); color: var(--primary); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div>
                            <div style="font-weight: 700; font-size: 0.9rem; color: var(--dark);">Address</div>
                            <div style="font-size: 0.9rem; color: var(--text-muted);"><?= esc($site->address) ?></div>
                        </div>
                    </div>

                    <div style="display: flex; gap: 16px; margin-bottom: 18px; align-items: flex-start;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: var(--primary-light); color: var(--primary); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div>
                            <div style="font-weight: 700; font-size: 0.9rem; color: var(--dark);">Phone / Toll Free</div>
                            <a href="tel:<?= esc($site->phone) ?>" style="font-size: 0.9rem; color: var(--primary); font-weight: 700;"><?= esc($site->phone) ?></a>
                        </div>
                    </div>

                    <div style="display: flex; gap: 16px; margin-bottom: 18px; align-items: flex-start;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: var(--primary-light); color: var(--primary); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <div style="font-weight: 700; font-size: 0.9rem; color: var(--dark);">Email Support</div>
                            <a href="mailto:<?= esc($site->email) ?>" style="font-size: 0.9rem; color: var(--primary); font-weight: 700;"><?= esc($site->email) ?></a>
                        </div>
                    </div>

                    <div style="display: flex; gap: 16px; align-items: flex-start;">
                        <div style="width: 40px; height: 40px; border-radius: 10px; background: var(--primary-light); color: var(--primary); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div>
                            <div style="font-weight: 700; font-size: 0.9rem; color: var(--dark);">Working Hours</div>
                            <div style="font-size: 0.9rem; color: var(--text-muted);"><?= esc($site->workingHours) ?></div>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp Card -->
                <div style="background: linear-gradient(135deg, #10b981, #059669); color: #ffffff; padding: 25px; border-radius: var(--radius-lg); text-align: center;">
                    <i class="fa-brands fa-whatsapp fa-3x" style="margin-bottom: 10px;"></i>
                    <h4 style="font-weight: 800; font-size: 1.25rem; margin-bottom: 6px;">Chat Directly on WhatsApp</h4>
                    <p style="font-size: 0.9rem; opacity: 0.92; margin-bottom: 16px;">Get quick quotes, share items photos, and confirm dates instantly.</p>
                    <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $site->whatsapp) ?>" target="_blank" class="btn" style="background: #ffffff; color: #047857; font-weight: 800; padding: 12px 28px;">
                        <i class="fa-brands fa-whatsapp"></i> Start WhatsApp Chat
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
