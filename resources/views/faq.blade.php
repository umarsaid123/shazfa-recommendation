<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAQ - Shazfa Wedding</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #111111; /* Background Hitam Pekat */
            color: #ffffff;
        }

        /* HERO */
        .hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                        url('https://images.unsplash.com/photo-1519741497674-611481863552?q=80&w=2070&auto=format&fit=crop'); /* Gambar Wedding Elegant */
            background-size: cover;
            background-position: center;
            min-height: 45vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            border-bottom: 2px solid rgba(212, 175, 55, 0.3);
        }

        .hero h1 {
            font-size: 50px;
            font-weight: 800;
            background: linear-gradient(135deg, #ffffff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 18px;
            color: #dddddd;
        }

        /* FAQ SECTION */
        .faq-section {
            padding: 80px 0;
        }

        .accordion-item {
            background: rgba(45, 45, 45, 0.8) !important; /* Abu-abu Arang cerah sedikit */
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 20px !important;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            transition: 0.3s;
        }

        .accordion-item:hover {
            border-color: #d4af37;
        }

        .accordion-button {
            padding: 25px;
            font-size: 18px;
            font-weight: 600;
            background: transparent !important;
            color: #ffffff !important;
            box-shadow: none !important;
        }

        .accordion-button i {
            color: #d4af37;
        }

        .accordion-button:not(.collapsed) {
            background: linear-gradient(135deg, rgba(212, 175, 55, 0.2), rgba(181, 141, 18, 0.1)) !important;
            color: #d4af37 !important;
        }

        .accordion-button::after {
            filter: invert(1); /* Agar icon panah jadi putih */
        }

        .accordion-body {
            padding: 25px;
            color: #cccccc;
            line-height: 1.8;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* CTA SECTION */
        .cta {
            background: rgba(25, 25, 25, 1);
            border: 1px solid rgba(212, 175, 55, 0.3);
            color: white;
            border-radius: 40px;
            padding: 60px;
            text-align: center;
            box-shadow: 0 20px 50px rgba(0,0,0,0.6);
        }

        .cta h2 {
            background: linear-gradient(135deg, #ffffff, #d4af37);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* BUTTONS */
        .btn-custom {
            background: linear-gradient(135deg, #d4af37, #b58d12);
            color: #111111;
            border: none;
            border-radius: 50px;
            padding: 14px 35px;
            font-weight: 700;
            transition: 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-custom:hover {
            background: #ffffff;
            transform: translateY(-3px);
            color: #111111;
        }

        .social-btn {
            transition: 0.3s;
        }
        
        .social-btn:hover {
            transform: scale(1.05);
            filter: brightness(1.1);
        }

        @media(max-width:768px){
            .hero h1 { font-size: 34px; }
            .cta { padding: 40px 20px; }
        }
    </style>
</head>
<body>

<section class="hero">
    <div class="container">
        <h1>Frequently Asked Questions</h1>
        <p class="mt-3">Temukan jawaban seputar layanan Shazfa Wedding</p>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <div class="accordion" id="faqAccordion">

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        <i class="bi bi-question-circle me-3"></i> Apakah desain undangan bisa custom?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Ya, kami menerima custom desain sesuai tema pernikahan, warna favorit, dan konsep impian Anda. Kami berkomitmen mewujudkan undangan yang mencerminkan jati diri Anda dan pasangan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        <i class="bi bi-clock-history me-3"></i> Berapa lama proses pengerjaan?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Proses pengerjaan biasanya memakan waktu 1–3 hari kerja setelah desain disetujui, tergantung pada tingkat kerumitan dan antrean pesanan.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        <i class="bi bi-truck me-3"></i> Apakah melayani pengiriman luar kota?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Tentu saja! Kami melayani pengiriman ke seluruh wilayah Indonesia menggunakan mitra ekspedisi terpercaya untuk memastikan pesanan Anda sampai dengan aman.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        <i class="bi bi-palette me-3"></i> Apakah bisa revisi desain?
                    </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Bisa. Kepuasan Anda adalah prioritas kami. Kami memberikan kesempatan revisi hingga desain benar-benar sesuai dengan keinginan Anda sebelum naik cetak/publish.
                    </div>
                </div>
            </div>

        </div>

        <div class="cta mt-5">
            <h2 class="fw-bold">Masih punya pertanyaan?</h2>
            <p class="mt-3">Hubungi admin Shazfa Wedding untuk konsultasi desain undangan terbaik Anda.</p>

            <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">
                <a href="https://wa.me/6283104818613" target="_blank" class="btn btn-success rounded-pill px-4 py-3 fw-bold social-btn">
                    <i class="bi bi-whatsapp me-2"></i> Chat WhatsApp
                </a>

                <a href="https://instagram.com/shazfawedding" target="_blank" class="btn rounded-pill px-4 py-3 fw-bold text-white social-btn" 
                   style="background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);">
                    <i class="bi bi-instagram me-2"></i> Instagram
                </a>
            </div>

            <div class="mt-5">
                <a href="/" class="btn-custom">
                    <i class="bi bi-arrow-left me-2"></i> Kembali ke Home
                </a>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>