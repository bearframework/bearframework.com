<?php
return array (
  'name' => 'add',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'name',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
    1 => 
    array (
      'name' => 'options',
      'value' => 
      array (
      ),
      'type' => 'array',
      'isOptional' => true,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Enables an addon and saves the provided options',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'type' => 'string',
        'description' => 'The name of the addon',
      ),
      1 => 
      array (
        'name' => 'options',
        'type' => 'array',
        'description' => 'The options of the addon',
      ),
    ),
    'return' => 
    array (
      'type' => 'boolean',
      'description' => 'TRUE if successfully loaded. FALSE otherwise.',
    ),
    'exceptions' => 
    array (
      0 => '\\InvalidArgumentException',
      1 => '\\Exception',
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
  'class' => 'BearFramework\\App\\Addons',
);