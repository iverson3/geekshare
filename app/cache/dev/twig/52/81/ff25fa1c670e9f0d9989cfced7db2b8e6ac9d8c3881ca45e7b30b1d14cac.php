<?php

/* HomeIndexBundle:Index:share.html.twig */
class __TwigTemplate_5281ff25fa1c670e9f0d9989cfced7db2b8e6ac9d8c3881ca45e7b30b1d14cac extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"zh-cn\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t\t<title></title>
\t</head>
\t<body>
\t\t<h2>极客分享</h2>
\t\t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["shareform"]) ? $context["shareform"] : $this->getContext($context, "shareform")), 'form');
        echo "
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "HomeIndexBundle:Index:share.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  19 => 1,);
    }
}
