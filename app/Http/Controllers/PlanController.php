<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Plan;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use Alert;

class PlanController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        $plan = Plan::all();
        return view('plan', compact('plan', 'user'));
    }

    public function openPayment(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $plan= $request->route('cod');
        // $plan = Plan::all();
        return view('payment', compact('user', 'plan'));
    }

    public function storePayment(Request $request, $id)
    {
        $contract = new Contract;

        $contract->idusuario = $request->route('id');
        $contract->idplano = $request->route('cod');
        $contract->ativo = 1;
        $contract->data = $request->data;

        $contract->save();

        $id = Auth::id();

        if($contract->save()){
            Alert::success('PLANO CADASTRADO', 'Seu plano foi cadastrado com sucesso');
            // return redirect()->route('dashboard', [$id]);
            return redirect()->back();
        }
    }
}
