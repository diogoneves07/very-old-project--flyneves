
<article class="important-content-section">
    <header>
        <h1>
             findString() method
        </h1>
    </header>
    <p>
    Find occurrences of a given string in the text field.
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
            string
        </span>
    </h4>
    <p>
        This argument is mandatory. Specifies the character string to be used by the method.
    </p>
    <h3 class="subtitles-main">
        <span>
            Return value
        </span>
    </h3>

    <p>
    The returned value is an array with objects with properties for the search result.
    </p>
    <h3 class="subtitles-main">
        <span>
            Object properties:
        </span>
    </h3>

    <h4 class="subtitle-marked">
        <span>
            start
        </span>
    </h4>
    <p>
    The beginning of the string in the text field.
    </p>
    <h4 class="subtitle-marked">
        <span>
            end
        </span>
    </h4>
    <p>
    The end of the string in the text field.
    </p>
    <h4 class="subtitle-marked">
        <span>
            string
        </span>
    </h4>
    <p>
    The string.
    </p>
    <h2 class="subtitles-main">
        <span>
            Syntax
        </span>
    </h2>
    <div class="code-example">
        <pre><code>
        var findString = textFieldRange( element ).findString( "myString" );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Browser Support
        </span>
    </h2>
    <p>This method has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
