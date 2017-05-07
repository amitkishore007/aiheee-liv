
<?php
 include_once 'check-session.php';
?>


        <!--SIDEBAR Content -->
        <?php
   include_once("sidebar.php");
   ?>
		<!--/ SIDEBAR Content --> 
		
		<!--RIGHTBAR Content -->
		
		<!--/ RIGHTBAR Content --> 
	</div>
	<!--/ CONTROLS Content --> 
	
	<!-- CONTENT  -->
	<section id="content">
		<div class="page charts-page"> 
			<!-- bradcome -->
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<h1 class="font-thin h3 m-0">Charts</h1>
						<small class="text-muted">Welcome to Aiheee application</small> </div>
				</div>
			</div>
			
			<!-- row -->
			<div class="col-md-6">
					<section class="boxs">
						<div class="boxs-header dvd dvd-btm">
							<h1 class="custom-font"><strong>Donut </strong>Chart</h1>							
						</div>
						<div class="boxs-body">
							<div id="donut-chart" style="height: 250px"></div>
						</div>
					</section>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<section class="boxs">
						<div class="boxs-header dvd dvd-btm">
							<h1 class="custom-font"><strong>Pie </strong>Chart</h1>							
						</div>
						<div class="boxs-body">
							<div id="pie-chart" style="height: 250px"></div>
						</div>
					</section>
					
				</div>
				
			</div>
			
			
		
		
		
	</section>


<!--/ Application Content --> 

<!--  Vendor JavaScripts  -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/js/vendor/sparkline/jquery.sparkline.min.js"></script> 

<script src="assets/bundles/flotscripts.bundle.js"></script>

<script src="assets/js/vendor/gaugejs/gauge.min.js"></script> 
<script src="assets/js/vendor/raphael/raphael-min.js"></script> 
<script src="assets/js/vendor/d3/d3.v2.js"></script> 
<script src="assets/js/vendor/rickshaw/rickshaw.min.js"></script> 
<script src="assets/js/vendor/morris/morris.min.js"></script> 
<script src="assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script> 
<script src="assets/js/vendor/countTo/jquery.countTo.js"></script> 
<!--/ vendor javascripts --> 

<!--  Custom JavaScripts --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 

<!-- Page Specific Scripts  --> 
<script type="text/javascript">
        $(window).load(function(){

          
          
         


            // Easy-pie charts
            var charts = $('.easypiechart');

            //update instance every 5 sec
            window.setInterval(function() {

                // refresh easy pie chart
                charts.each(function() {
                    $(this).data('easyPieChart').update(Math.floor(100*Math.random()));
                });

            }, 5000);
           
         
                        
            // Initialize Pie Chart
            var data6 = [
                { label: 'Chrome', data: 40 },
                { label: 'Firefox', data: 35 },
                { label: 'Safari', data: 17 },
                { label: 'IE', data: 09 },
                { label: 'Opera', data: 4 },
                { label: 'Other', data: 10}
            ];

            var options6 = {
                series: {
                    pie: {
                        show: true,
                        innerRadius: 0,
                        stroke: {
                            width: 0
                        },
                        label: {
                            show: true,
                            threshold: 0.02
                        }
                    }
                },
                colors: ['#46bc9f','#e56b6b','#ecc755','#9bbd5a','#a994cd','#46add4'],
                grid: {
                    hoverable: true,
                    clickable: true,
                    borderWidth: 0,
                    color: '#3d4c5a'
                },
                tooltip: true,
                tooltipOpts: { content: '%s: %p.0%' }
            };

            var plot6 = $.plot($("#pie-chart"), data6, options6);

            $(window).resize(function() {
                // redraw the graph in the correctly sized div
                plot6.resize();
                plot6.setupGrid();
                plot6.draw();
            });
            // * Initialize Pie Chart
			

			   // Initialize Donut Chart
            var data7 = [
                { label: 'Chrome', data: 35 },
                { label: 'Firefox', data: 25 },
                { label: 'Safari', data: 15 },
                { label: 'IE', data: 10 },
                { label: 'Opera', data: 5 },
                { label: 'Other', data: 10}
            ];

            var options7 = {
                series: {
                    pie: {
                        show: true,
                        innerRadius: 0.5,
                        stroke: {
                            width: 0
                        },
                        label: {
                            show: true,
                            threshold: 0.01
                        }
                    }
                },
                colors: ['#74c7ff','#ff8fa7','#aa9bff','#5e90b5','#66cd7d','#ffdc88'],
                grid: {
                    hoverable: true,
                    clickable: true,
                    borderWidth: 0,
                    color: '#3d4c5a'
                },
                tooltip: true,
                tooltipOpts: { content: '%s: %p.0%' }
            };

            var plot7 = $.plot($("#donut-chart"), data7, options7);

            $(window).resize(function() {
                // redraw the graph in the correctly sized div
                plot7.resize();
                plot7.setupGrid();
                plot7.draw();
            });
            // * Initialize Donut Chart

			

                    
			
			
			
			



        });
    </script> 

<!--/ custom javascripts --> 
</body>


</html>
