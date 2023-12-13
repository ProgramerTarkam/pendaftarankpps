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

<div class="row justify-content-center">

    @include('komponen.pesan')
    
    <div class="py-3 text-center">
        <h4>Data Pendaftar KPPS</h4>
    </div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Pendidikan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
        
        <form action="/pendidikan/store" method="POST">
          @csrf
          <span><small>Tuliskan Jenjang mulai dari SD - Ijazah Terahir</small></span>
          <div class="mb-3">
            <input type="hidden" class="form-control" id="data_nik" placeholder="Masukkan Nama user id" name="data_nik" value='{{ $nik }}' >
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="jenjang" placeholder="Masukkan jenjang" name="jenjang" autocomplete="off" required>
            <span><small>Contoh : SD</small></span>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="namaSekolah" placeholder="Masukkan Nama Sekolah" name="namaSekolah" autocomplete="off" required>
            <span><small>Contoh : SDN 2 Pesucen</small></span>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="awalmasuk" placeholder="Masukkan Tahun masuk" name="awalmasuk" autocomplete="off" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="keluar" placeholder="Masukkan Tahun Keluar" name="keluar" autocomplete="off" required>
          </div>
          

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Tambah</button>
        </div>
        
      </form>

    </div>
  </div>
</div>
</div>

<div class="col-lg-5">

    <div class="p-3 m-3 shadow-sm rounded">

        <!-- Button to Open the Modal -->

          <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModal">
            + Tambah Pendidikan
          </button>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Jenjang</th>
            <th scope="col">Nama Sekolah</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data as $d)
            <tr>
              <td>{{$no++}}</td>
              <th>{{ $d->jenjang}}</th>
              <td>{{ $d->namaSekolah}} ( {{ $d->awalmasuk}} - {{ $d->keluar}} )</td>
              <td>
                <div class="btn-group">
                  <form action="/pendidikan/{{ $d->data_nik}}/{{ $d->jenjang}}" method="post">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger"><i class="bi bi-trash"></i></button> 
                  </form>
                </div>
                </td>
            </tr> 
            @endforeach
          
        </tbody>
      </table>
    </div>

  </div>

  {{-- pekerjaan --}}

  <div class="col-lg-5">

    <div class="p-3 m-3 shadow-sm rounded">

        <!-- Button to Open the Modal -->

          <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModalpekerjaan">
            + Tambah Pekerjaan
          </button>


    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Jenis Pekerjaan</th>
            <th scope="col">Pekerjaan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($datapekerjaan as $d)
            <tr>
              <td>{{$no++}}</td>
              <th>{{ $d->jenisPekerjaan}}</th>
              <td>{{ $d->pekerjaan}} ( {{ $d->awalmasuk}} - {{ $d->sampai}} )</td>
              <td>
                <div class="btn-group">
                  <form action="/pekerjaan/{{ $d->data_nik}}/{{ $d->pekerjaan}}" method="post">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger"><i class="bi bi-trash"></i></button> 
                  </form>
                </div>
                </td>
            </tr> 
            @endforeach
          
        </tbody>
      </table>
    </div>

  </div>


<!-- The Modal -->
<div class="modal" id="myModalpekerjaan">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Pekerjaan</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      

          <form action="/pekerjaan/store" method="POST">
            @csrf
            <div class="mb-3">
              <input type="hidden" class="form-control" id="data_nik" placeholder="Masukkan Nama user id" name="data_nik" value='{{ $nik }}'>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="pekerjaan" placeholder="Masukkan pekerjaan dan Keterangan" name="pekerjaan" autocomplete="off" required>
              <label for="pekerjaan label-sm">Contoh : PPS Desa Bulusari / Guru di SMP Kalipuro</label>
            </div>
            <div class="mb-3">
              <select class="form-select" aria-label="Default select example" name="jenisPekerjaan" required>
                <option selected>Pilih Jenis Pekerjaan</option>
                <option value="Kepemiluan">Kepemiluan</option>
                <option value="Non Kepemiluan">Non Kepemiluan</option>
              </select>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="awalmasuk" placeholder="Masukkan Tahun masuk" name="awalmasuk" autocomplete="off" required>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" id="sampai" placeholder="Bekerja sampai Tahun" name="sampai" autocomplete="off" required>
              <span><small>Ket : Tulis <span class="fw-bold">Sekarang</span> jika masih bekerja sampai saat ini</small></span>
            </div>
          
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Tambah</button>
        </div>
        
      </form>

    </div>
  </div>
