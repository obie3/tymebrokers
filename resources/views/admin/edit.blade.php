@extends('layouts.admin')
@section('createuser')
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
                        <h3 class="font-bold m-b-none m-t-none">{{number_format($user->account_balance->account_balance, 2)}}</h3>
                    </div>
                </aside>
                <aside>
                <p class="pull-right m-l inline">
                    <div class="m-b-sm pull-right">
                        <form action="{{route('admin.flag.account')}}" method="post">
                            {{csrf_field()}}
                            <div class="doc-buttons">
                                @if($user->status == 'active')
                                 <input type="submit" value="Disable" class="btn-danger btn btn-s-md btn-rounded"/>
                                @else
                                 <input type="submit" value="Enable" class="btn-success btn btn-s-md btn-rounded"/>
                                @endif
                                <input type="hidden" name="id" value="{{$user->id}}"/>
                            </div>
                        </form>
                    </div>
                </p>
                <h3 class="font-bold m-b-none m-t-none">{{$user->surname.' '.$user->other_names}}</h3>
                <p>{{$user->email}}</p>
                <p><i class="fa fa-lg fa-circle-o text-primary m-r-sm"></i><strong>{{$user->user_type}}</strong></p>
                <ul class="nav nav-pills nav-stacked aside-lg">
                    <li class="bg-light dk"><a href="#"><i class="i i-phone m-r-sm"></i>{{$user->phone_number}}</a></li>
                    <li class="bg-light dk"><a href="#"><i class="i i-mail m-r-sm"></i> {{$user->email}}</a></li>
                    <li class="bg-light dk"><a href="#"><i class="i i-chat m-r-sm"></i>{{$user->address}}</a></li>
                    <li class="bg-light dk"><a href="#"><i class="i i-chat m-r-sm"></i>{{$user->status}}</a></li>

                </ul>
                </aside>
            </div>
        </div>
        <ul class="nav nav-tabs m-b-n-xxs bg-light">
            <li class="active">
                <a href="#edit" data-toggle="tab" class="m-l">Account Transaction</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="panel tab-pane wrapper-lg active" id="edit">
                <form class="form-horizontal" action="{{route('admin.update.account', $user->id)}}" method="post">
                    {{csrf_field()}}
                <div class="form-group">
                    <label class="col-sm-3 control-label">Amount:</label>
                    <div class="col-sm-5">
                        <input type="text" name="amount" class="form-control">
                        <input type="hidden" name="id"  value="{{$user->id}}" class="form-control">
                        <input type="hidden" name="type"  value="{{'Deposit'}}" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-5">
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    </section>
</section>
@endsection

