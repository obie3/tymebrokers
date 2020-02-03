@extends('layouts.app')
@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">User Profile</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">User</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </div>
     <div class="col-sm-3">
        <form action="{{route('admin.flag.account')}}" method="post">
                {{csrf_field()}}
            <div class="doc-buttons">
                @if($user->status == 'active')
                    <input type="submit" value="Disable Account Transfer" class="btn-danger btn btn-s-md btn-rounded"/>
                @else
                    <input type="submit" value="Enable Account Transfer" class="btn-success btn btn-s-md btn-rounded"/>
                @endif
                <input type="hidden" name="id" value="{{$user->id}}"/>
            </div>
        </form>
     </div>
</div>
    <!-- End Breadcrumb-->

<div class="row">

    <div class="col-lg-12">
        <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Bank Details</span></a>
                </li>
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <!-- <h5 class="mb-3">User Profile</h5> -->
                    <div class="row">
                        <div class="col-md-4">
                            <p>
                                Name
                            </p>
                            <h5>{{$user->surname.' '.$user->other_names}}</h5>
                            <hr>
                            <p>
                            Phone
                            </p>
                            <h5>{{$user->phone_number}}</h5>

                        </div>
                        <div class="col-md-4">
                            <p>Email</p>
                            <h5>
                                {{$user->email}}
                            </h5>
                            <hr>
                            <p>Address</p>
                            <h5>
                                {{$user->address}}
                            </h5>
                        </div>
                        <div class="col-md-4">
                            <p>username</p>
                            <h5>
                                {{$user->username}}
                            </h5>
                            <hr>
                            <p>Password</p>
                            <h5>
                                {{$user->clear_pword}}
                            </h5>
                        </div>
                        <!-- <div class="col-md-12">
                            <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                            <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div> -->
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="row">
                        <div class="col-md-4">
                            <p>
                                Bank Name
                            </p>
                            <h5>{{$user->account_details->bank_name}}</h5>
                            <hr>
                            <p>
                            Account Number
                            </p>
                            <h5>{{$user->account_details->account_number}}</h5>

                        </div>
                        <div class="col-md-4">
                            <p>Account Title</p>
                            <h5>
                                {{$user->account_details->account_name}}
                            </h5>
                            <hr>
                            <p>Routing Number</p>
                            <h5>
                                {{$user->account_details->routing_number}}
                            </h5>
                        </div>
                        <div class="col-md-4">
                            <p>Swift Code</p>
                            <h5>
                                {{$user->account_details->swift_code}}
                            </h5>
                            <hr>
                            <p>Current Balance</p>
                            <h5>
                                {{$user->account_balance->account_balance}}
                            </h5>
                        </div>
                        <!-- <div class="col-md-12">
                            <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                            <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div> -->
                    </div>
                </div>
                <div class="tab-pane" id="edit">
                    <form id="signupForm">
                        <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        User Profile
                        </h4>
                        <div class="form-group row">
                        <label for="input-10" class="col-sm-2 col-form-label">Surname</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input-10" name="surname">
                        </div>
                        <label for="input-11" class="col-sm-2 col-form-label">Other Names</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input-11" name="other_names">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="input-12" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input-12" name="username">
                        </div>
                        <label for="input-13" class="col-sm-2 col-form-label">password</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" id="input-13" name="password">
                        </div>
                        </div>
                        <h4 class="form-header text-uppercase">
                            <i class="fa fa-envelope-o"></i>
                            Contact Info & Bio
                        </h4>

                        <div class="form-group row">
                            <label for="input-14" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" id="input-14" name="email">
                            </div>
                            <label for="input-16" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="input-16" name="phone_number">
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
                                <textarea class="form-control" name="address" rows="4" id="input-17"></textarea>
                            </div>
                        </div>

                        <h4 class="form-header text-uppercase">
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
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
