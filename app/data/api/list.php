<?php
return array (
  'bearframework.app' => 
  array (
    'name' => 'BearFramework\\App',
    'type' => 'class',
    'description' => 'The is the class used to instantiate and configure you application.',
  ),
  'bearframework.app.addoncontext' => 
  array (
    'name' => 'BearFramework\\App\\AddonContext',
    'type' => 'class',
    'description' => 'Provides information about the addon location and utility functions',
  ),
  'bearframework.app.addoncontext.construct' => 
  array (
    'name' => 'BearFramework\\App\\AddonContext::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.addoncontext.load' => 
  array (
    'name' => 'BearFramework\\App\\AddonContext::load',
    'type' => 'method',
    'description' => 'Loads a file from the current context dir',
  ),
  'bearframework.app.addons' => 
  array (
    'name' => 'BearFramework\\App\\Addons',
    'type' => 'class',
    'description' => 'Provides a way to enable addons and manage their options',
  ),
  'bearframework.app.addons.add' => 
  array (
    'name' => 'BearFramework\\App\\Addons::add',
    'type' => 'method',
    'description' => 'Enables an addon and saves the provided options',
  ),
  'bearframework.app.addons.getlist' => 
  array (
    'name' => 'BearFramework\\App\\Addons::getList',
    'type' => 'method',
    'description' => 'Returns list of the added addons',
  ),
  'bearframework.app.appcontext' => 
  array (
    'name' => 'BearFramework\\App\\AppContext',
    'type' => 'class',
    'description' => 'Provides information about the application location and utility functions',
  ),
  'bearframework.app.appcontext.construct' => 
  array (
    'name' => 'BearFramework\\App\\AppContext::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.appcontext.load' => 
  array (
    'name' => 'BearFramework\\App\\AppContext::load',
    'type' => 'method',
    'description' => 'Loads a file from the current context dir',
  ),
  'bearframework.app.assets' => 
  array (
    'name' => 'BearFramework\\App\\Assets',
    'type' => 'class',
    'description' => 'Provides utility functions for assets',
  ),
  'bearframework.app.assets.adddir' => 
  array (
    'name' => 'BearFramework\\App\\Assets::addDir',
    'type' => 'method',
    'description' => 'Registers a directory that will be publicly accessible',
  ),
  'bearframework.app.assets.getfilename' => 
  array (
    'name' => 'BearFramework\\App\\Assets::getFilename',
    'type' => 'method',
    'description' => 'Returns the local filename for a given URL path',
  ),
  'bearframework.app.assets.getmimetype' => 
  array (
    'name' => 'BearFramework\\App\\Assets::getMimeType',
    'type' => 'method',
    'description' => 'Finds the mime type of a filename by checking it\'s extension',
  ),
  'bearframework.app.assets.geturl' => 
  array (
    'name' => 'BearFramework\\App\\Assets::getUrl',
    'type' => 'method',
    'description' => 'Returns a public URL for the specified filename',
  ),
  'bearframework.app.cache' => 
  array (
    'name' => 'BearFramework\\App\\Cache',
    'type' => 'class',
    'description' => 'Data cache',
  ),
  'bearframework.app.cache.delete' => 
  array (
    'name' => 'BearFramework\\App\\Cache::delete',
    'type' => 'method',
    'description' => 'Deletes data fom the cache',
  ),
  'bearframework.app.cache.get' => 
  array (
    'name' => 'BearFramework\\App\\Cache::get',
    'type' => 'method',
    'description' => 'Return the saved data from the cache of the default value specified',
  ),
  'bearframework.app.cache.set' => 
  array (
    'name' => 'BearFramework\\App\\Cache::set',
    'type' => 'method',
    'description' => 'Saves data in the cache',
  ),
  'bearframework.app.classes' => 
  array (
    'name' => 'BearFramework\\App\\Classes',
    'type' => 'class',
    'description' => 'Provides functionality for autoloading classes',
  ),
  'bearframework.app.classes.add' => 
  array (
    'name' => 'BearFramework\\App\\Classes::add',
    'type' => 'method',
    'description' => 'Registers a class for autoloading',
  ),
  'bearframework.app.classes.construct' => 
  array (
    'name' => 'BearFramework\\App\\Classes::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.classes.load' => 
  array (
    'name' => 'BearFramework\\App\\Classes::load',
    'type' => 'method',
    'description' => 'Loads a class if registered',
  ),
  'bearframework.app.clone' => 
  array (
    'name' => 'BearFramework\\App::__clone',
    'type' => 'method',
    'description' => 'Prevents multiple app instances',
  ),
  'bearframework.app.config' => 
  array (
    'name' => 'BearFramework\\App\\Config',
    'type' => 'class',
    'description' => 'The application configuration',
  ),
  'bearframework.app.config.construct' => 
  array (
    'name' => 'BearFramework\\App\\Config::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.config.get' => 
  array (
    'name' => 'BearFramework\\App\\Config::__get',
    'type' => 'method',
    'description' => 'Returns the value of the configuration option specified',
  ),
  'bearframework.app.config.isset' => 
  array (
    'name' => 'BearFramework\\App\\Config::__isset',
    'type' => 'method',
    'description' => 'Checks if the configuration option specified is set',
  ),
  'bearframework.app.config.set' => 
  array (
    'name' => 'BearFramework\\App\\Config::__set',
    'type' => 'method',
    'description' => 'Sets the value of the configuration option specified',
  ),
  'bearframework.app.construct' => 
  array (
    'name' => 'BearFramework\\App::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.container' => 
  array (
    'name' => 'BearFramework\\App\\Container',
    'type' => 'class',
    'description' => 'Dependency Injection container',
  ),
  'bearframework.app.container.add' => 
  array (
    'name' => 'BearFramework\\App\\Container::add',
    'type' => 'method',
    'description' => 'Registeres a value for the specified name',
  ),
  'bearframework.app.container.get' => 
  array (
    'name' => 'BearFramework\\App\\Container::get',
    'type' => 'method',
    'description' => 'Returns a object and returns it',
  ),
  'bearframework.app.container.has' => 
  array (
    'name' => 'BearFramework\\App\\Container::has',
    'type' => 'method',
    'description' => 'Returns information about whether the service is added',
  ),
  'bearframework.app.context' => 
  array (
    'name' => 'BearFramework\\App\\Context',
    'type' => 'class',
    'description' => 'Provides information about addons and application location and utility functions',
  ),
  'bearframework.app.context.assets' => 
  array (
    'name' => 'BearFramework\\App\\Context\\Assets',
    'type' => 'class',
    'description' => 'Provides utility functions for assets in the current context',
  ),
  'bearframework.app.context.assets.adddir' => 
  array (
    'name' => 'BearFramework\\App\\Context\\Assets::addDir',
    'type' => 'method',
    'description' => 'Registers a directory that will be publicly accessible relative to the current addon or application location',
  ),
  'bearframework.app.context.assets.construct' => 
  array (
    'name' => 'BearFramework\\App\\Context\\Assets::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.context.assets.geturl' => 
  array (
    'name' => 'BearFramework\\App\\Context\\Assets::getUrl',
    'type' => 'method',
    'description' => 'Returns a public URL for the specified filename in the current context',
  ),
  'bearframework.app.context.classes' => 
  array (
    'name' => 'BearFramework\\App\\Context\\Classes',
    'type' => 'class',
    'description' => 'Provides functionality for autoloading classes in the current context',
  ),
  'bearframework.app.context.classes.add' => 
  array (
    'name' => 'BearFramework\\App\\Context\\Classes::add',
    'type' => 'method',
    'description' => 'Registers a class for autoloading in the current context',
  ),
  'bearframework.app.context.classes.construct' => 
  array (
    'name' => 'BearFramework\\App\\Context\\Classes::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.context.construct' => 
  array (
    'name' => 'BearFramework\\App\\Context::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.context.load' => 
  array (
    'name' => 'BearFramework\\App\\Context::load',
    'type' => 'method',
    'description' => 'Loads a file from the current context dir',
  ),
  'bearframework.app.data' => 
  array (
    'name' => 'BearFramework\\App\\Data',
    'type' => 'class',
    'description' => 'Data storage',
  ),
  'bearframework.app.data.append' => 
  array (
    'name' => 'BearFramework\\App\\Data::append',
    'type' => 'method',
    'description' => 'Appends data to the object specified. If the object does not exist, it will be created.',
  ),
  'bearframework.app.data.delete' => 
  array (
    'name' => 'BearFramework\\App\\Data::delete',
    'type' => 'method',
    'description' => 'Deletes the object specified and it\'s metadata',
  ),
  'bearframework.app.data.duplicate' => 
  array (
    'name' => 'BearFramework\\App\\Data::duplicate',
    'type' => 'method',
    'description' => 'Creates a copy of the object specified',
  ),
  'bearframework.app.data.get' => 
  array (
    'name' => 'BearFramework\\App\\Data::get',
    'type' => 'method',
    'description' => 'Retrieves object data for specified key',
  ),
  'bearframework.app.data.getfilename' => 
  array (
    'name' => 'BearFramework\\App\\Data::getFilename',
    'type' => 'method',
    'description' => 'Returns the filename of the object key specified',
  ),
  'bearframework.app.data.ispublic' => 
  array (
    'name' => 'BearFramework\\App\\Data::isPublic',
    'type' => 'method',
    'description' => 'Checks if an object is marked as public',
  ),
  'bearframework.app.data.makeprivate' => 
  array (
    'name' => 'BearFramework\\App\\Data::makePrivate',
    'type' => 'method',
    'description' => 'Marks object as private, so it cannot be accessed as an asset',
  ),
  'bearframework.app.data.makepublic' => 
  array (
    'name' => 'BearFramework\\App\\Data::makePublic',
    'type' => 'method',
    'description' => 'Marks object as public so it can be accessed as an asset',
  ),
  'bearframework.app.data.rename' => 
  array (
    'name' => 'BearFramework\\App\\Data::rename',
    'type' => 'method',
    'description' => 'Changes the key of the object specified',
  ),
  'bearframework.app.data.search' => 
  array (
    'name' => 'BearFramework\\App\\Data::search',
    'type' => 'method',
    'description' => 'Searches for items',
  ),
  'bearframework.app.data.set' => 
  array (
    'name' => 'BearFramework\\App\\Data::set',
    'type' => 'method',
    'description' => 'Saves data',
  ),
  'bearframework.app.get' => 
  array (
    'name' => 'BearFramework\\App::__get',
    'type' => 'method',
    'description' => 'Returns an object from the dependency injection container',
  ),
  'bearframework.app.getcontext' => 
  array (
    'name' => 'BearFramework\\App::getContext',
    'type' => 'method',
    'description' => 'Creates a context object for the filename specified',
  ),
  'bearframework.app.geturl' => 
  array (
    'name' => 'BearFramework\\App::getUrl',
    'type' => 'method',
    'description' => 'Constructs a url for the path specified',
  ),
  'bearframework.app.hooks' => 
  array (
    'name' => 'BearFramework\\App\\Hooks',
    'type' => 'class',
    'description' => 'Provides functionality for notifications and data requests',
  ),
  'bearframework.app.hooks.add' => 
  array (
    'name' => 'BearFramework\\App\\Hooks::add',
    'type' => 'method',
    'description' => 'Registers callback for the name specified',
  ),
  'bearframework.app.hooks.execute' => 
  array (
    'name' => 'BearFramework\\App\\Hooks::execute',
    'type' => 'method',
    'description' => 'Triggers execution of all callbacks hooked to the name specified',
  ),
  'bearframework.app.initialize' => 
  array (
    'name' => 'BearFramework\\App::initialize',
    'type' => 'method',
    'description' => 'Initializes the environment and context data',
  ),
  'bearframework.app.invalidconfigoptionexception' => 
  array (
    'name' => 'BearFramework\\App\\InvalidConfigOptionException',
    'type' => 'class',
    'description' => 'Construct the exception',
  ),
  'bearframework.app.invalidconfigoptionexception.construct' => 
  array (
    'name' => 'BearFramework\\App\\InvalidConfigOptionException::__construct',
    'type' => 'method',
    'description' => '',
  ),
  'bearframework.app.invalidconfigoptionexception.getcode' => 
  array (
    'name' => 'BearFramework\\App\\InvalidConfigOptionException::getCode',
    'type' => 'method',
    'description' => '',
  ),
  'bearframework.app.invalidconfigoptionexception.getfile' => 
  array (
    'name' => 'BearFramework\\App\\InvalidConfigOptionException::getFile',
    'type' => 'method',
    'description' => '',
  ),
  'bearframework.app.invalidconfigoptionexception.getline' => 
  array (
    'name' => 'BearFramework\\App\\InvalidConfigOptionException::getLine',
    'type' => 'method',
    'description' => '',
  ),
  'bearframework.app.invalidconfigoptionexception.getmessage' => 
  array (
    'name' => 'BearFramework\\App\\InvalidConfigOptionException::getMessage',
    'type' => 'method',
    'description' => '',
  ),
  'bearframework.app.invalidconfigoptionexception.getprevious' => 
  array (
    'name' => 'BearFramework\\App\\InvalidConfigOptionException::getPrevious',
    'type' => 'method',
    'description' => '',
  ),
  'bearframework.app.invalidconfigoptionexception.gettrace' => 
  array (
    'name' => 'BearFramework\\App\\InvalidConfigOptionException::getTrace',
    'type' => 'method',
    'description' => '',
  ),
  'bearframework.app.invalidconfigoptionexception.gettraceasstring' => 
  array (
    'name' => 'BearFramework\\App\\InvalidConfigOptionException::getTraceAsString',
    'type' => 'method',
    'description' => '',
  ),
  'bearframework.app.invalidconfigoptionexception.tostring' => 
  array (
    'name' => 'BearFramework\\App\\InvalidConfigOptionException::__toString',
    'type' => 'method',
    'description' => '',
  ),
  'bearframework.app.isset' => 
  array (
    'name' => 'BearFramework\\App::__isset',
    'type' => 'method',
    'description' => 'Returns information about whether the service is added in the dependency injection container',
  ),
  'bearframework.app.load' => 
  array (
    'name' => 'BearFramework\\App::load',
    'type' => 'method',
    'description' => 'Loads a file',
  ),
  'bearframework.app.logger' => 
  array (
    'name' => 'BearFramework\\App\\Logger',
    'type' => 'class',
    'description' => 'Provides logging functionlity',
  ),
  'bearframework.app.logger.log' => 
  array (
    'name' => 'BearFramework\\App\\Logger::log',
    'type' => 'method',
    'description' => 'Appends data to the file specified. The file will be created if not exists.',
  ),
  'bearframework.app.request' => 
  array (
    'name' => 'BearFramework\\App\\Request',
    'type' => 'class',
    'description' => 'Provides information about the current request',
  ),
  'bearframework.app.request.construct' => 
  array (
    'name' => 'BearFramework\\App\\Request::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.request.get' => 
  array (
    'name' => 'BearFramework\\App\\Request::__get',
    'type' => 'method',
    'description' => 'Magic method',
  ),
  'bearframework.app.request.isset' => 
  array (
    'name' => 'BearFramework\\App\\Request::__isset',
    'type' => 'method',
    'description' => 'Magic method',
  ),
  'bearframework.app.request.path' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Path',
    'type' => 'class',
    'description' => 'Provides information about the request path',
  ),
  'bearframework.app.request.path.construct' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Path::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.request.path.offsetexists' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Path::offsetExists',
    'type' => 'method',
    'description' => 'Checks if a part part for the current index specified exists',
  ),
  'bearframework.app.request.path.offsetget' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Path::offsetGet',
    'type' => 'method',
    'description' => 'Returns the path part for the index specified',
  ),
  'bearframework.app.request.path.offsetset' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Path::offsetSet',
    'type' => 'method',
    'description' => 'Not implemented',
  ),
  'bearframework.app.request.path.offsetunset' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Path::offsetUnset',
    'type' => 'method',
    'description' => 'Not implemented',
  ),
  'bearframework.app.request.path.tostring' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Path::__toString',
    'type' => 'method',
    'description' => 'Returns the full path',
  ),
  'bearframework.app.request.query' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Query',
    'type' => 'class',
    'description' => 'Provides information about the request query string',
  ),
  'bearframework.app.request.query.construct' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Query::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.request.query.offsetexists' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Query::offsetExists',
    'type' => 'method',
    'description' => 'Checks if data for the current name specified exists',
  ),
  'bearframework.app.request.query.offsetget' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Query::offsetGet',
    'type' => 'method',
    'description' => 'Returns the data for the name specified',
  ),
  'bearframework.app.request.query.offsetset' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Query::offsetSet',
    'type' => 'method',
    'description' => 'Not implemented',
  ),
  'bearframework.app.request.query.offsetunset' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Query::offsetUnset',
    'type' => 'method',
    'description' => 'Not implemented',
  ),
  'bearframework.app.request.query.tostring' => 
  array (
    'name' => 'BearFramework\\App\\Request\\Query::__toString',
    'type' => 'method',
    'description' => 'Returns the full query string',
  ),
  'bearframework.app.request.set' => 
  array (
    'name' => 'BearFramework\\App\\Request::__set',
    'type' => 'method',
    'description' => 'Magic method',
  ),
  'bearframework.app.request.tostring' => 
  array (
    'name' => 'BearFramework\\App\\Request::__toString',
    'type' => 'method',
    'description' => 'Returns the full URL of the request',
  ),
  'bearframework.app.respond' => 
  array (
    'name' => 'BearFramework\\App::respond',
    'type' => 'method',
    'description' => 'Outputs a response',
  ),
  'bearframework.app.response' => 
  array (
    'name' => 'BearFramework\\App\\Response',
    'type' => 'class',
    'description' => 'Response object',
  ),
  'bearframework.app.response.construct' => 
  array (
    'name' => 'BearFramework\\App\\Response::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.response.filereader' => 
  array (
    'name' => 'BearFramework\\App\\Response\\FileReader',
    'type' => 'class',
    'description' => 'Response type that reads file and outputs it',
  ),
  'bearframework.app.response.filereader.construct' => 
  array (
    'name' => 'BearFramework\\App\\Response\\FileReader::__construct',
    'type' => 'method',
    'description' => 'The constructor ',
  ),
  'bearframework.app.response.filereader.setcontenttype' => 
  array (
    'name' => 'BearFramework\\App\\Response\\FileReader::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'bearframework.app.response.filereader.setmaxage' => 
  array (
    'name' => 'BearFramework\\App\\Response\\FileReader::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'bearframework.app.response.filereader.setstatuscode' => 
  array (
    'name' => 'BearFramework\\App\\Response\\FileReader::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'bearframework.app.response.html' => 
  array (
    'name' => 'BearFramework\\App\\Response\\HTML',
    'type' => 'class',
    'description' => 'Response type that outputs HTML code. The appropriate content type is set.',
  ),
  'bearframework.app.response.html.construct' => 
  array (
    'name' => 'BearFramework\\App\\Response\\HTML::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.response.html.setcontenttype' => 
  array (
    'name' => 'BearFramework\\App\\Response\\HTML::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'bearframework.app.response.html.setmaxage' => 
  array (
    'name' => 'BearFramework\\App\\Response\\HTML::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'bearframework.app.response.html.setstatuscode' => 
  array (
    'name' => 'BearFramework\\App\\Response\\HTML::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'bearframework.app.response.json' => 
  array (
    'name' => 'BearFramework\\App\\Response\\JSON',
    'type' => 'class',
    'description' => 'Response type that outputs JSON code. The appropriate content type is set.',
  ),
  'bearframework.app.response.json.construct' => 
  array (
    'name' => 'BearFramework\\App\\Response\\JSON::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.response.json.setcontenttype' => 
  array (
    'name' => 'BearFramework\\App\\Response\\JSON::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'bearframework.app.response.json.setmaxage' => 
  array (
    'name' => 'BearFramework\\App\\Response\\JSON::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'bearframework.app.response.json.setstatuscode' => 
  array (
    'name' => 'BearFramework\\App\\Response\\JSON::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'bearframework.app.response.notfound' => 
  array (
    'name' => 'BearFramework\\App\\Response\\NotFound',
    'type' => 'class',
    'description' => 'Response type that sends Not Found status',
  ),
  'bearframework.app.response.notfound.construct' => 
  array (
    'name' => 'BearFramework\\App\\Response\\NotFound::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.response.notfound.setcontenttype' => 
  array (
    'name' => 'BearFramework\\App\\Response\\NotFound::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'bearframework.app.response.notfound.setmaxage' => 
  array (
    'name' => 'BearFramework\\App\\Response\\NotFound::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'bearframework.app.response.notfound.setstatuscode' => 
  array (
    'name' => 'BearFramework\\App\\Response\\NotFound::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'bearframework.app.response.permanentredirect' => 
  array (
    'name' => 'BearFramework\\App\\Response\\PermanentRedirect',
    'type' => 'class',
    'description' => 'Response type that makes permanent redirect',
  ),
  'bearframework.app.response.permanentredirect.construct' => 
  array (
    'name' => 'BearFramework\\App\\Response\\PermanentRedirect::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.response.permanentredirect.setcontenttype' => 
  array (
    'name' => 'BearFramework\\App\\Response\\PermanentRedirect::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'bearframework.app.response.permanentredirect.setmaxage' => 
  array (
    'name' => 'BearFramework\\App\\Response\\PermanentRedirect::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'bearframework.app.response.permanentredirect.setstatuscode' => 
  array (
    'name' => 'BearFramework\\App\\Response\\PermanentRedirect::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'bearframework.app.response.setcontenttype' => 
  array (
    'name' => 'BearFramework\\App\\Response::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'bearframework.app.response.setmaxage' => 
  array (
    'name' => 'BearFramework\\App\\Response::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'bearframework.app.response.setstatuscode' => 
  array (
    'name' => 'BearFramework\\App\\Response::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'bearframework.app.response.temporaryredirect' => 
  array (
    'name' => 'BearFramework\\App\\Response\\TemporaryRedirect',
    'type' => 'class',
    'description' => 'Response type that makes temporary redirect',
  ),
  'bearframework.app.response.temporaryredirect.construct' => 
  array (
    'name' => 'BearFramework\\App\\Response\\TemporaryRedirect::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.response.temporaryredirect.setcontenttype' => 
  array (
    'name' => 'BearFramework\\App\\Response\\TemporaryRedirect::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'bearframework.app.response.temporaryredirect.setmaxage' => 
  array (
    'name' => 'BearFramework\\App\\Response\\TemporaryRedirect::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'bearframework.app.response.temporaryredirect.setstatuscode' => 
  array (
    'name' => 'BearFramework\\App\\Response\\TemporaryRedirect::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'bearframework.app.response.temporaryunavailable' => 
  array (
    'name' => 'BearFramework\\App\\Response\\TemporaryUnavailable',
    'type' => 'class',
    'description' => 'Response type that sends Temporary Unavailable status',
  ),
  'bearframework.app.response.temporaryunavailable.construct' => 
  array (
    'name' => 'BearFramework\\App\\Response\\TemporaryUnavailable::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.response.temporaryunavailable.setcontenttype' => 
  array (
    'name' => 'BearFramework\\App\\Response\\TemporaryUnavailable::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'bearframework.app.response.temporaryunavailable.setmaxage' => 
  array (
    'name' => 'BearFramework\\App\\Response\\TemporaryUnavailable::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'bearframework.app.response.temporaryunavailable.setstatuscode' => 
  array (
    'name' => 'BearFramework\\App\\Response\\TemporaryUnavailable::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'bearframework.app.response.text' => 
  array (
    'name' => 'BearFramework\\App\\Response\\Text',
    'type' => 'class',
    'description' => 'Response type that outputs text. The appropriate content type is set.',
  ),
  'bearframework.app.response.text.construct' => 
  array (
    'name' => 'BearFramework\\App\\Response\\Text::__construct',
    'type' => 'method',
    'description' => 'The constructor',
  ),
  'bearframework.app.response.text.setcontenttype' => 
  array (
    'name' => 'BearFramework\\App\\Response\\Text::setContentType',
    'type' => 'method',
    'description' => 'Sets the value of the content type header',
  ),
  'bearframework.app.response.text.setmaxage' => 
  array (
    'name' => 'BearFramework\\App\\Response\\Text::setMaxAge',
    'type' => 'method',
    'description' => 'Sets the max age attribute of the cache-control header',
  ),
  'bearframework.app.response.text.setstatuscode' => 
  array (
    'name' => 'BearFramework\\App\\Response\\Text::setStatusCode',
    'type' => 'method',
    'description' => 'Sets the status code of the response header',
  ),
  'bearframework.app.routes' => 
  array (
    'name' => 'BearFramework\\App\\Routes',
    'type' => 'class',
    'description' => 'Provides functionality for registering callbacks for specific requests and executing them',
  ),
  'bearframework.app.routes.add' => 
  array (
    'name' => 'BearFramework\\App\\Routes::add',
    'type' => 'method',
    'description' => 'Registers a request handler',
  ),
  'bearframework.app.routes.getresponse' => 
  array (
    'name' => 'BearFramework\\App\\Routes::getResponse',
    'type' => 'method',
    'description' => 'Finds the matching callback and returns its result',
  ),
  'bearframework.app.run' => 
  array (
    'name' => 'BearFramework\\App::run',
    'type' => 'method',
    'description' => 'Call this method to start the application. This method outputs the response.',
  ),
  'bearframework.app.utilities.dir' => 
  array (
    'name' => 'BearFramework\\App\\Utilities\\Dir',
    'type' => 'class',
    'description' => 'Directory utilities',
  ),
  'bearframework.app.utilities.dir.make' => 
  array (
    'name' => 'BearFramework\\App\\Utilities\\Dir::make',
    'type' => 'method',
    'description' => 'Creates a dir if it\'s missing',
  ),
  'bearframework.app.utilities.file' => 
  array (
    'name' => 'BearFramework\\App\\Utilities\\File',
    'type' => 'class',
    'description' => 'File utilities',
  ),
  'bearframework.app.utilities.file.makedir' => 
  array (
    'name' => 'BearFramework\\App\\Utilities\\File::makeDir',
    'type' => 'method',
    'description' => 'Creates the dir of the filename specified if it\'s missing',
  ),
  'bearframework.app.utilities.graphics' => 
  array (
    'name' => 'BearFramework\\App\\Utilities\\Graphics',
    'type' => 'class',
    'description' => 'Graphics utilities',
  ),
  'bearframework.app.utilities.graphics.getsize' => 
  array (
    'name' => 'BearFramework\\App\\Utilities\\Graphics::getSize',
    'type' => 'method',
    'description' => 'Returns the size of the image specified',
  ),
  'bearframework.app.utilities.graphics.resize' => 
  array (
    'name' => 'BearFramework\\App\\Utilities\\Graphics::resize',
    'type' => 'method',
    'description' => 'Resizes a image file',
  ),
  'bearframework.app.wakeup' => 
  array (
    'name' => 'BearFramework\\App::__wakeup',
    'type' => 'method',
    'description' => 'Prevents multiple app instances',
  ),
);