<?php
// Photo Gallery Module - Compact 3D Glassmorphism UI
?>
<div class="dash-wrapper gallery-module-wrap">
    <!-- Floating Background 3D Glow Orbs -->
    <div class="glass-orb orb-1"></div>
    <div class="glass-orb orb-2"></div>
    <div class="glass-orb orb-3"></div>

    <!-- Top Compact Header -->
    <div class="glass-panel gallery-top-header">
        <div class="header-left">
            <div class="header-tag"><i class="fa fa-picture-o"></i> Media Showcase</div>
            <h1 class="header-title">Photo Gallery</h1>
            <p class="header-subtitle">Upload high-resolution pictures and manage public gallery photos.</p>
        </div>
        <div class="header-right">
            <div class="stat-counter-pill">
                <span class="pulse-dot"></span>
                <span>{{datadb.length || 0}} Photos</span>
            </div>
        </div>
    </div>

    <!-- Main Grid Layout: Upload Form & Photo Cards -->
    <div class="gallery-grid-layout">
        
        <!-- Left: Upload Form Panel -->
        <div class="glass-panel upload-form-panel">
            <div class="panel-header">
                <div class="panel-header-title">
                    <span class="header-dot"></span>
                    <span>Upload Picture</span>
                </div>
            </div>

            <form class="gallery-3d-form" name="form" id="form" method="post" action="" autocomplete="off" enctype="multipart/form-data">
                <div id="validation"></div>

                <div class="field-group">
                    <label class="field-label">Photo Title (Optional)</label>
                    <div class="input-3d-box">
                        <i class="fa fa-font input-icon"></i>
                        <input type="text" class="input-3d-control" id="title" name="title" ng-model="x.title" placeholder="e.g. Modern Logistics Fleet">
                    </div>
                </div>

                <div class="field-group">
                    <label class="field-label">Select Image File</label>
                    <div class="upload-drop-zone" onclick="document.getElementById('file').click()">
                        <div class="drop-icon-3d">
                            <i class="fa fa-cloud-upload"></i>
                        </div>
                        <div class="drop-text-content">
                            <span class="drop-title">Browse Picture</span>
                            <span class="drop-subtitle">JPG, PNG, WEBP (Max 5MB)</span>
                        </div>
                        <input type="file" id="file" name="image" class="file-hidden-input" style="display:none !important;" onchange="previewGalleryImage(this)">
                    </div>

                    <!-- Local preview -->
                    <div id="galleryPreviewBox" class="gallery-preview-box" style="display:none;">
                        <img id="galleryPreviewImg" class="gallery-preview-img" alt="Preview">
                        <span class="preview-tag"><i class="fa fa-check-circle"></i> Selected</span>
                    </div>
                </div>

                <div class="form-action-bar">
                    <button type="button" ng-disabled="form.$invalid" class="btn-3d-primary btn-upload-action" id="btnsubmit" ng-click="insert_data()" accesskey="u">
                        <i class="fa fa-upload"></i>
                        <span>Upload Photo</span>
                    </button>
                    
                    <div id="webprogress" class="webprogress-spinner" style="display: none;">
                        <i class="fa fa-circle-o-notch fa-spin"></i>
                        <span>Uploading...</span>
                    </div>
                </div>

                <div id="result" style="margin-top: 6px;"></div>
            </form>
        </div>

        <!-- Right: Photo Grid Panel -->
        <div class="glass-panel photo-showcase-panel">
            <div class="panel-header search-header-row">
                <div class="panel-header-title">
                    <span class="header-dot"></span>
                    <span>Gallery Photos</span>
                </div>
                <div class="search-3d-box">
                    <i class="fa fa-search search-icon"></i>
                    <input type="text" class="input-3d-control search-input" ng-model="search_text" placeholder="Search photos...">
                    <span class="search-clear-btn" ng-show="search_text" ng-click="search_text=''">
                        <i class="fa fa-times-circle"></i>
                    </span>
                </div>
            </div>

            <!-- Cards Grid -->
            <div class="gallery-cards-grid">
                <div class="photo-3d-card" dir-paginate="x in datadb | filter: search_text | itemsPerPage: 8" paginate-id="gallery">
                    <div class="photo-img-wrap">
                        <img ng-src="<?=base_url("assets/uploads/gallery/thumb")?>/{{x.image}}" class="photo-card-img" alt="{{x.title}}">
                        
                        <!-- Floating Action Pill Overlay -->
                        <div class="photo-overlay-actions">
                            <button type="button" class="btn-overlay-pill" ng-click="toggle_status(x)" title="Toggle Visibility" ng-class="{'pill-active': x.status=='1' || x.status==1, 'pill-inactive': x.status=='0' || x.status==0}">
                                <i class="fa" ng-class="(x.status=='1' || x.status==1) ? 'fa-eye' : 'fa-eye-slash'"></i>
                            </button>
                            <button type="button" class="btn-overlay-pill pill-edit" ng-click="edit_data(x)" title="Edit Title">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button type="button" class="btn-overlay-pill pill-delete" ng-click="delete_data(x)" title="Delete Photo">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </div>
                    </div>

                    <div class="photo-card-footer">
                        <div class="photo-title" title="{{x.title || 'Untitled Image'}}">{{x.title || 'Untitled Image'}}</div>
                        <div class="photo-status-badge" ng-class="{'badge-live': x.status=='1' || x.status==1, 'badge-hidden': x.status=='0' || x.status==0}">
                            <span class="status-dot"></span>
                            {{(x.status=='1' || x.status==1) ? 'Visible' : 'Hidden'}}
                        </div>
                    </div>
                </div>

                <!-- Empty State -->
                <div class="empty-gallery-state" ng-if="!datadb || (datadb | filter: search_text).length === 0">
                    <div class="empty-state-icon"><i class="fa fa-picture-o"></i></div>
                    <div class="empty-state-text">No gallery photos found</div>
                    <p class="empty-state-hint">Upload your first image using the panel on the left.</p>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination-glass-bar">
                <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="<?=site_url('app/pagination')?>" paginate-id="gallery"></dir-pagination-controls>
            </div>
        </div>

    </div>
