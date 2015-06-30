<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Codify Interactive - HTML Meta Tags</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A place to practice important HTML &amp; CSS">
  <meta name="keywords" content="Learn HTML, Learn CSS, Interactive Coding Tool">
  <meta name="author" content="Matt Brody &amp; Chris Brody @ Codify Academy">

  <!-- Google Font: Open Sans -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="../../css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="../../css/mvpready-admin.css">
  <link rel="stylesheet" href="../../css/custom.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">

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
          <a href="meta2.php" class="navbar-brand navbar-brand-img">
            <i class="fa fa-arrow-circle-o-left fa-2x"></i>
            <p id="bringback">&nbsp;&nbsp;HTML &amp; CSS</p>

          </a>
        </div> <!-- /.navbar-header -->


        <nav role="navigation">

          <p>Codify Academy</p>

        </nav>

      </div> <!-- /.container -->

    </header>

    <div class="mainsection">

      <div class="leftsidebar">

        <!--header of left sidebar-->
        <div class="headlabel">
          <h4>HTML Meta Tag Description Name</h4>
          <div class="dropdown navbar-right">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Exercises
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="meta1.php">Meta Tags - Charset</a></li>
              <li><a href="meta2.php">Meta Tags - Author</a></li>
              <li class="active"><a href="meta3.php">Meta Tags - Description</a></li>
              <li><a href="meta4.php">Meta Tags - Keywords</a></li>
            </ul>
          </div>
        </div>

        <!--Main body of left sidebar-->
        <div class="bodylabel">
          <h2>HTML Meta Tags</h2>
          <p>The HTML <code>&lt;meta&gt;</code> Tag, describes metadata within an HTML document: this is usually for use by the browser and search engines.</p>
          <pre class="prettyprint">&lt;meta name="description" content="A place to practice important HTML &amp; CSS"&gt;<br><br>&lt;meta name="keywords" content="Learn HTML, Learn CSS, Interactive Coding Tool"&gt;</pre>
          <ol>
              <li>Metadata is data (information) about data.</li>

              <li>The &lt;meta&gt; tag provides Metadata about the HTML document. Metadata will not be displayed on the page, but will be machine parsable.</li>

              <li>Meta elements are typically used to specify page description, keywords, author of the document, last modified, and other metadata.</li>

              <li>The Metadata can be used by browsers (how to display content or reload page), search engines (keywords), or other web services.</li>
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
               <li>Lets add third <code>meta</code> tag on line 6, with the 2 attributes again, <code>name</code> and <code>content</code> set name equal to <code>description</code> and set content equal to <code>any simple website description</code></li>
            </ol>
          </div>
        </div>

    
        <!--solution-->
        <div class="solution">
          <br>
          <button class="solutionbutton"><h3>Solution</h3></button>
          <br>
          <div class="answer">
            <h4 class="text-center">Write this code on line 6 to complete the exercise</h4>
            <pre class="prettyprint">&lt;meta name="description" content="A place to practice important HTML &amp; CSS skills"&gt;</pre>
          </div>
          <div class="text-center bg-info">
            <a href="http://www.w3schools.com/tags/tag_meta.asp" target="_blank">Find More on Meta Tags</a>
          </div>
        </div>
      </div> <!--end of left sidebar-->



      <!--right section-->
      <div class="centersection">
        <div class="tabs">
          <ul>
            <li class="tab"><a href="#tabs-1">index.html</a></li>
            <li class="tab"><a href="#tabs-2">main.css</a></li>
          </ul>
          <div id="tabs-1">
            <ol>
              <li><span class="green">&lt;!doctype&gt;</span></li>
              <li><span  class="red">&lt;html&gt;</span></li>
              <li class=""><span class="indent1 red">&lt;head&gt;</span></li>
              <li><span class="indent2 red">&lt;meta</span> <span class="yellow">charset=</span><span class="pink">"utf-8"</span><span class="red">&gt;</span></li>
              <li><span class="indent2 red">&lt;meta</span> <span class="yellow">name=</span><span class="pink">"author"</span> <span class="yellow">content=</span><span class="pink">"Chris Brody"</span><span class="red">&gt;</span></li>
              <li class="userAnswerMeta" contenteditable="true"><span class="indent2">Write your meta tag here</span></li>
              <li><span class="indent2 red">&lt;title&gt;</span><span class="title" contenteditable="true">Your Title Here</span><span class="red">&lt;/title&gt;</span></li>
              <li><span class="indent2 red">&lt;link</span> <span class="yellow">rel=</span><span class="pink">"stylesheet"</span> <span class="yellow">href=</span><span class="pink">"main.css"</span><span class="red">&gt;</span></li>
              <li><span class="indent1 red">&lt;/head&gt;</span></li>
              <li><span class="indent1 red">&lt;body&gt;</span></li>
              <li><span class="indent2 red">&lt;h1&gt;</span><span>Hello World</span><span class="red">&lt;/h1&gt;</span></li>
              <li><span class="indent1 red">&lt;/body&gt;</span></li>
              <li><span class="red">&lt;/html&gt;</span></li>
            </ol>
          </div>
          <div id="tabs-2">
            
          </div>
        </div>
        <div class="texteditor">
          <div class="screen">
            <div class="browserView">
              <div>
                <div class="controls">
                  <div class="times"></div>
                  <div class="minus"></div>
                  <div class="square-o"></div>
                </div>
                <div class="browserNav">
                  <div class="browserTab">
                    <span>Your Title Here</span>
                  </div><div class="clearfix"></div>
                </div>

                <div class="browserContent">
                  <h1>Hello World</h1>
                </div>
              </div>
            </div>
          </div>
          <div class="fullscreen">
            <button>Full-Screen  <i class="fa fa-arrows-alt"></i></button>
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="metaCorrect">
          <div class="alert alert-success">
            Good Job! You completed adding a description to you HTML document
            <a href="meta4.php"> Continue to the Next Task <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
        <div class="metaIncorrect">
          <div class="alert alert-danger">
            Incorrect - Look for syntax errors, and try again, Use the solution if you need.
          </div>
        </div>
        <footer>
          <button class="savesubmit" onclick="checkMeta3()">Submit Code</button>
          <button class="resetcode" onclick="resetMetaCode1()">Reset Code</button>
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
  <script src="../../js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="../js/libs/excanvas.compiled.js"></script>
  <![endif]-->


  <script src="../js/meta3.js"></script>
  <script src="../../js/custom.js"></script>


</body>
</html>