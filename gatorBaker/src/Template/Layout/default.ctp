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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>








  <title>CSC648 2017 summer team03 project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
<link rel="stylesheet" href="css/ui_style.css" />
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
	background-size: 10% 10%;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2f;
      padding: 25px;
    }
    table {
	font: 60px, arial, serif;
	}
  </style>
</head>
<body>



<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-103017358-1', 'auto');
  ga('send', 'pageview');
</script>





<script>
(function(w,d,s,g,js,fs){
  g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
  js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
  js.src='https://apis.google.com/js/platform.js';
  fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
}(window,document,'script'));
</script>


<div class="jumbotron">

  <div class="container text-center">
    <h1>Stock Photo Marketplace</h1>      
    
<p>SFSU 648 TEAM 03</p>
   <p>For Educational Use Only.</p>
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
		<li class="active">
			<?php
			echo $this->Html->link(
				'Register',
				'/users/add',
				['class' => 'button', 'target' => '_blank']);
			?>
		</li>
		<li class="active" style="margin-right:15%;">
			<?php
			echo $this->Html->link(
				'Login',
				'/users/login',
				['class' => 'button', 'target' => '_blank']
			);
			?>
        </li>
		
        <li style='width:50%;'>
        <?php
// drop down and search bar            
	        echo $this->Form->create("Search",array('url'=>'/SearchID','class'=>'form-inline','style'=>'margin:10px;'));
            echo $this->Form->select(
    		    'field',
    		    ['Filter Search By Category', 'view', 'nature', 'house', 'car'],
                array('class'=>'form-control', 'style'=>'position:relative;float:left;width:20%;')
	        );
   	        echo $this->Form->input('theTitle',array('label'=>' ', 'maxlength'=>'30', 'class'=>'form-control', 'placeholder'=>'Enter name or category','style'=>'position:relative;float:left;width:80%;'));
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
</div>
</nav>

<body>
  
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
   
</body>
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
<br>

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
</footer>
<script>
gapi.analytics.ready(function() {
  /**
   * Authorize the user immediately if the user has already granted access.
   * If no access has been created, render an authorize button inside the
   * element with the ID "embed-api-auth-container".
   */
  gapi.analytics.auth.authorize({
    container: 'embed-api-auth-container',
    clientid: 'UA-103017358-1'
  });
  /**
   * Create a new ViewSelector instance to be rendered inside of an
   * element with the id "view-selector-container".
   */
  var viewSelector = new gapi.analytics.ViewSelector({
    container: 'view-selector-container'
  });
  // Render the view selector to the page.
  viewSelector.execute();
  /**
   * Create a new DataChart instance with the given query parameters
   * and Google chart options. It will be rendered inside an element
   * with the id "chart-container".
   */
  var dataChart = new gapi.analytics.googleCharts.DataChart({
    query: {
      metrics: 'ga:sessions',
      dimensions: 'ga:date',
      'start-date': '30daysAgo',
      'end-date': 'yesterday'
    },
    chart: {
      container: 'chart-container',
      type: 'LINE',
      options: {
        width: '100%'
      }
    }
  });
  /**
   * Render the dataChart on the page whenever a new view is selected.
   */
  viewSelector.on('change', function(ids) {
    dataChart.set({query: {ids: ids}}).execute();
  });
});
</script>
</html>
</html>
