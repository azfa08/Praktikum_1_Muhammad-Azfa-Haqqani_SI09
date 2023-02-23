<?php


    $ms1 = ['id'=> 1 , 'nim'=> 1 , 'uts'=>90 , 'uas'=>80 , 'tugas'=>90 , 'nilai akhir'=>80];
    $ms2 = ['id'=> 2 , 'nim'=> 2 , 'uts'=>90 , 'uas'=>100 , 'tugas'=>80 , 'nilai akhir'=>90];
    $ms3 = ['id'=> 3 , 'nim'=> 3 , 'uts'=>90 , 'uas'=>80 , 'tugas'=>80 , 'nilai akhir'=>100];
    $ms4 = ['id'=> 4 , 'nim'=> 4 , 'uts'=>90 , 'uas'=>90 , 'tugas'=>90 , 'nilai akhir'=>80];
    $ms5 = ['id'=> 5 , 'nim'=> 5 , 'uts'=>90 , 'uas'=>100 , 'tugas'=>90 , 'nilai akhir'=>80];
    $ms6 = ['id'=> 6 , 'nim'=> 6 , 'uts'=>90 , 'uas'=>80 , 'tugas'=>100 , 'nilai akhir'=>100];

    $ar_nilai = [$ms1, $ms2, $ms2, $ms4, $ms5, $ms6,] 


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Data Nilai Mahasiswa</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Tugas</th>
      <th scope="col">Nilai Akhir</th>
    </tr>
  </thead>

  <tbody>
    
    <?php

        $nomor = 1;    
        foreach($ar_nilai as $ms) {
            
            $nilai_akhir = ($ms ['uts'] + $ms ['uas'] + $ms ['tugas']) / 3 ;
            

    ?>
    
            <tr>
                <td> <?= $nomor        ?> </td>
                <td> <?= $ms['nim']    ?> </td>
                <td> <?= $ms['uts']    ?> </td>
                <td> <?= $ms['uas']    ?> </td>
                <td> <?= $ms['tugas']  ?> </td>
                <td> <?= number_format($nilai_akhir,2 ,',',',')?> </td>
            </tr>




    <?php
    $nomor++;
        }
    ?>






  </tbody>
</table>
















    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
