<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Moving Guides & Relocation Tips',
    'subtitle'    => 'Expert packing advice, moving checklists, city cost guides, and vehicle transport tips from Sanvi Packers.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Blog'],
    ],
]) ?>

<div class="pm-blog-page-wrap py-5">
    <div class="container">
        <div class="row g-4">
            
            <!-- Blog Cards Column (Left) -->
            <div class="col-lg-8">
                <?php if (!empty($blogs)): ?>
                    <div class="row g-4">
                        <?php foreach ($blogs as $b): 
                            $slug = !empty($b->slug) ? $b->slug : $b->b_id;
                            $link = site_url('blog/' . $slug);
                            $dateStr = !empty($b->date) ? $b->date : (!empty($b->timestamp) ? date('M d, Y', strtotime($b->timestamp)) : date('M d, Y'));
                            $hasImage = (!empty($b->image) && file_exists(FCPATH . 'uploads/blogs/' . $b->image));
                            $imgSrc = $hasImage ? base_url('uploads/blogs/' . $b->image) : '';
                        ?>
                            <div class="col-12 col-md-6 d-flex">
                                <article class="card w-100 border-0 pm-blog-card d-flex flex-column">
                                    
                                    <!-- Card Thumbnail / Cover Area -->
                                    <div class="pm-blog-thumb-wrap">
                                        <?php if ($hasImage): ?>
                                            <a href="<?= $link ?>">
                                                <img src="<?= $imgSrc ?>" class="pm-blog-thumb-img" alt="<?= esc($b->title ?? '') ?>" loading="lazy">
                                            </a>
                                        <?php else: ?>
                                            <a href="<?= $link ?>" class="pm-blog-thumb-placeholder text-decoration-none" aria-label="Read <?= esc($b->title ?? '') ?>">
                                                <div class="pm-placeholder-icon-box">
                                                    <i class="bi bi-box-seam-fill"></i>
                                                </div>
                                            </a>
                                        <?php endif; ?>

                                        <!-- Floating Category & Date Badges -->
                                        <span class="pm-blog-floating-badge">Relocation Tip</span>
                                        <span class="pm-blog-date-badge"><i class="bi bi-calendar3 me-1"></i> <?= esc($dateStr) ?></span>
                                    </div>

                                    <!-- Card Body Content -->
                                    <div class="card-body p-4 d-flex flex-column">
                                        <!-- Meta: Author & Reading Time -->
                                        <div class="d-flex align-items-center gap-2 text-muted small mb-2">
                                            <span><i class="bi bi-person-fill text-danger me-1"></i> <?= esc(!empty($b->author) ? $b->author : 'Sanvi Editorial') ?></span>
                                            <span>&bull;</span>
                                            <span><i class="bi bi-clock-history text-warning me-1"></i> 3 Min Read</span>
                                        </div>

                                        <!-- Post Title -->
                                        <h2 class="h5 fw-bold mb-2 pm-blog-title">
                                            <a href="<?= $link ?>">
                                                <?= esc($b->title ?? 'Moving Guide') ?>
                                            </a>
                                        </h2>

                                        <!-- Snippet Paragraph -->
                                        <p class="pm-blog-snippet flex-grow-1">
                                            <?= esc(substr(strip_tags($b->description ?? ''), 0, 110)) ?>...
                                        </p>

                                        <!-- Action Link & Views -->
                                        <div class="pt-3 mt-auto border-top d-flex align-items-center justify-content-between">
                                            <a href="<?= $link ?>" class="pm-blog-read-btn">
                                                <span>Read Full Guide</span>
                                                <i class="bi bi-arrow-right"></i>
                                            </a>
                                            <span class="small text-muted"><i class="bi bi-eye me-1"></i> <?= (int)($b->views ?? 0) ?> views</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination -->
                    <?php if ($total > $per_page): ?>
                        <div class="d-flex justify-content-center mt-5">
                            <nav aria-label="Blog Pagination">
                                <ul class="pagination pagination-rounded gap-1">
                                    <?php 
                                    $totalPages = ceil($total / $per_page);
                                    for ($i = 0; $i < $totalPages; $i++): 
                                        $currOffset = $i * $per_page;
                                        $active = ($currOffset == $offset) ? 'active' : '';
                                    ?>
                                        <li class="page-item <?= $active ?>">
                                            <a class="page-link rounded-pill px-3" href="<?= site_url('blog/view/' . $currOffset) ?>"><?= $i + 1 ?></a>
                                        </li>
                                    <?php endfor; ?>
                                </ul>
                            </nav>
                        </div>
                    <?php endif; ?>

                <?php else: ?>
                    <div class="card border-0 shadow-sm rounded-4 p-5 text-center bg-white">
                        <div class="pm-sidebar-icon pm-sidebar-icon-lg mx-auto mb-3">
                            <i class="bi bi-journal-text text-danger"></i>
                        </div>
                        <h2 class="h4 fw-bold text-dark mb-2">No Articles Published Yet</h2>
                        <p class="text-muted mb-4">Our logistics editors are preparing insightful moving guides. Check back soon!</p>
                        <a href="<?= site_url('/') ?>" class="btn pm-srv-btn-primary rounded-pill px-4 py-2 align-self-center">
                            <i class="bi bi-house-door-fill me-1"></i> Return to Homepage
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar Column (Right) -->
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
                                <?php foreach ($recent_posts as $post): 
                                    $pSlug = !empty($post->slug) ? $post->slug : $post->b_id;
                                    $pDate = !empty($post->date) ? $post->date : (!empty($post->timestamp) ? date('M d, Y', strtotime($post->timestamp)) : '');
                                ?>
                                    <div class="pm-sidebar-post-item">
                                        <div class="pm-sidebar-post-thumb">
                                            <i class="bi bi-box-seam"></i>
                                        </div>
                                        <div class="flex-grow-1 min-w-0">
                                            <a href="<?= site_url('blog/' . $pSlug) ?>" class="pm-sidebar-post-title text-truncate">
                                                <?= esc($post->title ?? '') ?>
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
