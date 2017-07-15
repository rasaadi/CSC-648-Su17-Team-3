<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="search_page_style.css" />
</head>

<body>
	<div class="Top">
		<ul class="nav">
			<li class="nav"> <input class="search" type="text" name="term" placeholder="Enter your search terms"> </li>
			<li class="nav"> <button class="search" type="button" onclick="alert('Hello world!')">SEARCH</button> </li>
			<li class="nav"> </li>
			<li class="nav"> <p class="welcome"> Welcome, Jizhou </p> </li>
			<li class="nav" style="width:120px"> 
				<img class="cart" src="picture/empty-cart-light.png"> </li>
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
	<table class="result" rules="rows">
		<tr>
			<td class="pic"> <img class="result" src="picture/slide09.jpg"> </td>
			<td class="result"> <p class="description"> Title: Two dogs</br> Author: Artist</br> Price: $10.00</p> </td>
			<td class="order"> <img class="order" src="picture/order_buttom.jpg"> </td>
		</tr>
		<tr>
			<td class="pic"> <img class="result" src="picture/penguin.jpg"> </td>
			<td class="result"> <p class="description"> Title: Five penguins</br> Author: Artist</br> Price: $10.00</p> </td>
			<td class="order"> <img class="order" src="picture/order_buttom.jpg"> </td>
		</tr>
		<tr>
			<td class="pic"> <img class="result" src="picture/7030094-cute-animals.jpg"> </td>
			<td class="result"> <p class="description"> Title: chick</br> Author: Artist</br> Price: $10.00</p> </td>
			<td class="order"> <img class="order" src="picture/order_buttom.jpg"> </td>
		</tr>
	</table>
		
	<div class="End">
		<p class="End"> <span style="font-weight:bold" >&#169 &nbsp </span> Summer 2017 CSC648/848 Team03, San Francisco State University </p> </div>
	</div>



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
