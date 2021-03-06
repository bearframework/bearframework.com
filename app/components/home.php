<html>
    <head>
        <style>
            .slogan{
                font-family: 'Open Sans', sans-serif;
                font-size: 3rem;
                color: #26ade4;
                text-align: center;
                line-height: 130%;
                padding: 0.5rem 1.5rem 2rem 1.5rem;
            }
        </style>
    </head>
    <body>
        <div class="slogan">A framework born in 2016</div>
        <p>
            The goal of Bear Framework is to help you start your next web project in less than a minute and help you make it successful. You've got <a href="<?= $app->urls->get('/documentation/routing/') ?>">routing</a>, <a href="<?= $app->urls->get('/documentation/data/') ?>">data storage</a>, <a href="<?= $app->urls->get('/documentation/addons/') ?>">addons</a>, <a href="<?= $app->urls->get('/documentation/logging/') ?>">logging</a>, <a href="<?= $app->urls->get('/documentation/assets/') ?>">assets helpers</a> and <a href="<?= $app->urls->get('/documentation/') ?>">many more useful tools</a>.<br/><br/>
            Let's start with "Hi" and see how easy it is to use Bear Framework.
        </p>

    <component src="code"><?= "
&lt;?php
require 'vendor/autoload.php';
use BearFramework\App;

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
        Browse the <a href="<?= $app->urls->get('/documentation/') ?>">documentation</a> for more examples.
    </p>
    <h2>Learn more</h2>
    <p><?php
        foreach (Data::$articles as $code => $article) {
            echo '<a href="' . $app->urls->get('/' . $code . '/') . '">' . $article['name'] . '</a> - ' . $article['description'] . '<br/>';
        }
        ?></p>
</body>
</html>