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
                    <td class="text-center"><strong>Start date</strong></td>
                    <td class="text-center"><strong>End date</strong></td>
                    <td class="text-center"><strong>Options</strong></td>
                </tr>
                </thead>

                <tbody>
                @foreach($events as $event)
                    <tr>
                        <td class="text-center">{{$event->id}}</td>
                        <td class="text-center">{{$event->title}}</td>
                        <td class="text-center"><img src="{{$event->path_to_image}}" width="50" height="50"></td>
                        <td class="text-center">{{$event->start}}</td>
                        <td class="text-center">{{$event->end}}</td>
                        <td>
                            <form method="POST" action="/admin/events/{{$event->id}}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <a href="events/{{$event->id}}/edit" class="btn btn-primary">Edit</a>
                                <input type="submit" class="btn btn-danger delete-event" value="Delete Event">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        {{$events->links()}}
    </div>

    <script>
        $('.delete-event').click(function(e){
            e.preventDefault()
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>

@endsection
