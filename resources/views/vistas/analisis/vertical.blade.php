@extends('layouts.app')

@section('title')
Análisis vertical
@endsection

@section('content')
    <section class="section">
        <div class="section-header" style="display: flex; justify-content: center; align-items: center; padding:5px 10px;">
            <div style="display: flex; justify-content: center; align-items: center; padding: 0px 0px 10px 10px;">
                <a class="dropdown-item has-icon" style="padding: 5px 10px;background-color:#a4f88b;color:#ffffff;border-radius: 3px;">
                    <h4 class="page__heading" style="margin: 0px 0px 0px 0px;">Análisis vertical</h4>
                </a>
            </div>
        </div>
        {{-- <div class="section-header">
            <h3 class="page__heading">Analisis Vertical</h3>
        </div> --}}
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center">Seleccione los periodos</h3>
                            <br>

                            {!! Form::open([
                                'route'=>'vertical',
                                'method' => 'POST'
                                ]) !!}

                            <div class="flex">
                                <div class="contenedor_a col-xs-6 col-sm-6 col-md-6">
                                    <h4 class="mg_abajo_15">Selecciona el periodo 01</h4>
                                    {!! Form::select('periodo_1', $cuentas, null, [
                                        'class'=>'form-control'
                                    ]) !!}
                                </div>
    
                                <div class="contenedor_d col-xs-6 col-sm-6 col-md-6">
                                    <h4 class="mg_abajo_15">Selecciona el periodo 02</h4>
                                    {!! Form::select('periodo_2', $cuentas, null, [
                                        'class'=>'form-control'
                                    ]) !!}
                                </div>
                            </div>

                            <br>
                            <br>
                            @if ($cuentas->count() > 1)
                            {!! Form::submit('Calcular', [
                                'class' => 'btn btn-primary'
                            ]) !!}
                            @else
                            <div class="alert alert-danger" role="alert">
                                Primero debe ingresar periodos!
                              </div>                             
                            @endif

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection