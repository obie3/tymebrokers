@extends('layouts.admin')
@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <!-- <h4 class="page-title">Form Validation</h4> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Users</a></li>
            <li class="breadcrumb-item active" aria-current="page">Registration</li>
        </ol>
    </div>
 </div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header text-uppercase">
            Register New User Account
            </div>
            <div class="card-body">
                 <form id="signupForm" method="POST" action="{{route('admin.store')}}">
                    {{csrf_field()}}
                        <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        User Profile
                        </h4>
                        <div class="form-group row">
                        <label for="input-10" class="col-sm-2 col-form-label">Surname</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="{{old('surname')}}" id="input-10" name="surname">
                        </div>
                        <label for="input-11" class="col-sm-2 col-form-label">Other Names</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="{{old('other_names')}}" id="input-11" name="other_names">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="input-12" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="{{old('username')}}" id="input-12" name="username">
                        </div>
                        <label for="input-13" class="col-sm-2 col-form-label">password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" id="input-13" name="password">
                        </div>
                        </div>
                        <h4 class="form-header text-uppercase">
                            <i class="fa fa-envelope-o"></i>
                            Contact Info & Bio
                        </h4>

                        <div class="form-group row">
                            <label for="input-14" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control"  value="{{old('email')}}" id="input-14" name="email">
                            </div>
                            <label for="input-16" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="{{old('phone_number')}}" id="input-16" name="phone_number">
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="input-16" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-16" name="phone_number">
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="input-17" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" rows="4" id="input-17">{{old('address')}}</textarea>
                            </div>
                        </div>

                        <!-- <h4 class="form-header text-uppercase">
                            <i class="fa fa-envelope-o"></i>
                            Bank Details
                        </h4>

                        <div class="form-group row">
                            <label for="input-18" class="col-sm-2 col-form-label">Bank Name</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" id="input-18" name="bank_name">
                            </div>
                            <label for="input-19" class="col-sm-2 col-form-label">Account Name</label>
                            <div class="col-sm-4">
                                <input type="text" name="account_name" class="form-control" id="input-19">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input-20" class="col-sm-2 col-form-label">Account Number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="input-20" name="account_number">
                            </div>

                            <label for="input-21" class="col-sm-2 col-form-label">Swift Code</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="input-21" name="swift_code">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input-22" class="col-sm-2 col-form-label">Routing Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="input-22" name="routing_number">
                            </div>
                        </div> -->
                        <div class="form-footer">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection
