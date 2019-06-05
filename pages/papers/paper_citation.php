<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Dashboard - Bootstrap Admin</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />    
    
    <link href="../../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../css/bootstrap-responsive.min.css" rel="stylesheet" />
    
    
    <link href="../../css/font-awesome.css" rel="stylesheet" />
    
    <link href="../../css/adminia.css" rel="stylesheet" /> 
    <link href="../../css/adminia-responsive.css" rel="stylesheet" /> 
    <link href="../../css/pages/dashboard.css" rel="stylesheet" /> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>





<!-- 头部页面 -->   
<div class="navbar navbar-fixed-top">
    
    <div class="navbar-inner">
        
        <div class="container">         
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span> 
                <span class="icon-bar"></span>              
            </a>
            
            <a class="brand" href="./paper_info.php">Papers</a>
            
            <div class="nav-collapse">
            
                <ul class="nav pull-right">
                    <li>
                        <a href="#"><span class="badge badge-warning">7</span></a>
                    </li>
                    
                    <li class="divider-vertical"></li>
                    
                    <li class="dropdown">
                        
                        <a data-toggle="dropdown" class="dropdown-toggle " href="#">
                            Rod Howard <b class="caret"></b>                            
                        </a>
                        
                        <ul class="dropdown-menu">
                            <li>
                                <a href="./account.html"><i class="icon-user"></i> Account Setting  </a>
                            </li>
                            
                            <li>
                                <a href="./change_password.html"><i class="icon-lock"></i> Change Password</a>
                            </li>
                            
                            <li class="divider"></li>
                            
                            <li>
                                <a href="./"><i class="icon-off"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                
            </div> <!-- /nav-collapse -->
        </div> <!-- /container -->
    </div> <!-- /navbar-inner -->    
</div> <!-- /navbar -->


<?php
$paper_id = $_GET["paper_id"];
$link = mysqli_connect("localhost:3306", 'root', '', 'FINAL');
$result = mysqli_query($link, "SELECT Title from papers where PaperID='$paper_id'");
if ($result) {
    $paper_name = mysqli_fetch_array($result)['Title'];
    $paper_name2 = ucwords($paper_name);
}
?>




<div id="content">
    
    <div class="container">
        
        <div class="row">            <div class="span3">
                
                
                <ul id="main-nav" class="nav nav-tabs nav-stacked">
                    
                    <li>
                        <?php echo "<a href=\"./paper_info.php?paper_id=$paper_id\">" ?>
                            <i class="icon-user"></i>
                            Paper Information      
                        </a>
                    </li>
                    
                    <li>
                        <?php echo "<a href=\"./paper_charts.php?paper_id=$paper_id\">" ?>
                            <i class="icon-signal"></i>
                            Paper Charts
                        </a>
                    </li>
                    
                    <li>
                        <?php echo "<a href=\"./paper_reference.php?paper_id=$paper_id\">" ?>
                            <i class="icon-th-list"></i>
                            References    
                        </a>
                    </li>
                    
                    <li  class="active">
                        <?php echo "<a href=\"./paper_citation.php?paper_id=$paper_id\">" ?>
                            <i class="icon-th-large"></i>
                            Citations
                            <span class="label label-warning pull-right">5</span>
                        </a>
                    </li>
                    
                    <li>
                        <?php echo "<a href=\"./paper_recommendation.php?paper_id=$paper_id\">" ?>
                            <i class="icon-pushpin"></i>
                            Recommendations
                        </a>
                    </li>
                    
                    <li>
                        <a href="../../index.php">
                            <i class="icon-home"></i>
                            Back to Home                     
                        </a>
                    </li>
                    
                </ul>   
                
                <hr />
                
                <div class="sidebar-extra">
                    <p> Powered by Fang Shaoheng, Dong Shiwen, Yang Hongbo, Zhou Litao.</p>
                </div> <!-- .sidebar-extra -->
                
                <br />
            </div> <!-- /span3 -->

            <!-- 右栏内容 -->
            <div class="span9">
                
                <h1 class="page-title">
                    <i class="icon-user"></i>
                    Citations                 
                </h1>
                
                <div class="stat-container">
                                        
                    <div class="stat-holder">                       
                        <div class="stat">                          
                            <span>564</span>                            
                            Completed Sales                         
                        </div> <!-- /stat -->                       
                    </div> <!-- /stat-holder -->
                    
                    <div class="stat-holder">                       
                        <div class="stat">                          
                            <span>423</span>                            
                            Pending Sales                           
                        </div> <!-- /stat -->                       
                    </div> <!-- /stat-holder -->
                    
                    <div class="stat-holder">                       
                        <div class="stat">                          
                            <span>96</span>                         
                            Returned Sales                          
                        </div> <!-- /stat -->                       
                    </div> <!-- /stat-holder -->

                    
                </div> <!-- /stat-container -->
                

                                        
