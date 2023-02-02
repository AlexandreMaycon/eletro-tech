<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Feedback;
use App\Models\User;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Http\Requests\FeedbackRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function dashboard($id)
    {
        $user = User::findOrFail($id);
        if (Auth::check()) {
            return view('dashboard', compact('user'));
        }

        return redirect("auth.login")->withSuccess('You are not allowed to access');
    }

    public function edit($id)
    {
        $user = User::findorFail($id);
        return view('editUser', compact('user'));
    }


    public function update(Request $request)
    {
        User::findorFail($request->id)->update($request->all());
        $id = Auth::id();
        $user = User::findorFail($request->id);
        if($request->all()){
            Alert::success('Editado com sucesso', $user->nome. ", seus dados foram alterados com sucesso");
            return redirect()->back();   
        }

        // return redirect()->back()->with('status', 'USUARIO EDITADO COM SUCESSO');
        // return redirect()->route('dashboard', [$id]);
        // Alert::success('SEJA BEM-VINDO', 'login realizado com sucesso');
    }

    public function openFeedback($id)
    {
        $teste = DB::table('servico')->join('usuario', 'usuario.idusuario', '=', 'servico.idusuario')
        ->select('idservico')->where('servico.idusuario', '=', $id)->count();

        $user = User::findorFail($id);
        return view('feedback', compact('user', 'teste'));
    }


    public function storeFeedback(Request $request)
    {

        $id = Auth::id();

        $feedback = new Feedback;

        $pegue = DB::table('servico')->join('usuario', 'usuario.idusuario', '=', 'servico.idusuario')
            ->select('idservico')->where('servico.idusuario', '=', $id)->orderBy('servico.idservico', 'desc')->get();

        foreach ($pegue as $pegues) {
            $naosei = $pegues->idservico;
        }

        $validar = $request->validate([
            'mensagem' => 'required|min:3|max:1000',
            'nota' => 'required',
        ], 
        [
            'mensagem' => 'Mensagem é obrigatório',
            'mensagem.min' => 'Escreva no mínimo 3 caracteres',
            'nota' => 'Nota é obrigatório'
        ]
    );


        $feedback->mensagem = $request->mensagem;
        $feedback->nota = $request->nota;
        $feedback->idservico = $naosei;

        $feedback->save();

        if($feedback->save()){
            Alert::success('FEEDBACK CADASTRADO', 'Obrigado pela sua avaliação');
            return redirect()->back();
        }
        
    }
}
