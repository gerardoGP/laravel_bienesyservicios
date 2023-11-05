<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 w-auto" src="./img/undc-ico.png" alt="UNDC">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Registrarse</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="{{route('registerPost')}}" method="POST">
            @csrf
            <div>
              <label for="razon_social" class="block text-sm font-medium leading-6 text-gray-900">Razon Social o Apellidos y Nombres</label>
              <div class="mt-2">
                <input id="razon_social" name="razon_social" value="{{old('razon_social')}}" type="text" autocomplete="off" required 
                  class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
              @error('razon_social')
                <p class="text-sm text-red-600 leading-6">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label for="numero_documento" class="block text-sm font-medium leading-6 text-gray-900">Numero de RUC</label>
              <div class="mt-2">
                <input id="numero_documento" name="numero_documento" value="{{old('numero_documento')}}" type="text" pattern="[0-9]+" autocomplete="off" required
                  class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
              @error('numero_documento')
                <p class="text-sm text-red-600 leading-6">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label for="celular" class="block text-sm font-medium leading-6 text-gray-900">Telefono o Celular</label>
              <div class="mt-2">
                <input id="celular" name="celular" type="number" value="{{old('celular')}}" minlength="9" autocomplete="off" required 
                  class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
              @error('celular')
                <p class="text-sm text-red-600 leading-6">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo Gmail</label>
              <div class="mt-2">
                <input id="email" name="email" value="{{old('email')}}" type="email" autocomplete="off" required
                class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
              @error('email')
                <p class="mt-3 text-sm text-red-600 leading-6">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label for="departamento" class="block text-sm font-medium leading-6 text-gray-900">Departamento</label>
              <div class="mt-2">
                <select name="departamento" id="departamento" required
                  class="block w-full rounded-md border-0 py-2.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </select>
                @error('departamento')
                  <p class="text-sm text-red-600 leading-6">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div>
              <label for="provincia" class="block text-sm font-medium leading-6 text-gray-900">Provincia</label>
              <div class="mt-2">
                <select name="provincia" id="provincia" required
                  class="block w-full rounded-md border-0 py-2.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  <option value="" hidden>Departamento no seleccionado</option>
                </select>
              </div>
              @error('provincia')
                <p class="mt-3 text-sm text-red-600 leading-6">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label for="distrito" class="block text-sm font-medium leading-6 text-gray-900">Distrito</label>
              <div class="mt-2">
                <select name="distrito" id="distrito" required
                  class="block w-full rounded-md border-0 py-2.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  <option value="" hidden>Distrito no seleccionado</option>
                </select>
              </div>
              @error('distrito')
                <p class="mt-3 text-sm text-red-600 leading-6">{{$message}}</p>
              @enderror
            </div>
            <div>
              <label for="direccion" class="block text-sm font-medium leading-6 text-gray-900">Direccion</label>
              <div class="mt-2">
                <input id="direccion" name="direccion" type="text" autocomplete="off" required value="{{old('direccion')}}"
                  class="block w-full rounded-md border-0 py-1.5 px-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
              @error('direccion')
                <p class="mt-3 text-sm text-red-600 leading-6">{{$message}}</p>
              @enderror
            </div>
            <div>
              <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Registrar</button>
            </div>
          </form>
          <p class="mt-10 text-center text-sm text-gray-500">
            Ya tienes una cuenta ?
            <a href="{{route('login')}}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Clic aqui para iniciar sesion</a>
          </p>
        </div>
      </div>
  <script src="https://releases.jquery.com/git/jquery-3.x-git.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
  <script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
      }
    });
    $(document).ready(function(){
      $.get({
        url : "/ajax/departaments/all",
        type : "GET",
        dataType : "JSON",
        success: function(res){
          $("#departamento").append(`<option value="" hidden>Seleccione</option>`);
          res.forEach(element => {
            $("#departamento").append(`<option value="${element.id}">${element.name}</option>`)
          });
        }
      })
    })
    
    $("#departamento").change(function(event){
      const dep_id = event.target.value;
      $.get({
        url : `/ajax/provinces/${dep_id}`,
        dataType:'JSON',
        success:function(res){
          let html = "";
          if (res) {
            html += `<option value="" hidden>Seleccione</option>`;
            res.forEach((element)=>{
              html += `<option value="${element.id}">${element.name}</option>`;
            })
          }else{
            html = "<option value='' hidden>No se encontraron datos</option>"
          }
          $("#provincia").html(html)
        }
      })
    })
    $("#provincia").change(function(event){
      const prov_id = event.target.value;
      $.get({
        url : `/ajax/districts/${prov_id}`,
        dataType:"JSON",
        success: function(res){
          let html = "";
          if (res) {
            html += `<option value="" hidden>Seleccione</option>`;
            res.forEach((element)=>{
              html += `<option value="${element.id}">${element.name}</option>`;
            })
          }else{
            html = "<option value='' hidden>No se encontraron datos</option>"
          }
          $("#distrito").html(html)
        }
      })
    })
  </script>
</body>
</html>