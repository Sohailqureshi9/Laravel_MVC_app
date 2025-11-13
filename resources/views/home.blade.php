<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Home - Simple Laravel MVC App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <style>
        :root {
            --bg-grad: linear-gradient(135deg, #6a11cb, #2575fc);
            --card-bg: rgba(255, 255, 255, 0.08);
            --glass: rgba(255, 255, 255, 0.16);
            --text: #f7f8fc;
            --muted: #d7dcf1;
            --accent: #ffd166;
            --shadow: 0 20px 40px rgba(0, 0, 0, .25);
            --radius: 20px;
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            font-family: ui-sans-serif, system-ui, -apple-system, "Segoe UI", Arial;
            color: var(--text);
            background: var(--bg-grad);
            min-height: 100svh;
            display: flex;
            flex-direction: column;
        }

        .container {
            width: min(1100px, 92%);
            margin: 0 auto;
        }

        .nav {
            position: sticky;
            top: 0;
            z-index: 50;
            backdrop-filter: blur(12px);
            background: linear-gradient(180deg, rgba(0, 0, 0, .25), rgba(0, 0, 0, .05));
            border-bottom: 1px solid rgba(255, 255, 255, .12);
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 0;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 700;
        }

        .brand .logo {
            width: 40px;
            height: 40px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: var(--glass);
            border: 1px solid rgba(255, 255, 255, .18);
            box-shadow: var(--shadow);
        }

        .links a {
            color: var(--muted);
            text-decoration: none;
            margin-left: 18px;
            font-weight: 600;
            padding: 8px 12px;
            border-radius: 12px;
            transition: all .2s;
            border: 1px solid transparent;
        }

        .links a:hover {
            color: #fff;
            border-color: rgba(255, 255, 255, .2);
            background: rgba(255, 255, 255, .06);
        }

        .cta {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            border-radius: 14px;
            background: #111827;
            color: #fff;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, .15);
            box-shadow: var(--shadow);
            transition: .15s;
        }

        .cta:hover {
            transform: translateY(-2px);
        }

        .hero {
            padding: 72px 0 36px;
            text-align: center;
        }

        .hero h1 {
            font-size: clamp(28px, 4.2vw, 48px);
            margin: 0 0 12px;
        }

        .hero p {
            color: var(--muted);
            font-size: clamp(15px, 1.6vw, 18px);
            margin: 0 auto 22px;
            max-width: 720px;
        }

        .actions {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 18px;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 700;
            border: 1px solid rgba(255, 255, 255, .18);
            backdrop-filter: blur(4px);
            transition: all .2s;
        }

        .btn.primary {
            background: #111827;
            color: #fff;
        }

        .btn.ghost {
            background: rgba(255, 255, 255, .08);
            color: #fff;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .grid {
            display: grid;
            gap: 18px;
            margin: 36px 0 64px;
            grid-template-columns: repeat(12, 1fr);
        }

        .card {
            grid-column: span 12;
            background: var(--card-bg);
            border: 1px solid rgba(255, 255, 255, .18);
            border-radius: var(--radius);
            padding: 22px;
            box-shadow: var(--shadow);
            transition: transform .2s, background .2s;
        }

        .card:hover {
            transform: translateY(-4px);
            background: rgba(255, 255, 255, .12);
        }

        .card h3 {
            margin: 10px 0 6px;
        }

        .card p {
            margin: 0;
            color: var(--muted);
        }

        .icon {
            width: 44px;
            height: 44px;
            display: grid;
            place-items: center;
            border-radius: 12px;
            background: rgba(0, 0, 0, .35);
            border: 1px solid rgba(255, 255, 255, .18);
            box-shadow: var(--shadow);
        }

        @media (min-width: 700px) {
            .card {
                grid-column: span 4;
            }
        }

        footer {
            margin-top: auto;
            padding: 26px 0;
            border-top: 1px solid rgba(255, 255, 255, .14);
            text-align: center;
            color: var(--muted);
            font-size: 14px;
            background: linear-gradient(180deg, rgba(0, 0, 0, .05), rgba(0, 0, 0, .25));
        }

        .pill {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 12px;
            border-radius: 999px;
            border: 1px dashed rgba(255, 255, 255, .25);
            background: rgba(255, 255, 255, .06);
            color: #fff;
            font-weight: 600;
            margin-top: 6px;
        }

        .pill .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--accent);
            box-shadow: 0 0 0 4px rgba(255, 209, 102, .15);
        }
    </style>
</head>

<body>
    <div class="nav">
        <div class="container nav-inner">
            <div class="brand">
                <div class="logo"><i class="mdi mdi-laravel"></i></div>
                <span>Laravel MVC App</span>
            </div>
            <div class="links">
                <a href="{{ route('home') }}"><i class="mdi mdi-home-outline"></i> Home</a>
                <a href="{{ route('about') }}"><i class="mdi mdi-information-outline"></i> About</a>
                <a class="cta" href="{{ route('contact') }}"><i class="mdi mdi-rocket-launch-outline"></i> Get
                    Started</a>
            </div>
        </div>
    </div>

    <section class="hero container">
        <div class="pill"><span class="dot"></span> Clean MVC • Blade Views • Pretty UI</div>
        <h1>Welcome to My Laravel MVC App</h1>
        <p>A minimal, elegant starter using <strong>Routes → Controller → Blade</strong>. Explore the structure, add
            models, and ship faster—beautifully.</p>
        <div class="actions">
            <a class="btn primary" href="{{ route('about') }}"><i class="mdi mdi-compass-outline"></i> Learn More</a>
            <a class="btn ghost" href="{{ route('contact') }}"><i class="mdi mdi-chat-outline"></i> Contact Us</a>
        </div>
    </section>

    <section class="container">
        <div class="grid">
            <article class="card">
                <div class="icon"><i class="mdi mdi-routes"></i></div>
                <h3>Clean Routing</h3>
                <p>Named routes with controller actions for a tidy, scalable structure.</p>
            </article>
            <article class="card">
                <div class="icon"><i class="mdi mdi-laravel"></i></div>
                <h3>Blade Templates</h3>
                <p>Reusable components, fast rendering, and expressive templating.</p>
            </article>
            <article class="card">
                <div class="icon"><i class="mdi mdi-database-cog-outline"></i></div>
                <h3>MVC Friendly</h3>
                <p>Plug in Models later to persist data and complete the MVC flow.</p>
            </article>
        </div>
    </section>

    <footer>
        <div class="container">© {{ date('Y') }} Simple Laravel MVC App — Built with ❤️ using Blade</div>
    </footer>
</body>

</html>