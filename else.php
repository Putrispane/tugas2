<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        //contoh 1
        $nilai = 80;
        if($nilai >= 75) {
            echo " Anda Lulus <br> " ;
        }else{
            echo "Anda Tidak Lulus.<br> ";
        }
      
        // contoh 2
        $tinggi = 175;
        if($tinggi >= 170){
echo " Tinggi Anda Memenuhi <br>" ;
}else{
    echo "Tinggi Anda Tidak Memenuhi <br>. ";
}
        //contoh 3
        $berat = 65;
        if($berat >= 60){
            echo " Berat Anda Ideal <br>" ;
        }else{
            echo "Berat Anda Tidak Ideal <br> ";
        }
  
        //contoh 4
        $harga =25000;
        if($harga <= 20000){
            echo " Harga netral <br>" ;
        }else{
            echo "Harga Terlalu Mahal <br> ";
        }
  
        //contoh 5
        $umur =18;
        if($umur >= 17){
            echo"dapat memiliki ktp <br>" ;
        }else{
            echo "Belum Dapat Memiliki ktp ";
        }
        ?>
  
</body>
</html>