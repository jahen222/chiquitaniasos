@extends('admin.layouts.app')

@section('content')
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

    <div class="col-md-10 col-lg-10 content">
        <form method="POST" action="/admin/settings/faq/{{$setting->id}}" enctype="multipart/form-data">
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
                    <label for="inputPassword4">faq_header_text</label>
                    <textarea id="faq_header_text" type="text" class="form-control" name="faq_header_text">{!!$setting->faq_header_text!!}</textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> faq_header_image.png</label>
                    <input type="file" class="form-control" name="faq_header_image">
                </div>
                <div class="form-group col-md-2">
                    <img src="{{ $setting->faq_header_image }}" width="60" height="60">
                </div>
            </div>
            <script type="text/javascript">
                $('#faq_header_text').summernote({
                    tabsize: 2,
                    height: 100
                });
            </script>
            <!-- Info -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Info </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">faq_div_text1</label>
                    <textarea id="faq_div_text1" type="text" class="form-control" name="faq_div_text1">{!!$setting->faq_div_text1!!}</textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">faq_div_text2</label>
                    <textarea id="faq_div_text2" type="text" class="form-control" name="faq_div_text2">{!!$setting->faq_div_text2!!}</textarea>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">faq_div_text3</label>
                    <textarea id="faq_div_text3" type="text" class="form-control" name="faq_div_text3">{!!$setting->faq_div_text3!!}</textarea>
                </div>
            </div>
            <script type="text/javascript">
                $('#faq_div_text1').summernote({
                    tabsize: 2,
                    height: 100
                });
            </script>
            <script type="text/javascript">
                $('#faq_div_text2').summernote({
                    tabsize: 2,
                    height: 100
                });
            </script>
            <script type="text/javascript">
                $('#faq_div_text3').summernote({
                    tabsize: 2,
                    height: 100
                });
            </script>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">faq_div_text4</label>
                    <textarea id="faq_div_text4" type="text" class="form-control" name="faq_div_text4">{!!$setting->faq_div_text4!!}</textarea>
                </div>
            </div>
            <script type="text/javascript">
                $('#faq_div_text4').summernote({
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
