<article class="important-content-section">
    <header>
        <h1>
        Infrastructure
        </h1>
    </header>
    
    <p>
    Understand a little about what happens internally in textFieldRangeJS.
    </p>
  
    <h2 class="subtitles-main">
        <span>
        Inspiration 
        </span>
    </h2>
    <p>
    The inspiration for the development of this library came during the process of developing another project, in which we will not go into details. It was necessary to control the user's actions in the text field, in addition to facilitating its usability.
    </p>
    <h2 class="subtitles-main">
        <span>
        Structure 
        </span>
    </h2>
    <p>
    When starting and during the process of developing the source code, the modeling was based on the Design Pattern: <a href="https://en.wikipedia.org/wiki/Fa%C3%A7ade" target="_blank"> Facade </a>. We will not go into details about these standards, but we will talk about their application in our source code.
    </p>
        <h3 class="subtitles-main">
        <span>
            Facade
        </span>
    </h3>
    <p>
    The motivation for its use was to structure a system in subsystems to help reduce its complexity. We will not be identifying the elements, but it is very clear that the Facade class is the <mark> textFieldRange </mark> function, as it knows which subsystem classes are responsible for the call and correctly delegates the customer calls to the subsystem objects.
    </p>
    <p>
    The implementation of the design pattern mentioned above, guided the source code of our library, enabling low coupling, in which each function, object or class has its responsibilities and that do not exceed its limits. This makes the code more readable, allowing the developer to understand it and, if necessary, make changes that will contribute to its use.
    </p>
    <h2 class="subtitles-main">
        <span>
        Operation
        </span>
    </h2>
    <p>
    The textFieldRangeJS library was developed to obtain data from text fields and perform actions on them, from obtaining the cursor position to simulating the user's movements when pressing a key.
    </p>
    <p>
    When calling the textFieldRange function, passing the text input element as an argument, an object will be returned containing several methods and properties for obtaining data, manipulation and actions in the text field.
    </p>
    <p>
    To avoid the need to always call the main method: <mark> textFieldRange (element) </mark>, just add the object to a variable, this way you can use it whenever necessary throughout the code:
    </p>
    <div class="code-example">
        <pre><code>
        var myElement = document.getElementById( "textarea" );
        var myElementRange = textFieldRange( element );
        </code></pre>
    </div>
    <h2 class="subtitles-main">
        <span>
        Closure
        </span>
    </h2>
    <p>
    textFieldRangeJS is simple and straightforward to solve the problems encountered when dealing with HTML text input elements, with precision, good performance and useful features.
    </p>
</article>

