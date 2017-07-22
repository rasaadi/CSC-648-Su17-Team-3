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


<div class="jumbotron" style="background-image: url(https://static.pexels.com/photos/481289/pexels-photo-481289.jpeg); background-size: 100%;">  <div class="container text-center">
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
<!--          
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
-->
        <li>
            <?php echo $this->Html->link('About us', ['controller' => 'About', 'action' => 'aboutus', '_full' => true]); ?>
        </li>  
        <li style='margin-right:20%;'><a href="#">Contact</a></li>
	
        <li style='width:40%;'>  
        <?php
// drop down and search bar            
	        echo $this->Form->create("Search",array('url'=>'/SearchID','class'=>'form-inline','style'=>'margin:10px;'));
            echo $this->Form->select(
    		    'field',
    		    ['All','Cars', 'Cities', 'People', 'Animals','Landscapes'],
                array('class'=>'form-control', 'style'=>'position:relative;float:left;width:20%;')
	        );
   	        echo $this->Form->input('theTitle',array('label'=>' ','class'=>'form-control', 'placeholder'=>'Enter name or category','style'=>'position:relative;float:left;width:80%;'));
        ?>
        </li>
        <li style='width:15%'>
        <?php    
   	        echo $this->Form->button('Search',array('class'=>'btn btn-danger','style'=>'margin:10px;'));
            echo $this->Form->button('Upload',array('class'=>'btn btn-success','style'=>'margin:10px;'));
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
    <table class="result" rules="rows">
    <?php 
        foreach($res as $arr){

            $str1= 'Title: ' . $arr["title"] . '<br/> Owner: ' . $arr["owner"] . '<br/> Price: ' . $arr["price"];
//            echo $str1;
            echo $this->Html->tableCells([
                [
                    [($this->Html->image($arr["thumbnail"], ['class' =>'result'], ['alt' => 'picture not availabe for now'])), ['class' => 'pic']], 
                    [$str1, ['class'=>'result'] ],
                    [($this->Html->image('order_buttom.jpg', ['class' =>'order'], ['alt' => 'picture not availabe for now'])), ['class' => 'order']], 
                ]
                ]);
	}
    ?>
    </table>
    
		
	<div class="End">
		<p class="End"> <span style="font-weight:bold" >&#169 &nbsp </span> Summer 2017 CSC648/848 Team03, San Francisco State University </p> </div>
	</div>

</body>

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
