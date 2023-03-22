<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <a href="#" class="logo"> Biodata </a>
        <nav class="navbar">
            <a href="#" style="--i:1;" class="active">Home</a>
            <a href="#" style="--i:2;">About</a>
            <a href="#" style="--i:3;">Contact</a>
        </nav>
    </header>
    <section class="home">
        <div class="home-content">
            <h3>Hello I'ts Me</h3>
            <h1>Muhammad Zidan Maulana</h1>
            <h3>And I'm a <span>University Student</span></h3>
            <p>
                <?php 
                $mhs = array(
                array("npm" => '21081010328', "jurusan" => "Informatika", "fakultas" => "Fasilkom" ),
                );
                ?>
                <th>NPM</td>
                <th>Jurusan</td>
                <th>Fakultas</td>
                <?php foreach ($mhs as $data) : ?>
                    <tr> <br>
                        <td><?php echo $data["npm"] ?></td>
                        <td><?php echo $data["jurusan"] ?></td>
                        <td><?php echo $data["fakultas"] ?></td>
                    </tr>
                <?php endforeach ?>
            </p>
            <div class="sosial-media">
                <a href="https://web.facebook.com/profile.php?id=100022908092370" style="--i:7"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/zidanmaulana___/?hl=id" style="--i:8"><i class='bx bxl-instagram-alt'></i></a>
                <a href="https://github.com/Zidan0805" style="--i:9"><i class='bx bxl-github'></i></a>
            </div>
        </div>
        <div class="home-img">
            <img src="home.png" alt="">
        </div>
    </section>
    <script> src="script.js"</script>
</body>
</html>
