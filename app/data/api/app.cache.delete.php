<?php
return array (
  'name' => 'delete',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'key',
      'value' => NULL,
      'type' => 'mixed',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Deletes data fom the cache',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'key',
        'type' => 'mixed',
        'description' => 'The data key',
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
  'isStatic' => true,
  'isAbstract' => false,
  'isFinal' => false,
  'isConstructor' => false,
  'isDestructor' => false,
  'type' => 'method',
  'class' => 'App\\Cache',
);