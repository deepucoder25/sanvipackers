<?php
// Contact Module - Compact 3D Glassmorphism UI
?>
<div class="dash-wrapper contact-module-wrap">
    <!-- Floating Background 3D Glow Orbs -->
    <div class="glass-orb orb-1"></div>
    <div class="glass-orb orb-2"></div>
    <div class="glass-orb orb-3"></div>

    <!-- Top Compact Header -->
    <div class="glass-panel contact-top-header">
        <div class="header-left">
            <div class="header-tag"><i class="fa fa-envelope-o"></i> Customer Inquiries</div>
            <h1 class="header-title">Contact Messages</h1>
            <p class="header-subtitle">Manage messages and inquiries submitted through your website.</p>
        </div>
        <div class="header-right">
            <div class="stat-counter-pill">
                <span class="pulse-dot"></span>
                <span>{{datadb.length || 0}} Total Messages</span>
            </div>
        </div>
    </div>

    <!-- Main Glass Card Container -->
    <div class="glass-panel contact-main-card">
        
        <!-- Controls Toolbar -->
        <div class="contact-toolbar-row">
            <div class="search-3d-box">
                <i class="fa fa-search search-icon"></i>
                <input type="text" class="input-3d-control search-input" ng-model="search_text" placeholder="Search by name, phone, email, message...">
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
                        <th style="width: 105px;">Timestamp</th>
                        <th>Sender</th>
                        <th>Contact No.</th>
                        <th>Email</th>
                        <th>Category</th>
                        <th>Message</th>
                        <th style="width: 65px;" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 15" pagination-id="contact">
                        <!-- Timestamp -->
                        <td>
                            <span class="date-pill"><i class="fa fa-clock-o"></i> {{y.timestamp | formatDateTime}}</span>
                        </td>

                        <!-- Sender Name -->
                        <td>
                            <div class="sender-cell">
                                <div class="sender-avatar">{{y.name ? y.name[0].toUpperCase() : 'U'}}</div>
                                <div class="sender-name">{{y.name || 'Anonymous'}}</div>
                            </div>
                        </td>

                        <!-- Phone -->
                        <td>
                            <div class="contact-cell">
                                <div ng-if="y.country_name" class="country-pill">{{y.country_name}}</div>
                                <a href="tel:{{y.phone}}" class="phone-link">
                                    <i class="fa fa-phone"></i> {{y.phone}}
                                </a>
                            </div>
                        </td>

                        <!-- Email -->
                        <td>
                            <a href="mailto:{{y.email}}" class="email-link" title="{{y.email}}">
                                <i class="fa fa-envelope-o"></i> {{y.email}}
                            </a>
                        </td>

                        <!-- Category -->
                        <td>
                            <span class="category-pill" ng-if="y.category">{{y.category}}</span>
                            <span class="text-muted" ng-if="!y.category">—</span>
                        </td>

                        <!-- Message -->
                        <td>
                            <div class="message-cell" title="{{y.message}}">
                                <i class="fa fa-comment-o msg-icon"></i>
                                <span class="message-text">{{y.message}}</span>
                            </div>
                        </td>

                        <!-- Action -->
                        <td class="text-center">
                            <button type="button" class="btn-action-pill pill-delete" ng-click="delete_data(y.id)" title="Delete Message">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Empty State -->
                    <tr ng-if="!datadb || (datadb | filter: search_text).length === 0">
                        <td colspan="7" class="empty-state-cell">
                            <div class="empty-state-content">
                                <div class="empty-state-icon"><i class="fa fa-inbox"></i></div>
                                <div class="empty-state-text">No messages found</div>
                                <p class="empty-state-hint">New customer inquiries will appear here automatically.</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="pagination-glass-bar">
            <dir-pagination-controls boundary-links="true" pagination-id="contact" on-page-change="pageChangeHandler(newPageNumber)" template-url="app/pagination"></dir-pagination-controls>
        </div>

    </div>
</div>

<style>
/* ====================================================================
   CONTACT MESSAGES - COMPACT 3D GLASSMORPHISM
   ==================================================================== */

.contact-module-wrap {
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
.contact-top-header {
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
.contact-main-card {
    padding: 10px 12px;
}

/* Toolbar */
.contact-toolbar-row {
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

.input-3d-control.search-input {
    width: 100%;
    background: #ffffff;
    border: 1.5px solid #cbd5e1;
    border-radius: 18px;
    padding: 5px 24px 5px 26px;
    font-size: 11.5px;
    font-weight: 600;
    color: #0f172a;
    outline: none;
    box-shadow:
        inset 0 1.5px 3px rgba(15, 23, 42, 0.04),
        0 1px 0 #fff;
    transition: all 0.2s ease;
}

.input-3d-control.search-input:focus {
    border-color: #3b82f6;
    box-shadow:
        inset 0 1.5px 3px rgba(59, 130, 246, 0.06),
        0 0 0 2.5px rgba(59, 130, 246, 0.15);
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

/* Date Pill */
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

/* Sender */
.sender-cell {
    display: flex;
    align-items: center;
    gap: 6px;
}

.sender-avatar {
    width: 24px;
    height: 24px;
    border-radius: 6px;
    background: linear-gradient(135deg, #f97316, #ea580c);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 10.5px;
    font-weight: 800;
    flex-shrink: 0;
}

.sender-name {
    font-size: 11.5px;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.2;
}

/* Contact */
.country-pill {
    font-size: 8.5px;
    font-weight: 800;
    color: #475569;
    text-transform: uppercase;
    letter-spacing: 0.4px;
    margin-bottom: 1px;
}

.phone-link {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 11px;
    font-weight: 700;
    color: #2563eb;
    text-decoration: none;
    white-space: nowrap;
}

.phone-link:hover {
    color: #1d4ed8;
    text-decoration: underline;
}

/* Email */
.email-link {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    font-size: 10.5px;
    font-weight: 600;
    color: #475569;
    text-decoration: none;
    max-width: 140px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.email-link:hover {
    color: #2563eb;
}

/* Category */
.category-pill {
    display: inline-block;
    font-size: 9.5px;
    font-weight: 700;
    color: #4338ca;
    background: rgba(99, 102, 241, 0.08);
    padding: 2px 6px;
    border-radius: 4px;
    white-space: nowrap;
}

/* Message */
.message-cell {
    display: flex;
    align-items: center;
    gap: 5px;
    max-width: 200px;
}

.msg-icon {
    color: #94a3b8;
    font-size: 11px;
    flex-shrink: 0;
}

.message-text {
    font-size: 10.5px;
    color: #334155;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

/* Delete Button */
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

@media (max-width: 991px) {
    .contact-module-wrap {
        padding: 4px 2px 20px 2px !important;
        width: 100% !important;
        max-width: 100vw !important;
        overflow-x: hidden !important;
        box-sizing: border-box !important;
    }

    .contact-top-header {
        flex-direction: column !important;
        align-items: stretch !important;
        padding: 8px 10px !important;
        gap: 6px !important;
    }

    .header-right {
        display: flex;
        justify-content: flex-start;
    }

    .contact-main-card {
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
}
</style>
