@extends('layouts.layout-dashboard')

@section('content')
<div class="container">
    <h1>Gerenciamento de Reembolsos</h1>

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

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuário</th>
                <th>Pedido</th>
                <th>Justificativa</th>
                <th>Status</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($refunds as $refund)
                <tr>
                    <td>{{ $refund->id }}</td>
                    <td>{{ $refund->user->name }}</td>
                    <td>Pedido #{{ $refund->order->id }} - R$ {{ number_format($refund->order->amount, 2, ',', '.') }}</td>
                    <td>{{ $refund->justification ?: 'Sem justificativa' }}</td>
                    <td>
                        <span class="badge badge-{{ $refund->status == 'pending' ? 'warning' : ($refund->status == 'approved' ? 'success' : ($refund->status == 'rejected' ? 'danger' : 'info')) }}">
                            {{ ucfirst($refund->status) }}
                        </span>
                    </td>
                    <td>
                        <form action="{{ route('admin.refunds.update', $refund->id) }}" method="POST">
                            @csrf
                            <select name="status" class="form-control">
                                <option value="pending" {{ $refund->status == 'pending' ? 'selected' : '' }}>Pendente</option>
                                <option value="approved" {{ $refund->status == 'approved' ? 'selected' : '' }}>Aprovado</option>
                                <option value="rejected" {{ $refund->status == 'rejected' ? 'selected' : '' }}>Rejeitado</option>
                                <option value="processed" {{ $refund->status == 'processed' ? 'selected' : '' }} {{ $refund->status == 'processed' ? 'disabled' : '' }}>Processado (Stripe)</option>
                            </select>
                            <button type="submit" class="btn btn-primary mt-2" {{ $refund->status == 'processed' ? 'disabled' : '' }}>
                                Atualizar Status
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection