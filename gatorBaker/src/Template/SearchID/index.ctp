<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->css('search_page_style'); ?>
</head>

<body>
	<div class="Top">
		<ul class="nav">
			<li class="nav"> <input class="search" type="text" name="term" placeholder="Enter your search terms"> </li>
			<li class="nav"> <button class="search" type="button" onclick="alert('Hello world!')">SEARCH</button> </li>
			<li class="nav"> </li>
			<li class="nav"> <p class="welcome"> Welcome, team03 </p> </li>
			<li class="nav" style="width:120px"> 
				<?php echo $this->Html->image('empty-cart-light.png', ['class' =>'cart'], ['alt' => 'cover_picture']); ?> 
            </li>
                
		</ul>
	</div>
	<p class="show_result"> 1-10 of 30 results for images: "animals" </p>
	<hr />

	<div class="onleft">
		<h3 class="result"> Show results for  </h3>
		<ul class="category"> Image
			<li class="category"> house </li>
			<li class="category"> view </li>
			<li class="category"> car </li>
			<li class="category"> animal </li>
			<li class="category"> flower </li>
		</ul>
	</div>
	<hr width="1" size="800" color="gray" style="float:left;">
    <?php 
        echo "<table class='result' rules='rows'>";
        foreach($res as $arr){
		    echo "<tr>";
            echo "<td class='result'>";
            echo $this->Html->image('slide09.jpg', ['class' =>'result'], ['alt' => 'cover_picture']);    
            echo "</td>";
		    echo "<td class='result'>" . "Title: " . $arr["title"] . "</td>";
            echo "<td class='result'>" . "Owner: " . $arr["owner"] . "</td>";
            echo "<td class='result'>" . "Price: " . $arr["price"] . "</td>";
            echo "<td class='order'>";
            echo $this->Html->image('order_buttom.jpg', ['class' =>'order'], ['alt' => 'cover_picture']);    
            echo "</td>";
	}
        
    ?>
<!--		
	<div class="End">
		<p class="End"> <span style="font-weight:bold" >&#169 &nbsp </span> Summer 2017 CSC648/848 Team03, San Francisco State University </p> </div>
	</div>
-->
</body>

</html>





<?php
	echo "this will be print to new page<br/>";



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

?>
