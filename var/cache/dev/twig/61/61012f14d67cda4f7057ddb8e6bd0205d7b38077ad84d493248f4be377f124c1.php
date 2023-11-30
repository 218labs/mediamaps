<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/reporting/map.html.twig */
class __TwigTemplate_bcc1fc3fb01c27d46beaa41cc3c8dff21b0dedfdff4046011325e5393564391d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reporting/map.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reporting/map.html.twig"));

        // line 1
        echo "<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 600px
}
</style>

<!-- Resources -->
<script src=\"https://cdn.amcharts.com/lib/5/index.js\"></script>
<script src=\"https://cdn.amcharts.com/lib/5/map.js\"></script>
<script src=\"https://cdn.amcharts.com/lib/5/geodata/worldLow.js\"></script>
<script src=\"https://cdn.amcharts.com/lib/5/themes/Animated.js\"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

var data = [
  {
    id: \"US\",
    name: \"United States\",
    value: 100
  }, {
    id: \"GB\",
    name: \"United Kingdom\",
    value: 100
  }, {
    id: \"CN\",
    name: \"China\",
    value: 100
  }, {
    id: \"IN\",
    name: \"India\",
    value: 100
  }, {
    id: \"AU\",
    name: \"Australia\",
    value: 100
  }, {
    id: \"CA\",
    name: \"Canada\",
    value: 100
  }, {
    id: \"BR\",
    name: \"Brasil\",
    value: 100
  }, {
    id: \"ZA\",
    name: \"South Africa\",
    value: 100
  }
];

var root = am5.Root.new(\"chartdiv\");
root.setThemes([am5themes_Animated.new(root)]);

var chart = root.container.children.push(am5map.MapChart.new(root, {}));

var polygonSeries = chart.series.push(
  am5map.MapPolygonSeries.new(root, {
    geoJSON: am5geodata_worldLow,
    exclude: [\"AQ\"]
  })
);

var bubbleSeries = chart.series.push(
  am5map.MapPointSeries.new(root, {
    valueField: \"value\",
    calculateAggregates: true,
    polygonIdField: \"id\"
  })
);

var circleTemplate = am5.Template.new({});

bubbleSeries.bullets.push(function(root, series, dataItem) {
  var container = am5.Container.new(root, {});

  var circle = container.children.push(
    am5.Circle.new(root, {
      radius: 20,
      fillOpacity: 0.7,
      fill: am5.color(0xff0000),
      cursorOverStyle: \"pointer\",
      tooltipText: `{name}: [bold]{value}[/]`
    }, circleTemplate)
  );

  var countryLabel = container.children.push(
    am5.Label.new(root, {
      text: \"{name}\",
      paddingLeft: 5,
      populateText: true,
      fontWeight: \"bold\",
      fontSize: 13,
      centerY: am5.p50
    })
  );

  circle.on(\"radius\", function(radius) {
    countryLabel.set(\"x\", radius);
  })

  return am5.Bullet.new(root, {
    sprite: container,
    dynamic: true
  });
});

bubbleSeries.bullets.push(function(root, series, dataItem) {
  return am5.Bullet.new(root, {
    sprite: am5.Label.new(root, {
      text: \"{value.formatNumber('#.')}\",
      fill: am5.color(0xffffff),
      populateText: true,
      centerX: am5.p50,
      centerY: am5.p50,
      textAlign: \"center\"
    }),
    dynamic: true
  });
});



// minValue and maxValue must be set for the animations to work
bubbleSeries.set(\"heatRules\", [
  {
    target: circleTemplate,
    dataField: \"value\",
    min: 10,
    max: 50,
    minValue: 0,
    maxValue: 100,
    key: \"radius\"
  }
]);

bubbleSeries.data.setAll(data);

updateData();
setInterval(function() {
  updateData();
}, 2000)

function updateData() {
  for (var i = 0; i < bubbleSeries.dataItems.length; i++) {
    bubbleSeries.data.setIndex(i, { value: Math.round(Math.random() * 100), id: data[i].id, name: data[i].name })
  }
}


}); // end am5.ready()
</script>

