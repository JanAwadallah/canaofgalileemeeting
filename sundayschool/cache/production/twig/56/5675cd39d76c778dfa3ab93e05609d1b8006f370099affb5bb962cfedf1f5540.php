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

/* acp_jabber.html */
class __TwigTemplate_bb41e0312232acfd28e71adc6139bd76bcafeb6b94e01e8b9a05328c1ecde140 extends \Twig\Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "acp_jabber.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

<h1>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_JABBER_SETTINGS");
        echo "</h1>

<p>";
        // line 7
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_JABBER_SETTINGS_EXPLAIN");
        echo "</p>

";
        // line 9
        if (($context["S_WARNING"] ?? null)) {
            // line 10
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 11
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 12
            echo ($context["WARNING_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 15
        echo "
<form id=\"acp_jabber\" method=\"post\" action=\"";
        // line 16
        echo ($context["U_ACTION"] ?? null);
        echo "\">

<fieldset>
\t<legend>";
        // line 19
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACP_JABBER_SETTINGS");
        echo "</legend>
";
        // line 20
        if (($context["S_GTALK_NOTE"] ?? null)) {
            // line 21
            echo "\t<p>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_GTALK_NOTE");
            echo "</p>
";
        }
        // line 23
        echo "<dl>
\t<dt><label for=\"jab_enable\">";
        // line 24
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_ENABLE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_ENABLE_EXPLAIN");
        echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"jab_enable\" name=\"jab_enable\" value=\"1\"";
        // line 25
        if (($context["JAB_ENABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ENABLED");
        echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"jab_enable\" value=\"0\"";
        // line 26
        if ( !($context["JAB_ENABLE"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " /> ";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISABLED");
        echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"jab_host\">";
        // line 29
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_SERVER");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_SERVER_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"text\" id=\"jab_host\" name=\"jab_host\" value=\"";
        // line 30
        echo ($context["JAB_HOST"] ?? null);
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"jab_port\">";
        // line 33
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_PORT");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_PORT_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"number\" id=\"jab_port\" name=\"jab_port\" value=\"";
        // line 34
        echo ($context["JAB_PORT"] ?? null);
        echo "\" min=\"0\" max=\"99999\" /></dd>
</dl>
<dl>
\t<dt><label for=\"jab_username\">";
        // line 37
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_USERNAME");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_USERNAME_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"text\" id=\"jab_username\" name=\"jab_username\" value=\"";
        // line 38
        echo ($context["JAB_USERNAME"] ?? null);
        echo "\" /></dd>
</dl>
<dl>
\t<dt><label for=\"jab_password\">";
        // line 41
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_PASSWORD");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_PASSWORD_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"password\" id=\"jab_password\" name=\"jab_password\" value=\"";
        // line 42
        echo ($context["JAB_PASSWORD"] ?? null);
        echo "\" autocomplete=\"off\" /></dd>
</dl>
";
        // line 44
        if (($context["S_CAN_USE_SSL"] ?? null)) {
            // line 45
            echo "<dl>
\t<dt><label for=\"jab_use_ssl\">";
            // line 46
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_USE_SSL");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_USE_SSL_EXPLAIN");
            echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"jab_use_ssl\" name=\"jab_use_ssl\" value=\"1\"";
            // line 47
            if (($context["JAB_USE_SSL"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"jab_use_ssl\" value=\"0\"";
            // line 48
            if ( !($context["JAB_USE_SSL"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"jab_verify_peer\">";
            // line 51
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_VERIFY_PEER");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_VERIFY_PEER_EXPLAIN");
            echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"jab_verify_peer\" name=\"jab_verify_peer\" value=\"1\"";
            // line 52
            if (($context["JAB_VERIFY_PEER"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"jab_verify_peer\" value=\"0\"";
            // line 53
            if ( !($context["JAB_VERIFY_PEER"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"jab_verify_peer_name\">";
            // line 56
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_VERIFY_PEER_NAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_VERIFY_PEER_NAME_EXPLAIN");
            echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"jab_verify_peer_name\" name=\"jab_verify_peer_name\" value=\"1\"";
            // line 57
            if (($context["JAB_VERIFY_PEER_NAME"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"jab_verify_peer_name\" value=\"0\"";
            // line 58
            if ( !($context["JAB_VERIFY_PEER_NAME"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
</dl>
<dl>
\t<dt><label for=\"jab_allow_self_signed\">";
            // line 61
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_ALLOW_SELF_SIGNED");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_ALLOW_SELF_SIGNED_EXPLAIN");
            echo "</span></dt>
\t<dd><label><input type=\"radio\" class=\"radio\" id=\"jab_allow_self_signed\" name=\"jab_allow_self_signed\" value=\"1\"";
            // line 62
            if (($context["JAB_ALLOW_SELF_SIGNED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t<label><input type=\"radio\" class=\"radio\" name=\"jab_allow_self_signed\" value=\"0\"";
            // line 63
            if ( !($context["JAB_ALLOW_SELF_SIGNED"] ?? null)) {
                echo " checked=\"checked\"";
            }
            echo " /> ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
</dl>
";
        }
        // line 66
        echo "<dl>
\t<dt><label for=\"jab_package_size\">";
        // line 67
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_PACKAGE_SIZE");
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
        echo "</label><br /><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("JAB_PACKAGE_SIZE_EXPLAIN");
        echo "</span></dt>
\t<dd><input type=\"number\" id=\"jab_package_size\" name=\"jab_package_size\" value=\"";
        // line 68
        echo ($context["JAB_PACKAGE_SIZE"] ?? null);
        echo "\" min=\"0\" max=\"99999\" /></dd>
</dl>

</fieldset>

<fieldset class=\"submit-buttons\">
\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
        // line 74
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
        echo "\" />&nbsp;
\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
        // line 75
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
        echo "\" />
\t";
        // line 76
        echo ($context["S_FORM_TOKEN"] ?? null);
        echo "
</fieldset>
</form>

";
        // line 80
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_jabber.html", 80)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_jabber.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 80,  304 => 76,  300 => 75,  296 => 74,  287 => 68,  280 => 67,  277 => 66,  267 => 63,  259 => 62,  252 => 61,  242 => 58,  234 => 57,  227 => 56,  217 => 53,  209 => 52,  202 => 51,  192 => 48,  184 => 47,  177 => 46,  174 => 45,  172 => 44,  167 => 42,  160 => 41,  154 => 38,  147 => 37,  141 => 34,  134 => 33,  128 => 30,  121 => 29,  111 => 26,  103 => 25,  96 => 24,  93 => 23,  87 => 21,  85 => 20,  81 => 19,  75 => 16,  72 => 15,  66 => 12,  62 => 11,  59 => 10,  57 => 9,  52 => 7,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_jabber.html", "");
    }
}
