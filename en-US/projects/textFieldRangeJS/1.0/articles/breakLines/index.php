<article class="important-content-section">
    <header>
        <h1>
            breakLines() method
        </h1>
    </header>
    <p>
    Gets lines in the text field with line break characters inserted at specific points.
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
            apply
        </span>
    </h4>
    <p>
    This argument is optional. If passed as <mark> true </mark>, this argument indicates that: the method should insert the line break characters in the text field, only at the specific and necessary points at which the break occurs.
    </p>

    <p>
    The “line break characters” are: "\r\n" or "\n" according to the browser.
    </p>
    <h3 class="subtitles-main">
        <span>
        Return value
        </span>
    </h3>
    <p>
    The returned value is an array.
    </p>

    <h2 class="subtitles-main">
        <span>
            Syntax
        </span>
    </h2>
    <div class="code-example">
        <pre><code>
        var breakLines = textFieldRange( element ).breakLines();
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Browser Support
        </span>
    </h2>
    <p>This method has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
