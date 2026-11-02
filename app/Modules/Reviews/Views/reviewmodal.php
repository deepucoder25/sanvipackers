<!-- Write Review Modal -->
<div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content pm-review-modal-card p-3 p-md-4">
            <div class="modal-header border-0 pb-2">
                <div class="d-flex align-items-center gap-2">
                    <span class="pm-modal-icon-badge">
                        <i class="bi bi-pencil-square" aria-hidden="true"></i>
                    </span>
                    <div>
                        <h2 class="h5 modal-title fw-bold mb-0 text-dark" id="reviewModalLabel">Write a Customer Review</h2>
                        <p class="text-muted small mb-0">Share your moving feedback with Sanvi Packers.</p>
                    </div>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <div id="reviewModalResult"></div>

                <form id="reviewForm" onsubmit="handleReviewSubmit(event)" enctype="multipart/form-data">
                    <!-- Rating selector card -->
                    <div class="pm-modal-rating-card mb-3">
                        <span class="pm-modal-rating-title">How was your moving experience?</span>
                        <div class="pm-rating-stars mt-1 mb-1">
                            <input type="radio" class="d-none star-radio" name="rating" value="5" id="star5" checked onchange="updateRatingFeedback(5)">
                            <label for="star5" class="star-label bi bi-star-fill" title="5 Stars - Excellent"></label>
                            
                            <input type="radio" class="d-none star-radio" name="rating" value="4" id="star4" onchange="updateRatingFeedback(4)">
                            <label for="star4" class="star-label bi bi-star-fill" title="4 Stars - Very Good"></label>
                            
                            <input type="radio" class="d-none star-radio" name="rating" value="3" id="star3" onchange="updateRatingFeedback(3)">
                            <label for="star3" class="star-label bi bi-star-fill" title="3 Stars - Good"></label>
                            
                            <input type="radio" class="d-none star-radio" name="rating" value="2" id="star2" onchange="updateRatingFeedback(2)">
                            <label for="star2" class="star-label bi bi-star-fill" title="2 Stars - Fair"></label>
                            
                            <input type="radio" class="d-none star-radio" name="rating" value="1" id="star1" onchange="updateRatingFeedback(1)">
                            <label for="star1" class="star-label bi bi-star-fill" title="1 Star - Poor"></label>
                        </div>
                        <div class="d-flex justify-content-center">
                            <span id="ratingFeedbackBadge" class="pm-rating-badge">
                                <i class="bi bi-star-fill text-warning me-1"></i> <span id="ratingFeedbackText">5.0 - Excellent Experience</span>
                            </span>
                        </div>
                    </div>

                    <!-- Floating label inputs -->
                    <div class="row g-2 mb-2">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" name="name" class="form-control" id="floatingReviewName" placeholder="Full Name" required>
                                <label for="floatingReviewName"><i class="bi bi-person text-danger me-1"></i> Full Name *</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control" id="floatingReviewEmail" placeholder="Email Address" required>
                                <label for="floatingReviewEmail"><i class="bi bi-envelope text-danger me-1"></i> Email Address *</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-2">
                        <input type="text" name="city" class="form-control" id="floatingReviewCity" placeholder="Moving Route or City">
                        <label for="floatingReviewCity"><i class="bi bi-geo-alt text-danger me-1"></i> Moving Route / City (e.g. Mumbai to Bangalore)</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea name="review" class="form-control pm-review-textarea" id="floatingReviewText" placeholder=" " required></textarea>
                        <label for="floatingReviewText"><i class="bi bi-chat-heart text-danger me-1"></i> Your Experience &amp; Feedback *</label>
                    </div>

                    <div class="mb-3">
                        <div class="pm-review-file-box">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="small fw-bold text-dark d-flex align-items-center gap-1">
                                    <i class="bi bi-images text-danger"></i> Add Moving Photos <span class="text-muted fw-normal small">(Optional)</span>
                                </span>
                                <span class="badge bg-light text-secondary border small">Max 3</span>
                            </div>
                            <input type="file" name="review_images[]" class="form-control form-control-sm pm-review-file-input" multiple accept="image/*">
                        </div>
                    </div>

                    <button type="submit" id="reviewSubmitBtn" class="pm-btn-red w-100 py-3 fw-bold rounded-pill justify-content-center">
                        <i class="bi bi-send-fill me-2" aria-hidden="true"></i> Submit Customer Review
                    </button>
                    
                    <div class="text-center mt-2">
                        <small class="text-muted"><i class="bi bi-shield-check text-success me-1"></i> Verified feedback helps thousands of moving families.</small>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
const ratingTexts = {
    5: '5.0 - Excellent Experience',
    4: '4.0 - Very Good Service',
    3: '3.0 - Good Experience',
    2: '2.0 - Fair Service',
    1: '1.0 - Needs Improvement'
};

function updateRatingFeedback(val) {
    const textEl = document.getElementById('ratingFeedbackText');
    if (textEl && ratingTexts[val]) {
        textEl.innerText = ratingTexts[val];
    }
}

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
            document.querySelectorAll('#reviewForm .form-control').forEach(el => el.classList.remove('has-value'));

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

document.addEventListener('DOMContentLoaded', () => {
    const inputs = document.querySelectorAll('#reviewForm .form-control');
    inputs.forEach(input => {
        const toggleValueClass = () => {
            if (input.value && input.value.trim().length > 0) {
                input.classList.add('has-value');
            } else {
                input.classList.remove('has-value');
            }
        };
        input.addEventListener('input', toggleValueClass);
        input.addEventListener('change', toggleValueClass);
        input.addEventListener('blur', toggleValueClass);
        toggleValueClass();
    });
});
</script>
