<?php

class Data
{

    static public $documentationTopics = [
        'download' => [
            'name' => 'Download and install',
            'file' => 'download.php',
            'description' => 'Easy and fast. Do you believe it can be only couple of seconds?'
        ],
        'configure' => [
            'name' => 'Create and configure your app',
            'file' => 'configure.php',
            'description' => 'Easy but important step. After that you are ready to write your code.'
        ],
        'routing' => [
            'name' => 'Routing',
            'file' => 'routing.php',
            'description' => 'Helps you map requests to specific handlers.'
        ],
        'data' => [
            'name' => 'Data',
            'file' => 'data.php',
            'description' => 'Store and retrieve data from a file-based object storage.'
        ],
        'addons' => [
            'name' => 'Addons',
            'file' => 'addons.php',
            'description' => 'Easily extend your app. Share functionality with others.'
        ],
        'logging' => [
            'name' => 'Logging',
            'file' => 'logging.php',
            'description' => 'Log everything you find useful easily.'
        ],
        'context' => [
            'name' => 'Context',
            'file' => 'context.php',
            'description' => 'Develop your app and an addon exactly the same way.'
        ],
        'assets' => [
            'name' => 'Assets',
            'file' => 'assets.php',
            'description' => 'Image resizing and static files delivery are piece of cake.'
        ],
        'html-components' => [
            'name' => 'HTML components',
            'file' => 'htmlComponents.php',
            'description' => 'It\' like template engine, but way more familiar.'
        ],
        'cache' => [
            'name' => 'Cache',
            'file' => 'cache.php',
            'description' => 'Store frequently used data for later usage.'
        ],
        'config' => [
            'name' => 'Config',
            'file' => 'config.php',
            'description' => 'Modify the framework configuration or add your own options.'
        ],
        'request' => [
            'name' => 'Request',
            'file' => 'request.php',
            'description' => 'All the information you need about the current HTTP request.'
        ],
        'hooks' => [
            'name' => 'Hooks',
            'file' => 'hooks.php',
            'description' => 'Get your code called when something of interest happens.'
        ],
        'api' => [
            'name' => 'API',
            'file' => 'api.php',
            'description' => 'A full list of the Bear Framework objects'
        ]
    ];
    static public $articles = [
        'why-you-need-a-framework' => [
            'name' => 'Why you need a framework?',
            'file' => 'whyYouNeedAFramework.php',
            'description' => 'The short answer is: you\'ll do a better job, faster.'
        ],
        'the-philosophy-behind-bear-framework' => [
            'name' => 'The philosophy behind Bear Framework',
            'file' => 'thePhilosophyBehindBearFramework.php',
            'description' => 'Bear Framework is not just a new PHP framework.'
        ],
        'what-bear-framework-is' => [
            'name' => 'What Bear Framework is?',
            'file' => 'whatBearFrameworkIs.php',
            'description' => 'Learn what you should expect from Bear Framework.'
        ],
        'what-bear-framework-is-not' => [
            'name' => 'What Bear Framework is not?',
            'file' => 'whatBearFrameworkIsNot.php',
            'description' => 'You\'ll be glad we don\'t have some \'features\'.'
        ],
        'performance-comparison' => [
            'name' => 'Performance comparison',
            'file' => 'performanceComparison.php',
            'description' => 'Bear Framework is powerful and faster than the competition.'
        ]
    ];
    static $performanceComparison = [
        ['Bear Framework v0.6.2', 1031],
        ['Code Igniter v3.0.4', 513],
        ['Slim Framework v3.0.0', 395],
        ['Lumen v5.2.4', 257],
        ['Yii Framework v1.1.17', 225],
        ['Cake PHP v3.2', 107],
        ['Laravel v5.2.14', 72],
        ['Symfony v3.0.2', 44]
    ];
    static private $apiCache = null;

    /**
     * 
     * @param string $code
     * @return array|boolean
     */
    static function getDocumentationTopic($code)
    {
        if (isset(self::$documentationTopics[$code])) {
            $topic = self::$documentationTopics[$code];
            $topic['code'] = $code;
            return $topic;
        }
        return false;
    }

    /**
     * 
     * @param string $code
     * @return array|boolean
     */
    static function getNextDocumentationTopic($code)
    {
        $returnNext = false;
        foreach (self::$documentationTopics as $_code => $topic) {
            if ($returnNext) {
                $topic['code'] = $_code;
                return $topic;
            }
            if ($_code === $code) {
                $returnNext = true;
                continue;
            }
        }
        return false;
    }

    /**
     * 
     * @return array
     */
    static function getAPI()
    {
        if (self::$apiCache === null) {
            $app = App::$instance;
            self::$apiCache = include $app->config->appDir . 'data/api/list.php';
        }
        return self::$apiCache;
    }

    /**
     * 
     * @param string $code
     * @return boolean
     */
    static function apiExists($code)
    {
        $data = self::getAPI();
        return isset($data[$code]);
    }

}
