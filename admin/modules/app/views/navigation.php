<style>
    /* ========================================================
       3D GLASSMORPHIC LEFT NAVIGATION BAR & PROFILE
       ======================================================== */
    #hoe-left-panel {
        background: rgba(255, 255, 255, 0.6) !important;
        backdrop-filter: blur(25px) !important;
        -webkit-backdrop-filter: blur(25px) !important;
        border: 1px solid rgba(255, 255, 255, 0.8) !important;
        border-radius: 20px !important;
        box-shadow: 0 16px 40px -10px rgba(15, 23, 42, 0.08) !important;
        margin: 10px 0 14px 12px !important;
        width: 228px !important;
        height: calc(100vh - 88px) !important;
        position: fixed !important;
        top: 64px !important;
        left: 0 !important;
        z-index: 99 !important;
        overflow-y: auto !important;
        overflow-x: hidden !important;
        padding-bottom: 16px !important;
        transform: translateX(0);
        opacity: 1;
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.25s ease, margin-left 0.3s ease !important;
    }

    #main-content {
        margin-left: 250px !important;
        padding: 10px 16px 20px 6px !important;
        min-height: calc(100vh - 74px) !important;
        background: transparent !important;
        transition: margin-left 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
    }

    /* Desktop Collapsed state */
    body.sidebar-collapsed #hoe-left-panel,
    #hoeapp-container.hoe-minimized-lpanel #hoe-left-panel,
    body[hoe-navigation-type="vertical-compact"] #hoe-left-panel {
        transform: translateX(-280px) !important;
        opacity: 0 !important;
        pointer-events: none !important;
    }

    body.sidebar-collapsed #main-content,
    #hoeapp-container.hoe-minimized-lpanel #main-content,
    body[hoe-navigation-type="vertical-compact"] #main-content {
        margin-left: 16px !important;
    }

    /* Desktop hides the mobile drawer top bar */
    .mobile-drawer-header {
        display: none !important;
    }

    /* Floating Profile Mini-Card */
    .glass-profile-box {
        margin: 10px 10px 12px;
        padding: 10px 12px;
        background: rgba(255, 255, 255, 0.65);
        border: 1px solid rgba(255, 255, 255, 0.95);
        border-radius: 14px;
        box-shadow: 0 4px 14px -2px rgba(15, 23, 42, 0.04);
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .glass-profile-avatar {
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
        color: #ffffff;
        font-size: 16px;
        font-weight: 700;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 3px 10px rgba(37, 99, 235, 0.35);
        flex-shrink: 0;
    }

    .glass-profile-info {
        flex: 1;
        min-width: 0;
    }

    .glass-profile-sub {
        font-size: 10.5px;
        font-weight: 500;
        color: #64748b;
        margin-bottom: 1px;
    }

    .glass-profile-name {
        font-size: 13.5px;
        font-weight: 700;
        color: #0f172a;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        line-height: 1.2;
    }

    .glass-profile-status {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 10.5px;
        font-weight: 600;
        color: #10b981;
        margin-top: 1px;
    }

    .status-pulse-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background-color: #10b981;
        box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.25);
        display: inline-block;
    }

    /* Sidebar Navigation Menu */
    .glass-nav-list {
        list-style: none;
        padding: 0 8px;
        margin: 0;
    }

    .glass-nav-list>li {
        margin: 2px 0;
        padding: 0;
    }

    .glass-nav-list>li>a {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 9px 12px;
        border-radius: 12px;
        color: #475569;
        font-size: 12.5px;
        font-weight: 500;
        text-decoration: none !important;
        position: relative;
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid transparent;
    }

    .glass-nav-list>li>a:hover {
        background: rgba(255, 255, 255, 0.75);
        color: #1e293b;
        border-color: rgba(255, 255, 255, 0.9);
        transform: translateX(3px);
        box-shadow: 0 4px 12px rgba(15, 23, 42, 0.04);
    }

    .glass-nav-list>li>a .menu-icon {
        font-size: 15px;
        width: 20px;
        text-align: center;
        color: #64748b;
        transition: color 0.2s ease, transform 0.2s ease;
    }

    .glass-nav-list>li>a:hover .menu-icon {
        color: #2563eb;
    }

    .glass-nav-list>li>a .menu-text {
        flex: 1;
        letter-spacing: -0.1px;
    }

    .glass-nav-list>li>a .menu-chevron {
        font-size: 13px;
        color: #94a3b8;
        transition: transform 0.2s ease, color 0.2s ease;
    }

    .glass-nav-list>li>a:hover .menu-chevron {
        color: #3b82f6;
        transform: translateX(2px);
    }

    /* Active Menu Item Pill (Blue/Purple Radiant Gradient) */
    .glass-nav-list>li.active>a,
    .glass-nav-list>li>a.active {
        background: linear-gradient(135deg, #4f46e5 0%, #3b82f6 100%) !important;
        color: #ffffff !important;
        font-weight: 600 !important;
        border-color: transparent !important;
        box-shadow: 0 8px 20px -3px rgba(79, 70, 229, 0.45) !important;
    }

    .glass-nav-list>li.active>a .menu-icon,
    .glass-nav-list>li>a.active .menu-icon {
        color: #ffffff !important;
    }

    .glass-nav-list>li.active>a .menu-chevron,
    .glass-nav-list>li>a.active .menu-chevron {
        color: #ffffff !important;
        opacity: 0.9;
    }

    /* Scrollbar */
    #hoe-left-panel::-webkit-scrollbar {
        width: 4px;
    }

    #hoe-left-panel::-webkit-scrollbar-track {
        background: transparent;
    }

    #hoe-left-panel::-webkit-scrollbar-thumb {
        background: rgba(148, 163, 184, 0.3);
        border-radius: 4px;
    }

    #hoe-left-panel::-webkit-scrollbar-thumb:hover {
        background: rgba(148, 163, 184, 0.5);
    }

    /* ========================================================
       MOBILE FULL-HEIGHT OVERLAY DRAWER (<= 991px)
       ======================================================== */
    @media (max-width: 991px) {
        #hoe-left-panel {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            bottom: 0 !important;
            height: 100vh !important;
            width: 285px !important;
            max-width: 85vw !important;
            margin: 0 !important;
            border-radius: 0 24px 24px 0 !important;
            transform: translateX(-110%) !important;
            opacity: 1 !important;
            pointer-events: auto !important;
            z-index: 100005 !important;
            box-shadow: 0 25px 60px -15px rgba(15, 23, 42, 0.4) !important;
            background: rgba(255, 255, 255, 0.96) !important;
            backdrop-filter: blur(30px) !important;
            -webkit-backdrop-filter: blur(30px) !important;
            transition: transform 0.32s cubic-bezier(0.4, 0, 0.2, 1) !important;
            padding-top: 14px !important;
            padding-bottom: 30px !important;
            overflow-y: auto !important;
        }

        body.sidebar-mobile-open #hoe-left-panel {
            transform: translateX(0) !important;
        }

        #main-content {
            margin-left: 0 !important;
            padding: 8px 6px 20px 6px !important;
            width: 100% !important;
            max-width: 100vw !important;
            box-sizing: border-box !important;
            overflow-x: hidden !important;
        }

        /* Mobile Drawer Header with Close Button in Corner */
        .mobile-drawer-header {
            display: flex !important;
            align-items: center;
            justify-content: space-between;
            padding: 6px 16px 14px 18px;
            border-bottom: 1px solid rgba(226, 232, 240, 0.7);
            margin-bottom: 8px;
        }

        .mobile-drawer-brand {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .mobile-drawer-title {
            font-size: 18px;
            font-weight: 700;
            color: #0f172a;
            letter-spacing: -0.3px;
        }

        .mobile-drawer-close-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(241, 245, 249, 0.9);
            border: 1px solid rgba(203, 213, 225, 0.8);
            color: #475569;
            font-size: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .mobile-drawer-close-btn:hover,
        .mobile-drawer-close-btn:active {
            background: #ef4444;
            color: #ffffff;
            border-color: #ef4444;
            transform: rotate(90deg);
        }

        /* Full Screen Frosted Dimmed Backdrop */
        .sidebar-mobile-backdrop {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(15, 23, 42, 0.45);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            z-index: 100000;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.28s ease;
        }

        body.sidebar-mobile-open .sidebar-mobile-backdrop {
            display: block;
            opacity: 1;
            pointer-events: auto;
        }
    }
