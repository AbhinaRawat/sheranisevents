<?php
session_start();

// Email configuration
$to_email = "contact@sheranisevents.in";
$subject_prefix = "Contact Form: ";

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name']    ?? '');
    $email   = trim($_POST['email']   ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $errors = [];
    if (empty($name))    $errors[] = "Name is required";
    if (empty($email))   $errors[] = "Email is required";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format";
    if (empty($subject)) $errors[] = "Subject is required";
    if (empty($message)) $errors[] = "Message is required";

    if (empty($errors)) {
        $headers  = "From: noreply@sheranisevents.in\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";

        if (mail($to_email, $subject_prefix . $subject, $body, $headers)) {
            $success_message = "Thank you, $name! Your message has been sent. We'll get back to you shortly.";
        } else {
            $errors[] = "Failed to send message. Please try again or email us directly.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | SheranisEvents Pvt. Ltd.</title>
    <meta name="description" content="Get in touch with Sheranis Events for event management, celebrity management, weddings, corporate events and more across India.">
    <link rel="canonical" href="https://sheranisevents.in/contact">
    <?php include 'header_tags.php'; ?>

    <link href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body { font-family: 'Muli', sans-serif; background: #fff; color: #0b213d; }

        /* ── HERO BANNER ── */
        .contact-hero {
            background: #0b213d;
            padding: 80px 40px 70px;
            height:80%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .contact-hero::before {
            content: '';
            position: absolute; inset: 0;
            background: repeating-linear-gradient(
                45deg, transparent, transparent 60px,
                rgba(255,255,255,0.025) 60px, rgba(255,255,255,0.025) 61px
            );
        }
        .contact-hero .eyebrow {
            display: inline-flex; align-items: center; gap: 10px;
            font-size: 11px; font-weight: 700; letter-spacing: 3px;
            text-transform: uppercase; color: rgba(255,255,255,0.4);
            font-style: italic; margin-bottom: 18px;
        }
        .contact-hero .eyebrow span { display: block; width: 26px; height: 1px; background: rgba(255,255,255,0.25); }
        .contact-hero h1 {
            font-size: clamp(1.8rem, 4vw, 3rem);
            font-weight: 900; color: #fff;
            letter-spacing: -1px; line-height: 1.1;
            margin-bottom: 16px;
        }
        .contact-hero p {
            color: rgba(255,255,255,0.55); font-size: 15px;
            line-height: 26px; max-width: 520px; margin: 0 auto;
        }

        /* ── MAIN WRAP ── */
        .contact-wrap {
            max-width: 1100px;
            margin: 0 auto;
            padding: 70px 40px 100px;
            display: grid;
            grid-template-columns: 380px 1fr;
            gap: 60px;
            align-items: start;
        }

        /* ── LEFT: INFO PANEL ── */
        .info-panel {
            background: #0b213d;
            padding: 44px 36px;
            border-radius: 3px;
            position: sticky;
            top: 100px;
        }
        .info-panel-label {
            font-size: 10px; font-weight: 800; letter-spacing: 3px;
            text-transform: uppercase; color: rgba(200,216,240,0.4);
            font-style: italic; margin-bottom: 22px;
        }
        .info-panel h2 {
            font-size: 1.6rem; font-weight: 900;
            color: #fff; letter-spacing: -0.5px;
            line-height: 1.15; margin-bottom: 14px;
        }
        .info-panel .tagline {
            font-size: 14px; line-height: 24px;
            color: rgba(255,255,255,0.5); margin-bottom: 36px;
        }

        .info-item {
            display: flex; align-items: flex-start; gap: 14px;
            padding: 18px 0;
            border-bottom: 1px solid rgba(200,216,240,0.08);
        }
        .info-item:last-of-type { border-bottom: none; }
        .info-icon {
            width: 38px; height: 38px; border-radius: 3px;
            background: rgba(255,255,255,0.07);
            display: flex; align-items: center; justify-content: center; flex-shrink: 0;
        }
        .info-icon svg { width: 16px; height: 16px; stroke: rgba(200,216,240,0.7); fill: none; stroke-width: 1.8; stroke-linecap: round; stroke-linejoin: round; }
        .info-text strong {
            display: block; font-size: 11px; font-weight: 800;
            letter-spacing: 2px; text-transform: uppercase;
            color: rgba(255,255,255,0.4); font-style: italic; margin-bottom: 4px;
        }
        .info-text a, .info-text span {
            font-size: 14px; color: #fff; font-weight: 500;
            text-decoration: none; line-height: 1.6;
            display: block;
        }
        .info-text a:hover { color: #c8d8f0; }
        .info-text .note {
            font-size: 12px; color: rgba(255,255,255,0.4);
            font-style: italic; margin-top: 2px;
        }

        /* ── RIGHT: FORM PANEL ── */
        .form-panel {
            background: #f4f7fb;
            padding: 44px 40px;
            border-radius: 3px;
        }

        .label-row {
            display: flex; align-items: center; gap: 10px; margin-bottom: 18px;
        }
        .label-line { width: 26px; height: 2px; background: #0b213d; }
        .label-text {
            font-size: 11px; font-weight: 700; letter-spacing: 2.8px;
            color: #aaa; text-transform: uppercase; font-style: italic;
        }

        .form-panel h3 {
            font-size: 1.6rem; font-weight: 900;
            color: #0b213d; letter-spacing: -0.5px;
            margin-bottom: 28px; line-height: 1.2;
        }

        /* alerts */
        .alert {
            padding: 14px 18px; border-radius: 3px;
            font-size: 14px; line-height: 22px;
            margin-bottom: 24px; font-weight: 500;
        }
        .alert-success { background: #dde6f7; color: #0b213d; border-left: 3px solid #0b213d; }
        .alert-error   { background: #fdecea; color: #8b1a1a; border-left: 3px solid #c0392b; }
        .alert ul { padding-left: 16px; margin: 0; }
        .alert ul li { margin-bottom: 4px; }

        /* fields */
        .form-row {
            display: grid; grid-template-columns: 1fr 1fr; gap: 20px;
            margin-bottom: 20px;
        }
        .form-group { margin-bottom: 20px; }
        .form-group label {
            display: block; font-size: 11px; font-weight: 800;
            letter-spacing: 2px; text-transform: uppercase;
            color: #0b213d; margin-bottom: 8px; font-style: italic;
        }
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%; background: #fff;
            border: 1.5px solid #e5e5e5;
            border-radius: 3px; padding: 13px 16px;
            font-size: 14px; font-family: 'Muli', sans-serif;
            color: #0b213d; outline: none;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }
        .form-group input::placeholder,
        .form-group textarea::placeholder { color: #b0b8c4; }
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #0b213d;
            box-shadow: 0 0 0 3px rgba(11,33,61,0.07);
        }
        .form-group textarea { min-height: 160px; resize: vertical; line-height: 22px; }

        /* submit */
        .submit-btn {
            display: inline-flex; align-items: center; gap: 8px;
            background: #0b213d; color: #fff;
            font-size: 11px; font-weight: 800;
            letter-spacing: 2.5px; text-transform: uppercase;
            font-family: 'Muli', sans-serif;
            padding: 14px 28px; border: 1.5px solid #0b213d;
            border-radius: 3px; cursor: pointer;
            transition: all 0.4s ease; margin-top: 6px;
        }
        .submit-btn:hover { background: transparent; color: #0b213d; }
        .submit-btn svg { width: 13px; height: 13px; stroke: currentColor; fill: none; stroke-width: 2.5; stroke-linecap: round; stroke-linejoin: round; transition: margin 0.3s; }
        .submit-btn:hover svg { margin-left: 4px; }

        /* ── ANIMATIONS ── */
        .contact-hero { animation: fadeUp 0.5s both; }
        .contact-wrap  { animation: fadeUp 0.6s 0.1s both; }
        @keyframes fadeUp {
            from { opacity:0; transform:translateY(20px); }
            to   { opacity:1; transform:translateY(0); }
        }

        /* ── RESPONSIVE ── */
        @media (max-width: 900px) {
            .contact-wrap { grid-template-columns: 1fr; gap: 36px; }
            .info-panel { position: static; }
        }
        @media (max-width: 600px) {
            .contact-hero { padding: 60px 24px 52px; }
            .contact-wrap { padding: 50px 20px 70px; }
            .form-panel   { padding: 32px 24px; }
            .info-panel   { padding: 32px 24px; }
            .form-row     { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WWJGPM2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <script>window.fbAsyncInit=function(){FB.init({appId:"529199785767076",xfbml:!0,version:"v16.0"}),FB.AppEvents.logPageView()},function(e,n,t){var o,s=e.getElementsByTagName(n)[0];e.getElementById(t)||((o=e.createElement(n)).id=t,o.src="https://connect.facebook.net/en_US/sdk.js",s.parentNode.insertBefore(o,s))}(document,"script","facebook-jssdk");</script>
    <div id="fb-root"></div>
    <div id="wrapper">

        <!-- Navigation Bar -->
        <header id="header" class="sticky-header" style="backdrop-filter: saturate(180%) blur(20px); background: rgb(255,255,255,0.7); box-shadow: 0 0 7px 2px #838383;">
            <div class=max-container>
                <strong class=logo><a href=index><span class=img><img src=lib/images/logo.png alt=SHERANISEVENTS></span></a></strong>
                <div class=align-right>
                    <nav class="navbar navbar-default">
                        <div class=container-fluid>
                            <div class=navbar-header>
                                <button type=button class="navbar-toggle collapsed" data-toggle=collapse data-target=#bs-example-navbar-collapse-1 aria-expanded=false>
                                    <span class=sr-only>Toggle navigation</span>
                                    <span class=icon-bar></span><span class=icon-bar></span><span class=icon-bar></span>
                                </button>
                            </div>
                            <div class="collapse navbar-collapse" id=bs-example-navbar-collapse-1>
                                <ul class="nav navbar-nav" id=nav-smooth>
                                    <li><a href=index class=smoothanchor>Home</a></li>
                                    <li><a href=aboutus class=smoothanchor>About Us</a></li>
                                    <li><a href=index#section2 class=smoothanchor>Services</a></li>
                                    <li><a href=gallery class=smoothanchor>Gallery</a></li>
                                    <li><a href=blog class=smoothanchor>Blog</a></li>
                                    <li><a href=team class=smoothanchor>Team</a></li>
                                    <li><a href=contact class=smoothanchor>Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class=search-area>
                        <div class=search-box><a href=tel:+919934447200 class=mail><i class="fas fa-phone-square"></i><span>Call</span></a></div>
                        <a href=mailto:contact@sheranisevents.in class=mail><i class="fas fa-envelope"></i><span>mail</span></a>
                    </div>
                </div>
            </div>
        </header>

        <main id="main">

            <!-- Hero -->
            <div class="contact-hero">
                <div class="eyebrow"><span></span>Sheranis Events Pvt. Ltd.<span></span></div>
                <h1>Get In Touch</h1>
                <p>Have an event in mind? Tell us about it. We'd love to hear from you and help make it extraordinary.</p>
            </div>

            <!-- Main Grid -->
            <div class="contact-wrap">

                <!-- LEFT: Contact Info -->
                <div class="info-panel">
                    <div class="info-panel-label">Reach Us At</div>
                    <h2>Let's Create Something Great Together</h2>
                    <p class="tagline">Reach out through any of the channels below and our team will respond promptly.</p>

                    <div class="info-item">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.59 3.35 2 2 0 0 1 3.56 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.54a16 16 0 0 0 6 6l.91-.91a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.73 16z"/></svg>
                        </div>
                        <div class="info-text">
                            <strong>Phone</strong>
                            <a href="tel:+919934447200">+91 99344 47200</a>
                            <span class="note">Mon – Sat, 10am – 7pm IST</span>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div class="info-text">
                            <strong>Email</strong>
                            <a href="mailto:contact@sheranisevents.in">contact@sheranisevents.in</a>
                            <span class="note">We respond within 24 hours</span>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                        </div>
                        <div class="info-text">
                            <strong>Based In</strong>
                            <span>Patna, Bihar</span>
                            <span class="note">Serving clients Pan India</span>
                        </div>
                    </div>

                    <div class="info-item">
                        <div class="info-icon">
                            <svg viewBox="0 0 24 24"><path d="M21 2H3v16h5l3 3 3-3h7z"/></svg>
                        </div>
                        <div class="info-text">
                            <strong>WhatsApp</strong>
                            <a href="https://wa.me/919934447200" target="_blank" rel="noopener">+91 99344 47200</a>
                            <span class="note">Quick queries welcome</span>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Form -->
                <div class="form-panel">
                    <div class="label-row">
                        <div class="label-line"></div>
                        <span class="label-text">Send a Message</span>
                    </div>
                    <h3>Tell Us About Your Event</h3>

                    <?php if (!empty($errors)): ?>
                    <div class="alert alert-error">
                        <ul>
                            <?php foreach ($errors as $e): ?>
                            <li><?php echo htmlspecialchars($e); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php elseif (isset($success_message)): ?>
                    <div class="alert alert-success">
                        <?php echo htmlspecialchars($success_message); ?>
                    </div>
                    <?php endif; ?>

                    <form method="POST" action="">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="name" name="name"
                                    value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"
                                    placeholder="Your full name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email"
                                    value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
                                    placeholder="your@email.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject / Event Type</label>
                            <input type="text" id="subject" name="subject"
                                value="<?php echo isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : ''; ?>"
                                placeholder="e.g. Corporate Event, Wedding, Celebrity Booking…" required>
                        </div>

                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" placeholder="Tell us about your event — date, location, scale, and anything else that would help us understand your vision." required><?php echo isset($_POST['message']) ? htmlspecialchars($_POST['message']) : ''; ?></textarea>
                        </div>

                        <button type="submit" class="submit-btn">
                            Send Message
                            <svg viewBox="0 0 24 24"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
                        </button>
                    </form>
                </div>

            </div>
        </main>

        <?php include 'footer.php'; ?>

    </div>
    <script src="js/javascript.js"></script>
</body>
</html>