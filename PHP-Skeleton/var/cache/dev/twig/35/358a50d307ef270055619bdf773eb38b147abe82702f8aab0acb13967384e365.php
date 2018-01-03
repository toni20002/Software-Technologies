<?php

/* :project:create.html.twig */
class __TwigTemplate_554ce2a565e3f40b5aec014ba1dafbebaf1d412fdc82eed325a73c6bf41a5acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:create.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2e90c8d2624fbc05a4e7284f799d75fc54e623edde6051d8a6a83532b90a99f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e90c8d2624fbc05a4e7284f799d75fc54e623edde6051d8a6a83532b90a99f9->enter($__internal_2e90c8d2624fbc05a4e7284f799d75fc54e623edde6051d8a6a83532b90a99f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:create.html.twig"));

        $__internal_0e1d8d3bc9341749676c406884058b190adf5996fb8c3297b46ee49ff3b0b389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1d8d3bc9341749676c406884058b190adf5996fb8c3297b46ee49ff3b0b389->enter($__internal_0e1d8d3bc9341749676c406884058b190adf5996fb8c3297b46ee49ff3b0b389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e90c8d2624fbc05a4e7284f799d75fc54e623edde6051d8a6a83532b90a99f9->leave($__internal_2e90c8d2624fbc05a4e7284f799d75fc54e623edde6051d8a6a83532b90a99f9_prof);

        
        $__internal_0e1d8d3bc9341749676c406884058b190adf5996fb8c3297b46ee49ff3b0b389->leave($__internal_0e1d8d3bc9341749676c406884058b190adf5996fb8c3297b46ee49ff3b0b389_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_b9bd34d957fcae96e93771a0bad777a7a485b80df510b4fffb17a134b48effbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9bd34d957fcae96e93771a0bad777a7a485b80df510b4fffb17a134b48effbe->enter($__internal_b9bd34d957fcae96e93771a0bad777a7a485b80df510b4fffb17a134b48effbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_832cc98bc7c947f3667e52c4c383acb1c4e2e969a872942578b84f768a7bffa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832cc98bc7c947f3667e52c4c383acb1c4e2e969a872942578b84f768a7bffa4->enter($__internal_832cc98bc7c947f3667e52c4c383acb1c4e2e969a872942578b84f768a7bffa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_832cc98bc7c947f3667e52c4c383acb1c4e2e969a872942578b84f768a7bffa4->leave($__internal_832cc98bc7c947f3667e52c4c383acb1c4e2e969a872942578b84f768a7bffa4_prof);

        
        $__internal_b9bd34d957fcae96e93771a0bad777a7a485b80df510b4fffb17a134b48effbe->leave($__internal_b9bd34d957fcae96e93771a0bad777a7a485b80df510b4fffb17a134b48effbe_prof);

    }

    public function getTemplateName()
    {
        return ":project:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", ":project:create.html.twig", "C:\\Users\\User\\Desktop\\Skeletons\\PHP-Skeleton\\app/Resources\\views/project/create.html.twig");
    }
}
