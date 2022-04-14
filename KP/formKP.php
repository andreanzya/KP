<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Tugas4_[TeddyAndreansyah].css">
        <title>Pengajuan Surat Akademik</title>
    </head>
    <body>
        <h1>Surat Pengantar KKP</h1>
 
        <form method="post" action="cetakKP.php" id="formsurat">
            <table>
                <tr><td>Nama</td><td><input type="text" name="nama"><br></td></tr>
                <tr><td>NIM</td><td><input type="text" name="nim"></td></tr>
                <tr><td>Jurusan</td></tr>
                <tr><td><input type="radio" id="Jurnalistik" name="jurusan" value="Jurnalistik">Jurnalistik</td></tr>
                <tr><td><input type="radio" id="Komunikasi Marketing" name="jurusan" value="Komunikasi Marketing">Komunikasi Marketing</td></tr>
                <tr><td><input type="radio" id="Broadcasting" name="jurusan" value="Broadcasting">Broadcasting</td></tr>
                <tr><td><input type="radio" id="humas" name="Hubungan Masyarakat" value="Hubungan Masyarakat">Hubungan Masyarakat</td></tr>
                <tr><td>Alamat Lengkap</td><td><textarea rows="5" cols="30" style="left: auto;" name="alamat" placeholder="Contoh :
PT. Sepeda Maju Bersama
Ruko North Goldfinch No. 62,
Cihuni, Padegangan, Kecamatan Gading Serpong,
Tangerang, Banten, 15332"></textarea></td></tr>
                <tr><td></td><td><input type="submit" name="submit" value="Submit"></td></tr>
            </table>
        </form>
        
    </body>
</html>