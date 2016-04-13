<?php
return array (
  'name' => 'BearFramework\\App\\Urls',
  'namespace' => 'BearFramework\\App',
  'comment' => 
  array (
    'description' => 'URLs utilities',
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
          'name' => 'path',
          'value' => '/',
          'type' => 'string',
          'isOptional' => true,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Constructs a url for the path specified',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'path',
            'type' => 'string',
            'description' => 'The path',
          ),
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => 'Absolute URL containing the base URL plus the path given',
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