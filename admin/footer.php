



    <!-- javascripts -->
    <script src="niceadmin/js/jquery.js"></script>
	  <script src="niceadmin/js/jquery-ui-1.10.4.min.js"></script>
    <script src="niceadmin/js/jquery-1.8.3.min.js"></script>
    <script src="niceadmin/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="niceadmin/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="niceadmin/js/jquery.scrollTo.min.js"></script>
    <script src="niceadmin/js/jquery.nicescroll.js"></script>
    <!-- charts scripts -->
    <script src="niceadmin/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="niceadmin/js/jquery.sparkline.js"></script>
    <script src="niceadmin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="niceadmin/js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="niceadmin/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	  <script src="niceadmin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="niceadmin/js/calendar-custom.js"></script>
	  <script src="niceadmin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="niceadmin/js/jquery.customSelect.min.js" ></script>
	  <script src="niceadmin/assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="niceadmin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="niceadmin/js/sparkline-chart.js"></script>
    <script src="niceadmin/js/easy-pie-chart.js"></script>
    <script src="niceadmin/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="niceadmin/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="niceadmin/js/xcharts.min.js"></script>
    <script src="niceadmin/js/jquery.autosize.min.js"></script>
    <script src="niceadmin/js/jquery.placeholder.min.js"></script>
    <script src="niceadmin/js/gdp-data.js"></script>	
    <script src="niceadmin/js/morris.min.js"></script>
    <script src="niceadmin/js/sparklines.js"></script>	
    <script src="niceadmin/js/charts.js"></script>
    <script src="niceadmin/js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
