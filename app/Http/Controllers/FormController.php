<?php
namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
Use Alert;
use App\Models\Feedback;
use App\Models\Plan;

class FormController extends Controller
{
    public function index()
    {
        
        $plan = Plan::all();
        $feedback = Feedback::all();
        return view('index',compact("plan", "feedback"));
    } 

    public function login()
    {
        return view('auth.login');
    } 


    public function create(RegisterRequest $request)
    {  
        $user = new User;

        $user->nome = $request->nome;
        $user->cpf = $request->cpf;
        $user->telefone = $request->telefone;
        $user->endereco = $request->endereco;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        if($user->save()){
            Alert::info('Estamos Quase Lá', 'Agora só falta realizar o login com seus dados');   
            return redirect()->back();    
        }
        return response()->json([
            "error" => 'deu erro'
        ]);
    }
      
    public function customLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $id = Auth::id(); 
            return redirect()->route('dashboard',[$id]);
        }
        return back()->withErrors([
            'password' => 'Dados Inválidos'
        ])->onlyInput('email', 'password');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }

    // public function create(array $data)
    // {
    //   return Usuario::create([
    //     'nome' => $data['name'],
    //     'email' => $data['email'],
    //     'cpf' => $data['cpf'],
    //     'endereco' => $data['endereco'],
    //     'telefone' => $data['telefone'],
    //     'password' => Hash::make($data['password'])
    //   ]);
    // }    
}