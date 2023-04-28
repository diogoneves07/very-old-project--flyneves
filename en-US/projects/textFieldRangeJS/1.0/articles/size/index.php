<article class="important-content-section">
    <header>
        <h1>
             size() method
        </h1>
    </header>
    <p>
    Simulates the entry of a string in the text field.
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
        This argument is mandatory. Specifies the string to be used by the method.
    </p>
    <h4 class="subtitle-marked">
        <span>
            noRemove
        </span>
    </h4>
    <p>
        This argument is optional.
    </p>
    <p>
    The method will clone the text field element to obtain the property values, that is, it will insert elements into the document and when they are no longer needed, remove them. Using this method in a repeating structure is very browser-intensive.
    </p>
    <p>This argument can be used to prevent the process from slowing down by passing <mark> true </mark>.</p>
    <h5 class="subtitles-main">
        <span>
            Example
        </span>
    </h5>
    <div class="code-example">
        <pre><code>
        textFieldRange( element ).size( string, true );
        </code></pre>
    </div>
    <p>When it is no longer necessary to preserve the elements inserted by the method, just call it again, passing only <mark> false </mark>.</p>

    <h5 class="subtitles-main">
        <span>
            Example
        </span>
    </h5>
    <div class="code-example">
        <pre><code>
        textFieldRange( element ).size( false );
        </code></pre>
    </div>
    <h3 class="subtitles-main">
        <span>
            Return value
        </span>
    </h3>
    <p>
    The returned value is an object.
    </p>

    <h3 class="subtitles-main">
        <span>
            Object properties:
        </span>
    </h3>
    <h4 class="subtitle-marked">
        <span>
            height
        </span>
    </h4>
    <p>
    Returns the height in px of the string.
    </p>
    <h4 class="subtitle-marked">
        <span>
            width
        </span>
    </h4>
    <p>
    Returns the width in px of the string.    </p>
    <h4 class="subtitle-marked">
        <span>
            charHeight
        </span>
    </h4>
    <p>
    Returns the current height in px of the characters in the string.
    </p>
    <h4 class="subtitle-marked">
        <span>
            lineHeight
        </span>
    </h4>
    <p>
    Returns the height in px of the lines contained in the string.
    </p>
    <h2 class="subtitles-main">
        <span>
            Syntax
        </span>
    </h2>
    <div class="code-example">
        <pre><code>
        textFieldRange( element ).size( "string" );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Browser Support
        </span>
    </h2>
    <p>This method has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
