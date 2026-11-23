<!DOCTYPE html>
<html lang="es">
<head>
    {{-- CONFIGURACION BASICA DE LA PAGINA  --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     {{-- ENLACE DE BOOTSTRAP --}}
  <link href  ="https://cdn.jsdelivr.net/npm
    <style>
      body
    </style>
    {{-- UNICAMENTE ESTILOS PERSONALIZADOS LA MAYOR PARTE DEL DISEÑO SE REALIZA CON BOOTSTRAP --}}
    body {
    background-color:#f4f7fd;
    }

/* fondo personalizado de la secciÓn principal */
    .hero {
    background: linear-gradient(135deg, #0b1f3a, #123f6d);

    }
/* color personalizado del botÓn */
    .btn-encuesta {
    background-color: #0d6efd;
    border-color: #0d6efd;
    color: white;
    }

.btn-encuesta:hover{
     background-color: #0956c7;
     border-color: #0956c7;
     color: white;
    }
    
*/color del numero de cada pregunta */
   .numero-pregunta {
    background-color: #eaf2ff;
    color: #0d6efd;
   width: 40px;
   height: 40px;
   }
  </style>

<head>

<body>

{{-- BARRA DE NAVEGACION --}}
<nav class= "navbar navbar-expand-ig bg-white border-bottom">
    
<div class="container"

 {{--nombre de la aplicacion--}}
 <a href="{{url ('/')}}" class="navbar-brand fw-bold text-primary">

    CECYTE

 </a>

{{--boton para dispositivo moviles--}}
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">

</button>

{{--opciones del menu--}}
<div class="collapse navbar-collapse" id="menu">

    <ul class="navbar-nav ms-auto">

     {{--enlace de inicio--}}
     <li class="nav-item">
       <a href="{{ url ('/') }}" class="nav-link">

         inicio

  </a>
 </li>
    
 {{--
    @guest muestra el enlace solamente    
    cuando el usuario no ha iniciado sesion.

--}}

@guest

<li class="nav-item"
 <a href="{{('login') }}" class="nav-link">
    
    INICIAR SESION 

 </a>
</li>

   @endguest

</ul>
</div>
</div>
</nav>

{{-- seccion principal--}}

<section class="hero text-white py-5">
 <div class="container py-5">
   <div class=" row justify-content-center text-center">
      <div class="col-ig-8">

{{--etiqueta--}}
<span class="badge bg-light text-primary rounded-pill px-3 py-2 mb-3">

  participacion estudiantil

</span>

{{--titulo--}}
<h1 class="display-4 fw-bold">

    tu opinion transforma

</h1>

{{--descripcion --}}
<p class="lead text-white-50 mt-3">

    ayudanos a conocer tu experiencia dentro de nuestra
    institucion. tus respuestas nos  permitiran identificar
    areas de oportunidad y continuar mejorando la calidad
    educativa y los servicios del cecyte.

</p>
</div>
 </div>
</div>
</section>

{{-- contenedor principal de la encuesta--}}

<main class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-ig-9">

    {{--
    
    la clase "mt-n5" permite colocar la tarjeta
    sobre la seccion anterior.

    --}}

<div class="card border-0 rounded-4 shadow-ig mt-n5 mb-5">

    {{-- encabezado de la encuesta--}}

<div class="card-body p-4 p-md-5">
 <h2 class="fw bold mb-2">
    encuesta de satifaccion
 </h2>

 <p class="text-secondary mb-4">
     selecciona la respuesta que mejor presente tu opinion.
 </p>

{{--FORMULARIO--}}

<form action="{{route('encuesta.store') }}" method="POST">

    {{-- protecció CSRF de laravel --}}
    @CSRF

    {{-- pregunta 1 --}}

    <div class="py-4 border-bottom">

        <div class="d- flex gap-3 align-items-start mb-3">

            {{-- Número de la pregunta --}}
            <div
                class="numero-pregunta rounded-3
                d-flex align-items-center
                justify-content-center
                flex-shrink-0 fw-bold">
        
          01
            </div>
          
         {{--pregunta--}}
         <label class="fw-semibold pt-2">
          ¿Que tan satisfecho estas con la calida educativa?
         </label>
        </div>
        <select class="form-select form-select-ig" name= "p1" required>
            <option value="">
             selecciona una respuesta
            </option>

        <option value="exelente">
            exelente
        </option>

        <option value="buena">
            buena 
        </option>

        <option value="regular">
            regular
        </option>

        <option value="mala">
            mala
        </option>
    </select>
</div>

{{-- pregunta 2--}}

<div class="py-4 border-bottom">

<div class="d-flex gap-3 align-items-start mb-3">
    <div

    class="numero-pregunta rounded-3
    d-flex align-items-center 
    justify-content-center
    flex-shrink-0 fw-bold">

02
    </div>

   <label class="fw-semibold pt-2">
     ¿como calificas el desempeño de los docenetes?
   </label>

</div>

select class="form-select form-select-ig" name="p2" requires>
<option value="">
    selecciona una respuesta
</option>

<option exelente>
  exelente
</option>

<option value="bueno">
    bueno
</option>

<option value="regular"
    regular
</option>

<option value="deficiente">
    deficiente
</option>
</select>
</div>

{{-- pregunta 3--}}

<div class="py-4 border-bottom">

   <div class="d-flex gap-3 align-items-star mb-3">
    <div
        class="numero-pregunta rounded-3
               d-flex align-items-center
               justify-content-center
               flex-shrink-0 fw-bold">

03
   </div>

<label class="fw-semibold pt-2">
    ¿como calificas las instalaciones?
</label>
   </div>

<select class="form-select form-select-ig" name="p3"required>
    <option value="">
        selecciona una respuesta
    </option>

    <option value="exelente">
        exelente
    </option>

    <option value="buena">
        buena
    </option>

    <option="regular"> 
        regular
</option>

<option="mala">
    mala
</option>
</select>
</div>

{{-- pregunta 4--}}

<div class="py-4 border-bottom">

<div clas="d-flex gap-3 align-items-star mb-3">
<div
   class="numero-pregunta rounded-3
   d-flex align-items-center
   justify-content-ceneter
   flex-shrink-0 fw-bold">

04
</div>

<labrl class="fw-semibold pt-2">
    ¿que tan satisfecho estas con los laboratorios?
</label>
</div>

<select class="form-select form-select-ig" name="p4" required>

<option value="">
    selecciona una respuesta
</option>

<option value="muy satisfecho">
    muy satisfecho
</option>

<option value="satisfecho">
    satisfecho
</option>

<option value="poco satisfecho">

    poco satisfecho

</option>

<option value=" insatisfecho">

    insatisfecho

</option>

</select>

</div>


{{-- pregunta 5--}}

<div class="py-4 border-bottom">

  <div class="d-flex gap-3 align-items-star mb-3">

    <div
         class="numero-pregunta rounded-3
              d-flex align-items-center
              justify-content-center
              flex-shrink-0 fw-bold">

05

  </div>

  <label class="fw semibold pt-2">

    ¿la atencion administrativa es adecuada?

  </label>

  </div>

  <select class="form-select form-select-ig" name="p5" required>

    <option value="">

        selecciona una respuesta

    </option>

    <option value="si">

        si

    </option>

    <option value="parcialmente">

        parcialmente

    </option>

    <option value="no">

        no 

    </option>

  </select>

</div>

{{-- pregunta 6--}}

<div class="py-4 border-bottom">

    <div class="d-flex gap-3 align-items-star mb-3">

        <div
             class="numero-pregunta rounded-3
             d-flex align-items-center
             flex-shrink-0 fw-bold">

06

    </div>

<label class= "fw-semibold pt-2">

    ¿te sientes seguro dentro de la institución?

</label>

    </div>

<select class="form-select form-select-ig" name="p6" required>

    <option value="">

        selecciona una respuesta

    </option>

    <option value="si">

        si 

    </option>

    <option value="no">

        no 

    </option>

</select>

</div>

{{-- pregunta 7 --}}

<div class="py-4 border-bottom">

<div class="d-flex gap-3 align-items-star mb-3">

   <div

     class="numero-pregunta rounded-3
      d- flex align-items-center
     justify-content-center
     flex-shrink-0 fw-bold">

  07

 </div>

 <label class="fw-semibold pt-2">

    ¿Recomendarias estudiar en el cecyte?

 </label>

</div>

<select class="form-select form-select-ig" name="p7" required>

    <option value="">

        selecciona una respuesta

    </option>

    <option value="definitivamente si">

        Definitivamente si 

    </option>

    <option value="probablemente si">

        Probablemente si 

    </option>

    <option value="probablemente no">

        Probablemente no 

    </option>

    <option value="definitivamente no">

        Definitivamente no

    </option>

 </select>

</div>

{{-- pregunta 8 --}}

<div class="py-4">

    <div class="d-flex gap-3 align-items-star mb-3">

       <div

            class="numero-pregunta rouned-3
            d-flex align-items-center
            justify-content-center
            flex-shrink--0-bold">

       08

 </div>

 <label class="fw-semibold pt-2">

    ¿las actividades extracurriculares son suficientes?

 </label>

</div>

<select class="form-select form-select-ig" name="p8" required>

    <option value="">

        selecciona una respuesta

    </option>

    <option value="si">

        si 

    </option>

    <option value="no">

        no 

    </option>

    <option value="no estoy seguro">

        no estoy seguro 

    </option>

 </select>

</div>

{{-- Boton de envio --}}

<div class="text -center pt-3">

                         <butoon type="submit"
                        class="btn-encuesta btn-ig
                        rounded-3 px-5 fw-bold">

                     enviar mis respuestas

                 <aspan class="ms-2">

               </span>

           </button>

         </div>

        </form>

       </div>

      </div>

     </div> 

    </div>

</main>

{{-- PIE DE PAGINA --}}

<footer class=" text- center text-secondary py-4 small">
    CECYTE . Encuesta de Satifacció Institucional

</footer>

{{-- JAVASCRIPT DE BOOTSTRAP --}}

<script src="https://cdn.jsdelivr.net/pnm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</htm1> 



























      
