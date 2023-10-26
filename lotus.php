<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title>PT Pipit</title>
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
        <h2 class="fw-bold mb-5">SURAT HOTEL LOTUS</h2>
          <div class="col-lg-6">
            <form action="#" method="post" style="margin-top: 20px;">
            <div style="border: 1px solid black;">
              <h2 class="fw-bold mb-5">SURAT</h2>
        

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Nomor Surat</label>
                  <input type="text" name="nomor" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Nama</label>
                  <input type="text" name="nama" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Check in</label>
                  <input type="text" name="checkin" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Check out</label>
                  <input type="text" name="checkout" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Room Category</label>
                  <input type="text" name="kategori" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Entry</label>
                    <input type="text" name="hormatkami" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">KET</label>
                  <input type="text" name="ket" id="form3Example3" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label for="startDate">Tanggal</label>
                    <input id="startDate" name="tanggal" class="form-control" type="date"/>
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
                $template = new \PhpOffice\PhpWord\TemplateProcessor("default_lotus.docx");
                
                $template->setValue('no_surat', $_POST['nomor']);
                $template->setValue('name', $_POST['nama']);
                $template->setValue('check_in', $_POST['checkin']);
                $template->setValue('check_out', $_POST['checkout']);
                $template->setValue('room_category', $_POST['kategori']);
                $template->setValue('hormat_kami', $_POST['hormatkami']);
                $template->setValue('tanggal', $_POST['tanggal']);
                $template->setValue('ket', $_POST['ket']);
        
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