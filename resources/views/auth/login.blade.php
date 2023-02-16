<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body style="background-color: #eee;">
    <section class="p-md-4">
        <div class="container">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-6">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body">
                  <div class="row justify-content-center">
                    <div class="col-12 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-3">Login</p>
      
                      <form class="mx-1 mx-md-4" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example3c">Email</label>
                            <input type="email" id="form3Example3c" class="form-control" name="email"/>
                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">Password</label>
                            <input type="password" id="form3Example4c" class="form-control" name="password"/>
                            <strong class="text-danger">{{ $errors->first('password') }}</strong>

                          </div>
                        </div>
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg">Login</button>
                        </div>
                        <div class="text-center mb-3">
                          <span >Register Already ? </span><a href="{{ route('register') }}">Register Here</a>
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
</body>
</html>