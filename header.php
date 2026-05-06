<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Alvio Pharma</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Slick Slider CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- Google Fonts: Geist (paragraph text) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <!-- 1️⃣ Variables (colors, fonts, spacing) -->
    <link rel="stylesheet" href="css/style.css">

    <!-- 3️⃣ Layout CSS -->
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">

    <!-- 5️⃣ Page Specific CSS -->
    <link rel="stylesheet" href="css/pages/index.css">
    <link rel="stylesheet" href="css/pages/our-company.css">
    <link rel="stylesheet" href="css/pages/manufacturing.css">
    <link rel="stylesheet" href="css/pages/rasavio.css">
    <link rel="stylesheet" href="css/pages/dermaScience.css">
    <link rel="stylesheet" href="css/pages/board-directors.css">
    <link rel="stylesheet" href="css/pages/heritage.css">
    <link rel="stylesheet" href="css/pages/sience-inno.css">
    <link rel="stylesheet" href="css/pages/blogs.css">
    <link rel="stylesheet" href="css/pages/contact.css">

    <!-- 6️⃣ Responsive (ALWAYS LAST) -->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <header class="header">
        <div class="p-x">
            <div class="header_container">
                <div class="header-logo">
                    <a href="index.php" class="logo-link">
                        <img src="images/logo.svg" alt="Alvio Pharma Logo" class="logo-img">
                    </a>
                </div>

                <div class="header-actions">
                    <nav class="main-nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Manufacturing & Quality</a></li>
                            <li><a href="#">Insights</a></li>

                            <li class="has-dropdown">
                                <a href="#">
                                    Who We Are
                                    <span class="dropdown-arrow">
                                        <svg width="17" height="9" viewBox="0 0 17 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.56694 8.56694C8.32286 8.81102 7.92714 8.81102 7.68306 8.56694L0.183057 1.06694C-0.0610211 0.822864 -0.0610211 0.427135 0.183057 0.183057C0.427135 -0.0610203 0.822862 -0.0610203 1.06694 0.183057L8.125 7.24112L15.1831 0.183059C15.4271 -0.061019 15.8229 -0.061019 16.0669 0.183059C16.311 0.427136 16.311 0.822865 16.0669 1.06694L8.56694 8.56694Z"
                                                fill="white" />
                                        </svg>

                                    </span>
                                </a>
                                <div class="dropdown">
                                    <a href="#">About Us</a>
                                    <a href="#">Leadership</a>
                                    <a href="#">Careers</a>
                                </div>
                            </li>

                            <li class="has-dropdown">
                                <a href="#">
                                    Therapeutic Areas
                                    <span class="dropdown-arrow">
                                        <svg width="17" height="9" viewBox="0 0 17 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M8.56694 8.56694C8.32286 8.81102 7.92714 8.81102 7.68306 8.56694L0.183057 1.06694C-0.0610211 0.822864 -0.0610211 0.427135 0.183057 0.183057C0.427135 -0.0610203 0.822862 -0.0610203 1.06694 0.183057L8.125 7.24112L15.1831 0.183059C15.4271 -0.061019 15.8229 -0.061019 16.0669 0.183059C16.311 0.427136 16.311 0.822865 16.0669 1.06694L8.56694 8.56694Z"
                                                fill="white" />
                                        </svg>

                                    </span>
                                </a>
                                <div class="dropdown">
                                    <a href="#">Cardiology</a>
                                    <a href="#">Neurology</a>
                                    <a href="#">Oncology</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <a href="contact.php" class="commo-btn contact_btn">Contact Us</a>

                    <button class="menu-toggle-btn d-lg-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-label="Toggle menu">

                        <svg class="menu-icon-svg" width="28" height="28" viewBox="0 0 28 28" fill="none"
                            xmlns="http://www.w3.org/2000/svg">

                            <!-- Dots -->
                            <circle class="menu-dot" cx="5" cy="5" r="5" />
                            <circle class="menu-dot" cx="23" cy="5" r="5" />
                            <circle class="menu-dot" cx="5" cy="23" r="5" />
                            <circle class="menu-dot" cx="23" cy="23" r="5" />

                            <!-- X -->
                            <path class="menu-close-line" d="M4 4L24 24" />
                            <path class="menu-close-line" d="M24 4L4 24" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <div class="offcanvas offcanvas-bottom offcanvas-full com_bg_black" tabindex="-1" id="offcanvasRight"
        data-bs-scroll="true" data-bs-backdrop="false">
        <div class="offcanvas-body">
            <div class="mega_menu">
                <div class="mega_menu_tabs" id="v-pills-tab" role="tablist">
                    <p class="text-white mb-4">Expertise</p>

                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-profile" type="button">
                        <span>Home</span>
                        <span>
                            <svg width="53" height="54" viewBox="0 0 53 54" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.949 43.2281C17.1146 43.449 17.9427 43.6146 18.7157 43.6146C19.8198 43.6146 22.1386 41.6823 28.9844 34.7813L37.8178 25.9479L28.9844 17.1146C21.0896 9.16458 19.9855 8.28125 18.4948 8.39167C17.1146 8.55729 16.7834 8.83334 16.673 10.1583C16.5073 11.5938 17.3355 12.6427 23.574 18.8813L30.6407 25.9479L23.574 33.0146C18.2188 38.3698 16.5625 40.3573 16.5625 41.4615C16.5625 42.2344 16.7282 43.0625 16.949 43.2281Z"
                                    fill="white" />
                            </svg>
                    </button>

                    <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab-home" type="button">
                        <span> Who We Are</span>
                        <span>
                            <svg width="53" height="54" viewBox="0 0 53 54" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.949 43.2281C17.1146 43.449 17.9427 43.6146 18.7157 43.6146C19.8198 43.6146 22.1386 41.6823 28.9844 34.7813L37.8178 25.9479L28.9844 17.1146C21.0896 9.16458 19.9855 8.28125 18.4948 8.39167C17.1146 8.55729 16.7834 8.83334 16.673 10.1583C16.5073 11.5938 17.3355 12.6427 23.574 18.8813L30.6407 25.9479L23.574 33.0146C18.2188 38.3698 16.5625 40.3573 16.5625 41.4615C16.5625 42.2344 16.7282 43.0625 16.949 43.2281Z"
                                    fill="white" />
                            </svg>
                    </button>

                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-disabled" type="button">
                        <span> Therapeutic Areas</span>
                        <span>
                            <svg width="53" height="54" viewBox="0 0 53 54" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.949 43.2281C17.1146 43.449 17.9427 43.6146 18.7157 43.6146C19.8198 43.6146 22.1386 41.6823 28.9844 34.7813L37.8178 25.9479L28.9844 17.1146C21.0896 9.16458 19.9855 8.28125 18.4948 8.39167C17.1146 8.55729 16.7834 8.83334 16.673 10.1583C16.5073 11.5938 17.3355 12.6427 23.574 18.8813L30.6407 25.9479L23.574 33.0146C18.2188 38.3698 16.5625 40.3573 16.5625 41.4615C16.5625 42.2344 16.7282 43.0625 16.949 43.2281Z"
                                    fill="white" />
                            </svg>

                    </button>
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-messages" type="button">
                        <span> Our Science & Innovation</span>
                        <span>
                            <svg width="53" height="54" viewBox="0 0 53 54" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.949 43.2281C17.1146 43.449 17.9427 43.6146 18.7157 43.6146C19.8198 43.6146 22.1386 41.6823 28.9844 34.7813L37.8178 25.9479L28.9844 17.1146C21.0896 9.16458 19.9855 8.28125 18.4948 8.39167C17.1146 8.55729 16.7834 8.83334 16.673 10.1583C16.5073 11.5938 17.3355 12.6427 23.574 18.8813L30.6407 25.9479L23.574 33.0146C18.2188 38.3698 16.5625 40.3573 16.5625 41.4615C16.5625 42.2344 16.7282 43.0625 16.949 43.2281Z"
                                    fill="white" />
                            </svg>
                    </button>
                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-settings" type="button">
                        <span> Manufacturing & Quality</span>
                        <span>
                            <svg width="53" height="54" viewBox="0 0 53 54" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.949 43.2281C17.1146 43.449 17.9427 43.6146 18.7157 43.6146C19.8198 43.6146 22.1386 41.6823 28.9844 34.7813L37.8178 25.9479L28.9844 17.1146C21.0896 9.16458 19.9855 8.28125 18.4948 8.39167C17.1146 8.55729 16.7834 8.83334 16.673 10.1583C16.5073 11.5938 17.3355 12.6427 23.574 18.8813L30.6407 25.9479L23.574 33.0146C18.2188 38.3698 16.5625 40.3573 16.5625 41.4615C16.5625 42.2344 16.7282 43.0625 16.949 43.2281Z"
                                    fill="white" />
                            </svg>
                    </button>

                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="Insights" type="button">
                        <span>Insights</span>
                        <span>
                            <svg width="53" height="54" viewBox="0 0 53 54" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.949 43.2281C17.1146 43.449 17.9427 43.6146 18.7157 43.6146C19.8198 43.6146 22.1386 41.6823 28.9844 34.7813L37.8178 25.9479L28.9844 17.1146C21.0896 9.16458 19.9855 8.28125 18.4948 8.39167C17.1146 8.55729 16.7834 8.83334 16.673 10.1583C16.5073 11.5938 17.3355 12.6427 23.574 18.8813L30.6407 25.9479L23.574 33.0146C18.2188 38.3698 16.5625 40.3573 16.5625 41.4615C16.5625 42.2344 16.7282 43.0625 16.949 43.2281Z"
                                    fill="white" />
                            </svg>
                    </button>

                    <button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-settings" type="button">
                        <span> Contact Us</span>
                        <span>
                            <svg width="53" height="54" viewBox="0 0 53 54" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16.949 43.2281C17.1146 43.449 17.9427 43.6146 18.7157 43.6146C19.8198 43.6146 22.1386 41.6823 28.9844 34.7813L37.8178 25.9479L28.9844 17.1146C21.0896 9.16458 19.9855 8.28125 18.4948 8.39167C17.1146 8.55729 16.7834 8.83334 16.673 10.1583C16.5073 11.5938 17.3355 12.6427 23.574 18.8813L30.6407 25.9479L23.574 33.0146C18.2188 38.3698 16.5625 40.3573 16.5625 41.4615C16.5625 42.2344 16.7282 43.0625 16.949 43.2281Z"
                                    fill="white" />
                            </svg>
                    </button>
                </div>

                <div class="mega_menu_content">
                    <!-- TAB CONTENT -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-home">
                            <p>About</p>
                            <ul>
                                <li>
                                    <a href="#">Our Company</a>
                                </li>
                                <li>
                                    <a href="#">Board of Directors</a>
                                </li>
                                <li>
                                    <a href="#">Our Heritage</a>
                                </li>
                                <li>
                                    <a href="#">Sustainability & Responsibility</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-pane fade" id="tab-profile">
                            <h3>Profile</h3>
                            <p>This is profile content.</p>
                        </div>

                        <div class="tab-pane fade" id="tab-disabled">
                            <h3>Disabled</h3>
                            <p>This tab is disabled.</p>
                        </div>

                        <div class="tab-pane fade" id="tab-messages">
                            <h3>Messages</h3>
                            <p>This is messages content.</p>
                        </div>

                        <div class="tab-pane fade" id="tab-settings">
                            <h3>Settings</h3>
                            <p>This is settings content.</p>
                        </div>

                        <div class="tab-pane fade" id="insights">
                            <h3>Insights</h3>
                            <p>This is insights content.</p>
                        </div>

                        <div class="tab-pane fade" id="contact-us">
                            <h3>Contact Us</h3>
                            <p>This is contact us content.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



