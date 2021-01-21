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

/* ucp_pm_history.html */
class __TwigTemplate_3805b5c26337886ddf6b78cdde6f8dcea5b02ed159b352166e94ed54b8af942f extends \Twig\Template
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
        echo "
<h3 id=\"review\" class=\"review\">
\t<span class=\"right-box\"><a href=\"#review\" onclick=\"viewableArea(getElementById('topicreview'), true); var rev_text = getElementById('review').getElementsByTagName('a').item(0).firstChild; if (rev_text.data == '";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COLLAPSE_VIEW"), "js");
        echo "'; } else if (rev_text.data == '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("COLLAPSE_VIEW"), "js");
        echo "'){rev_text.data = '";
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW"), "js");
        echo "'};\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXPAND_VIEW");
        echo "</a></span>
\t";
        // line 4
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_HISTORY");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "
</h3>

";
        // line 7
        // line 8
        echo "<div id=\"topicreview\" class=\"topicreview\">
\t<script>
\t\tbbcodeEnabled = ";
        // line 10
        echo ($context["S_BBCODE_ALLOWED"] ?? null);
        echo ";
\t</script>
\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "history_row", []));
        foreach ($context['_seq'] as $context["_key"] => $context["history_row"]) {
            // line 13
            echo "\t<div class=\"post ";
            if (($this->getAttribute($context["history_row"], "S_ROW_COUNT", []) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<div class=\"postbody\" id=\"pr";
            // line 16
            echo $this->getAttribute($context["history_row"], "MSG_ID", []);
            echo "\">
\t\t\t<h3><a href=\"";
            // line 17
            echo $this->getAttribute($context["history_row"], "U_VIEW_MESSAGE", []);
            echo "\" ";
            if ($this->getAttribute($context["history_row"], "S_CURRENT_MSG", [])) {
                echo "class=\"current\"";
            }
            echo ">";
            echo $this->getAttribute($context["history_row"], "SUBJECT", []);
            echo "</a></h3>

\t\t\t";
            // line 19
            $value = ($this->getAttribute($context["history_row"], "U_QUOTE", []) || $this->getAttribute($context["history_row"], "MESSAGE_AUTHOR_QUOTE", []));
            $context['definition']->set('SHOW_PM_HISTORY_POST_BUTTONS', $value);
            // line 20
            echo "\t\t\t";
            // line 21
            echo "\t\t\t";
            if ($this->getAttribute(($context["definition"] ?? null), "SHOW_PM_HISTORY_POST_BUTTONS", [])) {
                // line 22
                echo "\t\t\t<ul class=\"post-buttons\">
\t\t\t\t";
                // line 23
                // line 24
                echo "\t\t\t\t";
                if (($this->getAttribute($context["history_row"], "U_QUOTE", []) || $this->getAttribute($context["history_row"], "MESSAGE_AUTHOR_QUOTE", []))) {
                    // line 25
                    echo "\t\t\t\t<li>
\t\t\t\t\t<a ";
                    // line 26
                    if ($this->getAttribute($context["history_row"], "U_QUOTE", [])) {
                        echo "href=\"";
                        echo $this->getAttribute($context["history_row"], "U_QUOTE", []);
                        echo "\"";
                    } else {
                        echo "href=\"#postingbox\" onclick=\"addquote(";
                        echo $this->getAttribute($context["history_row"], "MSG_ID", []);
                        echo ", '";
                        echo $this->getAttribute($context["history_row"], "MESSAGE_AUTHOR_QUOTE", []);
                        echo "', '";
                        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("WROTE"), "js");
                        echo "', {time:";
                        echo $this->getAttribute($context["history_row"], "MESSAGE_TIME", []);
                        echo ",user_id:";
                        echo $this->getAttribute($context["history_row"], "USER_ID", []);
                        echo "});\"";
                    }
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUOTE");
                    echo " ";
                    echo $this->getAttribute($context["history_row"], "MESSAGE_AUTHOR", []);
                    echo "\" class=\"button button-icon-only\">
\t\t\t\t\t\t<i class=\"icon fa-quote-left fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 27
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("QUOTE");
                    echo " ";
                    echo $this->getAttribute($context["history_row"], "MESSAGE_AUTHOR", []);
                    echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t";
                }
                // line 31
                echo "\t\t\t\t";
                // line 32
                echo "\t\t\t</ul>
\t\t\t";
            }
            // line 34
            echo "\t\t\t";
            // line 35
            echo "
\t\t\t<p class=\"author\">
\t\t\t\t<span><i class=\"icon fa-file fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 37
            echo $this->getAttribute($context["history_row"], "MINI_POST", []);
            echo "</span></span> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SENT_AT");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <strong>";
            echo $this->getAttribute($context["history_row"], "SENT_DATE", []);
            echo "</strong>
\t\t\t\t<br />
\t\t\t\t";
            // line 39
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_BY_AUTHOR");
            echo " ";
            echo $this->getAttribute($context["history_row"], "MESSAGE_AUTHOR_FULL", []);
            // line 40
            echo "\t\t\t</p>
\t\t\t<div class=\"content\">";
            // line 41
            if ($this->getAttribute($context["history_row"], "MESSAGE", [])) {
                echo $this->getAttribute($context["history_row"], "MESSAGE", []);
            } else {
                echo "<span class=\"error\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MESSAGE_REMOVED_FROM_OUTBOX");
                echo "</span>";
            }
            echo "</div>
\t\t\t<div id=\"message_";
            // line 42
            echo $this->getAttribute($context["history_row"], "MSG_ID", []);
            echo "\" style=\"display: none;\">";
            echo $this->getAttribute($context["history_row"], "DECODED_MESSAGE", []);
            echo "</div>
\t\t</div>

\t\t</div>
\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history_row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "</div>
";
        // line 49
        // line 50
        echo "
<hr />
<p>
\t<a href=\"#cp-main\" class=\"top\">
\t\t<i class=\"icon fa-chevron-circle-up fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
        // line 54
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK_TO_TOP");
        echo "</span>
\t</a>
</p>
";
    }

    public function getTemplateName()
    {
        return "ucp_pm_history.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 54,  201 => 50,  200 => 49,  197 => 48,  183 => 42,  173 => 41,  170 => 40,  166 => 39,  156 => 37,  152 => 35,  150 => 34,  146 => 32,  144 => 31,  135 => 27,  111 => 26,  108 => 25,  105 => 24,  104 => 23,  101 => 22,  98 => 21,  96 => 20,  93 => 19,  82 => 17,  78 => 16,  67 => 13,  63 => 12,  58 => 10,  54 => 8,  53 => 7,  46 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_pm_history.html", "");
    }
}
