<html>
    <body>
        <p>
            Currently, this feature is based on the <a href="<?= $app->urls->get('/documentation/data/') ?>">data</a> feature. It has simple API and enables you to cache data for later use.
        </p>
        <h2>API</h2>
    <component src="apiList" prefix="BearFramework\App\Cache"/>
    <h2>Examples</h2>
    <p>Add data to the cache</p>
    <component src="code"><?= "
\$app-&gt;cache-&gt;set('key1', 'data1');
    " ?></component>
    <p>Getting data from the cache</p>
    <component src="code"><?= "
\$result = \$app-&gt;cache-&gt;get('key1');
/*
\$result will be: data1
*/
    " ?></component>
    <p>Delete data from the cache</p>
    <component src="code"><?= "
\$app-&gt;cache-&gt;delete('key1');
    " ?></component>
</body>
</html>