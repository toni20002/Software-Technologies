<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_257727b8718f154ef341a10492fc4c89d3041b996458673248eccbac25d65fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257727b8718f154ef341a10492fc4c89d3041b996458673248eccbac25d65fa5->enter($__internal_257727b8718f154ef341a10492fc4c89d3041b996458673248eccbac25d65fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a14d3d7cd18fadde7ee3f243f2b01020e47f97d83768810f4352a447664ac6e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a14d3d7cd18fadde7ee3f243f2b01020e47f97d83768810f4352a447664ac6e5->enter($__internal_a14d3d7cd18fadde7ee3f243f2b01020e47f97d83768810f4352a447664ac6e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_257727b8718f154ef341a10492fc4c89d3041b996458673248eccbac25d65fa5->leave($__internal_257727b8718f154ef341a10492fc4c89d3041b996458673248eccbac25d65fa5_prof);

        
        $__internal_a14d3d7cd18fadde7ee3f243f2b01020e47f97d83768810f4352a447664ac6e5->leave($__internal_a14d3d7cd18fadde7ee3f243f2b01020e47f97d83768810f4352a447664ac6e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6bd348ee89ef02631bffee366e6a961dcc8a41643fd5bec635eba135937e36e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6bd348ee89ef02631bffee366e6a961dcc8a41643fd5bec635eba135937e36e->enter($__internal_c6bd348ee89ef02631bffee366e6a961dcc8a41643fd5bec635eba135937e36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_37787a1c0e5553a8e17af8b1fa328fbc912ecb31f4d04e12e5b7efafc2813e8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37787a1c0e5553a8e17af8b1fa328fbc912ecb31f4d04e12e5b7efafc2813e8d->enter($__internal_37787a1c0e5553a8e17af8b1fa328fbc912ecb31f4d04e12e5b7efafc2813e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_37787a1c0e5553a8e17af8b1fa328fbc912ecb31f4d04e12e5b7efafc2813e8d->leave($__internal_37787a1c0e5553a8e17af8b1fa328fbc912ecb31f4d04e12e5b7efafc2813e8d_prof);

        
        $__internal_c6bd348ee89ef02631bffee366e6a961dcc8a41643fd5bec635eba135937e36e->leave($__internal_c6bd348ee89ef02631bffee366e6a961dcc8a41643fd5bec635eba135937e36e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1ee07674133d3cd8b6858af912635a24ad19ac3646db7b1e0cea501eadfa8771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee07674133d3cd8b6858af912635a24ad19ac3646db7b1e0cea501eadfa8771->enter($__internal_1ee07674133d3cd8b6858af912635a24ad19ac3646db7b1e0cea501eadfa8771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2e4ee16177a6c0af1e01cbcd17b5fb66762b4e8306a4a6f7f6fe6fb09526e726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e4ee16177a6c0af1e01cbcd17b5fb66762b4e8306a4a6f7f6fe6fb09526e726->enter($__internal_2e4ee16177a6c0af1e01cbcd17b5fb66762b4e8306a4a6f7f6fe6fb09526e726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2e4ee16177a6c0af1e01cbcd17b5fb66762b4e8306a4a6f7f6fe6fb09526e726->leave($__internal_2e4ee16177a6c0af1e01cbcd17b5fb66762b4e8306a4a6f7f6fe6fb09526e726_prof);

        
        $__internal_1ee07674133d3cd8b6858af912635a24ad19ac3646db7b1e0cea501eadfa8771->leave($__internal_1ee07674133d3cd8b6858af912635a24ad19ac3646db7b1e0cea501eadfa8771_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b128f7d509842dfaddcd6652400f8f442f9fd6c46b0b2902ab3516b323a48c39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b128f7d509842dfaddcd6652400f8f442f9fd6c46b0b2902ab3516b323a48c39->enter($__internal_b128f7d509842dfaddcd6652400f8f442f9fd6c46b0b2902ab3516b323a48c39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59eb36d0cb77d595ad0cb57fd51cd7e3a9bb6384100c087dfb6f5c5ad1db552d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59eb36d0cb77d595ad0cb57fd51cd7e3a9bb6384100c087dfb6f5c5ad1db552d->enter($__internal_59eb36d0cb77d595ad0cb57fd51cd7e3a9bb6384100c087dfb6f5c5ad1db552d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_59eb36d0cb77d595ad0cb57fd51cd7e3a9bb6384100c087dfb6f5c5ad1db552d->leave($__internal_59eb36d0cb77d595ad0cb57fd51cd7e3a9bb6384100c087dfb6f5c5ad1db552d_prof);

        
        $__internal_b128f7d509842dfaddcd6652400f8f442f9fd6c46b0b2902ab3516b323a48c39->leave($__internal_b128f7d509842dfaddcd6652400f8f442f9fd6c46b0b2902ab3516b323a48c39_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Users\\User\\Desktop\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
