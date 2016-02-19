<?php
return array (
  'name' => 'respond',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'response',
      'value' => NULL,
      'type' => 'BearFramework\\App\\Response',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Outputs a response',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'response',
        'type' => 'BearFramework\\App\\Response',
        'description' => 'The response object to output',
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
  'class' => 'BearFramework\\App',
);