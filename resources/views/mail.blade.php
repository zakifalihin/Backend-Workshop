<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Profesional</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f5f7fa;
            font-family: Arial, sans-serif;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 5px rgba(0,0,0,0.15);
        }
        .email-header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .email-body {
            padding: 20px;
            color: #333333;
            font-size: 16px;
            line-height: 1.6;
        }
        .email-footer {
            background-color: #f1f1f1;
            color: #555;
            text-align: center;
            padding: 15px;
            font-size: 14px;
        }

        @media only screen and (max-width: 600px) {
            .email-body, .email-header, .email-footer {
                padding: 15px !important;
                font-size: 15px !important;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <h1>Selamat Datang!</h1>
        </div>
        <div class="email-body">
            <p>Halo, Bro 👋</p>
            <p>Ini adalah email profesional yang telah Kamu Daftar.</p>
            <p>Terima kasih sudah mencoba sistem kami. Semoga hari kamu menyenangkan! Have a nice Day</p>
            <p>Salam hangat,<br><strong>Tim Dev, Zaki Falihin Ayyubi</strong></p>
        </div>
        <div class="email-footer">
            &copy; 2025 All rights reserved. <br>
            <a href="#" style="color:#007bff; text-decoration: none;">Kunjungi Website</a>
        </div>
    </div>
</body>
</html>
