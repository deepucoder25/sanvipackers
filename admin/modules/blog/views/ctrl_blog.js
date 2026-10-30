// Blog Controller - 3D Glassmorphism UI
app.controller('ctrl_blog', function($scope, $http) {
    $http.get('login/check_valid_session').success(function(data) {
        if (data != 1) {
            window.location.assign('<?=site_url("login")?>');
        }
    });

    $scope.showData = true;
    $scope.showSeo = false;
    $scope.datadb = [];

    // Helper: Format today's date as "Oct 28, 2026"
    function getTodayFormatted() {
        var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        var d = new Date();
        return months[d.getMonth()] + ' ' + ('0' + d.getDate()).slice(-2) + ', ' + d.getFullYear();
    }

    $scope.loader = function() {
        $http.get("blog/view_data").success(function(data) {
            $scope.datadb = data || [];
        });
    };

    // Initialize datepicker
    setTimeout(function() {
        if (typeof $.fn.datepicker === 'function') {
            $('#DOB1').datepicker({
                dateFormat: 'M dd, yy'
            });
        }
    }, 200);

    // Reset / Initialize Form with Smart Defaults
    $scope.filter_new = function() {
        $scope.x = {
            date: getTodayFormatted(),
            time: '5 min read',
            author: 'Admin',
            title: '',
            slug: '',
            description: '',
            tags: '',
            meta_title: '',
            meta_desc: '',
            image: ''
        };
        $scope.showSeo = false;
        var fileInput = document.getElementById('imageFile');
        if (fileInput) fileInput.value = '';
        var previewWrap = document.getElementById('imagePreviewWrapper');
        if (previewWrap) previewWrap.style.display = 'none';
    };

    $scope.filter_new();
    $scope.loader();

    // Edit Article
    $scope.update_call = function(y) {
        $scope.x = angular.copy(y);
        if ($scope.x.meta_title || $scope.x.meta_desc) {
            $scope.showSeo = true;
        }
        var previewWrap = document.getElementById('imagePreviewWrapper');
        if (previewWrap && $scope.x.image) {
            previewWrap.style.display = 'flex';
        }
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };

    // Auto-generate URL slug from title
    $scope.slugify = function() {
        if (!$scope.x || !$scope.x.title) return;
        var str = $scope.x.title.toLowerCase();
        str = str.replace(/[`~!@#$%^&*()_\-+=\[\]{};:'"\\|\/,.<>?\s]/g, ' ');
        str = str.replace(/^\s+|\s+$/gm, '');
        $scope.x.slug = str.replace(/\s+/g, '-');
    };

    // Summernote Editor Configuration
    $scope.options = {
        height: 130,
        placeholder: 'Write your engaging article content here...',
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture']],
            ['view', ['fullscreen', 'codeview']]
        ]
    };

    // Save Data via AJAX FormData
    $scope.save_data = function(y) {
        if (!$scope.x || !$scope.x.title || !String($scope.x.title).trim()) {
            if (typeof messages === 'function') {
                messages("warning", "Required!", "Please enter article title.", 3000);
            } else {
                alert("Please enter article title.");
            }
            return;
        }

        // Sync Summernote HTML to hidden textarea for POST payload
        var descContent = ($scope.x && $scope.x.description) ? $scope.x.description : '';
        if (!descContent || !String(descContent).trim()) {
            // Check if summernote has text directly
            var snCode = $('.summernote-3d-frame .note-editable').html();
            if (snCode && snCode !== '<p><br></p>') {
                descContent = snCode;
                $scope.x.description = snCode;
            }
        }

        if (!descContent || !String(descContent).trim() || descContent === '<p><br></p>') {
            if (typeof messages === 'function') {
                messages("warning", "Required!", "Please write article description/content.", 3000);
            } else {
                alert("Please write article description/content.");
            }
            return;
        }

        $('#hiddenDescTextarea').val(descContent);

        // Ensure Date & Time defaults
        if (!$scope.x.date) {
            $scope.x.date = getTodayFormatted();
            $('input[name="date"]').val($scope.x.date);
        }
        if (!$scope.x.time) {
            $scope.x.time = '5 min read';
            $('input[name="time"]').val($scope.x.time);
        }

        $('#submitbtn').attr('disabled', true);
        var formData = new FormData(document.getElementById('form1'));

        // Fallback explicit append if hidden field not in form
        if (!formData.get('description')) {
            formData.append('description', descContent);
        }

        $.ajax({
            type: "POST",
            url: "blog/save_data",
            data: formData,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('#webprogress').css('display', 'inline-flex');
            },
            success: function(data) {
                data = (data || '').toString().trim();
                console.log("Blog save response:", data);

                if (data == "1") {
                    $scope.loader();
                    if (typeof messages === 'function') {
                        messages("success", "Success!", "Article saved successfully!", 3500);
                    } else {
                        alert("Article saved successfully!");
                    }
                    $scope.filter_new();
                    $scope.$applyAsync();
                } else if (data == "0") {
                    if (typeof messages === 'function') {
                        messages("warning", "Info!", "No changes were made.", 3000);
                    }
                } else {
                    if (typeof messages === 'function') {
                        messages("danger", "Warning!", data, 4000);
                    } else {
                        alert(data);
                    }
                }
                $('#webprogress').css('display', 'none');
                $('#submitbtn').attr('disabled', false);
            },
            error: function(xhr, status, err) {
                $('#webprogress').css('display', 'none');
                $('#submitbtn').attr('disabled', false);
                if (typeof messages === 'function') {
                    messages("danger", "Error!", "Save failed: " + err, 4000);
                } else {
                    alert("Save failed: " + err);
                }
            }
        });
    };

    // Delete Article
    $scope.delete_data = function(id) {
        if (confirm("Are you sure you want to delete this article?")) {
            $http.get("blog/delete_data?id=" + id).success(function(data) {
                data = (data || '').toString().trim();
                if (data == "1") {
                    if (typeof messages === 'function') {
                        messages("success", "Deleted!", "Article deleted successfully", 3000);
                    }
                    $scope.loader();
                } else {
                    if (typeof messages === 'function') {
                        messages("danger", "Warning!", "Article could not be deleted", 3500);
                    }
                }
            });
        }
    };
});
