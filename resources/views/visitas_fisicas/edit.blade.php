{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<div class="card card-custom gutter-b">
									<div class="card-header flex-wrap py-3">
										<div class="card-title">
											<h3 class="card-label">Editar Registro 
											<span class="d-block text-muted pt-2 font-size-sm">Ingrese los datos de la nueva visita fisica</span></h3>
										</div>

    
        <div class="col-xl-12">
            <form action="{{route('visitas_fisicas.update', $visitas_fisicas->id)}}" method="post">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="año">Año</label>
                    <input type="text" class="form-control" name="año" required maxlength="4" value="{{$visitas_fisicas->año}}">
                </div>
                <div class="form-group">
                    <label for="numero_de_cedula">Numero de cedula</label>
                    <input type="text" class="form-control" name="numero_de_cedula" required maxlength="10" value="{{$visitas_fisicas->numero_de_cedula}}">
                </div>
                <div class="form-group">
                    <label for="fecha_de_cedula">Fecha de cedula</label>
                    <input type="text" class="form-control" name="fecha_de_cedula" required maxlength="10" value="{{$visitas_fisicas->fecha_de_cedula}}">
                </div>
                <div class="form-group">
                    <label for="calle">Calle</label>
                    <input type="text" class="form-control" name="calle" required maxlength="80" value="{{$visitas_fisicas->calle}}">
                </div>
                <div class="form-group">
                    <label for="colonia">Colonia</label>
                    <input type="text" class="form-control" name="colonia" required maxlength="50" value="{{$visitas_fisicas->colonia}}">
                </div>
                <div class="form-group">
                    <label for="alcaldia">Alcaldia</label>
                    <input type="text" class="form-control" name="alcaldia" required maxlength="30" value="{{$visitas_fisicas->alcaldia}}">
                </div>
                <div class="form-group">
                    <label for="cuenta_catastral">Cuenta catastral</label>
                    <input type="text" class="form-control" name="cuenta_catastral" required maxlength="60" value="{{$visitas_fisicas->cuenta_catastral}}">
                </div>
                <div class="form-group">
                    <label for="uso">Uso</label>
                    <input type="text" class="form-control" name="uso" required maxlength="50" value="{{$visitas_fisicas->uso}}">
                </div>
                <div class="form-group">
                    <label for="superficie_del_terreno">Superficie del terreno</label>
                    <input type="text" class="form-control" name="superficie_del_terreno" required maxlength="20" value="{{$visitas_fisicas->superficie_del_terreno}}">
                </div>
                <div class="form-group">
                    <label for="folio_de_solicitud">Folio de solicitud</label>
                    <input type="text" class="form-control" name="folio_de_solicitud" required maxlength="10" value="{{$visitas_fisicas->folio_de_solicitud}}">
                </div>
                <div class="form-group">
                    <label for="oficio_de_solicitud">Oficio de solicitud</label>
                    <input type="text" class="form-control" name="oficio_de_solicitud" required maxlength="30" value="{{$visitas_fisicas->oficio_de_solicitud}}">
                </div>
                <div class="form-group">
                    <label for="referencia">Referencia</label>
                    <input type="text" class="form-control" name="referencia" required maxlength="15" value="{{$visitas_fisicas->referencia}}">
                </div> 
                <div class="form-group">
                    <label for="realizo">Realizo</label>
                    <input type="text" class="form-control" name="realizo" required maxlength="10" value="{{$visitas_fisicas->realizo}}">
                </div> 
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Guardar">
                    <input type="reset" class="btn btn-default" value="Cancelar">
                    <a href="javascript:history.back()">Ir a listado</a>
                </div>  
            </form>
        </div>
</div>  
</div>

@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection