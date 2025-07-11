@extends('layouts.layout-dashboard')

@section('title', 'Start To Finish - Comprovantes')

@section('content')
    <h1>Meus Comprovantes de Compra</h1>

    <table>
        <thead>
            <tr>
                <th>ID do Pedido</th>
                <th>Produto</th>
                <th>Valor</th>
                <th>Data da Compra</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->product_id }}</td>
                    <td>R$ {{ number_format($order->amount, 2, ',', '.') }}</td>
                    <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                    <td>
                        @if($order->status == 'paid')
                            <span class="pago">Pago</span>
                        @else
                            <span>{{ ucfirst($order->status) }}</span>
                        @endif
                    </td>
                    <td>
                        @php
                            $refundStatus = $refunds->where('order_id', $order->id)->first();
                        @endphp
                        @if($refundStatus && $refundStatus->status == 'processed')
                            <span class="reembolsado">Reembolsado</span>
                        @elseif($refundStatus && $refundStatus->status == 'pending')
                            <span class="pendente">Pendente</span>
                        @else
                            <a class="pedir-reembolso" href="{{ route('refund.create', ['id' => $order->id]) }}">Solicitar Reembolso</a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('refund.policy') }}">Políticas de Reembolso</a>
@endsection