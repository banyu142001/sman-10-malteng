<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portal Operator</title>
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
                  href="./index.html"
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
                    <i class="bi bi-house fs-4"></i>
                  </span>
                  <span class="hide-menu">Dashboard Operator</span>
                </a>
              </li>
              <li class="nav-small-cap border-bottom">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">Menu</span>
              </li>
              <li class="sidebar-item border-bottom">
                <a
                  class="sidebar-link"
                  href="data_pegawai.html"
                  aria-expanded="false"
                >
                  <span>
                    <i class="bi bi-person-fill"></i>
                  </span>
                  <span class="hide-menu">Data Pegawai</span>
                </a>
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
                  <span class="hide-menu">Data & Kepangkatan Pegawai</span>
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
            <div class="card shadow-sm p-2 border-0 my-2">
              <div class="row justify-content-center">
                <div class="col-lg-5">
                  <div
                    class="card shadow-sm my-2 bg-primary"
                    style="
                      border-bottom: 3px solid orange;
                      border-radius: 10px 10px 10px 10px;
                    "
                  >
                    <div class="row" style="padding-left: 12px">
                      <div
                        class="col-4 bg-dark p-2 text-center"
                        style="border-radius: 10px; height: 90px"
                      >
                        <a href="">
                          <i
                            class="bi bi-person-fill-add text-center text-white"
                            style="font-size: 40px"
                          ></i>
                        </a>
                      </div>
                      <div class="col align-items-center d-flex">
                        <a href="guru.html">
                          <div class="row">
                            <div class="col">
                              <h5 class="fs-4">Data & Kepangkatan Pegawai</h5>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <button class="btn btn-sm btn-info">
                                Kelola Data
                              </button>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <div
                    class="card shadow-sm my-2 bg-success"
                    style="
                      border-bottom: 3px solid orange;
                      border-radius: 10px 10px 10px 10px;
                    "
                  >
                    <div class="row" style="padding-left: 12px">
                      <div
                        class="col-4 bg-dark p-2 text-center"
                        style="border-radius: 10px; height: 90px"
                      >
                        <a href="">
                          <i
                            class="bi bi-book-half text-center text-white"
                            style="font-size: 40px"
                          ></i>
                        </a>
                      </div>
                      <div class="col align-items-center d-flex">
                        <a href="">
                          <div class="row">
                            <div class="col">
                              <h5 class="fs-4">Data Sekolah</h5>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <button class="btn btn-sm btn-info">
                                Kelola Data
                              </button>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row justify-content-center mt-3">
                <div class="col-lg-7">
                  <div class="text">
                    <h4>Daftar Kepangkatan Pegawai</h4>
                  </div>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Distinctis o error dolores non eaque sunt commodi cupiditate
                  aliquam velit quasi ipsa totam accusantium dicta molestias,
                  illo, saepe magnam doloribus dolorem. Consequatur!
                </div>
                <div class="col-lg-3">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex
                  quos nulla praesentium, in iusto id hic similique! Ex debitis
                  quisquam, neque, harum deserunt similique officia id sed nobis
                  dolorum voluptate.
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
