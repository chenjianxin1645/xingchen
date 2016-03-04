<?php

namespace App\Http\Controllers\backManager\Auth;
use Illuminate\Http\Request;
use App\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $redirectPath='manager/home';
    protected $username='adminname';
    protected $loginPath = 'manager/home';
    protected $redirectTo ='manager/display/about';
    protected $registerPath = 'manager/auth/register';

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $messages = [
            'adminname.required'=>'管理员名字段必填',
            'adminname.between'=>'管理员名必须是3个字符以上，10个字符以下，中文文字算一个字符',
            'email.required'    => '邮箱字段必填',
            'password.required'    => '密码字段必填',
            'password.confirmed' => '两次密码输入不一致',
            'adminname.required'=>'真实姓名字段必填',
            'adminname.min'=>'真实姓名字段必需是两个字符以上，四个字符以下，中文文字算一个字符',
            'adminname.max'=>'真实姓名字段必需是两个字符以上，四个字符以下，中文文字算一个字符',
            'idCard.required'=>'身份证号字段必填',
            'idCard.between'=>'身份证号字段必需是17到18个数字或字符',
            'CheckCode.required' => '请输入验证码',
            'CheckCode.captcha' => '验证码错误，请重试'

        ];
        $rules = ['adminname' => 'required|between:2,10',
            'email' => 'required|email|max:20|unique:admins',
            'password' => 'confirmed|required|min:6|alpha_dash|',
            'realName'=> 'required|max:20|different:adminname',
            'idCard'=> 'between:17,19|alpha_num',
            "CheckCode" => 'required|captcha'

        ];
        //
        //$validator = Validator::make($data, $rules, $messages);
        //$validator = Validator::make($messages);
        return Validator::make($data, $rules, $messages);
            /*
             *alpha:字段仅全数为字母字串时通过验证。
             *alpha_dash:字段值仅允许字母、数字、破折号（-）以及底线（_）
             *alpha_num:字段值仅允许字母、数字
             *array:字段值仅允许为数组
             *between:min,max:字段值需介于指定的 min 和 max 值之间。字串、数值或是文件都是用同样的方式来进行验证。
             *confirmed:字段值需与对应的字段值 foo_confirmation 相同。例如，如果验证的字段是 password ，那对应的
             *      字段 password_confirmation 就必须存在且与 password 字段相符。
             *date:字段值通过 PHP strtotime 函数验证是否为一个合法的日期。
             *different:field:字段值需与指定的字段 field 值不同。
             *digits:value:字段值需为数字且长度需为 value。
             *
             * digits_between:min,max:字段值需为数字，且长度需介于 min 与 max 之间。
             *integer:字段值需为一个整数值
             *max:value:字段值需小于等于 value。字串、数字和文件则是判断 size 大小。
             *min:value:字段值需大于等于 value。字串、数字和文件则是判断 size 大小。
             *required:字段值为必填。
             *string:必须是字符串类型。
             *
             *
             * */

    }

    public function getLogin(){
        return view('backManager/auth/login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'adminname' => 'max:255|required',
            'password' => 'required',
        ]);
        //
        $throttles = $this->isUsingThrottlesLoginsTrait();
        //使用节流登录特点
        if ($throttles && $this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }
        //是否多次尝试登录
        $credentials = $this->getCredentials($request);
        //return $request->all();

        if (Auth::attempt("admin",['adminname'=>$request->adminname,'password'=>$request->password],$request->has('remember'))) {

           return $this->handleUserWasAuthenticated($request, $throttles);
            //句柄使用已
           // return $request->all();
        }

        if ($throttles) {
            $this->incrementLoginAttempts($request);
            //企图增加登录
        }
        //提交登录信息出现错误


        return redirect($this->loginPath())
            ->withInput($request->only($this->loginUsername(), 'remember'))
            ->withErrors([
                $this->loginUsername() => $this->getFailedLoginMessage(),
            ]);
    }

    public function getLogout()
    {
        Auth::logout("admin");

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : 'manager/auth/login');
    }
    public function getRegister()
    {
        return view('backManager.auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {


        // return $request->all();
        $validator = $this->validator($request->all());
        //
        //return"fddd";

        if ($validator->fails()) {
            return redirect($this->redirectPath())
                ->withInput()
                ->withErrors($validator);
        }

        Auth::login($this->create($request->all()));
        //return $request->all();

        return redirect($this->loginPath)->withInput();
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Admin::create([
            'adminname' => $data['adminname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'realName'=> $data['realName'],
            'idCard'=> $data['idCard'],
            'registerTime'=> $data['registerTime'],
            'lostLoginTime'=> $data['lostLoginTime'],

        ]);
    }
}
