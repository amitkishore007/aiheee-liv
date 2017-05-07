
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
    <!--  CONTENT  -->
    <section id="content">
        <div class="page page-forms-common"> 
            
            <!-- bradcome -->
            <div class="bg-light lter b-b wrapper-md mb-10">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <h1 class="font-thin h3 m-0">Company Expenses</h1>
                        <small class="text-muted">Welcome to Aiheee application</small> </div>
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
                                    <label for="exampleInputEmail1">Month:</label>
                                    <select>
										
								<option selected value='1'>Janaury</option>
								<option value='2'>February</option>
								<option value='3'>March</option>
								<option value='4'>April</option>
								<option value='5'>May</option>
								<option value='6'>June</option>
								<option value='7'>July</option>
								<option value='8'>August</option>
								<option value='9'>September</option>
								<option value='10'>October</option>
								<option value='11'>November</option>
							    <option value='12'>December</option>
									</select>
                                </div>
								
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Year:</label>
                                    <select>
							    <option selected value='1'>2017</option>
								<option value='2'>2016</option>
								<option value='3'>2018</option>
								<option value='4'>2019</option>
								<option value='5'>2020</option>
								
									</select>
                                </div>
								
								<div class="form-group">
									<label class="col-sm-3 control-label">Expense Description and Cost</label>
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
                               
                                <button type="submit" class="btn btn-raised btn-primary">Submit</button>
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
