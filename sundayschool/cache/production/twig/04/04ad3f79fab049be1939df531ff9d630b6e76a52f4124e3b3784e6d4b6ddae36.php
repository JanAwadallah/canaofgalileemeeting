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

/* permission_mask.html */
class __TwigTemplate_035bdb15757605bfd5189114f0e512d84925c913bf76d980ab22fd7ee16644cf extends \Twig\Template
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
<script type=\"text/javascript\">
// <![CDATA[
\tvar active_pmask = '0';
\tvar active_fmask = '0';
\tvar active_cat = '0';

\tvar id = '000';

\tvar role_options = new Array();

\tvar no_role_assigned = \"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ROLE_ASSIGNED"), "js");
        echo "\";

\t";
        // line 14
        if (($context["S_ROLE_JS_ARRAY"] ?? null)) {
            // line 15
            echo "\t\t";
            echo ($context["S_ROLE_JS_ARRAY"] ?? null);
            echo "
\t";
        }
        // line 17
        echo "// ]]>
</script>
<script type=\"text/javascript\" src=\"style/permissions.js\"></script>

";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "p_mask", []));
        foreach ($context['_seq'] as $context["_key"] => $context["p_mask"]) {
            // line 22
            echo "<div class=\"clearfix\"></div>
<h3>";
            // line 23
            echo $this->getAttribute($context["p_mask"], "NAME", []);
            if ($this->getAttribute($context["p_mask"], "S_LOCAL", [])) {
                echo " <span class=\"small\"> [";
                echo $this->getAttribute($context["p_mask"], "L_ACL_TYPE", []);
                echo "]</span>";
            }
            echo "</h3>

";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["p_mask"], "f_mask", []));
            foreach ($context['_seq'] as $context["_key"] => $context["f_mask"]) {
                // line 26
                echo "<div class=\"clearfix\"></div>
<fieldset class=\"permissions\" id=\"perm";
                // line 27
                echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                echo "\">
\t<legend id=\"legend";
                // line 28
                echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                echo "\">
\t\t";
                // line 29
                if ( !$this->getAttribute($context["p_mask"], "S_VIEW", [])) {
                    // line 30
                    echo "\t\t\t<input type=\"checkbox\" style=\"display: none;\" class=\"permissions-checkbox\" name=\"inherit[";
                    echo $this->getAttribute($context["f_mask"], "UG_ID", []);
                    echo "][";
                    echo $this->getAttribute($context["f_mask"], "FORUM_ID", []);
                    echo "]\" id=\"checkbox";
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "\" value=\"1\" onclick=\"toggle_opacity('";
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "')\" /> 
\t\t";
                } else {
                    // line 32
                    echo "\t\t";
                }
                // line 33
                echo "\t\t";
                if ($this->getAttribute($context["f_mask"], "PADDING", [])) {
                    echo "<span class=\"padding\">";
                    echo $this->getAttribute($context["f_mask"], "PADDING", []);
                    echo $this->getAttribute($context["f_mask"], "PADDING", []);
                    echo "</span>";
                }
                echo $this->getAttribute($context["f_mask"], "NAME", []);
                echo "
\t</legend>
\t";
                // line 35
                if ( !$this->getAttribute($context["p_mask"], "S_VIEW", [])) {
                    // line 36
                    echo "\t\t<div class=\"permissions-switch\">
\t\t\t<div class=\"permissions-reset\">
\t\t\t\t<a href=\"#\" onclick=\"mark_options('perm";
                    // line 38
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "', 'y'); reset_role('role";
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "'); init_colours('";
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "'); return false;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_YES");
                    echo "</a> &middot; <a href=\"#\" onclick=\"mark_options('perm";
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "', 'u'); reset_role('role";
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "'); init_colours('";
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "'); return false;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_NO");
                    echo "</a> &middot; <a href=\"#\" onclick=\"mark_options('perm";
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "', 'n'); reset_role('role";
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "'); init_colours('";
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "'); return false;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALL_NEVER");
                    echo "</a>
\t\t\t</div>
\t\t\t<a href=\"#\" onclick=\"swap_options('";
                    // line 40
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo "', '";
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "', '0', true); return false;\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADVANCED_PERMISSIONS");
                    echo "</a>";
                    if (( !$this->getAttribute($context["p_mask"], "S_VIEW", []) && $this->getAttribute($context["f_mask"], "S_CUSTOM", []))) {
                        echo " *";
                    }
                    // line 41
                    echo "\t\t</div>
