<html>
    <body>
        <h1>The philosophy behind Bear Framework</h1>
        <p>
            There is a boom in web development in recent years and many tools emerged. There are front-end frameworks, back-end frameworks, libraries, pre-processors, template engines, package managers, console tools and much more. Some are good, and some are great. But the thing is, that most of them are way too specific, require a lot of learning time, and then you find they don't work well with your other tools, and after a year or two you drop them for a hot new thing.<br/><br/>
            We think it's time we have a stable foundation, so we can write our web apps the way each of us wants. That's why we've created Bear Framework.
        </p>
        <h2>Low learning curve</h2>
        <p>
            HTML, CSS and JavaScript are in the core of the modern web apps. And the most important task of your server code is to prepare them for the browser. PHP is great at working with such content (it's just text), so we wanted to build a framework that will help you do more in a familiar way. And we've done just that. No magic tricks, just the tools you expect.
        </p>
        <h2>Simple API</h2>
        <p>
            New functions, new objects, new concepts - all the things we must learn when we start using a new framework. Luckily Bear Framework's API is really simple and well-thought. <a href="<?= $app->getUrl('/documentation/api/') ?>">See for yourself</a>.
        </p>
        <h2>Addons</h2>
        <p>
            No framework can handle all web app cases (different database engines, template engines, libraries, etc.) and we've decided to leave many functionalities out of the core framework. And we've made developing and using addons very easy.
        </p>
        <h2>Don't change your coding habits</h2>
        <p>
            We know there are different coding preferences amongst different programmers. Some like writing more classes, other don't. Some focus their's attention on the structure of the application, others don't. Some like creating helper functions and objects to make their job easier, others don't. Bear Framework does not have strict requirements how your should code look like and how it's structured. The framework only expects you to return the output code that will be sent to the client.
        </p>
    </body>
</html>