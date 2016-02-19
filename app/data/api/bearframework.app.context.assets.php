<?php
return array (
  'name' => 'BearFramework\\App\\Context\\Assets',
  'namespace' => 'BearFramework\\App\\Context',
  'comment' => 
  array (
    'description' => 'Provides utility functions for assets in the current context',
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
        'description' => '',
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
            'description' => 'The directory where the current addon or application are located',
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
      'name' => 'addDir',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'pathname',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Registers a directory that will be publicly accessible relative to the current addon or application location',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'pathname',
            'type' => 'string',
            'description' => 'The directory name',
          ),
        ),
        'return' => 
        array (
          'type' => 'void',
          'description' => 'No value is returned',
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
      'name' => 'getUrl',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'filename',
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
        'description' => 'Returns a public URL for the specified filename in the current context',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'type' => 'string',
            'description' => 'The filename',
          ),
          1 => 
          array (
            'name' => 'options',
            'type' => 'array',
            'description' => 'URL options. You can resize the file by providing "width", "height" or both.',
          ),
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => 'The URL for the specified filename and options',
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