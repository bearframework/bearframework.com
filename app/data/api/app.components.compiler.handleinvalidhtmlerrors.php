<?php
return array (
  'name' => 'handleInvalidHTMLErrors',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'errorNumber',
      'value' => NULL,
      'type' => 'int',
      'isOptional' => false,
    ),
    1 => 
    array (
      'name' => 'errorMessage',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
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
        'name' => 'errorNumber',
        'type' => 'int',
        'description' => NULL,
      ),
      1 => 
      array (
        'name' => 'errorMessage',
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