<?php
return array (
  'name' => 'addDir',
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
    'description' => 'Registers a directory that will be publicly accessible',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'pathname',
        'type' => 'string',
        'description' => 'The directory name',
      ),
    ),
    'return' => 
    array (
      'type' => 'void',
      'description' => 'No value is returned',
    ),
    'exceptions' => 
    array (
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
  'class' => 'BearFramework\\App\\Assets',
);