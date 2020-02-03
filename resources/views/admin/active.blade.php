@extends('layouts.admin')
@section('createuser')
active
@endsection
@section('content')
<br/>
    <div class="col-sm-12">
        <section class="panel panel-default">
            <header class="panel-heading">
                List Of  Active Transfer
                <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
            </header>
        <!-- <div class="table-responsive"> -->
            <table id="user" class="table display table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>AccountBalance</th>
                        <th>Status</th>
                        <!-- <th>Start date</th>
                        <th>Salary</th> -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <?php //dd($user); ?>
                        <tr>
                            <td><a href="{{ route('admin.edit', $user->id) }}">{{$user->surname.' '.$user->other_names}}</a></td>
                            <td>{{$user->phone_number}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{number_format($user->account_balance->account_balance, 2)}}</td>
                            <td>{{$user->status}}</td>
                            <!-- <td>2009/09/15</td>
                            <td>$205,500</td> -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        <!-- </div> -->
        </section>
    </div>
    @endsection

