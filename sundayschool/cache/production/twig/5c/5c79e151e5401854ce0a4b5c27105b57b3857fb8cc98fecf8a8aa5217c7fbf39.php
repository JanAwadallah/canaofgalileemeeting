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

/* acp_attachments.html */
class __TwigTemplate_938af42f7f9f173c10436f6f90afa6616094055b52534f1231a1c2267756c330 extends \Twig\Template
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
        $this->loadTemplate("overall_header.html", "acp_attachments.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<a id=\"maincontent\"></a>

";
        // line 5
        if (($context["U_BACK"] ?? null)) {
            // line 6
            echo "\t<a href=\"";
            echo ($context["U_BACK"] ?? null);
            echo "\" style=\"float: ";
            echo ($context["S_CONTENT_FLOW_END"] ?? null);
            echo ";\">&laquo; ";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BACK");
            echo "</a>
";
        }
        // line 8
        echo "
<h1>";
        // line 9
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
        echo "</h1>

<p>";
        // line 11
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE_EXPLAIN");
        echo "</p>

";
        // line 13
        if (($context["S_WARNING"] ?? null)) {
            // line 14
            echo "\t<div class=\"errorbox\">
\t\t<h3>";
            // line 15
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNING");
            echo "</h3>
\t\t<p>";
            // line 16
            echo ($context["WARNING_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 19
        echo "
";
        // line 20
        if (($context["S_NOTIFY"] ?? null)) {
            // line 21
            echo "\t<div class=\"successbox\">
\t\t<h3>";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFY");
            echo "</h3>
\t\t<p>";
            // line 23
            echo ($context["NOTIFY_MSG"] ?? null);
            echo "</p>
\t</div>
";
        }
        // line 26
        echo "
";
        // line 27
        if (($context["S_UPLOADING_FILES"] ?? null)) {
            // line 28
            echo "\t<h2>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPLOADING_FILES");
            echo "</h2>

\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "upload", []));
            foreach ($context['_seq'] as $context["_key"] => $context["upload"]) {
                // line 31
                echo "\t\t:: ";
                echo $this->getAttribute($context["upload"], "FILE_INFO", []);
                echo "<br />
\t\t";
                // line 32
                if ($this->getAttribute($context["upload"], "S_DENIED", [])) {
                    echo "<span class=\"error\">";
                    echo $this->getAttribute($context["upload"], "DENIED", []);
                    echo "</span>";
                } elseif ($this->getAttribute($context["upload"], "ERROR_MSG", [])) {
                    echo "<span class=\"error\">";
                    echo $this->getAttribute($context["upload"], "ERROR_MSG", []);
                    echo "</span>";
                } else {
                    echo "<span class=\"success\">";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUCCESSFULLY_UPLOADED");
                    echo "</span>";
                }
                // line 33
                echo "\t\t<br /><br />
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['upload'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
";
        }
        // line 37
        echo "
";
        // line 38
        if (($context["S_ATTACHMENT_SETTINGS"] ?? null)) {
            // line 39
            echo "
\t<form id=\"attachsettings\" method=\"post\" action=\"";
            // line 40
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "options", []));
            foreach ($context['_seq'] as $context["_key"] => $context["options"]) {
                // line 42
                echo "\t\t";
                if ($this->getAttribute($context["options"], "S_LEGEND", [])) {
                    // line 43
                    echo "\t\t\t";
                    if ( !$this->getAttribute($context["options"], "S_FIRST_ROW", [])) {
                        // line 44
                        echo "\t\t\t\t</fieldset>
\t\t\t";
                    }
                    // line 46
                    echo "\t\t\t<fieldset>
\t\t\t\t<legend>";
                    // line 47
                    echo $this->getAttribute($context["options"], "LEGEND", []);
                    echo "</legend>
\t\t";
                } else {
                    // line 49
                    echo "
\t\t\t<dl>
\t\t\t\t<dt><label for=\"";
                    // line 51
                    echo $this->getAttribute($context["options"], "KEY", []);
                    echo "\">";
                    echo $this->getAttribute($context["options"], "TITLE", []);
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</label>";
                    if ($this->getAttribute($context["options"], "S_EXPLAIN", [])) {
                        echo "<br /><span>";
                        echo $this->getAttribute($context["options"], "TITLE_EXPLAIN", []);
                        echo "</span>";
                    }
                    echo "</dt>
\t\t\t\t<dd>";
                    // line 52
                    echo $this->getAttribute($context["options"], "CONTENT", []);
                    echo "</dd>
\t\t\t</dl>

\t\t";
                }
                // line 56
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "\t</fieldset>

\t<fieldset class=\"submit-buttons\">
\t\t<legend>";
            // line 60
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "</legend>
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 61
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 62
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t</fieldset>

\t";
            // line 65
            if ( !($context["S_SECURE_DOWNLOADS"] ?? null)) {
                // line 66
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 67
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SECURE_DOWNLOAD_NOTICE");
                echo "</p>
\t\t</div>
\t";
            }
            // line 70
            echo "
\t<fieldset>
\t\t<legend>";
            // line 72
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SECURE_TITLE");
            echo "</legend>
\t\t<p>";
            // line 73
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_ADD_IPS_EXPLAIN");
            echo "</p>
\t<dl>
\t\t<dt><label for=\"ip_hostname\">";
            // line 75
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IP_HOSTNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label></dt>
\t\t<dd><textarea id=\"ip_hostname\" cols=\"40\" rows=\"3\" name=\"ips\"></textarea></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"exclude\">";
            // line 79
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IP_EXCLUDE");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</label><br /><span>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXCLUDE_ENTERED_IP");
            echo "</span></dt>
\t\t<dd><label><input type=\"radio\" id=\"exclude\" name=\"ipexclude\" value=\"1\" class=\"radio\" /> ";
            // line 80
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("YES");
            echo "</label>
\t\t\t<label><input type=\"radio\" name=\"ipexclude\" value=\"0\" checked=\"checked\" class=\"radio\" /> ";
            // line 81
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO");
            echo "</label></dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input class=\"button1\" type=\"submit\" id=\"securesubmit\" name=\"securesubmit\" value=\"";
            // line 85
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t</p>
\t</fieldset>

\t<fieldset>
\t\t<legend>";
            // line 90
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REMOVE_IPS");
            echo "</legend>
\t";
            // line 91
            if (($context["S_DEFINED_IPS"] ?? null)) {
                // line 92
                echo "\t\t\t<p>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DOWNLOAD_REMOVE_IPS_EXPLAIN");
                echo "</p>
\t\t<dl>
\t\t\t<dt><label for=\"remove_ip_hostname\">";
                // line 94
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IP_HOSTNAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><select name=\"unip[]\" id=\"remove_ip_hostname\" multiple=\"multiple\" size=\"10\">";
                // line 95
                echo ($context["DEFINED_IPS"] ?? null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"quick\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"unsecuresubmit\" name=\"unsecuresubmit\" value=\"";
                // line 99
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />
\t\t</p>
\t\t</fieldset>

\t";
            } else {
                // line 104
                echo "\t\t<p>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_IPS_DEFINED");
                echo "</p>
\t";
            }
            // line 106
            echo "\t";
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 110
($context["S_EXTENSION_GROUPS"] ?? null)) {
            // line 111
            echo "
\t";
            // line 112
            if (($context["S_EDIT_GROUP"] ?? null)) {
                // line 113
                echo "\t\t<script type=\"text/javascript\" defer=\"defer\">
\t\t// <![CDATA[
\t\t\tfunction update_image(newimage)
\t\t\t{
\t\t\t\tif (newimage == 'no_image')
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('image_upload_icon').src = \"";
                // line 119
                echo ($context["ROOT_PATH"] ?? null);
                echo "images/spacer.gif\";
\t\t\t\t}
\t\t\t\telse
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('image_upload_icon').src = \"";
                // line 123
                echo ($context["ROOT_PATH"] ?? null);
                echo ($context["IMG_PATH"] ?? null);
                echo "/\" + newimage;
\t\t\t\t}
\t\t\t}

