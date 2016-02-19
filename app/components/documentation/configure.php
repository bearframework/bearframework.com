<html>
    <body>
        <p>
            Here is a recommended file structure and configation for your web app.
        </p>
    <component src="code"><?= "\\app // This is the place where we write our app code
\\bearframework // Bear Framework files
    \\autoload.php
    \\...
\\data // The data is stored here
\\logs // Here logs are stored
\\public // This must be the only public dir, so point your domain here
    \\index.php
    \\.htaccess // Apache config file that makes pretty URLs (mod_rewrite required)
" ?></component>
    <p>
        Here is the content of \public\index.php:
    </p>
    <component src="code"><?= "&lt;?php
require 'vendor/autoload.php';

// Let's create the application object that will handle the request
\$app = new BearFramework\App();
\$app->config->appDir = __DIR__ . '/../app/'; // The dir where our app code is located
\$app->config->dataDir = __DIR__ . '/../data/'; // This is data storage dir
\$app->config->logsDir = __DIR__ . '/../logs/'; // Here logs are stored
\$app->config->logErrors = true;

// Executes the app and sends response
\$app-&gt;run();" ?></component>
    <p>
        And this is the content of \app\index.php. It is autoloaded because of the configuration variable 'appDir'. It's recommended to use appDir that is not publicly accessible to store your code and assets.
    </p>
    <component src="code"><?= "
use BearFramework\App;
// The specified callback will be executed when request path is '/' and response method is GET
// The text 'Hi' will be shown on the screen
\$app-&gt;routes-&gt;add('/', function() {
    return new App\Response('Hi');
});" ?></component>
    <p>
        <a href="https://github.com/bearframework/bearframework/releases">Download</a> the following code (look for file named "sample-app.zip") and begin building your app right away.
    </p>
</body>
</html>