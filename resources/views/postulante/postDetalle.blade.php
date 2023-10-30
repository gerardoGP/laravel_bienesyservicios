@extends('layouts.main')
@section('title')
Detalle Publicacion
@endsection
@section('content')
<div class="overflow-x-auto mt-20">
  <h1 class="mb-8 text-4xl md:text-6xl font-bold leading-tight tracking-tighter text-neutral-800">Convocatoria de Bienes y Servicios</h1>
    <p class="text-black text-md mt-5"><b>Adquisición: </b>{{$post->description}}</p>
    <p class="text-black text-md mt-5"><b>Área Usuaria: </b>Dirección de Bienes Educativos de Extensión</p>
    <p class="text-black text-md mt-5"><b>Terminos de Referencia (TDR): </b><a target="_blank" title="Ver TDR completo" href="{{$post->url_pdf}}" class="text-blue-600 hover:text-blue-300 text-decoration-line:underline"><i class="fa fa-file-pdf"></i> TDR.pdf</a></p>
    <p class="text-black text-md mt-5"><b>Tiempo límite para presentar las cotizaciones: </b></p>
    <p class="text-black text-md mt-5"><b>Fecha de Inicio: </b>{{$post->start_date}}</p>
    <p class="text-black text-md mt-5"><b>Fecha de Fin: </b>{{$post->last_date}}</p>
    
    <button onclick="irPostular({{$post->id}})" title="Postular" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-blue-300 font-sm rounded-sm text-md px-5 py-2 mt-10 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none">
        <i class="fa-solid fa-right-to-bracket"></i> Postular
    </button>
  </div>

  <script>
    function irPostular(id){
        window.location.href= `/postular/${id}`
    }
  </script>
@endsection