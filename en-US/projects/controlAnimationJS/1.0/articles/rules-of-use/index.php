<article class="important-content-section">
    <header>
        <h1>
            Usage rules
        </h1>
    </header>
    <p>
        Know and understand the rules for using the controlAnimationJS library.
    </p>
    <p>
        The list below describes some precautions to take when using controlAnimation.
    </p>
    <p>
        – When creating an animation using the style in the keyframes, you should always set the initial values of all the properties you will use in the <mark> 0 </mark> key.
    </p>
    <p>
        – When creating an animation using style in the keyframes, be aware that there is no conversion of the property values, that is, the initial unit of measure is always maintained.
    </p>
    <p>
        – When creating an animation using style in the keyframes, with the intention of using CSS properties that receive values related to colors, it is only allowed to use colors in RGB, RGBA and HEXADECIMAL.</p>
    <p>
        – When creating an animation using the style in the keyframes, remember that the library does not transition from non-numeric to numeric values, that is, if a given CSS property in key <mark>0</mark> has the value: center, and the next key: 200px. Nothing will happen, because the library does not make this transition.</p>
    <p>
        – When creating an animation using style in the keyframes, and if you want a property to accept floating values, it is necessary to insert a in the <mark>0</mark> key.See the example below:
    </p>
    <div class="code-example">
        <pre><code>
            myAnimationObject[ 0 ] = " top: 0<b>.</b>px";
        </code></pre>
    </div>
    <p>
    Obviously if the property is already going to receive a floating value in the <mark>0</mark> key, there is no need to insert the <mark>. </mark>.
    </p>
</article>

