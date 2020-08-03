$(document).ready(function () {
    am4core.ready(function() {

// Themes begin
        am4core.useTheme(am4themes_material);
        am4core.useTheme(am4themes_animated);
// Themes end

        var chart = am4core.create("childrenChart", am4charts.XYChart);
        chart.hiddenState.properties.opacity = 0; // this creates initial fade-in
        // var data = [];
        $.get(API_URL + '/child').then(function (response) {
            // console.log(response);
            chart.data = response;

            var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis.renderer.grid.template.location = 0;
            categoryAxis.dataFields.category = "siblings";
            categoryAxis.renderer.minGridDistance = 40;
            categoryAxis.fontSize = 11;

            var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.min = 0;
            valueAxis.max = 10;
            valueAxis.strictMinMax = true;
            valueAxis.renderer.minGridDistance = 30;
// axis break
            var axisBreak = valueAxis.axisBreaks.create();
            axisBreak.startValue = 40;
            axisBreak.endValue = 100;
//axisBreak.breakSize = 0.005;

// fixed axis break
            var d = (axisBreak.endValue - axisBreak.startValue) / (valueAxis.max - valueAxis.min);
            axisBreak.breakSize = 0.05 * (1 - d) / d; // 0.05 means that the break will take 5% of the total value axis height

// make break expand on hover
            var hoverState = axisBreak.states.create("hover");
            hoverState.properties.breakSize = 1;
            hoverState.properties.opacity = 0.1;
            hoverState.transitionDuration = 1500;

            axisBreak.defaultState.transitionDuration = 1000;
            /*
            // this is exactly the same, but with events
            axisBreak.events.on("over", function() {
              axisBreak.animate(
                [{ property: "breakSize", to: 1 }, { property: "opacity", to: 0.1 }],
                1500,
                am4core.ease.sinOut
              );
            });
            axisBreak.events.on("out", function() {
              axisBreak.animate(
                [{ property: "breakSize", to: 0.005 }, { property: "opacity", to: 1 }],
                1000,
                am4core.ease.quadOut
              );
            });*/

            var series = chart.series.push(new am4charts.ColumnSeries());
            series.dataFields.categoryX = "siblings";
            series.dataFields.valueY = "total";
            series.columns.template.tooltipText = "{valueY.value}";
            series.columns.template.tooltipY = 0;
            series.columns.template.strokeOpacity = 0;

// as by default columns of the same series are of the same color, we add adapter which takes colors from chart.colors color set
            series.columns.template.adapter.add("fill", function(fill, target) {
                return chart.colors.getIndex(target.dataItem.index);
            });

            // Enable export
            chart.exporting.menu = new am4core.ExportMenu();
        }); // end am4core.ready()

        });

    am4core.ready(function() {

// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

        var chart = am4core.create("childTagCloud", am4plugins_wordCloud.WordCloud);
        chart.fontFamily = "Courier New";
        var series = chart.series.push(new am4plugins_wordCloud.WordCloudSeries());
        series.randomness = 0.1;
        series.rotationThreshold = 0.5;
        $.get(API_URL + '/child').then(function (response) {
            series.data = response;
            series.dataFields.word = "siblings";
            series.dataFields.value = "total";

            series.heatRules.push({
                "target": series.labels.template,
                "property": "fill",
                "min": am4core.color("#0000CC"),
                "max": am4core.color("#CC00CC"),
                "dataField": "value"
            });

            series.labels.template.url = "https://stackoverflow.com/questions/tagged/{word}";
            series.labels.template.urlTarget = "_blank";
            series.labels.template.tooltipText = "{word}: {value}";

            var hoverState = series.labels.template.states.create("hover");
            hoverState.properties.fill = am4core.color("#FF0000");

            var subtitle = chart.titles.create();
            subtitle.text = "";

            var title = chart.titles.create();
            title.text = "Siblings Count";
            title.fontSize = 20;
            title.fontWeight = "800";
        });


// Enable export
        chart.exporting.menu = new am4core.ExportMenu();

    }); // end am4core.ready()

    am4core.ready(function() {

// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

        var chart = am4core.create("childForceDirected", am4plugins_forceDirected.ForceDirectedTree);
        chart.legend = new am4charts.Legend();
        var networkSeries = chart.series.push(new am4plugins_forceDirected.ForceDirectedSeries())

        $.get(API_URL + '/arrayChild').then(function (response) {
           // console.log(response);
            networkSeries.data = response;


            // collapsible force-directed tree
            networkSeries.dataFields.linkWith = "linkWith";
            networkSeries.dataFields.name = "name";
            networkSeries.dataFields.id = "name";
            networkSeries.dataFields.value = "value";
            networkSeries.dataFields.children = "children";

            networkSeries.nodes.template.tooltipText = "{name}";
            networkSeries.nodes.template.fillOpacity = 1;

            networkSeries.nodes.template.label.text = "{name}"
            networkSeries.fontSize = 8;
            networkSeries.maxLevels = 2;
            networkSeries.maxRadius = am4core.percent(6);
            networkSeries.manyBodyStrength = -16;
            networkSeries.nodes.template.label.hideOversized = true;
            networkSeries.nodes.template.label.truncate = true;

        });

        //enable export
        chart.exporting.menu = new am4core.ExportMenu();


    }); // end am4core.ready()

    am4core.ready(function() {

// Themes begin
        am4core.useTheme(am4themes_animated);
// Themes end

        var chart = am4core.create("childPackedCircle", am4plugins_forceDirected.ForceDirectedTree);
        chart.legend = new am4charts.Legend();

        var networkSeries = chart.series.push(new am4plugins_forceDirected.ForceDirectedSeries())

        $.get(API_URL + '/arrayChild').then(function (response) {
            networkSeries.data = response;

                networkSeries.dataFields.linkWith = "linkWith";
            networkSeries.dataFields.name = "name";
            networkSeries.dataFields.id = "name";
            networkSeries.dataFields.value = "value";
            networkSeries.dataFields.children = "children";
            networkSeries.links.template.distance = 1;
            networkSeries.nodes.template.tooltipText = "{name}";
            networkSeries.nodes.template.fillOpacity = 1;
            networkSeries.nodes.template.outerCircle.scale = 1;

            networkSeries.nodes.template.label.text = "{name}"
            networkSeries.fontSize = 8;
            networkSeries.nodes.template.label.hideOversized = true;
            networkSeries.nodes.template.label.truncate = true;
            networkSeries.minRadius = am4core.percent(2);
            networkSeries.manyBodyStrength = -5;
            networkSeries.links.template.strokeOpacity = 0;
        })

            //enable export
        chart.exporting.menu = new am4core.ExportMenu();
    }); // end am4core.ready()

});
