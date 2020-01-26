@extends('layouts.app')
@section('createuser')
active
@endsection
@section('content')
<br/>
    <div class="col-sm-12">
        <section class="panel panel-default">
            <header class="panel-heading">
                Debit Transactions
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
                        <th>Recipient Name</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($debits as $debit)
                    <?php //dd($debit); ?>
                        <tr>
                            <td>{{$debit->user->surname.' '.$debit->user->other_names}}</td>
                            <td>{{$debit->user->phone_number}}</td>
                            <td>{{'Transfered'}}</td>
                            <td>{{number_format($debit->amount, 2)}}</td>
                            <td>{{$debit->recipient_name}}</td>
                            <td>{{$debit->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        <!-- </div> -->
        </section>
    </div>
    @endsection

