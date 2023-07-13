
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row" style="margin:20px">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h1>Laravel 10</h1>
                <h2>Crud (Create,Read,Update,and Delete)</h2>
            </div>
            <div class="card-body">
                <a href="{{ url('pinjam/create')  }}" class="btn btn-link btn-sm" title="Add New pinjam">
                    Add New
                </a>
                <br>
                <br>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jenis Buku</th>
                                <th>Jumlah Buku</th>
                                <th>Tanggal Pinjam</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pinjam as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->JEnis?->jenis }}</td>
                                <td>{{ $item->jumlah_buku}}</td>
                                <td>{{ $item->tanggal_pinjam}}</td>
                                <td>
                                    <a href="{{url('/pinjam/' .$item->id)}}" title="View"><button class="btn btn btn-sm "><i aria-hidden="true"></i><i>View</i></button></a>
                                    <a href="{{url('/pinjam/' .$item->id . '/edit/')}}" title="Edit"><button class="btn btn-warning btn-sm"><i aria-hidden="true"></i><i>Edit</i></button></a>
                                    <form method="post" action="{{ url('/pinjam/'  . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                        <button type="submit" class="btn-danger btn-sm" onclick="return confirm("Confirm Delete?")"><i aria-hidden="true"></i>Hapus</button></a>
                                    </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </div>
</div>
</div>
</body>
</html>

