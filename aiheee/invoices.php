
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
  
  <!--CONTENT  -->
  <section id="content">
    <div class="page page-shop-invoices"> 
      <!-- bradcome -->
      <div class="bg-light lter b-b wrapper-md mb-10">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <h1 class="font-thin h3 m-0">Invoice</h1>
            <small class="text-muted">Welcome to Oakleaf application</small> </div>
        </div>
      </div>
      
      <!-- page content -->
      <div class="pagecontent">
        <div class="row">
          <div class="col-md-12">           
            <section class="boxs">
              <div class="boxs-header dvd dvd-btm">
                <h1 class="custom-font"><strong>Invoices</strong> Detail</h1>
                <ul class="controls">
                  <li><a href="javascipt:;"><i class="fa fa-plus mr-5"></i> New Invoice</a></li>
                  <li class="dropdown"> <a role="button" tabindex="0" class="dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                      <li><a href>Print Invoices</a></li>
                      <li role="presentation" class="divider"></li>
                      <li><a href>Export to XLS</a></li>
                      <li><a href>Export to CSV</a></li>
                      <li><a href>Export to XML</a></li>
                    </ul>
                  </li>
                </ul>
              </div>                          
                <div class="panel-body">
                  <div class="clearfix">
                    <div class="pull-left">
                      <h4 class="text-right"><img src="assets/images/logo-placeholder.jpg" width="70" alt="velonic"></h4>                                                
                    </div>
                    <div class="pull-right">
                      <h4>Invoice # <br>
                        <strong>2015-04-5654667546</strong>
                      </h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">                                                
                      <div class="pull-left mt-20">
                        <address>
                          <strong>Twitter, Inc.</strong><br>
                          795 Folsom Ave, Suite 546<br>
                          San Francisco, CA 54656<br>
                          <abbr title="Phone">P:</abbr> (123) 456-34636
                          </address>
                      </div>
                      <div class="pull-right mt-20">
                        <p><strong>Order Date: </strong> Jun 15, 2016</p>
                        <p class="m-t-10"><strong>Order Status: </strong>
                          <span class="label label-pink">Pending</span></p>
                        <p class="m-t-10"><strong>Order ID: </strong> #123456</p>
                      </div>
                    </div>
                  </div>
                  <div class="mt-40"></div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="table-responsive">
                        <table class="table mt-20">
                          <thead>
                            <tr><th>Sr.No.</th>
                            <th>Item</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Cost</th>
                            <th>Total</th>
                          </tr></thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>LCD</td>
                              <td>Lorem ipsum dolor sit amet.</td>
                              <td>1</td>
                              <td>$380</td>
                              <td>$380</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Mobile</td>
                              <td>Lorem ipsum dolor sit amet.</td>
                              <td>5</td>
                              <td>$50</td>
                              <td>$250</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>LED</td>
                              <td>Lorem ipsum dolor sit amet.</td>
                              <td>2</td>
                              <td>$500</td>
                              <td>$1000</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>LCD</td>
                              <td>Lorem ipsum dolor sit amet.</td>
                              <td>3</td>
                              <td>$300</td>
                              <td>$900</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Mobile</td>
                              <td>Lorem ipsum dolor sit amet.</td>
                              <td>5</td>
                              <td>$80</td>
                              <td>$400</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row" style="border-radius: 0px;">
                    <div class="col-md-3 col-md-offset-9">
                      <p class="text-right"><b>Sub-total:</b> 2930.00</p>
                      <p class="text-right">Discout: 12.9%</p>
                      <p class="text-right">VAT: 12.9%</p>
                      <hr>
                      <h3 class="text-right">USD 2930.00</h3>
                    </div>
                  </div>
                  <hr>
                  <div class="hidden-print">
                    <div class="pull-right">
                      <a href="javascript:window.print()" class="btn btn-raised btn-primary">
                        <i class="fa fa-print"></i></a>
                      <a href="#" class="btn btn-raised btn-default">Submit</a>
                    </div>
                  </div>
                </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!--/ Application Content --> 

<!--  Vendor JavaScripts -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>
<!--/ vendor javascripts -->

<!--  Custom JavaScripts  --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 
</body>


