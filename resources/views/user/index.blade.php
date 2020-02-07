@extends('layouts.app')
@section('content')
      <!--Start Dashboard Content-->
      <div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <!-- <h4 class="page-title">Form Validation</h4> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">you re logged in as user</a></li>
        </ol>
    </div>
 </div>
    <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-4">
        <div class="card">
        <div class="card-body">
            <p class="mb-0 "><span class="float-right badge badge-primary"></span></p>
            <div class="">
            <h4 class="mb-0 py-3 text-primary">${{number_format($user->account_balance->account_balance)}}</h4>
            </div>
            <div class="progress-wrapper">
                <div class="progress" style="height:5px;">
                <!-- <div class="progress-bar bg-primary" style="width:60%"></div> -->
                </div>
            </div>
            <p class="mb-0 mt-2 small-font">Current Balance</p>
            </div>
        </div>
        </div>


        <div class="col-12 col-lg-6 col-xl-4">

            <?php $bg_color = $user->status == 'active' ? 'badge-success' : 'badge-danger'; ?>
            <div class="card">
                <div class="card-body">
                    <p class="text-success mb-0"><span class="float-right badge {{$bg_color}}">{{($user->status)}}</span></p>
                    <div class="">
                    <h4 class="mb-0 py-3 text-success">{{(strtoupper($user->status))}}</h4>
                    </div>
                    <div class="progress-wrapper">
                        <div class="progress" style="height:5px;">
                        <div class="progress-bar bg-success" style=""></div>
                        </div>
                    </div>
                    <p class="mb-0 mt-2 small-font">Account Status</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-12 col-lg-6 col-xl-4">

            <div class="card">
            <div class="card-body">
                <p class="text-danger mb-0"><span class="float-right badge badge-danger">Deactivated</span></p>
                <div class="">
                <h4 class="mb-0 py-3 text-danger">55</h4>
                </div>
                <div class="progress-wrapper">
                    <div class="progress" style="height:5px;">
                    <div class="progress-bar bg-danger" style=""></div>
                    </div>
                </div>
                <p class="mb-0 mt-2 small-font">Total Disabled Accounts</p>
                </div>
            </div>
        </div> -->

    </div><!--End Row-->

  @endsection
