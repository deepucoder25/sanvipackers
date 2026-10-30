<!-- Write Review Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow rounded-4 p-3">
            <div class="modal-header border-0 pb-0">
                <div>
                    <h5 class="modal-title fw-bold" id="reviewModalLabel">Write a Review</h5>
                    <p class="text-muted small mb-0">Share your feedback with us.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <div id="reviewModalResult"></div>

                <form id="reviewForm" onsubmit="handleReviewSubmit(event)" enctype="multipart/form-data">
                    <div class="mb-3 text-center">
                        <label class="form-label fw-bold d-block text-muted small mb-1">Your Rating</label>
                        <div class="rating-stars d-inline-flex flex-row-reverse justify-content-center gap-1 fs-3">
                            <input type="radio" class="d-none star-radio" name="rating" value="5" id="star5" checked>
                            <label for="star5" class="star-label bi bi-star-fill text-warning cursor-pointer"></label>
                            
                            <input type="radio" class="d-none star-radio" name="rating" value="4" id="star4">
                            <label for="star4" class="star-label bi bi-star-fill text-warning cursor-pointer"></label>
                            
                            <input type="radio" class="d-none star-radio" name="rating" value="3" id="star3">
                            <label for="star3" class="star-label bi bi-star-fill text-warning cursor-pointer"></label>
                            
                            <input type="radio" class="d-none star-radio" name="rating" value="2" id="star2">
                            <label for="star2" class="star-label bi bi-star-fill text-warning cursor-pointer"></label>
                            
                            <input type="radio" class="d-none star-radio" name="rating" value="1" id="star1">
                            <label for="star1" class="star-label bi bi-star-fill text-warning cursor-pointer"></label>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold small mb-1">Full Name *</label>
                            <input type="text" name="name" class="form-control" required placeholder="Full Name">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold small mb-1">Email Address *</label>
                            <input type="email" name="email" class="form-control" required placeholder="Email Address">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold small mb-1">City / Location</label>
                        <input type="text" name="city" class="form-control" placeholder="City or Location">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold small mb-1">Your Experience / Feedback *</label>
                        <textarea name="review" class="form-control" rows="4" required placeholder="Share your experience and feedback with us..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold small mb-1">Upload Photos (Optional)</label>
                        <input type="file" name="review_images[]" class="form-control form-control-sm" multiple accept="image/*">
                    </div>

                    <button type="submit" id="reviewSubmitBtn" class="btn btn-primary w-100 py-2 fw-bold rounded-pill">
                        <i class="bi bi-send-fill me-1"></i> Submit Review
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
function handleReviewSubmit(e) {
    e.preventDefault();
    const form = document.getElementById('reviewForm');
    const resultBox = document.getElementById('reviewModalResult');
    const submitBtn = document.getElementById('reviewSubmitBtn');

    const name = form.querySelector('[name="name"]').value.trim();
    const email = form.querySelector('[name="email"]').value.trim();
    const review = form.querySelector('[name="review"]').value.trim();

    if (!name || !email || !review) {
        resultBox.innerHTML = '<div class="alert alert-danger py-2 small mb-3">Please fill in Name, Email, and Review.</div>';
        return;
    }

    const formData = new FormData(form);
    formData.append('ajax', '1');

    submitBtn.disabled = true;
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-1"></span> Submitting...';
    resultBox.innerHTML = '<p class="text-warning small mb-2"><i class="bi bi-hourglass-split"></i> Submitting your feedback...</p>';

    fetch('<?= site_url('reviews/submit') ?>', {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(res => res.json())
    .then(data => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class="bi bi-send-fill me-1"></i> Submit Review';

        if (data.status === 'success') {
            resultBox.innerHTML = '<div class="alert alert-success py-2 small mb-3"><i class="bi bi-check-circle-fill me-1"></i> ' + (data.message || 'Thank you! Your review has been submitted.') + '</div>';

            const pageAlert = document.getElementById('pageSuccessAlert');
            if (pageAlert) {
                pageAlert.classList.remove('d-none');
                document.getElementById('pageSuccessText').innerText = data.message || 'Thank you! Your review has been submitted.';
            }

            if (data.review && typeof prependReviewCard === 'function') {
                prependReviewCard(data.review);
            }

            form.reset();

            setTimeout(() => {
                const modalEl = document.getElementById('reviewModal');
                const modalInstance = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                modalInstance.hide();
                resultBox.innerHTML = '';
            }, 1400);
        } else {
            resultBox.innerHTML = '<div class="alert alert-danger py-2 small mb-3"><i class="bi bi-exclamation-triangle-fill me-1"></i> ' + (data.message || 'Error occurred.') + '</div>';
        }
    })
    .catch(err => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class="bi bi-send-fill me-1"></i> Submit Review';
        resultBox.innerHTML = '<div class="alert alert-danger py-2 small mb-3">Unable to submit review. Please try again.</div>';
    });
}
</script>
