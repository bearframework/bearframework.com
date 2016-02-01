<html>
    <body>
        <p>
            HTML Server Components are very simple but powerful concept. They look a lot like template engines and will help you with your views. You can read the author's post <a href="http://ivopetkov.com/b/html-server-components/">here</a>.
        </p>
        <h2>How do components work?</h2>
        <p>
            The following is the content of a file named "main.php". As you can see this file outputs the title tag and some CSS.
        </p>
    <component src="code"><?= '&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot;&gt;
        &lt;title&gt;Project title&lt;/title&gt;
        &lt;style&gt;
            body{ background-color: #fff; }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;component src=&quot;file:header.php&quot; /&gt;
    &lt;/body&gt;
&lt;/html&gt;' ?></component>
    <p>
        It also includes the special tag "component" that points to the file "header.php".<br/><br/>
        The "header.php" file contains a header tag that is styled.
    </p>
    <component src="code"><?= '&lt;html&gt;
    &lt;head&gt;
        &lt;style&gt;
            header{ background-color: black; color: #fff; }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;header&gt;
            &lt;h1&gt;Welcome&lt;/h1&gt;
        &lt;/header&gt;
    &lt;/body&gt;
&lt;/html&gt;' ?></component>
    <p>
        When the "main.php" file is processed the "component" tag will be replaced with the content of the body element from the "header.php" file. Also the style tags will be moved to their proper place. Here is the result:
    </p>
    <component src="code"><?= '&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;UTF-8&quot;&gt;
        &lt;title&gt;Project title&lt;/title&gt;
        &lt;style&gt;
            body{ background-color: #fff; }
        &lt;/style&gt;
        &lt;style&gt;
            header{ background-color: black; color: #fff; }
        &lt;/style&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;header&gt;
            &lt;h1&gt;Welcome&lt;/h1&gt;
        &lt;/header&gt;
    &lt;/body&gt;
&lt;/html&gt;' ?></component>
    <h2>Context</h2>
    <p>
        Inside your component files you have access to three objects, named $component, <a href="<?= $app->getUrl('/documentation/api/app/') ?>">$app</a> and <a href="<?= $app->getUrl('/documentation/context/') ?>">$context</a>. The $component object contains the attributes of the "component" tag and it's innerHTML. Here is an example:
    </p>
    <component src="code"><?= '// For the following file
&lt;component src=&quot;file:header.php&quot; title=&quot;My Website&quot; slogan=&quot;The best website&quot; /&gt;

// you will get the following data in header.php
$component-&gt;title // My Website
$component-&gt;description //The best website' ?></component>

    <h2>API</h2>
    <component src="apiList" prefix="App\Components"/>

</body>
</html>