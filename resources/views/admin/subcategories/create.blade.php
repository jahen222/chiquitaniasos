@extends('admin.layouts.app')

@section('content')
    <div class="col-md-10 content">
        <form method="POST" action="/admin/subcategories" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Category</label>
                    <select name="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name" required>
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
