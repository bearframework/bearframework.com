<?php
return array (
  'name' => 'App',
  'namespace' => '',
  'comment' => 
  array (
    'description' => 'The is the class used to instantiate and configure you application.',
    'type' => NULL,
    'parameters' => 
    array (
    ),
    'return' => NULL,
    'exceptions' => 
    array (
    ),
  ),
  'constants' => 
  array (
    0 => 
    array (
      'name' => 'VERSION',
      'value' => '0.5.0',
      'type' => 'string',
    ),
  ),
  'properties' => 
  array (
    0 => 
    array (
      'name' => 'config',
      'value' => NULL,
      'type' => 'App\\Config',
      'comment' => 
      array (
        'description' => 'The application configuration',
        'type' => 'App\\Config',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
    ),
    1 => 
    array (
      'name' => 'request',
      'value' => NULL,
      'type' => 'App\\Request',
      'comment' => 
      array (
        'description' => 'Provides information about the current request',
        'type' => 'App\\Request',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
    ),
    2 => 
    array (
      'name' => 'routes',
      'value' => NULL,
      'type' => 'App\\Routes',
      'comment' => 
      array (
        'description' => 'Stores the data about the defined routes callbacks',
        'type' => 'App\\Routes',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
    ),
    3 => 
    array (
      'name' => 'log',
      'value' => NULL,
      'type' => 'App\\Log',
      'comment' => 
      array (
        'description' => 'Provides logging functionlity',
        'type' => 'App\\Log',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
    ),
    4 => 
    array (
      'name' => 'components',
      'value' => NULL,
      'type' => 'App\\Components',
      'comment' => 
      array (
        'description' => 'HTML Server Components utilities',
        'type' => 'App\\Components',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
    ),
    5 => 
    array (
      'name' => 'addons',
      'value' => NULL,
      'type' => 'App\\Addons',
      'comment' => 
      array (
        'description' => 'Provides a way to enable addons and manage their options',
        'type' => 'App\\Addons',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
    ),
    6 => 
    array (
      'name' => 'hooks',
      'value' => NULL,
      'type' => 'App\\Hooks',
      'comment' => 
      array (
        'description' => 'Provides functionaly for notifications and data requests',
        'type' => 'App\\Hooks',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
    ),
    7 => 
    array (
      'name' => 'assets',
      'value' => NULL,
      'type' => 'App\\Assets',
      'comment' => 
      array (
        'description' => 'Provides utility functions for assets',
        'type' => 'App\\Assets',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
    ),
    8 => 
    array (
      'name' => 'data',
      'value' => NULL,
      'type' => 'App\\Data',
      'comment' => 
      array (
        'description' => 'Data storage',
        'type' => 'App\\Data',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
    ),
    9 => 
    array (
      'name' => 'cache',
      'value' => NULL,
      'type' => 'App\\Cache',
      'comment' => 
      array (
        'description' => 'Data cache',
        'type' => 'App\\Cache',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
    ),
    10 => 
    array (
      'name' => 'classes',
      'value' => 
      array (
      ),
      'type' => 'App\\Classes',
      'comment' => 
      array (
        'description' => 'Provides functionaly for autoloading classes',
        'type' => 'App\\Classes',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
    ),
    11 => 
    array (
      'name' => 'instance',
      'value' => NULL,
      'type' => 'App',
      'comment' => 
      array (
        'description' => 'The instance of the App object. Only one can be created.',
        'type' => 'App',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => true,
    ),
  ),
  'methods' => 
  array (
    0 => 
    array (
      'name' => '__construct',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'config',
          'value' => 
          array (
          ),
          'type' => 'array',
          'isOptional' => true,
        ),
      ),
      'comment' => 
      array (
        'description' => 'The constructor',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'config',
            'type' => 'array',
            'description' => NULL,
          ),
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => true,
      'isDestructor' => false,
    ),
    1 => 
    array (
      'name' => 'load',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'filename',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Loads a file',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'type' => 'string',
            'description' => 'The filename to be loaded',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => 'TRUE if file loaded successfully. Otherwise returns FALSE.',
        ),
        'exceptions' => 
        array (
          0 => '\\InvalidArgumentException',
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    2 => 
    array (
      'name' => 'getUrl',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'path',
          'value' => '/',
          'type' => 'string',
          'isOptional' => true,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Constructs a url for the path specified',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'path',
            'type' => 'string',
            'description' => 'The path',
          ),
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => 'Absolute URL containing the base URL plus the path given',
        ),
        'exceptions' => 
        array (
          0 => '\\InvalidArgumentException',
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    3 => 
    array (
      'name' => 'run',
      'parameters' => 
      array (
      ),
      'comment' => 
      array (
        'description' => 'Call this method to start the application. This method outputs the response.',
        'type' => NULL,
        'parameters' => 
        array (
        ),
        'return' => 
        array (
          'type' => 'void',
          'description' => 'No value is returned',
        ),
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    4 => 
    array (
      'name' => 'respond',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'response',
          'value' => NULL,
          'type' => 'App\\Response',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Outputs a response',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'response',
            'type' => 'App\\Response',
            'description' => 'The reponse object to output',
          ),
        ),
        'return' => 
        array (
          'type' => 'void',
          'description' => 'No value is returned',
        ),
        'exceptions' => 
        array (
          0 => '\\InvalidArgumentException',
        ),
      ),
      'isPrivate' => false,
      'isProtected' => false,
      'isPublic' => true,
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    5 => 
    array (
      'name' => '__clone',
      'parameters' => 
      array (
      ),
      'comment' => 
      array (
        'description' => 'Prevents multiple app instances',
        'type' => NULL,
        'parameters' => 
        array (
        ),
        'return' => 
        array (
          'type' => 'void',
          'description' => 'No value is returned',
        ),
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => true,
      'isProtected' => false,
      'isPublic' => false,
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    6 => 
    array (
      'name' => '__wakeup',
      'parameters' => 
      array (
      ),
      'comment' => 
      array (
        'description' => 'Prevents multiple app instances',
        'type' => NULL,
        'parameters' => 
        array (
        ),
        'return' => 
        array (
          'type' => 'void',
          'description' => 'No value is returned',
        ),
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => true,
      'isProtected' => false,
      'isPublic' => false,
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
  ),
  'type' => 'class',
);