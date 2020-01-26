@extends('layouts.admin')
@section('createuser')
active
@endsection
@section('content')
<br/>
    <div class="col-sm-12">
        <section class="panel panel-default">
            <header class="panel-heading">
                List Of Credit Transactions
                <i class="fa fa-info-sign text-muted" data-toggle="tooltip" data-placement="bottom" data-title="ajax to load the data."></i>
            </header>
        <!-- <div class="table-responsive"> -->
            <table id="user" class="table display table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Sender</th>
                        <th>Phone Number</th>
                        <th>Transaction Type</th>
                        <th>Amount</th>
                        <th>Recipient</th>
                        <!-- <th>Recipient Phone</th> -->
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($credits as $credit)
                    <?php //dd($credit); ?>
                        <tr>
                             <td>{{$credit->depositor_name}}</td>
                            <td>{{$credit->depositor_phone_number}}</td>
                            <td>{{$credit->type}}</td>
                            <td>{{number_format($credit->amount, 2)}}</td>
                            <td>{{$credit->user->surname.' '.$credit->user->other_names}}</td>
                            <!-- <td>{{$credit->user->phone_number}}</td> -->
                            <td>{{$credit->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        <!-- </div> -->
        </section>
    </div>
    @endsection

