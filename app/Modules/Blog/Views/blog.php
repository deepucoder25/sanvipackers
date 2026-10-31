<?= view('Modules\About\Views\dynamic_breadcrumb', [
    'title'       => 'Our Blog & Articles',
    'subtitle'    => 'Latest news, insights, and helpful articles.',
    'breadcrumbs' => [
        ['title' => 'Home', 'url' => site_url('/')],
        ['title' => 'Blog'],
    ],
]) ?>

<section class="section">
    <div class="container">
        <div class="row g-4">
            <!-- Blog Cards Column -->
            <div class="col-lg-8">
                <?php if (!empty($blogs)): ?>
                    <div class="row g-4">
                        <?php foreach ($blogs as $b): 
                            $slug = !empty($b->slug) ? $b->slug : $b->b_id;
                            $link = site_url('blog/' . $slug);
                            $dateStr = !empty($b->date) ? $b->date : (!empty($b->timestamp) ? date('M d, Y', strtotime($b->timestamp)) : '');
                            $imgSrc = (!empty($b->image) && file_exists(FCPATH . 'uploads/blogs/' . $b->image))
                                ? base_url('uploads/blogs/' . $b->image)
                                : base_url('assets/images/about/packers_movers.jpg');
                        ?>
                            <div class="col-md-6">
                                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden blog-card">
                                    <?php if (!empty($b->image)): ?>
                                        <div class="blog-thumb-wrap">
                                            <a href="<?= $link ?>">
                                                <img src="<?= $imgSrc ?>" 
                                                     class="card-img-top blog-thumb" 
                                                     alt="<?= esc($b->title ?? '') ?>">
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="d-flex align-items-center gap-2 text-muted small mb-2">
                                            <?php if (!empty($dateStr)): ?>
                                                <span><i class="bi bi-calendar3 text-primary"></i> <?= esc($dateStr) ?></span>
                                            <?php endif; ?>
                                            <?php if (!empty($b->author)): ?>
                                                <span>&bull;</span>
                                                <span><i class="bi bi-person text-success"></i> <?= esc($b->author) ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <h5 class="card-title fw-bold fs-6 mb-2">
                                            <a href="<?= $link ?>" class="text-dark text-decoration-none hover-primary">
                                                <?= esc($b->title ?? '') ?>
                                            </a>
                                        </h5>
                                        <p class="text-muted small mb-4 flex-grow-1">
                                            <?= esc(substr(strip_tags($b->description ?? ''), 0, 110)) ?>...
                                        </p>
                                        <a href="<?= $link ?>" class="btn btn-sm btn-outline-primary rounded-pill fw-semibold align-self-start">
                                            Read More <i class="bi bi-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Pagination -->
                    <?php if ($total > $per_page): ?>
                        <div class="d-flex justify-content-center mt-5">
                            <ul class="pagination">
                                <?php 
                                $totalPages = ceil($total / $per_page);
                                for ($i = 0; $i < $totalPages; $i++): 
                                    $currOffset = $i * $per_page;
                                    $active = ($currOffset == $offset) ? 'active' : '';
                                ?>
                                    <li class="page-item <?= $active ?>">
                                        <a class="page-link" href="<?= site_url('blog/view/' . $currOffset) ?>"><?= $i + 1 ?></a>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                <?php else: ?>
                    <div class="alert alert-info text-center py-5 rounded-4">
                        <i class="bi bi-journal-text fs-1 d-block mb-2 text-primary"></i>
                        <h4 class="fw-bold">No Articles Yet</h4>
                        <p class="text-muted mb-0">Articles will be published soon.</p>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                    <h5 class="fw-bold fs-6 mb-3"><i class="bi bi-fire text-primary me-2"></i> Recent Posts</h5>
                    <div class="d-flex flex-column gap-3">
                        <?php if (!empty($recent_posts)): ?>
                            <?php foreach ($recent_posts as $post): 
                                $pSlug = !empty($post->slug) ? $post->slug : $post->b_id;
                                $pDate = !empty($post->date) ? $post->date : (!empty($post->timestamp) ? date('M d, Y', strtotime($post->timestamp)) : '');
                            ?>
                                <div class="d-flex gap-3 align-items-center">
                                    <div class="flex-grow-1">
                                        <h6 class="fw-bold mb-1 fs-6">
                                            <a href="<?= site_url('blog/' . $pSlug) ?>" class="text-dark text-decoration-none hover-primary">
                                                <?= esc($post->title ?? '') ?>
                                            </a>
                                        </h6>
                                        <?php if (!empty($pDate)): ?>
                                            <span class="text-muted small"><?= esc($pDate) ?></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p class="text-muted small mb-0">No recent articles available.</p>
                        <?php endif; ?>
                    </div>
                </div>

                <?= view('Modules\Blog\Views\sidebar') ?>
            </div>
        </div>
    </div>
</section>
