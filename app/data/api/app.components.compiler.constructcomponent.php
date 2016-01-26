<?php
return array (
  'name' => 'constructComponent',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'attributes',
      'value' => 
      array (
      ),
      'type' => 'array',
      'isOptional' => true,
    ),
    1 => 
    array (
      'name' => 'innerHTML',
      'value' => '',
      'type' => 'string',
      'isOptional' => true,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Constructs a Component object',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'attributes',
        'type' => 'array',
        'description' => 'The attributes of the component tag',
      ),
      1 => 
      array (
        'name' => 'innerHTML',
        'type' => 'string',
        'description' => 'The innerHTML of the component tag',
      ),
    ),
    'return' => 
    array (
      'type' => '\\App\\Component',
      'description' => 'A component object',
    ),
    'exceptions' => 
    array (
    ),
  ),
  'isPrivate' => false,
  'isProtected' => true,
  'isPublic' => false,
  'isStatic' => false,
  'isAbstract' => false,
  'isFinal' => false,
  'isConstructor' => false,
  'isDestructor' => false,
  'type' => 'method',
  'class' => 'App\\Components\\Compiler',
);