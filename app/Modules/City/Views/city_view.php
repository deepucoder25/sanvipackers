<div class="page-banner">
    <div class="container">
        <div class="breadcrumbs">
            <a href="<?= site_url('/') ?>"><i class="fa-solid fa-house"></i> Home</a> / 
            <a href="<?= site_url('city') ?>">All States</a> / 
            <a href="<?= site_url('city/' . $stateSlug) ?>"><?= esc($stateName) ?></a> / 
            <span><?= esc($cityName) ?></span>
        </div>
        <h1>Best Packers and Movers in <?= esc($cityName) ?>, <?= esc($stateName) ?></h1>
        <p>Reliable, hassle-free household shifting, office moving & vehicle transport with 100% transit insurance in <?= esc($cityName) ?>.</p>
    </div>
</div>

<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: start;">
            
            <!-- Main Content Area -->
            <div>
                <!-- 1. Intro Card -->
                <div style="background: #ffffff; padding: 40px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); margin-bottom: 35px;">
                    <span class="section-badge">Local & Interstate Movers</span>
                    <h2 style="font-size: 1.8rem; font-weight: 800; color: var(--dark); margin-bottom: 16px;">Top-Rated Shifting Services in <?= esc($cityName) ?></h2>
                    <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.8; margin-bottom: 20px;">
                        Looking for trusted and affordable packers and movers in <strong><?= esc($cityName) ?>, <?= esc($stateName) ?></strong>? 
                        <strong><?= esc($company3) ?></strong> is your verified relocation partner. Whether moving locally within <?= esc($cityName) ?> or relocating across India, our trained ground team ensures careful 5-layer packaging, safe transit, and punctual doorstep delivery.
                    </p>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-top: 25px;">
                        <div style="background: var(--primary-light); padding: 16px; border-radius: var(--radius-md); text-align: center;">
                            <div style="font-size: 1.6rem; font-weight: 800; color: var(--primary);">100%</div>
                            <div style="font-size: 0.82rem; font-weight: 700; color: var(--dark);">Insured Transit</div>
                        </div>
                        <div style="background: #ffedd5; padding: 16px; border-radius: var(--radius-md); text-align: center;">
                            <div style="font-size: 1.6rem; font-weight: 800; color: var(--secondary);">0%</div>
                            <div style="font-size: 0.82rem; font-weight: 700; color: var(--dark);">Damage Guarantee</div>
                        </div>
                        <div style="background: #ecfdf5; padding: 16px; border-radius: var(--radius-md); text-align: center;">
                            <div style="font-size: 1.6rem; font-weight: 800; color: #059669;">24x7</div>
                            <div style="font-size: 0.82rem; font-weight: 700; color: var(--dark);">Local Support</div>
                        </div>
                    </div>
                </div>

                <!-- 2. Services in This City -->
                <div style="background: #ffffff; padding: 40px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); margin-bottom: 35px;">
                    <h3 style="font-size: 1.5rem; font-weight: 800; color: var(--dark); margin-bottom: 25px;">Services Available in <?= esc($cityName) ?></h3>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                        <div style="padding: 20px; border: 1px solid var(--border-color); border-radius: var(--radius-md);">
                            <div style="color: var(--primary); font-size: 1.4rem; margin-bottom: 10px;"><i class="fa-solid fa-house-chimney"></i></div>
                            <h4 style="font-weight: 700; margin-bottom: 8px;">Household Shifting</h4>
                            <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.5;">Complete residential moving with multi-layer bubble wrap, cartons, and delicate electronics safety.</p>
                        </div>
                        <div style="padding: 20px; border: 1px solid var(--border-color); border-radius: var(--radius-md);">
                            <div style="color: var(--primary); font-size: 1.4rem; margin-bottom: 10px;"><i class="fa-solid fa-briefcase"></i></div>
                            <h4 style="font-weight: 700; margin-bottom: 8px;">Office Corporate Shifting</h4>
                            <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.5;">Low downtime corporate workplace relocation, server equipment, and modular furniture setup.</p>
                        </div>
                        <div style="padding: 20px; border: 1px solid var(--border-color); border-radius: var(--radius-md);">
                            <div style="color: var(--primary); font-size: 1.4rem; margin-bottom: 10px;"><i class="fa-solid fa-car"></i></div>
                            <h4 style="font-weight: 700; margin-bottom: 8px;">Car & Bike Transport</h4>
                            <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.5;">Covered container trailers and customized wooden crating for two-wheelers with door-to-door transit.</p>
                        </div>
                        <div style="padding: 20px; border: 1px solid var(--border-color); border-radius: var(--radius-md);">
                            <div style="color: var(--primary); font-size: 1.4rem; margin-bottom: 10px;"><i class="fa-solid fa-warehouse"></i></div>
                            <h4 style="font-weight: 700; margin-bottom: 8px;">Warehouse & Storage</h4>
                            <p style="font-size: 0.88rem; color: var(--text-muted); line-height: 1.5;">24x7 CCTV guarded, moisture-controlled storage facilities with monthly flexible leasing terms.</p>
                        </div>
                    </div>
                </div>

                <!-- 3. Why Choose Us in City -->
                <div style="background: #ffffff; padding: 40px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); margin-bottom: 35px;">
                    <h3 style="font-size: 1.5rem; font-weight: 800; color: var(--dark); margin-bottom: 20px;">Why Hire Us in <?= esc($cityName) ?>?</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="display: flex; gap: 12px; align-items: flex-start; margin-bottom: 14px;">
                            <i class="fa-solid fa-circle-check" style="color: var(--primary); margin-top: 4px;"></i>
                            <div><strong>Free Pre-Move Survey:</strong> In-person or digital video survey to give you an accurate, upfront estimate with no hidden costs.</div>
                        </li>
                        <li style="display: flex; gap: 12px; align-items: flex-start; margin-bottom: 14px;">
                            <i class="fa-solid fa-circle-check" style="color: var(--primary); margin-top: 4px;"></i>
                            <div><strong>Expert Packing Crew:</strong> Specialized packers trained to handle antique glassware, crockery, smart TVs, and heavy wooden furniture.</div>
                        </li>
                        <li style="display: flex; gap: 12px; align-items: flex-start; margin-bottom: 14px;">
                            <i class="fa-solid fa-circle-check" style="color: var(--primary); margin-top: 4px;"></i>
                            <div><strong>Live GPS Tracking:</strong> Track your consignment throughout transit from <?= esc($cityName) ?> to your destination address.</div>
                        </li>
                    </ul>
                </div>

                <!-- 4. Nearby Cities -->
                <?php if (!empty($nearbyCities)): ?>
                    <div style="background: #ffffff; padding: 30px; border-radius: var(--radius-lg); border: 1px solid var(--border-color);">
                        <h4 style="font-weight: 800; font-size: 1.15rem; margin-bottom: 15px; color: var(--dark);">Other Nearby Cities in <?= esc($stateName) ?></h4>
                        <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                            <?php foreach ($nearbyCities as $nc): 
                                $nName = is_array($nc) ? ($nc['nm'] ?? 'City') : (string)$nc;
                                $nSlug = strtolower(str_replace(' ', '-', $nName));
                            ?>
                                <a href="<?= site_url('city/' . $stateSlug . '/' . $nSlug) ?>" style="display: inline-block; padding: 6px 14px; background: var(--light-bg); border: 1px solid var(--border-color); border-radius: 50px; font-size: 0.82rem; font-weight: 600; color: var(--text-main);">
                                    <?= esc($nName) ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar Quick Inquiry Form -->
            <div>
                <div style="background: #ffffff; padding: 32px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); box-shadow: 0 10px 30px rgba(0,0,0,0.04); position: sticky; top: 90px;">
                    <div style="text-align: center; margin-bottom: 20px;">
                        <span class="section-badge" style="font-size: 0.78rem;">Fast Quote</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: var(--dark);">Shifting in <?= esc($cityName) ?></h3>
                        <p style="color: var(--text-muted); font-size: 0.85rem;">Get exact cost estimate within 15 minutes</p>
                    </div>

                    <form action="<?= site_url('contact/send') ?>" method="POST">
                        <?= csrf_field() ?>
                        <input type="hidden" name="service" value="Shifting in <?= esc($cityName) ?>, <?= esc($stateName) ?>">
                        
                        <div style="margin-bottom: 14px;">
                            <label style="display: block; font-weight: 700; font-size: 0.82rem; margin-bottom: 5px;">Your Name *</label>
                            <input type="text" name="name" required placeholder="Full Name" class="form-control">
                        </div>

                        <div style="margin-bottom: 14px;">
                            <label style="display: block; font-weight: 700; font-size: 0.82rem; margin-bottom: 5px;">Phone Number *</label>
                            <input type="tel" name="phone" required placeholder="Mobile Number" class="form-control">
                        </div>

                        <div style="margin-bottom: 14px;">
                            <label style="display: block; font-weight: 700; font-size: 0.82rem; margin-bottom: 5px;">Moving From</label>
                            <input type="text" name="move_from" value="<?= esc($cityName) ?>" class="form-control">
                        </div>

                        <div style="margin-bottom: 14px;">
                            <label style="display: block; font-weight: 700; font-size: 0.82rem; margin-bottom: 5px;">Moving To</label>
                            <input type="text" name="move_to" placeholder="Destination City" class="form-control">
                        </div>

                        <div style="margin-bottom: 18px;">
                            <label style="display: block; font-weight: 700; font-size: 0.82rem; margin-bottom: 5px;">Requirement</label>
                            <textarea name="message" rows="3" placeholder="Items (1BHK, 2BHK, Bike, Car...)" class="form-control"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 12px; font-size: 0.95rem;">
                            <i class="fa-solid fa-calculator"></i> Get Free Quote
                        </button>
                    </form>

                    <div style="margin-top: 20px; padding-top: 15px; border-top: 1px solid var(--border-color); text-align: center;">
                        <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $phone) ?>" target="_blank" style="display: inline-flex; align-items: center; gap: 8px; color: #059669; font-weight: 700; font-size: 0.9rem;">
                            <i class="fa-brands fa-whatsapp fa-lg"></i> Direct WhatsApp Inquiry
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
