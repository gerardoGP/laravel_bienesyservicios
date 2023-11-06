@extends('layouts.main')
@section('title')
Postular
@endsection
@section('content')
<div class="overflow-x-auto mt-20">
    <h1 class="mb-8 text-4xl md:text-6xl font-bold leading-tight tracking-tighter text-neutral-800">Convocatoria de Bienes y Servicios</h1>
    <p class="text-black text-3xl mt-5 "><b>{{$post->type}}: </b>{{$post->description}}</p>
    <p class="text-black text-md mt-5"><b>Área Usuaria: </b>Dirección de Bienes Educativos de Extensión</p>
    <p class="text-black text-md mt-5"><b>Terminos de Referencia (TDR): </b><a target="_blank" title="Ver TDR completo" href="{{$post->url_pdf}}" class="text-blue-600 hover:text-blue-300 text-decoration-line:underline"><i class="fa fa-file-pdf"></i> TDR.pdf</a></p>
    <p class="text-black text-md mt-5"><b>Tiempo límite para presentar las cotizaciones: </b></p>
    <p class="text-black text-md mt-5"><b>Fecha de Inicio: </b>{{$post->start_date}}</p>
    <p class="text-black text-md mt-5"><b>Fecha de Fin: </b>{{$post->last_date}}</p>

    <form method="POST" class="grid-rows-6 m-2">
        <div class="space-x-4 ">
            <div class="border-b mt-10 border-gray-900/10 pb-12">
                <h2 class="text-base mt-10 font-semibold leading-7 text-gray-900">1. DATOS DEL PROVEEDOR</h2>
                <!-- <p class="mt-1 text-sm leading-6 text-gray-600">Ingrese los datos completos del proveedor.</p> -->
                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                        <label for="tip_doc" class="block text-sm font-medium leading-6 text-gray-900">Tipo de
                            Documento</label>
                        <div class="mt-2">
                            <input autocomplete="off" required type="text" name="tip_doc" id="tip_doc"
                                value="{{Auth::user()->type_doc}}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="num_doc" class="block text-sm font-medium leading-6 text-gray-900">Número del
                            Documento</label>
                        <div class="mt-2">
                            <input autocomplete="off" required type="text" name="num_doc" id="num_doc"
                                value="{{Auth::user()->nro_doc}}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="raz_soc" class="block text-sm font-medium leading-6 text-gray-900">Razón
                            Social</label>
                        <div class="mt-2">
                            <input autocomplete="off" required type="text" name="raz_soc" id="raz_soc"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                value="{{Auth::user()->raz_soc}}">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="cel_con" class="block text-sm font-medium leading-6 text-gray-900">Telefono de
                            contacto</label>
                        <div class="mt-2">
                            <input autocomplete="off" required type="text" name="cel_con" id="cel_con" autocomplete="given-name"
                                value="{{Auth::user()->phone}}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Correo de
                            contacto</label>
                        <div class="mt-2">
                            <input autocomplete="off" required type="email" name="mail_con" id="mail_con" autocomplete="given-name"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                value="{{Auth::user()->email}}">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="selDep"
                            class="block text-sm font-medium leading-6 text-gray-900">Departamento</label>
                        <div class="mt-2">
                            <select required id="selDep" name="selDep"
                                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                @if ($depas)
                                    @foreach ($depas as $depa)
                                        <option {{Auth::user()->depa == $depa->id ? "selected":""}} value="{{$depa->id}}">{{$depa->name}}</option>
                                    @endforeach
                                @else
                                    <option value="" hidden>No se encontraron datos</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="selProv"
                            class="block text-sm font-medium leading-6 text-gray-900">Provincia</label>
                        <div class="mt-2">
                            <select required id="selProv" name="selProv"
                                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                @if ($provs)
                                    @foreach ($provs as $prov)
                                        <option {{Auth::user()->depa == $prov->id ? "selected":""}} value="{{$prov->id}}">{{$prov->name}}</option>
                                    @endforeach
                                @else
                                    <option value="" hidden>No se encontraron datos</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="selDist"
                            class="block text-sm font-medium leading-6 text-gray-900">Distrito</label>
                        <div class="mt-2">
                            <select required id="selDist" name="selDist"
                                class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                @if ($dists)
                                    @foreach ($dists as $dist)
                                        <option {{Auth::user()->depa == $dist->id ? "selected":""}} value="{{$dist->id}}">{{$dist->name}}</option>
                                    @endforeach
                                @else
                                    <option value="" hidden>No se encontraron datos</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-6">
                        <label for="direc"
                            class="block text-sm font-medium leading-6 text-gray-900">Direccion</label>
                        <div class="mt-2">
                            <input autocomplete="off" required type="text" name="direc" id="direc" autocomplete="given-name"
                                value="{{Auth::user()->dire}}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>
                    </div>
                </div>
                <h2 class="text-base mt-10 font-semibold leading-7 text-gray-900">2. REQUISITOS</h2>
                <div class="mt-10 space-y-10">
                    <fieldset>
                        <legend class="text-sm font-semibold leading-6 text-gray-900">Para enviar una cotizacion debe de cumplir los siguientes requisitos</legend>
                        <div class="mt-6 space-y-6">
                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input required id="comments" name="comments" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="comments" class="font-medium text-gray-900">R.U.C vigente</label>
                                    <p class="text-gray-500">Requisito obligatorio.</p>
                                </div>
                            </div>
                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input required id="candidates" name="candidates" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="candidates" class="font-medium text-gray-900">Registro Nacional de Proveedores vigente</label>
                                    <p class="text-gray-500">Requisito obligatorio.</p>
                                </div>
                            </div>
                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input required id="offers" name="offers" type="checkbox"
                                        class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="offers" class="font-medium text-gray-900">No estar impedido de
                                        contratar con el Estado</label>
                                    <p class="text-gray-500">Requisito obligatorio.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <h2 class="text-base mt-10 font-semibold leading-7 text-gray-900">3. ARCHIVOS FIRMADOS</h2>
                <input required
                    onchange="obtenerTamañoArchivo()"
                    class="block mt-5 w-full mb-5 text-xs text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    id="archivoRar" name="archivoRar" type="file">
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Enviar Documentos
            </button>
        </div>
        <br>
        <br>
    </form>
</div>
@endsection
