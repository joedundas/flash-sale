@extends('secure.includes.secure_template')

<?php
$pageName = 'Countdowns';
?>

@section('pageTitle',$pageName)



@section('content')
<a href="add-event">Add New Event</a>
  <div id="countdownContainer"></div>
@endsection


@section('pageHeaderJS')
    <script>
        var countdowns = new countdownsController();
        $(document).ready(function() {

            countdowns.get();
        });



        function countdownsController() {
            "use strict";
            var me = this;
            me.data = null;
            me.get = function(input) {
                controller.page.ajax.send(
                    {
                        url:'ajax/calendar/countdowns/get',
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
                me.load(me.data);
            }
            me.load = function(dta) {

                var cont = document.getElementById('countdownContainer');

                var idlist = [];
                var html = '';
                for(var i=0; i<dta.FUTURE.length; i++) {
                    var dvid = 'CD_' + i;
                    html += '<h1>' + dta.FUTURE[i].title + '</h1>';
                    html += "<div id='" + dvid + "' class='cntdwn' style='width:100%; height:50px'></div>";

                    idlist[idlist.length] = {
                        'id':dvid,
                        'year':dta.FUTURE[i].to.year,
                        'month':dta.FUTURE[i].to.month,
                        'day':dta.FUTURE[i].to.day,
                        'hour':dta.FUTURE[i].to.hour,
                        'minute':dta.FUTURE[i].to.minute
                    };
                }

                cont.innerHTML = html;

                for(var i=0; i<idlist.length; i++) {
                    var itm = idlist[i];
                    $('#' + itm.id).countdown({until:new Date(itm.year,itm.month,itm.day,itm.hour,itm.minute,0),format: 'YOWDHMS'});
                }
            }

        };
    </script>
@endsection



