<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Login')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0;}
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            margin: 0;
            align-items: center;
            justify-content: center;
            background-image: url('{{ asset('images/backg.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .login-wrap {
            display: grid;
            grid-template-columns: 1fr 420px;
            min-height: 580px;
            width: 900px;
            max-width: 95vw;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 24px 64px rgba(30,42,26,0.22);
        }
        .left-panel {
            background: linear-gradient(160deg, #173404 0%, #27500a 40%, #3b6d11 75%, #639922 100%);
            padding: 52px 44px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }
        .brand-logo {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 44px;
        }
        .logo-text {
            font-family: 'Cinzel', serif;
            font-size: 22px;
            color: #e5dcb1;
            letter-spacing: 2px;
            line-height: 1;
        }
        .logo-sub {
            font-size: 10px;
            color: rgba(192,221,151,0.55);
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-top: 3px;
        }
        .brand-tagline {
            font-family: 'Playfair display', serif;
            font-size: 30px;
            color: #e5dcb1;
            line-height: 1.4;
            margin-bottom: 16px;
        }
        .brand-tagline em {
            font-style: 13px;

        }
        .brand-desc {
            font-style: italic;
            color: #c0dd97;
            line-height: 1.7;
        }
        .feature-pills {
            display: flex;
            flex-direction: column;
            gap: 10px;
            position: relative;
            z-index: 2;
        }
        .pill {
            display: flex;
            align-items: center;
            gap: 12px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(192,221,151,0.15);
            border-radius: 12px;
            padding: 12px 16px;
        }
        .pill-icon {
            width: 34px; height: 34px;
            border-radius: 9px;
            background: rgba(99,153,34,0.3);
            display: flex; align-items: center; justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
        }
        .pill-text {font-size: 12px; color: #c0dd97; font-weight: 500;}
        .pill-sub { font-size: 11px; color: rgba(192,221,151,0.5); margin-top: 2px ;}
        .right-panel {
            background: #fdfaf5;
            padding: 52px 44px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
        }
        .right-panel::before {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 200px; height: 200px;
            background: radial-gradient(circle, rgba(99,153,34,0.06) 0%, transparent 70%);
            border-radius: 0 0 0 100%;
        }
        .form-eyebrow {
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            color: #639922;
            margin-bottom: 8px;
        }
        .form-title {
            font-family: 'Playfair display', serif;
            font-size: 28px;
            color: #1e2a1a;
            margin-bottom: 8px;
        }
        .form-subtitle {
            font-size: 13px;
            color: #8a9a7c;
            line-height: 1.5;
            margin-bottom: 32px;
        }
        .alert-error {
            background: #fcebeb;
            border: 1px solid rgba(226,75,74,0.25);
            border-radius: 10px;
            padding: 11px 14px;
            font-size: 12px;
            color: #a32d2d;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .field-group {margin-bottom:18px ;}
        .field-label {
            display: block;
            font-size: 12px;
            font-weight: 600;
            color: #4a5a40;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }
        .field-wrap { position: relative; display: flex; align-items: center;}
        .field-icon {
            position: absolute;
            left: 14px;
            font-size: 15px;
            pointer-events: none;
            z-index: 1;
        }
        .field-input {
            width: 100%;
            padding: 13px 14px 13px 42px;
            border: 1.5px solid rgba(99, 153,34,0.22);
            border-radius:12px;
            background: #f8f5ed;
            font-family: 'Poppins', sans-serif;
            font-size: 14px;
            color: #1e2a1a;
            transition: all 0.2s;
            outline: none;
            margin: 0;
        }
        .field-input:focus {
            border-color: #639922;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(99,153,34,0.1);
        }
        .field-input::placeholder {color: #b5c4a5;}
        .btn-login {
            width: 100%;
            padding: 14px;
            background: #3b6d11;
            color: white;
            border: none;
            border-radius: 12px;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            margin-top: 24px;
            letter-spacing: 0.4px;
        }
        .btn-login:hover{
            background: #27500a;
            transform: translateY(-1px);
            box-shadow: 0 8px 20px rgba(59,109,17,0.3);
        }
        .btn-login:active { transform: translateY(0);}
    </style>
</head>
<body>
    @yield('content')
</body>
</html>