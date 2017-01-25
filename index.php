 <?php print rand(1,100000);?><!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Twitter v1.1 API - A JavaScript and PHP solution</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<style>
			
			.centered {
				margin-left: auto;
				margin-right: auto;
				float: none;
			}
			.p-120 {
				padding: 120px;	
			}
			.p-10 {
				padding: 10px;	
			}
			.btn-top-margin {
				margin-top: 5px;
			}
			.border {
				border: 1px solid #4c98f3;
			}
			.div-hover:hover{
				box-shadow: 3px 3px 5px 6px #ccc;
			}
		</style>
    </head>
    <body>
	<div class="container-fluid">
		<div class="row">
			<form method="post" name="f" id="keyword_form" class="col-md-6 centered p-120" >
				<input type="text" id="text" class="form-control" name="search" placeholder="Search your tags!!" value="">
				<input id="sub" type="button" name="sub" class="btn btn-primary pull-right btn-top-margin" onclick="ajaxFunction(document.getElementById('text').value);">
			<form>
		</div>
	</div>

	<div class='tweets-container' id='tweets'>abc</div>


<SCRIPT LANGUAGE="JavaScript">

function ajaxFunction(cid)
  {

  //Set loading icon first
  document.getElementById('tweets').innerHTML='<IMG SRC = loading.gif>';

  var xmlHttp = new XMLHttpRequest();
 
    xmlHttp.onreadystatechange=function()
      {
      if(xmlHttp.readyState==4)
        {
        document.getElementById('tweets').innerHTML=xmlHttp.responseText;
        }
      }
     xmlHttp.open("POST", "getTweet.php?cid="+cid,true);
     xmlHttp.send(null);  
	}	

</SCRIPT>



        <script src="js/jquery.js"></script>
        <!--<script src="js/tweets.js"></script>-->
    </body>
</html>
