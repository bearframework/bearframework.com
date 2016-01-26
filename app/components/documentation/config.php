<html>
    <body>
        <p>
            Bear framework is really simple to start and simple to use. But still there are some configuration variables that must be set so that the application works the ways you expect. There are some predefined options and you can easily add specific ones for your app.<br/><br/>
            Here is a recommended configuration:
        </p>
    <component src="code"><?= "
\$app = new App([
    'appDir' =&gt; __DIR__ . '/../app/',
    'addonsDir' =&gt; __DIR__ . '/../addons/',
    'dataDir' =&gt; __DIR__ . '/../data/',
    'logsDir' =&gt; __DIR__ . '/../logs/',
    'handleErrors' =&gt; true,
    'displayErrors' =&gt; true, // only for development purposes
    'logErrors' =&gt; true,
    'assetsMaxAge' =&gt; 86400 // sets the max-age http header for all assets to 1 day
]);
" ?></component>
    <h2>API</h2>
    <component src="apiList" prefix="App\Config"/>
</body>
</html>