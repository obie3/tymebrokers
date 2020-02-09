@extends('layouts.app')
@section('content')

<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <!-- <h4 class="page-title">Form Validation</h4> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">User</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Funds</a></li>
            <li class="breadcrumb-item active" aria-current="page">Transfer</li>
        </ol>
    </div>
    <div class="col-sm-3">
        <form id="otpform" action="javascript:void(0)" method="POST">
                {{csrf_field()}}
            <div class="doc-buttons">
                <button type="submit" id="otpBtn" class="btn btn-sm btn-success">Request Transaction OTP</button>
            </div>
        </form>
     </div>
 </div>
    <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <form id="transferForm" action="{{route('user.funds.transfer')}}" method="POST">
                {{csrf_field()}}
                    <h4 class="form-header text-uppercase">
                    <i class="fa fa-user-circle-o"></i>
                    Transfer Funds
                    </h4>
                    <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">Bank Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('bank_name')}}" id="bank_name" name="bank_name" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="input-2" class="col-sm-2 col-form-label">Beneficiary</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="beneficiary_name" value="{{old('beneficiary_name')}}" name="beneficiary_name" required>
                    </div>
                    </div>

                    <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">Beneficiary Account Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('beneficiary_account_number')}}" id="beneficiary_account_number" name="beneficiary_account_number" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="input-2" class="col-sm-2 col-form-label">Swift/BIC</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('swift_code')}}" id="swift_code" name="swift_code" required>
                    </div>
                    </div>

                    <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">Routing Number</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('routing_number')}}" id="routing_number" name="routing_number" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="input-2" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="address" value="{{old('address')}}" name="address" required>
                    </div>
                    </div>

                    <div class="form-group row">
                    <label for="input-1" class="col-sm-2 col-form-label">Amount</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('amount')}}" id="amount" name="amount" required>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="input-2" class="col-sm-2 col-form-label">One Time Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('otp')}}" id="otp" name="otp" required>
                         <input type="hidden" name="type" value="{{'transfer'}}" class="form-control">

                    </div>
                    </div>

                    <div class="form-footer">
                        <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i>CONFIRM TRANSACTION</button>

                    </div>
                </form>
                </div>
            </div>
            </div>
        </div><!--End Row-->
@endsection
