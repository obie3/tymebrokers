@extends('layouts.admin')
@section('content')

<!-- Breadcrumb-->
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <!-- <h4 class="page-title">Form Validation</h4> -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Password</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update</li>
        </ol>
    </div>
 </div>
    <!-- End Breadcrumb-->
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <form id="update-transaction" action="{{route('credits.modify')}}" method="post">
                {{csrf_field()}}
                    <h4 class="form-header text-uppercase">
                    <i class="fa fa-user-circle-o"></i>
                     Modify Transaction
                    </h4>
                    <div class="form-group row">
                        <label for="input-1" class="col-sm-2 col-form-label">Senders Name</label>
                        <div class="col-sm-10">
                            <input type="text" id="depositor_name" name="depositor_name"  value="{{$credit->depositor_name}}" class="form-control">
                            <input type="hidden" name="id"  value="{{$credit->id}}" class="input-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-1" class="col-sm-2 col-form-label">Naration</label>
                        <div class="col-sm-10">
                            <input type="text" id="narration"  name="narration"  value="{{$credit->narration}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-1" class="col-sm-2 col-form-label">Date Created</label>
                        <div class="col-sm-10">
                             <input type="text" id="autoclose-datepicker"  name="date_created"  value="{{Carbon\Carbon::createFromIsoFormat('YYYY-m-D H:mm:ss', $credit->created_at)->format('m/d/Y')}}" class="form-control">
                        <div class="col-sm-10">
                    </div>
                    <div class="form-footer">
                        <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                        <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i>SAVE</button>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div><!--End Row-->
@endsection
