<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ucp_main_subscribed.html */
class __TwigTemplate_416e1e76abc8ce1ca3fda89510e2d328b5e150bbab62c0864842ae4bb133e243 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $location = "ucp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_header.html", "ucp_main_subscribed.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form id=\"ucp\" method=\"post\" action=\"";
        // line 3
        echo ($context["S_UCP_ACTION"] ?? null);
        echo "\"";
        echo ($context["S_FORM_ENCTYPE"] ?? null);
        echo ">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
        echo "</h2>
<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WATCHED_EXPLAIN");
        echo "</p>

";
        // line 11
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "forumrow", []))) {
            // line 12
            echo "\t<ul class=\"topiclist missing-column\">
\t\t<li class=\"header\">
\t\t\t<dl class=\"row-item\">
\t\t\t\t<dt><div class=\"list-inner\">";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WATCHED_FORUMS");
            echo "</div></dt>
\t\t\t\t<dd class=\"lastpost\"><span>";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo "</span></dd>
\t\t\t\t<dd class=\"mark\">";
            // line 17
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
            echo "</dd>
\t\t\t</dl>
\t\t</li>
\t</ul>
\t<ul class=\"topiclist cplist missing-column\">

\t";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "forumrow", []));
            foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
                // line 24
                echo "\t\t<li class=\"row";
                if (($this->getAttribute($context["forumrow"], "S_ROW_COUNT", []) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl class=\"row-item ";
                // line 25
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", []);
                echo "\">
\t\t\t\t<dt>
\t\t\t\t\t";
                // line 27
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 28
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t<a href=\"";
                // line 29
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", []);
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", []);
                echo "</a><br />
\t\t\t\t\t\t";
                // line 30
                echo $this->getAttribute($context["forumrow"], "FORUM_DESC", []);
                echo "
\t\t\t\t\t\t";
                // line 31
                if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", [])) {
                    // line 32
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 33
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                    echo " ";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "LAST_POST_AUTHOR_FULL", []);
                    echo " &laquo; <a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_LAST_POST", []);
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", []);
                    echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 36
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t";
                // line 39
                if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", [])) {
                    // line 40
                    echo "\t\t\t\t\t\t<span><dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                    echo " </dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "LAST_POST_AUTHOR_FULL", []);
                    echo "
\t\t\t\t\t\t\t<a href=\"";
                    // line 41
                    echo $this->getAttribute($context["forumrow"], "U_LAST_POST", []);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 42
                    echo ($context["VIEW_LATEST_POST"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<br />";
                    // line 44
                    echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", []);
                    echo "</span>
\t\t\t\t\t";
                } else {
                    // line 46
                    echo "\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POSTS");
                    echo "<br />&nbsp;
\t\t\t\t\t";
                }
                // line 48
                echo "\t\t\t\t</dd>
\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"f[";
                // line 49
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", []);
                echo "]\" id=\"f";
                echo $this->getAttribute($context["forumrow"], "FORUM_ID", []);
                echo "\" /></dd>
\t\t\t</dl>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "\t</ul>
";
        } elseif (        // line 54
($context["S_FORUM_NOTIFY"] ?? null)) {
            // line 55
            echo "    <ul class=\"topiclist\">
        <li class=\"header\">
            <dl class=\"row-item\">
                <dt>";
            // line 58
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WATCHED_FORUMS");
            echo "</dt>
            </dl>
        </li>
    </ul>
\t<p><strong>";
            // line 62
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_WATCHED_FORUMS");
            echo "</strong></p>
";
        }
        // line 64
        echo "    <br />

";
        // line 66
        if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", []))) {
            // line 67
            echo "\t<ul class=\"topiclist missing-column\">
\t\t<li class=\"header\">
\t\t\t<dl class=\"row-item\">
\t\t\t\t<dt><div class=\"list-inner\">";
            // line 70
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WATCHED_TOPICS");
            echo "</div></dt>
\t\t\t\t<dd class=\"lastpost\"><span>";
            // line 71
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
            echo "</span></dd>
\t\t\t\t<dd class=\"mark\">";
            // line 72
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
            echo "</dd>
\t\t\t</dl>
\t\t</li>
\t</ul>
\t<ul class=\"topiclist cplist missing-column\">

\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "topicrow", []));
            foreach ($context['_seq'] as $context["_key"] => $context["topicrow"]) {
                // line 79
                echo "\t\t<li class=\"row";
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", [])) {
                    echo " reported";
                } elseif (($this->getAttribute($context["topicrow"], "S_ROW_COUNT", []) % 2 == 1)) {
                    echo " bg1";
                } else {
                    echo " bg2";
                }
                echo "\">
