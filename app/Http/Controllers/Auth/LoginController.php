<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Tahun_anggaran;
// use Session;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        // $tahunanggarn = Ref_satuankerja::all();

        $input = $request->all();
        $request->session()->put('tahunanggaran', $input['tahunanggaran']);
        // $request->session()->put('name', 'john');

        // $request->session()->put('tahun_anggaran', '2021');
        // $variableSetOnPageA = "Can be anything";
        // Session::put('variableSetOnPageA', $variableSetOnPageA);
        // Session::save();

        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'tahunanggaran' => 'required'
        ]);

        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';
        if (auth()->attempt(array($fieldType => $input['username'], 'password' => $input['password']))) {
            return redirect()->route('login');
        } else {
            return redirect()->route('login')
                ->with('error', '( Email atau username ) atau password yang anda masukan salah ');
        }
    }

    public function showLoginForm()
    {
        $tahunanggarans = Tahun_anggaran::all()->where('locked', '=', '1');
        return view('auth.login', compact('tahunanggarans'));
    }
}