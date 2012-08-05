<?php

/* 404.mbm */
class __TwigTemplate_73325fd8c742eaa109a0d64ac6a52889 extends Twig_Template
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
        echo "404 page<br />
app: ";
        // line 2
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        echo twig_escape_filter($this->env, $_app_, "html", null, true);
        echo "<br />
module: ";
        // line 3
        if (isset($context["module"])) { $_module_ = $context["module"]; } else { $_module_ = null; }
        echo twig_escape_filter($this->env, $_module_, "html", null, true);
        echo "<br />
action: ";
        // line 4
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo twig_escape_filter($this->env, $_action_, "html", null, true);
        echo "
<br />
<br />
\$_GET['a'] g test helbereer hevelne.<br />
\$_GET['a'] = ";
        // line 8
        if (isset($context["a"])) { $_a_ = $context["a"]; } else { $_a_ = null; }
        echo twig_escape_filter($this->env, $_a_, "html", null, true);
    }

    public function getTemplateName()
    {
        return "404.mbm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  30 => 4,  25 => 3,  20 => 2,  17 => 1,);
    }
}
