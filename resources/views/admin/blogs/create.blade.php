@extends('admin.layouts.app')

@section('content')

    <div class="col-md-10 content">
        <form method="POST" action="/admin/blogs" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Image</label>
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="inputEmail4">Description</label>
                    <textarea id='summernote' type="textarea" class="form-control" name="description"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>

@endsection
