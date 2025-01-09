<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Daftar PATEN</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
            height: 100%;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f0f2f5;
        }
        .container {
            display: flex;
            width: 90%;
            height: 90%;
            max-width: 1000px;
            max-height: 600px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .left, .right {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .left {
            padding: 20px;
            background: white;
            text-align: center;
        }
        .left img {
            width: 80px;
            margin-bottom: 15px;
        }
        .left h2 {
            color: #ff6f00;
            margin-bottom: 8px;
            font-size: 20px;
        }
        .left p {
            color: #333;
            font-size: 14px;
        }
        .right {
            padding: 20px;
            background: linear-gradient(135deg, #ff6f00 0%, #ff6f00 100%);
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
        }
        .right h2, .right p {
            z-index: 1;
            margin-bottom: 8px;
            font-size: 18px;
        }
        .right form {
            z-index: 1;
            width: 100%;
            max-width: 350px;
            display: flex;
            flex-direction: column;
        }
        .right form .input-group {
            margin-bottom: 15px;
            position: relative;
        }
        .right form .input-group input {
            width: 100%;
            padding: 10px 15px 10px 40px;
            border: none;
            border-radius: 20px;
            outline: none;
        }
        .right form .input-group i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #333;
        }
        .right form button {
            padding: 10px;
            border: none;
            border-radius: 20px;
            background: #000000;
            color: white;
            font-size: 14px;
            cursor: pointer;
        }
        .right form a {
            color: white;
            text-align: center;
            margin-top: 8px;
            text-decoration: none;
        }
        .footer {
            text-align: center;
            color: white;
            font-size: 10px;
            position: absolute;
            bottom: 5px;
            width: 100%;
            z-index: 1;
        }
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                height: 100%;
            }
            .right {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img alt="Company Logo" height="80" src="{{ asset('images/IMG-20241120-WA0004-removebg-preview-removebg-preview.png') }}" width="80">
            <h2>Pendaftaran PATEN</h2>
            <p>masukan segala hal yang di perlukan disini</p>
        </div>
        <div class="right">
            <h2>DAFTAR</h2>
            <p>UNTUK MENGGUNAKAN PATEN</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input placeholder="Enter NIK Here" type="text" name="nik" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input placeholder="Enter Name Here" type="text" name="name" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input placeholder="Enter Email Here" type="email" name="email" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-phone"></i>
                    <input placeholder="Enter Nomor Tlp Here" type="text" name="nomor_hp" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-key"></i>
                    <input placeholder="Enter Password" type="password" name="password" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-key"></i>
                    <input placeholder="Confirm Password" type="password" name="password_confirmation" required>
                </div>
                <button type="submit">Login</button>
                <a href="{{ url('/login') }}">Sudah Login?</a>
            </form>
            <div class="footer">
                Copyright © 2022 PATEN Info Tech Ltd. All rights reserved.
            </div>
        </div>
    </div>
</body>
</html>
