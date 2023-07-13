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
Jenis
    <form action="{{ route('jenis.update' , $jenis->id) }}" method="post">
    {!! csrf_field() !!}
    @method("PATCH")
    <input type="hidden" name="id" id="id" value="{{ $jenis->id }}" class="form-control">
    <label>MASUKAN JENIS BUKU</label><br>
    <input type="select" name="jenis" id="jenis" value="{{ $jenis->jenis }}" class="form-control"><br>
    <input type="submit" value="Update" class="btn btn-success">   
</form> 
</div>
</div>
</div>
</body>
</html>