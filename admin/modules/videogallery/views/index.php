<?php
// Video Gallery Module - Compact 3D Glassmorphism UI
?>
<div class="dash-wrapper video-module-wrap">
    <!-- Floating Background 3D Glow Orbs -->
    <div class="glass-orb orb-1"></div>
    <div class="glass-orb orb-2"></div>
    <div class="glass-orb orb-3"></div>

    <!-- Top Compact Header -->
    <div class="glass-panel video-top-header">
        <div class="header-left">
            <div class="header-tag"><i class="fa fa-video-camera"></i> Video Media</div>
            <h1 class="header-title">Video Gallery</h1>
            <p class="header-subtitle">Embed YouTube & Vimeo videos to showcase on your website.</p>
        </div>
        <div class="header-right">
            <div class="stat-counter-pill">
                <span class="pulse-dot"></span>
                <span>{{datadb.length || 0}} Videos</span>
            </div>
        </div>
    </div>

    <!-- Main Grid Layout -->
    <div class="video-grid-layout">
        
        <!-- Left: Embed Form Panel -->
        <div class="glass-panel video-form-panel">
            <div class="panel-header">
                <div class="panel-header-title">
                    <span class="header-dot"></span>
                    <span>Embed Video</span>
                </div>
            </div>

            <form class="video-3d-form" name="form" id="form" method="post" action="" autocomplete="off">
                <div id="validation"></div>

                <div class="field-group">
                    <label class="field-label">
                        <span>Video Embed URL</span>
                        <span class="req-star">*</span>
                    </label>
                    <div class="input-3d-box">
                        <i class="fa fa-youtube-play input-icon"></i>
                        <input type="text" class="input-3d-control" id="video_url" name="video_url" ng-model="x.video_url" placeholder="https://www.youtube.com/embed/..." required>
                    </div>
                    <span class="field-hint">Paste full YouTube or Vimeo iframe embed link</span>
                </div>

                <div class="form-action-bar">
                    <button type="submit" ng-disabled="form.$invalid" class="btn-3d-primary btn-add-video" id="btnsubmit" ng-click="insert_video()" accesskey="u">
                        <i class="fa fa-plus-circle"></i>
                        <span>Add Video</span>
                    </button>
                </div>

                <div id="result" style="margin-top: 6px;"></div>
            </form>
        </div>

        <!-- Right: Video Grid Panel -->
        <div class="glass-panel video-showcase-panel">
            <div class="panel-header search-header-row">
                <div class="panel-header-title">
                    <span class="header-dot"></span>
                    <span>Published Videos</span>
                </div>
                <div class="search-3d-box">
                    <i class="fa fa-search search-icon"></i>
                    <input type="text" class="input-3d-control search-input" ng-model="search_text" placeholder="Search videos...">
                    <span class="search-clear-btn" ng-show="search_text" ng-click="search_text=''">
                        <i class="fa fa-times-circle"></i>
                    </span>
                </div>
            </div>

            <!-- Videos Grid -->
            <div class="video-cards-grid">
                <div class="video-3d-card" dir-paginate="x in datadb | filter: search_text | itemsPerPage: 6" paginate-id="gallery">
                    <div class="video-iframe-wrap">
                        <iframe ng-src="{{x.video_url | trustAsResourceUrl}}" class="video-iframe" allowfullscreen></iframe>
                        
                        <!-- Floating Action Overlay -->
                        <div class="video-overlay-actions">
                            <button type="button" class="btn-overlay-pill" ng-click="toggle_status(x)" title="Toggle Visibility" ng-class="{'pill-active': x.status=='1' || x.status==1, 'pill-inactive': x.status=='0' || x.status==0}">
                                <i class="fa" ng-class="(x.status=='1' || x.status==1) ? 'fa-eye' : 'fa-eye-slash'"></i>
                            </button>
                            <button type="button" class="btn-overlay-pill pill-edit" ng-click="edit_data(x)" title="Edit URL">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button type="button" class="btn-overlay-pill pill-delete" ng-click="delete_data(x)" title="Delete Video">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </div>
                    </div>

                    <div class="video-card-footer">
                        <span class="video-status-badge" ng-class="{'badge-live': x.status=='1' || x.status==1, 'badge-hidden': x.status=='0' || x.status==0}">
                            <span class="status-dot"></span>
                            {{(x.status=='1' || x.status==1) ? 'Visible' : 'Hidden'}}
                        </span>
                    </div>
                </div>

                <!-- Empty State -->
                <div class="empty-video-state" ng-if="!datadb || (datadb | filter: search_text).length === 0">
                    <div class="empty-state-icon"><i class="fa fa-video-camera"></i></div>
                    <div class="empty-state-text">No videos found</div>
                    <p class="empty-state-hint">Embed YouTube or Vimeo videos using the form on the left.</p>
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
   VIDEO GALLERY MODULE - COMPACT 3D GLASSMORPHISM
   ==================================================================== */

.video-module-wrap {
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
.video-top-header {
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
.video-grid-layout {
    display: grid;
    grid-template-columns: 280px 1fr;
    gap: 8px;
    align-items: start;
    position: relative;
    z-index: 1;
}

.video-form-panel,
.video-showcase-panel {
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

/* Form */
.field-group {
    margin-bottom: 8px;
}

.field-label {
    display: block;
    font-size: 10.5px;
    font-weight: 700;
    color: #334155;
    margin-bottom: 2px;
}

.req-star {
    color: #ef4444;
}

.field-hint {
    display: block;
    font-size: 9.5px;
    color: #94a3b8;
    margin-top: 2px;
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
    padding: 6px 8px 6px 26px;
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

/* Button */
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

.btn-add-video {
    width: 100%;
    justify-content: center;
    padding: 7px 12px;
}

.btn-3d-primary:hover {
    transform: translateY(-1px);
    box-shadow: 0 5px 12px rgba(37, 99, 235, 0.45);
}

/* Video Grid */
.video-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 8px;
    margin-bottom: 8px;
}

.video-3d-card {
    background: #ffffff;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(15, 23, 42, 0.04);
    display: flex;
    flex-direction: column;
}

.video-iframe-wrap {
    position: relative;
    width: 100%;
    height: 120px;
    background: #000;
}

.video-iframe {
    width: 100%;
    height: 100%;
    border: none;
    display: block;
}

.video-overlay-actions {
    position: absolute;
    top: 5px;
    right: 5px;
    display: flex;
    gap: 3px;
    background: rgba(15, 23, 42, 0.65);
    backdrop-filter: blur(8px);
    padding: 2px 4px;
    border-radius: 14px;
    z-index: 2;
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

.video-card-footer {
    padding: 5px 6px;
    display: flex;
    align-items: center;
    justify-content: flex-end;
}

.video-status-badge {
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
.empty-video-state {
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
    .video-module-wrap {
        padding: 4px 2px 20px 2px !important;
        width: 100% !important;
        max-width: 100vw !important;
        overflow-x: hidden !important;
        box-sizing: border-box !important;
    }

    .video-top-header {
        flex-direction: column !important;
        align-items: stretch !important;
        padding: 8px 10px !important;
        gap: 6px !important;
    }

    .header-right {
        display: flex;
        justify-content: flex-start;
    }

    .video-grid-layout {
        grid-template-columns: 1fr !important;
        gap: 8px !important;
    }

    .video-form-panel,
    .video-showcase-panel {
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

    .video-cards-grid {
        grid-template-columns: 1fr !important;
        gap: 8px !important;
    }

    .video-iframe-wrap {
        height: 180px !important;
    }
}
</style>
