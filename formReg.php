<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .title{
        display: flex;
        font-size: 50px;
        font-weight: 600;
        align-items: center;
        justify-content: center;
        margin-bottom: 80px;
    }
    .form-group{
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
    }
    .form-group > label{
        padding-left: 220px;
    }
</style>
<body>
<form class="form-horizontal" action="p_formReg.php" method="POST">
<fieldset>

<!-- Form Name -->
<legend class="title">Form Registrasi</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="textinput" name="nama" type="text" placeholder="Masukkan Nama" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Umur</label>  
  <div class="col-md-4">
  <input id="textinput" name="umur" type="text" placeholder="Masukkan Umur" class="form-control input-md">
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Gender</label>
  <div class="col-md-4"> 
  <?php
    $gender = [
        1 => " Laki-Laki ", " Perempuan "
    ];
  ?>
  <?php
    foreach($gender as $key => $val){
        echo '<input type="radio" name="gender" value="'.$val.'">'.$val.'</input>';
    }
  ?>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Pendidikan</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
    <?php
    $pendidikan = [
        "--- Riwayat Pendidikan ---" => "-",
        "SD" => "SD",
        "SMP" => "SMP",
        "SMA" => "SMA",
        "DI" => "DI",
        "DII" => "DII",
        "DIII" => "DIII",
        "S1" => "S1",
        "S2" => "S2",
        "S3" => "S3"
    ];
    ?>
    <?php
            foreach($pendidikan as $key => $val){
                echo '<option value="'.$val.'">'.$key.'</option>';
            }
        ?>
    </select>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Hobi</label>
  <div class="col-md-4">
  <div class="checkbox">
  <?php
    $hobbies = [
        " Membaca Buku ", " Travelling ", " Olahraga ", " Nonton ", " Hiking ", " Mancing "
    ];
  ?>
  <?php
        foreach($hobbies as $key => $val){
            echo '<input type="checkbox" name="hobi[]" value="'.$val.'"/>'.$val.'<br/>';
        }
  ?>
	</div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Daftar</button>
  </div>
</div>

</fieldset>
</form>
</body>
</html>