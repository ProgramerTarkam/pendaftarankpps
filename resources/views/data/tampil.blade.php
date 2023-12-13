<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPKPPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
  </head>
  <body>
    
    <nav class="navbar bg-body-tertiary w-100 ">
      <div class="container">
        <a class="navbar-brand" href="/">SIPKPPS PPK KALIPURO</a>
        <div class="btn-group">
          <a href="/dasboard" class="btn btn-dark">kembali</a>
        </div>

      </div>
    </nav>

    
    <div class="py-3 text-center">
        <h4>Data Pendaftar KPPS</h4>
    </div>

    <div class="p-3 shadow-sm rounded">
    <table class="table">
        <thead>
          <tr>
            <th scope="col-1">No</th>
            <th scope="col-2">Nama Lengkap</th>
            <th scope="col-2">NIK</th>
            <th scope="col-2">Alamat Lengkap</th>
            <th scope="col-1">Wilayah</th>
            <th scope="col-2">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 1
            @endphp
            @foreach ($data as $d)
            <tr>
              <td>{{$no++}}</td>
              <th>{{ $d->namaLengkap}}</th>
              <th>{{ $d->nik}}</th>
              <td>{{ $d->alamatLengkap}}</td>
              <td>{{ $d->wilayah}}</td>
              <td>
              <div class="btn-group">
                <a href="/{{ $d->id}}/edit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
              </div>
              <div class="btn-group">
                <a href="/pdf/{{$d->nik}}" class="btn btn-warning"><i class="bi bi-printer"></i></a>
              </div>
              </td>
            </tr> 
            @endforeach
          
        </tbody>
      </table>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>