<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For My Love</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background: #111;
            color: #f5c518;
            text-align: center;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        p {
            font-size: 1.5rem;
        }
        .heart {
            color: red;
            font-size: 2rem;
            animation: heartbeat 1.5s infinite;
        }
        @keyframes heartbeat {
            0% { transform: scale(1); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        .cute-msg {
            font-size: 1.2rem;
            margin-top: 20px;
            background: rgba(255, 255, 255, 0.1);
            padding: 10px 20px;
            border-radius: 10px;
        }
        .bear {
            font-size: 3rem;
            margin-top: 15px;
        }
        audio {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>รักเธอที่สุด</h1>
        <p>ขอบคุณที่เป็นคนพิเศษของฉัน <span class="heart">❤</span></p>
        <div class="cute-msg">เธอคือทุกอย่างของฉันนะ 💖</div>
        <div class="bear">🐻✨</div>
        <audio controls autoplay loop>
            <source src="your-song.mp3" type="audio/mpeg">
            เบราว์เซอร์ของคุณไม่รองรับการเล่นเสียง
        </audio>
    </div>
</body>
</html>
