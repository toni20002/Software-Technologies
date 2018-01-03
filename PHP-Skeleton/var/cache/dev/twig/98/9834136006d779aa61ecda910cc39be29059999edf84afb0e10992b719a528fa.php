<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5109bf8156c8def8b1d7162ac6ab1eeac28b0af0699ddef402ba3cca54f2193 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5109bf8156c8def8b1d7162ac6ab1eeac28b0af0699ddef402ba3cca54f2193->enter($__internal_f5109bf8156c8def8b1d7162ac6ab1eeac28b0af0699ddef402ba3cca54f2193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d169e0c6d0a19eb6e36e93c0dd5ca1be4a02ed743ea88fd16ce509b72e9bfb9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d169e0c6d0a19eb6e36e93c0dd5ca1be4a02ed743ea88fd16ce509b72e9bfb9e->enter($__internal_d169e0c6d0a19eb6e36e93c0dd5ca1be4a02ed743ea88fd16ce509b72e9bfb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5109bf8156c8def8b1d7162ac6ab1eeac28b0af0699ddef402ba3cca54f2193->leave($__internal_f5109bf8156c8def8b1d7162ac6ab1eeac28b0af0699ddef402ba3cca54f2193_prof);

        
        $__internal_d169e0c6d0a19eb6e36e93c0dd5ca1be4a02ed743ea88fd16ce509b72e9bfb9e->leave($__internal_d169e0c6d0a19eb6e36e93c0dd5ca1be4a02ed743ea88fd16ce509b72e9bfb9e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fd72f94cbc35c6b1d02330efd4a67517cea8f9a5d85c203e43afbb51d083d8ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd72f94cbc35c6b1d02330efd4a67517cea8f9a5d85c203e43afbb51d083d8ac->enter($__internal_fd72f94cbc35c6b1d02330efd4a67517cea8f9a5d85c203e43afbb51d083d8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_56478fc1104d6c6ad4be36c0939d0df888b010607f7a027e0d364479132c7ea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56478fc1104d6c6ad4be36c0939d0df888b010607f7a027e0d364479132c7ea0->enter($__internal_56478fc1104d6c6ad4be36c0939d0df888b010607f7a027e0d364479132c7ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_56478fc1104d6c6ad4be36c0939d0df888b010607f7a027e0d364479132c7ea0->leave($__internal_56478fc1104d6c6ad4be36c0939d0df888b010607f7a027e0d364479132c7ea0_prof);

        
        $__internal_fd72f94cbc35c6b1d02330efd4a67517cea8f9a5d85c203e43afbb51d083d8ac->leave($__internal_fd72f94cbc35c6b1d02330efd4a67517cea8f9a5d85c203e43afbb51d083d8ac_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b368824230867cbbc3583d0ea433b0effce44ff24d64d3e9d6145a7d34f6c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b368824230867cbbc3583d0ea433b0effce44ff24d64d3e9d6145a7d34f6c8a->enter($__internal_8b368824230867cbbc3583d0ea433b0effce44ff24d64d3e9d6145a7d34f6c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3732edeab9e92cfaaa3df752a0f9b9f941da64666209bb404cfbaeede7fb037d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3732edeab9e92cfaaa3df752a0f9b9f941da64666209bb404cfbaeede7fb037d->enter($__internal_3732edeab9e92cfaaa3df752a0f9b9f941da64666209bb404cfbaeede7fb037d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3732edeab9e92cfaaa3df752a0f9b9f941da64666209bb404cfbaeede7fb037d->leave($__internal_3732edeab9e92cfaaa3df752a0f9b9f941da64666209bb404cfbaeede7fb037d_prof);

        
        $__internal_8b368824230867cbbc3583d0ea433b0effce44ff24d64d3e9d6145a7d34f6c8a->leave($__internal_8b368824230867cbbc3583d0ea433b0effce44ff24d64d3e9d6145a7d34f6c8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_048458f5fd255c2bbc8117bc9b0297807b64f856053be62fba0346b56619fc52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048458f5fd255c2bbc8117bc9b0297807b64f856053be62fba0346b56619fc52->enter($__internal_048458f5fd255c2bbc8117bc9b0297807b64f856053be62fba0346b56619fc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d014ad81c0c9730e02a3ab846183468d57e86d9c1f1892c94405415850c2274e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d014ad81c0c9730e02a3ab846183468d57e86d9c1f1892c94405415850c2274e->enter($__internal_d014ad81c0c9730e02a3ab846183468d57e86d9c1f1892c94405415850c2274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d014ad81c0c9730e02a3ab846183468d57e86d9c1f1892c94405415850c2274e->leave($__internal_d014ad81c0c9730e02a3ab846183468d57e86d9c1f1892c94405415850c2274e_prof);

        
        $__internal_048458f5fd255c2bbc8117bc9b0297807b64f856053be62fba0346b56619fc52->leave($__internal_048458f5fd255c2bbc8117bc9b0297807b64f856053be62fba0346b56619fc52_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Users\\User\\Desktop\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
