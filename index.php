<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlas Yazılım | Geleceği Kodluyoruz</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        :root {
            --primary: #007AFF;
            --dark: #0a0a0b;
            --glass: rgba(255, 255, 255, 0.05);
            --text: #f5f5f7;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--dark);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Arka Plan Animasyonu */
        .bg-glow {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: radial-gradient(circle at 50% 50%, #1a1a2e 0%, #0a0a0b 100%);
            z-index: -1;
        }

        /* Modern Header */
        header {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }

        .hero-content h1 {
            font-size: clamp(3rem, 8vw, 5rem);
            font-weight: 800;
            background: linear-gradient(to right, #fff, #666);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s forwards;
        }

        /* Hakkımızda Bölümü (Glassmorphism) */
        .section {
            max-width: 1000px;
            margin: 100px auto;
            padding: 40px;
            background: var(--glass);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 24px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }

        .section:hover { transform: translateY(-5px); }

        h2 { color: var(--primary); margin-bottom: 20px; font-size: 2rem; }

        /* Çerez Bildirimi */
        #cookie-banner {
            position: fixed;
            bottom: -100px;
            left: 50%;
            transform: translateX(-50%);
            width: 90%;
            max-width: 600px;
            background: rgba(20, 20, 22, 0.95);
            border: 1px solid var(--primary);
            padding: 20px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            transition: bottom 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .btn {
            background: var(--primary);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 50px;
            font-size: 0.9rem;
            opacity: 0.6;
        }

        /* Animasyonlar */
        @keyframes fadeInUp {
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            #cookie-banner { flex-direction: column; text-align: center; gap: 15px; }
        }
    </style>
</head>
<body>

    <div class="bg-glow"></div>

    <header>
        <div class="hero-content">
            <h1>ATLAS YAZILIM</h1>
            <p style="letter-spacing: 5px; color: var(--primary);">GELECEĞİN MİMARİSİ</p>
        </div>
    </header>

    <div class="section" id="about">
        <h2>Hakkımızda</h2>
        <p>
            Atlas Yazılım, dijital dünyada sınırları zorlayan, yenilikçi ve sürdürülebilir teknoloji çözümleri üretmek amacıyla kurulmuştur. 
            Yazılım geliştirme süreçlerinde estetiği fonksiyonellikle, hızı ise güvenlikle birleştiriyoruz. 
            Biz sadece kod yazmıyoruz; fikirleri yaşayan dijital ekosistemlere dönüştürüyoruz.
        </p>
    </div>

    <div id="cookie-banner">
        <p>Deneyiminizi geliştirmek için çerezleri kullanıyoruz. Devam ederek kabul etmiş sayılırsınız.</p>
        <button class="btn" onclick="acceptCookies()">Kabul Et</button>
    </div>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Atlas Yazılım. Tüm Hakları Saklıdır.</p>
        <p style="font-size: 0.7rem; margin-top: 10px;">Tasarımla Güçlendirilmiş Mühendislik</p>
    </footer>

    <script>
        // Çerez Kontrolü
        window.onload = function() {
            if (!localStorage.getItem('cookiesAccepted')) {
                setTimeout(() => {
                    document.getElementById('cookie-banner').style.bottom = '20px';
                }, 1000);
            }
        }

        function acceptCookies() {
            localStorage.setItem('cookiesAccepted', 'true');
            document.getElementById('cookie-banner').style.bottom = '-100px';
        }
    </script>
</body>
</html>