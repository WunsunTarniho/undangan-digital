<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme='light'>

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ $title }}</title>

    <meta name="description" content="" />
    <link rel= "icon" href="/image/favicon.ico">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/e662339992c4abf5b43f537391bd3169?family=Candara" rel="stylesheet">
    <link href="https://db.onlinewebfonts.com/c/7cc6719bd5f0310be3150ba33418e72e?family=Comic+Sans+MS" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <!-- Animation menggunakan AOS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- Icons. Uncomment required icon fonts -->
    <link href='/assets/vendor/fonts/boxicons.css' rel='stylesheet'>

    <!-- Bootstraps CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <style>
        * {
            /*color: darkgreen;*/
            font-family: 'Comic Sans MS';
        }

        body {
            user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            background-color: rgb(248, 244, 228);
        }

        body::-webkit-scrollbar {
            display: none;
        }

        .cover,
        #cover2 {
            width: 55%;
            overflow: hidden;
        }

        #cover1,
        #cover2 {
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: rgba(0, 0, 0, .1);
            background-blend-mode: darken;
        }

        #cover1 {
            background-image: url('/image/cover.jpg');
            justify-content: space-around;
            animation: animation1 3s;
        }

        #cover2 {
            background-image: url('/image/cover3.jpg');
            justify-content: center;
        }

        .cover-content {
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.9);
        }

        @media(max-width: 420px) {
            .cover-content h1 {
                font-size: 2.5rem !important;
            }

            .cover-content h4 {
                font-size: 1.2rem !important;
            }

            .cover-content h5 {
                font-size: 1.1rem !important;
            }

            .cover-content p {
                font-size: .8rem !important;
            }

            .open-invitation span {
                font-size: .8rem !important;
            }

            .salutation p {
                font-size: .8rem !important;
            }

            #cover1 {
                justify-content: space-around;
            }

            .home-content img {
                width: 50% !important;
            }

            .wedding-person-content img {
                width: 30% !important;
            }

            #home .countdown .time {
                font-size: .8rem !important;
            }

            .person1 p,
            .person2 p {
                font-size: .8rem !important;
            }

            .person1 h1,
            .person2 h1 {
                font-size: 1.2rem !important;
            }

            .home-content-body {
                gap: 1em !important;
            }

            .home-content-body h1,
            .wedding-gallery-content-body h1,
            .wish-content h1 {
                font-size: 1.8em !important;
            }

            .home-content-body h2 {
                font-size: 1.4em !important;
            }

            .home-content-body h5 {
                font-size: .8rem !important;
            }

            .wedding-person-content-body,
            .date-content-body {
                gap: .6rem !important;
            }

            .wedding-person-content-body h1 {
                font-size: 1.3rem !important;
            }

            .type-event h1 {
                font-size: 1.4rem !important;
            }

            .type-event h5 {
                font-size: 1.1rem !important;
            }

            .event-venue p {
                font-size: .8rem !important;
            }

            .akad-nikah,
            .resepsi {
                width: 95% !important;
                height: 40% !important;
            }

            .wish-form-area .alert,
            .wish-form-area .wish-amount,
            .wish-form :is(input, textarea, select, button, i),
            .btn-detail,
            .btn-detail i,
            .btn-instagram i,
            .btn-author i {
                font-size: .7rem !important;
            }

            .comments .comment :is(div, small, i) {
                font-size: .7rem !important;
            }

            .wish-form-area {
                width: 95% !important;
                height: 60% !important;
            }

            .salutation-close h6 {
                font-size: .8em !important;
            }

            /*.wedding-gallery-content-body .gallery{*/
            /*    width: 15rem !important;*/
            /*}*/
        }

        @media (min-width: 420px) and (max-width: 524px) {
            .cover-content h1 {
                font-size: 2.7rem !important;
            }

            .cover-content h4 {
                font-size: 1.4rem !important;
            }

            .cover-content h5 {
                font-size: 1.3rem !important;
            }

            .cover-content p {
                font-size: 1rem !important;
            }

            .open-invitation span {
                font-size: 1rem !important;
            }

            .salutation p {
                font-size: 1rem !important;
            }

            .home-content img {
                width: 55% !important;
            }

            .wedding-person-content img {
                width: 45% !important;
            }

            .home-content-body h1,
            .wedding-gallery-content-body h1,
            .wish-content h1 {
                font-size: 2.5em !important;
            }

            .home-content-body h2 {
                font-size: 1.8em !important;
            }

            .home-content-body h5 {
                font-size: 1.2rem !important;
            }

            .wedding-person-content-body,
            .date-content-body {
                gap: .6rem !important;
            }

            #home .countdown .time {
                font-size: 1rem !important;
            }

            .home-content-body {
                gap: 1.2em !important;
            }

            .type-event h1 {
                font-size: 1.6rem !important;
            }

            .type-event h5 {
                font-size: 1rem !important;
            }

            .event-venue p {
                font-size: .9rem !important;
            }

            .wish-form-area .alert,
            .wish-form-area .wish-amount,
            .wish-form :is(input, textarea, select, button, i) {
                font-size: .8rem !important;
            }

            .btn-detail {
                font-size: .75rem !important;
            }

            .btn-instagram i,
            .btn-author i,
            .btn-detail i {
                font-size: 1.1em !important;
            }

            .comments .comment :is(div, small, i) {
                font-size: .8rem !important;
            }

            .wish-form-area {
                width: 90% !important;
                height: 55% !important;
            }

            .salutation-close h6 {
                font-size: 1em;
            }

            /*.wedding-gallery-content-body .gallery{*/
            /*    width: 90% !important;*/
            /*}*/
        }

        @media(max-width: 768px) {

            .cover,
            #cover2 {
                width: 100%;
            }

            #wish {
                height: 130vh !important;
            }

            .btn-audio {
                left: 20px !important;
            }
        }

        .line {
            position: absolute;
            box-shadow: 0 0 15px 15px rgb(248, 244, 228);
            width: 100%;
            z-index: 999;
            bottom: 0;
        }

        .open-invitation {
            border-radius: 30px;
            text-shadow: none;
            text-decoration: none;
        }

        .home-content,
        .wedding-person-content,
        .date-content,
        .wedding-gallery-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: darkgreen;
        }

        .home-content-body,
        .wedding-person-content-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .home-content-body,
        .wedding-person-content-body,
        .wedding-gallery-content {
            height: 80%;
        }

        .date-content,
        .date-content-body,
        .wedding-gallery-content,
        .wedding-gallery-content-body,
        .wish-content,
        .wish-content-body {
            width: 100%;
        }

        .date-content,
        .date-content-body,
        .home-content-body,
        .wedding-person-content-body,
        .wedding-gallery-content-body,
        .wish-content-body,
        .wish-content {
            height: 100%;
        }

        .date-content-body,
        .wedding-gallery-content-body,
        .wish-content-body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }

        .home-content-body {
            gap: 2em;
        }

        .home-content-body h1,
        .wedding-gallery-content-body h1,
        .wish-content h1 {
            font-size: 4rem;
            text-wrap: nowrap;
        }

        .home-content-body h2 {
            font-size: 3.5rem;
            font-family: 'Alex Brush';
        }

        .home-content-body h5 {
            font-family: 'Roboto', sans-serif;
            font-size: 1.8rem;
        }

        .wedding-person-content-body,
        .date-content-body {
            gap: 2em;
        }

        .home-content-body img {
            width: 55%;
        }

        .wedding-person-content img {
            width: 45%;
        }

        .salutation p {
            font-size: 1.4rem;
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            mix-blend-mode: darken;
        }

        #home .countdown {
            display: flex;
            justify-content: space-evenly;
            align-items: center;
            gap: .8em;
        }

        #home .countdown .time {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 1.6em;
            width: 4em;
            height: 4em;
            padding: .5em;
            border: 1px solid darkgreen;
            border-radius: .5em;
            color: darkgreen;
            font-family: 'Roboto', sans-serif;
            box-shadow: 0 0 3px 1px rgba(0, 0, 0, .2);
            backdrop-filter: blur(20px);
        }

        #text-qs .text-qs-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -30%);
        }

        .person1 h1,
        .person2 h1 {
            font-family: Alex Brush, sans-serif;
        }

        .person1 p,
        .person2 p {
            font-size: 1em;
            font-weight: 400;
            font-family: 'Roboto', sans-serif;
            text-wrap: nowrap;
        }

        .akad-nikah,
        .resepsi,
        .event-venue,
        .type-event {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: darkgreen;
        }

        .akad-nikah,
        .resepsi {
            height: 35%;
            width: 80%;
            border-radius: 10%;
            backdrop-filter: blur(8px);
            box-shadow: 0 0 8px 1px rgba(0, 0, 0, .5);
        }

        .type-event h1 {
            font-size: 2rem;
            margin-bottom: 1.2rem;
            font-family: 'Comic Sans MS';
        }

        .type-event h5 {
            font-size: 1.5rem;
            font-family: 'Candara', sans-serif;
        }

        .event-venue p {
            font-size: 1.2rem;
            font-weight: 200;
            font-family: 'Candara', sans-serif;
        }

        .event-venue p,
        .type-event p {
            margin: 0;
        }

        .wedding-gallery-content-body .gallery {
            width: 80%;
            box-shadow: 0 0 8px 2px rgba(0, 0, 0, .2);
        }

        .wedding-gallery-content-body .gallery .grid-item {
            width: 50%;
        }

        .wedding-gallery-content-body .gallery .grid-item img {
            width: 100%;
        }

        #wish {
            background-image: url('/image/f1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .wish-form-area .alert,
        .wish-form-area .wish-amount,
        .wish-form :is(input, textarea, select, button, i) {
            font-size: .9rem;
        }

        .wish-form :is(input, textarea, select) {
            font-family: sans-serif;
        }

        .comments {
            border-top: 1px solid gold;
        }

        .comments::-webkit-scrollbar {
            display: none;
        }

        .comments .comment {
            border-bottom: 1px solid gold;
            padding: 1em 1.5em;
        }

        .btn-instagram,
        .btn-author {
            text-decoration: none;
            padding: 3px;
        }

        .btn-instagram i,
        .btn-author,
        .open-invitation,
        .btn-audio i {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-author,
        .btn-instagram {
            background: radial-gradient(circle at 30% 100%, #f9ed67 0%,
                    #ee653d 25%, #d42e81 50%, #a237b6 75%, #3e5fbc 100%);
        }

        .btn-audio {
            position: fixed;
            left: calc(22.5% + 20px);
            bottom: 20px;
            border-radius: 15px;
            padding: .5rem;
            backdrop-filter: blur(5px);
            z-index: 9999 !important;
            opacity: 0;
        }

        .btn-audio i {
            font-size: 1.2rem;
        }

        .salutation-close {
            mix-blend-mode: darken;
        }

        img[alt="www.000webhost.com"] {
            display: none;
        }


        @keyframes animation1 {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0) scale(1);
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class='btn-audio' onclick='toggleAudio()'>
        <i class='bx bxs-music'></i>
    </div>
    <section id="cover1" class="mx-auto overflow-hidden">
        <div class="cover-content d-flex flex-column align-items-center text-white" data-aos="fade-down"
            data-aos-duration="2500" data-aos-delay="1000" data-aos-offset="0">
            <h4 class="mb-2">The Wedding of</h4>
            <h1 style="font-family: Alex Brush; font-size: 3em" class='my-1'>Fitri & Dedi</h1>
            <p class=''>Kamis, 18 April 2024</p>
        </div>
        <div class="cover-content d-flex flex-column align-items-center text-white" data-aos="fade-down"
            data-aos-duration="2500" data-aos-delay="1500" data-aos-offset="0">
            <p class='m-0 small fst-italic'>Kepada</p>
            <p class="mt-0 mb-3 small fst-italic">Bapak/Ibu/Saudara/I</p>
            <h5 class='mb-3'>{{ $invited->name ?? '-' }}</h5>
            <p class='fst-italic mb-3 mt-0'>di Tempat.</p>
            <a class="open-invitation btn bg-white w-100 gap-2 px-3" href="#home">
                <i class='bx bxs-envelope-open text-dark'></i>
                <span class='text-dark'>Buka Undangan</span>
            </a>
        </div>
    </section>
    <section id="home" class="cover mx-auto position-relative">
        <img src="/image/f5.jpg" alt='cover8' class="w-100" data-aos="fade-up" data-aos-duration="2000"
            data-aos-offset="0" />
        <div class="home-content">
            <div class='home-content-body'>
                <h1 style='font-family: Alex Brush; color: darkgreen;' data-aos="fade-up" data-aos-duration="1500"
                    data-aos-delay="0" data-aos-offset="-200">Save the date</h1>
                <img src="/image/image1.jpg" alt='image1' class='rounded-circle my-2' data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="-300" data-aos-delay="0" />
                <h2 style="color: darkgreen;" class='text-nowrap d-flex flex-column align-items-center'
                    data-aos="fade-up" data-aos-duration="1500" data-aos-offset="-230" data-aos-delay="100">
                    Fitri & Dedi
                    <!--<div>&</div>-->
                    <!--<div>Dedi</div>-->
                </h2>
                <h5 class="text-center" style='color: darkgreen' data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="-230" data-aos-delay="200">Kamis, 18 April 2024</h5>
                <div class='info d-flex flex-column align-items-center' data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="-230" data-aos-delay="300">
                    <div class='countdown'>
                        <div class="hidden d-none">{{ $invitation->event_time }}</div>
                        <div class='time'>
                            <div id="days"></div>
                            <div>Hari</div>
                        </div>
                        <div class='time'>
                            <div id="hours"></div>
                            <div>Jam</div>
                        </div>
                        <div class='time'>
                            <div id="minutes"></div>
                            <div>Menit</div>
                        </div>
                        <div class='time'>
                            <div id="seconds"></div>
                            <div>Detik</div>
                        </div>
                    </div>
                </div>
                <button class="btn-detail btn text-white rounded-0 my-1" type='button' onclick='setAlarm()'
                    style="background-color: #4e6e4b;" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="-230" data-aos-delay="300">
                    Ingatkan
                    <i class='bx bx-timer text-white'></i>
                </button>
            </div>
        </div>
        <div class='line'></div>
    </section>
    <section id="wedding-person" class="cover mx-auto position-relative" data-aos="fade-up" data-aos-duration="1000"
        data-aos-offset="50">
        <img src="/image/f1.jpg" alt='cover10' class="w-100" />
        <div class='wedding-person-content'>
            <div class='wedding-person-content-body'>
                <div class='salutation mb-4' data-aos="fade-up" data-aos-duration="1000" data-aos-offset="-450">
                    <p class='m-0 text-nowrap text-center'>Assalamu'alaikum Wr. Wb.</p>
                    <p class='m-0 text-nowrap text-center'>Dengan memohon rahmat dan ridho Allah</p>
                    <p class='m-0 text-nowrap text-center'>Subhanahu Wa Ta'ala, insyaaAllah kami akan</p>
                    <p class='m-0 text-nowrap text-center'>menyelenggarakan acara pernikahan kami</p>
                </div>
                <div class='person1 d-flex flex-column align-items-center gap-2'>
                    <img src='/image/person1.jpg' alt='person1' class='rounded-circle' data-aos="fade-down"
                        data-aos-duration="1000" data-aos-offset="-450" />
                    <h1 class='mb-0' data-aos="fade-up" data-aos-duration="1000" data-aos-offset="-450">Dwi
                        Syafitri</h1>
                    <p class='m-0 p-0' data-aos="fade-up" data-aos-duration="1000" data-aos-offset="-450">Putri
                        Kedua dari Bapak Suharman dan</p>
                    <p class='m-0 p-0' data-aos="fade-up" data-aos-duration="1000" data-aos-offset="-450">Ibu
                        Helmawati</p>
                    <a class='btn-instagram rounded mb-2' href='https://www.instagram.com/dwisyafitri_/'
                        style='background-color: darkgreen;'>
                        <i class='bx bxl-instagram text-white'></i>
                    </a>
                </div>
                <h1 style='font-family: Alex Brush' class='fw-bold' data-aos="fade-up" data-aos-duration="1000"
                    data-aos-offset="-450">&</h1>
                <div class='person2 d-flex flex-column align-items-center gap-2'>
                    <img src='/image/person2.jpg' alt='person2' class='rounded-circle' data-aos="fade-down"
                        data-aos-duration="1000" data-aos-offset="-450" />
                    <h1 class='mb-0' data-aos="fade-up" data-aos-duration="1000" data-aos-offset="-450">Dedi
                        Saputra</h1>
                    <p class='m-0 p-0' data-aos="fade-up" data-aos-duration="1000" data-aos-offset="-450">Putra
                        Ketiga dari Bapak Sahar M.Ali dan</p>
                    <p class='m-0 p-0' data-aos="fade-up" data-aos-duration="1000" data-aos-offset="-550">Ibu
                        Nurhayati</p>
                    <a class='btn-instagram rounded' href='' onclick='return false'
                        style='background-color: darkgreen;'>
                        <i class='bx bxl-instagram text-white'></i>
                    </a>
                </div>
            </div>
        </div>
        <div class='position-absolute bottom-0 w-100'
            style='box-shadow: 0 0 10px 10px rgba(203, 213, 160, 255); z-index: 999 !important;'></div>
        <div class='position-absolute top-0 w-100'
            style='box-shadow: 0 0 10px 10px rgb(248, 244, 228); z-index: 999 !important;'></div>
    </section>
    <section id="date-event" class="cover mx-auto position-relative">
        <img src="/image/f2.jpg" alt='cover13' class="w-100" />
        <div class='date-content'>
            <div class= 'date-content-body' data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="-100">
                <div class='akad-nikah'>
                    <div class='type-event mb-sm-4 mb-2' data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="500" data-aos-offset="-500">
                        <h1 class='my-sm-4 my-2' style='font-family: Roboto'>Akad Nikah</h1>
                        <h5 class='text-nowrap mb-0'>Kamis, 18 April 2024</h5>
                        <h5 class='text-nowrap'>Pukul : 08:00 WIB s/d Selesai</h5>
                    </div>
                    <div class='event-venue mb-sm-4 mb-2' data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="550" data-aos-offset="-500">
                        <p class='text-nowrap'>Lokasi Acara :</p>
                        <p class='text-nowrap fw-semibold'>Kediaman Mempelai Wanita</p>
                        <p class='text-nowrap'>Jl. Manggis, Kelurahan Selatpanjang Kota,</p>
                        <p class='text-nowrap'>Kecamatan Tebing Tinggi, Kabupaten Kepulauan</p>
                        <p class='text-nowrap'>Meranti</p>
                        <a class="btn-detail btn text-white rounded-0 my-2"
                            href='https://maps.google.com/?q=1.011156,102.720098&zoom=15&mode=driving'
                            style="background-color: #4e6e4b;" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="600" data-aos-offset="-550">
                            Navigasi
                            <i class='bx bx-current-location text-white'></i>
                        </a>
                    </div>
                </div>
                <div class='resepsi' data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="-400">
                    <div class='type-event mb-sm-4 mb-2' data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="500" data-aos-offset="-500">
                        <h1 class='text-nowrap my-sm-4 my-2' style='font-family: Roboto'>Resepsi</h1>
                        <h5 class='text-nowrap mb-0'>Kamis, 18 April 2024</h5>
                        <h5 class='text-nowrap'>Pukul : 11:00 WIB s/d Selesai</h5>
                    </div>
                    <div class='event-venue event-venue mb-sm-4 mb-2' data-aos="fade-up" data-aos-duration="1000"
                        data-aos-delay="550" data-aos-offset="-550">
                        <p class='text-nowrap'>Lokasi Acara :</p>
                        <p class='text-nowrap fw-semibold'>Kediaman Mempelai Wanita</p>
                        <p class='text-nowrap'>Jl. Manggis, Kelurahan Selatpanjang Kota,</p>
                        <p class='text-nowrap'>Kecamatan Tebing Tinggi, Kabupaten Kepulauan</p>
                        <p class='text-nowrap'>Meranti</p>
                        <a class="btn-detail btn text-white rounded-0 my-2"
                            href='https://maps.google.com/?q=1.011156,102.720098&zoom=15&mode=driving'
                            style="background-color: #4e6e4b;" data-aos="fade-up" data-aos-duration="1000"
                            data-aos-delay="550" data-aos-offset="-600">
                            Navigasi
                            <i class='bx bx-current-location text-white'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class='line'></div>
        <div class='position-absolute top-0 w-100'
            style='box-shadow: 0 0 10px 10px rgba(203, 213, 160, 255); z-index: 999 !important;'></div>
    </section>
    <section id="wedding-gallery" class="cover mx-auto position-relative">
        <img src="/image/f14.jpg" class='w-100' alt='cover13' />
        <div class='wedding-gallery-content'>
            <div class= 'wedding-gallery-content-body'>
                <h1 class='' style='font-family: Alex Brush' data-aos="fade-up" data-aos-duration='1000'
                    data-aos-offset='-200'>
                    Wedding Gallery
                </h1>
                <div class='gallery'>
                    <div class='grid-item' data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="-200">
                        <img src='/image/02.jpg' alt='' class='gambar' />
                    </div>
                    <div class='grid-item' data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="-200"
                        data-aos-delay='200'>
                        <img src='/image/01.jpg' alt='' class='gambar' />
                    </div>
                    <div class='grid-item' data-aos="zoom-in" data-aos-duration="1000" data-aos-offset="-200"
                        data-aos-delay='250'>
                        <img src='/image/03.jpg' alt='' class='gambar' />
                    </div>
                </div>
            </div>
        </div>
        <div class='line'></div>
    </section>
    <section id="text-qs" class="cover mx-auto position-relative" data-aos="zoom-in-up" data-aos-duration='1000'
        data-aos-offset='0'>
        <img src="/image/qsimage.jpg" alt='cover10' class="w-100" />
        <div class='line'></div>
        <div class='position-absolute top-0 w-100'
            style='box-shadow: 0 0 10px 10px rgb(248, 244, 228); z-index: 999 !important;'></div>
    </section>
    <section id="wish" class="cover mx-auto position-relative" data-aos="fade-up" style="height: 150vh"
        data-aos-duration='1000'>
        <div class='wish-content'>
            <div class='wish-content-body overflow-hidden'>
                <h1 style='font-family: Alex Brush; color: darkgreen' data-aos="fade-up" data-aos-duration='1000'>~
                    Wishes ~</h1>
                <div class='wish-form-area rounded-4 d-flex flex-column justify-content-between align-items-center gap-md-4 gap-2'
                    style='width: 80%; height: 60%; background-color: rgba(248 ,244 ,228, .7); border: 1px solid gold;'
                    data-aos="zoom-in" data-aos-duration="1000">
                    <div class='wish-amount text-center my-2' style="color: darkgreen">
                        <i class='bx bxs-message-rounded' style="color: rgb(240, 216, 121)"></i>
                        Wishes :
                        <span>{{ count($invitation->comments) }}</span>
                    </div>
                    <div class='d-flex align-items-center justify-content-center gap-2 gap-md-4 w-100'>
                        <div class="alert alert-success text-center p-md-2 p-1 mb-0 fw-bold" style="width: 30%"
                            role="alert">
                            <div id="amountPresence">
                                {{ count($invitation->inviteds->where('presence', 'Akan Hadir')) }}</div>
                            <div class="fw-normal">Hadir</div>
                        </div>
                        <div class="alert alert-danger text-center p-md-2 p-1 mb-0 fw-bold" style="width: 30%"
                            role="alert">
                            <div id="amountAbsent">{{ count($invitation->inviteds->where('presence', 'Tidak Hadir')) }}
                            </div>
                            <div class="fw-normal">Tidak Hadir</div>
                        </div>
                    </div>
                    <hr class="w-100 my-0" style="border-top: 2px solid gold">
                    <div class="wish-form" style="width: 90%">
                        <form id="wish-comment" method="POST">
                            <input type="hidden" name="_token" value="{{ old('_token', csrf_token()) }}" />
                            <input type="text" class="form-control mb-1"
                                value="{{ old('name', $invited->name ?? '') }}"
                                placeholder="Hanya undangan yang dapat mengisi" readonly
                                {{ $invited ? '' : 'disabled' }} />
                            <textarea name="content" id="content" cols="10" rows="3" class="form-control mb-1"
                                placeholder="{{ $invited ? 'Your Best Wishes' : 'Hanya undangan yang dapat mengisi' }}"
                                {{ $invited ? '' : 'disabled' }} required></textarea>
                            <select class="form-select mb-2" name="presence" id="presence" required
                                {{ $invited ? '' : 'disabled' }}>
                                <option value="" hidden selected><span class="text-secondary">Kehadiran</span>
                                </option>
                                <option value="Akan Hadir">Hadir</option>
                                <option value="Tidak Hadir">Tidak Hadir</option>
                            </select>
                            <button type="submit" class="btn text-white rounded-0"
                                style="background-color: #4e6e4b;" {{ $invited ? '' : 'disabled' }}>
                                Send
                                <i class='bx bx-send text-white'></i>
                            </button>
                        </form>
                    </div>
                    <div class="comments overflow-auto h-100 w-100">
                        <div class="comment d-none">
                            <div class='invited-name fw-semibold'>
                                <span class="fw-semibold"></span>
                            </div>
                            <div class="my-1 invited-comment"></div>
                            <small>
                                <i class='bx bx-time-five'></i>
                                <span class="difference"></span>
                            </small>
                        </div>
                        @foreach ($comments as $comment)
                            <div class="comment">
                                <div class='invited-name'>
                                    <span class="fw-semibold">{{ $comment->invited->name }}</span>
                                    {!! $comment->invited->presence == 'Akan Hadir'
                                        ? "<i class='bx bxs-badge-check text-success'></i>"
                                        : "<i class='bx bx-x-circle text-danger'></i>" !!}
                                </div>
                                <div class="my-1 invited-comment">{{ $comment->content }}</div>
                                <small>
                                    <i class='bx bx-time-five'></i>
                                    <span class="difference">{{ $comment->created_at->diffForHumans() }}</span>
                                </small>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class='salutation-close d-flex flex-column justify-content-center align-items-center mt-3'
                    data-aos="zoom-in-up" data-aos-duration='1000'>
                    <h6 class="text-nowrap mb-0" style="font-family: Candara; font-weight: 300; color: darkgreen">Atas
                        kehadiran dan do’a restu dari bapak/ibu/saudara/i</h6>
                    <h6 class="text-nowrap my-0" style="font-family: Candara; font-weight: 300; color: darkgreen">
                        sekalian, kami mengucapkan Terima Kasih.</h6>
                    <h6 class="text-nowrap my-0 mb-3"
                        style="font-family: Candara; font-weight: 300; color: darkgreen">Wassalamualaikum Wr. Wb.</h6>
                </div>
            </div>
        </div>
        <div class='line'></div>
        <div class='position-absolute top-0 w-100'
            style='box-shadow: 0 0 10px 10px rgb(248, 244, 228); z-index: 999 !important;'></div>
    </section>
    <section id="cover2" class="mx-auto overflow-hidden" data-aos="fade-up" data-aos-duration="1000"
        data-aos-offset="0">
        <div style='height: 85%' class='d-flex flex-column align-items-center justify-content-between'
            data-aos="fade-down" data-aos-duration="2000" data-aos-offset="500">
            <div class="cover-content d-flex flex-column align-items-center text-white">
                <h6 style='font-family: Candara' class="m-0 fst-italic">Kami yang berbahagia,</h4>
                    <h6 style='font-family: Candara' class="mt-0 mb-3 fst-italic">Keluarga Besar Kedua Mempelai</h4>
                        <h1 style="font-family: Alex Brush; font-size: 3em" class=''>Fitri & Dedi</h1>
            </div>
            <div class="cover-content d-flex flex-column align-items-center text-white">
                <p class='mb-0' style="font-family: Roboto">Made By</p>
                <p class="fw-bold">Wunsun Tarniho</p>
                <div class='d-flex align-items-center justify-content-center gap-3'>
                    <a href='https://www.instagram.com/wunsun_code/' class='btn-author rounded'>
                        <i class='bx bxl-instagram text-white'></i>
                    </a>
                </div>
                <p class="my-3" style="vertical-align: center">&copy; 2024</p>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        (() => {
            'use strict'

            const getStoredTheme = () => localStorage.getItem('theme')
            const setStoredTheme = theme => localStorage.setItem('theme', theme)

            const getPreferredTheme = () => {
                const storedTheme = getStoredTheme()
                if (storedTheme) {
                    return storedTheme
                }

                return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
            }

            const setTheme = theme => {
                if (theme === 'light' || theme === 'dark') {
                    document.documentElement.setAttribute('data-bs-theme', 'light')
                } else {
                    // Jika tema yang disimpan tidak valid, maka set tema ke mode terang.
                    document.documentElement.setAttribute('data-bs-theme', 'light')
                }
            }

            setTheme(getPreferredTheme())

            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
                const storedTheme = getStoredTheme()
                if (storedTheme == 'light' && storedTheme == 'dark') {
                    // Jika mode gelap aktif, set tema ke mode terang.
                    setTheme('light')
                }
            })

            window.addEventListener('DOMContentLoaded', () => {
                setStoredTheme('light')
                setTheme('light')
            })
        })()
    </script>
    <script>
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

        const audio = new Audio('/audio/bersamamu.flac');

        audio.currentTime = 3.5;
        audio.volume = audio.volume - 0.4;

        function toggleAudio() {
            if (audio.paused) {
                $('.btn-audio i').removeClass('bxs-bell-off').addClass('bxs-music');
                audio.play();
            } else {
                audio.pause();
                $('.btn-audio i').removeClass('bxs-music').addClass('bxs-bell-off');
            }
        }

        var scrollButton = document.querySelector('.open-invitation');

        scrollButton.addEventListener('click', function() {
            // Aktifkan scrolling
            audio.play();

            document.querySelector('.btn-audio').style.transition = '2s';
            document.querySelector('.btn-audio').style.opacity = '1';
            window.removeEventListener('wheel', disableScroll);
            window.removeEventListener('touchmove', disableScroll);
        });

        function disableScroll(event) {
            event.preventDefault();
        }
        // Mendisable scrolling secara default
        window.addEventListener('wheel', disableScroll, {
            passive: false,
        });

        window.addEventListener('touchmove', disableScroll, {
            passive: false,
        });

        // Set the date we're counting down to
        var getDate = document.querySelector('.countdown .hidden').innerHTML;
        var countDownDate = new Date(Date.parse(getDate));

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"

            document.getElementById('days').innerHTML = days;
            document.getElementById('hours').innerHTML = hours;
            document.getElementById('minutes').innerHTML = minutes;
            document.getElementById('seconds').innerHTML = seconds;

            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById('days').innerHTML = '0';
                document.getElementById('hours').innerHTML = '0';
                document.getElementById('minutes').innerHTML = '0';
                document.getElementById('seconds').innerHTML = '0';
            }
        }, 1000);

        function setAlarm() {
            var notification = new Notification('Fitri & Dedi', {
                body: 'Alarm telah berbunyi!',
                icon: '/image/cover3.jpg',
            });

            setTimeout(() => {
                notification.show();
            }, 3000);
        }

        window.onload = () => {
            const container = document.querySelector('.gallery');

            const masonry = new Masonry(container, {
                itemSelector: '.grid-item',
            })
        }

        $('#wish-comment').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: '/invitation/{{ $invitation->slug }}/invited/{{ $invited->url ?? '' }}/comment',
                type: 'POST',
                data: $('#wish-comment').serialize(),
                success: function(response) {
                    console.log(response);

                    newComment = $('.comments .comment:first').clone();
                    newComment.find('.invited-name span').text(response.invited_name);
                    newComment.find('.invited-comment').text(response.content);
                    newComment.find('small .difference').text('Baru saja');
                    newComment.removeClass('d-none');
                    $('.wish-amount span').text(parseInt($('.wish-amount span').text()) + 1);

                    if (response.updated) {
                        $('#amountPresence').text(response.amountPresence);
                        $('#amountAbsent').text(response.amountAbsent);

                    }

                    let status = response.presence == 'Akan Hadir' ?
                        `<i class='bx bxs-badge-check text-success'></i>` :
                        `<i class='bx bx-x-circle text-danger'></i>`;
                    newComment.find('.invited-name').append(status);

                    $('.comments').children().eq(0).after(newComment);

                    $('#wish-comment').find('#content').val('');
                    $('#wish-comment').find('#presence option:first').prop('selected', true);
                    $('.comments').animate({
                        scrollTop: 0
                    }, 'slow');
                },
                error: function(msg) {
                    // console.log(msg);
                },
            });
        });
    </script>
    <!-- script GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            once: false, // membuat penampilan atau AOSnya hanya sekali saja.
        });
    </script>
</body>

</html>
