@extends('Layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Silakan Registrasi</font></font></h1>
            <form action="/register" method="post">
                @csrf
             <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('nama') }}">
                <label for="floatingInput"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Name</font></font>
                @error('name')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                @enderror
                </label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is invalid @enderror" id="username" placeholder="User Name"  required value="{{ old('username') }}">
                <label for="floatingPassword"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">User name</font></font>
                 @error('username')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                @enderror
                </label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="nama@contoh.com"  required value="{{ old('email') }}">
                <label for="floatingInput"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alamat email</font></font>
                @error('email')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                @enderror
                </label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Kata sandi" required>
                <label for="floatingPassword"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kata sandi</font></font>
                @error('password')
                    <div class="invalid-feedback">
                       {{ $message }}
                    </div>
                @enderror
                </label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Register</font></font></button>
            </form>
            <small class="d-block text-center mt-3">Sudah punya akun? silahkan <a href="/login"> Login</a></small>
          </main>    
    </div>
</div>   
@endsection