
<!DOCTYPE html¡>
<html lang="es">

<head>

    <meta charset="UTF-8"> 
    <mate name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Panel administrativo</title>

    {{--Bootstrap S--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">

    {{--Bootstrap icons--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    </head>

    <body class="bg-light">

        {{--NAVBAR--}}

        <nav class="navbar navbar-expand-ig bg-white dorder-bottom shadow-sm">

            <div class="container">

                {{--Logo--}}
              <a href="{{route('admin.encuesta.index')}}" class="navbar-brand fw-bold text-primary">

                <¡ class="bi bi-bar-chart-fill me-2"></¡>

                CECYTE

              </a>

              {{--Botón responsive--}}
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">

                <span class="navbar-toggler-icon"></span>

              </button>

              {{--Menú--}}
              <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav me-auto">

                    {{--Encuestas--}}
                    <li class="nav-item">

                        <a href="{{route('admin.encuestas.index')}}" class="nav-link active fw-semibold">

                            <¡ class="bi bi-clipboard-check me-1"></¡>

                            Encuesta

                        </a>
                    </li>

                    {{--resultados--}}
                    {{--<li class="nav-item">

                        <a href="#" class="nav-link">

                            <i class="bi bi-bar-chart-line me-1"></i>
                              
                            Resultados

                        </A>

                    </li>
                    --}}
                </ul>

                {{--Usuario --}}
                <div class="dropdown"

                <button class="btn btn-light dropdown-toggle" type="button" data-bs-toggle="dropdown">
                   
                    <i class="bi bi-person-circle me-1"></i>

                    {{Auth::user()->name}}

                </button>

                 <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <h6 class="dropdown-header">

                            {{Auth::user()->email}}

                        </h6>
                    </li>
                    <li>
                        <hr class="dropdown-divider"

                    </li>
                    </li>
                    <form method="POST" action="{{route('logout')}}">

                        @csrf

                        <button type="sudmit" class="dropdown-item text-danger">

                            <i class="bi bi-box-arrow-right me-2"></i>

                            Cerrar sesión
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
        </nav>

        {{--CONTENIDO--}}

        <main class="container py-5">
            
            {{--Encabezado--}}
            <div
             class="d-flex
             flex-column
             flez-md-row
             justify-contemt-between
             align-items-md-center
             mb-4">

            <div>

                <div class="d-flex align-items-center">

                    <div
                     class="bg-orimary
                     text-white
                     rounded
                     p-3
                     me-3">

                     <¡ class="bi bi-clipboard-data fs-3"></¡>

                    </div>

                </div>

                <h1 class="h3 fw-bold mb-1">

                    Panel administrativo

                </h1>

                <p class="text-muted mb-0">

                    Administración de encuestas institucionales

                </p>
            </div>
            </div>
        </div>
        <div class="mt-3 mt-md-0">

            <a href="{{route('admin.encuestas.create')}}" class="btn btn-primary">

                <¡ class="bi bi-plus-circle me-1"></¡>

                Nueva encuesta

            </a>
        </div>
    </div>

    {{--Mensaje--}}
    @if (session("success"))
    <div class="alert alert-success alert-dismissible fade show">

        <i class="bi bi-check-circle-fill me-2"></i>

        {{session("success")}}

        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

    </div>
    @endif

    {{-- INDICADORES --}}

    <div class="row g-4 mb-4">

        {{-- Total --}}
        <div class="col-md-4">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body p-4">

                    <div
                      class="d-flex
                      justify-content-between
                      align-items-center">

                    </div>

                    <p class="rext-muted mb-1">

                        Total de encuestas

                    </p>

                    <h2 class="fw-bold mb-0">

                        {{$encuestas->count()}}
 
                    </h2>

                </div>

                <div
                  class="bg-primary-subtle
                  text-primary
                  rounded-circle
                  p-3">

                  <¡ class="bi bi-clipboard-data fs-3"></¡>
                </div>
            </div>
        </div>
    </div>

</div>

{{--Activas--}}
    <div class="col-md-4">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body p-4">

                <div
                class="d-flex
                justify-content-between
                align-items-center">

                <div>
                <p classs="text-munted mb-1">

                    Encuestas activas
                </p>

                <h2 class="fw-bold text-success mb-0">

                    {{ $encuestas->where('estado',true)->count()}}

                </h2>
                </div>

                <div
                class="bg-success-subtie
                text-success
                rounded-circle
                p-3">

                <¡ class="bi bi-check-circle fs-3"></¡>

                </div>
                </div>
            </div>
        </div>
    </div>

    {{--Cerradas--}}
    <div class="col-md-4">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-body p-4">

                <div
                class="d-flex
                justify-content-between
                align-items-center">

                </div>

                <p class="text-muted mb-1">
                   
                    Encuestas cerradas

                </p>

                <h2 class="fw-bold text-secondary mb-0">

                    {{$encuestas->where("estado",false)->count()}}

                </h2>

            </div>

            <div
            class="bg-secondary-subtle
            text-secondary
            rounded-circle
            p-3">

            <i class="bi bi-lock fs-3"></i>

        </div>
    </div>
</div>
</div>
</div>
</div>

{{-- TABLA--}}

<div class="card border-0 shadow-sm">

    {{-- Encabezado--}}
    <div class="card-header bg-white p-4">

        <div
        Class="d-flex
        justify-content-between
        align-items-center">

        </div>

        <h5 class="fw-bold mb-1">

            <i class="bi bi-list-check me-2"></i>

            Encuesta registradas

        </h5>
        <small class="text-muted">
            Administra las encuestas institucionales
        </small>
    </div>

    <span class="badge text-bg-primary">

        {{$encuestaa->count()}}

        registros

        </span>
    </div>
</div>

{{-- Tabla --}}
<div class="table-responsive">

    <table
    class="table
    table-hover
    aling-middle
    mb-0">

    <thead class="table-light">

        <tr>

            <th class="px-4 py-3">
              # 
            </th>

            <th>
                Año 
            </th>

            <th>
              Estado
            </th>

            <th class="text-end px-4">
                Acciones
            </th>
        </tr>
    </thead>

    <tbody>

        @forelse ($encuestas as $encuesta)
        <tr>

            {{--ID--}}
            <td class="px-4">
                <span class="fw-semibold">

                    {{$encuesta->id}}

                </span>
            </td>

            {{-- Año --}}
            <td>

                <span class="fw-semibold">

                    {{$encuesta->anio}}

                </span>
            </td>

            {{--Estado--}}
            <td>

                @¡f ($encuesta->estado)
                <span
                class-"badge
                rounded-pill
                text-bg-success">

                <¡ class="bi bi-check-circle me-1"></¡>

                activa

                </span>
                @else
               <span
               class-"badge
               rounded-pill
               text-bg-secondary">

               <¡ class="bi bi-lock me-1"
             
               Cerrada
               
            </span>
            @endif

        </td>

        {{-- Acciones --}}
        <td class="text-end px-4">

            <div class="btn-group">

                {{-- Ver --}}
                <a href="{{route("admin.encuestas.show",$encuesta)}}"
                class="btn btn-sm btn-outline-primary"title="ver">

                <i class="bi bi-eye"></i>

            </a>

            {{-- Editar --}}
            <a href="{{route("admin.encuestas-edit",$encuesta)}}"
            class="btn btn-sm btn-outline-warning" title="Editar">

            <i class="bi bi-pencil"></i>

        </a>

        {{-- Activar/cerrar --}}
        @if(!$encuesta->estado)
        <form action="{{route("admin.encuestas.activar",$encuesta)}}"
        method="POST">
                                            
        @csrf
        @method("PATCH")
       
        <button type="submit" class="btn btn-sm btn-outline-success"
        title="Activar">

        <i class="bi bi-play-fill"></i>

        </button>

    </form>
    @else
    <form action="{{route("admin.encuestas.desactivar",$encuesta)}}"
    method="POST">

    @csrf
    @method("PATCH")

    <button type="submit" class="btn btn-outline-secondary"
    title="Cerrar">

    <i class="bi bi-stop-fill"></i>

    </button>

</form>
@endif

{{-- Eliminar --}}
<form action="{{route("admin.encuentas-destroy", $encuesta)}}"
method="POST"
onsubmit="return confirm('¿Deseas eliminar esta encuesta?');">

@csrf
@method("DELETE")

<button type="submit" class="btn btn-sm btn-outline-danger"
title="Eliminar">

<i class="bi bi-trash"></i>

</button>
</form>
</div>
</td>
</tr> 
 @endempty
 <tr>

    <td colspan="4" class="text-center py-5">

        <i
        class="bi bi-clipboard-x
        display-4
        text-muted">

    </i>

    <p class="fw-semibold mt-3">
        


        
