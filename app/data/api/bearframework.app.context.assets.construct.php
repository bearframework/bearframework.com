<?php
return array (
  'name' => '__construct',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'dir',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'The constructor',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'dir',
        'type' => 'string',
        'description' => 'The directory where the current addon or application are located',
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
  'class' => 'BearFramework\\App\\Context\\Assets',
);