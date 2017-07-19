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
    <li style="width:60%">
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
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Login
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Create Account</a></li>
          <li><a href="#">Register</a></li>
        
        </ul>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart and Checkout</a></li>
      </ul>
    </div>
  </div>
</nav>
<body>
        

        <br>

        <h3> Welcome! We are CSC648/848 Team 03! </h3>
        <p> Our team contains 6 members: </p>

        <p>
            <?php
            echo $this->Html->link(
                'Brandon',
                ['controller' => 'About', 'action' => 'brandon', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Jizhou',
                ['controller' => 'About', 'action' => 'jizhou', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Rafsan',
                ['controller' => 'About', 'action' => 'rafsan', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Raghav',
                ['controller' => 'About', 'action' => 'raghav', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Todaka',
                ['controller' => 'About', 'action' => 'todaka', '_full' => true]
            );
            ?>
        </p>

        <p>
            <?php
            echo $this->Html->link(
                'Zach',
                ['controller' => 'About', 'action' => 'zach', '_full' => true]
            );
            ?>
        </p>

        <br>
    </body>
<</html>