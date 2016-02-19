<?php
return array (
  'name' => 'makePrivate',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'parameters',
      'value' => NULL,
      'type' => 'array',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Marks object as private, so it cannot be accessed as an asset',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'parameters',
        'type' => 'array',
        'description' => 'Parameters',
      ),
    ),
    'return' => 
    array (
      'type' => 'boolean',
      'description' => 'TRUE on success. FALSE otherwise.',
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
  'class' => 'BearFramework\\App\\Data',
);