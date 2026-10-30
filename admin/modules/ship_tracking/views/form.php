<?php
// Ship Tracking Module - Compact 3D Glassmorphism Form
?>
    <div class="dash-wrapper tracking-module-wrap" ng-init="showData = true">
        <!-- Floating Background 3D Glow Orbs -->
        <div class="glass-orb orb-1"></div>
        <div class="glass-orb orb-2"></div>
        <div class="glass-orb orb-3"></div>

        <!-- Top Compact Header -->
        <div class="glass-panel tracking-top-header">
            <div class="header-left">
                <div class="header-tag"><i class="fa fa-location-arrow"></i> Live Tracking</div>
                <h1 class="header-title">Shipment Tracking Updates</h1>
                <p class="header-subtitle">Post checkpoint updates, transit status, and current locations.</p>
            </div>
            <div class="header-actions">
                <button type="button" class="btn-3d-secondary" ng-click="showData=!showData">
                    <i class="fa" ng-class="showData ? 'fa-eye-slash' : 'fa-list-ul'"></i>
                    <span>{{showData ? 'Hide Records' : 'Show Records (' + (datadb.length || 0) + ')'}}</span>
                </button>
                <button type="button" class="btn-3d-primary" ng-click="filter_new()">
                    <i class="fa fa-plus-circle"></i>
                    <span>New Update</span>
                </button>
            </div>
        </div>

        <!-- Main Grid Layout -->
        <div class="tracking-grid-layout" ng-class="{'records-hidden': !showData}">

            <!-- Left: Form Panel (No Stepper Tabs) -->
            <div class="glass-panel tracking-form-panel">
                <div class="panel-header">
                    <div class="panel-header-title">
                        <span class="header-dot"></span>
                        <span ng-if="!x.id">Post Tracking Checkpoint</span>
                        <span ng-if="x.id">Edit Checkpoint #{{x.id}}</span>
                    </div>
                    <div class="panel-header-badge" ng-if="x.id">Editing Mode</div>
                </div>

                <form class="tracking-3d-form" name="form1" id="form1" method="post" action="" autocomplete="off">
                    <input name="id" ng-model="x.id" type="hidden">

                    <!-- Row 1: Shipment Select & Status -->
                    <div class="form-row-2">
                        <div class="field-group">
                            <label class="field-label">
                                <span>Select Consignment</span>
                                <span class="req-star">*</span>
                            </label>
                            <div class="input-3d-box">
                                <i class="fa fa-truck input-icon"></i>
                                <select name="sh_id" class="input-3d-control select-control" ng-model="x.sh_id"
                                    required>
                                    <option value="">-- Choose Consignment --</option>
                                    <option ng-repeat="s in ship_main" value="{{s.id}}">{{s.c_name}} (GR #{{s.gr_no}})
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="field-group">
                            <label class="field-label">
                                <span>Transit Status</span>
                                <span class="req-star">*</span>
                            </label>
                            <div class="input-3d-box">
                                <i class="fa fa-tag input-icon"></i>
                                <select name="type" class="input-3d-control select-control" ng-model="x.type" required>
                                    <option value="">-- Select Status --</option>
                                    <option value="1">Processing</option>
                                    <option value="2">On Transit</option>
                                    <option value="3">Shipped</option>
                                    <option value="4">Completed / Reached</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: Date & Time -->
                    <div class="form-row-2">
                        <div class="field-group">
                            <label class="field-label">
                                <span>Status Date</span>
                                <span class="req-star">*</span>
                            </label>
                            <div class="input-3d-box">
                                <i class="fa fa-calendar input-icon"></i>
                                <input type="text" name="date" id="DOB1" class="input-3d-control" ng-model="x.date"
                                    placeholder="Checkpoint date" required>
                            </div>
                        </div>

                        <div class="field-group">
                            <label class="field-label">Time</label>
                            <div class="input-3d-box">
                                <i class="fa fa-clock-o input-icon"></i>
                                <input type="text" name="time" class="input-3d-control" ng-model="x.time"
                                    placeholder="e.g. 10:30 AM">
                            </div>
                        </div>
                    </div>

                    <!-- Place Location -->
                    <div class="field-group">
                        <label class="field-label">Current Checkpoint / Location</label>
                        <div class="input-3d-box">
                            <i class="fa fa-map-marker input-icon"></i>
                            <input type="text" name="place" class="input-3d-control" ng-model="x.place"
                                placeholder="e.g. Mumbai Hub Toll Plaza">
                        </div>
                    </div>

                    <!-- Remarks -->
                    <div class="field-group">
                        <label class="field-label">Remarks / Description</label>
                        <textarea name="remarks" class="input-3d-control textarea-control" rows="2" ng-model="x.remarks"
                            placeholder="Optional notes about cargo status"></textarea>
                    </div>

                    <!-- Action Bar -->
                    <div class="form-action-bar">
                        <div class="action-buttons-left">
                            <button type="submit" id="submitbtn" class="btn-3d-primary btn-save-action"
                                ng-click="save_data(x)" ng-disabled="form1.$invalid">
                                <i class="fa fa-check-circle"></i>
                                <span>{{x.id ? 'Update Status' : 'Save Status'}}</span>
                            </button>

                            <button type="button" class="btn-3d-secondary" ng-click="filter_new()">
                                <i class="fa fa-refresh"></i>
                                <span>Clear</span>
                            </button>
                        </div>

                        <div id="webprogress" class="webprogress-spinner" style="display: none;">
                            <i class="fa fa-circle-o-notch fa-spin"></i>
                            <span>Saving...</span>
                        </div>
                    </div>

                </form>
            </div>

            <!-- Right: Records Table Panel -->
            <div class="glass-panel tracking-records-panel" ng-show="showData">
                <?php include 'data.php'; ?>
            </div>

        </div>
    </div>

    <style>
        /* ====================================================================
   TRACKING MODULE - COMPACT 3D GLASSMORPHISM
   ==================================================================== */

        .tracking-module-wrap {
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
        .tracking-top-header {
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

        .header-actions {
            display: flex;
            align-items: center;
            gap: 6px;
            flex-shrink: 0;
        }

        /* 3D Action Buttons */
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
            text-decoration: none;
        }

        .btn-3d-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 12px rgba(37, 99, 235, 0.45);
        }

        .btn-3d-secondary {
            background: rgba(255, 255, 255, 0.92);
            color: #334155 !important;
            border: 1px solid #cbd5e1;
            border-radius: 7px;
            padding: 5px 11px;
            font-size: 11.5px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(15, 23, 42, 0.03);
            transition: all 0.18s ease;
            text-decoration: none;
        }

        .btn-3d-secondary:hover {
            background: #ffffff;
            color: #0f172a !important;
            border-color: #94a3b8;
            transform: translateY(-1px);
        }

        /* Grid */
        .tracking-grid-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 8px;
            align-items: start;
            position: relative;
            z-index: 1;
        }

        .tracking-grid-layout.records-hidden {
            grid-template-columns: 1fr;
            max-width: 700px;
            margin: 0 auto;
        }

        .tracking-form-panel {
            padding: 10px 14px;
        }

        .panel-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 6px;
            margin-bottom: 8px;
            border-bottom: 1.5px solid rgba(226, 232, 240, 0.7);
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

        .panel-header-badge {
            font-size: 9.5px;
            font-weight: 700;
            color: #2563eb;
            background: rgba(59, 130, 246, 0.12);
            padding: 2px 8px;
            border-radius: 12px;
        }

        /* Form */
        .form-row-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6px;
        }

        .field-group {
            margin-bottom: 6px;
        }

        .field-label {
            display: flex;
            align-items: center;
            gap: 4px;
            font-size: 10.5px;
            font-weight: 700;
            color: #334155;
            margin-bottom: 2px;
        }

        .req-star {
            color: #ef4444;
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

        .select-control {
            cursor: pointer;
        }

        .textarea-control {
            padding-left: 8px !important;
            resize: vertical;
            min-height: 48px;
            font-family: inherit;
        }

        /* Action Bar */
        .form-action-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            margin-top: 10px;
            padding-top: 8px;
            border-top: 1.5px solid rgba(226, 232, 240, 0.8);
        }

        .action-buttons-left {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .btn-save-action {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%) !important;
            box-shadow: 0 4px 10px -2px rgba(16, 185, 129, 0.35) !important;
        }

        .btn-save-action:hover {
            background: linear-gradient(135deg, #059669 0%, #047857 100%) !important;
        }

        .webprogress-spinner {
            font-size: 11px;
            font-weight: 700;
            color: #059669;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        @media (max-width: 991px) {
            .tracking-module-wrap {
                padding: 4px 2px 20px 2px !important;
                width: 100% !important;
                max-width: 100vw !important;
                overflow-x: hidden !important;
                box-sizing: border-box !important;
            }

            .tracking-top-header {
                flex-direction: column !important;
                align-items: stretch !important;
                padding: 8px 10px !important;
                gap: 6px !important;
            }

            .header-actions {
                width: 100%;
                display: flex;
                justify-content: flex-start;
                margin-top: 4px;
            }

            .header-actions button {
                flex: 1;
                justify-content: center;
            }

            .tracking-grid-layout {
                grid-template-columns: 1fr !important;
                gap: 8px !important;
            }

            .tracking-form-panel {
                padding: 8px 6px !important;
                border-radius: 12px !important;
            }

            .form-row-2 {
                grid-template-columns: 1fr !important;
                gap: 6px !important;
            }

            .form-action-bar {
                flex-direction: column !important;
                align-items: stretch !important;
            }

            .action-buttons-left {
                width: 100%;
                display: flex;
                flex-direction: column;
                gap: 6px;
            }

            .action-buttons-left button {
                width: 100%;
                justify-content: center;
                padding: 8px 12px;
            }
        }
    </style>