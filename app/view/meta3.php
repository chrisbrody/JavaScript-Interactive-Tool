<?php include('../../head.php') ?>

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

          <p><a href="../../index.php">Codify Academy</a></p>

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
        <!-- extra tips and notes -->
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
              <li><span class="indent2 red">&lt;h1&gt;</span><span class="header1" contenteditable="true">Hello World</span><span class="red">&lt;/h1&gt;</span></li>
              <li><span class="indent1 red">&lt;/body&gt;</span></li>
              <li><span class="red">&lt;/html&gt;</span></li>
            </ol>
          </div>
          <div id="tabs-2">
            
          </div>
        </div>
       
        <!-- Browser View -->
        <?php include('browser.php') ?>
       
        <div class="clearfix"></div>
        <div class="metaCorrect">
          <div class="alert alert-success text-center">
            Good Job! You completed adding a description to you HTML document
            <br>
            <a href="meta4.php"> Continue to the Next Task <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
        <div class="metaIncorrect">
          <div class="alert alert-danger text-center">
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

<?php include('../../footer.php') ?>