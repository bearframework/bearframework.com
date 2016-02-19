<?php
return array (
  'name' => 'BearFramework\\App\\Utilities\\Dir',
  'namespace' => 'BearFramework\\App\\Utilities',
  'comment' => 
  array (
    'description' => 'Directory utilities',
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
      'name' => 'make',
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
      'isStatic' => true,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
  ),
  'type' => 'class',
);