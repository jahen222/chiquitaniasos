@extends('admin.layouts.app')

@section('content')
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>

    <div class="col-md-10 col-lg-10 content">
        <form method="POST" action="/admin/settings/contact/{{$setting->id}}" enctype="multipart/form-data">
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
                    <label for="inputPassword4">contact_header_text</label>
                    <input type="text" class="form-control" name="contact_header_text" value="{!!$setting->contact_header_text!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">name -> contact_header_image.png</label>
                    <input type="file" class="form-control" name="contact_header_image">
                </div>
                <div class="form-group col-md-4">
                    <img src="{{ $setting->contact_header_image }}" width="60" height="60">
                </div>
            </div>
            <!-- Mail -->
            <div class="form-row">
              <div class="form-group col-md-12">
                  <h3> Mail </h3>
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">contact_mail_driver</label>
                    <input type="text" class="form-control" name="contact_mail_driver" value="{!!$setting->contact_mail_driver!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">contact_mail_host</label>
                    <input type="text" class="form-control" name="contact_mail_host" value="{!!$setting->contact_mail_host!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">contact_mail_port</label>
                    <input type="text" class="form-control" name="contact_mail_port" value="{!!$setting->contact_mail_port!!}">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputPassword4">contact_mail_username</label>
                    <input type="text" class="form-control" name="contact_mail_username" value="{!!$setting->contact_mail_username!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">contact_mail_password</label>
                    <input type="text" class="form-control" name="contact_mail_password" value="{!!$setting->contact_mail_password!!}">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPassword4">contact_mail_encryption</label>
                    <input type="text" class="form-control" name="contact_mail_encryption" value="{!!$setting->contact_mail_encryption!!}">
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
