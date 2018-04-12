@extends('secure.includes.secure_template')

<?php

$pageName = TextProcessor::process('{%Campaign.plural%} List');

$companies = (new CompanyRolesController())->getUsersCompanyList();
$companies = $companies['output']['results'];

?>

@section('pageTitle',$pageName)



@section('content')




    <!-- Content Header (Page header) -->
    {{--<section class="content-header">--}}
        {{--<h1>--}}
            {{--Basic Tables--}}
        {{--</h1>--}}
        {{--<ol class="breadcrumb">--}}
            {{--<li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
            {{--<li class="breadcrumb-item"><a href="#">Tables</a></li>--}}
            {{--<li class="breadcrumb-item active">Simple</li>--}}
        {{--</ol>--}}
    {{--</section>--}}

    <!-- Main content -->
    {{--<section class="content">--}}

        <!-- /.row -->
        <div class="row">

            <div class="col-12">
                <div class="box">
                    <div class="box-header">

                        <h3 class="box-title"><a href="campaigns/add">{{ TextProcessor::display('Add New {%Campaign.singular%}') }}</a></h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table  id="campaignListTable">
                            <thead>
                            <tr>
                                <th>{{ TextProcessor::display('{%Company.singular%} Id') }}</th>
                                <th>{{ TextProcessor::display('{%Company.singular%} Name') }}</th>
                                <th>Title</th>
                                <th>Active</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $role)
                                <tr>
                                    <td>
                                        {{$role['companyId']}}
                                    </td>
                                    <td>
                                        {{$role['companyName']}}
                                    </td>
                                    <td>
                                        {{$role['roleTitle']}}
                                    </td>
                                    <td>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    {{--</section>--}}
    <!-- /.content -->
</div>
@endsection


@section('pageHeaderJS')
    <script>

        $(document).ready(function() {
            $('#campaignListTable').DataTable();
        });


    </script>
@endsection



