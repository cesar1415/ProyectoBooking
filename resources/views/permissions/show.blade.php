@extends('layouts.main', ['activePage' => 'permissions', 'titlePage' => 'Detalles del permiso'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Permisos</div>
            <p class="card-category">Vista detallada del permiso {{ $permission->name }}</p>
          </div>
          <!--body-->
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#">
                          <img src="{{ asset('/img/avatar.jpg') }}" alt="image" class="avatar">
                          <h5 class="title mt-3">{{ $permission->name }}</h5>
                        </a>
                        <p class="description">
                        {{ $permission->guard_name }} <br>
                        {{ $permission->created_at }}
                        </p>
                      </div>
                    </p>
                    <div class="card-description">
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam officia corporis molestiae aliquid provident placeat.
                    </div>
                  </div>
                </div>
              </div><!--end card user-->
            </div>
          </div>
          <div class="card-footer">
            <div class="button-container text-right">
              <a href="{{ route('permissions.index') }}" class="btn btn-sm btn-primary mr-3"> Volver </a>
              <a href="{{route('permissions.edit', $permission->id)}}" class="btn btn-sm btn-facebook"> Editar </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
