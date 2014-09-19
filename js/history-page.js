 $(document).ready(function(){
        /**导航开始*/
            $('#collapseOne').collapse('toggle');
            $('#collapseTwo').collapse('hide');
            $('#chart').highcharts({                   //图表展示容器，与div的id保持一致
                chart: {
                    type: 'spline'                         //指定图表的类型，默认是折线图（line）
                },
                title: {
                    text: 'My first Highcharts chart'      //指定图表标题
                },
                xAxis: {
                    type: 'datetime',
                        dateTimeLabelFormats: { // don't display the dummy year
                        month: '%b'
                        // year: '%b'
                    }
                   // categories: ['my', 'first', 'chart']   //指定x轴分组
                },
                yAxis: {
                    title: {
                        text: '金额'                  //指定y轴的标题
                    },
                    min:0
                },
                series: [{
            name: '投放金额增长率 2011-2012',
            // Define the data points. All series have a dummy year
            // of 1970/71 in order to be compared on the same x axis. Note
            // that in JavaScript, months start at 0 for January, 1 for February etc.
            data: [
                [Date.UTC(1970,  2 ), 0   ],
                [Date.UTC(1970, 3 ), 0.6 ],
                [Date.UTC(1970, 4), 0.7 ],
                [Date.UTC(1970, 5), 0.8 ],
                [Date.UTC(1970, 6), 0.6 ],
                [Date.UTC(1970, 7), 0.6 ],
                [Date.UTC(1970, 8), 0.67]
            ]
        }, {
            name: 'Winter 2013-2014',
            data: [
                [Date.UTC(1970,  2), 0   ],
                [Date.UTC(1970,  3), 0.2 ],
                [Date.UTC(1970, 4), 0.47],
                [Date.UTC(1970, 5), 0.55],
                [Date.UTC(1970, 6), 1.38],
                [Date.UTC(1971,  7), 1.38],
                [Date.UTC(1971,  8), 1.38]
            ]
        }]
            });
        });