<article class="important-content-section">
    <header>
        <h1>
             styleBetweenFrames property
        </h1>
    </header>
        <p>
        Defines whether the style properties of a keyframe should be added since the previous keyframes.
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
        Expected type:<strong> boolean</strong>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Description
            </span>
        </h2>
        <p>
            Accepted values for this property:
        </p>
        <h3 class="subtitle-marked">
            <span>
                true
            </span>
        </h3>
        <p>
        The property value is inserted since the previous keyframes, even if they do not have it.        </p>
       
        <h3 class="subtitle-marked">
            <span>
            false
            </span>
        </h3>
        <p>
        The value of the property is only changed in keyframes that contain it.
        </p>
        <p>
            The default value is: <mark>true</mark>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.styleBetweenFrames  = false;
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Browser Support
            </span>
        </h2>
        <p>This property has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
