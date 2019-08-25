@extends('admin.layouts.app')

@section('content')
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

    <div class="col-md-10 col-lg-10 content">
        <form method="POST" action="/admin/settings/footer/{{$setting->id}}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <!-- Mail -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Mail </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">footer_youtube</label>
                    <input type="text" class="form-control" name="footer_youtube" value="{!!$setting->footer_youtube!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">footer_twitter</label>
                    <input type="text" class="form-control" name="footer_twitter" value="{!!$setting->footer_twitter!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">footer_instagram</label>
                    <input type="text" class="form-control" name="footer_instagram" value="{!!$setting->footer_instagram!!}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">footer_facebook</label>
                    <input type="text" class="form-control" name="footer_facebook" value="{!!$setting->footer_facebook!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">footer_phone</label>
                    <input type="text" class="form-control" name="footer_phone" value="{!!$setting->footer_phone!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">footer_email</label>
                    <input type="text" class="form-control" name="footer_email" value="{!!$setting->footer_email!!}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
