<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
            @if ($nama == null )
            Silahkan isi biodata anda
            @elseif($nama != null)
        <tr>
    <td>Nama</td>
    <td>:</td>
    <td>{{$nama}}</td> <br>
</tr>
@endif
@if ($alamat != null)
    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td>{{$alamat}} </td><br>
</tr>
@endif
@if ($jeniskelamin != null)
    <tr>
    <td>Jenis kelamin</td>
    <td>:</td>
    <td>{{$jeniskelamin}} </td><br>
@endif
@if ($tb != null)
    <tr>
    <td>Tinggi badan</td>
    <td>:</td>
    <td>{{$tb}} Cm</td><br>
</tr>
@endif
@if ($bb != null)
    <tr>
    <td>Berat badan</td>
    <td>:</td>
    <td>{{$bb}} Kg</td><br>
</tr>
@endif
</table>
</body>
</html>