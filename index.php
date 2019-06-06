<html>

<head>
<title>Home</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>

<body>


 	<div class="header">	
      <div class="container"> 
  	     <div class="logo">
			<h1><a href="index.php">Search The Papers</a></h1>
		 </div>
		 <div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<br>
	    	<h2>Enter Your Keywords</h2>
			<form class="form-horizontal" action="/pages/search/search_info.php">
			  <div class="form-group">
			    <label for="keyword" class="col-sm-2 control-label">Keywords</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="keyword" name="keyword">
			      <input name='page' type='hidden' id='page' value=1>
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Search</button>
			    </div>
			  </div>
			</form>
	</div>

<object type="image/svg+xml" data="./test1.svg" style="display:block;width:1000px;height:800px" >
    <param name="src" value="./test.svg" >
</object>

</body>

</html>