<?php



class CompaniesController extends BaseController {

    public function __construct() {

    }

    public function add() {

        $input = Input::all();
        $data = $input['data'];
        $errors = ValidationController::companyInformation($data);
        if(count($errors) > 0) {
            return array('output'=>array('errors'=>'validation','data'=>$errors));
        }

        $company = new Company();
        $company->companyName = $data['companyName'];
        $company->save();

        if($company->id > 0) {
                return array('output' => array('errors' => 'none'));
        }

        return array('output'=>array('errors'=>'internal','data'=>array('We had internal issues when trying to create your company')));
    }

}
