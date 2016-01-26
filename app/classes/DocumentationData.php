<?php

class DocumentationData
{

    /**
     * 
     * @param int $type 0 - all, 1 - getting started, 2 - features
     * @return type
     */
    static function getTopics($type = 0)
    {
        $result = [];
        if ($type === 0 || $type === 1) {
            $result = array_merge($result, [
                [
                    'code' => 'download',
                    'name' => 'Download and install',
                    'file' => 'download.php'
                ], [
                    'code' => 'configure',
                    'name' => 'Create and configure your app',
                    'file' => 'configure.php'
                ]
            ]);
        }
        if ($type === 0 || $type === 2) {
            $result = array_merge($result, [
                [
                    'code' => 'routing',
                    'name' => 'Routing',
                    'file' => 'routing.php'
                ], [
                    'code' => 'data',
                    'name' => 'Data',
                    'file' => 'data.php'
                ], [
                    'code' => 'addons',
                    'name' => 'Addons',
                    'file' => 'addons.php'
                ], [
                    'code' => 'logging',
                    'name' => 'Logging',
                    'file' => 'logging.php'
                ], [
                    'code' => 'context',
                    'name' => 'Context',
                    'file' => 'context.php'
                ], [
                    'code' => 'assets',
                    'name' => 'Assets',
                    'file' => 'assets.php'
                ], [
                    'code' => 'html-components',
                    'name' => 'HTML components',
                    'file' => 'htmlComponents.php'
                ], [
                    'code' => 'cache',
                    'name' => 'Cache',
                    'file' => 'cache.php'
                ], [
                    'code' => 'config',
                    'name' => 'Config',
                    'file' => 'config.php'
                ], [
                    'code' => 'request',
                    'name' => 'Request',
                    'file' => 'request.php'
                ], [
                    'code' => 'hooks',
                    'name' => 'Hooks',
                    'file' => 'hooks.php'
                ], [
                    'code' => 'api',
                    'name' => 'API',
                    'file' => 'api.php'
                ]
            ]);
        }
        return $result;
    }

    static function topicExists($code)
    {
        $topics = self::getTopics(0);
        foreach ($topics as $topic) {
            if ($topic['code'] === $code) {
                return true;
            }
        }
        return false;
    }

    static function getTopic($code)
    {
        $topics = self::getTopics(0);
        foreach ($topics as $topic) {
            if ($topic['code'] === $code) {
                return $topic;
            }
        }
        return false;
    }

    static function getNextTopic($code)
    {
        $topics = self::getTopics(0);
        $returnNext = false;
        foreach ($topics as $topic) {
            if ($returnNext) {
                return $topic;
            }
            if ($topic['code'] === $code) {
                $returnNext = true;
                continue;
            }
        }
        return false;
    }

    static function getAPI()
    {
        // todo request cache
        $app = App::$instance;
        $api = include $app->config->appDir . 'data/api/list.php';
        return $api;
    }

    static function apiExists($code)
    {
        $data = self::getAPI();
        return isset($data[$code]);
    }

}
