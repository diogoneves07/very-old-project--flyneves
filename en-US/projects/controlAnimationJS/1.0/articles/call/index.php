<article class="important-content-section">
    <header>
        <h1>
            call property
        </h1>
    </header>
        <p>
        Defines a function to be called at each interleaving.
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
        Expected type:<strong> function</strong>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Description
            </span>
        </h2>
        <p>
            As the defined function will be called at each animation interleaving, avoid defining functions that require a lot of the browser.
        </p>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.call = myFunction;
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Browser Support
            </span>
        </h2>
        <p>This property has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
