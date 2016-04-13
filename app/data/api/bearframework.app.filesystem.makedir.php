<?php
return array (
  'name' => 'makeDir',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'pathname',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Creates a dir if it\'s missing',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'pathname',
        'type' => 'string',
        'description' => 'The pathname of the dir',
      ),
    ),
    'return' => 
    array (
      'type' => 'void',
      'description' => 'No value is returned',
    ),
    'exceptions' => 
    array (
      0 => '\\Exception',
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
  'class' => 'BearFramework\\App\\Filesystem',
);