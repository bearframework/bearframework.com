<html>
    <body>
        <p>
            Logs are very important part for an application, and they come natively in Bear Framework. You can config automatic error logging and log custom data yourself.<br/><br/>
            To enable logs just set the 'logsDir' configuration variable to a desired dir where the files will be written.
        </p>
    <component src="code"><?= "
\$app = new App([
    'logsDir' => __DIR__ . '/../logs/'
]);
" ?></component>
    <h2>API</h2>
    <component src="apiList" prefix="App\Log"/>
    <h2>Examples</h2>
    <p>
        Custom action logging
    </p>
    <component src="code"><?= "
\$app-&gt;log-&gt;write('visitors/ip.log', '111.222.333.444');
" ?></component>
    <h2>Error logging</h2>
    <p>
        Enable error logging by settings 'logErrors' in the application config.
    </p>
    <component src="code"><?= "
\$app = new App([
    'logErrors' => true
]);
" ?></component>
</p>
</body>
</html>