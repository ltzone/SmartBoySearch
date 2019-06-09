<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home</title>
<meta name="description" content="">
<meta name="keywords" content="">

<link rel="stylesheet" href="css/styles-merged.css">
<link rel="stylesheet" href="css/style.min.css">
<link rel="stylesheet" href="font/icomoon/style1.css">

<script src="js/echarts.js"></script>
<script src="js/echarts-gl.js"></script>

<!--[if lt IE 9]>
  <script src="js/vendor/html5shiv.min.js"></script>
  <script src="js/vendor/respond.min.js"></script>
<![endif]-->
</head>
<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default probootstrap-navbar">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="index.php" title="uiCookies:Frame">Search Engine</a>
	</div>

	<div id="navbar-collapse" class="navbar-collapse collapse">
	  <ul class="nav navbar-nav navbar-right">
		<li class="active"><a href="#" data-nav-section="home">Search</a></li>
		<li><a href="#" data-nav-section="charts">Charts</a></li>
	  </ul>
	</div>
  </div>
</nav>

<!-- Search 页面 -->
<section class="probootstrap-hero prohttp://localhost/probootstrap/frame/#featuresbootstrap-slant" style="background-image: url(img/4.jpg);" data-section="home" data-stellar-background-ratio="0.9">
  <div class="container">
	<div class="row intro-text">
	  <div class="col-md-8 col-md-offset-2 text-center">
		<h1 class="probootstrap-heading probootstrap-animate">Search Engine</h1>
			<form class="form-horizontal" action="/EE101_final/pages/search/search_info.php">
			  <div class="form-group">
			    <div class="col-md-12 text-center">
			      <p class="probootstrap-animate"><input type="text" class="form-control" id="keyword" name="keyword" placeholder="Enter the keyword: Paper/Conference/Author"></p>
			      <input name='page' type='hidden' id='page' value=1 >
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="probootstrap-subheading center">
			      <p class="probootstrap-animate"><button type="submit" class="btn btn-default smoothscroll">Search</button></p>
			    </div>
			  </div>
			</form>

	  </div>
	</div>
  </div>
</section>



<section class="probootstrap-section probootstrap-bg-light" id="charts" data-section="charts">
  <div class="container">
	<div class="row text-center mb50">
	  <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
		<h2 class="mb30 text-black probootstrap-heading">Charts</h2>
	  </div>
	  <div class='col-md-offset-2'>
	  	<div id="conference_chart" style="width: 900px;height:750px;"></div>
	  </div>
	</div>
	<!-- END row -->

  </div>
</section>
<!-- END section -->




<footer class="probootstrap-footer">
  <div class="container text-center">
	<div class="row">
	  <div class="col-md-12">
		<p class="probootstrap-social"><a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-facebook2"></i></a> <a href="#"><i class="icon-instagram2"></i></a><a href="#"><i class="icon-linkedin"></i></a></p>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-12"><font size=5>Powered by Fang Shaoheng, Dong Shiwen, Yang Hongbo, Zhou Litao.</font></div>
	  <div class="col-md-12"><font size=5>Data provided by Prof. <a href="http://www.cs.sjtu.edu.cn/~wang-xb/ieei/index.html" title="Xinbing Wang" target="_blank">Xinbing Wang</a>.</font></div>
	</div>
  </div>
</footer>


<!-- conference year 3d chart-->
<script type="text/javascript">
    var myChart = echarts.init(document.getElementById('conference_chart'));
var years = ['1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016'];
var conferences = ['ECCV','NIPS','SIGKDD','WWW','SIGIR','CVPR','ICCV','NAACL','ICML','AAAI','ACL','EMNLP','IJCAI'];