page 1 : -------------------------------------------------------------------


<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        body {
            margin: 0;
            padding: 0;
            background: radial-gradient(circle at center, #122131 0%, #051424 100%);
            min-height: 100vh;
            overflow: hidden;
        }
        .glass-panel {
            background: rgba(39, 54, 71, 0.4);
            backdrop-filter: blur(32px);
            -webkit-backdrop-filter: blur(32px);
        }
        .active-speaker-glow {
            box-shadow: 0 0 25px 0 rgba(6, 182, 212, 0.4);
            border: 2px solid #06B6D4;
        }
        .emoji-float {
            filter: drop-shadow(0 0 10px rgba(255, 165, 0, 0.5));
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "error": "#ffb4ab",
                        "inverse-primary": "#005ac2",
                        "error-container": "#93000a",
                        "surface-bright": "#2c3a4c",
                        "on-primary-container": "#00285d",
                        "outline-variant": "#424754",
                        "surface-container-lowest": "#010f1f",
                        "on-error-container": "#ffdad6",
                        "on-primary-fixed-variant": "#004395",
                        "on-secondary-fixed-variant": "#004e5c",
                        "on-surface": "#d4e4fa",
                        "on-primary": "#002e6a",
                        "tertiary-fixed": "#e9ddff",
                        "surface": "#051424",
                        "on-secondary-fixed": "#001f26",
                        "on-tertiary": "#3c0091",
                        "surface-container-highest": "#273647",
                        "background": "#051424",
                        "on-tertiary-fixed": "#23005c",
                        "primary-container": "#4d8eff",
                        "secondary-fixed": "#acedff",
                        "tertiary-fixed-dim": "#d0bcff",
                        "surface-tint": "#adc6ff",
                        "secondary-container": "#03b5d3",
                        "secondary": "#4cd7f6",
                        "on-primary-fixed": "#001a42",
                        "on-surface-variant": "#c2c6d6",
                        "tertiary": "#d0bcff",
                        "outline": "#8c909f",
                        "surface-variant": "#273647",
                        "surface-container-high": "#1c2b3c",
                        "surface-container": "#122131",
                        "on-secondary-container": "#00424e",
                        "primary-fixed-dim": "#adc6ff",
                        "on-background": "#d4e4fa",
                        "on-secondary": "#003640",
                        "primary-fixed": "#d8e2ff",
                        "primary": "#adc6ff",
                        "tertiary-container": "#a078ff",
                        "surface-container-low": "#0d1c2d",
                        "inverse-on-surface": "#233143",
                        "secondary-fixed-dim": "#4cd7f6",
                        "on-tertiary-fixed-variant": "#5516be",
                        "on-tertiary-container": "#340080",
                        "on-error": "#690005",
                        "surface-dim": "#051424",
                        "inverse-surface": "#d4e4fa"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sm": "8px",
                        "lg": "24px",
                        "tile-gap": "20px",
                        "unit": "4px",
                        "container-padding": "32px",
                        "md": "16px",
                        "xs": "4px",
                        "xl": "40px"
                    },
                    "fontFamily": {
                        "h3": ["Space Grotesk"],
                        "h1": ["Space Grotesk"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "label-caps": ["Inter"],
                        "h2": ["Space Grotesk"]
                    },
                    "fontSize": {
                        "h3": ["24px", {"lineHeight": "1.3", "letterSpacing": "0.04em", "fontWeight": "500"}],
                        "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0.01em", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0.01em", "fontWeight": "400"}],
                        "label-caps": ["12px", {"lineHeight": "1.0", "letterSpacing": "0.15em", "fontWeight": "600"}],
                        "h2": ["32px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "600"}]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background text-on-background">
<!-- Top Navigation Bar -->
<header class="fixed top-0 left-0 right-0 z-50 bg-surface/40 backdrop-blur-xl border-b border-outline-variant/20 shadow-lg flex justify-between items-center w-full px-lg py-sm transition-all duration-300 ease-in-out">
<div class="flex items-center gap-md">
<span class="font-h3 text-h3 font-bold text-primary">Stellar Sync Pro</span>
<div class="h-4 w-[1px] bg-outline-variant/30 mx-sm"></div>
<span class="font-body-md text-body-md text-on-surface">Project Alpha Review</span>
</div>
<div class="flex items-center gap-lg">
<div class="flex items-center gap-sm bg-surface-container-high px-md py-xs rounded-full border border-outline-variant/20">
<span class="material-symbols-outlined text-primary text-[20px]">timer</span>
<span class="font-label-caps text-label-caps text-on-surface">00:45:12</span>
</div>
<div class="flex items-center gap-md">
<button class="hover:bg-surface-bright/50 p-sm rounded-full transition-all material-symbols-outlined text-on-surface-variant">radio_button_checked</button>
<button class="hover:bg-surface-bright/50 p-sm rounded-full transition-all material-symbols-outlined text-on-surface-variant">group_add</button>
<div class="w-10 h-10 rounded-full border-2 border-primary/50 overflow-hidden">
<img alt="Participant avatar stack" class="w-full h-full object-cover" data-alt="A professional headshot of a team lead participant with soft rim lighting against a blurred deep cosmic office background. The image has a cool blue color grade, high detail, and maintains the premium, futuristic tech-forward aesthetic of the workspace. Lighting is crisp and modern." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCV8r7Ql3eU1lhrlmlVt4dyJhaYHjJb4t0-7Ce1nAHuMcBKf7cZdAvdzQ6zrnxIbBdZaci4PRi-yF4Kzc_saYvww9x38K4gmCLaqNxeZcnNibISnRSdTdmZQJuzKW8ibv3w_hfge9ZIAP_S9Aw9kVCTvlwWqEshWErNiyp-r7XznBbly97cFLCygk0TZgw929BAg5eODDeoKEMFgvA6FkOzZDpmdGsLJMLxlX5CMH2XZDbH84iyr9pC7IRdjohjt-MxsZndv-tiS7CR"/>
</div>
</div>
</div>
</header>
<!-- Main Content: Video Grid -->
<main class="pt-xl pb-[120px] px-container-padding h-screen flex items-center justify-center">
<div class="grid grid-cols-2 grid-rows-2 gap-tile-gap w-full max-w-[1400px] aspect-video">
<!-- Participant 1 (Active Speaker) -->
<div class="relative rounded-lg overflow-hidden group active-speaker-glow transition-all duration-500">
<img alt="Active Speaker View" class="w-full h-full object-cover" data-alt="A male participant speaking during a high-stakes video call. He is set against a dark, futuristic background with subtle bokeh lights in cyan and violet. The lighting is cinematic, highlighting his facial expressions with a professional, sharp focus. The overall atmosphere is focused and innovative." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAS0AMc9Hy5fbtgkKbPs9atSEOvtohFPUQdqh9kMHKxzNCac7dZqwzsp4KwR6kCjQl1uTe-ldvqximAvosFvV6r5lh1j0s6MZqIjhFnfDKBZCigGhy_OCa5gNiIH2dTlBlYJUJ5uBfAjYnQF_dMRlaEVzJuxsExC-eOJubswn47DJhjHxE4JDLV1V_3eKKqjI-gHuSGCPJOey8QYQDgiAxBFDl6AfmnGvZJiTnNrr6UYoeilFPNqd9uELqNvNwpwYg5_WeSopXYzM1C"/>
<div class="absolute bottom-md left-md bg-surface-container-low/60 backdrop-blur-md px-md py-xs rounded-full flex items-center gap-sm border border-white/10">
<span class="material-symbols-outlined text-secondary text-[18px]" style="font-variation-settings: 'FILL' 1;">mic</span>
<span class="font-label-caps text-label-caps text-on-surface">Alex Rivera</span>
</div>
<!-- Emoji Reaction Overlay -->
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[64px] emoji-float animate-bounce">
                    🔥
                </div>
</div>
<!-- Participant 2 -->
<div class="relative rounded-lg overflow-hidden group border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)]">
<img alt="Participant View" class="w-full h-full object-cover" data-alt="A professional female participant in a modern tech environment, looking attentively at the camera. The background features soft purple and deep blue gradients with high-tech interior elements visible through deep glass blurs. Lighting is soft and flattering, emphasizing a collaborative and premium tone." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCYW_PSdyF10Pz_WMqMLt79bFvnK1NHHgkT9tW8pU1FfxwygghYZYvv4YjrR5wJbGA8s-Ti8W_CtrZP-w7Pr7oMqzUtSXZ-u7r7V6Zouu34dyRMgjCxDw6BZAM20LDurAHKpUM8IFsnwZw2kf2Dd2sc58OpEfU3LlAd27gHRaV_xPGUnMF_-Y-EdsOTNu_-o8g2Mw7vnZ5r1DEuIyoRRcMvCyBhQelqwtzqKG_gi03FP6DYaakm_XxbPhSNh-d0AAs628V7fGhzPo0R"/>
<div class="absolute bottom-md left-md bg-surface-container-low/60 backdrop-blur-md px-md py-xs rounded-full flex items-center gap-sm border border-white/10">
<span class="material-symbols-outlined text-on-surface-variant text-[18px]">mic</span>
<span class="font-label-caps text-label-caps text-on-surface">Elena Chen</span>
</div>
</div>
<!-- Participant 3 -->
<div class="relative rounded-lg overflow-hidden group border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)]">
<img alt="Participant View" class="w-full h-full object-cover" data-alt="A male creative professional in a dimly lit studio space with vibrant blue ambient lighting. He is smiling slightly, creating a warm yet professional atmosphere. The image is crisp, using a wide aperture to create a beautiful background blur that fits the celestial, futuristic theme of the app." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAgImWTvAo-tJy6U1Jaa4WRSKnNHREXKdoz3EcbuJcNeDOsF7JWjKn5veDGwId8HHJb_HGxckOQI7NHeocpM9rbVP7hEjqfn3gu2HtyrZ6c3YUwlIAYqgXO3RkvU7-rW8SCryyWQ7zppofdyO_ZicsDAK4oyzok-W73Xkm640Bz9DwJg8_CeNHQ7qZ--UC03oSRoEh25DHoE4Fi7I5piNv77aDZotYp4WXFpPOX3ry98M4dzISbExcigv_jgaelu_DBC9j27Dg8JLz9"/>
<div class="absolute bottom-md left-md bg-surface-container-low/60 backdrop-blur-md px-md py-xs rounded-full flex items-center gap-sm border border-white/10">
<span class="material-symbols-outlined text-on-surface-variant text-[18px]">mic</span>
<span class="font-label-caps text-label-caps text-on-surface">Jordan Smyth</span>
</div>
</div>
<!-- Participant 4 (Myself) -->
<div class="relative rounded-lg overflow-hidden group border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)]">
<img alt="Participant View" class="w-full h-full object-cover" data-alt="A portrait of a female designer in a workspace with glowing neon accents. The setting is clean and high-tech, featuring glass surfaces and soft atmospheric lighting in shades of electric blue and indigo. The focus is sharp, and the mood is one of calm concentration and high-end professional quality." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBqmfqOZqzIRtEBosUCxYFFxzJ-dJCuKz8NgCnqNMZLgmtfp9LbQczwQ0W3_anvE3XU5CQYFvU-4zXW7AStPc9bGreidx3qyQi8M3PPpUvbTDjup_H0fCrWZZZSAoRs_jSPSQ_-4kDnuOhH8J46-iclox0UpvBQK--QnJ6n81piLtkfS6Zhs9FU91t1cEAwdsQaXbBviy3MU-PmHFXlZlCABsT6szrPgB0vLeVYjkGA_teM03oEwWqBGqfkiq8Mva6B2Zjr-9L9x9SR"/>
<div class="absolute bottom-md left-md bg-surface-container-low/60 backdrop-blur-md px-md py-xs rounded-full flex items-center gap-sm border border-white/10">
<span class="material-symbols-outlined text-on-surface-variant text-[18px]">mic_off</span>
<span class="font-label-caps text-label-caps text-on-surface">You (Sarah)</span>
</div>
<div class="absolute top-md right-md">
<span class="bg-secondary-container/80 backdrop-blur-md text-on-secondary-container px-sm py-xs rounded-full border border-secondary font-label-caps text-[10px]">LIVE</span>
</div>
</div>
</div>
</main>
<!-- Side Navigation Bar (Chat/AI Hub) -->
<aside class="fixed right-0 top-0 h-full z-40 flex flex-col bg-surface-container-low/80 backdrop-blur-[32px] border-l border-outline-variant/30 shadow-2xl w-80 translate-x-full md:translate-x-0 transition-transform duration-300">
<div class="p-lg mt-xl">
<h2 class="font-h2 text-h2 text-primary">Meeting Space</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Active Session</p>
</div>
<nav class="flex-1 flex flex-col gap-sm p-md">
<div class="flex items-center gap-md p-md border-r-4 border-tertiary text-tertiary bg-tertiary-container/20 cursor-pointer transition-all">
<span class="material-symbols-outlined">chat</span>
<span class="font-body-md text-body-md">Chat</span>
</div>
<div class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-variant/40 cursor-pointer transition-all rounded-r-lg">
<span class="material-symbols-outlined">group</span>
<span class="font-body-md text-body-md">People</span>
</div>
<div class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-variant/40 cursor-pointer transition-all rounded-r-lg">
<span class="material-symbols-outlined">smart_toy</span>
<span class="font-body-md text-body-md">AI Hub</span>
</div>
</nav>
<div class="p-lg border-t border-outline-variant/20">
<div class="flex items-center gap-md bg-surface-container/50 p-md rounded-lg border border-outline-variant/20">
<div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center text-primary">
<span class="material-symbols-outlined">auto_fix_high</span>
</div>
<div class="flex-1 overflow-hidden">
<p class="font-label-caps text-label-caps text-on-surface truncate">AI Summary Active</p>
<p class="text-[10px] text-on-surface-variant">Capturing action items...</p>
</div>
</div>
</div>
</aside>
<!-- Floating Bottom Control Bar -->
<nav class="fixed bottom-0 left-0 right-0 z-50 flex justify-center pb-lg">
<div class="bg-surface-container-highest/60 backdrop-blur-[40px] border border-white/10 rounded-full mx-auto mb-lg w-fit shadow-[0_10px_30px_rgba(0,0,0,0.5)] flex items-center p-sm gap-xs">
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 active:scale-90 transition-all duration-200 flex flex-col items-center gap-xs">
<span class="material-symbols-outlined">mic</span>
<span class="font-label-caps text-label-caps">Mute</span>
</button>
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 active:scale-90 transition-all duration-200 flex flex-col items-center gap-xs">
<span class="material-symbols-outlined">videocam</span>
<span class="font-label-caps text-label-caps">Video</span>
</button>
<button class="bg-secondary-container text-on-secondary-container rounded-full p-md shadow-[0_0_15px_rgba(6,182,212,0.5)] hover:scale-110 active:scale-90 transition-all duration-200 flex flex-col items-center gap-xs">
<span class="material-symbols-outlined">screen_share</span>
<span class="font-label-caps text-label-caps">Share</span>
</button>
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 active:scale-90 transition-all duration-200 flex flex-col items-center gap-xs">
<span class="material-symbols-outlined">front_hand</span>
<span class="font-label-caps text-label-caps">Raise</span>
</button>
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 active:scale-90 transition-all duration-200 flex flex-col items-center gap-xs">
<span class="material-symbols-outlined">add_reaction</span>
<span class="font-label-caps text-label-caps">React</span>
</button>
<div class="w-[1px] h-8 bg-white/10 mx-sm"></div>
<button class="text-error p-md hover:bg-error/10 hover:scale-110 active:scale-90 transition-all duration-200 flex flex-col items-center gap-xs">
<span class="material-symbols-outlined">call_end</span>
<span class="font-label-caps text-label-caps">End</span>
</button>
</div>
</nav>
</body></html>

page 1 : -------------------------------------------------------------------


<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Stellar Sync Pro - AI Assisted Meeting</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .glass-panel {
            background: rgba(13, 28, 45, 0.4);
            backdrop-filter: blur(32px);
            -webkit-backdrop-filter: blur(32px);
        }
        .video-glow {
            box-shadow: 0 0 20px rgba(173, 198, 255, 0.2);
        }
        .active-speaker-glow {
            box-shadow: 0 0 15px rgba(6, 182, 212, 0.5);
            border: 2px solid #4cd7f6;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "error": "#ffb4ab",
                        "inverse-primary": "#005ac2",
                        "error-container": "#93000a",
                        "surface-bright": "#2c3a4c",
                        "on-primary-container": "#00285d",
                        "outline-variant": "#424754",
                        "surface-container-lowest": "#010f1f",
                        "on-error-container": "#ffdad6",
                        "on-primary-fixed-variant": "#004395",
                        "on-secondary-fixed-variant": "#004e5c",
                        "on-surface": "#d4e4fa",
                        "on-primary": "#002e6a",
                        "tertiary-fixed": "#e9ddff",
                        "surface": "#051424",
                        "on-secondary-fixed": "#001f26",
                        "on-tertiary": "#3c0091",
                        "surface-container-highest": "#273647",
                        "background": "#051424",
                        "on-tertiary-fixed": "#23005c",
                        "primary-container": "#4d8eff",
                        "secondary-fixed": "#acedff",
                        "tertiary-fixed-dim": "#d0bcff",
                        "surface-tint": "#adc6ff",
                        "secondary-container": "#03b5d3",
                        "secondary": "#4cd7f6",
                        "on-primary-fixed": "#001a42",
                        "on-surface-variant": "#c2c6d6",
                        "tertiary": "#d0bcff",
                        "outline": "#8c909f",
                        "surface-variant": "#273647",
                        "surface-container-high": "#1c2b3c",
                        "surface-container": "#122131",
                        "on-secondary-container": "#00424e",
                        "primary-fixed-dim": "#adc6ff",
                        "on-background": "#d4e4fa",
                        "on-secondary": "#003640",
                        "primary-fixed": "#d8e2ff",
                        "primary": "#adc6ff",
                        "tertiary-container": "#a078ff",
                        "surface-container-low": "#0d1c2d",
                        "inverse-on-surface": "#233143",
                        "secondary-fixed-dim": "#4cd7f6",
                        "on-tertiary-fixed-variant": "#5516be",
                        "on-tertiary-container": "#340080",
                        "on-error": "#690005",
                        "surface-dim": "#051424",
                        "inverse-surface": "#d4e4fa"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sm": "8px",
                        "lg": "24px",
                        "tile-gap": "20px",
                        "unit": "4px",
                        "container-padding": "32px",
                        "md": "16px",
                        "xs": "4px",
                        "xl": "40px"
                    },
                    "fontFamily": {
                        "h3": ["Space Grotesk"],
                        "h1": ["Space Grotesk"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "label-caps": ["Inter"],
                        "h2": ["Space Grotesk"]
                    },
                    "fontSize": {
                        "h3": ["24px", {"lineHeight": "1.3", "letterSpacing": "0.04em", "fontWeight": "500"}],
                        "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0.01em", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0.01em", "fontWeight": "400"}],
                        "label-caps": ["12px", {"lineHeight": "1.0", "letterSpacing": "0.15em", "fontWeight": "600"}],
                        "h2": ["32px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "600"}]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background text-on-surface font-body-md overflow-hidden min-h-screen selection:bg-secondary-container">
<!-- Global Background Gradient -->
<div class="fixed inset-0 z-[-1] bg-[radial-gradient(circle_at_top_right,_#1c2b3c_0%,_#051424_100%)]"></div>
<div class="fixed inset-0 z-[-1] opacity-30 bg-[radial-gradient(circle_at_bottom_left,_#004e5c_0%,_transparent_50%)]"></div>
<!-- TopAppBar -->
<header class="fixed top-0 left-0 right-0 z-50 bg-surface/40 backdrop-blur-xl border-b border-outline-variant/20 flex justify-between items-center w-full px-lg py-sm shadow-lg transition-all duration-300 ease-in-out">
<div class="flex items-center gap-md">
<span class="font-h3 text-h3 font-bold text-primary">Stellar Sync Pro</span>
<div class="px-sm py-xs bg-secondary-container/20 border border-secondary/30 rounded-full flex items-center gap-xs">
<span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
<span class="font-label-caps text-label-caps text-secondary">LIVE: Q3 PLANNING</span>
</div>
</div>
<div class="flex items-center gap-md">
<div class="flex -space-x-2">
<img alt="Participant" class="w-8 h-8 rounded-full border-2 border-surface-container" data-alt="A professional headshot of a young male creative with stylish glasses and a friendly expression, set against a blurred studio background with soft teal and blue lighting consistent with a high-tech corporate aesthetic. The image is crisp and utilizes professional portrait lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBw9neWd65osQKiLLp8lyA4PPwMzcRgkIMfbLilfB3TzVKB-Hu_8hxfI5C3uY6vZgeV6tybSNn6Qx2lKNBsauuO4fX7YB48HZ8zsrge_Mthmh-cOpO2ElMA88Db4MRMrcZeiTg4qT3AIs0wHjL6jM-0rLIOzUR8onaeCyrilIIumozvPJ5-DcOs4v1nXKlfL4rUAI5vew8g68-pT-dgOyQnbgpDOUBJKwsiitBHl24h0X0lzM8iDG92lOAHmNBsHov9bMkp1drGeuzw"/>
<img alt="Participant" class="w-8 h-8 rounded-full border-2 border-surface-container" data-alt="A professional headshot of a female executive with confident posture and a warm smile, wearing modern business attire. The background features a subtle bokeh effect of a futuristic office with deep blue and cyan atmospheric lighting, matching a premium digital brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOLVVOe0Hli6P89c31vzofLji4NIpo23ZCiiWnoD5gwaXrp2d3KvnbCQp1usd_lCaD4CQ7OFzf-QsTvSv82D1FRkYB2jm94dRzYrdp1Dmv33GWmmoLgfrYblFMugXuUEJx6jA0s183QC7MHXgU98S1LsE8DjhsVJU4gz9pqXE6CoQ1bbvJscGT1WMAAAOMRSvA82RuHETUkRxvI1UvVIcJw_v6NRswqGupKL1BVPDFx8PzvQwGDkxD7keAXeqXKePyu0sHM-9So4Il"/>
<div class="w-8 h-8 rounded-full bg-surface-container-highest border-2 border-surface-container flex items-center justify-center text-[10px] font-bold text-on-surface-variant">+12</div>
</div>
<div class="flex gap-sm">
<button class="p-sm rounded-full hover:bg-surface-bright/50 text-primary transition-all material-symbols-outlined">radio_button_checked</button>
<button class="p-sm rounded-full hover:bg-surface-bright/50 text-primary transition-all material-symbols-outlined">timer</button>
<button class="p-sm rounded-full hover:bg-surface-bright/50 text-primary transition-all material-symbols-outlined">group_add</button>
</div>
</div>
</header>
<!-- Main Content Area (Video Grid + Sidebar) -->
<main class="pt-24 pb-32 px-container-padding h-screen flex gap-tile-gap">
<!-- Video Grid: Resized for Side Panel -->
<div class="flex-grow grid grid-cols-2 grid-rows-2 gap-tile-gap">
<!-- Main Speaker -->
<div class="relative rounded-lg overflow-hidden glass-panel border border-white/10 active-speaker-glow group">
<img class="w-full h-full object-cover" data-alt="A high-definition close-up of a female speaker in a professional setting, looking directly into the camera with an engaged expression. She is in a modern office with glass partitions and soft, cool-toned ambient lighting including deep blues and cyans. The overall mood is professional, innovative, and focused." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCq8tqKfzU6Iuk2YO8tk_kNX3hYRC5VL3FqJtD2tCFUfH0XkK7t5ceTz_LfIt5fNws3aX1sd0VqqfCky8vC4cvUkDYyNkQhJcyDNaQnbYX9VAbDKDK1k73Sb2WuI1Akzl46tzXIgJUoyyDLNiFVz1zQkhi4MMgkXJtsNPjk9-pdEcfVXm1euN1wXCsCKYUbzgD-k2a-uHzdKeJv_nlTkwT_doo1EH3UL30i60czRifDffxfSrl82NFbxuvGHcpE4gHCnf7TKLNFNE0D"/>
<div class="absolute bottom-md left-md px-md py-xs glass-panel rounded-full border border-white/20">
<span class="font-label-caps text-label-caps text-on-surface">Alex Rivera (Host)</span>
</div>
<div class="absolute top-md right-md p-xs glass-panel rounded-full text-secondary">
<span class="material-symbols-outlined text-[18px]">mic</span>
</div>
</div>
<!-- Participant 2 -->
<div class="relative rounded-lg overflow-hidden glass-panel border border-white/10 group">
<img class="w-full h-full object-cover grayscale-[20%] opacity-80" data-alt="A cinematic portrait of a male professional in a high-tech workspace, lit by the glow of multiple monitors displaying data charts in vibrant blues and purples. He is gesturing slightly as if participating in a conversation. The aesthetic is dark-mode focused with premium glass textures and atmospheric depth." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCpBiSQBKMAyOqoYHAn-p1i95abKJVyS_-5DBbJXxgw7lYcNqQV1JrDenYAytrLcZ-NgFwJsOHmHn4r8EG-QGRdKJs3O2FAJ577tpNrU-TjNGTp9HgUM9c5caYSgxsp1KuimeZmHe895TseVBSM7aUUclej5QRr9HPciOwBVqR2kGry0RNE_4F4rtsoEcbU6PbQFQtkhbHCLaCR5JWnECsZn8zwVkR27iHX9IlQ_l4De6SfCHKcBQvnaAEwTnPrVqrYgOghUbJ3XjWJ"/>
<div class="absolute bottom-md left-md px-md py-xs glass-panel rounded-full border border-white/20">
<span class="font-label-caps text-label-caps text-on-surface">Jordan Chen</span>
</div>
</div>
<!-- Participant 3 -->
<div class="relative rounded-lg overflow-hidden glass-panel border border-white/10 group">
<img class="w-full h-full object-cover grayscale-[20%] opacity-80" data-alt="A professional woman with a creative style sitting in a bright, modern studio. The lighting is soft and directional, creating elegant highlights and shadows. The color palette leans into the brand's secondary cyan and deep navy tones, emphasizing a focused and sophisticated professional environment." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB36MQgWMct5RJZq-qByxfSgWTEzGfvng5GbgqxublTS5p5LUsS_ecwWfVWBC78oRqTi951LqrtCABaCDKDRvF-LGk6YhXhm3HUzhCx20H2qhvv5Kb5cnPBrauzpuYOSFRSRZzlH2Co64PunAqEfRktX6KxVg7YATkqlY9392Bo5QlQvWLoZyw_kk0mpL-YsK3FSQecUmtzVhFmgpsnzegRoFkiLeFEoUICRdg40qIqfi0A0yu3wCKEz-eknWrSf1n7rJK_apg6WJLI"/>
<div class="absolute bottom-md left-md px-md py-xs glass-panel rounded-full border border-white/20">
<span class="font-label-caps text-label-caps text-on-surface">Sarah Miller</span>
</div>
</div>
<!-- Participant 4 (User) -->
<div class="relative rounded-lg overflow-hidden glass-panel border border-white/10 group">
<div class="w-full h-full bg-surface-container flex items-center justify-center">
<img alt="User Avatar" class="w-24 h-24 rounded-full bg-primary/10 p-md" data-alt="A stylized 3D avatar representation of a modern professional, featuring clean lines and a minimalist aesthetic. The character is set against a dark, cosmic-inspired background with subtle light leaks in electric blue and soft violet, evoking a sense of digital presence and identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCfWcMmBCG-Tx3rAQV9Pdsh93Fzm4V3r-1tdqxIHHNDLVaFUCENOhVjPl8DqEuS3r0gZRtsPKO1rBhip7X4bn_AXfN535uB6dX5ERnMZPgeMsCCtl4ZSoz9uDlFb61dRJliwEkZu1hp1WaHxZNr6uioDZu4Y_VP8XvA4xKCkhA_5JzMrNUVIyffUMlWFYLoINqMj1dyzGVBSkKX5s_-6WcR8GoNU2B16GyttFGjEu5N5Lsaxh790eRPpQ9mcCSBILMp5gXpLHJ5UiHs"/>
</div>
<div class="absolute bottom-md left-md px-md py-xs glass-panel rounded-full border border-white/20">
<span class="font-label-caps text-label-caps text-on-surface">You</span>
</div>
<div class="absolute top-md right-md p-xs glass-panel rounded-full text-error">
<span class="material-symbols-outlined text-[18px]">mic_off</span>
</div>
</div>
</div>
<!-- SideNavBar / AI Hub Panel -->
<aside class="fixed right-0 top-0 h-full z-40 flex flex-col docked right-0 h-full w-80 bg-surface-container-low/80 backdrop-blur-[32px] border-l border-outline-variant/30 shadow-2xl transition-all duration-300 ease-in-out">
<!-- Header -->
<div class="p-lg pt-24">
<div class="flex items-center justify-between mb-sm">
<h2 class="font-h2 text-h2 text-primary">Meeting Space</h2>
<span class="material-symbols-outlined text-tertiary">auto_awesome</span>
</div>
<p class="font-body-md text-on-surface-variant">Active Session: Q3 Vision</p>
</div>
<!-- Tabs -->
<div class="flex px-md border-b border-outline-variant/20">
<button class="flex-1 py-md flex flex-col items-center gap-xs text-on-surface-variant hover:bg-surface-variant/40 transition-all">
<span class="material-symbols-outlined">chat</span>
<span class="text-[10px] font-bold">Chat</span>
</button>
<button class="flex-1 py-md flex flex-col items-center gap-xs text-on-surface-variant hover:bg-surface-variant/40 transition-all">
<span class="material-symbols-outlined">group</span>
<span class="text-[10px] font-bold">People</span>
</button>
<button class="flex-1 py-md flex flex-col items-center gap-xs border-r-4 border-tertiary text-tertiary bg-tertiary-container/20 transition-all">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">smart_toy</span>
<span class="text-[10px] font-bold">AI Hub</span>
</button>
</div>
<!-- AI Insights Panel Content -->
<div class="flex-grow overflow-y-auto custom-scrollbar p-lg flex flex-col gap-lg">
<!-- Live Captions Section -->
<div>
<div class="flex items-center gap-sm mb-md">
<span class="material-symbols-outlined text-secondary text-[20px]">closed_caption</span>
<h3 class="font-label-caps text-label-caps text-secondary uppercase">AI Insights</h3>
</div>
<div class="space-y-md">
<div class="p-md rounded-lg bg-surface-container-highest/40 border border-white/5">
<p class="text-body-md text-on-surface italic leading-relaxed">
                                "...we should aim for a 20% increase in developer velocity by implementing the new orchestration layers by mid-August."
                            </p>
<span class="block mt-xs text-[10px] text-primary/70 font-bold">— Alex Rivera, 2m ago</span>
</div>
</div>
</div>
<!-- Meeting Summary Section -->
<div class="flex-grow">
<div class="flex items-center gap-sm mb-md">
<span class="material-symbols-outlined text-tertiary text-[20px]">summarize</span>
<h3 class="font-label-caps text-label-caps text-tertiary uppercase">Meeting Summary</h3>
</div>
<div class="p-md rounded-lg bg-surface-container-highest/60 border border-tertiary/20 shadow-inner">
<ul class="space-y-md">
<li class="flex gap-sm">
<span class="material-symbols-outlined text-tertiary text-[16px] mt-1">check_circle</span>
<p class="text-body-md text-on-surface-variant leading-snug">Approval of the <span class="text-primary font-bold">Stellar 2.0</span> design system timeline.</p>
</li>
<li class="flex gap-sm">
<span class="material-symbols-outlined text-tertiary text-[16px] mt-1">check_circle</span>
<p class="text-body-md text-on-surface-variant leading-snug">Decision to pivot resources from legacy maintenance to <span class="text-primary font-bold">AI Hub development</span>.</p>
</li>
<li class="flex gap-sm">
<span class="material-symbols-outlined text-tertiary text-[16px] mt-1">pending</span>
<p class="text-body-md text-on-surface-variant leading-snug">Budget allocation for the October creative summit (Pending CFO review).</p>
</li>
</ul>
</div>
</div>
<!-- AI Prompt Box -->
<div class="mt-auto">
<div class="relative">
<input class="w-full bg-surface-container-highest/40 border border-outline-variant/30 rounded-lg px-lg py-md text-body-md focus:ring-2 focus:ring-primary/50 transition-all outline-none" placeholder="Ask Stellar AI..." type="text"/>
<button class="absolute right-md top-1/2 -translate-y-1/2 material-symbols-outlined text-primary hover:scale-110 transition-transform">send</button>
</div>
</div>
</div>
</aside>
</main>
<!-- BottomNavBar: HUD Style -->
<nav class="fixed bottom-0 left-0 right-0 z-50 flex justify-center pb-lg">
<div class="bg-surface-container-highest/60 backdrop-blur-[40px] rounded-full mx-auto mb-lg w-fit border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)] flex items-center px-md py-sm gap-sm">
<!-- Mute -->
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 active:scale-90 transition-all duration-200 flex flex-col items-center gap-xs">
<span class="material-symbols-outlined">mic</span>
<span class="font-label-caps text-[10px]">Mute</span>
</button>
<!-- Video -->
<button class="bg-secondary-container text-on-secondary-container rounded-full p-md shadow-[0_0_15px_rgba(6,182,212,0.5)] hover:scale-110 active:scale-90 transition-all duration-200 flex flex-col items-center gap-xs">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">videocam</span>
<span class="font-label-caps text-[10px]">Video</span>
</button>
<!-- Share -->
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 active:scale-90 transition-all duration-200 flex flex-col items-center gap-xs">
<span class="material-symbols-outlined">screen_share</span>
<span class="font-label-caps text-[10px]">Share</span>
</button>
<!-- Raise -->
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 active:scale-90 transition-all duration-200 flex flex-col items-center gap-xs">
<span class="material-symbols-outlined">front_hand</span>
<span class="font-label-caps text-[10px]">Raise</span>
</button>
<!-- React -->
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 active:scale-90 transition-all duration-200 flex flex-col items-center gap-xs">
<span class="material-symbols-outlined">add_reaction</span>
<span class="font-label-caps text-[10px]">React</span>
</button>
<!-- End -->
<div class="h-8 w-[1px] bg-white/10 mx-sm"></div>
<button class="text-error bg-error-container/20 p-md rounded-full hover:bg-error-container/40 hover:scale-110 active:scale-90 transition-all duration-200 flex flex-col items-center gap-xs">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">call_end</span>
<span class="font-label-caps text-[10px]">End</span>
</button>
</div>
</nav>
</body></html>

page 1 : -------------------------------------------------------------------


<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    }
    body {
      background: radial-gradient(circle at top right, #122131, #051424);
      overflow: hidden;
    }
    .glass-border {
      border: 1px solid rgba(255, 255, 255, 0.1);
    }
    .inner-glow {
      box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.1);
    }
    .active-speaker-glow {
      box-shadow: 0 0 15px rgba(6, 182, 212, 0.5);
    }
  </style>
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
            "error": "#ffb4ab",
            "inverse-primary": "#005ac2",
            "error-container": "#93000a",
            "surface-bright": "#2c3a4c",
            "on-primary-container": "#00285d",
            "outline-variant": "#424754",
            "surface-container-lowest": "#010f1f",
            "on-error-container": "#ffdad6",
            "on-primary-fixed-variant": "#004395",
            "on-secondary-fixed-variant": "#004e5c",
            "on-surface": "#d4e4fa",
            "on-primary": "#002e6a",
            "tertiary-fixed": "#e9ddff",
            "surface": "#051424",
            "on-secondary-fixed": "#001f26",
            "on-tertiary": "#3c0091",
            "surface-container-highest": "#273647",
            "background": "#051424",
            "on-tertiary-fixed": "#23005c",
            "primary-container": "#4d8eff",
            "secondary-fixed": "#acedff",
            "tertiary-fixed-dim": "#d0bcff",
            "surface-tint": "#adc6ff",
            "secondary-container": "#03b5d3",
            "secondary": "#4cd7f6",
            "on-primary-fixed": "#001a42",
            "on-surface-variant": "#c2c6d6",
            "tertiary": "#d0bcff",
            "outline": "#8c909f",
            "surface-variant": "#273647",
            "surface-container-high": "#1c2b3c",
            "surface-container": "#122131",
            "on-secondary-container": "#00424e",
            "primary-fixed-dim": "#adc6ff",
            "on-background": "#d4e4fa",
            "on-secondary": "#003640",
            "primary-fixed": "#d8e2ff",
            "primary": "#adc6ff",
            "tertiary-container": "#a078ff",
            "surface-container-low": "#0d1c2d",
            "inverse-on-surface": "#233143",
            "secondary-fixed-dim": "#4cd7f6",
            "on-tertiary-fixed-variant": "#5516be",
            "on-tertiary-container": "#340080",
            "on-error": "#690005",
            "surface-dim": "#051424",
            "inverse-surface": "#d4e4fa"
          },
          "borderRadius": {
            "DEFAULT": "1rem",
            "lg": "2rem",
            "xl": "3rem",
            "full": "9999px"
          },
          "spacing": {
            "sm": "8px",
            "lg": "24px",
            "tile-gap": "20px",
            "unit": "4px",
            "container-padding": "32px",
            "md": "16px",
            "xs": "4px",
            "xl": "40px"
          },
          "fontFamily": {
            "h3": ["Space Grotesk"],
            "h1": ["Space Grotesk"],
            "body-lg": ["Inter"],
            "body-md": ["Inter"],
            "label-caps": ["Inter"],
            "h2": ["Space Grotesk"]
          },
          "fontSize": {
            "h3": ["24px", {"lineHeight": "1.3", "letterSpacing": "0.04em", "fontWeight": "500"}],
            "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
            "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0.01em", "fontWeight": "400"}],
            "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0.01em", "fontWeight": "400"}],
            "label-caps": ["12px", {"lineHeight": "1.0", "letterSpacing": "0.15em", "fontWeight": "600"}],
            "h2": ["32px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "600"}]
          }
        },
      },
    }
  </script>
