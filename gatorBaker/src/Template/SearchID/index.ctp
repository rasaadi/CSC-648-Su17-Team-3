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

//$this->layout = false;

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
<?php echo $this->Html->css('search_page_style.css'); ?>
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
      background-color: #f2f2f2f;
      padding: 25px;
    }
 table {
	font arial, serif;
	}
  </style>
</head>
<body>


<div class="jumbotron" style=" background-size: 20%;">

  <div class="container text-center">
    <h1>Stock Photo Marketplace</h1>      
    
<p>SFSU 648 Team 03</p>
   <p>NOT A SERIOUS PRODUCT.</p>
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
        <li class="active"><a href="Home">Home</a></li>  
        <li style='width:50%;'>  
        <?php
// drop down and search bar            
	        echo $this->Form->create("Search",array('url'=>'/SearchID','class'=>'form-inline','style'=>'margin:10px;'));
            echo $this->Form->select(
    		    'field',
    		    ['Filter Search By Category', 'All','Cars', 'Cities', 'People', 'Animals','Landscapes'],
                array('class'=>'form-control', 'style'=>'position:relative;float:left;width:20%;')
	        );
   	        echo $this->Form->input('theTitle',array('label'=>' ','class'=>'form-control', 'placeholder'=>'Enter name or category','style'=>'position:relative;float:left;width:80%;'));
        ?>
        </li>
        <li style='width:15%'>
        <?php    
   	        echo $this->Form->button('Search',array('class'=>'btn btn-warning','style'=>'margin:10px;'));
            echo $this->Form->button('Upload',array('class'=>'btn btn-primary','style'=>'margin:10px;'));
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
								<form id="ajax-register-form" action="" method="post" role="form" autocomplete="off">
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
                                            <div class="col-xs-7">
                                                <input type="checkbox" tabindex="3" name="agreeTerms" id="agreeTerms">
                                                
                                            </div>
                                            <label for="agreeTerms">Agree to Terms and Conditions</label>
                                        </div>
                                    </div>
									<div class="form-group">
										<div class="row">
											<div class="button">
												<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-info" value="Register">
											</div>
										</div>
									</div>
                                    <input type="hidden" class="hide" name="token" id="token" value="7c6f19960d63f53fcd05c3e0cbc434c0">
								</form>
                            </div>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Log In <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu">
                            <div class="col-lg-12">
                                <div class="text-center"><h3><b>Log In</b></h3></div>
                                <form id="ajax-login-form" action="" method="post" role="form" autocomplete="off">
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
                                            
                                        </div>
                                    </div>
				<div class="form-group">
                                      <div class="">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-success" value="Log In">
                                            </div>
</div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="" tabindex="5" class="forgot-password">Forgot Password?</a>
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
    <table class="result" rules="rows">

    <?php 
	if (count($res) > 0) 
	{

        foreach($res as $arr){

            $str1= 'Title: ' . $arr["title"] . '<br/> Media ID: ' . $arr["id"] .  '<br/> Description: ' . $arr["description"] .'<br/> Category: ' . $arr["media_category"] .  '<br/> Owner: ' . $arr["owner"] . '<br/> Price: ' . $arr["price"] . '<br/> Media Created: ' . $arr["media_created"];
//            echo $str1;
            echo $this->Html->tableCells([
                [
                    [($this->Html->image($arr["thumbnail"], ['class' =>'result'], ['alt' => 'picture not availabe for now'])), ['class' => 'pic']], 
                    [$str1, ['class'=>'result'] ],
                    [($this->Html->image('order_buttom.jpg', ['class' =>'order'], ['alt' => 'picture not availabe for now'])), ['class' => 'order']], 
                ]
                ]);
	}
	} else {
		echo "0 results found please check spelling or try search again";
	}
    ?>

    </table>
    
		





<div id="contactSeller" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">?/button>
        <h3 id="myModalLabel">Please contact your seller directly about your order</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal col-sm-12">
          <div class="form-group"><label>Name</label><input class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
          <div class="form-group"><label>Message</label><textarea class="form-control" placeholder="Your message here.." data-placement="top" data-trigger="manual"></textarea></div>
