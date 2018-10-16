<?php
    session_start();

      if(isset($_SESSION['username'])) {
      //echo $_SESSION['username']."-".$_SESSION['role'];
      //header('Location: user.php');
    } else {
         header('Location: ../index.php');
        // die();
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Welcome NMIT-NAAC</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini rtl">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="user.php">NMIT</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="../logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <ul class="app-menu">
        <li><a class="app-menu__item" href="#" onclick="curricularAspectView()"><span class="app-menu__label">Curricular Aspects</span></a></li>
        <li><a class="app-menu__item" href="#" onclick="curricularAspectView()"><span class="app-menu__label">Teaching Learning</span></a></li>
        <li><a class="app-menu__item" href="#" onclick="curricularAspectView()"><span class="app-menu__label">Research, Innovations</span></a></li>
        <li><a class="app-menu__item" href="#" onclick="curricularAspectView()"><span class="app-menu__label">Infrastructre Resource</span></a></li>
        <li><a class="app-menu__item" href="#" onclick="curricularAspectView()"><span class="app-menu__label">Student Support</span></a></li>
        <li><a class="app-menu__item" href="#" onclick="curricularAspectView()"><span class="app-menu__label">GLE</span></a></li>
        <li><a class="app-menu__item" href="#" onclick="curricularAspectView()"><span class="app-menu__label">Institution Values</span></a></li>
     
      </ul>
    </aside>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1 id="titleName"></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile" id="mainSpace">
              <!-- <div style="width: 200px; background-color: red" id="mainSpace"></div>             -->
          </div>
          <div class="tile" id="formSpace" style="display: none">
          
          </div>
          <div class="tile" id="viewSpace">
            <button class="btn btn-success" onclick="viewData()">View Data</button>
          </div> 
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/user.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>