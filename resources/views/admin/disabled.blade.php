@extends('layouts.admin')
@section('content')

<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <!-- <h4 class="page-title">Form Validation</h4> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Manage</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
    </div>
 </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> List of Disabled Transfers</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>AccountBalance</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td><a href="{{ route('admin.edit', $user->id) }}">{{$user->surname.' '.$user->other_names}}</a></td>
                            <td>{{$user->phone_number}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{number_format($user->account_balance->account_balance, 2)}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

@endsection
