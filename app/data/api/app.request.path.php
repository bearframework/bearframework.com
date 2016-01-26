<?php
return array (
  'name' => 'App\\Request\\Path',
  'namespace' => 'App\\Request',
  'comment' => 
  array (
    'description' => 'Provides information about the request path',
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
      'name' => 'path',
      'value' => '',
      'type' => 'string',
      'comment' => 
      array (
        'description' => 'The request path',
        'type' => 'string',
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
        0 => 
        array (
          'name' => 'path',
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
            'name' => 'path',
            'type' => 'string',
            'description' => 'The request path',
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
        'description' => 'Returns the full path',
        'type' => NULL,
        'parameters' => 
        array (
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => 'The full path',
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
      'name' => 'offsetSet',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'offset',
          'value' => NULL,
          'type' => 'int',
          'isOptional' => false,
        ),
        1 => 
        array (
          'name' => 'value',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Not implemented',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'offset',
            'type' => 'int',
            'description' => NULL,
          ),
          1 => 
          array (
            'name' => 'value',
            'type' => 'string',
            'description' => NULL,
          ),
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
    3 => 
    array (
      'name' => 'offsetExists',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'offset',
          'value' => NULL,
          'type' => 'int',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Checks if a part part for the current index specified exists',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'offset',
            'type' => 'int',
            'description' => 'The index of the path part',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => 'TRUE if the path part exists. FALSE otherwise.',
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
      'name' => 'offsetUnset',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'offset',
          'value' => NULL,
          'type' => 'int',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Not implemented',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'offset',
            'type' => 'int',
            'description' => NULL,
          ),
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
    5 => 
    array (
      'name' => 'offsetGet',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'offset',
          'value' => NULL,
          'type' => 'int',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Returns the path part for the index specified',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'offset',
            'type' => 'int',
            'description' => 'the index of the part part',
          ),
        ),
        'return' => 
        array (
          'type' => 'string|null',
          'description' => 'The path part at the index specified',
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