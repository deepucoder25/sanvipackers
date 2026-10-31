<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Terms & Conditions',
    'subtitle'    => 'Operational terms, moving guidelines, and service agreements governing ' . esc($comp['company3'] ?? 'QuickRelocation') . '.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Terms & Conditions'],
    ],
]) ?>

        <section class="section" style="background: #f8fafc; padding: 50px 0 80px 0;">
            <div class="container" style="max-width: 960px;">

                <!-- Terms Meta Card -->
                <div
                    style="background: #ffffff; border-radius: var(--radius-md); border: 1px solid var(--border-color); padding: 20px 28px; margin-bottom: 30px; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 15px; box-shadow: 0 2px 8px rgba(0,0,0,0.02);">
                    <div>
                        <span
                            style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.5px; font-weight: 700; color: var(--primary);">Service
                            Agreement</span>
                        <div style="font-size: 1.05rem; font-weight: 800; color: var(--dark); margin-top: 2px;">
                            Relocation & Transport Terms of Service</div>
                    </div>
                    <div
                        style="font-size: 0.85rem; color: var(--text-muted); background: #f1f5f9; padding: 6px 14px; border-radius: 20px; font-weight: 600;">
                        <i class="fa-regular fa-file-lines" style="color: var(--primary);"></i> Effective: October 2026
                    </div>
                </div>

                <!-- Main Terms Content Card -->
                <div
                    style="background: #ffffff; border-radius: var(--radius-lg); border: 1px solid var(--border-color); padding: 45px; box-shadow: 0 10px 30px rgba(0,0,0,0.04); font-size: 0.95rem; line-height: 1.8; color: #334155;">

                    <div
                        style="background: #f0fdf4; border-left: 4px solid #16a34a; padding: 18px 22px; border-radius: 6px; margin-bottom: 35px;">
                        <p style="margin: 0; color: #14532d; font-size: 0.95rem;">
                            <strong>Service Agreement:</strong> By booking a moving quotation, signing a consignment
                            note (G.R. / Bilty), or engaging the packing and shifting services of
                            <strong><?= esc($comp['company3'] ?? 'QuickRelocation') ?></strong>, you agree to comply
                            with and be bound by the terms and conditions outlined below.
                        </p>
                    </div>

                    <!-- Section 1 -->
                    <div style="margin-bottom: 35px;">
                        <h2
                            style="font-size: 1.25rem; font-weight: 800; color: var(--dark); margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                            <span
                                style="width: 28px; height: 28px; background: var(--primary); color: #fff; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 0.82rem;">1</span>
                            Quotations, Surveys & Pricing Estimates
                        </h2>
                        <ul style="padding-left: 20px; margin-bottom: 16px;">
                            <li><strong>Inventory Basis:</strong> All moving quotes are prepared strictly based on the
                                article list provided during the physical or virtual pre-move survey.</li>
                            <li><strong>Supplemental Charges:</strong> Extra items added on moving day, unnotified long
                                carry distances exceeding 50 feet from truck to premises, or absence of functional
                                service elevators on upper floors may incur supplementary labor fees.</li>
                            <li><strong>Specialized Technician Services:</strong> Dismantling and re-installation of
                                split air conditioners, geysers, wall-mounted televisions, and modular chimneys are
                                specialized carpenter/electrician services subject to standard additional service fees.
                            </li>
                        </ul>
                    </div>

                    <!-- Section 2 -->
                    <div style="margin-bottom: 35px;">
                        <h2
                            style="font-size: 1.25rem; font-weight: 800; color: var(--dark); margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                            <span
                                style="width: 28px; height: 28px; background: var(--primary); color: #fff; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 0.82rem;">2</span>
                            Prohibited & Restricted Articles
                        </h2>
                        <p style="margin-bottom: 12px;">For safety and regulatory compliance across interstate
                            checkpoints, our vehicles strictly <strong>prohibit</strong> the transportation of:</p>
                        <ul style="padding-left: 20px; margin-bottom: 16px;">
                            <li>Combustible liquids, gas cylinders, fuel cans, kerosene, firecrackers, or hazardous
                                chemicals.</li>
                            <li>Cash currency, precious jewelry, bearer bonds, original share certificates, and
                                irreplaceable sensitive personal documents (clients are advised to carry these
                                personally).</li>
                            <li>Perishable foodstuffs, livestock, pets, contraband substances, or unlicensed weapons.
                            </li>
                        </ul>
                        <p style="font-size: 0.88rem; color: #dc2626; font-weight: 600;">The client assumes sole legal
                            responsibility if any undisclosed prohibited articles are found during transit inspection.
                        </p>
                    </div>

                    <!-- Section 3 -->
                    <div style="margin-bottom: 35px;">
                        <h2
                            style="font-size: 1.25rem; font-weight: 800; color: var(--dark); margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                            <span
                                style="width: 28px; height: 28px; background: var(--primary); color: #fff; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 0.82rem;">3</span>
                            Packaging & Vehicle Transport Guidelines
                        </h2>
                        <ul style="padding-left: 20px; margin-bottom: 16px;">
                            <li><strong>Vehicle Relocation:</strong> Cars and two-wheelers must maintain an empty or
                                near-empty fuel tank (less than 5 liters) as mandated by fire safety transit norms. All
                                existing dents, scratches, and fuel readings will be documented in a mutual vehicle
                                inspection report prior to loading.</li>
                            <li><strong>Electronic Appliances:</strong> Refrigerators must be defrosted at least 24
                                hours prior to packing. Washing machines should have water drained to avoid internal
                                leakages during transit.</li>
                        </ul>
                    </div>

                    <!-- Section 4 -->
                    <div style="margin-bottom: 35px;">
                        <h2
                            style="font-size: 1.25rem; font-weight: 800; color: var(--dark); margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                            <span
                                style="width: 28px; height: 28px; background: var(--primary); color: #fff; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 0.82rem;">4</span>
                            Transit Insurance & Claims Procedure
                        </h2>
                        <p style="margin-bottom: 12px;">Transit risk insurance covers accidental damage, collision,
                            overturn, or fire during vehicular movement:</p>
                        <ul style="padding-left: 20px; margin-bottom: 16px;">
                            <li><strong>Claim Window:</strong> Any visible exterior transit damage must be endorsed on
                                the delivery copy of the consignment bill and formally notified to
                                <?= esc($comp['company3'] ?? 'QuickRelocation') ?> within <strong>48 hours of
                                    delivery</strong>.</li>
                            <li><strong>Documentation:</strong> Claim processing requires photographs of damaged
                                articles, original invoice proof of purchase, and the signed inventory manifest.</li>
                            <li><strong>Exclusions:</strong> Internal mechanical or electronic defects of equipment not
                                caused by physical impact or improper self-packed client cartons are excluded from
                                insurance coverage.</li>
                        </ul>
                    </div>

                    <!-- Section 5 -->
                    <div style="margin-bottom: 35px;">
                        <h2
                            style="font-size: 1.25rem; font-weight: 800; color: var(--dark); margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                            <span
                                style="width: 28px; height: 28px; background: var(--primary); color: #fff; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 0.82rem;">5</span>
                            Payment Terms & Rescheduling
                        </h2>
                        <ul style="padding-left: 20px; margin-bottom: 16px;">
                            <li><strong>Payment Milestones:</strong> Standard bookings require an initial confirmation
                                token, with the remaining transit balance payable upon vehicle loading or prior to
                                unloading at destination as per the booking contract.</li>
                            <li><strong>Rescheduling:</strong> Shifting dates can be rescheduled without penalty when
                                communicated at least 48 hours prior to the scheduled packing time. Short-notice
                                same-day cancellations may attract minimum logistics cancellation charges.</li>
                        </ul>
                    </div>

                    <!-- Section 6 -->
                    <div style="margin-bottom: 35px;">
                        <h2
                            style="font-size: 1.25rem; font-weight: 800; color: var(--dark); margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                            <span
                                style="width: 28px; height: 28px; background: var(--primary); color: #fff; border-radius: 50%; display: inline-flex; align-items: center; justify-content: center; font-size: 0.82rem;">6</span>
                            Force Majeure & Transit Delays
                        </h2>
                        <p>
                            <?= esc($comp['company3'] ?? 'QuickRelocation') ?> is not liable for delivery schedule
                            disruptions or delays caused by circumstances beyond reasonable operational control,
                            including natural catastrophes (floods, earthquakes, landslides), civil unrest, road
                            blockades, unexpected highway bridge repairs, or sudden regional transport strikes.
                        </p>
                    </div>

                    <!-- Contact Box -->
                    <div
                        style="background: #f8fafc; border-radius: var(--radius-md); border: 1px solid var(--border-color); padding: 25px; margin-top: 40px;">
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: var(--dark); margin-bottom: 10px;">Have
                            Questions About Our Terms?</h3>
                        <p style="margin-bottom: 14px; color: var(--text-muted); font-size: 0.9rem;">Our customer
                            service team is always available to clarify terms or assist with custom relocation
                            contracts:</p>
                        <div
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 12px; font-size: 0.9rem;">
                            <div><strong>Company:</strong> <?= esc($comp['company3'] ?? 'QuickRelocation') ?></div>
                            <div><strong>Email:</strong> <a
                                    href="mailto:<?= esc($comp['mail'] ?? 'info@relocationservices.com') ?>"
                                    style="color: var(--primary);"><?= esc($comp['mail'] ?? 'info@relocationservices.com') ?></a>
                            </div>
                            <div><strong>Customer Care:</strong> <a
                                    href="tel:<?= esc($comp['phone'] ?? '+91 98765 43210') ?>"
                                    style="color: var(--primary);"><?= esc($comp['phone'] ?? '+91 98765 43210') ?></a>
                            </div>
                            <?php if (!empty($comp['address'])): ?>
                                <div style="grid-column: 1 / -1;"><strong>Head Office:</strong> <?= esc($comp['address']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>

            </div>
        </section>