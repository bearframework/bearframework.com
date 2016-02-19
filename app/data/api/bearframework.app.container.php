<?php
return array (
  'name' => 'BearFramework\\App\\Container',
  'namespace' => 'BearFramework\\App',
  'comment' => 
  array (
    'description' => 'Dependency Injection container',
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
  ),
  'properties' => 
  array (
    0 => 
    array (
      'name' => 'data',
      'value' => 
      array (
      ),
      'type' => 'array',
      'comment' => 
      array (
        'description' => 'Stores added data',
        'type' => 'array',
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
      'name' => 'add',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
        1 => 
        array (
          'name' => 'value',
          'value' => NULL,
          'type' => 'string|object|callable',
          'isOptional' => false,
        ),
        2 => 
        array (
          'name' => 'options',
          'value' => 
          array (
          ),
          'type' => 'array',
          'isOptional' => true,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Registeres a value for the specified name',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'string',
            'description' => 'The service name.',
          ),
          1 => 
          array (
            'name' => 'value',
            'type' => 'string|object|callable',
            'description' => 'The object that will be returned when requested.',
          ),
          2 => 
          array (
            'name' => 'options',
            'type' => 'array',
            'description' => 'Array options. Currently there is only one - singleton',
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
    1 => 
    array (
      'name' => 'get',
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
        'description' => 'Returns a object and returns it',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'string',
            'description' => 'The service name.',
          ),
        ),
        'return' => 
        array (
          'type' => 'object',
          'description' => 'The object added for the name specified',
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
    2 => 
    array (
      'name' => 'has',
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
        'description' => 'Returns information about whether the service is added',
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
  ),
  'type' => 'class',
);