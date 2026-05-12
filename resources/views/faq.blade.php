<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAQ - Shazfa Wedding</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:'Poppins',sans-serif;
            background:#f7f7f7;
        }

        /* HERO */
        .hero{

            background:
                linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),
                url('/images/hero.jpg');

            background-size:cover;
            background-position:center;

            min-height:45vh;

            display:flex;
            align-items:center;
            justify-content:center;

            text-align:center;

            color:white;
        }

        .hero h1{
            font-size:60px;
            font-weight:700;
        }

        .hero p{
            font-size:18px;
            opacity:0.9;
        }

        /* FAQ */
        .faq-section{
            padding:80px 0;
        }

        .accordion-item{
            border:none;
            border-radius:20px !important;
            overflow:hidden;
            margin-bottom:20px;
            box-shadow:0 10px 25px rgba(0,0,0,0.05);
        }

        .accordion-button{
            padding:25px;
            font-size:18px;
            font-weight:600;
            background:white;
        }

        .accordion-button:not(.collapsed){
            background:linear-gradient(135deg,#d4a373,#b5835a);
            color:white;
        }

        .accordion-body{
            padding:25px;
            color:#666;
            line-height:1.8;
        }

        /* BUTTON */
        .btn-custom{
            background:linear-gradient(135deg,#d4a373,#b5835a);
            color:white;
            border:none;
            border-radius:50px;
            padding:14px 35px;
            font-weight:600;
            transition:0.3s;
        }

        .btn-custom:hover{
            background:linear-gradient(135deg,#b5835a,#9c6644);
            transform:translateY(-3px);
            color:white;
        }

        /* CTA */
        .cta{
            background:#111;
            color:white;
            border-radius:30px;
            padding:60px;
            text-align:center;
        }

        @media(max-width:768px){

            .hero h1{
                font-size:40px;
            }

            .cta{
                padding:35px 20px;
            }

        }

    </style>
</head>
<body>

<!-- HERO -->
<section class="hero">

    <div>

        <h1>
            Frequently Asked Questions
        </h1>

        <p class="mt-3">
            Temukan jawaban seputar layanan Shazfa Wedding
        </p>

    </div>

</section>

<!-- FAQ -->
<section class="faq-section">

    <div class="container">

        <div class="accordion" id="faqAccordion">

            <!-- FAQ 1 -->
            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button class="accordion-button" type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq1">

                        <i class="bi bi-question-circle me-2"></i>
                        Apakah desain undangan bisa custom?

                    </button>

                </h2>

                <div id="faq1"
                    class="accordion-collapse collapse show"
                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">

                        Ya, kami menerima custom desain sesuai tema pernikahan,
                        warna favorit, dan konsep impian Anda.

                    </div>

                </div>

            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq2">

                        <i class="bi bi-clock-history me-2"></i>
                        Berapa lama proses pengerjaan?

                    </button>

                </h2>

                <div id="faq2"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">

                        Proses pengerjaan biasanya memakan waktu
                        1–3 hari tergantung jumlah pesanan dan revisi desain.

                    </div>

                </div>

            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq3">

                        <i class="bi bi-truck me-2"></i>
                        Apakah melayani pengiriman luar kota?

                    </button>

                </h2>

                <div id="faq3"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">

                        Ya, kami melayani pengiriman ke seluruh Indonesia
                        melalui ekspedisi terpercaya.

                    </div>

                </div>

            </div>

            <!-- FAQ 4 -->
            <div class="accordion-item">

                <h2 class="accordion-header">

                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faq4">

                        <i class="bi bi-palette me-2"></i>
                        Apakah bisa revisi desain?

                    </button>

                </h2>

                <div id="faq4"
                    class="accordion-collapse collapse"
                    data-bs-parent="#faqAccordion">

                    <div class="accordion-body">

                        Bisa. Kami memberikan revisi desain agar hasil akhir
                        sesuai dengan keinginan pelanggan.

                    </div>

                </div>

            </div>

        </div>

       <!-- CTA -->
<div class="cta mt-5">

    <h2 class="fw-bold">
        Masih punya pertanyaan?
    </h2>

    <p class="mt-3">
        Hubungi admin Shazfa Wedding untuk konsultasi desain undangan terbaik Anda.
    </p>

    <!-- SOCIAL BUTTON -->
    <div class="d-flex flex-wrap justify-content-center gap-3 mt-4">

        <!-- WHATSAPP -->
        <a
            href="https://wa.me/6283104818613"
            target="_blank"
            class="btn btn-success rounded-pill px-4 py-3 fw-semibold"
        >

            <i class="bi bi-whatsapp me-2"></i>

            Chat WhatsApp

        </a>

        <!-- INSTAGRAM -->
        <a
            href="https://instagram.com/shazfawedding"
            target="_blank"
            class="btn rounded-pill px-4 py-3 fw-semibold text-white"
            style="
                background:
                linear-gradient(
                    135deg,
                    #833ab4,
                    #fd1d1d,
                    #fcb045
                );
            "
        >

            <i class="bi bi-instagram me-2"></i>

            Instagram

        </a>

    </div>

    <!-- BACK -->
    <a href="/"
    class="btn btn-custom mt-4">

        ← Kembali ke Home

    </a>

</div>

</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>