@section('modal')
<div id="estadoResultadoModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Estado de Resultados</h5>
                <button type="button" aria-label="Close" class="close outline-none" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <b><p>Descargar plantilla</p></b>
                <p>Para subir el estado de resultados de la empresa, puede hacer utilizando el siguiente archivo excel y llenándolo cómo se indica.</P>
                <a href="{{URL::signedRoute('catalogo.download')}}"><button type="button" class="btn btn-success">Descargar plantilla de excel</button></a>
                <br>
                <br>
                <b><p>Subir archivo</p></b>
                    <form action="{{route('upload_estados', $periodo_id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input class="form-control-file" id="archivo" type="file" name="archivo" accept=".xlsx" required>
                        <p>Formato admitido: xlsx</p>
                        <button disabled type="Upload" class="btn btn-primary" id="botonarchivo">Guardar</button>
                    </form>
            </div>{{----}}
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
    $("#archivo").change(function(){

        $("#botonarchivo").prop("disabled", this.files.length == 0);
    });
</script>
@endsection