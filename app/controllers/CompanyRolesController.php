<?php



class CompanyRolesController extends BaseController {

    public function __construct() {

    }

    public function addUserAsOwnerToCompany($userId,$companyId) {
        return $this->addUserAsOwnerToCompany($userId,$companyId,1);
    }
    public function addUserToCompanyRole($userId,$companyId,$roleId) {
        $companyRole = new CompanyRoles();
        $companyRole->companyId = $companyId;
        $companyRole->userId = $userId;
        $companyRole->roleId = $roleId;
        $companyRole->save();
        return $companyRole->id;
    }

    public function getUsersCompanyList($userId = null) {
        if($userId === null) {
            $userId = Auth::user()->id;
        }
    }

}
