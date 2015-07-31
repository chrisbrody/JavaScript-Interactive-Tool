<div class="mainsection">

      <div class="leftsidebar">

        <!--header of left sidebar-->
        <div class="headlabel">
          <h4>HTML - src Attribute</h4>
          <div class="dropdown navbar-right">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Exercises
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="../attr1/attr1.php">Attributes - id</a></li>
              <li><a href="../attr2/attr2.php">Attributes - class</a></li>
              <li><a href="../attr3/attr3.php">Attributes - href</a></li>
              <li class="active"><a href="../attr4/attr4.php">Attributes - src</a></li>
              <li><a href="../attr5/attr5.php">Attributes - alt</a></li>
              <li><a href="../attr6/attr6.php">Attributes - title</a></li>
            </ul>
          </div>
        </div>

        <!--main body of left sidebar-->
        <div class="bodylabel">
          <h2>HTML Attributes</h2>
          <p>An image is marked up as follows:</p>
          <pre class="prettyprint">&lt;img src="smiley.gif" alt="Smiley face"&gt;</pre>
          <ol id="attrInfo">
            <li>The required <code>src</code> attribute specifies the URL of the image.</li>
            <li>An absolute URL - points to another web site (like <code>src="http://www.example.com/image.gif"</code>)</li>
            <li>A relative URL - points to a file within a web site (like <code>src="image.gif"</code>)</li>
            <li><strong>Note:</strong> When a web page loads; it is the browser, at that moment, that gets the image from a web server and inserts it into the page. Therefore, make sure that the image actually stay in the same spot in relation to the web page, otherwise your visitors will get a broken link icon. The broken link icon is shown if the browser cannot find the image.</li>
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
              <li>Lets move on to the src attribute, add a <strong>src</strong> of <code>palceholder.jpg</code> - (this pulls an image from our server) - to our <code>img</code> tag, on 16</li>
            </ol>
          </div>
        </div>

    
        <!--solution-->
        <div class="solution">
          <br>
          <button class="solutionbutton"><h3>Solution</h3></button>
          <br>
          <div class="answer">
            <h4 class="text-center">Write this code on line 16 to complete the exercise</h4>
            <pre class="prettyprint">&lt;img src="placeholder.jpg"&gt;</pre>
          </div>
          <div class="text-center bg-info">
            <a href="http://www.w3schools.com/tags/att_a_href.asp" target="_blank">Find More on HTML href Attribute</a>
          </div>
        </div>
      </div> <!--end of left sidebar-->
