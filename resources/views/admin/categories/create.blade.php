@extends('admin.layouts.app')

@section('content')

    <div class="col-md-10 content">
        <form method="POST" action="/admin/categories" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Image</label>
                    <input type="file" class="form-control" name="image">
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
