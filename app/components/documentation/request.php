<html>
    <body>
        <p>
            <a href="<?= $app->urls->get('/documentation/routing/') ?>">Routing</a> can be very helpful. But sometimes you will need the full request data. The object <a href="<?= $app->urls->get('/documentation/api/bearframework.app.request/') ?>">$app->request</a> provides you the necessary data.
        </p>
        <h2>API</h2>
    <component src="apiList" prefix="BearFramework\App\Request"/>
    <h2>Example</h2>
    <p>
        Here is the information you receive for this example URL:<br/>http://example.com/products/iphone/?order=asc&amp;count=5
    </p>
    <component src="code"><?= "
\$app-&gt;request-&gt;method; // GET
\$app-&gt;request-&gt;scheme; // http
\$app-&gt;request-&gt;host; // example.com
\$app-&gt;request-&gt;base; // http://example.com
(string)\$app-&gt;request-&gt;path; // /products/iphone/
\$app-&gt;request-&gt;path[0]; // products
\$app-&gt;request-&gt;path[1]; // iphone
\$app-&gt;request-&gt;path[2]; // null
(string)\$app-&gt;request-&gt;query; // ?order=asc&amp;count=5
\$app-&gt;request-&gt;query['order']; // asc
\$app-&gt;request-&gt;query['count']; // 5
\$app-&gt;request-&gt;query['missing']; // null
" ?></component>

</body>
</html>