</head>
<body class="bg-background text-on-surface min-h-screen flex flex-col font-body-md">
<!-- TopAppBar -->
<header class="fixed top-0 left-0 right-0 z-50 flex justify-between items-center w-full px-lg py-sm bg-surface/40 backdrop-blur-xl border-b border-outline-variant/20 shadow-lg transition-all duration-300 ease-in-out">
<div class="flex items-center gap-md">
<h1 class="font-h3 text-h3 font-bold text-primary">Stellar Sync Pro</h1>
<div class="hidden md:flex items-center gap-sm bg-surface-container/60 px-md py-xs rounded-full border border-white/5">
<span class="material-symbols-outlined text-secondary text-[18px]" style="font-variation-settings: 'FILL' 1;">fiber_manual_record</span>
<span class="font-label-caps text-label-caps text-on-surface-variant">01:24:05</span>
</div>
</div>
<div class="flex items-center gap-md">
<div class="flex items-center -space-x-2">
<img alt="Participant" class="w-8 h-8 rounded-full border-2 border-surface shadow-sm" data-alt="A professional headshot of a creative director in a high-tech studio environment. The lighting is moody with cool cyan highlights that reflect the futuristic workspace. She wears modern minimalist attire, and the overall aesthetic is clean, sharp, and technologically advanced, fitting a high-end software interface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBMMmYUHGuZPUjdIk2CqAEQ_hBgIKxwo9xGd_KtMYsWE9TfkXUibq1hQoiDEYkVvti1SKu77TDfyWclawzfqr8mJboyzOqdUHFOs88lII9vhXh0wRZqWgAPFb7lu0_J2mKgyGy5UwdixtlwjYvDXXGugSigqQCaYASqNC94sr_VQRN90Ej8YgLKvTs1Hy5tNJH9I0Ph0xZoY00ROH8sqeqocF449W76LFDEG3trsKb0E4Tgg-IyyhmiSdtjRz30BlxzPV1DvHD-uOsu"/>
<img alt="Participant" class="w-8 h-8 rounded-full border-2 border-surface shadow-sm" data-alt="A portrait of a male tech professional with a warm, focused expression. He is set against a blurred background of a modern office with glowing digital displays. The image uses a palette of deep blues and soft whites, maintaining a premium and immersive feel consistent with a cosmic design system." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXDMXWT0xPd4YFgHkh0fq9KGK2hRujMddlFSzjU146jh2U9slpqbdgBgD6O9X-24X4dw2O3GgVAJ1cI_uCNGQSPkQbcprDu6v3txrfdgEQHHxvl3sKzpvM6RL5b701uk0DX2tFK2aO7T8PZpOK_tE4nFezK55ZtZadqiSpgezbUs8HWWaXRv61jO5nFtqNhKiG6uU8Ksk-P1QnELJWw31lQ9sRR7qjb51rdIaDIfe6iZZ7LyDfvFJ3-p8wrTZ9kPIu9C9c5WMY4_qd"/>
<div class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center border-2 border-surface text-[10px] font-bold text-on-primary-container">+12</div>
</div>
<div class="flex items-center gap-xs">
<button class="p-sm rounded-full text-on-surface-variant hover:bg-surface-bright/50 transition-all duration-300 ease-in-out">
<span class="material-symbols-outlined">radio_button_checked</span>
</button>
<button class="p-sm rounded-full text-on-surface-variant hover:bg-surface-bright/50 transition-all duration-300 ease-in-out">
<span class="material-symbols-outlined">timer</span>
</button>
<button class="p-sm rounded-full text-on-surface-variant hover:bg-surface-bright/50 transition-all duration-300 ease-in-out">
<span class="material-symbols-outlined">group_add</span>
</button>
</div>
</div>
</header>
<!-- Main Content Canvas -->
<main class="flex-1 mt-[64px] flex relative h-[calc(100vh-64px)] overflow-hidden p-container-padding gap-tile-gap">
<!-- Video Grid (Left Side) -->
<div class="flex-1 grid grid-cols-2 grid-rows-2 gap-tile-gap transition-all duration-500 mr-80">
<!-- Video Tile 1 (Active Speaker) -->
<div class="relative rounded-lg overflow-hidden glass-border bg-surface-container-low/40 backdrop-blur-md active-speaker-glow border-2 border-secondary/50">
<img alt="Sarah Jenkins" class="w-full h-full object-cover" data-alt="A high-definition close-up of a female speaker during a video conference. She is gesturing expressively, set against a background of soft, out-of-focus tech equipment and blue ambient lighting. The visual style is crisp and cinematic, with a focus on professional communication and futuristic aesthetics." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8AcfSEko0iUs5iy3Oje84CpVQJHscth7rTq2DOOpeFUcNwqd4sVgOmDJxoeCrqkgz1TWJbTfhUm0Gh7zNi_i360GB3clR337CAYVK7R7F0iNYhlKG1cVFkHD-PGxkYC3_7UI3IwoVoE33edpUVFFXN3gKFB84vKfbXjk_cvJO6pKr5uMGetbWaHObwHxCtIijCpJZTW99NV21rp65_ogLn28ODhhjll3dovc280HRipV5e5dBV0ATuD0Mh-tBN0bKGJxcNlaamDPs"/>
<div class="absolute bottom-md left-md bg-surface-container-highest/60 backdrop-blur-md px-md py-xs rounded-full border border-white/10 flex items-center gap-xs">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">mic</span>
<span class="font-label-caps text-label-caps text-on-surface">Sarah Jenkins</span>
</div>
<div class="absolute top-md right-md">
<div class="bg-secondary/20 border border-secondary text-secondary px-sm py-1 rounded-full flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-secondary animate-pulse"></span>
<span class="text-[10px] font-bold tracking-widest uppercase">Live</span>
</div>
</div>
</div>
<!-- Video Tile 2 -->
<div class="relative rounded-lg overflow-hidden glass-border bg-surface-container-low/40 backdrop-blur-md border border-white/5">
<img alt="Marcus Chen" class="w-full h-full object-cover grayscale-[20%]" data-alt="A portrait of a male participant in a video call, looking directly into the camera with a calm and engaged expression. The lighting is soft and directional, creating a polished, high-fidelity look. The setting is a minimalist home office with subtle dark tones and high-quality textures." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbix9VVHeuSRyOqDl0tSghB6KGZGU_J2I_vzGt71l2vHu8NKPR4eUNXjjbHutzaVK-C5NTXZzz0TGuIiSp7wGR7tOfZCJRijvaK2vCB01N_NeAX74Ju6wYtwu3Op-Airb9Saq16WJFrqbZYJy4W26nSdD8n1uoH5UKT0TY-XnWOpEWMM9wPdOKf4vjQ2HHNTWTAOY4AMTCAE9zSMHsvkincINRZENP8LYK7SDRvcEU-V2FY03HFUvwVRCQZY-HZuUBwNtFNXyDIIa4"/>
<div class="absolute bottom-md left-md bg-surface-container-highest/60 backdrop-blur-md px-md py-xs rounded-full border border-white/10 flex items-center gap-xs">
<span class="material-symbols-outlined text-on-surface-variant text-sm">mic</span>
<span class="font-label-caps text-label-caps text-on-surface">Marcus Chen</span>
</div>
</div>
<!-- Video Tile 3 -->
<div class="relative rounded-lg overflow-hidden glass-border bg-surface-container-low/40 backdrop-blur-md border border-white/5">
<img alt="Elena Rodriguez" class="w-full h-full object-cover" data-alt="A woman in a professional tech environment, participating in a virtual meeting. She is wearing stylish glasses and looking at her screen. The image features a cool-toned color palette with deep blues and glass-like reflections, emphasizing a modern and sophisticated digital experience." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB2kdmQjUGLr_Ha93Kfh9c2sOdbFXA1XIqH5hO5-8e0hDhx-AZcLMfSDvuEOsSCsZofu1seL3RcUj33KCvmKStsAao_VEDjcXWttIzYDvfQiZRPPJg2t55x9a2TPbYHlTFY8WIPERqGhRuDCZPrAZIev5dwFckOL302A-R9WRWdZKrHBDo50KhBB8brZ-uGGGTnz-YCpfWRd0tHB3BxIz4EHSWM0tTDgz2y3svIaHWz21h1sZh1fK9-E6tLYT3qPpMeExYNFkeVpO_p"/>
<div class="absolute bottom-md left-md bg-surface-container-highest/60 backdrop-blur-md px-md py-xs rounded-full border border-white/10 flex items-center gap-xs">
<span class="material-symbols-outlined text-secondary text-sm" style="font-variation-settings: 'FILL' 1;">mic</span>
<span class="font-label-caps text-label-caps text-on-surface">Elena Rodriguez</span>
</div>
</div>
<!-- Video Tile 4 -->
<div class="relative rounded-lg overflow-hidden glass-border bg-surface-container-low/40 backdrop-blur-md border border-white/5">
<div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-surface-container-high to-surface-container-lowest">
<div class="w-24 h-24 rounded-full bg-surface-bright flex items-center justify-center border border-white/10 shadow-2xl">
<span class="text-h2 font-h2 text-tertiary">JD</span>
</div>
</div>
<div class="absolute bottom-md left-md bg-surface-container-highest/60 backdrop-blur-md px-md py-xs rounded-full border border-white/10 flex items-center gap-xs">
<span class="material-symbols-outlined text-error text-sm" style="font-variation-settings: 'FILL' 1;">mic_off</span>
<span class="font-label-caps text-label-caps text-on-surface">Jordan Dupré</span>
</div>
</div>
</div>
<!-- SideNavBar (Chat Open) -->
<aside class="fixed right-0 top-0 h-full z-40 flex flex-col bg-surface-container-low/80 backdrop-blur-[32px] border-l border-outline-variant/30 shadow-2xl w-80 ease-in-out duration-300">
<div class="p-lg pt-[80px]">
<h2 class="font-h2 text-h2 text-primary">Meeting Space</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Active Session</p>
</div>
<!-- Tab Navigation -->
<div class="flex px-md border-b border-outline-variant/20">
<button class="flex-1 py-md flex flex-col items-center gap-1 border-r-4 border-tertiary text-tertiary bg-tertiary-container/20 ease-in-out duration-300">
<span class="material-symbols-outlined">chat</span>
<span class="font-label-caps text-[10px]">Chat</span>
</button>
<button class="flex-1 py-md flex flex-col items-center gap-1 text-on-surface-variant hover:bg-surface-variant/40 ease-in-out duration-300">
<span class="material-symbols-outlined">group</span>
<span class="font-label-caps text-[10px]">People</span>
</button>
<button class="flex-1 py-md flex flex-col items-center gap-1 text-on-surface-variant hover:bg-surface-variant/40 ease-in-out duration-300">
<span class="material-symbols-outlined">smart_toy</span>
<span class="font-label-caps text-[10px]">AI Hub</span>
</button>
</div>
<!-- Chat Thread -->
<div class="flex-1 overflow-y-auto p-md space-y-lg custom-scrollbar">
<!-- Message 1 -->
<div class="flex flex-col gap-sm">
<div class="flex items-center justify-between">
<span class="font-label-caps text-[10px] text-on-surface-variant">Sarah Jenkins • 10:42 AM</span>
</div>
<div class="bg-surface-container-highest/40 glass-border p-md rounded-tr-lg rounded-bl-lg rounded-br-lg text-body-md inner-glow">
            Hey everyone, did you see the latest sync updates for the project?
          </div>
