anychart.onDocumentReady(function() {
    // set the data
    var data = [
        {x: "Улица Академика Королёва", value: 25116},
        {x: "Улица Милашенкова", value: 32106},
        {x: "Улица Сергея Эйзенштейна", value: 41646},
        {x: "Телецентр", value: 58343},
        {x: "Тимирязевская", value: 106825}
    ];
    // create the chart
    var chart = anychart.pie();
    // set the chart title
    chart.title("Наименее загруженные станции Московского метро за 3 квартал 2022 года");
    // add the data
    chart.data(data);
    // display the chart in the container
    chart.container('container');
    chart.draw();
    });