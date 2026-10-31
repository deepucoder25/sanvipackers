<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'About Our Company',
    'subtitle'    => 'Learn about our journey, certified team, and commitment to delivering peace of mind on every move.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'About Us'],
    ],
]) ?>

<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: center; margin-bottom: 60px;">
            <div>
                <span class="section-badge">Our Story</span>
                <h2 class="section-title">Redefining Moving Standards Across India</h2>
                <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.8; margin-bottom: 16px;">
                    Founded with a mission to make packing and shifting completely transparent and hassle-free, <?= esc($site->name) ?> has grown into one of the most trusted logistics networks.
                </p>
                <p style="color: var(--text-muted); font-size: 1rem; line-height: 1.8; margin-bottom: 24px;">
                    From our humble beginnings with 2 transport trucks, we now manage a nationwide fleet, climate-controlled warehousing, and over 150+ trained packing professionals.
                </p>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                    <div style="background: #ffffff; padding: 20px; border-radius: var(--radius-md); border-left: 4px solid var(--primary); box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                        <h4 style="font-weight: 800; font-size: 1.1rem; margin-bottom: 6px; color: var(--dark);">Our Mission</h4>
                        <p style="font-size: 0.88rem; color: var(--text-muted);">To deliver effortless moving experiences backed by punctuality and care.</p>
                    </div>
                    <div style="background: #ffffff; padding: 20px; border-radius: var(--radius-md); border-left: 4px solid var(--secondary); box-shadow: 0 4px 10px rgba(0,0,0,0.03);">
                        <h4 style="font-weight: 800; font-size: 1.1rem; margin-bottom: 6px; color: var(--dark);">Our Vision</h4>
                        <p style="font-size: 0.88rem; color: var(--text-muted);">To be the most customer-centric logistics and relocation brand nationwide.</p>
                    </div>
                </div>
            </div>

            <div style="background: #ffffff; padding: 40px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                <h3 style="font-size: 1.4rem; font-weight: 800; color: var(--dark); margin-bottom: 25px; text-align: center;">Our Track Record</h3>
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 25px; text-align: center;">
                    <div style="padding: 20px; background: var(--primary-light); border-radius: var(--radius-md);">
                        <div style="font-size: 2.2rem; font-weight: 800; color: var(--primary);">25k+</div>
                        <div style="font-size: 0.85rem; font-weight: 700; color: var(--dark);">Moves Completed</div>
                    </div>
                    <div style="padding: 20px; background: #ffedd5; border-radius: var(--radius-md);">
                        <div style="font-size: 2.2rem; font-weight: 800; color: var(--secondary);">99.8%</div>
                        <div style="font-size: 0.85rem; font-weight: 700; color: var(--dark);">Damage-Free Moves</div>
                    </div>
                    <div style="padding: 20px; background: #ecfdf5; border-radius: var(--radius-md);">
                        <div style="font-size: 2.2rem; font-weight: 800; color: #059669;">500+</div>
                        <div style="font-size: 0.85rem; font-weight: 700; color: var(--dark);">Cities Connected</div>
                    </div>
                    <div style="padding: 20px; background: #f3e8ff; border-radius: var(--radius-md);">
                        <div style="font-size: 2.2rem; font-weight: 800; color: #7c3aed;">15+</div>
                        <div style="font-size: 0.85rem; font-weight: 700; color: var(--dark);">Years Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
