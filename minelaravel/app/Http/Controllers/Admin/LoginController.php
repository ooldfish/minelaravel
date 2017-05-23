<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller{

    public $title;

    public $redirectTo='admin/';

    public function index() {



        return view('admin/index');
    }



    public function login(Request $request) {

        $username='aaa';
        $password='bbb';

        return view('admin/login',compact('username','password'));

        //return view('admin/login');

    }







}