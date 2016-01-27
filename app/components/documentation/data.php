<html>
    <body>
        <p>
            Bear Framework provides you with a file-based object storage. It's called <a href="https://github.com/ivopetkov/object-storage">Object Storage</a> and is integrated into the framework for easy access. Object/files are accessed by key (internally it's a filename).<br/><br/>
            One of the great benefits of this library is that it support atomic operations (files locking is used). <br/><br/>
            Additionally, you can set metadata to each object. It's a great way to store size, dates or other file metadata.<br/><br/>
            And of course, the data can be backed up easily. It is just raw files on your hard drive.<br/><br/>
            You can mark an object as public and get it's public URL by calling <a href="<?= $app->getUrl('/documentation/api/app.data.getUrl/') ?>">$app->data->getUrl</a>
        </p>
        <h2>API</h2>
        <component src="apiList" prefix="App\Data"/>
        <h2>Examples</h2>
        <p>Setting data</p>
    <component src="code"><?= "
\$app-&gt;data-&gt;set([
    'key' =&gt; 'users/1',
    'body' =&gt; '{&quot;name&quot;:&quot;John Smith&quot;,&quot;email&quot;:&quot;john@example.com&quot;}',
    'metadata.lastAccessTime' =&gt; (string) time()
]);
" ?></component>
    <p>Getting data</p>
    <component src="code"><?= "
\$result = \$app-&gt;data-&gt;get([
    'key' =&gt; 'users/1',
    'result' =&gt; ['body', 'metadata']
]);
/*
If the object exists \$result will be:
Array
(
    [body] =&gt; {&quot;name&quot;:&quot;John Smith&quot;,&quot;email&quot;:&quot;john@example.com&quot;}
    [metadata.lastAccessTime] =&gt; 1234567890
)
If the object does not exists \$result will empty array.
*/
" ?></component>
    <p>Appending data</p>
    <component src="code"><?= "
\$app-&gt;data-&gt;append([
    'key' =&gt; 'visits/ip.log',
    'body' =&gt; &quot;123.123.123.123\n&quot;
]);
" ?></component>
    <p>Duplicating data</p>
    <component src="code"><?= "
\$app-&gt;data-&gt;duplicate([
    'sourceKey' =&gt; 'users/1',
    'targetKey' =&gt; 'users/2'
]);
" ?></component>
    <p>Renaming data</p>
    <component src="code"><?= "
\$app-&gt;data-&gt;rename([
    'sourceKey' =&gt; 'users/2',
    'targetKey' =&gt; 'users/3'
]);
" ?></component>
    <p>Deleting data</p>
    <component src="code"><?= "
\$app-&gt;data-&gt;delete([
    'key' =&gt; 'users/3'
]);
" ?></component>
    <p>Searching for data</p>
    <component src="code"><?= "
\$result = \$app-&gt;data-&gt;search([
    'where' =&gt; [
        ['key', ['users/1']]
    ],
    'result' =&gt; ['key', 'body']
]);
/*
The result is array of arrays containing the matching objects
Array
(
    [0] =&gt; Array
        (
            [key] =&gt; users/1
            [body] =&gt; {&quot;name&quot;:&quot;John Smith&quot;,&quot;email&quot;:&quot;john@example.com&quot;}
        )
)
*/

//If there are not matches an empty array is returned
\$result = \$app-&gt;data-&gt;search([
    'where' =&gt; [
        ['key', 'users/9']
    ],
    'result' =&gt; ['key', 'body']
]);

// You can also use regular expresions
\$result = \$app-&gt;data-&gt;search([
    'where' =&gt; [
        ['key', '^users\/', 'regexp']
    ],
    'result' =&gt; ['key', 'body']
]);
" ?></component>

</body>
</html>