\t\t<dl class=\"permissions-simple\">
\t\t\t<dt style=\"width: 20%\"><label for=\"role";
                    // line 43
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ROLE");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label></dt>
\t\t\t";
                    // line 44
                    if ($this->getAttribute($context["f_mask"], "role_options", [])) {
                        // line 45
                        echo "\t\t\t\t<dd style=\"margin-";
                        echo ($context["S_CONTENT_FLOW_BEGIN"] ?? null);
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " 20%\">
\t\t\t\t\t<div class=\"dropdown-container dropdown-";
                        // line 46
                        echo ($context["S_CONTENT_FLOW_END"] ?? null);
                        echo " dropdown-button-control roles-options\" data-alt-text=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("ROLE_DESCRIPTION"), "js");
                        echo "\">
\t\t\t\t\t\t<select id=\"role";
                        // line 47
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo "\" name=\"role[";
                        echo $this->getAttribute($context["f_mask"], "UG_ID", []);
                        echo "][";
                        echo $this->getAttribute($context["f_mask"], "FORUM_ID", []);
                        echo "]\">";
                        echo $this->getAttribute($context["f_mask"], "S_ROLE_OPTIONS", []);
                        echo "</select>
\t\t\t\t\t\t<span title=\"Roles\" class=\"button icon-button tools-icon dropdown-trigger dropdown-select\">";
                        // line 48
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ROLE_ASSIGNED");
                        echo "</span>
\t\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t\t<ul class=\"dropdown-contents\" id=\"role";
                        // line 50
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo "\" >
\t\t\t\t\t\t\t\t";
                        // line 51
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["f_mask"], "role_options", []));
                        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                            // line 52
                            echo "\t\t\t\t\t\t\t\t\t<li data-id=\"";
                            echo $this->getAttribute($context["role"], "ID", []);
                            echo "\" data-target-id=\"advanced";
                            echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                            echo "\" data-title=\"";
                            echo $this->getAttribute($context["role"], "TITLE", []);
                            echo "\"";
                            if (($this->getAttribute($context["role"], "SELECTED", []) == true)) {
                                echo " data-selected=\"";
                                echo $this->getAttribute($context["role"], "SELECTED", []);
                                echo "\"";
                            }
                            echo ">";
                            echo $this->getAttribute($context["role"], "ROLE_NAME", []);
                            echo "</li>
\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 54
                        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"hidden\" data-name=\"role[";
                        // line 56
                        echo $this->getAttribute($context["f_mask"], "UG_ID", []);
                        echo "][";
                        echo $this->getAttribute($context["f_mask"], "FORUM_ID", []);
                        echo "]\"";
                        if ($this->getAttribute($context["f_mask"], "S_ROLE_ID", [])) {
                            echo "value=\"";
                            echo $this->getAttribute($context["f_mask"], "S_ROLE_ID", []);
                            echo "\"";
                        }
                        echo " />
\t\t\t\t\t</div>
\t\t\t\t</dd>
\t\t\t";
                    } else {
                        // line 60
                        echo "\t\t\t\t<dd>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ROLE_AVAILABLE");
                        echo "</dd>
\t\t\t";
                    }
                    // line 62
                    echo "\t\t</dl>
\t";
                }
                // line 64
                echo "
\t";
                // line 65
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["f_mask"], "category", []));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 66
                    echo "\t\t";
                    if ($this->getAttribute($context["category"], "S_FIRST_ROW", [])) {
                        // line 67
                        echo "\t\t\t";
                        if ( !$this->getAttribute($context["p_mask"], "S_VIEW", [])) {
                            // line 68
                            echo "\t\t\t\t<div class=\"permissions-advanced\" id=\"advanced";
                            echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                            echo "\" style=\"display: none;\">
\t\t\t";
                        } else {
                            // line 70
                            echo "\t\t\t\t<div class=\"permissions-advanced\" id=\"advanced";
                            echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                            echo "\">
\t\t\t";
                        }
                        // line 72
                        echo "
\t\t\t<div class=\"permissions-category\">
\t\t\t\t<ul>
\t\t";
                    }
                    // line 76
                    echo " \t\t