</div>
<!-- Message 2 -->
<div class="flex flex-col gap-sm">
<div class="flex items-center justify-between">
<span class="font-label-caps text-[10px] text-on-surface-variant">Marcus Chen • 10:43 AM</span>
</div>
<div class="bg-surface-container-highest/40 glass-border p-md rounded-tr-lg rounded-bl-lg rounded-br-lg text-body-md inner-glow">
            Yes! The new glassmorphism components look amazing. The depth on the video tiles is really helping focus.
          </div>
</div>
<!-- Message 3 (User) -->
<div class="flex flex-col gap-sm items-end">
<div class="flex items-center justify-between">
<span class="font-label-caps text-[10px] text-tertiary">You • 10:44 AM</span>
</div>
<div class="bg-tertiary-container/30 border border-tertiary/30 p-md rounded-tl-lg rounded-bl-lg rounded-br-lg text-body-md inner-glow text-right">
            I'm currently working on the AI Hub integration. Should have a preview ready by the end of the call.
          </div>
</div>
<!-- Message 4 -->
<div class="flex flex-col gap-sm">
<div class="flex items-center justify-between">
<span class="font-label-caps text-[10px] text-on-surface-variant">Elena Rodriguez • 10:45 AM</span>
</div>
<div class="bg-surface-container-highest/40 glass-border p-md rounded-tr-lg rounded-bl-lg rounded-br-lg text-body-md inner-glow">
            Can we check the responsiveness on mobile? I'll share my screen in a minute.
          </div>
