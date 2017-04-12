@extends('fontend.master')
@section('title','Khôi phục mật khẩu')
@section('body')
<div class="row">
    <div class="col-md-12">
        <div class="resetpass">
            <h2 class="titleh2" style="color: red;font-size: 22px; border-bottom: 1px solid red;"><i class="fa fa-desktop" aria-hidden="true"></i>
                Khôi phục mật khẩu</h2>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-danger">
                                    Khôi phục
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endsection
