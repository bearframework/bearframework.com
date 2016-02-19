<?php
return array (
  'name' => 'load',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'class',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Loads a class if registered',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'class',
        'type' => 'string',
        'description' => NULL,
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
  'class' => 'BearFramework\\App\\Classes',
);