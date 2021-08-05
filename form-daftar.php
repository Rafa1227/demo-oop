<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ford Registrasi Warga</title>
    <style>
        .container-fluid {
            background-color: whitesmoke;
            border: 3px solid black;
            height: 600px;
        }
        .center {
            margin: auto;
            width: 50%;
            padding: 10px;
            }
        h2 {
            text-align: center;
        }
    </style>
</head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
    <div class="container-fluid">
   
    <div class="row">
        <div class="col-md-8 center">
        <h2>Input Data</h2>
        <hr>
        <form action="index.php" method="post">
        <table class="table">
            <tr>
                <td>Nomor KTP</td>
                <td> <input class="form-group" type="text" name="no_ktp" id="no_ktp"></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td><input class="form-group" type="text" name="nama_lengkap" id="nama_lengkap"></td>
            </tr>
            <tr>
                <td>Alamat Lengkap</td>
                <td> <input class="form-group" type="text" name="alamat_lengkap" id="alamat_lengkap"></td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td><input class="form-group" type="text" name="no_hp" id="no_hp"></td>
            </tr>
            <tr>
                <td colspan="2"> <button class="btn btn-success" name="daftar" type="submit">Simpan </button></td>
                
            </tr>
        </table>
      
       
        </form>

        </div>
    </div>
    </div>
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>