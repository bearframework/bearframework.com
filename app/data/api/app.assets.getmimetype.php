<?php
return array (
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
    'description' => 'Finds the mimetype of a filename by checking it\'s extension',
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