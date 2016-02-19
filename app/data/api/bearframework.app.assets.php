<?php
return array (
  'name' => 'BearFramework\\App\\Assets',
  'namespace' => 'BearFramework\\App',
  'comment' => 
  array (
    'description' => 'Provides utility functions for assets',
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
      'name' => 'dirs',
      'value' => 
      array (
      ),
      'type' => 'array',
      'comment' => 
      array (
        'description' => 'Publicly accessible dirs',
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
      'isStatic' => false,
    ),
  ),
  'methods' => 
  array (
    0 => 
    array (
      'name' => 'addDir',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'pathname',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Registers a directory that will be publicly accessible',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'pathname',
            'type' => 'string',
            'description' => 'The directory name',
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
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    1 => 
    array (
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
    ),
    2 => 
    array (
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
    ),
    3 => 
    array (
      'name' => 'getMimeType',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'filename',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Finds the mime type of a filename by checking it\'s extension',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'filename',
            'type' => 'string',
            'description' => 'The filename',
          ),
        ),
        'return' => 
        array (
          'type' => 'string|null',
          'description' => 'The mimetype of the filename specified',
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
  ),
  'type' => 'class',
);