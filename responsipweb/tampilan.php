<!DOCTYPE html>
<html>
<head>
  <title>lihat</title>
  <link rel="stylesheet" type="text/css" href="resp.css">
</head>
<body>

<div class="cobs">
  <nav class="navbar" style="text-align: center;">

    <a href="#" class="logo"><img src="https://png.pngtree.com/png-clipart/20210718/original/pngtree-esports-zeus-mascot-png-image_6540717.jpg" width="50px" height="50px"></a>
    <h3 align="center" style="color: whitesmoke;">LIST MAHASISWA</h3>
    <div class="menu" >
      <ul class="list">  
      <li ><a href="Kalkulator.html" style="color: whitesmoke ;">Kalkulator</a></li>
     

      </ul>
    </div>
  </nav>
<?php
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt", "r");

echo "<table border='0'>";
while ($isi = fgets($fp)) {
    $pisah = explode('|', $isi);

    echo "<tr><td>NAMA</td><td>: $pisah[0] </td></tr>";
    echo "<tr><td>NIM</td><td>: $pisah[2] </td></tr>";
    echo "<tr><td>PRODI</td><td>: $pisah[1] </td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";

}
echo "</table>";

?>

    <div class="warna">

        <?php
        $hari = date("d");
        $bulan = date("m"); 
        $tahun = date("Y");
        echo "<h2>KALENDER</h2>";
        $jumlahhari = date("t",mktime(0,0,0,$bulan,$hari,$tahun));
        ?>
      

        <?php
        switch ($bulan){
            case 1 : $nmbulan = "Januari"; break;
            case 2 : $nmbulan = "Februari"; break;
            case 3 : $nmbulan = "Maret"; break;
            case 4 : $nmbulan = "April"; break;
            case 5 : $nmbulan = "Mei"; break;
            case 6 : $nmbulan = "Juni"; break;
            case 7 : $nmbulan = "Juli"; break;
            case 8 : $nmbulan = "Agustus"; break;
            case 9 : $nmbulan = "September"; break;
            case 10 : $nmbulan = "oktober"; break;
            case 11 : $nmbulan = "September"; break;
            case 12 : $nmbulan = "desember"; break;
        }
        echo "<center><h1>$nmbulan $tahun</h1></center>";
        ?> <br>

        <table style="border:1px solid black" align="center" cellpadding="10">
            <tr bgcolor="black">
            <td align="center"><font color="#FF0000">Min</font></td>
            <td align="center">Sen</td>
            <td align="center">Sel</td>
            <td align="center">Rab</td>
            <td align="center">Kam</td>
            <td align="center">Jum</td>
            <td align="center">Sab</td>
            </tr>

        <?php
            $s = date("w",mktime(0,0,0,$bulan,1,$tahun));
            for ($ds=1; $ds<=$s; $ds++){
                echo " <td></td>";
            }

            for($d=1; $d<=$jumlahhari; $d++){
              
                if (date("w",mktime(0,0,0,$bulan,$d,$tahun)) == 0) {
                    echo "<tr>";
                }
                $warna="#000000"; 

                
                if(date("l",mktime(0,0,0,$bulan,$d,$tahun)) == "Sunday"){
                    $warna="#FF0000";
                }
                
                
                    echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>";
            
                
                if(date("w",mktime(0,0,0,$bulan,$d,$tahun)) == 6){
                    echo "</tr>";
                }
            }
        echo"</table>";
        echo "<a class='kembali' href='index.html' class> loby </a>";
        ?>
    </div>


</div>
</body>
</html>


    
    
    
    
    