\t\t";
                    // line 77
                    if ($this->getAttribute($context["category"], "S_YES", [])) {
                        // line 78
                        echo "\t\t\t<li class=\"permissions-preset-yes";
                        if ((($this->getAttribute($context["p_mask"], "S_FIRST_ROW", []) && $this->getAttribute($context["f_mask"], "S_FIRST_ROW", [])) && $this->getAttribute($context["category"], "S_FIRST_ROW", []))) {
                            echo " activetab";
                        }
                        echo "\" id=\"tab";
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                        echo "\">
\t\t";
                    } elseif ($this->getAttribute(                    // line 79
$context["category"], "S_NEVER", [])) {
                        // line 80
                        echo "\t\t\t<li class=\"permissions-preset-never";
                        if ((($this->getAttribute($context["p_mask"], "S_FIRST_ROW", []) && $this->getAttribute($context["f_mask"], "S_FIRST_ROW", [])) && $this->getAttribute($context["category"], "S_FIRST_ROW", []))) {
                            echo " activetab";
                        }
                        echo "\" id=\"tab";
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                        echo "\">
\t\t";
                    } elseif ($this->getAttribute(                    // line 81
$context["category"], "S_NO", [])) {
                        // line 82
                        echo "\t\t\t<li class=\"permissions-preset-no";
                        if ((($this->getAttribute($context["p_mask"], "S_FIRST_ROW", []) && $this->getAttribute($context["f_mask"], "S_FIRST_ROW", [])) && $this->getAttribute($context["category"], "S_FIRST_ROW", []))) {
                            echo " activetab";
                        }
                        echo "\" id=\"tab";
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                        echo "\">
\t\t";
                    } else {
                        // line 84
                        echo "\t\t\t<li class=\"permissions-preset-custom";
                        if ((($this->getAttribute($context["p_mask"], "S_FIRST_ROW", []) && $this->getAttribute($context["f_mask"], "S_FIRST_ROW", [])) && $this->getAttribute($context["category"], "S_FIRST_ROW", []))) {
                            echo " activetab";
                        }
                        echo "\" id=\"tab";
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                        echo "\">
\t\t";
                    }
                    // line 86
                    echo "\t\t<a href=\"#\" onclick=\"swap_options('";
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo "', '";
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo "', '";
                    echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                    echo "', false";
                    if ($this->getAttribute($context["p_mask"], "S_VIEW", [])) {
                        echo ", true";
                    }
                    echo "); return false;\"><span class=\"tabbg\"><span class=\"colour\"></span>";
                    echo $this->getAttribute($context["category"], "CAT_NAME", []);
                    echo "</span></a></li>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "\t\t\t\t</ul>
\t\t\t</div>

\t";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["f_mask"], "category", []));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 92
                    echo "\t\t<div class=\"permissions-panel\" id=\"options";
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                    echo "\" ";
                    if ((($this->getAttribute($context["p_mask"], "S_FIRST_ROW", []) && $this->getAttribute($context["f_mask"], "S_FIRST_ROW", [])) && $this->getAttribute($context["category"], "S_FIRST_ROW", []))) {
                    } else {
                        echo " style=\"display: none;\"";
                    }
                    echo ">
\t\t\t<div class=\"tablewrap\">
\t\t\t\t<table id=\"table";
                    // line 94
                    echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                    echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                    echo "\" class=\"table1 not-responsive\">
\t\t\t\t<colgroup>
\t\t\t\t\t<col class=\"permissions-name\" />
\t\t\t\t\t<col class=\"permissions-yes\" />
\t\t\t\t\t<col class=\"permissions-no\" />
\t\t\t\t\t";
                    // line 99
                    if ( !$this->getAttribute($context["p_mask"], "S_VIEW", [])) {
                        // line 100
                        echo "\t\t\t\t\t\t<col class=\"permissions-never\" />
\t\t\t\t\t";
                    }
                    // line 102
                    echo "\t\t\t\t</colgroup>
\t\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th class=\"name\" scope=\"col\"><strong>";
                    // line 105
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACL_SETTING");
                    echo "</strong></th>
\t\t\t\t";
                    // line 106
                    if ($this->getAttribute($context["p_mask"], "S_VIEW", [])) {
                        // line 107
                        echo "\t\t\t\t\t<th class=\"value\" scope=\"col\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACL_YES");
                        echo "</th>
\t\t\t\t\t<th class=\"value\" scope=\"col\">";
                        // line 108
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACL_NEVER");
                        echo "</th>
