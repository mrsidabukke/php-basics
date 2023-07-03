<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar php</title>
</head>
<body style="background-color: grey;" style=" font-color: white;">
    <a href="index2.php">website php ke 2</a><br>
    <a href="index1.php">website php ke 1</a><br>
    <p><mark><strong>HELLO WORLD</strong></mark></p>
    <?php
    // alex sandro dabukke
    
     echo "<h1 ><strong>Belajar php</strong></h1>";
     print"belajar php 2 <br>";
     // variabel pada php diawali dengan tanda $
     // variabel string diawali dengan tanda " " atau ' '
     $bahasa="wakanda";
     $kata="belajar";
     $s='sempak';
     $k='koyak';

     echo $s."".$k."<br>";

     var_dump($bahasa);

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
        echo "<br>";
        echo "<br>";
        echo "<br>";

     // foreach pada array
        foreach ($hewan as $h)
        {
            echo "==============<br>";
            echo $h;
            echo "<br>";
        }

        echo "<br>";
        echo "<br>";
        echo "<br>";


        //for each pada associative array

        $smp = array("dia"=>"acs",
        "kelas"=> 92,
        "sifat"=>"jahil",
    );

    foreach ($smp as $key =>$value)
    {
        echo $key ."<br>";
        echo $value . "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";

    // looping while 
    // while dan do while memerlukan variabel lain (diluar looping tsb)

    $syarat = 0;
    $syarat2 = 0;

    while($syarat < count($hewan)){

        echo $hewan[$syarat]. "<br>";
        $syarat++;
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";

    // looping do while
    // variabel syarat harus berlainan dengan syarat looping yang lain

    do{
        echo $array1[$syarat2]. "<br>";
        $syarat2++;

    } while ($syarat2 < count($array1));
    echo "<br>";
    echo "<br>";
    echo "<br>";

    // tipe data boolean

   // $betul = true;
    //$salah = false;

    // loop if else
    // operator logikanya ==,===(menguji semuanya termasuk tipe datanya)
    // >,<,>=,<=, !=(negasi atau apakah tidak sama dengan atau lawannya)

    $password = '1235';
    $password2 ='1235';

    if ($password==123){
        echo "password benar";
    } elseif ($password2==1234)
        {
        echo "password benarr";
    } elseif($password==$password2)
        {
        echo "password benarrrr";
    } else{
        echo "password salah";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // if bercabang
    // && (untuk logika tetapi harus memenuhi dua sayarat)
    // contoh uang pengusaha > harga pc && uang programer > harga pc = false . karena uang programer tidak cukup
    // || (atau) bisa menghemat penggunaan else contoh 
    // if ($uangprogramer> $hargapc || $uang pengusaha > $harga pc)
    // echo "pc dibeli" (outputnya akan pc dibeli karena uang pengusaha cukup)

        
    $uangpengusaha = 100;
    $uangprogramer = 1;
    $hargapc       = 2;

    if ($uangprogramer> $hargapc){
        echo "pc dapat dibeli oleh programer";
    } else if ($uangpengusaha> $hargapc) {
        echo" pc dapat dibeli oleh pengusaha <br>";
        // if cabang
    if ($uangpengusaha>= 50* $hargapc){
        echo "pc dibeli 50 kali oleh pengusaha"."<br>";
    }
    
    }else{
        echo "tidak ada yang bisa dibeli";
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";

    // switch case

    $hari = 'jumat';

    switch ($hari) {
        case 'senin':
            echo " harimya adalah senin";
            break;
            case 'selasa':
                echo " harimya adalah selasa";
                break;
                case 'rabu':
                    echo " harimya adalah rabu";
                    break;
                    case 'kamis':
                        echo " harimya adalah kamis";
                        break;
                        case 'jumat':
                            echo " harimya adalah jumat";
                            break;
                            case 'sabtu':
                                echo " harimya adalah sabtu";
                                break;
                                case 'minggu':
                                    echo " harimya adalah minggu";
                                      break;       
        default:
            echo "hari tidak valid";  
            break;
    }


    echo "<br>";
    echo "<br>";
    echo "<br>";

// function pada php 
    function panggil(){
        echo"========================<br>";
        echo "soladirity m forever";

    }
    panggil();
    br();
    br();
    br();


    function br(){
        echo "<br>";
    }

// parameter pada function

function panggil2($nama,$umur){
    $nama = "anggi"." "."$umur";
    echo "========================";
    echo $nama;
    echo "========================";

}

panggil2("Anggi",26);
br();
br();
br();

// return pada function

function penjumlahan($x,$y){
    $z = $x + $y;
    return $z;
}
// function juga bisa dijadikan variabel seperti ini
$hasil = penjumlahan(2,5)*10;
// hasil dari function penjumlahan
 echo penjumlahan(5,6);

br();
br();
br();
// hasil dari variabel hasil function penjumlahan
 echo $hasil;

br();
br();
br();

// scope

$a = 3;
$b = 4;


function perkalian(){
    global $a,$b;
    $c = $a * $b;

//$c = $GLOBALS['a'] * $GLOBALS['b']; (bisa juga menggunakan ini)

    return $c;
}

echo perkalian();

br();
br();
br();

// anonymous function
// anonymous function adalah function yang tidak memiliki nama
// anonymous functuon digunakan dengan memasukkan function ke dalam variabel

$pengurangan = function($x,$y){
    $z = $x - $y;
    return $z;
};

// anonymous function bisa menurunkan sifatnya ke dalam variabel lain

$sempak = $pengurangan;

echo $sempak(90,10);
br();
br();
echo $pengurangan(5,3);

br();
br();
br();


// callback function
// untuk memanggil fungsi di dalam fungsi lain
// contoh 1

function berteriak($callback){
    echo "AAAAAAAAAAAAAAAAAAAA <span>";
    //$callback(); (alternatif lain)
    call_user_func($callback); 
 
}

$ayam = function(){

    echo "saya suka ayam goreng ";
};
    

berteriak($ayam);

br();
br();
br();

//contoh 2

function berteriak2($callback){
    echo "EEEEEEEEEEEEEEEEEEEEEEEEE <span>";
    
    call_user_func($callback,' saya suka ayam bakar');
 
}

$ayam2 = function($text3){

  echo $text3;

};

berteriak2($ayam2);

br();
br();
br();

// contoh 3 (cara menguji apakah itu fungsi atau tidak)
// if is callable untuk mengujinya
// call user func untuk mengubah atau menukar

function berteriak3($callback){
    echo "OOOOOOOOOOOOOOOOOOOOOOOOOOO";
    if ( is_callable ($callback) ){
        call_user_func($callback, 'saya suka ayam rebus');
        
    }else{
        echo " itu bukan fungsi";
    }
   
}



$ayam3 = function($text4){
echo $text4;
};

berteriak3(123432532);

br();
br();
br();

// var dump die print r

$mobil = ['toyota','kijang'];

var_dump($mobil);
    ?>


<h2><strong><mark> SELAMAT KAMU BERHASIL MENAMATKAN PHP DASAR </mark></strong></h2>






</body>
</html>