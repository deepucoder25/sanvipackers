<?php
// Reviews Module - Compact 3D Glassmorphism UI
?>
<div class="dash-wrapper reviews-module-wrap">
    <!-- Floating Background 3D Glow Orbs -->
    <div class="glass-orb orb-1"></div>
    <div class="glass-orb orb-2"></div>
    <div class="glass-orb orb-3"></div>

    <!-- Top Compact Header -->
    <div class="glass-panel reviews-top-header">
        <div class="header-left">
            <div class="header-tag"><i class="fa fa-star"></i> Reviews & Ratings</div>
            <h1 class="header-title">Customer Feedback</h1>
            <p class="header-subtitle">Moderate customer reviews, star ratings, and publish replies.</p>
        </div>
        <div class="header-right">
            <div class="stat-counter-pill">
                <span class="pulse-dot"></span>
                <span>{{datadb.length || 0}} Reviews</span>
            </div>
        </div>
    </div>

    <!-- Main Glass Card Container -->
    <div class="glass-panel reviews-main-card">
        
        <!-- Controls Toolbar -->
        <div class="reviews-toolbar-row">
            <div class="search-3d-box">
                <i class="fa fa-search search-icon"></i>
                <input type="text" class="input-3d-control search-input" ng-model="search_text" placeholder="Search by reviewer, comment, email...">
                <span class="search-clear-btn" ng-show="search_text" ng-click="search_text=''">
                    <i class="fa fa-times-circle"></i>
                </span>
            </div>
        </div>

        <!-- Table Container with Horizontal Scroll -->
        <div class="table-scroll-glass">
            <table class="glass-table-modern">
                <thead>
                    <tr>
                        <th style="width: 50px;" class="text-center">#ID</th>
                        <th>Reviewer</th>
                        <th style="width: 90px;">Rating</th>
                        <th>Comment & Feedback</th>
                        <th style="width: 100px;">Posted Date</th>
                        <th style="width: 80px;" class="text-center">Status</th>
                        <th style="width: 80px;" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 10">
                        <!-- ID -->
                        <td class="text-center">
                            <span class="id-pill">#{{y.r_id}}</span>
                        </td>

                        <!-- Reviewer -->
                        <td>
                            <div class="reviewer-cell">
                                <div class="reviewer-avatar">{{y.unm ? y.unm[0].toUpperCase() : 'U'}}</div>
                                <div class="reviewer-info">
                                    <div class="reviewer-name">{{y.unm || 'Anonymous'}}</div>
                                    <div class="reviewer-email" title="{{y.email}}">{{y.email}}</div>
                                </div>
                            </div>
                        </td>

                        <!-- Rating -->
                        <td>
                            <div class="rating-badge-box" ng-class="{'rate-high': y.rt >= 4, 'rate-mid': y.rt == 3, 'rate-low': y.rt < 3}">
                                <i class="fa fa-star"></i>
                                <span>{{y.rt}} / 5</span>
                            </div>
                        </td>

                        <!-- Comment -->
                        <td>
                            <div class="comment-content">
                                <div class="comment-text">{{y.cmt}}</div>
                                <div class="review-images-row" ng-if="y.img">
                                    <img ng-repeat="img in y.img.split(',')" ng-if="img.trim() !== ''" class="review-thumb-img" ng-src="{{ img.indexOf('/') !== -1 ? '<?=base_url()?>' + img.trim() : '<?=base_url('assets/uploads/reviewimg/thumb')?>/' + img.trim() }}">
                                </div>
                            </div>
                        </td>

                        <!-- Posted Date -->
                        <td>
                            <span class="date-pill"><i class="fa fa-calendar-o"></i> {{(y.pd || y.tm) | formatDateTime}}</span>
                        </td>

                        <!-- Status -->
                        <td class="text-center">
                            <span class="status-pill-badge" ng-class="y.st == '1' ? 'badge-active' : 'badge-hidden'">
                                <span class="status-dot"></span>
                                {{y.st == '1' ? 'Visible' : 'Hidden'}}
                            </span>
                        </td>

                        <!-- Action -->
                        <td class="text-center">
                            <div class="actions-pill-group">
                                <button type="button" class="btn-action-pill pill-edit" ng-click="openEdit(y)" title="Edit / Reply">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <button type="button" class="btn-action-pill pill-delete" ng-click="deleteReview(y.r_id)" title="Delete Review">
                                    <i class="fa fa-trash-o"></i>
                                </button>
                            </div>
                        </td>
                    </tr>

                    <!-- Empty State -->
                    <tr ng-if="!datadb || (datadb | filter: search_text).length === 0">
                        <td colspan="7" class="empty-state-cell">
                            <div class="empty-state-content">
                                <div class="empty-state-icon"><i class="fa fa-star-o"></i></div>
                                <div class="empty-state-text">No reviews found</div>
                                <p class="empty-state-hint">Customer reviews will appear here once submitted.</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="pagination-glass-bar">
            <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="app/pagination"></dir-pagination-controls>
        </div>

    </div>
