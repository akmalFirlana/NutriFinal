<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Responsive Registration Form</title>
  <meta name="viewport" content="width=device-width,
      initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('css/daftar.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <div class="row">
    <div class="wrapper col-md-4">
      <form class="form">
        <p class="title">Buka Tokomu</p>
        <p class="message">Mulai Berjualan bersama kami di NutriBites</p>
        <div class="flex">

          <label>
            <input required="" placeholder="" type="text" class="input">
            <span>Nama Toko</span>
          </label>

          <label>
            <input required="" placeholder="" type="text" class="input">
            <span>NIK</span>
          </label>
        </div>

        <label>

          <button class="btn btn-primary">Upload Gambar<i class='bx bxs-image-alt'
              style='color:#ffffff; padding-top: 7px'></i></button>
        </label>

        <label>
          <textarea class="input" cols="35" rows="3" id=""></textarea>
        </label>
        <label>
          <input required="" placeholder="" type="password" class="input">
          <span>Confirm password</span>
        </label>
        <button class="submit">Submit</button>
        <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
      </form>
    </div>
    <div class="bg col-md-8">
      <img src="{{ asset('images/daftar.svg') }}" alt="gambar">
      <p>Abiyoga</p>
    </div>
</body>

</html>