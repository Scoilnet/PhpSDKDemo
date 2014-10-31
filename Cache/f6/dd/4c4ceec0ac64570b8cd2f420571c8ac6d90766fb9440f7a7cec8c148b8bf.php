<?php

/* base.html.twig */
class __TwigTemplate_f6dd4c4ceec0ac64570b8cd2f420571c8ac6d90766fb9440f7a7cec8c148b8bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'footerJS' => array($this, 'block_footerJS'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]><html class=\"no-js lt-ie9\" lang=\"en\" > <![endif]-->
<!--[if gt IE 8]><!--> 
<html class=\"no-js\" lang=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "_locale"), "method"), "html", null, true);
        echo "\" > 
<!--<![endif]-->

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width\">

  <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  
    ";
        // line 13
        $this->displayBlock('head', $context, $blocks);
        // line 20
        echo "    
</head>
<body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 38
        echo "
        ";
        // line 39
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo " 
            
        ";
        // line 55
        $this->displayBlock('footerJS', $context, $blocks);
        // line 56
        echo " 
            
</body>
</html>";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Resource Metadata";
    }

    // line 13
    public function block_head($context, array $blocks = array())
    {
        // line 14
        echo "        <link rel=\"icon\" sizes=\"16x16\" href=\"/favicon.ico\" />
        <link rel=\"stylesheet\" href=\"/css/foundation.css\" />
        <link rel=\"stylesheet\" href=\"/css/lre.css\" />
        <link rel=\"stylesheet\" href=\"/css/search.css\" />
        <script src=\"/js/custom.modernizr.js\"></script>
         \t
    ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "            <div class=\"block row\">                
                    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 26
            echo "                        <div class=\"flash-message\">
                            <em>Notice</em>: ";
            // line 27
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "

            
                    ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "            </div>
        ";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "
\t\t    ";
    }

    // line 39
    public function block_footer($context, array $blocks = array())
    {
        // line 40
        echo "            <script src=\"//codeorigin.jquery.com/jquery-2.0.3.min.js\"></script> 
            <script src=\"/js/foundation.min.js\"></script>
            <script src=\"/js/search.js\"></script>
            <script>
                var lreDir = '';
                                  var locale = 'en';
                 if(locale != 'en'){
                     lreDir += '/'+locale;
                 }
                 lreDir += '/lre/backend/';
                \$(document).foundation();
            </script>
         
        ";
    }

    // line 55
    public function block_footerJS($context, array $blocks = array())
    {
        // line 56
        echo "        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 56,  153 => 55,  136 => 40,  133 => 39,  128 => 34,  125 => 33,  120 => 36,  118 => 33,  113 => 30,  104 => 27,  101 => 26,  97 => 25,  94 => 24,  91 => 23,  81 => 14,  78 => 13,  72 => 11,  65 => 56,  63 => 55,  59 => 53,  57 => 39,  54 => 38,  52 => 23,  47 => 20,  45 => 13,  40 => 11,  30 => 4,  25 => 1,);
    }
}
