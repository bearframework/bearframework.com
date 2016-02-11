<?php

function renderLink($app, $code, $topic)
{
    echo '<a href="' . $app->getUrl('/documentation/' . $code . '/') . '">' . $topic['name'] . '</a> - ' . $topic['description'] . '<br/>';
}
?><html>
    <body>
        <h1>Documentation</h1>
        <p style="text-align:center;">
            Bear Framework is one of the easiest PHP frameworks you can find. See for yourself.
        </p>

        <h2>Getting started</h2>
        <p>
            <?php
            $counter = 0;
            foreach (Data::$documentationTopics as $code => $topic) {
                $counter++;
                if ($counter > 2) {
                    continue;
                }
                renderLink($app, $code, $topic);
            }
            ?>
        </p>

        <h2>Features</h2>
        <p>
            <?php
            $counter = 0;
            foreach (Data::$documentationTopics as $code => $topic) {
                $counter++;
                if ($counter < 2) {
                    continue;
                }
                renderLink($app, $code, $topic);
            }
            ?>
        </p>
    </body>
</html>