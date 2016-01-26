<?php
return array (
  'name' => 'App\\Components',
  'namespace' => 'App',
  'comment' => 
  array (
    'description' => 'HTML Server Components utilities',
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
      'name' => 'aliases',
      'value' => 
      array (
      ),
      'type' => 'array',
      'comment' => 
      array (
        'description' => 'Stores aliases',
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
      'name' => 'addAlias',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'alias',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
        1 => 
        array (
          'name' => 'original',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Adds alias to a specifil source',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'alias',
            'type' => 'string',
            'description' => 'The alias',
          ),
          1 => 
          array (
            'name' => 'original',
            'type' => 'string',
            'description' => 'The original source',
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
      'name' => 'process',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'content',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Runs the compiler over the content specified',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'content',
            'type' => 'string',
            'description' => 'The content to be processed',
          ),
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => 'The processed content',
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
      'name' => 'insertHTML',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'target',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
        1 => 
        array (
          'name' => 'html',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
        2 => 
        array (
          'name' => 'position',
          'value' => 'beforeBodyEnd',
          'type' => 'string',
          'isOptional' => true,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Inserts HTML code (or HTML Component) in the position specified',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'target',
            'type' => 'string',
            'description' => 'The HTML code where the insertion will be made',
          ),
          1 => 
          array (
            'name' => 'html',
            'type' => 'string',
            'description' => 'The HTML code that will be inserted',
          ),
          2 => 
          array (
            'name' => 'position',
            'type' => 'string',
            'description' => 'The position of the insertion',
          ),
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => 'The resulting HTML code (processed)',
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