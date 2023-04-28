<article class="important-content-section">
    <header>
        <h1>
            Building keyframes
        </h1>
    </header>
    <p>
    Understand the operation and use rules for the construction of animation keyframes.
    </p>
    <h2 class="subtitles-main">
        <span>
            Detail
        </span>
    </h2>
    <p>
        Keyframes properties are read and write.
    </p>
    <p>
        Keyframes properties belong to the animation object, not the controlAnimation object.
    </p>
    <p class="text-expected-type-of-data">Expected type:<strong> object || boolean || string </strong>.</p>
    <h2 class="subtitles-main">
        <span>
        Description
        </span>
    </h2>
    <p>
    Key frames are the most important moments of an animation. As the name says, they are the “key” of all the frames of an animation, they are responsible for creating the correct time and rhythm of the movement, for example: they present differences in a character's actions, a crucial change in movement or even a great pose.
    </p>
    <h3 class="subtitles-main">
        <span>
        Accepted values
        </span>
    </h3>
    <p>
    Understand the accepted values for each keyframe and how to use them.
    </p>
    <h4 class="subtitle-marked">
        <span>
        styleObject
        </span>
    </h4>
    <p>
    Define an object with CSS properties, with JavaScript nomenclature and the CSS style will be applied to the elements during the animation. See the example below:
    </p>
    <div class="code-example">
        <pre><code>
            myAnimationObject[ 0 ] = { 
                borderWidth: "0px",  
                top: "0px",  
                left: "0px", 
            }
        </code></pre>
    </div>
    <p>
    In the keys following the <mark> 0 </mark> key, you can minimize the property names and their values.
    </p>
    <div class="code-example">
        <pre><code>
            myAnimationObject[ 0 ] = { 
                borderWidth: "0px",  
                top: "0px",  
                left: "0px"
            }
            myAnimationObject[ 100 ] = { 
                0: "10",    <span class="code-comment"> /* borderWidth: 10px */</span>
                1: "10"     <span class="code-comment"> /* top: 10px */</span>,  
                2: "10"     <span class="code-comment"> /* left: 10px */</span>
            }
        </code></pre>
    </div>
    <h4 class="subtitle-marked">
        <span>
            boolean
        </span>
    </h4>
    <p>
    No action is defined, but the animation is performed and the properties of the animation object receive updates.
    </p>
    
    <h4 class="subtitle-marked">
        <span>
            string
        </span>
    </h4>
    <p>
    Define a character string and it will be understood as a CSS style and applied to the elements during the animation.
    </p>
    <p>
    You can also minify the names of the properties, see the example below:
    </p>
    <div class="code-example">
        <pre><code>
            <span class="code-comment">/* When the sequence of properties is not changed. */</span>
            myAnimationObject[ 0 ] = " border-width: 0px; top: 0px; left: 0px ";
            myAnimationObject[ 100 ] = "10; 200; 200;" <span class="code-comment">/* The same as: "border-width: 10px; top: 200px; left: 200px"*/</span>;
            <span class="code-comment">/* ___________________________________________________*/</span>

            <span class="code-comment">/* When the sequence of properties is changed.*/</span>
            myAnimationObject[ 0 ] = " border-width: 0px; top: 0px; left: 0px ";
            myAnimationObject[ 100 ] = "1: 10; 2: 200; 0: 200;" <span class="code-comment">/* The same as: "top: 10px; left: 200px; border-width: 200px"*/</span>;
            <span class="code-comment">/* ___________________________________________________*/</span>
        </code></pre>
    </div>
    <p>
    The way you start the values of a property, you must follow them in all keyframes, example: <mark> border-width: 1px 2px 3px 4px </mark>, the sequence of values related to border, must maintained as they were initiated.
    </p>
    <h2 class="subtitles-main">
        <span>
            Syntax
        </span>
    </h2>
    <div class="code-example">
        <pre><code>
            myAnimationObject[ 0 ] = " top: 0px; left: 50px;...";
        </code></pre>
    </div>
</article>
