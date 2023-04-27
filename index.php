<?php
  include "db.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SMART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
  </head>

<body>

  <nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
    <a class="navbar-brand" href="index.php">Penentuan Penerima Bantuan PKH</a>
    <ul class="nav nav-pills">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Page</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#spk">SPK</a></li>
          <li><a class="dropdown-item" href="#smart">SMART</a></li>
          <li><a class="dropdown-item" href="#lb">Latar Belakang</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#data">Data</a></li>
          <li><a class="dropdown-item" href="#kriteria">Kriteria</a></li>
          <li><a class="dropdown-item" href="#normalisai">Normalisasi</a></li>
          <li><a class="dropdown-item" href="#utility">Utility</a></li>
          <li><a class="dropdown-item" href="#hasil">Hasil</a></li>
          <li><a class="dropdown-item" href="#ranking">Ranking</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  
  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
    <h4 id="spk">SPK</h4>
    <p>
      Sistem Pendukung Keputusan (SPK) adalah sebuah sistem komputer yang dirancang untuk membantu pengambilan keputusan dalam suatu organisasi atau perusahaan. SPK digunakan untuk mengumpulkan dan menganalisis data, serta menyajikan informasi yang relevan bagi pengambil keputusan agar dapat membuat keputusan yang lebih baik dan lebih akurat.
      <br>
      SPK dapat membantu mengatasi masalah pengambilan keputusan yang kompleks dengan memberikan rekomendasi berdasarkan informasi yang telah dikumpulkan dan dianalisis. Metode analisis yang digunakan oleh SPK dapat berupa analisis statistik, analisis data mining, atau analisis optimasi.
      <br>
      Contoh penggunaan SPK di berbagai bidang termasuk pengambilan keputusan investasi, pemilihan karyawan, penjadwalan produksi, penentuan harga, dan sebagainya. SPK dapat digunakan di berbagai jenis organisasi atau perusahaan, seperti perusahaan manufaktur, perbankan, kesehatan, dan lain sebagainya.
    </p>
    <h4 id="smart">SMART</h4>
    <p>
      Metode SMART dalam Sistem Pendukung Keputusan (SPK) merupakan singkatan dari Simple Multi-Attribute Rating Technique. Metode ini digunakan untuk membantu pengambilan keputusan dengan mengambil beberapa alternatif dan kriteria yang diinginkan. Metode ini berguna untuk mempermudah proses pengambilan keputusan dengan menggunakan prinsip pengukuran kinerja.
      <br>
      Berikut adalah langkah-langkah dalam menerapkan metode SMART:
      <br>
      1. Identifikasi alternatif: Tentukan alternatif yang akan dibandingkan, misalnya dalam memilih produk atau dalam mengambil keputusan untuk investasi.
      <br>
      2. Tentukan kriteria: Identifikasi kriteria yang akan digunakan untuk mengevaluasi setiap alternatif, misalnya kualitas produk, harga, dan layanan pelanggan.
      <br>
      3. Berikan bobot: Berikan bobot pada setiap kriteria, misalnya kualitas produk memiliki bobot 40%, harga 30%, dan layanan pelanggan 30%.
      <br>
      4. Nilai setiap alternatif: Nilai setiap alternatif terhadap setiap kriteria berdasarkan skala yang telah ditentukan.
      <br>
      5. Hitung total nilai: Hitung total nilai setiap alternatif dengan mengalikan nilai pada setiap kriteria dengan bobot kriteria yang bersangkutan, kemudian menjumlahkannya.
      <br>
      6. Pilih alternatif terbaik: Pilih alternatif yang memiliki nilai total tertinggi sebagai alternatif terbaik.
    </p>
    <h4 id="lb">Latar Belakang</h4>
    <p>
      Kemiskinan merupakan salah satu persoalan utama yang masih banyak ditemui di lingkungan
      masyarakat. Tingkat kemiskinan di indonesia dibedakan berdasarkan desil. Desil 1 sampai desil
      4 tergolong masyarakat dengan tingkat kesejahteraan miskin dan sangat miskin. Salah satu
      upaya pemerintah dalam rangka penurunan angka kemiskinan adalah Program Keluarga
      Harapan (PKH). Program Keluarga Harapan (PKH) merupakan salah satu program
      percepatan penanggulangan kemiskinan dan pengembangan sistem jaminan sosial melalui
      pemberian bantuan tunai bersyarat kepada Rumah Tangga Sangat Miskin (RTSM). Dengan
      banyaknya data yang diolah di indonesia, maka diperlukan sebuah sistem pendukung keputusan
      untuk memudahkan pembuat keputusan menentukan calon penerima bantuan PKH. Pada
      penelitian ini, metode yang digunakan adalah Simple Multi Attribute Rating Technique
      (SMART) yaitu metode pengambilan keputusan multi kriteria yang dikembangkan oleh Edward
      pada tahun 1977. Penelitian ini dilakukan untuk mencari nilai terbaik dari setiap peserta,
      kemudian dilakukan proses pengurutan peserta yang akan menentukan nilai tertinggi, yaitu
      masyarakat yang berhak mendapat bantuan Program Keluarga Harapan (PKH). Aplikasi pada
      penelitian ini dibuat berbasis web.
    </p>
    <h4 id="data">Data</h4>
    <div class="card">
      <div class="card-body table-responsive">
        <h5 class="card-title">Tabel Data</h5>
        <table class="table table-secondary table-info table-bordered table-striped table-hover text-center">
          <tr class="table-secondary">
            <th class="table-secondary" colspan="2">Alternatif</th>
            <th class="table-secondary" colspan="6">Kriteria</th>
          </tr>
          <tr class="table-secondary">
            <th class="table-secondary">Kode</th>
            <th class="table-secondary">Nama Alternatif</th>
            <th class="table-secondary">K1</th>
            <th class="table-secondary">K2</th>
            <th class="table-secondary">K3</th>
            <th class="table-secondary">K4</th>
            <th class="table-secondary">K5</th>
            <th class="table-secondary">Setting</th>
          </tr>

          <?php
            $show = mysqli_query($connected,"SELECT * FROM alternatif");
            while($data = mysqli_fetch_array($show)):
          ?>

            <tr>
              <td class="table-secondary"><?= $data['id'] ?></td>
              <td class="table-secondary"><?= $data['nama'] ?></td>
              <td class="table-secondary"><?= $data['kriteria1'] ?></td>
              <td class="table-secondary"><?= $data['kriteria2'] ?></td>
              <td class="table-secondary"><?= $data['kriteria3'] ?></td>
              <td class="table-secondary"><?= $data['kriteria4'] ?></td>
              <td class="table-secondary"><?= $data['kriteria5'] ?></td>
              <td class="table-secondary">
                <a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#changeData<?= $data['id'] ?>">
                  <i class="bi bi-gear-fill"></i>
                </a>
                <a href="#" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#deleteData<?= $data['id'] ?>">
                  <i class="bi bi-trash-fill"></i>
                </a>
              </td>
            </tr>

             <!-- Modal -->
             <div class="modal fade" id="changeData<?= $data['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Alternatif</h1>
                                    </div>

                                    <form method="POST" action="db.php">
                                    <input type="hidden" class="form-control" name="id" value="<?= $data['id'] ?>" readonly>
                                        <div class="modal-body">
                                        
                                            <div class="mb-3">
                                                <label class="form-label">Nama Alternatif</label>
                                                <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria1</label>
                                                <input type="number" class="form-control" name="kriteria1" value="<?= $data['kriteria1'] ?>" step="0.01" min=0 max=100>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria2</label>
                                                <input type="number" class="form-control" name="kriteria2" value="<?= $data['kriteria2'] ?>" step="0.01" min=0 max=100>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria3</label>
                                                <input type="number" class="form-control" name="kriteria3" value="<?= $data['kriteria3'] ?>" step="0.01" min=0 max=100>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria4</label>
                                                <input type="number" class="form-control" name="kriteria4" value="<?= $data['kriteria4'] ?>" step="0.01" min=0 max=100>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria5</label>
                                                <input type="number" class="form-control" name="kriteria5" value="<?= $data['kriteria5'] ?>" step="0.01" min=0 max=100>
                                            </div>
                    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                                            <button type="submit" class="btn btn-success" name="bChange"><i class="bi bi-check-lg"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="deleteData<?= $data['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-dark text-white">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Data Alternatif</h1>
                                    </div>

                                    <form method="POST" action="db.php">
                                    <input type="hidden" class="form-control" name="id" value="<?= $data['id'] ?>" readonly>
                                        <div class="modal-body">
                                        
                                            <h4 class="text-center">
                                                Apakah anda yakin ingin menghapus data <span class="text-danger"><?= $data['nama']  ?></span> ?
                                            </h4>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                                            <button type="submit" class="btn btn-success" name="bDelete"><i class="bi bi-check-lg"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

          <?php endwhile; ?>
        </table>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addData">
                    Tambah Alternatif
                </button>

                <!-- Modal -->
                <div class="modal fade" id="addData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Data Alternatif Baru</h1>
                            </div>

                            <form method="POST" action="db.php">
                                <div class="modal-body">
                                
                                    <div class="mb-3">
                                      <label class="form-label">ID</label>
                                      <input type="number" class="form-control" name="id">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama Alternatif</label>
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                    <div class="mb-3">
                                                <label class="form-label">Kriteria1</label>
                                                <input type="number" class="form-control" name="kriteria1" step="0.01" min=0 max=100>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria2</label>
                                                <input type="number" class="form-control" name="kriteria2" step="0.01" min=0 max=100>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria3</label>
                                                <input type="number" class="form-control" name="kriteria3" step="0.01" min=0 max=100>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria4</label>
                                                <input type="number" class="form-control" name="kriteria4" step="0.01" min=0 max=100>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria5</label>
                                                <input type="number" class="form-control" name="kriteria5" step="0.01" min=0 max=100>
                                            </div>
            
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                                    <button type="submit" class="btn btn-success" name="bAdd"><i class="bi bi-check-lg"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <p>
          Keterangan :
          <br>
          K1 : Pendapatan
          <br>
          K2 : Kondisi kesehatan
          <br>
          K3 : Usia
          <br>
          K4 : Status pekerjaan
          <br>
          K5 : Lokasi geografis
        </p>
      </div>
    </div>
    <h4 id="kriteria">Kriteria</h4>
    <div class="card">
      <div class="card-body table-responsive">
        <h5 class="card-title">Tabel Kriteria</h5>
        <table class="table table-secondary table-info table-bordered table-striped table-hover text-center">
          <tr class="table-secondary">
            <th class="table-secondary" colspan="7">Bobot Kriteria</th>
          </tr>
          <tr class="table-secondary">
            <th class="table-secondary">Kode</th>
            <th class="table-secondary">K1</th>
            <th class="table-secondary">K2</th>
            <th class="table-secondary">K3</th>
            <th class="table-secondary">K4</th>
            <th class="table-secondary">K5</th>
            <th class="table-secondary">Setting</th>
          </tr>

          <?php
            $show = mysqli_query($connected,"SELECT * FROM kriteria");
            while($data = mysqli_fetch_array($show)):
          ?>

            <tr>
              <td class="table-secondary"><?= $data['id'] ?></td>
              <td class="table-secondary"><?= $data['kriteria1'] ?></td>
              <td class="table-secondary"><?= $data['kriteria2'] ?></td>
              <td class="table-secondary"><?= $data['kriteria3'] ?></td>
              <td class="table-secondary"><?= $data['kriteria4'] ?></td>
              <td class="table-secondary"><?= $data['kriteria5'] ?></td>
              <td class="table-secondary">
                <a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#changeDatalagi<?= $data['id'] ?>">
                  <i class="bi bi-gear-fill"></i>
                </a>
              </td>
            </tr>

             <!-- Modal -->
             <div class="modal fade" id="changeDatalagi<?= $data['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-light">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Data Kriteria</h1>
                                    </div>

                                    <form method="POST" action="db.php">
                                    <input type="hidden" class="form-control" name="id" value="<?= $data['id'] ?>" readonly>
                                        <div class="modal-body">
                                        
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria1</label>
                                                <input type="number" class="form-control" name="kriteria1" value="<?= $data['kriteria1'] ?>" step="0.01" min=0 max=100>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria2</label>
                                                <input type="number" class="form-control" name="kriteria2" value="<?= $data['kriteria2'] ?>" step="0.01" min=0 max=100>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria3</label>
                                                <input type="number" class="form-control" name="kriteria3" value="<?= $data['kriteria3'] ?>" step="0.01" min=0 max=100>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria4</label>
                                                <input type="number" class="form-control" name="kriteria4" value="<?= $data['kriteria4'] ?>" step="0.01" min=0 max=100>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Kriteria5</label>
                                                <input type="number" class="form-control" name="kriteria5" value="<?= $data['kriteria5'] ?>" step="0.01" min=0 max=100>
                                            </div>
                    
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
                                            <button type="submit" class="btn btn-success" name="bChangelagi"><i class="bi bi-check-lg"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
        </table>
        <p>
          Keterangan :
          <br>
          K1 : Pendapatan
          <br>
          K2 : Kondisi kesehatan
          <br>
          K3 : Usia
          <br>
          K4 : Status pekerjaan
          <br>
          K5 : Lokasi geografis
        </p>
      </div>
    </div>
    <h4 id="normalisasi">Normalisasi</h4>
    <div class="card">
      <div class="card-body table-responsive">
        <h5 class="card-title">Tabel Normalisasi</h5>
        <table class="table table-secondary table-info table-bordered table-striped table-hover text-center">
          <tr class="table-secondary">
            <th class="table-secondary" colspan="6">Normalisasi Kriteria</th>
          </tr>
          <tr class="table-secondary">
            <th class="table-secondary">Kode</th>
            <th class="table-secondary">K1</th>
            <th class="table-secondary">K2</th>
            <th class="table-secondary">K3</th>
            <th class="table-secondary">K4</th>
            <th class="table-secondary">K5</th>
          </tr>

          <?php
            $show = mysqli_query($connected,"SELECT id,
            FORMAT(kriteria1 / (kriteria1 + kriteria2 + kriteria3 + kriteria4 + kriteria5),3) as kriteria11,
            FORMAT(kriteria2 / (kriteria1 + kriteria2 + kriteria3 + kriteria4 + kriteria5),3) as kriteria22,
            FORMAT(kriteria3 / (kriteria1 + kriteria2 + kriteria3 + kriteria4 + kriteria5),3) as kriteria33,
            FORMAT(kriteria4 / (kriteria1 + kriteria2 + kriteria3 + kriteria4 + kriteria5),3) as kriteria44,
            FORMAT(kriteria5 / (kriteria1 + kriteria2 + kriteria3 + kriteria4 + kriteria5),3) as kriteria55 
            FROM kriteria");
            while($data = mysqli_fetch_array($show)):
          ?>

            <tr>
              <td class="table-secondary"><?= $data['id'] ?></td>
              <td class="table-secondary"><?= $data['kriteria11'] ?></td>
              <td class="table-secondary"><?= $data['kriteria22'] ?></td>
              <td class="table-secondary"><?= $data['kriteria33'] ?></td>
              <td class="table-secondary"><?= $data['kriteria44'] ?></td>
              <td class="table-secondary"><?= $data['kriteria55'] ?></td>
            </tr>
          <?php endwhile; ?>
        </table>
        <p>
          Keterangan :
          <br>
          K1 : Pendapatan
          <br>
          K2 : Kondisi kesehatan
          <br>
          K3 : Usia
          <br>
          K4 : Status pekerjaan
          <br>
          K5 : Lokasi geografis
        </p>
      </div>
    </div>
    <h4 id="utility">Utility</h4>
    <div class="card">
      <div class="card-body table-responsive">
        <h5 class="card-title">Tabel Utility</h5>
        <table class="table table-secondary table-info table-bordered table-striped table-hover text-center">
          <tr class="table-secondary">
            <th class="table-secondary" colspan="2">Alternatif</th>
            <th class="table-secondary" colspan="5">Kriteria</th>
          </tr>
          <tr class="table-secondary">
            <th class="table-secondary">Kode</th>
            <th class="table-secondary">Nama Alternatif</th>
            <th class="table-secondary">K1</th>
            <th class="table-secondary">K2</th>
            <th class="table-secondary">K3</th>
            <th class="table-secondary">K4</th>
            <th class="table-secondary">K5</th>
          </tr>
          <?php
            $show = mysqli_query($connected,"SELECT id,nama,
            FORMAT((kriteria1 - 60) / (80 - 60),3) as u1,
            FORMAT((kriteria2 - 63) / (90 - 63),3) as u2,
            FORMAT((kriteria3 - 65) / (85 - 65),3) as u3,
            FORMAT((kriteria4 - 76) / (90 - 76),3) as u4,
            FORMAT((kriteria5 - 68) / (87 - 68),3) as u5 
            FROM alternatif");
            while($data = mysqli_fetch_array($show)):
          ?>

            <tr>
              <td class="table-secondary"><?= $data['id'] ?></td>
              <td class="table-secondary"><?= $data['nama'] ?></td>
              <td class="table-secondary"><?= $data['u1'] ?></td>
              <td class="table-secondary"><?= $data['u2'] ?></td>
              <td class="table-secondary"><?= $data['u3'] ?></td>
              <td class="table-secondary"><?= $data['u4'] ?></td>
              <td class="table-secondary"><?= $data['u5'] ?></td>
            </tr>
          <?php endwhile; ?>
        </table>
        <p>
          Keterangan :
          <br>
          K1 : Pendapatan
          <br>
          K2 : Kondisi kesehatan
          <br>
          K3 : Usia
          <br>
          K4 : Status pekerjaan
          <br>
          K5 : Lokasi geografis
        </p>
      </div>
    </div>
    <h4 id="hasil">Hasil</h4>
    <div class="card">
      <div class="card-body table-responsive">
        <h5 class="card-title">Tabel Hasil</h5>
        <table class="table table-secondary table-info table-bordered table-striped table-hover text-center">
          <tr class="table-secondary">
            <th class="table-secondary" colspan="2">Alternatif</th>
            <th class="table-secondary" colspan="5">Kriteria</th>
            <th class="table-secondary">Total</th>
          </tr>
          <tr class="table-secondary">
            <th class="table-secondary">Kode</th>
            <th class="table-secondary">Nama Alternatif</th>
            <th class="table-secondary">K1</th>
            <th class="table-secondary">K2</th>
            <th class="table-secondary">K3</th>
            <th class="table-secondary">K4</th>
            <th class="table-secondary">K5</th>
            <th class="table-secondary">Hasil</th>
          </tr>

          <?php
            $show = mysqli_query($connected,"SELECT alternatif.id,alternatif.nama,
            FORMAT((alternatif.kriteria1 - 60) / (80 - 60),3) as u1,
            FORMAT((alternatif.kriteria2 - 63) / (90 - 63),3) as u2,
            FORMAT((alternatif.kriteria3 - 65) / (85 - 65),3) as u3,
            FORMAT((alternatif.kriteria4 - 76) / (90 - 76),3) as u4,
            FORMAT((alternatif.kriteria5 - 68) / (87 - 68),3) as u5,
            FORMAT(
              (alternatif.kriteria1 - 60) / (80 - 60) * (kriteria.kriteria1 / (kriteria.kriteria1 + kriteria.kriteria2 + kriteria.kriteria3 + kriteria.kriteria4 + kriteria.kriteria5)) +
              (alternatif.kriteria2 - 63) / (90 - 63) * (kriteria.kriteria2 / (kriteria.kriteria1 + kriteria.kriteria2 + kriteria.kriteria3 + kriteria.kriteria4 + kriteria.kriteria5)) +
              (alternatif.kriteria3 - 65) / (85 - 65) * (kriteria.kriteria3 / (kriteria.kriteria1 + kriteria.kriteria2 + kriteria.kriteria3 + kriteria.kriteria4 + kriteria.kriteria5)) +
              (alternatif.kriteria4 - 76) / (90 - 76) * (kriteria.kriteria4 / (kriteria.kriteria1 + kriteria.kriteria2 + kriteria.kriteria3 + kriteria.kriteria4 + kriteria.kriteria5)) +
              (alternatif.kriteria5 - 68) / (87 - 68) * (kriteria.kriteria5 / (kriteria.kriteria1 + kriteria.kriteria2 + kriteria.kriteria3 + kriteria.kriteria4 + kriteria.kriteria5))
              ,3) as total
            FROM alternatif INNER JOIN kriteria");
            while($data = mysqli_fetch_array($show)):
          ?>

            <tr>
              <td class="table-secondary"><?= $data['id'] ?></td>
              <td class="table-secondary"><?= $data['nama'] ?></td>
              <td class="table-secondary"><?= $data['u1'] ?></td>
              <td class="table-secondary"><?= $data['u2'] ?></td>
              <td class="table-secondary"><?= $data['u3'] ?></td>
              <td class="table-secondary"><?= $data['u4'] ?></td>
              <td class="table-secondary"><?= $data['u5'] ?></td>
              <td class="table-secondary"><?= $data['total'] ?></td>
            </tr>
          <?php endwhile; ?>
        </table>
        <p>
          Keterangan :
          <br>
          K1 : Pendapatan
          <br>
          K2 : Kondisi kesehatan
          <br>
          K3 : Usia
          <br>
          K4 : Status pekerjaan
          <br>
          K5 : Lokasi geografis
        </p>
      </div>
    </div>
    <h4 id="ranking">Ranking</h4>
    <div class="card">
      <div class="card-body table-responsive">
        <h5 class="card-title">Tabel Ranking</h5>
        <table class="table table-secondary table-bordered table-striped table-hover text-center">
          <tr>
            <th rowspan="2">No.</th>
            <th colspan="2">Alternatif</th>
            <th colspan="5">Kriteria</th>
            <th>Total</th>
          </tr>
          <tr>
            <th>Kode</th>
            <th>Nama Alternatif</th>
            <th>K1</th>
            <th>K2</th>
            <th>K3</th>
            <th>K4</th>
            <th>K5</th>
            <th>Total</th>
          </tr>

          <?php
          $no = 1;
            $show = mysqli_query($connected,"SELECT alternatif.id,alternatif.nama,
            FORMAT((alternatif.kriteria1 - 60) / (80 - 60),3) as u1,
            FORMAT((alternatif.kriteria2 - 63) / (90 - 63),3) as u2,
            FORMAT((alternatif.kriteria3 - 65) / (85 - 65),3) as u3,
            FORMAT((alternatif.kriteria4 - 76) / (90 - 76),3) as u4,
            FORMAT((alternatif.kriteria5 - 68) / (87 - 68),3) as u5,
            FORMAT(
              (alternatif.kriteria1 - 60) / (80 - 60) * (kriteria.kriteria1 / (kriteria.kriteria1 + kriteria.kriteria2 + kriteria.kriteria3 + kriteria.kriteria4 + kriteria.kriteria5)) +
              (alternatif.kriteria2 - 63) / (90 - 63) * (kriteria.kriteria2 / (kriteria.kriteria1 + kriteria.kriteria2 + kriteria.kriteria3 + kriteria.kriteria4 + kriteria.kriteria5)) +
              (alternatif.kriteria3 - 65) / (85 - 65) * (kriteria.kriteria3 / (kriteria.kriteria1 + kriteria.kriteria2 + kriteria.kriteria3 + kriteria.kriteria4 + kriteria.kriteria5)) +
              (alternatif.kriteria4 - 76) / (90 - 76) * (kriteria.kriteria4 / (kriteria.kriteria1 + kriteria.kriteria2 + kriteria.kriteria3 + kriteria.kriteria4 + kriteria.kriteria5)) +
              (alternatif.kriteria5 - 68) / (87 - 68) * (kriteria.kriteria5 / (kriteria.kriteria1 + kriteria.kriteria2 + kriteria.kriteria3 + kriteria.kriteria4 + kriteria.kriteria5))
              ,3) as total
            FROM alternatif INNER JOIN kriteria ORDER BY total DESC");
            while($data = mysqli_fetch_array($show)):
          ?>

            <tr>
              <td class="table-secondary"><?= $no++ ?></td>
              <td class="table-secondary"><?= $data['id'] ?></td>
              <td class="table-secondary"><?= $data['nama'] ?></td>
              <td class="table-secondary"><?= $data['u1'] ?></td>
              <td class="table-secondary"><?= $data['u2'] ?></td>
              <td class="table-secondary"><?= $data['u3'] ?></td>
              <td class="table-secondary"><?= $data['u4'] ?></td>
              <td class="table-secondary"><?= $data['u5'] ?></td>
              <td class="table-secondary"><?= $data['total'] ?></td>
            </tr>
          <?php endwhile; ?>
        </table>

        <table class="table table-secondary">
            <tr>
              <th colspan="2">Keterangan</th>
            </tr>
            <tr>
              <td>K1 : Pendapatan</td>
              <td>Total < 0,5 = Tidak Lulus</td>
            </tr>
            <tr>
              <td>K2 : Kondisi kesehatan</td>
              <td>Total >= 0,5 = Lulus</td>
            </tr>
            <tr>
              <td>K3 : Usia</td>
              <td></td>
            </tr>
            <tr>
              <td>K4 : Status pekerjaan</td>
              <td></td>
            </tr>
            <tr>
              <td>K5 : Lokasi geografis</td>
              <td></td>
            </tr>
        </table>
        <!-- <p>
          Keterangan :
          <br>
          K1 : Pendapatan
          <br>
          K2 : Kondisi kesehatan
          <br>
          K3 : Usia
          <br>
          K4 : Status pekerjaan
          <br>
          K5 : Lokasi geografis
        </p> -->
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>