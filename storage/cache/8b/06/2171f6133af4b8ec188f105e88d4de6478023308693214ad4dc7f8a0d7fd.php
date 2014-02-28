<?php

/* options/options.tpl */
class __TwigTemplate_8b062171f6133af4b8ec188f105e88d4de6478023308693214ad4dc7f8a0d7fd extends Twig_Template
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
        echo "<div class='wrap'>
\t <h2>HourFamilyTX System Settings</h2>
\t <ul class='nav nav-tabs'>
\t \t<li class='active'>
\t \t\t<a href='#system-basic-settings' data-toggle='tab'>
\t \t\t\t<span class='glyphicon glyphicon-cog'></span>&nbsp;Basic Settings
\t \t\t</a>
\t \t</li>
\t </ul>
\t <form method='post' action='options.php'>
\t \t<div class='tab-content'>
\t \t\t<div class='tab-pane active' id='system-basic-settings'>
\t \t\t</div>
\t \t</div>
\t </form>
</div>";
    }

    public function getTemplateName()
    {
        return "options/options.tpl";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
