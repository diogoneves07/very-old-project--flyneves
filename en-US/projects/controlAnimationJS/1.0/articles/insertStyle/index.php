<article class="important-content-section">
    <header>
        <h1>
        insertStyle property
        </h1>
    </header>
        <p>
        Defines the mode for inserting the style included in the keyframes.
        </p>
        <h2 class="subtitles-main">
            <span>
                Detail
            </span>
        </h2>
        <p>
            This property is read and write.
        </p>
        <p class="text-expected-type-of-data">
        Expected type:<strong> string</strong>.
        </p>
        <p>
        This property belongs to the animation object, not the controlAnimation object.
        </p>
        <h2 class="subtitles-main">
            <span>
                Description
            </span>
        </h2>
        <p>
        Accepted values for this property:
        </p>
        <ul class="normal-list">
            <li><mark>inline:</mark> The style is added to the elements by the HTML style attribute.</li>
            <li><mark>tag:</mark> The style is added to the elements by the HTML style tag, through the CSS class, using the value of the <a href="../className/"> property className </a> as the name of the class.</li>
            <li><mark>auto:</mark> The style via <mark> tag </mark> is added only when there are more than 1 element.</li>
        </ul>
        <p>
        The default value is: <mark>auto</mark>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.insertStyle  = "tag";
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Browser Support
            </span>
        </h2>
        <p>This property has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
