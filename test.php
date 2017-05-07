	<?php 

include_once("includes/config.php");
//include_once("PhpIncludes/database_connection.php");
//$databaseConnection = new databaseConnection($mysqlServer,$mysqlUser,$mysqlPassword,$databaseSelect);


echo phpinfo();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"><link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css"></link>
    <link rel="stylesheet" type="text/css" href="myassets/component.css" />

</head>
<body>
echo ;;skdjksahdsd
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="myassets/dobPicker.min.js" ></script>
  <script src="myassets/jquery.custom-file-input.js"></script>
  <script src="myassets/script.js"></script>

  <script>
      $(document).ready(function() {
        $.dobPicker({
          daySelector: '#day', /* Required */
          monthSelector: '#month', /* Required */
          yearSelector: '#year', /* Required */
          dayDefault: 'Day', /* Optional */
          monthDefault: 'Month', /* Optional */
          yearDefault: 'Year', /* Optional */
          minimumAge: 12, /* Optional */
          maximumAge: 80 /* Optional */
        });

        $.dobPicker({
          // daySelector: '#day', /* Required */
          // monthSelector: '#month', /* Required */
          yearSelector: '#year_passing', /* Required */
          // dayDefault: 'Day', /* Optional */
          // monthDefault: 'Month', /* Optional */
          yearDefault: 'Year of passing', /* Optional */
          minimumAge: 12, /* Optional */
          maximumAge: 80 /* Optional */
        });
      });
    </script>
</body>
</html>