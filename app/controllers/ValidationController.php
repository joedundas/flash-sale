<?php



class ValidationController extends BaseController {

    public function __construct() {

    }




    static public function newRegistration($data) {
        $validator = \Illuminate\Support\Facades\Validator::make(
            $data,
            array(
                'firstName'=>'required',
                'lastName'=>'required',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:8|confirmed',
                'agreeToTerms'=>'accepted'
            )
        );

        if($validator->fails()) {
            return $validator->messages();
        }
        return array();
    }

    static public function companyInformation($data) {
        $validator = \Illuminate\Support\Facades\Validator::make(
            $data,
            array(
                'companyName'=>'required',
            )
        );

        if($validator->fails()) {
            return $validator->messages();
        }
        return array();
    }


}