\t\t\tfunction show_extensions(elem)
\t\t\t{
\t\t\t\tvar str = '';

\t\t\t\tfor (i = 0; i < elem.length; i++)
\t\t\t\t{
\t\t\t\t\tvar element = elem.options[i];
\t\t\t\t\tif (element.selected)
\t\t\t\t\t{
\t\t\t\t\t\tif (str)
\t\t\t\t\t\t{
\t\t\t\t\t\t\tstr = str + ', ';
\t\t\t\t\t\t}

\t\t\t\t\t\tstr = str + element.innerHTML;
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (document.all)
\t\t\t\t{
\t\t\t\t\tdocument.all.ext.innerText = str;
\t\t\t\t}
\t\t\t\telse if (document.getElementById('ext').textContent)
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('ext').textContent = str;
\t\t\t\t}
\t\t\t\telse if (document.getElementById('ext').firstChild.nodeValue)
\t\t\t\t{
\t\t\t\t\tdocument.getElementById('ext').firstChild.nodeValue = str;
\t\t\t\t}
\t\t\t}

\t\t// ]]>
\t\t</script>

\t\t<form id=\"extgroups\" method=\"post\" action=\"";
                // line 162
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t<fieldset>
\t\t\t<input type=\"hidden\" name=\"action\" value=\"";
                // line 164
                echo ($context["ACTION"] ?? null);
                echo "\" />
\t\t\t<input type=\"hidden\" name=\"g\" value=\"";
                // line 165
                echo ($context["GROUP_ID"] ?? null);
                echo "\" />

\t\t\t<legend>";
                // line 167
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND");
                echo "</legend>
\t\t<dl>
\t\t\t<dt><label for=\"group_name\">";
                // line 169
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GROUP_NAME");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"text\" id=\"group_name\" size=\"20\" maxlength=\"100\" name=\"group_name\" value=\"";
                // line 170
                echo ($context["GROUP_NAME"] ?? null);
                echo "\" /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"category\">";
                // line 173
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPECIAL_CATEGORY");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPECIAL_CATEGORY_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd>";
                // line 174
                echo ($context["S_CATEGORY_SELECT"] ?? null);
                echo "</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allowed\">";
                // line 177
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOWED");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"allowed\" name=\"allow_group\" value=\"1\"";
                // line 178
                if (($context["ALLOW_GROUP"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allow_in_pm\">";
                // line 181
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOW_IN_PM");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"checkbox\" class=\"radio\" id=\"allow_in_pm\" name=\"allow_in_pm\" value=\"1\"";
                // line 182
                if (($context["ALLOW_IN_PM"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"upload_icon\">";
                // line 185
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UPLOAD_ICON");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><select name=\"upload_icon\" id=\"upload_icon\" onchange=\"update_image(this.options[selectedIndex].value);\">
\t\t\t\t\t<option value=\"no_image\"";
                // line 187
                if (($context["S_NO_IMAGE"] ?? null)) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_IMAGE");
                echo "</option>";
                echo ($context["S_FILENAME_LIST"] ?? null);
                echo "
\t\t\t</select></dd>
\t\t\t<dd>&nbsp;<img ";
                // line 189
                if (($context["S_NO_IMAGE"] ?? null)) {
                    echo "src=\"";
                    echo ($context["ROOT_PATH"] ?? null);
                    echo "images/spacer.gif\"";
                } else {
                    echo "src=\"";
                    echo ($context["UPLOAD_ICON_SRC"] ?? null);
                    echo "\"";
                }
                echo " id=\"image_upload_icon\" alt=\"\" title=\"\" />&nbsp;</dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"extgroup_filesize\">";
                // line 192
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MAX_EXTGROUP_FILESIZE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><input type=\"number\" id=\"extgroup_filesize\" min=\"0\" max=\"999999999999999\" step=\"any\" name=\"max_filesize\" value=\"";
                // line 193
                echo ($context["EXTGROUP_FILESIZE"] ?? null);
                echo "\" /> <select name=\"size_select\">";
                echo ($context["S_EXT_GROUP_SIZE_OPTIONS"] ?? null);
                echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"assigned_extensions\">";
                // line 196
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ASSIGNED_EXTENSIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label></dt>
\t\t\t<dd><div id=\"ext\">";
                // line 197
                echo ($context["ASSIGNED_EXTENSIONS"] ?? null);
                echo "</div> <span>[<a href=\"";
                echo ($context["U_EXTENSIONS"] ?? null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO_TO_EXTENSIONS");
                echo "</a> ]</span></dd>
\t\t\t<dd><select name=\"extensions[]\" id=\"assigned_extensions\" class=\"narrow\" onchange=\"show_extensions(this);\" multiple=\"multiple\" size=\"8\">";
                // line 198
                echo ($context["S_EXTENSION_OPTIONS"] ?? null);
                echo "</select></dd>
\t\t</dl>
\t\t<dl>
\t\t\t<dt><label for=\"allowed_forums\">";
                // line 201
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOWED_FORUMS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOWED_FORUMS_EXPLAIN");
                echo "</span></dt>
\t\t\t<dd><label><input type=\"radio\" id=\"allowed_forums\" class=\"radio\" name=\"forum_select\" value=\"0\"";
                // line 202
                if ( !($context["S_FORUM_IDS"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOW_ALL_FORUMS");
                echo "</label></dd>
\t\t\t<dd><label><input type=\"radio\" class=\"radio\" name=\"forum_select\" value=\"1\"";
                // line 203
                if (($context["S_FORUM_IDS"] ?? null)) {
                    echo " checked=\"checked\"";
                }
                echo " /> ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOW_SELECTED_FORUMS");
                echo "</label></dd>
\t\t\t<dd><select name=\"allowed_forums[]\" multiple=\"multiple\" size=\"8\">";
                // line 204
                echo ($context["S_FORUM_ID_OPTIONS"] ?? null);
                echo "</select></dd>
\t\t</dl>

\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 208
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 209
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
                echo "\" />
\t\t</p>
\t\t";
                // line 211
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t</fieldset>

\t\t</form>
\t";
            } else {
                // line 216
                echo "
\t\t<form id=\"extgroups\" method=\"post\" action=\"";
                // line 217
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t<fieldset class=\"tabulated\">
\t\t<legend>";
                // line 219
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
                echo "</legend>

\t\t<table class=\"table1\">
\t\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 225
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION_GROUP");
                echo "</th>
\t\t\t<th>";
                // line 226
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SPECIAL_CATEGORY");
                echo "</th>
\t\t\t<th>";
                // line 227
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("OPTIONS");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 231
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "groups", []));
                foreach ($context['_seq'] as $context["_key"] => $context["groups"]) {
                    // line 232
                    echo "\t\t\t";
                    if (($this->getAttribute($context["groups"], "S_ADD_SPACER", []) &&  !$this->getAttribute($context["groups"], "S_FIRST_ROW", []))) {
                        // line 233
                        echo "\t\t\t<tr>
\t\t\t\t<td class=\"spacer\" colspan=\"3\">&nbsp;</td>
\t\t\t</tr>
\t\t\t";
                    }
                    // line 237
                    echo "\t\t\t<tr>
\t\t\t\t<td><strong>";
                    // line 238
                    echo $this->getAttribute($context["groups"], "GROUP_NAME", []);
                    echo "</strong>
\t\t\t\t\t";
                    // line 239
                    if (($this->getAttribute($context["groups"], "S_GROUP_ALLOWED", []) &&  !$this->getAttribute($context["groups"], "S_ALLOWED_IN_PM", []))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOT_ALLOWED_IN_PM");
                        echo "</span>
\t\t\t\t\t";
                    } elseif (($this->getAttribute(                    // line 240
$context["groups"], "S_ALLOWED_IN_PM", []) &&  !$this->getAttribute($context["groups"], "S_GROUP_ALLOWED", []))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLY_ALLOWED_IN_PM");
                        echo "</span>
\t\t\t\t\t";
                    } elseif (( !$this->getAttribute(                    // line 241
$context["groups"], "S_GROUP_ALLOWED", []) &&  !$this->getAttribute($context["groups"], "S_ALLOWED_IN_PM", []))) {
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOT_ALLOWED_IN_PM_POST");
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 242
                        echo "<br /><span>&raquo; ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ALLOWED_IN_PM_POST");
                        echo "</span>";
                    }
                    // line 243
                    echo "\t\t\t\t</td>
\t\t\t\t<td>";
                    // line 244
                    echo $this->getAttribute($context["groups"], "CATEGORY", []);
                    echo "</td>
\t\t\t\t<td align=\"center\" valign=\"middle\" style=\"white-space: nowrap;\">&nbsp;<a href=\"";
                    // line 245
                    echo $this->getAttribute($context["groups"], "U_EDIT", []);
                    echo "\">";
                    echo ($context["ICON_EDIT"] ?? null);
                    echo "</a>&nbsp;&nbsp;<a href=\"";
                    echo $this->getAttribute($context["groups"], "U_DELETE", []);
                    echo "\" data-ajax=\"row_delete\">";
                    echo ($context["ICON_DELETE"] ?? null);
                    echo "</a>&nbsp;</td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groups'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 248
                echo "\t\t</tbody>
\t\t</table>
\t\t<p class=\"quick\">
\t\t\t\t";
                // line 251
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CREATE_GROUP");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <input type=\"text\" name=\"group_name\" maxlength=\"30\" />
\t\t\t\t<input class=\"button2\" name=\"add\" type=\"submit\" value=\"";
                // line 252
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />
\t\t</p>
\t\t";
                // line 254
                echo ($context["S_FORM_TOKEN"] ?? null);
                echo "
\t\t</fieldset>
\t\t</form>

\t";
            }
            // line 259
            echo "
";
        } elseif (        // line 260
($context["S_EXTENSIONS"] ?? null)) {
            // line 261
            echo "
\t<form id=\"add_ext\" method=\"post\" action=\"";
            // line 262
            echo ($context["U_ACTION"] ?? null);
            echo "\">
\t<fieldset>
\t\t<legend>";
            // line 264
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ADD_EXTENSION");
            echo "</legend>
\t<dl>
\t\t<dt><label for=\"add_extension\">";
            // line 266
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION");
            echo "</label></dt>
\t\t<dd><input type=\"text\" id=\"add_extension\" size=\"20\" maxlength=\"100\" name=\"add_extension\" value=\"";
            // line 267
            echo ($context["ADD_EXTENSION"] ?? null);
            echo "\" /></dd>
\t</dl>
\t<dl>
\t\t<dt><label for=\"extension_group\">";
            // line 270
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION_GROUP");
            echo "</label></dt>
\t\t<dd>";
            // line 271
            echo ($context["GROUP_SELECT_OPTIONS"] ?? null);
            echo "</dd>
\t</dl>

\t<p class=\"quick\">
\t\t<input type=\"submit\" id=\"add_extension_check\" name=\"add_extension_check\" class=\"button2\" value=\"";
            // line 275
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />
\t</p>
\t";
            // line 277
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

\t<form id=\"change_ext\" method=\"post\" action=\"";
            // line 281
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 284
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</legend>

\t<table class=\"table1\">
\t\t<col class=\"row1\" /><col class=\"row1\" /><col class=\"row2\" />
\t<thead>
\t<tr>
\t\t<th>";
            // line 290
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION");
            echo "</th>
\t\t<th>";
            // line 291
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION_GROUP");
            echo "</th>
\t\t<th>";
            // line 292
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
            echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
            // line 296
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "extensions", []));
            foreach ($context['_seq'] as $context["_key"] => $context["extensions"]) {
                // line 297
                echo "\t\t";
                if ($this->getAttribute($context["extensions"], "S_SPACER", [])) {
                    // line 298
                    echo "\t\t<tr>
\t\t\t<td class=\"spacer\" colspan=\"3\">&nbsp;</td>
\t\t</tr>
\t\t";
                }
                // line 302
                echo "\t\t<tr>
\t\t\t<td><strong>";
                // line 303
                echo $this->getAttribute($context["extensions"], "EXTENSION", []);
                echo "</strong></td>
\t\t\t<td>";
                // line 304
                echo $this->getAttribute($context["extensions"], "GROUP_OPTIONS", []);
                echo "</td>
\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"extension_id_list[]\" value=\"";
                // line 305
                echo $this->getAttribute($context["extensions"], "EXTENSION_ID", []);
                echo "\" /><input type=\"hidden\" name=\"extension_change_list[]\" value=\"";
                echo $this->getAttribute($context["extensions"], "EXTENSION_ID", []);
                echo "\" /></td>
\t\t</tr>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extensions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 308
            echo "\t</tbody>
\t</table>

\t<p class=\"submit-buttons\">
\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
            // line 312
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
            echo "\" />&nbsp;
\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
            // line 313
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
            echo "\" />
\t</p>
\t";
            // line 315
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 319
($context["S_ORPHAN"] ?? null)) {
            // line 320
            echo "
\t<form id=\"orphan\" method=\"post\" action=\"";
            // line 321
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 324
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</legend>

\t<div class=\"pagination top-pagination\">
\t";
            // line 327
            if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])) || ($context["TOTAL_FILES"] ?? null))) {
                // line 328
                echo "\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NUMBER_FILES");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["TOTAL_FILES"] ?? null);
                echo " &bull; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_SIZE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["TOTAL_SIZE"] ?? null);
                echo "
