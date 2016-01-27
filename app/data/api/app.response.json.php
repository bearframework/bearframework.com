<?php
return array (
  'name' => 'App\\Response\\JSON',
  'namespace' => 'App\\Response',
  'comment' => 
  array (
    'description' => 'Response type that outputs JSON code. The appropriate content type is set.',
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
      'name' => 'content',
      'value' => '',
      'type' => 'string',
      'comment' => 
      array (
        'description' => 'The content of the response',
        'type' => 'string',
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
      'name' => 'headers',
      'value' => 
      array (
      ),
      'type' => 'array',
      'comment' => 
      array (
        'description' => 'The headers of the response',
        'type' => 'array',
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
          'name' => 'content',
          'value' => '',
          'type' => 'string',
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
            'name' => 'content',
            'type' => 'string',
            'description' => 'The content of the response',
          ),
        ),
        'return' => NULL,
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
      'isConstructor' => true,
      'isDestructor' => false,
    ),
    1 => 
    array (
      'name' => 'setMaxAge',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'seconds',
          'value' => NULL,
          'type' => 'int',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Sets the max age attribute of the cache-control header',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'seconds',
            'type' => 'int',
            'description' => 'Time in seconds',
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
    2 => 
    array (
      'name' => 'setContentType',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'mimeType',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Sets the value of the content type header',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'mimeType',
            'type' => 'string',
            'description' => 'The mimetype of the content type header',
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
    3 => 
    array (
      'name' => 'setStatusCode',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'code',
          'value' => NULL,
          'type' => 'int',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Sets the status code of the response header',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'code',
            'type' => 'int',
            'description' => 'The status code of the response header',
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
  ),
  'type' => 'class',
);