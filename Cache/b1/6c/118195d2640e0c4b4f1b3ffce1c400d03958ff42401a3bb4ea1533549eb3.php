<?php

/* index.html */
class __TwigTemplate_b16c118195d2640e0c4b4f1b3ffce1c400d03958ff42401a3bb4ea1533549eb3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'facet_radio_widget' => array($this, 'block_facet_radio_widget'),
            'facet_radio_horizontal_widget' => array($this, 'block_facet_radio_horizontal_widget'),
            'facet_checkbox_widget' => array($this, 'block_facet_checkbox_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "

        <header class=\"listing\">
            <div class=\"row collapse\">
                <div class=\"large-2 columns\"><h2>Resource List</h2></div>
                <div class=\"large-8 columns\">
                    <div class=\"mainsearch\">
                     <form method=\"get\" action=\"/\">
                        <div class=\"row hidden\"></div>
                        <div class=\"row collapse\">        
                        <div class=\"large-8 columns\"><label for=\"form_q\">Search</label>
                        ";
        // line 14
        if ($this->getAttribute((isset($context["params"]) ? $context["params"] : null), "q", array())) {
            // line 15
            echo "                            ";
            $context["searchValue"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "q", array());
            // line 16
            echo "                        ";
        } else {
            // line 17
            echo "                            ";
            $context["searchValue"] = "";
            // line 18
            echo "                        ";
        }
        // line 19
        echo "                        <input type=\"text\" id=\"form_q\" name=\"q\" placeholder=\"Type here to search\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["searchValue"]) ? $context["searchValue"] : null), "html", null, true);
        echo "\"/></div>
                           
                        <div class=\"large-4 columns\"><button type=\"submit\" id=\"form_search\" name=\"search\" class=\"tiny button secondary\">Search Resources</button></div>                        
                        </div>
                    </form>
                    </div>                    
                </div>
                <div class=\"large-2 columns\"></div>
            </div>
        </header>

    <div class=\"main\">

        
    <div class=\"panel\">
        <div class=\"row\">            
            <div class=\"count large-6 columns\">
                <p>Total Count: ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["results"]) ? $context["results"] : null), "totalResults", array()), "html", null, true);
        echo "</p>
            </div>
            ";
        // line 39
        echo "            <div class=\"navigation large-6 columns text-right\">
                
                 ";
        // line 41
        echo $this->env->getExtension('lre_pagination')->paginationFilter($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "totalResults", array()), (isset($context["currentPage"]) ? $context["currentPage"] : null));
        echo "
               
            </div>
        </div>
    </div>  
    <div class=\"row\">
        <div class=\"large-12 columns\">
            <div class=\"right\">
                ";
        // line 49
        $context["sortValue"] = $this->getAttribute((isset($context["params"]) ? $context["params"] : null), "sort", array());
        // line 50
        echo "                ";
        if (((isset($context["sortValue"]) ? $context["sortValue"] : null) == "score")) {
            // line 51
            echo "                    ";
            $context["creationDateClsClass"] = "";
            // line 52
            echo "                    ";
            $context["relevenceClsClass"] = "selected";
            // line 53
            echo "                ";
        } else {
            // line 54
            echo "                    ";
            $context["creationDateClsClass"] = "selected";
            // line 55
            echo "                    ";
            $context["relevenceClsClass"] = "";
            // line 56
            echo "                ";
        }
        // line 57
        echo "                <ul class=\"inline-list\">
                    <li>Sort By:</li>
                    <li class=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["relevenceClsClass"]) ? $context["relevenceClsClass"] : null), "html", null, true);
        echo "\"><a  href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array("sort" => "score")))), "html", null, true);
        echo "\">Relevance</a></li>
                    <li class=\"";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["creationDateClsClass"]) ? $context["creationDateClsClass"] : null), "html", null, true);
        echo "\"><a  href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array("sort" => "creation_date")))), "html", null, true);
        echo "\">Date Created</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"large-2 columns\">
            <div class=\"facets\">
                   
            ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "facets", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["labelFacet"] => $context["searchFacet"]) {
            // line 70
            echo "
                ";
            // line 71
            if ((twig_in_filter($context["labelFacet"], twig_get_array_keys_filter((isset($context["defaultConfig"]) ? $context["defaultConfig"] : null))) && (twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["defaultConfig"]) ? $context["defaultConfig"] : null), $context["labelFacet"], array(), "array"), ",")) <= 1))) {
                // line 72
                echo "                
                ";
            } else {
                // line 74
                echo "                    ";
                if ((twig_length_filter($this->env, $context["searchFacet"]) > 0)) {
                    // line 75
                    echo "                        ";
                    if ((($context["labelFacet"] == "strand") || ($context["labelFacet"] == "strandunit"))) {
                        // line 76
                        echo "                            ";
                        $context["active"] = "";
                        // line 77
                        echo "                        ";
                    } else {
                        // line 78
                        echo "                            ";
                        $context["active"] = "true";
                        // line 79
                        echo "                        ";
                    }
                    // line 80
                    echo "                        ";
                    $this->displayBlock("facet_checkbox_widget", $context, $blocks);
                    echo "
                    ";
                }
                // line 82
                echo "                ";
            }
            // line 83
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['labelFacet'], $context['searchFacet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            </div>
        </div>   
        <div class=\"large-10 columns\">
            <table class=\"records_list\">
                <thead>
                    <tr>
                        <th  class=\"id_column\">ID</th>
                        <th>Record</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["results"]) ? $context["results"] : null), "results", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["resource"]) {
            // line 96
            echo "                    <tr>
                        <td  class=\"id_column\">";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["resource"], "id", array()), "html", null, true);
            echo "</td>
                        <td>
                                ";
            // line 99
            $this->env->loadTemplate("resource.widget.twig")->display($context);
            // line 100
            echo "                        </td>
                    </tr>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['resource'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </tbody>
            </table>
        </div> 
    </div>
</div>

";
    }

    // line 113
    public function block_facet_radio_widget($context, array $blocks = array())
    {
        // line 114
        ob_start();
        // line 115
        echo "    <div class=\"section-container accordion keyskills-wrapper\" data-section=\"accordion\">
         <section class=\"active\">
          <p class=\"title\" data-section-title><a href=\"#\">";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["labelFacet"]) ? $context["labelFacet"] : null), "html", null, true);
        echo "</a></p>
             <div class=\"content\" data-section-content>
                    ";
        // line 119
        $context["allFacetSelected"] = "selected";
        // line 120
        echo "                    ";
        $context["allFacetKey"] = "";
        // line 121
        echo "                    ";
        $context["allCount"] = 0;
        // line 122
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 123
            echo "                        ";
            $context["allCount"] = ((isset($context["allCount"]) ? $context["allCount"] : null) + $this->getAttribute($context["facet"], "count", array()));
            // line 124
            echo "                        ";
            $context["allFacetKey"] = $this->getAttribute($context["facet"], "facetKey", array());
            // line 125
            echo "                        ";
            if ($this->getAttribute($context["facet"], "selected", array())) {
                // line 126
                echo "                             ";
                $context["allFacetSelected"] = "";
                // line 127
                echo "                        ";
            }
            // line 128
            echo "                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                     <ul class=\"no-bullet\">
                         <li>
                            <a class=\"radio_facet ";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["allFacetSelected"]) ? $context["allFacetSelected"] : null), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), (isset($context["params"]) ? $context["params"] : null))), "html", null, true);
        echo "\">All (";
        echo twig_escape_filter($this->env, (isset($context["allCount"]) ? $context["allCount"] : null), "html", null, true);
        echo ")</a>
                        </li>
                        ";
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 134
            echo "                             ";
            if ($this->getAttribute($context["facet"], "entity", array())) {
                // line 135
                echo "                                 ";
                if ($this->getAttribute($context["facet"], "selected", array())) {
                    // line 136
                    echo "                                     <li><a class=\"radio_facet selected\" href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute($context["facet"], "facetKey", array()) => $this->getAttribute($this->getAttribute($context["facet"], "entity", array()), "id", array()))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facet"], "entity", array()), "title", array()), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["facet"], "count", array()), "html", null, true);
                    echo ")</a></li>
                                ";
                } else {
                    // line 138
                    echo "                                     <li><a class=\"radio_facet\" href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute($context["facet"], "facetKey", array()) => $this->getAttribute($this->getAttribute($context["facet"], "entity", array()), "id", array()))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facet"], "entity", array()), "title", array()), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["facet"], "count", array()), "html", null, true);
                    echo ")</a></li>
                                ";
                }
                // line 140
                echo "                              ";
            }
            // line 141
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "                    </ul>
            </div>
         </section>
        </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 150
    public function block_facet_radio_horizontal_widget($context, array $blocks = array())
    {
        // line 151
        ob_start();
        // line 152
        echo "    <ul class=\"inline-list filters\">
        <li><strong>Label Facet</strong></li>

        ";
        // line 155
        if (array_key_exists("removeParams", $context)) {
            // line 156
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["removeParams"]) ? $context["removeParams"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["paramName"]) {
                // line 157
                echo "                
                ";
                // line 158
                $context["params"] = (isset($context["params"]) ? $context["params"] : null);
                // line 159
                echo "                ";
                // line 160
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paramName'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "        ";
        }
        // line 162
        echo "        
        ";
        // line 163
        $context["allFacetSelected"] = "selected";
        // line 164
        echo "        ";
        $context["allFacetKey"] = "";
        // line 165
        echo "        ";
        $context["allCount"] = 0;
        // line 166
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 167
            echo "            ";
            $context["allCount"] = ((isset($context["allCount"]) ? $context["allCount"] : null) + $this->getAttribute($context["facet"], "count", array()));
            // line 168
            echo "            ";
            $context["allFacetKey"] = $this->getAttribute($context["facet"], "facetKey", array());
            // line 169
            echo "            ";
            if ($this->getAttribute($context["facet"], "selected", array())) {
                // line 170
                echo "                 ";
                $context["allFacetSelected"] = "";
                // line 171
                echo "            ";
            }
            // line 172
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "        <li>
            <a class=\"radio_facet ";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["allFacetSelected"]) ? $context["allFacetSelected"] : null), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), (isset($context["params"]) ? $context["params"] : null))), "html", null, true);
        echo "\">Facet Label (";
        echo twig_escape_filter($this->env, (isset($context["allCount"]) ? $context["allCount"] : null), "html", null, true);
        echo ")</a>
        </li>
        ";
        // line 176
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 177
            echo "             ";
            if ($this->getAttribute($context["facet"], "entity", array())) {
                // line 178
                echo "                ";
                $context["facetTitle"] = $this->getAttribute($this->getAttribute($context["facet"], "entity", array()), "title", array());
                // line 179
                echo "                ";
                $context["facetValue"] = $this->getAttribute($this->getAttribute($context["facet"], "entity", array()), "id", array());
                // line 180
                echo "             ";
            } else {
                // line 181
                echo "                ";
                $context["facetTitle"] = $this->getAttribute($context["facet"], "label", array());
                // line 182
                echo "                ";
                $context["facetValue"] = $this->getAttribute($context["facet"], "value", array());
                // line 183
                echo "             ";
            }
            // line 184
            echo "        
            ";
            // line 185
            if ($this->getAttribute($context["facet"], "selected", array())) {
                // line 186
                echo "                 <li><a class=\"radio_facet selected\" href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute($context["facet"], "facetKey", array()) => (isset($context["facetValue"]) ? $context["facetValue"] : null))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["facetTitle"]) ? $context["facetTitle"] : null), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["facet"], "count", array()), "html", null, true);
                echo ")</a></li>
            ";
            } else {
                // line 188
                echo "                 <li><a class=\"radio_facet\" href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute($context["facet"], "facetKey", array()) => (isset($context["facetValue"]) ? $context["facetValue"] : null))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["facetTitle"]) ? $context["facetTitle"] : null), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["facet"], "count", array()), "html", null, true);
                echo ")</a></li>
            ";
            }
            // line 190
            echo "              
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "    </ul>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 196
    public function block_facet_checkbox_widget($context, array $blocks = array())
    {
        // line 197
        ob_start();
        // line 198
        echo "    <div class=\"section-container accordion keyskills-wrapper\" data-section=\"accordion\">
        ";
        // line 199
        if ((isset($context["active"]) ? $context["active"] : null)) {
            // line 200
            echo "            <section class=\"active\">
        ";
        } else {
            // line 202
            echo "            <section class=\"\">
        ";
        }
        // line 204
        echo "          <p class=\"title\" data-section-title><a href=\"#\">";
        echo twig_escape_filter($this->env, (isset($context["labelFacet"]) ? $context["labelFacet"] : null), "html", null, true);
        echo "</a></p>
             <div class=\"content\" data-section-content>
                     
                     <ul class=\"no-bullet\">
                     
                        ";
        // line 209
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["searchFacet"]) ? $context["searchFacet"] : null));
        foreach ($context['_seq'] as $context["facetKey"] => $context["facet"]) {
            // line 210
            echo "                             ";
            if ($this->getAttribute($context["facet"], "entity", array())) {
                // line 211
                echo "                                ";
                if ($this->getAttribute($context["facet"], "selected", array())) {
                    // line 212
                    echo "                                    <li><a class=\"f_label selected\" href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute($context["facet"], "facetKey", array()) => $this->getAttribute($context["facet"], "value", array()))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facet"], "entity", array()), "title", array()), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["facet"], "count", array()), "html", null, true);
                    echo ")</a></li>
                                ";
                } else {
                    // line 214
                    echo "                                    <li><a  class=\"f_label\" href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('path')->getCallable(), array((isset($context["route"]) ? $context["route"] : null), twig_array_merge((isset($context["params"]) ? $context["params"] : null), array($this->getAttribute($context["facet"], "facetKey", array()) => $this->getAttribute($context["facet"], "value", array()))))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["facet"], "entity", array()), "title", array()), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["facet"], "count", array()), "html", null, true);
                    echo ")</a></li>
                                ";
                }
                // line 216
                echo "                              ";
            }
            // line 217
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['facetKey'], $context['facet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 218
        echo "                    </ul>
            </div>
         </section>
        </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 218,  605 => 217,  602 => 216,  592 => 214,  582 => 212,  579 => 211,  576 => 210,  572 => 209,  563 => 204,  559 => 202,  555 => 200,  553 => 199,  550 => 198,  548 => 197,  545 => 196,  539 => 192,  532 => 190,  522 => 188,  512 => 186,  510 => 185,  507 => 184,  504 => 183,  501 => 182,  498 => 181,  495 => 180,  492 => 179,  489 => 178,  486 => 177,  482 => 176,  473 => 174,  470 => 173,  464 => 172,  461 => 171,  458 => 170,  455 => 169,  452 => 168,  449 => 167,  444 => 166,  441 => 165,  438 => 164,  436 => 163,  433 => 162,  430 => 161,  424 => 160,  422 => 159,  420 => 158,  417 => 157,  412 => 156,  410 => 155,  405 => 152,  403 => 151,  400 => 150,  390 => 142,  384 => 141,  381 => 140,  371 => 138,  361 => 136,  358 => 135,  355 => 134,  351 => 133,  342 => 131,  338 => 129,  332 => 128,  329 => 127,  326 => 126,  323 => 125,  320 => 124,  317 => 123,  312 => 122,  309 => 121,  306 => 120,  304 => 119,  299 => 117,  295 => 115,  293 => 114,  290 => 113,  280 => 103,  264 => 100,  262 => 99,  257 => 97,  254 => 96,  237 => 95,  224 => 84,  210 => 83,  207 => 82,  201 => 80,  198 => 79,  195 => 78,  192 => 77,  189 => 76,  186 => 75,  183 => 74,  179 => 72,  177 => 71,  174 => 70,  157 => 69,  143 => 60,  137 => 59,  133 => 57,  130 => 56,  127 => 55,  124 => 54,  121 => 53,  118 => 52,  115 => 51,  112 => 50,  110 => 49,  99 => 41,  95 => 39,  90 => 36,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  55 => 14,  42 => 3,  39 => 2,  11 => 1,);
    }
}
