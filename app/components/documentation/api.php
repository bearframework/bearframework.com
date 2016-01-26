<html>
    <body>
        <p>Bear Framework is designed for simplicity. It's API is simple but very powerful. Here is a super quick overview of the framework. There are two global objects that will help you develop your app.</p>
    <component src="code"><?= "
\$app
    -&gt;config
        -&gt;appDir
        -&gt;addonsDir
        -&gt;dataDir
        -&gt;logsDir
        -&gt;handleErrors
        -&gt;displayErrors
        -&gt;logErrors
        -&gt;errorLogFilename
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
    -&gt;log
        -&gt;write ( string \$filename , string \$data )
    -&gt;components
        -&gt;addAlias ( string \$alias , string \$original )
        -&gt;insertHTML ( string \$target , string \$html [, string \$position = 'beforeBodyEnd' ] )
    -&gt;addons
        -&gt;add ( string \$id [, array \$options = [] ] )
        -&gt;getOptions ( string \$id )
    -&gt;hooks
        -&gt;add ( string \$name , callable \$callback )
        -&gt;execute ( string \$name )
    -&gt;assets
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
        -&gt;exists ( mixed \$key )
        -&gt;set ( mixed \$key , mixed \$value [, int \$ttl = 0 ] )
        -&gt;delete ( mixed \$key )
    -&gt;classes
        -&gt;add ( string \$class , string \$filename )
    -&gt;load ( string \$filename )
    -&gt;getUrl ( [ string \$path = '/' ] )
    -&gt;run ( void )
        " ?></component>
    <component src="code"><?= "
\$context
    -&gt;dir
    -&gt;assets
        -&gt;getUrl ( string \$filename [, array \$options = [] ] )
    -&gt;classes
        -&gt;add ( string \$class , string \$filename )
    -&gt;load ( string \$filename )
    -&gt;getOptions ( void ) // only for addons
        " ?></component>
    <h2>Class definitions</h2>
    <component src="apiList" type="class"/>
</body>
</html>