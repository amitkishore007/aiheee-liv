<?php include('header.php'); ?>
                <!--End of Header Area-->
                <!--Breadcrumb Banner Area Start-->
                <div class="breadcrumb-banner-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="breadcrumb-text">
                                    <h1 class="text-center">LOGIN</h1>
                                    <div class="breadcrumb-bar">
                                        <ul class="breadcrumb text-center">
                                            <li><a href="index.html">Home</a></li>
                                            <li>LOGIN</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Breadcrumb Banner Area-->
               
                <!--Contact Form Area Start-->
				
                <div class="contact-form-area section-padding" style="background-image:url(images/1 (1).jpg)">
                    <div class="container">
                        <div class="row">
                          
                            <div class="col-md-9">
                                <h4 class="contact-title">Login!</h4>
                                <form action="login_check.php" method="post">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <input type="email" name="email" placeholder="Emailaddress ">
                                        </div>
                                        <div class="col-md-9">
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
										  <div class="col-md-6">
											<button type="reset">Forgot Password*</button>
                                        </div>
										
                                        <div class="col-md-12">
                                            <br><br>
                                            <button type="submit" class="button-default">LOGIN</button>
                                        </div>
                                    </div>
                                </form>
                             
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Contact Form-->
                <!--Newsletter Area Start-->
              <?php
			  include('footer.php');
			  ?>