<?php

namespace App\Http\Livewire\Auth;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\User;

class Login extends Component
{
    public $reg_no = '';
    public $password = '';
    public $remember_me = false;
    public $title = 'Login';
    protected $rules = [
        'reg_no' => 'required',
        'password' => 'required',
    ];
    public function mount()
    {
        if (auth()->user()) {
            redirect('/dashboard');
        }
        // $this->fill(['email' => 'admin@admin.com', 'password' => 'password']);
    }
    public function login()
    {
        $credentials = $this->validate();
        if (auth()->attempt(['reg_no' => $this->reg_no, 'password' => $this->password], $this->remember_me)) {
            $user = User::where(["reg_no" => $this->reg_no])->first();
            auth()->login($user, $this->remember_me);
            return redirect()->intended('/dashboard');
        } else {
            return $this->addError('reg_no', trans('auth.failed'));
        }
    }
    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.app', ['title' => $this->title]);
    }
}
