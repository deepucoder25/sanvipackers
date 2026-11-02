<?php
$companyName   = esc($comp['company3'] ?? ($site->name ?? 'Sanvi Packers'));
$helplinePhone = $phone ?? ($comp['phone'] ?? '+91 70217 10594');
$cleanPhone    = preg_replace('/[^0-9]/', '', $helplinePhone);
?>

<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Video Gallery',
    'subtitle'    => 'Watch our packaging techniques, container loading, and safe transport in action.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Video Gallery'],
    ],
]) ?>

<div class="pm-gallery-page-wrap">
    <div class="container">

        <!-- Gallery Meta / Header Bar -->
        <div class="pm-gallery-meta-bar">
            <div>
                <span class="pm-gallery-meta-badge">
                    <i class="bi bi-play-circle-fill" aria-hidden="true"></i> Video Highlights
                </span>
                <h1 class="pm-gallery-meta-title">Moving Process in Action</h1>
                <p class="pm-gallery-meta-sub">Step-by-step videos showcasing multi-layer packing, vehicle strapping, and damage-free relocations.</p>
            </div>
            <div>
                <a href="https://wa.me/<?= esc($cleanPhone) ?>?text=<?= urlencode('Hi Sanvi Packers, please share recent video clips of your packing and moving service.') ?>" target="_blank" rel="noopener noreferrer" class="pm-btn-whatsapp-pill" title="WhatsApp Coordinator" aria-label="WhatsApp Coordinator">
                    <i class="bi bi-whatsapp" aria-hidden="true"></i> Request Video Clips
                </a>
            </div>
        </div>

        <div class="row g-4">
            <!-- Left / Main Gallery Area -->
            <div class="col-lg-8">
                <div class="row g-4">
                    <?php if (!empty($videos)): ?>
                        <?php foreach ($videos as $video): ?>
                            <div class="col-md-6">
                                <div class="pm-gallery-card">
                                    <div class="ratio ratio-16x9">
                                        <iframe src="<?= esc($video->video_url ?? '') ?>" 
                                                title="<?= esc($video->title ?? 'Relocation Video') ?>" 
                                                allowfullscreen 
                                                class="border-0"></iframe>
                                    </div>
                                    <?php if (!empty($video->title)): ?>
                                        <div class="pm-gallery-card-body">
                                            <h3 class="pm-gallery-card-title"><?= esc($video->title) ?></h3>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <!-- Branded Empty State Card -->
                        <div class="col-12">
                            <div class="pm-gallery-empty-card">
                                <div class="pm-gallery-empty-icon-wrap">
                                    <i class="bi bi-camera-video-fill" aria-hidden="true"></i>
                                </div>
                                <h2 class="pm-gallery-empty-title">Videos Updating Soon</h2>
                                <p class="pm-gallery-empty-sub">
                                    We are editing documentary videos of our recent intercity household moves, corporate warehouse shifting, and car carrier loading. In the meantime, watch live packing clips via WhatsApp.
                                </p>
                                <div class="d-flex justify-content-center flex-wrap gap-2">
                                    <a href="https://wa.me/<?= esc($cleanPhone) ?>?text=<?= urlencode('Hello Sanvi Packers, please share moving process videos on WhatsApp.') ?>" target="_blank" rel="noopener noreferrer" class="pm-btn-whatsapp-pill" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                        <i class="bi bi-whatsapp" aria-hidden="true"></i> Watch Clips on WhatsApp
                                    </a>
                                    <a href="tel:+<?= esc($cleanPhone) ?>" class="pm-btn-red" title="Call Helpline" aria-label="Call Helpline">
                                        <i class="bi bi-telephone-fill" aria-hidden="true"></i> Call Helpline
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="pm-legal-sidebar-sticky">
                    <!-- Gallery Navigation Card -->
                    <div class="pm-gallery-nav-card">
                        <h3 class="pm-gallery-nav-title">
                            <i class="bi bi-compass-fill text-danger me-2" aria-hidden="true"></i> Gallery Navigation
                        </h3>
                        <ul class="pm-gallery-nav-list">
                            <li class="pm-gallery-nav-item">
                                <a href="<?= site_url('photo-gallery') ?>" class="pm-gallery-nav-link">
                                    <span><i class="bi bi-camera me-2" aria-hidden="true"></i> Photo Gallery</span>
                                    <i class="bi bi-chevron-right chevron" aria-hidden="true"></i>
                                </a>
                            </li>
                            <li class="pm-gallery-nav-item">
                                <a href="<?= site_url('video-gallery') ?>" class="pm-gallery-nav-link active">
                                    <span><i class="bi bi-play-circle-fill text-danger me-2" aria-hidden="true"></i> Video Gallery</span>
                                    <i class="bi bi-chevron-right chevron" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- Get in Touch Card -->
                    <div class="pm-gallery-contact-card">
                        <span class="badge bg-danger-subtle text-danger mb-2">
                            <i class="bi bi-headset me-1" aria-hidden="true"></i> Direct Coordinator Support
                        </span>
                        <h3 class="pm-gallery-contact-title">Need Moving Advice?</h3>
                        <p class="pm-gallery-contact-sub">
                            Speak with our senior relocation supervisor for personalized quotes, packaging advice, and free doorstep surveys.
                        </p>
                        
                        <div class="d-flex flex-column gap-2">
                            <a href="tel:+<?= esc($cleanPhone) ?>" class="pm-btn-red w-100 justify-content-center" title="Call Helpline" aria-label="Call Helpline">
                                <i class="bi bi-telephone-fill" aria-hidden="true"></i> Call <?= esc($helplinePhone) ?>
                            </a>
                            <a href="https://wa.me/<?= esc($cleanPhone) ?>" target="_blank" rel="noopener noreferrer" class="pm-btn-whatsapp-pill w-100 justify-content-center" title="Chat on WhatsApp" aria-label="Chat on WhatsApp">
                                <i class="bi bi-whatsapp" aria-hidden="true"></i> Chat on WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
