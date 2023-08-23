<?php 

include "../controler/control.php";

// tampil data
$data_kpesek = tampilData("SELECT * FROM tb_kepsek")[0];
$ketua_komite = tampilData("SELECT * FROM tb_komite ")[0];
$tata_usaha = tampilData("SELECT * FROM tb_tu")[0];
$kesiswaan = tampilData("SELECT * FROM tb_kesiswaan")[0];
$kurikulum = tampilData("SELECT * FROM tb_kurikulum")[0];
$kord_bp = tampilData("SELECT * FROM tb_bp")[0];
$kelola_lab_ipa = tampilData("SELECT * FROM tb_kelola_lab")[0];
$kelola_perpus = tampilData("SELECT * FROM tb_kelola_perpus")[0];



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SMA Negeri-10 Maluku Tengah</title>
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
                <a
                  class="sidebar-link"
                  href="../index.php"
                  aria-expanded="false"
                >
                  <span>
                    <i class="bi bi-house fs-4"></i>
                  </span>
                  <span class="hide-menu">Beranda</span>
                </a>
              </li>
              <li class="nav-small-cap border-bottom">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Link</span>
              </li>
              <li class="sidebar-item border-bottom">
                <a
                  class="sidebar-link"
                  href="profile.php"
                  aria-expanded="false"
                >
                  <span>
                    <i class="bi bi-person-fill"></i>
                  </span>
                  <span class="hide-menu">Profile Sekolah</span>
                </a>
              </li>
              <li class="sidebar-item border-bottom">
                <a
                  class="sidebar-link"
                  href="tentang.php"
                  aria-expanded="false"
                >
                  <span>
                    <i class="bi bi-book"></i>
                  </span>
                  <span class="hide-menu">Tentang Sekolah</span>
                </a>
              </li>
              <li class="sidebar-item border-bottom rounded-2">
                <a
                  class="sidebar-link"
                  href="bagan.php"
                  aria-expanded="false"
                  style="
                    background-image: linear-gradient(
                      120deg,
                      #89f7fe 0%,
                      #66a6ff 100%
                    );
                  "
                >
                  <span>
                    <i class="bi bi-bar-chart-steps text-white"></i>
                  </span>
                  <span class="hide-menu fw-semibold text-white"
                    >Bagan Organisasi</span
                  >
                </a>
              </li>
              <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Autentikasi</span>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="login.php" aria-expanded="false">
                  <span>
                    <i class="ti ti-login"></i>
                  </span>
                  <span class="hide-menu">Login</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a
                  class="sidebar-link"
                  href="register.php"
                  aria-expanded="false"
                >
                  <span>
                    <i class="ti ti-user-plus"></i>
                  </span>
                  <span class="hide-menu">Register</span>
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
            <h3>Bagan Organisasi Sekolah</h3>
            <div class="row">
              <div class="col-lg-8">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Ratione fugiat rerum, deleniti nesciunt minima ea aut molestias
                error dolore placeat veritatis harum nihil sint vero magnam
                assumenda excepturi maxime et.
              </div>
            </div>
            <div class="row justify-content-center my-3">
              <div class="col-lg-8">
                <div class="card shadow-sm border-0 p-2 border-0">
                  <div class="row justify-content-start">
                    <div class="col-lg-3">
                      <div
                        class="card card-bgn shadow p-1 text-center"
                        style="
                          background-image: linear-gradient(
                            60deg,
                            #abecd6 0%,
                            #fbed96 100%
                          );
                        "
                      >
                        <h6 class="border-bottom">Ketua Komite</h6>
                        <h6><?= $ketua_komite["nama_komite"] ?></h6>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div
                        class="card card-bgn shadow p-1 text-center"
                        style="
                          z-index: 1;
                          background-image: linear-gradient(
                            to right,
                            #92fe9d 0%,
                            #00c9ff 100%
                          );
                        "
                      >
                        <h6 class="border-bottom">KEPALA SEKOLAH</h6>
                        <h6><?= $data_kpesek["nama_kepsek"] ?></h6>
                        <h6><?= $data_kpesek["nip"] ?></h6>    
                      </div>
                    </div>
                  </div>
                  <span class="role"></span>
                  <span class="role2"></span>
                  <span class="role3"></span>
                  <span class="role4"></span>
                  <span class="role5"></span>
                  <div class="row justify-content-end">
                    <div class="col-lg-5">
                      <div
                        class="card card-bgn shadow p-1 text-center me-auto"
                        style="
                          background-image: linear-gradient(
                            to right,
                            #92fe9d 0%,
                            #00c9ff 100%
                          );
                        "
                      >
                        <h6 class="border-bottom">KEPALA TATA USAHA</h6>
                        <h6><?= $tata_usaha["nama_tu"] ?></h6>
                        <h6><?= $tata_usaha["nip"] ?></h6>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-lg-5">
                      <div
                        class="card card-bgn shadow p-1 text-center me-auto"
                        style="
                          background-image: linear-gradient(
                            to top,
                            #d9afd9 0%,
                            #97d9e1 100%
                          );
                        "
                      >
                        <h6 class="border-bottom">WAKASEK KESISWAAN</h6>
                        <h6><?= $kesiswaan["nama_kesiswaan"] ?></h6>
                        <h6><?= $kesiswaan["nip"] ?></h6>
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div
                        class="card card-bgn shadow p-1 text-center me-auto"
                        style="
                          background-image: linear-gradient(
                            to top,
                            #d9afd9 0%,
                            #97d9e1 100%
                          );
                        "
                      >
                        <h6 class="border-bottom">WAKASEK KURIKULUM</h6>
                        <h6><?= $kurikulum["nama_kurikulum"] ?></h6>
                        <h6><?= $kurikulum["nip"] ?></h6>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-lg-4">
                      <div
                        class="card card-bgn shadow p-1 text-center me-auto"
                        style="
                          background-image: linear-gradient(
                            120deg,
                            #f6d365 0%,
                            #fda085 100%
                          );
                        "
                      >
                        <h6 class="border-bottom">KORD.BP/BK/MAPEL</h6>
                        <h6><?= $kord_bp["nama_bp"] ?></h6>
                        <h6><?= $kord_bp["nip"] ?></h6>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div
                        class="card card-bgn shadow p-1 text-center me-auto"
                        style="
                          background-image: linear-gradient(
                            120deg,
                            #f6d365 0%,
                            #fda085 100%
                          );
                        "
                      >
                        <h6 class="border-bottom">PENGELOLA LAB. IPA</h6>
                      <h6><?= $kelola_lab_ipa["nama_pengelola"] ?></h6>
                      <h6><?= $kelola_lab_ipa["nip"] ?></h6>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div
                        class="card card-bgn shadow p-1 text-center me-auto"
                        style="
                          background-image: linear-gradient(
                            120deg,
                            #f6d365 0%,
                            #fda085 100%
                          );
                        "
                      >
                        <h6 class="border-bottom">PENGELOLA PERPUSTAKAAN</h6>
                        <h6><?= $kelola_perpus["nama_kelola_perpus"] ?></h6>
                        <h6><?= $kelola_perpus["nip"] ?></h6>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-lg-4">
                      <div
                        class="card card-bgn shadow p-1 text-center me-auto"
                        style="
                          background-image: linear-gradient(
                            to top,
                            #feada6 0%,
                            #f5efef 100%
                          );
                        "
                      >
                        <h6 class="border-bottom">WALI-WALI KELAS</h6>
                        <!-- <h6>---</h6>
                        <h6>--</h6> -->
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-lg-4">
                      <div
                        class="card card-bgn shadow p-1 text-center me-auto"
                        style="
                          background-image: linear-gradient(
                            to top,
                            #88d3ce 0%,
                            #6e45e2 100%
                          );
                        "
                      >
                        <h6 class="border-bottom">GURU MATA PELAJARAN</h6>
                        <!-- <h6>---</h6>
                        <h6>--</h6> -->
                      </div>
                    </div>
                  </div>

                  <div class="row justify-content-center">
                    <div class="col-lg-4">
                      <div
                        class="card card-bgn shadow p-1 text-center me-auto"
                        style="
                          background-image: linear-gradient(
                            to top,
                            #ff0844 0%,
                            #ffb199 100%
                          );
                        "
                      >
                        <h6 class="border-bottom">SISWA-SISWI</h6>
                        <!-- <h6>---</h6>
                        <h6>--</h6> -->
                      </div>
                    </div>
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
