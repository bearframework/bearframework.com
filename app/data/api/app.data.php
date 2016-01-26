<?php
return array (
  'name' => 'App\\Data',
  'namespace' => 'App',
  'comment' => 
  array (
    'description' => 'Data storage',
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
      'name' => 'instance',
      'value' => NULL,
      'type' => 'type',
      'comment' => 
      array (
        'description' => 'The instance of the data storage library',
        'type' => 'type',
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
      'isStatic' => false,
    ),
  ),
  'methods' => 
  array (
    0 => 
    array (
      'name' => 'getInstance',
      'parameters' => 
      array (
      ),
      'comment' => 
      array (
        'description' => 'Returns the instance of the data storage library',
        'type' => NULL,
        'parameters' => 
        array (
        ),
        'return' => 
        array (
          'type' => '\\ObjectStorage',
          'description' => 'The instance of the data storage library',
        ),
        'exceptions' => 
        array (
          0 => '\\Exception',
        ),
      ),
      'isPrivate' => true,
      'isProtected' => false,
      'isPublic' => false,
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    1 => 
    array (
      'name' => 'get',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'parameters',
          'value' => NULL,
          'type' => 'array',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Retrieves object data for specified key',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'parameters',
            'type' => 'array',
            'description' => 'Parameters',
          ),
        ),
        'return' => 
        array (
          'type' => 'array',
          'description' => 'Array containing the requested parts of the object',
        ),
        'exceptions' => 
        array (
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
    ),
    2 => 
    array (
      'name' => 'set',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'parameters',
          'value' => NULL,
          'type' => 'array',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Saves data',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'parameters',
            'type' => 'array',
            'description' => 'Parameters',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => 'TRUE on success. FALSE otherwise.',
        ),
        'exceptions' => 
        array (
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
    ),
    3 => 
    array (
      'name' => 'append',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'parameters',
          'value' => NULL,
          'type' => 'array',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Appends data to the object specified. If the object does not exist it will be created.',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'parameters',
            'type' => 'array',
            'description' => 'Parameters',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => 'TRUE on success. FALSE otherwise.',
        ),
        'exceptions' => 
        array (
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
    ),
    4 => 
    array (
      'name' => 'duplicate',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'parameters',
          'value' => NULL,
          'type' => 'array',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Creates a copy of the object specified',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'parameters',
            'type' => 'array',
            'description' => 'Parameters',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => 'TRUE on success. FALSE otherwise.',
        ),
        'exceptions' => 
        array (
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
    ),
    5 => 
    array (
      'name' => 'rename',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'parameters',
          'value' => NULL,
          'type' => 'array',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Changes the key of the object specified',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'parameters',
            'type' => 'array',
            'description' => 'Parameters',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => 'TRUE on success. FALSE otherwise.',
        ),
        'exceptions' => 
        array (
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
    ),
    6 => 
    array (
      'name' => 'delete',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'parameters',
          'value' => NULL,
          'type' => 'array',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Deletes the object specified and it\'s metadata',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'parameters',
            'type' => 'array',
            'description' => 'Parameters',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => 'TRUE on success. FALSE otherwise.',
        ),
        'exceptions' => 
        array (
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
    ),
    7 => 
    array (
      'name' => 'search',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'parameters',
          'value' => NULL,
          'type' => 'array',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Searches for items',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'parameters',
            'type' => 'array',
            'description' => 'Parameters',
          ),
        ),
        'return' => 
        array (
          'type' => 'array',
          'description' => 'List of all items matching che search criteria',
        ),
        'exceptions' => 
        array (
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
    ),
    8 => 
    array (
      'name' => 'makePublic',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'parameters',
          'value' => NULL,
          'type' => 'array',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Marks object as public so it can be accessed as an asset',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'parameters',
            'type' => 'array',
            'description' => 'Parameters',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => 'TRUE on success. FALSE otherwise.',
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
    ),
    9 => 
    array (
      'name' => 'makePrivate',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'parameters',
          'value' => NULL,
          'type' => 'array',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Marks object as private so it cannot be accessed as an asset',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'parameters',
            'type' => 'array',
            'description' => 'Parameters',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => 'TRUE on success. FALSE otherwise.',
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
    ),
    10 => 
    array (
      'name' => 'isPublic',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'key',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Checks if an object is marked as public',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'key',
            'type' => 'string',
            'description' => 'The object key',
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => 'TRUE if public. FALSE otherwise.',
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
    ),
    11 => 
    array (
      'name' => 'getFilename',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'key',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Returns the filename of the object key specified',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'key',
            'type' => 'string',
            'description' => 'The object key',
          ),
        ),
        'return' => 
        array (
          'type' => 'The',
          'description' => 'filename of the object key specified',
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
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
  ),
  'type' => 'class',
);