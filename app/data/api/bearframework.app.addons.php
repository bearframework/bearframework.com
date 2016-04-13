<?php
return array (
  'name' => 'BearFramework\\App\\Addons',
  'namespace' => 'BearFramework\\App',
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
      'name' => 'data',
      'value' => 
      array (
      ),
      'type' => 'array',
      'comment' => 
      array (
        'description' => 'Added addons',
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
            'name' => 'name',
            'type' => 'string',
            'description' => 'The name of the addon',
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
          'type' => 'boolean',
          'description' => 'TRUE if successfully loaded. FALSE otherwise.',
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
    1 => 
    array (
      'name' => 'getList',
      'parameters' => 
      array (
      ),
      'comment' => 
      array (
        'description' => 'Returns list of the added addons',
        'type' => NULL,
        'parameters' => 
        array (
        ),
        'return' => 
        array (
          'type' => 'array',
          'description' => 'List of the added addons',
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