\t\t\t<dl class=\"row-item ";
                // line 80
                echo $this->getAttribute($context["topicrow"], "TOPIC_IMG_STYLE", []);
                echo "\">
\t\t\t\t<dt";
                // line 81
                if ($this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", [])) {
                    echo " style=\"background-image: url(";
                    echo ($context["T_ICONS_PATH"] ?? null);
                    echo $this->getAttribute($context["topicrow"], "TOPIC_ICON_IMG", []);
                    echo "); background-repeat: no-repeat;\"";
                }
                echo " title=\"";
                echo $this->getAttribute($context["topicrow"], "TOPIC_FOLDER_IMG_ALT", []);
                echo "\">
\t\t\t\t\t";
                // line 82
                if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", [])) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", []);
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 83
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 84
                if ($this->getAttribute($context["topicrow"], "S_UNREAD_TOPIC", [])) {
                    // line 85
                    echo "\t\t\t\t\t\t\t<a class=\"unread\" href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_NEWEST_POST", []);
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-file fa-fw icon-red icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 86
                    echo ($context["NEW_POST"] ?? null);
                    echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 88
                echo "<a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_VIEW_TOPIC", []);
                echo "\" class=\"topictitle\">";
                echo $this->getAttribute($context["topicrow"], "TOPIC_TITLE", []);
                echo "</a>
\t\t\t\t\t\t";
                // line 89
                if (($this->getAttribute($context["topicrow"], "S_TOPIC_UNAPPROVED", []) || $this->getAttribute($context["topicrow"], "S_POSTS_UNAPPROVED", []))) {
                    // line 90
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_QUEUE", []);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 91
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_UNAPPROVED");
                    echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 94
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["topicrow"], "S_TOPIC_REPORTED", [])) {
                    // line 95
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute($context["topicrow"], "U_MCP_REPORT", []);
                    echo "\" title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                    echo "\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-exclamation fa-fw icon-red\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 96
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC_REPORTED");
                    echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
                }
                // line 99
                echo "\t\t\t\t\t\t<br />
\t\t\t\t\t\t";
                // line 100
                if (twig_length_filter($this->env, $this->getAttribute($context["topicrow"], "pagination", []))) {
                    // line 101
                    echo "\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["topicrow"], "pagination", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                        // line 104
                        echo "\t\t\t\t\t\t\t\t";
                        if ($this->getAttribute($context["pagination"], "S_IS_PREV", [])) {
                            // line 105
                            echo "\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute($context["pagination"], "S_IS_CURRENT", [])) {
                            echo "<li class=\"active\"><span>";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                            echo "</span></li>
\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 106
$context["pagination"], "S_IS_ELLIPSIS", [])) {
                            echo "<li class=\"ellipsis\"><span>";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ELLIPSIS");
                            echo "</span></li>
\t\t\t\t\t\t\t\t";
                        } elseif ($this->getAttribute(                        // line 107
$context["pagination"], "S_IS_NEXT", [])) {
                            // line 108
                            echo "\t\t\t\t\t\t\t\t";
                        } else {
                            echo "<li><a href=\"";
                            echo $this->getAttribute($context["pagination"], "PAGE_URL", []);
                            echo "\">";
                            echo $this->getAttribute($context["pagination"], "PAGE_NUMBER", []);
                            echo "</a></li>
\t\t\t\t\t\t\t\t";
                        }
                        // line 110
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 111
                    echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 114
                echo "\t\t\t\t\t\t<div class=\"responsive-hide\">
\t\t\t\t\t\t\t";
                // line 115
                if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", [])) {
                    echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                }
                // line 116
                echo "\t\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "TOPIC_AUTHOR_FULL", []);
                echo " &raquo; ";
                echo $this->getAttribute($context["topicrow"], "FIRST_POST_TIME", []);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                // line 119
                if ($this->getAttribute($context["topicrow"], "ATTACH_ICON_IMG", [])) {
                    echo "<i class=\"icon fa-paperclip fa-fw\" aria-hidden=\"true\"></i> ";
                }
                // line 120
                echo "\t\t\t\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", []);
                echo " &laquo; <a href=\"";
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", []);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", []);
                echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t<dd class=\"lastpost\"><span><dfn>";
                // line 124
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo " </dfn>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                echo " ";
                echo $this->getAttribute($context["topicrow"], "LAST_POST_AUTHOR_FULL", []);
                echo "
