<?php
return array (
  'name' => 'getResponse',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'request',
      'value' => NULL,
      'type' => 'App\\Request',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Finds the matching callback and returns its result',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'request',
        'type' => 'App\\Request',
        'description' => 'The current request object',
      ),
    ),
    'return' => 
    array (
      'type' => 'mixed',
      'description' => 'The result of the matching callback. NULL if none.',
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
  'class' => 'App\\Routes',
);