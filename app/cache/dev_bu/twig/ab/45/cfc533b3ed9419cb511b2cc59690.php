<?php

/* WebProfilerBundle:Profiler:base_js.html.twig */
class __TwigTemplate_ab45cfc533b3ed9419cb511b2cc59690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},
            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },
            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },
            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },
            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            };

        return {
            hasClass: hasClass,
            removeClass: removeClass,
            addClass: addClass,
            request: request,
            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },
            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }

        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  46 => 14,  30 => 5,  26 => 3,  24 => 2,  106 => 36,  99 => 34,  90 => 30,  67 => 23,  63 => 21,  58 => 20,  49 => 13,  27 => 8,  19 => 1,  178 => 53,  173 => 48,  170 => 47,  165 => 43,  160 => 40,  152 => 35,  144 => 34,  136 => 27,  132 => 26,  128 => 25,  124 => 23,  121 => 22,  115 => 13,  111 => 11,  108 => 10,  102 => 6,  96 => 54,  94 => 53,  89 => 50,  87 => 47,  82 => 27,  80 => 43,  76 => 41,  74 => 40,  66 => 35,  62 => 34,  57 => 31,  44 => 15,  42 => 12,  35 => 6,  50 => 15,  41 => 7,  32 => 6,  29 => 4,  92 => 25,  83 => 21,  77 => 25,  71 => 24,  64 => 15,  60 => 14,  55 => 22,  47 => 10,  40 => 7,  37 => 6,  31 => 5,  28 => 1,);
    }
}