</style>

<div id="hoeapp-container" hoe-lpanel-effect="default">

    <!-- Full-screen Mobile Backdrop Overlay -->
    <div class="sidebar-mobile-backdrop" id="sidebarMobileBackdrop"></div>

    <aside id="hoe-left-panel" hoe-position-type="absolute">

        <!-- Mobile Drawer Header with Close Button in Top Corner -->
        <div class="mobile-drawer-header">
            <div class="mobile-drawer-brand">
                <svg class="brand-cube-icon" width="28" height="28" viewBox="0 0 40 40" fill="none">
                    <path d="M20 3L36 12.2V30.8L20 40L4 30.8V12.2L20 3Z" fill="#1e40af" />
                    <path d="M20 3L36 12.2L20 21.5L4 12.2L20 3Z" fill="url(#mCubeTop)" />
                    <path d="M20 21.5V40L36 30.8V12.2L20 21.5Z" fill="url(#mCubeRight)" />
                    <path d="M4 12.2L20 21.5V40L4 30.8V12.2Z" fill="url(#mCubeLeft)" />
                    <defs>
                        <linearGradient id="mCubeTop" x1="4" y1="3" x2="36" y2="21.5" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#93c5fd" />
                            <stop offset="1" stop-color="#3b82f6" />
                        </linearGradient>
                        <linearGradient id="mCubeRight" x1="20" y1="12" x2="36" y2="40" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#2563eb" />
                            <stop offset="1" stop-color="#1d4ed8" />
                        </linearGradient>
                        <linearGradient id="mCubeLeft" x1="4" y1="12" x2="20" y2="40" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#1e3a8a" />
                            <stop offset="1" stop-color="#172554" />
                        </linearGradient>
                    </defs>
                </svg>
                <span class="mobile-drawer-title">Admin</span>
            </div>
            <button type="button" class="mobile-drawer-close-btn" id="mobileDrawerClose" title="Close Menu">
                <i class="fa fa-times"></i>
            </button>
        </div>

        <!-- Profile Mini Card -->
        <div class="glass-profile-box">
            <div class="glass-profile-avatar">
                <?= strtoupper(substr($this->session->userdata('name') ?: 'Admin', 0, 1)) ?>
            </div>
            <div class="glass-profile-info">
                <div class="glass-profile-sub">Welcome Back!</div>
                <div class="glass-profile-name"><?= $this->session->userdata('name') ?: 'Admin' ?></div>
                <div class="glass-profile-status">
                    <span class="status-pulse-dot"></span> Online
                </div>
            </div>
        </div>

        <?php
        $menu_labels = [];
        if (file_exists('./assets/menu_labels.json')) {
            $menu_labels = json_decode(file_get_contents('./assets/menu_labels.json'), true);
        }

        function get_label($labels, $key, $default)
        {
            return (isset($labels[$key]) && !empty($labels[$key])) ? htmlspecialchars($labels[$key]) : $default;
        }

        function is_visible($labels, $key)
        {
            $show_key = "show_" . $key;
            return (!isset($labels[$show_key]) || $labels[$show_key] === "1");
        }
        ?>

        <!-- Navigation Menu -->
        <ul class="glass-nav-list">
            <?php if (is_visible($menu_labels, 'label_dashboard')): ?>
                <li ui-sref-active="active">
                    <a accesskey="h" ui-sref="home" href="#/home" title="Dashboard (Alt+H)">
                        <i class="fa fa-home menu-icon"></i>
                        <span class="menu-text"><?= get_label($menu_labels, 'label_dashboard', 'Dashboard') ?></span>
                        <i class="fa fa-angle-right menu-chevron"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (is_visible($menu_labels, 'label_blog')): ?>
                <li ui-sref-active="active">
                    <a accesskey="b" ui-sref="blog" href="#/blog" title="Blog Management (Alt+B)">
                        <i class="fa fa-newspaper-o menu-icon"></i>
                        <span class="menu-text"><?= get_label($menu_labels, 'label_blog', 'Blog') ?></span>
                        <i class="fa fa-angle-right menu-chevron"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (is_visible($menu_labels, 'label_bookings')): ?>
                <li ui-sref-active="active">
                    <a accesskey="k" ui-sref="booking" href="#/booking" title="Booking Management (Alt+K)">
                        <i class="fa fa-calendar menu-icon"></i>
                        <span class="menu-text"><?= get_label($menu_labels, 'label_bookings', 'Booking') ?></span>
                        <i class="fa fa-angle-right menu-chevron"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (is_visible($menu_labels, 'label_contacts')): ?>
                <li ui-sref-active="active">
                    <a accesskey="c" ui-sref="contact" href="#/contact" title="Contact Messages (Alt+C)">
                        <i class="fa fa-envelope menu-icon"></i>
                        <span class="menu-text"><?= get_label($menu_labels, 'label_contacts', 'Contacts') ?></span>
                        <i class="fa fa-angle-right menu-chevron"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (is_visible($menu_labels, 'label_reviews')): ?>
                <li ui-sref-active="active">
                    <a accesskey="r" ui-sref="reviews" href="#/reviews" title="Reviews & Ratings (Alt+R)">
                        <i class="fa fa-star menu-icon"></i>
                        <span class="menu-text"><?= get_label($menu_labels, 'label_reviews', 'Reviews') ?></span>
                        <i class="fa fa-angle-right menu-chevron"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (is_visible($menu_labels, 'label_gallery')): ?>
                <li ui-sref-active="active">
                    <a accesskey="g" ui-sref="gallery" href="#/gallery" title="Photo Gallery (Alt+G)">
                        <i class="fa fa-image menu-icon"></i>
                        <span class="menu-text"><?= get_label($menu_labels, 'label_gallery', 'Photo Gallery') ?></span>
                        <i class="fa fa-angle-right menu-chevron"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (is_visible($menu_labels, 'label_videogallery')): ?>
                <li ui-sref-active="active">
                    <a accesskey="v" ui-sref="videogallery" href="#/videogallery" title="Video Gallery (Alt+V)">
                        <i class="fa fa-video-camera menu-icon"></i>
                        <span class="menu-text"><?= get_label($menu_labels, 'label_videogallery', 'Video Gallery') ?></span>
                        <i class="fa fa-angle-right menu-chevron"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (is_visible($menu_labels, 'label_shipments')): ?>
                <li ui-sref-active="active">
                    <a accesskey="s" ui-sref="ship_main" href="#/ship_main" title="Shipment Management (Alt+S)">
                        <i class="fa fa-truck menu-icon"></i>
                        <span class="menu-text"><?= get_label($menu_labels, 'label_shipments', 'Shipments') ?></span>
                        <i class="fa fa-angle-right menu-chevron"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (is_visible($menu_labels, 'label_tracking')): ?>
                <li ui-sref-active="active">
                    <a accesskey="t" ui-sref="ship_tracking" href="#/ship_tracking" title="Tracking Updates (Alt+T)">
                        <i class="fa fa-location-arrow menu-icon"></i>
                        <span class="menu-text"><?= get_label($menu_labels, 'label_tracking', 'Tracking') ?></span>
                        <i class="fa fa-angle-right menu-chevron"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (is_visible($menu_labels, 'label_logs')): ?>
                <li ui-sref-active="active">
                    <a accesskey="x" ui-sref="logs" href="#/logs" title="System Logs (Alt+X)">
                        <i class="fa fa-list-alt menu-icon"></i>
                        <span class="menu-text"><?= get_label($menu_labels, 'label_logs', 'Logs') ?></span>
                        <i class="fa fa-angle-right menu-chevron"></i>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (is_visible($menu_labels, 'label_settings')): ?>
                <li ui-sref-active="active">
                    <a accesskey="c" ui-sref="settings" href="#/settings" title="Admin Settings (Alt+C)">
                        <i class="fa fa-cog menu-icon"></i>
                        <span class="menu-text"><?= get_label($menu_labels, 'label_settings', 'Settings') ?></span>
                        <i class="fa fa-angle-right menu-chevron"></i>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </aside>

    <!-- Reliable Interactive Sidebar Toggle Script -->
    <script>
        (function () {
            function attachSidebarToggle() {
                if (typeof jQuery === 'undefined') {
                    setTimeout(attachSidebarToggle, 60);
                    return;
                }
                jQuery(function ($) {
                    // Open/Toggle sidebar
                    $(document).off('click.sideToggle', '#sidebtn, .nav-toggle-btn');
                    $(document).on('click.sideToggle', '#sidebtn, .nav-toggle-btn', function (e) {
                        e.preventDefault();
                        e.stopPropagation();

                        if ($(window).width() <= 991) {
                            $('body').toggleClass('sidebar-mobile-open');
                        } else {
                            $('body').toggleClass('sidebar-collapsed');
                            $('#hoeapp-container').toggleClass('hoe-minimized-lpanel');
                        }
                    });

                    // Close drawer when clicking Close button, backdrop, or any menu item
                    $(document).off('click.sideClose');
                    $(document).on('click.sideClose', '#mobileDrawerClose, .sidebar-mobile-backdrop, .glass-nav-list a, .glass-profile-box a', function () {
                        if ($(window).width() <= 991) {
                            $('body').removeClass('sidebar-mobile-open');
                        }
                    });
                });
            }
            attachSidebarToggle();
        })();
    </script>

    <section id="main-content">