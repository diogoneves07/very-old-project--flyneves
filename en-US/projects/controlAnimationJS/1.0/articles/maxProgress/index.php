<article class="important-content-section">
    <header>
        <h1>
            maxProgress property
        </h1>
    </header>
        <p>
        Sets the maximum progress that the interaction of animation can achieve.
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
        Expected type:<strong> number || object</strong>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Description
            </span>
        </h2>
        <p>
        You can also define the property value as an array:
        </p>
        <div class="code-example">
            <pre><code>
            myAnimationObject.maxProgress = [ 40, 70 , 90];
            </code></pre>
        </div>
        <p>
        In the example above in the first interaction the progress of the animation would go up to <mark> 40 </mark>, and the second up to <mark> 70 </mark> and so on.
        </p>
        <p>
        When the value of the interaction sequence is greater than the number of values in the matrix, you can start over:
            </p>
        <div class="code-example">
            <pre><code>
            myAnimationObject.maxProgress = [ 40, 70 , "restart"];
            </code></pre>
        </div>
        <p>
        Setting the string: <mark> "restart" </mark> as the last value of the array will cause the count of the array values to begin again.
        </p>
        <p>
        If there is no value in the matrix at the position indicated by the number of completed interactions, <mark> maxProgress </mark> will return to its normal behavior according to the <a href="../direction/"> direction property </a>.
        </p>
        <h2 class="subtitles-main">
            <span>
                Syntax
            </span>
        </h2>
        <div class="code-example">
            <pre><code>
            myAnimationObject.maxProgress = 100;
            </code></pre>
        </div>
        <h2 class="subtitles-main">
            <span>
                Browser Support
            </span>
        </h2>
        <p>This property has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
