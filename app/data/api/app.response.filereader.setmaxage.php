<?php
return array (
  'name' => 'setMaxAge',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'seconds',
      'value' => NULL,
      'type' => 'int',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Sets the max age attribute of the cache-control header',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'seconds',
        'type' => 'int',
        'description' => 'Time in seconds',
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
  'class' => 'App\\Response\\FileReader',
);