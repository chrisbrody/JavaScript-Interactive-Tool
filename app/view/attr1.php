<?php include('../../head.php') ?>

  <div id="wrapper">

    <header class="navbar navbar-inverse" role="banner">

      <div class="container-fluid">

        <div class="navbar-header">
          <a href="../../index.php" class="navbar-brand navbar-brand-img">
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
          <h4>HTML - id Attribute</h4>
          <div class="dropdown navbar-right">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Exercises
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li class="active"><a href="attr1.php">Attributes - id</a></li>
              <li><a href="attr2.php">Attributes - class</a></li>
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
          <pre class="prettyprint">&lt;section id="id_name"&gt;Content&lt;/section&gt;<br><br>&lt;div class="class_name"&gt;Content&lt;/div&gt;<br><br>&lt;a href="http://google.com"&gt;Google&lt;/a&gt;<br><br>&lt;img src="path/image.jpg" alt="image alt"&gt;<br><br><span title="About Paragraph">&lt;p title="About Paragraph"&gt;Content Here&lt;/p&gt;</span></pre>
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
              <li>Lets start by adding our first id - (these are not repeatable) - to a <code>section</code> tag, on line 11 with an <code>id="section_wrapper"</code>, add a few words of content for now - anything you want</li>
            </ol>
          </div>
        </div>

    
        <!--solution-->
        <div class="solution">
          <br>
          <button class="solutionbutton"><h3>Solution</h3></button>
          <br>
          <div class="answer">
            <h4 class="text-center">Write this code on line 11 to complete the exercise</h4>
            <pre class="prettyprint">&lt;section id="section_wrapper"&gt;Content Here&lt;/section&gt;</pre>
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
              <li class="userAnswerAttr"><span class="indent2 userId">&lt;section</span><span class="userAnswerId" contenteditable="true">&gt;</span><span class="userAnswerConent" contenteditable="true">Write Content Here</span><span>&lt;/section&gt;</span></li>
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
            </ol>
          </div>
        </div>

        <!-- Browser View -->
        <?php include('browser.php') ?>

        <!-- old browser version -->
        <!-- <div class="texteditor">
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
                  <section>Write Content Here</section>
                </div>
              </div>
            </div>
          </div>
          <div class="fullscreen">
            <button>Full-Screen  <i class="fa fa-arrows-alt"></i></button>
          </div>
        </div> -->        

        <div class="clearfix"></div>

        <div class="metaCorrect">
          <div class="alert alert-success text-center">
            Good Job! You completed adding an Id attribute to a section tag.
            <br>
            <a href="attr2.php"> Continue to the Next Task <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
        <div class="metaIncorrect">
          <div class="alert alert-danger text-center">
            Incorrect - Look for syntax errors, and try again, Use the solution if you need.
          </div>
        </div>
        <footer>
          <button class="savesubmit" onclick="checkAttr1()">Submit Code</button>
          <button class="resetcode" onclick="resetAttrCode1()">Reset Code</button>
        </footer>
      </div><!--end of right section-->

    </div><!--end of main section-->

  </div> <!-- /#wrapper -->

<?php include('../../footer.php') ?>