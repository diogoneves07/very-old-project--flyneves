<article class="important-content-section">
    <header>
        <h1>
        fill property
        </h1>
    </header>
        <p>
        Defines which values are applied by the animation, when the end of its cycles arrives.
        </p>
        <h2 class="subtitles-main">
            <span>
                Detail
            </span>
        </h2>
        <p>
            This property is read and write.
        </p>
        <p>
        This property belongs to the animation object, not the controlAnimation object.
        </p>
        <p class="text-expected-type-of-data">
        Expected type:<strong> boolean || number</strong>.
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
            <li><mark>true:</mark> The last values are kept.</li>
            <li><mark>false:</mark> No value is maintained.</li>
            <li><mark>number:</mark> The animation runs again until it reaches the set value.</li>
        </ul>
        <p>
            The default value is: <mark>false</mark>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.fill  = true;
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Browser Support
            </span>
        </h2>
        <p>This property has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