var data = [[0, 0, 0], [1, 0, 0], [2, 0, 0], [3, 0, 0], [4, 0, 0], [5, 0, 0], [6, 0, 0], [7, 0, 0], [8, 0, 0], [9, 0, 0], [10, 0, 15], [11, 0, 0], [12, 0, 0], [0, 1, 0], [1, 1, 0], [2, 1, 0], [3, 1, 0], [4, 1, 0], [5, 1, 0], [6, 1, 0], [7, 1, 0], [8, 1, 0], [9, 1, 0], [10, 1, 2], [11, 1, 0], [12, 1, 0], [0, 2, 0], [1, 2, 0], [2, 2, 0], [3, 2, 0], [4, 2, 0], [5, 2, 0], [6, 2, 0], [7, 2, 0], [8, 2, 0], [9, 2, 0], [10, 2, 47], [11, 2, 0], [12, 2, 0], [0, 3, 0], [1, 3, 0], [2, 3, 0], [3, 3, 0], [4, 3, 0], [5, 3, 0], [6, 3, 0], [7, 3, 0], [8, 3, 0], [9, 3, 0], [10, 3, 39], [11, 3, 0], [12, 3, 0], [0, 4, 0], [1, 4, 0], [2, 4, 0], [3, 4, 0], [4, 4, 0], [5, 4, 0], [6, 4, 0], [7, 4, 0], [8, 4, 0], [9, 4, 0], [10, 4, 32], [11, 4, 0], [12, 4, 0], [0, 5, 0], [1, 5, 0], [2, 5, 0], [3, 5, 0], [4, 5, 0], [5, 5, 0], [6, 5, 0], [7, 5, 0], [8, 5, 0], [9, 5, 0], [10, 5, 55], [11, 5, 0], [12, 5, 0], [0, 6, 0], [1, 6, 0], [2, 6, 0], [3, 6, 0], [4, 6, 0], [5, 6, 0], [6, 6, 0], [7, 6, 0], [8, 6, 0], [9, 6, 0], [10, 6, 85], [11, 6, 0], [12, 6, 0], [0, 7, 0], [1, 7, 0], [2, 7, 0], [3, 7, 0], [4, 7, 0], [5, 7, 0], [6, 7, 0], [7, 7, 0], [8, 7, 0], [9, 7, 0], [10, 7, 97], [11, 7, 0], [12, 7, 0], [0, 8, 0], [1, 8, 0], [2, 8, 0], [3, 8, 0], [4, 8, 0], [5, 8, 0], [6, 8, 0], [7, 8, 0], [8, 8, 0], [9, 8, 0], [10, 8, 87], [11, 8, 0], [12, 8, 0], [0, 9, 0], [1, 9, 0], [2, 9, 0], [3, 9, 0], [4, 9, 0], [5, 9, 0], [6, 9, 0], [7, 9, 0], [8, 9, 0], [9, 9, 0], [10, 9, 51], [11, 9, 0], [12, 9, 0], [0, 10, 0], [1, 10, 0], [2, 10, 0], [3, 10, 0], [4, 10, 0], [5, 10, 0], [6, 10, 0], [7, 10, 0], [8, 10, 0], [9, 10, 0], [10, 10, 80], [11, 10, 0], [12, 10, 0], [0, 11, 0], [1, 11, 0], [2, 11, 0], [3, 11, 0], [4, 11, 0], [5, 11, 0], [6, 11, 0], [7, 11, 0], [8, 11, 0], [9, 11, 0], [10, 11, 57], [11, 11, 0], [12, 11, 0], [0, 12, 0], [1, 12, 0], [2, 12, 0], [3, 12, 0], [4, 12, 0], [5, 12, 0], [6, 12, 0], [7, 12, 0], [8, 12, 0], [9, 12, 0], [10, 12, 78], [11, 12, 0], [12, 12, 0], [0, 13, 0], [1, 13, 0], [2, 13, 0], [3, 13, 0], [4, 13, 0], [5, 13, 0], [6, 13, 0], [7, 13, 0], [8, 13, 0], [9, 13, 0], [10, 13, 101], [11, 13, 0], [12, 13, 0], [0, 14, 0], [1, 14, 0], [2, 14, 0], [3, 14, 0], [4, 14, 0], [5, 14, 0], [6, 14, 0], [7, 14, 0], [8, 14, 0], [9, 14, 0], [10, 14, 123], [11, 14, 0], [12, 14, 0], [0, 15, 0], [1, 15, 0], [2, 15, 0], [3, 15, 0], [4, 15, 0], [5, 15, 0], [6, 15, 0], [7, 15, 0], [8, 15, 0], [9, 15, 0], [10, 15, 93], [11, 15, 0], [12, 15, 0], [0, 16, 0], [1, 16, 0], [2, 16, 0], [3, 16, 0], [4, 16, 0], [5, 16, 0], [6, 16, 0], [7, 16, 0], [8, 16, 0], [9, 16, 0], [10, 16, 159], [11, 16, 0], [12, 16, 0], [0, 17, 0], [1, 17, 0], [2, 17, 0], [3, 17, 0], [4, 17, 0], [5, 17, 0], [6, 17, 0], [7, 17, 0], [8, 17, 0], [9, 17, 0], [10, 17, 178], [11, 17, 0], [12, 17, 0], [0, 18, 0], [1, 18, 0], [2, 18, 0], [3, 18, 0], [4, 18, 0], [5, 18, 0], [6, 18, 0], [7, 18, 0], [8, 18, 0], [9, 18, 0], [10, 18, 151], [11, 18, 0], [12, 18, 71], [0, 19, 0], [1, 19, 0], [2, 19, 0], [3, 19, 0], [4, 19, 0], [5, 19, 0], [6, 19, 0], [7, 19, 0], [8, 19, 0], [9, 19, 0], [10, 19, 110], [11, 19, 0], [12, 19, 1], [0, 20, 0], [1, 20, 0], [2, 20, 0], [3, 20, 0], [4, 20, 24], [5, 20, 0], [6, 20, 0], [7, 20, 0], [8, 20, 0], [9, 20, 0], [10, 20, 186], [11, 20, 0], [12, 20, 74], [0, 21, 0], [1, 21, 0], [2, 21, 0], [3, 21, 0], [4, 21, 0], [5, 21, 0], [6, 21, 0], [7, 21, 0], [8, 21, 0], [9, 21, 0], [10, 21, 208], [11, 21, 0], [12, 21, 9], [0, 22, 0], [1, 22, 0], [2, 22, 0], [3, 22, 0], [4, 22, 18], [5, 22, 0], [6, 22, 0], [7, 22, 0], [8, 22, 0], [9, 22, 0], [10, 22, 102], [11, 22, 0], [12, 22, 100], [0, 23, 0], [1, 23, 0], [2, 23, 0], [3, 23, 0], [4, 23, 2], [5, 23, 0], [6, 23, 0], [7, 23, 0], [8, 23, 0], [9, 23, 0], [10, 23, 118], [11, 23, 0], [12, 23, 7], [0, 24, 0], [1, 24, 0], [2, 24, 0], [3, 24, 0], [4, 24, 0], [5, 24, 0], [6, 24, 0], [7, 24, 0], [8, 24, 0], [9, 24, 0], [10, 24, 98], [11, 24, 0], [12, 24, 168], [0, 25, 0], [1, 25, 0], [2, 25, 0], [3, 25, 0], [4, 25, 0], [5, 25, 0], [6, 25, 0], [7, 25, 0], [8, 25, 0], [9, 25, 0], [10, 25, 95], [11, 25, 0], [12, 25, 8], [0, 26, 0], [1, 26, 0], [2, 26, 0], [3, 26, 0], [4, 26, 1], [5, 26, 0], [6, 26, 0], [7, 26, 0], [8, 26, 0], [9, 26, 0], [10, 26, 84], [11, 26, 0], [12, 26, 250], [0, 27, 0], [1, 27, 0], [2, 27, 0], [3, 27, 0], [4, 27, 26], [5, 27, 0], [6, 27, 0], [7, 27, 0], [8, 27, 0], [9, 27, 0], [10, 27, 0], [11, 27, 0], [12, 27, 7], [0, 28, 0], [1, 28, 0], [2, 28, 0], [3, 28, 0], [4, 28, 32], [5, 28, 0], [6, 28, 0], [7, 28, 0], [8, 28, 0], [9, 28, 1], [10, 28, 33], [11, 28, 0], [12, 28, 250], [0, 29, 0], [1, 29, 0], [2, 29, 0], [3, 29, 0], [4, 29, 25], [5, 29, 0], [6, 29, 0], [7, 29, 0], [8, 29, 0], [9, 29, 92], [10, 29, 134], [11, 29, 0], [12, 29, 6], [0, 30, 0], [1, 30, 0], [2, 30, 0], [3, 30, 0], [4, 30, 43], [5, 30, 0], [6, 30, 0], [7, 30, 0], [8, 30, 0], [9, 30, 4], [10, 30, 90], [11, 30, 0], [12, 30, 250], [0, 31, 0], [1, 31, 0], [2, 31, 0], [3, 31, 0], [4, 31, 26], [5, 31, 1], [6, 31, 0], [7, 31, 0], [8, 31, 0], [9, 31, 106], [10, 31, 107], [11, 31, 0], [12, 31, 4], [0, 32, 0], [1, 32, 0], [2, 32, 0], [3, 32, 0], [4, 32, 59], [5, 32, 10], [6, 32, 0], [7, 32, 33], [8, 32, 0], [9, 32, 101], [10, 32, 92], [11, 32, 0], [12, 32, 294], [0, 33, 0], [1, 33, 0], [2, 33, 0], [3, 33, 0], [4, 33, 35], [5, 33, 0], [6, 33, 0], [7, 33, 0], [8, 33, 1], [9, 33, 251], [10, 33, 54], [11, 33, 0], [12, 33, 102], [0, 34, 0], [1, 34, 23], [2, 34, 0], [3, 34, 0], [4, 34, 42], [5, 34, 14], [6, 34, 0], [7, 34, 0], [8, 34, 0], [9, 34, 6], [10, 34, 54], [11, 34, 0], [12, 34, 285], [0, 35, 0], [1, 35, 0], [2, 35, 0], [3, 35, 1], [4, 35, 43], [5, 35, 20], [6, 35, 0], [7, 35, 14], [8, 35, 0], [9, 35, 200], [10, 35, 56], [11, 35, 0], [12, 35, 13], [0, 36, 0], [1, 36, 37], [2, 36, 0], [3, 36, 32], [4, 36, 55], [5, 36, 1], [6, 36, 17], [7, 36, 0], [8, 36, 13], [9, 36, 183], [10, 36, 42], [11, 36, 0], [12, 36, 294], [0, 37, 0], [1, 37, 96], [2, 37, 0], [3, 37, 4], [4, 37, 62], [5, 37, 235], [6, 37, 94], [7, 37, 33], [8, 37, 49], [9, 37, 161], [10, 37, 44], [11, 37, 0], [12, 37, 276], [0, 38, 4], [1, 38, 166], [2, 38, 0], [3, 38, 42], [4, 38, 93], [5, 38, 107], [6, 38, 7], [7, 38, 6], [8, 38, 148], [9, 38, 32], [10, 38, 42], [11, 38, 0], [12, 38, 336], [0, 39, 97], [1, 39, 251], [2, 39, 0], [3, 39, 1], [4, 39, 6], [5, 39, 12], [6, 39, 131], [7, 39, 2], [8, 39, 55], [9, 39, 247], [10, 39, 53], [11, 39, 0], [12, 39, 30], [0, 40, 11], [1, 40, 220], [2, 40, 0], [3, 40, 46], [4, 40, 59], [5, 40, 161], [6, 40, 12], [7, 40, 170], [8, 40, 140], [9, 40, 170], [10, 40, 88], [11, 40, 0], [12, 40, 269], [0, 41, 129], [1, 41, 299], [2, 41, 0], [3, 41, 17], [4, 41, 39], [5, 41, 176], [6, 41, 27], [7, 41, 56], [8, 41, 75], [9, 41, 155], [10, 41, 67], [11, 41, 0], [12, 41, 136], [0, 42, 3], [1, 42, 188], [2, 42, 1], [3, 42, 39], [4, 42, 62], [5, 42, 538], [6, 42, 109], [7, 42, 11], [8, 42, 51], [9, 42, 187], [10, 42, 69], [11, 42, 0], [12, 42, 299], [0, 43, 148], [1, 43, 173], [2, 43, 40], [3, 43, 110], [4, 43, 47], [5, 43, 201], [6, 43, 61], [7, 43, 221], [8, 43, 50], [9, 43, 352], [10, 43, 72], [11, 43, 0], [12, 43, 26], [0, 44, 4], [1, 44, 310], [2, 44, 60], [3, 44, 72], [4, 44, 63], [5, 44, 22], [6, 44, 275], [7, 44, 2], [8, 44, 80], [9, 44, 20], [10, 44, 81], [11, 44, 0], [12, 44, 438], [0, 45, 163], [1, 45, 275], [2, 45, 131], [3, 45, 109], [4, 45, 78], [5, 45, 177], [6, 45, 26], [7, 45, 0], [8, 45, 82], [9, 45, 361], [10, 45, 76], [11, 45, 0], [12, 45, 47], [0, 46, 8], [1, 46, 325], [2, 46, 70], [3, 46, 124], [4, 46, 94], [5, 46, 214], [6, 46, 98], [7, 46, 83], [8, 46, 63], [9, 46, 341], [10, 46, 158], [11, 46, 0], [12, 46, 326], [0, 47, 135], [1, 47, 258], [2, 47, 137], [3, 47, 276], [4, 47, 89], [5, 47, 212], [6, 47, 210], [7, 47, 2], [8, 47, 82], [9, 47, 290], [10, 47, 497], [11, 47, 9], [12, 47, 17], [0, 48, 7], [1, 48, 243], [2, 48, 155], [3, 48, 166], [4, 48, 115], [5, 48, 237], [6, 48, 268], [7, 48, 29], [8, 48, 172], [9, 48, 232], [10, 48, 104], [11, 48, 1], [12, 48, 333], [0, 49, 218], [1, 49, 257], [2, 49, 156], [3, 49, 290], [4, 49, 129], [5, 49, 331], [6, 49, 64], [7, 49, 147], [8, 49, 181], [9, 49, 270], [10, 49, 173], [11, 49, 31], [12, 49, 34], [0, 50, 197], [1, 50, 311], [2, 50, 135], [3, 50, 294], [4, 50, 121], [5, 50, 348], [6, 50, 286], [7, 50, 194], [8, 50, 94], [9, 50, 61], [10, 50, 167], [11, 50, 7], [12, 50, 275], [0, 51, 318], [1, 51, 246], [2, 51, 196], [3, 51, 289], [4, 51, 117], [5, 51, 34], [6, 51, 29], [7, 51, 26], [8, 51, 285], [9, 51, 272], [10, 51, 277], [11, 51, 43], [12, 51, 25], [0, 52, 10], [1, 52, 355], [2, 52, 166], [3, 52, 462], [4, 52, 126], [5, 52, 353], [6, 52, 245], [7, 52, 501], [8, 52, 297], [9, 52, 33], [10, 52, 253], [11, 52, 29], [12, 52, 405], [0, 53, 331], [1, 53, 267], [2, 53, 229], [3, 53, 524], [4, 53, 164], [5, 53, 508], [6, 53, 6], [7, 53, 190], [8, 53, 324], [9, 53, 265], [10, 53, 260], [11, 53, 66], [12, 53, 79], [0, 54, 5], [1, 54, 311], [2, 54, 302], [3, 54, 437], [4, 54, 155], [5, 54, 555], [6, 54, 381], [7, 54, 60], [8, 54, 362], [9, 54, 442], [10, 54, 289], [11, 54, 161], [12, 54, 440], [0, 55, 268], [1, 55, 315], [2, 55, 265], [3, 55, 374], [4, 55, 169], [5, 55, 577], [6, 55, 6], [7, 55, 199], [8, 55, 324], [9, 55, 575], [10, 55, 397], [11, 55, 76], [12, 55, 76], [0, 56, 18], [1, 56, 371], [2, 56, 370], [3, 56, 377], [4, 56, 271], [5, 56, 631], [6, 56, 573], [7, 56, 259], [8, 56, 345], [9, 56, 571], [10, 56, 437], [11, 56, 132], [12, 56, 549], [0, 57, 265], [1, 57, 355], [2, 57, 324], [3, 57, 459], [4, 57, 278], [5, 57, 883], [6, 57, 34], [7, 57, 85], [8, 57, 397], [9, 57, 504], [10, 57, 310], [11, 57, 135], [12, 57, 46], [0, 58, 7], [1, 58, 503], [2, 58, 554], [3, 58, 383], [4, 58, 301], [5, 58, 615], [6, 58, 758], [7, 58, 226], [8, 58, 366], [9, 58, 127], [10, 58, 381], [11, 58, 175], [12, 58, 762], [0, 59, 405], [1, 59, 427], [2, 59, 509], [3, 59, 527], [4, 59, 250], [5, 59, 780], [6, 59, 164], [7, 59, 425], [8, 59, 410], [9, 59, 756], [10, 59, 429], [11, 59, 134], [12, 59, 26], [0, 60, 4], [1, 60, 405], [2, 60, 318], [3, 60, 438], [4, 60, 325], [5, 60, 682], [6, 60, 929], [7, 60, 41], [8, 60, 247], [9, 60, 761], [10, 60, 457], [11, 60, 175], [12, 60, 567], [0, 61, 623], [1, 61, 508], [2, 61, 493], [3, 61, 566], [4, 61, 257], [5, 61, 782], [6, 61, 184], [7, 61, 182], [8, 61, 334], [9, 61, 645], [10, 61, 336], [11, 61, 183], [12, 61, 28], [0, 62, 13], [1, 62, 446], [2, 62, 468], [3, 62, 645], [4, 62, 299], [5, 62, 782], [6, 62, 881], [7, 62, 238], [8, 62, 376], [9, 62, 718], [10, 62, 562], [11, 62, 215], [12, 62, 584], [0, 63, 591], [1, 63, 497], [2, 63, 320], [3, 63, 618], [4, 63, 263], [5, 63, 759], [6, 63, 124], [7, 63, 45], [8, 63, 361], [9, 63, 897], [10, 63, 488], [11, 63, 300], [12, 63, 54], [0, 64, 31], [1, 64, 467], [2, 64, 527], [3, 64, 659], [4, 64, 282], [5, 64, 831], [6, 64, 888], [7, 64, 271], [8, 64, 356], [9, 64, 1069], [10, 64, 442], [11, 64, 321], [12, 64, 698], [0, 65, 565], [1, 65, 1], [2, 65, 316], [3, 65, 512], [4, 65, 305], [5, 65, 2], [6, 65, 6], [7, 65, 223], [8, 65, 396], [9, 65, 673], [10, 65, 420], [11, 65, 349], [12, 65, 700]];
option = {
    tooltip: {},
    title: {
    	text: 'Conference Publication'
    },
    visualMap: {
        max: 1200,
        inRange: {
            color: ['#313695', '#4575b4', '#74add1', '#abd9e9', '#e0f3f8', '#ffffbf', '#fee090', '#fdae61', '#f46d43', '#d73027', '#a50026']
        }
    },
    xAxis3D: {
        type: 'category',
        data: years,
        name: 'year'
    },
    yAxis3D: {
        type: 'category',
        data: conferences,
        axisLabel: {
        	interval: 0
        },
        name: 'conference'
    },
    zAxis3D: {
        type: 'value',
        minInterval: 1,
        name: 'Papers'
    },
    grid3D: {
        boxWidth: 200,
        boxDepth: 80,
        viewControl: {
        	//projection: 'orthographic'
        },
        light: {
            main: {
                intensity: 1.2,
                shadow: true
            },
            ambient: {
                intensity: 0.3
            }
        }
    },
    series: [{
        type: 'bar3D',
        data: data.map(function (item) {
            return {
                value: [item[1], item[0], item[2]]
            }
        }),
        shading: 'color',

        label: {
            show: false,
            textStyle: {
                fontSize: 16,
                borderWidth: 1
            }
        },
        
        itemStyle: {
            opacity: 0.8
        },

        emphasis: {
            label: {
                textStyle: {
                    fontSize: 20,
                    color: '#900'
                }
            },
            itemStyle: {
                color: '#900'
            }
        }
    }]
}
    
    myChart.setOption(option);
</script>



<script src="js/scripts.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>