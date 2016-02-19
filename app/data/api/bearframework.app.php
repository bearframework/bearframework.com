<?php
return array (
  'name' => 'BearFramework\\App',
  'namespace' => 'BearFramework',
  'comment' => 
  array (
    'description' => 'The is the class used to instantiate and configure you application.',
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
      'value' => '0.7.0',
      'type' => 'string',
    ),
  ),
  'properties' => 
  array (
    0 => 
    array (
      'name' => 'container',
      'value' => NULL,
      'type' => '\\BearFramework\\App\\ServiceContainer',
      'comment' => 
      array (
        'description' => 'Dependency Injection container',
        'type' => '\\BearFramework\\App\\ServiceContainer',
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
    2 => 
    array (
      'name' => 'initialized',
      'value' => false,
      'type' => 'bool',
      'comment' => 
      array (
        'description' => 'Information about whether the application is initialized',
        'type' => 'bool',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => true,
      'isProtected' => false,
      'isPublic' => false,
      'isStatic' => false,
    ),
  ),
  'methods' => 
  array (
    0 => 
    array (
      'name' => '__construct',
      'parameters' => 
      array (
      ),
      'comment' => 
      array (
        'description' => 'The constructor',
        'type' => NULL,
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
          0 => '\\Exception',
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
      'name' => 'initialize',
      'parameters' => 
      array (
      ),
      'comment' => 
      array (
        'description' => 'Initializes the environment and context data',
        'type' => NULL,
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
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    2 => 
    array (
      'name' => 'initializeEnvironment',
      'parameters' => 
      array (
      ),
      'comment' => 
      array (
        'description' => 'Sets UTF-8 as the default encoding and updates regular expressions limits',
        'type' => NULL,
        'parameters' => 
        array (
        ),
        'return' => NULL,
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
    3 => 
    array (
      'name' => 'initializeErrorHandler',
      'parameters' => 
      array (
      ),
      'comment' => 
      array (
        'description' => 'Initalizes error handling',
        'type' => NULL,
        'parameters' => 
        array (
        ),
        'return' => NULL,
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
    4 => 
    array (
      'name' => 'initializeRequest',
      'parameters' => 
      array (
      ),
      'comment' => 
      array (
        'description' => 'Initializes the request object',
        'type' => NULL,
        'parameters' => 
        array (
        ),
        'return' => NULL,
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
    5 => 
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
    6 => 
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
    7 => 
    array (
      'name' => 'getContext',
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
        'description' => 'Creates a context object for the filename specified',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'type' => 'string',
            'description' => NULL,
          ),
        ),
        'return' => 
        array (
          'type' => '\\BearFramework\\App\\AppContext|\\BearFramework\\App\\AddonContext',
          'description' => 'The context object',
        ),
        'exceptions' => 
        array (
          0 => '\\InvalidArgumentException',
          1 => '\\Exception',
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
    8 => 
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
    9 => 
    array (
      'name' => 'respond',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'response',
          'value' => NULL,
          'type' => 'BearFramework\\App\\Response',
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
            'type' => 'BearFramework\\App\\Response',
            'description' => 'The response object to output',
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
    10 => 
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
          0 => '\\Exception',
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
    11 => 
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
          0 => '\\Exception',
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
    12 => 
    array (
      'name' => '__get',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Returns an object from the dependency injection container',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'string',
            'description' => 'The service name',
          ),
        ),
        'return' => 
        array (
          'type' => 'object',
          'description' => 'Object from the dependency injection container',
        ),
        'exceptions' => 
        array (
          0 => '\\Exception',
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
    13 => 
    array (
      'name' => '__isset',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Returns information about whether the service is added in the dependency injection container',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'string',
            'description' => 'The name of the service',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolen',
          'description' => 'TRUE if services is added. FALSE otherwise.',
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
  ),
  'type' => 'class',
);