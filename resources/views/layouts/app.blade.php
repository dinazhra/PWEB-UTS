<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'AgroMart Pupuqu')</title>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background: #e5dcb1;
        }
        .navbar {
            background-color: #27500a;
            border-bottom: 1px solid rgba(192,221,151,0.25);
            padding: 16px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
            transition: background 0.3s ease;
        }
        .navbar a {
            color: #e5dcb1;
            margin-right: 15px;
            font-weight: bold;
            text-decoration: none;
        }
        .navbar ul {
            display: flex;
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .navbar:hover {
            background: #173404;
        }
        .logo {
            font-family: 'Cinzel', serif;
            font-size: 24px;
            font-weight: bold;
            color: #e5dcb1;
            letter-spacing: 2px;
            text-shadow: 0 2px 5px rgba(0,0,0,0.3);
        }
        .container {
            flex: 1;
            padding: 20px;
        }
        .welcome-banner {
            background: linear-gradient(135deg, #27500a, #3b6d11, #639922);
            border-radius: 18px;
            padding: 28px 36px;
            margin-bottom: 24px;
            position: relative;
            overflow: hidden;
        }
        .welcome-banner h2 {
            font-family: 'Playfair display', serif;
            font-size: 24px;
            color: #e5dcb1;
            margin: 0 0 6px;
            text-align: left;
        }
        .welcome-banner p {
            color: rgba(192,221,151,0.75);
            font-size: 13px;
        }
        .card-header {
            background: linear-gradient(135deg, #f2ede0, #eaf3de);
            padding: 28px;
            border-radius: 12px 12px 0 0;
            margin: -30px -30px 24px -30px;
            border-bottom: 1px solid rgba(99,153,34,0.1);
        }
        .title {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            color: #27500a;
            margin-bottom: 10px;
        }
        .deskripsi {
            font-size: 16px;
            font-weight: 400;
            color: #4a5a40;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        .subtitle {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .subtitle::before, .subtitle::after {
            content: '';
            flex:1;
            height: 1px;
            background: rgba(99,153,34,0.3);
        }
        .fitur-container {
            display: flex;
            gap: 20px;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .fitur {
            flex: 1;
            background: #fdfaf5;
            padding: 35px;
            border: 1px solid rgba(99,153,34,0.2);
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(30,42,26,0.07);
            transition: 0.3s;
            display: flex;
            flex-direction: column;
        }
        .fitur:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 28px rgba(30,42,26,0.13) ;
        }
        .fitur-img { width: 100%; height: 160px; object-fit: cover; display: block;}
        .fitur-body { padding: 22px 20px; text-align: center;}
        .fitur-body h3 { color: #3b6d11; margin-bottom: 10px;}
        .fitur-body p { color: #4A5A40; font-size: 13px; line-height: 1.6;}
        .card {
            background: #fdfaf5;
            color: #1e2a1a;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 6px 20px rgba(30,42,26,0.08);
        }
        .profil-wrap {
            display: grid;
            grid-template-columns: 220px 1fr;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 16px rgba(30,42,26,0.1);
            border: 1px solid rgba(99,153,34,0.15);
        }
        .profil-left {
            background: linear-gradient(160deg, #173404, #3b6d11);
            padding: 36px 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 10px;
        }
        .profil-name {
            font-family: 'Playfair display',serif;
            font-size: 17px;
            color: #e5dcb1;
        }
        .profil-role {font-size: 11px; color: #c0dd97; opacity: 0.8;}
        .profil-badge {
            background: rgba(99,153,34,0.35);
            color: #c0dd97;
            font-size: 10px;
            padding: 4px 12px;
            border-radius: 20px;
        }
        .profil-right {
            background: #fdfaf5;
            padding: 28px 32px;
        }
        .profil-right-title {
            font-family: 'Playfair display', serif;
            font-size: 16px;
            color: #27500a;
            margin-bottom: 10px;
        }
        .profil-desc {
            font-size: 13px;
            color: #6b715e;
            line-height: 1.7;
            margin-bottom: 16px;
        }
        .profil-tags { display: flex; gap: 6px; flex-wrap: wrap ; margin-bottom: 20px;}
        .tag {
            background: #eaf3de;
            color: #3b6d11;
            font-size: 11px;
            padding: 4px 12px;
            border-radius: 20px;
            border: 1px solid rgba(99,153,34,0.2);
        }
        .profil-info-grid {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 10px;
            margin-bottom: 20px;
        }
        .profil-info-box{ background: #f2ede0; border-radius: 10px; padding: 14px;}
        .profil-info-label {font-size: 10px; color: #9aaa8c; margin-bottom: 4px;}
        .profil-info-val  { font-size: 13px; color: #1e2a1a; font-weight: 600;}
        .active-pill {
            background: #eaf3de;
            color: #3b6d11;
            font-size: 11px;
            padding: 2px 10px;
            border-radius: 20px;
            border: 1px solid rgba(99,153,34,0.2);

        }
        .pp {
            width: 100px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid #c0dd97;
        }
        input {
            padding: 10px;
            margin-bottom: 10px;
            width: 50%;
            border-radius: 8px;
            border: 1px solid rgba(99,153,34,0.3);
            background: #fdfaf5;
            font-family: 'Poppins', sans-serif;
        }
        input:focus {
            outline: none;
            border-color: #639922;
            box-shadow: 0 0 0 3px rgba(99,153,34,0.15);
        }
        button {
            width: 30%;
            background: #3b6d11;
            padding: 10px;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            transition: background 0.2s;
        }
        button:hover {
            background: #27500a;
        }
        h2 {
            text-align: center;
            margin-top: 25px;
            color: #27500a;
        }
        .welcom {
            color: #27500a;
            font-family: 'Playfair Display', serif;
        }
        .grid-produk {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }
        .card-produk {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background: #fdfaf5;
            border: 1px solid rgba(99,153,34,0.18);
            padding: 15px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(30,42,26,0.07);
            transition: 0.3s;
            min-height: 280px;
            height: auto;
        }
        .card-produk:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(30,42,26,0.12);
        }
        .card-produk h3 {
            color: #1e2a1a;
        }
        .card-produk p {
            color: #4a5a40;
        }
        .card-produk img {
            width: 100%;
            height: 180px;
            padding: 10px;
            object-fit: contain;
            display: block;
            background: #ede6d6;
            border-radius: 8px;
            box-sizing: border-box;
        }
        .button-back {
            margin-top: 16px;
            display: inline-block;
        }
        .button-back button {
            width: auto;
            padding: 10px 24px;
            background: #3b6d11;
        }
        footer {
            background-color: #3b6d11;
            color: #eaf3de;
            padding: 12px;
            text-align: center;
            border-top: 1px solid rgba(192,221,151,0.2) ;
        }
    </style>
<body>
    @include('components.navbar')
    <main class="container">
        @yield('content')
    </main>
    @include('components.footer')
</body>
</head>
</html>