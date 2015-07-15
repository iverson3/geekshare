<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6f33dab821e518c7fe18b4ee1c0dc4cc58ed02fead926deaf6137c2895c26df0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 12,  54 => 11,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  563 => 380,  503 => 323,  491 => 314,  480 => 306,  476 => 305,  472 => 303,  466 => 300,  463 => 299,  460 => 298,  457 => 297,  451 => 294,  448 => 293,  445 => 292,  443 => 291,  438 => 289,  426 => 279,  415 => 274,  406 => 268,  400 => 265,  394 => 262,  389 => 260,  386 => 259,  383 => 258,  377 => 256,  369 => 254,  366 => 253,  362 => 251,  360 => 250,  355 => 247,  351 => 246,  344 => 242,  339 => 239,  333 => 238,  325 => 235,  322 => 234,  314 => 231,  311 => 230,  308 => 229,  306 => 228,  302 => 227,  287 => 215,  257 => 188,  94 => 27,  74 => 25,  70 => 24,  66 => 23,  55 => 14,  35 => 12,  31 => 11,  19 => 1,);
    }
}
