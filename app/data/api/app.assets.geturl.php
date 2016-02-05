<?php
return array (
  'name' => 'getUrl',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'filename',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
    1 => 
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
    'description' => 'Returns a public URL for the specified filename',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'filename',
        'type' => 'string',
        'description' => 'The filename',
      ),
      1 => 
      array (
        'name' => 'options',
        'type' => 'array',
        'description' => 'URL options. You can resize the file by providing "width", "height" or both.',
      ),
    ),
    'return' => 
    array (
      'type' => 'string',
      'description' => 'The URL for the specified filename and options',
    ),
    'exceptions' => 
    array (
      0 => '\\InvalidArgumentException',
      1 => '\\App\\InvalidConfigOptionException',
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
  'class' => 'App\\Assets',
);