</div>
</div>
<!-- Chat Input Field -->
<div class="p-md bg-surface-container-low border-t border-outline-variant/30">
<div class="relative flex items-center bg-surface-container-highest/60 glass-border rounded-full px-md py-sm inner-glow group">
<input class="bg-transparent border-none focus:ring-0 text-body-md w-full placeholder-on-surface-variant/50" placeholder="Type a message..." type="text"/>
<button class="text-secondary hover:scale-110 transition-transform">
<span class="material-symbols-outlined">send</span>
</button>
</div>
</div>
</aside>
</main>
<!-- BottomNavBar (Controls HUD) -->
<nav class="fixed bottom-0 left-0 right-0 z-50 flex justify-center pb-lg">
<div class="bg-surface-container-highest/60 backdrop-blur-[40px] rounded-full mx-auto w-fit border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)] flex items-center px-sm py-xs">
<!-- Mute -->
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 transition-all duration-300 ease-in-out flex flex-col items-center gap-1 group">
<span class="material-symbols-outlined">mic</span>
<span class="font-label-caps text-[10px] opacity-0 group-hover:opacity-100 transition-opacity">Mute</span>
</button>
<!-- Video -->
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 transition-all duration-300 ease-in-out flex flex-col items-center gap-1 group">
<span class="material-symbols-outlined">videocam</span>
<span class="font-label-caps text-[10px] opacity-0 group-hover:opacity-100 transition-opacity">Video</span>
</button>
<!-- Share -->
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 transition-all duration-300 ease-in-out flex flex-col items-center gap-1 group">
<span class="material-symbols-outlined">screen_share</span>
<span class="font-label-caps text-[10px] opacity-0 group-hover:opacity-100 transition-opacity">Share</span>
</button>
<!-- Raise -->
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 transition-all duration-300 ease-in-out flex flex-col items-center gap-1 group">
<span class="material-symbols-outlined">front_hand</span>
<span class="font-label-caps text-[10px] opacity-0 group-hover:opacity-100 transition-opacity">Raise</span>
</button>
<!-- React -->
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 transition-all duration-300 ease-in-out flex flex-col items-center gap-1 group">
<span class="material-symbols-outlined">add_reaction</span>
<span class="font-label-caps text-[10px] opacity-0 group-hover:opacity-100 transition-opacity">React</span>
</button>
<!-- End (Active/Danger) -->
<button class="bg-error/20 text-error rounded-full p-md shadow-[0_0_15px_rgba(239,68,68,0.3)] hover:scale-110 transition-all duration-300 ease-in-out flex flex-col items-center gap-1 group">
<span class="material-symbols-outlined">call_end</span>
<span class="font-label-caps text-[10px] opacity-0 group-hover:opacity-100 transition-opacity">End</span>
</button>
</div>
</nav>
<!-- Background Ambient Glows -->
<div class="fixed top-[-10%] right-[-10%] w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px] pointer-events-none z-0"></div>
<div class="fixed bottom-[-10%] left-[-10%] w-[500px] h-[500px] bg-secondary/10 rounded-full blur-[120px] pointer-events-none z-0"></div>
</body></html>

