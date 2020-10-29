<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index()
    {
        return 'stonelalala';
    }

    //用户注册
    public function store(UserRequest $request)
    {
        User::create($request->all());
        return '注册成功';
    }
    //用户登录
    public function login(Request $request)
    {
        $res = Auth::guard('web')->attempt(['name' => $request->name,
            'password' => $request->password]);
        if($res){
            return '用户登录成功';
        }
        return '用户登陆失败';
    }
}