\t\t";
                // line 329
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                    // line 330
                    echo "\t\t\t&bull; ";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "acp_attachments.html", 330)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 331
                    echo "\t\t";
                } else {
                    // line 332
                    echo "\t\t\t&bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t";
                }
                // line 334
                echo "\t";
            }
            // line 335
            echo "\t</div>

\t";
            // line 337
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "orphan", []))) {
                // line 338
                echo "\t\t<table class=\"table1 zebra-table fixed-width-table\">
\t\t<thead>
\t\t<tr>
\t\t\t<th>";
                // line 341
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILENAME");
                echo "</th>
\t\t\t<th style=\"width: 15%;\">";
                // line 342
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILEDATE");
                echo "</th>
\t\t\t<th style=\"width: 15%;\">";
                // line 343
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILESIZE");
                echo "</th>
\t\t\t<th style=\"width: 15%;\">";
                // line 344
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACH_POST_ID");
                echo "</th>
\t\t\t<th style=\"width: 15%;\">";
                // line 345
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACH_TO_POST");
                echo "</th>
\t\t\t<th style=\"width: 15%;\">";
                // line 346
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE");
                echo "</th>
\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
                // line 350
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "orphan", []));
                foreach ($context['_seq'] as $context["_key"] => $context["orphan"]) {
                    // line 351
                    echo "\t\t\t<tr>
\t\t\t\t<td><a href=\"";
                    // line 352
                    echo $this->getAttribute($context["orphan"], "U_FILE", []);
                    echo "\">";
                    echo $this->getAttribute($context["orphan"], "REAL_FILENAME", []);
                    echo "</a></td>
\t\t\t\t<td>";
                    // line 353
                    echo $this->getAttribute($context["orphan"], "FILETIME", []);
                    echo "</td>
\t\t\t\t<td>";
                    // line 354
                    echo $this->getAttribute($context["orphan"], "FILESIZE", []);
                    echo "</td>
\t\t\t\t<td><strong>";
                    // line 355
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ATTACH_ID");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " </strong><input type=\"number\" min=\"0\" max=\"9999999999\" name=\"post_id[";
                    echo $this->getAttribute($context["orphan"], "ATTACH_ID", []);
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["orphan"], "POST_ID", []);
                    echo "\" style=\"width: 75%;\" /></td>
