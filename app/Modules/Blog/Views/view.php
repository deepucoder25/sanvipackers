<?php 
$post = !empty($query[0]) ? $query[0] : null; 
$dateStr = !empty($post->date) ? $post->date : (!empty($post->timestamp) ? date('M d, Y', strtotime($post->timestamp)) : date('M d, Y'));
$hasImage = (!empty($post->image) && file_exists(FCPATH . 'uploads/blogs/' . $post->image));
$imgSrc = $hasImage ? base_url('uploads/blogs/' . $post->image) : '';
$whatsappNum = $whatsapp ?? ($comp['whatsapp'] ?? ($site->whatsapp ?? '7021710594'));
$cleanWhatsapp = preg_replace('/[^0-9]/', '', $whatsappNum);
$postTitle = $post->title ?? 'Blog Article';
?>
<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => $postTitle,
    'subtitle'    => 'Professional packing advice, moving insights, and relocation guidelines.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Blog', 'url' => site_url('blog/view')],
        ['title' => esc(mb_strimwidth($postTitle, 0, 32, '...'))],
    ],
]) ?>

<div class="pm-blog-page-wrap py-5">
    <div class="container">
        <div class="row g-4">
            
            <!-- Main Post Content (Left Column) -->
            <div class="col-lg-8">
                <article class="card border-0 pm-blog-detail-card">
                    
                    <!-- Cover Image or Branded Hero Banner Fallback -->
                    <?php if ($hasImage): ?>
                        <div class="pm-blog-detail-thumb-wrap mb-4">
                            <img src="<?= $imgSrc ?>" 
                                 alt="<?= esc($postTitle) ?>" 
                                 class="pm-blog-detail-thumb-img">
                        </div>
                    <?php else: ?>
                        <div class="pm-blog-detail-placeholder mb-4">
                            <div class="pm-placeholder-icon-box">
                                <i class="bi bi-box-seam-fill"></i>
                            </div>
                            <span class="pm-blog-floating-badge">Relocation Insight</span>
                        </div>
                    <?php endif; ?>

                    <!-- Post Meta Strip -->
                    <div class="pm-blog-detail-meta">
                        <span class="pm-blog-meta-item">
                            <i class="bi bi-person-fill text-danger me-1"></i>
                            <?= esc(!empty($post->author) ? $post->author : 'Sanvi Editorial Team') ?>
                        </span>
                        <span class="pm-blog-meta-item">
                            <i class="bi bi-calendar3 text-danger me-1"></i>
                            <?= esc($dateStr) ?>
                        </span>
                        <span class="pm-blog-meta-item">
                            <i class="bi bi-eye text-warning me-1"></i>
                            <?= (int)($post->views ?? 0) ?> views
                        </span>
                        <span class="pm-blog-meta-item">
                            <i class="bi bi-clock-history text-muted me-1"></i>
                            3 Min Read
                        </span>
                        <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-1 ms-auto">
                            <i class="bi bi-patch-check-fill me-1"></i> Verified Moving Advice
                        </span>
                    </div>

                    <!-- Article Headline -->
                    <h2 class="h3 fw-bold text-dark mb-4 pm-blog-detail-title">
                        <?= esc($postTitle) ?>
                    </h2>

                    <!-- Article Body Content -->
                    <div class="pm-blog-content lh-lg mb-4">
                        <?= nl2br($post->description ?? '') ?>
                    </div>

                    <!-- Relocation Callout Banner -->
                    <div class="pm-blog-callout my-4 p-4 rounded-4">
                        <div class="d-flex align-items-center gap-3">
                            <div class="pm-blog-callout-icon">
                                <i class="bi bi-truck"></i>
                            </div>
                            <div>
                                <h3 class="h6 fw-bold mb-1 text-dark">Planning a Home or Office Relocation?</h3>
                                <p class="small text-muted mb-0">Get a 100% transparent quote with dedicated move supervisors, verified handlers, and comprehensive transit insurance.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Article Bottom Action Bar -->
                    <div class="pt-4 mt-2 border-top d-flex flex-wrap justify-content-between align-items-center gap-3">
                        <a href="<?= site_url('blog/view') ?>" class="btn btn-outline-danger rounded-pill px-4 py-2 fw-bold">
                            <i class="bi bi-arrow-left me-1"></i> Back to All Guides
                        </a>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="https://wa.me/<?= esc($cleanWhatsapp) ?>?text=<?= urlencode('Hello Sanvi Packers, I was reading your moving guide "' . $postTitle . '" and would like a quote.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success rounded-pill px-3 py-2 fw-bold d-inline-flex align-items-center gap-1">
                                <i class="bi bi-whatsapp"></i> Chat on WhatsApp
                            </a>
                            <button type="button" class="btn pm-srv-btn-primary rounded-pill px-4 py-2 fw-bold" data-bs-toggle="modal" data-bs-target="#qteModal">
                                <i class="bi bi-calculator-fill me-1"></i> Calculate Moving Quote
                            </button>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Sidebar Column (Right Column) -->
            <div class="col-lg-4">
                <div class="pm-blog-sidebar-sticky">
                    <!-- Widget: Recent Articles -->
                    <div class="pm-sidebar-widget p-4 mb-4">
                        <div class="pm-sidebar-header">
                            <div class="pm-sidebar-icon">
                                <i class="bi bi-fire"></i>
                            </div>
                            <h3 class="h6 fw-bold text-dark mb-0">Recent Moving Guides</h3>
                        </div>

                        <div class="d-flex flex-column gap-3">
                            <?php if (!empty($recent_posts)): ?>
                                <?php foreach ($recent_posts as $p): 
                                    $pSlug = !empty($p->slug) ? $p->slug : $p->b_id;
                                    $pDate = !empty($p->date) ? $p->date : (!empty($p->timestamp) ? date('M d, Y', strtotime($p->timestamp)) : '');
                                ?>
                                    <div class="pm-sidebar-post-item">
                                        <div class="pm-sidebar-post-thumb">
                                            <i class="bi bi-box-seam"></i>
                                        </div>
                                        <div class="flex-grow-1 min-w-0">
                                            <a href="<?= site_url('blog/' . $pSlug) ?>" class="pm-sidebar-post-title text-truncate">
                                                <?= esc($p->title ?? '') ?>
                                            </a>
                                            <?php if (!empty($pDate)): ?>
                                                <span class="pm-sidebar-post-date"><i class="bi bi-calendar3 me-1"></i> <?= esc($pDate) ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <p class="text-muted small mb-0">No recent articles available.</p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Shared Sidebar Widget: Services & Moving Quote CTA -->
                    <?= view('Modules\Blog\Views\sidebar') ?>
                </div>
            </div>
        </div>
    </div>
</div>
