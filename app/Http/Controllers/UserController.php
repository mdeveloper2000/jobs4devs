<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Models\UserJob;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    
    public function create() {
        return view('users.create', ['title'=> 'Novo usuário']);
    }

    public function store(Request $request) {
        
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'email' => ['required','email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required|min:6',
            'photo' => 'mimes:jpeg,jpg,png'
        ]);

        if($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('pictures', 'public');
        }

        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/')->with('message', 'Usuário criado com sucesso');

    }

    public function login() {        
        return view('users.login', ['title' => 'Login']);
    }

    public function authenticate(Request $request) {
        
        $formFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Você está logado agora');
        }

        return back()->withErrors([
            'email' => 'E-mail e/ou senha incorretos'
        ])->onlyInput('email');

    }

    public function edit($id) {
        $user = User::where('id', '=', $id)->get()->first();
        return view('users.edit', ['user' => $user, 'title' => 'Editar Usuário']);
    }

    public function update(Request $request) {
        
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required',
            'photo' => 'mimes:jpeg,jpg,png'
        ]);

        if($request->has('phone')) {
            $formFields['phone'] = $request->input('phone');
        }

        if($request->has('scholarity')) {
            $formFields['scholarity'] = $request->input('scholarity');
        }

        if($request->hasFile('photo')) {
            $formFields['photo'] = $request->file('photo')->store('pictures', 'public');
        }

        $user = User::where('id', '=', auth()->id())->get()->first();
        $user->update($formFields);

        return redirect('/')->with('message', 'Usuário atualizado com sucesso');

    }

    public function settings() {        
        $posted = Job::where('user_id', auth()->id())->count();
        $competing = UserJob::where('users_jobs.user_id', '=', auth()->id())->count();
        $data = [
            'posted' => $posted,
            'competing' => $competing,
            'title' => 'Configurações'
        ];
        return view('users.settings', $data);
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'Você fez logout do sistema');
    }

}
