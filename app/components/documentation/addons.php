<html>
    <body>
        <p>
            Addons are the way you can easily reuse code. They are structured exactly like your app code and have access to the same APIs. Addons can add routes, write data, modify the response and so on.<br/><br/>
            All you have to do to use an addon is download it in your addons dir (usually that's '../addons/') and call <a href="<?= $app->getUrl('/documentation/api/app.routes/') ?>">$app->addons->add()</a>. You can also provide some options if needed.
        </p>
        <component src="code">
            <?= "
\$app-&gt;addons-&gt;add('google-analytics-by-ivopetkov', [
    'trackingID' =&gt; 'UA-65160757-3'
]);
" ?>
        </component>
        <h2>API</h2>
        <component src="apiList" prefix="App\Addons"/>
    </body>
</html>