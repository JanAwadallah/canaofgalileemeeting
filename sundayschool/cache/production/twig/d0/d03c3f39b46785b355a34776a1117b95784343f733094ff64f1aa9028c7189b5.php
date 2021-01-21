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

/* ucp_profile_profile_info.html */
class __TwigTemplate_c450ad6d54deccd6cde5276be82924f6f2c2a33f2179636d1d7bd8796a6c9ca9 extends \Twig\Template
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
        $this->loadTemplate("ucp_header.html", "ucp_profile_profile_info.html", 1)->display($context);
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
        echo " <span class=\"small\">[ <a href=\"";
        echo ($context["U_USER_PROFILE"] ?? null);
        echo "\" title=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PROFILE");
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_PROFILE");
        echo "</a> ]</span></h2>

<div class=\"panel\">
\t<div class=\"inner\">
\t<p>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PROFILE_INFO_NOTICE");
        echo "</p>

\t<fieldset>
\t";
        // line 12
        if (($context["ERROR"] ?? null)) {
            echo "<p class=\"error\">";
            echo ($context["ERROR"] ?? null);
            echo "</p>";
        }
        // line 13
        echo "\t";
        // line 14
        echo "\t";
        if (($context["S_BIRTHDAYS_ENABLED"] ?? null)) {
            // line 15
            echo "\t\t<dl>
\t\t\t<dt><label for=\"bday_day\">";
            // line 16
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAY_EXPLAIN");
            echo "</span></dt>
\t\t\t<dd>
\t\t\t\t<label for=\"bday_day\">";
            // line 18
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DAY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"bday_day\" id=\"bday_day\">";
            echo ($context["S_BIRTHDAY_DAY_OPTIONS"] ?? null);
            echo "</select></label>
\t\t\t\t<label for=\"bday_month\">";
            // line 19
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MONTH");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"bday_month\" id=\"bday_month\">";
            echo ($context["S_BIRTHDAY_MONTH_OPTIONS"] ?? null);
            echo "</select></label>
\t\t\t\t<label for=\"bday_year\">";
            // line 20
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YEAR");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " <select name=\"bday_year\" id=\"bday_year\">";
            echo ($context["S_BIRTHDAY_YEAR_OPTIONS"] ?? null);
            echo "</select></label>
\t\t\t</dd>
\t\t</dl>
\t";
        }
        // line 24
        echo "\t";
        if (($context["S_JABBER_ENABLED"] ?? null)) {
            // line 25
            echo "\t\t<dl>
\t\t\t<dt><label for=\"jabber\">";
            // line 26
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UCP_JABBER");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t\t<dd><input type=\"email\" name=\"jabber\" id=\"jabber\" maxlength=\"255\" value=\"";
            // line 27
            echo ($context["JABBER"] ?? null);
            echo "\" class=\"inputbox\" /></dd>
\t\t</dl>
\t";
        }
        // line 30
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "profile_fields", []));
        foreach ($context['_seq'] as $context["_key"] => $context["profile_fields"]) {
            // line 31
            echo "\t\t<dl>
\t\t\t<dt><label";
            // line 32
            if ($this->getAttribute($context["profile_fields"], "FIELD_ID", [])) {
                echo " for=\"";
                echo $this->getAttribute($context["profile_fields"], "FIELD_ID", []);
                echo "\"";
            }
            echo ">";
            echo $this->getAttribute($context["profile_fields"], "LANG_NAME", []);
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            if ($this->getAttribute($context["profile_fields"], "S_REQUIRED", [])) {
                echo " *";
            }
            echo "</label>
\t\t\t";
            // line 33
            if ($this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", [])) {
                echo "<br /><span>";
                echo $this->getAttribute($context["profile_fields"], "LANG_EXPLAIN", []);
                echo "</span>";
            }
            echo "</dt>
\t\t\t";
            // line 34
            if ($this->getAttribute($context["profile_fields"], "ERROR", [])) {
                echo "<dd class=\"error\">";
                echo $this->getAttribute($context["profile_fields"], "ERROR", []);
                echo "</dd>";
            }
            // line 35
            echo "\t\t\t<dd>";
            echo $this->getAttribute($context["profile_fields"], "FIELD", []);
            echo "</dd>
\t\t</dl>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profile_fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t";
        // line 39
        echo "\t</fieldset>

\t</div>
</div>

<fieldset class=\"submit-buttons\">
\t";
        // line 45
        echo ($context["S_HIDDEN_FIELDS"] ?? null);
        echo "<input type=\"reset\" value=\"";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 46
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" class=\"button1\" />
\t";
        // line 47
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
</form>

";
        // line 51
        $location = "ucp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("ucp_footer.html", "ucp_profile_profile_info.html", 51)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "ucp_profile_profile_info.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 51,  200 => 47,  196 => 46,  190 => 45,  182 => 39,  180 => 38,  170 => 35,  164 => 34,  156 => 33,  142 => 32,  139 => 31,  134 => 30,  128 => 27,  123 => 26,  120 => 25,  117 => 24,  107 => 20,  100 => 19,  93 => 18,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  71 => 12,  65 => 9,  52 => 5,  45 => 3,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "ucp_profile_profile_info.html", "");
    }
}
