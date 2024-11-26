<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="uas.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>uas raka</title>
  </head>
  <body class=body> 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="company.jpg" alt="" height=50 class="rounded-circle"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pendataan">Pendataan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#penggajian">Penggajian</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>  
  <br>
    <div class="text-center">
        <img src="company.jpg" class="rounded-circle" alt="..." height="250">
    </div> <br>
    <h3 align=center class=text-white><b>Salary</h3>
    <h3 align=center class=text-white>of Teacher/Employee Serenity High School</b></h3>
    <br><br>

    <div class="container">
    <div class="card" style="width: 18rem;">
  <div class="card-header" id="pendataan">
    Data Penggajian
  </div>
</div>
        <form action="" method="post">
            <label for="no">No</label>
            <input type="number" name="no" id="" placeholder="no" required> <br>
            <label for="name">Name</label>
            <input type="text" name="name" id="" placeholder="name" required> <br>
            <label for="no">Unit of School</label>
            <select name="unit" id="" required>
                <option value="Elementary School">Elementary School</option>
                <option value="Junior High School">Junior High School</option>
                <option value="Senior High School">Senior High School</option>
                <option value="Vocational High School">Vocational High School</option>
            </select> <br>
            <label for="no">Salary Date</label>
            <input type="date" name="tanggal" id="" placeholder="tanggal" required> <br>
            <br>
            <div class="row" id="penggajian">
              <div class="col">
                <h2 align=center><b>Gaji</b></h2>
                <label for="jabatan">Jabatan</label>
                <select name="jabatan" id="" required>
                <option value="Headmaster">Headmaster</option>
                <option value="Wakasek">Wakasek</option>
                <option value="Guru">Guru</option>
                <option value="Karyawan">Karyawan</option>
            </select> <br>
            <label for="lama kerja">Length of Working</label>
            <input type="text" name="lamaKerja" id="" required placeholder="lama kerja"> <br>
            <label for="status">working status</label>
            <select name="status" id="" required>
                <option value="still">still</option>
                <option value="contract">contract</option>
            </select> <br>
              </div>
              <div class="col">
                <h2 align=center><b>Potongan</b></h2>
                <label for="bpjs">BPJS</label>
                <input type="number" name="bpjs" id="" required placeholder="bpjs"><br>
                <label for="pinjaman">pinjaman</label>
                <input type="number" name="pinjaman" id="" required placeholder="pinjaman"><br>
                <label for="cicilan">cicilan</label>
                <input type="number" name="cicilan" id="" required placeholder="cicilan"><br>
                <label for="tabungan">infaq</label>
                <input type="number" name="infaq" id="" required placeholder="tabungan"><br> <br>
              </div>
            </div>
            <input type="submit" value="Submit" name="submit" class="btn btn-success">
        </form> 
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body> <br> <br> <br> <br> 
</html>

<?php 

if (isset($_POST['submit'])) {
  $no = $_POST ['no'];
  $name = $_POST ['name'];
  $unit = $_POST ['unit'];
  $tanggal = $_POST ['tanggal'];
  $jabatan = $_POST ['jabatan'];
  $lamaKerja = $_POST ['lamaKerja'];
  $status = $_POST ['status'];
  $bpjs = $_POST ['bpjs'];
  $pinjaman = $_POST ['pinjaman'];
  $cicilan = $_POST ['cicilan'];
  $infaq = $_POST ['infaq'];

    //JABATAN
    if ($jabatan == "Headmaster") {
      $gaji = 10000000;
    } elseif ($jabatan == "Wakasek") {
      $gaji = 7000000;
    } elseif ($jabatan == "Guru") {
      $gaji = 5000000;
    } elseif ($jabatan == "Karyawan") {
      $gaji = 2500000;
    } else {
      $gaji = 0;
    }
    
    //STATUS
    if ($status == "still") {
      $bonus = 1000000;
    } else {
      $bonus = 0;
    }

    //MENGHITUNG GAJI BERSIH
    $gajiBersih = ($gaji + $bonus )-($bpjs + $pinjaman + $cicilan + $infaq);

  echo
  "<center>
  <table border=0>
  <tr>
      <th colspan=2>Muhamad Raka Ramdani</th>
  </tr>
  <tr>
      <td colspan=2><h2><b>Struk Gaji</b></h2></td>
  </tr>
  <tr>
      <td>No</td>
      <td>: $no <br></td> 
  </tr>
  <tr>
      <td>Nama</td>
      <td>: $name <br></td> 
  </tr>
  <tr>
      <td>Unit Sekolah</td>
      <td>: $unit <br></td> 
  </tr>
  <tr>
      <td>Tanggal Gajian</td>
      <td>: $tanggal <br></td> 
  </tr>
    <tr>
      <td>Jabatan</td>
      <td>: $jabatan <br></td> 
  </tr>
    <tr>
      <td>Gaji</td>
      <td>: $gaji <br></td> 
  </tr>
  <tr>
      <td>Lama Kerja</td>
      <td>: $lamaKerja <br></td> 
  </tr>
  <tr>
      <td>Status</td>
      <td>: $status <br></td> 
  </tr>
  <tr>
      <td>Bonus</td>
      <td>: $bonus <br></td> 
  </tr>
    <tr>
      <td>BPJS</td>
      <td>: $bpjs <br></td> 
  </tr>
  <tr>
      <td>Pinjaman</td>
      <td>: $pinjaman <br></td> 
  </tr>
  <tr>
      <td>Cicilan</td>
      <td>: $cicilan <br></td> 
  </tr>
  <tr>
      <td>Infaq</td>
      <td>: $infaq <br></td> 
  </tr>
  <tr>
      <td>Gaji Bersih</td>
      <td>: $gajiBersih <br></td> 
  </tr>";
}
?>