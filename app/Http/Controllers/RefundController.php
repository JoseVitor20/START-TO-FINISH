<?php

// app/Http/Controllers/RefundController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Refund;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class RefundController extends Controller
{
    // Exibe o formulário para solicitar um reembolso
    public function create($id)
    {
        $order = Order::findOrFail($id);
        // Verifica se o pedido já foi reembolsado ou se há uma solicitação pendente/processada
        if ($order->isRefunded()) {
            return redirect()->route('receipts')->with('error', 'Este pedido já foi reembolsado ou tem uma solicitação em andamento.');
        }
        return view('refunds.request', compact('order'));
    }

    // Armazena a solicitação de reembolso
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'justification' => 'nullable|string|max:500',
        ]);

        $order = Order::findOrFail($request->order_id);

        // Verifica se o pedido já foi reembolsado
        if ($order->refunded) {
            return redirect()->back()->with('error', 'Este pedido já foi reembolsado.');
        }

        // Verifica se já existe solicitação de reembolso pendente
        if ($order->refunds()->where('status', 'pending')->exists()) {
            return redirect()->back()->with('error', 'Já existe uma solicitação de reembolso pendente para este pedido.');
        }

        // Cria o reembolso com TODOS os dados necessários
        $refund = Refund::create([
            'user_id' => auth()->id(),
            'order_id' => $order->id,
            'product_id' => $order->product_id, // Pega o product_id do pedido
            'justification' => $request->justification,
            'status' => 'pending',
        ]);

        return redirect()->route('receipts')
            ->with('success', 'Solicitação de reembolso enviada com sucesso.');
    }
}