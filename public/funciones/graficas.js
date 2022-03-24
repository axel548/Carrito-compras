var morris1 = new Morris.Line({
    // ID of the element in which to draw the chart.
    element: 'myfirstchart',
    // Chart data records -- each entry in this array corresponds to a point on
    // the chart.
    data: [
        { year: '2008', value: 20, value2: 30 },
        { year: '2009', value: 10, value2: 40 },
        { year: '2010', value: 5, value2: 10 },
        { year: '2011', value: 5, value2: 5 },
        { year: '2012', value: 50, value2: 20 },
        { year: '2013', value: 45, value2: 11 },
        { year: '2014', value: 100, value2: 15 },
        { year: '2015', value: 30, value2: 5 }
    ],
    // The name of the data record attribute that contains x-values.
    xkey: 'year',
    // A list of names of data record attributes that contain y-values.
    ykeys: ['value', 'value2'],
    lineWidth: 1,
    // Labels for the ykeys -- will be displayed when you hover over the
    // chart.
    labels: ['Coca-cola', 'Pepsi'],
    resize: true,
    lineColors: ['#C14D9F', '#2CB4AC']
});

// Use Morris.Area instead of Morris.Line
Morris.Area({
    element: 'graph-client',
    data: [
        { x: '2010 Q4', y: 3, z: 7 },
        { x: '2011 Q1', y: 3, z: 4 },
        { x: '2011 Q2', y: 3, z: 0 },
        { x: '2011 Q3', y: 2, z: 5 },
        { x: '2011 Q4', y: 8, z: 2 },
        { x: '2012 Q1', y: 4, z: 4 }
    ],
    xkey: 'x',
    ykeys: ['y', 'z'],
    labels: ['Y', 'Z'],
    resize: true,
    lineColors: ['#C14D9F', '#2CB4AC'],
    lineWidth: 1
});


$("#botData").on("click", function() {
    var nuevaData = [
        { year: '2008', value: 5, value2: 10 },
        { year: '2009', value: 10, value2: 20 },
        { year: '2010', value: 15, value2: 0 },
        { year: '2011', value: 5, value2: 10 },
        { year: '2012', value: 30, value2: 25 },
        { year: '2013', value: 20, value2: 22 },
        { year: '2014', value: 45, value2: 13.5 },
        { year: '2015', value: 30, value2: 3 }
    ];
    morris1.setData(nuevaData);
});