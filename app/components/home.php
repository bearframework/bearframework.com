<html>
    <head>
        <style>
            .slogan{
                font-family: 'Open Sans', sans-serif;
                font-size: 3rem;
                color: #26ade4;
                text-align: center;
                line-height: 110%;
                padding: 0 1.5rem;
            }
            .subSlogan{
                text-align: center;
                font-size: 1.1rem;
                padding: 1rem 1.5rem 4rem 1.5rem;
            }
        </style>
    </head>
    <body>
        <div class="slogan">A true 2016 framework</div>
        <div class="subSlogan">The tools you need to develop web apps in PHP faster</div>    
        <p>
            The goal of Bear Framework is to help you start your next web project in less than a minute and help you make it successful. You've got <a href="<?= $app->getUrl('documentation/') ?>">routing</a>, <a href="<?= $app->getUrl('documentation/') ?>">data storage</a>, <a href="<?= $app->getUrl('documentation/') ?>">addons</a>, <a href="<?= $app->getUrl('documentation/') ?>">logging</a>, <a href="<?= $app->getUrl('documentation/') ?>">assets helpers</a>, <a href="<?= $app->getUrl('documentation/') ?>">HTML Server Components</a> and many more useful tools.<br/><br/>
            But's first, let's see how easy to use and familial Bear Framework is. Here is a "Hi".
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