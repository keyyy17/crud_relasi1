<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="card" style="margin:20px">
    <div class="card-header">Edit Page</div>
    <div class="card-body">

    <form action="{{ url('pinjam/' .$pinjam->id) }}" method="post">
    {!! csrf_field() !!}
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{ $pinjam->id }}" id="id">
    <label>Nama</label><br>
    <input type="text" name="nama" id="nama" value="{{ $pinjam->nama}}" class="form-control"><br>
    <label>Jenis Buku</label><br>
    <input type="text" name="jenis_buku" id="jenis_buku" value="{{ $pinjam->jenis_buku }}" class="form-control"><br>
    <label>Jumlah Buku</label><br>
    <input type="number" name="jumlah_buku" id="jumlah_buku" value="{{ $pinjam->jumlah_buku }}" class="form-control"><br>
    <label>Tanggal Pinjam</label><br>
    <input type="text" name="tanggal_pinjam" id="tanggal_pinjam" value="{{ $pinjam->tanggal_pinjam }}" class="form-control"><br>
    <input type="submit" value="Update" class="btn btn-info">   
</form> 
</div>
</div>
</body>
</html>