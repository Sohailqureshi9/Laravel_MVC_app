<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <style>
        :root {
            --bg-grad: linear-gradient(135deg, #2575fc, #6a11cb);
            --text: #f7f8fc;
            --muted: #d7dcf1;
            --accent: #ffd166;
            --card-bg: rgba(255, 255, 255, 0.08);
            --shadow: 0 20px 40px rgba(0, 0, 0, .25);
            --radius: 20px;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: var(--text);
            background: var(--bg-grad);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .nav {
            position: sticky;
            top: 0;
            background: rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(8px);
            display: flex;
            justify-content: center;
            padding: 14px;
        }

        .nav a {
            color: var(--muted);
            text-decoration: none;
            font-weight: 600;
            margin: 0 10px;
            padding: 8px 14px;
            border-radius: 10px;
            transition: .3s;
        }

        .nav a:hover {
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
        }

        .container {
            flex: 1;
            max-width: 800px;
            margin: 60px auto;
            background: var(--card-bg);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            padding: 40px 30px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        p {
            font-size: 18px;
            color: var(--muted);
            line-height: 1.6;
        }

        .card-section {
            margin-top: 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }

        .card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: var(--radius);
            padding: 20px;
            box-shadow: var(--shadow);
            transition: transform .2s;
        }

        .card:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.15);
        }

        .icon {
            font-size: 40px;
            color: var(--accent);
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            color: var(--muted);
            padding: 20px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>

<body>
    <nav class="nav">
        <a href="{{ route('home') }}"><i class="mdi mdi-home-outline"></i> Home</a>
        <a href="{{ route('about') }}"><i class="mdi mdi-information-outline"></i> About</a>
        <a href="{{ route('contact') }}"><i class="mdi mdi-email-outline"></i> Contact</a>
    </nav>

    <div class="container">
        <h1>About Our Laravel MVC App</h1>
        <p>This application demonstrates how the Laravel framework follows the <strong>Model-View-Controller
                (MVC)</strong> pattern. It separates your logic, data, and presentation layers, allowing cleaner code,
            easier maintenance, and scalable applications.</p>

        <div class="card-section">
            <div class="card">
                <div class="icon"><i class="mdi mdi-code-tags"></i></div>
                <h3>Controller</h3>
                <p>Handles logic and controls data flow between the model and view.</p>
            </div>
            <div class="card">
                <div class="icon"><i class="mdi mdi-eye-outline"></i></div>
                <h3>View</h3>
                <p>Displays the data using Blade templates, making your frontend beautiful and dynamic.</p>
            </div>
            <div class="card">
                <div class="icon"><i class="mdi mdi-database-cog-outline"></i></div>
                <h3>Model</h3>
                <p>Interacts with the database to manage and retrieve data efficiently.</p>
            </div>
        </div>
    </div>

    <footer>
        © {{ date('Y') }} Laravel MVC App — Designed with ❤️ by Muhammad Sohail
    </footer>
</body>

</html>