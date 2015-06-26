<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Codify Interactive - HTML Meta Tags</title>

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
          <h2>HTML Meta Tags</h2>
          <p>The HTML <code>&lt;meta&gt;</code> Tag, describes metadata within an HTML document: this is usually for use by the browser and search engines, but there are a few that users can see!</p>
          <pre class="prettyprint">&lt;meta charset="utf-8"&gt;</pre>
          <pre class="prettyprint">&lt;meta name="author" content="Chris Brody"&gt;</pre>
          <ol>
              <li>Metadata is data (information) about data.</li>

              <li>The &lt;meta&gt; tag provides metadata about the HTML document. Metadata will not be displayed on the page, but will be machine parsable.</li>

              <li>Meta elements are typically used to specify page description, keywords, author of the document, last modified, and other metadata.</li>

              <li>The metadata can be used by browsers (how to display content or reload page), search engines (keywords), or other web services.</li>
            </ol>
        </div>
        <!-- extra tips and nots -->
        <div class="extraTips">
          <h3>Extra Tips &amp; Notes</h3>
          <ul class="list-unstyled">
            <li><span>Note:</span> &lt;meta&gt; tags always goes inside the &lt;head&gt; element.</li>

            <li><span>Note:</span> Metadata is always passed as name/value pairs.</li>

            <li><span>Note:</span> The content attribute MUST be defined if the name or the http-equiv attribute is defined. If <span>none</span> of these are defined, the content attribute <code>CANNOT</code> be defined.</li>
          </ul>
        </div>
        <!--instructions-->
        <div class="fullwidth">
          <div class="instructions">
            <h3>Instructions</h3>
            <ol>
              <li>Lets begin with something simple, Add a <code>meta</code> tag with the attribute of <code>charset</code> and set this equal to <code>uft-8</code></li>
            </ol>
          </div>
        </div>

    
        <!--solution-->
        <div class="solution">
          <br>
          <button class="solutionbutton"><h3>Solution</h3></button>
          <br>
          <div class="answer">
            <h4 class="text-center">Copy and Paste this code to Continue</h4>
            <pre class="prettyprint">&lt;meta charset="utf-8"&gt;</pre>
          </div>
        </div>
      </div> <!--end of left sidebar-->



      <!--right section-->
      <div class="centersection">
        <div id="tabs">
          <ul>
            <li class="tab"><a href="#tabs-1">index.html</a></li>
            <li class="tab"><a href="#tabs-2">main.css</a></li>
          </ul>
          <div id="tabs-1">
            <ol>
              <li>&lt;!doctype&gt;</li>
              <li>&lt;html&gt;</li>
              <li><span class="indent1">&lt;head&gt;</span></li>
              <li><span class="indent2">&lt;title&gt;Your Title Here&lt;/title&gt;</span></li>
              <li id="userAnswer" contenteditable="true"><span class="indent2">Write your meta tag here</span></li>
              <li><span class="indent1">&lt;/head&gt;</span></li>
              <li><span class="indent1">&lt;body&gt;</span></li>
              <br>
              <li><span class="indent1">&lt;/body&gt;</span></li>
              <li>&lt;/html&gt;</li>
            </ol>
          </div>
          <div id="tabs-2">
            <p>Morbi tincidunt</p>
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
          <button id="meta" class="savesubmit" onclick="checkMeta()">Save &amp; Submit Code</button>
          <button class="resetcode">Reset Code</button>
        </footer>
      </div><!--end of right section-->

    </div><!--end of main section-->

  </div> <!-- /#wrapper -->


  <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=desert"></script>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Core JS -->
  <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="../js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="../js/libs/excanvas.compiled.js"></script>
  <![endif]-->



  <script src="../js/custom.js"></script>


</body>
</html>