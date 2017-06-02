<?php
include_once("navbar.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Ajit Singh">
    <link rel="icon" href="../../favicon.ico">

    <title>DataCobot</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="js/style.js" type="text/javascript"></script>
	<link href="css/style.css" rel="stylesheet">
</head>

<body>
    
    <div class="container theme-showcase" role="main">
<div class="col-sm-8">
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron" style="background: linear-gradient(yellow,lightgreen);">
            
                <h1>Go beyond data discovery with DataCobot!</h1><br>
            <p>With DataCobot solutions,many businesses are already achieving outcomes starting from optimizing customer engagement, to determine expertise, to outcome innovation and growth.</p>
            
                </div>
  
        <p>
            <a href="#explore" ><button type="button" class="btn btn-lg btn-default">Explore our Products</button></a>
            <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#popup1">Enter your E-mail Here</button>
            <!-- Modal -->
<div class="Video">
		
		<div class="modal fade" id="popup1">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
                        <div class="row">
                        <div class="col-sm-6">
                              <img class="img-responsive" src="img/10.jpg" height="400px">  
                            </div>
                            <div class="col-sm-6">
                            <div class="popform" style="text-align:right; ">
                                <h3>It's not about Data<br>it's about you</h3>
                                <h3>Prove your mattle</h3>
                                <b>pick up a pen,think,solve the problem,submit and<br>see where you stand,<br>10 Minutes and you are done.</b>
                                </div>
                                <div class="form-horizontal" style="text-align:center;">
                                <form method="post" action="process.php">
                                    <div class="inline-form">
                            <input type="text" class="form-control" id="exampleInputName2" name="Name" placeholder="My Name is">
                        </div>
                        <div class="inline-form">
                            <input type="text" class="form-control input-md  textinput textInput" name="Course" id="exampleInputEmail2" placeholder="I studied">
                        </div>
                        <div class="inline-form">
                            <input type="text" class="form-control" id="exampleInputName2" name="University" placeholder="from">
                        </div>
                        <div class="inline-form">
                            <input type="text" class="form-control" id="exampleInputName2" name="Job" placeholder="I want to play as">
                        </div>
                        <div class="inline-form">
                            <input type="email" class="form-control" id="exampleInputName2" name="Email" placeholder="and want my CGPA on this ID">
                        </div>
                        <button type="submit" class="btn btn-success">Start</button>
                                    </form>
                                    <p>No personal information will be shared to any 3rd Party.We Promise.</p>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
        </p>
   
</div>
        <?php
        include_once("form.php");
        ?>
<br>
<hr>
        <div class="container"><center>
            <div class="cover">
            <img src="img/6.jpg" id="explore" class="img-responsive backlogo" alt="" width="97%" height="30%" style="position: absolute;
					z-index: -12; border-radius:5px;">
            <div class="row" >
            <img src="img/7.png"  alt="" class="img-responsive logo" width="32%" height="22%" style="margin:0px; padding-top:10%;">
                <h2 style="color:white;">Wrangles<span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span>
                    <b><span class="anim" id="anima" >voter registration data</span></b>
                    
                </h2>
                </div></center>
            </div>
            <!-- Button trigger modal -->

        </div>
        
        <center><div class="container">
           
<div class="Video" style="margin-top:38%;padding-top:25px;">
		<input type="image" src="img\play.png" data-toggle="modal" data-target="#popUp" class="img-responsiv vidbut" alt="" width="18%" height="13%"
			>
		<div class="modal fade" id="popUp" >
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe width="420" height="315"
src="https://www.youtube.com/embed/XGSy3_Czz8k">
</iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    

        </div></center>
		<?php
include_once("footer.php");

?>
    <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="http://getbootstrap.com/assets/js/vendor/jquery.min.js"><\/script>')

    </script>
    <script src="js/bootstrap.min.js"></script>
    
</body>

</html>