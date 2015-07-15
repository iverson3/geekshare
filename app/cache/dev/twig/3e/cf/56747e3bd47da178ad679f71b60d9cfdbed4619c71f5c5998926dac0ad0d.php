<?php

/* HomeIndexBundle:Index:geeklist.html.twig */
class __TwigTemplate_3ecf56747e3bd47da178ad679f71b60d9cfdbed4619c71f5c5998926dac0ad0d extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["geeklist"]) ? $context["geeklist"] : $this->getContext($context, "geeklist")));
        foreach ($context['_seq'] as $context["_key"] => $context["geek"]) {
            // line 2
            echo "\t";
            if (($this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), "isopen") == 1)) {
                // line 3
                echo "\t";
            } else {
                // line 4
                echo "\t";
            }
            // line 5
            echo "
\t<h3>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), "username"), "html", null, true);
            echo "</h3>
\t<h3>积分: ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), "points"), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), "logintime"), "d/m/Y H:i"), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), "name"), "html", null, true);
            echo "</h3>
\t<h3>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), "pic"), "html", null, true);
            echo "</h3>
\t<h3>座右铭: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), "motto"), "html", null, true);
            echo "</h3>
\t<hr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geek'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "HomeIndexBundle:Index:geeklist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  32 => 5,  29 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
