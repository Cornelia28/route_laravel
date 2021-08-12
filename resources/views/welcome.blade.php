<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>

<style type="text/css">
    .banner {
  background: url("image/bg.png")
    no-repeat center center;
  background-size: cover;
  padding-top: 20%;
  padding-bottom: 20%;
  color:black;
}

.lingkaran {
  display: inline-block;
  border-radius: 50%;
  width: 150px;
  margin: auto;
  height: 150px;
  color: #fff;
  background-color: #dc3545;
}

.lingkaran i {
  position: relative;
  top: 30px;
}

.crop-img {
  object-fit: cover;
}

.tim img {
  width: 250px;
  border: 10px solid #cccccc;
}

a.social {
  display: inline-block;
  width: 40px;
  height: 40px;
  color: #fff;
  border-radius: 50%;
  background-color: #333;
  line-height: 40px;
}

.client img {
  height: auto;
  max-height: 50px;
}

.kontak {
  background: url("https://wallpaperaccess.com/full/1867010.jpg") no-repeat
    center center;
  background-size: cover;
  padding-bottom: 20%;
  padding-top: 20%;
  color: #fff;
}
</style>


    <!-- navigasi -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#">Cornelia Profile</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#kontak">Kontak Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- banner -->
    <div class="container-fluid banner">
      <div class="container text-center">
        <h4 class="display-6">Sholat Yuk</h4>
        <h3 class="display-1">Ingat besok mati!</h3>
        <a href="#beranda">
          <button type="button" class="btn btn-danger btn-lg">
            Beranda
          </button>
        </a>
      </div>
    </div>


    <!-- layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="beranda">Beranda</h2>
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-code fa-5x"></i></span>
            <h3 class="mt-3">Programming</h3>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-palette fa-5x"></i></span>
            <h3 class="mt-3">Design</h3>

          </div>

          <div class="col-md-4">
            <span class="lingkaran"
              ><i class="fas fa-network-wired fa-5x"></i
            ></span>
            <h3 class="mt-3">Networking</h3>
          </div>
        </div>
      </div>
    </div>


    <!-- galeri -->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="galeri">Galeri</h2>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="image/1.jpeg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <p class="card-text">
                  I'm in the sun
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="image/3.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <p class="card-text">
                  I came to my friend's birthday
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="image/2.jpeg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <p class="card-text">
                  I'm eating spicy noodles with my friend
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="image/4.jpeg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <p class="card-text">
                  I'm hugging my sister
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="image/5.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <p class="card-text">
                  group photo after friend's birthday event is over
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="image/6.jpeg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <p class="card-text">
                  take pictures in the sun
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- profil-->
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="profil">Profile </h2>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4 text-center tim">
            <img
              src="image/1.jpeg"
            />
            <h4>Cornelia Cantik</h4>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
          </div>
          <div class="col-md-4">
              <div class="card-body">
                <h5 class="card-title">Cornelia Tamaya Fadihilah</h5>
                <p class="card-text">
                    Kelas 12 RPL 2 Absen 07
                </p>
              </div>
            </div>
          </div>
      </div>
    </div>


    <!-- Client -->
    <div class="container-fluid client pt-5 pb-5">
      <div class="container text-center">
        <div class="row pt-4 gx-4 gy-4">
          <div class="col">
            <img
              src="https://cdn.iconscout.com/icon/free/png-256/microsoft-28-761688.png"
            />
          </div>
          <div class="col">
            <img
              src="https://cdn3.iconfinder.com/data/icons/glypho-social-and-other-logos/64/logo-facebook-512.png"
            />
          </div>
          <div class="col">
            <img src="https://image.flaticon.com/icons/png/512/61/61109.png" />
          </div>
          <div class="col">
            <img
              src="https://i.pinimg.com/originals/20/1d/17/201d17590b3a7bc8939ca37e577bbbd8.png"
            />
          </div>
          <div class="col">
            <img
              src="https://www.ictmagazine.nl/wp-content/uploads/2020/10/ibm-720x340-1.png"
            />
          </div>
        </div>
      </div>
    </div>


    <!-- kontak -->
    <div class="container-fluid pt-5 pb-5 kontak">
      <div class="container">
        <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
        <div class="row pb-3">
          <div class="col-md-6">
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Nama"
            />
            <input
              class="form-control form-control-lg mb-3"
              type="text"
              placeholder="Email"
            />
            <input
              class="form-control form-control-lg"
              type="text"
              placeholder="No. Phone"
            />
          </div>
          <div class="col-md-6">
            <textarea class="form-control form-control-lg" rows="5"></textarea>
          </div>
        </div>
        <div class="col-md-3 mx-auto text-center">
          <button type="button" class="btn btn-danger btn-lg">
            Kirim Pesan
          </button>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </body>
</html>