\t\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"add[";
                    // line 356
                    echo $this->getAttribute($context["orphan"], "ATTACH_ID", []);
                    echo "]\" /></td>
\t\t\t\t<td><input type=\"checkbox\" class=\"radio\" name=\"delete[";
                    // line 357
                    echo $this->getAttribute($context["orphan"], "ATTACH_ID", []);
                    echo "]\" /></td>
\t\t\t</tr>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orphan'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 360
                echo "\t\t<tr class=\"row4\">
\t\t\t<td colspan=\"4\">&nbsp;</td>
\t\t\t<td class=\"small\"><a href=\"#\" onclick=\"marklist('orphan', 'add', true); return false;\">";
                // line 362
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('orphan', 'add', false); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                echo "</a></td>
\t\t\t<td class=\"small\"><a href=\"#\" onclick=\"marklist('orphan', 'delete', true); return false;\">";
                // line 363
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                echo "</a> :: <a href=\"#\" onclick=\"marklist('orphan', 'delete', false); return false;\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                echo "</a></td>
\t\t</tr>
\t\t</tbody>
\t\t</table>
\t";
            } else {
                // line 368
                echo "\t\t<div class=\"errorbox\">
\t\t\t<p>";
                // line 369
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ATTACHMENTS");
                echo "</p>
\t\t</div>
\t";
            }
            // line 372
            echo "
