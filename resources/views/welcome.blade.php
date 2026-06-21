<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenKeeper — Effortless Gardens & Outdoor Spaces</title>
    <meta name="description"
        content="Professional garden design, landscaping, and outdoor care services. From seasonal upkeep to full-scale transformations.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&family=Inter:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <style>
        /* ============================================
           RESET & BASE
           ============================================ */
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --green-dark: #1B3B2B;
            --green-mid: #2d5a2d;
            --green-accent: #6BBF59;
            --green-light: #78c267;
            --green-text: #4a7c3f;
            --sand: #e8dcc8;
            --sand-light: #f0e6d3;
            --cream: #FAF7F2;
            --cream-bg: #f5f0ea;
            --text-dark: #1a2e1a;
            --text-body: #4a5a4a;
            --text-muted: #7a8a7a;
            --white: #ffffff;
            --font-serif: 'Playfair Display', Georgia, serif;
            --font-sans: 'Inter', -apple-system, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-sans);
            color: var(--text-dark);
            background: var(--cream);
            line-height: 1.6;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 60px;
        }

        /* Section badge */
        .badge {
            display: inline-block;
            background: rgba(27, 59, 43, 0.85);
            color: var(--white);
            font-family: var(--font-sans);
            font-size: 14px;
            font-weight: 500;
            padding: 8px 20px;
            border-radius: 30px;
            letter-spacing: 0.5px;
        }

        /* Section title */
        .section-title {
            font-family: var(--font-serif);
            font-weight: 700;
            line-height: 1.15;
            color: var(--text-dark);
        }

        .section-title .accent {
            color: var(--green-light);
            font-style: italic;
        }

        .section-subtitle {
            font-family: var(--font-sans);
            color: var(--text-body);
            font-size: 18px;
            font-weight: 400;
            line-height: 1.6;
        }

        /* ============================================
           HEADER / NAVIGATION
           ============================================ */
        .header {
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 1000;
            transition: all 0.4s ease;
        }

        .nav-container {
            display: flex;
            align-items: center;
            gap: 40px;
            padding: 14px 36px;
            background: rgba(255, 255, 255, 0);
            backdrop-filter: none;
            -webkit-backdrop-filter: none;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0);
            box-shadow: none;
            transition: background 0.5s ease, backdrop-filter 0.5s ease, box-shadow 0.5s ease, border-color 0.5s ease;
        }

        .nav-container.scrolled {
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.08);
        }

        .nav-links {
            display: flex;
            gap: 28px;
        }

        .nav-link span {
            display: block;
            transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .nav-link:hover span:first-child {
            transform: translateY(-100%);
        }

        .nav-link:hover span:last-child {
            transform: translateY(-100%);
        }

        .nav-logo {
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: var(--font-serif);
            font-size: 22px;
            font-weight: 700;
            color: var(--white);
            white-space: nowrap;
            transition: color 0.5s ease;
        }

        .nav-logo svg {
            width: 28px;
            height: 28px;
        }

        .nav-container.scrolled .nav-logo {
            color: var(--green-mid);
        }

        .nav-container.scrolled .nav-logo svg circle,
        .nav-container.scrolled .nav-logo svg ellipse {
            fill: #4a7c3f !important;
        }

        .nav-link {
            font-family: var(--font-sans);
            font-size: 15px;
            font-weight: 400;
            color: rgba(255, 255, 255, 0.9);
            position: relative;
            overflow: hidden;
            height: 20px;
            display: flex;
            flex-direction: column;
            cursor: pointer;
            transition: color 0.5s ease;
        }

        .nav-container.scrolled .nav-link {
            color: var(--text-dark);
        }

        /* ============================================
           HERO SECTION
           ============================================ */
        .hero {
            position: relative;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 120px 40px 60px;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .hero-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-bg::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg,
                    rgba(20, 45, 25, 0.75) 0%,
                    rgba(20, 45, 25, 0.6) 50%,
                    rgba(20, 45, 25, 0.85) 100%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
        }

        .hero-title {
            font-family: var(--font-serif);
            font-size: clamp(48px, 7vw, 90px);
            font-weight: 700;
            color: var(--white);
            line-height: 1.1;
            margin-bottom: 24px;
        }

        .hero-title .accent {
            color: var(--green-light);
            font-style: italic;
        }

        .hero-subtitle {
            font-family: var(--font-sans);
            font-size: 18px;
            color: rgba(255, 255, 255, 0.75);
            max-width: 550px;
            margin: 0 auto 40px;
            line-height: 1.7;
        }

        .hero-cta {
            display: inline-block;
            padding: 18px 48px;
            background: var(--green-accent);
            color: var(--text-dark);
            font-family: var(--font-sans);
            font-size: 16px;
            font-weight: 600;
            border-radius: 50px;
            border: none;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .hero-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(107, 191, 89, 0.3);
        }

        /* Hero scattered photos */
        .hero-photos {
            position: relative;
            z-index: 2;
            margin-top: 50px;
            display: flex;
            justify-content: center;
            gap: 16px;
        }

        .hero-photo {
            width: 200px;
            height: 260px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.3);
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .hero-photo:nth-child(1) {
            transform: rotate(-12deg) translateY(30px);
        }

        .hero-photo:nth-child(2) {
            transform: rotate(-4deg) translateY(-10px);
        }

        .hero-photo:nth-child(3) {
            transform: rotate(5deg) translateY(15px);
        }

        .hero-photo:nth-child(4) {
            transform: rotate(14deg) translateY(40px);
        }

        .hero-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* ============================================
           ABOUT SECTION
           ============================================ */
        .about {
            padding: 120px 40px;
            text-align: center;
            position: relative;
            overflow: hidden;
            background: var(--cream);
        }

        /* Decorative leaf watermarks */
        .about-leaf {
            position: absolute;
            opacity: 0.06;
            z-index: 0;
        }

        .about-leaf.left {
            left: -40px;
            top: 50%;
            transform: translateY(-50%);
            width: 300px;
        }

        .about-leaf.right {
            right: -40px;
            top: 50%;
            transform: translateY(-50%) scaleX(-1);
            width: 300px;
        }

        .about .badge {
            margin-bottom: 40px;
        }

        .about-text {
            font-family: var(--font-serif);
            font-size: clamp(28px, 4vw, 48px);
            font-weight: 600;
            line-height: 1.35;
            max-width: 1100px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
            color: var(--text-dark);
        }

        .about-text .word {
            display: inline-block;
            opacity: 0.2;
            transform: translateY(12px);
            transition: opacity 0.4s ease, transform 0.4s ease;
        }

        .about-text .word.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ============================================
           SERVICES SECTION
           ============================================ */
        .services {
            padding: 100px 40px;
            background: var(--cream);
        }

        .services-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 60px;
            flex-wrap: wrap;
            gap: 30px;
        }

        .services-header .section-title {
            font-size: clamp(36px, 4.5vw, 56px);
        }

        .services-header .badge {
            margin-bottom: 16px;
        }

        .services-cta {
            display: inline-block;
            padding: 16px 36px;
            background: var(--green-accent);
            color: var(--text-dark);
            font-family: var(--font-sans);
            font-size: 16px;
            font-weight: 600;
            border-radius: 50px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .services-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(107, 191, 89, 0.25);
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .service-card {
            background: var(--sand-light);
            border-radius: 24px;
            padding: 40px 32px 0;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            min-height: 440px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.08);
        }

        .service-icon {
            width: 42px;
            height: 42px;
            margin-bottom: 20px;
            color: var(--green-accent);
        }

        .service-card h3 {
            font-family: var(--font-serif);
            font-size: 26px;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 14px;
            line-height: 1.2;
        }

        .service-card p {
            font-size: 15px;
            color: var(--text-body);
            line-height: 1.6;
            margin-bottom: 24px;
        }

        /* Photo collage at bottom of service card */
        .service-photos {
            margin-top: auto;
            display: flex;
            justify-content: center;
            gap: 8px;
            padding-bottom: 0;
            position: relative;
            height: 140px;
        }

        .service-photos .sphoto {
            width: 110px;
            height: 130px;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            flex-shrink: 0;
        }

        .service-photos .sphoto:nth-child(1) {
            transform: rotate(-8deg) translateY(10px);
        }

        .service-photos .sphoto:nth-child(2) {
            transform: rotate(3deg) translateY(0);
        }

        .service-photos .sphoto:nth-child(3) {
            transform: rotate(10deg) translateY(15px);
        }

        .service-photos .sphoto img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* ============================================
           BEFORE & AFTER SECTION
           ============================================ */
        .before-after {
            padding: 100px 40px;
            background: var(--cream);
            text-align: center;
        }

        .before-after .section-title {
            font-size: clamp(36px, 4.5vw, 56px);
            margin: 24px 0 16px;
        }

        .before-after .section-subtitle {
            margin-bottom: 60px;
        }

        .ba-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            text-align: left;
        }

        .ba-card {
            background: var(--white);
            border-radius: 24px;
            overflow: hidden;
            padding: 24px 24px 36px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.04);
        }

        .ba-slider {
            position: relative;
            width: 100%;
            height: 300px;
            border-radius: 16px;
            overflow: hidden;
            margin-bottom: 28px;
            cursor: col-resize;
        }

        .ba-slider img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .ba-slider .ba-after {
            clip-path: inset(0 0 0 50%);
            transition: clip-path 0.1s;
        }

        .ba-slider .ba-handle {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            width: 3px;
            background: white;
            z-index: 3;
            transform: translateX(-50%);
        }

        .ba-slider .ba-handle::after {
            content: '⟨⟩';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            color: var(--text-dark);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
        }

        .ba-card h3 {
            font-family: var(--font-serif);
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .ba-card>p {
            font-size: 15px;
            color: var(--text-body);
            margin-bottom: 28px;
            line-height: 1.6;
        }

        .ba-lists {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
        }

        .ba-list h4 {
            font-family: var(--font-serif);
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 14px;
        }

        .ba-list-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 15px;
            color: var(--text-body);
            margin-bottom: 12px;
        }

        .ba-list-item .icon-x {
            color: var(--text-dark);
            font-weight: 700;
            font-size: 16px;
            opacity: 0.6;
        }

        .ba-list-item .icon-check {
            color: var(--green-accent);
            font-size: 18px;
        }

        /* ============================================
           PROCESS SECTION
           ============================================ */
        .process {
            padding: 100px 40px;
            background: var(--cream);
            position: relative;
            overflow: hidden;
        }

        .process-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: start;
        }

        .process-left .badge {
            margin-bottom: 20px;
        }

        .process-left .section-title {
            font-size: clamp(36px, 4.5vw, 56px);
            margin-bottom: 20px;
        }

        .process-left .section-subtitle {
            max-width: 400px;
        }

        .process-cards {
            position: relative;
            height: 500px;
        }

        .process-card {
            position: absolute;
            width: 85%;
            background: var(--sand-light);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.06);
            transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.5s ease, z-index 0s 0.25s;
            cursor: pointer;
        }

        .process-card:hover {
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.14);
            z-index: 10 !important;
        }

        .process-card:nth-child(1) {
            top: 0;
            left: 0;
            transform: rotate(-4deg);
            z-index: 3;
        }

        .process-card:nth-child(2) {
            top: 80px;
            left: 40px;
            transform: rotate(-1deg);
            z-index: 2;
        }

        .process-card:nth-child(3) {
            top: 160px;
            left: 80px;
            transform: rotate(2deg);
            z-index: 1;
        }

        .process-card .card-number {
            font-family: var(--font-serif);
            font-size: 64px;
            font-weight: 300;
            color: var(--green-accent);
            opacity: 0.3;
            line-height: 1;
            margin-bottom: 8px;
        }

        .process-card h3 {
            font-family: var(--font-serif);
            font-size: 24px;
            font-weight: 700;
            font-style: italic;
            margin-bottom: 10px;
        }

        .process-card p {
            font-size: 14px;
            color: var(--text-body);
            font-style: italic;
            line-height: 1.5;
        }

        /* Decorative leaf */
        .process-leaf {
            position: absolute;
            right: -80px;
            top: 50%;
            transform: translateY(-50%);
            width: 400px;
            opacity: 0.06;
            z-index: 0;
        }

        /* ============================================
           PROJECTS SECTION
           ============================================ */
        .projects {
            padding: 100px 40px;
            background: var(--cream);
            text-align: center;
        }

        .projects .section-title {
            font-size: clamp(36px, 4.5vw, 56px);
            margin: 24px 0 16px;
        }

        .projects .section-subtitle {
            margin-bottom: 60px;
        }

        .project-card {
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: var(--sand-light);
            border-radius: 30px;
            overflow: hidden;
            margin-bottom: 40px;
            text-align: left;
            position: relative;
        }

        .project-info {
            padding: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .project-info h3 {
            font-family: var(--font-serif);
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 12px;
            font-style: italic;
        }

        .project-info>p {
            font-size: 15px;
            color: var(--text-body);
            line-height: 1.6;
            margin-bottom: 24px;
        }

        .project-details {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
        }

        .project-details .label {
            font-family: var(--font-serif);
            font-weight: 700;
            font-size: 16px;
        }

        .project-tag {
            display: inline-block;
            padding: 8px 18px;
            border-radius: 30px;
            font-family: var(--font-serif);
            font-size: 15px;
            font-weight: 600;
            font-style: italic;
        }

        .project-tag.price {
            background: var(--green-accent);
            color: var(--text-dark);
        }

        .project-tag.duration {
            background: var(--green-dark);
            color: var(--white);
        }

        .project-checklist {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 12px 30px;
        }

        .project-checklist li {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 15px;
            color: var(--text-body);
        }

        .project-checklist .check-icon {
            color: var(--green-accent);
            font-size: 18px;
            flex-shrink: 0;
        }

        .project-image {
            position: relative;
            min-height: 400px;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Rotating badge on project card */
        .rotating-badge {
            position: absolute;
            top: -20px;
            right: -20px;
            width: 90px;
            height: 90px;
            z-index: 3;
        }

        .rotating-badge svg {
            animation: spin 15s linear infinite;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

        .projects-cta {
            display: inline-block;
            margin-top: 20px;
            padding: 18px 48px;
            background: var(--green-accent);
            color: var(--text-dark);
            font-family: var(--font-sans);
            font-size: 16px;
            font-weight: 600;
            border-radius: 50px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .projects-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(107, 191, 89, 0.25);
        }

        /* ============================================
           TESTIMONIALS SECTION
           ============================================ */
        .testimonials {
            padding: 100px 40px;
            background: var(--cream-bg);
        }

        .testimonials-layout {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 60px;
            align-items: start;
        }

        .testimonials-left .section-title {
            font-size: clamp(32px, 4vw, 48px);
            margin-bottom: 20px;
        }

        .testimonials-left .section-subtitle {
            margin-bottom: 30px;
            max-width: 380px;
        }

        .testimonials-left .services-cta {
            display: inline-block;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .testimonial-card {
            background: var(--sand-light);
            border-radius: 20px;
            padding: 28px;
        }

        .stars {
            color: var(--green-accent);
            font-size: 18px;
            margin-bottom: 16px;
            letter-spacing: 2px;
        }

        .testimonial-card blockquote {
            font-size: 15px;
            color: var(--text-body);
            line-height: 1.6;
            margin-bottom: 20px;
            font-style: normal;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .testimonial-avatar {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            overflow: hidden;
            background: var(--sand);
        }

        .testimonial-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-name {
            font-family: var(--font-serif);
            font-weight: 600;
            font-size: 16px;
        }

        .testimonial-role {
            font-size: 13px;
            color: var(--text-muted);
        }

        /* ============================================
           FAQ SECTION
           ============================================ */
        .faq {
            padding: 100px 40px;
            background: var(--cream);
            text-align: center;
        }

        .faq .section-title {
            font-size: clamp(36px, 4.5vw, 56px);
            margin: 24px 0 16px;
        }

        .faq .section-subtitle {
            margin-bottom: 50px;
        }

        .faq-list {
            max-width: 800px;
            margin: 0 auto;
            text-align: left;
        }

        .faq-item {
            background: var(--sand-light);
            border-radius: 16px;
            margin-bottom: 12px;
            overflow: hidden;
            transition: box-shadow 0.3s;
        }

        .faq-item:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 22px 28px;
            cursor: pointer;
            font-family: var(--font-serif);
            font-size: 18px;
            font-weight: 500;
            color: var(--text-dark);
            user-select: none;
        }

        .faq-icon {
            font-size: 24px;
            color: var(--green-accent);
            font-weight: 300;
            transition: transform 0.3s;
            flex-shrink: 0;
        }

        .faq-item.open .faq-icon {
            transform: rotate(45deg);
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, padding 0.4s ease;
        }

        .faq-item.open .faq-answer {
            max-height: 300px;
        }

        .faq-answer p {
            padding: 0 28px 22px;
            font-size: 15px;
            color: var(--text-body);
            line-height: 1.7;
        }

        /* ============================================
           CONTACT SECTION
           ============================================ */
        .contact {
            padding: 100px 40px;
            background: var(--cream-bg);
            text-align: center;
        }

        .contact .section-title {
            font-size: clamp(36px, 4.5vw, 56px);
            margin: 24px 0 16px;
        }

        .contact .section-subtitle {
            margin-bottom: 50px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            text-align: left;
            max-width: 1100px;
            margin: 0 auto;
        }

        .contact-form label {
            display: block;
            font-family: var(--font-sans);
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 8px;
            color: var(--text-dark);
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 14px 18px;
            background: var(--sand-light);
            border: 1px solid transparent;
            border-radius: 12px;
            font-family: var(--font-sans);
            font-size: 15px;
            color: var(--text-dark);
            margin-bottom: 20px;
            transition: border-color 0.3s, box-shadow 0.3s;
            outline: none;
        }

        .contact-form input:focus,
        .contact-form textarea:focus {
            border-color: var(--green-accent);
            box-shadow: 0 0 0 3px rgba(107, 191, 89, 0.15);
        }

        .contact-form input::placeholder,
        .contact-form textarea::placeholder {
            color: var(--text-muted);
        }

        .contact-form textarea {
            min-height: 120px;
            resize: vertical;
        }

        .contact-submit {
            width: 100%;
            padding: 16px;
            background: rgba(107, 191, 89, 0.3);
            color: var(--text-dark);
            border: none;
            border-radius: 12px;
            font-family: var(--font-sans);
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact-submit:hover {
            background: rgba(107, 191, 89, 0.5);
        }

        .contact-right {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-map {
            border-radius: 20px;
            overflow: hidden;
            flex: 1;
            min-height: 300px;
        }

        .contact-map iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        .contact-action {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 16px 28px;
            background: var(--green-dark);
            color: var(--white);
            border-radius: 50px;
            font-size: 16px;
            font-weight: 500;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .contact-action:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(27, 59, 43, 0.3);
        }

        .contact-action svg {
            width: 22px;
            height: 22px;
            flex-shrink: 0;
        }

        /* ============================================
           FOOTER
           ============================================ */
        .footer {
            position: relative;
            color: var(--white);
            overflow: hidden;
        }

        .footer-bg {
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .footer-bg img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .footer-bg::after {
            content: '';
            position: absolute;
            inset: 0;
            background: rgba(15, 35, 20, 0.85);
        }

        .footer-content {
            position: relative;
            z-index: 1;
            padding: 80px 60px 40px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-brand .nav-logo {
            color: var(--white);
            margin-bottom: 16px;
        }

        .footer-brand .nav-logo svg path {
            fill: var(--white);
        }

        .footer-brand p {
            font-size: 14px;
            color: rgba(255, 255, 255, 0.6);
            line-height: 1.7;
            max-width: 280px;
        }

        .footer-col h4 {
            font-family: var(--font-serif);
            font-size: 18px;
            font-weight: 600;
            font-style: italic;
            margin-bottom: 18px;
            color: var(--white);
        }

        .footer-col a {
            display: block;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.6);
            margin-bottom: 12px;
            transition: color 0.3s;
        }

        .footer-col a:hover {
            color: var(--white);
        }

        .footer-divider {
            width: 100%;
            height: 1px;
            background: rgba(255, 255, 255, 0.15);
            margin-bottom: 30px;
        }

        .footer-bottom {
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .footer-social {
            display: flex;
            gap: 18px;
        }

        .footer-social a {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.7);
            transition: color 0.3s;
        }

        .footer-social a:hover {
            color: var(--white);
        }

        .footer-social svg {
            width: 20px;
            height: 20px;
        }

        .footer-copy {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.5);
        }

        /* ============================================
           TESTIMONIALS MARQUEE
           ============================================ */
        .testimonials-marquee-wrapper {
            overflow: hidden;
            -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 6%, rgba(0,0,0,1) 94%, rgba(0,0,0,0) 100%);
            mask-image: linear-gradient(to right, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 6%, rgba(0,0,0,1) 94%, rgba(0,0,0,0) 100%);
        }

        .testimonials-marquee-wrapper + .testimonials-marquee-wrapper {
            margin-top: 16px;
        }

        .marquee-track {
            display: flex;
            gap: 16px;
            width: max-content;
            animation: marquee-left 40s linear infinite;
        }

        .marquee-track.reverse {
            animation: marquee-right 40s linear infinite;
        }

        .marquee-track:hover,
        .marquee-track.reverse:hover {
            animation-play-state: paused;
        }

        @keyframes marquee-left {
            0%   { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        @keyframes marquee-right {
            0%   { transform: translateX(-50%); }
            100% { transform: translateX(0); }
        }

        .marquee-card {
            flex-shrink: 0;
            width: 340px;
            background: var(--sand-light);
            border-radius: 16px;
            padding: 28px;
        }

        /* ============================================
           FLOATING HERO BADGE (spring from right)
           ============================================ */
        .hero-float-badge {
            position: absolute;
            bottom: 70px;
            right: calc((100vw - 900px) / 2 - 120px);
            background: rgba(255, 255, 255, 0.96);
            border-radius: 16px;
            padding: 18px 22px;
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.18);
            display: flex;
            align-items: center;
            gap: 14px;
            z-index: 3;
            opacity: 0;
            transform: translateX(150px);
            pointer-events: none;
        }

        .hero-float-badge .badge-icon {
            width: 44px;
            height: 44px;
            background: var(--green-accent);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .hero-float-badge .badge-icon svg {
            width: 22px;
            height: 22px;
            stroke: white;
        }

        .hero-float-badge .badge-text {
            display: flex;
            flex-direction: column;
        }

        .hero-float-badge .badge-label {
            font-family: var(--font-serif);
            font-size: 22px;
            font-weight: 700;
            color: var(--text-dark);
            line-height: 1.1;
        }

        .hero-float-badge .badge-sub {
            font-family: var(--font-sans);
            font-size: 12px;
            color: var(--text-muted);
            margin-top: 2px;
        }

        /* ============================================
           ANIMATIONS
           ============================================ */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Section headers: slide from left */
        .section-header-anim {
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .section-header-anim.visible {
            opacity: 1;
            transform: translateX(0);
        }

        /* ============================================
           RESPONSIVE
           ============================================ */
        @media (max-width: 1024px) {
            .container {
                padding: 0 30px;
            }

            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .testimonials-layout {
                grid-template-columns: 1fr;
            }

            .testimonials-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .project-card {
                grid-template-columns: 1fr;
            }

            .project-image {
                min-height: 300px;
            }

            .process-layout {
                grid-template-columns: 1fr;
            }

            .footer-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .ba-grid {
                grid-template-columns: 1fr;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .testimonials-grid {
                grid-template-columns: 1fr;
            }

            .hero-photos {
                flex-wrap: wrap;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
            }

            .project-checklist {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- ==================== HEADER ==================== -->
    <header class="header" id="header">
        <nav class="nav-container" id="navContainer">
            <div class="nav-links">
                <a href="#services" class="nav-link">
                    <span>Services</span><span>Services</span>
                </a>
                <a href="#process" class="nav-link">
                    <span>Process</span><span>Process</span>
                </a>
            </div>
            <a href="#" class="nav-logo">
                <svg viewBox="0 0 32 32" fill="none">
                    <circle cx="16" cy="16" r="5" fill="white" />
                    <ellipse cx="16" cy="7" rx="4" ry="6" fill="white" opacity="0.8" />
                    <ellipse cx="16" cy="25" rx="4" ry="6" fill="white" opacity="0.8" />
                    <ellipse cx="7" cy="16" rx="6" ry="4" fill="white" opacity="0.8" />
                    <ellipse cx="25" cy="16" rx="6" ry="4" fill="white" opacity="0.8" />
                    <ellipse cx="9.5" cy="9.5" rx="4" ry="5" transform="rotate(-45 9.5 9.5)" fill="white" opacity="0.7" />
                    <ellipse cx="22.5" cy="9.5" rx="4" ry="5" transform="rotate(45 22.5 9.5)" fill="white" opacity="0.7" />
                    <ellipse cx="9.5" cy="22.5" rx="4" ry="5" transform="rotate(45 9.5 22.5)" fill="white" opacity="0.7" />
                    <ellipse cx="22.5" cy="22.5" rx="4" ry="5" transform="rotate(-45 22.5 22.5)" fill="white" opacity="0.7" />
                </svg>
                GreenKeeper
            </a>
            <div class="nav-links">
                <a href="#projects" class="nav-link">
                    <span>Projects</span><span>Projects</span>
                </a>
                <a href="#contact" class="nav-link">
                    <span>Contact</span><span>Contact</span>
                </a>
            </div>
        </nav>
    </header>

    <!-- ==================== HERO ==================== -->
    <section class="hero" id="hero">
        <div class="hero-bg">
            <img src="https://framerusercontent.com/images/7zL4UuCcT3HWyPfvNKSKiFcZfw.jpg" alt="Lush green garden">
        </div>
        <div class="hero-content" id="heroContent">
            <h1 class="hero-title">
                Bangun <span class="accent">Karirmu</span>
                <br>Di Kota <span class="accent">Madiun</span>
            </h1>
            <p class="hero-subtitle">
                Platform resmi Pemerintah Kota Madiun. Ajukan permohonan magangmu secara praktis tanpa perlu repot
                registrasi akun, dan
                pantau status tiketmu secara real-time.
            </p>
            <a href="#contact" class="hero-cta">Isi Fomulir</a>
        </div>
        <div class="hero-photos" id="heroPhotos">
            <div class="hero-photo">
                <img src="https://framerusercontent.com/images/KFPHG08J6ON71BWYiyLOV1MJn8.jpg"
                    alt="Modern villa with sunny patio">
            </div>
            <div class="hero-photo">
                <img src="https://framerusercontent.com/images/juAKDspntDMWeb0FxUmZKpe55kU.jpg" alt="Landscaped home">
            </div>
            <div class="hero-photo">
                <img src="https://framerusercontent.com/images/nK6c97Wdku4CqiYPgwRI7lCM6r0.jpg"
                    alt="Beautiful outdoor space">
            </div>
            <div class="hero-photo">
                <img src="https://framerusercontent.com/images/EEzCKnSdAiY2y6qOhmZ17tO2KE.jpg" alt="Green landscape">
            </div>
        </div>

        <!-- Floating badge: spring-in from right (like template1 appear animation) -->
        <div class="hero-float-badge" id="heroFloatBadge">
            <div class="badge-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                </svg>
            </div>
            <div class="badge-text">
                <span class="badge-label">500+ Projects</span>
                <span class="badge-sub">Completed since 2010</span>
            </div>
        </div>
    </section>

    <!-- ==================== ABOUT ==================== -->
    <section class="about" id="about">
        <!-- Decorative leaves -->
        <svg class="about-leaf left" viewBox="0 0 200 300">
            <g fill="#c4a97d">
                <ellipse cx="100" cy="60" rx="50" ry="55" />
                <ellipse cx="55" cy="130" rx="45" ry="50" />
                <ellipse cx="140" cy="130" rx="45" ry="50" />
                <ellipse cx="75" cy="210" rx="40" ry="45" />
                <ellipse cx="130" cy="210" rx="40" ry="45" />
                <ellipse cx="100" cy="270" rx="35" ry="30" />
            </g>
        </svg>
        <svg class="about-leaf right" viewBox="0 0 200 300">
            <g fill="#c4a97d">
                <ellipse cx="100" cy="60" rx="50" ry="55" />
                <ellipse cx="55" cy="130" rx="45" ry="50" />
                <ellipse cx="140" cy="130" rx="45" ry="50" />
                <ellipse cx="75" cy="210" rx="40" ry="45" />
                <ellipse cx="130" cy="210" rx="40" ry="45" />
                <ellipse cx="100" cy="270" rx="35" ry="30" />
            </g>
        </svg>

        <span class="badge">~ About ~</span>
        <p class="about-text" id="aboutText">
            Program magang terpadu Pemerintah Kota Madiun dirancang untuk memberikan pengalaman kerja nyata kepada siswa
            dan
            mahasiswa. Kami membuka kesempatan luas di berbagai Organisasi Perangkat Daerah (OPD) untuk mengembangkan
            kompetensi
            teknis, inovasi, dan wawasan pelayanan publik yang unggul.
        </p>
    </section>

    <!-- ==================== SERVICES ==================== -->
    <section class="services" id="services">
        <div class="container">
            <div class="services-header">
                <div>
                    <span class="badge">~ Services ~</span>
                    <h2 class="section-title" style="margin-top:16px;">
                        Services that cover<br><span class="accent">every inch</span> outdoors.
                    </h2>
                    <p class="section-subtitle" style="margin-top:12px;">Tailored plans for homes and small commercial
                        sites.</p>
                </div>
                <a href="#contact" class="services-cta">Get a Free Quote</a>
            </div>

            <div class="services-grid">
                <!-- Card 1 -->
                <div class="service-card reveal">
                    <svg class="service-icon" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="20" cy="20" r="8" />
                        <line x1="20" y1="4" x2="20" y2="10" />
                        <line x1="20" y1="30" x2="20" y2="36" />
                        <line x1="4" y1="20" x2="10" y2="20" />
                        <line x1="30" y1="20" x2="36" y2="20" />
                        <line x1="9" y1="9" x2="13" y2="13" />
                        <line x1="27" y1="27" x2="31" y2="31" />
                        <line x1="31" y1="9" x2="27" y2="13" />
                        <line x1="13" y1="27" x2="9" y2="31" />
                    </svg>
                    <h3>Seasonal Cleanup<br>& Refresh</h3>
                    <p>Clear debris and overgrowth to keep your landscape neat, healthy, and ready for every season.</p>
                    <div class="service-photos">
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/IlDKTaYFDT0rnhH3TH2vkwiE6k.jpg" alt="">
                        </div>
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/mFES1eZkrFzY9BwlR7ESTDfaN0.jpg" alt=""></div>
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/n20syXjaBfLfJGGl724hcFyDI.jpg" alt="">
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="service-card reveal">
                    <svg class="service-icon" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20 8c-4 0-8 3-8 8s4 6 8 6 8-2 8-6-4-8-8-8z" />
                        <line x1="20" y1="22" x2="20" y2="36" />
                    </svg>
                    <h3>Lawn Care<br>& Maintenance</h3>
                    <p>Keep your lawn green, tidy, and well maintained with care plans suited to your space and budget.
                    </p>
                    <div class="service-photos">
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/GLq9RF27QjrHXF5d6r0LNwFjifc.jpg" alt="">
                        </div>
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/DcluTA5h91RJqbvDat1nIksO88.jpg" alt="">
                        </div>
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/Zry6AhM3gwGueTkif2F5Gy7UT8.jpg" alt="">
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="service-card reveal">
                    <svg class="service-icon" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 28l8-20 8 20" />
                        <line x1="14" y1="24" x2="26" y2="24" />
                        <rect x="18" y="28" width="4" height="8" />
                    </svg>
                    <h3>Hardscaping<br>& Patios</h3>
                    <p>Add structure and function with patios and hardscape features that complement your outdoor space.
                    </p>
                    <div class="service-photos">
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/WEmlZ3bLEF8ST5KUZzM4i68r6w.jpg" alt="">
                        </div>
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/8Ijh7cpgeWBwDhYUNRliamcH5A.jpg" alt="">
                        </div>
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/JTMrqQb9wc8DfONkiAzBL2lublc.jpg" alt="">
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="service-card reveal">
                    <svg class="service-icon" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M20 6c0 0-6 4-6 10s6 10 6 10" />
                        <path d="M20 6c0 0 6 4 6 10s-6 10-6 10" />
                        <line x1="20" y1="26" x2="20" y2="36" />
                    </svg>
                    <h3>Irrigation<br>& Drainage</h3>
                    <p>Support healthy growth with water systems that improve balance, drainage, and long-term care.</p>
                    <div class="service-photos">
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/e0kKzsf1ZNZJlAitxGPazudJc.jpg" alt="">
                        </div>
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/IlDKTaYFDT0rnhH3TH2vkwiE6k.jpg" alt="">
                        </div>
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/mFES1eZkrFzY9BwlR7ESTDfaN0.jpg" alt=""></div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="service-card reveal">
                    <svg class="service-icon" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="20" cy="16" r="6" />
                        <circle cx="14" cy="22" r="5" />
                        <circle cx="26" cy="22" r="5" />
                        <circle cx="17" cy="28" r="4" />
                        <circle cx="23" cy="28" r="4" />
                    </svg>
                    <h3>Garden Design<br>& Planting</h3>
                    <p>Create inviting garden spaces with thoughtful planting plans full of texture, color, and balance.
                    </p>
                    <div class="service-photos">
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/n20syXjaBfLfJGGl724hcFyDI.jpg" alt="">
                        </div>
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/GLq9RF27QjrHXF5d6r0LNwFjifc.jpg" alt="">
                        </div>
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/DcluTA5h91RJqbvDat1nIksO88.jpg" alt="">
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="service-card reveal">
                    <svg class="service-icon" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5">
                        <line x1="20" y1="36" x2="20" y2="12" />
                        <path d="M14 18l6-6 6 6" />
                        <path d="M10 14l4-6" />
                        <path d="M30 14l-4-6" />
                        <path d="M12 22l-4-4" />
                        <path d="M28 22l4-4" />
                    </svg>
                    <h3>Tree Health<br>& Pruning</h3>
                    <p>Maintain healthy trees with pruning and care that supports shape, safety, and steady growth.</p>
                    <div class="service-photos">
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/Zry6AhM3gwGueTkif2F5Gy7UT8.jpg" alt="">
                        </div>
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/WEmlZ3bLEF8ST5KUZzM4i68r6w.jpg" alt="">
                        </div>
                        <div class="sphoto"><img
                                src="https://framerusercontent.com/images/IlDKTaYFDT0rnhH3TH2vkwiE6k.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== BEFORE & AFTER ==================== -->
    <section class="before-after" id="before-after">
        <div class="container">
            <span class="badge">~ Before and After ~</span>
            <h2 class="section-title">
                Transformations that speak<br>for <span class="accent">themselves.</span>
            </h2>
            <p class="section-subtitle">From bare to beautiful - what careful craft can do.</p>

            <div class="ba-grid">
                <!-- Card 1 -->
                <div class="ba-card">
                    <div class="ba-slider" data-slider>
                        <img src="https://framerusercontent.com/images/myspa7d33seEHDsRXUlrydVQ5f4.jpg" alt="Before"
                            class="ba-before">
                        <img src="https://framerusercontent.com/images/S54x6IYCPf1bwnR9B1ZDBEMc9P8.jpg" alt="After"
                            class="ba-after">
                        <div class="ba-handle"></div>
                    </div>
                    <h3>Courtyard Makeover</h3>
                    <p>A calm courtyard redesign with cleaner lines, softer planting, and a more open, inviting feel.
                    </p>
                    <div class="ba-lists">
                        <div class="ba-list">
                            <h4>Before</h4>
                            <div class="ba-list-item"><span class="icon-x">✕</span> Sparse planting</div>
                            <div class="ba-list-item"><span class="icon-x">✕</span> Worn paving</div>
                            <div class="ba-list-item"><span class="icon-x">✕</span> Limited seating</div>
                        </div>
                        <div class="ba-list">
                            <h4>After</h4>
                            <div class="ba-list-item"><span class="icon-check">✓</span> Layered greenery</div>
                            <div class="ba-list-item"><span class="icon-check">✓</span> Clean stone paths</div>
                            <div class="ba-list-item"><span class="icon-check">✓</span> Relaxed lounge area</div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="ba-card">
                    <div class="ba-slider" data-slider>
                        <img src="https://framerusercontent.com/images/vboJg9E3YAFKVKzZeFdrnujJl9I.png" alt="Before"
                            class="ba-before">
                        <img src="https://framerusercontent.com/images/lmtSJEdxQiMXFrTQE9YL6FiKT7s.jpg" alt="After"
                            class="ba-after">
                        <div class="ba-handle"></div>
                    </div>
                    <h3>Patio with Fire Pit</h3>
                    <p>A warm outdoor upgrade designed for evenings, with better structure, lighting, and a more
                        welcoming layout.</p>
                    <div class="ba-lists">
                        <div class="ba-list">
                            <h4>Before</h4>
                            <div class="ba-list-item"><span class="icon-x">✕</span> Plain lawn area</div>
                            <div class="ba-list-item"><span class="icon-x">✕</span> Minimal lighting</div>
                            <div class="ba-list-item"><span class="icon-x">✕</span> Unused corner space</div>
                        </div>
                        <div class="ba-list">
                            <h4>After</h4>
                            <div class="ba-list-item"><span class="icon-check">✓</span> Defined patio zone</div>
                            <div class="ba-list-item"><span class="icon-check">✓</span> Ambient night glow</div>
                            <div class="ba-list-item"><span class="icon-check">✓</span> Cozy fire pit setup</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== PROCESS ==================== -->
    <section class="process" id="process">
        <div class="container">
            <!-- Decorative leaf -->
            <svg class="process-leaf" viewBox="0 0 200 300">
                <g fill="#c4a97d">
                    <ellipse cx="100" cy="60" rx="50" ry="55" />
                    <ellipse cx="55" cy="130" rx="45" ry="50" />
                    <ellipse cx="140" cy="130" rx="45" ry="50" />
                    <ellipse cx="75" cy="210" rx="40" ry="45" />
                    <ellipse cx="130" cy="210" rx="40" ry="45" />
                    <ellipse cx="100" cy="270" rx="35" ry="30" />
                </g>
            </svg>

            <div class="process-layout">
                <div class="process-left">
                    <span class="badge">~ Process ~</span>
                    <h2 class="section-title">
                        From site visit<br>to <span class="accent">handover.</span>
                    </h2>
                    <p class="section-subtitle">Clear steps, thoughtful planning, and a smooth path from start to
                        finish.</p>
                </div>
                <div class="process-cards">
                    <div class="process-card">
                        <div class="card-number">1</div>
                        <h3>Site Visit</h3>
                        <p>We assess the space and identify the best direction for the project.</p>
                    </div>
                    <div class="process-card">
                        <div class="card-number">2</div>
                        <h3>Concept & Estimate</h3>
                        <p>We walk you through a clear layout and a realistic plan.</p>
                    </div>
                    <div class="process-card">
                        <div class="card-number">3</div>
                        <h3>Build & Install</h3>
                        <p>Our team brings the design to life with careful execution, quality materials, and reliable
                            timing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== PROJECTS ==================== -->
    <section class="projects" id="projects">
        <div class="container">
            <span class="badge">~ Projects ~</span>
            <h2 class="section-title">
                <span class="accent">Recent</span> landscaping work.
            </h2>
            <p class="section-subtitle">Thoughtful planting and hardscaping that turn yards into outdoor rooms.</p>

            <!-- Project 1 -->
            <div class="project-card">
                <div class="project-info">
                    <h3>Spring Garden Reset</h3>
                    <p>Cleared overgrowth, refreshed planting, and a cleaner layout to prepare the space for the new
                        season.</p>
                    <div class="project-details">
                        <span class="label">Details</span>
                        <span class="project-tag price">$499</span>
                        <span class="project-tag duration">1-2 days</span>
                    </div>
                    <ul class="project-checklist">
                        <li><span class="check-icon">✓</span> Overgrowth cleared</li>
                        <li><span class="check-icon">✓</span> Balanced plant mix</li>
                        <li><span class="check-icon">✓</span> Clean stone borders</li>
                        <li><span class="check-icon">✓</span> Refreshed planting</li>
                        <li><span class="check-icon">✓</span> Mulch refresh</li>
                        <li><span class="check-icon">✓</span> Defined garden edges</li>
                    </ul>
                </div>
                <div class="project-image">
                    <img src="https://framerusercontent.com/images/S54x6IYCPf1bwnR9B1ZDBEMc9P8.jpg"
                        alt="Spring Garden Reset">
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card">
                <div class="project-info">
                    <h3>Stone Patio Retreat</h3>
                    <p>New paving, defined borders, and a more usable patio area designed for relaxed outdoor living.
                    </p>
                    <div class="project-details">
                        <span class="label">Details</span>
                        <span class="project-tag price">$1.299</span>
                        <span class="project-tag duration">2-3 days</span>
                    </div>
                    <ul class="project-checklist">
                        <li><span class="check-icon">✓</span> New patio paving</li>
                        <li><span class="check-icon">✓</span> Improved garden flow</li>
                        <li><span class="check-icon">✓</span> Clean stone borders</li>
                        <li><span class="check-icon">✓</span> Durable hardscape finish</li>
                        <li><span class="check-icon">✓</span> Defined seating zone</li>
                        <li><span class="check-icon">✓</span> More usable layout</li>
                    </ul>
                </div>
                <div class="project-image">
                    <img src="https://framerusercontent.com/images/lmtSJEdxQiMXFrTQE9YL6FiKT7s.jpg"
                        alt="Stone Patio Retreat">
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card">
                <div class="project-info">
                    <h3>Layered Planting Plan</h3>
                    <p>Thoughtful planting, softer textures, and a refined layout created to bring structure and natural
                        beauty.</p>
                    <div class="project-details">
                        <span class="label">Details</span>
                        <span class="project-tag price">$8.900</span>
                        <span class="project-tag duration">2-3 weeks</span>
                    </div>
                    <ul class="project-checklist">
                        <li><span class="check-icon">✓</span> Layered greenery added</li>
                        <li><span class="check-icon">✓</span> Defined planting zones</li>
                        <li><span class="check-icon">✓</span> Balanced plant mix</li>
                        <li><span class="check-icon">✓</span> Year-round interest</li>
                        <li><span class="check-icon">✓</span> Softer garden textures</li>
                        <li><span class="check-icon">✓</span> Refined visual flow</li>
                    </ul>
                </div>
                <div class="project-image">
                    <img src="https://framerusercontent.com/images/ZtrYKCyfUHVekDDWQ0npMnMnv4.jpg"
                        alt="Layered Planting Plan">
                </div>
            </div>

            <a href="#contact" class="projects-cta">Book a Site Visit</a>
        </div>
    </section>

    <!-- ==================== TESTIMONIALS ==================== -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <div class="testimonials-layout">
                <div class="testimonials-left">
                    <span class="badge" style="margin-bottom:16px;display:inline-block;">~ Why homeowners choose
                        GreenKeeper ~</span>
                    <h2 class="section-title">
                        Why <span class="accent">homeowners</span><br>choose GreenKeeper.
                    </h2>
                    <h3 class="section-title" style="font-size:28px;margin-bottom:14px;">Ready to be our<br>next happy
                        client?</h3>
                    <p class="section-subtitle">We'll visit your property, walk through the space, and help you see the
                        full potential.</p>
                    <a href="#contact" class="services-cta">Get a Free Quote</a>
                </div>
                <div>
                    <!-- Row 1: Left-scrolling marquee -->
                    <div class="testimonials-marquee-wrapper">
                        <div class="marquee-track" id="marqueeRow1">
                            <!-- Cards duplicated in JS for infinite scroll -->
                            <div class="marquee-card">
                                <div class="stars">★★★★★</div>
                                <blockquote>"The GreenKeeper team was thoughtful, reliable, and easy to work with throughout."</blockquote>
                                <div class="testimonial-author" style="margin-top:16px;">
                                    <div class="testimonial-avatar"><img src="https://framerusercontent.com/images/Z9eBBf7aPWMsrZJQ887Uxe3U.jpg" alt="Nathan Reed"></div>
                                    <div><div class="testimonial-name">Nathan Reed</div><div class="testimonial-role">Property Owner</div></div>
                                </div>
                            </div>
                            <div class="marquee-card">
                                <div class="stars">★★★★★</div>
                                <blockquote>"Our backyard feels more open, balanced, and more natural than before."</blockquote>
                                <div class="testimonial-author" style="margin-top:16px;">
                                    <div class="testimonial-avatar"><img src="https://framerusercontent.com/images/3o94SUxAjTZtNReK7BodFQcJfNU.jpg" alt="Lily Foster"></div>
                                    <div><div class="testimonial-name">Lily Foster</div><div class="testimonial-role">Homeowner</div></div>
                                </div>
                            </div>
                            <div class="marquee-card">
                                <div class="stars">★★★★★</div>
                                <blockquote>"The whole process felt seamless and very well managed from start to finish."</blockquote>
                                <div class="testimonial-author" style="margin-top:16px;">
                                    <div class="testimonial-avatar"><img src="https://framerusercontent.com/images/t5JgnAUkgtZwrqUoesyJlGHYRg.jpg" alt="James Porter"></div>
                                    <div><div class="testimonial-name">James Porter</div><div class="testimonial-role">Property Owner</div></div>
                                </div>
                            </div>
                            <div class="marquee-card">
                                <div class="stars">★★★★★</div>
                                <blockquote>"GreenKeeper made the garden feel cleaner, calmer, and much easier to enjoy."</blockquote>
                                <div class="testimonial-author" style="margin-top:16px;">
                                    <div class="testimonial-avatar"><img src="https://framerusercontent.com/images/1YusdUq9aHUE77AXJSwS3aUjUUg.jpg" alt="Emma Hayes"></div>
                                    <div><div class="testimonial-name">Emma Hayes</div><div class="testimonial-role">Homeowner</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row 2: Right-scrolling marquee (reverse) -->
                    <div class="testimonials-marquee-wrapper" style="margin-top:16px;">
                        <div class="marquee-track reverse" id="marqueeRow2">
                            <div class="marquee-card">
                                <div class="stars">★★★★★</div>
                                <blockquote>"The patio, planting, and lawn now feel much more cohesive and considered."</blockquote>
                                <div class="testimonial-author" style="margin-top:16px;">
                                    <div class="testimonial-avatar"><img src="https://framerusercontent.com/images/z4xtyAw2YzCuP2YKCYVC9pzI1A.jpg" alt="Sarah Mitchell"></div>
                                    <div><div class="testimonial-name">Sarah Mitchell</div><div class="testimonial-role">Residential Client</div></div>
                                </div>
                            </div>
                            <div class="marquee-card">
                                <div class="stars">★★★★★</div>
                                <blockquote>"They brought structure to the garden and made it feel far more refined."</blockquote>
                                <div class="testimonial-author" style="margin-top:16px;">
                                    <div class="testimonial-avatar"><img src="https://framerusercontent.com/images/GsYyDdgd4dSJFBybLxxbRv0vOIs.jpg" alt="David Chen"></div>
                                    <div><div class="testimonial-name">David Chen</div><div class="testimonial-role">Homeowner</div></div>
                                </div>
                            </div>
                            <div class="marquee-card">
                                <div class="stars">★★★★★</div>
                                <blockquote>"Professional, friendly, and clearly passionate about what they do."</blockquote>
                                <div class="testimonial-author" style="margin-top:16px;">
                                    <div class="testimonial-avatar"><img src="https://framerusercontent.com/images/1YusdUq9aHUE77AXJSwS3aUjUUg.jpg" alt="Emma Clarke"></div>
                                    <div><div class="testimonial-name">Emma Clarke</div><div class="testimonial-role">Residential Client</div></div>
                                </div>
                            </div>
                            <div class="marquee-card">
                                <div class="stars">★★★★★</div>
                                <blockquote>"From design to execution, every step felt thoughtful and well-organized."</blockquote>
                                <div class="testimonial-author" style="margin-top:16px;">
                                    <div class="testimonial-avatar"><img src="https://framerusercontent.com/images/Z9eBBf7aPWMsrZJQ887Uxe3U.jpg" alt="Mark Weston"></div>
                                    <div><div class="testimonial-name">Mark Weston</div><div class="testimonial-role">Property Manager</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FAQ ==================== -->
    <section class="faq" id="faq">
        <div class="container">
            <span class="badge">~ FAQ ~</span>
            <h2 class="section-title">
                What to <span class="accent">know</span><br>before starting.
            </h2>
            <p class="section-subtitle">Key things clients want to know before we begin.</p>

            <div class="faq-list">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How much does a project cost?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Costs vary depending on size, scope, and materials. We'll give you a clear, honest estimate
                            after a site visit — no surprises.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you take smaller jobs?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Absolutely. We handle everything from quick garden cleanups to large-scale landscape
                            redesigns.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How do you choose materials?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We select materials based on durability, aesthetics, and sustainability. We'll walk you
                            through every choice before we begin.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How long does it take?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>Timelines depend on the project. Small jobs take 1–2 days; larger projects can take 2–3
                            weeks. We'll always give you a realistic timeframe upfront.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What happens after I reach out?</span>
                        <span class="faq-icon">+</span>
                    </div>
                    <div class="faq-answer">
                        <p>We'll arrange a site visit, assess the space, and provide a detailed plan and estimate — all
                            free of charge with no obligation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== CONTACT ==================== -->
    <section class="contact" id="contact">
        <div class="container">
            <span class="badge">~ Contact ~</span>
            <h2 class="section-title">
                Request <span class="accent">your</span> site visit.
            </h2>
            <p class="section-subtitle">Share a few details, and we'll get back to you within 24 hours.</p>

            <div class="contact-grid">
                <form class="contact-form" onsubmit="event.preventDefault()">
                    <label>Name*</label>
                    <input type="text" placeholder="Jane Smith" required>
                    <label>Email*</label>
                    <input type="email" placeholder="jane@framer.com" required>
                    <label>Phone*</label>
                    <input type="tel" placeholder="+1 415 555 0131">
                    <label>Service needed*</label>
                    <input type="text" placeholder="e.g. patio upgrade, planting refresh, lawn care">
                    <label>Project details</label>
                    <textarea placeholder="Tell us about the space, your goals, and any preferred timing."></textarea>
                    <button type="submit" class="contact-submit">Send Request</button>
                </form>
                <div class="contact-right">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.1714!2d4.8777!3d52.3667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609c19a5e34e3%3A0xc58a3926fe498b03!2sFramer%20B.V.!5e0!3m2!1sen!2snl!4v1700000000000!5m2!1sen!2snl"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <a href="tel:+14156283947" class="contact-action">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                        +1 (415) 628-3947
                    </a>
                    <a href="mailto:Hello@greenkeeper.com" class="contact-action">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="4" width="20" height="16" rx="2" />
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                        </svg>
                        Hello@greenkeeper.com
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== FOOTER ==================== -->
    <footer class="footer">
        <div class="footer-bg">
            <img src="https://framerusercontent.com/images/7zL4UuCcT3HWyPfvNKSKiFcZfw.jpg" alt="Garden background">
        </div>
        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-brand">
                    <a href="#" class="nav-logo">
                        <svg viewBox="0 0 32 32" fill="none">
                            <circle cx="16" cy="16" r="5" fill="white" />
                            <ellipse cx="16" cy="7" rx="4" ry="6" fill="white" opacity="0.8" />
                            <ellipse cx="16" cy="25" rx="4" ry="6" fill="white" opacity="0.8" />
                            <ellipse cx="7" cy="16" rx="6" ry="4" fill="white" opacity="0.8" />
                            <ellipse cx="25" cy="16" rx="6" ry="4" fill="white" opacity="0.8" />
                            <ellipse cx="9.5" cy="9.5" rx="4" ry="5" transform="rotate(-45 9.5 9.5)" fill="white"
                                opacity="0.7" />
                            <ellipse cx="22.5" cy="9.5" rx="4" ry="5" transform="rotate(45 22.5 9.5)" fill="white"
                                opacity="0.7" />
                            <ellipse cx="9.5" cy="22.5" rx="4" ry="5" transform="rotate(45 9.5 22.5)" fill="white"
                                opacity="0.7" />
                            <ellipse cx="22.5" cy="22.5" rx="4" ry="5" transform="rotate(-45 22.5 22.5)" fill="white"
                                opacity="0.7" />
                        </svg>
                        GreenKeeper
                    </a>
                    <p>Creating resilient outdoor spaces for homes and small businesses with lasting care since 2010.
                    </p>
                </div>
                <div class="footer-col">
                    <h4>Explore</h4>
                    <a href="#services">Services</a>
                    <a href="#before-after">Before and After</a>
                    <a href="#process">Process</a>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <a href="#projects">Projects</a>
                    <a href="#testimonials">Testimonials</a>
                    <a href="#faq">FAQ</a>
                </div>
                <div class="footer-col">
                    <h4>Legal</h4>
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms & Conditions</a>
                    <a href="#">404</a>
                </div>
                <div class="footer-col">
                    <h4>Get in Touch</h4>
                    <a href="#contact">Contact</a>
                    <a href="tel:+14156283947">+1 (415) 628-3947</a>
                    <a href="mailto:Hello@greenkeeper.com">Hello@greenkeeper.com</a>
                </div>
            </div>
            <div class="footer-divider"></div>
            <div class="footer-bottom">
                <div class="footer-social">
                    <a href="#" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="2" width="20" height="20" rx="5" />
                            <circle cx="12" cy="12" r="5" />
                            <circle cx="17.5" cy="6.5" r="1.5" fill="currentColor" stroke="none" />
                        </svg>
                    </a>
                    <a href="#" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </a>
                    <a href="#" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect x="2" y="9" width="4" height="12" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </a>
                </div>
                <p class="footer-copy">© 2025 GreenKeeper. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- ==================== SCRIPTS ==================== -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script>
        gsap.registerPlugin(ScrollTrigger);

        /* =====================================================
           1. NAVBAR — transparent on load → glassmorphic on scroll
           Mirrors template1: starts rgba(0,0,0,0), no shadow,
           no backdrop-filter; pill appears when user scrolls.
        ===================================================== */
        const navContainer = document.getElementById('navContainer');
        let lastScrollY = 0;

        window.addEventListener('scroll', () => {
            const scrolled = window.scrollY > 60;
            navContainer.classList.toggle('scrolled', scrolled);
            lastScrollY = window.scrollY;
        }, { passive: true });

        /* =====================================================
           2. HERO — staggered entrance on page load
           Title → subtitle → CTA each fade+slide up in sequence.
        ===================================================== */
        const heroContent = document.getElementById('heroContent');
        if (heroContent) {
            const heroTitle    = heroContent.querySelector('.hero-title');
            const heroSubtitle = heroContent.querySelector('.hero-subtitle');
            const heroCta      = heroContent.querySelector('.hero-cta');

            gsap.set([heroTitle, heroSubtitle, heroCta], { opacity: 0, y: 50 });

            const heroTl = gsap.timeline({ delay: 0.2 });
            heroTl
                .to(heroTitle,    { opacity: 1, y: 0, duration: 1.0, ease: 'power3.out' })
                .to(heroSubtitle, { opacity: 1, y: 0, duration: 0.9, ease: 'power3.out' }, '-=0.6')
                .to(heroCta,      { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out' }, '-=0.5');
        }

        /* =====================================================
           3. HERO PHOTOS — spring entrance + fan-out on hover
           Template1: photos slide in from bottom with stagger,
           then fan wider on hover (interactive expansion).
        ===================================================== */
        const heroPhotos    = document.getElementById('heroPhotos');
        const heroPhotoEls  = heroPhotos ? heroPhotos.querySelectorAll('.hero-photo') : [];

        // Base rotations/vertical offsets (resting state)
        const baseRotations = [-12, -4, 5, 14];
        const baseY         = [30, -10, 15, 40];
        // Expanded state on hover (wider fan like template1)
        const hoverRotations = [-22, -8, 10, 24];
        const hoverX         = [-24, -10, 10, 24];

        if (heroPhotoEls.length) {
            gsap.set(heroPhotoEls, { opacity: 0, y: 120 });
            gsap.to(heroPhotoEls, {
                opacity: 1,
                y: (i) => baseY[i],
                duration: 1.1,
                stagger: 0.12,
                ease: 'back.out(1.6)',
                delay: 0.7
            });

            heroPhotos.addEventListener('mouseenter', () => {
                heroPhotoEls.forEach((photo, i) => {
                    gsap.to(photo, {
                        rotation: hoverRotations[i],
                        x: hoverX[i],
                        duration: 0.55,
                        ease: 'power2.out'
                    });
                });
            });

            heroPhotos.addEventListener('mouseleave', () => {
                heroPhotoEls.forEach((photo, i) => {
                    gsap.to(photo, {
                        rotation: baseRotations[i],
                        x: 0,
                        duration: 0.55,
                        ease: 'power2.out'
                    });
                });
            });
        }

        /* =====================================================
           4. FLOATING BADGE — spring from right (appear animation)
           Template1: x:150→0, opacity:0→1, spring type,
           bounce:0, delay:1s, duration:1s.
           Applied here to the hero floating stats badge.
        ===================================================== */
        const floatBadge = document.getElementById('heroFloatBadge');
        if (floatBadge) {
            // Start state is already set via CSS (opacity:0, transform:translateX(150px))
            setTimeout(() => {
                gsap.to(floatBadge, {
                    opacity: 1,
                    x: 0,
                    duration: 1.0,
                    ease: 'power4.out',   // approximates spring bounce:0
                    onComplete: () => {
                        floatBadge.style.pointerEvents = 'auto';
                    }
                });
            }, 1000); // 1s delay matching template1
        }

        /* =====================================================
           5. ABOUT TEXT — word-by-word with translateY + opacity
           Template1: each word starts at opacity:0.2, y:12px
           and reveals progressively as the user scrolls.
        ===================================================== */
        const aboutText = document.getElementById('aboutText');
        if (aboutText) {
            const rawText = aboutText.textContent.trim();
            aboutText.innerHTML = '';
            rawText.split(/\s+/).forEach(word => {
                const span = document.createElement('span');
                span.className = 'word';
                span.textContent = word + ' ';
                aboutText.appendChild(span);
            });

            // Words start faded + shifted down (template1 initial state)
            gsap.set('.word', { opacity: 0.2, y: 12 });

            const wordSpans = aboutText.querySelectorAll('.word');

            ScrollTrigger.create({
                trigger: '.about',
                start: 'top 65%',
                end: 'bottom 35%',
                scrub: 0.6,
                onUpdate: (self) => {
                    const progress = self.progress;
                    wordSpans.forEach((span, i) => {
                        const threshold  = i / wordSpans.length;
                        const spanProg   = Math.max(0, Math.min(1,
                            (progress - threshold * 0.75) / 0.25
                        ));
                        gsap.to(span, {
                            opacity: 0.2 + spanProg * 0.8,
                            y: 12 - spanProg * 12,
                            duration: 0.05,
                            overwrite: 'auto'
                        });
                    });
                }
            });
        }

        /* =====================================================
           6. SERVICES — header slides from left, cards staggered
           from bottom (template1 uses fade+y per section).
        ===================================================== */
        gsap.fromTo('.services-header',
            { opacity: 0, x: -50 },
            {
                opacity: 1, x: 0, duration: 0.9, ease: 'power3.out',
                scrollTrigger: { trigger: '.services', start: 'top 80%', toggleActions: 'play none none none' }
            }
        );

        const serviceCards = document.querySelectorAll('.service-card');
        serviceCards.forEach((card, i) => {
            card.classList.remove('reveal');     // don't double-trigger
            gsap.fromTo(card,
                { opacity: 0, y: 60 },
                {
                    opacity: 1, y: 0,
                    duration: 0.75,
                    delay: (i % 3) * 0.12,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: card,
                        start: 'top 88%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        /* =====================================================
           7. BEFORE/AFTER — reveal from bottom with stagger
        ===================================================== */
        document.querySelectorAll('.ba-card').forEach((card, i) => {
            card.classList.remove('reveal');
            gsap.fromTo(card,
                { opacity: 0, y: 60 },
                {
                    opacity: 1, y: 0,
                    duration: 0.85,
                    delay: i * 0.15,
                    ease: 'power3.out',
                    scrollTrigger: { trigger: card, start: 'top 88%', toggleActions: 'play none none none' }
                }
            );
        });

        /* =====================================================
           8. PROCESS CARDS — fan-in with bounce + hover expand
           Template1: process images fan out (rotate 38→-42 deg).
           Each card bounces in from below in sequence.
           On hover: card scale(1.05) + lifts (z-index).
        ===================================================== */
        // Process left text: slide from left
        gsap.fromTo('.process-left',
            { opacity: 0, x: -50 },
            {
                opacity: 1, x: 0, duration: 0.9, ease: 'power3.out',
                scrollTrigger: { trigger: '.process', start: 'top 80%', toggleActions: 'play none none none' }
            }
        );
        const processCards   = document.querySelectorAll('.process-card');
        const pcRestRotation = [-4, -1, 2];
        const pcRestZ        = [3, 2, 1];

        processCards.forEach((card, i) => {
            // Set z-index
            card.style.zIndex = pcRestZ[i];

            gsap.fromTo(card,
                { opacity: 0, y: 90, rotation: pcRestRotation[i] - 15 },
                {
                    opacity: 1,
                    y: 0,
                    rotation: pcRestRotation[i],
                    duration: 0.95,
                    delay: i * 0.18,
                    ease: 'back.out(1.7)',
                    scrollTrigger: {
                        trigger: '.process-cards',
                        start: 'top 78%',
                        toggleActions: 'play none none none'
                    }
                }
            );

            // Hover: scale up like template1's scale(1.05) on highlighted card
            card.addEventListener('mouseenter', () => {
                gsap.to(card, {
                    scale: 1.05,
                    y: -8,
                    rotation: pcRestRotation[i] * 0.4,  // flatten slightly
                    duration: 0.4,
                    ease: 'power2.out'
                });
            });
            card.addEventListener('mouseleave', () => {
                gsap.to(card, {
                    scale: 1,
                    y: 0,
                    rotation: pcRestRotation[i],
                    duration: 0.4,
                    ease: 'power2.out'
                });
            });
        });

        /* =====================================================
           9. PROJECTS — staggered slide-up with subtle rotation
        ===================================================== */
        document.querySelectorAll('.project-card').forEach((card, i) => {
            card.classList.remove('reveal');
            gsap.fromTo(card,
                { opacity: 0, y: 70 },
                {
                    opacity: 1, y: 0,
                    duration: 0.9,
                    ease: 'power3.out',
                    scrollTrigger: { trigger: card, start: 'top 85%', toggleActions: 'play none none none' }
                }
            );
        });

        /* =====================================================
           10. TESTIMONIALS MARQUEE — clone cards for infinite loop
           Template1 uses two rows: top going left, bottom going
           right. Cards are duplicated so the loop is seamless.
        ===================================================== */
        // Testimonials left: slide from left
        gsap.fromTo('.testimonials-left',
            { opacity: 0, x: -50 },
            {
                opacity: 1, x: 0, duration: 0.9, ease: 'power3.out',
                scrollTrigger: { trigger: '.testimonials', start: 'top 80%', toggleActions: 'play none none none' }
            }
        );
        ['marqueeRow1', 'marqueeRow2'].forEach(id => {
            const track = document.getElementById(id);
            if (!track) return;
            // Duplicate all children for seamless loop
            const clone = track.innerHTML;
            track.innerHTML += clone;  // now twice as many cards
        });

        /* =====================================================
           11. FAQ ITEMS — staggered reveal + accordion
        ===================================================== */
        document.querySelectorAll('.faq-item').forEach((item, i) => {
            gsap.fromTo(item,
                { opacity: 0, y: 30 },
                {
                    opacity: 1, y: 0,
                    duration: 0.7,
                    delay: i * 0.08,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: '.faq-list',
                        start: 'top 85%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        document.querySelectorAll('.faq-question').forEach(btn => {
            btn.addEventListener('click', () => {
                const item   = btn.closest('.faq-item');
                const isOpen = item.classList.contains('open');
                document.querySelectorAll('.faq-item.open').forEach(el => el.classList.remove('open'));
                if (!isOpen) item.classList.add('open');
            });
        });

        /* =====================================================
           12. CONTACT — form slides in from left, right from right
        ===================================================== */
        gsap.fromTo('.contact-form',
            { opacity: 0, x: -55 },
            {
                opacity: 1, x: 0, duration: 0.9, ease: 'power3.out',
                scrollTrigger: { trigger: '.contact', start: 'top 80%', toggleActions: 'play none none none' }
            }
        );
        gsap.fromTo('.contact-right',
            { opacity: 0, x: 55 },
            {
                opacity: 1, x: 0, duration: 0.9, ease: 'power3.out',
                scrollTrigger: { trigger: '.contact', start: 'top 80%', toggleActions: 'play none none none' }
            }
        );

        /* =====================================================
           13. SECTION BADGES + HEADERS — gentle fade+y stagger
        ===================================================== */
        document.querySelectorAll('.badge').forEach(badge => {
            gsap.fromTo(badge,
                { opacity: 0, y: 20 },
                {
                    opacity: 1, y: 0, duration: 0.7, ease: 'power2.out',
                    scrollTrigger: { trigger: badge, start: 'top 90%', toggleActions: 'play none none none' }
                }
            );
        });

        /* =====================================================
           14. FOOTER — columns stagger up on enter
        ===================================================== */
        gsap.fromTo('.footer-grid > *',
            { opacity: 0, y: 40 },
            {
                opacity: 1, y: 0,
                duration: 0.7,
                stagger: 0.1,
                ease: 'power2.out',
                scrollTrigger: { trigger: '.footer-grid', start: 'top 90%', toggleActions: 'play none none none' }
            }
        );
        gsap.fromTo('.footer-bottom',
            { opacity: 0, y: 20 },
            {
                opacity: 1, y: 0, duration: 0.6, ease: 'power2.out',
                scrollTrigger: { trigger: '.footer-bottom', start: 'top 95%', toggleActions: 'play none none none' }
            }
        );

        /* =====================================================
           15. GENERAL .reveal ELEMENTS (remaining ones)
        ===================================================== */
        document.querySelectorAll('.reveal').forEach((el, i) => {
            gsap.fromTo(el,
                { opacity: 0, y: 50 },
                {
                    opacity: 1, y: 0,
                    duration: 0.85,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: el,
                        start: 'top 87%',
                        toggleActions: 'play none none none'
                    }
                }
            );
        });

        /* =====================================================
           16. BEFORE/AFTER SLIDER — drag interaction
        ===================================================== */
        document.querySelectorAll('[data-slider]').forEach(slider => {
            const afterImg = slider.querySelector('.ba-after');
            const handle   = slider.querySelector('.ba-handle');
            let isDragging = false;

            const updateSlider = (x) => {
                const rect = slider.getBoundingClientRect();
                let pos = ((x - rect.left) / rect.width) * 100;
                pos = Math.max(5, Math.min(95, pos));
                afterImg.style.clipPath = `inset(0 0 0 ${pos}%)`;
                handle.style.left = pos + '%';
            };

            slider.addEventListener('mousedown',  (e) => { isDragging = true;  updateSlider(e.clientX); });
            window.addEventListener('mousemove',  (e) => { if (isDragging) updateSlider(e.clientX); });
            window.addEventListener('mouseup',    ()  => { isDragging = false; });
            slider.addEventListener('touchstart', (e) => { isDragging = true;  updateSlider(e.touches[0].clientX); });
            slider.addEventListener('touchmove',  (e) => { if (isDragging) updateSlider(e.touches[0].clientX); });
            slider.addEventListener('touchend',   ()  => { isDragging = false; });
        });

        /* =====================================================
           17. SMOOTH SCROLL
        ===================================================== */
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.querySelector(link.getAttribute('href'));
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            });
        });
    </script>
</body>

</html>