</div>

<!-- Edit Review Glass Modal -->
<div class="modal fade" id="reviewEditModal" tabindex="-1" role="dialog" aria-labelledby="reviewEditLabel">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content glass-modal-content">
            <div class="modal-header glass-modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="reviewEditLabel"><i class="fa fa-pencil-square-o"></i> Edit Review & Reply</h4>
            </div>
            <div class="modal-body glass-modal-body">
                <div class="modal-row-2">
                    <div class="field-group">
                        <label class="field-label">Reviewer Name</label>
                        <input type="text" class="input-3d-control" ng-model="editForm.name">
                    </div>
                    <div class="field-group">
                        <label class="field-label">Email</label>
                        <input type="text" class="input-3d-control" ng-model="editForm.email">
                    </div>
                </div>

                <div class="modal-row-2">
                    <div class="field-group">
                        <label class="field-label">Star Rating (1-5)</label>
                        <select class="input-3d-control" ng-model="editForm.stars">
                            <option value="5">★★★★★ (5 Stars)</option>
                            <option value="4">★★★★☆ (4 Stars)</option>
                            <option value="3">★★★☆☆ (3 Stars)</option>
                            <option value="2">★★☆☆☆ (2 Stars)</option>
                            <option value="1">★☆☆☆☆ (1 Star)</option>
                        </select>
                    </div>
                    <div class="field-group">
                        <label class="field-label">Visibility Status</label>
                        <select class="input-3d-control" ng-model="editForm.status">
                            <option value="1">Show (Visible)</option>
                            <option value="0">Hide (Hidden)</option>
                        </select>
                    </div>
                </div>

                <div class="field-group">
                    <label class="field-label">Review Title</label>
                    <input type="text" class="input-3d-control" ng-model="editForm.r_title" placeholder="Brief headline">
                </div>

                <div class="field-group">
                    <label class="field-label">Customer Comment</label>
                    <textarea class="input-3d-control" rows="3" ng-model="editForm.r_desc"></textarea>
                </div>

                <div class="field-group">
                    <label class="field-label">Admin Reply</label>
                    <textarea class="input-3d-control" rows="2" ng-model="editForm.admin_reply" placeholder="Write a response to this customer..."></textarea>
                </div>
            </div>
            <div class="modal-footer glass-modal-footer">
                <button type="button" class="btn-3d-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn-3d-primary" ng-click="saveEdit()">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<style>
/* ====================================================================
   REVIEWS MODULE - COMPACT 3D GLASSMORPHISM
   ==================================================================== */

