<?php
return array (
  'name' => 'getComponentFileContent',
  'parameters' => 
  array (
    0 => 
    array (
      'name' => 'file',
      'value' => NULL,
      'type' => 'string',
      'isOptional' => false,
    ),
    1 => 
    array (
      'name' => 'component',
      'value' => NULL,
      'type' => 'App\\Component',
      'isOptional' => false,
    ),
  ),
  'comment' => 
  array (
    'description' => 'Includes the component file providing context information',
    'type' => NULL,
    'parameters' => 
    array (
      0 => 
      array (
        'name' => 'file',
        'type' => 'string',
        'description' => 'The file of the component',
      ),
      1 => 
      array (
        'name' => 'component',
        'type' => 'App\\Component',
        'description' => 'The component object for the tag specified',
      ),
    ),
    'return' => 
    array (
      'type' => 'string',
      'description' => NULL,
    ),
    'exceptions' => 
    array (
      0 => '\\Exception',
    ),
  ),
  'isPrivate' => false,
  'isProtected' => true,
  'isPublic' => false,
  'isStatic' => false,
  'isAbstract' => false,
  'isFinal' => false,
  'isConstructor' => false,
  'isDestructor' => false,
  'type' => 'method',
  'class' => 'App\\Components\\Compiler',
);