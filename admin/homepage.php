<?
include_once('dbconnect.php');

        if(isset($_POST['submit']))
          {
          $marquee_content = $_POST['marquee_content'];
          $exam_heading = $_POST['exam_heading'];
          $exam_content = $_POST['exam_content'];
          $notice_heading = $_POST['notice_heading'];
                    $notice_content = $_POST['notice_content'];

    
          $insert=mysql_query("INSERT INTO homepage( marquee_content, exam_heading, exam_content, notice_heading,notice_content) VALUES ('$marquee_content','$exam_heading','$exam_content','$notice_heading','$notice_content')") or die(mysql_error());



          if(!$insert)
          
            echo "<script type=\"text/javascript\"> window.location = \"homepage.php?msg=failure&flag=1\"; </script>";
          

          else
          

            echo "<script type=\"text/javascript\"> window.location = \"homepage.php?msg=succ&flag=2\";</script>";
          }

      
      $e = 0;
      if(isset($_GET['home_id']))
       {
      $e = 1;
      echo 
      $home_id = $_GET['home_id'];
      $us = mysql_query("select * from homepage where home_id= $home_id");
      $usr = mysql_fetch_array($us);
     }
     if(isset($_POST['update_user']))
     {
      $home_id = mysql_real_escape_string($_POST['home_id']);
      $marquee_content = $_POST['marquee_content'];
      $exam_heading = $_POST['exam_heading'];
      $exam_content = $_POST['exam_content'];
      $notice_heading = $_POST['notice_heading'];
      $notice_content = $_POST['notice_content'];
     
      $query=mysql_query("update homepage set marquee_content='$marquee_content', exam_heading='$exam_heading', exam_content='$exam_content', notice_heading='$notice_heading', notice_content='$notice_content' where home_id=$home_id") or die( mysql_error());
      echo "<script type=\"text/javascript\"> window.location = \"homepage.php?succ=msg=succ&flag=2\"; </script>";     
      ob_end_flush();
      exit;
      }
   
    
      
       ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <!-- /top tiles -->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <?php // if(isset($_GET['home_id'])) { ?>
               <div class="x_panel">
                  <div class="x_title">  
                   <h2>Contact  Details<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                   
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br/>
                    <form action="" method="post" id="demo-form2" action="homepage.php" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                          <input type="hidden"  readonly id="id" name="home_id"  value="<?php if($e==1) echo $usr['home_id']; ?>" />
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Exam Heading<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" value="<?php if($e==1) echo $usr['exam_heading']; ?>"  name="exam_heading" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                             <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Exam Content<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" value="<?php if($e==1) echo $usr['exam_content']; ?>"  name="exam_content" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                           <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Notice Heading<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" value="<?php if($e==1) echo $usr['notice_heading']; ?>"  name="notice_heading" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Notice Content<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" value="<?php if($e==1) echo $usr['notice_content']; ?>"  name="notice_content" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                  
                    
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Marquee Content<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="message" required class="form-control" name="marquee_content"  rows="5"  data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"><?php if($e==1) echo $usr['marquee_content'];?></textarea>        
                        
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="submit" name="<?php if($e==0)echo "submit"; else echo "update_user"?>" value="<?php if($e==0)echo "Submit";else echo "Update" ?>" class="btn btn-success" value="Submit">
                          <input type="reset" name="reset" class="btn btn-primary" value="Cancel">
                         </div>
                      </div>
                    </form>
                  </div>
                </div>
              
            </div>

          </div>
          <br />
 
    <?php

       if(isset($_GET['delete']))
    {
      $home_id = $_GET['delete'];
      mysql_query("delete from homepage where home_id=$home_id");
      echo "<script type=\"text/javascript\">
      window.location = \"homepage.php?succ=msg=succ&flag=2\"; 
      </script>";     
      ob_end_flush();
      exit;
    }

   ?>
   
   
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                  <div class="x_title">
        <?php
                if(isset($_GET['flag']))
                {
                if($_GET['flag']==1)
                echo "<div class=\"alert alert-warning\">Something went Wrong.Please Try Again.</div>";
                else
                echo "<div class=\"alert alert-success\"> Updated Successfully.</div>";
                }
                ?>

                    <h2>Home Details <small></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                          <p class="text-muted font-13 m-b-30">
                            Home Getting Content
                          </p>

                          <table id="datatable-keytable" class="table table-striped table-bordered">
                            <thead>
                           <tr>
                                <th>Sno.</th>
                            
                                <th>Marquee Content</th>
                                <th>Exam Heading</th>
                                <th>Exam Content</th>
                                <th>Notice Heading</th>
                                <th>Notice Content</th>
                                
                                <th>Action</th>

                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                $i = 1;
                $rs = mysql_query("select * from  homepage");
                while($res = mysql_fetch_array($rs))
                {
                $home_id = $res['home_id'];
                $marquee_content = $res['marquee_content'];
              
                $exam_heading = $res['exam_heading'];
                $exam_content = $res['exam_content'];
                $notice_heading = $res['notice_heading'];
                $notice_content = $res['notice_content'];
                $edit_link="homepage.php?home_id=".$home_id;
                   $edit_link1="homepage.php?delete=".$home_id;
                echo "<tr>";
                echo "<td>$i</td>";
                echo "<td>$marquee_content</td>";
                echo "<td>$exam_heading</td>";
                echo "<td>$exam_content</td>";
                echo "<td>$notice_heading</td>";
                echo "<td>$notice_content</td>";
                echo "<td><a href=\"$edit_link\"><i class=\"fa fa-edit\">Edit</i></a>";
                echo "<br><a href=\"$edit_link1\" onclick=\"return confirm('Are you sure you want to delete?')\"><i class=\"fa fa-trash\">Delete</i></a></td>";
                echo "</tr>";
                $i++;
                } 
                            ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>


    <!--/footer content -->
 
