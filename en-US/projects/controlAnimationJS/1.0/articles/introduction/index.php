<article class="important-content-section">
<header>
    <h1>
    Introduction
    </h1>
</header>
    <p>
    Developed for creative developers who do not give up high performance, offering total control over their animations.
    </p>
    <h2 class="subtitles-main">
        <span>
        “Original copy”
        </span>
    </h2>
    <p>
    Inspired by the CSS model for creating animations with <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/@keyframes" target="_blank" >@keyframes</a>, the line of learning to use this library shortens considerably. Even if you don't read the documentation, you will hardly be lost when using it, with similar features, properties and methods and with the same structure as @keyframes, the coding will always be elegant and familiar.
    </p>
    <p>
    The main positive point of this library is the countless possibilities for creating animations, simplicity, elegance, and its ability to work with different and old browsers, offering excellent quality among them.
    </p>
    <h2 class="subtitles-main">
        <span>
        controlAnimationJS vs CSS Animations
        </span>
    </h2>
    <p>
    <a href="https://www.w3schools.com/css/css3_animations.asp" target="_blank" >CSS Animations</a> added incredible features, however, it does not offer complete control, reaction to user actions, obtaining data about the current state of the animation and if you want to support an old browser, it will not be available. The controlAnimationJS library meets these needs, bringing similar functionality and adding new ones, the coding is simpler and more complete, because with less code you will do the same, but will support all browsers.
    </p>
    <h3 class="subtitles-main">
        <span>
        Comparing coding
        </span>
    </h3>
    <p>
    The examples below are for comparison, in them we would be creating the same animation with controlAnimationJS and CSS Animations, visually you will see the difference in the necessary coding.
    </p>
    <h4 class="subtitles-main">
        <span>
        controlAnimationJS code
        </span>
    </h4>
    <div class="code-example">
        <pre><code>
        var myAnimation = {};
        myAnimation.element = myElements;
        myAnimation[ 0 ] = "transform: rotate( 0deg )";
        myAnimation[ 100 ] = "rotate( 360deg )";
        myAnimation.iterations = Infinity;
        myAnimation.duration = 2;
        controlAnimation.play( myAnimation );
        </code></pre>
    </div>
    <h4 class="subtitles-main">
        <span>
        CSS Animations code
        </span>
    </h4>
    <div class="code-example">
        <pre><code>
        @keyframes myAnimation {
                0% {
                    transform: rotate( 0deg )
                }
                100% {
                    transform: rotate( 360deg )
                }
        }
        @-webkit-keyframes myAnimation {
                0% {
                    transform: rotate( 0deg )
                }
                100% {
                    transform: rotate( 360deg )
                }
        }
        @-moz-keyframes myAnimation {
                0% {
                    transform: rotate( 0deg )
                }
                100% {
                    transform: rotate( 360deg )
                }
        }
        .myAnimation-element {
                -webkit-animation:  myAnimation 2s infinite;
                -moz-animation:  myAnimation 2s infinite;
                animation:  myAnimation 2s infinite;
        }
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
        closure
        </span>
    </h2>
    <p>
    Extremely light, powerful, with many features and functionality, controlAnimationJS is the library that many developers were looking for.
    </p>
    <h2 class="subtitles-main">
        <span>
        Read more
        </span>
    </h2>
    <p>
    Read the <a href="documentation/">library's documentation</a>, it's simple and easy to learn.
    </p>
</article>