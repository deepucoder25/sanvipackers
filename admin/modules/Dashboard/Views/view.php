<?php
$labels = [];
if (file_exists('./assets/menu_labels.json')) {
    $labels = json_decode(file_get_contents('./assets/menu_labels.json'), true);
}
function get_label($labels, $key, $default) {
    return (isset($labels[$key]) && !empty($labels[$key])) ? htmlspecialchars($labels[$key]) : $default;
}
?>
<div class="dash-wrapper">
    <!-- Floating Background 3D Glow Orbs -->
    <div class="glass-orb orb-1"></div>
    <div class="glass-orb orb-2"></div>
    <div class="glass-orb orb-3"></div>

    <!-- Top Banner Card -->
    <div class="welcome-banner glass-panel">
        <div class="welcome-info">
            <span class="welcome-tag"><i class="fa fa-th-large"></i> Dashboard</span>
            <h1 class="welcome-title">Welcome Back, Admin!</h1>
            <p class="welcome-subtitle">Here's what's happening with your website today.</p>
        </div>
        <div class="welcome-date-badge glass-panel-sm">
            <div class="date-icon-box">
                <i class="fa fa-calendar-check-o"></i>
            </div>
            <div class="date-text-box">
                <div class="date-main" id="liveDateMain"><?= date("l, d M Y") ?></div>
                <div class="date-sub">
                    <span id="liveTimeClock" class="live-clock-badge"><?= date("h:i:s A") ?></span>
                    <span class="date-divider">|</span>
                    <span id="liveDayGreeting">Have a productive day! ✨</span>
                </div>
            </div>
        </div>
    </div>

    <!-- 8 Modern Stat Cards (Desktop: Single Row of 8 Cards) -->
    <div class="stats-row">
        
        <!-- 1. Blog Posts -->
        <div class="stat-glass-card card-purple" ui-sref="blog">
            <div class="card-top">
                <div class="icon-3d icon-purple">
                    <i class="fa fa-newspaper-o"></i>
                </div>
                <span class="stat-live-badge">
                    <span class="live-pulse-dot"></span> Live
                </span>
            </div>
            <div class="card-middle">
                <div class="stat-label">BLOG POSTS</div>
                <div class="stat-num">{{blog !== undefined ? blog : 0}}</div>
                <div class="stat-caption">Published articles</div>
            </div>
            <div class="sparkline-wrap">
                <svg viewBox="0 0 140 40" class="sparkline-svg" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="purpleGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#8b5cf6" stop-opacity="0.35"/>
                            <stop offset="100%" stop-color="#8b5cf6" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M 0,28 Q 20,8 45,24 T 90,14 T 140,8 L 140,40 L 0,40 Z" fill="url(#purpleGrad)"/>
                    <path d="M 0,28 Q 20,8 45,24 T 90,14 T 140,8" fill="none" stroke="#8b5cf6" stroke-width="2.2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="card-bottom">
                <span class="view-cta">View Details <i class="fa fa-arrow-right"></i></span>
            </div>
        </div>

        <!-- 2. Bookings -->
        <div class="stat-glass-card card-blue" ui-sref="booking">
            <div class="card-top">
                <div class="icon-3d icon-blue">
                    <i class="fa fa-calendar-check-o"></i>
                </div>
                <span class="stat-live-badge">
                    <span class="live-pulse-dot"></span> Live
                </span>
            </div>
            <div class="card-middle">
                <div class="stat-label">BOOKINGS</div>
                <div class="stat-num">{{bookings !== undefined ? bookings : 0}}</div>
                <div class="stat-caption">Active bookings</div>
            </div>
            <div class="sparkline-wrap">
                <svg viewBox="0 0 140 40" class="sparkline-svg" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="blueGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#3b82f6" stop-opacity="0.35"/>
                            <stop offset="100%" stop-color="#3b82f6" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M 0,30 Q 30,12 60,26 T 105,10 T 140,16 L 140,40 L 0,40 Z" fill="url(#blueGrad)"/>
                    <path d="M 0,30 Q 30,12 60,26 T 105,10 T 140,16" fill="none" stroke="#3b82f6" stroke-width="2.2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="card-bottom">
                <span class="view-cta">View Details <i class="fa fa-arrow-right"></i></span>
            </div>
        </div>

        <!-- 3. Contacts -->
        <div class="stat-glass-card card-orange" ui-sref="contact">
            <div class="card-top">
                <div class="icon-3d icon-orange">
                    <i class="fa fa-envelope"></i>
                </div>
                <span class="stat-live-badge">
                    <span class="live-pulse-dot"></span> Live
                </span>
            </div>
            <div class="card-middle">
                <div class="stat-label">CONTACTS</div>
                <div class="stat-num">{{contact !== undefined ? contact : 0}}</div>
                <div class="stat-caption">Customer messages</div>
            </div>
            <div class="sparkline-wrap">
                <svg viewBox="0 0 140 40" class="sparkline-svg" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="orangeGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#f97316" stop-opacity="0.35"/>
                            <stop offset="100%" stop-color="#f97316" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M 0,26 Q 35,32 70,18 T 110,24 T 140,10 L 140,40 L 0,40 Z" fill="url(#orangeGrad)"/>
                    <path d="M 0,26 Q 35,32 70,18 T 110,24 T 140,10" fill="none" stroke="#f97316" stroke-width="2.2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="card-bottom">
                <span class="view-cta">View Details <i class="fa fa-arrow-right"></i></span>
            </div>
        </div>

        <!-- 4. Reviews -->
        <div class="stat-glass-card card-pink" ui-sref="reviews">
            <div class="card-top">
                <div class="icon-3d icon-pink">
                    <i class="fa fa-star"></i>
                </div>
                <span class="stat-live-badge">
                    <span class="live-pulse-dot"></span> Live
                </span>
            </div>
            <div class="card-middle">
                <div class="stat-label">REVIEWS</div>
                <div class="stat-num">{{reviews !== undefined ? reviews : 0}}</div>
                <div class="stat-caption">Customer feedback</div>
            </div>
            <div class="sparkline-wrap">
                <svg viewBox="0 0 140 40" class="sparkline-svg" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="pinkGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#ec4899" stop-opacity="0.35"/>
                            <stop offset="100%" stop-color="#ec4899" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M 0,32 Q 25,24 55,28 T 100,12 T 140,14 L 140,40 L 0,40 Z" fill="url(#pinkGrad)"/>
                    <path d="M 0,32 Q 25,24 55,28 T 100,12 T 140,14" fill="none" stroke="#ec4899" stroke-width="2.2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="card-bottom">
                <span class="view-cta">View Details <i class="fa fa-arrow-right"></i></span>
            </div>
        </div>

        <!-- 5. Photo Gallery (Image) -->
        <div class="stat-glass-card card-cyan" ui-sref="gallery">
            <div class="card-top">
                <div class="icon-3d icon-cyan">
                    <i class="fa fa-image"></i>
                </div>
                <span class="stat-live-badge">
                    <span class="live-pulse-dot"></span> Live
                </span>
            </div>
            <div class="card-middle">
                <div class="stat-label">PHOTO GALLERY</div>
                <div class="stat-num">{{gallery !== undefined ? gallery : 0}}</div>
                <div class="stat-caption">Gallery photos</div>
            </div>
            <div class="sparkline-wrap">
                <svg viewBox="0 0 140 40" class="sparkline-svg" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="cyanGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#06b6d4" stop-opacity="0.35"/>
                            <stop offset="100%" stop-color="#06b6d4" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M 0,28 Q 30,14 65,24 T 110,12 T 140,18 L 140,40 L 0,40 Z" fill="url(#cyanGrad)"/>
                    <path d="M 0,28 Q 30,14 65,24 T 110,12 T 140,18" fill="none" stroke="#06b6d4" stroke-width="2.2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="card-bottom">
                <span class="view-cta">View Details <i class="fa fa-arrow-right"></i></span>
            </div>
        </div>

        <!-- 6. Video Gallery (Video) -->
        <div class="stat-glass-card card-red" ui-sref="videogallery">
            <div class="card-top">
                <div class="icon-3d icon-red">
                    <i class="fa fa-video-camera"></i>
                </div>
                <span class="stat-live-badge">
                    <span class="live-pulse-dot"></span> Live
                </span>
            </div>
            <div class="card-middle">
                <div class="stat-label">VIDEO GALLERY</div>
                <div class="stat-num">{{videogallery !== undefined ? videogallery : 0}}</div>
                <div class="stat-caption">Video showcase</div>
            </div>
            <div class="sparkline-wrap">
                <svg viewBox="0 0 140 40" class="sparkline-svg" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="redGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#ef4444" stop-opacity="0.35"/>
                            <stop offset="100%" stop-color="#ef4444" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M 0,30 Q 35,16 70,28 T 115,10 T 140,14 L 140,40 L 0,40 Z" fill="url(#redGrad)"/>
                    <path d="M 0,30 Q 35,16 70,28 T 115,10 T 140,14" fill="none" stroke="#ef4444" stroke-width="2.2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="card-bottom">
                <span class="view-cta">View Details <i class="fa fa-arrow-right"></i></span>
            </div>
        </div>

        <!-- 7. Shipments -->
        <div class="stat-glass-card card-green" ui-sref="ship_main">
            <div class="card-top">
                <div class="icon-3d icon-green">
                    <i class="fa fa-truck"></i>
                </div>
                <span class="stat-live-badge">
                    <span class="live-pulse-dot"></span> Live
                </span>
            </div>
            <div class="card-middle">
                <div class="stat-label">SHIPMENTS</div>
                <div class="stat-num">{{shipments !== undefined ? shipments : 0}}</div>
                <div class="stat-caption">Consignments</div>
            </div>
            <div class="sparkline-wrap">
                <svg viewBox="0 0 140 40" class="sparkline-svg" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="greenGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#10b981" stop-opacity="0.35"/>
                            <stop offset="100%" stop-color="#10b981" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M 0,22 Q 35,10 70,26 T 115,16 T 140,12 L 140,40 L 0,40 Z" fill="url(#greenGrad)"/>
                    <path d="M 0,22 Q 35,10 70,26 T 115,16 T 140,12" fill="none" stroke="#10b981" stroke-width="2.2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="card-bottom">
                <span class="view-cta">View Details <i class="fa fa-arrow-right"></i></span>
            </div>
        </div>

        <!-- 8. Tracking -->
        <div class="stat-glass-card card-indigo" ui-sref="ship_tracking">
            <div class="card-top">
                <div class="icon-3d icon-indigo">
                    <i class="fa fa-location-arrow"></i>
                </div>
                <span class="stat-live-badge">
                    <span class="live-pulse-dot"></span> Live
                </span>
            </div>
            <div class="card-middle">
                <div class="stat-label">TRACKING</div>
                <div class="stat-num">{{tracking !== undefined ? tracking : 0}}</div>
                <div class="stat-caption">Status updates</div>
            </div>
            <div class="sparkline-wrap">
                <svg viewBox="0 0 140 40" class="sparkline-svg" preserveAspectRatio="none">
                    <defs>
                        <linearGradient id="indigoGrad" x1="0%" y1="0%" x2="0%" y2="100%">
                            <stop offset="0%" stop-color="#6366f1" stop-opacity="0.35"/>
                            <stop offset="100%" stop-color="#6366f1" stop-opacity="0.0"/>
                        </linearGradient>
                    </defs>
                    <path d="M 0,26 Q 30,8 65,22 T 110,14 T 140,8 L 140,40 L 0,40 Z" fill="url(#indigoGrad)"/>
                    <path d="M 0,26 Q 30,8 65,22 T 110,14 T 140,8" fill="none" stroke="#6366f1" stroke-width="2.2" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="card-bottom">
                <span class="view-cta">View Details <i class="fa fa-arrow-right"></i></span>
            </div>
        </div>

    </div>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&display=swap');

/* ====================================================================
   DASHBOARD 3D GLASS DESIGN - MATCHING EXACT REFERENCE UI
   ==================================================================== */

.dash-wrapper {
    position: relative;
    padding: 6px 10px 20px 10px;
    font-family: 'Outfit', sans-serif;
    color: #1e293b;
    overflow: hidden;
}

/* Floating 3D Glowing Glass Orbs */
.glass-orb {
    position: fixed;
    border-radius: 50%;
    filter: blur(80px);
    pointer-events: none;
    z-index: 0;
    opacity: 0.6;
}

.orb-1 {
    width: 420px;
    height: 420px;
    background: radial-gradient(circle, rgba(168, 85, 247, 0.35) 0%, rgba(99, 102, 241, 0.2) 60%, transparent 80%);
    top: 5%;
    right: 5%;
}

.orb-2 {
    width: 360px;
    height: 360px;
    background: radial-gradient(circle, rgba(56, 189, 248, 0.35) 0%, rgba(59, 130, 246, 0.18) 60%, transparent 80%);
    bottom: 10%;
    left: 20%;
}

.orb-3 {
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(236, 72, 153, 0.22) 0%, transparent 75%);
    top: 40%;
    right: 25%;
}

/* Base Glass Panels */
.glass-panel {
    background: rgba(255, 255, 255, 0.72);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.85);
    border-radius: 16px;
    box-shadow:
        0 10px 28px -6px rgba(15, 35, 75, 0.05),
        0 2px 8px -2px rgba(15, 35, 75, 0.02),
        inset 0 1px 0 rgba(255, 255, 255, 0.95);
    position: relative;
    z-index: 1;
}

.glass-panel-sm {
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(14px);
    -webkit-backdrop-filter: blur(14px);
    border: 1px solid rgba(255, 255, 255, 0.95);
    border-radius: 12px;
    box-shadow: 0 4px 14px rgba(15, 35, 75, 0.03), inset 0 1px 0 #fff;
}

/* Top Welcome Banner */
.welcome-banner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 20px;
    margin-bottom: 12px;
}

.welcome-tag {
    display: inline-block;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.5px;
    text-transform: uppercase;
    color: #4338ca;
    margin-bottom: 3px;
}

.welcome-title {
    margin: 0 0 2px 0;
    font-size: 20px;
    font-weight: 800;
    color: #0f172a;
    letter-spacing: -0.4px;
}

.welcome-subtitle {
    margin: 0;
    font-size: 12px;
    color: #64748b;
    font-weight: 400;
}

.welcome-date-badge {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 7px 14px;
}

.date-icon-box {
    width: 32px;
    height: 32px;
    background: linear-gradient(135deg, #3b82f6, #6366f1);
    color: #ffffff;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
    box-shadow: 0 3px 8px rgba(59, 130, 246, 0.3);
}

.date-main {
    font-size: 12px;
    font-weight: 700;
    color: #0f172a;
}

.date-sub {
    font-size: 10.5px;
    color: #64748b;
}

/* 8 Modern Stat Cards Row (Desktop: Single Row of 8 Cards) */
.stats-row {
    display: grid;
    grid-template-columns: repeat(8, minmax(0, 1fr));
    gap: 8px;
    margin-bottom: 14px;
    position: relative;
    z-index: 1;
}

.stat-glass-card {
    background: rgba(255, 255, 255, 0.78);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.9);
    border-radius: 13px;
    padding: 10px 10px 8px 10px;
    box-shadow:
        0 8px 20px -4px rgba(15, 35, 75, 0.04),
        0 2px 5px -1px rgba(15, 35, 75, 0.02),
        inset 0 1px 0 rgba(255, 255, 255, 0.95);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    min-width: 0;
    transition: all 0.25s cubic-bezier(0.2, 0.8, 0.2, 1);
}

.stat-glass-card:hover {
    transform: translateY(-4px) scale(1.02);
    background: rgba(255, 255, 255, 0.94);
    box-shadow:
        0 14px 28px -6px rgba(15, 35, 75, 0.1),
        0 3px 8px -2px rgba(15, 35, 75, 0.03),
        inset 0 1px 0 #fff;
    border-color: #ffffff;
}

/* Card Top: Icon & Live Pill */
.card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 4px;
    gap: 4px;
}

.icon-3d {
    width: 30px;
    height: 30px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #ffffff;
    font-size: 13px;
    box-shadow: 0 5px 12px -2px rgba(0, 0, 0, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.35);
    transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
    flex-shrink: 0;
}

.stat-glass-card:hover .icon-3d {
    transform: scale(1.08) rotate(4deg);
}

.icon-purple { background: linear-gradient(135deg, #a855f7 0%, #7c3aed 100%); }
.icon-blue   { background: linear-gradient(135deg, #38bdf8 0%, #2563eb 100%); }
.icon-orange { background: linear-gradient(135deg, #fb923c 0%, #ea580c 100%); }
.icon-pink   { background: linear-gradient(135deg, #f43f5e 0%, #e11d48 100%); }
.icon-cyan   { background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%); }
.icon-red    { background: linear-gradient(135deg, #ef4444 0%, #b91c1c 100%); }
.icon-green  { background: linear-gradient(135deg, #10b981 0%, #059669 100%); }
.icon-indigo { background: linear-gradient(135deg, #6366f1 0%, #4338ca 100%); }

.stat-live-badge {
    font-size: 9px;
    font-weight: 600;
    padding: 1.5px 6px;
    border-radius: 12px;
    background: rgba(16, 185, 129, 0.1);
    color: #059669;
    border: 1px solid rgba(16, 185, 129, 0.2);
    display: inline-flex;
    align-items: center;
    gap: 3px;
    flex-shrink: 0;
}

.live-pulse-dot {
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: #10b981;
    display: inline-block;
    box-shadow: 0 0 4px rgba(16, 185, 129, 0.6);
}

/* Card Middle */
.card-middle {
    margin-bottom: 2px;
    min-width: 0;
}

.stat-label {
    font-size: 10px;
    font-weight: 800;
    color: #0f172a;
    letter-spacing: 0.4px;
    text-transform: uppercase;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.stat-num {
    font-size: 22px;
    font-weight: 900;
    color: #09101d;
    line-height: 1.1;
    margin: 2px 0 2px 0;
    letter-spacing: -0.5px;
}

.stat-caption {
    font-size: 9.5px;
    color: #64748b;
    font-weight: 600;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* Sparkline Wavy Chart */
.sparkline-wrap {
    width: 100%;
    height: 20px;
    margin: 2px 0 4px 0;
    overflow: hidden;
}

.sparkline-svg {
    width: 100%;
    height: 100%;
    display: block;
}

/* Card Bottom View CTA */
.card-bottom {
    border-top: 1px solid rgba(15, 35, 75, 0.05);
    padding-top: 4px;
}

.view-cta {
    font-size: 9.5px;
    font-weight: 600;
    color: #2563eb;
    display: inline-flex;
    align-items: center;
    gap: 3px;
    white-space: nowrap;
    transition: gap 0.2s ease, color 0.2s ease;
}

.stat-glass-card:hover .view-cta {
    gap: 5px;
    color: #1d4ed8;
}

/* ====================================================================
   MOBILE RESPONSIVENESS (EXACT 4 COLUMNS IN 1 ROW AS REQUESTED)
   ==================================================================== */
@media (max-width: 991px) {
    .stats-row {
        grid-template-columns: repeat(4, 1fr);
    }
}

@media (max-width: 767px) {
    .dash-wrapper {
        padding: 10px 8px 24px 8px;
    }

    .welcome-banner {
        flex-direction: column;
        align-items: flex-start;
        gap: 12px;
        padding: 14px 16px;
        margin-bottom: 12px;
        border-radius: 14px;
    }

    .welcome-title {
        font-size: 18px;
    }

    .welcome-subtitle {
        font-size: 11px;
    }

    .welcome-date-badge {
        width: 100%;
        padding: 8px 12px;
    }

    /* 4 COLUMNS IN 1 ROW ON MOBILE */
    .stats-row {
        display: grid !important;
        grid-template-columns: repeat(4, 1fr) !important;
        gap: 5px !important;
        margin-bottom: 14px !important;
    }

    .stat-glass-card {
        padding: 8px 4px 6px 4px !important;
        border-radius: 11px !important;
        min-height: 85px !important;
        align-items: center !important;
        text-align: center !important;
    }

    .card-top {
        margin-bottom: 2px !important;
        justify-content: center !important;
        width: 100% !important;
    }

    .icon-3d {
        width: 26px !important;
        height: 26px !important;
        font-size: 11px !important;
        border-radius: 7px !important;
    }

    .trend-badge,
    .stat-live-badge {
        display: none !important;
    }

    .stat-label {
        font-size: 8.5px !important;
        font-weight: 800 !important;
        color: #0f172a !important;
        margin: 0 !important;
        white-space: nowrap !important;
        overflow: hidden !important;
        text-overflow: ellipsis !important;
        max-width: 100% !important;
    }

    .stat-num {
        font-size: 16px !important;
        margin: 2px 0 0 0 !important;
    }

    .stat-caption {
        display: none !important;
    }

    .sparkline-wrap {
        height: 16px !important;
        margin: 2px 0 !important;
    }

    .card-bottom {
        display: none !important;
    }
    .live-clock-badge {
        font-weight: 700;
        color: #1e293b;
        letter-spacing: 0.2px;
    }
    .date-divider {
        margin: 0 4px;
        color: #cbd5e1;
    }
}
</style>

<!-- Live Real-Time Clock & Dynamic Greeting Script -->
<script>
(function() {
    function initLiveClock() {
        function tick() {
            var now = new Date();

            // 1. Date: e.g. "Wednesday, 28 Oct 2026"
            var days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
            var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
            
            var dayName = days[now.getDay()];
            var dayNum = String(now.getDate()).padStart(2, '0');
            var monthName = months[now.getMonth()];
            var year = now.getFullYear();

            var dateEl = document.getElementById('liveDateMain');
            if (dateEl) {
                dateEl.textContent = dayName + ', ' + dayNum + ' ' + monthName + ' ' + year;
            }

            // 2. Time: e.g. "04:56:15 PM"
            var rawHours = now.getHours();
            var minutes = String(now.getMinutes()).padStart(2, '0');
            var seconds = String(now.getSeconds()).padStart(2, '0');
            var ampm = rawHours >= 12 ? 'PM' : 'AM';
            var h = rawHours % 12;
            h = h ? h : 12;
            var strHours = String(h).padStart(2, '0');

            var timeEl = document.getElementById('liveTimeClock');
            if (timeEl) {
                timeEl.textContent = strHours + ':' + minutes + ':' + seconds + ' ' + ampm;
            }

            // 3. Greeting based on hour
            var greetingEl = document.getElementById('liveDayGreeting');
            if (greetingEl) {
                var greeting = "Have a productive day! ✨";
                if (rawHours < 12) {
                    greeting = "Good Morning! ☀️";
                } else if (rawHours < 17) {
                    greeting = "Good Afternoon! 🌤️";
                } else {
                    greeting = "Good Evening! 🌙";
                }
                greetingEl.textContent = greeting;
            }
        }

        tick();
        if (window._liveClockInterval) {
            clearInterval(window._liveClockInterval);
        }
        window._liveClockInterval = setInterval(tick, 1000);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initLiveClock);
    } else {
        initLiveClock();
    }
})();
</script>
