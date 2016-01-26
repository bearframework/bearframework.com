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
    'description' => 'Adds alias to a specifil source',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'alias',
        'type' => 'string',
        'description' => 'The alias',
      ),
      1 => 
      array (
        'name' => 'original',
        'type' => 'string',
        'description' => 'The original source',
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
  'class' => 'App\\Components',
);