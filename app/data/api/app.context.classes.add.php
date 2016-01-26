<?php
return array (
  'name' => 'add',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'class',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
    1 => 
    array (
      'name' => 'filename',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Registers a class for autoloading in the current context',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'class',
        'type' => 'string',
        'description' => 'The class name',
      ),
      1 => 
      array (
        'name' => 'filename',
        'type' => 'string',
        'description' => 'The filename that contains the class',
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
  'class' => 'App\\Context\\Classes',
);