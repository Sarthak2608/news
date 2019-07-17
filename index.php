<?php

 $url='https://www.indiatoday.in/trending-news';
  if(isset($_GET['page']))
  {
     $url=$url.'?page='.$_GET['page'];
  }
// echo "<script>alert('".$url."')</script>";
  function p($url)
  {

   require 'simple_html_dom.php';
 
  $html = file_get_html($url);


	  foreach ($html->find('div.catagory-listing') as $v) {
	  	# code...
       

        echo "<div class='row'>
              	<div class='col-sm-12'>
              			<div style='width:100%;height:3px;background-color:red;'></div>
              	</div>
              </div>";



	  	echo "<div class='row'>
	         		<div class='col-sm-3'>
	         			<img src='".$v->find('div.pic img',0)->src."' style='width:170px;height:96px;'>
	         		</div>
	         		<div class='col-sm-9'>

	         			<span class='news_head'>
	         			".$v->find('div.detail h2',0)->plaintext."
                        </span><br>
<span class='news_content'> 
Jimmy De Frenne, a 48-year old man, challenged himself to enter the Guinness Book of Records by sitting on the toilet for straight 165 hours in the middle of a bar.
</span><br>&nbsp;
	         		</div>

	         	</div>";

	  	
		  }
                echo "<div class='row'>
              	<div class='col-sm-12'>";

		foreach ($html->find('div.item-list ul.pager .pager-item,') as $v) {
             
              
              		echo "	<a href='index.php?page=".$v->plaintext."' style='display:inline;' >
           <div class='btn btn-small btn-primary'>
                ".$v->plaintext."
           </div>
            </a>&nbsp;&nbsp;";

		}
          echo 	"</div>
              </div>";

  }

 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
     <link rel="stylesheet" href="main/style.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="main/jquery.min.js"></script>
    <script src="main/bootstrap.min.js"></script>
    <script src="main/numscroller-1.0.js"></script>
   <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
   <style type="text/css">
   	
   	.pages
   	{
   		height:30px;
   		width:30px;
   		padding-right:10px;
   		font-size:150%;
   		float:left;
   		background-color:#f6f6f6;
   		border-radius:5px;
   
   	}

   </style>


 </head>
 <body>
 
 <nav class="navbar navbar-default navbar-fixed" style="background-color:red;color:white;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">INDIAN NEWS&nbsp;&nbsp;&nbsp;&nbsp;</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-2">
			
		</div>
		<div class="col-sm-7">
	         <div class="container-fluid">



	         

 <?php p($url); ?> 
	         	




	         </div>
		</div>
	</div>
</div>


	        


 </body>
 </html>