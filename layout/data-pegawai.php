<?php 

// Koneksi dengan file (controler.php)
include "../controler/control.php";

if(isset($_POST["simpan"])){

      if(tambahData($_POST) > 0){
        echo "<script>
              alert('Data Berhasil Ditambahkan!!')
            </script> ";
       $sukses = true;
      }else{
        echo "<script>
        alert('Data Gagal ditambhkan !!')
      </script> ";
      $gagal = true;
      }

}

// tampil data
$dataPegawai = tampilData("SELECT * FROM pegawai");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portal - Guru / Pegawai</title>
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
                <a
                  class="sidebar-link"
                  href="guru.html"
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
                >
                  <span>
                    <i class="bi bi-book"></i>
                  </span>
                  <small class="hide-menu">Data & Kepangkatan Pegawai</small>
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
              <div class="row mb-2">
                <div class="col-lg-1">
                  <img
                    src="../assets/images/logos/logo.png"
                    class="img-fluid"
                    style="width: 100px"
                  />
                </div>
                <div class="col-lg-10">
                  <h2>SMA NEGERI 10 MALUKU TENGAH</h2>
                </div>
              </div>

              <div class="row mt-2 my-2">
                <div class="col-lg-10 justify-content-end">
                  <div class="table-responsive my-2 border-bottom">
                    <div class="tmbl">
                      <button
                        class="btn btn-sm btn-success"
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#tambah-data-pegawai"
                      >
                        <i
                          class="bi bi-plus-lg fw-bold"
                          style="font-size: 15px"
                        ></i>
                        Tambah Data
                      </button>
                    </div>
                    <?php if(isset($sukses)) : ?>
                      <div class="simpan w-100">
                        <div class="card shadow-sm border-0 p-1 my-2 w-100 bg-success"  >
                        <small class="text-white fw-bold">Data Berhasil ditambahkan !!  <a href="data-pegawai.php" class="btn btn-warning btn-sm mx-2">Oke</a></small> 
                        </div>
                      </div>
                    <?php endif; ?>
                    <?php if(isset($gagal)) : ?>
                      <div class="simpan w-100">
                        <div class="card shadow-sm border-0 p-1 my-2 w-100 bg-danger"  >
                        <small class="text-white fw-bold">Data Gagal Ditambahkan  <a href="data-pegawai.php" class="btn btn-warning btn-sm mx-2">Oke</a></small> 
                        </div>
                      </div>
                    <?php endif; ?>
                    <table class="table table-sm table-striped my-2">
                      <thead class="table-dark">
                        <tr>
                          <th><small>No</small></th>
                          <th><small>NIP</small></th>
                          <th><small>Nama Pegawai</small></th>
                          <th><small>NUPTK</small></th>
                          <th><small>Pengkat</small></th>
                          <th><small>Status</small></th>
                          <th><small>L/P</small></th>
                          <th><small>Tgl Lahir</small></th>
                          <th><small>Sekolah Induk </small></th>
                          <th class="text-center">
                            <i class="bi bi-pencil-square text-success"></i>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no = 1; ?>
                        <?php foreach($dataPegawai as $data): ?>
                        <tr>
                          <td><small><?= $no++ ?></small></td>
                          <td><small><?= $data["nip"] ?></small></td>
                          <td><small><?= $data["nama_pegawai"] ?></small></td>
                          <td><small><?= $data["nuptk"] ?></small></td>
                          <td><small><?= $data["pangkat"] ?></small></td>
                          <td><small><?= $data["status"] ?></small></td>
                          <td><small><?= $data["jenis_kelamin"] ?></small></td>
                          <td><small><?= $data["tgl_lahir"] ?></small></td>
                          <td><small><?= $data["sekolah_induk"] ?></small></td>
                          <td>
                            <a href="../controler/ubah.php?id=<?= $data["id"] ?>"
                              ><i
                                class="bi bi-brush text-info"
                                style="font-size: 17px; margin-right: 10px"
                              ></i
                            ></a>

                            <a href="../controler/hapus.php?id=<?= $data["id"] ?>" 
                              ><i
                                class="bi bi-trash text-danger"
                                style="font-size: 17px"
                              ></i
                            ></a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>

                    <!-- modal tambah data -->
                    <!-- Modal -->
                    <div
                      class="modal fade"
                      id="tambah-data-pegawai"
                      data-bs-backdrop="static"
                      data-bs-keyboard="false"
                      tabindex="-1"
                      aria-labelledby="staticBackdropLabel"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1
                              class="modal-title fs-5"
                              id="staticBackdropLabel"
                            >
                              Form Tambah Data Pegawai
                            </h1>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">
                            <div class="row justify-content-center">
                              <div class="col text-center border-bottom">
                                <div class="modal-img">
                                  <img
                                    src="../assets/images/logos/logo.png"
                                    alt="logo"
                                    class="img-fluid mb-1"
                                    style="width: 60px"
                                  />
                                </div>
                              </div>
                            </div>

                            <div class="row">
                              <!-- form tambah data pegawai -->
                              <form action="" method="post">
                                <div
                                  class="row border-bottom justify-content-center mb-1 my-2"
                                >
                                  <div class="col-5 border-end my-2">
                                    <div class="form-group">
                                      <label for="nip">NIP </label>
                                      <input
                                        type="text"
                                        name="nip"
                                        id="nip"
                                        class="form-control form-control-sm"
                                        required
                                      />
                                    </div>
                                    <div class="form-group">
                                      <label for="nama">Nama Pegawai </label>
                                      <input
                                        type="text"
                                        name="nama"
                                        id="nama"
                                        class="form-control form-control-sm"
                                        required
                                      />
                                    </div>
                                    <div class="form-group">
                                      <label for="nuptk">NUPTK </label>
                                      <input
                                        type="text"
                                        name="nuptk"
                                        id="nuptk"
                                        class="form-control form-control-sm"
                                        required
                                      />
                                    </div>
                                    <div class="form-group">
                                      <label for="pangkat">Pangkat </label>
                                      <input
                                        type="text"
                                        name="pangkat"
                                        id="pangkat"
                                        class="form-control form-control-sm"
                                        required
                                      />
                                    </div>
                                  </div>

                                  <!-- col 2 -->
                                  <div class="col-5 my-2">
                                    <div class="form-group">
                                      <label for="status">Status </label>
                                      <input
                                        type="text"
                                        name="status"
                                        id="status"
                                        class="form-control form-control-sm"
                                        required
                                      />
                                    </div>
                                    <div class="form-group">
                                      <label for="jk">Jenis Kelamin </label>
                                      <select
                                        name="jk"
                                        id="jk"
                                        class="form-select form-select-sm"
                                      >
                                        <option value="">--</option>
                                        <option value="Laki-Laki">
                                          Laki-Laki
                                        </option>
                                        <option value="Perempuan">
                                          Perempuan
                                        </option>
                                      </select>
                                    </div>
                                    <div class="form-group">
                                      <label for="tgl_lahir"
                                        >Tanggal Lahir
                                      </label>
                                      <input
                                        type="date"
                                        name="tgl_lahir"
                                        id="tgl_lahir"
                                        class="form-control form-control-sm w-50"
                                        required
                                      />
                                    </div>
                                    <div class="form-group">
                                      <label for="sekolah_induk"
                                        >Sekolah Induk
                                      </label>
                                      <input
                                        type="text"
                                        name="sekolah_induk"
                                        id="sekolah_induk"
                                        class="form-control form-control-sm"
                                        required
                                      />
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="modal-footer justify-content-start mx-5"
                                >
                                  <button
                                    class="btn btn-sm btn-success"
                                    name="simpan"
                                    type="submit"
                                  >
                                    <i class="bi bi-check-circle-fill"></i>
                                    Simpan
                                  </button>
                                  <button
                                    type="button"
                                    class="btn btn-danger btn-sm"
                                    data-bs-dismiss="modal"
                                  >
                                    Batal
                                  </button>
                                </div>
                              </form>
                              <!-- akhir form tambah data pegawai -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--akhir  modal tambah data -->
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
