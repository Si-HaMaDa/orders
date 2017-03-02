 </section>
</div>



    <!-- javascripts -->
    <script src="../js/adm/jquery.js"></script>
	  <script src="../js/adm/jquery-ui-1.10.4.min.js"></script>
    <script src="../js/adm/jquery-1.8.3.min.js"></script>
    <script src="../js/adm/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="../js/adm/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="../js/adm/jquery.scrollTo.min.js"></script>
    <script src="../js/adm/jquery.nicescroll.js"></script>
    <!-- charts scripts -->
    <script src="../assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="../js/adm/jquery.sparkline.js"></script>
    <script src="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="../js/adm/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <script src="../js/adm/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	  <script src="../assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="../js/adm/calendar-custom.js"></script>
	  <script src="../js/adm/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="../js/adm/jquery.customSelect.min.js" ></script>
	  <script src="../assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="../js/adm/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../js/adm/sparkline-chart.js"></script>
    <script src="../js/adm/easy-pie-chart.js"></script>
    <script src="../js/adm/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../js/adm/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../js/adm/xcharts.min.js"></script>
    <script src="../js/adm/jquery.autosize.min.js"></script>
    <script src="../js/adm/jquery.placeholder.min.js"></script>
    <script src="../js/adm/gdp-data.js"></script>	
    <script src="../js/adm/morris.min.js"></script>
    <script src="../js/adm/sparklines.js"></script>	
    <script src="../js/adm/charts.js"></script>
    <script src="../js/adm/jquery.slimscroll.min.js"></script>
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
