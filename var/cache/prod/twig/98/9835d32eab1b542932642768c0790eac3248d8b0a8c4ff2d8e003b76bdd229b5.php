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

/* @assets/vendor/autocomplete/bootstrap-autocomplete.min.js */
class __TwigTemplate_d9a5e624877047ed9cb54315dbef20f56289459140f4fcf4bba5af273efc4009 extends Template
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
        echo "/*!
  * Bootstrap Autocomplete v0.2.0 (https://iqbalfn.github.io/bootstrap-autocomplete/)
  * Copyright 2019 Iqbal Fauzi
  * Licensed under MIT (https://github.com/iqbalfn/bootstrap-autocomplete/blob/master/LICENSE)
  */
!function(e,t){\"object\"==typeof exports&&\"undefined\"!=typeof module?t(exports,require(\"jquery\")):\"function\"==typeof define&&define.amd?define([\"exports\",\"jquery\"],t):t((e=e||self)[\"bootstrap-autocomplete\"]={},e.jQuery)}(this,function(e,s){\"use strict\";function i(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,\"value\"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function o(i){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?Object(arguments[e]):{},t=Object.keys(r);\"function\"==typeof Object.getOwnPropertySymbols&&(t=t.concat(Object.getOwnPropertySymbols(r).filter(function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable}))),t.forEach(function(e){var t,n;t=i,e=r[n=e],n in t?Object.defineProperty(t,n,{value:e,enumerable:!0,configurable:!0,writable:!0}):t[n]=e})}return i}s=s&&Object.prototype.hasOwnProperty.call(s,\"default\")?s.default:s;var t=\"transitionend\";function n(e){var t=this,n=!1;return s(this).one(l.TRANSITION_END,function(){n=!0}),setTimeout(function(){n||l.triggerTransitionEnd(t)},e),this}var l={TRANSITION_END:\"bsTransitionEnd\",getUID:function(e){for(;e+=~~(1e6*Math.random()),document.getElementById(e););return e},getSelectorFromElement:function(e){var t=e.getAttribute(\"data-target\");t&&\"#\"!==t||(t=(e=e.getAttribute(\"href\"))&&\"#\"!==e?e.trim():\"\");try{return document.querySelector(t)?t:null}catch(e){return null}},getTransitionDurationFromElement:function(e){if(!e)return 0;var t=s(e).css(\"transition-duration\"),n=s(e).css(\"transition-delay\"),i=parseFloat(t),e=parseFloat(n);return i||e?(t=t.split(\",\")[0],n=n.split(\",\")[0],1e3*(parseFloat(t)+parseFloat(n))):0},reflow:function(e){return e.offsetHeight},triggerTransitionEnd:function(e){s(e).trigger(t)},supportsTransitionEnd:function(){return Boolean(t)},isElement:function(e){return(e[0]||e).nodeType},typeCheckConfig:function(e,t,n){for(var i in n)if(Object.prototype.hasOwnProperty.call(n,i)){var r=n[i],o=t[i],s=o&&l.isElement(o)?\"element\":(s=o,{}.toString.call(s).match(/\\s([a-z]+)/i)[1].toLowerCase());if(!new RegExp(r).test(s))throw new Error(e.toUpperCase()+': Option \"'+i+'\" provided type \"'+s+'\" but expected type \"'+r+'\".')}var s},findShadowRoot:function(e){if(!document.documentElement.attachShadow)return null;if(\"function\"!=typeof e.getRootNode)return e instanceof ShadowRoot?e:e.parentNode?l.findShadowRoot(e.parentNode):null;e=e.getRootNode();return e instanceof ShadowRoot?e:null}};s.fn.emulateTransitionEnd=n,s.event.special[l.TRANSITION_END]={bindType:t,delegateType:t,handle:function(e){if(s(e.target).is(this))return e.handleObj.handler.apply(this,arguments)}};var a=\"autocomplete\",u=\"bs.autocomplete\",c=\".\"+u,r=\".data-api\",h=s.fn[a],f={list:null,prefetch:null,filter:null,filterDelay:300,filterMinChars:1,filterRelation:null,maxResult:10,onPick:null,onItemRendered:null,preProcess:null},_={list:\"(null|string|element)\",prefetch:\"(null|string)\",filter:\"(null|string)\",filterDelay:\"number\",filterMinChars:\"number\",filterRelation:\"(null|object)\",maxResult:\"number\",preProcess:\"(null|function)\",onPick:\"(null|function)\",onItemRendered:\"(null|function)\"},d={BLUR_DATA_API:\"blur\"+c+r,CLICK_DATA_API:\"click\"+c+r,KEYDOWN_DATA_API:\"keydown\"+c+r,INPUT_DATA_API:\"input\"+c+r,PICK:\"pick\"+c,ITEM_RENDER:\"itemrender\"+c},p=40,m=38,g=13,v=27,w=function(){function r(e,t){if(this._config=this._getConfig(t),this._element=e,this._items=[],this._labels={},this._isShown=!1,this._dropdown=null,this._spinner=null,this._result=[],this._query=\"\",this._preventClose=!1,this._timer=null,this._relations=null,e.hasAttribute(\"list\")&&(this._config.list=\"#\"+e.getAttribute(\"list\"),e.removeAttribute(\"list\")),!this._config.list&&!this._config.prefetch&&!this._config.filter)throw new TypeError(\"No data source provided\");this._config.filterRelation&&this._handleRelations(),e.setAttribute(\"autocomplete\",\"off\"),this._makeDropdown(),this._makeSpinner(),this._fetchPresetData(),this._addElementListener()}var e,t,n=r.prototype;return n.show=function(){this._isShown||this._result.length&&this._showDropdown()},n.hide=function(){this._isShown&&this._hideDropdown()},n.dispose=function(){s(this._element).off(c),s.removeData(this._element,u),this._config=null,this._element=null,this._items=null,this._labels=null,this._isShown=null,this._dropdown=null,this._spinner=null,this._result=null,this._query=null,this._preventClose=null,this._timer&&clearTimeout(this._timer),this._timer=null},n._addElementListener=function(){var i=this;s(this._element).on(d.KEYDOWN_DATA_API,function(e){var t,n=!1;switch(e.keyCode){case p:e.altKey&&!i._isShown?(i._query=i._element.value.trim().toLowerCase(),i._query&&(i._findFromList(),n=!0)):(i._focusNext(),n=!0);break;case m:i._focusPrev(),n=!0;break;case g:i._isShown&&((t=(t=s(i._dropdown).children(\".active\").get(0))||s(i._dropdown).children(\":first-child\").get(0))&&i._selectItem(t),i.hide(),n=!0);break;case v:n=!0,i.hide()}n&&e.preventDefault()}),s(this._element).on(d.INPUT_DATA_API,function(e){i._query=i._element.value.trim().toLowerCase(),i._query?i._findFromList():(i._truncateDropdown(),i.hide())}),s(this._element).on(d.BLUR_DATA_API,function(e){i._preventClose||setTimeout(function(){return i.hide()},150)})},n._fetchPresetData=function(){var e,n=this;this._config.list&&(\"string\"==typeof(e=this._config.list)&&(e=document.querySelector(this._config.list)),e&&Array.from(e.children).forEach(function(e){var t=e.innerHTML.toLowerCase();n._items.includes(t)||(n._items.push(t),n._labels[t]=e.innerHTML)})),this._config.prefetch&&(this._showSpinner(),s.get(this._config.prefetch,function(e){n._hideSpinner(),n._config.preProcess&&(e=n._config.preProcess(e)),e.forEach(function(e){var t=e.toLowerCase();n._items.includes(t)||(n._items.push(t),n._labels[t]=e)})}))},n._findFromAjax=function(){var r,o=this;this._config.filter&&(this._dropdown.children.length>=this._config.maxResult||(this._timer&&clearTimeout(this._timer),r=this._query,this._timer=setTimeout(function(){if(r==o._query){o._showSpinner();var e=o._config.filter.replace(/%23/g,\"#\").replace(\"#QUERY#\",o._query);if(o._relations){var t,n=e.includes(\"?\")?\"&\":\"?\";for(t in o._relations){var i=o._relations[t],i=s(i).val();i&&(e+=\"\"+n+t+\"=\"+i,n=\"&\")}}s.get(e,function(e){o._hideSpinner(),o._config.preProcess&&(e=o._config.preProcess(e));var n=[];e.forEach(function(e){var t=e.toLowerCase();o._items.includes(t)||(o._items.push(t),o._labels[t]=e,n.push(e),o._result.push(e))}),n.length&&o._renderItem(n),o._result.length?o.show():o.hide()})}},this._config.filterDelay)))},n._findFromList=function(){var t=this;this._truncateDropdown(),this._result=[];var n=[];this._items.forEach(function(e){e.includes(t._query)&&(e=t._labels[e],t._result.includes(e)||(n.push(e),t._result.push(e)))}),n.length?(this._renderItem(n),this.show()):this.hide(),this._findFromAjax()},n._focusNext=function(){var e=s(this._dropdown).children(\":first-child\").get(0),t=s(this._dropdown).children(\".active\").get(0);t&&(t.classList.remove(\"active\"),(t=s(t).next().get(0))&&(e=t)),e&&e.classList.add(\"active\")},n._focusPrev=function(){var e=s(this._dropdown).children(\":last-child\").get(0),t=s(this._dropdown).children(\".active\").get(0);t&&(t.classList.remove(\"active\"),(t=s(t).prev().get(0))&&(e=t)),e&&e.classList.add(\"active\")},n._getConfig=function(e){return e=o({},f,e),l.typeCheckConfig(a,e,_),e},n._handleRelations=function(){var e,t=this;for(e in this._relations=[],this._config.filterRelation){var n=this._config.filterRelation[e];this._relations[e]=s(n).get(0),s(this._relations[e]).change(function(e){t._element.value=\"\",s(t._element).change(),t._items=[]})}},n._hideDropdown=function(){this._isShown=!1,this._dropdown.classList.remove(\"show\")},n._hideSpinner=function(){this._spinner.style.display=\"none\"},n._makeDropdown=function(){this._element.parentNode.style.position=\"relative\";this._dropdown=s('<div class=\"dropdown-menu\" style=\"width:100%\"></div>').appendTo(this._element.parentNode).get(0)},n._makeSpinner=function(){this._spinner=s('<div class=\"spinner-border spinner-border-sm text-secondary\" role=\"status\"></div>').appendTo(this._element.parentNode).get(0),s(this._spinner).css({position:\"absolute\",right:s(this._element).css(\"padding-right\"),top:this._element.offsetTop+(this._element.offsetHeight-this._spinner.offsetHeight)/2+\"px\"}),this._hideSpinner()},n._renderItem=function(e){var i=this;e.forEach(function(e){var t,n;i._dropdown.children.length>=i._config.maxResult||(n=(t=s('<a class=\"dropdown-item\" href=\"#\"></a>')).get(0),t.text(e).appendTo(i._dropdown),i._config.onItemRendered&&i._config.onItemRendered(i._element,n),n=s.Event(d.ITEM_RENDER,{item:n}),s(i._element).trigger(n),t.on(d.CLICK_DATA_API,function(e){i._selectItem(e.target),i._preventClose=!0,i.hide(),e.preventDefault(),i._preventClose=!1}))})},n._selectItem=function(e){this._element.value=e.innerText,this._config.onPick&&this._config.onPick(this._element,e);e=s.Event(d.PICK,{item:e});s(this._element).trigger(e)},n._showDropdown=function(){this._isShown=!0,this._dropdown.classList.add(\"show\")},n._showSpinner=function(){this._spinner.style.display=\"inline-block\"},n._truncateDropdown=function(){this._dropdown.innerHTML=\"\"},r._jQueryInterface=function(n,i){return this.each(function(){var e=s(this).data(u),t=o({},f,s(this).data(),\"object\"==typeof n&&n?n:{});if(e||(e=new r(this,t),s(this).data(u,e)),\"string\"==typeof n){if(\"undefined\"==typeof e[n])throw new TypeError('No method named \"'+n+'\"');e[n](i)}})},e=r,t=[{key:\"VERSION\",get:function(){return\"0.2.0\"}},{key:\"Default\",get:function(){return f}}],(n=null)&&i(e.prototype,n),t&&i(e,t),r}();s.fn[a]=w._jQueryInterface,s.fn[a].Constructor=w,s.fn[a].noConflict=function(){return s.fn[a]=h,w._jQueryInterface},e.Autocomplete=w,Object.defineProperty(e,\"__esModule\",{value:!0})});
//# sourceMappingURL=bootstrap-autocomplete.min.js.map";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@assets/vendor/autocomplete/bootstrap-autocomplete.min.js";
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
        return new Source("", "@assets/vendor/autocomplete/bootstrap-autocomplete.min.js", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\public\\assets\\vendor\\autocomplete\\bootstrap-autocomplete.min.js");
    }
}
