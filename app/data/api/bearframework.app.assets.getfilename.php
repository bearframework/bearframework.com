<?php
return array (
  'name' => 'getFilename',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'path',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Returns the local filename for a given URL path',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'path',
        'type' => 'string',
        'description' => 'The path part of the asset url',
      ),
    ),
    'return' => 
    array (
      'type' => 'boolean|string',
      'description' => 'The localfileneme or FALSE if file does not exists',
    ),
    'exceptions' => 
    array (
      0 => '\\InvalidArgumentException',
      1 => '\\BearFramework\\App\\InvalidConfigOptionException',
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