<?php

/* HomeIndexBundle:Index:geekinfo.html.twig */
class __TwigTemplate_45fd0667627b61ce43a1e291bb1f9ca1ab97cc9006aa1cc4d8a603a4f0c9440c extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), "username"), "html", null, true);
        echo "     <br>
";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), "points"), "html", null, true);
        echo "       <br>
";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), 0, array(), "array"), "truename"), "html", null, true);
        echo "  <br>
";
        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), 0, array(), "array"), "sex") == 1)) {
            echo "男";
        } else {
            echo "女";
        }
        echo " <br>
";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), 0, array(), "array"), "age"), "html", null, true);
        echo "  <br>
";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), 0, array(), "array"), "motto"), "html", null, true);
        echo "  <br>
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), 0, array(), "array"), "introduce"), "html", null, true);
        echo "  <br>
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), 0, array(), "array"), "pic"), "html", null, true);
        echo "  <br>
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), 0, array(), "array"), "phone"), "html", null, true);
        echo "  <br>
";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), 0, array(), "array"), "email"), "html", null, true);
        echo "  <br>
";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["geek"]) ? $context["geek"] : $this->getContext($context, "geek")), 0, array(), "array"), "other"), "html", null, true);
        echo "  <br>";
    }

    public function getTemplateName()
    {
        return "HomeIndexBundle:Index:geekinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  59 => 10,  55 => 9,  51 => 8,  47 => 7,  43 => 6,  39 => 5,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }
}
