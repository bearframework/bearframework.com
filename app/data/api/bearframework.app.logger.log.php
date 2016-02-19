<?php
return array (
  'name' => 'log',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'level',
      'value' => NULL,
      'type' => 'mixed',
      'isOptional' => false,
    ),
    1 => 
    array (
      'name' => 'message',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
    2 => 
    array (
      'name' => 'context',
      'value' => 
      array (
      ),
      'type' => 'array',
      'isOptional' => true,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Appends data to the file specified. The file will be created if not exists.',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'level',
        'type' => 'mixed',
        'description' => NULL,
      ),
      1 => 
      array (
        'name' => 'message',
        'type' => 'string',
        'description' => NULL,
      ),
      2 => 
      array (
        'name' => 'context',
        'type' => 'array',
        'description' => NULL,
      ),
    ),
    'return' => 
    array (
      'type' => 'boolean',
      'description' => 'TRUE if data is suceessfully written. FALSE otherwise.',
    ),
    'exceptions' => 
    array (
      0 => '\\InvalidArgumentException',
      1 => '\\BearFramework\\App\\InvalidConfigOptionException',
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
  'class' => 'BearFramework\\App\\Logger',
);