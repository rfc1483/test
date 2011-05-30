<?php

/* CompanyBlogBundle:Default:index.html.twig */
class __TwigTemplate_5ec661c117fd845bb4cddb69517d703f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hello Amaro!

";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, 'test'), "html");
    }

    public function getTemplateName()
    {
        return "CompanyBlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
