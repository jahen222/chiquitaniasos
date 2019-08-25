@extends('admin.layouts.app')

@section('content')

    <div class="col-md-10 content">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <td class="text-center"><strong>Id</strong></td>
                    <td class="text-center"><strong>Title</strong></td>
                    <td class="text-center"><strong>Thumbnail image</strong></td>
                    <td class="text-center"><strong>Options</strong></td>
                </tr>
                </thead>

                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td class="text-center">{{$blog->id}}</td>
                        <td class="text-center">{{$blog->title}}</td>
                        <td class="text-center"><img src="{{$blog->path_to_image}}" width="50" height="50"></td>
                        <td>
                            <form method="POST" action="/admin/blogs/{{$blog->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="blogs/{{$blog->id}}/edit" class="btn btn-primary">Edit</a>
                                <input type="submit" class="btn btn-danger delete-blog" value="Delete Post">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{$blogs->links()}}
    </div>

    <script>
        $('.delete-blog').click(function(e){
            e.prblogDefault()
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>

@endsection
