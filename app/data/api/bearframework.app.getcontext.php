<?php
return array (
  'name' => 'getContext',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'filename',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Creates a context object for the filename specified',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'filename',
        'type' => 'string',
        'description' => NULL,
      ),
    ),
    'return' => 
    array (
      'type' => '\\BearFramework\\App\\AppContext|\\BearFramework\\App\\AddonContext',
      'description' => 'The context object',
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
  'class' => 'BearFramework\\App',
);