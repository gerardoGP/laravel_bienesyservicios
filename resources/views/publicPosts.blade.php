@extends('layouts.main')
@section('title')
Convocatorias
@endsection
@section('content')
<div class="overflow-x-auto mt-20">
  <h1 class="mb-8 text-4xl md:text-6xl font-bold leading-tight tracking-tighter text-neutral-800">Convocatoria de Bienes y Servicios</h1>
  <i>Presentar las cotizaciones en fisico:</i>
  <p><b>Lugar:</b> Carretera de ingreso a Hualcara N° 260-270, San Vicente de Cañete, Perú</p>
  <i>Presentar las cotizaciones en digital:</i>
  <p><b>Horario de Atención:</b> Lunes a Viernes, 8am a 1pm y 2pm a 5pm</p>
  <p><b>Correo Electronico:</b> acontrataciones@undc.edu.pe</p>
  <p><b>Documentos a Enviar:</b></p>
  <p class=""><b>Nota:</b>  Las propuestas presentadas fuera del horario establecido por cada convocatoria, no será tomada en cuenta, sin lugar a reclamo.</p>
</div>
<div class="relative overflow-x-auto shadow-lg sm:rounded-sm mt-10">
  <div class="m-5">
    <div class="pb-5 bg-white dark:bg-gray-900">
      <label for="table-search" class="sr-only">Buscar</label>
      <div class="relative mt-1">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
              </svg>
          </div>
          <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-90 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="buscar por descripcion">
      </div>
    </div>
    <table class="w-full text-sm text-left text-gray-800 m-auto">
      <thead class="text-xs text-white uppercase bg-blue-900">
          <th class="py-2">N°</th>
          <th class="py-2">Descripcion</th>
          <th class="text-center py-2">Terminos De Referencia</th>
          <th class="text-center py-2">Inicio</th>
          <th class="text-center py-2">Fin</th>
          <th class="text-center py-2">Estado</th>
          <th class="text-center py-2">Compartir</th>
          <th class="text-center py-2">Detalle</th>
      </thead>
      <tbody>
        @if ($posts)
          @php $contador = 1; @endphp
          @foreach ($posts as $post)
          <tr class="hover:bg-blue-500 hover:text-white">
            <td >{{$contador}}</td>
            <td > {{$post->description}}</td>
            <td class="text-center"><a target="_blank" title="Ver TDR completo" href="{{$post->url_pdf}}" class="text-decoration-line:underline">
              <i class="fa fa-file-pdf"></i> TDR.pdf</a>
            </td>
            <td class="text-center">{{FormatoFecha::public_post($post->start_date)}}</td>
            <td class="text-center">{{FormatoFecha::public_post($post->last_date)}}</td>
            <td class="text-center">
                @php $estado = helperEstado::EstadoPost($post->id); @endphp
                @php echo $estado["html"] @endphp
            </td>
            <td class="text-center">
              <button type="button" onclick='compartir("{{route('postDetalle',$post->id)}}")' title="Compartir esta publicacion" class="text-white hover:bg-yellow-500 bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-sm text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none">
                <i class="fa-regular fa-copy"></i>
              </button>
            </td>
            <td>
                <button onclick="verDetallePost({{$post->id}})"  title="Ver detalles de la publicacion" class="text-white bg-blue-700 hover:bg-yellow-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-sm text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none">
                    {{-- <i class="fa-solid fa-envelope"></i> --}}
                    <i class="fa-regular fa-eye"></i>
                </button>
            </td>
          </tr>
          @php $contador ++; @endphp
          @endforeach
        @else
        <tr>
          <td class="text-center" colspan="7">No se encontraron datos</td>
        </tr>
        @endif
      </tbody>
    </table>
    <div class="mt-2">
      {{$posts->links()}}
    </div>
  </div>
</div>
<script>
  function verDetallePost(id){
    // window.location = `${url}`
    window.location.href = `/post/${id}`;
  }
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
</script>
@endsection