\t\t\t\t";
                    } else {
                        // line 110
                        echo "\t\t\t\t\t<th class=\"value permissions-yes\" scope=\"col\"><a href=\"#\" onclick=\"mark_options('options";
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                        echo "', 'y'); reset_role('role";
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo "'); set_colours('";
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                        echo "', false, 'yes'); return false;\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACL_YES");
                        echo "</a></th>
\t\t\t\t\t<th class=\"value permissions-no\" scope=\"col\"><a href=\"#\" onclick=\"mark_options('options";
                        // line 111
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                        echo "', 'u'); reset_role('role";
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo "'); set_colours('";
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                        echo "', false, 'no'); return false;\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACL_NO");
                        echo "</a></th>
\t\t\t\t\t<th class=\"value permissions-never\" scope=\"col\"><a href=\"#\" onclick=\"mark_options('options";
                        // line 112
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                        echo "', 'n'); reset_role('role";
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo "'); set_colours('";
                        echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                        echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                        echo "', false, 'never'); return false;\">";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ACL_NEVER");
                        echo "</a></th>
\t\t\t\t";
                    }
                    // line 114
                    echo "\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "mask", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["mask"]) {
                        // line 118
                        echo "\t\t\t\t\t";
                        if (($this->getAttribute($context["mask"], "S_ROW_COUNT", []) % 2 == 0)) {
                            echo "<tr class=\"row4\">";
                        } else {
                            echo "<tr class=\"row3\">";
                        }
                        // line 119
                        echo "\t\t\t\t\t<th class=\"permissions-name";
                        if (($this->getAttribute($context["mask"], "S_ROW_COUNT", []) % 2 == 0)) {
                            echo " row4";
                        } else {
                            echo " row3";
                        }
                        echo "\">";
                        if ($this->getAttribute($context["mask"], "U_TRACE", [])) {
                            echo "<a href=\"";
                            echo $this->getAttribute($context["mask"], "U_TRACE", []);
                            echo "\" class=\"trace\" onclick=\"popup(this.href, 750, 515, '_trace'); return false;\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TRACE_SETTING");
                            echo "\"><img src=\"images/icon_trace.gif\" alt=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TRACE_SETTING");
                            echo "\" /></a> ";
                        }
                        echo $this->getAttribute($context["mask"], "PERMISSION", []);
                        echo "</th>
\t\t\t\t\t";
                        // line 120
                        if ($this->getAttribute($context["p_mask"], "S_VIEW", [])) {
                            // line 121
                            echo "\t\t\t\t\t\t<td";
                            if ($this->getAttribute($context["mask"], "S_YES", [])) {
                                echo " class=\"yes\"";
                            }
                            echo ">&nbsp;</td>
\t\t\t\t\t\t<td";
                            // line 122
                            if ($this->getAttribute($context["mask"], "S_NEVER", [])) {
                                echo " class=\"never\"";
                            }
                            echo "></td>
\t\t\t\t\t";
                        } else {
                            // line 124
                            echo "\t\t\t\t\t\t<td class=\"permissions-yes\"><label for=\"";
                            echo $this->getAttribute($context["mask"], "S_FIELD_NAME", []);
                            echo "_y\"><input onclick=\"reset_role('role";
                            echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                            echo "'); set_colours('";
                            echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                            echo "', false)\" id=\"";
                            echo $this->getAttribute($context["mask"], "S_FIELD_NAME", []);
                            echo "_y\" name=\"";
                            echo $this->getAttribute($context["mask"], "S_FIELD_NAME", []);
                            echo "\" class=\"radio\" type=\"radio\"";
                            if ($this->getAttribute($context["mask"], "S_YES", [])) {
                                echo " checked=\"checked\"";
                            }
                            echo " value=\"1\" /></label></td>
\t\t\t\t\t\t<td class=\"permissions-no\"><label for=\"";
                            // line 125
                            echo $this->getAttribute($context["mask"], "S_FIELD_NAME", []);
                            echo "_u\"><input onclick=\"reset_role('role";
                            echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                            echo "'); set_colours('";
                            echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                            echo "', false)\" id=\"";
                            echo $this->getAttribute($context["mask"], "S_FIELD_NAME", []);
                            echo "_u\" name=\"";
                            echo $this->getAttribute($context["mask"], "S_FIELD_NAME", []);
                            echo "\" class=\"radio\" type=\"radio\"";
                            if ($this->getAttribute($context["mask"], "S_NO", [])) {
                                echo " checked=\"checked\"";
                            }
                            echo " value=\"-1\" /></label></td>
\t\t\t\t\t\t<td class=\"permissions-never\"><label for=\"";
                            // line 126
                            echo $this->getAttribute($context["mask"], "S_FIELD_NAME", []);
                            echo "_n\"><input onclick=\"reset_role('role";
                            echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                            echo "'); set_colours('";
                            echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["category"], "S_ROW_COUNT", []);
                            echo "', false)\" id=\"";
                            echo $this->getAttribute($context["mask"], "S_FIELD_NAME", []);
                            echo "_n\" name=\"";
                            echo $this->getAttribute($context["mask"], "S_FIELD_NAME", []);
                            echo "\" class=\"radio\" type=\"radio\"";
                            if ($this->getAttribute($context["mask"], "S_NEVER", [])) {
                                echo " checked=\"checked\"";
                            }
                            echo " value=\"0\" /></label></td>
