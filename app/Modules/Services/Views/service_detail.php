<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => $service['title'] ?? 'Relocation Service',
    'subtitle'    => $service['desc'] ?? '',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Services', 'url' => site_url('services')],
        ['title' => $service['title'] ?? 'Service'],
    ],
]) ?>

<section class="section">
    <div class="container">
        <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: start;">
            <div>
                <div style="background: #ffffff; padding: 40px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); margin-bottom: 30px;">
                    <div class="service-icon" style="width: 70px; height: 70px; font-size: 2rem;">
                        <i class="fa-solid <?= esc($service['icon']) ?>"></i>
                    </div>
                    <h2 style="font-size: 1.8rem; font-weight: 800; color: var(--dark); margin-bottom: 16px;">Professional <?= esc($service['title']) ?></h2>
                    <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.8; margin-bottom: 24px;">
                        <?= esc($service['desc']) ?>
                    </p>

                    <h3 style="font-size: 1.3rem; font-weight: 800; margin-bottom: 16px;">Key Service Inclusions:</h3>
                    <ul style="list-style: none; padding: 0; margin-bottom: 30px;">
                        <?php foreach ($service['features'] as $f): ?>
                            <li style="display: flex; gap: 12px; align-items: center; margin-bottom: 12px; font-weight: 600;">
                                <i class="fa-solid fa-circle-check" style="color: var(--primary);"></i> <?= esc($f) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <a href="<?= site_url('contact') ?>" class="btn btn-primary" style="padding: 14px 30px; font-size: 1rem;">
                        <i class="fa-solid fa-calculator"></i> Book <?= esc($service['title']) ?>
                    </a>
                </div>
            </div>

            <!-- Sidebar -->
            <div>
                <div style="background: #ffffff; padding: 30px; border-radius: var(--radius-lg); border: 1px solid var(--border-color); margin-bottom: 25px;">
                    <h4 style="font-weight: 800; font-size: 1.2rem; margin-bottom: 16px;">All Services</h4>
                    <ul style="list-style: none; padding: 0;">
                        <?php foreach ($allServices as $s): ?>
                            <li style="margin-bottom: 10px;">
                                <a href="<?= site_url('services/' . $s['slug']) ?>" style="display: block; padding: 10px 14px; border-radius: var(--radius-sm); background: <?= ($s['slug'] === $service['slug']) ? 'var(--primary-light)' : 'var(--light-bg)' ?>; color: <?= ($s['slug'] === $service['slug']) ? 'var(--primary)' : 'var(--text-main)' ?>; font-weight: 600;">
                                    <i class="fa-solid <?= esc($s['icon']) ?>"></i> <?= esc($s['title']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div style="background: linear-gradient(135deg, #10b981, #059669); color: #fff; padding: 25px; border-radius: var(--radius-lg); text-align: center;">
                    <i class="fa-brands fa-whatsapp fa-3x" style="margin-bottom: 10px;"></i>
                    <h4 style="font-weight: 800; font-size: 1.2rem; margin-bottom: 6px;">Need Instant Pricing?</h4>
                    <p style="font-size: 0.88rem; opacity: 0.9; margin-bottom: 14px;">Chat directly with our team on WhatsApp.</p>
                    <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $site->whatsapp) ?>" target="_blank" class="btn" style="background: #fff; color: #047857; font-weight: 800;">
                        Chat on WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
