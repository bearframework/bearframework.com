<?php
return array (
  'name' => 'App\\Request',
  'namespace' => 'App',
  'comment' => 
  array (
    'description' => 'Provides information about the current request',
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
      'name' => 'method',
      'value' => '',
      'type' => 'string',
      'comment' => 
      array (
        'description' => 'The request method',
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
      'name' => 'base',
      'value' => '',
      'type' => 'string',
      'comment' => 
      array (
        'description' => 'The base URL of the request',
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
    2 => 
    array (
      'name' => 'path',
      'value' => NULL,
      'type' => 'App\\Request\\Path',
      'comment' => 
      array (
        'description' => 'The path of the request. The path parts can be accessed by their indexes.',
        'type' => 'App\\Request\\Path',
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
      'name' => 'query',
      'value' => NULL,
      'type' => 'App\\Request\\Query',
      'comment' => 
      array (
        'description' => 'The query string of the request. The query parts can be accessed by their names.',
        'type' => 'App\\Request\\Query',
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
      ),
      'comment' => 
      array (
        'description' => 'The constructor',
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
      'isConstructor' => true,
      'isDestructor' => false,
    ),
    1 => 
    array (
      'name' => '__toString',
      'parameters' => 
      array (
      ),
      'comment' => 
      array (
        'description' => 'Returns the full URL of the request',
        'type' => NULL,
        'parameters' => 
        array (
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => 'The full URL of the request',
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
    2 => 
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
        'description' => 'Magic method',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'string',
            'description' => NULL,
          ),
        ),
        'return' => 
        array (
          'type' => 'mixed',
          'description' => NULL,
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
    3 => 
    array (
      'name' => '__set',
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
          'type' => 'mixed',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Magic method',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'string',
            'description' => NULL,
          ),
          1 => 
          array (
            'name' => 'value',
            'type' => 'mixed',
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
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    4 => 
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
        'description' => 'Magic method',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'string',
            'description' => NULL,
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => NULL,
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