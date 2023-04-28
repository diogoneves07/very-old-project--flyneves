<article class="important-content-section">
    <header>
        <h1>
        Infrastructure 
        </h1>
    </header>
    <p>
    Understand a little about what happens internally in controlAnimation.
    </p>
    <h2 class="subtitles-main">
        <span>
        Inspiration  
        </span>
    </h2>
    <p>
    Currently there are several JavaScript libraries, (incredible and powerful), intended for the construction of animations. However, I believe that at some point you also asked yourself the following questions: “Is it worth using such a heavy library in my application?” Or “Am I becoming a lazy, non-creative developer using ready-made animation logic?”. With the arrival of <a href="https://www.w3schools.com/css/css3_animations.asp" target="_blank"> CSS3 Animations </a>, these and other problems have become obsolete, but don't give the developer some features and functionality that only JavaScript can offer. And when considering compatibility with older browsers, as it is recent, CSS3 Animations will not be available for some of them. controlAnimationJS delivers similar features and functionality to the developer and adds new ones, being high performance and incredibly light: 13.8KB.
    </p>
    <h2 class="subtitles-main">
        <span>
            Structure 
        </span>
    </h2>
    <p>
    When starting and during the source code development process, the modeling was based on the Design Pattern: <a href = "https://en.wikipedia.org/wiki/Factory_Method" target = "_blank"> Factory Method </a> e <a href="https://en.wikipedia.org/wiki/Fa%C3%A7ade" target="_blank"> Facade </a>. We will not go into details about these standards, but we will talk about their application in our source code.
    </p>
    <h3 class="subtitles-main">
        <span>
            Factory Method
        </span>
    </h3>
    <p>
    The list below identifies the elements in our library according to the Factory Method structure.
         <blockquote class = "important-note">
             "The structure as described in the book <a href="https://en.wikipedia.org/wiki/Design_Patterns" target="_blank"> Design
             Patterns: Elements of Reusable Object-Oriented Software </a>. "
         </blockquote>
    </p>
    <ul class="normal-list">
        <li><mark>Creator:</mark> The <strong>controlAnimation.create()</strong> method, its action is: Create a new animation object with properties and methods that the developer will need, but its use is optional.</li>

        <li><mark>ConcreteCreator:</mark>The <strong>controlAnimation.play(myAnimationObject)</strong> method receives the animation object created by the developer, and from it creates a variation that will be used internally by the library as an object of control and reaction.</li>

        <li><mark>Product:</mark>Is the object that the developer will use to build his animation.</li>

        <li><mark>ConcreteProduct:</mark> A variation on the developer animation object used internally by the library, it will not only have the properties of the developer object, but also properties that were considered unnecessary for the developer.</li>
    </ul>
    <p>
    In our code, the Design Pattern Factory Method encouraged low coupling, greater flexibility and eliminated the need to couple specific classes for application at the code level. However, its implementation may not have been exactly as the theory suggests, but I believe that the result was pleasant.
    </p>
    <h3 class="subtitles-main">
        <span>
            Facade
        </span>
    </h3>
    <p>
    Although it did not go deeply into its theory, the motivation for its use was to structure a system in subsystems to help reduce its complexity. We will not identify the elements as we did with the previous Design Pattern, but it is very clear that the Facade class (Grouper) is the <mark>controlAnimation</mark> object, as it knows which classes of the subsystems are responsible for the call and delegates customer calls to the correct subsystem objects.
    </p>
    <p>
    The implementation of the design standards mentioned above, guided the source code of our library, enabling low coupling, in which each function, object or class has its responsibilities and that do not exceed its limits. This makes the code more readable, allowing the developer to understand it and, if necessary, make changes that will contribute to its use.</p>
    <h2 class="subtitles-main">
        <span>
        Operation
        </span>
    </h2>
    <p>
        We will understand what happens internally from the initialization process to the end of the animation. See the flow chart below:
    </p>
    <figure class="img-flowchart">
        <figcaption>controlAnimationJS Flowchart</figcaption>
        <img src="../../controlAnimationJS-flowchart.png" alt="controlAnimationJS Flowchart"/>
    </figure>
    <p>
        When you look at the flowchart carefully, you will notice that there is a red arrow pointing to a rectangle with the following message: “The object is ignored”, prevent this from happening, as the animation will not continue in the flow and will not be executed. The following situation can cause this message: When the animation object is invalid or is already in use. 
    </p>
    <p>
    Also note that there is a rectangle with the message: “Animation data is loaded”. Pay attention to this, as it is incredible, the execution performance of each animation is exponentially optimized, considering that each animation when leaving the queue will pass quickly through its execution. This makes it possible to have several animations running simultaneously without requiring too much of the application.
    </p>
    <p>
    Also interesting is the condition message contained in one of the rhombus shapes: “Has the object been updated?”, This indicates that when the animation leaves the queue to be executed, a quick check is made to identify whether the developer's animation object has undergone some change. Thus, the developer does not need to invoke any update method when he changes something in his animation object. Also note that when there is a change, the animation is updated and played.
    </p>
    <h2 class="subtitles-main">
        <span>
        Closure
        </span>
    </h2>
    <p>
        Initially, controlAnimationJS was being developed to be an animation engine, that is, it would do the internal part and not the visual part. Each code snippet was designed, revised and optimized to make the best possible use of resources without requiring too much of the application. Near the end of its construction, it was noticed how small the code snippet to make the visual part work, currently we have a light and robust library capable of performing simple and complex animations, without leaving aside the incredible animation engine, which makes the limits of this library your creativity.
    </p>
</article>

