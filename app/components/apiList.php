<html>
    <body>
        <p><?php
            $prefix = (string) $component->prefix;
            $type = (string) $component->type;
            $api = Data::getAPI();
            foreach ($api as $code => $endpoint) {
                if (isset($prefix{0}) && strpos($endpoint['name'], $prefix) !== 0) {
                    continue;
                }
                if (isset($type{0}) && $endpoint['type'] !== $type) {
                    continue;
                }
                echo '<a href="' . $app->urls->get('/documentation/api/' . $code . '/') . '">' . $endpoint['name'] . '</a>' . (strlen($endpoint['description']) > 0 ? ' - ' . $endpoint['description'] : '') . '<br/>';
            }
            ?></p>
    </body>
</html>