\t\t\t\t\t<a href=\"";
                // line 125
                echo $this->getAttribute($context["topicrow"], "U_LAST_POST", []);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GOTO_LAST_POST");
                echo "\">
\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 126
                echo ($context["VIEW_LATEST_POST"] ?? null);
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t\t<br />";
                // line 128
                echo $this->getAttribute($context["topicrow"], "LAST_POST_TIME", []);
                echo "</span>
\t\t\t\t</dd>
\t\t\t\t<dd class=\"mark\"><input type=\"checkbox\" name=\"t[";
                // line 130
                echo $this->getAttribute($context["topicrow"], "TOPIC_ID", []);
                echo "]\" id=\"t";
                echo $this->getAttribute($context["topicrow"], "TOPIC_ID", []);
                echo "\" /></dd>
\t\t\t</dl>
\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['topicrow'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 134
            echo "\t</ul>

\t<div class=\"action-bar bar-bottom\">
\t\t<div class=\"pagination\">
\t\t\t";
            // line 138
            echo ($context["TOTAL_TOPICS"] ?? null);
            echo "
\t\t\t";
            // line 139
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                // line 140
                echo "\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "ucp_main_subscribed.html", 140)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 141
                echo "\t\t\t";
            } else {
                // line 142
                echo "\t\t\t\t &bull; ";
                echo ($context["PAGE_NUMBER"] ?? null);
                echo "
\t\t\t";
            }
            // line 144
            echo "\t\t</div>
\t</div>

";
        } elseif (        // line 147
($context["S_TOPIC_NOTIFY"] ?? null)) {
            // line 148
            echo "    <ul class=\"topiclist\">
        <li class=\"header\">
            <dl class=\"row-item\">
                <dt>";
            // line 151
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WATCHED_TOPICS");
            echo "</dt>
            </dl>
        </li>
    </ul>
\t<p><strong>";
            // line 155
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_WATCHED_TOPICS");
            echo "</strong></p>
";
        }
        // line 157
        echo "
\t</div>
</div>

";
        // line 161
        if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "topicrow", [])) || twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "forumrow", [])))) {
            // line 162
            echo "\t<fieldset class=\"display-actions\">
\t\t<input type=\"submit\" name=\"unwatch\" value=\"";
            // line 163
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNWATCH_MARKED");
            echo "\" class=\"button2\" />
\t\t<div><a href=\"#\" onclick=\"marklist('ucp', 't', true); marklist('ucp', 'f', true); return false;\">";
            // line 164
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('ucp', 't', false); marklist('ucp', 'f', false); return false;\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
            echo "</a></div>
\t\t";
            // line 165
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
";
        }
        // line 168
        echo "</form>

";
        // line 170
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_main_subscribed.html", 170)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_main_subscribed.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 170,  548 => 168,  542 => 165,  536 => 164,  532 => 163,  529 => 162,  527 => 161,  521 => 157,  516 => 155,  509 => 151,  504 => 148,  502 => 147,  497 => 144,  491 => 142,  488 => 141,  475 => 140,  473 => 139,  469 => 138,  463 => 134,  451 => 130,  446 => 128,  441 => 126,  435 => 125,  427 => 124,  409 => 120,  405 => 119,  394 => 116,  390 => 115,  387 => 114,  382 => 111,  376 => 110,  366 => 108,  364 => 107,  358 => 106,  351 => 105,  348 => 104,  344 => 103,  340 => 101,  338 => 100,  335 => 99,  329 => 96,  322 => 95,  319 => 94,  313 => 91,  306 => 90,  304 => 89,  297 => 88,  291 => 86,  286 => 85,  284 => 84,  281 => 83,  275 => 82,  264 => 81,  260 => 80,  249 => 79,  245 => 78,  236 => 72,  232 => 71,  228 => 70,  223 => 67,  221 => 66,  217 => 64,  212 => 62,  205 => 58,  200 => 55,  198 => 54,  195 => 53,  183 => 49,  180 => 48,  174 => 46,  169 => 44,  164 => 42,  160 => 41,  151 => 40,  149 => 39,  144 => 36,  130 => 33,  127 => 32,  125 => 31,  121 => 30,  115 => 29,  112 => 28,  106 => 27,  101 => 25,  92 => 24,  88 => 23,  79 => 17,  75 => 16,  71 => 15,  66 => 12,  64 => 11,  59 => 9,  52 => 5,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_main_subscribed.html", "");
    }
}