page 1 : -------------------------------------------------------------------

<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&amp;family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "error": "#ffb4ab",
                        "inverse-primary": "#005ac2",
                        "error-container": "#93000a",
                        "surface-bright": "#2c3a4c",
                        "on-primary-container": "#00285d",
                        "outline-variant": "#424754",
                        "surface-container-lowest": "#010f1f",
                        "on-error-container": "#ffdad6",
                        "on-primary-fixed-variant": "#004395",
                        "on-secondary-fixed-variant": "#004e5c",
                        "on-surface": "#d4e4fa",
                        "on-primary": "#002e6a",
                        "tertiary-fixed": "#e9ddff",
                        "surface": "#051424",
                        "on-secondary-fixed": "#001f26",
                        "on-tertiary": "#3c0091",
                        "surface-container-highest": "#273647",
                        "background": "#051424",
                        "on-tertiary-fixed": "#23005c",
                        "primary-container": "#4d8eff",
                        "secondary-fixed": "#acedff",
                        "tertiary-fixed-dim": "#d0bcff",
                        "surface-tint": "#adc6ff",
                        "secondary-container": "#03b5d3",
                        "secondary": "#4cd7f6",
                        "on-primary-fixed": "#001a42",
                        "on-surface-variant": "#c2c6d6",
                        "tertiary": "#d0bcff",
                        "outline": "#8c909f",
                        "surface-variant": "#273647",
                        "surface-container-high": "#1c2b3c",
                        "surface-container": "#122131",
                        "on-secondary-container": "#00424e",
                        "primary-fixed-dim": "#adc6ff",
                        "on-background": "#d4e4fa",
                        "on-secondary": "#003640",
                        "primary-fixed": "#d8e2ff",
                        "primary": "#adc6ff",
                        "tertiary-container": "#a078ff",
                        "surface-container-low": "#0d1c2d",
                        "inverse-on-surface": "#233143",
                        "secondary-fixed-dim": "#4cd7f6",
                        "on-tertiary-fixed-variant": "#5516be",
                        "on-tertiary-container": "#340080",
                        "on-error": "#690005",
                        "surface-dim": "#051424",
                        "inverse-surface": "#d4e4fa"
                    },
                    "borderRadius": {
                        "DEFAULT": "1rem",
                        "lg": "2rem",
                        "xl": "3rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "sm": "8px",
                        "lg": "24px",
                        "tile-gap": "20px",
                        "unit": "4px",
                        "container-padding": "32px",
                        "md": "16px",
                        "xs": "4px",
                        "xl": "40px"
                    },
                    "fontFamily": {
                        "h3": ["Space Grotesk"],
                        "h1": ["Space Grotesk"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "label-caps": ["Inter"],
                        "h2": ["Space Grotesk"]
                    },
                    "fontSize": {
                        "h3": ["24px", {"lineHeight": "1.3", "letterSpacing": "0.04em", "fontWeight": "500"}],
                        "h1": ["48px", {"lineHeight": "1.1", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-lg": ["18px", {"lineHeight": "1.6", "letterSpacing": "0.01em", "fontWeight": "400"}],
                        "body-md": ["16px", {"lineHeight": "1.6", "letterSpacing": "0.01em", "fontWeight": "400"}],
                        "label-caps": ["12px", {"lineHeight": "1.0", "letterSpacing": "0.15em", "fontWeight": "600"}],
                        "h2": ["32px", {"lineHeight": "1.2", "letterSpacing": "0.02em", "fontWeight": "600"}]
                    }
                }
            }
        }
    </script>