</div>

<style>
/* ====================================================================
   PHOTO GALLERY MODULE - COMPACT 3D GLASSMORPHISM
   ==================================================================== */

.gallery-module-wrap {
    position: relative;
    padding: 4px 6px 14px 6px;
    font-family: 'Outfit', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    color: #1e293b;
    overflow-x: hidden;
    width: 100%;
    max-width: 100%;
    box-sizing: border-box;
}

/* Floating 3D Glowing Glass Orbs */
.glass-orb {
    position: fixed;
    border-radius: 50%;
    filter: blur(80px);
    pointer-events: none;
    z-index: 0;
    opacity: 0.45;
}

.orb-1 {
    width: 380px;
    height: 380px;
    background: radial-gradient(circle, rgba(99, 102, 241, 0.22) 0%, rgba(168, 85, 247, 0.14) 60%, transparent 80%);
    top: 5%;
    right: 8%;
}

.orb-2 {
    width: 320px;
    height: 320px;
    background: radial-gradient(circle, rgba(56, 189, 248, 0.24) 0%, rgba(59, 130, 246, 0.12) 60%, transparent 80%);
    bottom: 8%;
    left: 15%;
}

.orb-3 {
    width: 220px;
    height: 220px;
    background: radial-gradient(circle, rgba(236, 72, 153, 0.15) 0%, transparent 75%);
    top: 40%;
    right: 35%;
}

/* Glass Panels */
.glass-panel {
    background: rgba(255, 255, 255, 0.84);
    backdrop-filter: blur(18px);
    -webkit-backdrop-filter: blur(18px);
    border: 1px solid rgba(255, 255, 255, 0.95);
    border-radius: 14px;
    box-shadow:
        0 6px 20px -4px rgba(15, 35, 75, 0.04),
        0 1px 4px -1px rgba(15, 35, 75, 0.02),
        inset 0 1px 0 rgba(255, 255, 255, 0.95);
    position: relative;
    z-index: 1;
}

/* Header */
.gallery-top-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 8px 14px;
    margin-bottom: 8px;
    gap: 10px;
}

.header-tag {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 9.5px;
    font-weight: 800;
    letter-spacing: 0.4px;
    text-transform: uppercase;
    color: #4338ca;
    background: rgba(99, 102, 241, 0.1);
    padding: 2px 7px;
    border-radius: 12px;
    margin-bottom: 2px;
}

.header-title {
    margin: 0 0 1px 0;
    font-size: 15px;
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -0.3px;
}

