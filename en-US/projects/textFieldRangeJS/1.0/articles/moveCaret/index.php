<article class="important-content-section">
    <header>
        <h1>
            moveCaret() method
        </h1>
    </header>
    <p>
    Move the caret in the text field.
    </p>
    <h2 class="subtitles-main">
        <span>
            Description
        </span>
    </h2>
    <p>
        This method expect arguments.
    </p>
    <h3 class="subtitles-main">
        <span>
            Arguments
        </span>
    </h3>
    <div>
        <h4 class="subtitle-marked">
            <span>
                keyCode
            </span>
        </h4>
        <p>
            This argument is mandatory.
        </p>
        <h5 class="subtitles-main">
            <span>
            Allowed values
            </span>
        </h5>
        <ul class="normal-list">
            <li><mark>33:</mark> Position the caret on a line one page above the line that is currently positioned.</li>
            <li><mark>34:</mark> Position the caret on a line one page below the line that is currently positioned.</li>
            <li><mark>35:</mark> Position the caret on the last character of the line that is currently positioned.</li>
            <li><mark>36:</mark> Position the caret on the first character of the line currently positioned.</li>


            <li><mark>37:</mark> Position the caret before the first character to the left of your current position.</li>


            <li><mark>38:</mark> Position the caret one line above your current position.</li>


            <li><mark>39:</mark> Position the caret after the first character to the right of your current position.</li>
            
            <li><mark>40:</mark> Position the caret one line below your current position.</li>
        </ul>
        <p>
        In cases where there are no more lines for the caret to move, if you pass the keyCode that your action refers to when moving between the lines:
        </p>
        <ul class="normal-list">
            <li>There are no more lines up, but the keyCode passed was: <mark> 33 </mark> or <mark> 38 </mark>, the caret will be positioned at the first character of the line, which is currently positioned.</li>
            <li>There are no more lines down, but the keyCode passed was: <mark> 34 </mark> or <mark> 40 </mark>, the caret will be positioned at the last character of the line, which is currently positioned.</li>
        </ul>
    </div>
    <h3 class="subtitles-main">
        <span>
            Return value
        </span>
    </h3>
    <p>
        The returned value is the updated textFieldRange object.
    </p>

    <h2 class="subtitles-main">
        <span>
            Syntax
        </span>
    </h2>
    <div class="code-example">
        <pre><code>
            textFieldRange( element ).moveCaret( keyCode );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
            Browser Support
        </span>
    </h2>
    <p>This method has the same compatibility table as the library, that is, just look at the library support table.</p>
</article>
