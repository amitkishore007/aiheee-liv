
<?php
 include_once 'check-session.php';
?>


        <!--SIDEBAR Content -->
        <?php
   include_once("sidebar.php");
   ?>
		</aside>
		<!--/ SIDEBAR Content --> 
		
		<!--RIGHTBAR Content -->
		
		<!--/ RIGHTBAR Content --> 
	</div>
	<!--/ CONTROLS Content --> 
	
	<!-- CONTENT -->
	<section id="content">
		<div class="page page-forms-validate">
			<!-- bradcome -->
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					<div class="col-sm-6 col-xs-12">
						<h1 class="font-thin h3 m-0">Validation Form</h1>
						<small class="text-muted">Welcome to Oakleaf application</small>
					</div>
				</div>
			</div>
			<!-- row -->
			
					
			<div class="row">
				<div class="col-md-12">
					<section class="boxs">
						<div class="boxs-header dvd dvd-btm">
							<h1 class="custom-font"><strong>Add</strong> Product</h1>
							
						</div>
						<div class="boxs-body">
							<form class="form-horizontal" name="form4" role="form" id="form4" data-parsley-validate>
								<div class="form-group">
									<label class="col-sm-3 control-label">Product Name</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Product Name"
                                                   data-parsley-trigger="change"
                                                   required>
									</div>
								</div>
								
								
								<hr class="line-dashed full-witdh-line" />
								<div class="form-group">
									<label class="col-sm-3 control-label">Enter Category</label>
									<div class="col-sm-9">
										<input type="url" class="form-control" placeholder="Category"
                                                   data-parsley-trigger="change"
                                                   required>
									</div>
								</div>
								<hr class="line-dashed full-witdh-line" />
								<div class="form-group">
									<label class="col-sm-3 control-label">Price</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Price"
                                                   data-parsley-trigger="change"
                                                   data-parsley-type="digits"
                                                   required>
									</div>
								</div>
								<hr class="line-dashed full-witdh-line" />
								<div class="form-group">
									<label class="col-sm-3 control-label">Quantity</label>
									<div class="col-sm-9">
										<input type="number" class="form-control" placeholder="Quantity"
                                                   data-parsley-trigger="change"
                                                   required>
									</div>
								</div>
								<hr class="line-dashed full-witdh-line" />
								<div class="form-group">
									<label class="col-sm-3 control-label">Stock Product</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Stock Product"
                                                   data-parsley-trigger="change"
                                                   pattern="/^[a-zA-Z]+$/"
                                                   required>
									</div>
								</div>
								<hr class="line-dashed full-witdh-line" />								
								<div class="form-group">
									<label class="col-sm-3 control-label">Discount</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="Discount"
                                                   data-parsley-trigger="change"
                                                   data-parsley-type="alphanum"
                                                   required>
									</div>
								</div>
								<hr class="line-dashed full-witdh-line" />
								<div class="form-group">
									<label class="col-sm-3 control-label">Date of adding</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" placeholder="YYYY-MM-DD"
                                                   data-parsley-trigger="change"
                                                   pattern="/[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])$/"
                                                   required>
									</div>
								</div>
							
								<hr class="line-dashed full-witdh-line" />
								
								<div class="form-group">
									<label class="col-sm-3 control-label">Description</label>
									<div class="col-sm-9">
										<div class="row">
											<div class="col-md-12">
												<input type="text" class="form-control"
                                                           data-parsley-trigger="change"
                                                           required>
											</div>
											<div class="col-md-6">
												<input type="text" id="fc20" class="form-control"
                                                           data-parsley-trigger="change"
                                                           data-parsley-equalto="#fc19"
                                                           required>
											</div>
										</div>
										
										
										
										
										
									</div>
								</div>
							</form>
						</div>
						<div class="boxs-footer text-right bg-tr-black lter dvd dvd-top">
							<button type="submit" class="btn btn-default" id="form4Submit">Submit</button>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
	<!--/ CONTENT --> 
</div>
<!--/ Application Content --> 

<!-- Vendor JavaScripts --> 
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/js/vendor/parsley/parsley.min.js"></script> 
<!--/ vendor javascripts --> 

<!-- Custom JavaScripts  --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 


<!-- Page Specific Scripts  --> 
<script type="text/javascript">
	$(window).load(function(){
		$('#form1').parsley().subscribe('parsley:field:validate', function () {
			if ($('#form1').parsley().isValid()) {
				$('#form1Submit').prop('disabled', false);
			} else {
				$('#form1Submit').prop('disabled', true);
			}
		});

		$('#form1Submit').on('click', function(){
			$('#form1').submit();
		});

		$('#form2Submit').on('click', function(){
			$('#form2').submit();
		});

		$('#form3Submit').on('click', function(){
			$('#form3').submit();
		});

		$('#form4Submit').on('click', function(){
			$('#form4').submit();
		});
	});
</script> 
<!--/ Page Specific Scripts --> 

</body>

<!-- Mirrored from thememakker.com/oakleaf-admin/form-validate.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Dec 2016 18:09:29 GMT -->
</html>
