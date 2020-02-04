@extends('layouts.app')
@section('content')
      <!--Start Dashboard Content-->
    <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-4">
        <div class="card">
        <div class="card-body">
            <p class="mb-0 "><span class="float-right badge badge-primary">NGN</span></p>
            <div class="">
            <h4 class="mb-0 py-3 text-primary">{{number_format($user->account_balance->account_balance)}}</h4>
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

	<!-- <div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header border-0">Recent Registrations -->
		  <!-- <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div> -->
		 <!-- </div>
	       <div class="table-responsive">
                <table class="table align-items-center table-flush">
                  <thead>
                   <tr>
                     <th>S/N</th>
                     <th>Name</th>
                     <th>Phone Number</th>
                     <th>Email</th>
                     <th>Status</th>
                     <th>Date</th>
                   </tr>
                   </thead>
                    <tbody>

                    </tbody>
                 </table>
               </div>
	   </div> -->
	 <!-- </div>
	</div>End Row -->
  @endsection
