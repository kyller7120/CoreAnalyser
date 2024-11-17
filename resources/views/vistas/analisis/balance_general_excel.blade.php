@extends('layouts.app')

@section('title')
Crear balance general
@endsection


@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Crear balance general | Excel</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            
                            @include('notificador_validacion')

                            {{-- @foreach ($cuenta_p as $cuentap)
                                {{$cuentap->cuenta}}
                            @endforeach --}}

                            <div class="row">
                                @if ($pasivo_patrimonio != $acredora)
                                    <div class="alert alert-warning alerta" role="alert">
                                        Su total de activos no coincide con sus total de patrimonios y pasivos, revise los datos!
                                    </div>   
                                @endif
                            </div>

                            <div class="flex">
                                <div class="contenedor_a col-xs-6 col-sm-6 col-md-6">
                                    <h4 class="mg_abajo_15">Acreedor</h4>
                                    
                                    @foreach ($cuentas_a as $cuenta)
                                        <div class="row mg_abajo_5">
                                            <div class="form-group">
                                            {!! Form::open(['url' => route('cuenta_periodo.store'), 'method' => 'POST']) !!}      
                                            {!! Form::hidden('cuenta_id', $cuenta->id, []) !!}
                                            {!! Form::hidden('periodo_id', $periodo_id, []) !!}
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <label for="total">{{$cuenta->nombre}}</label>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                {!! Form::number('total', isset($data[0][$cuenta->nombre]) ? $data[0][$cuenta->nombre] : null, [
                                                    'class' => 'sanji_balance form-control',
                                                    'min' => '0',
                                                    'step' => '0.01',
                                                    'disabled'=>'true',
                                                    'cuenta_id' => $cuenta->id,
                                                    'periodo_id' => $periodo_id
                                                ]) !!}

                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                    @endforeach


                                    @foreach ($cuenta_p as $cuentap)
                                        @if ($cuentap->cuenta->tipo == 1)
                                        <div class="row mg_abajo_5">
                                            <div class="form-group">
                                            {!! Form::open(['url' => route('cuenta_periodo.store'), 'method' => 'POST']) !!}
                                            {!! Form::hidden('cuenta_id', $cuentap->cuenta->id,[]) !!}
                                            {!! Form::hidden('periodo_id', $periodo_id, []) !!}
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <label for="total">{{$cuentap->cuenta->nombre}}</label>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                {!! Form::number('total', isset($data[0][$cuentap->cuenta->nombre]) ? $data[0][$cuentap->cuenta->nombre] : null, [
                                                    'class' => 'form-control',
                                                    'min' => '0',
                                                    'step'=>'0.01',
                                                    'disabled'=>'true',
                                                    'class' => 'sanji_balance form-control',
                                                    'id' => $cuentap->id,
                                                    'cuenta_id' => $cuentap->cuenta->id,
                                                    'periodo_id' => $periodo_id
                                                    ]) !!}
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                        @endif
                                    @endforeach
                                    <div class="row mg_abajo_5">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <p>Total de activos</p>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            {!! Form::text(null, $acredora, [
                                                'disabled'=>'true',
                                                'class' => 'form-control',
                                                'style' => 'background-color: #85ff61; color: white;'
                                            ]) !!}
                                        </div>
                                    </div>
                                </div>
                                {{-- ! fin acreedor --}}
    
                                <div class="contenedor_d col-xs-6 col-sm-6 col-md-6">
                                    <h4 class="mg_abajo_15">Deudor</h4>
                                    @foreach ($cuentas_d as $cuenta)
                                    <div class="row mg_abajo_5">
                                        <div class="form-group">
                                            {!! Form::open(['url' => route('cuenta_periodo.store'), 'method' => 'POST']) !!}
                                            {!! Form::hidden('cuenta_id', $cuenta->id) !!}
                                            {!! Form::hidden('periodo_id', $periodo_id) !!}
                                        </div>
                                
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <label for="total">{{ $cuenta->nombre }}</label>
                                        </div>
                                
                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            {!! Form::number('total', isset($data[0][$cuenta->nombre]) ? $data[0][$cuenta->nombre] : null, [
                                                'class' => 'form-control sanji_balance', // Eliminar la clase repetida
                                                'min' => '0',
                                                'step' => '0.01',
                                                'disabled'=>'true',
                                                'id' => null,
                                                'cuenta_id' => $cuenta->id,  // Esta línea no es válida para un input, usa data-* si es necesario
                                                'periodo_id' => $periodo_id
                                            ]) !!}
                                        </div>
                                
                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                           
                                        </div>
                                
                                        {!! Form::close() !!}
                                    </div>
                                @endforeach
                                
                                    @foreach ($cuenta_p as $cuentap)
                                        @if ($cuentap->cuenta->tipo == 0)
                                        <div class="row mg_abajo_5">
                                            <div class="form-group">
                                            {!! Form::open(['route'=>'cuenta_periodo.store','method'=>'POST']) !!}
                                            {!! Form::hidden('cuenta_id', $cuentap->cuenta->id, []) !!}
                                            {!! Form::hidden('periodo_id', $periodo_id, []) !!}
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <label for="total">{{$cuentap->cuenta->nombre}}</label>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                {!! Form::number('total', isset($data[0][$cuentap->cuenta->nombre]) ? $data[0][$cuentap->cuenta->nombre] : null, [
                                                    'class' => 'form-control',
                                                    'min' => '0',
                                                    'step'=>'0.01',
                                                    'disabled'=>'true',
                                                    'class' => 'sanji_balance form-control',
                                                    'id' => $cuentap->id,
                                                    'cuenta_id' => $cuentap->cuenta->id,
                                                    'periodo_id' => $periodo_id
                                                    ]) !!}
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                        @endif
                                    @endforeach
                                    <div class="row mg_abajo_5">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <p>Total pasivo contable</p>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            {!! Form::text(null, $deudora, [
                                                'disabled'=>'true',
                                                'class' => 'form-control',
                                                'style' => 'background-color: #85ff61; color: white;'
                                            ]) !!}
                                        </div>
                                    </div>

                                    <br>
                                    {{-- ! Patrimonio --}}

                                    @foreach ($cuentas_pa as $cuenta)
                                    <div class="row mg_abajo_5">
                                        <div class="form-group">
                                        {!! Form::open(['route'=>'cuenta_periodo.store','method'=>'POST']) !!}
                                        {!! Form::hidden('cuenta_id', $cuenta->id, []) !!}
                                        {!! Form::hidden('periodo_id', $periodo_id, []) !!}
                                        </div>
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <label for="total">{{$cuenta->nombre}}</label>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            {!! Form::number('total', isset($data[0][$cuenta->nombre]) ? $data[0][$cuenta->nombre] : null, [
                                                'class' => 'form-control',
                                                'min' => '0',
                                                'disabled'=>'true',
                                                'step'=>'0.01',
                                                'class' => 'sanji_balance form-control',
                                                'id' => null,
                                                'cuenta_id' => $cuenta->id,
                                                'periodo_id' => $periodo_id
                                                ]) !!}
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                    @endforeach
                                    @foreach ($cuenta_p as $cuentap)
                                        @if ($cuentap->cuenta->tipo == 2)
                                        <div class="row mg_abajo_5">
                                            <div class="form-group">
                                            {!! Form::open(['route'=>'cuenta_periodo.store','method'=>'POST']) !!}
                                            {!! Form::hidden('cuenta_id', $cuentap->cuenta->id, []) !!}
                                            {!! Form::hidden('periodo_id', $periodo_id, []) !!}
                                            </div>
                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                <label for="total">{{$cuentap->cuenta->nombre}}</label>
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                                {!! Form::number('total', isset($data[0][$cuentap->cuenta->nombre]) ? $data[0][$cuentap->cuenta->nombre] : null, [
                                                    'class' => 'form-control',
                                                    'min' => '0',
                                                    'step'=>'0.01',
                                                    'disabled'=>'true',
                                                    'class' => 'sanji_balance form-control',
                                                    'id' => $cuentap->id,
                                                    'cuenta_id' => $cuentap->cuenta->id,
                                                    'periodo_id' => $periodo_id
                                                    ]) !!}
                                            </div>
                                            <div class="col-xs-3 col-sm-3 col-md-3">
                                            
                                            </div>
                                            {!! Form::close() !!}
                                        </div>
                                        @endif
                                    @endforeach
                                    <div class="row mg_abajo_5">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <p>Total patrimonio contable</p>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            {!! Form::text(null, $patrimonio, [
                                                'disabled'=>'true',
                                                'class' => 'form-control',
                                                'style' => 'background-color: #85ff61; color: white;'
                                            ]) !!}
                                        </div>
                                    </div>

                                    <br>
                                    <br>

                                    <div class="row mg_abajo_5">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <p>Total pasivo y patrimonio contable</p>
                                        </div>
                                        <div class="col-xs-3 col-sm-3 col-md-3">
                                            {!! Form::text(null, $pasivo_patrimonio, [
                                                'disabled'=>'true',
                                                'class' => 'form-control',
                                                'style' => 'background-color: #85ff61; color: white;'
                                            ]) !!}
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <a class="btn" style="margin-left:1rem; color:#ffffff; background-color: #2b2b2b; border-color: #2b2b2b"  data-toggle="modal" data-target="#balanceGeneralModal">Cargar balance general | Excel</a>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    {!! Form::open(array('route'=>'balance_general_excel.store', $periodo_id, 'method'=>'POST')) !!}
                                    {!! Form::hidden('periodo_id', $periodo_id, []) !!}
                                    {!! Form::hidden('activo', $acredora, []) !!}
                                    {!! Form::hidden('pasivo', $deudora, []) !!}
                                    {!! Form::hidden('patrimonio', $patrimonio, []) !!}
                                    {!! Form::hidden('empresa_id', \Illuminate\Support\Facades\Auth::user()->empresa->id, []) !!}
                                    {!! Form::submit('Guardar balance general', [
                                        'class' => 'btn btn-primary'
                                    ]) !!}
                                    {!! Form::close() !!}
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <button class="btn btn-info" onclick="guardar()">Registrar todo</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@include('vistas.analisis.nuevo_balance')
@section('scripts')
<script src="{{asset('js/balance.js')}}" defer></script>
@endsection

{{-- <div class="form-group">
    {!! Form::open(['route'=>'cuenta_periodo.store','method'=>'POST']) !!}
    {!! Form::hidden('cuenta', $cuenta->id, []) !!}
    {!! Form::hidden('periodo_id', $periodo_id, []) !!}
    <label for="total">{{$cuenta->nombre}}</label>
    {!! Form::number('total', null, [
        'class' => 'form-control',
        'min' => '0',
        ]) !!}
    {!! Form::submit('Registrar', [
        'class'=>'btn btn-success'
        ]) !!}
    {!! Form::close() !!}
</div> --}}