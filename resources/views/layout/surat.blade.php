
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPK Kalipuro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        .page-break {
            page-break-after: always;
        }



        .halamanprint {
                visibility: hidden;
                width: 215mm;
               height: 330mm;  
                background:#fff;
        }

        /* table {
          page-break-inside: avoid;
          white-space: wrap;
        } */

        @media print {
            .hilang {
                display: none;
            }
            .ada {
                visibility: visible;
        }
        }
    </style>

  </head>
  <body>
    <nav class="navbar bg-body-tertiary w-100 hilang">
      <div class="container">
        <div>
        <img src="https://i.postimg.cc/Qt2JQDDc/Desain-tanpa-judul-9.png" alt="" srcset="" class="pb-2" style="max-width: 20px">
        <a class="navbar-brand " href="/">PPK KALIPURO</a>
        </div>
      </div>
    </nav>

      <div class="row gap-1 justify-content-center py-3 hilang">
      <div class="halamancek col-10 shadow-sm p-3">
          <div class="">
              <h3>Silahkan Cek Kembali</h3>

              <div class="p-3 shadow-sm rounded">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tempat, Tanggal Lahir</th>
                        <th scope="col">Usia</th>
                        <th scope="col">Alamat Lengkap</th>
                        <th scope="col">Wilayah</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <th>{{ $data->namaLengkap}}</th>
                          <td>{{ $data->jenisKelamin}}</td>
                          <td>{{ $data->ttl}}</td>
                          <td>{{ $data->usia}}</td>
                          <td>{{ $data->alamatLengkap}}</td>
                          <td>{{ $data->wilayah}}</td>
                        </tr> 
                      
                    </tbody>
                  </table>

 



                    <div class="d-flex justify-content-center">
                    <button class="btn btn-dark" onclick="print()">PRINT ATAU SAVE SURAT</button>
                    </div>

          </div>
      </div>
    </div>
