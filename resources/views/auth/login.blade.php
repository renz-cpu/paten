<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Masuk PATEN</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f0f2f5;
        }
        .container {
            display: flex;
            width: 90%;
            max-width: 1200px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .left {
            background: white;
            padding: 40px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .left img {
            width: 100px;
            margin-bottom: 20px;
        }
        .left h2 {
            color: #ff6f00;
            margin-bottom: 10px;
        }
        .left p {
            color: #333;
            font-size: 18px;
        }
        .right {
            background: linear-gradient(135deg, #ff6f00 0%, #ff6f00 100%);
            padding: 40px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            position: relative;
        }
        .right::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://placehold.co/600x800') no-repeat center center;
            background-size: cover;
            opacity: 0.1;
            pointer-events: none; /* Tambahkan ini */
            z-index: 0; /* Tambahkan ini */
        }
        .right h2, .right p, .right form, .right .footer {
            position: relative;
            z-index: 1; /* Tambahkan ini */
        }
        .right h2 {
            margin-bottom: 10px;
        }
        .right p {
            margin-bottom: 30px;
        }
        .right form {
            width: 100%;
            max-width: 400px;
            display: flex;
            flex-direction: column;
        }
        .right form .input-group {
            margin-bottom: 20px;
            position: relative;
        }
        .right form .input-group input {
            width: 100%;
            padding: 15px 20px 15px 50px;
            border: none;
            border-radius: 30px;
            outline: none;
        }
        .right form .input-group i {
            position: absolute;
            top: 50%;
            left: 20px;
            transform: translateY(-50%);
            color: #333;
        }
        .right form button {
            padding: 15px;
            border: none;
            border-radius: 30px;
            background: #000000;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .right form a {
            color: white;
            text-align: center;
            margin-top: 10px;
            text-decoration: none;
        }
        .footer {
            text-align: center;
            color: white;
            font-size: 12px;
            position: absolute;
            bottom: 10px;
            width: 100%;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }
            .right {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img alt="Company Logo" height="80" src="{{ asset('images/IMG-20241120-WA0004-removebg-preview-removebg-preview.png') }}" width="80">
            <h2>HAII MASYARAKAT KETAPANG</h2>
            <p>WELCOME BACK!</p>
            <p>Masukan NIK dan Password Disini</p>
        </div>
        <div class="right">
            <h2>MASUK</h2>
            <p>UNTUK MENGGUNAKAN PATEN</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input placeholder="Enter NIK Here" type="text" name="nik" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-key"></i>
                    <input placeholder="Enter Password" type="password" name="password" required>
                </div>
                <button type="submit">Login</button>
                <a href="{{ url('/register') }}">Belum Memiliki Akun?</a>
            </form>
            <div class="footer">
                Copyright © 2022 PATEN Info Tech Ltd. All rights reserved.
            </div>
        </div>
    </div>
</body>
</html>
