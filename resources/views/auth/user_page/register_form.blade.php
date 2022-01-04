
@include('front.message')
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-md-12  ">
            <div class="panel panel-default">

                <form class=" " method="POST" action="{{ route('register') }}" enctype="application/x-www-form-urlencoded">
                    {{ csrf_field() }}
                    <aside class="form_login_user_group_content">
{{--                        <div class="panel-heading">Register</div>--}}



                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-12 control-label">Name</label>

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <!----------------start  photo-->
                        <div class="input-group ">
                            <div class="custom-file">
                                {!! Form::label('photo',trans('admin.photo_user'),['class'=>'custom-file-label']) !!}
                                <input type="file" name="photo" accept="image/*" onchange="showMyImage(this)" class="custom-file-input" id="inputGroupFile02" />

                            </div>
                        </div>
                        <div>
                            <img id="thumbnil" style="width:20%; margin:10px;" src="{{url('')}}/default/user.png" alt="image"/>
                            <!----------------End photo-->
                        <div class="form-group">
                            <div class="col-md-12 col-md-offset-4">
                                <button type="submit" class="col-md-12  btn btn-outline-info">Register </button>

                               <br>   <br>
                                <a class="btn btn-primary  btn_login" href="{{url('auth/facebook')}}" > login   facebook </a>
                                <a class="btn btn-success  btn_login" href="{{url('auth/twitter')}}" > login   twitter </a>
                                <a class="btn btn-danger  btn_login" href="{{url('auth/google')}}" > login   google </a>
                                <a class="btn btn-dark  btn_login" href="{{url('auth/github')}}" > login   github </a>
                            </div>
                        </div>
                    </aside>
                </form>

            </div>
        </div>
    </div>
</div>
<br><br><br>