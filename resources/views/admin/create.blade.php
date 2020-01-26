@extends('layouts.admin')
@section('createuser')
active
@endsection
@section('content')
<br/>
    <div class="col-sm-8">
        <section class="panel panel-default">
            <header class="panel-heading font-bold">
                Register New User
            </header>
            <div class="panel-body">
                <form class="bs-example form-horizontal" data-validate="parsley" method="post" action="{{route('admin.store')}}">
                    {{csrf_field()}}
                    <div class="form-group {{ $errors->has('surname') ? ' is-invalid' : '' }}">
                        <label class="col-lg-2 control-label">Surname</label>
                        <div class="col-lg-10">
                            <input type="text" id="surname" name="surname"  data-required="true" class="form-control">
                            @if ($errors->has('surname'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('surname') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group {{ $errors->has('other_names') ? ' is-invalid' : '' }}">
                        <label class="col-lg-2 control-label">Other Names</label>
                        <div class="col-lg-10">
                            <input type="text" id="othernames" name="other_names" data-required="true"  class="form-control">
                            @if ($errors->has('other_names'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('other_names') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <div class="form-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
                        <label class="col-lg-2 control-label">Email</label>
                        <div class="col-lg-10">
                            <input type="email" id="email" name="email" data-required="true" class="form-control">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <div class="form-group {{ $errors->has('phone_number') ? ' is-invalid' : '' }}">
                        <label class="col-lg-2 control-label">Phone Number</label>
                        <div class="col-lg-10">
                            <input type="text" id="phone_number" name="phone_number" data-required="true" class="form-control">
                            @if ($errors->has('phone_number'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <div class="form-group {{ $errors->has('address') ? ' is-invalid' : '' }}">
                        <label class="col-lg-2 control-label">Address</label>
                        <div class="col-lg-10">
                            <textarea type="text" id="phone_number" name="address" data-required="true" class="form-control"> </textarea>
                            @if ($errors->has('address'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>

                    </div>
                    <div class="form-group {{ $errors->has('user_type') ? ' is-invalid' : '' }}">
                        <label class="col-lg-2 control-label">Type</label>
                        <div class="col-lg-10">
                            <select data-required="true" name="user_type" class="form-control m-t">
                                <option value="">Please choose</option>
                                <option value="admin">admin</option>
                                <option value="user">user</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-save"></i> Save Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    @endsection

