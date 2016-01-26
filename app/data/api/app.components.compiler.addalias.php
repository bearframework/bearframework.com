<?php
return array (
  'name' => 'addAlias',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'alias',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
    1 => 
    array (
      'name' => 'original',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Registers an alias',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'alias',
        'type' => 'string',
        'description' => NULL,
      ),
      1 => 
      array (
        'name' => 'original',
        'type' => 'string',
        'description' => NULL,
      ),
    ),
    'return' => NULL,
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