<!-- HTML -->
<div id=\"chartdiv\"></div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/reporting/map.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 600px
}
</style>

<!-- Resources -->
<script src=\"https://cdn.amcharts.com/lib/5/index.js\"></script>
<script src=\"https://cdn.amcharts.com/lib/5/map.js\"></script>
<script src=\"https://cdn.amcharts.com/lib/5/geodata/worldLow.js\"></script>
<script src=\"https://cdn.amcharts.com/lib/5/themes/Animated.js\"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

var data = [
  {
    id: \"US\",
    name: \"United States\",
    value: 100
  }, {
    id: \"GB\",
    name: \"United Kingdom\",
    value: 100
  }, {
    id: \"CN\",
    name: \"China\",
    value: 100
  }, {
    id: \"IN\",
    name: \"India\",
    value: 100
  }, {
    id: \"AU\",
    name: \"Australia\",
    value: 100
  }, {
    id: \"CA\",
    name: \"Canada\",
    value: 100
  }, {
    id: \"BR\",
    name: \"Brasil\",
    value: 100
  }, {
    id: \"ZA\",
    name: \"South Africa\",
    value: 100
  }
];

var root = am5.Root.new(\"chartdiv\");
root.setThemes([am5themes_Animated.new(root)]);

var chart = root.container.children.push(am5map.MapChart.new(root, {}));

var polygonSeries = chart.series.push(
  am5map.MapPolygonSeries.new(root, {
    geoJSON: am5geodata_worldLow,
    exclude: [\"AQ\"]
  })
);

var bubbleSeries = chart.series.push(
  am5map.MapPointSeries.new(root, {
    valueField: \"value\",
    calculateAggregates: true,
    polygonIdField: \"id\"
  })
);

var circleTemplate = am5.Template.new({});

bubbleSeries.bullets.push(function(root, series, dataItem) {
  var container = am5.Container.new(root, {});

  var circle = container.children.push(
    am5.Circle.new(root, {
      radius: 20,
      fillOpacity: 0.7,
      fill: am5.color(0xff0000),
      cursorOverStyle: \"pointer\",
      tooltipText: `{name}: [bold]{value}[/]`
    }, circleTemplate)
  );

  var countryLabel = container.children.push(
    am5.Label.new(root, {
      text: \"{name}\",
      paddingLeft: 5,
      populateText: true,
      fontWeight: \"bold\",
      fontSize: 13,
      centerY: am5.p50
    })
  );

  circle.on(\"radius\", function(radius) {
    countryLabel.set(\"x\", radius);
  })

  return am5.Bullet.new(root, {
    sprite: container,
    dynamic: true
  });
});

bubbleSeries.bullets.push(function(root, series, dataItem) {
  return am5.Bullet.new(root, {
    sprite: am5.Label.new(root, {
      text: \"{value.formatNumber('#.')}\",
      fill: am5.color(0xffffff),
      populateText: true,
      centerX: am5.p50,
      centerY: am5.p50,
      textAlign: \"center\"
    }),
    dynamic: true
  });
});



// minValue and maxValue must be set for the animations to work
bubbleSeries.set(\"heatRules\", [
  {
    target: circleTemplate,
    dataField: \"value\",
    min: 10,
    max: 50,
    minValue: 0,
    maxValue: 100,
    key: \"radius\"
  }
]);

bubbleSeries.data.setAll(data);

updateData();
setInterval(function() {
  updateData();
}, 2000)

function updateData() {
  for (var i = 0; i < bubbleSeries.dataItems.length; i++) {
    bubbleSeries.data.setIndex(i, { value: Math.round(Math.random() * 100), id: data[i].id, name: data[i].name })
  }
}


}); // end am5.ready()
</script>

<!-- HTML -->
<div id=\"chartdiv\"></div>

", "admin/reporting/map.html.twig", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\templates\\admin\\reporting\\map.html.twig");
    }
}
