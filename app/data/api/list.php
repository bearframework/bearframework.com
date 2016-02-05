<?php
return array (
  'app' => 
  array (
    'name' => 'App',
    'type' => 'class',
    'description' => 'The is the class used to instantiate and configure you application.',
  ),
  'app.addoncontext' => 
  array (
    'name' => 'App\\AddonContext',
    'type' => 'class',
    'description' => 'Provides information about the addon location and utility functions',
  ),
  'app.addoncontext.construct' => 
  array (
    'name' => 'App\\AddonContext::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.addoncontext.getoptions' => 
  array (
    'name' => 'App\\AddonContext::getOptions',
    'type' => 'method',
    'description' => 'Returns the options set for the current addon',
  ),
  'app.addoncontext.load' => 
  array (
    'name' => 'App\\AddonContext::load',
    'type' => 'method',
    'description' => 'Loads a file from the current context dir',
  ),
  'app.addons' => 
  array (
    'name' => 'App\\Addons',
    'type' => 'class',
    'description' => 'Provides a way to enable addons and manage their options',
  ),
  'app.addons.add' => 
  array (
    'name' => 'App\\Addons::add',
    'type' => 'method',
    'description' => 'Enables an addon and saves the provided options',
  ),
  'app.addons.getoptions' => 
  array (
    'name' => 'App\\Addons::getOptions',
    'type' => 'method',
    'description' => 'Returns the options set for the addon specified',
  ),
  'app.appcontext' => 
  array (
    'name' => 'App\\AppContext',
    'type' => 'class',
    'description' => 'Provides information about the application location and utility functions',
  ),
  'app.appcontext.construct' => 
  array (
    'name' => 'App\\AppContext::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.appcontext.load' => 
  array (
    'name' => 'App\\AppContext::load',
    'type' => 'method',
    'description' => 'Loads a file from the current context dir',
  ),
  'app.assets' => 
  array (
    'name' => 'App\\Assets',
    'type' => 'class',
    'description' => 'Provides utility functions for assets',
  ),
  'app.assets.getfilename' => 
  array (
    'name' => 'App\\Assets::getFilename',
    'type' => 'method',
    'description' => 'Returns the local filename for a given URL path',
  ),
  'app.assets.getmimetype' => 
  array (
    'name' => 'App\\Assets::getMimeType',
    'type' => 'method',
    'description' => 'Finds the mime type of a filename by checking it\'s extension',
  ),
  'app.assets.geturl' => 
  array (
    'name' => 'App\\Assets::getUrl',
    'type' => 'method',
    'description' => 'Returns a public URL for the specified filename',
  ),
  'app.cache' => 
  array (
    'name' => 'App\\Cache',
    'type' => 'class',
    'description' => 'Data cache',
  ),
  'app.cache.delete' => 
  array (
    'name' => 'App\\Cache::delete',
    'type' => 'method',
    'description' => 'Deletes data fom the cache',
  ),
  'app.cache.exists' => 
  array (
    'name' => 'App\\Cache::exists',
    'type' => 'method',
    'description' => 'Checks if the data for the key specified exists',
  ),
  'app.cache.get' => 
  array (
    'name' => 'App\\Cache::get',
    'type' => 'method',
    'description' => 'Return the saved data from the cache of the default value specified',
  ),
  'app.cache.set' => 
  array (
    'name' => 'App\\Cache::set',
    'type' => 'method',
    'description' => 'Saves data in the cache',
  ),
  'app.classes' => 
  array (
    'name' => 'App\\Classes',
    'type' => 'class',
    'description' => 'Provides functionality for autoloading classes',
  ),
  'app.classes.add' => 
  array (
    'name' => 'App\\Classes::add',
    'type' => 'method',
    'description' => 'Registers a class for autoloading',
  ),
  'app.classes.load' => 
  array (
    'name' => 'App\\Classes::load',
    'type' => 'method',
    'description' => 'Loads a class if registered',
  ),
  'app.clone' => 
  array (
    'name' => 'App::__clone',
    'type' => 'method',
    'description' => 'Prevents multiple app instances',
  ),
  'app.components' => 
  array (
    'name' => 'App\\Components',
    'type' => 'class',
    'description' => 'HTML Server Components utilities',
  ),
  'app.components.addalias' => 
  array (
    'name' => 'App\\Components::addAlias',
    'type' => 'method',
    'description' => 'Adds alias to a specifil source',
  ),
  'app.components.compiler' => 
  array (
    'name' => 'App\\Components\\Compiler',
    'type' => 'class',
    'description' => 'Process HTML code and transforms component tags',
  ),
  'app.components.compiler.addalias' => 
  array (
    'name' => 'App\\Components\\Compiler::addAlias',
    'type' => 'method',
    'description' => 'Registers an alias',
  ),
  'app.components.compiler.constructcomponent' => 
  array (
    'name' => 'App\\Components\\Compiler::constructComponent',
    'type' => 'method',
    'description' => 'Constructs a Component object',
  ),
  'app.components.compiler.getcomponentfilecontent' => 
  array (
    'name' => 'App\\Components\\Compiler::getComponentFileContent',
    'type' => 'method',
    'description' => 'Includes the component file providing context information',
  ),
  'app.components.compiler.handleinvalidhtmlerrors' => 
  array (
    'name' => 'App\\Components\\Compiler::handleInvalidHTMLErrors',
    'type' => 'method',
    'description' => '',
  ),
  'app.components.compiler.process' => 
  array (
    'name' => 'App\\Components\\Compiler::process',
    'type' => 'method',
    'description' => 'Process (merge) components',
  ),
  'app.components.compiler.processdata' => 
  array (
    'name' => 'App\\Components\\Compiler::processData',
    'type' => 'method',
    'description' => '',
  ),
  'app.components.compiler.processfile' => 
  array (
    'name' => 'App\\Components\\Compiler::processFile',
    'type' => 'method',
    'description' => '',
  ),
  'app.components.component' => 
  array (
    'name' => 'App\\Components\\Component',
    'type' => 'class',
    'description' => 'HTML Server Components object',
  ),
  'app.components.component.construct' => 
  array (
    'name' => 'App\\Components\\Component::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.components.component.get' => 
  array (
    'name' => 'App\\Components\\Component::__get',
    'type' => 'method',
    'description' => '',
  ),
  'app.components.component.getattribute' => 
  array (
    'name' => 'App\\Components\\Component::getAttribute',
    'type' => 'method',
    'description' => '',
  ),
  'app.components.inserthtml' => 
  array (
    'name' => 'App\\Components::insertHTML',
    'type' => 'method',
    'description' => 'Inserts HTML code (or HTML Component) in the position specified',
  ),
  'app.components.process' => 
  array (
    'name' => 'App\\Components::process',
    'type' => 'method',
    'description' => 'Runs the compiler over the content specified',
  ),
  'app.config' => 
  array (
    'name' => 'App\\Config',
    'type' => 'class',
    'description' => 'The application configuration',
  ),
  'app.config.construct' => 
  array (
    'name' => 'App\\Config::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.config.get' => 
  array (
    'name' => 'App\\Config::__get',
    'type' => 'method',
    'description' => 'Returns the value of the configuration option specified',
  ),
  'app.config.isset' => 
  array (
    'name' => 'App\\Config::__isset',
    'type' => 'method',
    'description' => 'Checks if the configuration option specified is set',
  ),
  'app.config.set' => 
  array (
    'name' => 'App\\Config::__set',
    'type' => 'method',
    'description' => 'Sets the value of the configuration option specified',
  ),
  'app.construct' => 
  array (
    'name' => 'App::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.context' => 
  array (
    'name' => 'App\\Context',
    'type' => 'class',
    'description' => 'Provides information about addons and application location and utility functions',
  ),
  'app.context.assets' => 
  array (
    'name' => 'App\\Context\\Assets',
    'type' => 'class',
    'description' => 'Provides utility functions for assets in the current context',
  ),
  'app.context.assets.construct' => 
  array (
    'name' => 'App\\Context\\Assets::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.context.assets.geturl' => 
  array (
    'name' => 'App\\Context\\Assets::getUrl',
    'type' => 'method',
    'description' => 'Returns a public URL for the specified filename in the current context',
  ),
  'app.context.classes' => 
  array (
    'name' => 'App\\Context\\Classes',
    'type' => 'class',
    'description' => 'Provides functionality for autoloading classes in the current context',
  ),
  'app.context.classes.add' => 
  array (
    'name' => 'App\\Context\\Classes::add',
    'type' => 'method',
    'description' => 'Registers a class for autoloading in the current context',
  ),
  'app.context.classes.construct' => 
  array (
    'name' => 'App\\Context\\Classes::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.context.construct' => 
  array (
    'name' => 'App\\Context::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.context.load' => 
  array (
    'name' => 'App\\Context::load',
    'type' => 'method',
    'description' => 'Loads a file from the current context dir',
  ),
  'app.data' => 
  array (
    'name' => 'App\\Data',
    'type' => 'class',
    'description' => 'Data storage',
  ),
  'app.data.append' => 
  array (
    'name' => 'App\\Data::append',
    'type' => 'method',
    'description' => 'Appends data to the object specified. If the object does not exist, it will be created.',
  ),
  'app.data.delete' => 
  array (
    'name' => 'App\\Data::delete',
    'type' => 'method',
    'description' => 'Deletes the object specified and it\'s metadata',
  ),
  'app.data.duplicate' => 
  array (
    'name' => 'App\\Data::duplicate',
    'type' => 'method',
    'description' => 'Creates a copy of the object specified',
  ),
  'app.data.get' => 
  array (
    'name' => 'App\\Data::get',
    'type' => 'method',
    'description' => 'Retrieves object data for specified key',
  ),
  'app.data.getfilename' => 
  array (
    'name' => 'App\\Data::getFilename',
    'type' => 'method',
    'description' => 'Returns the filename of the object key specified',
  ),
  'app.data.ispublic' => 
  array (
    'name' => 'App\\Data::isPublic',
    'type' => 'method',
    'description' => 'Checks if an object is marked as public',
  ),
  'app.data.makeprivate' => 
  array (
    'name' => 'App\\Data::makePrivate',
    'type' => 'method',
    'description' => 'Marks object as private, so it cannot be accessed as an asset',
  ),
  'app.data.makepublic' => 
  array (
    'name' => 'App\\Data::makePublic',
    'type' => 'method',
    'description' => 'Marks object as public so it can be accessed as an asset',
  ),
  'app.data.rename' => 
  array (
    'name' => 'App\\Data::rename',
    'type' => 'method',
    'description' => 'Changes the key of the object specified',
  ),
  'app.data.search' => 
  array (
    'name' => 'App\\Data::search',
    'type' => 'method',
    'description' => 'Searches for items',
  ),
  'app.data.set' => 
  array (
    'name' => 'App\\Data::set',
    'type' => 'method',
    'description' => 'Saves data',
  ),
  'app.geturl' => 
  array (
    'name' => 'App::getUrl',
    'type' => 'method',
    'description' => 'Constructs a url for the path specified',
  ),
  'app.hooks' => 
  array (
    'name' => 'App\\Hooks',
    'type' => 'class',
    'description' => 'Provides functionality for notifications and data requests',
  ),
  'app.hooks.add' => 
  array (
    'name' => 'App\\Hooks::add',
    'type' => 'method',
    'description' => 'Registers callback for the name specified',
  ),
  'app.hooks.execute' => 
  array (
    'name' => 'App\\Hooks::execute',
    'type' => 'method',
    'description' => 'Triggers execution of all callbacks hooked to the name specified',
  ),
  'app.invalidconfigoptionexception' => 
  array (
    'name' => 'App\\InvalidConfigOptionException',
    'type' => 'class',
    'description' => 'Construct the exception',
  ),
  'app.invalidconfigoptionexception.construct' => 
  array (
    'name' => 'App\\InvalidConfigOptionException::__construct',
    'type' => 'method',
    'description' => '',
  ),
  'app.invalidconfigoptionexception.getcode' => 
  array (
    'name' => 'App\\InvalidConfigOptionException::getCode',
    'type' => 'method',
    'description' => '',
  ),
  'app.invalidconfigoptionexception.getfile' => 
  array (
    'name' => 'App\\InvalidConfigOptionException::getFile',
    'type' => 'method',
    'description' => '',
  ),
  'app.invalidconfigoptionexception.getline' => 
  array (
    'name' => 'App\\InvalidConfigOptionException::getLine',
    'type' => 'method',
    'description' => '',
  ),
  'app.invalidconfigoptionexception.getmessage' => 
  array (
    'name' => 'App\\InvalidConfigOptionException::getMessage',
    'type' => 'method',
    'description' => '',
  ),
  'app.invalidconfigoptionexception.getprevious' => 
  array (
    'name' => 'App\\InvalidConfigOptionException::getPrevious',
    'type' => 'method',
    'description' => '',
  ),
  'app.invalidconfigoptionexception.gettrace' => 
  array (
    'name' => 'App\\InvalidConfigOptionException::getTrace',
    'type' => 'method',
    'description' => '',
  ),
  'app.invalidconfigoptionexception.gettraceasstring' => 
  array (
    'name' => 'App\\InvalidConfigOptionException::getTraceAsString',
    'type' => 'method',
    'description' => '',
  ),
  'app.invalidconfigoptionexception.tostring' => 
  array (
    'name' => 'App\\InvalidConfigOptionException::__toString',
    'type' => 'method',
    'description' => '',
  ),
  'app.load' => 
  array (
    'name' => 'App::load',
    'type' => 'method',
    'description' => 'Loads a file',
  ),
  'app.log' => 
  array (
    'name' => 'App\\Log',
    'type' => 'class',
    'description' => 'Provides logging functionlity',
  ),
  'app.log.write' => 
  array (
    'name' => 'App\\Log::write',
    'type' => 'method',
    'description' => 'Appends data to the file specified. The file will be created if not exists.',
  ),
  'app.request' => 
  array (
    'name' => 'App\\Request',
    'type' => 'class',
    'description' => 'Provides information about the current request',
  ),
  'app.request.construct' => 
  array (
    'name' => 'App\\Request::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.request.get' => 
  array (
    'name' => 'App\\Request::__get',
    'type' => 'method',
    'description' => 'Magic method',
  ),
  'app.request.isset' => 
  array (
    'name' => 'App\\Request::__isset',
    'type' => 'method',
    'description' => 'Magic method',
  ),
  'app.request.path' => 
  array (
    'name' => 'App\\Request\\Path',
    'type' => 'class',
    'description' => 'Provides information about the request path',
  ),
  'app.request.path.construct' => 
  array (
    'name' => 'App\\Request\\Path::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.request.path.offsetexists' => 
  array (
    'name' => 'App\\Request\\Path::offsetExists',
    'type' => 'method',
    'description' => 'Checks if a part part for the current index specified exists',
  ),
  'app.request.path.offsetget' => 
  array (
    'name' => 'App\\Request\\Path::offsetGet',
    'type' => 'method',
    'description' => 'Returns the path part for the index specified',
  ),
  'app.request.path.offsetset' => 
  array (
    'name' => 'App\\Request\\Path::offsetSet',
    'type' => 'method',
    'description' => 'Not implemented',
  ),
  'app.request.path.offsetunset' => 
  array (
    'name' => 'App\\Request\\Path::offsetUnset',
    'type' => 'method',
    'description' => 'Not implemented',
  ),
  'app.request.path.tostring' => 
  array (
    'name' => 'App\\Request\\Path::__toString',
    'type' => 'method',
    'description' => 'Returns the full path',
  ),
  'app.request.query' => 
  array (
    'name' => 'App\\Request\\Query',
    'type' => 'class',
    'description' => 'Provides information about the request query string',
  ),
  'app.request.query.construct' => 
  array (
    'name' => 'App\\Request\\Query::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.request.query.offsetexists' => 
  array (
    'name' => 'App\\Request\\Query::offsetExists',
    'type' => 'method',
    'description' => 'Checks if data for the current name specified exists',
  ),
  'app.request.query.offsetget' => 
  array (
    'name' => 'App\\Request\\Query::offsetGet',
    'type' => 'method',
    'description' => 'Returns the data for the name specified',
  ),
  'app.request.query.offsetset' => 
  array (
    'name' => 'App\\Request\\Query::offsetSet',
    'type' => 'method',
    'description' => 'Not implemented',
  ),
  'app.request.query.offsetunset' => 
  array (
    'name' => 'App\\Request\\Query::offsetUnset',
    'type' => 'method',
    'description' => 'Not implemented',
  ),
  'app.request.query.tostring' => 
  array (
    'name' => 'App\\Request\\Query::__toString',
    'type' => 'method',
    'description' => 'Returns the full query string',
  ),
  'app.request.set' => 
  array (
    'name' => 'App\\Request::__set',
    'type' => 'method',
    'description' => 'Magic method',
  ),
  'app.request.tostring' => 
  array (
    'name' => 'App\\Request::__toString',
    'type' => 'method',
    'description' => 'Returns the full URL of the request',
  ),
  'app.respond' => 
  array (
    'name' => 'App::respond',
    'type' => 'method',
    'description' => 'Outputs a response',
  ),
  'app.response' => 
  array (
    'name' => 'App\\Response',
    'type' => 'class',
    'description' => 'Response object',
  ),
  'app.response.construct' => 
  array (
    'name' => 'App\\Response::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.response.filereader' => 
  array (
    'name' => 'App\\Response\\FileReader',
    'type' => 'class',
    'description' => 'Response type that reads file and outputs it',
  ),
  'app.response.filereader.construct' => 
  array (
    'name' => 'App\\Response\\FileReader::__construct',
    'type' => 'method',
    'description' => 'The constructor ',
  ),
  'app.response.filereader.setcontenttype' => 
  array (
    'name' => 'App\\Response\\FileReader::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'app.response.filereader.setmaxage' => 
  array (
    'name' => 'App\\Response\\FileReader::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'app.response.filereader.setstatuscode' => 
  array (
    'name' => 'App\\Response\\FileReader::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'app.response.html' => 
  array (
    'name' => 'App\\Response\\HTML',
    'type' => 'class',
    'description' => 'Response type that outputs HTML code. The appropriate content type is set.',
  ),
  'app.response.html.construct' => 
  array (
    'name' => 'App\\Response\\HTML::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.response.html.setcontenttype' => 
  array (
    'name' => 'App\\Response\\HTML::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'app.response.html.setmaxage' => 
  array (
    'name' => 'App\\Response\\HTML::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'app.response.html.setstatuscode' => 
  array (
    'name' => 'App\\Response\\HTML::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'app.response.json' => 
  array (
    'name' => 'App\\Response\\JSON',
    'type' => 'class',
    'description' => 'Response type that outputs JSON code. The appropriate content type is set.',
  ),
  'app.response.json.construct' => 
  array (
    'name' => 'App\\Response\\JSON::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.response.json.setcontenttype' => 
  array (
    'name' => 'App\\Response\\JSON::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'app.response.json.setmaxage' => 
  array (
    'name' => 'App\\Response\\JSON::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'app.response.json.setstatuscode' => 
  array (
    'name' => 'App\\Response\\JSON::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'app.response.notfound' => 
  array (
    'name' => 'App\\Response\\NotFound',
    'type' => 'class',
    'description' => 'Response type that sends Not Found status',
  ),
  'app.response.notfound.construct' => 
  array (
    'name' => 'App\\Response\\NotFound::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.response.notfound.setcontenttype' => 
  array (
    'name' => 'App\\Response\\NotFound::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'app.response.notfound.setmaxage' => 
  array (
    'name' => 'App\\Response\\NotFound::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'app.response.notfound.setstatuscode' => 
  array (
    'name' => 'App\\Response\\NotFound::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'app.response.permanentredirect' => 
  array (
    'name' => 'App\\Response\\PermanentRedirect',
    'type' => 'class',
    'description' => 'Response type that makes permanent redirect',
  ),
  'app.response.permanentredirect.construct' => 
  array (
    'name' => 'App\\Response\\PermanentRedirect::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.response.permanentredirect.setcontenttype' => 
  array (
    'name' => 'App\\Response\\PermanentRedirect::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'app.response.permanentredirect.setmaxage' => 
  array (
    'name' => 'App\\Response\\PermanentRedirect::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'app.response.permanentredirect.setstatuscode' => 
  array (
    'name' => 'App\\Response\\PermanentRedirect::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'app.response.setcontenttype' => 
  array (
    'name' => 'App\\Response::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'app.response.setmaxage' => 
  array (
    'name' => 'App\\Response::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'app.response.setstatuscode' => 
  array (
    'name' => 'App\\Response::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'app.response.temporaryredirect' => 
  array (
    'name' => 'App\\Response\\TemporaryRedirect',
    'type' => 'class',
    'description' => 'Response type that makes temporary redirect',
  ),
  'app.response.temporaryredirect.construct' => 
  array (
    'name' => 'App\\Response\\TemporaryRedirect::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.response.temporaryredirect.setcontenttype' => 
  array (
    'name' => 'App\\Response\\TemporaryRedirect::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'app.response.temporaryredirect.setmaxage' => 
  array (
    'name' => 'App\\Response\\TemporaryRedirect::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'app.response.temporaryredirect.setstatuscode' => 
  array (
    'name' => 'App\\Response\\TemporaryRedirect::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'app.response.temporaryunavailable' => 
  array (
    'name' => 'App\\Response\\TemporaryUnavailable',
    'type' => 'class',
    'description' => 'Response type that sends Temporary Unavailable status',
  ),
  'app.response.temporaryunavailable.construct' => 
  array (
    'name' => 'App\\Response\\TemporaryUnavailable::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.response.temporaryunavailable.setcontenttype' => 
  array (
    'name' => 'App\\Response\\TemporaryUnavailable::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'app.response.temporaryunavailable.setmaxage' => 
  array (
    'name' => 'App\\Response\\TemporaryUnavailable::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'app.response.temporaryunavailable.setstatuscode' => 
  array (
    'name' => 'App\\Response\\TemporaryUnavailable::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'app.response.text' => 
  array (
    'name' => 'App\\Response\\Text',
    'type' => 'class',
    'description' => 'Response type that outputs text. The appropriate content type is set.',
  ),
  'app.response.text.construct' => 
  array (
    'name' => 'App\\Response\\Text::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'app.response.text.setcontenttype' => 
  array (
    'name' => 'App\\Response\\Text::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'app.response.text.setmaxage' => 
  array (
    'name' => 'App\\Response\\Text::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'app.response.text.setstatuscode' => 
  array (
    'name' => 'App\\Response\\Text::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'app.routes' => 
  array (
    'name' => 'App\\Routes',
    'type' => 'class',
    'description' => 'Provides functionality for registering callbacks for specific requests and executing them',
  ),
  'app.routes.add' => 
  array (
    'name' => 'App\\Routes::add',
    'type' => 'method',
    'description' => 'Registers a request handler',
  ),
  'app.routes.getresponse' => 
  array (
    'name' => 'App\\Routes::getResponse',
    'type' => 'method',
    'description' => 'Finds the matching callback and returns its result',
  ),
  'app.run' => 
  array (
    'name' => 'App::run',
    'type' => 'method',
    'description' => 'Call this method to start the application. This method outputs the response.',
  ),
  'app.utilities.dir' => 
  array (
    'name' => 'App\\Utilities\\Dir',
    'type' => 'class',
    'description' => 'Directory utilities',
  ),
  'app.utilities.dir.make' => 
  array (
    'name' => 'App\\Utilities\\Dir::make',
    'type' => 'method',
    'description' => 'Creates a dir if it\'s missing',
  ),
  'app.utilities.file' => 
  array (
    'name' => 'App\\Utilities\\File',
    'type' => 'class',
    'description' => 'File utilities',
  ),
  'app.utilities.file.makedir' => 
  array (
    'name' => 'App\\Utilities\\File::makeDir',
    'type' => 'method',
    'description' => 'Creates the dir of the filename specified if it\'s missing',
  ),
  'app.utilities.graphics' => 
  array (
    'name' => 'App\\Utilities\\Graphics',
    'type' => 'class',
    'description' => 'Graphics utilities',
  ),
  'app.utilities.graphics.getsize' => 
  array (
    'name' => 'App\\Utilities\\Graphics::getSize',
    'type' => 'method',
    'description' => 'Returns the size of the image specified',
  ),
  'app.utilities.graphics.resize' => 
  array (
    'name' => 'App\\Utilities\\Graphics::resize',
    'type' => 'method',
    'description' => 'Resizes a image file',
  ),
  'app.wakeup' => 
  array (
    'name' => 'App::__wakeup',
    'type' => 'method',
    'description' => 'Prevents multiple app instances',
  ),
);