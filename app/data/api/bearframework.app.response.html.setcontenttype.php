<?php
return array (
  'name' => 'setContentType',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'mimeType',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Sets the value of the content type header',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'mimeType',
        'type' => 'string',
        'description' => 'The mimetype of the content type header',
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
  'class' => 'BearFramework\\App\\Response\\HTML',
);