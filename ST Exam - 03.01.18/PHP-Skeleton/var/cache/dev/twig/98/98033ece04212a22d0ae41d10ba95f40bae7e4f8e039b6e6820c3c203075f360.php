<?php

/* :project:edit.html.twig */
class __TwigTemplate_472af7ecc306755c4e2c7e7cfa39a6fdd2712b7425ef7a3a903b98a8685897c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:edit.html.twig", 1);
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
        $__internal_991cedacebeed88bc0b255791f64b24509ccd342d3831d1cd10cf15ad67eedfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991cedacebeed88bc0b255791f64b24509ccd342d3831d1cd10cf15ad67eedfc->enter($__internal_991cedacebeed88bc0b255791f64b24509ccd342d3831d1cd10cf15ad67eedfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:edit.html.twig"));

        $__internal_1a50d3539e55757a3b77c3c68eeaf6266607cb42227dd26dec0ce47d7ab2b170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a50d3539e55757a3b77c3c68eeaf6266607cb42227dd26dec0ce47d7ab2b170->enter($__internal_1a50d3539e55757a3b77c3c68eeaf6266607cb42227dd26dec0ce47d7ab2b170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_991cedacebeed88bc0b255791f64b24509ccd342d3831d1cd10cf15ad67eedfc->leave($__internal_991cedacebeed88bc0b255791f64b24509ccd342d3831d1cd10cf15ad67eedfc_prof);

        
        $__internal_1a50d3539e55757a3b77c3c68eeaf6266607cb42227dd26dec0ce47d7ab2b170->leave($__internal_1a50d3539e55757a3b77c3c68eeaf6266607cb42227dd26dec0ce47d7ab2b170_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_e16ba27f8580e32641276a2cfbd57957c2d2db20141dfde0643455bc8b4c0205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16ba27f8580e32641276a2cfbd57957c2d2db20141dfde0643455bc8b4c0205->enter($__internal_e16ba27f8580e32641276a2cfbd57957c2d2db20141dfde0643455bc8b4c0205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8f07d6d23ee0e0c83a416e3b2447b6af9ce1ca1943a7d2b7f2cc5df336b1855b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f07d6d23ee0e0c83a416e3b2447b6af9ce1ca1943a7d2b7f2cc5df336b1855b->enter($__internal_8f07d6d23ee0e0c83a416e3b2447b6af9ce1ca1943a7d2b7f2cc5df336b1855b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "title", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "budget", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Edit Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_8f07d6d23ee0e0c83a416e3b2447b6af9ce1ca1943a7d2b7f2cc5df336b1855b->leave($__internal_8f07d6d23ee0e0c83a416e3b2447b6af9ce1ca1943a7d2b7f2cc5df336b1855b_prof);

        
        $__internal_e16ba27f8580e32641276a2cfbd57957c2d2db20141dfde0643455bc8b4c0205->leave($__internal_e16ba27f8580e32641276a2cfbd57957c2d2db20141dfde0643455bc8b4c0205_prof);

    }

    public function getTemplateName()
    {
        return ":project:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"{{ project.title }}\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\">{{ project.description }}</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"{{ project.budget }}\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Edit Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}

", ":project:edit.html.twig", "C:\\Users\\User\\Desktop\\Skeletons\\PHP-Skeleton\\app/Resources\\views/project/edit.html.twig");
    }
}
