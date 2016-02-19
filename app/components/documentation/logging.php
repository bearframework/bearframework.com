<html>
    <body>
        <p>
            Logs are a very important part of an application, and they come natively in Bear Framework. You can configure automatic error logging and log custom data yourself.<br/><br/>
            To enable logs just set the 'logsDir' configuration variable to the desired directory where the files will be written.
        </p>
    <component src="code"><?= "
\$app = new BearFramework\App();
\$app->config->logsDir = __DIR__ . '/../logs/';
" ?></component>
    <h2>API</h2>
    <component src="apiList" prefix="BearFramework\App\Log"/>
    <h2>Examples</h2>
    <p>
        Custom info logging
    </p>
    <component src="code"><?= "
\$app-&gt;logger-&gt;log('info', 'Visit from 111.222.333.444');
" ?></component>
    <h2>Error logging</h2>
    <p>
        Enable error logging by settings 'logErrors' in the application config.
    </p>
    <component src="code"><?= "
\$app = new BearFramework\App();
\$app->config->logErrors = true;
" ?></component>
</body>
</html>