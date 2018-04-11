<?php

Route::get('/', function()
{
    return View::make('login');
});

Route::get('login', function()
{
    return View::make('login');
});
Route::get('register', function()
{
    return View::make('register');
});
Route::match(array('GET','POST'),'/ajax/auth/register','RegistrationController@register');

Route::match(array('GET','POST'),'/ajax/auth/login','AuthenticationController@login');
Route::match(array('GET','POST'),'/ajax/auth/logout','AuthenticationController@doLogout');
Route::match(array('GET','POST'),'/ajax/company/get',array('before'=>'auth', 'uses'=>'CompaniesController@get'));
Route::match(array('GET','POST'),'/ajax/company/add',array('before'=>'auth', 'uses'=>'CompaniesController@add'));
Route::match(array('GET','POST'),'/ajax/company/list',array('before'=>'auth', 'uses'=>'CompanyRolesController@getUsersCompanyList'));


Route::match(array('GET','POST'),'dashboard',array('before'=>'auth',function() {
    return View::make('secure.dashboard.layout');
}));
Route::match(array('GET','POST'),'companies/{searchBy?}/{searchTerm?}',array('before'=>'auth',function($searchBy = null,$searchTerm = null) {
    return View::make('secure.lists.companies',['searchBy'=>$searchBy,'searchTerm'=>$searchTerm]);
}));

Route::match(array('GET','POST'),'campaigns',array('before'=>'auth',function() {
    return View::make('secure.lists.campaigns');
}));

Route::match(array('GET','POST'),'company/add',array('before'=>'auth',function() {
    return View::make('secure.forms.company');
}));










