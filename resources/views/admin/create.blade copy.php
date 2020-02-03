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
            <form id="wizard-validation-form" name="wizard-validation-form" action="javascript:void(0)"  method="POST">
                    <div>
                        <h3>BIODATA CAPTURE</h3>
                        <section>
                            <div class="form-group">
                                <label for="surname2"> Surname *</label>
                                    <input id="surname2" name="surname" value="{{old('surname')}}" type="text" class="required form-control">
                            </div>
                            <div class="form-group">
                                <label for="name2"> Other names *</label>
                                    <input id="name2" name="other_names" value="{{old('other_names')}}" type="text" class="required form-control">
                            </div>

                            <div class="form-group">
                                <label for="email2">Email *</label>
                                <input id="email2" name="email" value="{{old('email')}}" type="text" class="required email form-control">
                            </div>

                            <div class="form-group">
                                <label for="email2">Phone Number *</label>
                                <input id="phone" name="phone_number" value="{{old('phone_number')}}" type="text" class="required phone form-control">
                            </div>

                            <div class="form-group">
                                <label for="address2">Address </label>
                                <input id="address2" name="address" value="{{old('address')}}" type="text" class="form-control">
                            </div>
                            <!-- <div class="form-group">
                                <label for="basic-select" class="col-sm-3 col-form-label">Select Role</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="user_type" id="basic-select">
                                        <option value="user">User</option>
                                        <option value="admin">Admin</option>

                                    </select>
                                </div>
                            </div> -->

                            <div class="form-group">
                                <label class="col-lg-12 control-label">(*) Mandatory</label>
                            </div>
                        </section>

                        <h3>ACCOUNT DETAILS</h3>
                        <section>
                            <div class="form-group">
                                <label for="userName2">User name </label>
                                <input class="required form-control" id="userName2" name="username" value="{{old('username')}}" type="text">
                            </div>
                            <div class="form-group">
                                <label for="password2"> Password *</label>
                                <input id="password2" name="password" type="password" class="required form-control">
                            </div>

                            <!-- <div class="form-group">
                                <label for="confirm2">Confirm Password *</label>
                                <input id="confirm2" name="confirm" type="text" class="required form-control">
                            </div> -->
                            <div class="form-group">
                                <label class="col-lg-12 control-label">(*) Mandatory</label>
                            </div>
                        </section>
                        <h3>BANK DETAILS</h3>
                        <section>
                            <div class="form-group">
                                <label for="account_title">Account Title*</label>
                                    <input id="account_title" name="account_name" type="text" value="{{old('account_name')}}" class="required form-control">
                            </div>
                            <div class="form-group">
                                <label for="account_number">Account Number*</label>
                                <input id="account" name="account_number" type="text" value="{{old('account_number')}}"  class="required account form-control">
                            </div>

                            <div class="form-group">
                                <label for="bank_name">Bank Name*</label>
                                    <input id="bank" name="bank_name" type="text" value="{{old('bank_name')}}" class="required form-control">
                            </div>
                            <div class="form-group">
                                <label for="email2">Swift Code *</label>
                                <input id="swift" name="swift_code" type="text"  value="{{old('swift_code')}}" class="required swift form-control">
                            </div>

                            <div class="form-group">
                                <label for="email2">Routing Number *</label>
                                <input id="routing" name="routing_number" type="text" value="{{old('routing_number')}}" class="required routing form-control">
                            </div>
                            <div class="form-group">
                                <label class="col-lg-12 control-label">(*) Mandatory</label>
                            </div>
                        </section>
                        <!-- <h3>Step Final</h3>
                        <section>
                            <div class="form-group">
                                <div class="col-lg-12">

                                <div class="icheck-material-white">
                                <input id="acceptTerms-2" name="acceptTerms2" type="checkbox" class="required">
                                    <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                </div>

                                </div>
                            </div>
                        </section> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
