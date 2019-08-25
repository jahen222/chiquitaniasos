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
                    <td class="text-center"><strong>Subcategory</strong></td>
                    <td class="text-center"><strong>Options</strong></td>
                </tr>
                </thead>

                <tbody>
                @foreach($subcategories as $subcategory)
                    <tr>
                        <td class="text-center">{{$subcategory->id}}</td>
                        <td class="text-center">{{$subcategory->category->name}}</td>
                        <td class="text-center"><img src="{{ asset($subcategory->category->path_to_image) }}" width="50" height="50"></td>
                        <td class="text-center">{{$subcategory->name}}</td>
                        <td>
                            <form method="POST" action="/admin/subcategories/{{$subcategory->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="subcategories/{{$subcategory->id}}/edit" class="btn btn-primary">Edit</a>
                                <input type="submit" class="btn btn-danger delete-subcategory" value="Delete Subcategory">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{$subcategories->links()}}
    </div>

    <script>
        $('.delete-subcategory').click(function(e){
            e.preventDefault()
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>

@endsection
