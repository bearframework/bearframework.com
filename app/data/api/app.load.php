<?php
return array (
  'name' => 'load',
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
    'description' => 'Loads a file',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'filename',
        'type' => 'string',
        'description' => 'The filename to be loaded',
      ),
    ),
    'return' => 
    array (
      'type' => 'boolean',
      'description' => 'TRUE if file loaded successfully. Otherwise returns FALSE.',
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
  'class' => 'App',
);