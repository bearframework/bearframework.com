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
      'name' => 'addons',
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
          'name' => 'pathname',
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
            'name' => 'pathname',
            'type' => 'string',
            'description' => 'The directory where the addon index.php file is located',
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
          1 => '\\BearFramework\\App\\InvalidConfigOptionException',
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