<?php
return array (
  'name' => 'setStatusCode',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'code',
      'value' => NULL,
      'type' => 'int',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Sets the status code of the response header',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'code',
        'type' => 'int',
        'description' => 'The status code of the response header',
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
  'class' => 'BearFramework\\App\\Response\\Text',
);