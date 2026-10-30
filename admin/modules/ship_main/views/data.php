<?php
// Shipments Module - Records View with Compact 3D Glassmorphism
?>
<div class="shipment-records-wrapper">
    <div class="records-header-row">
        <div class="records-title-group">
            <span class="records-header-title">Consignments List</span>
            <span class="records-count-pill">{{datadb.length || 0}} Total</span>
        </div>
        
        <div class="records-search-3d">
            <i class="fa fa-search search-icon"></i>
            <input type="text" class="search-3d-input" ng-model="search_text" placeholder="Search by G.R., customer, city...">
            <span class="search-clear-btn" ng-show="search_text" ng-click="search_text=''">
                <i class="fa fa-times-circle"></i>
            </span>
        </div>
    </div>

    <!-- Responsive Glass Table Wrapper -->
    <div class="table-scroll-glass">
        <table class="glass-table-modern">
            <thead>
                <tr>
                    <th style="width: 80px;">G.R. No.</th>
                    <th>Customer</th>
                    <th>Transit Route</th>
                    <th>Driver Contact</th>
                    <th>Vendor Contact</th>
                    <th style="width: 85px;">Date</th>
                    <th style="width: 65px;" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 10" ng-class="{'active-editing-row': x.id == y.id}">
                    <!-- G.R. No -->
                    <td>
                        <span class="gr-pill">{{y.gr_no}}</span>
                    </td>

                    <!-- Customer -->
                    <td>
                        <div class="customer-cell">
                            <div class="customer-avatar">{{y.c_name ? y.c_name[0].toUpperCase() : 'C'}}</div>
                            <div class="customer-name">{{y.c_name}}</div>
                        </div>
                    </td>

                    <!-- Route -->
                    <td>
                        <div class="route-pill-box">
                            <span class="route-from" title="{{y.ship_from}}">{{y.ship_from}}</span>
                            <i class="fa fa-arrow-right route-arrow"></i>
                            <span class="route-to" title="{{y.ship_to}}">{{y.ship_to}}</span>
                        </div>
                    </td>

                    <!-- Driver -->
                    <td>
                        <a href="tel:{{y.driver_no}}" class="phone-link">
                            <i class="fa fa-phone"></i> {{y.driver_no}}
                        </a>
                    </td>

                    <!-- Vendor -->
                    <td>
                        <a href="tel:{{y.vendor_no}}" class="phone-link vendor-phone">
                            <i class="fa fa-building-o"></i> {{y.vendor_no}}
                        </a>
                    </td>

                    <!-- Date -->
                    <td>
                        <span class="date-pill">{{y.date | formatDate}}</span>
                    </td>

                    <!-- Actions -->
                    <td class="text-center">
                        <div class="table-actions-group">
                            <button type="button" class="btn-action-pill pill-edit" ng-click="update_call(y)" title="Edit Shipment">
                                <i class="fa fa-pencil"></i>
                            </button>
                            <button type="button" class="btn-action-pill pill-delete" ng-click="delete_data(y.id)" title="Delete Shipment">
                                <i class="fa fa-trash-o"></i>
                            </button>
                        </div>
                    </td>
                </tr>

                <!-- Empty State -->
                <tr ng-if="!datadb || (datadb | filter: search_text).length === 0">
                    <td colspan="7" class="empty-state-cell">
                        <div class="empty-state-content">
                            <div class="empty-state-icon"><i class="fa fa-truck"></i></div>
                            <div class="empty-state-text">No shipments found</div>
                            <p class="empty-state-hint">Create your first consignment order using the form on the left.</p>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="records-pagination-bar">
        <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="app/pagination"></dir-pagination-controls>
    </div>
</div>

<style>
/* ====================================================================
   SHIPMENT RECORDS TABLE - COMPACT 3D GLASSMORPHISM
   ==================================================================== */

.shipment-records-wrapper {
    padding: 10px 12px;
}

.records-header-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 8px;
    margin-bottom: 8px;
    padding-bottom: 8px;
    border-bottom: 1.5px solid rgba(226, 232, 240, 0.7);
}

.records-title-group {
    display: flex;
    align-items: center;
    gap: 6px;
}

.records-header-title {
    font-size: 13.5px;
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -0.2px;
}

.records-count-pill {
    font-size: 9.5px;
    font-weight: 800;
    color: #3b82f6;
    background: rgba(59, 130, 246, 0.12);
    padding: 2px 7px;
    border-radius: 12px;
}

.records-search-3d {
    position: relative;
    display: flex;
    align-items: center;
    width: 200px;
    max-width: 100%;
}

.records-search-3d .search-icon {
    position: absolute;
    left: 9px;
    color: #94a3b8;
    font-size: 11px;
    pointer-events: none;
}

.search-3d-input {
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
        inset 0 1.5px 3px rgba(15, 23, 42, 0.05),
        0 1px 0 #fff;
    transition: all 0.2s ease;
}

.search-3d-input:focus {
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
    min-width: 680px;
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

.glass-table-modern tbody tr.active-editing-row {
    background: rgba(238, 242, 255, 0.95);
    border-left: 3px solid #3b82f6;
}

.glass-table-modern tbody td {
    padding: 6px 8px;
    vertical-align: middle;
}

/* G.R. Pill */
.gr-pill {
    display: inline-block;
    font-size: 10.5px;
    font-weight: 800;
    color: #4338ca;
    background: rgba(99, 102, 241, 0.1);
    padding: 2px 6px;
    border-radius: 6px;
    white-space: nowrap;
}

/* Customer */
.customer-cell {
    display: flex;
    align-items: center;
    gap: 6px;
}

.customer-avatar {
    width: 24px;
    height: 24px;
    border-radius: 6px;
    background: linear-gradient(135deg, #06b6d4, #0891b2);
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 10.5px;
    font-weight: 800;
    flex-shrink: 0;
}

.customer-name {
    font-size: 11.5px;
    font-weight: 700;
    color: #0f172a;
}

/* Route */
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

/* Phone */
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

.vendor-phone {
    color: #64748b;
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
    padding: 2px 6px;
    border-radius: 6px;
    white-space: nowrap;
}

/* Actions */
.table-actions-group {
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
.records-pagination-bar {
    margin-top: 8px;
    display: flex;
    justify-content: center;
}

@media (max-width: 991px) {
    .shipment-records-wrapper {
        padding: 6px 4px !important;
    }

    .records-header-row {
        flex-direction: column !important;
        align-items: stretch !important;
        gap: 6px !important;
    }

    .records-search-3d {
        width: 100% !important;
        max-width: 100% !important;
    }

    .table-scroll-glass {
        border-radius: 8px !important;
    }
}
</style>
