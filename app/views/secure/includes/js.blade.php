<!-- jQuery 3 -->
<script src="/vendors/jquery/dist/jquery.js"></script>
<script src="/vendors/jscountdown/js/jquery.plugin.js"></script>
<script src="/vendors/jscountdown/js/jquery.countdown.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/vendors/jquery-ui/jquery-ui.js"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- popper -->
<script src="/vendors/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="/vendors/bootstrap/dist/js/bootstrap.js"></script>

<!-- ChartJS -->
<script src="/vendors/chart-js/chart.js"></script>

<!-- Morris.js charts -->
<script src="/vendors/raphael/raphael.min.js"></script>
<script src="/vendors/morris.js/morris.min.js"></script>

<!-- Sparkline -->
<script src="/vendors/jquery-sparkline/dist/jquery.sparkline.js"></script>

<!-- jvectormap -->
<script src="/vendors/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- jQuery Knob Chart -->
<script src="/vendors/jquery-knob/js/jquery.knob.js"></script>

<!-- daterangepicker -->
<script src="/vendors/moment/min/moment.min.js"></script>
<script src="/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- datepicker -->
<script src="/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<script src="/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="/vendors/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js"></script>

<!-- Slimscroll -->
<script src="/vendors/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- FastClick -->
<script src="/vendors/fastclick/lib/fastclick.js"></script>

<!-- fox_admin App -->
<script src="/js/template.js"></script>


{{--<script src="//www.fuelcdn.com/fuelux/3.13.0/js/fuelux.min.js"></script>--}}




{{--<script type="text/javascript">--}}

{{--WeatherIcon.add('icon1'	, WeatherIcon.SLEET , {stroke:false , shadow:false , animated:true } );--}}
{{--WeatherIcon.add('icon2'	, WeatherIcon.SNOW , {stroke:false , shadow:false , animated:true } );--}}
{{--WeatherIcon.add('icon3'	, WeatherIcon.LIGHTRAINTHUNDER , {stroke:false , shadow:false , animated:true } );--}}

{{--</script>--}}


<script>
    var controller = new controller(
        new pageController(
            new modalController(),
            new workingBlindController()
        ),
        new sessionController()
    );
</script>