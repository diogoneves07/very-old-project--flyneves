<article class="important-content-section">
    <header>
        <h1>
             select() method
        </h1>
    </header>
    <p>
    Select a string in the text field.    </p>
   
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
            selectionStart
        </span>
    </h4>
    <p>
        This argument is optional. Specifies the position of the first character to start the selection.
    </p>

    <h4 class="subtitle-marked">
        <span>
            selectionEnd
        </span>
    </h4>
    <p>
        This argument is optional. Specifies the position of the last character at the end of the selection.
    </p>

    <p>
    If the <strong> selectionEnd </strong> argument is not passed, the method will place the cursor in the position passed to the <strong> selectionStart </strong> argument.    </p>

    <p>
    If no arguments are passed, the method will select all text from the text field.
    </p>
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
            textFieldRange( element ).select( selectionStart, selectionEnd );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Browser Support
        </span>
    </h2>
    <p>This method has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
