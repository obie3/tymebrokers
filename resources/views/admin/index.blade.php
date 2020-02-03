@extends('layouts.admin')
@section('content')
      <!--Start Dashboard Content-->
    <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-4">
        <div class="card">
        <div class="card-body">
            <p class="mb-0 "><span class="float-right badge badge-primary">users</span></p>
            <div class="">
            <h4 class="mb-0 py-3 text-primary">{{number_format($users)}}</h4>
            </div>
            <div class="progress-wrapper">
                <div class="progress" style="height:5px;">
                <!-- <div class="progress-bar bg-primary" style="width:60%"></div> -->
                </div>
            </div>
            <p class="mb-0 mt-2 small-font">Total Registered Users</p>
            </div>
        </div>
        </div>


        <div class="col-12 col-lg-6 col-xl-4">
        <a href="{{route('admin.active.accounts')}}">
        <?php
            if($users == 0) {
                $percent  = 0;
            }
            else {
                $percent = ($activeAccounts / $users) * 100;
            }

        ?>

            <div class="card">
                <div class="card-body">
                    <p class="text-success mb-0"><span class="float-right badge badge-success">Active</span></p>
                    <div class="">
                    <h4 class="mb-0 py-3 text-success">{{number_format($activeAccounts)}}</h4>
                    </div>
                    <div class="progress-wrapper">
                        <div class="progress" style="height:5px;">
                        <div class="progress-bar bg-success" style="width:{{$percent}}%"></div>
                        </div>
                    </div>
                    <p class="mb-0 mt-2 small-font">Total Active Accounts</p>
                    </div>
                </div>
            </div>
        </a>

        <div class="col-12 col-lg-6 col-xl-4">
        <a href="{{route('admin.disabled.accounts')}}">
         <?php
            if($users == 0) {
                $percent  = 0;
            }
            else {
                $percent = ($disabledAccounts / $users) * 100;
            }
        ?>
            <div class="card">
            <div class="card-body">
                <p class="text-danger mb-0"><span class="float-right badge badge-danger">Deactivated</span></p>
                <div class="">
                <h4 class="mb-0 py-3 text-danger">{{number_format($disabledAccounts)}}</h4>
                </div>
                <div class="progress-wrapper">
                    <div class="progress" style="height:5px;">
                    <div class="progress-bar bg-danger" style="width: {{$percent}}%"></div>
                    </div>
                </div>
                <p class="mb-0 mt-2 small-font">Total Disabled Accounts</p>
                </div>
            </div>
            </a>
        </div>

    </div><!--End Row-->

	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header border-0">Recent Registrations
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
		 </div>
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
                    <?php $i = 0; ?>
                        @foreach($recentRecords as $user)
                        <?php $i++; $cls = $user->status == 'active' ? 'bg-success' : 'bg-danger'?>
                            <tr>
                                <td>{{$i}}</td>
                                <td><a href="{{ route('admin.edit', $user->id) }}">{{$user->surname.' '.$user->other_names}}</a></td>
                                <td>{{$user->phone_number}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <span class="badge-dot">
                                        <i class="{{$cls}}"></i> {{$user->status}}
                                    </span>
                                </td>

                                <td>{{$user->created_at}}</td>
                            </tr>
                        @endforeach

                    </tbody>
                 </table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->
  @endsection
