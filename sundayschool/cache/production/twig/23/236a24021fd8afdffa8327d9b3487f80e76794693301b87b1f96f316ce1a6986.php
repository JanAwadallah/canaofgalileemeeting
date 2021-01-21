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

/* permission_roles_mask.html */
class __TwigTemplate_32cfc3ad02813fc7ec6fc7bdea4f606cac9a4470f17ad829cc8fe7a928879439 extends \Twig\Template
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
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "role_mask", []));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["role_mask"]) {
            // line 3
            echo "
\t<table class=\"table1\">
\t\t<caption>";
            // line 5
            if ($this->getAttribute($context["role_mask"], "FORUM_ID", [])) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
            }
            echo $this->getAttribute($context["role_mask"], "NAME", []);
            echo "</caption>
\t<tbody>
\t<tr>
\t\t<th>";
            // line 8
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERS");
            echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row1\">
\t\t\t";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["role_mask"], "users", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["users"]) {
                // line 13
                echo "\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["users"], "U_PROFILE", []);
                echo "\">";
                echo $this->getAttribute($context["users"], "USERNAME", []);
                echo "</a>";
                if ( !$this->getAttribute($context["users"], "S_LAST_ROW", [])) {
                    echo " :: ";
                }
                // line 14
                echo "\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 15
                echo "\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERS_NOT_ASSIGNED");
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['users'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t</td>
\t</tr>
\t<tr>
\t\t<th>";
            // line 20
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUPS");
            echo "</th>
\t</tr>
\t<tr>
\t\t<td class=\"row2\">
\t\t\t";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["role_mask"], "groups", []));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                // line 25
                echo "\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["groups"], "U_PROFILE", []);
                echo "\">";
                echo $this->getAttribute($context["groups"], "GROUP_NAME", []);
                echo "</a>";
                if ( !$this->getAttribute($context["groups"], "S_LAST_ROW", [])) {
                    echo " :: ";
                }
                // line 26
                echo "\t\t\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 27
                echo "\t\t\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUPS_NOT_ASSIGNED");
                echo "
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "\t\t</td>
\t</tr>
\t</tbody>
\t</table>

";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "\t
\t<p>";
            // line 36
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ROLE_NOT_ASSIGNED");
            echo "</p>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role_mask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "permission_roles_mask.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 36,  138 => 35,  128 => 29,  119 => 27,  114 => 26,  105 => 25,  100 => 24,  93 => 20,  88 => 17,  79 => 15,  74 => 14,  65 => 13,  60 => 12,  53 => 8,  42 => 5,  38 => 3,  33 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "permission_roles_mask.html", "");
    }
}
