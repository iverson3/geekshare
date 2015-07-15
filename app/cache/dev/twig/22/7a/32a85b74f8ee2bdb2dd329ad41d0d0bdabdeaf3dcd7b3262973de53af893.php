<?php

/* HomeIndexBundle:Index:index.html.twig */
class __TwigTemplate_227a32a85b74f8ee2bdb2dd329ad41d0d0bdabdeaf3dcd7b3262973de53af893 extends Twig_Template
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
<html lang=\"zh-CN\">

<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>极客分享</title>
    <!-- Bootstrap -->
    ";
        // line 11
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7f3c095_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f3c095_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7f3c095_part_1_bootstrap_1.css");
            // line 12
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
            // asset "7f3c095_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f3c095_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7f3c095_part_1_jianshu_2.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        } else {
            // asset "7f3c095"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7f3c095") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/7f3c095.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"/>
    ";
        }
        unset($context["asset_url"]);
        // line 14
        echo "    
    <script>
    window.onresize = function() {
        var titleBar = document.getElementById(\"page-title-bar\");
        var mainBox = document.getElementById(\"mainBox\");
        //titleWidth = document.body.clientWidth * 0.6;
        //titleBar.style.width = mainBox.style.width + \"px\";          
    }
    </script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homeindex/js/jquery-1.11.3.js"), "html", null, true);
        echo "\"/></script>
    ";
        // line 24
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7ad47ce_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ad47ce_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7ad47ce_part_1_bootstrap_1.js");
            // line 25
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "7ad47ce_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ad47ce_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7ad47ce_part_1_jianshu_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "7ad47ce"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7ad47ce") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7ad47ce.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 27
        echo "    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body class=\"output fluid zh cn reader-day-mode reader-font2\" data-js-module=\"recommendation\" data-locale=\"zh-CN\">
    <div class=\"navbar navbar-jianshu shrink\">
        <div class=\"dropdown\">
            <a class=\"dropdown-toggle logo\" id=\"dLabel\" role=\"button\" data-toggle=\"dropdown\" data-target=\"#\" href=\"javascript:void(0)\">简</a>
            <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"dLabel\">
                <li><a href=\"/\"><i class=\"fa fa-home\"></i> 首页</a></li>
                <li><a href=\"/collections\"><i class=\"fa fa-th\"></i> 专题</a></li>
                <li><a href=\"/user_invitations\"><i class=\"fa fa-money\"></i> 发钱啦</a></li>
            </ul>
        </div>
    </div>
    <div class=\"navbar-user\">
        <a class=\"login\" data-signup-link=\"true\" data-toggle=\"modal\" href=\"#\">
            <i class=\"fa fa-user\"></i> 加入我们</a>
        <a class=\"login\" data-signin-link=\"true\" data-toggle=\"modal\" href=\"#\">
            <i class=\"fa fa-pencil\"></i> 建议</a>
        <a class=\"daytime set-view-mode pull-right\" href=\"javascript:void(0)\"><i class=\"fa fa-moon-o\"></i></a>
    </div>
    <div class=\"navbar navbar-jianshu expanded\">
        <div class=\"dropdown\">
            <a class=\"active logo\" role=\"button\" data-original-title=\"个人主页\" data-container=\"div.expanded\" href=\"/\">
                <b>极</b><i class=\"fa fa-home\"></i><span class=\"title\">首页</span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"专题\" data-container=\"div.expanded\" href=\"＃\">
                <i class=\"fa fa-th\"></i><span class=\"title\">专题</span>
            </a>
            <a data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"下载手机应用\" data-container=\"body\" href=\"＃\">
                <i class=\"fa fa-mobile\"></i><span class=\"title\">下载手机应用</span>
            </a>
        </div>
        <div class=\"nav-user\">
            <a href=\"#view-mode-modal\" data-toggle=\"modal\"><i class=\"fa fa-font\"></i><span class=\"title\">显示模式</span></a>
            <a class=\"signin\" data-signin-link=\"true\" data-toggle=\"modal\" data-placement=\"right\" data-original-title=\"登录\" data-container=\"div.expanded\" href=\"＃\">
                <i class=\"fa fa-sign-in\"></i><span class=\"title\">登录</span>
            </a>
        </div>
    </div>
    <!-- 登陆部分，暂时先注释 -->
    <div tabindex=\"-1\" aria-hidden=\"true\" id=\"login-modal\" class=\"modal hide fade login-modal\" data-js-module=\"login-modal\">
        <div class=\"modal-header\">
            <h4 class=\"title\">
                <span>
                <a class=\"active\" id=\"signin-link\" href=\"javascript:void(null);\">登录</a>
                <b>·</b>
                <a id=\"signup-link\" href=\"javascript:void(null);\">注册</a>
                </span>
            </h4>
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
        </div>
        <div class=\"modal-body large-login\">
            <div class=\"sign-up\">
                <form id=\"sign_up\" class=\"form-horizontal\" action=\"/users.json\" accept-charset=\"UTF-8\" data-remote=\"true\" method=\"post\">
                    <input name=\"utf8\" type=\"hidden\" value=\"✓\">
                    <p id=\"signup_errors\" class=\"signin_error hide\"></p>
                    <div class=\"input-prepend\">
                        <span class=\"add-on\"><i class=\"fa fa-envelope-o\"></i></span>
                        <input type=\"text\" name=\"email\" id=\"sign_up_email\" value=\"\" class=\"span2\" placeholder=\"你的邮件地址\">
                    </div>
                    <div class=\"input-prepend\">
                        <span class=\"add-on\"><i class=\"fa fa-user\"></i></span>
                        <input type=\"text\" name=\"nickname\" id=\"nickname\" value=\"\" class=\"span2\" placeholder=\"选一个昵称\">
                    </div>
                    <div class=\"input-prepend\">
                        <span class=\"add-on\"><i class=\"fa fa-unlock-alt\"></i></span>
                        <input type=\"password\" name=\"password\" id=\"sign_up_password\" class=\"span2\" placeholder=\"输入密码\">
                    </div>
                    <div class=\"input-prepend captcha\">
                        <div class=\"captcha_fields\">
                        </div>
                    </div>
                    <button name=\"button\" type=\"submit\" class=\"ladda-button submit-button\" data-color=\"green\" data-disable-with=\"<span class='ladda-label'>loading</span>\"><span class=\"ladda-label\">注册</span></button>
                </form>
            </div>
            <div class=\"sign-in\">
                <form id=\"sign_in\" class=\"form-horizontal\" action=\"/sessions.json\" accept-charset=\"UTF-8\" data-remote=\"true\" method=\"post\">
                    <input name=\"utf8\" type=\"hidden\" value=\"✓\">
                    <p id=\"signin_errors\" class=\"signin_error hide\"></p>
                    <div class=\"input-prepend\">
                        <span class=\"add-on\"><i class=\"fa fa-envelope-o\"></i></span>
                        <input type=\"text\" name=\"email\" id=\"sign_in_email\" value=\"\" class=\"span2\" placeholder=\"邮箱\">
                    </div>
                    <div class=\"input-prepend\">
                        <span class=\"add-on\"><i class=\"fa fa-unlock-alt\"></i></span>
                        <input type=\"password\" name=\"password\" id=\"sign_in_password\" class=\"span2\" placeholder=\"密码\">
                    </div>
                    <div class=\"input-prepend captcha\">
                        <div class=\"captcha_fields\">
                        </div>
                    </div>
                    <button class=\"ladda-button submit-button\" data-color=\"blue\">
                        <span class=\"ladda-label\">登 录</span>
                    </button>
                    <div class=\"control-group text-left\">
                        <div class=\"icheckbox_minimal checked\" style=\"position: relative;\">
                            <input type=\"checkbox\" name=\"remember_me\" id=\"remember_me\" value=\"true\" checked=\"checked\" style=\"position: absolute; opacity: 0;\">
                            <ins class=\"iCheck-helper\" style=\"position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);\"></ins>
                        </div> 记住我
                        <a href=\"/users/password/new\">忘记密码</a>
                    </div>
                </form>
            </div>
            <div class=\"login-sns\">
                <p>您还可以通过以下方式直接登录</p>
                <ul class=\"login-sns\">
                    <li class=\"weibo\">
                        <a href=\"/users/auth/weibo\"><i class=\"fa fa-weibo\"></i></a>
                    </li>
                    <li class=\"qq\">
                        <a href=\"/users/auth/qq_connect\"><i class=\"fa fa-qq\"></i></a>
                    </li>
                    <li class=\"douban\">
                        <a href=\"/users/auth/douban\"><i class=\"fa fa-douban\"></i></a>
                    </li>
                    <li class=\"google\">
                        <a href=\"/users/auth/google_oauth2\"><i class=\"fa fa-google-plus\"></i></a>
                    </li>
                    <li class=\"wechat\">
                        <a href=\"/users/auth/wechat\"><i class=\"fa fa-wechat\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- 用户主界面显示部分 -->
    <div class=\"row-fluid\">
        <div class=\"recommended\">
            <!-- 左侧菜单栏和图片部分，占比25% -->
            <div class=\"span3 left-aside\">
                <div class=\"navbar navbar-jianshu expanded\">
                    <div class=\"dropdown\">
                        <a class=\"active logo\" role=\"button\" data-original-title=\"个人主页\" data-container=\"div.expanded\" href=\"/\">
                            <b>Gs</b>
                            <i class=\"fa fa-home\"></i>
                            <span class=\"title\">首页</span>
                        </a>
                        <a data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"专题\" data-container=\"div.expanded\" href=\"#\">
                            <i class=\"fa fa-th\"></i>
                            <span class=\"title\">专题</span>
                        </a>
                        <a data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"下载手机应用\" data-container=\"body\" href=\"#\">
                            <i class=\"fa fa-mobile\"></i>
                            <span class=\"title\">下载手机应用</span>
                        </a>
                    </div>
                    <div class=\"nav-user\">
                        <a href=\"#view-mode-modal\" data-toggle=\"modal\"><i class=\"fa fa-font\"></i><span class=\"title\">显示模式</span></a>
                        <a class=\"signin\" data-signin-link=\"true\" data-toggle=\"modal\" data-placement=\"right\" data-original-title=\"登录\" data-container=\"div.expanded\" href=\"#\">
                            <i class=\"fa fa-sign-in\"></i><span class=\"title\">登录</span>
                        </a>
                    </div>
                </div>
                <div style=\"background-image: url(";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homeindex/images/pHb6zxgXGuU5oKacirYs.jpg"), "html", null, true);
        echo ");\" class=\"cover-img\"></div>
                <div class=\"bottom-block\">
                    <h1>极客分享</h1>
                    <h3>分享知识，沟通想法</h3>
                    <p>一个基于IT技术分享的社区</p>
                    <a class=\"btn btn-large btn-success\" href=\"/writer#/\">即刻分享</a>
                </div>
                <div class=\"img-info\">
                    <i class=\"fa fa-info\"></i>
                    <div class=\"info\">
                        Photo by <a target=\"_blank\" href=\"https://s3.amazonaws.com/\">s3.amazonaws</a>
                    </div>
                </div>
            </div>
            <!-- 右侧的内容区域，占比75% -->
            <div id=\"mainBox\" class=\"span7 offset3\">
                <!-- 主标题栏 -->
                <div id=\"page-title-bar\" class=\"page-title\">
                    <ul class=\"recommened-nav navigation clearfix\" data-container=\"#list-container\" data-loader=\".loader-tiny\" data-user-slug=\"\">
                        <!-- 未登录状态 -->
                        <!-- Active: recommended notes list -->
                        <li class=\"active\">
                            <a data-pjax=\"true\" href=\"/recommendations/notes\">极客分享</a>
                        </li>
                        <li class=\"\">
                            <a data-pjax=\"true\" href=\"/trending/now\">原创分享</a>
                        </li>
                        <img class=\"hide loader-tiny\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homeindex/images/tiny.gif"), "html", null, true);
        echo "\" alt=\"Tiny\">
                        <li class=\"search\">
                            <form class=\"search-form\" action=\"/search\" accept-charset=\"UTF-8\" method=\"get\">
                                <input name=\"utf8\" type=\"hidden\" value=\"✓\">
                                <input type=\"text\" name=\"q\" id=\"q\" placeholder=\"发现更多\" class=\"input-medium search-query\">
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- 分享列表容器，模板中直接循环输出数据库取出的内容 -->
                <div id=\"list-container\">
                    <ul class=\"unstyled clearfix sort-nav\" id=\"collection-categories-nav\" data-js-module=\"collection-category\" data-fetch-url=\"/recommendations/notes\">
                        ";
        // line 227
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["langs"]) ? $context["langs"] : $this->getContext($context, "langs")));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 228
            echo "                            ";
            // line 229
            echo "                            ";
            if (($this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "code") == (isset($context["nowlang"]) ? $context["nowlang"] : $this->getContext($context, "nowlang")))) {
                // line 230
                echo "                                <li class=\"active\">
                                    <a class=\"category\" href=\"";
                // line 231
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_index_index_", array("lang" => $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "code"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
                echo "</a>
                                </li>
                            ";
            } else {
                // line 234
                echo "                                <li class=\"\">
                                    <a class=\"category\" href=\"";
                // line 235
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_index_index_", array("lang" => $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "code"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lang"]) ? $context["lang"] : $this->getContext($context, "lang")), "name"), "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            // line 238
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                        
                        <!-- 正在加载样式，class设为hide则为隐藏 -->
                        <li>
                            <img class=\"loader-tiny\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homeindex/images/tiny.gif"), "html", null, true);
        echo "\" alt=\"Tiny\">
                        </li>
                    </ul>
                    <ul class=\"article-list thumbnails\">
                        ";
        // line 246
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sharelist"]) ? $context["sharelist"] : $this->getContext($context, "sharelist")));
        foreach ($context['_seq'] as $context["_key"] => $context["share"]) {
            // line 247
            echo "                        <li class=\"have-img\">
                            <div>
                                <p class=\"list-top\">
                                    ";
            // line 250
            if (($this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), "username") == "")) {
                // line 251
                echo "                                        <a class=\"author-name blue-link\" target=\"_blank\" href=\"javascript:;\">匿名网友</a>
                                    ";
            } else {
                // line 253
                echo "                                        ";
                if (($this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), "isopen") == 1)) {
                    // line 254
                    echo "                                            <a class=\"author-name blue-link\" target=\"_blank\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_index_geekinfo", array("userid" => $this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), "id"))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), "username"), "html", null, true);
                    echo "</a>
                                        ";
                } else {
                    // line 256
                    echo "                                            <a class=\"author-name blue-link\" target=\"_blank\" href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), "username"), "html", null, true);
                    echo "</a>
                                        ";
                }
                // line 258
                echo "                                    ";
            }
            // line 259
            echo "                                    <em>·</em>
                                    <span class=\"time\">";
            // line 260
            echo twig_escape_filter($this->env, $this->env->getExtension('home_index_extension')->createdAgo(twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), 0, array(), "array"), "sharetime"), "Y-m-d H:i:s")), "html", null, true);
            echo "</span>
                                </p>
                                <h4 class=\"title\"><a target=\"_blank\" href=\"./shareContent.html\">";
            // line 262
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), 0, array(), "array"), "title"), "html", null, true);
            echo "</a></h4>
                                <div class=\"list-footer\">
                                    <a target=\"_blank\" href=\"/p/321049a848b8\">
                                      ";
            // line 265
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), 0, array(), "array"), "labels"), "html", null, true);
            echo "
                                    </a>
                                    <a target=\"_blank\" href=\"/p/321049a848b8\">
                                      · 阅读 ";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), 0, array(), "array"), "hit"), "html", null, true);
            echo "
                                    </a>
                                    <a target=\"_blank\" href=\"/p/321049a848b8#comments\">
                                       · 评论 4
                                    </a>
                                    <span> · 赞 3</span>
                                    <span> · 时间 ";
            // line 274
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["share"]) ? $context["share"] : $this->getContext($context, "share")), 0, array(), "array"), "sharetime"), "Y/m/d H:i"), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['share'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        echo "                    </ul>
                    <!-- <div class=\"load-more\">
                        <button class=\"ladda-button \" data-style=\"slide-left\" data-type=\"script\" data-remote=\"\" data-size=\"medium\" data-url=\"/recommendations/notes?max_id=1435994105\" data-color=\"maleskine\" data-method=\"get\">
                            <span class=\"ladda-label\">点击查看更多</span>
                            <span class=\"ladda-spinner\"></span></button>
                    </div> -->
                    <!-- 分页按钮 -->
                    <div class=\"pagination\" style=\"padding-left: 36px;\">
                        <ul>
                            <li class=\"next\">
                                <span style=\" padding-left: 50px;\">总页数: ";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo "</span>
                            </li>
                            ";
        // line 291
        if ((((isset($context["nowpage"]) ? $context["nowpage"] : $this->getContext($context, "nowpage")) - 1) == 0)) {
            // line 292
            echo "                            ";
        } else {
            // line 293
            echo "                            <li class=\"next\">
                                <a rel=\"next\" data-remote=\"true\" href=\"";
            // line 294
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_index_index_", array("lang" => (isset($context["nowlang"]) ? $context["nowlang"] : $this->getContext($context, "nowlang")), "page" => ((isset($context["nowpage"]) ? $context["nowpage"] : $this->getContext($context, "nowpage")) - 1))), "html", null, true);
            echo "\">上一页</a>
                            </li>
                            ";
        }
        // line 297
        echo "                            ";
        if (((isset($context["nowpage"]) ? $context["nowpage"] : $this->getContext($context, "nowpage")) == (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))) {
            // line 298
            echo "                            ";
        } else {
            // line 299
            echo "                            <li class=\"next\">
                                <a rel=\"next\" data-remote=\"true\" href=\"";
            // line 300
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_index_index_", array("lang" => (isset($context["nowlang"]) ? $context["nowlang"] : $this->getContext($context, "nowlang")), "page" => ((isset($context["nowpage"]) ? $context["nowpage"] : $this->getContext($context, "nowpage")) + 1))), "html", null, true);
            echo "\">下一页</a>
                            </li>
                            ";
        }
        // line 303
        echo "                            <li>
                                <form action=\"\" method=\"get\" onsubmit=\"jumpsubmit(); return false;\">
                                    <input type=\"hidden\" id=\"nowlang\" value=\"";
        // line 305
        echo twig_escape_filter($this->env, (isset($context["nowlang"]) ? $context["nowlang"] : $this->getContext($context, "nowlang")), "html", null, true);
        echo "\">
                                    <input type=\"text\" style=\"width: 40px; margin-top: 10px;\" id=\"page\" value=\"";
        // line 306
        echo twig_escape_filter($this->env, (isset($context["nowpage"]) ? $context["nowpage"] : $this->getContext($context, "nowpage")), "html", null, true);
        echo "\">
                                    <input type=\"submit\" class=\"btn btn-default\" value=\"跳转\">
                                </form>
                            </li>
                        </ul>
                    </div>                    
                    
                    <script type=\"text/javascript\">
                        var count = ";
        // line 314
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
        echo ";
                        // 拦截提交事件
                        function jumpsubmit(){
                            var nowlang = document.getElementById('nowlang').value;
                            var page    = document.getElementById('page').value;
                            if ((page > count) || (page < 1) || (isNaN(page))) {
                                alert(\"输入有误哦\");
                                return false;
                            }
                            var url = \"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home_index_index_", array("lang" => (isset($context["nowlang"]) ? $context["nowlang"] : $this->getContext($context, "nowlang")), "page" => (isset($context["nowpage"]) ? $context["nowpage"] : $this->getContext($context, "nowpage")))), "html", null, true);
        echo "\";
                            var arr = url.split(\"/\");
                            if (arr.length === 2) {
                                url = url + \"/\" + page;
                            } else {
                                url = \"/\" + arr[1] + \"/\" + page;
                            }
                            window.location.href = url;
                            return false;
                        }
                    </script>

                </div>
            </div>
        </div>
    </div>
    <!-- 网站底部信息区域 -->
    <footer>
        <div class=\"footer-l\">
            <p>
                <a href=\"#\" target=\"_blank\">关于极客分享</a> |
                <a target=\"_blank\" href=\"#\">联系我们</a> |
                <a href=\"#\" target=\"_blank\">作者成书计划</a> |
                <a href=\"#\" target=\"_blank\">帮助中心</a> |
                <a href=\"#\" target=\"_blank\">极客周边</a> |
                <a href=\"#\">合作伙伴</a> |
                <a href=\"#\">专题</a> |
                <a href=\"#\">文章</a>
            </p>
            <p>©2015-2018 <a href=\"/\" target=\"_blank\">极客分享</a> / 鄂ICP备xxxxxxxx号-x</p>
        </div>
        <div class=\"footer-r pull-right\">
            <div class=\"app-download-btn\">
            </div>
            <div>
                关注我们:
                <a href=\"http://weibo.com/#\" target=\"_blank\">
                    <i class=\"fa fa-weibo\"></i>
                </a>
                <a class=\"weixin\" href=\"#share-weixin-modal\" data-toggle=\"modal\">
                    <i class=\"fa fa-weixin\"></i>
                </a>
                <a href=\"https://twitter.com/#\" target=\"_blank\">
                    <i class=\"fa fa-twitter\"></i>
                </a>
                <br><a href=\"http://windows.microsoft.com/zh-CN/internet-explorer/download-ie\" class=\"upgrade-ie\">本网站不支持 IE6/IE7，如果您希望继续使用 IE 浏览器，请升级至IE8及以上版本</a>
            </div>
        </div>
        <!--modal-->
        <div class=\"modal hide fade share-weixin-modal\" id=\"share-weixin-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
                </div>
                <div class=\"modal-content\">
                    <div class=\"modal-body\">
                        <p>关注我们的微信公众号，获得每日好文推荐。微信中搜索「极客分享」或者扫一扫下方二维码：</p>
                        <img src=\"";
        // line 380
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/homeindex/images/jianshu_wechat_qrcode.jpg"), "html", null, true);
        echo "\">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
//public/css/";
    }

    public function getTemplateName()
    {
        return "HomeIndexBundle:Index:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  563 => 380,  503 => 323,  491 => 314,  480 => 306,  476 => 305,  472 => 303,  466 => 300,  463 => 299,  460 => 298,  457 => 297,  451 => 294,  448 => 293,  445 => 292,  443 => 291,  438 => 289,  426 => 279,  415 => 274,  406 => 268,  400 => 265,  394 => 262,  389 => 260,  386 => 259,  383 => 258,  377 => 256,  369 => 254,  366 => 253,  362 => 251,  360 => 250,  355 => 247,  351 => 246,  344 => 242,  339 => 239,  333 => 238,  325 => 235,  322 => 234,  314 => 231,  311 => 230,  308 => 229,  306 => 228,  302 => 227,  287 => 215,  257 => 188,  94 => 27,  74 => 25,  70 => 24,  66 => 23,  55 => 14,  35 => 12,  31 => 11,  19 => 1,);
    }
}
