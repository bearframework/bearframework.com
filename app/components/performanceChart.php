<?php
$chartData = Data::$performanceComparison;
$max = 0;
foreach ($chartData as $index => $value) {
    $chartData[$index][2] = 'color: #118FC2; stroke-width: 0;';
    if ($chartData[$index][1] > $max) {
        $max = $chartData[$index][1];
    }
}
array_unshift($chartData, json_decode('["Framework", "Requests per second", {"role": "style"}]', true));
$elementID = 'crt' . uniqid();
?><html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {packages: ['corechart']});
            google.charts.setOnLoadCallback(function () {
                var data = google.visualization.arrayToDataTable(<?= json_encode($chartData) ?>);

                var view = new google.visualization.DataView(data);
                view.setColumns([0, 1,
                    {calc: 'stringify',
                        sourceColumn: 1,
                        type: 'string',
                        role: 'annotation'},
                    2]);

                var options = {
                    width: '100%',
                    backgroundColor: '#f5f2f0',
                    height: 400,
                    bar: {groupWidth: '60%'},
                    chartArea: {left: 150, top: 0, width: '100%', height: 400},
                    legend: {position: 'none'},
                    hAxis: {gridlines: {count: <?= ceil($max / 100) + 1 ?>, color: '#d9d9d9'}, viewWindow: {max: <?= ceil($max / 100) * 100 ?>}},
                    tooltip: {isHtml: true}
                };
                var chart = new google.visualization.BarChart(document.getElementById('<?= $elementID ?>'));
                chart.draw(view, options);
                window.addEventListener('resize', function () {
                    chart.draw(view, options);
                });
            });
        </script>
    </head>
    <body>
        <div style="background-color:#f5f2f0;padding:1rem;"><div id="<?= $elementID ?>"></div></div>
    </body>
</html>