<?php
return array (
  'name' => 'BearFramework\\App\\Filesystem',
  'namespace' => 'BearFramework\\App',
  'comment' => 
  array (
    'description' => 'Filesystem utilities',
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
  ),
  'methods' => 
  array (
    0 => 
    array (
      'name' => 'makeDir',
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
        'description' => 'Creates a dir if it\'s missing',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'pathname',
            'type' => 'string',
            'description' => 'The pathname of the dir',
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
    1 => 
    array (
      'name' => 'makeFileDir',
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
        'description' => 'Creates the dir for the filename specified if it\'s missing',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'type' => 'string',
            'description' => 'The filename',
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
  ),
  'type' => 'class',
);