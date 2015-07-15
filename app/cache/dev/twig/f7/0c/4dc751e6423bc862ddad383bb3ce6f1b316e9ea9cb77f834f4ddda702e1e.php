<?php

/* AdminIndexBundle:Index:shareform.html.twig */
class __TwigTemplate_f70c4dc751e6423bc862ddad383bb3ce6f1b316e9ea9cb77f834f4ddda702e1e extends Twig_Template
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
<head>
\t<meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<title></title>
</head>
<body>
\t<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_index_doshareform");
        echo "\" method=\"post\">
\t\t标题: <input type=\"text\" name=\"title\"> <br>
\t\t原因: <input type=\"text\" name=\"reason\"> <br>
\t\t地址: <input type=\"text\" name=\"url\" id=\"shareurl\" onBlur=\"check()\"><span id=\"tip\" style=\" color: red; opacity: 0;\">(地址重复了)</span> <br>
\t\t标签: <input type=\"text\" name=\"labels\">(逗号分割) <br>
\t\t类型: <select name=\"isown\">
\t\t\t<option value=\"0\">分享</option>
\t\t\t<option value=\"1\">原创</option>
\t\t</select><br>
\t\t类别: <select name=\"langid\">
\t\t\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langs"]) ? $context["langs"] : $this->getContext($context, "langs")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 21
            echo "\t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
            echo "</option>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "\t\t</select><br><br>
\t\t<input type=\"submit\" value=\"发 布\">
\t</form>


\t
\t<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/adminindex/js/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\">
\t\tvar url = \"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("admin_index_ajaxcheck");
        echo "\";
\t\tfunction check(){
\t\t\tvar shareurl = \$('#shareurl').val();
\t\t\t\$.post(
\t\t\t\turl, 
\t\t\t\t{shareurl: shareurl},
\t\t\t\tfunction(data) {
\t\t\t\t\t// 服务器端响应数据已经是json格式
\t\t\t\t\tif (data['res'] == 1) {
\t\t\t\t\t\t\$('#tip').css({'opacity': '1.0'});
\t\t\t\t\t} else {
\t\t\t\t\t\t\$('#tip').css({'opacity': '0'});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t);
\t\t}
\t</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "AdminIndexBundle:Index:shareform.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 31,  66 => 29,  58 => 23,  47 => 21,  43 => 20,  30 => 10,  19 => 1,);
    }
}
