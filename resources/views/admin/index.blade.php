@extends('adminlte::page')

@section('title', 'Dashboard Admin')
{{-- @section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection --}}
@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Administrador</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{Route('admin.home')}}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>430</h3>
                    <p>Postulaciones</p>
                </div>
                <div class="icon">
                    <i class="fa fa-solid fa-file-import"></i>
                </div>
                <a href="#" class="small-box-footer">Gestionar <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>130</h3>
                    <p>Proveedores</p>
                </div>
                <div class="icon">
                    <i class="fa fa-solid fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">Gestionar <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>1010</h3>
                    <p>Publicaciones</p>
                </div>
                <div class="icon">
                    <i class="fa fa-solid fa-folder"></i>
                </div>
                <a href="#" class="small-box-footer">Gestionar <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>2</h3>
                    <p>Categorias</p>
                </div>
                <div class="icon">
                    <i class="fa fa-solid fa-list"></i>
                </div>
                <a href="#" class="small-box-footer">Gestionar <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Postulaciones recientes</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <ul class="products-list product-list-in-card pl-2 pr-2" style="max-height:400px;overflow:auto">
                        <li class="item">
                            <div class="product-img">
                                <img src="{{asset('img/perfil.jpg')}}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Post 1342
                                    <span class="badge badge-warning float-right align-center">hace 30 min</span>
                                </a>
                                <span class="product-description">
                                    Garibay Palomino Gerardo Enrique
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="{{asset('img/perfil.jpg')}}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Post 1342
                                    <span class="badge badge-warning float-right align-center">hace 1 hora</span>
                                </a>
                                <span class="product-description">
                                    Dev Solutions
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="{{asset('img/perfil.jpg')}}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Post 1342
                                    <span class="badge badge-warning float-right align-center">hace 2 hora</span>
                                </a>
                                <span class="product-description">
                                    TIC Solbest S.A.
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="{{asset('img/perfil.jpg')}}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Post 1342
                                    <span class="badge badge-warning float-right align-center">hace 2 hora</span>
                                </a>
                                <span class="product-description">
                                    TIC Solbest S.A.
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="{{asset('img/perfil.jpg')}}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Post 1342
                                    <span class="badge badge-warning float-right align-center">hace 2 hora</span>
                                </a>
                                <span class="product-description">
                                    TIC Solbest S.A.
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="{{asset('img/perfil.jpg')}}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Post 1342
                                    <span class="badge badge-warning float-right align-center">hace 2 hora</span>
                                </a>
                                <span class="product-description">
                                    TIC Solbest S.A.
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="{{asset('img/perfil.jpg')}}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Post 1342
                                    <span class="badge badge-warning float-right align-center">hace 2 hora</span>
                                </a>
                                <span class="product-description">
                                    TIC Solbest S.A.
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="{{asset('img/perfil.jpg')}}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Post 1342
                                    <span class="badge badge-warning float-right align-center">hace 2 hora</span>
                                </a>
                                <span class="product-description">
                                    TIC Solbest S.A.
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="{{asset('img/perfil.jpg')}}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Post 1342
                                    <span class="badge badge-warning float-right align-center">hace 2 hora</span>
                                </a>
                                <span class="product-description">
                                    TIC Solbest S.A.
                                </span>
                            </div>
                        </li>
                        <li class="item">
                            <div class="product-img">
                                <img src="{{asset('img/perfil.jpg')}}" alt="Product Image" class="img-size-50">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Post 1342
                                    <span class="badge badge-warning float-right align-center">hace 2 hora</span>
                                </a>
                                <span class="product-description">
                                    TIC Solbest S.A.
                                </span>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                    <a href="javascript:void(0)" class="uppercase">View All Products</a>
                </div>
                <!-- /.card-footer -->
            </div>
        </div>
    </div>
</div>
@endsection
