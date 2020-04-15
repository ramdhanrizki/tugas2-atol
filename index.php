<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 2 - Perhitungan Harga Kos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form .checkbox {
            font-weight: 400;
        }
        /* .form .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        } */
        .form .form-control:focus {
            z-index: 2;
        }
        .form input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>
<body>
    <form class="form" method="post" action="hitung.php">
      <h1 class="h3 mb-3 font-weight-normal">Perhitungan Harga Kos</h1>
      <div class="form-group">
        <label for="" class="text-left">Tipe Kamar</label>
        <select name="tipe" class="form-control">
            <option value="A">A [2 x 3 m]</option>
            <option value="B">B [3 x 3 m]</option>
            <option value="C">C [4 x 3 m]</option>
        </select>
      </div>

      <div class="form-group">
        <label for="">Air</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="air" id="air1" value="Air PDAM" checked>
            <label class="form-check-label" for="air1">
                Air PDAM
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="air" id="air2" value="Air Tanah">
            <label class="form-check-label" for="air2">
                Air Tanah
            </label>
        </div>
      </div>

      <div class="form-group">
        <label for="fasilitas">Fasilitas</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Telepon" id="fasilitas1" name="fasilitas[]">
            <label class="form-check-label" for="fasilitas1">
                Telepon
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Televisi" id="fasilitas2" name="fasilitas[]">
            <label class="form-check-label" for="fasilitas2">
                Televisi
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Komputer" id="fasilitas3" name="fasilitas[]">
            <label class="form-check-label" for="fasilitas3">
                Komputer
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="Rice Cooker" id="fasilitas4" name="fasilitas[]">
            <label class="form-check-label" for="fasilitas4">
                Rice Cooker
            </label>
        </div>
      </div>
      
      <button class="btn btn-lg btn-primary" type="submit">Hitung</button>
      <button class="btn btn-lg btn-danger" type="reset">Reset</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; Ramdhan Rizki - 10115246</p>
    </form>
</body>
</html>