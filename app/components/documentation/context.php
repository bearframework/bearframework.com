<html>
    <body>
        <p>
            When you write your application code or develop addons, you often need to know the exact location of your code (to load other files for example). Bear Framework provides you with an object called $context that is available in your scope.
        </p>
        <h2>API (for applications)</h2>
        <component src="apiList" prefix="BearFramework\App\AppContext"/>
        <h2>API (for addons)</h2>
        <component src="apiList" prefix="BearFramework\App\AddonContext"/>
        <h2>Examples</h2>
    <p>
        Registers a class for autoloading.
    </p>
    <component src="code"><?= "
\$context-&gt;classes-&gt;add('MyClass', 'classes/MyClass.php');
" ?></component>
    <p>
        Gets the url of an asset.
    </p>
    <component src="code"><?= "
\$url = \$context-&gt;assets-&gt;getUrl('assets/logo.png');
" ?></component>
    <p>
        Gets the current addon options. Property does not exist in the app context.
    </p>
    <component src="code"><?= "
\$context-&gt;options['...'];
" ?></component>
</body>
</html>