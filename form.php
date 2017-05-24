
<?php require_once('includes/config.php'); ?>
<?php require_once('includes/functions.php'); ?>


<!doctype html>
<html>
<head><title>All India Higher Education Entrance Examination | AIHEEE ( CET - 2017 ) | Application Form </title>
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"></link>
    <link rel="stylesheet" type="text/css" href="myassets/component.css" />

</head>

<body style="background-color: #FFFEFC;">
    <img src="images/logo.png" alt="AIHEEE">

<div class="overlay loader-overlay">
  <div class="loader">
    <img src="images/loader.gif" alt="">
  </div>
</div>



<div class="main" id='main'>
    <div class="panel dialog-panel">
      <div class="panel-heading">
        <h4 class="text-center">ALL INDIA HIGHER EDUCATION ENTRANCE EXAMINATION</h5>
          <h4 class="text-center"> AIHEEE ( CET - 2017 ) </h5>
      </div>
      
      <div class="panel-body">
        <div class="row"><!-- row start -->
        <div class="col-md-2 image-div">
          <p>Upload Your Recent Photo</p>
            <div class="profile-img ">
              <!-- <img src="http://lorempixel.com/140/140/" alt=""> -->
              <form method='POST' id='image_upload_form' action='image_upload.php'>
                
              <input type="file" name="file" id="file" class="inputfile" />
              <label for="file"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose an image&hellip;</span></label>
             </form>
                 
              <div class="progressBar">
                <div class="bar"></div>
                <div class="percent">0%</div>
              </div>
              <span class='error ' id='image-error'></span>

              <div class="imgArea">
                <img src="" height="200" width="200">
              </div>
            </div>
          <p>image size 240*320 only 2kb-2mb </p>
        <!-- <span class='desc'></span> -->
          </div>
          <div class="col-md-12">
          <h2 class="text-center main-title">Application Form</h2>
          <form class="form-horizontal" role="form" method='post' id='student_register'>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="name">Name</label>
            <div class="col-md-8">
              <div class="col-md-3">
                <div class="form-group internal ">
                  <input class="form-control " type='text' name='name' placeholder = 'Student name' id="name"/>
                  <span class='error' id='name-error'></span>
                </div>
              </div>
              <label class="control-label col-md-2 " for="fname">Father's name</label>
              <div class="col-md-3 ">
                <div class="form-group internal ">
                  <input class="form-control " type='text' name='fname' placeholder = 'Fathers name' id="fname"/>
                 <span class='error' id='fname-error'></span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1"  for="country">Location        </label>
            <div class="col-md-8">
             
              <div class="col-md-2 indent-small">
                <div class="form-group internal">
                  <select class="form-control" id='state' name='state' data-type='select'>
                  <?php $country_id = 101; ?>
                   <?php $query = "SELECT id, name FROM states WHERE country_id  = {$country_id} ORDER BY name DESC";  ?>
                    <?php  $result = mysql_query($query); ?>
                    <?php confirm($result); ?>
                    <option value=''>State</option>
                    <?php  if (mysql_num_rows($result)>0): ?>
                    
                    <?php  while ($state = mysql_fetch_assoc($result)) : ?>
                   
                    <option value="<?php echo $state['name']; ?>"><?php echo $state['name']; ?></option>
                   
                    <?php endwhile; ?>

                    <?php  endif; ?>

                    
                  </select>
                  <span class='error' id='state-error'></span>
                </div>
              </div>
              <div class="col-md-2 indent-small">
                <div class="form-group internal">
                  <!-- <select class="form-control" id='city' name='city'>
                    <option  value=''>City</option>
                    
                  </select> -->
                  <input type="text" name="city" id='city' placeholder="city" class="form-control">
                  <span class='error' id='city-error'></span>
                </div>
              </div>

              <div class="col-md-3 ">
                <div class="form-group internal">
                  <input type="text" name='dist' id='dist' class="form-control" placeholder="District">  
                  <span class='error' id='dist-error'></span>
                </div>
              </div>
              <div class="clearfix"></div>
              
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="address">Address</label>
            <div class="col-md-8 ">
             
              <div class="col-md-6 ">
                <div class="form-group internal">
                  <input class="form-control" id="address" name='address' placeholder="Address" type="text"/>
                  <span class='error' id='address-error'></span>
                </div>
              </div>

               <div class="col-md-2 indent-small">
                <div class="form-group internal">
                  <input class="form-control" id="pincode" name='pincode' placeholder="Pincode" type="number"/>
                  <span class='error' id='pincode-error'></span>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="email">Contact</label>
            <div class="col-md-6">
              <div class="form-group">
                <div class="col-md-11">
                  <input class="form-control" id="email" name='email' placeholder="E-mail" type="text"/>
                  <span class='error' id='email-error'></span>
                </div>
              </div>
              <div class="form-group internal">
                <div class="col-md-11">
                  <input class="form-control" id="num" name='num' placeholder="Phone: (xxx) - xxx xxxx" type="text"/>
                <span class='error' id='num-error'></span>
                </div>
              </div>
            </div>
          </div>
           <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="dob">DOB</label>
            <div class="col-md-8">
             <div class="col-md-2 ">
                <div class="form-group internal">
                  <select class="form-control" id="day" name='day' data-type='select'></select>
                <span class='error' id='day-error'></span>
                </div>
              </div>
              <div class="col-md-2 indent-small">
                <div class="form-group internal">
                  <select class="form-control" id="month" name='month' data-type='select'></select>
                <span class='error' id='month-error'></span>
                </div>
              </div>
              <div class="col-md-2 indent-small">
                <div class="form-group internal">
                  <select class="form-control" id="year" name='year' data-type='select'></select>
                  <span class='error' id='year-error'></span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="category">Category</label>
            <div class="col-md-8">
            <label class="control-label " for="gen"><input id="gen" type="radio" name='category' value="GEN"/>GEN</label>
            <label class="control-label " for="st"><input id="st" type="radio" name='category' value="ST"/>ST</label>
            <label class="control-label " for="sc"><input id="sc" type="radio" name='category' value="SC"/>SC</label>
            <label class="control-label " for="ph"><input id="ph" type="radio" name='category' value="PH"/>PH</label>
            <label class="control-label " for="other"><input id="other" type="radio" name='category' value="OTHERS"/>OTHERS</label>
            
              <span id='category-error' class='error'></span>
            </div>
          </div>

            <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="last_exam">Examination Last Passed / Appeared :</label>
            <div class="col-md-8">
             <div class="col-md-3 ">
                <div class="form-group internal">
                  <select class="form-control" id='last_exam' name='last_exam' data-type='select'>
                    <option value=''>Choose</option>
                    <option value='tenth'>10th</option>
                    <option value='twelve'>12th</option>
                    <option value='graduation'>Graduation</option>
                    
                  </select>
                  <span class='error' id='last_exam-error'></span>
                </div>
              </div>
              <label class="control-label col-md-2 " for="year_passing">Year of passing</label>
              <div class="col-md-3 indent-small">
                <div class="form-group internal ">
                  <select class="form-control " name='year_passing' id='year_passing' data-type='select' ></select>
                  <span class='error' id='year_passing-error'></span>
                </div>
              </div>
            </div>
          </div>     
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="percent_mark">Percentage of marks </label>
            <div class="col-md-8">
              <div class="col-md-3">
                <div class="form-group internal ">
                  <input class="form-control "  type='number'  placeholder = 'marks %' id="percent_mark" name='percent_mark'/>
                 <span class='error' id='percent_mark-error'></span>
                </div>
              </div>
              <label class="control-label col-md-2 " for="annual_income">Family's Annual Income</label>
              <div class="col-md-3 ">
                <div class="form-group internal ">
                  <input class="form-control " type='number' name='annual_income' placeholder = "Family's Annual Income" id="annual_income"/>
                 <span class='error' id='annual_income-error'></span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="citizen">Citizenship</label>
            <div class="col-md-8">
              <label class="control-label " for="indian"><input id="indian" type="radio" name='citizen' value="INDIAN"/>INDIAN</label>
              <label class="control-label " for="nri"><input id="nri" type="radio" name='citizen' value="NRI"/>NRI</label> 
              <span class='error' id='citizen-error'></span>     
            </div>
          </div>
            <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="education">Educational details</label>
           <div class="col-md-8">
            <span >Details of last attended Institute / School / College.</span>

                <span class='error tenth-error' id='tenth-error'></span>
                <div class="clearfix"></div>
                <span class='error twelve-error' id='twelve-error'></span>
                <div class="clearfix"></div>
                <span class='error graduation-error' id='graduation-error'></span>
                <div class="clearfix"></div>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>EXAM</th>
                    <th>School / College</th>
                    <th>Board</th>
                    <th>Subject</th>
                    <th>Year of Passing </th>
                    <th>% Of Marks</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> 
                      <p class="form-control-static">Xth</p>
                    </td>
                    <td>
                      <input type="text" name='ten_school' class="form-control" size="10" value="">
                    </td>
                    <td>
                      <input type="text" name='ten_board' class="form-control" size="10" value="">
                    </td>
                    <td>
                      <input type="text" name='ten_subject' class="form-control" size="10" value="">
                    
                    </td>
                    <td>
                     
                      <input type="text" name='ten_year_passing' class="form-control" size="10" value="">
                    </td>
                    <td>
                      <input type="text" name='ten_marks' class="form-control" size="10" value="">
                      
                    </td>
                    
                  
                  </tr>
                  <tr>
                    <td> 
                      <p class="form-control-static">XIIth</p>
                    </td>
                    <td>
                     <input type="text" name='twelve_school' class="form-control" size="10" value="">
                    </td>
                    <td>
                      <input type="text" name='twelve_board' class="form-control" size="10" value="">
                    </td>
                    <td>
                      <input type="text" name='twelve_subject' class="form-control" size="10" value="">
                    
                    </td>
                    <td>
                     
                      <input type="text" name='twelve_passing' class="form-control" size="10" value="">
                    </td>
                    <td>
                      <input type="text" name='twelve_marks' class="form-control" size="10" value="">
                      
                    </td>
                    
                  
                  </tr>
                  <tr>
                    <td> 
                      <p class="form-control-static">Graduation</p>
                    </td>
                    <td>
                      <input type="text" name='grad_school' class="form-control" size="10" value="">
                    </td>
                    <td>
                      <input type="text" name='grad_board' class="form-control" size="10" value="">
                    </td>
                    <td>
                      <input type="text" name='grad_subject' class="form-control" size="10" value="">
                    
                    </td>
                    <td>
                     
                      <input type="text" name='grad_passing' class="form-control" size="10" value="">
                    </td>
                    <td>
                      <input type="text" name='grad_marks' class="form-control" size="10" value="">
                      
                    </td>
                    
                  
                  </tr>
                </tbody>
              </table>
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="dec_name">DECLARATION BY THE CANDIDATE</label>
            <div class="col-md-8">
            <!-- <span>DECLARATION BY THE CANDIDATE</span> -->
              
           <div class="clearfix"></div>
          <div class="col-md-1">
            <div class="form-group internal ">      
              <label class="control-label " for="declare"><input id="declare" name='declare' type="checkbox" value="1"/> I</label>  
              <span class="error " id='declare-error'></span>  
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group internal ">
                <input class="form-control " type='text' name='stu_dec_name' placeholder = 'Student name' id="stu_dec_name"/>  
                <span class="error " id='stu_dec_name-error'></span> 
            </div>
          </div> 

             <label class="control-label col-md-2 " for="stu_dec_fname">(S/O) / (D/O)</label>
              <div class="col-md-3 ">
                <div class="form-group internal ">
                  <input class="form-control " type='text' name='stu_dec_fname' placeholder = 'Fathers name' id="stu_dec_fname"/>
                  <span class="error " id='stu_dec_fname-error'></span>
                 
                </div>
              </div>
              <div class="clearfix"></div>
              <p>solemnly declared that all the information stated herein, is true to the best of my knowledge and belief. I assure that I shall by all the rules and regulations by the AIHEEE (All India Higher Education Entrance Examination).</p>
          </div>
          </div>
        <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="cource_choice">Choice Of Course :          </label>
            <div class="col-md-8">
             <div class="col-md-8 ">
                <div class="form-group internal">
                  <select class="form-control" id='cource_choice' name='cource_choice' data-type="select">
                      <?php $exams = all_exams(); ?>
                      <?php if ($exams): ?>
                                <option value=''>Choose</option>
                              <?php while($exam = mysql_fetch_assoc($exams)): ?>
                                <option value='<?php echo $exam['home_id']; ?>'><?php echo $exam['exam_content']; ?></option>
                              <?php endwhile; ?>                
                      <?php endif; ?>
                  </select>
                  <span class="error " id='cource_choice-error'></span>
                </div>
              </div>
            </div>
          </div>
         
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="choose_institution">Choice Of Institutions</label>
            <div class="col-md-6">
              <div class="form-group">
                <div class="col-md-11">
                  <input class="form-control" name='institution1' id="choose_institution" placeholder="Institution 1" type="text"/>
                </div>
              </div>
              <div class="form-group ">
                <div class="col-md-11">
                  <input class="form-control" name='institution2' id="choose_institution_1" placeholder="Institution 2" type="text"/>
                </div>
              </div>
               <div class="form-group internal">
                <div class="col-md-11">
                  <input class="form-control" name='institution3' id="choose_institution_2" placeholder="Institution 3" type="text"/>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-2 col-md-offset-1" for="cordinator_id">Coordinator Id</label>
            <div class="col-md-8">
              <div class="col-md-8">
                <div class="form-group internal ">
                  <input class="form-control " type='text' name='cordinator_id' placeholder = 'Coordinator id' id="cordinator_id"/>
                  <span class="error " id='cordinator_id-error'></span>
                  
                </div>

               
                <span class='error cordinator-error' id='cordinator-error'></span>
                <div class="clearfix"></div>
               
                 </div>
             
            </div>
          </div>

      
          <div class="form-group">
            <div class="col-md-offset-5 col-md-3">
            <input type="hidden" id='image' name='image' value=''>
              <button class="btn-lg btn-success form-submit" name='submit' type="submit">Submit</button>
            </div>
            
          </div>
        </form>

          </div><!-- col-10 end-->

          

          </div><!-- row end -->


      </div>

    </div>
  </div>
  











  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="myassets/dobPicker.min.js" ></script>
  <script src="myassets/jquery.custom-file-input.js"></script>
  <script src="myassets/jquery.form.js"></script>
  <script src="myassets/script.js"></script>

</body>
</html>