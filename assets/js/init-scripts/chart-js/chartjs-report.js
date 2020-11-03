( function ( $ ) {
    "use strict";

    
    //bar chart
    var cht = document.getElementById( "barChartMeet" );
    //    ctx.height = 200;
    var myChart1 = new Chart( cht, {
        type: 'bar',
        data: {
            labels: [ '1', '5', '10', '13', '20', '23', '26' ],
            datasets: [
                {
                    label: "Success",
                    data: [ 1, 2, 2, 1, 2, 2, 1 ],
                    borderColor: "rgba(0,204,51,0.5)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0,204,51,0.5)"
                            },
                {
                    label: "Canceled",
                    data: [ 0, 0, 1, 0, 0, 1, 0 ],
                    borderColor: "rgba(0,0,0,0.09)",
                    borderWidth: "0",
                    backgroundColor: "rgba(255,0,0,0.6)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    

    // //pie chart
    // var ctx = document.getElementById( "pieChart" );
    // ctx.height = 300;
    // var myChart = new Chart( ctx, {
    //     type: 'pie',
    //     data: {
    //         datasets: [ {
    //             data: [ 45, 25, 20, 10 ],
    //             backgroundColor: [
    //                                 "rgba(0, 123, 255,0.9)",
    //                                 "rgba(0, 123, 255,0.7)",
    //                                 "rgba(0, 123, 255,0.5)",
    //                                 "rgba(0,0,0,0.07)"
    //                             ],
    //             hoverBackgroundColor: [
    //                                 "rgba(0, 123, 255,0.9)",
    //                                 "rgba(0, 123, 255,0.7)",
    //                                 "rgba(0, 123, 255,0.5)",
    //                                 "rgba(0,0,0,0.07)"
    //                             ]

    //                         } ],
    //         labels: [
    //                         "green",
    //                         "green",
    //                         "green"
    //                     ]
    //     },
    //     options: {
    //         responsive: true
    //     }
    // } );

    //doughut chart
    var ctx = document.getElementById( "meetRatio" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'doughnut',
        data: {
            datasets: [ {
                data: [ 10,2],
                backgroundColor: [
                                    "rgba(0,204,51,0.5)",
                                    "rgba(255,0,0,0.6)"
                                ],
                hoverBackgroundColor: [
                                    // "rgba(0, 123, 255,0.9)",
                                    // "rgba(0, 123, 255,0.7)"
                                    "rgba(0,204,51,0.5)",
                                    "rgba(255,0,0,0.6)"
                                ]

                            } ],
            labels: [
                            "Successfull",
                            "Canceled"
                        ]
        },
        options: {
            responsive: true
        }
    } );


    var ctx = document.getElementById( "goalsPer" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'doughnut',
        data: {
            datasets: [ {
                data: [ 10,2],
                backgroundColor: [
                                    "rgba(0,204,51,0.5)",
                                    "rgba(255,0,0,0.6)"
                                ],
                hoverBackgroundColor: [
                                    // "rgba(0, 123, 255,0.9)",
                                    // "rgba(0, 123, 255,0.7)"
                                    "rgba(0,204,51,0.5)",
                                    "rgba(255,0,0,0.6)"
                                ]

                            } ],
            labels: [
                            "Successfull",
                            "Canceled"
                        ]
        },
        options: {
            responsive: true
        }
    } );

    // //polar chart
    // var ctx = document.getElementById( "polarChart" );
    // ctx.height = 150;
    // var myChart = new Chart( ctx, {
    //     type: 'polarArea',
    //     data: {
    //         datasets: [ {
    //             data: [ 15, 18, 9, 6, 19 ],
    //             backgroundColor: [
    //                                 "rgba(0, 123, 255,0.9)",
    //                                 "rgba(0, 123, 255,0.8)",
    //                                 "rgba(0, 123, 255,0.7)",
    //                                 "rgba(0,0,0,0.2)",
    //                                 "rgba(0, 123, 255,0.5)"
    //                             ]

    //                         } ],
    //         labels: [
    //                         "green",
    //                         "green",
    //                         "green",
    //                         "green"
    //                     ]
    //     },
    //     options: {
    //         responsive: true
    //     }
    // } );

    // // single bar chart
    // var ctx = document.getElementById( "singelBarChart" );
    // ctx.height = 150;
    // var myChart = new Chart( ctx, {
    //     type: 'bar',
    //     data: {
    //         labels: [ "Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat" ],
    //         datasets: [
    //             {
    //                 label: "My First dataset",
    //                 data: [ 40, 55, 75, 81, 56, 55, 40 ],
    //                 borderColor: "rgba(0, 123, 255, 0.9)",
    //                 borderWidth: "0",
    //                 backgroundColor: "rgba(0, 123, 255, 0.5)"
    //                         }
    //                     ]
    //     },
    //     options: {
    //         scales: {
    //             yAxes: [ {
    //                 ticks: {
    //                     beginAtZero: true
    //                 }
    //                             } ]
    //         }
    //     }
    // } );




} )( jQuery );