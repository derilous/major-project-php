


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> X TITAN E-Comm</title>
	<link rel="stylesheet" type="text/css" href="assets/css/home.css">
</head>
<body>

<?php include 'header-footer/header.php';?>



<?php


	$connect = mysqli_connect("localhost", "root", "", "testing");
	function make_query($connect) {
		 $query = "SELECT * FROM banner ORDER BY banner_id ASC";
		 $result = mysqli_query($connect, $query);
		 return $result;
	}

	function make_slide_indicators($connect) {
		 $output = ''; 
		 $count = 0;
		 $result = make_query($connect);
		 while($row = mysqli_fetch_array($result)) {
	  		if($count == 0) {
			   $output .= '
			   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
			   ';
			  }
			 else {
				$output .= '<li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>';
						  }
			  $count = $count + 1;
			 }
			 return $output;
			}

function make_slides($connect) {
	 $output = '';
	 $count = 0;
	 $result = make_query($connect);

	 while($row = mysqli_fetch_array($result))  {
	  if($count == 0) {
	   $output .= '<div class="item active">';
	  }
	  else {
	   $output .= '<div class="item">';
	  }
	  $output .= '
	   <img src="banner/'.$row["banner_image"].'" alt="'.$row["banner_title"].'" />
	   <div class="carousel-caption">
	    <h3>'.$row["banner_title"].'</h3>
	   </div>
	  </div>
	  ';
	  $count = $count + 1;
	 }
	 return $output;
	}



?>

<!DOCTYPE html>
<html>
		 <head>
		  		<title>X Titan E-Comm</title>
		  			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		  			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		 </head>
 <body>
  	<br>
  		<div class="container">
   		<h2 align="center">Best Selling Products</h2>
   		</div>
   </br>
   		<div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		    <?php echo make_slide_indicators($connect); ?>
		    </ol>
		</div>

    	<div class="carousel-inner">
     		<?php echo make_slides($connect); ?>
    	</div>
		    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
		     <span class="glyphicon glyphicon-chevron-left"></span>
		     <span class="sr-only">Previous</span>
		    </a>

		    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
		     <span class="glyphicon glyphicon-chevron-right"></span>
		     <span class="sr-only">Next</span>
		    </a>
 
 </body>
</html>

		


</body>
</html>