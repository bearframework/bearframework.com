<?php
return array (
  'name' => 'App\\Utilities\\Graphics',
  'namespace' => 'App\\Utilities',
  'comment' => 
  array (
    'description' => 'Graphics utilities',
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
      'name' => 'getSize',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'sourceFileName',
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
            'name' => 'sourceFileName',
            'type' => 'string',
            'description' => 'The filename of the image',
          ),
        ),
        'return' => 
        array (
          'type' => 'array',
          'description' => 'The size of the image specified',
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
      'isStatic' => true,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    1 => 
    array (
      'name' => 'resize',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'sourceFileName',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
        1 => 
        array (
          'name' => 'destinationFileName',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
        2 => 
        array (
          'name' => 'width',
          'value' => NULL,
          'type' => 'int',
          'isOptional' => false,
        ),
        3 => 
        array (
          'name' => 'height',
          'value' => NULL,
          'type' => 'int',
          'isOptional' => false,
        ),
        4 => 
        array (
          'name' => 'outputType',
          'value' => NULL,
          'type' => 'string',
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
            'name' => 'sourceFileName',
            'type' => 'string',
            'description' => 'The image file to resize',
          ),
          1 => 
          array (
            'name' => 'destinationFileName',
            'type' => 'string',
            'description' => 'The filename where the result image will be saved',
          ),
          2 => 
          array (
            'name' => 'width',
            'type' => 'int',
            'description' => 'The width of the resized image',
          ),
          3 => 
          array (
            'name' => 'height',
            'type' => 'int',
            'description' => 'The height of the resized image',
          ),
          4 => 
          array (
            'name' => 'outputType',
            'type' => 'string',
            'description' => 'The output type of the resized image',
          ),
        ),
        'return' => 
        array (
          'type' => 'void',
          'description' => 'No value is returned',
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