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

/* attachment.html */
class __TwigTemplate_df30729a6a3ba3b1463fa204e10fe98624e3adb034fc5651fc00c35f48484aff extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "_file", []));
        foreach ($context['_seq'] as $context["_key"] => $context["_file"]) {
            // line 4
            echo "\t";
            if ($this->getAttribute($context["_file"], "S_DENIED", [])) {
                // line 5
                echo "\t<p>[";
                echo $this->getAttribute($context["_file"], "DENIED_MESSAGE", []);
                echo "]</p>
\t";
            } else {
                // line 7
                echo "\t\t";
                // line 8
                echo "
\t\t";
                // line 9
                if ($this->getAttribute($context["_file"], "S_THUMBNAIL", [])) {
                    // line 10
                    echo "\t\t<dl class=\"thumbnail\">
\t\t\t<dt><a href=\"";
                    // line 11
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", []);
                    echo "\"><img src=\"";
                    echo $this->getAttribute($context["_file"], "THUMB_IMAGE", []);
                    echo "\" class=\"postimage\" alt=\"";
                    if ($this->getAttribute($context["_file"], "COMMENT", [])) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["_file"], "COMMENT", []), "html");
                    } else {
                        echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", []);
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", []);
                    echo " (";
                    echo $this->getAttribute($context["_file"], "FILESIZE", []);
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", []);
                    echo ") ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", []);
                    echo "\" /></a></dt>
\t\t\t";
                    // line 12
                    if ($this->getAttribute($context["_file"], "COMMENT", [])) {
                        echo "<dd> ";
                        echo $this->getAttribute($context["_file"], "COMMENT", []);
                        echo "</dd>";
                    }
                    // line 13
                    echo "\t\t</dl>
\t\t";
                }
                // line 15
                echo "
\t\t";
                // line 16
                if ($this->getAttribute($context["_file"], "S_IMAGE", [])) {
                    // line 17
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt class=\"attach-image\"><img src=\"";
                    // line 18
                    echo $this->getAttribute($context["_file"], "U_INLINE_LINK", []);
                    echo "\" class=\"postimage\" alt=\"";
                    if ($this->getAttribute($context["_file"], "COMMENT", [])) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["_file"], "COMMENT", []), "html");
                    } else {
                        echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", []);
                    }
                    echo "\" onclick=\"viewableArea(this);\" /></dt>
\t\t\t";
                    // line 19
                    if ($this->getAttribute($context["_file"], "COMMENT", [])) {
                        echo "<dd><em>";
                        echo $this->getAttribute($context["_file"], "COMMENT", []);
                        echo "</em></dd>";
                    }
                    // line 20
                    echo "\t\t\t<dd>";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", []);
                    echo " (";
                    echo $this->getAttribute($context["_file"], "FILESIZE", []);
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", []);
                    echo ") ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", []);
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 23
                echo "
\t\t";
                // line 24
                if ($this->getAttribute($context["_file"], "S_FILE", [])) {
                    // line 25
                    echo "\t\t<dl class=\"file\">
\t\t\t<dt>";
                    // line 26
                    if ($this->getAttribute($context["_file"], "UPLOAD_ICON", [])) {
                        echo $this->getAttribute($context["_file"], "UPLOAD_ICON", []);
                        echo " ";
                    }
                    echo "<a class=\"postlink\" href=\"";
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", []);
                    echo "\">";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", []);
                    echo "</a></dt>
\t\t\t";
                    // line 27
                    if ($this->getAttribute($context["_file"], "COMMENT", [])) {
                        echo "<dd><em>";
                        echo $this->getAttribute($context["_file"], "COMMENT", []);
                        echo "</em></dd>";
                    }
                    // line 28
                    echo "\t\t\t<dd>(";
                    echo $this->getAttribute($context["_file"], "FILESIZE", []);
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", []);
                    echo ") ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", []);
                    echo "</dd>
\t\t</dl>
\t\t";
                }
                // line 31
                echo "
\t\t";
                // line 32
                if ($this->getAttribute($context["_file"], "S_FLASH_FILE", [])) {
                    // line 33
                    echo "\t\t\t<object classid=\"clsid:D27CDB6E-AE6D-11CF-96B8-444553540000\" codebase=\"http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0\" width=\"";
                    echo $this->getAttribute($context["_file"], "WIDTH", []);
                    echo "\" height=\"";
                    echo $this->getAttribute($context["_file"], "HEIGHT", []);
                    echo "\">
\t\t\t\t<param name=\"movie\" value=\"";
                    // line 34
                    echo $this->getAttribute($context["_file"], "U_VIEW_LINK", []);
                    echo "\" />
\t\t\t\t<param name=\"play\" value=\"true\" />
\t\t\t\t<param name=\"loop\" value=\"true\" />
\t\t\t\t<param name=\"quality\" value=\"high\" />
\t\t\t\t<param name=\"allowScriptAccess\" value=\"never\" />
\t\t\t\t<param name=\"allowNetworking\" value=\"internal\" />
\t\t\t\t<embed src=\"";
                    // line 40
                    echo $this->getAttribute($context["_file"], "U_VIEW_LINK", []);
                    echo "\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\" width=\"";
                    echo $this->getAttribute($context["_file"], "WIDTH", []);
                    echo "\" height=\"";
                    echo $this->getAttribute($context["_file"], "HEIGHT", []);
                    echo "\" play=\"true\" loop=\"true\" quality=\"high\" allowscriptaccess=\"never\" allownetworking=\"internal\"></embed>
\t\t\t</object>
\t\t\t<p><a href=\"";
                    // line 42
                    echo $this->getAttribute($context["_file"], "U_DOWNLOAD_LINK", []);
                    echo "\">";
                    echo $this->getAttribute($context["_file"], "DOWNLOAD_NAME", []);
                    echo "</a> [ ";
                    echo $this->getAttribute($context["_file"], "FILESIZE", []);
                    echo " ";
                    echo $this->getAttribute($context["_file"], "SIZE_LANG", []);
                    echo " | ";
                    echo $this->getAttribute($context["_file"], "L_DOWNLOAD_COUNT", []);
                    echo " ]</p>
\t\t";
                }
                // line 44
                echo "
\t\t";
                // line 45
                // line 46
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['_file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
    }

    public function getTemplateName()
    {
        return "attachment.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 48,  207 => 46,  206 => 45,  203 => 44,  190 => 42,  181 => 40,  172 => 34,  165 => 33,  163 => 32,  160 => 31,  149 => 28,  143 => 27,  132 => 26,  129 => 25,  127 => 24,  124 => 23,  111 => 20,  105 => 19,  95 => 18,  92 => 17,  90 => 16,  87 => 15,  83 => 13,  77 => 12,  57 => 11,  54 => 10,  52 => 9,  49 => 8,  47 => 7,  41 => 5,  38 => 4,  34 => 3,  31 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "attachment.html", "");
    }
}
