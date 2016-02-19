<?php
return array (
  'name' => '__construct',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'path',
      'value' => '',
      'type' => 'string',
      'isOptional' => true,
    ),
  ),
  'comment' => 
  array (
    'description' => 'The constructor',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'path',
        'type' => 'string',
        'description' => 'The request path',
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
  'isConstructor' => true,
  'isDestructor' => false,
  'type' => 'method',
  'class' => 'BearFramework\\App\\Request\\Path',
);