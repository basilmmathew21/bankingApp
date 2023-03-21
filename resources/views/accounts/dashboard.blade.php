@extends('adminlte::page')
@section('content_header')
    <h1 class="m-0 text-dark">Account Info</h1>
@stop

@section('content')

<div class="container-fluid">

<div class="row">
<div class="col-lg-3 col-6">

<div class="small-box bg-info">
<div class="inner">
<h3>
    @if(isset($dbInfo->account->account_current_amount))
    {{$dbInfo->account->account_current_amount}}
    @endif
</h3>
<p>Account Balance</p>
</div>
<div class="icon">
<i class="ion ion-bag"></i>
</div>
<a href="#" class="small-box-footer"><i class="fas"></i></a>
</div>
</div>
@php
$credit = 0;
$debit  = 0;
@endphp
@if(isset($accountInfo['transactions']))
@foreach($accountInfo['transactions'] as $cre)
    @if($cre['transaction_type'] == 0)
        @php
        $credit += $cre['amount'];
        @endphp
    @else 
        @php
        $debit  += $cre['amount'];
        @endphp
    @endif
@endforeach
@endif
<div class="col-lg-3 col-6">

<div class="small-box bg-success">
<div class="inner">
<h3>{{$debit}}</h3>
<p>Deposits</p>
</div>
<div class="icon">
<i class="ion ion-stats-bars"></i>
</div>
<a href="{{ URL::to('accounts/debits')}}" class="small-box-footer">Debts <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-warning">
<div class="inner">

<h3>{{$credit}}</h3>
<p>Withdrawals</p>
</div>
<div class="icon">
<i class="ion ion-person-add"></i>
</div>
<a href="{{ URL::to('accounts/credits')}}" class="small-box-footer">Transactions <i class="fas fa-arrow-circle-right"></i></a>
</div>
</div>

<div class="col-lg-3 col-6">

<div class="small-box bg-danger">
<div class="inner">
<h3>
@if(isset($accountInfo['loans'][0]['loan_current_amount_to_pay']))
{{$accountInfo['loans'][0]['loan_current_amount_to_pay']}}
@endif
</h3>
<p>Loan Amount</p>
</div>
<div class="icon">
<i class="ion ion-pie-graph"></i>
</div>
<a href="#" class="small-box-footer"><i class="fas"></i></a>
</div>
</div>

</div>




</div>

</div>

@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
@stop
