<?php
return array (
  'name' => 'set',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'key',
      'value' => NULL,
      'type' => 'mixed',
      'isOptional' => false,
    ),
    1 => 
    array (
      'name' => 'value',
      'value' => NULL,
      'type' => 'mixed',
      'isOptional' => false,
    ),
    2 => 
    array (
      'name' => 'time',
      'value' => 0,
      'type' => 'int',
      'isOptional' => true,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Saves data in the cache',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'key',
        'type' => 'mixed',
        'description' => 'The data key',
      ),
      1 => 
      array (
        'name' => 'value',
        'type' => 'mixed',
        'description' => 'The data',
      ),
      2 => 
      array (
        'name' => 'time',
        'type' => 'int',
        'description' => 'Expiration time of the data in seconds relative to the current time. Zero mean no expiration.',
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
  'isStatic' => true,
  'isAbstract' => false,
  'isFinal' => false,
  'isConstructor' => false,
  'isDestructor' => false,
  'type' => 'method',
  'class' => 'App\\Cache',
);