<html>
    <body>
        <h1>Performance comparison</h1>
        <p>
            We as developers work on many different web apps and use many different libraries and external APIs. Each and every function call slows our app, so it's important that the framework itself doesn't add much to the total response time. We've made performance benchmarks (using ApacheBench) to show you the Bear Framework's performance against other popular PHP frameworks, and we've compared the requests per second each framework can handle.<br/><br/>
            This is what we've done to make the benchmarks fair:<br/>
            1. Configured each framework to output the text 'Hi'.<br/>
            2. Installed each framework according to their documentation (mostly using Composer).<br/>
            3. Ran --optimize-autoloader Composer command.<br/>
            4. Set the environment variable to production (disabled debug mode) to all frameworks that have such option.<br/>
            5. Ran the tests on AWS EC2 m3.medium (Amazon Linux AMI 2015.09.1 (HVM), SSD) with all updates installed.<br/>
            6. Installed Zend OPCache, Apache 2.4.16 and PHP 5.6.17.<br/>
            7. Restarted Apache before each framework benchmark.<br/>
            8. Ran the benchmark twice after Apache restart and only use the second benchmark result.<br/>
            9. Tested total of 1000 requests per framework, 10 at the same time.
        </p>
        <h2>The results</h2>
        <p>
            In the following chart, you can see the requests per second each framework can handle. The results for Bear Framework are great, but they are not surprising because the framework is optimized for simplicity - nothing is loaded until necessary. Even addons can't slow it down significantly, because only one file is loaded per addon, and the others when needed.
        </p>
        <component src="file:<?= $context->dir . 'components/performanceChart.php' ?>"/>
        <p>
            We believe Bear Framework can be your fast start and help you grow without compromising performance and developer productivity.
        </p>
    </body>
</html>