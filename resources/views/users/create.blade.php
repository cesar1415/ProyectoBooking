@extends('layouts.main', ['activePage' => 'users', 'titlePage' => 'Nuevo usuario'])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('users.store')}}" method="get" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Usuario</h4>
                            <p class="card-category">Ingresar Datos</p>
                        </div>
                        {{-- BODY --}}
                        <div class="card-body">
                            {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                 <ul>
                                     @foreach ($errors->all() as $error)
                                     <li>{{$error}}</li>
                                     @endforeach
                                 </ul>
                                </div>
                            @endif --}}
                            <div class="row">
                                <label for="name" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{old('name')}}" autofocus>
                                    @if ($errors->has('name'))
                                    <span class="error text-danger" for="input-name">{{$errors->first('name')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="username" class="col-sm-2 col-form-label">Nombre de usuario</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="username" placeholder="Ingrese su usuario" value="{{old('username')}}" autofocus>
                                    @if ($errors->has('username'))
                                    <span class="error text-danger" for="input-username">{{$errors->first('username')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" placeholder="Ingrese su correo" value="{{old('emIL')}}" autofocus>
                                    @if ($errors->has('email'))
                                    <span class="error text-danger" for="input-email">{{$errors->first('email')}}</span>
                                    @endif
                                </div>
                            </div>
                            {{-- <div class="row">
                                <label for="text" class="col-sm-2 col-form-label">Descripcion</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="text" placeholder="Descripcion" autofocus>
                                </div>
                            </div> --}}
                            <div class="row">
                                <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña" autofocus>
                                    @if ($errors->has('password'))
                                    <span class="error text-danger" for="input-password">{{$errors->first('password')}}</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        {{-- END BODY --}}

                        {{-- FOOTER --}}
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