.header-subtitle {
    margin: 0;
    font-size: 10.5px;
    color: #64748b;
    font-weight: 500;
}

.stat-counter-pill {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    background: rgba(59, 130, 246, 0.1);
    color: #2563eb;
    border: 1px solid rgba(59, 130, 246, 0.2);
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 700;
    white-space: nowrap;
}

.pulse-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #3b82f6;
    display: inline-block;
    box-shadow: 0 0 6px rgba(59, 130, 246, 0.7);
}

/* Grid Layout */
.gallery-grid-layout {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 8px;
    align-items: start;
    position: relative;
    z-index: 1;
}

.upload-form-panel,
.photo-showcase-panel {
    padding: 10px 12px;
}

.panel-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 6px;
    margin-bottom: 8px;
    border-bottom: 1.5px solid rgba(226, 232, 240, 0.7);
}

.search-header-row {
    flex-wrap: wrap;
    gap: 8px;
}

.panel-header-title {
    font-size: 13px;
    font-weight: 800;
    color: #0f172a;
    display: flex;
    align-items: center;
    gap: 6px;
}

.header-dot {
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #3b82f6;
    display: inline-block;
    box-shadow: 0 0 6px rgba(59, 130, 246, 0.6);
}

/* Fields */
.field-group {
    margin-bottom: 6px;
}

.field-label {
    display: block;
    font-size: 10.5px;
    font-weight: 700;
    color: #334155;
    margin-bottom: 2px;
}

.input-3d-box {
    position: relative;
    display: flex;
    align-items: center;
}

.input-icon {
    position: absolute;
    left: 9px;
    color: #94a3b8;
    font-size: 11px;
    pointer-events: none;
    z-index: 2;
}

.input-3d-control {
    width: 100%;
    background: #ffffff;
    border: 1.5px solid #cbd5e1;
    border-radius: 8px;
    padding: 5px 8px 5px 26px;
    font-size: 11.5px;
    font-weight: 600;
    color: #0f172a;
    outline: none;
    box-shadow:
        inset 0 1.5px 3px rgba(15, 23, 42, 0.04),
        0 1px 0 rgba(255, 255, 255, 0.9);
    transition: all 0.2s ease;
}

.input-3d-control:focus {
    border-color: #3b82f6;
    box-shadow:
        inset 0 1.5px 3px rgba(59, 130, 246, 0.05),
        0 0 0 2.5px rgba(59, 130, 246, 0.16);
}

.search-3d-box {
    position: relative;
    display: flex;
    align-items: center;
    width: 200px;
    max-width: 100%;
}

.search-3d-box .search-icon {
    position: absolute;
    left: 9px;
    color: #94a3b8;
    font-size: 11px;
    pointer-events: none;
}

.input-3d-control.search-input {
    border-radius: 18px;
    padding: 5px 24px 5px 26px;
}

.search-clear-btn {
    position: absolute;
    right: 8px;
    color: #94a3b8;
    cursor: pointer;
    font-size: 12px;
}

/* Upload drop box */
.upload-drop-zone {
    background: #ffffff;
    border: 1.5px dashed #cbd5e1;
    border-radius: 8px;
    padding: 8px 10px;
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
    box-shadow: inset 0 1.5px 3px rgba(15, 23, 42, 0.02);
    transition: all 0.2s ease;
}

.upload-drop-zone:hover {
    border-color: #3b82f6;
    background: rgba(59, 130, 246, 0.02);
}

.drop-icon-3d {
    width: 28px;
    height: 28px;
    border-radius: 6px;
    background: linear-gradient(135deg, #e0e7ff 0%, #c7d2fe 100%);
    color: #4338ca;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    flex-shrink: 0;
}

.drop-title {
    display: block;
    font-size: 11px;
    font-weight: 700;
    color: #1e293b;
}

.drop-subtitle {
    display: block;
    font-size: 9px;
    color: #94a3b8;
}

/* Local Preview */
.gallery-preview-box {
    margin-top: 6px;
    display: flex;
    align-items: center;
    gap: 6px;
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 6px;
    padding: 4px;
}

.gallery-preview-img {
    width: 34px;
    height: 34px;
    object-fit: cover;
    border-radius: 4px;
}

.preview-tag {
    font-size: 9.5px;
    font-weight: 700;
    color: #059669;
}

/* Action Button */
.btn-3d-primary {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    color: #ffffff !important;
    border: none;
    border-radius: 7px;
    padding: 6px 12px;
    font-size: 11.5px;
    font-weight: 700;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    cursor: pointer;
    box-shadow: 0 3px 8px rgba(37, 99, 235, 0.35);
    transition: all 0.2s ease;
}

.btn-upload-action {
    width: 100%;
    justify-content: center;
    padding: 7px 12px;
}

.btn-3d-primary:hover {
    transform: translateY(-1px);
    box-shadow: 0 5px 12px rgba(37, 99, 235, 0.45);
}

.webprogress-spinner {
    font-size: 11px;
    font-weight: 700;
    color: #2563eb;
    display: inline-flex;
    align-items: center;
    gap: 4px;
    margin-top: 4px;
}

/* Cards Grid */
.gallery-cards-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 8px;
    margin-bottom: 8px;
}