<style>
        .glass-panel {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.01) 100%);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .active-speaker-glow {
            box-shadow: 0 0 15px 0px #06B6D4;
            border: 2px solid #06B6D4;
        }
        .inner-glow {
            box-shadow: inset 0 0 10px rgba(255, 255, 255, 0.05);
        }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen font-body-md overflow-hidden flex flex-col">
<header class="fixed top-0 left-0 right-0 z-50 bg-surface/40 backdrop-blur-xl border-b border-outline-variant/20 shadow-lg flex justify-between items-center w-full px-lg py-sm transition-all duration-300 ease-in-out">
<div class="flex items-center gap-md">
<span class="font-h3 text-h3 font-bold text-primary">Stellar Sync Pro</span>
<div class="px-sm py-xs bg-secondary-container/20 border border-secondary/30 rounded-full flex items-center gap-xs">
<span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
<span class="font-label-caps text-label-caps text-secondary">LIVE: 01:24:05</span>
</div>
</div>
<div class="flex items-center gap-md">
<button class="p-sm rounded-full text-on-surface-variant hover:bg-surface-bright/50 transition-all">
<span class="material-symbols-outlined" data-icon="radio_button_checked">radio_button_checked</span>
</button>
<button class="p-sm rounded-full text-on-surface-variant hover:bg-surface-bright/50 transition-all">
<span class="material-symbols-outlined" data-icon="timer">timer</span>
</button>
<button class="p-sm rounded-full text-on-surface-variant hover:bg-surface-bright/50 transition-all">
<span class="material-symbols-outlined" data-icon="group_add">group_add</span>
</button>
<div class="w-10 h-10 rounded-full border-2 border-primary/40 overflow-hidden ml-md">
<img alt="Participant avatar stack" class="w-full h-full object-cover" data-alt="A professional close-up portrait of a tech executive with soft cinematic lighting against a dark, blurred cosmic background. The subject has a calm, confident expression, fitting the futuristic and premium aesthetic of a high-end digital collaboration platform. Deep navy and cyan tones dominate the environment, reflecting the brand's sophisticated color palette." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBq4jEEAophnRFIo-g_F95ZOrOe1KwFwsOA8PZxK22-mtEckzCq1wu4AWYygLuFvzLid_wH7WhGv4J6FQyTmGH99AVubxzTWDt3diXHQMbdiibNtiv6LgtIFdcm7e3yfwiad0fQqN47Cm5A1ckJ-pbSlb4EH1-Zk4YSwr10_ryCoyhkTWYNZHqt7CpKsTTHHRD3rGy6woQQHeDruNSnSg_C4Bu4ar44oB__pXJr3MqfJKA4VzWQcjR4orHFhrT2FZSHjeOyNqYP4_Cg"/>
</div>
</div>
</header>
<main class="flex-grow flex pt-20 pb-32 px-container-padding gap-tile-gap relative">
<div class="flex-grow grid grid-cols-2 grid-rows-2 gap-tile-gap h-full">
<div class="relative rounded-lg overflow-hidden glass-panel active-speaker-glow transition-all duration-500">
<img alt="Active Speaker" class="w-full h-full object-cover opacity-80" data-alt="A high-definition video feed of a diverse female professional speaking during a virtual meeting. She is in a minimalist home office with warm ambient lighting. The shot is framed with a professional 16:9 aspect ratio, maintaining consistent depth and high-fidelity detail consistent with a premium cosmic-themed UI." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA2OyJuX9Do_h3Wgro5zrJjHWhn2GWQ8Mucq9S_1d4J-cVNw94vGUcyz09xgNgAoBKoMPyboke2kyca0Wh4XRWcbuI3TmzB3QSWmgB6tIdE_VlP_gLKoyBbyS1fog-RbsgK8cwo-g_0-2kRKqGS40IQYtQZvfOS1_YWc0PnTcOU2h4bKA7YTMxtVLLofdPIk5NgXlw0cZCZr76YqvDAk5gRCGl1Ug6lXPEN86R7UrWWFxUH98AWFHfZBTmvpqjSeFNmMvYwRL7bmS1s"/>
<div class="absolute bottom-md left-md px-md py-sm bg-surface-container-highest/60 backdrop-blur-xl rounded-full border border-white/10 flex items-center gap-sm">
<span class="font-label-caps text-label-caps text-on-surface">Alex Rivera (Host)</span>
<span class="material-symbols-outlined text-secondary text-sm" data-icon="mic">mic</span>
</div>
</div>
<div class="relative rounded-lg overflow-hidden glass-panel border-white/10">
<img alt="Participant 1" class="w-full h-full object-cover opacity-60" data-alt="A professional male participant in a video call, seated in a high-tech studio environment with subtle blue and purple backlighting. The lighting is soft and directional, creating a polished, cinematic feel that aligns with a futuristic workspace aesthetic. The composition follows the rule of thirds for a professional broadcast look." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBdTgu4Ym4RqluMEker1hlcb2GC_HMCYuERyfKkN2_05FhE-p3UDpStLABwdms1DeLugu8HN0TYIMS_VwsnrJh3DtJgzn6iJKFXb6V4_JQa3Yp7YTP6fbunm4wLrWAWkydvXXzUpuOPB1vjmCPRJvSv5nncxFel9BM_6sVxzRUtPEsbCGPhPaiFiAZTR9_XpH-vyDa8avdk4ytnjZEEDJB6GdFK-47soHFYU_xSGfC-qpaDGto5fj8hepcUKVYsD4roaixEmFpqI2zc"/>
<div class="absolute bottom-md left-md px-md py-sm bg-surface-container-highest/60 backdrop-blur-xl rounded-full border border-white/10 flex items-center gap-sm">
<span class="font-label-caps text-label-caps text-on-surface">Jordan Chen</span>
<span class="material-symbols-outlined text-secondary text-sm" data-icon="mic">mic</span>
</div>
</div>
<div class="relative rounded-lg overflow-hidden glass-panel border-white/10">
<div class="w-full h-full bg-surface-container-low flex items-center justify-center">
<div class="w-24 h-24 rounded-full bg-tertiary-container/20 border border-tertiary/30 flex items-center justify-center">
<span class="font-h2 text-h2 text-tertiary">MS</span>
</div>
</div>
<div class="absolute bottom-md left-md px-md py-sm bg-surface-container-highest/60 backdrop-blur-xl rounded-full border border-white/10 flex items-center gap-sm">
<span class="font-label-caps text-label-caps text-on-surface">Morgan Smith</span>
<span class="material-symbols-outlined text-error text-sm" data-icon="mic_off">mic_off</span>
</div>
</div>
<div class="relative rounded-lg overflow-hidden glass-panel border-white/10">
<img alt="Participant 3" class="w-full h-full object-cover opacity-60" data-alt="A close-up of a smiling professional woman during a video conference, set against a blurred background of a modern urban apartment at dusk. The lighting is vibrant yet soft, using cool blue tones from a digital screen to illuminate her face. The high-fidelity image quality emphasizes a focused and calm atmosphere." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDI8sgkCgHHOaqjLlEBKcw8_zKKWTdRkJ5zrbNTrJZS-H-kgWBMPZHfH2IB2cCsBlBMO65j9RTObArX4z2D5mHHL5f2mov9k_hlX_XellXyPapmErtWiLEyQhvKhXwQ5YaSpZB2MKSv2Vmo1o32vRM2JlwYNGBUSuq2qgZ_OUxXu7WBeSOKReHax8MgOwt1RCuBJVMssqMNwhUlA9mkzxhYfMsipz5_yx_eXAJC1zzccHiKUUyqk6v0aYLDesPTL6xNaThyw-Kr7Eg9"/>
<div class="absolute bottom-md left-md px-md py-sm bg-surface-container-highest/60 backdrop-blur-xl rounded-full border border-white/10 flex items-center gap-sm">
<span class="font-label-caps text-label-caps text-on-surface">Elena Vogt</span>
<span class="material-symbols-outlined text-secondary text-sm" data-icon="mic">mic</span>
</div>
</div>
</div>
<aside class="fixed right-0 top-0 h-full z-40 flex flex-col bg-surface-container-low/80 backdrop-blur-[32px] border-l border-outline-variant/30 shadow-2xl w-80 font-body-md text-body-md transition-all ease-in-out duration-300">
<div class="p-lg pt-24 border-b border-outline-variant/30">
<div class="flex justify-between items-start mb-sm">
<div>
<h2 class="font-h2 text-h2 text-primary">People</h2>
<p class="text-on-surface-variant text-sm">Active Session • 12 Online</p>
</div>
<button class="w-10 h-10 rounded-full flex items-center justify-center bg-white/5 hover:bg-white/10 transition-colors">
<span class="material-symbols-outlined" data-icon="close">close</span>
</button>
</div>
<button class="w-full mt-lg py-md bg-gradient-to-r from-secondary-container to-secondary text-on-secondary-container font-bold rounded-lg flex items-center justify-center gap-sm shadow-lg hover:brightness-110 transition-all">
<span class="material-symbols-outlined" data-icon="person_add">person_add</span>
<span>Invite Participant</span>
</button>
</div>
<div class="flex-grow overflow-y-auto p-md space-y-sm">
<div class="p-md rounded-lg flex items-center gap-md border-r-4 border-tertiary text-tertiary bg-tertiary-container/20">
<div class="w-10 h-10 rounded-full border border-tertiary/40 overflow-hidden shrink-0">
<img alt="Host" class="w-full h-full object-cover" data-alt="Small thumbnail avatar of a woman with short dark hair in professional attire, lit with soft workspace lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTXkUXjKRdk-41ez4clFUOksqtYxrU2R2dBH--6dnLmp63-X5rdMQwhlB1_-78Hg4AzsBoqPe8nO1899uWhZBH_ldqPUK66rTrUT30_4bSN-gkmcpV4GvHklrlBI8bpo9cpDuZoLohf3UxCWrN9Zr05O7IfzWTTisrSry6QPnvonHxPtTGsLikbLRLIBbosPv8z_blNvxqI9yWS3ymahkq4WCeSIGYjj0MeQqjmC4zf7b3Uu0ksBUVQedFkDinwfFKzD7ug2OpTtNb"/>
</div>
<div class="flex-grow">
<p class="font-bold text-sm leading-none">Alex Rivera</p>
<p class="text-xs opacity-70">Host • Speaking</p>
</div>
<div class="flex gap-sm">
<span class="material-symbols-outlined text-secondary text-[20px]" data-icon="mic">mic</span>
<span class="material-symbols-outlined text-secondary text-[20px]" data-icon="videocam">videocam</span>
</div>
</div>
<div class="p-md rounded-lg flex items-center gap-md text-on-surface-variant hover:bg-surface-variant/40 transition-all">
<div class="w-10 h-10 rounded-full border border-outline/40 overflow-hidden shrink-0">
<img alt="User" class="w-full h-full object-cover" data-alt="Thumbnail avatar of a male professional with glasses, set against a dark studio background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUip0ADbLuufoyusCsO1SQ9j_ShdHz4h5tquwMsEg7Ysu9Nlyw7YqBx5rrZ6pNbk74zYsuwX6KP3MsusFvs1jgoZrkfFTC1QnSIEOk_LV6gvZFIBDOOmsR4H4pCe6_jYWoCyjm5TMrLHH-0J3DU0xFz4641PeVgosr2BtgbS4mAjPJz2G3U4ke-ihj4Ik7c_cYaopcVhglW_Yjl-q3a_CLmGos_iynkhvYIbEusf2V0BnaQdhO6GsDF9HLQsVB73BixJNDKJpWXO4V"/>
</div>
<div class="flex-grow">
<p class="font-bold text-sm leading-none">Jordan Chen</p>
<p class="text-xs opacity-70">Frontend Lead</p>
</div>
<div class="flex gap-sm">
<span class="material-symbols-outlined text-secondary text-[20px]" data-icon="mic">mic</span>
<span class="material-symbols-outlined text-secondary text-[20px]" data-icon="videocam">videocam</span>
</div>
</div>
<div class="p-md rounded-lg flex items-center gap-md text-on-surface-variant hover:bg-surface-variant/40 transition-all">
<div class="w-10 h-10 rounded-full bg-surface-container-high border border-outline/20 flex items-center justify-center shrink-0">
<span class="text-xs font-bold">MS</span>
</div>
<div class="flex-grow">
<p class="font-bold text-sm leading-none">Morgan Smith</p>
<p class="text-xs opacity-70">UX Designer</p>
</div>
<div class="flex gap-sm">
<span class="material-symbols-outlined text-error text-[20px]" data-icon="mic_off">mic_off</span>
<span class="material-symbols-outlined text-secondary text-[20px]" data-icon="videocam">videocam</span>
</div>
</div>
<div class="p-md rounded-lg flex items-center gap-md text-on-surface-variant hover:bg-surface-variant/40 transition-all">
<div class="w-10 h-10 rounded-full border border-outline/40 overflow-hidden shrink-0">
<img alt="User" class="w-full h-full object-cover" data-alt="Thumbnail avatar of a woman with blonde hair, professional portrait lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOjlhZxATseiGcOCd529EqA7rABvEhftgPkfrd5hRL99OK4_sK5IGmb2d0WTTeR0J-a_84nIlILgJBO2XK2Z1mqkMjnEGSNDkGeSrx2nyJBsPv_J5VhMfAMCuvufsP7OPZ3Glsm5BwrIAgzZQJacP97pA0ENXN9YGj3-t40FVR8ub0NjELYkS14ipwrzZ0wvnNY0NSvVMzz-MzHC-GDjcd5u_DC110cb_RGH7sA_LxTCOGYDGSujVyVsmvcReavIGJNVkov5liWVJI"/>
</div>
<div class="flex-grow">
<p class="font-bold text-sm leading-none">Elena Vogt</p>
<p class="text-xs opacity-70">Producer</p>
</div>
<div class="flex gap-sm">
<span class="material-symbols-outlined text-secondary text-[20px]" data-icon="mic">mic</span>
<span class="material-symbols-outlined text-error text-[20px]" data-icon="videocam_off">videocam_off</span>
</div>
</div>
</div>
<div class="mt-auto border-t border-outline-variant/30 flex p-sm">
<button class="flex-1 py-md flex flex-col items-center gap-xs text-on-surface-variant hover:bg-surface-variant/40 rounded-lg">
<span class="material-symbols-outlined" data-icon="chat">chat</span>
<span class="text-[10px] uppercase tracking-widest font-bold">Chat</span>
</button>
<button class="flex-1 py-md flex flex-col items-center gap-xs border-r-4 border-tertiary text-tertiary bg-tertiary-container/20 rounded-lg">
<span class="material-symbols-outlined" data-icon="group">group</span>
<span class="text-[10px] uppercase tracking-widest font-bold">People</span>
</button>
<button class="flex-1 py-md flex flex-col items-center gap-xs text-on-surface-variant hover:bg-surface-variant/40 rounded-lg">
<span class="material-symbols-outlined" data-icon="smart_toy">smart_toy</span>
<span class="text-[10px] uppercase tracking-widest font-bold">AI Hub</span>
</button>
</div>
</aside>
</main>
<nav class="fixed bottom-0 left-0 right-0 z-50 flex justify-center pb-lg">
<div class="bg-surface-container-highest/60 backdrop-blur-[40px] border border-white/10 rounded-full mx-auto mb-lg w-fit flex items-center shadow-[0_10px_30px_rgba(0,0,0,0.5)] transition-all duration-300">
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 active:scale-90 transition-all">
<span class="material-symbols-outlined" data-icon="mic">mic</span>
</button>
<button class="bg-secondary-container text-on-secondary-container rounded-full p-md shadow-[0_0_15px_rgba(6,182,212,0.5)] hover:scale-110 active:scale-90 transition-all">
<span class="material-symbols-outlined" data-icon="videocam">videocam</span>
</button>
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 active:scale-90 transition-all">
<span class="material-symbols-outlined" data-icon="screen_share">screen_share</span>
</button>
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 active:scale-90 transition-all">
<span class="material-symbols-outlined" data-icon="front_hand">front_hand</span>
</button>
<button class="text-on-surface-variant p-md hover:bg-white/10 hover:scale-110 active:scale-90 transition-all">
<span class="material-symbols-outlined" data-icon="add_reaction">add_reaction</span>
</button>
<button class="text-error p-md hover:bg-error/10 hover:scale-110 active:scale-90 transition-all">
<span class="material-symbols-outlined" data-icon="call_end">call_end</span>
</button>
</div>
</nav>
<div class="fixed inset-0 -z-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-surface-bright via-background to-surface-container-lowest"></div>
</body></html>

