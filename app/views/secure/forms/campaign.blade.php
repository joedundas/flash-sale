@extends('secure.includes.secure_template')
<?php
$pageName = TextProcessor::process('New {%Campaign.singular%}');


$companies = (new CompanyRolesController())->getUsersCompanyList();
$companies = $companies['output']['results'];

//dd($tagDefinitions);

?>

@section('pageTitle',$pageName)

@section('content')
    <div class='col-sm-11' style="margin:50px">

        {{ Form::open(array()) }}

        <div class="col-sm-9" style="padding:0px; display:inline-block; margin-bottom:10px;">
            {{ Form::label('compamny','Company',array('class'=>'col-sm-2','style'=>'text-align:right;')) }}
            <select class="form-control select2" id='company' style="display:inline; width:auto">
                @foreach($companies as $idx=>$company)
                    <option value="{{$company['companyId']}}">{{$company['companyName']}}</option>
                @endforeach
            </select>
        </div>

        <?php
        $placeholder = TextProcessor::process('{%Campaign.singular%} Name');
        ?>

        {{ Form::text('campaignName','',array('placeholder'=>$placeholder,'class'=>'col-sm-12 form-control','id'=>'campaignName')) }}





        <div class="row" style="margin-top:10px">

            <div class="col-sm-5">
                <div class="row">
                    <button type="submit" class="btn btn-primary" id="saveButton">{{TextProcessor::display('Save {%Campaign.singular%}')}}</button>
                </div>
            </div>
        </div>



        {{ Form::close() }}


    </div>

@endsection

@section('pageHeaderJS')
    <script type="text/javascript">
        $(document).ready(function() {

        });

        $('#saveButton').on('click',function(event) {
            event.preventDefault();
            var data = gatherForm();
            var errors = validateData(data);
            if(errors.length !== 0) {
                showErrors(errors);
                return false;
            }
            controller.page.ajax.send(
                {
                    url:'/ajax/campaign/add',
                    data:data,
                    callback: {
                        'success':finishSave
                    }
                }
            );
            function finishSave(dta) {
                window.location.href = "/company/add";
            }
        });

        $('#notime').on('click',function() {
            if($('#notime').prop('checked')) {
            }
            else {
            }
        });

        function showErrors(errors) {
            var errorMessage = 'The following are required\r\n';
            for(var i=0; i<errors.length; i++) {
                var idx = findFormElementById(errors[i]);
                if(idx === null) { continue; }
                errorMessage += "-- " + formElements[idx].desc + "\r\n";
            }
            alert(errorMessage);
        }
        function findFormElementById(elementId) {
            for(var i=0; i<formElements.length; i++) {
                if(formElements[i].id === elementId) {
                    return i;
                }
            }
            return null;
        }
        function validateData(data) {
            var errors = [];
            for(var i = 0; i<formElements.length; i++) {

                var ele = formElements[i];
                var elementId = ele.id;

                if(!('required' in ele)) { continue; }
                if(ele.required === false) { continue; }

                if('always' in ele.required && ele.required.always) {
                    if(
                        ((ele.type === 'text' || ele.type === 'select')  && data[elementId] === '') ||
                        (ele.type === 'checkbox' && data[elementId] === false)

                    ) {
                        errors[errors.length] = elementId;
                    }
                }
                else if('if' in ele.required) {
                    for(var j=0; j<ele.required.if.length; j++) {
                        var dependsOn = ele.required.if[j];
                        if((data[dependsOn.elementId] !== dependsOn.value)) {
                            if(
                                ((ele.type === 'text' || ele.type === 'select')  && data[elementId] === '') ||
                                (ele.type === 'checkbox' && data[elementId] === false)

                            ) {
                                errors[errors.length] = elementId;
                            }
                        }
                    }
                }
            }
            return errors;
        }
        var formElements = [

            {
                'id':'companyName',
                'required':{
                    'always':true,
                },
                'desc':'Company Name',
                'type':'text'
            }

        ];
        function gatherForm() {
            var data = {};
            for(var i = 0; i<formElements.length; i++) {
                data[formElements[i].id] = getFormElementValue(formElements[i]);
            }
            data.shareWith = [];
            $("input[name='shareWith']").each(function () {
                if($(this).prop('checked')) {
                    data.shareWith[data.shareWith.length] = $(this).val();
                }
            });
            return data;
        }
        function getFormElementValue(element) {
            if(element.type == 'text') {
                return $('#' + element.id).val();
            }
            else if(element.type == 'checkbox') {
                return $('#' + element.id).prop('checked');
            }
            else if(element.type == 'select') {
                return $('#' + element.id).val();
            }
        }
    </script>
@endsection