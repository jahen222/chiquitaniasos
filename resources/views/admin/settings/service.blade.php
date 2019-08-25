@extends('admin.layouts.app')

@section('content')
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

    <div class="col-md-10 col-lg-10 content">
        <form method="POST" action="/admin/settings/service/{{$setting->id}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <!-- Header -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <h3> Header </h3>
                </div>
                <div class="form-group col-md-6">
                    <h3> Max File Size: <span style="color: red;">2048</span> KB </h3>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">service_header_text</label>
                    <textarea id="service_header_text" type="text" class="form-control" name="service_header_text">{!!$setting->service_header_text!!}</textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> service_header_image.png</label>
                    <input type="file" class="form-control" name="service_header_image">
                </div>
                <div class="form-group col-md-3">
                    <img src="{{ $setting->service_header_image }}" width="60" height="60">
                </div>
            </div>
            <script type="text/javascript">
                $('#service_header_text').summernote({
                    tabsize: 2,
                    height: 100
                });
            </script>
            <!-- Intermediate -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Intermediate </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">service_intermediate_text</label>
                    <input type="text" class="form-control" name="service_intermediate_text" value="{!!$setting->service_intermediate_text!!}">
                </div>
            </div>
            <!-- Poligon -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Poligon </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> service_poligon_image.png</label>
                    <input type="file" class="form-control" name="service_poligon_image">
                </div>
                <div class="form-group col-md-3">
                    <img src="{{ $setting->service_poligon_image }}" width="60" height="60">
                </div>
            </div>
            <!-- Info -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Info </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">service_info_text</label>
                    <textarea id="service_info_text" type="text" class="form-control" name="service_info_text">{!!$setting->service_info_text!!}</textarea>
                </div>
            </div>
            <script type="text/javascript">
                $('#service_info_text').summernote({
                    tabsize: 2,
                    height: 100
                });
            </script>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
