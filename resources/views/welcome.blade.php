@extends('layouts.app')

@section('title')
Bienvenido
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Bienvenido</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <center><b><h5>CoreAnalyser - Sistema de Análisis</h5></b></center>
                            <br>
                            <center><img src="{{ asset('img/logo.png') }}" alt="logo" width="100" class="shadow-light"></center>
                            <br>
                            <center><h6>Integrantes</h6></center>
                            <br>
                            <center>                            
                                <table width="500">
                                    <tr>
                                        <th>Apellidos</th>
                                        <th>Nombres</th>
                                        <th>Carnet</th>
                                    </tr>
                                    <tr>
                                        <td>Guillén Cárcamo</td>
                                        <td>Esther Eunice</td>
                                        <td>GC21025</td>
                                    </tr>
                                    <tr>
                                        <td>Pineda Reyes</td>
                                        <td>Braian Stalin</td>
                                        <td>PR17013</td>
                                    </tr>   
                                    <tr>
                                        <td>Sánchez Pocasangre</td>
                                        <td>Karen Stefany</td>
                                        <td>SP21013</td>
                                    </tr>
                                    <tr>
                                        <td>Sandoval Montoya</td>
                                        <td>Alejandro Antonio</td>
                                        <td>SM21008</td>
                                    </tr>
                                    <tr>
                                        <td>Parada Rivera</td>
                                        <td>Marlon Ernesto</td>
                                        <td>PR21058</td>
                                    </tr>
                                </table>
                            </center>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection