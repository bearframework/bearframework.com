<?php
return array (
  'name' => 'App\\Routes',
  'namespace' => 'App',
  'comment' => 
  array (
    'description' => 'Provides functionality for registering callbacks for specific requests and executing them',
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
        'description' => 'Stores the registed callbacks',
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
          'name' => 'pattern',
          'value' => NULL,
          'type' => 'string|string[]',
          'isOptional' => false,
        ),
        1 => 
        array (
          'name' => 'callback',
          'value' => NULL,
          'type' => 'callable',
          'isOptional' => false,
        ),
        2 => 
        array (
          'name' => 'options',
          'value' => 
          array (
            0 => 'GET',
          ),
          'type' => 'array',
          'isOptional' => true,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Registers a request handler',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'pattern',
            'type' => 'string|string[]',
            'description' => 'Path pattern. Can contain "?" (path part) and "*" (matches everything).',
          ),
          1 => 
          array (
            'name' => 'callback',
            'type' => 'callable',
            'description' => 'Function that is expected to return object of type \\App\\Response.',
          ),
          2 => 
          array (
            'name' => 'options',
            'type' => 'array',
            'description' => 'Matching options for methods (GET, HEAD, POST, DELETE, PUT, PATCH, OPTIONS) and protocols (HTTP, HTTPS).',
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
      'name' => 'getResponse',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'request',
          'value' => NULL,
          'type' => 'App\\Request',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Finds the matching callback and returns its result',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'request',
            'type' => 'App\\Request',
            'description' => 'The current request object',
          ),
        ),
        'return' => 
        array (
          'type' => 'mixed',
          'description' => 'The result of the matching callback. NULL if none.',
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