<?php
return array (
  'name' => 'makeFileDir',
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
    'description' => 'Creates the dir for the filename specified if it\'s missing',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'filename',
        'type' => 'string',
        'description' => 'The filename',
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