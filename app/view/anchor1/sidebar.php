<div class="mainsection">

      <div class="leftsidebar">

        <!--header of left sidebar-->
        <div class="headlabel">
          <h4>HTML - Anchor Local</h4>
          <div class="dropdown navbar-right">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Exercises
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li class="active"><a href="../anchor1/anchor1.php">Anchor - Local</a></li>
              <li><a href="../anchor2/anchor2.php">Anchor - External</a></li>
              <li><a href="../anchor3/anchor3.php">Anchor - Images</a></li>
              <li><a href="../anchor4/anchor4.php">Anchor - Colors</a></li>
              <li><a href="../anchor5/anchor5.php">Anchor - Target</a></li>
            </ul>
          </div>
        </div>

        <!--main body of left sidebar-->
        <div class="bodylabel">
          <h2>HTML Links - Hyperlinks</h2>
          <p>A hyperlink <code>&lt;a&gt;</code> is some text or an image you can click on, to go to another document.</p>
          <pre class="prettyprint">&lt;a href="www.google.com"&gt;Google&lt;/a&gt;<br><br>&lt;a href="about.html"&gt;About&lt;/a&gt;<br><br>&lt;a target="_blank" href="www.google.com"&gt;Google&lt;/a&gt;<br><br>&lt;a href="path/file.ext"&gt;<br><span style="padding-left:10px;"></span>&lt;img src="path/image.jpg" alt="image alt"&gt;<br>&lt;/a&gt;</pre>
          <ol id="attrInfo">
            <li>The <span>href</span> attribute specifies the destination address (http://www.google.com/).</li>
            <li>The <span>link text</span> is the visible part, the "stuff" between the tags.</li>
            <li>Clicking on the link text, will send the user to the specified address.</li>
            <li>The link text does not have to be text. It can be an HTML image or any other HTML element.</li>
          </ol>
        </div>
        <!-- extra tips and notes -->
        <div class="extraTips">
          <h3>Extra Tips &amp; Notes</h3>
          <ul class="list-unstyled">
            <li>A local link (link to the same web site) is specified with a relative URL <code>(without http://www....)</code>.</li>
            <li>
              When you move the <span>mouse over a link</span>, two things will normally happen:
              <ul>
                <li>The mouse arrow will turn into a little hand</li>
                <li>The color of the link element will change</li>
              </ul>
            </li>
            <li>
              By default, a <span>link will appear</span> like this (in all browsers):
              <ul>
                <li>An unvisited link is underlined and blue</li>
                <li>A visited link is underlined and purple</li>
                <li>An active link is underlined and red</li>
              </ul>
            </li>
            <li>The <span>target</span> attribute specifies where to open the linked document.
              <table class="table table-striped"> 
                <tbody>
                  <tr>
                    <th>Target Value</th>
                    <th>Description</th>
                  </tr>  
                  <tr>
                    <td>_blank</td>
                    <td>Opens the linked document in a new window or tab</td>
                  </tr>
                  <tr>
                    <td>_self</td>
                    <td>Opens the linked document in the same frame as it was clicked (this is default)</td>
                  </tr>
                  <tr>
                    <td>_parent</td>
                    <td>Opens the linked document in the parent frame</td>
                  </tr>
                  <tr>
                    <td>_top</td>
                    <td>Opens the linked document in the full body of the window</td>
                  </tr>
                  <tr>
                    <td><i>framename</i></td>
                    <td>Opens the linked document in a named frame</td>
                  </tr>
                </tbody>
              </table>
            </li>
          </ul>
        </div>
        <!--instructions-->
        <div class="fullwidth">
          <div class="instructions">
            <h3>Instructions</h3>
            <ol>
              <li>The first thing to do is choose a place to make this anchor go somewhere. Make the link go to <code>www.google.com</code>, and add the content in betwwen the tags e.x. "Google"</li>
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
            <pre class="prettyprint">&lt;a href="www.google.com"&gt;Google&lt;/a&gt;</pre>
          </div>
          <div class="text-center bg-info">
            <a href="http://www.w3schools.com/html/html_links.asp" target="_blank">Find More on HTML Linking</a>
          </div>
        </div>
      </div> <!--end of left sidebar-->