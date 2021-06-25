@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">{{ __('Connexion') }}</h1>
                  </div>

                    <form class="user" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="col-md-8 offset-sm-2">
                        <div class="form-group">
                        <input style="border-radius: 50px;" id="email" type="email" value="{{ old('email') }}" name="email" required autocomplete="email" class="form-control form-control-user @error('email') is-invalid @enderror" placeholder="Entrer votre adresse mail"  autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div></div>
                        <div class="col-md-8 offset-sm-2">
                        <div class="form-group">
                        <input style="border-radius: 50px;" id="password" type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" placeholder="Votre mot de passe" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                        </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6 offset-sm-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    
                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>
    
                        
                        <div class="form-group row mb-0">
                          <div class="col-md-8 offset-sm-2">
                            <button type="submit" style="border-radius: 50px;" class="btn btn-primary btn-user btn-block">
                              {{ __('Connexion') }}
                            </button>
                          </div>
                          <div class="col-md-8 offset-xl-4">
                            @if (Route::has('password.request'))
                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  {{ __('Mot de passe oublié?') }}
                              </a>
                              @endif
                            </div>
                  </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    
      </div>
    
    </div>
    
    </div>
@endsection