\t";
            // line 373
            if (($context["TOTAL_FILES"] ?? null)) {
                // line 374
                echo "\t<div class=\"pagination\">
\t\t";
                // line 375
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NUMBER_FILES");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["TOTAL_FILES"] ?? null);
                echo " &bull; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_SIZE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["TOTAL_SIZE"] ?? null);
                echo "
\t\t";
                // line 376
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                    // line 377
                    echo "\t\t\t&bull; ";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "acp_attachments.html", 377)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 378
                    echo "\t\t";
                } else {
                    // line 379
                    echo "\t\t\t&bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t";
                }
                // line 381
                echo "\t</div>
\t";
            }
            // line 383
            echo "
\t";
            // line 384
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "orphan", []))) {
                // line 385
                echo "\t\t<p class=\"submit-buttons\">
\t\t\t<input class=\"button1\" type=\"submit\" id=\"submit\" name=\"submit\" value=\"";
                // line 386
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SUBMIT");
                echo "\" />&nbsp;
\t\t\t<input class=\"button2\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"";
                // line 387
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESET");
                echo "\" />
\t\t</p>
\t";
            }
            // line 390
            echo "
\t";
            // line 391
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

";
        } elseif (        // line 395
($context["S_MANAGE"] ?? null)) {
            // line 396
            echo "
\t<form id=\"attachments\" method=\"post\" action=\"";
            // line 397
            echo ($context["U_ACTION"] ?? null);
            echo "\">

\t<fieldset class=\"tabulated\">
\t<legend>";
            // line 400
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TITLE");
            echo "</legend>

\t<div class=\"pagination top-pagination\">
\t";
            // line 403
            if ((twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", [])) || ($context["TOTAL_FILES"] ?? null))) {
                // line 404
                echo "\t\t";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NUMBER_FILES");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["TOTAL_FILES"] ?? null);
                echo " &bull; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_SIZE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["TOTAL_SIZE"] ?? null);
                echo "
\t\t";
                // line 405
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                    // line 406
                    echo "\t\t\t&bull; ";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "acp_attachments.html", 406)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 407
                    echo "\t\t";
                } else {
                    // line 408
                    echo "\t\t\t&bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t";
                }
                // line 410
                echo "\t";
            }
            // line 411
            echo "\t</div>

