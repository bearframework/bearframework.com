<?php
return array (
  'name' => 'App\\Addons',
  'namespace' => 'App',
  'comment' => 
  array (
    'description' => 'Provides a way to enable addons and manage their options',
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
      'name' => 'options',
      'value' => 
      array (
      ),
      'type' => 'array',
      'comment' => 
      array (
        'description' => 'Contains the options for the added addons',
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
          'name' => 'id',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
        1 => 
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
        'description' => 'Enables an addon and saves the provided options',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'id',
            'type' => 'string',
            'description' => 'The id of the addon',
          ),
          1 => 
          array (
            'name' => 'options',
            'type' => 'array',
            'description' => 'The options of the addon',
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
          1 => '\\App\\InvalidConfigOptionException',
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
      'name' => 'getOptions',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'id',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Returns the options set for the addon specified',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'id',
            'type' => 'string',
            'description' => NULL,
          ),
        ),
        'return' => 
        array (
          'type' => 'array',
          'description' => 'The options set for the addon specified',
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