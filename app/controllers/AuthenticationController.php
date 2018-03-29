<?php



class AuthenticationController extends BaseController {

    public function __construct() {

    }

    public function login() {
        $input = Input::all();
        $userdata = array(
            'email'=>$input['data']['email'],
            'password'=>$input['data']['password'],
        );
        if(Auth::attempt($userdata)) {
            if(Auth::check()) {
                return array('output' => array('auth' => 'Y'));
            }
        }
        return array('output'=>array('auth'=>'N'));
    }


    public function doLogout() {
        Auth::logout();
        return array('output'=>array('auth'=>'N'));
        return Redirect::to('login');
    }

}
