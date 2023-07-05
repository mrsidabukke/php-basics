<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<body style="?sempak?">
    <p> halo semuanya</p>
    <a href="index2.php">website php ke 2</a><br>
    <a href="index.php2.php">website php ke 1</a><br>
    <?php
    // alex sandro dabukke
    
     echo "<h1 >belajar php</h1>";
     print"belajar php 2 <br>";
     // variabel pada php diawali dengan tanda $
     // variabel string diawali dengan tanda " " atau ' '
     $bahasa="wakanda";
     $kata="belajar";
     $s='sempak';
     $k='koyak';

     echo $s."".$k."<br>";

     echo"$bahasa <br>";
     echo"mari".$kata."<br>";

     // variabel angka tidak menggunakan tanda " untuk membuat float harus menggunakan titik

     //math method
     //round untuk membulatkan angka, rand(max, min) max min
     // echo "angka hari ini adalah" . min ($,$)

     $_1 = 1;
     $_2 = 2;
     $_3 = 0.3;
     $_4 = 0.234;

     echo $_1 + $_2;
     echo "<br>";
     echo $_3 * $_4;
     echo"<br>";
     echo max(10,4,5,6,4,3,5,53,7,467,857,85,3);
     echo "<br>";
     echo"angka hari ini adalah". rand(10000,1);
     echo"<br>";

     // string method
     // strlen for counting leeter
     // && str_word_count
     // str_replace (find , replace , string)
     // str_repeat (text, times); str_shuffle(text)
      $text1 = 'halo semuanya';
      $text2 = 'hai semuanya';

      echo strlen($text1);
      echo"<br>";
      echo str_word_count($text2);
      echo "<br>";
      echo str_replace("halo" , "sayang" , $text1);
      echo "<br>";
      echo str_repeat("menunggu", 4);
      echo "<br>";
      echo str_shuffle("berak");
      echo "<br>";
      echo str_repeat(str_replace("hai","sempak",$text2),9);
      echo "<br>";

      // array 
      $array1 = ['alex','sandro','dabukke','alex',];
      $array2 = array('angggi','christina','sitorus',);

      print_r($array2);
      echo "<br>";
      echo $array1 [2];
      echo "<br>";
      //metode array
      print_r(array_unique($array1));
      echo "<br>";
      print_r(array_reverse($array2));
      
      //shuffle($array1);untuk mengshuffle
      //print_r($array1);

      //echo count($array1); untuk menghitung isi variabel

      //sort($array1); untul menggurutkan array berdasarkan abjad dan nomor
      //print_r(array1);
      echo "<br>";

      //associative array (array dengan nama keynya sendiri)

      $biodata = array("nama"=>"ALEX",
                       "umur"=> 19,
                       "pekerjaan"=>"pengusaha",

        );

        $biodata2 = array("istri"=>"Anggi",
                       "usia"=> 19,
                       "profesi"=>"Dokter",

        );
        
        $biodata['nama']= " ALEX SANDRO DABUKKE";
        
        print_r($biodata);
        echo "<br>";
        echo "Nama anda adalah". $biodata['nama'];
        echo "<br>";

        // method associative array
        // array_keys(untuk menampilkan kata kuncinya), 
        //array_values(untuk menampilan nilai variabel),
        // array_merge(untuk menggabungkan array)

        print_r(array_merge($biodata, $biodata2) );
        echo "<br>";

        print_r(array_keys($biodata));
        echo "<br>";

        print_r(array_values($biodata2));
        echo "<br>";
        
        // multidimensi array

        $marray1 = array(
            array('alex', 26 , 'ganteng'),
            array('anggi', 26 , 'cantik'),
            array('ranella', 26 , 'manis')
            

        );

        $marray1  [0] [0] = 'alex sandro dabukke';

        print_r($marray1);
        echo "<br>";
        echo $marray1 [0] [0];
        echo "<br>";



        // perualangan 
        // for loop
        //  for(variabel awal); batas/syarat; perubahan (++,--)

        for($i=0; $i<=5; $i++)
        {
            echo "================<br>";
            echo "alex tampan $i <br>";
            
        }

        echo "<br>";
        // perulangan for untuk menampilkan array
        $hewan = array('hamster','lembu','kuda','landak','kucing');
        
        for($j=0; $j<count($hewan); $j++)

        {
            echo "===========<br>";
            echo $hewan [$j] ;
            echo "<br>";
        }

        foreach ($hewan as $h)
        {
            echo "==============<br>";
            echo $h;
            echo "<br>";
        }

       







    
    
    
    ?>
</body>
</html>