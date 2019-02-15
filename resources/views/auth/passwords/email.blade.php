@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col m8 offset-m2">
            <div class="card">
               <h2 class="center">Cambiar Contraseña</h2>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        

                            <div class="row">
                                <div class="input-field col s8   offset-s2">

                                <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required >
                                  <label for="email">Correo electronico</label>
                                </div>

                          

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                            </div>

                           

                        <div class="form-group row">
                            <div class="col s12 ">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Enviar') }}
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
