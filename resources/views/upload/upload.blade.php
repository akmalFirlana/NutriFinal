<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landingpage</title>
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/upload.css') }}">
</head>

<body>
    <div id="nav-bar" class="d-flex">
        <input id="nav-toggle" type="checkbox" />
        <div id="nav-header"><a id="nav-title" class="fw-bold" href="https://codepen.io" target="_blank">
                VitaNourish</a>
            <label for="nav-toggle"><span id="nav-toggle-burger"></span></label>
            <hr />
        </div>
        <div id="nav-content">
            <div class="nav-button"><i class='bx bx-home'></i><span class="ps-2">Dashboard</span></div>
            <div class="nav-button"><i class='bx bxs-package'></i><span class="ps-2">Produk kamu</span></div>
            <div class="nav-button"><i class='bx bx-add-to-queue'></i><span class="ps-2">Tambah Produk</span></div>
            <div class="nav-button"><i class='bx bx-bar-chart-alt'></i><span class="ps-2">Statistik</span></div>
            <div class="nav-button"><i class='bx bxs-wallet'></i><span class="ps-2">Dompet</span></div>
            <div class="nav-button"><i class='bx bx-cog'></i><span class="ps-2">Setelan</span></div>
            <hr />
            <div class="nav-button"><i class='bx bx-log-out'></i><span class="ps-2">Logout</span></div>
            <div id="nav-content-highlight"></div>
        </div>
        <input id="nav-footer-toggle" type="checkbox" />
        <div id="nav-footer">
            <div id="nav-footer-heading">
                <div id="nav-footer-avatar"><img src="https://gravatar.com/avatar/4474ca42d303761c2901fa819c4f2547" />
                </div>
                <div id="nav-footer-titlebox"><a id="nav-footer-title" href="https://codepen.io/uahnbu/pens/public"
                        target="_blank">Tempekita</a><span id="nav-footer-subtitle">Toko_Snack</span></div>
                <label for="nav-footer-toggle"><i class="fas fa-caret-up"></i></label>
            </div>
            <div id="nav-footer-content">
                <Lorem>ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.</Lorem>
            </div>
        </div>
    </div>
    <div class="container-title pt-3 ps-3"
        style="margin: 2vw 0 0 280px; background-color: white; max-width: 980px; height: 60px; border-radius: 20px;">
        <h1 class="fw-bold">Upload Produk baru</h1>
    </div>
    <div class="container pt-2"
        style="margin: 1vw 0 0 280px; background-color: white; max-width: 980px; border-radius: 20px;">
        <div class="uk-container">
            <div class="uk-grid m-3">
                <div class="uk-width-1-2">
                    <div class='uk-width-1-1@s'>
                        <h2 class="uk-text-center d-flex">Foto Produk</h2>
                        <div class="d-flex">
                            <div id="media-uploader1" name="media-uploader1" class="" style="">
                                <div class="dz-message" style="color:'.get_option('taxCrt-setting-font').';">
                                    <span><i class="fa fa-file"></i></span>Letakkan Foto disini
                                </div>
                            </div>
                            <div id="media-uploader1" name="media-uploader1" class=" ms-2" style="">
                                <div class="dz-message" style="color:'.get_option('taxCrt-setting-font').';">
                                    <span><i class="fa fa-file"></i></span>Letakkan Foto disini
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="txtMainImgID" name="txtMainImgID">
                    </div>
                </div>
                <div class="uk-width-1-2">
                    <div class='uk-width-1-1@s'>
                        <h2 class="uk-text-center">Detail Produk</h2>
                        <hr />
                        <div class="d-flex row">
                            <div class="input-group col-md-6">
                                <label class="label">Nama-Produk</label>
                                <input autocomplete="off" name="Email" id="Email" class="input" type="email">
                                <div></div>
                            </div>
                            <div class="input-group col-md-6">
                                <label class="label">Kategori</label>
                                <input autocomplete="off" name="Email" id="Email" class="input" type="email">
                                <div></div>
                            </div><br>
                            <div class="input-group col-md-6">
                                <label class="label">Harga</label>
                                <input autocomplete="off" name="Email" id="Email" class="input" type="email">
                                <div></div>
                            </div>
                            <div class="input-group col-md-6">
                                <label class="label">Stok:</label>
                                <input autocomplete="off" name="Email" id="Email" class="input" type="email">
                                <div></div>
                            </div>
                            <div class="input-group col-md-6">
                                <label class="label">Keterangan Produk:</label>
                                <textarea autocomplete="off" name="Email" id="Email" class="input" type="email"></textarea>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>