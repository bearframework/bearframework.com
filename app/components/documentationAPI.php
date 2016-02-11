<?php
$data = include $context->dir . 'data/api/' . $component->apiCode . '.php';
?><html>
    <head>
        <style>
            .docTopicParameter{
                margin-bottom: 1rem;
                font-weight: bold;
                display: block;
            }
            .docTopicParameter:last-child{
                margin-bottom: 0;
            }
            .docTopicParameter > span{
                font-weight: normal;
                padding-left: 1rem;
                display: block;
            }
        </style>
    </head>
    <body>
        <h1><?php
            if ($data['type'] === 'class') {
                echo $data['name'];
            } else {
                echo $data['class'] . '::' . $data['name'];
            }
            ?></h1>
        <?php
        if (!empty($data['comment']['description'])) {
            echo '<p>' . $data['comment']['description'] . '</p>';
        }
        ?>
        <?php
        $getValue = function($value) {
            if (is_string($value)) {
                return '\'' . str_replace('\'', '\\\'', $value) . '\'';
            }
            return json_encode($value);
        };

        $getType = function($type) {
            if ($type !== 'void' && $type !== 'string' && $type !== 'int' && $type !== 'boolean' && $type !== 'array') {
                return '<a href="asdasd">' . $type . '</a>';
            }
            return $type;
        };

        $getMethod = function($method) use($getValue, $getType) {
            $result = '';
            $keywords = [];
            if ($method['isStatic']) {
                $keywords[] = 'static';
            }
            if ($method['isPublic']) {
                $keywords[] = 'public';
            }
            if ($method['isProtected']) {
                $keywords[] = 'protected';
            }
            if ($method['isPrivate']) {
                $keywords[] = 'private';
            }
            if ($method['isAbstract']) {
                $keywords[] = 'abstract';
            }
            if ($method['isFinal']) {
                $keywords[] = 'final';
            }

            if (empty($method['parameters'])) {
                $parameters = 'void';
            } else {
                $parameters = '';
                foreach ($method['parameters'] as $parameter) {
                    if ($parameter['isOptional']) {
                        $parameters .= ' [, ';
                    } else {
                        $parameters .= ' , ';
                    }
                    $parameters .= $getType($parameter['type']) . ' $' . $parameter['name'] . ($parameter['value'] !== null ? ' = ' . $getValue($parameter['value']) : '');
                    if ($parameter['isOptional']) {
                        $parameters .= ' ] ';
                    }
                }
                $parameters = trim($parameters, ' ,');
                if (substr($parameters, 0, 2) === '[,') {
                    $parameters = '[' . substr($parameters, 2);
                }
            }
            $returnType = isset($method['comment']['return']['type']) ? $method['comment']['return']['type'] : 'void';
            $result .= "\t" . implode(' ', $keywords) . ($method['isConstructor'] || $method['isDestructor'] ? '' : ' ' . $getType($returnType)) . ' ' . $method['name'] . ' ( ' . $parameters . ' )' . "\n";
            return $result;
        };

        $result = '';
        if ($data['type'] === 'class') {
            $result .= $data['name'] . " {\n\n";

            if (!empty($data['constants'])) {
                $result .= "\t" . '/* Constants */' . "\n";
                foreach ($data['constants'] as $constant) {
                    $result .= "\t" . 'const ' . $constant['type'] . ' ' . $constant['name'] . ' = ' . $getValue($constant['value']) . "\n";
                }
                $result .= "\n";
            }

            if (!empty($data['properties'])) {
                $result .= "\t" . '/* Properties */' . "\n";
                foreach ($data['properties'] as $property) {
                    $keywords = [];
                    if ($property['isStatic']) {
                        $keywords[] = 'static';
                    }
                    if ($property['isPublic']) {
                        $keywords[] = 'public';
                    }
                    if ($property['isProtected']) {
                        $keywords[] = 'protected';
                    }
                    if ($property['isPrivate']) {
                        $keywords[] = 'private';
                    }
                    $result .= "\t" . implode(' ', $keywords) . ' ' . $getType($property['type']) . ' $' . $property['name'] . ($property['value'] === null ? '' : ' = ' . $getValue($property['value'])) . "\n";
                }
                $result .= "\n";
            }

            if (!empty($data['methods'])) {
                $result .= "\t" . '/* Methods */' . "\n";
                foreach ($data['methods'] as $method) {
                    $result .= $getMethod($method);
                }
                $result .= "\n";
            }
            $result .= "}";
        } else {
            $result .= $getMethod($data);
        }
        echo '<component src="code">' . $result . '</component>';

        if ($data['type'] === 'class') {
            ?><h2>Methods</h2>
            <p><?php
                $api = Data::getAPI();
                $hasMethods = false;
                foreach ($api as $methodCode => $methodData) {
                    if ($methodData['type'] === 'method') {
                        if (strpos($methodData['name'], $data['name'] . '::') === 0) {
                            echo '<a href="' . $app->getUrl('/documentation/api/' . $methodCode . '/') . '">' . $methodData['name'] . '</a> - ' . $methodData['description'] . '<br/>';
                            $hasMethods = true;
                        }
                    }
                }
                if (!$hasMethods) {
                    echo 'This class has no methods.';
                }
                ?>
            </p><?php
        } else {
            ?><h2>Parameters</h2>
            <p>
                <?php
                foreach ($data['parameters'] as $i => $parameter) {
                    echo '<span class="docTopicParameter">
                ' . $parameter['name'] . '
                <span>' . $data['comment']['parameters'][$i]['description'] . '</span>
                </span>';
                }
                ?>
            </p>
            <h2>Return value</h2>
            <p><?php
                if (is_array($data['comment']['return'])) {
                    echo $data['comment']['return']['description'];
                } else {
                    echo 'No value is returned.';
                }
                ?></p>
            <?php
        }
        ?>
    </body>
</html>