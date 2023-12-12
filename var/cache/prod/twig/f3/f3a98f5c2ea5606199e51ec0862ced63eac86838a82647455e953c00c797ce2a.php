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

/* @assets/vendor/datetimepicker/bootstrap-datetimepicker.fr.js */
class __TwigTemplate_28cfa502020d07b0b6b7666fbc2ad05187c3580bb86e1e94bd29835223e9cf96 extends Template
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
        // line 1
        echo "// moment.js language configuration
// language : french (fr)
// author : John Fischer : https://github.com/jfroffice

(function (factory) {
  if (typeof define === \"function\" && define.amd) {
    define([\"moment\"], factory); // AMD
  } else if (typeof exports === \"object\") {
    module.exports = factory(require(\"../moment\")); // Node
  } else {
    factory(window.moment); // Browser global
  }
})(function (moment) {
  return moment.locale(\"fr\", {
    months:
      \"janvier_février_mars_avril_mai_juin_juillet_août_septembre_octobre_novembre_décembre\".split(
        \"_\"
      ),
    monthsShort:
      \"janv._févr._mars_avr._mai_juin_juil._août_sept._oct._nov._déc.\".split(
        \"_\"
      ),
    weekdays: \"dimanche_lundi_mardi_mercredi_jeudi_vendredi_samedi\".split(\"_\"),
    weekdaysShort: \"dim._lun._mar._mer._jeu._ven._sam.\".split(\"_\"),
    weekdaysMin: \"Di_Lu_Ma_Me_Je_Ve_Sa\".split(\"_\"),
    longDateFormat: {
      LT: \"HH:mm\",
      L: \"DD/MM/YYYY\",
      LL: \"D MMMM YYYY\",
      LLL: \"D MMMM YYYY LT\",
      LLLL: \"dddd D MMMM YYYY LT\",
    },
    calendar: {
      sameDay: \"[Aujourd'hui à] LT\",
      nextDay: \"[Demain à] LT\",
      nextWeek: \"dddd [à] LT\",
      lastDay: \"[Hier à] LT\",
      lastWeek: \"dddd [dernier à] LT\",
      sameElse: \"L\",
    },
    relativeTime: {
      future: \"dans %s\",
      past: \"il y a %s\",
      s: \"quelques secondes\",
      m: \"une minute\",
      mm: \"%d minutes\",
      h: \"une heure\",
      hh: \"%d heures\",
      d: \"un jour\",
      dd: \"%d jours\",
      M: \"un mois\",
      MM: \"%d mois\",
      y: \"un an\",
      yy: \"%d ans\",
    },
    ordinal: function (number) {
      return number + (number === 1 ? \"er\" : \"\");
    },
    week: {
      dow: 1, // Monday is the first day of the week.
      doy: 4, // The week that contains Jan 4th is the first week of the year.
    },
  });
});
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@assets/vendor/datetimepicker/bootstrap-datetimepicker.fr.js";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@assets/vendor/datetimepicker/bootstrap-datetimepicker.fr.js", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\public\\assets\\vendor\\datetimepicker\\bootstrap-datetimepicker.fr.js");
    }
}
