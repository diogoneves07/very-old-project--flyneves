<article class="important-content-section">
<header>
    <h1>
    Getting started
    </h1>
</header>
    <p>
    See a simple example of using controlAnimation.
    </p>

    <h2 class="subtitles-main">
        <span>
        Installing
        </span>
    </h2>
    <p>
    To start the tutorial the first steps are: download the library, then create an HTML file, in this file we will add the link to controlAnimationJS, we will also create a JavaScript file with the name: myAnimation.js, and we will add the link, it will be where we will do the manipulations . We will insert the necessary elements and some CSS. See the example below:
    </p>
    <div class="code-example">
        <pre><code>
            &lt;!DOCTYPE html&gt;
                &lt;html&gt;
                    &lt;head&gt;
                        &lt;meta charset="utf-8"&gt;
                        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                        &lt;title&gt;controlAnimationJS&lt;/title&gt;
                        &lt;style&gt;
                            #controlAnimation-rectangle{
                                float: left;
                                width: 90%;
                                margin: 0 5%;
                                padding: 40px 0;
                                overflow: hidden;
                                height: 200px;
                            }
                            #controlAnimation-rectangle div{
                                float: left;
                                width: 700px;
                                height: 100px;
                            }
                            #controlAnimation-bars span{
                                display: inline-block;
                                width: 30px;
                                height: 10px;
                                position: relative;
                                margin: 40px;
                                z-index: 9;
                            }
                        &lt;/style&gt;
                    &lt;/head&gt;
                    &lt;body&gt;
                        &lt;div id="controlAnimation-rectangle"&gt;
                            &lt;div&gt;
                                &lt;div id="controlAnimation-bars"&gt;
                                    &lt;span&gt;&lt;/span&gt;
                                    &lt;span&gt;&lt;/span&gt;
                                    &lt;span&gt;&lt;/span&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;script src="controlAnimation.js"&gt;&lt;/script&gt;
                        &lt;script src="myAnimation.js"&gt;&lt;/script&gt;
                    &lt;/body&gt;
                &lt;/html&gt;
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
        What will we do?
        </span>
    </h2>
    <p>
    The example chosen for this tutorial, will be the very simple example. It will only serve to observe how easy it is to work with controlAnimation.
    </p>
    <p>
    We will use stylized elements in the shape of bars and make them move at random.
    </p>
    <h3 class="subtitles-main">
        <span>
        Code
        </span>
    </h3>
    <p>
    The code below must be inserted in the myAnimation.js file.
    </p>
    <div class="code-example">
        <pre><code>
        var elementsBars = document.getElementById( "controlAnimation-bars" ).getElementsByTagName( "span" );
        var myAnimation = controlAnimation.create();
        myAnimation.direction = "fluid-random-offset";
        myAnimation.iterations = Infinity;

        myAnimation[ 0 ] = "height:100px; top: 0px; left: 0px; background-color: rgb( 255, 0, 0 ); border-radius:0px; transform: rotate( 0deg );";
        myAnimation[ 100 ] = "300; 50; 100; rgb( 0, 0, 255 ); 20; rotate( 360deg );";

        controlAnimation.play( myAnimation.clone( elementBars ) );
        </code></pre>
    </div>
    <h3 class="subtitles-main">
        <span>
        Running  
        </span>
    </h3>
    <p>
    If you are not seeing the animation correctly: if possible try to use the device horizontally.
    </p>
    <div id="controlAnimation-rectangle">
        <div>
            <div id="controlAnimation-bars">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </div>
    </div>
</article>

