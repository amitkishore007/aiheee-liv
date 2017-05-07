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
  
  <!--  CONTENT -->
  <section id="content">
    <div class="page email-page tbox tbox-sm">
      <div class="row">
        <!-- left side -->  
        <div class="col-md-3">
          <section class="boxs">
            <div class="tcol"> 
              <!-- left side -->
            
              
            </div>
          </section>
        </div>
        <!-- left side -->
        <!-- right side -->
        <div class="col-md-12">
          <section class="boxs">
            <div class="tcol"> 
            <!-- right side header -->
            <div class="p-15 bg-white b-b">
              <div class="btn-toolbar">
                
              </div>
            </div>
            <!-- /right side header --> 
            
            <!-- right side body -->
            <div class="p-15">
              <form name="newMail" class="form-horizontal mt-20">
                <div class="form-group">
                  <label class="col-lg-2 control-label">To :</label>
                  <div class="col-lg-10">
                    <select data-placeholder="Select recipients..." multiple="" tabindex="3" class="chosen-select" style="width:96.5%;">
                      <option value="ici@gmail.com">Pi@gmail.com</option>
                      <option value="johny@gmail.com">johny@gmail.com</option>
                      <option value="arnie@gmail.com">Akshay@gmail.com</option>
                      <option value="pete@gmail.com">Dhavan@gmail.com</option>
                      <option value="gorge@gmail.com">Sachin@gmail.com</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Subject :</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-lg-2 control-label">Content :</label>
                  <div class="col-lg-10">
                    <div id="summernote">Hello!</div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-lg-10 col-lg-offset-2"> <a class="btn btn-raised btn-default">
                                        <i class="fa fa-send"></i> Send Message</a> </div>
                </div>
              </form>
            </div>
          </div>
          </section>
        </div>
        <!-- right side -->
      </div>
      
    </div>
  </section>
  <!--/ CONTENT --> 
  
</div>
<!--/ Application Content --> 

<!-- Vendor JavaScripts -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/js/vendor/chosen/chosen.jquery.min.js"></script> 
<script src="assets/js/vendor/summernote/summernote.min.js"></script> 
<!--/ vendor javascripts --> 

<!--  Custom JavaScripts --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 

<!--  Page Specific Scripts --> 
<script type="text/javascript">
    $(window).load(function(){

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
