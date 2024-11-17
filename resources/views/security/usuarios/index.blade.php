@extends('layouts.app')

@section('title')
Usuarios
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Usuarios</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @can('crear-usuario')
                            <a class="btn" style="margin-bottom: 1rem; color:#ffffff; background-color: #ff3131; border-color: #ff3131" href="{{ route('usuarios.create')}}">Nuevo</a>
                            @endcan
                            
                            <table class="table table-striped-columns">
                                <thead>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>E-mail</th>
                                    <th>Empresa</th>
                                    <th>Rol</th>
                                    <th>Acciones</th>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{$usuario->id}}</td>
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->email}}</td>
                                            <td>{{$usuario->empresa->nombre}}</td>
                                            <td>
                                                @if(!@empty($usuario->getRoleNames()))
                                                    @foreach ($usuario->getRoleNames() as $rolName)
                                                        <h5><span class="badge badge-dark">{{$rolName}}</span></h5>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td class="index-botones">
                                                @can('editar-usuario')
                                                <div>
                                                    <a class="btn btn-info" href="{{route('usuarios.edit', $usuario->id)}}">Editar</a>
                                                </div>
                                                @endcan
                                                
                                                @can('borrar-usuario')
                                                {!! Form::open(['method'=>'DELETE', 'route' => ['usuarios.destroy', $usuario->id]]) !!}
                                                {!! Form::submit('Borrar', ['class'=>'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                                @endcan
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagintion justify-content-end">
                                {!! $usuarios->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection