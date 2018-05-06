<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    // ログイン情報の参照先TBL
    protected $guard = 'users';
 
    // ログイン後のリダイレクト先
    protected $redirectTo = '/dashboard';
    
    // ログアウト後のリダイレクト先
    protected $redirectAfterLogout = '/home';
 
    // ログインIDの項目
    protected $username = 'email';
 
    // ログインスロットルとなるまで最高のログイン失敗回数
    protected $maxLoginAttempts = 5;
    
    // ログインスロットルとなってからの待ち秒数
    protected $lockoutTime = 60;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // ゲストユーザはログアウト処理をしない
        $this->middleware('guest')->except('logout');
    }

    /**
     * ログイン時のレンダー先
     *
     * @return void
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
}
