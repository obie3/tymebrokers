@extends('layouts.app')
@section('dashboard')
active
@endsection
@section('content')
<br/>
<section class="vbox">
    <section class="scrollable bg-white">
        <div class="wrapper-lg bg-light">
            <div class="hbox">
                <aside class="aside-md">
                    <div class="text-center">
                        <img src="{{ url('/images/noimage.png') }}" width="200px" height="200px" alt="..." class="img-circle m-b">
                        <div>Current Balance</div>
                        <!-- <div class="">
                        <div class="progress progress-xs progress-striped active inline m-b-none bg-white" style="width:128px">
                            <div class="progress-bar bg-success" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                        </div>
                        </div> -->
                        <h3 class="font-bold m-b-none m-t-none">{{number_format($user->account_balance->account_balance, 2)}}</h3>
                    </div>
                </aside>
                <aside>
                <h3 class="font-bold m-b-none m-t-none">{{$user->surname.' '.$user->other_names}}</h3>
                <p>{{$user->email}}</p>
                <p><i class="fa fa-lg fa-circle-o text-primary m-r-sm"></i><strong>{{$user->user_type}}</strong></p>
                <ul class="nav nav-pills nav-stacked aside-lg">
                    <li class="bg-light dk"><a href="#"><i class="i i-phone m-r-sm"></i>{{$user->phone_number}}</a></li>
                    <li class="bg-light dk"><a href="#"><i class="i i-mail m-r-sm"></i> {{$user->email}}</a></li>
                    <li class="bg-light dk"><a href="#"><i class="i i-chat m-r-sm"></i>{{$user->address}}</a></li>
                    <li style="color:blue" class="bg-light dk "><a href="#"><i class="i i-mail m-r-sm"></i>{{$user->status}}</a></li>

                </ul>
                </aside>
            </div>
        </div>
        <ul class="nav nav-tabs m-b-n-xxs bg-light">

            <li class="active">
                <a href="#edit" data-toggle="tab" class="m-l">Deposit</a>
            </li>
            <li>
                <a href="#transfer" data-toggle="tab">Transfer</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane wrapper-lg active" id="edit">
                <form class="form-horizontal" action="{{route('user.update.account', $user->id)}}" method="post">
                    {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-3 control-label">Amount:</label>
                    <div class="col-sm-5">
                        <input type="text" name="amount" class="form-control">
                        <input type="hidden" name="id"  value="{{$user->id}}" class="form-control">
                        <input type="hidden" name="transaction_type"  value="{{'credit'}}" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="tab-pane wrapper-lg" id="transfer">
                     <!-- <div class="form-group"> -->
                        <div class="col-sm-offset-3 col-sm-5" id="msg_div">
                            <div class="alert alert-success d-none" style="display: inherit ">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <i class="fa fa-ok-sign"></i><strong>Success!</strong> OTP sent to your<a href="#" class="alert-link"> mail </a>.
                            </div>
                        </div>
                    <!-- </div> -->

                <form class="form-horizontal" action="{{route('user.funds.transfer')}}" method="post">
                    {{csrf_field()}}
                <div class="form-group ">
                </div>
                <div class="form-group ">
                    <label class="col-sm-3 control-label">Amount:</label>
                    <div class="col-sm-5">
                        <input type="text" name="amount" class="form-control">
                        <input type="hidden" name="id"  value="{{$user->id}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Recipient:</label>
                    <div class="col-sm-5">
                        <input type="text" name="recipient" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">OTP:</label>
                    <div class="col-sm-5">
                        <input type="text" name="otp" class="form-control">
                        <input type="hidden" name="type" value="{{'transfer'}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                        <button type="submit" class="btn btn-sm btn-danger">Submit</button>
                    </div>
                </div>
                </form>

                <form class="bs-example form-horizontal" id="otpform" action="javascript:void(0)" method="POST">

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" id="otpBtn" class="btn btn-sm btn-success">Request OTP</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>

@endsection
