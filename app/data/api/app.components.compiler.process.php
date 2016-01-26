<?php
return array (
  'name' => 'process',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'html',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Process (merge) components',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'html',
        'type' => 'string',
        'description' => NULL,
      ),
    ),
    'return' => 
    array (
      'type' => 'string',
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