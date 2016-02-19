<html>
    <body>
        <p>
            Bear framework is really simple to start and simple to use. But still there are some configuration variables that must be set so that the application works the ways you expect. There are some predefined options, and you can easily add specific ones for your app.<br/><br/>
            Here is a recommended configuration:
        </p>
    <component src="code"><?= "
\$app = new BearFramework\App();
\$app->config->appDir = __DIR__ . '/../app/',
\$app->config->dataDir = __DIR__ . '/../data/',
\$app->config->logsDir = __DIR__ . '/../logs/',
\$app->config->handleErrors = true,
\$app->config->displayErrors = true, // only for development purposes
\$app->config->logErrors = true,
\$app->config->assetsMaxAge = 86400 // sets the max-age http header for all assets to 1 day
" ?></component>
    <h2>API</h2>
    <component src="apiList" prefix="BearFramework\App\Config"/>
</body>
</html>