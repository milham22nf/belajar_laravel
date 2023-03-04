@extends('Layouts.main')

@section('container')
<div class="row justify-con
tent-center">
    <div class="col-md-4">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{  sesssion('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Silakan masuk</font></font></h1>
            <form action="/Login" method="post">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"  id="floatingInput" placeholder="nama@contoh.com" autofocus required>
                <label for="floatingInput"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alamat email</font></font></label>
                @error('email')
                  <div class="ivalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Kata sandi" required>
                <label for="floatingPassword"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kata sandi</font></font></label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Login</font></font></button>
            </form>
            <small class="d-block text-center mt-3">Belum punya akun? silahkan <a href="/Register"> Registrasi</a></small>
          </main>    
    </div>
</div>   
@endsection