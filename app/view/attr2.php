<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <title>Codify Interactive - HTML Attributes</title>

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
          <a href="attr1.php" class="navbar-brand navbar-brand-img">
            <i class="fa fa-arrow-circle-o-left fa-2x"></i>
            <p id="bringback">&nbsp;&nbsp;HTML &amp; CSS</p>

          </a>
        </div> <!-- /.navbar-header -->


        <nav role="navigation">

          <p><a href="../../index.html">Codify Academy</a></p>

        </nav>

      </div> <!-- /.container -->

    </header>

    <div class="mainsection">

      <div class="leftsidebar">

        <!--header of left sidebar-->
        <div class="headlabel">
          <h4>HTML - class Attribute</h4>
          <div class="dropdown navbar-right">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Exercises
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="attr1.php">Attributes - id</a></li>
              <li class="active"><a href="attr2.php">Attributes - class</a></li>
              <li><a href="attr3.php">Attributes - href</a></li>
              <li><a href="attr4.php">Attributes - src</a></li>
              <li><a href="attr5.php">Attributes - alt</a></li>
              <li><a href="attr6.php">Attributes - title</a></li>
            </ul>
          </div>
        </div>

        <!--main body of left sidebar-->
        <div class="bodylabel">
          <h2>HTML Attributes</h2>
          <p>Attributes provide additional information about HTML elements.</p>
          <pre class="prettyprint">&lt;div class="class_name"&gt;Content&lt;/div&gt;<br><br>&lt;a href="http://google.com"&gt;Google&lt;/a&gt;<br><br>&lt;img src="path/image.jpg" alt="image alt"&gt;<br><br><span title="About Paragraph">&lt;p title="About Paragraph"&gt;Content Here&lt;/p&gt;</span></pre>
          <ol id="attrInfo">
            <li>HTML elements can have <span>attributes</span></li>
            <li>Attributes provide <span>additional information</span> about an element</li>
            <li>Attributes are always specified in <span>the start tag</span></li>
            <li>Attributes come in name/value pairs like: <span>name="value"</span></li>
          </ol>
        </div>
        <!-- extra tips and notes -->
        <div class="extraTips">
          <h3>Extra Tips &amp; Notes</h3>
          <ul class="list-unstyled">
            <li>All HTML elements can have <span>attributes</span></li>
            <li>The HTML <span>title</span> attribute provides additional "tool-tip" information</li>
            <li>The HTML <span>href</span> attribute provides address information for links</li>
            <li>The HTML <span>width</span> and height attributes provide size information for images</li>
            <li>The HTML <span>alt</span> attribute provides text for screen readers</li>
            <li>Always use <span>lowercase</span> HTML attribute names</li>
            <li>Always quote <span>attributes</span> with double quotes</li>
          </ul>
        </div>
        <!--instructions-->
        <div class="fullwidth">
          <div class="instructions">
            <h3>Instructions</h3>
            <ol>
              <li>Lets continue by adding a class of <code>box</code>- (these are repeatable) - to both <code>div</code> tags, on line 12  &amp; 13</li>
            </ol>
          </div>
        </div>

    
        <!--solution-->
        <div class="solution">
          <br>
          <button class="solutionbutton"><h3>Solution</h3></button>
          <br>
          <div class="answer">
            <h4 class="text-center">Write this code on line 12 &amp; 13 to complete the exercise</h4>
            <pre class="prettyprint">&lt;div class="box"&gt;Content Here&lt;/div&gt;<br>&lt;div class="box"&gt;Content Here&lt;/div&gt;</pre>
          </div>
          <div class="text-center bg-info">
            <a href="http://www.w3schools.com/html/html_attributes.asp" target="_blank">Find More on HTML Attributes</a>
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
              <li><span class="indent2 red">&lt;meta</span> <span class="yellow">name=</span><span class="pink">"description"</span> <span class="yellow">content=</span><span class="pink">"A place to practice important HTML &amp; CSS skills"</span><span class="red">&gt;</span></li>          
              <li><span class="indent2 red">&lt;title&gt;</span><span class="title" contenteditable="true">Your Title Here</span><span class="red">&lt;/title&gt;</span></li>
              <li><span class="indent2 red">&lt;link</span> <span class="yellow">rel=</span><span class="pink">"stylesheet"</span> <span class="yellow">href=</span><span class="pink">"main.css"</span><span class="red">&gt;</span></li>
              <li><span class="indent1 red">&lt;/head&gt;</span></li>
              <li><span class="indent1 red">&lt;body&gt;</span></li>
              <li><span class="indent2 red">&lt;section</span> <span class="yellow">id=</span><span class="pink">"section_wrapper"</span><span class="red">&gt;</span></li>
              <li class="userAnswerAttr"><span class="indent3 userId">&lt;div</span><span class="userAnswerId" contenteditable="true">&gt;</span><span class="userAnswerConent" contenteditable="true">Write Content Here</span><span>&lt;/div&gt;</span></li>
              <li class="userAnswerAttr2"><span class="indent3 userId2">&lt;div</span><span class="userAnswerId2" contenteditable="true">&gt;</span><span class="userAnswerConent2" contenteditable="true">Write Content Here</span><span>&lt;/div&gt;</span></li>
              <li><span class="indent2 red">&lt;/section&gt;</span></li>
              <li><span class="indent1 red">&lt;/body&gt;</span></li>
              <li><span class="red">&lt;/html&gt;</span></li>
            </ol>
          </div>
          <div id="tabs-2">
            <ol>
              <li><span class="green">#section_wrapper <span class="white">{</span></span></li>
              <li><span class="indent1 blue">color<span class="white">:</span> black<span class="white">;</span></span></li>
              <li><span class="indent1 blue">background<span class="white">:</span> lightgrey<span class="white">;</span></span></li>
              <li><span class="white">}</span></li>
              <li><span class="green">.box <span class="white">{</span></span></li>
              <li><span class="indent1 blue">width<span class="white">:</span> 50%<span class="white">;</span></span></li>
              <li><span class="indent1 blue">float<span class="white">:</span> left<span class="white">;</span></span></li>
              <li><span class="indent1 blue">background<span class="white">:</span> black<span class="white">;</span></span></li>
              <li><span class="indent1 blue">color<span class="white">:</span> white<span class="white">;</span></span></li>
              <li><span class="indent1 blue">margin<span class="white">:</span> 0 2%<span class="white">;</span></span></li>
              <li><span class="white">}</span></li>
            </ol>
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
                  <section id="section_wrapper" class="section_wrapper">
                    <div id="one">Write Content Here</div>
                    <div id="two">More Content Goes Here</div>
                  </section>
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
          <div class="alert alert-success text-center">
            Good Job! You completed adding an class attribute to two div tags.
            <br>
            <a href="attr3.php"> Continue to the Next Task <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
        <div class="metaIncorrect">
          <div class="alert alert-danger text-center">
            Incorrect - Look for syntax errors, and try again, Use the solution if you need.
          </div>
        </div>
        <footer>
          <button class="savesubmit" onclick="checkAttr2()">Submit Code</button>
          <button class="resetcode" onclick="resetAttrCode2()">Reset Code</button>
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


  <script src="../js/attr2.js"></script>
  <script src="../../js/custom.js"></script>


</body>
</html>