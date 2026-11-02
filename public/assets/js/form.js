document.addEventListener("DOMContentLoaded", function () {
    // Inject custom validation styles
    if (!document.getElementById("validation-custom-styles")) {
        const style = document.createElement("style");
        style.id = "validation-custom-styles";
        style.innerHTML = `
            .input-error-highlight {
                border: 2px solid #dc2626 !important;
                box-shadow: 0 0 10px rgba(220, 38, 38, 0.4) !important;
                transition: all 0.25s ease-in-out !important;
            }
            .field-error-msg {
                color: #dc2626 !important;
                font-size: 0.72rem !important;
                font-weight: 600 !important;
                line-height: 1.25 !important;
                margin-top: 4px !important;
                margin-bottom: 2px !important;
                text-align: left !important;
                padding-left: 2px !important;
                display: flex !important;
                align-items: flex-start !important;
                gap: 4px !important;
                animation: fieldErrorFadeIn 0.25s ease-out !important;
                width: 100% !important;
            }
            .field-error-msg i {
                font-size: 0.76rem !important;
                margin-top: 1px !important;
                flex-shrink: 0 !important;
            }
            .field-wrap .field-ico {
                top: 14px !important;
            }
            .field-wrap.top-ico .field-ico {
                top: 14px !important;
            }
            @keyframes fieldErrorFadeIn {
                from { opacity: 0; transform: translateY(-3px); }
                to { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);
    }

    // Attach submit handler to ALL forms with class .ajax-form
    document.querySelectorAll(".ajax-form").forEach(form => {

        // Real-time clearance of errors on user typing
        form.querySelectorAll("input, textarea, select").forEach(input => {
            input.addEventListener("input", function () {
                this.classList.remove("input-error-highlight");
                const container = this.closest(".form-group") || this.closest(".field-wrap") || this.closest(".form-floating")?.parentElement || this.closest(".pm-form-input-wrap")?.parentElement || this.parentElement;
                if (container) {
                    container.querySelectorAll(".field-error-msg").forEach(el => el.remove());
                }
            });
        });

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            // Clear previous errors and highlights
            form.querySelectorAll(".input-error-highlight").forEach(el => el.classList.remove("input-error-highlight"));
            form.querySelectorAll(".field-error-msg").forEach(el => el.remove());

            const url = this.getAttribute("data-url");
            const resultBoxId = this.getAttribute("data-result");
            const resultBox = document.getElementById(resultBoxId);
            
            // Get fields
            const nameInput = form.querySelector('input[name="name"]');
            const phoneInput = form.querySelector('input[name="phone"]');

            let hasErrors = false;

            // Helper to show field error cleanly outside input wraps
            function showError(inputEl, message) {
                if (!inputEl) return;
                inputEl.classList.add("input-error-highlight");
                
                const errorDiv = document.createElement("div");
                errorDiv.className = "field-error-msg";
                errorDiv.innerHTML = `<i class="bi bi-exclamation-circle-fill"></i> <span>${message}</span>`;
                
                // Find wrapper: prefer .form-group or .field-wrap or parent of floating/input wrap
                let wrapper = inputEl.closest(".form-group") || inputEl.closest(".field-wrap");
                if (!wrapper) {
                    const floatWrap = inputEl.closest(".form-floating") || inputEl.closest(".pm-form-input-wrap");
                    wrapper = floatWrap ? floatWrap.parentElement : inputEl.parentElement;
                }
                
                // Force wrap if wrapper is a flex container
                const computedStyle = window.getComputedStyle(wrapper);
                if (computedStyle.display === "flex" && computedStyle.flexDirection !== "column") {
                    wrapper.style.flexWrap = "wrap";
                }
                
                // Append inside the wrapper
                wrapper.appendChild(errorDiv);
            }

            // Validate Name
            if (nameInput) {
                const val = nameInput.value.trim();
                if (!val) {
                    showError(nameInput, "Please enter your name.");
                    hasErrors = true;
                }
            }

            // Validate Phone
            if (phoneInput) {
                const val = phoneInput.value.trim();
                if (!val) {
                    showError(phoneInput, "Mobile number is required.");
                    hasErrors = true;
                } else if (!/^\d+$/.test(val)) {
                    showError(phoneInput, "Must contain digits only.");
                    hasErrors = true;
                } else if (val.length !== 10) {
                    showError(phoneInput, "Must be exactly 10 digits.");
                    hasErrors = true;
                }
            }

            if (hasErrors) {
                if (resultBox) {
                    resultBox.innerHTML = ""; // Clear loader/previous messages
                }
                return; // Stop form submission
            }

            const formData = new FormData(this);

            // Show loader
            if (resultBox) {
                resultBox.innerHTML = "<p style='color:orange; font-weight:bold; font-size:0.9rem; padding: 10px;'>Please wait...</p>";
            }

            fetch(url, {
                method: "POST",
                body: formData
            })
            .then(res => res.text())
            .then(data => {

                if (data.trim() === "1") {
                    data = `
                        <div class='alert alert-success' style='margin-top: 15px;'>
                        <p style='color:green; font-weight:bold; margin-bottom: 0;'>Thank you! Your request has been submitted successfully.</p>
                        </div>
                    `;
                    form.reset();
                }

                if (resultBox) {
                    resultBox.innerHTML = data;
                    setTimeout(() => resultBox.innerHTML = "", 8000);
                }
            })
            .catch(err => {
                if (resultBox) {
                    resultBox.innerHTML = "<p style='color:red; font-weight:bold;'>Something went wrong!</p>";
                }
            });

        });

    });

});
