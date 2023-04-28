<article class="important-content-section">
    <header>
        <h1>
        direction property
        </h1>
    </header>
        <p>
        Defines the reading order of the keyframes, in an animation cycle.
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
        Expected type:<strong> string</strong>.
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
            <li><mark>normal:</mark> The reading of the keyframes happens in an increasing way: initial key to final key.</li>

            <li><mark>reverse:</mark> The reading of keyframes happens in a decreasing way: final key for the initial key.</li>

            <li><mark>alternate:</mark> The reading of the keyframes happens alternately between <mark> normal </mark> and <mark> reverse </mark>, in each cycle a different way of reading is used, starting from: <mark>normal</mark>.</li>

            <li><mark>alternate-reverse:</mark> The reading of the keyframes happens alternately between <mark> normal </mark> and <mark> reverse </mark>, in each cycle a different way of reading is used, starting from: <mark>reverse</mark>.</li>

            <li><mark>random-keys:</mark> At each cycle, a key from the keyframes is chosen at random as the maximum value that the animation should progress, and the animation will always start from the <mark> 0 </mark> key.</li>

            <li><mark>random-offset:</mark>In each cycle, an offset value between the keys of the keyframes is chosen randomly as the maximum value that the animation should progress, and the animation will always start at the <mark> 0 </mark> key.</li>

            <li><mark>fluid-random-keys:</mark> In each cycle, a key from the keyframes is chosen randomly as the maximum value that the animation must progress, and the animation will always start from the progression value reached by the previous cycle.</li>

            <li><mark>fluid-random-offset:</mark> In each cycle, an offset value between the keys of the keyframes is chosen randomly as the maximum value that the animation must progress, and the animation will always start from the progression value reached by the previous cycle.</li>
        </ul>
        <p>
        The default value is: <mark>normal</mark>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.direction  = "random-keys";
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Browser Support
            </span>
        </h2>
        <p>This property has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
