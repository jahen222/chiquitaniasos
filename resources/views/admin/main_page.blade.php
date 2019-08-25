@extends('admin.layouts.app')

@section('content')

    <div class="col-md-10 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Dashboard
            </div>
            <div class="panel-body">
                Bienvenido <?php $user = Auth::user(); echo ($user->username);?>...
            </div>
        </div>
    </div>

    <script type="text/javascript">

        $(function () {
            $('.navbar-toggle-sidebar').click(function () {
                $('.navbar-nav').toggleClass('slide-in');
                $('.side-body').toggleClass('body-slide-in');
            });
        });

    </script>

@endsection