";
            // line 413
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "attachments", []))) {
                // line 414
                echo "\t<table class=\"table1 zebra-table fixed-width-table\">
\t<thead>
\t<tr>
\t\t<th>";
                // line 417
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILENAME");
                echo "</th>
\t\t<th style=\"width: 15%;\">";
                // line 418
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTED");
                echo "</th>
\t\t<th style=\"width: 15%;\" class=\"centered-text\">";
                // line 419
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FILESIZE");
                echo "</th>
\t\t<th style=\"width: 10%;\" class=\"centered-text\">";
                // line 420
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK");
                echo "</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
                // line 424
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["attachments"]);
                foreach ($context['_seq'] as $context["_key"] => $context["attachments"]) {
                    // line 425
                    echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
                    // line 427
                    echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("EXTENSION_GROUP") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
                    echo " <strong>";
                    echo $this->getAttribute($context["attachments"], "EXT_GROUP_NAME", []);
                    echo "</strong>
\t\t\t\t";
                    // line 428
                    if ($this->getAttribute($context["attachments"], "S_IN_MESSAGE", [])) {
                        // line 429
                        echo "\t\t\t\t\t<br>";
                        echo $this->getAttribute($context["attachments"], "L_DOWNLOAD_COUNT", []);
                        echo "
\t\t\t\t\t<br>";
                        // line 430
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("IN");
                        echo " ";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PRIVATE_MESSAGE");
                        echo "
\t\t\t\t";
                    } else {
                        // line 432
                        echo "\t\t\t\t\t<br><a href=\"";
                        echo $this->getAttribute($context["attachments"], "U_FILE", []);
                        echo "\"><strong>";
                        echo $this->getAttribute($context["attachments"], "REAL_FILENAME", []);
                        echo "</strong></a>
\t\t\t\t\t";
                        // line 433
                        if ($this->getAttribute($context["attachments"], "COMMENT", [])) {
                            echo "<br>";
                            echo $this->getAttribute($context["attachments"], "COMMENT", []);
                        }
                        // line 434
                        echo "\t\t\t\t\t<br>";
                        echo $this->getAttribute($context["attachments"], "L_DOWNLOAD_COUNT", []);
                        echo "
\t\t\t\t\t<br>";
                        // line 435
                        echo ($this->env->getExtension('phpbb\template\twig\extension')->lang("TOPIC") . $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON"));
                        echo " <a href=\"";
                        echo $this->getAttribute($context["attachments"], "U_VIEW_TOPIC", []);
                        echo "\">";
                        echo $this->getAttribute($context["attachments"], "TOPIC_TITLE", []);
                        echo "</a>
\t\t\t\t";
                    }
                    // line 437
                    echo "\t\t\t</td>
\t\t\t<td>";
                    // line 438
                    echo $this->getAttribute($context["attachments"], "FILETIME", []);
                    echo "<br>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute($context["attachments"], "ATTACHMENT_POSTER", []);
                    echo "</td>
\t\t\t<td class=\"centered-text\">";
                    // line 439
                    echo $this->getAttribute($context["attachments"], "FILESIZE", []);
                    echo "</td>
\t\t\t<td class=\"centered-text\"><input type=\"checkbox\" class=\"radio\" name=\"delete[";
                    // line 440
                    echo $this->getAttribute($context["attachments"], "ATTACH_ID", []);
                    echo "]\" /></td>
\t\t</tr>
\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachments'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 443
                echo "\t</tbody>
\t</table>
";
            } else {
                // line 446
                echo "\t<div class=\"errorbox\">
\t\t<p>";
                // line 447
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_ATTACHMENTS");
                echo "</p>
\t</div>
";
            }
            // line 450
            echo "
\t";
            // line 451
            if (($context["TOTAL_FILES"] ?? null)) {
                // line 452
                echo "\t<div class=\"pagination\">
\t\t";
                // line 453
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NUMBER_FILES");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["TOTAL_FILES"] ?? null);
                echo " &bull; ";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOTAL_SIZE");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " ";
                echo ($context["TOTAL_SIZE"] ?? null);
                echo "
\t\t";
                // line 454
                if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "pagination", []))) {
                    // line 455
                    echo "\t\t\t&bull; ";
                    $location = "pagination.html";
                    $namespace = false;
                    if (strpos($location, '@') === 0) {
                        $namespace = substr($location, 1, strpos($location, '/') - 1);
                        $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                        $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                    }
                    $this->loadTemplate("pagination.html", "acp_attachments.html", 455)->display($context);
                    if ($namespace) {
                        $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                    }
                    // line 456
                    echo "\t\t";
                } else {
                    // line 457
                    echo "\t\t\t&bull; ";
                    echo ($context["PAGE_NUMBER"] ?? null);
                    echo "
\t\t";
                }
                // line 459
                echo "\t</div>
