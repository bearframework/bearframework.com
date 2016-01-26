<html>
    <body>
        <p>
            The purpose of websites is to respond to requests (home page, sub page, assets, ...) and routing in Bear Framework makes this very easy. When you create your app you can describe different request handlers for different request types. Here is how you can register a callback function that will be called if there is a match with the request parameters. The response object (<a href="<?= $app->getUrl('/documentation/api/app.response/') ?>">App\Reponse</a>) returned by the callback will be sent to the client.
        </p>
    <component src="code"><?= "// The specified callback will be executed when request path is '/' and response method is GET
// The text 'Hi' will be shown on the screen
\$app-&gt;routes-&gt;add('/', function() {
    return new App\Response('Hi');
});" ?></component>
    <p>
        Routes are checked from top to bottom. If a matching route does not return object of type <a href="<?= $app->getUrl('/documentation/api/app.response/') ?>">App\Response</a> the following routes will be checked too. If there is no match the framework will respond with object of type <a href="<?= $app->getUrl('/documentation/api/app.response.notfound/') ?>">App\Response\NotFound</a>.<br><br/>
    </p>
    <h2>Patterns</h2>
    <p>
        You can write exact match patterns (as the one in the example above) or use "?" and "*" to match everything. The "?" symbol matches specific path part and "*" matches everything. See the examples below.<br><br/>
        To get the values in the path matched by "?" or "*" you can use the <a href="<?= $app->getUrl('/documentation/request/') ?>">$app->request</a> object. It provides an indexed array containing all path parts. Here is an example:
    </p>
    <component src="code"><?= "
\$app-&gt;routes-&gt;add('/products/?/', function() {
    \$part = \$app-&gt;request-&gt;path[1]; // get the value in the second path part
    return new App\Response\HTML('Product: ' . \$part);
});
" ?></component>
    <h2>API</h2>
    <component src="apiList" prefix="App\Routes"/>
    <h2>Examples</h2>
    <p>
        Simple paths matching
    </p>
    <component src="code"><?= "
// Will match GET http://example.com/
\$app-&gt;routes-&gt;add('/', function() {
    return new App\Response\HTML('Hi');
});

// Will match GET http://example.com/products/
\$app-&gt;routes-&gt;add('/products/', function() {
    return new App\Response\HTML('Hi');
});
" ?></component>
    <p>
        Path part matching with "?"
    </p>
    <component src="code"><?= "
// Will match GET http://example.com/products/iphone/
\$app-&gt;routes-&gt;add('/products/?/', function() {
    return new App\Response\HTML('Hi');
});

// Will match GET http://example.com/products/iphone/6s/
\$app-&gt;routes-&gt;add('/products/?/?/', function() {
    return new App\Response\HTML('Hi');
    });" ?></component>
    <p>
        Matching with "*"
    </p>
    <component src="code"><?= "
// Will match: 
// GET http://example.com/stores/
// GET http://example.com/stores/new-york/
// GET http://example.com/stores/california/
// GET http://example.com/stores/california/working-hours/
\$app-&gt;routes-&gt;add('/stores/*', function() {
    return new App\Response\HTML('Hi');
});

// Will match everything
\$app-&gt;routes-&gt;add('*', function() {
    return new App\Response\HTML('Hi');
});
" ?></component>
    <p>
        Different method and protocol checks
    </p>
    <component src="code"><?= "
// Will match POST http://example.com/
\$app-&gt;routes-&gt;add('/', function() {
    return new App\Response\JSON(json_encode(['result' => 'ok']));
}, ['POST']);

// Will match GET https://example.com/
\$app-&gt;routes-&gt;add('/', function() {
    return new App\Response\HTML('Hi');
}, ['GET', 'HTTPS']);

// Will match GET|HEAD https://example.com/
\$app-&gt;routes-&gt;add('/', function() {
    return new App\Response\HTML('Hi');
}, ['GET', 'HEAD', 'HTTPS']);
" ?></component>
</body>
</html>