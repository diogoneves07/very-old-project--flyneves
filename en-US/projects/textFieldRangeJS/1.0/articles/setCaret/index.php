<article class="important-content-section">
    <header>
        <h1>
             setCaret() method
        </h1>
    </header>
    <p>
    Defines a new position for the caret in the text field.
    </p>
    <h2 class="subtitles-main">
        <span>
            Description
        </span>
    </h2>

    <p>
        This method expect arguments.
    </p>
    <h3 class="subtitles-main">
        <span>
            Arguments
        </span>
    </h3>
    <h4 class="subtitle-marked">
        <span>
            lineOrPosition
        </span>
    </h4>
    <p>
        This argument is mandatory. Specifies the new caret line or position.
    </p>

    <h4 class="subtitle-marked">
        <span>
            positionInLine
        </span>
    </h4>
    <p>
        This argument is optional. The new caret position on the line.
    </p>

    <p>
  
If only one argument is passed to this method, it will be understood that the value refers to the new caret position in the text field.
    </p>
   
    <p>
    If two arguments were passed to this method, it will be understood that the first argument refers to the line on which you want to place the caret, and the second to the position on the line.
    </p>
    <ul class="normal-list">
        <li>
        If the value of the second argument is greater than the number of characters on the line, the caret is positioned at the end of the line.
        </li>
        <li>
        Negative values for the second argument will be understood as the subtraction of the number of characters in the line, by the passed value. That is, if you pass <mark> -1 </mark>, it means that the caret will be positioned one character before the last character of the line.
        </li>
        <li>If you move on to the second argument, the value <mark> -0.1 </mark>, the caret will be positioned at the end of the line.</li>
    </ul>
 

    <h3 class="subtitles-main">
        <span>
            Return value
        </span>
    </h3>
    <p>
        The returned value is the updated textFieldRange object.
    </p>
    <h2 class="subtitles-main">
        <span>
            Syntax
        </span>
    </h2>
    <div class="code-example">
        <pre><code>
            textFieldRange( element ).setCaret( lineOrPosition , positionInLine );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Browser Support
        </span>
    </h2>
    <p>This method has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
