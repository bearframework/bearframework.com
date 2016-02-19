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
      'name' => 'ttl',
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
        'name' => 'ttl',
        'type' => 'int',
        'description' => 'Time in seconds to stay in the cache. Zero mean no expiration.',
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
  'class' => 'BearFramework\\App\\Cache',
);