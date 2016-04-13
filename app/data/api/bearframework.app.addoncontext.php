<?php
return array (
  'name' => 'BearFramework\\App\\AddonContext',
  'namespace' => 'BearFramework\\App',
  'comment' => 
  array (
    'description' => 'Provides information about the addon location and utility functions',
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
      'value' => NULL,
      'type' => 'array',
      'comment' => 
      array (
        'description' => 'The addon options',
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
    1 => 
    array (
      'name' => 'dir',
      'value' => '',
      'type' => 'string',
      'comment' => 
      array (
        'description' => 'The directory where the current addon or application are located',
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
      'name' => 'assets',
      'value' => NULL,
      'type' => '\\BearFramework\\App\\Context\\Assets',
      'comment' => 
      array (
        'description' => 'Provides utility functions for assets in the current context dir',
        'type' => '\\BearFramework\\App\\Context\\Assets',
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
      'name' => 'classes',
      'value' => NULL,
      'type' => '\\BearFramework\\App\\Context\\Classes',
      'comment' => 
      array (
        'description' => 'Provides functionality for autoloading classes in the current context',
        'type' => '\\BearFramework\\App\\Context\\Classes',
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
          'name' => 'dir',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'The constructor',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'dir',
            'type' => 'string',
            'description' => 'The directory where the current addond is located',
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
  ),
  'type' => 'class',
);