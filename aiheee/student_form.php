<?php
include_once("dbconnect.php");
include_once("check_session.php");
   
if (!isset($_GET['sid'])) {
	
	header('Location: view_form.php');
	exit;
}

$sid = (int) $_GET['sid'];

$student  = find_by_field('student','stu_id',$sid);

if (!$student) {

	header('Location: view_form.php');
	exit;
}

?>


<?php include_once("sidebar.php");?>

<section id="content">
		<div class="page static-page-tables"> 
			<!-- bradcome -->
			
			<div class="bg-light lter b-b wrapper-md mb-10">
				<div class="row">
					
					<div class="col-sm-6 col-md-12 col-xs-12">
						<h1 class="text-center">Student info</h1>
						<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										<form class="form-horizontal" role="form">
											

											<div class="form-group">
												 
												<label for="name" class="col-sm-2 control-label">
													&nbsp;
												</label>
												<div class="col-sm-4">
													<img src=".<?php echo $student['image']; ?>" height="100" width="100">
												</div>
											</div>

											<div class="form-group">
												 
												<label for="name" class="col-sm-2 control-label">
													Name
												</label>
												<div class="col-sm-4">

													<input type="text" class="form-control" id="name" value='<?php echo $student['stu_name']; ?>' readonly />
												
												</div>
											</div>
											<div class="form-group">
												 
												<label for="fname" class="col-sm-2 control-label">
													Father's name
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="fname" value='<?php echo $student['stu_fname']; ?>' readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="addr" class="col-sm-2 control-label">
													Address
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="addr" value='<?php echo $student['addr']; ?>' readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="state" class="col-sm-2 control-label">
													State
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="state" value='<?php echo $student['state']; ?>' readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="city" class="col-sm-2 control-label">
													City
												</label>
												<div class="col-sm-4"> 
													<input type="text" class="form-control" id="city" value='<?php echo $student['city']; ?>' readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="district" class="col-sm-2 control-label">
													District
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="district" value='<?php echo $student['dist']; ?>' readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="pincode" class="col-sm-2 control-label">
													Pincode
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" value='<?php echo $student['pin']; ?>' id="pincode" readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="email" class="col-sm-2 control-label">
													Email Address
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="email" value='<?php echo $student['email']; ?>' readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="phone" class="col-sm-2 control-label">
													Phone number
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="phone" value='<?php echo $student['num']; ?>' readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="dob" class="col-sm-2 control-label">
													Date of birth
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="dob" value='<?php echo $student['dob']; ?>' readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="category" class="col-sm-2 control-label">
													Category
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="category" value='<?php echo $student['categ']; ?>' readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="edu" class="col-sm-2 control-label">
													Education 
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="edu" value='<?php echo $student['edu_pass']; ?>' readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="perc" class="col-sm-2 control-label">
													Percentage
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" value='<?php echo $student['perc']; ?>' id="perc" readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="year_of_passing" class="col-sm-2 control-label">
													Year of passing
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" value='<?php echo $student['year_pass']; ?>' id="year_of_passing" readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="family_income" class="col-sm-2 control-label">
													Family's income
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" value='<?php echo $student['income']; ?>' id="family_income" readonly />
												</div>
											</div>
											<div class="form-group">
												 
												<label for="citizen" class="col-sm-2 control-label">
													Citizenship
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" value='<?php echo $student['citizen']; ?>' id="citizen" readonly />
												</div>
											</div>

											<div class="form-group">
											<?php $tenth = json_decode($student['tenth']); ?>
											

												 
												<label for="tenth" class="col-sm-2 control-label">
													Qualification
												</label>
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
								                      <input type="text" name="ten_school" value="<?php echo $tenth->school; ?>" readonly class="form-control" size="10"  >
								                    </td>
								                    <td>
								                      <input type="text" name="ten_board" value="<?php echo $tenth->board; ?>" class="form-control" size="10" readonly  >
								                    </td>
								                    <td>
								                      <input type="text" name="ten_subject" value="<?php echo $tenth->subject; ?>" class="form-control" size="10" readonly >
								                    
								                    </td>
								                    <td>
								                     
								                      <input type="text" name="ten_year_passing" value="<?php echo $tenth->year_passing; ?>" class="form-control" size="10" readonly  >
								                    </td>
								                    <td>
								                      <input type="text" name="ten_marks" value="<?php echo $tenth->marks; ?>" class="form-control" size="10" readonly >
								                      
								                    </td>
								                    
								                  
								                  </tr>
								                  <tr>
								                    <td> 
								                      <p class="form-control-static">XIIth</p>
								                      <?php $twelve = json_decode($student['twelth']); ?>
													 
								                    </td>
								                    <td>
								                     <input type="text" name="twelve_school" value="<?php echo $twelve->school; ?>" readonly class="form-control"  size="10">
								                    </td>
								                    <td>
								                      <input type="text" name="twelve_board" value="<?php echo $twelve->board; ?>" readonly class="form-control"  size="10">
								                    </td>
								                    <td>
								                      <input type="text" name="twelve_subject" value="<?php echo $twelve->subject; ?>" readonly class="form-control"  size="10">
								                    
								                    </td>
								                    <td>
								                     
								                      <input type="text" name="twelve_passing"  value="<?php echo $twelve->year_passing; ?>" readonly class="form-control"  size="10">
								                    </td>
								                    <td>
								                      <input type="text" name="twelve_marks" value="<?php echo $twelve->marks; ?>" readonly class="form-control"  size="10">
								                      
								                    </td>
								                    
								                  
								                  </tr>
								                  <tr>
								                    <td> 
								                      <p class="form-control-static">Graduation</p>
								                       <?php $graduation = json_decode($student['graduate']); ?>
											
								                    </td>
								                    <td>
								                      <input type="text" name="grad_school" class="form-control" readonly size="10" value="<?php echo $graduation->school; ?>">
								                    </td>
								                    <td>
								                      <input type="text" name="grad_board" class="form-control" readonly size="10" value="<?php echo $graduation->board; ?>">
								                    </td>
								                    <td>
								                      <input type="text" name="grad_subject" class="form-control" readonly size="10" value="<?php echo $graduation->subject; ?>">
								                    
								                    </td>
								                    <td>
								                     
								                      <input type="text" name="grad_passing" class="form-control" readonly size="10" value="<?php echo $graduation->year_passing; ?>">
								                    </td>
								                    <td>
								                      <input type="text" name="grad_marks" class="form-control" readonly size="10" value="<?php echo $graduation->marks; ?>">
								                      
								                    </td>
								                    
								                  
								                  </tr>
								                </tbody>
								              </table>
															
											</div>

											<div class="form-group">
												 <?php $institute = json_decode($student['institute']); ?>
												<label for="institute" class="col-sm-2 control-label">
													Institute
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="institute" readonly value="<?php echo $institute->institution1.', '.$institute->institution2.', '.$institute->institution3; ?>" />
												</div>
											</div>

											<div class="form-group">
												 <?php $course = find_by_field('homepage','home_id',$student['course_choice']); ?>
												<label for="course_choice" class="col-sm-2 control-label">
													Course choice
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="course_choice" value="<?php ?>" readonly />
												</div>
											</div>

											<div class="form-group">
												 
												<label for="cid" class="col-sm-2 control-label">
													Coordinator id
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" value='<?php echo $student['coordinator_id']; ?>' id="cid" readonly />
												</div>
											</div>

											<div class="form-group">
												 
												<label for="exam_date" class="col-sm-2 control-label">
													Exam Date
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="exam_date" readonly />
												</div>
											</div>

											<div class="form-group">
												 
												<label for="exam_time" class="col-sm-2 control-label">
													Exam Time
												</label>
												<div class="col-sm-4">
													<input type="text" class="form-control" id="exam_time" readonly />
												</div>
											</div>
											

											
										</form>
									</div>
								</div>
							</div>

					</div>
				</div>
			</div>
	
		</div><!--/ CONTENT --> 
<!--/ Application Content --> 

<!--  Vendor JavaScripts  -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/datatablesscripts.bundle.js"></script>
<!--/ vendor javascripts --> 

<!-- Custom JavaScripts --> 
<script src="assets/js/main.js"></script> 
<!--/ custom javascripts --> 
</body>


</html>
