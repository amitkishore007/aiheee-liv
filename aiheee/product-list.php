
<?php
 include_once 'check-session.php';
?>


        <!--SIDEBAR Content -->
        <?php
   include_once("sidebar.php");
   ?>
		
		<!--RIGHTBAR Content -->
		
		<!--/ RIGHTBAR Content --> 
	</div>
	<!--/ CONTROLS Content --> 
	
	<!--  CONTENT  -->
	<section id="content">
		<div class="page page-tables-footable"> 
			<!-- bradcome -->
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<h1 class="font-thin h3 m-0">Product-List</h1>
						<small class="text-muted">Welcome to Oakleaf application</small> </div>
				</div>
			</div>
			
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<section class="boxs ">
						<div class="boxs-header dvd dvd-btm">
							<h1 class="custom-font"><strong>Product-List</strong> Table</h1>
							
						</div>
						<div class="boxs-body">
							<div class="form-group">
								<label for="filter" style="padding-top: 5px">Search:</label>
								<input id="filter" type="text" class="form-control rounded input-sm w-md mb-10 inline-block"/>
							</div>
							<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
								<thead>
									<tr>
										<th>Product Name</th>
										<th>Prodcut ID</th>
										<th data-hide="phone">Discount(%)</th>
										<th data-hide='phone, tablet'>Price</th>
										<th data-hide='phone, tablet'>Quantity</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>John</td>
										<td>001</td>
										<td>12</td>
										<td>4559</td>
										<td>1</td>
									</tr>
									<tr>
										<td>karlos</td>
										<td>002</td>
										<td>12</td>
										<td>5549</td>
										<td>2</td>
									</tr>
									<tr>
										<td>Mary</td>
										<td>003</td>
										<td>12</td>
										<td>315</td>
										<td>1</td>
									</tr>
									<tr>
										<td>akshay</td>
										<td>004</td>
										<td>12</td>
										<td>1198</td>
										<td>5</td>
									</tr>
									<tr>
										<td>Larry</td>
										<td>005</td>
										<td>12</td>
										<td>565</td>
										<td>4</td>
									</tr>
									<tr>
										<td>Jennifer</td>
										<td>006</td>
										<td>12</td>
										<td>3945</td>
										<td>1</td>
									</tr>
									<tr>
										<td>Sly</td>
										<td>007</td>
										<td>12</td>
										<td>7655</td>
										<td>2</td>
									</tr>
									<tr>
										<td>Arnold</td>
										<td>008</td>
										<td>12</td>
										<td>177</td>
										<td>4</td>
									</tr>
									<tr>
										<td>jacky</td>
										<td>009</td>
										<td>12</td>
										<td>2222</td>
										<td>2</td>
									</tr>
                                    <tr>
										<td>jacky</td>
										<td>009</td>
										<td>12</td>
										<td>2222</td>
										<td>2</td>
									</tr>
								</tbody>
								<tfoot class="hide-if-no-paging">
									<tr>
										<td colspan="5" class="text-right"><ul class="pagination">
											</ul></td>
									</tr>
								</tfoot>
							</table>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
	<!--/ CONTENT --> 
	
</div>
<!--/ Application Content --> 

<!--  Vendor JavaScripts  -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/js/vendor/footable/footable.all.min.js"></script> 
<!--/ vendor javascripts --> 

<!--  Custom JavaScripts  --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts -->

<!--  Page Specific Scripts  --> 
<script type="text/javascript">
	$(window).load(function(){
		$('.footable').footable();
	});
</script> 
<!--/ Page Specific Scripts --> 
</body>

<!-- Mirrored from thememakker.com/oakleaf-admin/tables-footable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Dec 2016 18:10:21 GMT -->
</html>
