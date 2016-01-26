<?php
return array (
  'name' => 'process',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'content',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Runs the compiler over the content specified',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'content',
        'type' => 'string',
        'description' => 'The content to be processed',
      ),
    ),
    'return' => 
    array (
      'type' => 'string',
      'description' => 'The processed content',
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