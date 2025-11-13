<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <style>
        :root {
            --bg-grad: linear-gradient(135deg, #6a11cb, #2575fc);
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
            transition: all 0.3s ease;
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

        form {
            margin-top: 30px;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 18px;
            border: none;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
            font-size: 16px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        input::placeholder,
        textarea::placeholder {
            color: #f1f1f1;
            /* makes placeholder text more visible */
            opacity: 0.9;
        }

        input:focus,
        textarea:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.25);
            box-shadow: 0 0 0 2px var(--accent);
        }

        button {
            background: var(--accent);
            color: #222;
            font-weight: bold;
            border: none;
            padding: 12px 24px;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.2s ease;
        }

        button:hover {
            transform: translateY(-3px);
        }

        .alert-success {
            margin: 12px 0;
            padding: 12px;
            border-radius: 10px;
            background: #16a34a;
            color: #fff;
            font-weight: 600;
        }

        .alert-error {
            margin: 12px 0;
            padding: 12px;
            border-radius: 10px;
            background: #ef4444;
            color: #fff;
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
        <h1>Contact Us</h1>
        <p>We’d love to hear from you! Fill out the form below to get in touch.</p>

        {{-- Flash success --}}
        @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
        @endif

        {{-- Validation errors --}}
        @if ($errors->any())
        <div class="alert-error">
            <strong>Please fix the following:</strong>
            <ul style="margin:8px 0 0 18px;">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <label for="name"><i class="mdi mdi-account-outline"></i> Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}" required>

            <label for="email"><i class="mdi mdi-email-outline"></i> Your Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}"
                required>

            <label for="message"><i class="mdi mdi-message-text-outline"></i> Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Write your message..."
                required>{{ old('message') }}</textarea>

            <button type="submit"><i class="mdi mdi-send-outline"></i> Send Message</button>
        </form>
    </div>

    <footer>
        © {{ date('Y') }} Laravel MVC App — Designed with ❤️ by Muhammad Sohail
    </footer>
</body>

</html>