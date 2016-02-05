<?php
return array (
  'name' => 'App\\Components\\Compiler',
  'namespace' => 'App\\Components',
  'comment' => 
  array (
    'description' => 'Process HTML code and transforms component tags',
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
    0 => 
    array (
      'name' => 'VERSION',
      'value' => '0.2.0',
      'type' => 'string',
    ),
  ),
  'properties' => 
  array (
  ),
  'methods' => 
  array (
    0 => 
    array (
      'name' => 'constructComponent',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'attributes',
          'value' => 
          array (
          ),
          'type' => 'array',
          'isOptional' => true,
        ),
        1 => 
        array (
          'name' => 'innerHTML',
          'value' => '',
          'type' => 'string',
          'isOptional' => true,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Constructs a Component object',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'attributes',
            'type' => 'array',
            'description' => 'The attributes of the component tag',
          ),
          1 => 
          array (
            'name' => 'innerHTML',
            'type' => 'string',
            'description' => 'The innerHTML of the component tag',
          ),
        ),
        'return' => 
        array (
          'type' => '\\App\\Component',
          'description' => 'A component object',
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
    ),
    1 => 
    array (
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
    ),
    2 => 
    array (
      'name' => 'addAlias',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'alias',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
        1 => 
        array (
          'name' => 'original',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Registers an alias',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'alias',
            'type' => 'string',
            'description' => NULL,
          ),
          1 => 
          array (
            'name' => 'original',
            'type' => 'string',
            'description' => NULL,
          ),
        ),
        'return' => NULL,
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
    ),
    3 => 
    array (
      'name' => 'process',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'html',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => 'Process (merge) components',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'html',
            'type' => 'string',
            'description' => NULL,
          ),
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => NULL,
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
    ),
    4 => 
    array (
      'name' => 'processData',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'data',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => '',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'data',
            'type' => 'string',
            'description' => NULL,
          ),
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => NULL,
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
    ),
    5 => 
    array (
      'name' => 'processFile',
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
          'name' => 'attributes',
          'value' => 
          array (
          ),
          'type' => 'array',
          'isOptional' => true,
        ),
        2 => 
        array (
          'name' => 'innerHTML',
          'value' => '',
          'type' => 'string',
          'isOptional' => true,
        ),
      ),
      'comment' => 
      array (
        'description' => '',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'file',
            'type' => 'string',
            'description' => NULL,
          ),
          1 => 
          array (
            'name' => 'attributes',
            'type' => 'array',
            'description' => NULL,
          ),
          2 => 
          array (
            'name' => 'innerHTML',
            'type' => 'string',
            'description' => NULL,
          ),
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => NULL,
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
    ),
    6 => 
    array (
      'name' => 'getDOMElementAttributes',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domElement',
          'value' => NULL,
          'type' => '\\DOMElement',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => '',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'domElement',
            'type' => '\\DOMElement',
            'description' => NULL,
          ),
        ),
        'return' => 
        array (
          'type' => 'array',
          'description' => NULL,
        ),
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => true,
      'isProtected' => false,
      'isPublic' => false,
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    7 => 
    array (
      'name' => 'getDOMDocument',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'html',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => '',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'html',
            'type' => 'string',
            'description' => NULL,
          ),
        ),
        'return' => 
        array (
          'type' => '\\DOMDocument',
          'description' => NULL,
        ),
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => true,
      'isProtected' => false,
      'isPublic' => false,
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    8 => 
    array (
      'name' => 'getInnerHTML',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domElement',
          'value' => NULL,
          'type' => '\\DOMElement',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => '',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'domElement',
            'type' => '\\DOMElement',
            'description' => NULL,
          ),
        ),
        'return' => 
        array (
          'type' => 'string',
          'description' => NULL,
        ),
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => true,
      'isProtected' => false,
      'isPublic' => false,
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    9 => 
    array (
      'name' => 'trimDOMElement',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'domElement',
          'value' => NULL,
          'type' => '\\DOMElement',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => '',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'domElement',
            'type' => '\\DOMElement',
            'description' => NULL,
          ),
        ),
        'return' => NULL,
        'exceptions' => 
        array (
        ),
      ),
      'isPrivate' => true,
      'isProtected' => false,
      'isPublic' => false,
      'isStatic' => false,
      'isAbstract' => false,
      'isFinal' => false,
      'isConstructor' => false,
      'isDestructor' => false,
    ),
    10 => 
    array (
      'name' => 'handleInvalidHTMLErrors',
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'errorNumber',
          'value' => NULL,
          'type' => 'int',
          'isOptional' => false,
        ),
        1 => 
        array (
          'name' => 'errorMessage',
          'value' => NULL,
          'type' => 'string',
          'isOptional' => false,
        ),
      ),
      'comment' => 
      array (
        'description' => '',
        'type' => NULL,
        'parameters' => 
        array (
          0 => 
          array (
            'name' => 'errorNumber',
            'type' => 'int',
            'description' => NULL,
          ),
          1 => 
          array (
            'name' => 'errorMessage',
            'type' => 'string',
            'description' => NULL,
          ),
        ),
        'return' => 
        array (
          'type' => 'boolean',
          'description' => NULL,
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
    ),
  ),
  'type' => 'class',
);