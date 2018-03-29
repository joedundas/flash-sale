@extends('secure.includes.secure_template')

<?php
    $pageName = 'Dashboard';
?>

@section('pageTitle',$pageName)


@section('content')
<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        @include('secure.dashboard.topModals')
        <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-xl-6 connectedSortable">

            @include('secure.dashboard.widgets.chart')

            <!-- Chat box -->
            {{--<div class="box">--}}
                {{--<div class="box-header">--}}
                    {{--<i class="fa fa-comments"></i>--}}

                    {{--<h3 class="box-title">Chat Activity</h3>--}}

                    {{--<div class="box-tools pull-right" data-toggle="tooltip" title="Status">--}}
                        {{--<div class="btn-group" data-toggle="btn-toggle">--}}
                            {{--<button type="button" class="btn btn-default btn-sm no-border green-btn"><i class="fa fa-square text-white"></i>--}}
                            {{--</button>--}}
                            {{--<button type="button" class="btn btn-default btn-sm no-border red-btn"><i class="fa fa-square text-white"></i></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="box-body chat" id="chat-box">--}}
                    {{--<!-- chat item -->--}}
                    {{--<div class="item">--}}
                        {{--<img src="images/user4-128x128.jpg" alt="user image" class="online">--}}

                        {{--<p class="message">--}}
                            {{--<a href="#" class="name">--}}
                                {{--<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 4:15</small>--}}
                                {{--Smith doe--}}
                            {{--</a>--}}
                            {{--It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<!-- /.item -->--}}
                    {{--<!-- chat item -->--}}
                    {{--<div class="item">--}}
                        {{--<img src="images/user3-128x128.jpg" alt="user image" class="offline">--}}

                        {{--<p class="message">--}}
                            {{--<a href="#" class="name">--}}
                                {{--<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 6:10</small>--}}
                                {{--Maical Jordan--}}
                            {{--</a>--}}
                            {{--It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<!-- /.item -->--}}
                    {{--<!-- chat item -->--}}
                    {{--<div class="item">--}}
                        {{--<img src="images/user2-160x160.jpg" alt="user image" class="offline">--}}

                        {{--<p class="message">--}}
                            {{--<a href="#" class="name">--}}
                                {{--<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 7:30</small>--}}
                                {{--Adaom Clark--}}
                            {{--</a>--}}
                            {{--It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<!-- /.item -->--}}
                    {{--<!-- chat item -->--}}
                    {{--<div class="item">--}}
                        {{--<img src="images/user4-128x128.jpg" alt="user image" class="online">--}}

                        {{--<p class="message">--}}
                            {{--<a href="#" class="name">--}}
                                {{--<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 4:15</small>--}}
                                {{--Smith doe--}}
                            {{--</a>--}}
                            {{--It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<!-- /.item -->--}}
                    {{--<!-- chat item -->--}}
                    {{--<div class="item">--}}
                        {{--<img src="images/user3-128x128.jpg" alt="user image" class="offline">--}}

                        {{--<p class="message">--}}
                            {{--<a href="#" class="name">--}}
                                {{--<small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 6:10</small>--}}
                                {{--Maical Jordan--}}
                            {{--</a>--}}
                            {{--It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.--}}
                        {{--</p>--}}
                    {{--</div>--}}
                    {{--<!-- /.item -->--}}
                {{--</div>--}}
                {{--<!-- /.chat -->--}}
                {{--<div class="box-footer">--}}
                    {{--<div class="input-group">--}}
                        {{--<input class="form-control" placeholder="Type message...">--}}

                        {{--<div class="input-group-btn">--}}
                            {{--<button type="button" class="btn btn-success"><i class="fa fa-plus"></i></button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /.box (chat box) -->--}}

            {{--<!-- TO DO List -->--}}
            {{--<div class="box">--}}
                {{--<div class="box-header">--}}
                    {{--<i class="fa fa-file"></i>--}}

                    {{--<h3 class="box-title">To Do List</h3>--}}

                    {{--<div class="box-tools pull-right">--}}
                        {{--<nav aria-label="Page navigation example">--}}
                            {{--<ul class="pagination">--}}
                                {{--<li><a href="#">&laquo;</a></li>--}}
                                {{--<li><a href="#">1</a></li>--}}
                                {{--<li><a href="#">2</a></li>--}}
                                {{--<li><a href="#">3</a></li>--}}
                                {{--<li><a href="#">&raquo;</a></li>--}}
                            {{--</ul>--}}
                        {{--</nav>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<!-- /.box-header -->--}}
                {{--<div class="box-body">--}}
                    {{--<!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->--}}
                    {{--<form>--}}
                        {{--<ul class="todo-list">--}}
                            {{--<li>--}}
                                {{--<!-- drag handle -->--}}
                                {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<!-- checkbox -->--}}
                                {{--<label class="control control-checkbox">--}}
                                    {{--<input type="checkbox" />--}}
                                    {{--<div class="control_indicator"></div>--}}
                                {{--</label>--}}
                                {{--<!-- todo text -->--}}
                                {{--<span class="text">Lorem ipsum dolor sit amet</span>--}}
                                {{--<!-- Emphasis label -->--}}
                                {{--<small class="label label-danger"><i class="fa fa-clock-o"></i> 8 mins</small>--}}
                                {{--<!-- General tools such as edit or delete-->--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                      {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<!-- checkbox -->--}}
                                {{--<label class="control control-checkbox">--}}
                                    {{--<input type="checkbox" />--}}
                                    {{--<div class="control_indicator"></div>--}}
                                {{--</label>--}}
                                {{--<span class="text">Praesent et metus sit amet</span>--}}
                                {{--<small class="label label-info"><i class="fa fa-clock-o"></i> 2 hours</small>--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                      {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<!-- checkbox -->--}}
                                {{--<label class="control control-checkbox">--}}
                                    {{--<input type="checkbox" />--}}
                                    {{--<div class="control_indicator"></div>--}}
                                {{--</label>--}}
                                {{--<span class="text">Pellentesque feugiat quam eget</span>--}}
                                {{--<small class="label label-success"><i class="fa fa-clock-o"></i> 2 day</small>--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                      {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<!-- checkbox -->--}}
                                {{--<label class="control control-checkbox">--}}
                                    {{--<input type="checkbox" />--}}
                                    {{--<div class="control_indicator"></div>--}}
                                {{--</label>--}}
                                {{--<span class="text">Pellentesque feugiat quam eget</span>--}}
                                {{--<small class="label label-success"><i class="fa fa-clock-o"></i> 2 day</small>--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                      {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<!-- checkbox -->--}}
                                {{--<label class="control control-checkbox">--}}
                                    {{--<input type="checkbox" />--}}
                                    {{--<div class="control_indicator"></div>--}}
                                {{--</label>--}}
                                {{--<span class="text">Quisque rhoncus leo at ex</span>--}}
                                {{--<small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                      {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<!-- checkbox -->--}}
                                {{--<label class="control control-checkbox">--}}
                                    {{--<input type="checkbox" />--}}
                                    {{--<div class="control_indicator"></div>--}}
                                {{--</label>--}}
                                {{--<span class="text">Nunc pulvinar dolor vel magna ultricies</span>--}}
                                {{--<small class="label label-warning"><i class="fa fa-clock-o"></i> 1 week</small>--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                      {{--<span class="handle">--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                        {{--<i class="fa fa-ellipsis-v"></i>--}}
                      {{--</span>--}}
                                {{--<!-- checkbox -->--}}
                                {{--<label class="control control-checkbox">--}}
                                    {{--<input type="checkbox" />--}}
                                    {{--<div class="control_indicator"></div>--}}
                                {{--</label>--}}
                                {{--<span class="text">Aenean condimentum arcu ut laoreet fringilla.</span>--}}
                                {{--<small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>--}}
                                {{--<div class="tools">--}}
                                    {{--<i class="fa fa-edit"></i>--}}
                                    {{--<i class="fa fa-trash-o"></i>--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</form>--}}
                {{--</div>--}}
                {{--<!-- /.box-body -->--}}
                {{--<div class="box-footer clearfix no-border">--}}
                    {{--<button type="button" class="btn btn-blue pull-right"><i class="fa fa-plus"></i> Add item</button>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- /.box -->
        </section>
        <!-- /.Left col -->

        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-xl-6 connectedSortable">

            <!-- Map box -->
            {{--<div class="box">--}}
                {{--<div class="box-header">--}}
                    {{--<!-- tools box -->--}}
                    {{--<div class="pull-right box-tools">--}}
                        {{--<button type="button" class="btn btn-white btn-sm daterange pull-right" data-toggle="tooltip"--}}
                                {{--title="Date range">--}}
                            {{--<i class="fa fa-calendar"></i></button>--}}
                        {{--<button type="button" class="btn btn-white btn-sm pull-right" data-widget="collapse"--}}
                                {{--data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">--}}
                            {{--<i class="fa fa-minus"></i></button>--}}
                    {{--</div>--}}
                    {{--<!-- /. tools -->--}}

                    {{--<i class="fa fa-map-marker"></i>--}}

                    {{--<h3 class="box-title">--}}
                        {{--Visitors--}}
                    {{--</h3>--}}
                {{--</div>--}}
                {{--<div class="box-body">--}}
                    {{--<div id="world-map" style="height: 250px; width: 100%;"></div>--}}
                {{--</div>--}}
                {{--<!-- /.box-body-->--}}
                {{--<div class="box-footer">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col text-center" style="border-right: 1px solid #f4f4f4">--}}
                            {{--<div id="sparkline-1"></div>--}}
                            {{--<div class="knob-label">Visitors</div>--}}
                        {{--</div>--}}
                        {{--<!-- ./col -->--}}
                        {{--<div class="col text-center" style="border-right: 1px solid #f4f4f4">--}}
                            {{--<div id="sparkline-2"></div>--}}
                            {{--<div class="knob-label">Online</div>--}}
                        {{--</div>--}}
                        {{--<!-- ./col -->--}}
                        {{--<div class="col text-center">--}}
                            {{--<div id="sparkline-3"></div>--}}
                            {{--<div class="knob-label">Exists</div>--}}
                        {{--</div>--}}
                        {{--<!-- ./col -->--}}
                    {{--</div>--}}
                    {{--<!-- /.row -->--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- /.box -->--}}

            {{--<!-- solid sales graph -->--}}
            {{--<div class="box">--}}
                {{--<div class="box-header">--}}
                    {{--<i class="fa fa-th"></i>--}}

                    {{--<h3 class="box-title">Sales Graph</h3>--}}

                    {{--<div class="box-tools pull-right">--}}
                        {{--<button type="button" class="btn btn-white btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>--}}
                        {{--</button>--}}
                        {{--<button type="button" class="btn btn-white btn-sm" data-widget="remove"><i class="fa fa-times"></i>--}}
                        {{--</button>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="box-body border-radius-none">--}}
                    {{--<div class="chart" id="line-chart" style="height: 250px;"></div>--}}
                {{--</div>--}}
                {{--<!-- /.box-body -->--}}
                {{--<div class="box-footer">--}}
                    {{--<div class="row">--}}
                        {{--<div class="col text-center" style="border-right: 1px solid #f4f4f4">--}}
                            {{--<input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"--}}
                                   {{--data-fgColor="#26C6DA">--}}

                            {{--<div class="knob-label">Mail Orders</div>--}}
                        {{--</div>--}}
                        {{--<!-- ./col -->--}}
                        {{--<div class="col text-center" style="border-right: 1px solid #f4f4f4">--}}
                            {{--<input type="text" class="knob" data-readonly="true" value="60" data-width="60" data-height="60"--}}
                                   {{--data-fgColor="#26C6DA">--}}

                            {{--<div class="knob-label">Online Orders</div>--}}
                        {{--</div>--}}
                        {{--<!-- ./col -->--}}
                        {{--<div class="col text-center">--}}
                            {{--<input type="text" class="knob" data-readonly="true" value="40" data-width="60" data-height="60"--}}
                                   {{--data-fgColor="#26C6DA">--}}

                            {{--<div class="knob-label">In-Store Orders</div>--}}
                        {{--</div>--}}
                        {{--<!-- ./col -->--}}
                    {{--</div>--}}
                    {{--<!-- /.row -->--}}
                {{--</div>--}}
                {{--<!-- /.box-footer -->--}}
            {{--</div>--}}
            {{--<!-- /.box -->--}}

            {{--<!-- quick email widget -->--}}
            {{--<div class="box box-info">--}}
                {{--<div class="box-header">--}}
                    {{--<i class="fa fa-envelope"></i>--}}

                    {{--<h3 class="box-title">Quick Email</h3>--}}
                    {{--<!-- tools box -->--}}
                    {{--<div class="pull-right box-tools">--}}
                        {{--<button type="button" class="btn btn-danger btn-sm" data-widget="remove" data-toggle="tooltip"--}}
                                {{--title="Remove">--}}
                            {{--<i class="fa fa-times"></i></button>--}}
                    {{--</div>--}}
                    {{--<!-- /. tools -->--}}
                {{--</div>--}}
                {{--<div class="box-body">--}}
                    {{--<form action="#" method="post">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="email" class="form-control" name="emailto" placeholder="Email to:">--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="text" class="form-control" name="subject" placeholder="Subject">--}}
                        {{--</div>--}}
                        {{--<div>--}}
                            {{--<textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
                {{--<div class="box-footer clearfix">--}}
                    {{--<button type="button" class="pull-right btn btn-blue" id="sendEmail"> Send <i class="fa fa-paper-plane-o"></i></button>--}}
                {{--</div>--}}
            {{--</div>--}}
            <!-- /.box -->

        </section>
        <!-- right col -->
    </div>
    <!-- /.row (main row) -->

</section>
    @endsection
