<?php

/* AdminIndexBundle:Index:sharelist.html.twig */
class __TwigTemplate_ab3519693c3340902e3888c9bef66cd35e7a86e8c1697b0a0b90415ee5c3ac70 extends Twig_Template
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
        // line 2
        echo "<div class=\"count\">
    总数据: ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount"), "html", null, true);
        echo "
</div>
<br>

<table>
\t";
        // line 9
        echo "\t<tr>
\t    <th>";
        // line 10
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "编号", "s.id");
        echo "</th>
\t    <th>";
        // line 11
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "极客ID", "u.id");
        echo "</th>
\t    <th";
        // line 12
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "s.title"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "分享标题", "s.title");
        echo "</th>
\t    <th>";
        // line 13
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "分享时间", "s.sharetime");
        echo "</th>
\t</tr>

\t";
        // line 17
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["share"]) {
            // line 18
            echo "\t<tr ";
            if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % 2 == 1)) {
                echo "class=\"color\"";
            }
            echo ">
\t    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), "id"), "html", null, true);
            echo "</td>
\t    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), "uid"), "html", null, true);
            echo "</td>
\t    <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), "title"), "html", null, true);
            echo "</td>
\t    <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), "sharetime"), "html", null, true);
            echo "</td>
\t</tr>
\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['share'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</table>
<br>

";
        // line 29
        echo "<div class=\"navigation\">
    ";
        // line 30
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
</div>



<!-- start pagination style -->
<style type=\"text/css\">
    .pagination span{
        background-color: #0F76BB;
        padding: 4px 11px 4px 11px;
        margin-left: 5px;
        text-decoration: none;
        color: white;
    }
    .pagination span a{
    \tpadding-left: 6px;
    \tcolor: white;
    }
    .pagination span:hover{
        background-color: gray;
        color: white;
    }
    .pagination .current{
        background-color: gray;
        padding:4px 11px 4px 11px;
        cursor: default;
        color: white;
    }
    .pagination .first{
        background-color: blue;
        padding:4px 11px 4px 11px;
        cursor: default;
        color: white;
    }
    .pagination .previous{
        background-color: blue;
        padding:4px 11px 4px 11px;
        cursor: default;
        color: white;
    }
    .pagination .next{
        background-color: blue;
        padding:4px 11px 4px 11px;
        cursor: default;
        color: white;
    }
    .pagination .last{
        background-color: blue;
        padding:4px 11px 4px 11px;
        cursor: default;
        color: white;
    }


    .sortable{
        color: gray;
    }
</style>
<!-- end pagination style -->";
    }

    public function getTemplateName()
    {
        return "AdminIndexBundle:Index:sharelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 30,  114 => 29,  109 => 25,  92 => 22,  88 => 21,  84 => 20,  80 => 19,  73 => 18,  55 => 17,  49 => 13,  41 => 12,  37 => 11,  33 => 10,  30 => 9,  22 => 3,  19 => 2,);
    }
}
