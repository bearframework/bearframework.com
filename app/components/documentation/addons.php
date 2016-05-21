<html>
    <body>
        <p>
            Addons are the way you can easily reuse code. They are structured exactly like your app code and have access to the same APIs. Addons can add routes, write data, modify the response and so on.<br/><br/>
            Composer will automatically register the addon, but if you've downloaded it manually you must add the following code:
        </p>
    <component src="code">
        <?= "
include_once __DIR__ . '/../addons/ivopetkov/google-analytics-bearframework-addon/autoload.php';
" ?>
    </component>
    <p>
        Then you need to enable it for your app by calling <a href="<?= $app->urls->get('/documentation/api/bearframework.app.addons.add/') ?>">$app->addons->add()</a>. You can also provide some options if needed.
    </p>
    <component src="code">
        <?= "
\$app-&gt;addons-&gt;add('ivopetkov/google-analytics-bearframework-addon', [
    'trackingID' =&gt; 'UA-65160757-3'
]);
" ?>
    </component>
    <h2>API</h2>
    <component src="apiList" prefix="BearFramework\App\Addons"/>
    <h2>Creating an addon</h2>
    <p>
        There are only two requirements for an addon.<br/><br/>
        1. Create an autoload.php file that registers the addon
    </p>
    <component src="code">
        <?= "
&lt;?php
BearFramework\Addons::register('bearframework/sample-addon', __DIR__);
" ?>
    </component>
    <p>
        2. Create an index file with your addon logic
    </p>
    <component src="code">
        <?= "
&lt;?php
use BearFramework\App;

\$app-&gt;routes-&gt;add('/addon/', function() {
    return new App\Response('The sample addon has rendered this page.');
});
" ?>
    </component>
    <p>
        We've prepared a <a href="https://github.com/bearframework/sample-addon">sample addon</a> that you can download and modify.
    </p>
</body>
</html>