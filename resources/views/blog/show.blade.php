@extends('layouts.layout_carprojects')

@section('content')
    <!------ Header Start Desktop------>
    <section class="curve_svg_blog d-none d-md-block">
        <div class="div_rounder_service">
            {!! $setting->blog_header_text !!}
        </div>
        <!------ Curve Start ---

        <svg id="curve_blog" data-name="Layer-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1416.99 148.01">
            <path class="cls-1" d="M0,280.8S283.66,59,608.94,163.56s437.93,150.57,808,10.34V309.54H0V280.8Z" transform="translate(0-135.53)"/>
        </svg>--->
    </section>

    <!------ Welcome Wrapper Start ------>
    <div class="impl_welcome_wrapper impl_bottompadder80" style="background-color: black;">
        <div class="container">
              <!------ Search bar header ------>
              <div class="row">
                  <div class="col-12">
                      <div class="impl_welcome_text">
                        <br><br><br><br>
                          <form action="" method="POST">
                              <fieldset class="form-group">
                                  <h2 for="search-box" style="text-align: center;">Quiero saber más</h2><br>
                                  <div class="impl_footer_subs">
                                      <input type="text" class="form-control" placeholder="Ingresa tu correo">
                                      <button class="foo_subs_btn"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                  </div>
                              </fieldset>
                          </form>
                      </div>
                  </div>
              </div>
        </div>
    </div>

    <div class="impl_bread_wrapper" style="padding: 250px 0px; background-image: url('{{asset($post->path_to_image)}}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                </div>
            </div>
        </div>
    </div>

    <!------ Blog section Start ------>
    <div class="impl_blog_wrapper impl_blog_page" style="background-color: white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div style="text-align: center;">
                        <img src="{{asset('/src/pedro/default_perfill.png')}}" alt="">
                        <br><br>
                        <h6  style="color: #5d5d5d !important;">lorem ipsum</h6>
                    </div>
                    <div style="text-align: center; padding-top: 60px;">
                        <span style="color: #5d5d5d !important;">Compartir</span>
                        <br /><br />
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}"><img src="{{asset('/src/pedro/blog-12.png')}}" alt=""></a>
                        <br /><br />
                        <a href="https://twitter.com/intent/tweet?text=my share text&amp;url={{Request::url()}}"><img src="{{asset('/src/pedro/blog-13.png')}}" alt=""></a>

                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="impl_blog_inner">
                        <div class="row">
                            <!--sidebar end-->
                            <div class="col-lg-12 col-md-12 impl_blog_section">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <!--blog1-->
                                        <div class="impl_blog_box single_blog" style="color: #5d5d5d !important;">
                                            <div class="impl_post_data">
                                                <h2 style="padding: 0px 0px 0px !important;"><a href="#" style="color: #5d5d5d !important;">{{$post->title}}</a></h2>
                                                <div class="impl_pst_info impl_toppadder10">
                                                    <div class="impl_pst_admin" style="padding-bottom: 30px !important;">
                                                        <span style="color: #5d5d5d !important;">admin</span>
                                                        <span style="color: #5d5d5d !important;">{{$post->created_at}}</span>
                                                    </div>
                                                </div>
                                                <p>{!!$post->description!!}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            @if (Auth::guest())
                                <div class="col-lg-12 col-md-12 text-center">
                                    <form action="">
                                        <fieldset class="form-group">
                                            <input disabled placeholder="Para comentar debes iniciar sesión." type="text" class="main-input" name="comment" style="color: #5d5d5d !important; border-bottom: 1px solid black !important;">
                                        </fieldset>
                                    </form>
                                </div>
                            @else
                                <div class="col-lg-12 col-md-12 text-center">
                                    <form action="/blog/{{$post->id}}/comments/add" method="POST">
                                        {{ csrf_field() }}
                                        <fieldset class="form-group">
                                            <input placeholder="Agrega un comentario..." type="text" class="main-input" name="comment" style="color: #5d5d5d !important; border-bottom: 1px solid black !important;">
                                        </fieldset>
                                    </form>
                                </div>
                            @endif
                        </div>
                        <?php foreach ($comments as $comment): ?>
                            <div class="row">
                                <div class="col-lg-3 col-md-3">
                                    <div style="text-align: center;">
                                        <img src="{{asset('/src/pedro/default_perfill.png')}}" alt="">
                                        <br><br>
                                        <h6  style="color: #5d5d5d !important;">{{$comment->created_at}}</h6>
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9">
                                    <div class="">
                                        <div class="row">
                                            <!--sidebar end-->
                                            <div class="col-lg-12 col-md-12 impl_blog_section">
                                                <div class="row">
                                                    <!--blog1-->
                                                    <?php $user = Auth::user(); ?>

                                                    <div class="impl_blog_box single_blog" style="color: #5d5d5d !important;">
                                                        <div class="impl_post_data">
                                                          @if (Auth::guest())
                                                              <h2 style="padding: 0px 0px 0px !important;"><a href="#" style="color: #5d5d5d !important;">{{$comment->user->email}}</a></h2>
                                                              <p>{{$comment->comment}}</p>
                                                          @else
                                                              <?php if ($user->id == $comment->user_id || $user->username == 'Admin'): ?>
                                                                  <a class="dropdown-toggle float-right" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: black;"></a>
                                                                  <div class="dropdown-menu">
                                                                    <button type="button" class="dropdown-item" data-toggle="modal" data-target="#exampleModal{{$comment->id}}">Editar</button>
                                                                    <form action="/comment/{{$comment->id}}/destroy" method="post">
                                                                      <input type="hidden" name="_method" value="delete" />
                                                                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                      <input class="dropdown-item delete-post" value="Eliminar"></input>
                                                                    </form>
                                                                  </div>
                                                                  <div class="modal fade" id="exampleModal{{$comment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                      <div class="modal-content">
                                                                        <div class="modal-header">
                                                                          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                          </button>
                                                                        </div>
                                                                        <form action="/comment/{{$comment->id}}/update" method="post">
                                                                            <input name="_method" type="hidden" value="PUT">
                                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                                            <div class="modal-body">
                                                                              <textarea name="comment" rows="8" cols="50">{{$comment->comment}}</textarea>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
                                                                              <button type="submit" class="btn btn-primary">Guardar</button>
                                                                            </div>
                                                                        </form>
                                                                      </div>
                                                                    </div>
                                                                  </div>
                                                              <?php endif; ?>
                                                              <h2 style="padding: 0px 0px 0px !important;"><a href="#" style="color: #5d5d5d !important;">{{$comment->user->email}}</a></h2>
                                                              <p>{{$comment->comment}}</p>
                                                          @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="color: black;" />
                        <?php endforeach; ?>
                        <div style="text-align: center;">
                          <a href="{{route('blog')}}"><img src="{{asset('/src/pedro/blog-11.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/jquery.js') }}"></script>
    <script>
        $('.delete-post').click(function(e){
            e.preventDefault()
            if (confirm('Are you sure?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });
    </script>
@endsection
