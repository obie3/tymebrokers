@extends('layouts.admin')
@section('content')

<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <!-- <h4 class="page-title">Form Validation</h4> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Transactions</a></li>
            <li class="breadcrumb-item active" aria-current="page">Credits</li>
        </ol>
    </div>
 </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Records of Credit Transactions</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Transation ID</th>
                        <th>Sender</th>
                        <th>Amount($)</th>
                        <th>Recipient</th>
                        <th>Date</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach($credits as $credit)
                        <tr>
                            <td>{{$i++}}</td>
                            <td><a href="{{ route('credits.edit', $credit->id) }}">{{$credit->transaction_id}}</a></td>
                             <td>{{$credit->depositor_name}}</td>
                            <td>{{number_format($credit->amount, 2)}}</td>
                            <td>{{$credit->user->surname.' '.$credit->user->other_names}}</td>
                            <td>{{Carbon\Carbon::createFromIsoFormat('YYYY-m-D H:mm:ss', $credit->created_at)->format('m/d/Y H:m:s')}}</td>
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
