@extends('layouts.app')
@section('content')
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <!-- <h4 class="page-title">User Profile</h4> -->
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">User</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">User</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
    </div>
    <div class="col-sm-3">
         <!-- Large Size Modal -->
              <!-- <button class="btn btn-success btn-block m-1" data-toggle="modal" data-target="#formemodal">Account Topup</button> -->
              <!-- Modal -->
                <div class="modal fade" id="formemodal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Account Top Up Form</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <form action="{{route('user.update.account', $user->id)}}" method="POST">
                            {{csrf_field()}}
                             <div class="form-group">
                               <label for="input-1">Amount</label>
                               <input type="text" class="form-control" name="amount" id="input-1" placeholder="Enter Amount">
                               <input type="hidden" name="id"  value="{{$user->id}}" class="form-control">
                                <input type="hidden" name="transaction_type"  value="{{'credit'}}" class="form-control">
                             </div>
                             <div class="form-group">
                              <button type="submit" class="btn btn-danger px-5"><i class="icon-lock"></i>Submit</button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
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
                <!-- <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                </li> -->
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
                            <!-- <p>Password</p>
                            <h5>
                                {{$user->clear_pword}}
                            </h5> -->
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    <div class="row">
                        <div class="col-md-4">
                            <p>
                                Bank Name
                            </p>
                            <h5>{{$user->account_details ? $user->account_details->bank_name : 'Nil'}}</h5>
                            <hr>
                            <p>
                            Account Number
                            </p>
                            <h5>{{$user->account_details ? $user->account_details->account_number : 'Nil'}}</h5>

                        </div>
                        <div class="col-md-4">
                            <p>Account Title</p>
                            <h5>
                                {{$user->account_details ? $user->account_details->account_name : 'Nil'}}
                            </h5>
                            <hr>
                            <p>Routing Number</p>
                            <h5>
                                {{$user->account_details ? $user->account_details->routing_number :'Nil'}}
                            </h5>
                        </div>
                        <div class="col-md-4">
                            <p>Swift Code</p>
                            <h5>
                                {{$user->account_details ? $user->account_details->swift_code : 'Nil'}}
                            </h5>
                            <hr>
                            <p>Current Balance</p>
                            <h5>
                                ${{number_format($user->account_balance->account_balance, 2)}}
                            </h5>
                        </div>
                    </div>
                </div>
                <!-- <div class="tab-pane" id="edit">
                    <form id="signupForm" action="{{route('user.profile.update')}}" method="POST">
                        {{csrf_field()}}
                        <h4 class="form-header text-uppercase">
                        <i class="fa fa-address-book-o"></i>
                        User Profile
                        </h4>
                        <div class="form-group row">
                        <label for="input-10" class="col-sm-2 col-form-label">Surname</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="{{$user->surname}}" id="input-10" name="surname">
                        </div>
                        <label for="input-11" class="col-sm-2 col-form-label">Other Names</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="{{$user->other_names}}" id="input-11" name="other_names">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="input-12" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="{{$user->username}}" id="input-12" name="username">
                        </div>
                        <label for="input-13" class="col-sm-2 col-form-label">password</label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control" value="{{$user->clear_pword}}" id="input-13" name="password">
                        </div>
                        </div>
                        <h4 class="form-header text-uppercase">
                            <i class="fa fa-envelope-o"></i>
                            Contact Info & Bio
                        </h4>

                        <div class="form-group row">
                            <label for="input-14" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" value="{{$user->email}}" id="input-14" name="email">
                            </div>
                            <label for="input-16" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="{{$user->phone_number}}" id="input-16" name="phone_number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="input-17" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" rows="4" id="input-17">{{$user->address}}</textarea>
                            </div>
                        </div>

                        <h4 class="form-header text-uppercase">
                            <i class="fa fa-envelope-o"></i>
                            Bank Details
                        </h4>

                        <div class="form-group row">
                            <label for="input-18" class="col-sm-2 col-form-label">Bank Name</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="{{ $user->account_details ? $user->account_details->bank_name : null}}" id="input-18" name="bank_name">
                            </div>
                            <label for="input-19" class="col-sm-2 col-form-label">Account Name</label>
                            <div class="col-sm-4">
                                <input type="text" name="account_name" value="{{$user->account_details ? $user->account_details->account_name: null}}" class="form-control" id="input-19">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input-20" class="col-sm-2 col-form-label">Account Number</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="{{$user->account_details ? $user->account_details->account_number : null}}" id="input-20" name="account_number">
                            </div>

                            <label for="input-21" class="col-sm-2 col-form-label">Swift Code</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" value="{{$user->account_details ? $user->account_details->swift_code : null}}" id="input-21" name="swift_code">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="input-22" class="col-sm-2 col-form-label">Routing Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$user->account_details ? $user->account_details->routing_number : null}}" id="input-22" name="routing_number">
                            </div>
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                            <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                        </div>
                    </form>
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
