<?php

/* resource.title.format.twig */
class __TwigTemplate_a9b10faceaa515027bc469db8363bd0ebb6b83eba4f6363bd0d61b1fafa6d537 extends Twig_Template
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
        echo "
";
        // line 2
        if ($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "urls", array())) {
            // line 3
            echo "<a class=\"pageview\"  href=\"";
            echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "urls", array())), "html", null, true);
            echo "\" title=\"Link to ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "title", array()), "html", null, true);
            echo "\" target=\"_blank\">
    <span class=\"r_format_";
            // line 4
            if ($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "format", array())) {
                echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "format", array()), "id", array())), "html", null, true);
            }
            echo " r_format\"></span> 
    ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "title", array()), "html", null, true);
            echo "
</a>
";
        } else {
            // line 8
            echo "    <span class=\"r_format_";
            if ($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "format", array())) {
                echo twig_escape_filter($this->env, twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "format", array()), "id", array())), "html", null, true);
            }
            echo " r_format\"></span> 
    ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["resource"]) ? $context["resource"] : null), "title", array()), "html", null, true);
            echo "
";
        }
        // line 10
        echo " ";
    }

    public function getTemplateName()
    {
        return "resource.title.format.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  50 => 9,  43 => 8,  37 => 5,  31 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
