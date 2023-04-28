<article class="important-content-section">
    <header>
        <h1>
        addListener() Method
        </h1>
    </header>
    <p>
    Adds listeners to the animation.
    </p>
    <h2 class="subtitles-main">
        <span>
            Detail
        </span>
    </h2>
    <p>
        This method belongs to the animation object.
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
            listener
        </span>
    </h4>
    <p>
    This argument is mandatory. Specifies the listener to be attached to the animation object.
    </p>

    <p class="text-expected-type-of-data">Expected type: <strong>string</strong>.</p>
    <p>
    Below is a list of accepted values for this argument:
    </p>
    <ul class="normal-list">
        <li><mark>start:</mark> Fires when the animation starts.</li>

        <li><mark>end:</mark> Fires when the animation is finished.</li>

        <li><mark>iterations:</mark> Fires when the animation interaction is complete.</li>

        <li><mark>changekeys:</mark> Fires when the animation progress exceeds the value of a frame key.</li>
    </ul>
    <h4 class="subtitle-marked">
        <span>
            callback
        </span>
    </h4>
    <p class="text-expected-type-of-data">Expected type: <strong>function</strong>.</p>
    <p>
        This argument is mandatory. Specifies the function to be called.
    </p>
    <h3 class="subtitles-main">
        <span>
            Return value
        </span>
    </h3>
    <p>
        No value is returned.
    </p>
    <h2 class="subtitles-main">
        <span>
            Syntax
        </span>
    </h2>
    <div class="code-example">
        <pre><code>
            myAnimationObject.addListener( listener, callback );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Browser Support
        </span>
    </h2>
    <p>This method has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
