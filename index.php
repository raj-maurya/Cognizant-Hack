<?php

?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title>Cognizant Code Cafe </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link href="css/bootstrap-responsive.css" rel="stylesheet">


<style type="text/css">
  .rounded {
  border-radius: 10px;
  border: 3px solid #000; 
}
.straight {
  
  border: 1px solid #000; 
}

.round {
  border-radius: 13px;
  border: 2px solid green; 
background: #7FFFD4;
}
</style>



<script type="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <!--  <a class="navbar-brand" href="#">Springboard</a> -->
       <img alt="Brand" src="img/cog.png">
     

     <ul class="nav navbar-nav navbar-right">
            
 <li ><a href ="#"> <span class="glyphicon glyphicon-user" > </span>  Sign Up</a></li>
            <li class="pull-right"><a href="#"> <span class="glyphicon glyphicon-log-in"  > </span> Login</a></li>

          </ul>
</nav>



 <div class="container"  >
<div  class="jumbotron">
      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          

 <div class="input-group">
      <input type="text" class="form-control" placeholder="Search (by title, level or language )" id="first">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button" >Go!</button>
      </span>
      
    </div>
    

    </br>


          <div class="jumbotron">


 <div class="row">
      <div class="col-xs-12 " >
     <div class="rounded">

        
          <ul id="orders2"> </ul>



      </div>

</div>
      </div>
         <ul id="pagination" class="pagination-sm"></ul> 

<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
          
          </div>
          




        </div><!--/span-->





        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
                 
           
              <form>
    

 <p   class="round">  <span class="glyphicon glyphicon-list"></span> Filter by <b>Status</b> </p>

<div class="rounded">
 <div class="well sidebar-nav">
            <ul class="nav nav-list">
              
          <label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input">
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description"> Accepted</span>
</label>
</br>
<label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input">
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description"> Skipped </span>
</label>
<label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input">
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description"> Memory / Time limit exceeded</span>
</label>
<label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input">
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description"> Runtime / Compilation error</span>

</label><label class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input">
  <span class="custom-control-indicator"></span>
  <span class="custom-control-description"> Wrong Answer</span>
</label>




</ul>
</div>
</div>

</br>

<p  class="round">  <span class="glyphicon glyphicon-list"></span> <b>Statical Analysis</b> </p>
<div class="rounded">
 <div class="well sidebar-nav">

<ul class="nav nav-list">
              
  
</br>
<ul class="list-unstyled">

<li> <b>Top 5 languages used:</b> </li>

  <li>C: <span class="badge">5048 </span></li>
  <li>C++: <span class="badge">4009</span></li>
  <li>Python: <span class="badge">3021</span></li>
  <li>Java 7: <span class="badge">2040</span></li>
  <li>Java 8:<span class="badge"> 1200</span></li>
</ul>

<li> <b>Top 2 submissions attempted:</b> </li>
<ul>
  <li>-579D - "Or" Game: <span class="badge">22,231</span></li>
  <li>-589B - Layer Cake: 1<span class="badge">5,121</span></li>
  
</ul>

<li> <b>Number of Submissions per Level:</b> </li>
<ul>
<ul id="orders3"></ul>
</ul>




</ul>

</ul>

</div>




</div>
</form>
          </div>
        </div><!--/span-->
      </div><!--/row-->


</div>

      <hr>



   </div>

<div class="panel panel-default">
  
<h5><center><strong>Made by Raj Kumar Maurya (<em> GitHub- https://github.com/raj-maurya</em>)</strong></center></h5>

</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script  src="main.js"   type="text/javascript"></script>


</body>
</html>
