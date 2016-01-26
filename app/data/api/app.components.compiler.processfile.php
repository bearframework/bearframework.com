<?php
return array (
  'name' => 'processFile',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'file',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
    1 => 
    array (
      'name' => 'attributes',
      'value' => 
      array (
      ),
      'type' => 'array',
      'isOptional' => true,
    ),
    2 => 
    array (
      'name' => 'innerHTML',
      'value' => '',
      'type' => 'string',
      'isOptional' => true,
    ),
  ),
  'comment' => 
  array (
    'description' => '',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'file',
        'type' => 'string',
        'description' => NULL,
      ),
      1 => 
      array (
        'name' => 'attributes',
        'type' => 'array',
        'description' => NULL,
      ),
      2 => 
      array (
        'name' => 'innerHTML',
        'type' => 'string',
        'description' => NULL,
      ),
    ),
    'return' => 
    array (
      'type' => 'string',
      'description' => NULL,
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
  'type' => 'method',
  'class' => 'App\\Components\\Compiler',
);