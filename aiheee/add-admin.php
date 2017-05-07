<?php include_once 'check-session.php';
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
                        
                        <small class="text-muted">Welcome to Aiheee application</small> </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                
                <div class="col-md-12">
                    <section class="boxs">
                        <div class="boxs-header dvd dvd-btm">
                            <h1 class="custom-font"><strong>Administrator </strong>Form</h1>
                            
                        </div>
                        <div class="boxs-body">
                            <form role="form">
               <div class="form-group">
                                    <label for="exampleInputPassword1">Name:</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                                </div>
                <div class="form-group">
                                    <label for="exampleInputPassword1">Admin Id:</label>
                                    <input type="text" class="form-control" id="exampleInputName" placeholder="Id">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address:</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password:</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="optionsCheckboxes">
                                        Check me out</label>
                                </div>
                                <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                            </form>
                        </div>
                    </section>
                </div>
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


</html>

 
