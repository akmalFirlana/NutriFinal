<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landingpage</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
</head>

<body>
    <div class="navigation">
        <div class="nav-center container d-flex">
            <a href="index.html" class="d-flex">
                <img class="logo-img" src="{{ asset('image/NutriBites.svg') }}" style="width: 120px;" alt="Logok" </a>

                <ul class="nav-list d-flex mt-2">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="/" class="nav-link">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a href="#terms" class="nav-link">Tentang kami</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">FaQ</a>
                    </li>
                </ul>
                <li class="nav-item">
                    <form class="form-s">
                        <button>
                            <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"
                                aria-labelledby="search">
                                <path
                                    d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9"
                                    stroke="currentColor" stroke-width="1.333" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <input class="input" placeholder="Cari Produk Kamu" required="" type="text">
                        <button class="reset" type="reset">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </form>
                </li>
                <div class="icons d-flex mt-2">
                    <a href="cart.html" class="icon">
                        <i class="bx bx-cart"></i>
                        <span class="d-flex">0</span>
                    </a>
                    <a href="login.html" class="icon">
                        <i class="bx bx-user"></i>
                    </a>

                </div>

                <div class="hamburger">
                    <i class="bx bx-menu-alt-left"></i>
                </div>
        </div>
    </div>
    <hr class="hr" style="margin-top: 22px;">
    <section class="header " style="background-color: #F2F0F1;">
        <h1 class="header-text col-md-6 fw-bold"
            style="font-size: 4.8rem;  padding: 7rem 7rem 0 7rem;">Pilihan Tepat untuk Camilan
            Sehat dan Alami</h1>
        <p class="col-md-6" style="padding: 0.8rem 7rem 7rem 7rem; font-size: 1.5rem;">Browse through our diverse range of meticulously crafted garments, designed to bring out your individuality
            and cater to your sense of style.</p>
    </section>
</body>

</html>