</div>
</div>

{{-- karya tulis --}}

<div class="col-lg-5">

  <div class="p-3 m-3 shadow-sm rounded">

      <!-- Button to Open the Modal -->

        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModalkarya">
          + Tambah Karya Tulis
        </button>


  <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Jenis Karya</th>
          <th scope="col">Judul</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @php
              $no = 1;
          @endphp
          @foreach ($datakarya as $d)
          <tr>
            <td>{{$no++}}</td>
            <th>{{ $d->jeniskarya}}</th>
            <td>{{ $d->judul}} ( {{ $d->tahunTerbit}} )</td>
            <td>
              <div class="btn-group">
                <form action="/karya/{{ $d->data_nik}}/{{ $d->judul}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger"><i class="bi bi-trash"></i></button> 
                </form>
              </div>
              </td>
          </tr> 
          @endforeach
        
      </tbody>
    </table>
  </div>

</div>


<!-- The Modal -->
<div class="modal" id="myModalkarya">
<div class="modal-dialog">
  <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Tambah Karya Tulis</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
    

        <form action="/karyatulis/store" method="POST">
          @csrf
          <div class="mb-3">
            <input type="hidden" class="form-control" id="data_nik" placeholder="Masukkan Nama user id" name="data_nik" value='{{ $nik }}'>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul Karya" name="judul" autocomplete="off" required>
          </div>
          <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="jeniskarya" required>
              <option selected>Pilih Jenis Karya</option>
              <option value="Kepemiluan">Kepemiluan</option>
              <option value="Non Kepemiluan">Non Kepemiluan</option>
            </select>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="tahunTerbit" placeholder="Masukkan Tahun Terbit" name="tahunTerbit" autocomplete="off" required>
          </div>
        
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Tambah</button>
      </div>
      
    </form>

  </div>
</div>
</div>
</div>

{{-- organisasi --}}

<div class="col-lg-5">

  <div class="p-3 m-3 shadow-sm rounded">

      <!-- Button to Open the Modal -->

        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#myModalorganisasi">
          + Tambah Organisasi
        </button>


  <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Organisasi</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
          @php
              $no = 1;
          @endphp
          @foreach ($dataOrganisasi as $d)
          <tr>
            <td>{{$no++}}</td>
            <th>{{ $d->namaOrganisasi}}</th>
            <td>{{ $d->jabatan}} ( {{ $d->awalmasuk}} - {{ $d->sampai}} )</td>
            <td>
              <div class="btn-group">
                <form action="/organisasi/{{ $d->data_nik}}/{{ $d->namaOrganisasi}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger"><i class="bi bi-trash"></i></button> 
                </form>
              </div>
              </td>
          </tr> 
          @endforeach
        
      </tbody>
    </table>
  </div>

</div>


<!-- The Modal -->
<div class="modal" id="myModalorganisasi">
<div class="modal-dialog">
  <div class="modal-content">

    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">Tambah Organisasi</h4>
      <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>

    <!-- Modal body -->
    <div class="modal-body">
    

        <form action="/organisasi/store" method="POST">
          @csrf
          <div class="mb-3">
            <input type="hidden" class="form-control" id="data_nik" placeholder="Masukkan Nama user id" name="data_nik" value='{{ $nik }}'>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="namaOrganisasi" placeholder="Masukkan Nama Organisasi" name="namaOrganisasi" autocomplete="off" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="jabatan" placeholder="Masukkan Jabatan" name="jabatan" autocomplete="off" required>
          </div>
          <div class="mb-3">
          <div class="mb-3">
            <input type="text" class="form-control" id="awalmasuk" placeholder="Masukkan Tahun masuk" name="awalmasuk" autocomplete="off" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" id="sampai" placeholder="Aktif sampai Tahun" name="sampai" autocomplete="off" required>
            <span><small>Ket : Tulis <span class="fw-bold">Sekarang</span> jika masih aktif sampai saat ini</small></span>
          </div>
        
      
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Tambah</button>
      </div>
      
    </form>

  </div>
</div>
</div>
</div>

</div>

<div class="p-4 container text-center">
<a href="/kembali" class="btn btn-primary">Simpan Data</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>