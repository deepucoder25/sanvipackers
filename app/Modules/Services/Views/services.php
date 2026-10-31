<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Our Relocation Services',
    'subtitle'    => 'Complete packing, moving, vehicle transport, and safe warehouse storage under one roof.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Services'],
    ],
]) ?>

<section class="section">
    <div class="container">
        <div class="card-grid">
            <?php foreach ($services as $srv): ?>
                <div class="service-box">
                    <div class="service-icon"><i class="fa-solid <?= esc($srv['icon']) ?>"></i></div>
                    <h3 style="font-size: 1.35rem; font-weight: 700; margin-bottom: 12px; color: var(--dark);"><?= esc($srv['title']) ?></h3>
                    <p style="color: var(--text-muted); font-size: 0.95rem; line-height: 1.6; margin-bottom: 20px;"><?= esc($srv['desc']) ?></p>
                    
                    <ul style="list-style: none; padding: 0; margin-bottom: 25px;">
                        <?php foreach ($srv['features'] as $f): ?>
                            <li style="font-size: 0.88rem; color: var(--text-main); margin-bottom: 8px; display: flex; align-items: center; gap: 8px;">
                                <i class="fa-solid fa-check" style="color: var(--primary);"></i> <?= esc($f) ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <div style="display: flex; gap: 10px;">
                        <a href="<?= site_url('services/' . $srv['slug']) ?>" class="btn" style="flex: 1; background: var(--light-bg); border: 1px solid var(--border-color); font-size: 0.88rem;">Details</a>
                        <a href="<?= site_url('contact') ?>" class="btn btn-primary" style="flex: 1; font-size: 0.88rem;">Book</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
