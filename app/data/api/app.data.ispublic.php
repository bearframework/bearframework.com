<?php
return array (
  'name' => 'isPublic',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'key',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Checks if an object is marked as public',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'key',
        'type' => 'string',
        'description' => 'The object key',
      ),
    ),
    'return' => 
    array (
      'type' => 'boolean',
      'description' => 'TRUE if public. FALSE otherwise.',
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
  'class' => 'App\\Data',
);