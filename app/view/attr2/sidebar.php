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
              <li><a href="../attr1/attr1.php">Attributes - id</a></li>
              <li class="active"><a href="../attr2/attr2.php">Attributes - class</a></li>
              <li><a href="../attr3/attr3.php">Attributes - href</a></li>
              <li><a href="../attr4/attr4.php">Attributes - src</a></li>
              <li><a href="../attr5/attr5.php">Attributes - alt</a></li>
              <li><a href="../attr6/attr6.php">Attributes - title</a></li>
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