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
    @include('komponen.pesan')
    
    <section>
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="https://i.postimg.cc/qqKLcVhL/Whats-App-Image-2023-11-27-at-19-39-01.jpg"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                      <form action="/sesi/login" method="POST">
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <i class="fas fa-cubes fa-2x me-3"></i>
                          <span class="h1 fw-bold mb-0">Login PPS</span>
                        </div>
      
            
                        <div class="form-outline mb-4">
                          <select class="form-select mb-3" aria-label="Default select example" name="name" required>
                            <option selected value="">Pilih Kelurahan / Desa</option>
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
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" id="form2Example17" class="form-control form-control-sm" name="password" placeholder="Tuliskan Password" autocomplete="off"/>
                        </div>
      
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                        </div>
                      </form>
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>