<article class="important-content-section">
    <header>
        <h1>
        easing property
        </h1>
    </header>
        <p>
        Defines how the animation will progress during its execution.
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
        The function to be defined for this property, must be one of the <a href="http://www.gizma.com/easing/" target="_blank"> easing functions </a>. There are several websites and projects that present and distribute these mathematical functions.
        </p>
        <p>
        The default value is:
        </p>
        <div class="code-example">
            <pre><code>
            function linearTween( t, b, c, d ) {
                return c * t / d + b;
            };
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.easing  = function easeInOutQuad( t, b, c, d ) {
                t /= d / 2;
                if ( t < 1 ) return c / 2 * t * t + b;
                t--;
                return -c / 2 * ( t * ( t -2 ) - 1 ) + b;
            };
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Browser Support
            </span>
        </h2>
        <p>This property has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
