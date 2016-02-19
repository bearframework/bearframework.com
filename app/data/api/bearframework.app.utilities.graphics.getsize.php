<?php
return array (
  'name' => 'getSize',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'sourceFilename',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Returns the size of the image specified',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'sourceFilename',
        'type' => 'string',
        'description' => 'The filename of the image',
      ),
    ),
    'return' => 
    array (
      'type' => 'array[int,',
      'description' => 'int] The size of the image specified',
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
  'class' => 'BearFramework\\App\\Utilities\\Graphics',
);