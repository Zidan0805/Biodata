<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji Kondektur</title>
</head>
<body style="background-color: #D9B08c">
    <h3>Alat Hitung Gaji kondektur</h3>

    <form action="" method="post">
        <ul>
            <li>
            <label for="km">tempuh /km :</label>
                <input type="number" name="km" id="km">
            </li>
            <li>
            <label for="tarif">tarif /km :</label>
                <input type="number" name="tarif" id="tarif">
            </li>
            <form method="POST">
		    <label for="bulan">Pilih Bulan:</label>
		        <select name="bulan" id="bulan">
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
		        </select>
	        </form>
                <button type="submit" name="submit" style="border-radius: 20px;">
                    submit
                </button>
            </li>
        </ul>
    </form>
    <?php 
    if (isset($_POST["submit"])){
        $jarak_tempuh = $_POST['km'];
        $tarif_gaji = $_POST['tarif'];
        $bulan = $_POST['bulan'];

        $total_sebulan = $jarak_tempuh*$tarif_gaji;

        echo "<br>Total gaji Anda sebagai Kondektur pada bulan $bulan adalah Rp.".number_format($total_sebulan,0,",",".");
    }
    ?>
</body>
</html>