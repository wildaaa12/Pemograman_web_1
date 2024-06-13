<!DOCTYPE html>
<html lang="en">
<head> <!--struktur-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="WebsIte untuk pembelajaran WEB">
    <title>TI 4A</title>
</head> <!--akhir struktur kepala-->
<body>
    <h1> Pemograman web 1</h1>

    <p> <!-- awal paragraph-->
    Daftar Materi Pemrograman Web 1, Program Studi Teknik Informatika:
        <a href="menu.php">Menu</a>
        <ol type="1">
            <li>
            <a href="html_dasar">HTML Dasar</a>
            </li>
            <li>Pembuatan FORM</li>
            <li>PHP Dasar</li>
            <li>Pengiriman Data</li>
            <li>Templating</li>
        </ol>
    </p> <!-- akhir paragraph -->
</body><!-- akhi struktur tubuh (untuk membuat konten) -->

<form>
    <label for="fname">First name:</label><br>
    <input type="text" id="fname" name="fname"><br>
    <label for="lname">Last name:</label><br>
    <input type="text" id="lname" name="lname">
  </form>

  <table>
    <tr>
      <th>Nama</th>
      <th>Nim</th>
      <th>Program studi</th>
    </tr>
    <tr>
      <td>wilda</td>
      <td>17223005</td>
      <td>teknik informatika</td>
    </tr>
  </table>
</html>