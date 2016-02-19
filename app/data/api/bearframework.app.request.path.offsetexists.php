<?php
return array (
  'name' => 'offsetExists',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'offset',
      'value' => NULL,
      'type' => 'int',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Checks if a part part for the current index specified exists',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'offset',
        'type' => 'int',
        'description' => 'The index of the path part',
      ),
    ),
    'return' => 
    array (
      'type' => 'boolean',
      'description' => 'TRUE if the path part exists. FALSE otherwise.',
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
  'class' => 'BearFramework\\App\\Request\\Path',
);