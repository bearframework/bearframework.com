<?php
return array (
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
      'name' => 'value',
      'value' => NULL,
      'type' => 'string|object|callable',
      'isOptional' => false,
    ),
    2 => 
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
    'description' => 'Registeres a value for the specified name',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'type' => 'string',
        'description' => 'The service name.',
      ),
      1 => 
      array (
        'name' => 'value',
        'type' => 'string|object|callable',
        'description' => 'The object that will be returned when requested.',
      ),
      2 => 
      array (
        'name' => 'options',
        'type' => 'array',
        'description' => 'Array options. Currently there is only one - singleton',
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
  'type' => 'method',
  'class' => 'BearFramework\\App\\Container',
);