\t";
            }
            // line 461
            echo "
\t<fieldset class=\"display-options\">
\t\t";
            // line 463
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DISPLAY_LOG");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " &nbsp;";
            echo ($context["S_LIMIT_DAYS"] ?? null);
            echo "&nbsp;";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SORT_BY");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo " ";
            echo ($context["S_SORT_KEY"] ?? null);
            echo " ";
            echo ($context["S_SORT_DIR"] ?? null);
            echo "
\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 464
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("GO");
            echo "\" name=\"sort\" />
\t</fieldset>

\t<hr />

";
            // line 469
            if (twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "attachments", []))) {
                // line 470
                echo "\t<fieldset class=\"quick\">
\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                // line 471
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_MARKED");
                echo "\" /><br />
\t\t<p class=\"small\">
\t\t\t<a href=\"#\" onclick=\"marklist('attachments', 'delete', true); return false;\">";
                // line 473
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL");
                echo "</a> &bull;
\t\t\t<a href=\"#\" onclick=\"marklist('attachments', 'delete', false); return false;\">";
                // line 474
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNMARK_ALL");
                echo "</a>
\t\t</p>
\t</fieldset>
";
            }
            // line 478
            echo "\t";
            echo ($context["S_FORM_TOKEN"] ?? null);
            echo "
\t</fieldset>
\t</form>

\t";
            // line 482
            if (($context["S_ACTION_OPTIONS"] ?? null)) {
                // line 483
                echo "\t<fieldset>
\t\t<legend>";
                // line 484
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC_STATS");
                echo "</legend>
\t\t<form id=\"action_stats_form\" method=\"post\" action=\"";
                // line 485
                echo ($context["U_ACTION"] ?? null);
                echo "\">
\t\t\t<dl>
\t\t\t\t<dt><label for=\"action_stats\">";
                // line 487
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC_FILES_STATS");
                echo "</label><br /><span>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RESYNC_FILES_STATS_EXPLAIN");
                echo "</span></dt>
\t\t\t\t<dd><input type=\"hidden\" name=\"action\" value=\"stats\" /><input class=\"button2\" type=\"submit\" id=\"action_stats\" name=\"action_stats\" value=\"";
                // line 488
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RUN");
                echo "\" /></dd>
