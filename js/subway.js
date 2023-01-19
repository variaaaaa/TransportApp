anychart.onDocumentReady(function() {

    // set the data
    var data = [
        {x: "Комсомольская", value: 15244486},
        {x: "ВДНХ", value: 12608745},
        {x: "Щёлковская", value: 12412212},
        {x: "Новогиреево", value: 11261096},
        {x: "Выхино", value: 10990775}
    ];
  
    // create the chart
    var chart = anychart.pie();
  
    // set the chart title
    chart.title("Самые загруженные станции Московского метро за 3 квартал 2022 года");
  
    // add the data
    chart.data(data);
  
    // display the chart in the container
    chart.container('container');
    chart.draw();
  
  });