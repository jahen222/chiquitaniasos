@extends('layouts.layout_carprojects')

@section('content')

    <!------ Welcome Wrapper Start ------>
    <div class="impl_welcome_wrapper impl_bottompadder80" style="background-color: black;">
        <div class="container">
              <!------ Search bar header ------>
              <div class="col-md-6 text-center search-panel">
                  <h1 class="bigger_header text-center">Cuenta</h1>

                  <br><br>

                  {{--Change username--}}
                  <div class="panel panel_without_border panel-default">
                      <div class="panel-heading text-center">
                          <h4 style="margin-top: 0">Usuario</h4>
                      </div>

                      <div class="panel-body">
                          <form class="form-horizontal" role="form" method="POST" action="{{ url('users/'.Auth::user()->id.'/update/username') }}">
                              {{ csrf_field() }}
                              {{ method_field('PUT') }}

                              <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                  <label for="name" class="col-md-4 control-label">Nuevo usuario</label>

                                  <div class="col-md-12">
                                      <input id="username" type="text" class="form-control" name="username" required>

                                      @if ($errors->has('username'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('username') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group">
                                  <div class="col-md-12 col-md-offset-4">
                                    <div class="impl_fea_btn">
                                        <button class="impl_btn" type="submit"><span class="impl_doller">Enviar</span><span class="impl_bnw">Enviar</span></button>
                                    </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>

                  <br><br>

                  {{--Change password--}}
                  <div class="panel panel_without_border panel-default">
                      <div class="panel-heading text-center">
                          <h4 style="margin-top: 0">Cambiar contraseña</h4>
                      </div>

                      <div class="panel-body">
                          <form class="form-horizontal" role="form" method="POST" action="{{ url('users/'.Auth::user()->id.'/update/password') }}">
                              {{ csrf_field() }}
                              {{ method_field('PUT') }}

                              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                  <label for="password" class="col-md-4 control-label">Contraseña</label>

                                  <div class="col-md-12">
                                      <input id="password" type="password" class="form-control" name="password" required>

                                      @if ($errors->has('password'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('password') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="password-confirm" class="col-md-4 control-label">Confirmar</label>

                                  <div class="col-md-12">
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                  </div>
                              </div>

                              <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                  <div class="impl_fea_btn">
                                      <button class="impl_btn" type="submit"><span class="impl_doller">Enviar</span><span class="impl_bnw">Enviar</span></button>
                                  </div>
                                </div>
                              </div>
                          </form>
                      </div>

                  </div>

                  <br><br>

                  {{--Change email--}}
                  <div class="panel panel_without_border panel-default">
                      <div class="panel-heading text-center">
                          <h4 style="margin-top: 0">Cambiar Email</h4>
                      </div>

                      <div class="panel-body">
                          <form class="form-horizontal" role="form" method="POST" action="{{ url('users/'.Auth::user()->id.'/update/email') }}">
                              {{ csrf_field() }}
                              {{ method_field('PUT') }}

                              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <label for="email" class="col-md-4 control-label">E-mail</label>

                                  <div class="col-md-12">
                                      <input id="email" type="email" class="form-control" name="email" required>

                                      @if ($errors->has('email'))
                                          <span class="help-block">
                                              <strong>{{ $errors->first('email') }}</strong>
                                          </span>
                                      @endif
                                  </div>
                              </div>

                              <div class="form-group">
                                <div class="col-md-12 col-md-offset-4">
                                  <div class="impl_fea_btn">
                                      <button class="impl_btn" type="submit"><span class="impl_doller">Enviar</span><span class="impl_bnw">Enviar</span></button>
                                  </div>
                                </div>
                              </div>
                          </form>
                      </div>
                  </div>

                  {{--Horizontal line--}}
                  <div class="horizontal_line"></div>

                  {{-- Delete your account!! --}}
                      <!--<div class="col-md-2 col-md-offset-9">
                          <div class="form-group">
                              <a class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete">
                                  Delete your account
                              </a>
                          </div>
                      </div>-->

                  {{-- Modal window with confirmation--}}
                  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                  <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                              </div>
                              <div class="modal-body">
                                  <h5>Your account will be destroyed permanently!! Remember, this procedure is irreversible.</h5>
                                  <h3><b>Are you sure you want to delete your account?</b></h3>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                  <a class="btn btn-danger btn-ok"
                                     onclick="getElementById('delete_form').submit()">
                                      Delete
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>


                  {{--Delete form--}}
                  <form id="delete_form" class="form-horizontal" role="form" method="POST" action="{{ url('users/'.Auth::user()->id.'/delete') }}">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                  </form>
              </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('src/impelcarhtml-101/js/jquery.js') }}"></script>
    <script>
        $('#confirm-delete').on('click', '.btn-ok', function(e) {
            var $modalDiv = $(e.delegateTarget);
            var id = $(this).data('recordId');
            $modalDiv.addClass('loading');
            setTimeout(function() {
                $modalDiv.modal('hide').removeClass('loading');
            }, 1000)
        });
    </script>

@endsection
