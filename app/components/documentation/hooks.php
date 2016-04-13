<html>
    <body>
        <p>
            Hooks are a great way to provide data or make some specific action when needed. They are identified by name, and you can attach a unlimited number of callbacks to be called (hooks). There are some build-it hooks, and you can define your own.
        </p>
        <h2>API</h2>
        <component src="apiList" prefix="BearFramework\App\Hooks"/>
        <h2>Examples</h2>
        <p>
            This function changes the response content if the response is of type <a href="<?= $app->urls->get('/documentation/api/bearframework.app.response.notfound/') ?>">Bearframwork\App\Response\NotFound</a>.
        </p>
    <component src="code"><?= "
\$app->hooks->add('responseCreated', function(\$response) {
    if (\$response instanceof App\Response\NotFound) {
        \$response->content = 'Sorry!';
    }
});
" ?></component>
    <p>
        This is how you can execute custom hook and all subscribers will be notified.
    </p>
    <component src="code"><?= "
// You can set arguments that will be passed to the callbacks
\$app-&gt;hooks-&gt;execute('newUserRegistration', \$arg1, \$arg2);
" ?></component>
</body>
</html>