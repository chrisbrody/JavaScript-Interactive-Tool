<?php include('../../head.php') ?>

  <div id="wrapper">

    <header class="navbar navbar-inverse" role="banner">

      <div class="container-fluid">

        <div class="navbar-header">
          <a href="attr4.php" class="navbar-brand navbar-brand-img">
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
          <h4>HTML - alt Attribute</h4>
          <div class="dropdown navbar-right">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Exercises
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="attr1.php">Attributes - id</a></li>
              <li><a href="attr2.php">Attributes - class</a></li>
              <li><a href="attr3.php">Attributes - href</a></li>
              <li><a href="attr4.php">Attributes - src</a></li>
              <li class="active"><a href="attr5.php">Attributes - alt</a></li>
              <li><a href="attr6.php">Attributes - title</a></li>
            </ul>
          </div>
        </div>

        <!--main body of left sidebar-->
        <div class="bodylabel">
          <h2>HTML Attributes</h2>
          <p>An image is marked up as follows:</p>
          <pre class="prettyprint">&lt;img src="smiley.gif" alt="Smiley face"&gt;</pre>
          <ol id="attrInfo">
            <li>The required alt attribute specifies an alternate text for an image, if the image cannot be displayed.</li>
            <li>The alt attribute provides alternative information for an image if a user for some reason cannot view it (because of slow connection, an error in the src attribute, or if the user uses a screen reader).</li>
            <li><strong>Tip:</strong> To create a tooltip for an image, use the title attribute!</li>
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
              <li>Lets move on to the alt attribute, add a <strong>alt</strong> of <code>palceholder image</code> - (this gives an alternative if your image does nto load) - to our <code>img</code> tag, on 16</li>
            </ol>
          </div>
        </div>

    
        <!--solution-->
        <div class="solution">
          <br>
          <button class="solutionbutton"><h3>Solution</h3></button>
          <br>
          <div class="answer">
            <h4 class="text-center">Add this code on line 16 to complete the exercise</h4>
            <pre class="prettyprint">&lt;img src="placeholder.jpg" alt="placeholder image"&gt;</pre>
          </div>
          <div class="text-center bg-info">
            <a href="http://www.w3schools.com/tags/att_a_href.asp" target="_blank">Find More on HTML href Attribute</a>
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
              <li><span class="indent3 red">&lt;div</span> <span class="yellow">class=</span><span class="pink">"box"</span><span class="red">&gt;</span></li>
              <li><span class="indent4 red">&lt;a</span> <span class="yellow">href=</span><span class="pink">"http://google.com"</span><span class="red">&gt;</span><span class="red">&lt;/a&gt;</span></li>
              <li><span class="indent3 red">&lt;/div&gt;</span></li>
              <li><span class="indent3 red">&lt;div</span> <span class="yellow">class=</span><span class="pink">"box"</span><span class="red">&gt;</span></li>
              <li class="userAnswerAttr"><span class="indent4 userId">&lt;img</span> <span>src="placholder.jpg"</span><span class="userAnswerId" contenteditable="true">&gt;</span></li>
              <li><span class="indent3 red">&lt;/div&gt;</span></li>
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
              <li><span class="green">img <span class="white">{</span></span></li>
              <li><span class="indent1 blue">width<span class="white">:</span> 50px<span class="white">;</span></span></li>
              <li><span class="indent1 blue">height<span class="white">:</span> 50px<span class="white">;</span></span></li>
              <li><span class="white">}</span></li>
            </ol>
          </div>
        </div>

        <!-- Browser View -->
        <?php include('browser.php') ?>

        <!-- Old Browser View -->
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
                  <section id="section_wrapper" class="section_wrapper">
                    <div id="one" class="box">
                      <a href="http://google.com">Google</a>
                    </div>
                    <div id="two" class="box">
                      <img src="placeholder.jpg">
                    </div>
                  </section>
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
            Good Job! You completed adding a second attribute - alt to an image (img) tag.
            <br>
            <a href="attr6.php"> Continue to the Next Task <i class="fa fa-angle-double-right"></i></a>
          </div>
        </div>
        <div class="metaIncorrect">
          <div class="alert alert-danger text-center">
            Incorrect - Look for syntax errors, and try again, Use the solution if you need.
          </div>
        </div>
        <footer>
          <button class="savesubmit" onclick="checkAttr5()">Submit Code</button>
          <button class="resetcode" onclick="resetAttrCode5()">Reset Code</button>
        </footer>
      </div><!--end of right section-->

    </div><!--end of main section-->

  </div> <!-- /#wrapper -->

<?php include('../../footer.php') ?>