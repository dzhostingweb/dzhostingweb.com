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
          background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
          height: 300px;
          "></div>
    <!-- Background image -->
  
    <div class="card mx-5 mx-md-5 shadow-5-strong" style="
          margin-top: -180px;
          background: hsla(0, 0%, 100%, 0.8);
          backdrop-filter: blur(30px);
          ">

	<div class="alert alert-danger alert-dismissible fade" id="alert" role="alert">
  		<strong>Password Salah!</strong> Apakah kamu admin dari PT. Pipit?
  		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

	<div class="alert alert-danger alert-dismissible fade" id="alert" role="alert1">
  		<strong>Masukan Username/Password!</strong> Kamu harus memasukan username/Password
  		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>

      <div class="card-body py-5 px-md-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-6">
            <h2 class="fw-bold mb-5">PT. PIPIT MUTIARA INDAH</h2>
            <form action="#" method="POST">

              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Username</label>
                <input type="text" name="username" id="form3Example3" class="form-control" />
              </div>
  
              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Password</label>
                <input type="password" name="password" id="form3Example4" class="form-control" />
              </div>
  
              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" onclick="showPass()" type="checkbox" value="" id="form2Example33" />
                <label class="form-check-label" for="form2Example33">
                  Show Password
                </label>
              </div>
  
              <!-- Submit button -->
              <button type="submit" name="login" class="btn btn-primary btn-block mb-4">
                Login
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

<script>
	function showPass() {
		var x = document.getElementById("form3Example4");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>

<?php
	require 'koneksi.php';

	if (isset($_POST["login"])) {
		$user = $_POST['username'];
		$pass = $_POST['password'];
		
		$sql = "SELECT * FROM login WHERE username = '".$user."' AND password = '".$pass."'";
		$no = 0;

		if ($result = $koneksi -> query($sql)) {
			while ($row = $result -> fetch_row()) {
				$no++;
			}
		}
		
		if ($no >= 1) {
			echo "<script>location.href = 'index.php'</script>";
		} else {
			echo "<script>var element = document.getElementById('alert');
			element.classList.add('show');</script>";
		}
	}
?>