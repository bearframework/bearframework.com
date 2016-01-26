<?php
return array (
  'name' => 'insertHTML',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'target',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
    1 => 
    array (
      'name' => 'html',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
    2 => 
    array (
      'name' => 'position',
      'value' => 'beforeBodyEnd',
      'type' => 'string',
      'isOptional' => true,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Inserts HTML code (or HTML Component) in the position specified',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'target',
        'type' => 'string',
        'description' => 'The HTML code where the insertion will be made',
      ),
      1 => 
      array (
        'name' => 'html',
        'type' => 'string',
        'description' => 'The HTML code that will be inserted',
      ),
      2 => 
      array (
        'name' => 'position',
        'type' => 'string',
        'description' => 'The position of the insertion',
      ),
    ),
    'return' => 
    array (
      'type' => 'string',
      'description' => 'The resulting HTML code (processed)',
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
  'type' => 'method',
  'class' => 'App\\Components',
);