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

/* @assets/js/webpush-client.min.js */
class __TwigTemplate_cf859c430d6e0621c7a91f9c2f0248579c2933c8ec2797f6dbb5ab4e08d15320 extends Template
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
        echo "!function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){\"undefined\"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:\"Module\"}),Object.defineProperty(e,\"__esModule\",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&\"object\"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,\"default\",{enumerable:!0,value:e}),2&t&&\"string\"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,\"a\",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p=\"/\",n(n.s=\"PAM3\")}({PAM3:function(e,t){function n(e,t){if(!(e instanceof t))throw new TypeError(\"Cannot call a class as a function\")}function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,\"value\"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function i(e,t,n){return t&&r(e.prototype,t),n&&r(e,n),e}function o(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:\"\";throw new Error(\"Missing parameter \"+e)}var s=function(){return navigator.permissions.query({name:\"notifications\"})},u=function(e){return navigator.serviceWorker.register(e).then(function(e){return e})},a=function(e){return e.pushManager.getSubscription()},c=function(){function e(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:o();n(this,e),this.url=t}return i(e,[{key:\"register\",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:o(),t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return fetch(this.url,{method:\"POST\",mode:\"cors\",credentials:\"include\",cache:\"default\",headers:new Headers({Accept:\"application/json\",\"Content-Type\":\"application/json\"}),body:JSON.stringify({subscription:e,options:t})}).then(function(){return e})}},{key:\"updateOptions\",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:o(),t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return fetch(this.url,{method:\"PUT\",mode:\"cors\",credentials:\"include\",cache:\"default\",headers:new Headers({Accept:\"application/json\",\"Content-Type\":\"application/json\"}),body:JSON.stringify({subscription:e,options:t})}).then(function(){return e})}},{key:\"unregister\",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:o();return fetch(this.url,{method:\"DELETE\",mode:\"cors\",credentials:\"include\",cache:\"default\",headers:new Headers({Accept:\"application/json\",\"Content-Type\":\"application/json\"}),body:JSON.stringify({subscription:e})}).then(function(){return!0})}},{key:\"ping\",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:o(),t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return fetch(this.url,{method:\"PING\",mode:\"cors\",credentials:\"include\",cache:\"default\",headers:new Headers({Accept:\"application/json\",\"Content-Type\":\"application/json\"}),body:JSON.stringify({subscription:e,options:t})}).then(function(){return!0})}}]),e}(),p=function(){function e(t){var r=this,i=t.isSupported,s=void 0===i?o():i,u=t.PermissionStatus,a=t.ServiceWorkerRegistration,p=t.Subscription,l=t.applicationServerKey,d=t.subscribeUrl;n(this,e),this.supported=s,!1!==s&&(this.permissionStatus=u||o(\"permissionStatus\"),this.registration=a||o(\"registration\"),this.applicationServerKey=l||o(\"applicationServerKey\"),this.subscription=p,void 0!==d&&(this.storage=new c(d)),u.onchange=function(e){r.permissionStatus=e})}return i(e,[{key:\"isSupported\",value:function(){return this.supported}},{key:\"ensureSupported\",value:function(){if(!this.isSupported())throw Error(\"This browser does not support push notifications.\")}},{key:\"ensureUrlIsProvided\",value:function(){if(!this.storage)throw Error(\"Webpush client error: subscribeUrl has not been provided.\");return!0}},{key:\"isUrlProvided\",value:function(){return!!this.storage}},{key:\"getPermissionState\",value:function(){return this.ensureSupported(),this.permissionStatus.state}},{key:\"getSubscription\",value:function(){return this.subscription}},{key:\"subscribe\",value:function(){var e=this,t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{},n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:this.isUrlProvided();return this.ensureSupported(),this.registration.pushManager.subscribe({userVisibleOnly:!0,applicationServerKey:this.applicationServerKey}).then(function(r){return e.subscription=r,!0===n&&e.ensureUrlIsProvided()?e.storage.register(r,t):new Promise(function(e){return e(r)})})}},{key:\"unsubscribe\",value:function(){var e=this,t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:this.isUrlProvided();return this.ensureSupported(),a(this.registration).then(function(n){n.unsubscribe().then(function(){return e.subscription=null,!0===t&&e.ensureUrlIsProvided()?e.storage.unregister(n):new Promise(function(e){return e(!0)})})})}},{key:\"updateOptions\",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return this.ensureSupported(),this.ensureUrlIsProvided(),this.storage.updateOptions(this.subscription,e)}},{key:\"ping\",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};return this.ensureSupported(),this.ensureUrlIsProvided(),this.storage.ping(this.subscription,e)}}]),e}();window.WebPushClientFactory={isSupported:function(){return\"PushManager\"in window&&\"fetch\"in window&&\"permissions\"in navigator&&\"serviceWorker\"in navigator},create:function(e){var t=e.serviceWorkerPath,n=e.subscribeUrl,r=e.serverKey;return this.isSupported()?s().then(function(e){return u(t).then(function(t){return a(t).then(function(i){return new p({isSupported:!0,applicationServerKey:function(e){for(var t=(e+\"=\".repeat((4-e.length%4)%4)).replace(/\\-/g,\"+\").replace(/_/g,\"/\"),n=window.atob(t),r=new Uint8Array(n.length),i=0;i<n.length;++i)r[i]=n.charCodeAt(i);return r}(r),PermissionStatus:e,ServiceWorkerRegistration:t,Subscription:i,subscribeUrl:n})})}).catch(function(e){return console.warn(\"Webpush client cannot be started: \"+e),new p({isSupported:!1})})}):new Promise(function(e){e(new p({isSupported:!1}))})}}}});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@assets/js/webpush-client.min.js";
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
        return new Source("", "@assets/js/webpush-client.min.js", "C:\\xampp\\htdocs\\Symfony\\mediamaps\\public\\assets\\js\\webpush-client.min.js");
    }
}
