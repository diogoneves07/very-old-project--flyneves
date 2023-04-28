<article class="important-content-section">
    <header>
        <h1>
             timeline property
        </h1>
    </header>
        <p>
        The animation schedule.
        </p>
        <h2 class="subtitles-main">
            <span>
                Detail
            </span>
        </h2>
        <p>
        This is a read-only property, that is, its value must not be changed.
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
        The contained value is an object.
        </p>
        <h3 class="subtitles-main">
        <span>
        Object properties        </span>
        </h3>
        <p>
        The properties below contain a list of keys that tells how the animation's attenuation will occur. If you pass style to the keys of the keyframes, the keys of the list will have as value the style that will be applied when the tempo of the animation is the same as the key.
        </p>
        <h4 class="subtitle-marked">
            <span>
                normal
            </span>
        </h4>
        <p>
        The animation schedule for when the reading of the keyframes happens in an increasing way: initial key for the final key.
        </p>
        <h4 class="subtitle-marked">
            <span>
                reverse
            </span>
        </h4>
        <p>
        The animation schedule for when the reading of the keyframes happens in a decreasing way: final key for the initial key.        </p>
        <h2 class="subtitles-main">
            <span>
                Direções 
            </span>
        </h2>
        <p>
        The animation schedule is defined according to its direction:
        </p>
        <ul class="normal-list">
            <li><mark>normal:</mark> The chosen schedule is: <strong>normal</strong>.</li>

            <li><mark>reverse:</mark> The chosen schedule is: <strong>reverse</strong>.</li>

            <li><mark>alternate:</mark> Switch between schedules</li>

            <li><mark>alternate-reverse:</mark> Switch between schedules</li>

            <li><mark>random-keys:</mark> The chosen schedule will always be: <mark>strong</strong></li>

            <li><mark>random-offset:</mark> The chosen schedule will always be: <strong>normal</strong></li>

            <li><mark>fluid-random-keys:</mark> The chosen schedule will always be: <strong>normal</strong></li>

            <li><mark>fluid-random-offset:</mark> The chosen schedule will always be: <strong>normal</strong></li>
        </ul>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
                var animationTimeline =  myAnimationObject.timeline;
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Browser Support
            </span>
        </h2>
        <p>This property has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
