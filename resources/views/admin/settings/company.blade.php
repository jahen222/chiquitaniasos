@extends('admin.layouts.app')

@section('content')
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

    <div class="col-md-10 col-lg-10 content">
        <form method="POST" action="/admin/settings/company/{{$setting->id}}" enctype="multipart/form-data">
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
                    <label for="inputPassword4">name -> company_header_image.png</label>
                    <input type="file" class="form-control" name="company_header_image">
                </div>
                <div class="form-group col-md-3">
                    <img src="{{ $setting->company_header_image }}" width="60" height="60">
                </div>
            </div>
            <!-- Intermediate -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Intermediate </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">company_intermediate_text</label>
                    <input type="text" class="form-control" name="company_intermediate_text" value="{!!$setting->company_intermediate_text!!}">
                </div>
            </div>
            <!-- Poligon 1 -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Poligon 1 </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> company_poligon1_image.png</label>
                    <input type="file" class="form-control" name="company_poligon1_image">
                </div>
                <div class="form-group col-md-8">
                    <img src="{{ $setting->company_poligon1_image }}" width="60" height="60">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">company_poligon1_text1</label>
                    <textarea id="company_poligon1_text1" type="text" class="form-control" name="company_poligon1_text1">{!!$setting->company_poligon1_text1!!}</textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">company_poligon1_text2</label>
                    <textarea id="company_poligon1_text2" type="text" class="form-control" name="company_poligon1_text2">{!!$setting->company_poligon1_text2!!}</textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">company_poligon1_text3</label>
                    <textarea id="company_poligon1_text3" type="text" class="form-control" name="company_poligon1_text3">{!!$setting->company_poligon1_text3!!}</textarea>
                </div>
            </div>
            <script type="text/javascript">
                $('#company_poligon1_text1').summernote({
                    tabsize: 2,
                    height: 100
                });
            </script>
            <script type="text/javascript">
                $('#company_poligon1_text2').summernote({
                    tabsize: 2,
                    height: 100
                });
            </script>
            <script type="text/javascript">
                $('#company_poligon1_text3').summernote({
                    tabsize: 2,
                    height: 100
                });
            </script>
            <!-- Poligon 2 -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Poligon 2 </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> company_poligon2_image.png</label>
                    <input type="file" class="form-control" name="company_poligon2_image">
                </div>
                <div class="form-group col-md-8">
                    <img src="{{ $setting->company_poligon2_image }}" width="60" height="60">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">company_poligon2_text1</label>
                    <textarea id="company_poligon2_text1" type="text" class="form-control" name="company_poligon2_text1">{!!$setting->company_poligon2_text1!!}</textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">company_poligon2_text2</label>
                    <textarea id="company_poligon2_text2" type="text" class="form-control" name="company_poligon2_text2">{!!$setting->company_poligon2_text2!!}</textarea>
                </div>
            </div>
            <script type="text/javascript">
                $('#company_poligon2_text1').summernote({
                    tabsize: 2,
                    height: 100
                });
            </script>
            <script type="text/javascript">
                $('#company_poligon2_text2').summernote({
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
