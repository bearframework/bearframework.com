<html>
    <body>
        <p>Bear Framework is designed for simplicity. It's API is simple but very powerful. Here is a super quick overview of the framework. There are two global objects that will help you develop your app.</p>
    <component src="code"><?= "
\$app
    -&gt;config
        -&gt;appDir
        -&gt;dataDir
        -&gt;logsDir
        -&gt;updateEnvironment
        -&gt;handleErrors
        -&gt;displayErrors
        -&gt;logErrors
        -&gt;assetsPathPrefix
        -&gt;assetsMaxAge
    -&gt;request
        -&gt;method
        -&gt;scheme
        -&gt;host
        -&gt;base
        -&gt;path
        -&gt;query
    -&gt;routes
        -&gt;add ( string|string[] \$pattern , callable \$callback [, array \$options = [&quot;GET&quot;] ] )
    -&gt;logger
        -&gt;log ( mixed \$level , string \$message [, array \$context = [] )
    -&gt;addons
        -&gt;add ( string \$pathname [, array \$options = [] ] )
        -&gt;getList ( void )
    -&gt;hooks
        -&gt;add ( string \$name , callable \$callback )
        -&gt;execute ( string \$name )
    -&gt;assets
        -&gt;addDir ( string \$pathname )
        -&gt;getUrl ( string \$filename [, array \$options = [] ] )
    -&gt;data
        -&gt;get ( array \$parameters )
        -&gt;set ( array \$parameters )
        -&gt;append ( array \$parameters )
        -&gt;duplicate ( array \$parameters )
        -&gt;rename ( array \$parameters )
        -&gt;delete ( array \$parameters )
        -&gt;search ( array \$parameters )
        -&gt;makePublic ( array \$parameters )
        -&gt;makePrivate ( array \$parameters )
        -&gt;isPublic ( string \$key )
        -&gt;getFilename ( string \$key )
    -&gt;cache
        -&gt;get ( string \$key [, string \$defaultValue = false ] )
        -&gt;set ( mixed \$key , mixed \$value [, int \$ttl = 0 ] )
        -&gt;delete ( mixed \$key )
    -&gt;classes
        -&gt;add ( string \$class , string \$filename )
        -&gt;load ( string \$class )
    -&gt;container
        -&gt;set ( string \$name , string|object|callable \$value ] )
        -&gt;get ( string \$name )
        -&gt;has ( string \$name )
    -&gt;urls
        -&gt;get ( string \$path = '/' )
    -&gt;filesystem
        -&gt;makeDir ( string \$pathname )
        -&gt;makeFileDir ( string \$filename )
    -&gt;images
        -&gt;getSize ( string \$filename )
        -&gt;resize ( string \$sourceFilename , string \$destinationFilename [, array \$options = [] ] )
    -&gt;initialize ( void )
    -&gt;getContext ( string \$filename )
    -&gt;run ( void )
    -&gt;respond ( \BearFramework\App\Response \$response )
        " ?></component>
    <p>The following object makes developing addons and your application exactly the same. It provides information about the app or addon directory and provides shortcuts to other directory dependant methods.</p>
    <component src="code"><?= "
\$context
    -&gt;dir
    -&gt;options // only for addons
    -&gt;assets
        -&gt;getUrl ( string \$filename [, array \$options = [] ] )
    -&gt;classes
        -&gt;add ( string \$class , string \$filename )
        " ?></component>
    <h2>Class definitions</h2>
    <component src="apiList" type="class"/>
</body>
</html>