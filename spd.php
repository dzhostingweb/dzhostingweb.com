<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

<!-- Section: Design Block -->
<section class="text-center">

    <!-- Background image -->
    <div class="p-5 bg-image" style="
          background-image: url('./assets/img/bg-masthead.jpg');
          height: 300px;
          "></div>
    <!-- Background image -->

    <div class="card mx-5 mx-md-5 shadow-5-strong" style="
          margin-top: -180px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">

      <div class="card-body py-5 px-md-5">
        <div class="row d-flex justify-content-center">
        <h2 class="fw-bold mb-5">SURAT PENGIRIMAN DOKUMEN</h2>
          <div class="col-lg-6">
            <form action="#" method="post" style="margin-top: 20px;">
            <div style="border: 1px solid black;">
              <h2 class="fw-bold mb-5">Surat Pertama</h2>
        

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Nama Yth</label>
                  <input type="text" name="nama-yth" id="form3Example3" class="form-control" />
                </div>
    
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Tempat</label>
                  <input type="text" name="tempat" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">No Surat</label>
                  <input type="text" name="no-surat" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Uraian</label>
                  <input type="text" name="uraian" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Jumlah Amplop</label>
                  <input type="text" name="jumlah-amplop" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Entry</label>
                  <input type="text" name="nama-pengirim" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Tanggal</label>
                  <input id="form3Example3" name="tanggal" class="form-control" type="date"/>
                </div>
              </div>

              <div style="border: 1px solid black; margin-top: 30px;">
                <h2 class="fw-bold mb-5">Surat Kedua</h2>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Nama Yth</label>
                  <input type="text" name="nama-yth-1" id="form3Example3" class="form-control" />
                </div>
    
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Tempat</label>
                  <input type="text" name="tempat-1" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">No Surat</label>
                  <input type="text" name="no-surat-1" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Uraian</label>
                  <input type="text" name="uraian-1" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Jumlah Amplop</label>
                  <input type="text" name="jumlah-amplop-1" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Entry</label>
                  <input type="text" name="nama-pengirim-1" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Tanggal</label>
                  <input id="form3Example3" name="tanggal-1" class="form-control" type="date"/>
                </div>
              </div>
                <div style="margin-top: 20px;">
                <button type="submit" name="buat" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary btn-block mb-4">
                  Buat Surat
                </button>

                <button type="submit" name="kembali" class="btn btn-danger btn-block mb-4">
                  Kembali
                </button>
                </div>
              </form>
          </div>
        </div>

        <?php
            include 'vendor/autoload.php';

            if (isset($_POST['kembali'])) {
              echo "<script>location = 'index.php';</script>";
            }

            if (isset($_POST['buat'])) {
                $template = new \PhpOffice\PhpWord\TemplateProcessor("default.docx");
                
                $template->setValue('{name}', $_POST['nama-yth']);
                $template->setValue('{no_surat}', $_POST['no-surat']);
                $template->setValue('{nomer}', $_POST['no-surat']);
                $template->setValue('{jumlah_amplop}', $_POST['jumlah-amplop']);
                $template->setValue('{nama}', $_POST['nama-pengirim']);
                $template->setValue('{tanggal}', $_POST['tanggal']);
                $template->setValue('{tempat_surat}', $_POST['tempat']);
                $template->setValue('{uraian}', $_POST['uraian']);
        
                $template->setValue('{name_1}', $_POST['nama-yth-1']);
                $template->setValue('{no_surat_1}', $_POST['no-surat-1']);
                $template->setValue('{nomer_1}', $_POST['no-surat-1']);
                $template->setValue('{jumlah_amplop_1}', $_POST['jumlah-amplop-1']);
                $template->setValue('{nama_1}', $_POST['nama-pengirim-1']);
                $template->setValue('{tanggal_1}', $_POST['tanggal-1']);
                $template->setValue('{tempat_surat_1}', $_POST['tempat-1']);
                $template->setValue('{uraian_1}', $_POST['uraian-1']);
                $template->saveAs('result.docx');
                echo "<script>location = 'spd-download.php';</script>";
            }
        ?>

      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>