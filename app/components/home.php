<html>
    <head>
        <style>
            .slogan{
                font-family: 'Open Sans', sans-serif;
                font-size: 3rem;
                color: #26ade4;
                text-align: center;
                line-height: 130%;
                padding: 0.5rem 1.5rem 0 1.5rem;
            }
            .subSlogan{
                text-align: center;
                font-size: 1.1rem;
                padding: 1rem 1.5rem 2.5rem 1.5rem;
            }
        </style>
    </head>
    <body>
        <div class="slogan">A framework born in 2016</div>
        <div class="subSlogan">The tools you need to develop web apps in PHP faster</div>    
        <p>
            The goal of Bear Framework is to help you start your next web project in less than a minute and help you make it successful. You've got <a href="<?= $app->getUrl('/documentation/routing/') ?>">routing</a>, <a href="<?= $app->getUrl('/documentation/data/') ?>">data storage</a>, <a href="<?= $app->getUrl('/documentation/addons/') ?>">addons</a>, <a href="<?= $app->getUrl('/documentation/logging/') ?>">logging</a>, <a href="<?= $app->getUrl('/documentation/assets/') ?>">assets helpers</a> and <a href="<?= $app->getUrl('/documentation/') ?>">many more useful tools</a>.<br/><br/>
            Let's start with "Hi" and see how easy to use Bear Framework is.
        </p>

    <component src="code"><?= "
&lt;?php
require 'vendor/autoload.php';

// Create the application object that will handle the request
\$app = new App();

// Register a function that returns the response
\$app-&gt;routes-&gt;add('/', function() {
    return new App\Response('Hi');
});

// Sends the appropriate response to the client
\$app-&gt;run();
" ?></component>
    <p>
        Browse the <a href="<?= $app->getUrl('/documentation/') ?>">documentation</a> for more examples.
    </p>
</body>
</html>