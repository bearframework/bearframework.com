<?php
return array (
  'name' => 'App\\Context',
  'namespace' => 'App',
  'comment' => 
  array (
    'description' => 'Provides information about addons and application location and utility functions',
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
    1 => 
    array (
      'name' => 'assets',
      'value' => NULL,
      'type' => '\\App\\Context\\Assets',
      'comment' => 
      array (
        'description' => 'Provides utility functions for assets in the current context dir',
        'type' => '\\App\\Context\\Assets',
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
      'name' => 'classes',
      'value' => NULL,
      'type' => '\\App\\Context\\Classes',
      'comment' => 
      array (
        'description' => 'Provides functionaly for autoloading classes in the current context',
        'type' => '\\App\\Context\\Classes',
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
        'description' => 'The constructor',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'dir',
            'type' => 'string',
            'description' => 'The directory where the current addon or application are located',
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
      'name' => 'load',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'filename',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Loads a file from the current context dir',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'type' => 'string',
            'description' => 'The filename to be loaded',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => NULL,
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