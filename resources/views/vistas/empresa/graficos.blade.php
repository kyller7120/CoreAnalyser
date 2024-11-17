@extends('layouts.app')

@section('title')
Graficos de cuentas
@endsection

@section('content')
    <section class="section">
        <div class="section-header" style="display: flex; justify-content: center; align-items: center; padding:5px 10px;">
            <div style="display: flex; justify-content: center; align-items: center; padding: 0px 0px 10px 10px;">
                <a class="dropdown-item has-icon" style="padding: 5px 10px;background-color:#a4f88b;color:#ffffff;border-radius: 3px;">
                    <h4 class="page__heading" style="margin: 0px 0px 0px 0px;">Gráficas</h4>
                </a>
            </div>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped-columns">
                                <thead>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                    <th>Gráficos</th>
                                </thead>
                                <tbody>
                                    @foreach ($cuentas as $cuenta)
                                        <tr>
                                            <td> {{$cuenta->codigo}} </td>
                                            <td> {{$cuenta->nombre}} </td>
                                            <td class="index-botones">
                                                <a href="{{ route('graficoDeCuenta', $cuenta->id) }}"><button type="button" class="btn btn-info">Gráfico</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection