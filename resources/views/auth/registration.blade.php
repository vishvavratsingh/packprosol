@extends('productsite.layout.mainlayout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Register</div>
                  <div class="card-body">
  
                      <form action="{{ route('register.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Contact Number</label>
                              <div class="col-md-6">
                                  <input type="text" id="Contact_number" class="form-control" name="Contat_number" required autofocus>
                                  @if ($errors->has('Contat_number'))
                                      <span class="text-danger">{{ $errors->first('Contat_number') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Company Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="company_name" class="form-control" name="company_name" required autofocus>
                                  @if ($errors->has('company_name'))
                                      <span class="text-danger">{{ $errors->first('company_name') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Website URL</label>
                              <div class="col-md-6">
                                  <input type="text" id="website_url" class="form-control" name="website_url" required autofocus>
                                  @if ($errors->has('website_url'))
                                      <span class="text-danger">{{ $errors->first('website_url') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Login Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="login_name" class="form-control" name="login_name" required autofocus>
                                  @if ($errors->has('login_name'))
                                      <span class="text-danger">{{ $errors->first('login_name') }}</span>
                                  @endif
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">Login Password</label>
                              <div class="col-md-6">
                                  <input type="text" id="login_password" class="form-control" name="login_password" required autofocus>
                                  @if ($errors->has('login_password'))
                                      <span class="text-danger">{{ $errors->first('login_password') }}</span>
                                  @endif
                              </div>
                          </div>
                          
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Conform Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div><div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Your Requirement</label>
                              <div class="col-md-6">
                                  <input type="password" id="your_requrement" class="form-control" name="your_requrement" required>
                                  <!-- @if ($errors->has('your_requrement')) -->
                                      <!-- <span class="text-danger">{{ $errors->first('your_requrement') }}</span> -->
                                  <!-- @endif -->
                              </div>
                          </div>

                          

  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>

<style>
    .login-form{
        margin-top: 100px !important;
        margin-left: -220px;
    }
</style>

@endsection