<?php

use Illuminate\Database\Query\Builder as BaseBuilder;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\ScopeInterface;

class SelectsAndJoinsScope implements ScopeInterface
{
    public function apply(Builder $builder) {
        $builder->select(
            'company_roles.id as companyRoleId',
            'users.id as userId',
            'companies.id as companyId',
            'roles.id as roleId',
            'users.firstName as firstName',
            'users.lastName as lastName',
            'users.email as email',
            'companies.companyName as companyName',
            'roles.title as roleTitle',
            'roles.description as roleDescription'
        )->join('users','company_roles.userId','=','users.id')
            ->join('companies','company_roles.companyId','=','companies.id')
            ->join('roles','company_roles.roleId','=','roles.id');
    }
    public function remove(Builder $builder) {

    }
}