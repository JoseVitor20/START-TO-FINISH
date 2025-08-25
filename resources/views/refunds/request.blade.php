@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Solicitar Reembolso para Pedido #{{ $order->id }}</h2>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('refund.store') }}" method="POST">
        @csrf
        <input type="hidden" name="order_id" value="{{ $order->id }}">
        
        <div class="form-group">
            <label for="justification">Justificativa (opcional)</label>
            <textarea name="justification" id="justification" rows="4" class="form-control"></textarea>
        </div>

        @if(!$order->isRefunded())
            <button type="submit" class="btn btn-primary">Solicitar Reembolso</button>
        @else
            <span class="badge badge-info">Este pedido já foi reembolsado ou tem uma solicitação em andamento.</span>
        @endif
    </form>
</div>
@endsection