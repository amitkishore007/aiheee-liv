<?php require_once('includes/config.php'); ?>
<?php require_once('includes/functions.php'); ?>
<?php 

//print_r($_POST);


  $output = array('status'=>'true','tenth'=>'','twelve'=>'','cordinator'=>'','graduation'=>'');

  // $output['status'] = 'true';
  // $output['tenth'] = '';
  // $output['twelve'] = '';
  // $output['graduation'] = '';
  // $output['cordinator'] = '';

  $name             = 	escape_string($_POST['name']);
  $fname            = 	escape_string($_POST['fname']);
  // $dist          =  escape_string($_POST['dist']);
  $dist             = 	'#';
  $state            = 	escape_string($_POST['state']);
  $city             = 	escape_string($_POST['city']);
  $address          = 	escape_string($_POST['address']);
  $pincode          = 	escape_string($_POST['pincode']);
  $email            = 	escape_string($_POST['email']);
  $num              = 	escape_string($_POST['num']);
  $category         = 	escape_string($_POST['category']);
  $last_exam        = 	escape_string($_POST['last_exam']);
  $year_passing     = 	escape_string($_POST['year_passing']);
  $percent_mark     = 	escape_string($_POST['percent_mark']);
  $annual_income    = 	escape_string($_POST['annual_income']);
  $citizen          =   escape_string($_POST['citizen']);
  $institution1     =   escape_string($_POST['institution1']);
  $institution2     =   escape_string($_POST['institution2']);
  $institution3     = 	escape_string($_POST['institution3']);
  
  $institute = json_encode(array('institution1'=>$institution1,'institution2'=>$institution2,'institution3'=>$institution3));


  $ten_school       = 	escape_string($_POST['ten_school']);
  $ten_board        = 	escape_string($_POST['ten_board']);
  $ten_subject      = 	escape_string($_POST['ten_subject']);
  $ten_year_passing = 	escape_string($_POST['ten_year_passing']);
  $ten_marks        = 	escape_string($_POST['ten_marks']);
  $tenth = json_encode(array('school'=>$ten_school,'board'=>$ten_board,'subject'=>$ten_subject,'year_passing'=>$ten_year_passing,'marks'=>$ten_marks));


  $twelve_school      =   escape_string($_POST['twelve_school']);
  $twelve_board       =   escape_string($_POST['twelve_board']);
  $twelve_subject     =   escape_string($_POST['twelve_subject']);
  $twelve_passing     =   escape_string($_POST['twelve_passing']);
  $twelve_marks       =   escape_string($_POST['twelve_marks']);
  $twelth = json_encode(array('school'=>$twelve_school,'board'=>$twelve_board,'subject'=>$twelve_subject,'year_passing'=>$twelve_passing,'marks'=>$twelve_marks));

  $grad_school        = 	escape_string($_POST['grad_school']);
  $grad_board         = 	escape_string($_POST['grad_board']);
  $grad_subject       = 	escape_string($_POST['grad_subject']);
  $grad_passing       = 	escape_string($_POST['grad_passing']);
  $grad_marks         = 	escape_string($_POST['grad_marks']);
  $graduation = json_encode(array('school'=>$grad_school,'board'=>$grad_board,'subject'=>$grad_subject,'year_passing'=>$grad_passing,'marks'=>$grad_marks));


  $declare            = 	escape_string($_POST['declare']);
  $stu_dec_name       = 	escape_string($_POST['stu_dec_name']);
  $stu_dec_fname      = 	escape_string($_POST['stu_dec_fname']);

  $decleration = "I ".$stu_dec_name." (S/O) / (D/O) ".$stu_dec_fname." solemnly declared that all the information stated herein, is true to the best of my knowledge and belief. I assure that I shall by all the rules and regulations by the AIHEEE (All India Higher Education Entrance Examination). "; 


  $cource_choice      = 	escape_string($_POST['cource_choice']);
  $cordinator_id      = 	escape_string($_POST['cordinator_id']);
  $image              = 	escape_string($_POST['image']);

  $day                =   escape_string($_POST['day']);
  $month              =   escape_string($_POST['month']);
  $year               =   escape_string($_POST['year']);
  $dob = $day.':'.$month.':'.$year;

  // check for the last appeared examination 

  // if tenth
    // leave the details of last attended institution 
  // if twelve
    /*force user to fill the tenth class marks*/
  if ($last_exam=='twelve') {
    
    if ($twelve_school=='' || $twelve_board =='' || $twelve_subject =='' || $twelve_year_passing =='' || $twelve_marks =='') {
        
        //give error  
        $output['status'] = 'false';
        $output['tenth'] = 'Please provide your tenth exams info';
      
    } 

  }

  // graduarion

  /*force user to fill the tenth and twelve marks*/
if ($last_exam=='graduation') {
    
    if ($ten_school=='' || $ten_board =='' || $ten_subject =='' || $ten_year_passing =='' || $ten_marks =='') {
        
        //give tenth error   
        $output['status'] = 'false';
        $output['tenth'] = 'Please provide your tenth exams info';
        
   
    } 

    if ($twelve_school=='' || $twelve_board =='' || $twelve_subject =='' || $twelve_year_passing =='' || $twelve_marks =='') {
    
      //give twelve error
      $output['status'] = 'false';
      $output['twelve'] = 'Please provide your twelfth exams info';
      
    
    }
  }





// check if the cordinator id exists or not

  // if yes

  $user = find_by_id('coordinate', 'c_id', $cordinator_id);

  if (!$user) {

    $output['status'] = 'false';
    $output['cordinator'] = 'cordinator not found, please provide a valid cordinator id ';
    

  }
  

  if ($output['status']=='true') {
    # code...
  // register the students
    $query  = "INSERT INTO student(stu_name,stu_fname,image,addr,state,city,email,num,edu_pass,perc,year_pass,income,citizen,tenth,twelth,graduate,declar,pin,dob,categ,coordinator_id,course_choice,institute)" ;
    $query .= " VALUES( '{$name}', '{$fname}','{$image}','{$address}','{$state}','{$city}','{$email}','{$num}','{$last_exam}','{$percent_mark}',{$year_passing},'{$annual_income}','{$citizen}','{$tenth}','{$twelth}','{$graduation}','{$decleration}','{$pincode}','{$dob}','{$category}','{$cordinator_id}',{$cource_choice},'{$institute}' )";
   
     $result = mysql_query($query);

     confirm($result);

     if ($result) {
       //return succes and redirect to payment 
      $stu_id = mysql_insert_id();

      $_SESSION['stu_id'] = $stu_id;
      $_SESSION['name'] = $name;
      $_SESSION['pincode'] = $pincode;
      $_SESSION['phone'] = $num;
      $_SESSION['email'] = $email;


      $output['status']     = 'true';
      $output['cordinator'] = 'successfuly registered !';

     } else {
      // there was an error 

      $output['status'] = 'false';
      $output['cordinator'] = 'There was an error, please try later  !';

     }

  } 

  echo json_encode($output);

  
  
