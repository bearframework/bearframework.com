<html>
    <body>
        <p>
            There are two ways to install Bear Framework, both really easy.
        </p>
        <h2>Install via Composer</h2>
        <p>
            <a href="https://getcomposer.org/">Composer</a> is a dependency manager and if you are already using it you can run:
        </p>
    <component src="code">php composer.phar require bearframework/bearframework</component>
    <p>
        Then include the Composer autoload file in your project.
    </p>
    <component src="code"><?= "&lt;?php
require 'vendor/autoload.php';" ?></component>
    <h2>Download the zip file</h2>
    <p>
        Download the <a href="https://github.com/bearframework/bearframework/releases">latest release</a> from our GitHub page. The zip includes a ready to use version that contains all dependencies. Then add the following code to your project.
    </p>
    <component src="code">require '/path/to/bearframework/autoload.php';</component>
    <p>
        You can also <a href="https://github.com/bearframework/bearframework/releases">download</a> a sample app and begin building your app right away.
    </p>
</body>
</html>