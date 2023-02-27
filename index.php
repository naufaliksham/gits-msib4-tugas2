<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Naufal Iksham</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body class="body">
    <div class="container">
        <div class="header">
            <header>
                Naufal Iksham
            </header>
            <ul>
                <li><a href="#about" class="page-scroll">About Me</a></li>
                <li><a href="#biodata" class="page-scroll">Biodata</a></li>
                <li><a href="#sosmed" class="page-scroll">Social Media</a></li>
                <li><a href="#kenalan" class="page-scroll">Kenalan</a></li>
            </ul>
            <div id="content">
                <div class="subTitle" id="about">
                    <h2>About Me</h2>
                </div>
                <div class="home1">
                    <p>
                        Saya seorang mahasiswa Teknik Informatika dari
                        Universitas Dian Nuswantoro.
                        Teknologi merupakan hal yang menarik untuk saya
                        ikuti karena akan ada sesuatu yang baru
                        setiap harinya.
                    </p>
                </div>
                <br><br><br><br>
                <div class="subTitle" id="biodata">
                    <h2>Biodata</h2>
                </div>
                <div class="biodata">
                    <table class="biodataa">
                        <thead>
                            <tr>
                                <th colspan="3"><img src="img/fotoprofil.jpg" class="border" height="auto" width="300px">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="leftText">Nama</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;Naufal Iksham</td>
                            </tr>
                            <tr>
                                <th class="leftText">Jenis kelamin</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;Laki-Laki</td>
                            </tr>
                            <tr>
                                <th class="leftText">Tempat, tanggal lahir</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;Pati, 15 Februari 2001</td>
                            </tr>
                            <tr>
                                <th class="leftText">Kewarganegaraan</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;Indonesia</td>
                            </tr>
                            <tr>
                                <th class="leftText">Status</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;Belum menikah</td>
                            </tr>
                            <tr>
                                <th class="leftText">Tinggi, berat badan</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;175cm, 68Kg</td>
                            </tr>
                            <tr>
                                <th class="leftText">Keahlian</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;Mampu menggunakan bahasa
                                    pemrograman</td>
                            </tr>
                            <tr>
                                <th class="leftText"></th>
                                <th>&nbsp;</th>
                                <td>&nbsp;C++, PHP, Golang, dan Python</td>
                            </tr>
                            <tr>
                                <th class="leftText">Hobi</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;Ngoding, badminton, dan games</td>
                            </tr>
                            <tr>
                                <th class="leftText">Telp</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;0822-xxxx-xxxx</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br><br><br><br>
                <div class="subTitle" id="sosmed">
                    <h2>
                        Social Media
                    </h2>
                </div>
                <div>
                    <table class="sosmed">
                        <thead>
                            <tr>
                                <td colspan="2" class="sosmed2nd">
                                    <a href="https://github.com/naufaliksham">
                                        <img src="img/github.png" class="icon">
                                        <p>naufaliksham</p>
                                    </a>
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="display: flex;">
                                <td class="sosmed2nd">
                                    <a href="https://www.linkedin.com/in/naufal-iksham-b41a4721b/">
                                        <img src="img/linkedin.png" class="icon">
                                        <p>Naufal Iksham</p>
                                    </a>
                                </td>
                                <td class="sosmed2nd">
                                    <a href="https://www.instagram.com/naufal_iksham/">
                                        <img src="img/instagram.png" class="icon">
                                        <p>@naufal_iksham</p>
                                    </a>
                                </td>
                            </tr>
                            <tr style="display: flex;">
                                <td class="sosmed2nd">
                                    <a href="https://twitter.com/naufal_iksham">
                                        <img src="img/twitter.png" class="icon">
                                        <p>@naufal_iksham</p>
                                    </a>
                                </td>
                                <td class="sosmed2nd">
                                    <a href="https://www.facebook.com/naufaliksham/">
                                        <img src="img/facebook.png" class="icon">
                                        <p>Naufal Iksham</p>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br><br><br>
                <h2 align="center" class="subTitle">==== Tanggal dan Jam Digital ====</h2>
                <h3 align="center" id="tanggal" style="text-shadow: 1px 1px 4px #000;"></h3>
                <div class="jam_digital">
                    <div class="kotak">
                        <b>
                            <p id="jam"></p>
                        </b>
                    </div>
                    <div class="kotak">
                        <b>
                            <p id="menit"></p>
                        </b>
                    </div>
                    <div class="kotak">
                        <b>
                            <p id="detik"></p>
                        </b>
                    </div>
                </div>
            </div>
        </div>
        <div class="kenalan" id="kenalan">
            <form method="POST" class="formKenalan" action="<?php echo $_SERVER['PHP_SELF'];?>">
                <table>
                    <tr class="inputText">
                        <td>&nbsp;Nama :</td><td><input type="text" name="a1"></td>
                    </tr>
                    <tr class="inputText">
                        <td>&nbsp;Email :</td><td><input type="email" name="a5"></td>
                    </tr>
                </table>
                <input type="submit" name="sub" value="simpan">
            </form>
            <?php
                if(isset($_POST['sub'])){
                    $name = $_POST['a1'];
                    $email = $_POST['a5'];
    
                    echo "<div class='respon'>
                    Halo, $name <br>
                    Salam kenal ya &#128521
                    </div>";
                }
            ?>
        </div>
        <div>
            <div id="footer">
                <p class="copy">
                    Copyright &copy; Naufal Iksham.
                    All right reservered
                </p>
            </div>
        </div>
        <script type="text/javascript">
            var tgl = new Date();
            var bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            document.getElementById("tanggal").innerHTML = "Waktu akses " + tgl.getDate() + " " + bulan[tgl.getMonth()] + " " + tgl.getFullYear();

            window.setTimeout("waktu()"), 1000;
            function waktu() {
                var waktu = new Date();
                setTimeout("waktu()"), 1000;
                document.getElementById("jam").innerHTML = waktu.getHours();
                document.getElementById("menit").innerHTML = waktu.getMinutes();
                document.getElementById("detik").innerHTML = waktu.getSeconds();
            }

            var i = 0;
            function change() {
                var ClassJamDigital = document.getElementsByClassName("jam_digital");
                var color = ["#2b8c5c8a", "#2476678a", "#1b57768a"];
                ClassJamDigital[0].style.backgroundColor = color[i];
                i = (i + 1) % color.length;
            }
            setInterval(change, 1000);
        </script>
</body>

</html>