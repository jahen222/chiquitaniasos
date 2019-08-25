@extends('admin.layouts.app')

@section('content')

    <div class="col-md-10 content">
        <form method="POST" action="/admin/subcategories/{{$subcategory->id}}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Category</label>
                    <select name="category_id" class="form-control" required>
                        <option value="{{$subcategory->category->id}}">{{$subcategory->category->name}}</option>
                        @foreach($categories as $category)
                            <?php if ($subcategory->category->id != $category->id): ?>
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            <?php endif; ?>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input type="text" class="form-control" value="{{$subcategory->name}}" name="name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>

@endsection
