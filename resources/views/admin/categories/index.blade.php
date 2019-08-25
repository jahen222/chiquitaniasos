@extends('admin.layouts.app')

@section('content')

    <div class="col-md-10 content">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td class="text-center"><strong>Id</strong></td>
                    <td class="text-center"><strong>Category</strong></td>
                    <td class="text-center"><strong>Thumbnail image</strong></td>
                    <td class="text-center"><strong>Options</strong></td>
                </tr>
                </thead>

                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td class="text-center">{{$category->id}}</td>
                        <td class="text-center">{{$category->name}}</td>
                        <td class="text-center"><img src="{{ asset($category->path_to_image) }}" width="50" height="50"></td>
                        <td>
                            <form method="POST" action="/admin/categories/{{$category->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="categories/{{$category->id}}/edit" class="btn btn-primary">Edit</a>
                                <input type="submit" class="btn btn-danger delete-category" value="Delete Category">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{$categories->links()}}
    </div>

    <script>
        $('.delete-category').click(function(e){
            e.preventDefault()
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>

@endsection
