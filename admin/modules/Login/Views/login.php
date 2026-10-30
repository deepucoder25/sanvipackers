<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel &mdash; <?=date("D d M Y")?></title>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* ── Animated 3D Gradient Background ── */
        body {
            font-family: 'Outfit', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #0a0e1a;
            overflow: hidden;
            position: relative;
        }

        /* Animated gradient orbs */
        body::before,
        body::after {
            content: '';
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            animation: float 8s ease-in-out infinite;
            z-index: 0;
        }

        body::before {
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.35) 0%, rgba(168, 85, 247, 0.2) 50%, transparent 70%);
            top: -150px;
            left: -150px;
            animation-delay: 0s;
        }

        body::after {
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(6, 182, 212, 0.3) 0%, rgba(59, 130, 246, 0.2) 50%, transparent 70%);
            bottom: -100px;
            right: -100px;
            animation-delay: -4s;
        }

        /* Third orb */
        .bg-orb {
            position: fixed;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            filter: blur(70px);
            background: radial-gradient(circle, rgba(236, 72, 153, 0.2) 0%, transparent 70%);
            bottom: 10%;
            left: 20%;
            animation: float 10s ease-in-out infinite;
            animation-delay: -2s;
            z-index: 0;
        }

        @keyframes float {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33%       { transform: translate(30px, -30px) scale(1.05); }
            66%       { transform: translate(-20px, 20px) scale(0.95); }
        }

        /* ── Grid overlay for depth effect ── */
        .grid-overlay {
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
            background-size: 50px 50px;
            z-index: 0;
        }

        /* ── Login Card ── */
        .login-wrapper {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 440px;
            padding: 20px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 28px;
            padding: 52px 44px;
            box-shadow:
                0 0 0 1px rgba(255,255,255,0.05),
                0 40px 80px -20px rgba(0, 0, 0, 0.6),
                inset 0 1px 0 rgba(255,255,255,0.1);
            animation: slideUp 0.7s cubic-bezier(0.22, 1, 0.36, 1);
            transform-style: preserve-3d;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(40px) scale(0.97);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* ── Header Icon (no logo) ── */
        .login-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 28px;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #06b6d4 100%);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow:
                0 8px 24px rgba(99, 102, 241, 0.4),
                0 0 0 1px rgba(255,255,255,0.1),
                inset 0 1px 0 rgba(255,255,255,0.2);
            transform: perspective(400px) rotateX(0deg);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .login-icon:hover {
            transform: perspective(400px) rotateX(-10deg) translateY(-4px);
            box-shadow:
                0 16px 32px rgba(99, 102, 241, 0.5),
                0 0 0 1px rgba(255,255,255,0.15),
                inset 0 1px 0 rgba(255,255,255,0.25);
        }

        .login-icon i {
            font-size: 28px;
            color: #fff;
        }

        /* ── Welcome Text ── */
        .welcome-text {
            text-align: center;
            margin-bottom: 36px;
        }

        .welcome-text h2 {
            font-size: 26px;
            font-weight: 700;
            color: #ffffff;
            letter-spacing: -0.5px;
            margin-bottom: 6px;
            background: linear-gradient(135deg, #fff 0%, rgba(255,255,255,0.7) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .welcome-text p {
            font-size: 13.5px;
            color: rgba(255,255,255,0.45);
            font-weight: 400;
            letter-spacing: 0.3px;
        }

        /* ── Alert ── */
        .alert {
            border-radius: 14px;
            padding: 13px 16px;
            margin-bottom: 28px;
            font-size: 13px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
            border: 1px solid transparent;
        }

        .alert-danger {
            background: rgba(239, 68, 68, 0.1);
            color: #fca5a5;
            border-color: rgba(239, 68, 68, 0.2);
        }

        .alert-info {
            background: rgba(99, 102, 241, 0.08);
            color: rgba(165, 180, 252, 0.9);
            border-color: rgba(99, 102, 241, 0.2);
        }

        .alert-warning {
            background: rgba(245, 158, 11, 0.1);
            color: #fcd34d;
            border-color: rgba(245, 158, 11, 0.2);
        }

        /* ── Form ── */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            color: rgba(255,255,255,0.55);
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            margin-bottom: 10px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i.input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255,255,255,0.3);
            font-size: 17px;
            transition: color 0.3s ease;
            pointer-events: none;
        }

        .form-control {
            width: 100%;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 14px;
            padding: 15px 16px 15px 46px;
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            font-size: 15px;
            transition: all 0.3s ease;
        }

        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.25);
        }

        .form-control:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.09);
            border-color: rgba(99, 102, 241, 0.6);
            box-shadow:
                0 0 0 4px rgba(99, 102, 241, 0.12),
                0 1px 3px rgba(0,0,0,0.2);
        }

        .form-control:focus ~ i.input-icon {
            color: #818cf8;
        }

        /* Password toggle */
        .toggle-pass {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255,255,255,0.3);
            cursor: pointer;
            font-size: 17px;
            transition: color 0.3s;
            background: none;
            border: none;
        }

        .toggle-pass:hover {
            color: rgba(255,255,255,0.7);
        }

        /* ── Submit Button ── */
        .btn-submit {
            width: 100%;
            position: relative;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #06b6d4 100%);
            background-size: 200% 200%;
            color: white;
            border: none;
            border-radius: 14px;
            padding: 16px;
            font-family: 'Outfit', sans-serif;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 0.8px;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow:
                0 8px 24px rgba(99, 102, 241, 0.35),
                0 1px 0 rgba(255,255,255,0.1) inset;
            margin-top: 12px;
            overflow: hidden;
        }

        .btn-submit::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(255,255,255,0.15) 0%, transparent 50%);
            border-radius: 14px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow:
                0 16px 36px rgba(99, 102, 241, 0.45),
                0 1px 0 rgba(255,255,255,0.15) inset;
            background-position: right center;
        }

        .btn-submit:hover::before {
            opacity: 1;
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Loading state */
        .btn-submit.loading {
            pointer-events: none;
            color: transparent;
        }

        .btn-submit.loading::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            top: 50%; left: 50%;
            margin: -10px 0 0 -10px;
            border: 2.5px solid rgba(255,255,255,0.3);
            border-top-color: #ffffff;
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* ── Footer ── */
        .security-footer {
            margin-top: 28px;
            text-align: center;
            font-size: 12px;
            color: rgba(255, 255, 255, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .security-footer i {
            color: #34d399;
            font-size: 13px;
        }

        /* ── Responsive ── */
        @media (max-width: 480px) {
            .login-card {
                padding: 40px 28px;
            }
            .welcome-text h2 {
                font-size: 22px;
            }
        }
    </style>
</head>
<body>

    <div class="bg-orb"></div>
    <div class="grid-overlay"></div>

    <div class="login-wrapper">
        <div class="login-card">

            <!-- Icon (no logo) -->
            <div class="login-icon">
                <i class="bi bi-shield-lock"></i>
            </div>

            <!-- Heading -->
            <div class="welcome-text">
                <h2>Admin Panel</h2>
                <p>Enter your credentials to continue</p>
            </div>

            <!-- Alerts -->
            <?php
            $error = validation_errors();
            if (isset($msg)) {
                echo '<div class="alert alert-danger"><i class="bi bi-exclamation-circle"></i> ' . $msg . '</div>';
            } elseif (!$error) {
                echo '<div class="alert alert-info"><i class="bi bi-info-circle"></i> Please login to continue.</div>';
            } else {
                echo '<div class="alert alert-warning"><i class="bi bi-exclamation-triangle"></i> ' . $error . '</div>';
            }
            ?>

            <!-- Form -->
            <form action="<?=site_url('admin/login/check');?>" method="post" id="loginForm">

                <div class="form-group">
                    <label for="username">Username</label>
                    <div class="input-wrapper">
                        <input
                            type="text"
                            class="form-control"
                            name="user"
                            id="username"
                            autofocus
                            value="<?=set_value('username');?>"
                            placeholder="Enter your username"
                            required
                        />
                        <i class="bi bi-person input-icon"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <input
                            type="password"
                            class="form-control"
                            name="pass"
                            id="password"
                            placeholder="Enter your password"
                            required
                        />
                        <i class="bi bi-lock input-icon"></i>
                        <button type="button" class="toggle-pass" id="togglePass" tabindex="-1">
                            <i class="bi bi-eye-slash" id="toggleIcon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn-submit" id="submitBtn">
                    Sign In &nbsp;<i class="bi bi-arrow-right-short"></i>
                </button>

            </form>

            <div class="security-footer">
                <i class="bi bi-shield-check"></i> 256-bit Encrypted Secure Connection
            </div>

        </div>
    </div>

    <script>
        // Form submit loading state
        document.getElementById('loginForm').addEventListener('submit', function () {
            document.getElementById('submitBtn').classList.add('loading');
        });

        // Password toggle
        document.getElementById('togglePass').addEventListener('click', function () {
            var pwd  = document.getElementById('password');
            var icon = document.getElementById('toggleIcon');
            if (pwd.type === 'password') {
                pwd.type = 'text';
                icon.className = 'bi bi-eye';
            } else {
                pwd.type = 'password';
                icon.className = 'bi bi-eye-slash';
            }
        });

        // Subtle 3D tilt on card hover
        var card = document.querySelector('.login-card');
        card.addEventListener('mousemove', function (e) {
            var rect   = card.getBoundingClientRect();
            var x      = e.clientX - rect.left - rect.width / 2;
            var y      = e.clientY - rect.top  - rect.height / 2;
            var rotateX = -(y / rect.height) * 6;
            var rotateY =  (x / rect.width)  * 6;
            card.style.transform = 'perspective(1000px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)';
        });
        card.addEventListener('mouseleave', function () {
            card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg)';
            card.style.transition = 'transform 0.5s ease';
        });
        card.addEventListener('mouseenter', function () {
            card.style.transition = 'transform 0.1s ease';
        });
    </script>

</body>
</html>
