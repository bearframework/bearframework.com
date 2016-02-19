<?php
return array (
  'name' => 'get',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'key',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
    1 => 
    array (
      'name' => 'defaultValue',
      'value' => false,
      'type' => 'string',
      'isOptional' => true,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Return the saved data from the cache of the default value specified',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'key',
        'type' => 'string',
        'description' => 'The data key',
      ),
      1 => 
      array (
        'name' => 'defaultValue',
        'type' => 'string',
        'description' => 'The default value which will be returned if the data is missing from the cache',
      ),
    ),
    'return' => 
    array (
      'type' => 'mixed',
      'description' => 'The saved data from the cache of the default value specified',
    ),
    'exceptions' => 
    array (
      0 => '\\BearCMS\\DataCache\\NotFoundException',
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
  'class' => 'BearFramework\\App\\Cache',
);