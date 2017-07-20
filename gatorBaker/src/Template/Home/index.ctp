<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron" style="background-image: url(https://static.pexels.com/photos/481289/pexels-photo-481289.jpeg); background-size: 100%;">

  <div class="container text-center">
    <h1>Stock Photo Marketplace</h1>      
    <p>Team 03</p>
<p>THIS IS A CLASS PROJECT FOR SOFTWARE ENGINEERING SFSU 648</p>
   <p>NOT A SERIOUS PRODUCT..</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="width:80%">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Cars</a></li>
          <li><a href="#">Cities</a></li>
          <li><a href="#">People</a></li>
	<li><a href="#">Animals</a></li>
	<li><a href="#">Landscapes</a></li>
        </ul>
      </li>
        <li><a href="#">Contact</a></li>
	<li>
        <?php echo $this->Html->link('About us', ['controller' => 'About', 'action' => 'aboutus', '_full' => true]); ?>
    </li>
    <li style="width:50%">
<!--        
        <form class="form-inline">Search Stock Media:
        <input type="search" class="form-control" size="50" placeholder="Enter name or category">
        <button type="button" class="btn btn-danger">Search</button>
	    <button type="button" class="btn btn-success">Upload</button>
        </form>  
-->        
        <?php
	        echo $this->Form->create("Search",array('url'=>'/SearchID','class'=>'form-inline','style'=>'padding-top:10px;'));
   	        echo $this->Form->input('theTitle',array('label'=>' ','class'=>'form-control', 'placeholder'=>'Enter name or category', 'style'=>'float:left;width:60%;'));
   	        echo $this->Form->button('Search',array('class'=>'btn btn-danger', 'style'=>'float:left;margin-left:15px;margin-top:0px'));
            echo $this->Form->button('Upload',array('class'=>'btn btn-success', 'style'=>'float:left;margin-left:15px;margin-top:0px'));
   	        echo $this->Form->end();
        ?>	
    </li>

      </ul>
     <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="http://sfsuse.com/~su17g03/CSC-648-Su17-Team-3/gatorBaker/home" class="dropdown-toggle" data-toggle="dropdown">Register <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-lr animated flipInX" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Register</b></h3></div>
								<form id="ajax-register-form" action="http://phpoll.com/register/process" method="post" role="form" autocomplete="off">
									<div class="form-group">
										<input type="text" name="r_username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="email" name="r_email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="password" name="r_password" id="password" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<input type="password" name="r_confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-xs-6 col-xs-offset-3">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Register Now">
											</div>
										</div>
									</div>
                                    <input type="hidden" class="hide" name="token" id="token" value="7c6f19960d63f53fcd05c3e0cbc434c0">
								</form>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="http://phpoll.com/login" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Log In</b></h3></div>
                                <form id="ajax-login-form" action="http://phpoll.com/login/process" method="post" role="form" autocomplete="off">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-7">
                                                <input type="checkbox" tabindex="3" name="remember" id="remember">
                                                <label for="remember"> Remember Me</label>
                                            </div>
                                            <div class="col-xs-5 pull-right">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="hide" name="token" id="token" value="a465a2791ae0bae853cf4bf485dbe1b6">
                                </form>
                            </div>
                        </ul>
                    </li>
                </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"> &nbsp</div>
	<?php echo $this->Html->image('BMW-M2-lead.jpg', array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:30%')); ?>
        <div class="panel-footer">Media Category: Car</div>
	<div class="panel-footer">Media Title: BMW</div>
	<div class="panel-footer">Media description: a sports car</div>
	<div class="panel-footer">Media Price: $1.02</div>
	<div class="panel-footer">Owner <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-envelope"></span> Message Owner</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">&nbsp</div>
	<?php echo $this->Html->image('images (2).jpg', array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:30%')); ?>
        <div class="panel-footer">Media Category: View</div>
	<div class="panel-footer">Media Title: grassland</div>
	<div class="panel-footer">Media description: a grassland and a lake</div>
	<div class="panel-footer">Media Price: $1.03</div>
	<div class="panel-footer">Owner <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-envelope"></span> Message Owner</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">&nbsp</div>
	<?php echo $this->Html->image('Bay20Bridge20and20San20Francisco.jpg', array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:30%')); ?>
        <div class="panel-footer">Media Category: City</div>
	<div class="panel-footer">Media Title: San Francisco</div>
	<div class="panel-footer">Media description: night view of SF</div>
	<div class="panel-footer">Media Price: $1.01</div>
	<div class="panel-footer">Owner <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-envelope"></span> Message Owner</a></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">&nbsp</div>
	<?php echo $this->Html->image('pexels-photo-186077.jpeg', array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:30%')); ?>
        <div class="panel-footer">Media Category: House</div>
	<div class="panel-footer">Media Title: Nice house</div>
	<div class="panel-footer">Media description: a big house</div>
	<div class="panel-footer">Media Price: $1.04</div>
	<div class="panel-footer">Owner <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-envelope"></span> Message Owner</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">&nbsp</div>
	<?php echo $this->Html->image('flower-purple-lical-blosso.jpg', array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:30%')); ?>
        <div class="panel-footer">Media Category: Flower</div>
	<div class="panel-footer">Media Title: Flower</div>
	<div class="panel-footer">Media description: Pink Blossom</div>
	<div class="panel-footer">Media Price: $1.05</div>
	<div class="panel-footer">Owner <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-envelope"></span> Message Owner</a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">&nbsp</div>
	<?php echo $this->Html->image('slide09.jpg', array('class' =>'img-responsive', 'alt' => 'cover_picture', 'style'=>'width:100%;height:30%')); ?>
        <div class="panel-footer">Media Category: Animal</div>
	<div class="panel-footer">Media Title: Two dogs</div>
	<div class="panel-footer">Media description: cute dogs</div>
	<div class="panel-footer">Media Price: $1.06</div>
	<div class="panel-footer">Owner <a href="#" class="btn btn-xs btn-primary"><span class="glyphicon glyphicon-envelope"></span> Message Owner</a></div>
      </div>
    </div>
  </div>
</div><br><br>



    
<?php
/*
	$connection = ConnectionManager::get('default');

	$results = $connection->execute('SELECT * FROM media_info')->fetchAll('assoc');

	echo "<table style='border: 1px solid blue'>";
	echo "<tr> <td> ID </td> <td> title </td> <td> description </td> <td> media_cat </td>  <td> media_type </td> 
     <td> price </td>  <td> owner </td>  <td> media_created </td>  <td> media_modified </td>  <td> thumbnail </td>  
      <td> data </td>  </tr>";
	foreach($results as $arr){
		echo "<tr>";
		echo "<td>" .  $arr["id"] . "</td>";
		echo "<td>" .  $arr["title"] . "</td>";
		echo "<td>" .  $arr["description"] . "</td>";
		echo "<td>" .  $arr["media_cat"] . "</td>";
        echo "<td>" .  $arr["media_type"] . "</td>";
        echo "<td>" .  $arr["price"] . "</td>";
        echo "<td>" .  $arr["owner"] . "</td>";
        echo "<td>" .  $arr["media_created"] . "</td>";
        echo "<td>" .  $arr["media_modified"] . "</td>";
        echo "<td>" .  $arr["thumbnail"] . "</td>";
        echo "<td>" .  $arr["data"] . "</td>";
		echo "</tr>";
	}
	echo "</table>";

	echo $this->Form->create("Registrations",array('url'=>'/SearchID'));
   	echo $this->Form->input('theTitle',array('label'=>'search by title: '));
   	echo $this->Form->button('Submit');
   	echo $this->Form->end();
*/    
?>	

  
</body>
</html>

