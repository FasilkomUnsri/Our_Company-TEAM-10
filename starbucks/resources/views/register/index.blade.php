<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Registrasi</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <!-- Custom styles for this template -->
    <link href="bootstrap/bootstrap/css/login.css" rel="stylesheet">
  </head>
   
  <body class="img js-fullheight" style="background-image: url(images/resto.webp);">
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5">
            <h2 class="heading-section">Kelompok 10</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4">
            <div class="login-wrap p-0">
              <h3 class="mb-4 text-center">Silahkan isi form register</h3>
               <form action="/register" method="POST" class="signin-form">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Username" required value="{{ old('name') }}">
                  @error('name')

                  <div class="invalid-feedback">
                   {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
                   @error('email')
                       <div class="invalid-feedback">
                          {{ $message }}
                          </div>
                              
                          @enderror
                      </div>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="floatingPassword" placeholder="Password" required >
                  @error('password')
            
                  <div class="invalid-feedback">
                   {{ $message }}
                  </div>
                      
                  @enderror
              </div>
              <div class="form-group">
                <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="floatingPassword" placeholder="Konfirmasi Password" required >
              </div>
               

               <div class="form-group">
                  <button type="submit" class="form-control btn btn-primary submit px-3">Register</button>
                </div>
                <div class="form-group d-md-flex">
                  <small>Sudah ada Akun? silahkan <a href="/register" style="color: #fff">Login</a></small>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <script src="jquery/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="bootsrap/bootsrap/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    
  </body>
</html>

