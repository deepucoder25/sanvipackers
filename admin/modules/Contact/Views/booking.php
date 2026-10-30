<?php
// Booking Module - Compact 3D Glassmorphism UI
$labels = [];
if (file_exists('./assets/menu_labels.json')) {
    $labels = json_decode(file_get_contents('./assets/menu_labels.json'), true);
}
if (!function_exists('get_booking_label')) {
    function get_booking_label($labels, $key, $default) {
        return (isset($labels[$key]) && !empty($labels[$key])) ? htmlspecialchars($labels[$key]) : $default;
    }
}
?>

<div class="dash-wrapper booking-module-wrap">
    <!-- Floating Background 3D Glow Orbs -->
    <div class="glass-orb orb-1"></div>
    <div class="glass-orb orb-2"></div>
    <div class="glass-orb orb-3"></div>

    <!-- Top Compact Header -->
    <div class="glass-panel booking-top-header">
        <div class="header-left">
            <div class="header-tag"><i class="fa fa-calendar-check-o"></i> Bookings Management</div>
            <h1 class="header-title">Customer Bookings & Leads</h1>
            <p class="header-subtitle">Track, convert, and manage all service booking requests in real time.</p>
        </div>
        <div class="header-right">
            <div class="stat-counter-pill">
                <span class="pulse-dot"></span>
                <span>{{datadb.length || 0}} Total Requests</span>
            </div>
        </div>
    </div>

    <!-- Main Glass Card Container -->
    <div class="glass-panel booking-main-card">
        
        <!-- Controls Toolbar: Search & Filters -->
        <div class="booking-toolbar-row">
            <!-- Search Input -->
            <div class="search-3d-box">
                <i class="fa fa-search search-icon"></i>
                <input type="text" class="input-3d-control search-input" ng-model="search_text" placeholder="Search by name, phone, email, route...">
                <span class="search-clear-btn" ng-show="search_text" ng-click="search_text=''">
                    <i class="fa fa-times-circle"></i>
                </span>
            </div>

            <!-- Filters Group -->
            <div class="filters-3d-group">
                <!-- Status Filter -->
                <div class="filter-select-box">
                    <i class="fa fa-filter select-icon"></i>
                    <select class="select-3d-control" ng-model="statusFilter">
                        <option value="">All Statuses</option>
                        <option value="converted">✓ Converted</option>
                        <option value="not_converted">⏳ Not Converted</option>
                    </select>
                </div>

                <!-- Date Filter -->
                <div class="filter-select-box">
                    <i class="fa fa-calendar select-icon"></i>
                    <select class="select-3d-control" ng-model="dateFilter">
                        <option value="">All Dates</option>
                        <option value="this_month">This Month</option>
                        <option value="this_year">This Year</option>
                    </select>
                </div>

                <!-- Sort Filter -->
                <div class="filter-select-box">
                    <i class="fa fa-sort select-icon"></i>
                    <select class="select-3d-control" ng-model="sortBy">
                        <option value="-timestamp">Newest First</option>
                        <option value="timestamp">Oldest First</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Table Container with Horizontal Scroll -->
        <div class="table-scroll-glass">
            <table class="glass-table-modern">
                <thead>
                    <tr>
                        <th style="width: 110px;"><?= get_booking_label($labels, 'book_label_date', 'Date & Time') ?></th>
                        <th><?= get_booking_label($labels, 'book_label_client', 'Client') ?></th>
                        <th><?= get_booking_label($labels, 'book_label_contact', 'Contact') ?></th>
                        <th><?= get_booking_label($labels, 'book_label_freight', 'Service / Cargo') ?></th>
                        <th><?= get_booking_label($labels, 'book_label_route', 'Route') ?></th>
                        <th style="width: 140px;"><?= get_booking_label($labels, 'book_label_lead', 'Lead Status') ?></th>
                        <th style="width: 150px;"><?= get_booking_label($labels, 'book_label_loss', 'Loss Reason') ?></th>
                        <th style="width: 65px;" class="text-center"><?= get_booking_label($labels, 'book_label_action', 'Action') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr dir-paginate="y in datadb | filter: search_text | filter: bookingFilter | orderBy: sortBy | itemsPerPage: 15" pagination-id="booking" ng-class="{'row-converted': y.status==='converted'}">
                        <!-- Date & Time -->
                        <td>
                            <div class="date-time-cell">
                                <span class="date-pill"><i class="fa fa-clock-o"></i> {{y.timestamp | formatDateTime}}</span>
                            </div>
                        </td>

                        <!-- Client -->
                        <td>
                            <div class="client-cell">
                                <div class="client-avatar">{{y.name ? y.name[0].toUpperCase() : 'C'}}</div>
                                <div class="client-info">
                                    <div class="client-name">{{y.name || 'Anonymous Client'}}</div>
                                    <div class="client-email" title="{{y.email}}">{{y.email}}</div>
                                </div>
                            </div>
                        </td>

                        <!-- Contact -->
                        <td>
                            <div class="contact-cell">
                                <div ng-if="y.country_name" class="country-pill">{{y.country_name}}</div>
                                <a href="tel:{{y.phone}}" class="phone-link">
                                    <i class="fa fa-phone"></i> {{y.phone}}
                                </a>
                            </div>
                        </td>

                        <!-- Freight / Service -->
                        <td>
                            <div class="service-cell">
                                <span ng-if="y.mtype" class="service-tag">{{y.mtype}}</span>
                                <div ng-if="y.item_type" class="items-text"><i class="fa fa-cube"></i> {{y.item_type}}</div>
                                <div ng-if="y.msg" class="msg-tooltip-text" title="{{y.msg}}">
                                    <i class="fa fa-comment-o"></i> {{y.msg}}
                                </div>
                            </div>
                        </td>

                        <!-- Route -->
                        <td>
                            <div class="route-pill-box">
                                <span class="route-from" title="{{y.mfrom}}">{{y.mfrom || 'Origin'}}</span>
                                <i class="fa fa-arrow-right route-arrow"></i>
                                <span class="route-to" title="{{y.mto}}">{{y.mto || 'Dest'}}</span>
                            </div>
                        </td>

                        <!-- Lead Status (3D Select) -->
                        <td>
                            <div class="status-select-wrapper" ng-class="{'status-converted': y.status==='converted', 'status-pending': y.status!=='converted'}">
                                <select class="status-3d-select" ng-model="y.status" ng-change="updateBooking(y)">
                                    <option value="converted">✓ Converted</option>
                                    <option value="not_converted">⏳ Pending</option>
                                </select>
                            </div>
                        </td>

                        <!-- Loss Reason -->
                        <td>
                            <div class="loss-reason-wrapper">
                                <select class="reason-3d-select" ng-model="y.drop_reason" ng-disabled="y.status!=='not_converted'" ng-change="updateBooking(y)">
                                    <option value="">-- Reason --</option>
                                    <option value="price_high">Price Too High</option>
                                    <option value="time_issue">Timing Issue</option>
                                    <option value="service_mismatch">Service Mismatch</option>
                                    <option value="competitor">Competitor</option>
                                    <option value="no_response">No Response</option>
                                </select>
                            </div>
                        </td>

                        <!-- Action -->
                        <td class="text-center">
                            <button type="button" class="btn-action-pill pill-delete" ng-click="deleteBooking(y.id)" title="Delete Booking">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </td>
                    </tr>

                    <!-- Empty State -->
                    <tr ng-if="!datadb || (datadb | filter: search_text | filter: bookingFilter).length === 0">
                        <td colspan="8" class="empty-state-cell">
                            <div class="empty-state-content">
                                <div class="empty-state-icon"><i class="fa fa-calendar-times-o"></i></div>
                                <div class="empty-state-text">No bookings found</div>
                                <p class="empty-state-hint">Adjust your search or filter options to view bookings.</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination Controls -->
        <div class="pagination-glass-bar">
            <dir-pagination-controls boundary-links="true" pagination-id="booking" on-page-change="pageChangeHandler(newPageNumber)" template-url="app/pagination"></dir-pagination-controls>
        </div>

    </div>
