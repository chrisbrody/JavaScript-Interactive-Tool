<div class="mainsection">

      <div class="leftsidebar">

        <!--header of left sidebar-->
        <div class="headlabel">
          <h4>HTML Meta Tag Keywords</h4>
          <div class="dropdown navbar-right">
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              Exercises
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
              <li><a href="../meta1/meta1.php">Meta Tags - Charset</a></li>
              <li><a href="../meta2/meta2.php">Meta Tags - Author</a></li>
              <li><a href="../meta3/meta3.php">Meta Tags - Description</a></li>
              <li class="active"><a href="../meta4/meta4.php">Meta Tags - Keywords</a></li>
            </ul>
          </div>
        </div>

        <!--Main body of left sidebar-->
        <div class="bodylabel">
          <h2>HTML Meta Tags</h2>
          <p>The HTML <code>&lt;meta&gt;</code> Tag, describes metadata within an HTML document: this is usually for use by the browser and search engines.</p>
          <pre class="prettyprint">&lt;meta name="keywords" content="Learn HTML, Learn CSS, Interactive Coding Tool"&gt;</pre>
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
              <li>Lets add final <code>meta</code> tag on line 7, again with the same 2 attributes <code>name</code> and <code>content</code> set name equal to <code>keywords</code> and add <code>descriptive keywords</code> into the content attribute</li>
            </ol>
          </div>
        </div>

    
        <!--solution-->
        <div class="solution">
          <br>
          <button class="solutionbutton"><h3>Solution</h3></button>
          <br>
          <div class="answer">
            <h4 class="text-center">Write this code on line 7 to complete the exercise</h4>
            <pre class="prettyprint">&lt;meta name="keywords" content="Learn HTML, Learn CSS, Interactive Coding Tool"&gt;</pre>
          </div>
          <div class="text-center bg-info">
            <a href="http://www.w3schools.com/tags/tag_meta.asp" target="_blank">Find More on Meta Tags</a>
          </div>
        </div>
      </div> <!--end of left sidebar-->
