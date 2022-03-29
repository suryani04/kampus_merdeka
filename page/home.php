<html>
<head>
    <title>Layout Web</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="asset/image/g1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="asset/image/g2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="asset/image/gambar.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
          <!------------Awal Nav--------------------->
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Nav</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarColor01">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Profile
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Visi & Misi</a></li>
                              <li><a class="dropdown-item" href="#">Landasan Hukum</a></li>
                              <li><a class="dropdown-item" href="#">Kabupaten</a></li>
                            </ul>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Kecamatan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Kecamatan 1</a></li>
                              <li><a class="dropdown-item" href="#">Kecamatan 2</a></li>
                              <li><a class="dropdown-item" href="#">JKecamatan 3</a></li>
                            </ul>
                          </li>

                          <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Peraturan
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Peraturan Pusat</a></li>
                              <li><a class="dropdown-item" href="#">Peraturan Provinsi</a></li>
                              <li><a class="dropdown-item" href="#">Peraturan Kabupaten</a></li>
                            </ul>
                          </li>

                          <li class="nav-item dropdown">
                            <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                             Galeri
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Vidio</a></li>
                              <li><a class="dropdown-item" href="#">foto</a></li>
                            </ul>
                          </li>
                          
                        </ul>
                        <form class="d-flex">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav>
            </div>
             <!-----------------------Akhir Nav--------------------------->
        </div>
       
        <div class="row">
            <div class="col-md-3">
            </br></br>
              <div class="row">
                <div class="col-12">
                  <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-bs-toggle="list" href="#list-home" role="tab" aria-controls="list-home">Berita</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-bs-toggle="list" href="#list-profile" role="tab" aria-controls="list-profile">Info Covid-19</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-bs-toggle="list" href="#list-messages" role="tab" aria-controls="list-messages">Kontak</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-bs-toggle="list" href="#list-settings" role="tab" aria-controls="list-settings">Help</a>
                  </div>
                </div>
               
              </div>
            </div>
            <div class="col-md-6">
                <!---------awal main content--------->
                <ul class="nav nav-pills mb-3" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Pariwisata</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Table</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Logo</button>
                  </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                  <!---------accordion--------->
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            WISATA RELIGI
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                          <div class="accordion-body">
                            <strong>Mesjid Agung Darussalihin</strong></br>  Mesjid Agung Darussalihin terletak tepat dijantung kota Idi Rayeuk sebagai ibukota kabupaten Aceh Timur. Mesjid ini memiliki perpaduan arsitektur Turki dan Arab sehingga membuat Mesjid Agung Darussalihin terlihat megah di pusat kota Idi Rayeuk. Untuk mewujudkan Pariwisata Aceh Timur berbasis Syariah Islam, pada momentum hari besar Islam selalu diadakan Zikir Akbar dan kegiatan bernuansa Islami lainnya.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            WISATA SEJARAH
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                          <div class="accordion-body">
                            <strong>Kerajaan Islam Peureulak (MONISA)</strong>
                          </br>Kerajaan Islam Peureulak merupakan kerajaan Islam pertama di Asia Tenggara. Kerajaan ini didirikan pada tahun 840M denga raja pertama Sulan Alaidin Sayed Maulana Abdul Aziz Syah (840-864 M). Sisa-sisa peninggalannya yang masih dapat ditemukan sekarang adalah Makan Sultan Sayed Maulana Abdul Aziz Syah dan istrinya serta makam Said Machdum Alaidin Malek Abdullah.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            WISATA ALAM
                          </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                          <div class="accordion-body">
                            <strong>Air Terjun Terujak</strong> 
                          </br> Objek wisata Air Terjun Terujak merupakan tempat wisata yang berudara sejuk serta mempunyai pemandangan hutan alam yang indah. Air terjun ini terletak dalam  kawasan  Hutan Lindung Leuser berjarak sekitar ± 89 Km dari Kota Idi Rayeuk yaitu di Desa Terujak, Kecamatan Serba Jadi (Lokop), Kabupaten Aceh Timur. Desa Terujak merupakan Desa terpencil   yang tidak jauh dari ibu kota Kecamatan yaitu di pedalaman Kabupaten Aceh Timur. Untuk mengunjungi objek  wisata  ini anda dapat menggunakan kendaraan mobil melalui Simpang Kampung Beusa Kecamatan Peureulak Barat dan dilanjutkan dengan sepeda motor, untuk sampai ke desa terujak  kita membutuhkan waktu sekitar 2 jam hingga 3 jam dari jalan nasional Medan – Banda Aceh. Disepanjang jalan-jalan yang dilalui untuk menuju ke desa terujak kita juga dapat menikmati panorama alam seperti  sungai-sungai indah yang dapat menggugah hati kita untuk bersahabat dengan alam, dalam perjalanan kita dapat melihat keaslian hutan yang masih terpelihara dengan baik.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-----------table----------->
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!---------card---------->
                  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="card" style="width: 18rem;">
                      <img src="asset/image/logo.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">Logo Aceh Timur</p>
                      </div>
                    </div>
                  </div>
                </div>
                <!------akhir main content------->
            </div>
            <div class="col-md-3">
               <!-------Awalan  Right Conten----------->
               <div class="mb-3">
              </br></br></br><h3> Masukan :</h3></br></br>
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
               <!-------Akhiran  Right Conten----------->
            </div>
        </div>
      </br></br></br></br></br></br>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-dark" role="alert">
                    <h4 class="alert-heading"></h4>
                    <p align="center"> ALAMAT KANTOR </br>
                        PEMERINTAH KABUPATEN ACEH TIMUR </br>
                        KANTOR BUPATI </br>
                        KANTOR SEKRETARIAT DAERAH </br>
                        Komplek Pusat Pemerintahan JL. Banda Aceh - Medan KM. 370 Gedung No. 22 - 23 IDI Kode POS 24454 </br>
                        Telp. (0646) 7020189</p>
                    <hr>
                    <p class="mb-0" align="center">Desain By : Suryani@2022 Kampus Merdeka </p>
                  </div>
            </div>
        </div>
    </div>
</body>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
</html>