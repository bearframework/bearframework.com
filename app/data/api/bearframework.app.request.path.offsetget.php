<?php
return array (
  'name' => 'offsetGet',
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
    'description' => 'Returns the path part for the index specified',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'offset',
        'type' => 'int',
        'description' => 'the index of the part part',
      ),
    ),
    'return' => 
    array (
      'type' => 'string|null',
      'description' => 'The path part at the index specified',
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