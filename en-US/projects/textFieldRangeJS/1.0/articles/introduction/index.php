<article class="important-content-section">
    <header>
        <h1>
        Introduction
        </h1>
    </header>
    <p>
    Unifies the properties and methods of text range objects: (<a href = "https://developer.mozilla.org/pt-BR/docs/Web/API/Sele%C3%A7%C3%A3o" target = "_blank"> Selection </a> and <a href = "https://docs.microsoft.com/en-us/previous-versions/windows/internet-explorer/ie-developer/platform-apis/aa741670(v%3Dvs.85)" target = "_ blank "> createTextRange() </a>), implementing fantastic features and making it extremely simple to use.
    </p>
    <h2 class="subtitles-main">
        <span>
        A brief look
        </span>
    </h2>
    <p>
    Two of its incredible features are briefly described below:
    </p>
    <h3 class="subtitles-main">
        <span>
        Moving the caret
        </span>
    </h3>
    <p>
    Move the caret in the text field the same way as when the user presses the arrow keys.
    </p>
    <p>This task is extremely simple, obtaining the element's textFieldRange object, and using the <a href="documentation/moveCaret/"> method moveCaret() </a>, with a command line it would be solved, see the code below.</p>

    <p></p>
    <div class="code-example">
        <pre><code>
            textFieldRange( element ).moveCaret( keyCode );
        </code></pre>
    </div>
    <p>
    Perhaps you were a little confused by the code, as there was no explanation, don't worry, it's just a tasting, read more about the object returned from textFieldRange and the <a href="documentation/moveCaret/"> moveCaret method </a> in the library documentation.
    </p>

    <p></p>
    <h3 class="subtitles-main">
        <span>
        Get the caret position
        </span>
    </h3>
    <p>
    When obtaining the element's textFieldRange object, you will see some properties about the current caret position in the text field. In the code below we would be using the <a href="documentation/top/"> top property </a>.
    </p>
    <div class="code-example">
        <pre><code>
            var caretPosition = textFieldRange( element ).top;
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
        Read more
        </span>
    </h2>
    <p>
    Read the <a href="documentation/"> library documentation </a>, it is simple and easy to learn.

</p>
</article>

