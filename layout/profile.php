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
              <li
                class="sidebar-item border-bottom rounded-2"
                style="
                  background-image: linear-gradient(
                    120deg,
                    #89f7fe 0%,
                    #66a6ff 100%
                  );
                "
              >
                <a
                  class="sidebar-link"
                  href="./layout/profile.php"
                  aria-expanded="false"
                >
                  <span>
                    <i class="bi bi-person-fill text-white"></i>
                  </span>
                  <span class="hide-menu fw-semibold text-white"
                    >Profile Sekolah</span
                  >
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
              <li class="sidebar-item border-bottom">
                <a class="sidebar-link" href="bagan.php" aria-expanded="false">
                  <span>
                    <i class="bi bi-bar-chart-steps"></i>
                  </span>
                  <span class="hide-menu">Bagan Organisasi</span>
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
            <h3>Prifile Sekolah</h3>
            <div class="row">
              <div class="col-lg-6">
                <div
                  class="card shadow-sm p-2 my-1"
                  style="
                    background-image: linear-gradient(
                      to top,
                      #4481eb 0%,
                      #04befe 100%
                    );
                  "
                >
                  <div class="row">
                    <div class="col-lg-5 mb-3">
                      <div class="img text-center mt-2">
                        <img
                          src="../assets/images/logos/logo.png"
                          class="img-fluid"
                          style="width: 100px"
                          alt=""
                        />
                      </div>
                      <div class="name text-center mt-2">
                        <h5 class="text-white">BAYU GURIUM</h5>
                        <button
                          class="btn btn-sm w-75 border-0 text-white"
                          style="
                            background-image: linear-gradient(
                              120deg,
                              #89f7fe 0%,
                              #66a6ff 100%
                            );
                          "
                        >
                          KEPALA SEKOLAH
                        </button>
                      </div>
                    </div>
                    <div class="col-lg-7">
                      <div
                        class="card shadow-sm p-2"
                        style="
                          overflow-x: hidden;
                          background-image: linear-gradient(
                            120deg,
                            #fdfbfb 0%,
                            #ebedee 100%
                          );
                        "
                      >
                        <div class="row">
                          <div class="about">
                            <p
                              class="text-dark fs-1 fw-semibold text-center border-bottom"
                            >
                              TENTANG KEPALA SEKOLAH
                            </p>
                          </div>
                        </div>
                        <div class="row justify-content-center b">
                          <div class="col-6 border-bottom">
                            <p class="text-dark fw-semibold fs-2">
                              Nama Lengkap
                            </p>
                            <p class="text-dark fw-semibold fs-2">NIP</p>
                            <p class="text-dark fw-semibold fs-2">Jabatan</p>
                            <p class="text-dark fw-semibold fs-2">ALamat</p>
                          </div>
                          <div class="col-6 border-bottom">
                            <p class="text-dark fw-semibold fs-2">
                              : Bayu Gurium
                            </p>
                            <p class="text-dark fw-semibold fs-2">
                              : 200102099
                            </p>
                            <p class="text-dark fw-semibold fs-2">
                              : Programer
                            </p>
                            <p class="text-dark fw-semibold fs-2">: Ambon</p>
                          </div>
                        </div>
                        <button
                          class="btn btn-sm my-2 w-50 border-0 text-white"
                          style="
                            background-image: linear-gradient(
                              120deg,
                              #89f7fe 0%,
                              #66a6ff 100%
                            );
                          "
                        >
                          Lainnya
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div
                  class="card shadow-sm p-2"
                  style="
                    background-image: linear-gradient(
                      to top,
                      #4481eb 0%,
                      #04befe 100%
                    );
                  "
                >
                  <div class="info align-items-center">
                    <button
                      class="btn-sm btn w-100 align-items-center fw-semibold text-dark fs-3 border-0"
                      style="
                        background-image: linear-gradient(
                          120deg,
                          #89f7fe 0%,
                          #66a6ff 100%
                        );
                      "
                    >
                      Staf Pengajar
                    </button>
                  </div>

                  <div class="row mt-3">
                    <div class="col-3 text-center">
                      <img
                        src="../assets/images/logos/logo.png"
                        alt="loog"
                        class="img-fluid rounded-circle"
                        style="width: 50px"
                      />
                    </div>
                    <div class="col-6">
                      <div class="row">
                        <h6>Nama Pengajar</h6>
                      </div>
                      <p style="margin-top: -8px">deskripsi</p>
                      <button
                        class="btn btn-sm btn-info"
                        style="margin-top: -15px"
                      >
                        Tentang Pengajar
                      </button>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-3 text-center">
                      <img
                        src="../assets/images/logos/logo.png"
                        alt="loog"
                        class="img-fluid rounded-circle"
                        style="width: 50px"
                      />
                    </div>
                    <div class="col-6 mb-3">
                      <div class="row">
                        <h6>Nama Pengajar</h6>
                      </div>
                      <p style="margin-top: -8px">deskripsi</p>
                      <button
                        class="btn btn-sm btn-info"
                        style="margin-top: -15px"
                      >
                        Tentang Pengajar
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row my-2">
              <h3>Deskripsi Sekolah</h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro,
                natus! Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quibusdam eligendi illum incidunt iusto nisi, recusandae
                voluptates at nulla autem laudantium ratione. Velit, aperiam ad?
                Possimus iusto sit maiores beatae cum!
              </p>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div
                  class="card card-hero shadow bg-primary"
                  style="border-bottom: 5px solid orange"
                ></div>
              </div>
            </div>
          </div>
          <!-- end of content -->
          <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">
              Design and Develope by
              <a
                href=""
                target="_blank"
                class="pe-1 text-primary text-decoration-underline"
                >Ita Team</a
              >
            </p>
          </div>
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
