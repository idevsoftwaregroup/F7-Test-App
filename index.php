<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <title>Ertebat Sedaye Bartar</title>
    <!-- Path to Framework7 Library CSS-->
    <link rel="stylesheet" href="css/framework7.material.min.css">
    <link rel="stylesheet" href="css/framework7.material.colors.min.css">
    <!-- Path to your custom app styles-->
    <link rel="stylesheet" href="css/my-app.css">
  </head>
  <body class="theme-green">
    
    <!-- Views-->
    <div class="views">
      <!-- Your main view, should have "view-main" class-->
      <div class="view view-main">
        <!-- Top Navbar-->
        <div class="navbar">
          <div class="navbar-inner">
            <!-- We have home navbar without left link-->
            <div class="left sliding no-hairlines"><b>&nbsp;
            	<?php
            		require 'conn.inc.php';
            		$title_qiery = mysqli_query($mysqli, "SELECT * From `h59894_mobile`.`structure` ");
            		while($row_title = mysqli_fetch_assoc($title_qiery)){
            			$title = $row_title['title'];
            		}
            		echo $title;
            		// echo "failed";
            	?>
            </b></div>
            <div class="right">
              <!-- Right link contains only icon - additional "icon-only" class-->
              <a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
            </div>
          </div>
        </div>
        <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
        <div class="pages navbar-through toolbar-through">
          <!-- Page, data-page contains page name-->
          <div data-page="index" class="page">
            <!-- Scrollable page content-->
            <div class="page-content">
              <div class="content-block-title">Ertebat Co. Mobile App.</div>
              <div class="content-block">
                <div class="content-block-inner">
                  <p>It is a first test of the Ertebat Co. Mobile App!</p>
                  <p>Duis sed erat ac eros ultrices pharetra id ut tellus. Praesent rhoncus enim ornare ipsum aliquet ultricies. Pellentesque sodales erat quis elementum sagittis.</p>
                </div>
              </div>
              <!-- Side Panel -->
<!--               <div class="content-block-title">Side Category Panels</div>
              <div class="content-block">
                <div class="row">
                  <div class="col-50"><a href="#" data-panel="left" class="button open-panel">Blog Menu</a></div>
                  <div class="col-50"><a href="#" data-panel="right" class="button open-panel">Products</a></div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <!-- Bottom Toolbar-->
        <div class="toolbar">
          <!-- <div class="toolbar-inner"><a href="#" class="link">Link 1</a><a href="#" class="link">Link 2</a></div> -->
          <div class="toolbar-inner">
            <div class="col-50"><a href="#" data-panel="left" class="button open-panel">Blog Menu</a></div>
                  <div class="col-50"><a href="#" data-panel="right" class="button open-panel">Products</a></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Status bar overlay for fullscreen mode-->
    <div class="statusbar-overlay"></div>
    <!-- Panels overlay-->
    <div class="panel-overlay"></div>
    <!-- Left panel with reveal effect-->
    <div class="panel panel-left panel-reveal">
      <div class="content-block">
        <div class="content-block-title">Ertebat Co. public menu</div>
          <div class="list-block">
            <ul>
              <li><a href="about.php" class="item-link">
                  <div class="item-content">
                    <div class="item-inner"> 
                      <div class="item-title">About</div>
                    </div>
                  </div></a></li>
              <li><a href="blog.php" class="item-link">
                  <div class="item-content"> 
                    <div class="item-inner">
                      <div class="item-title">Blog <sup>News & Articles</sup></div>
                    </div>
                  </div></a></li>
              <li><a href="contact.php" class="item-link">
                  <div class="item-content"> 
                    <div class="item-inner">
                      <div class="item-title">Contact us</div>
                    </div>
                  </div></a></li>
            </ul>
          </div>
      </div>
    </div>
    <!-- Right panel with cover effect-->
    <div class="panel panel-right panel-cover">
      <div class="content-block">
        <div class="content-block-title">Product Categories</div>
          <div class="list-block">
            <ul>
              <li><a href="#" class="item-link">
                  <div class="item-content">
                    <div class="item-inner"> 
                      <div class="item-title">Audio</div>
                    </div>
                  </div></a></li>
              <li><a href="#" class="item-link">
                  <div class="item-content"> 
                    <div class="item-inner">
                      <div class="item-title">Visual</div>
                    </div>
                  </div></a></li>
              <li><a href="#" class="item-link">
                  <div class="item-content"> 
                    <div class="item-inner">
                      <div class="item-title">Broadcast</div>
                    </div>
                  </div></a></li>
                <li>
                  <a href="#" class="item-link">
                    <div class="item-content">
                      <div class="item-inner">
                        <div class="item-title">
                          Digital Conference
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="" class="item-link">
                    <div class="item-content">
                      <div class="item-inner">
                        <div class="item-title">
                          Accessories
                        </div>
                      </div>
                    </div>
                  </a>
                </li>
            </ul>
          </div>
      </div>
    </div>
    <!-- Path to Framework7 Library JS-->
    <script type="text/javascript" src="js/framework7.min.js"></script>
    <!-- Path to your app js-->
    <script type="text/javascript" src="js/my-app.js"></script>
  </body>
</html>