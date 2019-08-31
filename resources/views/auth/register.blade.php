@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-primary">
                <div class="card-header text-white bg-primary">{{ __('Registro') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Nombre') }}</label>
                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--apoellidos-->
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="paterno" class="col-form-label">{{ __('Apellido Paterno') }}</label>
                                <input id="paterno" type="text" class="form-control @error('paterno') is-invalid @enderror" name="paterno" value="{{ old('paterno') }}" required autocomplete="paterno" autofocus>
                                @error('paterno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                            <label for="materno" class="col-form-label text-md-left">{{ __('Apellido Materno') }}</label>
                                <input id="materno" type="text" class="form-control @error('materno') is-invalid @enderror" name="materno" value="{{ old('materno') }}" required autocomplete="materno" autofocus>
                                @error('materno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--hasta aqui-->


                        <!--genero edada estado civil-->
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="genero" class="col-form-label">{{ __('Genero') }}</label>
                                <select class="form-control @error('genero') is-invalid @enderror" name="genero" id="genero" required autocomplete="genero" autofocus>
                                <option selected="true" disabled="disabled">Selecciona...</option>
                                @foreach ($genero as $item)
                                    <option value="{{$item->id}}">{{$item->genero}}</option>
                                  @endforeach
                                </select>
                                <!--<input id="genero" type="text" class="form-control @error('genero') is-invalid @enderror" name="genero" value="{{ old('genero') }}" required autocomplete="genero" autofocus>-->
                                @error('genero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                            <label for="edad" class="col-form-label text-md-left">{{ __('Edad') }}</label>
                                <input id="edad" type="text" class="form-control @error('edad') is-invalid @enderror" name="edad" value="{{ old('edad') }}" required autocomplete="edad" autofocus>
                                @error('edad')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-4">
                            <label for="edocivil" class="col-form-label text-md-left">{{ __('Estado Civil') }}</label>
                              <select class="form-control @error('edocivil') is-invalid @enderror" name="edocivil" id="edocivil" required autocomplete="edocivil" autofocus>
                              <option selected="true" disabled="disabled">Selecciona...</option>
                              @foreach ($estado as $item)
                                <option value="{{$item->id}}">{{$item->estado}}</option>
                              @endforeach
                            </select>
                                <!--<input id="edocivil" type="text" class="form-control @error('edocivil') is-invalid @enderror" name="edocivil" value="{{ old('edocivil') }}" required autocomplete="edocivil" autofocus>-->
                                @error('edocivil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <!--hasta aqui-->


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-left">{{ __('Confirm Password') }}</label>
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>



                      
						<!--valor de interes-->
                        <div id="app"> 
                        <div class="form-row">
                            <div class="form-group col-md-6">

                            <label for="interes" class="col-form-label">{{ __('Nivel Interes') }}</label>
                                <select v-on:change="changeItem($event)" class="form-control @error('interes') is-invalid @enderror" name="interes" id="interes" required autocomplete="interes" autofocus>                      
                                <option selected="true" disabled="disabled">Selecciona...</option>   
                              @foreach ($interes as $item)
                                <option value="{{$item->id}}">{{$item->nivel}}</option>
                              @endforeach
                            </select>
                                @error('interes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                            <label v-show="a" for="opcion" class="col-form-label">{{ __('Opcion') }}</label>
                            <select  v-show="b" class="form-control" name="opcion" id="opcion">
                                <option selected="true" disabled="disabled">Selecciona...</option>
                                <option value="Lic. En Derecho">Lic. En Derecho</option>
                                <option value="Lic. En Finanzas">Lic. En Finanzas</option>
                            </select>
                            <select v-show="c" class="form-control" name="opcion" id="opcion">
                            <option selected="true" disabled="disabled">Selecciona...</option>
                                <option value="Mtria. Admon. de Negocios">Mtria. Admon. de Negocios</option>
                                <option value="Mtria. Direccion de Proyectos">Mtria. Direccion de Proyectos</option>
                            </select>
                            </div>
                        </div>
                        </div>
                        <!--hasta aqui-->




                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Registrar') }}
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
