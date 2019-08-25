@extends('layouts.layout_carprojects')

@section('content')

    <!------ Welcome Wrapper Start ------>
    <div class="impl_welcome_wrapper impl_bottompadder80" style="background-color: black;">
        <div class="container">
              <!------ Search bar header ------>
              <div class="col-md-6 text-center search-panel">
                  <form action="{{ route('store') }}" method="POST">
                      <fieldset class="form-group">
                          <h3 for="search-box">Gracias por su compra. Visita nuestra tienda de nuevo. No olvides dar una reseña a los productos.</h3>
                          <h5 for="search-box">Por el momento serás redirigido a la página principal.</h5>
                      </fieldset>
                  </form>
              </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/jquery.js') }}"></script>
    <script type="text/javascript">

        // Redirect to main page after x miliseconds

        $(document).ready(function () {
            window.setTimeout(function () {
                location.href = "/";
            }, 8000);
        });

    </script>

@endsection
