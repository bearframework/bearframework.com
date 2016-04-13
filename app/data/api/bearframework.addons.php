<?php
return array (
  'name' => 'BearFramework\\Addons',
  'namespace' => 'BearFramework',
  'comment' => 
  array (
    'description' => 'Place to register addons that can be enabled for the application',
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
    0 => 
    array (
      'name' => 'data',
      'value' => 
      array (
      ),
      'type' => 'array',
      'comment' => 
      array (
        'description' => 'Registered addons data',
        'type' => 'array',
        'parameters' => 
        array (
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => true,
      'isProtected' => false,
      'isPublic' => false,
      'isStatic' => true,
    ),
  ),
  'methods' => 
  array (
    0 => 
    array (
      'name' => 'register',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
        1 => 
        array (
          'name' => 'dir',
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
        'description' => 'Registers an addon',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'string',
            'description' => 'The addon name',
          ),
          1 => 
          array (
            'name' => 'dir',
            'type' => 'string',
            'description' => 'The addon location',
          ),
          2 => 
          array (
            'name' => 'options',
            'type' => 'array',
            'description' => 'Addon options',
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
    1 => 
    array (
      'name' => 'exists',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Checks whether addon is registered',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'string',
            'description' => 'The addon name',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => 'TRUE if addon is registered. FALSE otherwise.',
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
    2 => 
    array (
      'name' => 'getDir',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Returns the addon dir',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'string',
            'description' => 'The addon name',
          ),
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => 'The location of the addon',
        ),
        'exceptions' => 
        array (
          0 => '\\Exception',
          1 => '\\InvalidArgumentException',
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
      'name' => 'getOptions',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Returns the addon options',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'name',
            'type' => 'string',
            'description' => 'The addon name',
          ),
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => 'The location of the addon',
        ),
        'exceptions' => 
        array (
          0 => '\\Exception',
          1 => '\\InvalidArgumentException',
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
    4 => 
    array (
      'name' => 'getList',
      'parameters' => 
      array (
      ),
      'comment' => 
      array (
        'description' => 'Returns an array containing the names of all registered addons',
        'type' => NULL,
        'parameters' => 
        array (
        ),
        'return' => 
        array (
          'type' => 'array',
          'description' => 'The names of all registered addons',
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
  ),
  'type' => 'class',
);