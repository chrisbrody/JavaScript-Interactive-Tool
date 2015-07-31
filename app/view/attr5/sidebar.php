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
              <li><a href="../attr1/attr1.php">Attributes - id</a></li>
              <li><a href="../attr2/attr2.php">Attributes - class</a></li>
              <li><a href="../attr3/attr3.php">Attributes - href</a></li>
              <li><a href="../attr4/attr4.php">Attributes - src</a></li>
              <li class="active"><a href="../attr5/attr5.php">Attributes - alt</a></li>
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