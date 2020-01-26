@extends('layouts.app')
@section('passwordupdate')
active
@endsection

@section('content')
<br/>
    <div class="col-sm-8">
        <section class="panel panel-default">
        <header class="panel-heading font-bold">Password Update</header>
        <div class="panel-body">
            <form class="bs-example form-horizontal" action="{{route('user.update.password')}}"  id="passwordForm" method="POST">
                {{csrf_field()}}

                <!-- <div class="form-group">
                    <label class="col-lg-2 control-label">Current Password</label>
                    <div class="col-lg-10">
                        <input type="password" id="password" name="password"  class="form-control">
                    </div>
                </div> -->
                <div class="form-group {{ $errors->has('new_password') ? ' is-invalid' : '' }}">
                    <label class="col-lg-2 control-label">New Password</label>
                    <div class="col-lg-10">
                        <input type="password" id="new_password" name="new_password" value="{{ old('new_password') }}" class="form-control">
                        @if ($errors->has('new_password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('new_password') }}</strong>
                            </span>
                         @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('confirm_password') ? ' is-invalid' : '' }}">
                    <label class="col-lg-2 control-label">Confirm Password</label>
                    <div class="col-lg-10">
                        <input type="password" id="confirm_password" name="confirm_password" value="{{ old('confirm_password') }}" class="form-control">
                        @if ($errors->has('confirm_password'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('confirm_password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button type="submit"  id ="submitForm" name="submitForm" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save Data</button>
                    </div>
                </div>
            </form>
        </div>
        </section>
    </div>
    @endsection

