<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landingpage</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/penjual.css') }}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    
</head>

<body>
    <header class="header">
        <div class="header__container w-100">
            <div class="position-absolute end-0 me-5 d-flex">
                <p class="my-auto me-2">Nama Toko</p><br>
                <img src="{{ asset('image/dummi.jpg') }}" alt="" class="header__img d-flex">
            </div>
            <a href="#" class="header__logo fw-bold pe-5">Nutri<span style="color: #BAB41E">Bit</span>es</a>

            <div class="header__search">
                <input type="search" placeholder="Search" class="header__input">
                <i class='bx bx-search header__icon'></i>
            </div>

            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>
        </div>
    </header>

    <!--========== NAV ==========-->
    <div class="nav" id="navbar">
        <nav class="nav__container">
            <div>
                <a href="#" class="nav__link nav__logo">
                    <i class='bx bx-menu nav__icon'></i>
                    <span class="nav__logo-name">Nutri<span style="color: #BAB41E">Bit</span>es</span>
                </a>

                <div class="nav__list">
                    <div class="nav__items">

                        <a href="#" class="nav__link">
                            <i class='bx bxs-dashboard nav__icon'></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link">
                                <i class='bx bx-user nav__icon'></i>
                                <span class="nav__name">Profil</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Passwords</a>
                                    <a href="#" class="nav__dropdown-item">Mail</a>
                                    <a href="#" class="nav__dropdown-item">Accounts</a>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="nav__link">
                            <i class='bx bx-message-rounded nav__icon'></i>
                            <span class="nav__name">Pesan</span>
                        </a>
                    </div>

                    <div class="nav__items">
                        <h3 class="nav__subtitle">Menu</h3>

                        <div class="nav__dropdown">
                            <a href="#" class="nav__link active">
                                <i class='bx bx-package nav__icon'></i>
                                <span class="nav__name">Produk</span>
                                <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                            </a>

                            <div class="nav__dropdown-collapse">
                                <div class="nav__dropdown-content">
                                    <a href="#" class="nav__dropdown-item">Produk kamu</a>
                                    <a href="{{ route('upload') }}" class="nav__dropdown-item active">Tambah Produk</a>
                                    <a href="#" class="nav__dropdown-item">Metode Pengiriman</a>
                                </div>
                            </div>

                        </div>

                        <a href="#" class="nav__link">
                            <i class='bx bx-line-chart nav__icon'></i>
                            <span class="nav__name">Penjualan</span>
                        </a>
                        <a href="#" class="nav__link">
                            <i class='bx bx-cog nav__icon'></i>
                            <span class="nav__name">Setelan</span>
                        </a>
                    </div>
                </div>
            </div>

            <a href="#" class="nav__link nav__logout">
                <i class='bx bx-log-out nav__icon'></i>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>
    




</body>
</html>