\t\t\t\t\t";
                        }
                        // line 128
                        echo "\t\t\t\t</tr>
\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mask'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 130
                    echo "\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t
\t\t\t";
                    // line 134
                    if ( !$this->getAttribute($context["p_mask"], "S_VIEW", [])) {
                        // line 135
                        echo "\t\t\t<fieldset class=\"quick\" style=\"margin-";
                        echo ($context["S_CONTENT_FLOW_END"] ?? null);
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " 11px;\">
\t\t\t\t<p class=\"small\">";
                        // line 136
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPLY_PERMISSIONS_EXPLAIN");
                        echo "</p>
\t\t\t\t<input class=\"button1\" type=\"submit\" name=\"psubmit[";
                        // line 137
                        echo $this->getAttribute($context["f_mask"], "UG_ID", []);
                        echo "][";
                        echo $this->getAttribute($context["f_mask"], "FORUM_ID", []);
                        echo "]\" value=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("APPLY_PERMISSIONS");
                        echo "\" />
\t\t\t\t";
                        // line 138
                        if (((twig_length_filter($this->env, $this->getAttribute($context["p_mask"], "f_mask", [])) > 1) || (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "p_mask", [])) > 1))) {
                            // line 139
                            echo "\t\t\t\t\t<p class=\"small\"><a href=\"#\" onclick=\"reset_opacity(0, '";
                            echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                            echo "'); return false;\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                            echo "</a> &bull; <a href=\"#\" onclick=\"reset_opacity(1, '";
                            echo $this->getAttribute($context["p_mask"], "S_ROW_COUNT", []);
                            echo $this->getAttribute($context["f_mask"], "S_ROW_COUNT", []);
                            echo "'); return false;\">";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                            echo "</a></p>
\t\t\t\t";
                        }
                        // line 141
                        echo "\t\t\t</fieldset>
\t\t
\t\t\t";
                    }
                    // line 144
                    echo "
\t\t</div>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 147
                echo "\t\t\t<div class=\"clearfix\"></div>
\t</div>
</fieldset>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f_mask'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p_mask'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "permission_mask.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 151,  667 => 147,  659 => 144,  654 => 141,  640 => 139,  638 => 138,  630 => 137,  626 => 136,  620 => 135,  618 => 134,  612 => 130,  605 => 128,  585 => 126,  566 => 125,  546 => 124,  539 => 122,  532 => 121,  530 => 120,  510 => 119,  503 => 118,  499 => 117,  494 => 114,  478 => 112,  463 => 111,  447 => 110,  442 => 108,  437 => 107,  435 => 106,  431 => 105,  426 => 102,  422 => 100,  420 => 99,  410 => 94,  397 => 92,  393 => 91,  388 => 88,  369 => 86,  357 => 84,  345 => 82,  343 => 81,  332 => 80,  330 => 79,  319 => 78,  317 => 77,  314 => 76,  308 => 72,  301 => 70,  294 => 68,  291 => 67,  288 => 66,  284 => 65,  281 => 64,  277 => 62,  271 => 60,  256 => 56,  252 => 54,  230 => 52,  226 => 51,  221 => 50,  216 => 48,  205 => 47,  199 => 46,  193 => 45,  191 => 44,  183 => 43,  179 => 41,  169 => 40,  133 => 38,  129 => 36,  127 => 35,  115 => 33,  112 => 32,  98 => 30,  96 => 29,  91 => 28,  86 => 27,  83 => 26,  79 => 25,  69 => 23,  66 => 22,  62 => 21,  56 => 17,  50 => 15,  48 => 14,  43 => 12,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "permission_mask.html", "");
    }
}