.photo-3d-card {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(15, 23, 42, 0.04);
    transition: all 0.2s ease;
    display: flex;
    flex-direction: column;
}

.photo-3d-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(15, 23, 42, 0.08);
    border-color: #cbd5e1;
}

.photo-img-wrap {
    position: relative;
    width: 100%;
    height: 110px;
    background: #f1f5f9;
    overflow: hidden;
}

.photo-card-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.3s ease;
}

.photo-3d-card:hover .photo-card-img {
    transform: scale(1.05);
}

.photo-overlay-actions {
    position: absolute;
    top: 5px;
    right: 5px;
    display: flex;
    gap: 3px;
    background: rgba(15, 23, 42, 0.6);
    backdrop-filter: blur(8px);
    padding: 2px 4px;
    border-radius: 14px;
}

.btn-overlay-pill {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    color: #fff;
    font-size: 9px;
    cursor: pointer;
    background: rgba(255, 255, 255, 0.2);
    transition: all 0.15s ease;
}

.btn-overlay-pill:hover {
    transform: scale(1.15);
}

.pill-active { background: #10b981; }
.pill-inactive { background: #64748b; }
.pill-edit { background: #f59e0b; }
.pill-delete { background: #ef4444; }

.photo-card-footer {
    padding: 5px 6px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 4px;
}

.photo-title {
    font-size: 10px;
    font-weight: 700;
    color: #0f172a;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    flex: 1;
}

.photo-status-badge {
    font-size: 8.5px;
    font-weight: 800;
    display: inline-flex;
    align-items: center;
    gap: 2px;
}

.badge-live { color: #059669; }
.badge-hidden { color: #94a3b8; }

.status-dot {
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background: currentColor;
}

/* Empty State */
.empty-gallery-state {
    grid-column: 1 / -1;
    padding: 30px 14px;
    text-align: center;
}

.empty-state-icon {
    font-size: 26px;
    color: #cbd5e1;
    margin-bottom: 4px;
}

.empty-state-text {
    font-size: 13px;
    font-weight: 700;
    color: #475569;
}

.empty-state-hint {
    font-size: 11px;
    color: #94a3b8;
    margin: 0;
}

/* Pagination */
.pagination-glass-bar {
    margin-top: 8px;
    display: flex;
    justify-content: center;
}

@media (max-width: 991px) {
    .gallery-module-wrap {
        padding: 4px 2px 20px 2px !important;
        width: 100% !important;
        max-width: 100vw !important;
        overflow-x: hidden !important;
        box-sizing: border-box !important;
    }

    .gallery-top-header {
        flex-direction: column !important;
        align-items: stretch !important;
        padding: 8px 10px !important;
        gap: 6px !important;
    }

    .header-right {
        display: flex;
        justify-content: flex-start;
    }

    .gallery-grid-layout {
        grid-template-columns: 1fr !important;
        gap: 8px !important;
    }

    .upload-form-panel,
    .photo-showcase-panel {
        padding: 8px 6px !important;
        border-radius: 12px !important;
    }

    .search-header-row {
        flex-direction: column !important;
        align-items: stretch !important;
    }

    .search-3d-box {
        width: 100% !important;
        max-width: 100% !important;
    }

    .gallery-cards-grid {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 6px !important;
    }
}
</style>

<script>
function previewGalleryImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var box = document.getElementById('galleryPreviewBox');
            var img = document.getElementById('galleryPreviewImg');
            if (img) img.src = e.target.result;
            if (box) box.style.display = 'flex';
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
