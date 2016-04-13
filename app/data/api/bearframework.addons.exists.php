<?php
return array (
  'name' => 'exists',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'name',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Checks whether addon is registered',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'type' => 'string',
        'description' => 'The addon name',
      ),
    ),
    'return' => 
    array (
      'type' => 'boolean',
      'description' => 'TRUE if addon is registered. FALSE otherwise.',
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
  'class' => 'BearFramework\\Addons',
);