<?php
return array (
  'name' => 'getOptions',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Returns the options set for the addon specified',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'id',
        'type' => 'string',
        'description' => NULL,
      ),
    ),
    'return' => 
    array (
      'type' => 'array',
      'description' => 'The options set for the addon specified',
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
  'class' => 'App\\Addons',
);