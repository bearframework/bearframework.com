<?php
return array (
  'name' => 'includeComponentFile',
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
      'type' => 'void',
      'description' => 'No value is returned',
    ),
    'exceptions' => 
    array (
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