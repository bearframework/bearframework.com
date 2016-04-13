<?php
return array (
  'name' => 'set',
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