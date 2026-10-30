<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->session->userdata('name'); ?> <?= date("D d M Y") ?></title>
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/logo/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="<?= base_url("assets") ?>/admin/css/main.css" rel="stylesheet">
    <style type="text/css">
        @media print {

            aside,
            header,
            .col-lg-12,
            .myhead,
            hr {
                display: none !important;
            }

            #printarea {
                margin-top: -30px;
                margin-left: -230px;
            }
        }
    </style>

    <?php
    $theme_color = '';
    if (file_exists('./assets/theme_color.txt')) {
        $saved_color = file_get_contents('./assets/theme_color.txt');
        if (!empty($saved_color)) {
            $theme_color = htmlspecialchars(trim($saved_color));
        }
    }

    $text_color = '';
    if (file_exists('./assets/text_color.txt')) {
        $saved_text = file_get_contents('./assets/text_color.txt');
        if (!empty($saved_text)) {
            $text_color = htmlspecialchars(trim($saved_text));
        }
    }

    if (!empty($theme_color) || !empty($text_color)):
        ?>
        <style type="text/css">
            <?php if (!empty($theme_color)): ?>
                .btn-primary {
                    background-color:
                        <?= $theme_color ?>
                        !important;
                    border-color:
                        <?= $theme_color ?>
                        !important;
                }

                .panel-heading,
                .bg-primary {
                    background-color:
                        <?= $theme_color ?>
                        !important;
                    color: white !important;
                }

            <?php endif; ?>
        </style>
    <?php endif; ?>

    <style>
        /* ========================================================
           GLOBAL 3D FUTURISTIC GLASSMORPHISM STYLES & ORB ANIMATIONS
           ======================================================== */
        html,
        body {
            min-height: 100vh;
            background: #eef2ff !important;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #1e293b;
        }

        /* Ambient Glowing 3D Mesh Spheres in Background */
        .ambient-mesh-wrap {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            overflow: hidden;
            z-index: 0;
        }

        .ambient-orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.6;
            animation: orbFloat 20s infinite alternate ease-in-out;
        }

        .orb-purple {
            width: 480px;
            height: 480px;
            background: radial-gradient(circle, #a855f7 0%, #6366f1 70%, transparent 100%);
            top: -120px;
            right: 18%;
        }

        .orb-blue {
            width: 420px;
            height: 420px;
            background: radial-gradient(circle, #38bdf8 0%, #2563eb 70%, transparent 100%);
            top: 60px;
            left: 12%;
            animation-delay: -6s;
        }

        .orb-cyan {
            width: 360px;
            height: 360px;
            background: radial-gradient(circle, #67e8f9 0%, #3b82f6 70%, transparent 100%);
            bottom: -50px;
            left: 30%;
            animation-delay: -11s;
        }

        .orb-pink {
            width: 340px;
            height: 340px;
            background: radial-gradient(circle, #f472b6 0%, #c084fc 70%, transparent 100%);
            bottom: 50px;
            right: 5%;
            animation-delay: -15s;
        }

        @keyframes orbFloat {
            0% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(25px, -30px) scale(1.08);
            }

            100% {
                transform: translate(-20px, 20px) scale(0.96);
            }
        }

        #hoeapp-wrapper {
            position: relative;
            z-index: 1;
            background: transparent !important;
        }

        #hoeapp-container {
            background: transparent !important;
            padding-top: 74px !important;
        }

        /* Top Header Bar */
        #hoe-header {
            background: rgba(255, 255, 255, 0.55) !important;
            backdrop-filter: blur(20px) !important;
            -webkit-backdrop-filter: blur(20px) !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.75) !important;
            box-shadow: 0 4px 20px -3px rgba(15, 23, 42, 0.05) !important;
            height: 64px !important;
            position: fixed !important;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 24px;
        }

        .header-left-cluster {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .brand-link {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none !important;
        }

        .brand-text {
            font-size: 20px;
            font-weight: 700;
            color: #0f172a;
            letter-spacing: -0.4px;
        }

        .brand-cube-icon {
            filter: drop-shadow(0 4px 8px rgba(37, 99, 235, 0.35));
        }

        .hoe-sidebar-toggle {
            display: inline-flex !important;
            align-items: center !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        /* Suppress legacy theme pseudo-element to prevent double hamburger icon overlap */
        .hoe-sidebar-toggle a:after,
        .hoe-sidebar-toggle a:before,
        .nav-toggle-btn:after,
        .nav-toggle-btn:before {
            display: none !important;
            content: none !important;
        }

        .nav-toggle-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.8);
            color: #334155;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.2s ease;
            text-decoration: none !important;
            position: relative;
        }

        .nav-toggle-btn i {
            display: inline-block;
            line-height: 1;
            font-size: 15px;
            color: #334155;
        }

        .nav-toggle-btn:hover {
            background: #ffffff;
            color: #2563eb;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        }

        .nav-toggle-btn:hover i {
            color: #2563eb;
        }

        /* Center Search Box */
        .header-search-wrapper {
            flex: 1;
            max-width: 440px;
            margin: 0 20px;
        }

        .header-search-box {
            position: relative;
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.55);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.85);
            border-radius: 9999px;
            padding: 0 16px;
            height: 42px;
            box-shadow: 0 2px 10px rgba(15, 23, 42, 0.04);
            transition: all 0.25s ease;
        }

        .header-search-box:focus-within {
            background: #ffffff;
            border-color: #38bdf8;
            box-shadow: 0 4px 18px rgba(56, 189, 248, 0.2);
        }

        .header-search-box .search-icon {
            color: #94a3b8;
            font-size: 14px;
            margin-right: 10px;
        }

        .header-search-box input {
            border: none;
            background: transparent;
            outline: none;
            width: 100%;
            font-size: 13.5px;
            color: #1e293b;
            font-weight: 500;
        }

        .header-search-box input::placeholder {
            color: #94a3b8;
        }

        .header-search-box .search-kbd {
            font-size: 11px;
            font-weight: 600;
            color: #64748b;
            background: rgba(241, 245, 249, 0.85);
            border: 1px solid rgba(203, 213, 225, 0.6);
            border-radius: 6px;
            padding: 3px 8px;
            white-space: nowrap;
            letter-spacing: 0.3px;
        }

        /* Header Right Actions */
        .header-right-cluster {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .action-round-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.85);
            color: #475569;
            font-size: 15px;
            cursor: pointer;
            position: relative;
            transition: all 0.2s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .action-round-btn:hover {
            background: #ffffff;
            color: #2563eb;
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
        }

        .action-badge-dot {
            position: absolute;
            top: 2px;
            right: 2px;
            background: #ef4444;
            color: #ffffff;
            font-size: 10px;
            font-weight: 700;
            min-width: 17px;
            height: 17px;
            border-radius: 9999px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #ffffff;
            box-shadow: 0 2px 6px rgba(239, 68, 68, 0.4);
        }

        /* ========================================================
           NOTIFICATIONS & REFRESH ACTION STYLES
           ======================================================== */
        @keyframes spinRefresh {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .spinning-refresh {
            animation: spinRefresh 0.75s cubic-bezier(0.4, 0, 0.2, 1) infinite !important;
            display: inline-block !important;
        }

        .notif-dropdown {
            position: relative;
        }

        .notif-box-panel {
            width: 360px !important;
            max-width: 90vw !important;
            background: rgba(255, 255, 255, 0.88) !important;
            backdrop-filter: blur(28px) !important;
            -webkit-backdrop-filter: blur(28px) !important;
            border: 1px solid rgba(255, 255, 255, 0.95) !important;
            border-radius: 20px !important;
            box-shadow:
                0 20px 45px -10px rgba(15, 23, 42, 0.18),
                0 0 0 1px rgba(255, 255, 255, 0.6) inset !important;
            padding: 0 !important;
            margin-top: 10px !important;
            overflow: hidden !important;
            animation: notifSlideIn 0.22s cubic-bezier(0.4, 0, 0.2, 1) !important;
        }

        @keyframes notifSlideIn {
            from {
                opacity: 0;
                transform: translateY(-8px) scale(0.97);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .notif-box-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 13px 18px;
            background: rgba(248, 250, 252, 0.75);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
        }

        .notif-title-group {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .notif-title-text {
            font-size: 14.5px;
            font-weight: 700;
            color: #0f172a;
            letter-spacing: -0.2px;
        }

        .notif-unread-pill {
            font-size: 10.5px;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 20px;
            background: rgba(239, 68, 68, 0.12);
            color: #ef4444;
            border: 1px solid rgba(239, 68, 68, 0.25);
            transition: all 0.2s ease;
        }

        .notif-unread-pill.all-read {
            background: rgba(16, 185, 129, 0.12);
            color: #10b981;
            border-color: rgba(16, 185, 129, 0.25);
        }

        .notif-mark-all-btn {
            border: none;
            background: transparent;
            font-size: 11.5px;
            font-weight: 600;
            color: #2563eb;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 4px 8px;
            border-radius: 6px;
            transition: background 0.15s ease, color 0.15s ease;
        }

        .notif-mark-all-btn:hover {
            background: rgba(37, 99, 235, 0.08);
            color: #1d4ed8;
        }

        .notif-items-scroll {
            max-height: 330px;
            overflow-y: auto;
            padding: 4px 0;
        }

        .notif-items-scroll::-webkit-scrollbar {
            width: 4px;
        }

        .notif-items-scroll::-webkit-scrollbar-thumb {
            background: rgba(148, 163, 184, 0.4);
            border-radius: 4px;
        }

        .notif-row {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 12px 18px;
            cursor: pointer;
            transition: background 0.18s ease;
            border-bottom: 1px solid rgba(241, 245, 249, 0.8);
            position: relative;
            text-decoration: none !important;
        }

        .notif-row:last-child {
            border-bottom: none;
        }

        .notif-row:hover {
            background: rgba(241, 245, 249, 0.85);
        }

        .notif-row.is-unread {
            background: rgba(238, 242, 255, 0.55);
        }

        .notif-row.is-unread:hover {
            background: rgba(238, 242, 255, 0.9);
        }

        .notif-row-icon {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 14px;
            flex-shrink: 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .notif-icon-blue {
            background: linear-gradient(135deg, #38bdf8, #2563eb);
        }

        .notif-icon-purple {
            background: linear-gradient(135deg, #c084fc, #7c3aed);
        }

        .notif-icon-green {
            background: linear-gradient(135deg, #34d399, #059669);
        }

        .notif-row-body {
            flex: 1;
            min-width: 0;
        }

        .notif-row-title {
            font-size: 13px;
            font-weight: 700;
            color: #0f172a;
            line-height: 1.3;
            margin-bottom: 2px;
        }

        .notif-row-desc {
            font-size: 12px;
            color: #64748b;
            line-height: 1.35;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            margin-bottom: 4px;
        }

        .notif-row-time {
            font-size: 10.5px;
            font-weight: 500;
            color: #94a3b8;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .notif-row-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #3b82f6;
            box-shadow: 0 0 6px rgba(59, 130, 246, 0.6);
            flex-shrink: 0;
            margin-top: 6px;
        }

        .notif-loading-state,
        .notif-empty-state {
            padding: 34px 20px;
            text-align: center;
            color: #94a3b8;
        }

        .notif-empty-state i {
            font-size: 30px;
            margin-bottom: 8px;
            color: #cbd5e1;
            display: block;
        }

        .notif-empty-state p {
            font-size: 13px;
            font-weight: 500;
            margin: 0;
        }

        .notif-box-footer {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 10px 16px;
            background: rgba(248, 250, 252, 0.75);
            border-top: 1px solid rgba(226, 232, 240, 0.8);
        }

        .notif-quick-link {
            font-size: 11.5px;
            font-weight: 600;
            color: #475569;
            text-decoration: none !important;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: color 0.15s ease;
        }

        .notif-quick-link:hover {
            color: #2563eb;
        }

        .notif-link-dot {
            color: #cbd5e1;
            font-size: 11px;
        }

        /* User Profile Chip */
        .user-chip-btn {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 4px 14px 4px 5px;
            border-radius: 9999px;
            background: rgba(255, 255, 255, 0.65);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.85);
            color: #1e293b;
            cursor: pointer;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
            transition: all 0.2s ease;
            text-decoration: none !important;
        }

        .user-chip-btn:hover {
            background: #ffffff;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
        }

        .user-chip-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: linear-gradient(135deg, #3b82f6, #1d4ed8);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
            box-shadow: 0 2px 8px rgba(37, 99, 235, 0.3);
        }

        .user-chip-name {
            font-size: 13.5px;
            font-weight: 600;
            color: #0f172a;
        }

        .user-chip-caret {
            font-size: 12px;
            color: #64748b;
        }

        .glass-dropdown-menu {
            border: 1px solid rgba(255, 255, 255, 0.8) !important;
            border-radius: 16px !important;
            background: rgba(255, 255, 255, 0.85) !important;
            backdrop-filter: blur(20px) !important;
            -webkit-backdrop-filter: blur(20px) !important;
            box-shadow: 0 16px 36px -8px rgba(15, 23, 42, 0.16) !important;
            padding: 8px !important;
            min-width: 190px !important;
            margin-top: 8px !important;
        }

        .glass-dropdown-menu li a {
            padding: 9px 14px !important;
            border-radius: 10px !important;
            font-size: 13px !important;
            font-weight: 500 !important;
            color: #334155 !important;
            display: flex !important;
            align-items: center !important;
            gap: 10px !important;
            transition: all 0.15s ease !important;
        }

        .glass-dropdown-menu li a:hover {
            background: #f1f5f9 !important;
            color: #2563eb !important;
        }

        .glass-dropdown-menu li.divider {
            margin: 6px 0 !important;
            background-color: #e2e8f0 !important;
        }

        /* Responsive Top Header */
        @media (max-width: 767px) {
            .header-search-wrapper {
                display: none !important;
            }

            .user-chip-name {
                display: none;
            }

            #hoe-header {
                padding: 0 14px !important;
            }
        }

        /* ========================================================
           GLOBAL INTERACTIVE ROUTE LOADING INDICATOR
           ======================================================== */
        .page-loader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: 999999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity 0.22s ease, visibility 0.22s ease;
        }

        .page-loader.active {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .page-loader .loader-top-bar {
            position: fixed;
            top: 0;
            left: 0;
            height: 3px;
            width: 0%;
            background: linear-gradient(90deg, #38bdf8, #6366f1, #ec4899);
            box-shadow: 0 0 10px rgba(56, 189, 248, 0.7);
            transition: width 0.3s ease;
            z-index: 1000000;
        }

        .page-loader.active .loader-top-bar {
            width: 85%;
            animation: loaderBarPulse 1.2s ease-in-out infinite alternate;
        }

        @keyframes loaderBarPulse {
            0% {
                width: 40%;
            }

            100% {
                width: 92%;
            }
        }

        .page-loader .loader-backdrop {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(15, 23, 42, 0.15);
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
        }

        .page-loader .loader-card {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.95);
            border-radius: 18px;
            padding: 16px 24px;
            display: flex;
            align-items: center;
            gap: 14px;
            box-shadow:
                0 20px 40px -10px rgba(15, 35, 65, 0.2),
                0 0 0 1px rgba(255, 255, 255, 0.6) inset;
            transform: scale(0.92);
            transition: transform 0.25s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .page-loader.active .loader-card {
            transform: scale(1);
        }

        .spinner-3d-ring {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            border: 3px solid rgba(37, 99, 235, 0.15);
            border-top-color: #2563eb;
            border-right-color: #38bdf8;
            animation: spinRing 0.75s linear infinite;
            box-shadow: 0 0 12px rgba(37, 99, 235, 0.2);
        }

        @keyframes spinRing {
            to {
                transform: rotate(360deg);
            }
        }

        .page-loader .loader-text {
            font-size: 13.5px;
            font-weight: 600;
            color: #1e293b;
            letter-spacing: 0.2px;
        }

        [ui-view] {
            animation: fadeInView 0.25s ease-out;
        }

        @keyframes fadeInView {
            from {
                opacity: 0.4;
                transform: translateY(6px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body ng-app="groveusCms" hoe-navigation-type="vertical" hoe-nav-placement="left" theme-layout="wide-layout"
    class="view-animate-container">

    <!-- Ambient Mesh Glowing Orbs -->
    <div class="ambient-mesh-wrap">
        <div class="ambient-orb orb-purple"></div>
        <div class="ambient-orb orb-blue"></div>
        <div class="ambient-orb orb-cyan"></div>
        <div class="ambient-orb orb-pink"></div>
    </div>

    <div id="hoeapp-wrapper" class="hoe-hide-lpanel" hoe-device-type="desktop" class="view-animate">

        <!-- Glassmorphism Top Header -->
        <header id="hoe-header" hoe-lpanel-effect="default">

            <div class="header-left-cluster">
                <a href="#/home" class="brand-link" title="Dashboard">
                    <!-- 3D Isometric Blue Cube Logo -->
                    <svg class="brand-cube-icon" width="34" height="34" viewBox="0 0 40 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3L36 12.2V30.8L20 40L4 30.8V12.2L20 3Z" fill="#1e40af" />
                        <path d="M20 3L36 12.2L20 21.5L4 12.2L20 3Z" fill="url(#cubeTop)" />
                        <path d="M20 21.5V40L36 30.8V12.2L20 21.5Z" fill="url(#cubeRight)" />
                        <path d="M4 12.2L20 21.5V40L4 30.8V12.2Z" fill="url(#cubeLeft)" />
                        <defs>
                            <linearGradient id="cubeTop" x1="4" y1="3" x2="36" y2="21.5" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#93c5fd" />
                                <stop offset="1" stop-color="#3b82f6" />
                            </linearGradient>
                            <linearGradient id="cubeRight" x1="20" y1="12" x2="36" y2="40"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#2563eb" />
                                <stop offset="1" stop-color="#1d4ed8" />
                            </linearGradient>
                            <linearGradient id="cubeLeft" x1="4" y1="12" x2="20" y2="40" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#1e3a8a" />
                                <stop offset="1" stop-color="#172554" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <span class="brand-text">Admin</span>
                </a>

                <span class="hoe-sidebar-toggle">
                    <a id="sidebtn" href="javascript:void(0)" class="nav-toggle-btn" title="Toggle Navigation">
                        <i class="fa fa-bars"></i>
                    </a>
                </span>
            </div>

            <!-- Search Capsule -->
            <div class="header-search-wrapper">
                <div class="header-search-box">
                    <i class="fa fa-search search-icon"></i>
                    <input type="text" placeholder="Search anything..." ng-model="globalAdminSearch">
                    <span class="search-kbd">Ctrl + K</span>
                </div>
            </div>

            <!-- Header Right Icons & Profile -->
            <div class="header-right-cluster">

                <!-- 1. Refresh Button (Replaced Setting/Sun) -->
                <button type="button" class="action-round-btn" id="headerRefreshBtn" title="Refresh Page"
                    onclick="triggerPageRefresh(this)">
                    <i class="fa fa-refresh" id="headerRefreshIcon"></i>
                </button>

                <!-- 2. Workable Notifications Dropdown -->
                <div class="dropdown notif-dropdown">
                    <button type="button" class="action-round-btn dropdown-toggle" id="notifDropdownBtn"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Notifications">
                        <i class="fa fa-bell"></i>
                        <span class="action-badge-dot" id="notifBadgeCounter" style="display:none;">0</span>
                    </button>

                    <div class="dropdown-menu dropdown-menu-right notif-box-panel" aria-labelledby="notifDropdownBtn"
                        onclick="event.stopPropagation()">
                        <div class="notif-box-header">
                            <div class="notif-title-group">
                                <span class="notif-title-text">Notifications</span>
                                <span class="notif-unread-pill" id="notifUnreadBadge">0 New</span>
                            </div>
                            <button type="button" class="notif-mark-all-btn" id="markAllReadBtn"
                                onclick="markAllNotificationsAsRead(event)" title="Mark all as read">
                                <i class="fa fa-check-circle-o"></i> Mark all read
                            </button>
                        </div>

                        <div class="notif-items-scroll" id="notifListContainer">
                            <div class="notif-loading-state">
                                <i class="fa fa-circle-o-notch fa-spin"></i> Loading notifications...
                            </div>
                        </div>

                        <div class="notif-box-footer">
                            <a href="#/booking" class="notif-quick-link" onclick="closeNotifBox()"><i
                                    class="fa fa-calendar"></i> Bookings</a>
                            <span class="notif-link-dot">•</span>
                            <a href="#/contact" class="notif-quick-link" onclick="closeNotifBox()"><i
                                    class="fa fa-envelope"></i> Contacts</a>
                            <span class="notif-link-dot">•</span>
                            <a href="#/logs" class="notif-quick-link" onclick="closeNotifBox()"><i
                                    class="fa fa-list"></i> Logs</a>
                        </div>
                    </div>
                </div>

                <?php if ($this->session->userdata('username')): ?>
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="user-chip-btn dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="user-chip-avatar">
                                <?= strtoupper(substr($this->session->userdata('name') ?: 'Admin', 0, 1)) ?>
                            </span>
                            <span class="user-chip-name"><?= $this->session->userdata('name') ?: 'Admin' ?></span>
                            <i class="fa fa-angle-down user-chip-caret"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right glass-dropdown-menu">
                            <li><a href="#/logs"><i class="fa fa-list"></i> View Logs</a></li>
                            <li><a href="#/change_password"><i class="fa fa-user-circle"></i> Account Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="<?= site_url('admin/login/logout') ?>" class="text-danger"><i
                                        class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                <?php endif ?>
            </div>

        </header>

        <!-- Notification & Refresh Interactive Logic -->
        <script>
            var cachedNotifications = [];

            function triggerPageRefresh(btn) {
                var icon = document.getElementById('headerRefreshIcon');
                if (icon) icon.classList.add('spinning-refresh');

                try {
                    if (window.angular) {
                        var el = angular.element(document.querySelector('[ui-view]'));
                        var $state = el.injector() ? el.injector().get('$state') : null;
                        if ($state) {
                            $state.reload();
                            if (typeof loadAdminNotifications === 'function') {
                                loadAdminNotifications();
                            }
                            setTimeout(function () {
                                if (icon) icon.classList.remove('spinning-refresh');
                            }, 700);
                            return;
                        }
                    }
                } catch (e) { }

                setTimeout(function () {
                    window.location.reload();
                }, 300);
            }

            function getReadNotificationIds() {
                try {
                    var stored = localStorage.getItem('admin_read_notification_ids');
                    return stored ? JSON.parse(stored) : [];
                } catch (e) {
                    return [];
                }
            }

            function saveReadNotificationIds(ids) {
                try {
                    localStorage.setItem('admin_read_notification_ids', JSON.stringify(ids));
                } catch (e) { }
            }

            function closeNotifBox() {
                var btn = document.getElementById('notifDropdownBtn');
                if (btn && window.jQuery) {
                    jQuery(btn).dropdown('toggle');
                }
            }

            function loadAdminNotifications() {
                var container = document.getElementById('notifListContainer');
                var badge = document.getElementById('notifBadgeCounter');
                var unreadPill = document.getElementById('notifUnreadBadge');

                fetch('<?= site_url("admin/dashboard/fetch_notifications") ?>')
                    .then(function (res) { return res.json(); })
                    .then(function (data) {
                        if (data && data.status === 'success' && data.notifications) {
                            cachedNotifications = data.notifications;
                            renderNotificationsList(cachedNotifications);
                        } else {
                            renderNotificationsFallback();
                        }
                    })
                    .catch(function (err) {
                        renderNotificationsFallback();
                    });
            }

            function renderNotificationsList(list) {
                var container = document.getElementById('notifListContainer');
                var badge = document.getElementById('notifBadgeCounter');
                var unreadPill = document.getElementById('notifUnreadBadge');
                var readIds = getReadNotificationIds();

                if (!container) return;

                if (!list || list.length === 0) {
                    container.innerHTML = '<div class="notif-empty-state"><i class="fa fa-bell-slash-o"></i><p>No new notifications</p></div>';
                    if (badge) badge.style.display = 'none';
                    if (unreadPill) {
                        unreadPill.textContent = '0 New';
                        unreadPill.classList.add('all-read');
                    }
                    return;
                }

                var unreadCount = 0;
                var html = '';

                list.forEach(function (item) {
                    var isRead = readIds.indexOf(item.id) !== -1;
                    if (!isRead) unreadCount++;

                    html += '<a href="' + (item.link || 'javascript:void(0)') + '" class="notif-row ' + (isRead ? '' : 'is-unread') + '" data-id="' + item.id + '" onclick="onNotificationClick(event, \'' + item.id + '\', \'' + (item.link || '') + '\')">';
                    html += '  <div class="notif-row-icon ' + (item.bg_color || 'notif-icon-blue') + '">';
                    html += '    <i class="fa ' + (item.icon || 'fa-bell-o') + '"></i>';
                    html += '  </div>';
                    html += '  <div class="notif-row-body">';
                    html += '    <div class="notif-row-title">' + escapeHtml(item.title) + '</div>';
                    html += '    <div class="notif-row-desc">' + escapeHtml(item.desc) + '</div>';
                    html += '    <div class="notif-row-time"><i class="fa fa-clock-o"></i> ' + escapeHtml(item.time) + '</div>';
                    html += '  </div>';
                    if (!isRead) {
                        html += '  <div class="notif-row-dot" title="Unread"></div>';
                    }
                    html += '</a>';
                });

                container.innerHTML = html;

                if (badge) {
                    if (unreadCount > 0) {
                        badge.textContent = unreadCount;
                        badge.style.display = 'flex';
                    } else {
                        badge.style.display = 'none';
                    }
                }

                if (unreadPill) {
                    if (unreadCount > 0) {
                        unreadPill.textContent = unreadCount + ' New';
                        unreadPill.classList.remove('all-read');
                    } else {
                        unreadPill.textContent = '0 New';
                        unreadPill.classList.add('all-read');
                    }
                }
            }

            function renderNotificationsFallback() {
                var fallback = [
                    { id: 'b_sample_1', title: 'New Booking from Rahul Sharma', desc: 'House Shifting: Mumbai → Delhi', time: '10 mins ago', link: '#/booking', icon: 'fa-calendar-check-o', bg_color: 'notif-icon-blue' },
                    { id: 'c_sample_2', title: 'Inquiry from Priya Verma', desc: 'Office relocation quote requested', time: '2 hours ago', link: '#/contact', icon: 'fa-envelope-o', bg_color: 'notif-icon-purple' },
                    { id: 'b_sample_3', title: 'New Booking from Amit Kumar', desc: 'Vehicle transport inquiry', time: '5 hours ago', link: '#/booking', icon: 'fa-calendar-check-o', bg_color: 'notif-icon-blue' }
                ];
                cachedNotifications = fallback;
                renderNotificationsList(fallback);
            }

            function onNotificationClick(e, id, link) {
                var readIds = getReadNotificationIds();
                if (readIds.indexOf(id) === -1) {
                    readIds.push(id);
                    saveReadNotificationIds(readIds);
                }
                renderNotificationsList(cachedNotifications);
                closeNotifBox();
            }

            function markAllNotificationsAsRead(e) {
                if (e) {
                    e.preventDefault();
                    e.stopPropagation();
                }
                var readIds = getReadNotificationIds();
                cachedNotifications.forEach(function (item) {
                    if (readIds.indexOf(item.id) === -1) {
                        readIds.push(item.id);
                    }
                });
                saveReadNotificationIds(readIds);
                renderNotificationsList(cachedNotifications);
            }

            function escapeHtml(text) {
                if (!text) return '';
                var map = { '&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;' };
                return String(text).replace(/[&<>"']/g, function (m) { return map[m]; });
            }

            // Initialize notifications on page load
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', loadAdminNotifications);
            } else {
                loadAdminNotifications();
            }
        </script>