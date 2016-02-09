<?php

if ($app->config->environment === 'production') {
    // The website is behind CDN, so we must update the request data
    $app->request->scheme = 'http';
    $app->request->host = 'bearframework.com';
}

// Register some classes for autoloading
$context->classes->add('DocumentationData', 'classes/DocumentationData.php');

// Register an aliases for commonly used component
$app->components->addAlias('code', 'file:' . $context->dir . 'components/code.php');
$app->components->addAlias('apiList', 'file:' . $context->dir . 'components/apiList.php');

// Route
$app->routes->add('/', function() use ($context) {
    return new App\Response\HTML('<component src="file:' . $context->dir . 'components/home.php" />');
});

// Route
$app->routes->add('/documentation/', function() use ($context) {
    return new App\Response\HTML('<component src="file:' . $context->dir . 'components/documentation.php" />');
});

// Route
$app->routes->add('/documentation/?/', function() use ($app, $context) {
    $code = $app->request->path[1];
    if (DocumentationData::topicExists($code)) {
        return new App\Response\HTML('<component src="file:' . $context->dir . 'components/documentationTopic.php" topicCode="' . $code . '" />');
    }
    return new App\Response\NotFound();
});

// Route
$app->routes->add('/documentation/api/?/', function() use ($app, $context) {
    $code = $app->request->path[2];
    if (DocumentationData::apiExists($code)) {
        return new App\Response\HTML('<component src="file:' . $context->dir . 'components/documentationAPI.php" apiCode="' . $code . '" />');
    }
    return new App\Response\NotFound();
});

// Route for the site icons
$app->routes->add('/assets/icon*', function() use ($app, $context) {
    $size = substr($app->request->path[1], 4);
    if (is_numeric($size)) {
        $size = (int) $size;
        if ($size >= 16 && $size <= 1000) {
            $url = $context->assets->getUrl('assets/logo' . ($size < 60 ? '-small' : '') . '.png', ['width' => $size, 'height' => $size]);
            $path = str_replace($app->request->base, '', $url);
            $response = new App\Response\FileReader($app->assets->getFilename($path));
            $response->setContentType('image/png');
            $response->setMaxAge(86400);
            return $response;
        }
    }
    return new App\Response\NotFound();
});

// Route for the image used by the social networks
$app->routes->add('/assets/socialimage', function() use ($context) {
    $response = new App\Response\FileReader($context->dir . 'assets/social-image.png');
    $response->setContentType('image/png');
    $response->setMaxAge(86400);
    return $response;
});

// Update the response
$app->hooks->add('responseCreated', function($response) use ($app, $context) {
    $addTemplate = false;
    if ($response instanceof \App\Response\NotFound) {
        $response->setContentType('text/html');
        $response->content = '<component src="file:' . $context->dir . 'components/systempage.php" text="Page not found" />';
        $addTemplate = true;
    } elseif ($response instanceof \App\Response\TemporaryUnavailable) {
        $response->setContentType('text/html');
        $response->content = '<component src="file:' . $context->dir . 'components/systempage.php" text="Temporary unavailable. Try again in few moments." />';
        $addTemplate = true;
    }
    if ($addTemplate || $response instanceof \App\Response\HTML) {
        $templateContent = $app->components->process('<component src="file:' . $context->dir . 'components/template.php" />');
        $templateContent = str_replace('{pageContent}', $response->content, $templateContent);
        $response->content = $templateContent;
        if ($app->config->environment === 'production') {
            $response->setMaxAge(600);
        }
    }
});

// Adds Google Analytics
if ($app->config->environment === 'production') {
    $app->addons->add('ivopetkov/bearframework-google-analytics', [
        'trackingID' => 'UA-65160757-3'
    ]);
}
