<?php
return array (
  'name' => 'offsetExists',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'offset',
      'value' => NULL,
      'type' => 'mixed',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Checks if data for the current name specified exists',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'offset',
        'type' => 'mixed',
        'description' => 'The name of the data',
      ),
    ),
    'return' => 
    array (
      'type' => 'boolean',
      'description' => 'TRUE if the data exists. FALSE otherwise.',
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
  'class' => 'BearFramework\\App\\Request\\Query',
);