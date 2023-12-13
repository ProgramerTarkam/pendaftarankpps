@extends('layout.layout')

@section('konten')

  <div class="container-fluid p-0 m-0">
    <div class="h-100 w-100 mx-auto align-items-center text-center d-flex justify-content-center" style="min-height: 100vh; background-image: url('https://i.postimg.cc/C1XjMGrv/ov-GYznfx-Ci-XCr-EGk-Kuk-Pw-H4-Bf-Ij-ULUBrbdm-AAAJW.webp'); background-repeat: no-repeat; background-size: cover; background-opacity: 0.1; background-blend-mode: overlay; ">
      @include('komponen.pesan')
      <main class="p-5 m-5 rounded" style="background-color: rgba(255, 255, 255, 0.7); background-opacity: 0.7;">
        <img src="https://i.postimg.cc/Qt2JQDDc/Desain-tanpa-judul-9.png" alt="" srcset="" style="max-width: 150px">
        <h1 class="fw-bold">SIP KPPS KALIPURO</h1>
        <p>Sistem Pendaftaran KPPS Resmi PPK Kalipuro</p>
        <p>
          <a href="/data/create" class="btn btn-lg btn-dark">Daftar KPPS</a>
        </p>
      </main>
    </div>
  </div>

@endsection