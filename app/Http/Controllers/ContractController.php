<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContractController extends Controller
{
    public function acceptFromBlade(Request $request)
    {
        $request->validate([
            'accepted' => 'required|in:1',
        ]);

        $user = Auth::user();
        $user->contract_status = 'contract_accepted';
        $user->save();

        return redirect()->back()->with('success', 'Contrato aceito com sucesso!');
    }


    public function getContractStatus()
    {
        $status = Auth::user()->contract_status;

        return view('contrato.status', compact('status'));
    }

}