<?php



class CampaignsController extends BaseController {

    public function __construct() {

    }

    public function add() {

        $input = Input::all();
        $data = $input['data'];
        $errors = ValidationController::campaignInformation($data);
        if(count($errors) > 0) {
            return array('output'=>array('errors'=>'validation','data'=>$errors));
        }

        $campaign= new Campaign();
        $campaign->companyId = $data['companyId'];
        $campaign->name = $data['name'];
        $campaign->createdBy_userId = Auth::user()->id;
        $campaign->save();

        if($campaign->id > 0) {
            return array('output' => array('errors' => 'none'));
        }

        return array('output'=>array('errors'=>'internal','data'=>array('We had internal issues when trying to create your campaign')));
    }

}
