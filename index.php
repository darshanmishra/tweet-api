<!DOCTYPE html>
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
				border: 1px solid #efefef;
			}
			.div-hover:hover{
				box-shadow: 3px 3px 5px 6px #ccc;
			}
		</style>
    </head>
    <body>
	<div class="container-fluid">
		<div class="row">
			<form method="post" name="f" id="keyword_form" class="col-md-6 centered p-120">
				<input type="text" class="form-control" name="search" placeholder="Search your tags!!" value="">
				<input id="sub" type="submit" name="sub" class="btn btn-primary pull-right btn-top-margin">
			<form>
		</div>
	</div>
	<div class="tweets-container"></div>

        <script src="js/jquery.js"></script>
        <script src="js/tweets.js"></script>
    </body>
</html>
