<?php
// Account Settings - Modern 3D Glassmorphism UI
$admin_name = $this->session->userdata('name') ?? 'Admin';
$admin_username = $this->session->userdata('username') ?? 'admin';
?>
<div class="dash-wrapper account-module-wrap">
    <!-- Floating Background 3D Glow Orbs -->
    <div class="glass-orb orb-1"></div>
    <div class="glass-orb orb-2"></div>
    <div class="glass-orb orb-3"></div>

    <!-- Top Compact Header -->
    <div class="glass-panel account-top-header">
        <div class="header-left">
            <div class="header-tag"><i class="fa fa-shield"></i> Security & Profile</div>
            <h1 class="header-title">Account Settings</h1>
            <p class="header-subtitle">Manage administrator credentials, profile details, and account security.</p>
        </div>
        <div class="header-actions">
            <a href="#/" class="btn-3d-secondary">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
            </a>
        </div>
    </div>

                        <!-- Main 2-Column Grid Layout -->
                        <div class="account-grid-layout">

                            <!-- Left: Profile Details Card -->
                            <div class="glass-panel account-card">
                                <div class="panel-header">
                                    <div class="panel-header-title">
                                        <span class="header-dot"></span>
                                        <i class="fa fa-user-circle text-primary"></i>
                                        <span>Profile Information</span>
                                    </div>
                                        <span class="panel-header-badge">Verified Admin</span>
                                    </div>

                                    <!-- Profile Summary Ribbon -->
                                    <div class="profile-ribbon">
                                        <div class="profile-avatar">
                                            <span>{{ (profile_name ? profile_name.charAt(0) : 'A') | uppercase }}</span>
                                        </div>
                                            <div class="profile-info-text">
                                                <div class="profile-display-name">{{ profile_name || 'Admin User' }}
                                                </div>
                                                <div class="profile-handle">@{{ profile_username || 'admin' }} &bull;
                                                    <span class="badge-role">Super Admin</span></div>
                                            </div>
                                        </div>

                                        <form class="account-3d-form" name="form_profile" id="form_profile"
                                            ng-submit="save_profile()" autocomplete="off">
                                            <div class="field-group">
                                                <label class="field-label">
                                                    <span>Display Name</span>
                                                    <span class="req-star">*</span>
                                                </label>
                                                <div class="input-3d-box">
                                                    <i class="fa fa-user input-icon"></i>
                                                    <input type="text" ng-model="profile_name" class="input-3d-control"
                                                        name="profile_name" placeholder="Enter Full Name" required
                                                        ng-init="profile_name='<?= htmlspecialchars((string) $admin_name, ENT_QUOTES) ?>'">
                                                </div>
                                            </div>

                                            <div class="field-group">
                                                <label class="field-label">
                                                    <span>Username / Handle</span>
                                                    <span class="req-star">*</span>
                                                </label>
                                                <div class="input-3d-box">
                                                    <i class="fa fa-at input-icon"></i>
                                                    <input type="text" ng-model="profile_username"
                                                        class="input-3d-control" name="profile_username"
                                                        placeholder="Enter Username" required
                                                        ng-init="profile_username='<?= htmlspecialchars((string) $admin_username, ENT_QUOTES) ?>'">
                                                </div>
                                                <small class="field-hint">Used for signing into the administrative
                                                    panel.</small>
                                            </div>

                                            <!-- Result & Feedback -->
                                            <div id="result_profile" class="form-feedback-wrap"></div>

                                            <!-- Action Bar -->
                                            <div class="form-action-bar">
                                                <div class="action-buttons-left">
                                                    <button type="submit" id="submitbtn_profile" class="btn-3d-primary"
                                                        ng-disabled="form_profile.$invalid">
                                                        <i class="fa fa-check-circle"></i>
                                                        <span>Update Profile</span>
                                                    </button>
                                                </div>

                                                <div id="webprogress_profile" class="webprogress-spinner"
                                                    style="display: none;">
                                                    <i class="fa fa-circle-o-notch fa-spin"></i>
                                                    <span>Saving...</span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                                <!-- Right: Change Password Card -->
                                                <div class="glass-panel account-card">
                                                    <div class="panel-header">
                                                        <div class="panel-header-title">
                                                            <span class="header-dot dot-amber"></span>
                                                            <i class="fa fa-lock text-amber"></i>
                                                            <span>Change Password</span>
                                                        </div>
                                                            <span class="panel-header-badge badge-security"><i
                                                                    class="fa fa-shield"></i> Encrypted</span>
                                                        </div>

                                                        <form class="account-3d-form" name="form1" id="form1"
                                                            ng-submit="save_data()" autocomplete="off">
                                                            <div class="field-group">
                                                                <label class="field-label">
                                                                    <span>Current Password</span>
                                                                    <span class="req-star">*</span>
                                                                </label>
                                                                <div class="input-3d-box">
                                                                    <i class="fa fa-key input-icon"></i>
                                                                    <input type="password" ng-model="old"
                                                                        class="input-3d-control" name="currentpass"
                                                                        id="currentpass"
                                                                        placeholder="Enter current password" required>
                                                                </div>
                                                            </div>

                                                                <div class="field-group">
                                                                    <label class="field-label">
                                                                        <span>New Password</span>
                                                                        <span class="req-star">*</span>
                                                                    </label>
                                                                    <div class="input-3d-box">
                                                                        <i class="fa fa-lock input-icon"></i>
                                                                        <input type="password" ng-model="new"
                                                                            class="input-3d-control" name="newpass"
                                                                            placeholder="Enter new password (min. 6 characters)"
                                                                            required>
                                                                    </div>
                                                                </div>

                                                                    <div class="field-group">
                                                                        <label class="field-label">
                                                                            <span>Confirm New Password</span>
                                                                            <span class="req-star">*</span>
                                                                        </label>
                                                                        <div class="input-3d-box">
                                                                            <i
                                                                                class="fa fa-check-circle-o input-icon"></i>
                                                                            <input type="password" ng-model="conf"
                                                                                class="input-3d-control"
                                                                                name="cmpassword"
                                                                                placeholder="Re-enter new password to confirm"
                                                                                required>
                                                                        </div>
                                                                        <small class="field-hint"
                                                                            ng-if="new && conf && new !== conf"
                                                                            style="color: #ef4444; font-weight: 600;">
                                                                            <i class="fa fa-exclamation-triangle"></i>
                                                                            Passwords do not match.
                                                                        </small>
                                                                    </div>

                                                                    <!-- Result & Feedback -->
                                                                    <div id="result" class="form-feedback-wrap"></div>

                                                                    <!-- Action Bar -->
                                                                    <div class="form-action-bar">
                                                                        <div class="action-buttons-left">
                                                                            <button type="submit" id="submitbtn"
                                                                                class="btn-3d-primary"
                                                                                ng-disabled="form1.$invalid || (new && conf && new !== conf)">
                                                                                <i class="fa fa-shield"></i>
                                                                                <span>Change Password</span>
                                                                            </button>
                                                                            <button type="button"
                                                                                class="btn-3d-secondary"
                                                                                ng-click="filter_new()">
                                                                                <i class="fa fa-refresh"></i>
                                                                                <span>Clear</span>
                                                                            </button>
                                                                        </div>

                                                                        <div id="webprogress"
                                                                            class="webprogress-spinner"
                                                                            style="display: none;">
                                                                            <i class="fa fa-circle-o-notch fa-spin"></i>
                                                                            <span>Updating...</span>
                                                                        </div>
                                                                    </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>

                                            <style>
                                                /* Modern 3D Glassmorphism Styles for Account Settings */
                                                .account-module-wrap {
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
                                                    width: 360px;
                                                    height: 360px;
                                                    background: radial-gradient(circle, rgba(99, 102, 241, 0.22) 0%, rgba(168, 85, 247, 0.14) 60%, transparent 80%);
                                                    top: 5%;
                                                    right: 8%;
                                                }

                                                .orb-2 {
                                                    width: 300px;
                                                    height: 300px;
                                                    background: radial-gradient(circle, rgba(56, 189, 248, 0.24) 0%, rgba(59, 130, 246, 0.12) 60%, transparent 80%);
                                                    bottom: 8%;
                                                    left: 12%;
                                                }

                                                .orb-3 {
                                                    width: 200px;
                                                    height: 200px;
                                                    background: radial-gradient(circle, rgba(236, 72, 153, 0.15) 0%, transparent 75%);
                                                    top: 35%;
                                                    right: 30%;
                                                }

                                                /* Glass Panels */
                                                .glass-panel {
                                                    background: rgba(255, 255, 255, 0.85);
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
                                                .account-top-header {
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: space-between;
                                                    padding: 8px 14px;
                                                    margin-bottom: 10px;
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

                                                /* Grid Layout */
                                                .account-grid-layout {
                                                    display: grid;
                                                    grid-template-columns: 1fr 1fr;
                                                    gap: 12px;
                                                    align-items: start;
                                                    position: relative;
                                                    z-index: 1;
                                                }

                                                .account-card {
                                                    padding: 12px 16px;
                                                }

                                                /* Panel Header */
                                                .panel-header {
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: space-between;
                                                    padding-bottom: 8px;
                                                    margin-bottom: 10px;
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

                                                .panel-header-title i.text-primary {
                                                    color: #3b82f6;
                                                }

                                                .panel-header-title i.text-amber {
                                                    color: #f59e0b;
                                                }

                                                .header-dot {
                                                    width: 6px;
                                                    height: 6px;
                                                    border-radius: 50%;
                                                    background: #3b82f6;
                                                    display: inline-block;
                                                    box-shadow: 0 0 6px rgba(59, 130, 246, 0.6);
                                                }

                                                .header-dot.dot-amber {
                                                    background: #f59e0b;
                                                    box-shadow: 0 0 6px rgba(245, 158, 11, 0.6);
                                                }

                                                .panel-header-badge {
                                                    font-size: 9.5px;
                                                    font-weight: 700;
                                                    color: #166534;
                                                    background: #dcfce7;
                                                    border: 1px solid #bbf7d0;
                                                    padding: 2px 7px;
                                                    border-radius: 10px;
                                                }

                                                .panel-header-badge.badge-security {
                                                    color: #7c2d12;
                                                    background: #ffedd5;
                                                    border-color: #fed7aa;
                                                }

                                                /* Profile Ribbon */
                                                .profile-ribbon {
                                                    display: flex;
                                                    align-items: center;
                                                    gap: 12px;
                                                    background: linear-gradient(135deg, rgba(241, 245, 249, 0.8) 0%, rgba(226, 232, 240, 0.6) 100%);
                                                    border: 1px solid rgba(203, 213, 225, 0.6);
                                                    border-radius: 10px;
                                                    padding: 8px 12px;
                                                    margin-bottom: 12px;
                                                }

                                                .profile-avatar {
                                                    width: 40px;
                                                    height: 40px;
                                                    border-radius: 10px;
                                                    background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
                                                    color: #ffffff;
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: center;
                                                    font-size: 17px;
                                                    font-weight: 800;
                                                    box-shadow: 0 3px 8px rgba(37, 99, 235, 0.35);
                                                    flex-shrink: 0;
                                                }

                                                .profile-info-text {
                                                    overflow: hidden;
                                                }

                                                .profile-display-name {
                                                    font-size: 13px;
                                                    font-weight: 800;
                                                    color: #0f172a;
                                                    line-height: 1.2;
                                                }

                                                .profile-handle {
                                                    font-size: 10.5px;
                                                    color: #64748b;
                                                    font-weight: 500;
                                                    margin-top: 1px;
                                                }

                                                .badge-role {
                                                    font-weight: 700;
                                                    color: #2563eb;
                                                }

                                                /* Form Styles */
                                                .account-3d-form {
                                                    display: flex;
                                                    flex-direction: column;
                                                    gap: 9px;
                                                }

                                                .field-group {
                                                    display: flex;
                                                    flex-direction: column;
                                                    gap: 3px;
                                                }

                                                .field-label {
                                                    font-size: 10.5px;
                                                    font-weight: 700;
                                                    color: #334155;
                                                    display: flex;
                                                    align-items: center;
                                                    gap: 3px;
                                                    margin: 0;
                                                }

                                                .req-star {
                                                    color: #ef4444;
                                                }

                                                .field-hint {
                                                    font-size: 9.5px;
                                                    color: #94a3b8;
                                                    margin-top: 2px;
                                                }

                                                /* 3D Inputs */
                                                .input-3d-box {
                                                    position: relative;
                                                    display: flex;
                                                    align-items: center;
                                                    background: #ffffff;
                                                    border: 1px solid #cbd5e1;
                                                    border-radius: 8px;
                                                    box-shadow:
                                                        inset 0 1.5px 3px rgba(15, 23, 42, 0.05),
                                                        0 1px 2px rgba(255, 255, 255, 0.8);
                                                    transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
                                                }

                                                .input-3d-box:focus-within {
                                                    border-color: #3b82f6;
                                                    background: #ffffff;
                                                    box-shadow:
                                                        0 0 0 3px rgba(59, 130, 246, 0.14),
                                                        inset 0 1px 2px rgba(15, 23, 42, 0.04);
                                                }

                                                .input-icon {
                                                    position: absolute;
                                                    left: 10px;
                                                    font-size: 12px;
                                                    color: #94a3b8;
                                                    pointer-events: none;
                                                    transition: color 0.2s ease;
                                                }

                                                .input-3d-box:focus-within .input-icon {
                                                    color: #3b82f6;
                                                }

                                                .input-3d-control {
                                                    width: 100%;
                                                    padding: 6.5px 10px 6.5px 30px;
                                                    font-size: 11.5px;
                                                    font-weight: 600;
                                                    color: #0f172a;
                                                    background: transparent;
                                                    border: none;
                                                    outline: none;
                                                    box-sizing: border-box;
                                                    font-family: inherit;
                                                }

                                                .input-3d-control::placeholder {
                                                    color: #94a3b8;
                                                    font-weight: 400;
                                                }

                                                /* Action Bar */
                                                .form-action-bar {
                                                    display: flex;
                                                    align-items: center;
                                                    justify-content: space-between;
                                                    padding-top: 4px;
                                                    margin-top: 2px;
                                                    gap: 8px;
                                                    flex-wrap: wrap;
                                                }

                                                .action-buttons-left {
                                                    display: flex;
                                                    align-items: center;
                                                    gap: 6px;
                                                    flex-wrap: wrap;
                                                }

                                                /* 3D Buttons */
                                                .btn-3d-primary {
                                                    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
                                                    color: #ffffff !important;
                                                    border: none;
                                                    border-radius: 7px;
                                                    padding: 6px 13px;
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

                                                .btn-3d-primary:hover:not(:disabled) {
                                                    transform: translateY(-1px);
                                                    box-shadow: 0 5px 12px rgba(37, 99, 235, 0.45);
                                                }

                                                .btn-3d-primary:disabled {
                                                    opacity: 0.55;
                                                    cursor: not-allowed;
                                                    box-shadow: none;
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

                                                /* Spinner & Feedback */
                                                .webprogress-spinner {
                                                    font-size: 11px;
                                                    color: #2563eb;
                                                    font-weight: 700;
                                                    display: inline-flex;
                                                    align-items: center;
                                                    gap: 5px;
                                                }

                                                .form-feedback-wrap {
                                                    margin-top: 2px;
                                                }

                                                .form-feedback-wrap .alert {
                                                    padding: 6px 10px;
                                                    font-size: 11px;
                                                    font-weight: 700;
                                                    border-radius: 8px;
                                                    margin-bottom: 2px;
                                                    border: 1px solid transparent;
                                                }

                                                .form-feedback-wrap .alert-success {
                                                    background: #ecfdf5;
                                                    color: #065f46;
                                                    border-color: #a7f3d0;
                                                }

                                                .form-feedback-wrap .alert-danger {
                                                    background: #fef2f2;
                                                    color: #991b1b;
                                                    border-color: #fecaca;
                                                }

                                                /* Mobile Responsiveness */
                                                @media (max-width: 768px) {
                                                    .account-module-wrap {
                                                        padding: 4px;
                                                    }

                                                    .account-top-header {
                                                        flex-direction: column;
                                                        align-items: flex-start;
                                                        gap: 8px;
                                                    }

                                                    .header-actions {
                                                        width: 100%;
                                                    }

                                                    .header-actions .btn-3d-secondary {
                                                        width: 100%;
                                                        justify-content: center;
                                                    }

                                                    .account-grid-layout {
                                                        grid-template-columns: 1fr;
                                                        gap: 10px;
                                                    }

                                                    .account-card {
                                                        padding: 10px 12px;
                                                    }

                                                    .form-action-bar {
                                                        flex-direction: column;
                                                        align-items: stretch;
                                                    }

                                                    .action-buttons-left {
                                                        width: 100%;
                                                    }

                                                    .btn-3d-primary,
                                                    .btn-3d-secondary {
                                                        flex: 1;
                                                        justify-content: center;
                                                    }
                                                }
                                            </style>