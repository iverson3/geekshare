<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_616e9013507ab09d3c50529a7b99d42dfeb2261f3198cf035c9e0a71bf23e4df extends Twig_Template
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
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => (isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace"))));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 14,  38 => 13,  26 => 5,  87 => 20,  25 => 3,  21 => 2,  92 => 21,  89 => 20,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  69 => 25,  62 => 23,  51 => 15,  49 => 19,  39 => 6,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  57 => 16,  54 => 21,  43 => 8,  40 => 8,  33 => 10,  30 => 3,  563 => 380,  503 => 323,  491 => 314,  480 => 306,  476 => 305,  472 => 303,  466 => 300,  463 => 299,  460 => 298,  457 => 297,  451 => 294,  448 => 293,  445 => 292,  443 => 291,  438 => 289,  426 => 279,  415 => 274,  406 => 268,  400 => 265,  394 => 262,  389 => 260,  386 => 259,  383 => 258,  377 => 256,  369 => 254,  366 => 253,  362 => 251,  360 => 250,  355 => 247,  351 => 246,  344 => 242,  339 => 239,  333 => 238,  325 => 235,  322 => 234,  314 => 231,  311 => 230,  308 => 229,  306 => 228,  302 => 227,  287 => 215,  257 => 188,  94 => 22,  74 => 25,  70 => 24,  66 => 15,  55 => 13,  35 => 4,  31 => 5,  19 => 1,);
    }
}
