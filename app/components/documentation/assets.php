<html>
    <body>
        <p>
            HTML is just not enough to render a modern website. JavaScript, CSS, images and videos play a big role in the client experience. Bear Framework enables you to handle such assets with ease.<br/><br/>
            The $app->assets object enables to get a public url for a specific asset. You can even resize images on the fly. The only requirement is that files must be located in a directory called '/assets/' or made public if they are in the data storage.
        </p>
        <h2>API</h2>
        <component src="apiList" prefix="App\Assets"/>
        <h2>
            Files in the app directory
        </h2>
        <p>
            This is how you can get the url of an asset in your app directory
        </p>
    <component src="code"><?= "
// All files in the /assets/ directory can be accessed publicly
\$app-&gt;assets-&gt;getUrl('../app/assets/logo.png')
// You can place this directory in other directories
\$app-&gt;assets-&gt;getUrl('../app/path/to/assets/logo.png')
// It's better to use the config value
\$app-&gt;assets-&gt;getUrl(\$app->config->appDir . 'assets/logo.png')
// or use this shortcut
\$context-&gt;assets-&gt;getUrl('assets/logo.png')
" ?></component>
    <h2>
        Files in the data storage
    </h2>
    <p>
        This is how you can get the url of an asset from your data storage.
    </p>
    <component src="code"><?= "
// You can use the full data path
\$app-&gt;assets-&gt;getUrl(\$app->config->dataDir . 'objects/uploads/file1.jpg');
// or use this shortcut
\$app-&gt;data-&gt;getUrl('uploads/file1.jpg');
" ?></component>
    <p>
        It's important that the object is marked as public.
    </p>
    <component src="code"><?= "
\$app-&gt;data-&gt;makePublic('uploads/file1.jpg');
" ?></component>
    <h2>
        Image resizing
    </h2>
    <p>
        In the options argument you can specify the width or the height or both of the desired image.
    </p>
    <component src="code"><?= "
\$context-&gt;assets-&gt;getUrl('assets/logo.png', ['width' => 300]); // height is automatically calculated
\$context-&gt;assets-&gt;getUrl('assets/logo.png', ['width' => 300, 'height' => 200]);
" ?></component>
</body>
</html>