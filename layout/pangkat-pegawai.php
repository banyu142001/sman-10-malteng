<?php 

include "../controler/control.php";

if(isset($_POST["simpan"])){

  if(pangkatPegawai($_POST) > 0){

    $sukses = true;

  }else{

    $gagal = true;
  }

}



// tampil data
$data_kpesek = tampilData("SELECT * FROM tb_kepsek");
$ketua_komite = tampilData("SELECT * FROM tb_komite ");
$tata_usaha = tampilData("SELECT * FROM tb_tu");
$kesiswaan = tampilData("SELECT * FROM tb_kesiswaan");
$kurikulum = tampilData("SELECT * FROM tb_kurikulum");
$kord_bp = tampilData("SELECT * FROM tb_bp");
$kelola_lab_ipa = tampilData("SELECT * FROM tb_kelola_lab");
$kelola_perpus = tampilData("SELECT * FROM tb_kelola_perpus");




?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portal - Guru / Pangkat - Pegawai</title>
    <link
      rel="shortcut icon"
      type="image/png"
      href="../assets/images/logos/logo.png"
    />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <!-- my style -->
    <link rel="stylesheet" href="../assets/css/styles.css" />
    <!-- bootstrap icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
  </head>

  <body>
    <!--  Body Wrapper -->
    <div
      class="page-wrapper"
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin6"
      data-sidebartype="full"
      data-sidebar-position="fixed"
      data-header-position="fixed"
    >
      <!-- Sidebar Start -->
      <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
          <div
            class="brand-logo d-flex align-items-center justify-content-between my-3"
          >
            <a href="./index.html" class="text-nowrap logo-img">
              <img
                src="../assets/images/logos/logo.png"
                width="70"
                alt="logo"
                style="margin-left: 55px"
              />
            </a>
            <div
              class="close-btn d-xl-none d-block sidebartoggler cursor-pointer"
              id="sidebarCollapse"
            >
              <i class="ti ti-x fs-8"></i>
            </div>
          </div>
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon"></i>
                <span class="hide-menu">Home</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="admin.html" aria-expanded="false">
                  <span>
                    <i class="bi bi-house fs-4"></i>
                  </span>
                  <span class="hide-menu">Dashboard Pegawai</span>
                </a>
              </li>
              <li class="nav-small-cap border-bottom">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Menu</span>
              </li>
              <li class="sidebar-item border-bottom">
                <a class="sidebar-link" href="guru.html" aria-expanded="false">
                  <span>
                    <i class="bi bi-person-fill"></i>
                  </span>
                  <span class="hide-menu fw-bold">Data Pegawai</span>
                </a>
              </li>
              <li class="sidebar-item border-bottom">
                <a
                  class="sidebar-link"
                  href="./layout/tentang.html"
                  aria-expanded="false"
                  style="
                    background-image: linear-gradient(
                      120deg,
                      #89f7fe 0%,
                      #66a6ff 100%
                    );
                  "
                >
                  <span><i class="bi bi-book"></i></span>
                  <small class="hide-menu fw-bold"
                    >Data Kepangkatan Pegawai</small
                  >
                </a>
              </li>
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon"></i>
                <span class="hide-menu">Auth</span>
              </li>
              <li class="sidebar-item border-bottom">
                <a
                  class="sidebar-link"
                  href="./layout/tentang.html"
                  aria-expanded="false"
                >
                  <span>
                    <i class="bi bi-book"></i>
                  </span>
                  <span class="hide-menu text-danger">Keluar</span>
                </a>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </aside>
      <!--  Sidebar End -->
      <!--  Main wrapper -->
      <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
          <nav class="navbar navbar-expand-lg navbar-light">
            <ul class="navbar-nav">
              <li class="nav-item d-block d-xl-none">
                <a
                  class="nav-link sidebartoggler nav-icon-hover"
                  id="headerCollapse"
                  href="javascript:void(0)"
                >
                  <i class="ti ti-menu-2"></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                  <i class="ti ti-bell-ringing"></i>
                  <div class="notification bg-primary rounded-circle"></div>
                </a>
              </li>
            </ul>
            <div
              class="navbar-collapse justify-content-end px-0"
              id="navbarNav"
            >
              <ul
                class="navbar-nav flex-row ms-auto align-items-center justify-content-end"
              >
                <a
                  href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/"
                  target="_blank"
                  class="btn btn-sm border-0 text-white"
                  style="
                    background-image: linear-gradient(
                      120deg,
                      #89f7fe 0%,
                      #66a6ff 100%
                    );
                  "
                  >Login</a
                >
                <li class="nav-item dropdown">
                  <a
                    class="nav-link nav-icon-hover"
                    href="javascript:void(0)"
                    id="drop2"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                    <img
                      src="../assets/images/logos/logo.png"
                      alt=""
                      width="35"
                      height="35"
                      class="rounded-circle"
                    />
                  </a>
                  <div
                    class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                    aria-labelledby="drop2"
                  >
                    <div class="message-body">
                      <a
                        href="javascript:void(0)"
                        class="d-flex align-items-center gap-2 dropdown-item"
                      >
                        <i class="ti ti-user fs-6"></i>
                        <p class="mb-0 fs-3">My Profile</p>
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="d-flex align-items-center gap-2 dropdown-item"
                      >
                        <i class="ti ti-mail fs-6"></i>
                        <p class="mb-0 fs-3">My Account</p>
                      </a>
                      <a
                        href="javascript:void(0)"
                        class="d-flex align-items-center gap-2 dropdown-item"
                      >
                        <i class="ti ti-list-check fs-6"></i>
                        <p class="mb-0 fs-3">My Task</p>
                      </a>
                      <a
                        href="./authentication-login.html"
                        class="btn btn-outline-primary mx-3 mt-2 d-block"
                        >Logout</a
                      >
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </header>
        <!--  Header End -->

        <div class="container-fluid">
          <!-- content -->
          <div class="container">
            <div class="card shadow-sm p-3 border-0 my-2">
              <div class="row mb-2 justify-content-center border-bottom">
                <div class="col-10 text-center">
                  <img
                    src="../assets/images/logos/logo.png"
                    class="img-fluid text-center"
                    style="width: 80px"
                  />
                  <h2 class="text-center">SMA NEGERI 10 MALUKU TENGAH</h2>
                </div>
              </div>

              <!-- From pamgkat pegawai -->
              <form action="" method="post">
                <?php if(isset($sukses)) : ?>
                  <div class="simpan w-100">
                        <div class="card shadow-sm border-0 p-1 my-2 w-100 bg-success"  >
                        <small class="text-white fw-bold">Data Kepangkatan Pegawai Berhasil ditambahkan !! <a href="pangkat-pegawai.php" class="btn btn-warning btn-sm mx-2">Simpan</a></small> 
                        </div>
                      </div>
                <?php endif ?>
                <?php if(isset($gagal)) : ?>
                  <div class="simpan w-100">
                        <div class="card shadow-sm border-0 p-1 my-2 w-100 bg-danger"  >
                        <small class="text-white fw-bold">Data Gagal Ditambahkan !! <a href="pangkat-pegawai.php" class="btn btn-warning btn-sm mx-2">Oke</a></small> 
                        </div>
                      </div>
                <?php endif ?>
                <div class="row p-2 my-2 border-bottom">
                  <div class="col-lg-4 border-end">
                    <div class="topik">
                      <h5>KEPALA SEKOLAH</h5>
                    </div>
                    <div class="form-group">
                      <label for="nip_kepsek">NIP </label>
                      <input
                        type="text"
                        name="nip_kepsek"
                        id="nip_kepsek"
                        class="form-control form-control-sm"
                      />
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama Kepala Sekolah </label>
                      <input
                        type="text"
                        name="nama_kepsek"
                        id="nama"
                        class="form-control form-control-sm"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 border-end">
                    <div class="topik">
                      <h5>KETUA KOMITE</h5>
                    </div>
                    <div class="form-group">
                      <label for="ketua_komite">Nama Ketua Komite </label>
                      <input
                        type="text"
                        name="ketua_komite"
                        id="ketua_komite"
                        class="form-control form-control-sm"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="topik">
                      <h5>KEPALA TATA USAHA</h5>
                    </div>
                    <div class="form-group">
                      <label for="nip_ktu">NIP </label>
                      <input
                        type="text"
                        name="nip_ktu"
                        id="nip_ktu"
                        class="form-control form-control-sm"
                      />
                    </div>
                    <div class="form-group">
                      <label for="ketua_komite">Nama Kepala Tata Usaha </label>
                      <input
                        type="text"
                        name="nama_ktu"
                        id="nama_ktu"
                        class="form-control form-control-sm"
                      />
                    </div>
                  </div>
                </div>
                <div class="row py-2 border-bottom">
                  <div class="col-lg-4 border-end">
                    <div class="topik">
                      <h5>WAKASEK KESISWAAN</h5>
                    </div>
                    <div class="form-group">
                      <label for="nip_kesiswaan">NIP </label>
                      <input
                        type="text"
                        name="nip_kesiswaan"
                        id="nip_kesiswaan"
                        class="form-control form-control-sm"
                      />
                    </div>
                    <div class="form-group">
                      <label for="nama_kesiswaan"
                        >Nama Wakasek Kesiswaan
                      </label>
                      <input
                        type="text"
                        name="nama_kesiswaan"
                        id="nama_kesiswaan"
                        class="form-control form-control-sm"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 border-end">
                    <div class="topik">
                      <h5>WAKASEK KURIKULUM</h5>
                    </div>
                    <div class="form-group">
                      <label for="nip_kurikulum">NIP </label>
                      <input
                        type="text"
                        name="nip_kurikulum"
                        id="nip_kurikulum"
                        class="form-control form-control-sm"
                      />
                    </div>
                    <div class="form-group">
                      <label for="nama_kurikulum"
                        >Nama Wakasek Kurikulum
                      </label>
                      <input
                        type="text"
                        name="nama_kurikulum"
                        id="nama_kurikulum"
                        class="form-control form-control-sm"
                      />
                    </div>
                  </div>
                </div>
                <div class="row py-2 border-bottom">
                  <div class="col-lg-4 border-end">
                    <div class="topik">
                      <h5>KORD.BP/BK/MAPEL</h5>
                    </div>
                    <div class="form-group">
                      <label for="nip_kord">NIP </label>
                      <input
                        type="text"
                        name="nip_kord_bp"
                        id="nip_kord_bp"
                        class="form-control form-control-sm"
                      />
                    </div>
                    <div class="form-group">
                      <label for="nama_kord">Nama Kord.BP/BK/MAPEL </label>
                      <input
                        type="text"
                        name="nama_kord_bp"
                        id="nama_kord"
                        class="form-control form-control-sm"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 border-end">
                    <div class="topik">
                      <h5>PENGELOLA LAB. IPA</h5>
                    </div>
                    <div class="form-group">
                      <label for="nip_lab">NIP </label>
                      <input
                        type="text"
                        name="nip_lab_ipa"
                        id="nip_lab"
                        class="form-control form-control-sm"
                      />
                    </div>
                    <div class="form-group">
                      <label for="nama_lab">Nama Pengelola Lab. IPA </label>
                      <input
                        type="text"
                        name="nama_lab_ipa"
                        id="nama_lab"
                        class="form-control form-control-sm"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 border-end">
                    <div class="topik">
                      <h5>PENGELOLA PERPUSTAKAAN</h5>
                    </div>
                    <div class="form-group">
                      <label for="nip_perpus">NIP </label>
                      <input
                        type="text"
                        name="nip_perpus"
                        id="nip_perpus"
                        class="form-control form-control-sm"
                      />
                    </div>
                    <div class="form-group">
                      <label for="nama_perpus"
                        >Nama Pengelola Perpustakaan
                      </label>
                      <input
                        type="text"
                        name="nama_perpus"
                        id="nama_perpus"
                        class="form-control form-control-sm"
                      />
                    </div>
                  </div>
                </div>
                <div class="form-group my-2 border-bottom ">
                  <button
                    class="btn btn-sm btn-success mb-2"
                    name="simpan"
                    type="submit"
                  >
                    <i class="bi bi-check-circle-fill"></i>
                    Simpan Data
                  </button>
                  <button class="btn btn-sm btn-danger mb-2">Batal</button>
                </div>
              </form>

            <div class="row my-3">

              <div class="detail">
                  <small>Detail Kepangkatan Pegawai SMA Negeri Maluku Tengah</small>
              </div>
              
            </div>
            <div class="row">
               <div class="col-3  mb-2">
                <div class="row">
              
                  <p>Kepala Sekolah</p>
                </div>
               <?php foreach($data_kpesek as $kepsek) : ?>
                <div class="row">
                  <div class="text ">
                    <h6 class="text-info fw-bold border-bottom " style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success "></i><?= $kepsek["nama_kepsek"] ?></h6>
                    <h6 class="text-info fw-bold border-bottom " style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success "></i><?= $kepsek["nip"] ?></h6>
                  </div>                  
                </div>
                <?php endforeach; ?>
               </div>
              
               <div class="col-3 mb-2">
                <div class="row">
                  <p class="">Ketua Komite</p>
                </div>
               <?php foreach($ketua_komite as $komite) : ?>
                <div class="row">
                  <div class="text ">
                    <h6 class="text-info fw-bold border-bottom" style="font-weight: bold;"><i class="bi bi-check-circle-fill mx-2 text-success "></i><?= $komite["nama_komite"] ?></h6>
                  </div>                  
                </div>
                <?php endforeach; ?>
               </div>

               <div class="col-3 mb-2">
                <div class="row">
                  <p class="">Kepala Tata Usaha</p>
                </div>
               <?php foreach($tata_usaha as $tu) : ?>
                <div class="row">
                  <div class="text ">
                    <h6 class="text-info fw-bold border-bottom" style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success "></i><?= $tu["nama_tu"] ?></h6>
                    <h6 class="text-info fw-bold border-bottom " style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success "></i><?= $tu["nip"] ?></h6>
                  </div>                  
                </div>
                <?php endforeach; ?>
               </div>
              
               <div class="col-3 mb-2">
                <div class="row">
                  <p class="">Wakasek Kesiswaan </p>
                </div>
               <?php foreach($kesiswaan as $kes) : ?>
                <div class="row">
                  <div class="text ">
                    <h6 class="text-info fw-bold border-bottom" style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success"></i><?= $kes["nama_kesiswaan"] ?></h6>
                    <h6 class="text-info fw-bold border-bottom" style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success"></i><?= $kes["nip"] ?></h6>
                  </div>                  
                </div>
                <?php endforeach; ?>
               </div>

               <div class="col-3 mb-2">
                <div class="row">
                  <p class="">Wakasek Kurikulum </p>
                </div>
               <?php foreach($kurikulum as $kur) : ?>
                <div class="row">
                  <div class="text ">
                    <h6 class="text-info fw-bold border-bottom" style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success"></i><?= $kur["nama_kurikulum"] ?></h6>
                    <h6 class="text-info fw-bold border-bottom" style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success"></i><?= $kur["nip"] ?></h6>
                  </div>                  
                </div>
                <?php endforeach; ?>
               </div>

               <div class="col-3 mb-2">
                <div class="row">
                  <p class="">KORD.BP/BK/MAPEL </p>
                </div>
               <?php foreach($kord_bp as $bp) : ?>
                <div class="row">
                  <div class="text ">
                    <h6 class="text-info fw-bold border-bottom" style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success"></i><?= $bp["nama_bp"] ?></h6>
                    <h6 class="text-info fw-bold border-bottom" style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success"></i><?= $bp["nip"] ?></h6>
                  </div>                  
                </div>
                <?php endforeach; ?>
               </div>
              

               <div class="col-3 mb-2">
                <div class="row">
                  <p class="">PENGELOLA LAB. IPA </p>
                </div>
               <?php foreach($kelola_lab_ipa as $lab_ipa) : ?>
                <div class="row">
                  <div class="text ">
                    <h6 class="text-info fw-bold border-bottom" style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success"></i><?= $lab_ipa["nama_pengelola"] ?></h6>
                    <h6 class="text-info fw-bold border-bottom" style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success"></i><?= $lab_ipa["nip"] ?></h6>
                  </div>                  
                </div>
                <?php endforeach; ?>
               </div>

               <div class="col-3 mb-2">
                <div class="row">
                  <p class="">PENGELOLA PERPUSTAKAAN</p>
                </div>
               <?php foreach($kelola_perpus as $perpus) : ?>
                <div class="row">
                  <div class="text ">
                    <h6 class="text-info fw-bold border-bottom" style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success"></i><?= $perpus["nama_kelola_perpus"] ?></h6>
                    <h6 class="text-info fw-bold border-bottom" style="font-weight: bold;">
                    <i class="bi bi-check-circle-fill mx-2 text-success"></i><?= $perpus["nip"] ?></h6>
                  </div>                  
                </div>
                <?php endforeach; ?>
               </div>
              
            </div>
           </div>
            </div>
          </div>
          <!-- end of content -->
        </div>
      </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>
  </body>
</html>
