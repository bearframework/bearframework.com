<?php
return array (
  'name' => 'execute',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'commands',
      'value' => NULL,
      'type' => 'array',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Executes multiple commands',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'commands',
        'type' => 'array',
        'description' => 'Commands',
      ),
    ),
    'return' => 
    array (
      'type' => 'array',
      'description' => 'List of commands results',
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
  'class' => 'BearFramework\\App\\Data',
);