.reviews-module-wrap {
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
.reviews-top-header {
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

/* Main Card */
.reviews-main-card {
    padding: 10px 12px;
}

/* Toolbar */
.reviews-toolbar-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    margin-bottom: 8px;
}

.search-3d-box {
    position: relative;
    display: flex;
    align-items: center;
    width: 260px;
    max-width: 100%;
}

.search-3d-box .search-icon {
    position: absolute;
    left: 9px;
    color: #94a3b8;
    font-size: 11px;
    pointer-events: none;
}

.input-3d-control {
    width: 100%;
    background: #ffffff;
    border: 1.5px solid #cbd5e1;
    border-radius: 8px;
    padding: 5px 8px;
    font-size: 11.5px;
    font-weight: 600;
    color: #0f172a;
    outline: none;
    box-shadow:
        inset 0 1.5px 3px rgba(15, 23, 42, 0.04),
        0 1px 0 #fff;
    transition: all 0.2s ease;
}

.input-3d-control:focus {
    border-color: #3b82f6;
    box-shadow:
        inset 0 1.5px 3px rgba(59, 130, 246, 0.06),
        0 0 0 2.5px rgba(59, 130, 246, 0.15);
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

.search-clear-btn:hover {
    color: #475569;
}

/* Table Scroll Container */
.table-scroll-glass {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.92);
    border: 1.5px solid #e2e8f0;
    box-shadow: 0 2px 8px rgba(15, 23, 42, 0.02);
}

.glass-table-modern {
    width: 100%;
    min-width: 700px;
    border-collapse: collapse;
    margin-bottom: 0;
}

.glass-table-modern thead tr {
    background: #f8fafc;
    border-bottom: 1.5px solid #e2e8f0;
}

.glass-table-modern thead th {
    padding: 7px 8px;
    font-size: 9.5px;
    font-weight: 800;
    color: #475569;
    text-transform: uppercase;
    letter-spacing: 0.4px;
    white-space: nowrap;
}

.glass-table-modern tbody tr {
    border-bottom: 1px solid #f1f5f9;
    transition: background 0.15s ease;
}

.glass-table-modern tbody tr:hover {
    background: rgba(241, 245, 249, 0.85);
}

.glass-table-modern tbody td {
    padding: 6px 8px;
    vertical-align: middle;
}

/* ID Pill */
.id-pill {
    font-size: 9.5px;
    font-weight: 800;
    color: #64748b;
    background: #f1f5f9;
    padding: 2px 5px;
    border-radius: 4px;
}

/* Reviewer */
.reviewer-cell {
    display: flex;
    align-items: center;
    gap: 6px;
}

.reviewer-avatar {
    width: 24px;
    height: 24px;
    border-radius: 6px;
    background: linear-gradient(135deg, #ec4899, #f43f5e);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 10.5px;
    font-weight: 800;
    flex-shrink: 0;
}

.reviewer-name {
    font-size: 11.5px;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.2;
}

.reviewer-email {
    font-size: 9.5px;
    color: #64748b;
    max-width: 130px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

/* Rating Badge */
.rating-badge-box {
    display: inline-flex;
    align-items: center;
    gap: 3px;
    font-size: 10.5px;
    font-weight: 800;
    padding: 2.5px 7px;
    border-radius: 12px;
    white-space: nowrap;
}

.rate-high {
    background: #ecfdf5;
    color: #059669;
    border: 1px solid #a7f3d0;
}

.rate-mid {
    background: #fffbeb;
    color: #d97706;
    border: 1px solid #fde68a;
}

.rate-low {
    background: #fef2f2;
    color: #dc2626;
    border: 1px solid #fecaca;
}

/* Comment */
.comment-content {
    max-width: 240px;
}

.comment-text {
    font-size: 11px;
    color: #1e293b;
    line-height: 1.35;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.review-images-row {
    display: flex;
    gap: 4px;
    margin-top: 3px;
}

.review-thumb-img {
    width: 26px;
    height: 26px;
    object-fit: cover;
    border-radius: 4px;
    border: 1px solid #e2e8f0;
}

/* Date */
.date-pill {
    display: inline-flex;
    align-items: center;
    gap: 3px;
    font-size: 10px;
    font-weight: 600;
    color: #475569;
    background: #f1f5f9;
    padding: 2.5px 6px;
    border-radius: 6px;
    white-space: nowrap;
}

/* Status */
.status-pill-badge {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 9.5px;
    font-weight: 700;
    padding: 2px 7px;
    border-radius: 12px;
    white-space: nowrap;
}

.badge-active {
    background: rgba(16, 185, 129, 0.1);
    color: #059669;
    border: 1px solid rgba(16, 185, 129, 0.25);
}

.badge-hidden {
    background: rgba(148, 163, 184, 0.15);
    color: #64748b;
    border: 1px solid rgba(148, 163, 184, 0.25);
}

.status-dot {
    width: 4px;
    height: 4px;
    border-radius: 50%;
    background: currentColor;
}

/* Action Group */
.actions-pill-group {
    display: inline-flex;
    align-items: center;
    gap: 4px;
}

.btn-action-pill {
    width: 24px;
    height: 24px;
    border-radius: 6px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border: 1px solid transparent;
    cursor: pointer;
    font-size: 10.5px;
    transition: all 0.18s ease;
}

.pill-edit {
    background: rgba(59, 130, 246, 0.1);
    color: #2563eb;
    border-color: rgba(59, 130, 246, 0.2);
}

.pill-edit:hover {
    background: #2563eb;
    color: #fff;
    transform: translateY(-1px);
    box-shadow: 0 3px 8px rgba(37, 99, 235, 0.3);
}

.pill-delete {
    background: rgba(239, 68, 68, 0.1);
    color: #dc2626;
    border-color: rgba(239, 68, 68, 0.2);
}

.pill-delete:hover {
    background: #dc2626;
    color: #fff;
    transform: translateY(-1px);
    box-shadow: 0 3px 8px rgba(220, 38, 38, 0.3);
}

/* Empty State */
.empty-state-cell {
    padding: 24px 12px !important;
    text-align: center;
}

.empty-state-icon {
    font-size: 24px;
    color: #cbd5e1;
    margin-bottom: 4px;
}

.empty-state-text {
    font-size: 13px;
    font-weight: 700;
    color: #475569;
    margin-bottom: 2px;
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

/* Modal Styles */
.glass-modal-content {
    background: rgba(255, 255, 255, 0.96) !important;
    backdrop-filter: blur(24px) !important;
    border-radius: 14px !important;
    border: 1px solid rgba(255, 255, 255, 0.9) !important;
    box-shadow: 0 20px 45px -10px rgba(15, 23, 42, 0.3) !important;
}

.glass-modal-header {
    border-bottom: 1px solid #e2e8f0;
    padding: 10px 16px;
}

.glass-modal-header .modal-title {
    font-size: 14px;
    font-weight: 800;
    color: #0f172a;
}

.glass-modal-body {
    padding: 12px 16px;
}

.modal-row-2 {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
}

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

.glass-modal-footer {
    border-top: 1px solid #e2e8f0;
    padding: 8px 16px;
    display: flex;
    justify-content: flex-end;
    gap: 6px;
}

.btn-3d-primary {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    color: #ffffff !important;
    border: none;
    border-radius: 7px;
    padding: 5px 12px;
    font-size: 11.5px;
    font-weight: 700;
    cursor: pointer;
    box-shadow: 0 3px 8px rgba(37, 99, 235, 0.3);
}

.btn-3d-secondary {
    background: #ffffff;
    color: #475569 !important;
    border: 1px solid #cbd5e1;
    border-radius: 7px;
    padding: 5px 12px;
    font-size: 11.5px;
    font-weight: 700;
    cursor: pointer;
}

@media (max-width: 991px) {
    .reviews-module-wrap {
        padding: 4px 2px 20px 2px !important;
        width: 100% !important;
        max-width: 100vw !important;
        overflow-x: hidden !important;
        box-sizing: border-box !important;
    }

    .reviews-top-header {
        flex-direction: column !important;
        align-items: stretch !important;
        padding: 8px 10px !important;
        gap: 6px !important;
    }

    .header-right {
        display: flex;
        justify-content: flex-start;
    }

    .reviews-main-card {
        padding: 8px 6px !important;
        border-radius: 12px !important;
    }

    .search-3d-box {
        width: 100% !important;
        max-width: 100% !important;
    }

    .table-scroll-glass {
        border-radius: 8px !important;
    }

    .modal-row-2 {
        grid-template-columns: 1fr !important;
    }
}
</style>