<div class="form-group">
  <label class="col-md-4 control-label" for="prependedtext">Media description</label>
  <div class="col">
    <div class="input-group">
      <span class="input-group-addon">MediaID</span>
      
    </div>
    
  </div>
</div>          <div class="form-group"><button type="submit" class="btn btn-success pull-right">Send It!</button> <p class="help-block pull-left text-danger hide" id="form-error">?The form is not valid. </p></div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
      </div>
    </div>
  </div>
</div>
<div id="contactUs" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">?/button>
        <h3 id="myModalLabel">We'd Love to Hear From You</h3>
      </div>
      <div class="modal-body">
        <form class="form-horizontal col-sm-12">
          <div class="form-group"><label>Name</label><input class="form-control required" placeholder="Your name" data-placement="top" data-trigger="manual" data-content="Must be at least 3 characters long, and must only contain letters." type="text"></div>
          <div class="form-group"><label>Message</label><textarea class="form-control" placeholder="Your message to us here.." data-placement="top" data-trigger="manual"></textarea></div>
         <div class="form-group"><button type="submit" class="btn btn-success pull-right">Send It!</button> <p class="help-block pull-left text-danger hide" id="form-error">?The form is not valid. </p></div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
      </div>
    </div>
  </div>
</div>
</body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<footer class="mt-5">
  <div class="container-fluid bg-faded mt-5">
    <div class="container">
      <div class="row py-3">
        <!-- footer column 1 start -->
        <div class="col-md-4">
          <!-- row start -->
                    <div class="row py-2">
            <div class="col-sm-3 hidden-md-down">

              <a class="bg-circle bg-info" href=About/aboutus>
                <i class="fa fa-2x fa-fw fa-info" aria-hidden="true "></i>
              </a>
            </div>
            <div class="col-sm-9">
              <h4>Info</h4>
              About us.
            </div>
          </div>
          <!-- row end -->
        </div>
        <!-- footer column 1 end -->
        <!-- footer column 2 start -->
        <div class="col-md-4">
          <!-- row start -->
          <div class="row py-2">
            <div class="col-sm-3 hidden-md-down">
              <a class="bg-circle bg-info" href="#">
                <i class="fa fa-2x fa-fw fa-address-card" aria-hidden="true "></i>
              </a>
            </div>
            <div class="col-sm-9">
	<h4><a href="#contactUs" data-toggle="modal">Contact Us</a></h4>
              <p>Please send any comments or concerns to the devs?</p>
            </div>
          </div>
          <!-- row end -->
          <!-- row start -->
        
          <!-- row end -->
        </div>
        <!-- footer column 2 end -->
        <!-- footer column 3 start -->
        <div class="col-md-4">
          <!-- row starting  -->
          <div class="row py-2">
            <div class="col-sm-3 hidden-md-down">
              <a class="bg-circle bg-danger" href="# ">
                <i class="fa fa-2x fa-fw fa-file-pdf-o" aria-hidden="true "></i>
              </a>
            </div>
            <div class="col-sm-9">
              <h4>Terms of Agreement</h4>
              <a href="http://sfsuse.com/~su17g03/CSC-648-Su17-Team-3/Milestones/Milestone2/CSC648-848%20Section%2001%20Summer%202017%20Milestone2%20Team03.pdf" target="_blank">Download PDF</a>

            </div>
          </div>
          <!-- row ended -->
          <!-- row starting  -->

          <!-- row ended -->
        </div>
        <!-- footer column 3 end -->
      </div>
    </div>
  </div>
<div id="embed-api-auth-container"></div>
<div id="chart-container"></div>
<div id="view-selector-container"></div>

  <div class="container-fluid bg-primary py-3">
    <div class="container">
      <div class="row py-3">
        <div class="col-md-9">
          <p class="text-white">Not a serious Product. For educational use only.</p>
        </div>
        
      </div>
    </div>
  </div>

</footer>
</html>


<?php
/*
	echo "<table>";
	echo "<tr> <td> ID </td> <td> title </td> <td> description </td> <td> media_cat </td>  <td> media_type </td> 
     <td> price </td>  <td> owner </td>  <td> media_created </td>  <td> media_modified </td>  <td> thumbnail </td>  
      <td> data </td>  </tr>";
	foreach($res as $arr){
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
*/
?>