</html>


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
  
  <!--CONTENT  -->
  <section id="content">
    <div class="page page-shop-invoices"> 
      <!-- bradcome -->
      <div class="bg-light lter b-b wrapper-md mb-10">
        <div class="row">
          <div class="col-sm-6 col-xs-12">
            <h1 class="font-thin h3 m-0">Invoice</h1>
            <small class="text-muted">Welcome to Oakleaf application</small> </div>
        </div>
      </div>
      
      <!-- page content -->
      <div class="pagecontent">
        <div class="row">
          <div class="col-md-12">           
            <section class="boxs">
              <div class="boxs-header dvd dvd-btm">
                <h1 class="custom-font"><strong>Invoices</strong> Detail</h1>
                <ul class="controls">
                  <li><a href="javascipt:;"><i class="fa fa-plus mr-5"></i> New Invoice</a></li>
                  <li class="dropdown"> <a role="button" tabindex="0" class="dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down ml-5"></i></a>
                    <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                      <li><a href>Print Invoices</a></li>
                      <li role="presentation" class="divider"></li>
                      <li><a href>Export to XLS</a></li>
                      <li><a href>Export to CSV</a></li>
                      <li><a href>Export to XML</a></li>
                    </ul>
                  </li>
                </ul>
              </div>                          
                <div class="panel-body">
                  <div class="clearfix">
                    <div class="pull-left">
                      <h4 class="text-right"><img src="assets/images/logo-placeholder.jpg" width="70" alt="velonic"></h4>                                                
                    </div>
                    <div class="pull-right">
                      <h4>Invoice # <br>
                        <strong>2015-04-5654667546</strong>
                      </h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">                                                
                      <div class="pull-left mt-20">
                        <address>
                          <strong>Twitter, Inc.</strong><br>
                          795 Folsom Ave, Suite 546<br>
                          San Francisco, CA 54656<br>
                          <abbr title="Phone">P:</abbr> (123) 456-34636
                          </address>
                      </div>
                      <div class="pull-right mt-20">
                        <p><strong>Order Date: </strong> Jun 15, 2016</p>
                        <p class="m-t-10"><strong>Order Status: </strong>
                          <span class="label label-pink">Pending</span></p>
                        <p class="m-t-10"><strong>Order ID: </strong> #123456</p>
                      </div>
                    </div>
                  </div>
                  <div class="mt-40"></div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="table-responsive">
                        <table class="table mt-20">
                          <thead>
                            <tr><th>Sr.No.</th>
                            <th>Item</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Unit Cost</th>
                            <th>Total</th>
                          </tr></thead>
                          <tbody>
                            <tr>
                              <td>1</td>
                              <td>LCD</td>
                              <td>Lorem ipsum dolor sit amet.</td>
                              <td>1</td>
                              <td>$380</td>
                              <td>$380</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Mobile</td>
                              <td>Lorem ipsum dolor sit amet.</td>
                              <td>5</td>
                              <td>$50</td>
                              <td>$250</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>LED</td>
                              <td>Lorem ipsum dolor sit amet.</td>
                              <td>2</td>
                              <td>$500</td>
                              <td>$1000</td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>LCD</td>
                              <td>Lorem ipsum dolor sit amet.</td>
                              <td>3</td>
                              <td>$300</td>
                              <td>$900</td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Mobile</td>
                              <td>Lorem ipsum dolor sit amet.</td>
                              <td>5</td>
                              <td>$80</td>
                              <td>$400</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row" style="border-radius: 0px;">
                    <div class="col-md-3 col-md-offset-9">
                      <p class="text-right"><b>Sub-total:</b> 2930.00</p>
                      <p class="text-right">Discout: 12.9%</p>
                      <p class="text-right">VAT: 12.9%</p>
                      <hr>
                      <h3 class="text-right">USD 2930.00</h3>
                    </div>
                  </div>
                  <hr>
                  <div class="hidden-print">
                    <div class="pull-right">
                      <a href="javascript:window.print()" class="btn btn-raised btn-primary">
                        <i class="fa fa-print"></i></a>
                      <a href="#" class="btn btn-raised btn-default">Submit</a>
                    </div>
                  </div>
                </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!--/ Application Content --> 

<!--  Vendor JavaScripts -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>
<!--/ vendor javascripts -->

<!--  Custom JavaScripts  --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 
</body>


</html>

 
Success!
