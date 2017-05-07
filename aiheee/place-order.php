
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
        <div class="page page-forms-common"> 
            
            <!-- bradcome -->
            <div class="bg-light lter b-b wrapper-md mb-10">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="font-thin h3 m-0">Place Order</h1>
                        <small class="text-muted">Welcome to Oakleaf application</small> </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                
                <div class="col-md-12">
                    <section class="boxs">
                        <div class="boxs-header dvd dvd-btm">
                            
                            
                        </div>
                        <div class="boxs-body">
                            <form role="form">
                                <div class="form-group">
                                    <hr class="line-dashed full-witdh-line" />
								<div class="form-group">
									<label class="col-sm-3 control-label">Customer Name:</label>
									<div class="col-sm-9">
										<input type="url" class="form-control" placeholder="Customer"
                                                   data-parsley-trigger="change"
                                                   required>
									</div>
								</div>
                                </div>
								
								 <div class="form-group">
                                    <label class="col-sm-3 control-label">Customer Id:</label>
									 
                                    <select>
										<div class="col-sm-9">
							    <option selected value='1'>u001</option>
								<option value='2'>u002</option>
								<option value='3'>u003</option>
								<option value='4'>u004</option>
								<option value='5'>u005</option>
								
									</select>
                                </div>
								
                                <div class="form-group">
                                    <hr class="line-dashed full-witdh-line" />
								<div class="form-group">
									<label class="col-sm-3 control-label">Product Name:</label>
									<div class="col-sm-9">
										<input type="url" class="form-control" placeholder="Product Name"
                                                   data-parsley-trigger="change"
                                                   required>
									</div>
								</div>
                                </div>
								<div class="form-group">
                                    <hr class="line-dashed full-witdh-line" />
								<div class="form-group">
									<label class="col-sm-3 control-label">Price:</label>
									<div class="col-sm-9">
										<input type="url" class="form-control" placeholder="Price"
                                                   data-parsley-trigger="change"
                                                   required>
									</div>
								</div>
                                </div>
								
								
								<div class="form-group">
                                    <hr class="line-dashed full-witdh-line" />
								<div class="form-group">
									<label class="col-sm-3 control-label">Quantity:</label>
									<div class="col-sm-9">
										<input type="url" class="form-control" placeholder="Quantity"
                                                   data-parsley-trigger="change"
                                                   required>
									</div>
								</div>
                                </div>
										

										
										
										
									</div>
								</div>
                               
						<center><button type="submit" class="btn btn-raised btn-primary">Order</button></center>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
            
        </div>
    </section>
    <!--/ CONTENT --> 
</div>
<!--/ Application Content --> 
<!--Vendor JavaScripts  --> 
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/bootstrapscripts.bundle.js"></script>
<script src="assets/js/vendor/summernote/summernote.min.js"></script> 
<!--/ vendor javascripts --> 

<!--  Custom JavaScripts --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 

<!--  Page Specific Scripts  --> 
<script type="text/javascript">
	$(window).load(function(){
		$('#ex1').slider({
			formatter: function(value) {
				return 'Current value: ' + value;
			}
		});
		$("#ex1").on("slide", function(slideEvt) {
			$("#ex1SliderVal").text(slideEvt.value);
		});

		$("#ex2, #ex3, #ex4, #ex5").slider();

		//load wysiwyg editor
		$('#summernote').summernote({
			height: 200   //set editable area's height
		});
		//*load wysiwyg editor
	});
</script> 
<!--/ Page Specific Scripts -->
</body>

<!-- Mirrored from thememakker.com/oakleaf-admin/form-common.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Dec 2016 18:09:28 GMT -->
</html>
