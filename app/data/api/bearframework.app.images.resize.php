<?php
return array (
  'name' => 'resize',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'sourceFilename',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
    1 => 
    array (
      'name' => 'destinationFilename',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
    2 => 
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
    'description' => 'Resizes a image file',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'sourceFilename',
        'type' => 'string',
        'description' => 'The image file to resize',
      ),
      1 => 
      array (
        'name' => 'destinationFilename',
        'type' => 'string',
        'description' => 'The filename where the result image will be saved',
      ),
      2 => 
      array (
        'name' => 'options',
        'type' => 'array',
        'description' => 'Resize options. You can resize the file by providing "width", "height" or both.',
      ),
    ),
    'return' => 
    array (
      'type' => 'void',
      'description' => 'No value is returned',
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
  'class' => 'BearFramework\\App\\Images',
);