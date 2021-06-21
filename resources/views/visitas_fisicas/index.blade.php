{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')
<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitas Fisicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container"></div>
        <h4>Visitas Fisicas</h4>
            <div class="row">
                <div class="col-xl-12"> -->

                    <div class="card card-custom gutter-b">
									<div class="card-header flex-wrap py-3">
										<div class="card-title">
											<h3 class="card-label">Visitas Fisicas 
											<span class="d-block text-muted pt-2 font-size-sm">Buscador visitas fisicas</span></h3>
										</div>
										<div class="card-toolbar">
											<!--begin::Dropdown-->
											<div class="dropdown dropdown-inline mr-2">
												<button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24"></rect>
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3"></path>
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000"></path>
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>Export</button>
												<!--begin::Dropdown Menu-->
												<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
													<!--begin::Navigation-->
													<ul class="navi flex-column navi-hover py-2">
														<li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
																<span class="navi-text">Print</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
																<span class="navi-text">Copy</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
																<span class="navi-text">Excel</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
																<span class="navi-text">CSV</span>
															</a>
														</li>
														<li class="navi-item">
															<a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
																<span class="navi-text">PDF</span>
															</a>
														</li>
													</ul>
													<!--end::Navigation-->
												</div>
												<!--end::Dropdown Menu-->
											</div>
											<!--end::Dropdown-->
											<!--begin::Button-->
											<a href="{{route('visitas_fisicas.create')}}" class="btn btn-primary font-weight-bolder">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24"></rect>
														<circle fill="#000000" cx="9" cy="15" r="6"></circle>
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
													</g>
												</svg>
												<!--end::Svg Icon-->
											</span>Nuevo Registro</a>
											<!--end::Button-->
										</div>
                                        
									</div>
									<div class="card-body">
                                    <div class="table-responsive">
                        <table class="table">
						<div class="col-xl-12">
                                        <form action="{{route('visitas_fisicas.index')}}" method="get">
                                            <div class="form-row">
                                                <div class="col-sm-4 my-1">
                                                    <input type="text" class="form-control" name="texto" value="{{$texto}}">
                                                </div>
                                                <div class="col-auto my-1">
                                                    <input type="submit" class="btn btn-primary" value="Buscar">
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Año</th>
                                    <th>Numero de cedula</th>
                                    <th>Fecha de cedula</th>
                                    <th>Calle</th>
                                    <th>Colonia</th>
                                    <th>Alcaldia</th>
                                    <th>Cuenta catastral</th>
                                    <th>Uso</th>
                                    <th>Superficie del terreno</th>
                                    <th>Folio de solicitud</th>
                                    <th>Oficio de solicitud</th>
                                    <th>Referencia</th>
                                    <th>Realizo</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($visitas_fisicas)<=0)
                            <tr>
                                <td colspan="15">No hay resultados</td> 
                            </tr>
                            @else
                            @foreach ($visitas_fisicas as $visita_fisica)
                                <tr>
                                    <td>{{$visita_fisica->id}}</td>
                                    <td>{{$visita_fisica->año}}</td>
                                    <td>{{$visita_fisica->numero_de_cedula}}</td>
                                    <td>{{$visita_fisica->fecha_de_cedula}}</td>
                                    <td>{{$visita_fisica->calle}}</td>
                                    <td>{{$visita_fisica->colonia}}</td>
                                    <td>{{$visita_fisica->alcaldia}}</td>
                                    <td>{{$visita_fisica->cuenta_catastral}}</td>
                                    <td>{{$visita_fisica->uso}}</td>
                                    <td>{{$visita_fisica->superficie_del_terreno}}</td>
                                    <td>{{$visita_fisica->folio_de_solicitud}}</td>
                                    <td>{{$visita_fisica->oficio_de_solicitud}}</td>
                                    <td>{{$visita_fisica->referencia}}</td>
                                    <td>{{$visita_fisica->realizo}}</td>
                                    <td><a href="{{route('visitas_fisicas.edit',$visita_fisica->id)}}" class="btn btn-warning btn-sm">Editar</a> 
									<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$visita_fisica->id}}">
  										Eliminar
									</button>
									</td>
                                </tr>
								@include('visitas_fisicas.delete')
                            @endforeach
                            @endif
                            </tbody>
                        </table>
						{{$visitas_fisicas->setPageName($texto)}}
                    </div>
								</div>
								</span>Numero de registros {{$visitas_fisicas->total()}}</a>
								</div>
<!--                 </div>
            </div>
</body>
</html> -->@endsection

{{-- Scripts Section --}}
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>
@endsection
