@extends('secure.includes.secure_template')

<?php

$pageName = TextProcessor::process('{%Company.plural%} List');

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
                        <h3 class="box-title"><a href="company/add">{{ TextProcessor::display('Add New {%Company.singular%}') }}</a></h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-hover table-responsive">
                            <tr>
                                <th>{{ TextProcessor::display('{%Company.singular%} Id') }}</th>
                                <th>{{ TextProcessor::display('{%Company.singular%} Name') }}</th>
                                <th>Role</th>
                                <th>{{ TextProcessor::display('{%Campaign.plural%}') }}</th>
                                {{--<th>Status</th>--}}
                                {{--<th>Country</th>--}}
                            </tr>
                            {{--<tr>--}}
                                {{--<td><a href="javascript:void(0)">Order #123456</a></td>--}}
                                {{--<td>Lorem Ipsum</td>--}}
                                {{--<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>--}}
                                {{--<td>$158.00</td>--}}
                                {{--<td><span class="label label-danger">Pending</span></td>--}}
                                {{--<td>CH</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td><a href="javascript:void(0)">Order #458789</a></td>--}}
                                {{--<td>Lorem Ipsum</td>--}}
                                {{--<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>--}}
                                {{--<td>$55.00</td>--}}
                                {{--<td><span class="label label-warning">Shipped</span></td>--}}
                                {{--<td>US</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td><a href="javascript:void(0)">Order #84532</a></td>--}}
                                {{--<td>Lorem Ipsum</td>--}}
                                {{--<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>--}}
                                {{--<td>$845.00</td>--}}
                                {{--<td><span class="label label-danger">Prossing</span></td>--}}
                                {{--<td>IG</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td><a href="javascript:void(0)">Order #48956</a></td>--}}
                                {{--<td>Lorem Ipsum</td>--}}
                                {{--<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>--}}
                                {{--<td>$145.00</td>--}}
                                {{--<td><span class="label label-success">Paid</span></td>--}}
                                {{--<td>EN</td>--}}
                            {{--</tr>--}}
                            {{--<tr>--}}
                                {{--<td><a href="javascript:void(0)">Order #92154</a></td>--}}
                                {{--<td>Lorem Ipsum</td>--}}
                                {{--<td><span class="text-muted"><i class="fa fa-clock-o"></i> Oct 16, 2017</span> </td>--}}
                                {{--<td>$450.00</td>--}}
                                {{--<td><span class="label label-warning">Shipped</span></td>--}}
                                {{--<td>UK</td>--}}
                            {{--</tr>--}}
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
        var companies = new companyRolesController(loadData);
        $(document).ready(function() {
            companies.get();
        });
        function companyRolesController(callback) {
            "use strict";
            var me = this;
            me.data = null;
            me.callback = function(dta) {
                alert("You should give me a callback function");
            };
            if(typeof callback === 'function') {
                me.callback = callback;
            }

            me.get = function(input) {
                controller.page.ajax.send(
                    {
                        url:'/ajax/company/list',
                        data:{
                        },
                        'callback': {
                            'success':me.receive
                        }
                    }
                );
            };
            me.receive = function(data) {
                me.data = data.results;
                me.callback(me.data);
            }
        }

        function loadData(dta) {
            alert(JSON.stringify(dta));
        }
//        var countdowns = new countdownsController();
//        $(document).ready(function() {
//
//            countdowns.get();
//        });
//
//
//
//        function countdownsController() {
//            "use strict";
//            var me = this;
//            me.data = null;
//            me.get = function(input) {
//                controller.page.ajax.send(
//                    {
//                        url:'ajax/calendar/countdowns/get',
//                        data:{
//                        },
//                        'callback': {
//                            'success':me.receive
//                        }
//                    }
//                );
//            };
//            me.receive = function(data) {
//
//                me.data = data.results;
//                me.load(me.data);
//            }
//            me.load = function(dta) {
//
//                var cont = document.getElementById('countdownContainer');
//
//                var idlist = [];
//                var html = '';
//                for(var i=0; i<dta.FUTURE.length; i++) {
//                    var dvid = 'CD_' + i;
//                    html += '<h1>' + dta.FUTURE[i].title + '</h1>';
//                    html += "<div id='" + dvid + "' class='cntdwn' style='width:100%; height:50px'></div>";
//
//                    idlist[idlist.length] = {
//                        'id':dvid,
//                        'year':dta.FUTURE[i].to.year,
//                        'month':dta.FUTURE[i].to.month,
//                        'day':dta.FUTURE[i].to.day,
//                        'hour':dta.FUTURE[i].to.hour,
//                        'minute':dta.FUTURE[i].to.minute
//                    };
//                }
//
//                cont.innerHTML = html;
//
//                for(var i=0; i<idlist.length; i++) {
//                    var itm = idlist[i];
//                    $('#' + itm.id).countdown({until:new Date(itm.year,itm.month,itm.day,itm.hour,itm.minute,0),format: 'YOWDHMS'});
//                }
//            }
//
//        };
    </script>
@endsection



