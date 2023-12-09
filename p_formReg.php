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
html,
body,
.intro {
  height: 100%;
}

.gradient-custom-2 {
  /* fallback for old browsers */
  background: #6a11cb;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to top, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to top, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}

thead th,
tbody th {
  color: #fff;
}

tbody td {
  font-weight: 500;
  color: rgba(255,255,255,.65);
}
</style>
<body>
<section class="intro">
  <div class="gradient-custom-2 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table table-dark table-bordered mb-0">
                <thead>
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Pendidikan</th>
                    <th scope="col">Hobi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                        <?php
                            $_nama = $_POST['nama'];

                            echo $_nama;
                        ?>
                    </td>
                    <td>
                        <?php
                            $_umur = $_POST['umur'];

                            echo $_umur." tahun";
                        ?>
                    </td>
                    <td>
                        <?php
                            $_gender = $_POST['gender'];

                            echo $_gender;
                        ?>
                    </td>
                    <td>
                        <?php
                            $pendidikan = $_POST['selectbasic'];

                            echo $pendidikan;
                        ?>
                    </td>
                    <td>
                        <?php 
                            $hobi = $_POST['hobi'];
                            if(!empty($hobi)){
                                // print_r($hobi);
                                foreach($hobi as $terserah){
                                echo $terserah." | ";
                                }
                            }
                        ?>
                    </td>
                  </tr>
                </tbody>
              </table>
              <br/><br/>
              <button><a href="formReg.php">Kembali</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>