<?php
return array (
  'name' => 'App\\Cache',
  'namespace' => 'App',
  'comment' => 
  array (
    'description' => 'Data cache',
    'type' => NULL,
    'parameters' => 
    array (
    ),
    'return' => NULL,
    'exceptions' => 
    array (
    ),
  ),
  'constants' => 
  array (
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    0 => 
    array (
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
      'isStatic' => true,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    1 => 
    array (
      'name' => 'exists',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'key',
          'value' => NULL,
          'type' => 'mixed',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Checks if the data for the key specified exists',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'key',
            'type' => 'mixed',
            'description' => 'The data key',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => 'TRUE if the data for the specified key exists in the cache. FALSE otherwise.',
        ),
        'exceptions' => 
        array (
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
    ),
    2 => 
    array (
      'name' => 'set',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'key',
          'value' => NULL,
          'type' => 'mixed',
          'isOptional' => false,
        ),
        1 => 
        array (
          'name' => 'value',
          'value' => NULL,
          'type' => 'mixed',
          'isOptional' => false,
        ),
        2 => 
        array (
          'name' => 'ttl',
          'value' => 0,
          'type' => 'int',
          'isOptional' => true,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Saves data in the cache',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'key',
            'type' => 'mixed',
            'description' => 'The data key',
          ),
          1 => 
          array (
            'name' => 'value',
            'type' => 'mixed',
            'description' => 'The data',
          ),
          2 => 
          array (
            'name' => 'ttl',
            'type' => 'int',
            'description' => 'Time in seconds to stay in the cache. Zero mean no expiration.',
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
      'isStatic' => true,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    3 => 
    array (
      'name' => 'delete',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'key',
          'value' => NULL,
          'type' => 'mixed',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Deletes data fom the cache',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'key',
            'type' => 'mixed',
            'description' => 'The data key',
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
      'isStatic' => true,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
  ),
  'type' => 'class',
);