<?php 
$post = !empty($query[0]) ? $query[0] : null; 
$dateStr = !empty($post->date) ? $post->date : (!empty($post->timestamp) ? date('M d, Y', strtotime($post->timestamp)) : '');
$imgSrc = (!empty($post->image) && file_exists(FCPATH . 'uploads/blogs/' . $post->image))
    ? base_url('uploads/blogs/' . $post->image)
    : base_url('assets/images/about/packers_movers.jpg');
?>
<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => $post->title ?? 'Blog Article',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Blog', 'url' => site_url('blog')],
        ['title' => 'Article Details'],
    ],
]) ?>

<section class="section">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <article class="card border-0 shadow-sm rounded-4 overflow-hidden p-4 p-md-5 bg-white">
                    <?php if (!empty($post->image)): ?>
                        <div class="mb-4 rounded-3 overflow-hidden">
                            <img src="<?= $imgSrc ?>" 
                                 alt="<?= esc($post->title ?? '') ?>" 
                                 class="w-100 img-fluid rounded-3">
                        </div>
                    <?php endif; ?>

                    <div class="d-flex flex-wrap align-items-center justify-content-between pb-3 mb-4 border-bottom text-muted small">
                        <div class="d-flex gap-3">
                            <?php if (!empty($dateStr)): ?>
                                <span><i class="bi bi-calendar-event text-primary me-1"></i> <?= esc($dateStr) ?></span>
                            <?php endif; ?>
                            <?php if (!empty($post->author)): ?>
                                <span><i class="bi bi-person-circle text-success me-1"></i> <?= esc($post->author) ?></span>
                            <?php endif; ?>
                            <?php if (!empty($post->views)): ?>
                                <span><i class="bi bi-eye text-secondary me-1"></i> <?= (int)$post->views ?> Views</span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <h2 class="fw-bold fs-3 mb-4"><?= esc($post->title ?? '') ?></h2>

                    <div class="blog-content lh-lg text-secondary">
                        <?= nl2br($post->description ?? '') ?>
                    </div>

                    <div class="mt-5 pt-4 border-top d-flex justify-content-between align-items-center flex-wrap gap-3">
                        <a href="<?= site_url('blog') ?>" class="btn btn-outline-primary rounded-pill">
                            <i class="bi bi-arrow-left me-1"></i> Back to All Articles
                        </a>
                        <a href="<?= site_url('contact') ?>" class="btn btn-primary rounded-pill">
                            <i class="bi bi-envelope-fill me-1"></i> Contact Us
                        </a>
                    </div>
                </article>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                    <h5 class="fw-bold fs-6 mb-3"><i class="bi bi-fire text-primary me-2"></i> Recent Posts</h5>
                    <div class="d-flex flex-column gap-3">
                        <?php if (!empty($recent_posts)): ?>
                            <?php foreach ($recent_posts as $p): 
                                $pSlug = !empty($p->slug) ? $p->slug : $p->b_id;
                                $pDate = !empty($p->date) ? $p->date : (!empty($p->timestamp) ? date('M d, Y', strtotime($p->timestamp)) : '');
                            ?>
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <h6 class="fw-bold mb-1 fs-6">
                                            <a href="<?= site_url('blog/' . $pSlug) ?>" class="text-dark text-decoration-none hover-primary">
                                                <?= esc($p->title ?? '') ?>
                                            </a>
                                        </h6>
                                        <?php if (!empty($pDate)): ?>
                                            <span class="text-muted small"><?= esc($pDate) ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <?= view('Modules\Blog\Views\sidebar') ?>
            </div>
        </div>
    </div>
</section>
