<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Perhitungan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }
    </style>
</head>
<?php 
    $tipe = $_POST['tipe'];
    $air = $_POST['air']; 
    $fas = @$_POST['fasilitas'];
    // echo var_dump($fas);
    $kamar = array(
        'A'=>[
            'luas'=>'2 x 3 m',
            'harga' =>200000
        ],
        'B'=>[
            'luas'=>'3 x 3 m',
            'harga' =>250000
        ],
        'C'=>[
            'luas'=>'4 x 3 m',
            'harga' =>300000
        ],
    );
    $fasilias = array(
        'Air PDAM' => 20000,
        'Air Tanah' => 15000,
        'Telepon' => 20000,
        'Televisi' => 30000,
        'Komputer' => 60000,
        'Rice Cooker' => 5000
    );
    $total = $kamar[$tipe]['harga'] + $fasilias[$air];
    function formatRupiah($jumlah)
    {
        return "Rp. ".number_format($jumlah, 0,',','.');
    }
?>
<body class="text-center">
    <h1 class="h3 mb-3 font-weight-normal">HASIL PERHITUNGAN</h1>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-4">
                <table class="table table-bordered">
                    <tr>
                        <th colspan="2" class="bg-success text-white">Kamar</th>
                    </tr>
                    <tr>
                        <td><?=$kamar[$tipe]['luas']?></td>
                        <td><?=formatRupiah($kamar[$tipe]['harga'])?></td>
                    </tr>

                    <tr>
                        <th colspan="2" class="bg-success text-white">Jenis Air</th>
                    </tr>
                    <tr>
                        <td><?=$air?></td>
                        <td><?=formatRupiah($fasilias[$air])?></td>
                    </tr>
                    <?php if($fas) {?>
                        <tr>
                            <th colspan="2" class="bg-success text-white">Fasilitas-Fasilitas</th>
                        </tr>
                        <?php foreach($fas as $item) {
                            $total +=$fasilias[$item]; ?>
                        <tr>
                            <td><?=$item?> </td>
                            <td><?=formatRupiah($fasilias[$item])?></td>
                        </tr>
                    <?php }}?>
                    

                    <tr>
                        <th class="bg-dark text-white">Total</th>
                        <th class="bg-dark text-white"><?=formatRupiah($total)?></th>
                    </tr>
                </table>
                </div>
        </div>
        <div class="row justify-content-md-center">
            <a href="index.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    
</body>
</html>