<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sambung Ilmu</title>
<body>

<h2>Sambung Ilmu</h2>

<form action="{{ route('add_mahasiswa') }}" method="POST">
  {{ csrf_field() }}

  Nama:<br>
  <input type="text" name="nama">
  <br>
  NIM:<br>
  <input type="text" name="nim">
  <br><br>
  <input type="submit" value="Submit">
</form>


</body>
</html>
