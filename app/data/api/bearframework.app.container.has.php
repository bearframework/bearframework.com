<?php
return array (
  'name' => 'has',
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
    'description' => 'Returns information about whether the service is added',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'name',
        'type' => 'string',
        'description' => 'The name of the service',
      ),
    ),
    'return' => 
    array (
      'type' => 'boolen',
      'description' => 'TRUE if services is added. FALSE otherwise.',
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
  'class' => 'BearFramework\\App\\Container',
);