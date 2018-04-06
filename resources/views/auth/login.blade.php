@extends('layouts.app')

@section('content')
<div class="container" style="margin-top:120px">
    <div  class="text-center">
        <h1 class=""> Bienvenido - Iniciar Sesión </h1>
    </div>
    <div class="row justify-content-center" style="marging-top:20px" >                    
        <div class="col-md-6 ">
            <div class="card">
                <div class="card-body" >
                    <h2 class="text-center"><img src="../assets/img/logo.png" alt="" height="80px" width="80px"> </h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label text-md-right">
                                <i class="far fa-envelope fa-2x"></i></label>
                            <div class="col-md-8">      
                                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-2 col-form-label text-md-right"><i class="fas fa-unlock-alt  fa-2x"></i></label>
                            <div class="col-md-8">
                                <input id="password" placeholder="Contraseña" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-2">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Recordarme') }}                                  
                            </div>                             
                        </div>
                        <div class="form-group row ">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ingresar') }}
                                </button>
                            </div>
                        </div>

                
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
