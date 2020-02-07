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
                        <th>Amount</th>
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

    <div class="modal fade" id="formemodal">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">Edit Transaction Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('credits.modify', $credit->id) }}" method="POST">
                {{csrf_field()}}
                    <div class="form-group">
                        <label for="input-1">Senders Name</label>
                        <input type="hidden" name="depositor_name"  value="{{$credit->depositor_name}}" class="form-control">
                        <input type="hidden" name="id"  value="{{$credit->id}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="input-1">Naration</label>
                        <input type="hidden" name="narration"  value="{{$credit->narration}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="input-1">Date Created</label>
                        <input type="text" name="date_created"  value="{{$credit->date_created}}" class="form-control">
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-danger px-5"><i class="icon-lock"></i>Submit</button>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>

@endsection
