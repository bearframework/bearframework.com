<?php
return array (
  'name' => 'add',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'pathname',
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
    'description' => 'Enables an addon and saves the provided options',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'pathname',
        'type' => 'string',
        'description' => 'The directory where the addon index.php file is located',
      ),
      1 => 
      array (
        'name' => 'options',
        'type' => 'array',
        'description' => 'The options of the addon',
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
  'class' => 'BearFramework\\App\\Addons',
);