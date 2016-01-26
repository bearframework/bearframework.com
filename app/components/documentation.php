<?php

function renderLink($app, $topic)
{
    echo '<a href="' . $app->getUrl('/documentation/' . $topic['code'] . '/') . '">' . $topic['name'] . '</a><br/>';
}
?><html>
    <body>
        <h1>Documentation</h1>
        <div style="text-align:center;">
            <p>
                Bear Framework is one of the easiest PHP frameworks you can find. See for yourself.
            </p>

            <h2>Getting started</h2>
            <p>
                <?php
                $topics = DocumentationData::getTopics(1);
                foreach ($topics as $topic) {
                    renderLink($app, $topic);
                }
                ?>
            </p>

            <h2>Features</h2>
            <p>
                <?php
                $topics = DocumentationData::getTopics(2);
                foreach ($topics as $topic) {
                    renderLink($app, $topic);
                }
                ?>
            </p>
        </div>
    </body>
</html>