</div>

<style>
/* ====================================================================
   BOOKING MODULE - COMPACT 3D GLASSMORPHISM & MOBILE RESPONSIVE
   ==================================================================== */

.booking-module-wrap {
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
.booking-top-header {
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
.booking-main-card {
    padding: 10px 12px;
}

/* Toolbar */
.booking-toolbar-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    margin-bottom: 8px;
    flex-wrap: wrap;
}

.search-3d-box {
    position: relative;
    display: flex;
    align-items: center;
    flex: 1 1 240px;
    max-width: 320px;
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

.filters-3d-group {
    display: flex;
    align-items: center;
    gap: 6px;
    flex-wrap: wrap;
}

.filter-select-box {
    position: relative;
    display: flex;
    align-items: center;
}

.filter-select-box .select-icon {
    position: absolute;
    left: 8px;
    color: #64748b;
    font-size: 10px;
    pointer-events: none;
    z-index: 1;
}

.select-3d-control {
    background: #ffffff;
    border: 1.5px solid #cbd5e1;
    border-radius: 8px;
    padding: 5px 10px 5px 22px;
    font-size: 11px;
    font-weight: 700;
    color: #1e293b;
    outline: none;
    cursor: pointer;
    box-shadow:
        inset 0 1.5px 3px rgba(15, 23, 42, 0.04),
        0 1px 0 #fff;
    transition: all 0.2s ease;
}

.select-3d-control:focus {
    border-color: #3b82f6;
    box-shadow:
        inset 0 1.5px 3px rgba(59, 130, 246, 0.05),
        0 0 0 2.5px rgba(59, 130, 246, 0.15);
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
    min-width: 780px;
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

.glass-table-modern tbody tr.row-converted {
    background: rgba(236, 253, 245, 0.5);
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

/* Client Cell */
.client-cell {
    display: flex;
    align-items: center;
    gap: 6px;
}

.client-avatar {
    width: 24px;
    height: 24px;
    border-radius: 6px;
    background: linear-gradient(135deg, #3b82f6, #6366f1);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 10.5px;
    font-weight: 800;
    flex-shrink: 0;
}

.client-name {
    font-size: 11.5px;
    font-weight: 700;
    color: #0f172a;
    line-height: 1.2;
}

.client-email {
    font-size: 9.5px;
    color: #64748b;
    font-weight: 500;
    max-width: 140px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

/* Contact Cell */
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

/* Service Cell */
.service-tag {
    display: inline-block;
    font-size: 9.5px;
    font-weight: 700;
    color: #2563eb;
    background: rgba(37, 99, 235, 0.08);
    padding: 1px 5px;
    border-radius: 4px;
    margin-bottom: 1px;
}

.items-text {
    font-size: 10px;
    font-weight: 600;
    color: #334155;
    margin-bottom: 1px;
}

.msg-tooltip-text {
    font-size: 9.5px;
    color: #64748b;
    max-width: 180px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

/* Route Pill */
.route-pill-box {
    display: inline-flex;
    align-items: center;
    gap: 4px;
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    padding: 2.5px 7px;
    border-radius: 6px;
    font-size: 10px;
    font-weight: 700;
    color: #0f172a;
    white-space: nowrap;
}

.route-arrow {
    color: #3b82f6;
    font-size: 9px;
}

/* Status 3D Select */
.status-3d-select {
    width: 100%;
    border-radius: 6px;
    padding: 4px 6px;
    font-size: 10.5px;
    font-weight: 700;
    outline: none;
    cursor: pointer;
    transition: all 0.2s ease;
}

.status-converted .status-3d-select {
    background: #ecfdf5;
    color: #047857;
    border: 1.5px solid #a7f3d0;
}

.status-pending .status-3d-select {
    background: #fffbeb;
    color: #b45309;
    border: 1.5px solid #fde68a;
}

/* Reason Select */
.reason-3d-select {
    width: 100%;
    background: #ffffff;
    border: 1px solid #cbd5e1;
    border-radius: 6px;
    padding: 4px 6px;
    font-size: 10.5px;
    font-weight: 600;
    color: #334155;
    outline: none;
    cursor: pointer;
}

.reason-3d-select:disabled {
    background: #f1f5f9;
    color: #94a3b8;
    cursor: not-allowed;
    border-color: #e2e8f0;
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

/* ====================================================================
   MOBILE RESPONSIVENESS
   ==================================================================== */
@media (max-width: 991px) {
    .booking-module-wrap {
        padding: 4px 2px 20px 2px !important;
        width: 100% !important;
        max-width: 100vw !important;
        overflow-x: hidden !important;
        box-sizing: border-box !important;
    }

    .booking-top-header {
        flex-direction: column !important;
        align-items: stretch !important;
        padding: 8px 10px !important;
        gap: 6px !important;
    }

    .header-right {
        display: flex;
        justify-content: flex-start;
    }

    .booking-main-card {
        padding: 8px 6px !important;
        border-radius: 12px !important;
    }

    .booking-toolbar-row {
        flex-direction: column !important;
        align-items: stretch !important;
        gap: 6px !important;
    }

    .search-3d-box {
        max-width: 100% !important;
        width: 100% !important;
    }

    .filters-3d-group {
        width: 100% !important;
        display: grid !important;
        grid-template-columns: 1fr 1fr 1fr !important;
        gap: 4px !important;
    }

    .select-3d-control {
        width: 100% !important;
        font-size: 10px !important;
        padding: 4px 6px 4px 18px !important;
    }

    .table-scroll-glass {
        border-radius: 8px !important;
    }
}

@media (max-width: 576px) {
    .filters-3d-group {
        grid-template-columns: 1fr !important;
    }
}
</style>
