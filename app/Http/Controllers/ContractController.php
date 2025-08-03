<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;

class ContractController extends Controller
{
    public function acceptFromBlade(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'accepted' => 'required|in:1,0',
        ]);

        $user->contract_status = $request->accepted == 1 ? 'contract_accepted' : 'contract_refused';
        $user->save();

        return redirect()->back()->with('status', 'Sua decisão foi registrada.');
    }

    public function getContractStatus()
    {
        $status = Auth::user()->contract_status;

        return view('contrato.status', compact('status'));
    }


    public function generateContractPdf()
    {
        $user = Auth::user();
        $date = now()->format('d/m/Y');
        
        // Verifique se o usuário está autenticado
        if (!$user) {
            abort(403, 'Acesso não autorizado');
        }

        // Defina as opções do PDF
        $options = [
            'defaultFont' => 'DejaVu Sans',
            'isRemoteEnabled' => true,
            'isHtml5ParserEnabled' => true
        ];

        // Gere o PDF
        $pdf = Pdf::loadView('contrato.template', [
            'user' => $user,
            'date' => $date,
            'terms' => view('contrato.terms')->render() // Template separado para os termos
        ])->setOptions($options);

        // Forçar download
        return $pdf->download('Contrato exclusivo para ('.$user->name. ')'.'.pdf');
    }

}