</div>

    <div class="halamanprint">



        <div class="ada">
            <div class="">
              
              <div class="text-center mb-5">
                <h4 class="mb-0">SURAT PENDAFTARAN</h4>
                <h4 class="mb-0">SEBAGAI CALON ANGGOTA KPPS</h4>
                <h4 class="mb-0">KABUPATEN BANYUWANGI</h4>
                <h4 class="mb-0">KECAMATAN KALIPURO</h4>
                <h4 class="mb-0 text-uppercase">{{ $data->wilayah}}</h4>
              </div>

              <div class="mb-1">
                <p>yang bertanda tangan dibawah ini:</p>
              </div>

              <table class="table table-borderless">
                <tbody>
                  <tr>
                    <td class="col-2">Nama Lengkap</td>
                    <td class="col-1 text-end">:</td>
                    <td class="col-8  text-uppercase">{{ $data->namaLengkap}}</td>
                  </tr>
                  <tr>
                    <td class="col-2">Jenis Kelamin</td>
                    <td class="col-1 text-end">:</td>
                    <td class="col-8">{{ $data->jenisKelamin}}</td>
                  </tr>
                  <tr>
                    <td class="col-2">Tempat, Tgl. Lahir</td>
                    <td class="col-1 text-end">:</td>
                    <td class="col-8">{{ $data->ttl}} / {{ $data->usia}}</td>
                  </tr>
                  <tr>
                    <td class="col-2">Alamat</td>
                    <td class="col-1 text-end">:</td>
                    <td class="col-8">{{ $data->alamatLengkap}} {{ $data->wilayah}} <br> Kecamatan Kalipuro Kabupaten Banyuwangi</td>
                  </tr>
                </tbody>
              </table>

              <div style="text-align: justify;" class="mb-5">
                <p>Dengan ini mendaftarkan diri sebagai calon anggota KPPS berdasarkan Pengumuman Seleksi Calon KPPS PPS {{ $data->wilayah}} No..................... Tanggal ..........Desember 2023 <br>Bersama ini dilampirkan dokumen persyaratan administrasi untuk memenuhi ketentuan Pasal 72 Undang-Undang Nomor 7 Tahun 2017 tentang Pemilihan Umum.</p>
              </div>

              <div class="row">
                <div class="col-7"></div>
                <div class="col-5">
                    <p class="mb-0">Banyuwangi, <span class="tanggal-hari-ini"></span></p>
                    <p class="">Pendaftar</p>
                    <br><br><br><br>
                    <p class="fw-bold text-uppercase text-decoration-underline">{{ $data->namaLengkap}}</p>
                </div>
            </div>
            

            </div>
        </div>



            
            <div class="page-break"></div>
            
                <div class="ada">
                  <div class="">
              
                    <div class="text-center mb-5">
                      <h4>SURAT PERNYATAAN</h4>
                      <h4>CALON ANGGOTA KPPS UNTUK PEMILIHAN UMUM TAHUN 2024</h4>
                    </div>
      
                    <div class="mb-1">
                      <p>yang bertanda tangan dibawah ini:</p>
                    </div>

                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td class="col-2">Nama Lengkap</td>
                          <td class="col-1 text-end">:</td>
                          <td class="col-8 text-uppercase">{{ $data->namaLengkap}}</td>
                        </tr>
                        <tr>
                          <td class="col-2">Jenis Kelamin</td>
                          <td class="col-1 text-end">:</td>
                          <td class="col-8">{{ $data->jenisKelamin}}</td>
                        </tr>
                        <tr>
                          <td class="col-2">Tempat, Tgl. Lahir</td>
                          <td class="col-1 text-end">:</td>
                          <td class="col-8">{{ $data->ttl}} / {{ $data->usia}}</td>
                        </tr>
                        <tr>
                          <td class="col-2">Alamat</td>
                          <td class="col-1 text-end">:</td>
                          <td class="col-8">{{ $data->alamatLengkap}} {{ $data->wilayah}} <br> Kecamatan Kalipuro Kabupaten Banyuwangi</td>
                        </tr>
                      </tbody>
                    </table>
      
      
                    <div style="text-align: justify;" class="mb-1">
                      <p>Menyatakan dengan sebenarnya bahwa saya sebagai calon anggota KPPS Kabupaten Banyuwangi, Kecamatan Kalipuro,  {{ $data->wilayah}} :</p>
                    </div>

                    <table class="table table-borderless mb-0">
                      <tbody class="mb-0">
                          <tr class="m-0 p-0">
                              <td class="col-auto m-0 p-0">1.</td>
                              <td class="col-12 m-0 p-0" style="text-align: justify;">setia kepada Pancasila sebagai dasar Negara, Undang-Undang Dasar Negara Republik Indonesia Tahun 1945, Negara Kesatuan Republik Indonesia, Bhinneka Tunggal Ika, dan cita-cita Proklamasi 17 Agustus 1945;</td>
                          </tr>
                          <tr class="m-0 p-0">
                              <td class="col-auto m-0 p-0">2.</td>
                              <td class="col-12 m-0 p-0" style="text-align: justify;">mempunyai integritas, pribadi yang kuat, jujur dan adil;</td>
                          </tr>
                          <tr class="m-0 p-0">
                              <td class="col-auto m-0 p-0">3.</td>
                              <td class="col-12 m-0 p-0" style="text-align: justify;">tidak menjadi anggota Partai Politik;</td>
                          </tr>
                          <tr class="m-0 p-0">
                              <td class="col-auto m-0 p-0">4.</td>
                              <td class="col-12 m-0 p-0" style="text-align: justify;">tidak memiliki penyakit penyerta (komorbiditas);</td>
                          </tr>
                          <tr class="m-0 p-0">
                              <td class="col-auto m-0 p-0">5.</td>
                              <td class="col-12 m-0 p-0" style="text-align: justify;">sehat secara rohani;</td>
                          </tr>
                          <tr class="m-0 p-0">
                              <td class="col-auto m-0 p-0">6.</td>
                              <td class="col-12 m-0 p-0" style="text-align: justify;">bebas dari penyalahgunaan narkotika;</td>
                          </tr>
                          <tr class="m-0 p-0">
                              <td class="col-auto m-0 p-0">7.</td>
                              <td class="col-12 m-0 p-0" style="text-align: justify;">tidak pernah dipidana penjara berdasarkan putusan pengadilan yang telah memperoleh kekuatan hukum tetap karena melakukan tindak pidana yang diancam dengan pidana penjara 5 (lima) tahun atau lebih;</td>
                          </tr>
                          <tr class="m-0 p-0">
                              <td class="col-auto m-0 p-0">8.</td>
                              <td class="col-12 m-0 p-0" style="text-align: justify;">tidak pernah dijatuhi sanksi pemberhentian tetap oleh KPU Kabupaten/Kota atau Dewan Kehormatan Penyelenggara Pemilu;</td>
                          </tr>
                          <tr class="m-0 p-0">
                              <td class="col-auto m-0 p-0">9.</td>
                              <td class="col-12 m-0 p-0" style="text-align: justify;">tidak berada dalam ikatan perkawinan dengan sesama penyelenggara Pemilu;</td>
                          </tr>
                          <tr class="m-0 p-0">
                              <td class="col-auto m-0 p-0">10.</td>
                              <td class="col-12 m-0 p-0" style="text-align: justify;">tidak menjadi tim kampanye atau tim pemenangan atau saksi peserta Pemilu atau Pemilihan pada penyelenggaraan Pemilu dan Pemilihan paling singkat dalam 5 (lima) tahun terakhir;</td>
                          </tr>
                          <tr class="m-0 p-0">
                              <td class="col-auto m-0 p-0">11.</td>
                              <td class="col-12 m-0 p-0" style="text-align: justify;">mempunyai kemampuan dan kecakapan dalam membaca, menulis dan berhitung;</td>
                          </tr>
                          <tr class="m-0 p-0">
                              <td class="col-auto m-0 p-0">12.</td>
                              <td class="col-12 m-0 p-0" style="text-align: justify;">mampu mengoperasikan perangkat teknologi informasi.</td>
                          </tr>
                      </tbody>
                  </table>
                  

                    <div style="text-align: justify;" class="mb-1 mt-1">
                      <p>Demikian surat pernyataan ini dibuat dengan sebenarnya untuk dapat digunakan sebagai bukti pemenuhan syarat calon Anggota KPPS.</p>
                    </div>
      
                    <div class="row">
                      <div class="col-7"></div>
                      <div class="col-5">
                          <p class="mb-0">Banyuwangi, <span class="tanggal-hari-ini"></span></p>
                          <p class="">Pendaftar</p>
                          <br><br><br><br>
                          <p class="fw-bold text-uppercase text-decoration-underline">{{ $data->namaLengkap}}</p>
                      </div>
                  </div>
                  
                  </div>
                </div>

                <div class="page-break"></div>


                <div class="ada">
                  <div class="">
              
                    <div class="text-center mb-4 text-uppercase">
                      <h4>DAFTAR RIWAYAT HIDUP</h4>
                      <h4>CALON ANGGOTA KPPS</h4>
                      <h4>KABUPATEN BANYUWANGI</h4>
                      <h4>KECAMATAN KALIPURO</h4>
                      <h4>{{ $data->wilayah}}</h4>
                    </div>

                    <table class="table table-borderless">
                          <tbody>
                            <tr>
                              <td class="col-3">Nama</td>
                              <td class="col-1 text-end">:</td>
                              <td class="col-6 col-8 text-uppercase">{{ $data->namaLengkap}}</td>
                            </tr>
                            <tr>
                              <td class="col-3">Jenis Kelamin</td>
                              <td class="col-1 text-end">:</td>
                              <td class="col-6">{{ $data->jenisKelamin}}</td>
                            </tr>
                            <tr>
                              <td class="col-3">Tempat Tanggal Lahir / Usia</td>
                              <td class="col-1 text-end">:</td>
                              <td class="col-6">{{ $data->ttl}} / {{ $data->usia}}</td>
                            </tr>
                            <tr>
                              <td class="col-3">Pekerjaan / Jabatan</td>
                              <td class="col-1 text-end">:</td>
                              <td class="col-6">{{ $data->pekerjaan}}</td>
                            </tr>
                            <tr>
                              <td class="col-3">Alamat</td>
                              <td class="col-1 text-end">:</td>
                              <td class="col-6">{{ $data->alamatLengkap}}</td>
                            </tr>
                            <tr>
                              <td class="col-3">Status Perkawinan</td>
                              <td class="col-1 text-end">:</td>
                              <td class="col-6">{{ $data->status}}</td>
                            </tr>
                            @if($data->status=="Sudah Kawin")
                                <tr>
                                  <td class="col-3">&emsp;a. Nama Istri</td>
                                  <td class="col-1 text-end">:</td>
                                  <td class="col-6">{{ $data->namaIS}}</td>
                                </tr><tr>
                                  <td class="col-3">&emsp;b. Jumlah Anak</td>
                                  <td class="col-1 text-end">:</td>
                                  <td class="col-6">{{ $data->jumlahAnak}}</td>
                                </tr>
                            @elseif($data->status=="Pernah Kawin")
                                </tr><tr>
                                  <td class="col-3">&emsp;b. Jumlah Anak</td>
                                  <td class="col-1 text-end">:</td>
                                  <td class="col-6">{{ $data->jumlahAnak}}</td>
                                </tr>
                            @endif
              


                          </tbody>
                        </table>
      
                      <div class="mb-4">
                        <p class="mb-0 fw-bold">&#8226 Riwayat Pendidikan :</p>
                        <table class="table">
                          <tbody>
                            <tr>
                              <td class="col-2">&emsp;Jenjang</td>
                              <td class="col-5">Nama Sekolah</td>
                              <td class="col-5">Tahun Sekolah</td>
                            </tr>
                            @foreach ($pendidikan as $p)
                            <tr>
                              <td class="col-2">&emsp;{{$p->jenjang}}</td>
                              <td class="col-5">{{$p->namaSekolah}}</td>
                              <td class="col-5">{{$p->awalmasuk}} - {{$p->keluar}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>

                      <div class="mb-4">
                        <p class="mb-0 fw-bold">&#8226 Pengalaman Pekerjaan :</p>
                        <table class="table">
                          <tbody>
                            <tr>
                              <td class="col-4">&emsp;Jenis</td>
                              <td class="col-6">Pekerjaan</td>
                              <td class="col-2">Tahun</td>
                            </tr>
                            @foreach ($pekerjaan as $k)  
                            <tr>
                              <td class="col-4">&emsp;{{$k->jenisPekerjaan}}</td>
                              <td class="col-6">{{$k->pekerjaan}}</td> 
                              <td class="col-2">{{$k->awalmasuk}} - {{$k->sampai}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>

                      
                      @if($karyaTulis->isNotEmpty())
                      <div class="mb-4">
                        <p class="mb-0 fw-bold">&#8226 Karya Tulis :</p>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="col-4">&emsp;Jenis</td>
                                        <td class="col-6">Judul</td>
                                        <td class="col-2">Tahun</td>
                                    </tr>
                                    @foreach ($karyaTulis as $kt)  
                                    <tr>
                                        <td class="col-4">&emsp;{{ $kt->jeniskarya }}</td>
                                        <td class="col-6">{{ $kt->judul }}</td> 
                                        <td class="col-2">{{ $kt->tahunTerbit }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                          </div>
                          @else
                              <p></p>
                          @endif
                          
                    @if($organisasi->isNotEmpty())
                      <div class="mb-4">
                        <p class="mb-0 fw-bold">&#8226 Pengalaman Organisasi :</p>
                        <table class="table">
                          <tbody>
                            <tr>
                              <td class="col-4">&emsp;Nama Organisasi</td>
                              <td class="col-6">Jabatan</td>
                              <td class="col-2">Periode Aktif</td>
                            </tr>
                            @foreach ($organisasi as $o)  
                            <tr>
                              <td class="col-4">&emsp;{{$o->namaOrganisasi}}</td>
                              <td class="col-6">{{$o->jabatan}}</td> 
                              <td class="col-2">{{$o->awalmasuk}} - {{$o->sampai}}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      @else
                              <p></p>
                      @endif

                      <div class="pt-3">
                      <p>Daftar Riwayat Hidup ini dibuat dengan sebenarnya untuk digunakan sebagai bukti
                        pemenuhan syarat calon anggota PPK/PPS/KPPS/Pantarlih.</p>
                      </div>

                      <div class="row">
                        <div class="col-7"></div>
                        <div class="col-5">
                            <p class="mb-0">Banyuwangi, <span class="tanggal-hari-ini"></span></p>
                            <p class="">Pendaftar</p>
                            <br><br><br><br>
                            <p class="fw-bold text-uppercase text-decoration-underline">{{ $data->namaLengkap}}</p>
                        </div>
                    </div>
                    

                      </div>
                    </div>

                    <div class="page-break"></div>
            
                <div class="ada">
                  <div class="">
              
                    <div class="text-center mb-5">
                      <h4>SURAT PERNYATAAN</h4>
                      <h4>BISA BACA TULIS DAN BERHITUNG</h4>
                    </div>
      
                    <div class="mb-1">
                      <p>yang bertanda tangan dibawah ini:</p>
                    </div>

                    <table class="table table-borderless">
                      <tbody>
                        <tr>
                          <td class="col-2">Nama Lengkap</td>
                          <td class="col-1 text-end">:</td>
                          <td class="col-8 text-uppercase">{{ $data->namaLengkap}}</td>
                        </tr>
                        <tr>
                          <td class="col-2">Jenis Kelamin</td>
                          <td class="col-1 text-end">:</td>
                          <td class="col-8">{{ $data->jenisKelamin}}</td>
                        </tr>
                        <tr>
                          <td class="col-2">Tempat, Tgl. Lahir</td>
                          <td class="col-1 text-end">:</td>
                          <td class="col-8">{{ $data->ttl}} / {{ $data->usia}}</td>
                        </tr>
                        <tr>
                          <td class="col-2">Alamat</td>
                          <td class="col-1 text-end">:</td>
                          <td class="col-8">{{ $data->alamatLengkap}} {{ $data->wilayah}} <br> Kecamatan Kalipuro Kabupaten Banyuwangi</td>
                        </tr>
                      </tbody>
                    </table>
      
      
                    <div style="text-align: justify;" class="mb-1">
                      <p>Menyatakan dengan sebenarnya bahwa saya bisa bisa baca, tulis, dan berhitung.
                        Surat keterangan ini saya buat untuk memenuhi persyaratan dalam rangka mendaftarkan diri sebagai calon anggota Kelompok Penyelenggara Pemungutan Suara (KPPS) untuk pemilihan umum tahun 2024, dan dibuat dalam keadaan sadar dan tidak ada paksaan dari pihak manapun.
                        </p>
                    </div>

                    
                  

                    <div style="text-align: justify;" class="mb-1 mt-1">
                      <p>Apabila pernyataan ini tidak benar, maka saya sanggup menanggung segala risiko sesuai ketentuan yang berlaku.</p>
                    </div>
      
                    <div class="row">
                      <div class="col-7"></div>
                      <div class="col-5">
                          <p class="mb-0">Banyuwangi, <span class="tanggal-hari-ini"></span></p>
                          <p class="">Pendaftar</p>
                          <br><br><br><br>
                          <p class="fw-bold text-uppercase text-decoration-underline">{{ $data->namaLengkap}}</p>
                      </div>
                  </div>
                  
                  </div>
                </div>


      
                </div>
            
  

    


                <script>
                  document.addEventListener("DOMContentLoaded", function () {
                      var options = { year: 'numeric', month: 'long', day: 'numeric' };
                      var today = new Date();
                      var formattedDate = today.toLocaleDateString('id-ID', options);
              
                      var tanggalHariIniElements = document.getElementsByClassName("tanggal-hari-ini");
                      for (var i = 0; i < tanggalHariIniElements.length; i++) {
                          tanggalHariIniElements[i].innerText = formattedDate;
                      }
                  });
              </script>
              
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>