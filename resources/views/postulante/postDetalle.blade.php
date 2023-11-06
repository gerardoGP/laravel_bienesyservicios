@extends('layouts.main')
@section('title')
Detalle Publicacion
@endsection
@section('content')
@php
    $estado = helperEstado::EstadoPost($post->id);
@endphp
<div class=" mt-20">
  <h1 class="mb-8 text-4xl md:text-6xl font-bold leading-tight tracking-tighter text-neutral-800">Convocatoria de Bienes y Servicios</h1>
  <p class="text-black text-3xl mt-5 "><b>{{$post->type}}: </b>{{$post->description}}</p>
    <p class="text-black text-md mt-5"><b>Área Usuaria: </b>Dirección de Bienes Educativos de Extensión</p>
    <p class="text-black text-md mt-5"><b>Fecha de Publicacion: </b>{{$post->created_at}}</p>
    <p class="text-black text-md mt-5"><b>Estado Actual: </b>{{$estado["message"]}} @php echo $estado["html"] @endphp</p>
    <p class="text-black text-md mt-5"><b>Terminos de Referencia (TDR): </b><a target="_blank" title="Ver TDR completo" href="{{$post->url_pdf}}" class="text-blue-600 hover:text-blue-300 text-decoration-line:underline"><i class="fa fa-file-pdf"></i> TDR.pdf</a></p>
    <p class="text-black text-md mt-5"><b>Las cotizaciones deberan de ser presentadas en el siguiente rango de tiempo: </b></p>
    <p class="text-black text-md mt-5"><b>Fecha de Inicio: </b>{{$post->start_date}}</p>
    <p class="text-black text-md mt-5"><b>Fecha de Fin: </b>{{$post->last_date}}</p>
    @if($estado["state"] == 1)
        <p class="mt-5">
            <button onclick='compartir("{{route('postDetalle',$post->id)}}")' type="button" title="Compartir esta publicacion" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-blue-300 font-sm rounded-sm text-md px-5 py-2 mt-20 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none">
                <i class="fa-regular fa-copy"></i> Compartir
            </button>
            <button onclick='postular("{{route('frmPostular',$post->id)}}")' title="Postular" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-blue-300 font-sm rounded-sm px-5 py-2 mt-20 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none">
                <i class="fa-solid fa-envelope"></i> Postular
            </button>
        </p>
        <hr class="mt-10">
        @if($post->type == "Servicio")
        <a href=""></a>
        @endif
        @if($post->type == "Bien")

        @endif
        <ul>
            <li>Leer la siguiente guia para postular correctamente (<a href="#" class="bg-blue-100 hover:text-blue-400">click aqui</a>)</li>
        </ul>
    @else
        <p class="text-red-600 text-md mt-5">{{$estado["message"]}}</p>
    @endif
</div>
<script>
    function compartir(url){
        // let url = `http://127.0.0.1:8000/post/${id}`;
        navigator.clipboard.writeText(url);
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon: 'success',
            title: 'Copiado al portapapeles'
        })
    }
    function postular(url){
        window.location = url
    }
</script>
@endsection
