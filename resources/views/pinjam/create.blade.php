<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="card" style="margin:20px;">
<div class="card-header">Create New Pinjam</div>
<div class="card-body">
    <form action="{{ url('pinjam') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label><br>
        <input type="text" name="nama" id="nama" class="form-control"><br>

        <div class="form-group">
            <label>Jenis Buku</label>
            <select name="jenis_buku" id="jenis_buku" class="form-control">
                @foreach ($jenis as $item)
                <option value="{{$item->id}}"> {{ $item->jenis}}</option>
                @endforeach
            </select>

        </div>
        <label>Jumlah buku</label>
        <input type="number" name="jumlah_buku" id="jumlah_buku" class="form-control"><br>

        <label>Tanggal Pinjam</label>
        <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control"><br>

        <input type="submit" value="Save" class="btn btn-success"><br>
    </form>
</div>
</div>
</body>
</html> 