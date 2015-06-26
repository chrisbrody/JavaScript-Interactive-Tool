<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Codify Interactive - HTML</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Matt Brody & Chris Brody @ Codify Academy">

  <!-- Google Font: Open Sans -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="../css/mvpready-admin.css">
  <link rel="stylesheet" href="../css/custom.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../favicon.ico">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <div id="wrapper">

    <header class="navbar navbar-inverse" role="banner">

      <div class="container-fluid">

        <div class="navbar-header">
          <a href="../index.html" class="navbar-brand navbar-brand-img">
            <i class="fa fa-arrow-circle-o-left fa-2x"></i>
            <p id="bringback">&nbsp;&nbsp;HTML &amp; CSS</p>

          </a>
        </div> <!-- /.navbar-header -->


        <nav class="collapse navbar-collapse" role="navigation">

          <p>Codify Academy</p>

         <!--  <ul class="nav navbar-nav navbar-right">      

            <li class="dropdown navbar-profile">
              <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                <img src="./img/avatars/avatar-1-xs.jpg" class="navbar-profile-avatar" alt="">
                <span class="navbar-profile-label">rod@rod.me &nbsp;</span>
                <i class="fa fa-caret-down"></i>
              </a>

              <ul class="dropdown-menu" role="menu">

                <li>
                  <a href="./page-profile.html">
                    <i class="fa fa-user"></i> 
                    &nbsp;&nbsp;My Profile
                  </a>
                </li>

                <li>
                  <a href="./page-settings.html">
                    <i class="fa fa-cogs"></i> 
                    &nbsp;&nbsp;Settings
                  </a>
                </li>

                <li class="divider"></li>

                <li>
                  <a href="./account-login.html">
                    <i class="fa fa-sign-out"></i> 
                    &nbsp;&nbsp;Logout
                  </a>
                </li>

              </ul>

            </li>

          </ul> -->

        </nav>

      </div> <!-- /.container -->

    </header>

    <div class="mainsection">

      <div class="leftsidebar">

        <!--header of left sidebar-->
        <div class="headlabel">
          <h5>HTML Basics</h5>
          <button>1/15&nbsp;<i class="fa fa-angle-down"></i></button>
        </div>

        <!--Main body of left sidebar-->
        <div class="bodylabel">
          <h2>Indepth HTML &amp; CSS</h2>
          <p>What if you wanted to send the user to another part of your website, or another website altogether? You use hyperlinks, or links for short!</p>
          <p class="html">&lt;<span class="redd">a</span> <span class="greenn">href</span><span class="yelloww">="http://www.google.com"</span>&gt;google!&lt;/<span class="redd">a</span>&gt;</p>
          <p>1. First, there's an opening &lt;a&gt; tag and that tag has an attribute called href. The href value tells your link where you want it to go, in this case http://www.codecademy.com.&lt;/a&gt;
          <p>2. Then you have a description of your link between your opening &lt;a> and your closing &lt;/a> tags. This is what you will be able to click on.</p>
          <p>3. Finally, you have your closing &lt;/a&gt; tag.</p>
        </div>        


        <!--instructions-->
        <div class="fullwidth">
          <div class="instructions">
            <h3>Instructions</h3>
            <p>1. First, there's an opening &lt;a&gt; tag and that tag has an attribute called href. The href value tells your link where you want it to go, in this case http://www.codecademy.com.&lt;/a&gt;</p>
            <p>2. Then you have a description of your link between your opening &lt;a> and your closing &lt;/a> tags. This is what you will be able to click on.</p>
            <p>3. Finally, you have your closing &lt;/a&gt; tag.</p>
          </div>
        </div>

    
        <!--solution-->
        <div class="solution">
          <br>
          <button class="solutionbutton"><h3>Solution</h3></button>
          <div class="answer">
            <p class="html">&lt;<span class="redd">a</span> <span class="greenn">href</span><span class="yelloww">="http://www.google.com"</span>&gt;google!&lt;/<span class="redd">a</span>&gt;</p>
          </div>
        </div>
      </div> <!--end of left sidebar-->



      <!--right section-->
      <div class="centersection">
        <div id="tabs">
          <ul>
            <li class="tab"><a href="#tabs-1">index.html</a></li>
            <li class="tab"><a href="#tabs-2">main.css</a></li>
            <li class="tab"><a href="#tabs-3">main.js</a></li>
          </ul>
          <div id="tabs-1">
            <p>Proin elit arcu, rutrum commodo</p>
          </div>
          <div id="tabs-2">
            <p>Morbi tincidunt</p>
          </div>
          <div id="tabs-3">
            <p>Mauris eleifend est et turpis.</p>
          </div>
        </div>
        <div id="texteditor">
          <div class="screen">
          </div>
          <div class="fullscreen">
            <button>Full-Screen  <i class="fa fa-arrows-alt"></i></button>
          </div>
        </div>

        <footer>
          <button class="savesubmit">Save &amp; Submit Code</button>
          <button class="resetcode">Reset Code</button>
        </footer>
      </div><!--end of right section-->

    </div><!--end of main section-->

  </div> <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Core JS -->
  <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <script>
    $(function() {
      $( "#tabs" ).tabs();
    });
  </script>

  <script src="../js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="./js/libs/excanvas.compiled.js"></script>
  <![endif]-->



  <script src="../js/custom.js"></script>


</body>
</html>