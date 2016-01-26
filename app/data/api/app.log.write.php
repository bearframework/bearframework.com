<?php
return array (
  'name' => 'write',
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
      'name' => 'data',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
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
        'name' => 'filename',
        'type' => 'string',
        'description' => NULL,
      ),
      1 => 
      array (
        'name' => 'data',
        'type' => 'string',
        'description' => NULL,
      ),
    ),
    'return' => 
    array (
      'type' => 'boolean',
      'description' => NULL,
    ),
    'exceptions' => 
    array (
      0 => '\\Exception',
      1 => '\\InvalidArgumentException',
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
  'class' => 'App\\Log',
);