<?php



class RegistrationController extends BaseController {

    public function __construct() {

    }

    public function register() {
        $input = Input::all();
        $userdata = $input['data'];
        $errors = ValidationController::newRegistration($userdata);
//        $errors = $this->validateNewRegistration($userdata);
        if(count($errors) > 0) {
            return array('output'=>array('errors'=>'validation','data'=>$errors));
        }

        $user = new User();
        $user->email = $userdata['email'];
        $user->password = \Illuminate\Support\Facades\Hash::make($userdata['password']);
        $user->firstName = $userdata['firstName'];
        $user->lastName = $userdata['lastName'];
        $user->save();

        if($user->id > 0) {

            $auth = new AuthenticationController();

            $results = $auth->login(array(
                'data'=>array(
                    'email'=>$userdata['email'],
                    'password'=>$userdata['password']
                )
            ));
            if($results['output']['auth'] === 'Y') {
                return array('output' => array('errors' => 'none'));
            }

            return array('output'=>array('errors'=>'internal','data'=>array('We created your account, but could not log you in.  Please try signing in from the sign in page')));
        }

        return array('output'=>array('errors'=>'internal','data'=>array('We had internal issues when trying to create your account')));
    }





}
