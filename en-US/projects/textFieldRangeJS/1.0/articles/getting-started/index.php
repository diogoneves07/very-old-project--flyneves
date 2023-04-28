<article class="important-content-section">
<header>
    <h1>
    Getting started
    </h1>
</header>
    <p>
    Learn the basic knowledge about the library, and see a simple example of its use.
    </p>

    <h2 class="subtitles-main">
        <span>
        Installing
        </span>
    </h2>
    <p>
    To start the tutorial the first steps are: download the library, create an HTML file, in this file we will add the textFieldRangeJS library. Let's create a JavaScript file with the name: textFieldHandler.js and add it to our HTML and also insert the necessary elements:
    </p>
    <div class="code-example">
        <pre><code>
        &lt;!DOCTYPE html&gt;
            &lt;html&gt;
                &lt;head&gt;
                    &lt;meta charset="utf-8"&gt;
                    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                    &lt;title&gt;textFieldRangeJS&lt;/title&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    &lt;textarea id="textField" &gt;&lt;/textarea&gt;
                    &lt;script src="textFieldRange.js"&gt;&lt;/script&gt;
                &lt;/body&gt;
            &lt;/html&gt;
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
        What will we do?        </span>
    </h2>
    <p>
    The example chosen for this tutorial will be a very simple example. It will only serve to observe the speed and accuracy of the library.    </p>
    <p>
    We will define the position of the caret in the text field, simulating the movements of the keys.
    </p>
    <h3 class="subtitles-main">
        <span>
        Code
        </span>
    </h3>
    <p>
    The code below must be inserted in the textFieldHandler.js file:
    </p>
    <div class="code-example">
        <pre><code>
        var myElement = document.getElementById( "textField" );
        textFieldRange( myElement ).moveCaret( caretPosition );
        </code></pre>
    </div>
    <h3 class="subtitles-main">
        <span>
        Running  
        </span>
    </h3>
    <p>
    Below is the running example, obviously slightly improved:   </p>
    <form action="" class="textFieldRange-tutorial">
    <textarea id="myTextField" spellcheck="false" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam impedit accusantium repudiandae? Velit consequuntur illo aut, laudantium eligendi nesciunt odio consectetur porro et laborum pariatur nostrum sunt, officiis, natus cum!</textarea>
    <div>
        <button type="button" >37 - ArrowLeft</button>
        <button type="button" >38 - ArrowUp</button>
        <button type="button" >39 - ArrowRight</button>
        <button type="button" >40 - ArrowDown</button>
    </div>
    <div>
        <button type="button" >35 - End</button>
        <button type="button" >36 - Home</button>
    </div>
    <div>
        <button type="button" >33 - PageUp</button>
        <button type="button" >34 - PageDown</button>
    </div>
    </form>
</article>