\t\t\t</dl>
\t\t</form>
\t</fieldset>
\t";
            }
        }
        // line 494
        echo "
";
        // line 495
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "acp_attachments.html", 495)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "acp_attachments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1401 => 495,  1398 => 494,  1389 => 488,  1383 => 487,  1378 => 485,  1374 => 484,  1371 => 483,  1369 => 482,  1361 => 478,  1354 => 474,  1350 => 473,  1345 => 471,  1342 => 470,  1340 => 469,  1332 => 464,  1318 => 463,  1314 => 461,  1310 => 459,  1304 => 457,  1301 => 456,  1288 => 455,  1286 => 454,  1274 => 453,  1271 => 452,  1269 => 451,  1266 => 450,  1260 => 447,  1257 => 446,  1252 => 443,  1243 => 440,  1239 => 439,  1231 => 438,  1228 => 437,  1219 => 435,  1214 => 434,  1209 => 433,  1202 => 432,  1195 => 430,  1190 => 429,  1188 => 428,  1182 => 427,  1178 => 425,  1174 => 424,  1167 => 420,  1163 => 419,  1159 => 418,  1155 => 417,  1150 => 414,  1148 => 413,  1144 => 411,  1141 => 410,  1135 => 408,  1132 => 407,  1119 => 406,  1117 => 405,  1104 => 404,  1102 => 403,  1096 => 400,  1090 => 397,  1087 => 396,  1085 => 395,  1078 => 391,  1075 => 390,  1069 => 387,  1065 => 386,  1062 => 385,  1060 => 384,  1057 => 383,  1053 => 381,  1047 => 379,  1044 => 378,  1031 => 377,  1029 => 376,  1017 => 375,  1014 => 374,  1012 => 373,  1009 => 372,  1003 => 369,  1000 => 368,  990 => 363,  984 => 362,  980 => 360,  971 => 357,  967 => 356,  958 => 355,  954 => 354,  950 => 353,  944 => 352,  941 => 351,  937 => 350,  930 => 346,  926 => 345,  922 => 344,  918 => 343,  914 => 342,  910 => 341,  905 => 338,  903 => 337,  899 => 335,  896 => 334,  890 => 332,  887 => 331,  874 => 330,  872 => 329,  859 => 328,  857 => 327,  851 => 324,  845 => 321,  842 => 320,  840 => 319,  833 => 315,  828 => 313,  824 => 312,  818 => 308,  807 => 305,  803 => 304,  799 => 303,  796 => 302,  790 => 298,  787 => 297,  783 => 296,  776 => 292,  772 => 291,  768 => 290,  759 => 284,  753 => 281,  746 => 277,  741 => 275,  734 => 271,  730 => 270,  724 => 267,  720 => 266,  715 => 264,  710 => 262,  707 => 261,  705 => 260,  702 => 259,  694 => 254,  689 => 252,  684 => 251,  679 => 248,  664 => 245,  660 => 244,  657 => 243,  652 => 242,  645 => 241,  639 => 240,  633 => 239,  629 => 238,  626 => 237,  620 => 233,  617 => 232,  613 => 231,  606 => 227,  602 => 226,  598 => 225,  589 => 219,  584 => 217,  581 => 216,  573 => 211,  568 => 209,  564 => 208,  557 => 204,  549 => 203,  541 => 202,  534 => 201,  528 => 198,  520 => 197,  515 => 196,  507 => 193,  502 => 192,  488 => 189,  477 => 187,  471 => 185,  463 => 182,  458 => 181,  450 => 178,  445 => 177,  439 => 174,  432 => 173,  426 => 170,  421 => 169,  416 => 167,  411 => 165,  407 => 164,  402 => 162,  359 => 123,  352 => 119,  344 => 113,  342 => 112,  339 => 111,  337 => 110,  329 => 106,  323 => 104,  315 => 99,  308 => 95,  303 => 94,  297 => 92,  295 => 91,  291 => 90,  283 => 85,  276 => 81,  272 => 80,  265 => 79,  257 => 75,  252 => 73,  248 => 72,  244 => 70,  238 => 67,  235 => 66,  233 => 65,  227 => 62,  223 => 61,  219 => 60,  214 => 57,  208 => 56,  201 => 52,  188 => 51,  184 => 49,  179 => 47,  176 => 46,  172 => 44,  169 => 43,  166 => 42,  162 => 41,  158 => 40,  155 => 39,  153 => 38,  150 => 37,  146 => 35,  139 => 33,  125 => 32,  120 => 31,  116 => 30,  110 => 28,  108 => 27,  105 => 26,  99 => 23,  95 => 22,  92 => 21,  90 => 20,  87 => 19,  81 => 16,  77 => 15,  74 => 14,  72 => 13,  67 => 11,  62 => 9,  59 => 8,  49 => 6,  47 => 5,  42 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "acp_attachments.html", "");
    }
}