<?php
                $result = mysqli_query($link, "SELECT ReferenceID from paper_reference2 where ReferenceID='$paper_id'");
                if ($result->num_rows) {              
                echo "
                <div class=\"widget widget-table\">
                                        
                    <div class=\"widget-header\">
                        <i class=\"icon-th-list\"></i>
                        <h3>Citation Table</h3>
                    </div> <!-- /widget-header -->
                    
                    <div class=\"widget-content\">
                    
                        <table class=\"table table-striped table-bordered\">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Paper Name</th>
                                    <th>Authors</th>
                                    <th>Conference</th>
                                    <th>Year</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>  <tbody>";



            $idx = 1;
            while ($row = mysqli_fetch_array($result)) {
                $paper_id_ref = $row['ReferenceID'];
                $paper_info = mysqli_fetch_array(mysqli_query($link, "SELECT Title, ConferenceID, PaperPublishYear from papers where PaperID='$paper_id_ref'"));
                if ($paper_info){
                    $paper_title = $paper_info['Title'];
                    $conf_id = $paper_info['ConferenceID'];
                    $yr = $paper_info['PaperPublishYear'];
                    $paper_title2 = ucwords($paper_title);
                    echo "<tr><td>$idx</td><td>";
                    echo "<a href=\"paper.php?paper_id=$paper_id_ref\"><h3>$paper_title2</h3></a>";
                    echo "</td>";
                    echo "<td>";
                    $author_info = mysqli_query($link, "SELECT A.AuthorID, AuthorName FROM paper_author_affiliation A LEFT JOIN authors B ON A.AuthorID = B.AuthorID WHERE PaperID = '$paper_id' ORDER BY AuthorSequence ASC");

                    while ($author_row = mysqli_fetch_array($author_info)){
                        $author_name = $author_row['AuthorName'];
                        $author_another_id = $author_row['AuthorID'];
                        $author_name2 = ucwords($author_name);
                        $author_another_id2 = ucwords($author_another_id);
                        echo "<a href=\"author.php?page=1&author_id=$author_another_id2\">$author_name2</a>";
                        echo "; ";
                    }
                    echo "</td><td>";

                    $conference_row = mysqli_fetch_array(mysqli_query($link, "SELECT ConferenceName from conferences WHERE ConferenceID = '$conf_id'"));
                    $conference_name = $conference_row['ConferenceName'];
                    $conference_name2 = ucwords($conference_name);
                    echo "<a href=\"conference.php?page=1&conference_id=$conf_id\">$conference_name2</a>";
                    echo "</td><td>";
                    echo $yr; echo "</td>";

                    echo "              <td class=\"action-td\">
                                        <a href=\"javascript:;\" class=\"btn btn-small btn-warning\">
                                            <i class=\"icon-ok\"></i>                             
                                        </a>                    
                                        <a href=\"javascript:;\" class=\"btn btn-small\">
                                            <i class=\"icon-remove\"></i>                     
                                        </a>
                                    </td></tr>";
                    $idx +=1;
                }
            }
            echo "</tbody></table>";
            echo "  </div> <!-- /widget-content -->";
        }
        else {
                echo "<div class='widget-content'><h4>Citations not found</h4></div>";
        }   ?>

                    

                    
                </div> <!-- /widget -->
                
                
                <div class="widget">
                                        
                    <div class="widget-header">
                        <i class="icon-signal"></i>
                        <h3>Area Chart</h3>
                    </div> <!-- /widget-header -->
                                                        
                    <div class="widget-content">                    
                        <div id="bar-chart" class="chart-holder"></div> <!-- /bar-chart -->             
                    </div> <!-- /widget-content -->
                    
                </div> <!-- /widget -->
                
                <div class="row">
                    
                    <div class="span5">
                                    
                        <div class="widget">
                            
                            <div class="widget-header">
                                <h3>5 Column</h3>
                            </div> <!-- /widget-header -->
                                                                
                            <div class="widget-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div> <!-- /widget-content -->
                            
                        </div> <!-- /widget -->
                        
                    </div> <!-- /span5 -->
        
                    <div class="span4">
                        
                        <div class="widget">
                            
                            <div class="widget-header">
                                <h3>4 Column</h3>
                            </div> <!-- /widget-header -->
                                                                
                            <div class="widget-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            </div> <!-- /widget-content -->
                            
                        </div> <!-- /widget -->
                    </div> <!-- /span4 -->
                    
                </div> <!-- /row -->
                
            </div> <!-- /span9 -->
            
            
        </div> <!-- /row -->
        
    </div> <!-- /container -->
    
</div> <!-- /content -->


<!-- -->











<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../../js/jquery-1.7.2.min.js"></script>
<script src="../../js/excanvas.min.js"></script>
<script src="../../js/jquery.flot.js"></script>
<script src="../../js/jquery.flot.pie.js"></script>
<script src="../../js/jquery.flot.orderBars.js"></script>
<script src="../../js/jquery.flot.resize.js"></script>


<script src="../../js/bootstrap.js"></script>
<script src="../../js/charts/bar.js"></script>

  </body>
</html>