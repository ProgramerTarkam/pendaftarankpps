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
        <div>
        <img src="https://i.postimg.cc/Qt2JQDDc/Desain-tanpa-judul-9.png" alt="" srcset="" class="pb-2" style="max-width: 20px">
        <a class="navbar-brand" href="/">PPK KALIPURO</a>
        </div>
      </div>
    </nav>

  <div class="container">
    
    <div class="row mt-3">

        <div class="col-lg-6">
            <img src="https://i.postimg.cc/qqKLcVhL/Whats-App-Image-2023-11-27-at-19-39-01.jpg"
              alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
        </div>

        <div class="col-lg-6 p-3 shadow-sm rounded">

            @include('komponen.pesan')

            <form action="/data/{{ $data->nik }}" method="post">
                @method('put')
                @csrf

                <div class="mb-3">
                    <h3>Formulir Pendaftaran KPPS</h3>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="namaLengkap" name="namaLengkap" autocomplete="off" value="{{ $data->namaLengkap }}" required>
                    <label for="namaLengkap">Nama Lengkap</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="nik" name="nik" autocomplete="off" value="{{ $data->nik }}" required>
                    <label for="nik">NIK</label>
                </div>

                <select class="form-select mb-3" aria-label="Default select example" name="jenisKelamin" required>
                    <option selected value="">Pilih Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="ttl" name="ttl"  autocomplete="off" value="{{ $data->ttl }}" required>
                    <label for="ttl">Tampat, Tanggal Lahir</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="usia" name="usia"  autocomplete="off" value="{{ $data->usia }}" required>
                    <label for="usia">Usia</label>
                </div>

                
                <select class="form-select mb-3" aria-label="Default select example" name="status" required>
                    <option selected value="">Pilih Status</option>
                    <option value="Belum Kawin">Belum</option>
                    <option value="Sudah Kawin">Sudah</option>
                    <option value="Pernah Kawin">Pernah Kawin</option>
                  </select>
                
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="namaIS" name="namaIS"  autocomplete="off" value="{{ $data->namaIS }}">
                    <label for="namaIS">Nama Suami/Istri</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="jumlahAnak" name="jumlahAnak"  autocomplete="off" value="{{ $data->jumlahAnak }}">
                    <label for="jumlahAnak">Jumlah Anak</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"  autocomplete="off" value="{{ $data->pekerjaan }}" required>
                    <label for="pekerjaan">Pekerjaan</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="alamatLengkap" name="alamatLengkap"  autocomplete="off" value="{{ $data->alamatLengkap }}" required>
                    <label for="alamatLengkap">Alamat Lengkap</label>
                </div>
                
                <select class="form-select mb-3" aria-label="Default select example" name="wilayah" required>
                    <option selected value="">Pilih wilayah</option>
                    <option value="Kelurahan Bulusan">Bulusan</option>
                    <option value="Desa Bulusari">Bulusari</option>
                    <option value="Kelurahan Gombengasari">Gombengasari</option>
                    <option value="Kelurahan Kalipuro">Kalipuro</option>
                    <option value="Desa Kelir">Kelir</option>
                    <option value="Desa Ketapang">Ketapang</option>
                    <option value="Kelurahan Klatak">Klatak</option>
                    <option value="Desa Pesucen">Pesucen</option>
                    <option value="Desa Telemung">Telemung</option>
                  </select>


                <button type="submit" class="btn btn-dark" name="submit">Edit Data</button>


            </form>
        </div>

    </div>

  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>