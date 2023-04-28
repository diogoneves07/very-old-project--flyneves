<article class="important-content-section">
    <header>
        <h1>
            keepFrameStyle property
        </h1>
    </header>
        <p>
        Defines whether to maintain the style of each keyframe.
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
        
        <h4 class="subtitle-marked">
            <span>
            true
            </span>
        </h4>
        <p>
        O valor de estilo contido em cada keyframe é mantido.
        </p>
        <h4 class="subtitle-marked">
            <span>
                false
            </span>
        </h4>
        <p>
        Imagine that in the construction of your animation the following keyframes were passed: in order to insert the style contained in each one.
        </p>
        <div class="code-example">
            <pre><code>
            myAnimationObject[ 0 ] = " top: 0px; <b>left:0</b>";
            myAnimationObject[ 33 ] = " 0; <b>200</b>";
            myAnimationObject[ 66 ] = " 0;";
            myAnimationObject[ 100 ] = " 200; <b>200</b>";
            </code></pre>
        </div>
        <p>
        Note that in the <mark> 33 </mark> keyframe, the left CSS style property will reach 200, but in the next keyframe there is no reference to it. In the current case, in the next keyframe, the property on the left would be added with the same value as the initial key.
        </p>
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
            myAnimationObject.keepFrameStyle  = true;
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Browser Support
            </span>
        </h2>
        <p>This property has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
