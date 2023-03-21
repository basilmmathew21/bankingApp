@extends('adminlte::page')
@section('content_header')
    <h1 class="m-0 text-dark">Loan Info</h1>
@stop

@section('content')

<div class="container-fluid">

<div class="row">

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3>
    if(isset($dbInfo['loans'][0]['loan_current_amount_to_pay']))
    {{$dbInfo['loans'][0]['loan_current_amount_to_pay']}}
    @endif
</h3>
<p>Loan Balance</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="#" class="small-box-footer"><i class="fas"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">
@php
$repaid = 0;
@endphp
@if(isset($dbInfo['loan_transactions']))
@foreach($dbInfo['loan_transactions'] as $transact)
    @php
    $repaid += $transact['payment_amount'];
    @endphp
@endforeach
@endif
<div class="small-box bg-info">
<div class="inner">
<h3>{{$repaid}}</h3>
<p>Loan Repaid</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="{{ URL::to('loans/payments')}}" class="small-box-footer">Payments <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>
    if(isset($dbInfo['loans'][0]['loan_capital_amount']))
        {{$dbInfo['loans'][0]['loan_capital_amount']}}
    @endif
</h3>
<p>Loan Capital</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="" class="small-box-footer">
    <i class="fas"></i>
</a>
</div>
</div>

</div>
</div>

<div class="row">
<div class="col-md-8">
<div class="card">
<div class="card-header">
<h3 class="card-title">Repayment details</h3>
</div>

<div class="card-body">
<table class="table table-bordered">
<thead>
<tr>
<th style="width: 10px">#</th>
<th style="width: 20px">Amount</th>
<th>Date</th>
</tr>
</thead>
<tbody>
    @if(isset($dbInfo['loan_transactions']))
    @foreach($dbInfo['loan_transactions'] as $no => $each)
       <tr>
            <td>{{$no+1}}</td>
            <td>{{$each['payment_amount']}}</td>
            <td>
            {{date("d-m-Y H:i:s",strtotime($each['updated_at']))}}
            </td>
        </tr>
    @endforeach
    @endif
</tbody>
</table>
</div>

<div class="card-footer clearfix">
<ul class="pagination pagination-sm m-0 float-right">
<li class="page-item"><a class="page-link" href="#">«</a></li>
<li class="page-item"><a class="page-link" href="#">1</a></li>
<li class="page-item"><a class="page-link" href="#">2</a></li>
<li class="page-item"><a class="page-link" href="#">3</a></li>
<li class="page-item"><a class="page-link" href="#">»</a></li>
</ul>
</div>
</div>
</div>
</div>
</div>

@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
@stop
