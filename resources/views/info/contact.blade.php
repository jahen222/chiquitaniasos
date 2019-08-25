@extends('layouts.layout_carprojects')

@section('content')
  <!------ Header Start Desktop------>
  <section class="curve_svg_contact d-none d-md-block">
      <!------ Contact Wrapper Start ------>
      <div class="div_rounder_contact" style="opacity: 0.9;">
          <div class="col-lg-12 col-md-12">
              <h4>{!! $setting->contact_header_text !!}</h4>
          </div>
          <br>
          <form action="" method="POST">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="form-group">
                        <input type="text" name="first_name" class="form-control require" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control require" placeholder="Email" data-valid="email" data-error="Email should be valid." required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Teléfono" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="País" required>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                      <div class="form-group">
                          <textarea name="message" class="form-control" placeholder="Mensaje" rows="6"></textarea>
                      </div>
                      <div class="form-group" style="text-align: right; margin-right: 10px;">
                          <input type="hidden" name="form_type" value="contact">
                          <button type="button" class="impl_btn submitForm">Enviar</button>
                      </div>
                  </div>
              </div>
          </form>
      </div>
      <br>
      <br>
      <br>
      <div class="div_rounder_contact2" style="opacity: 0.9;">
        <div class="div_rounder_contact2_hijo">
            <a href="https://web.whatsapp.com/"><img src="{{ asset('src/pedro/contacto-05.png') }}" alt="Logo" class="img-fluid"></a>
        </div>
        <div class="div_rounder_contact2_hijo">
            <h1>{{$setting->footer_phone}}</h1>
        </div>
        <div class="div_rounder_contact2_hijo">
          <a href="https://web.telegram.org/"><img src="{{ asset('src/pedro/contacto-06.png') }}" alt="Logo" class="img-fluid"></a>
        </div>
      </div>
  </section>

@endsection
