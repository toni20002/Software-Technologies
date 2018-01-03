<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5a6a19f4922f3135800c3b247bf20a0135a09a3b21c9bc58010ed7ab03fc35e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5a6a19f4922f3135800c3b247bf20a0135a09a3b21c9bc58010ed7ab03fc35e->enter($__internal_e5a6a19f4922f3135800c3b247bf20a0135a09a3b21c9bc58010ed7ab03fc35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2c0fb329cd3f9319039b8dfc2f045c4ff290c7877f411b3b47ce56d739395b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0fb329cd3f9319039b8dfc2f045c4ff290c7877f411b3b47ce56d739395b2a->enter($__internal_2c0fb329cd3f9319039b8dfc2f045c4ff290c7877f411b3b47ce56d739395b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "</body>
</html>
";
        
        $__internal_e5a6a19f4922f3135800c3b247bf20a0135a09a3b21c9bc58010ed7ab03fc35e->leave($__internal_e5a6a19f4922f3135800c3b247bf20a0135a09a3b21c9bc58010ed7ab03fc35e_prof);

        
        $__internal_2c0fb329cd3f9319039b8dfc2f045c4ff290c7877f411b3b47ce56d739395b2a->leave($__internal_2c0fb329cd3f9319039b8dfc2f045c4ff290c7877f411b3b47ce56d739395b2a_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe5bc92a03bfbc216ecb83e5c61387ced22b694d978c1181a016e0077dd84616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5bc92a03bfbc216ecb83e5c61387ced22b694d978c1181a016e0077dd84616->enter($__internal_fe5bc92a03bfbc216ecb83e5c61387ced22b694d978c1181a016e0077dd84616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0db11a29ed539f891c4b0b8d8500f8e4ccf0cfe0cf113ce43787d43bda92a9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db11a29ed539f891c4b0b8d8500f8e4ccf0cfe0cf113ce43787d43bda92a9e9->enter($__internal_0db11a29ed539f891c4b0b8d8500f8e4ccf0cfe0cf113ce43787d43bda92a9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project Rider";
        
        $__internal_0db11a29ed539f891c4b0b8d8500f8e4ccf0cfe0cf113ce43787d43bda92a9e9->leave($__internal_0db11a29ed539f891c4b0b8d8500f8e4ccf0cfe0cf113ce43787d43bda92a9e9_prof);

        
        $__internal_fe5bc92a03bfbc216ecb83e5c61387ced22b694d978c1181a016e0077dd84616->leave($__internal_fe5bc92a03bfbc216ecb83e5c61387ced22b694d978c1181a016e0077dd84616_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dee5ceed95d12ac1d5dd0cd1f15ea90b92acfad4b9db01a3b0853266b737fe3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee5ceed95d12ac1d5dd0cd1f15ea90b92acfad4b9db01a3b0853266b737fe3e->enter($__internal_dee5ceed95d12ac1d5dd0cd1f15ea90b92acfad4b9db01a3b0853266b737fe3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fe949fcd43d571f376461e19c24b6afa425a8476e5eb5cedd67e036094c0afbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe949fcd43d571f376461e19c24b6afa425a8476e5eb5cedd67e036094c0afbb->enter($__internal_fe949fcd43d571f376461e19c24b6afa425a8476e5eb5cedd67e036094c0afbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/create-style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_fe949fcd43d571f376461e19c24b6afa425a8476e5eb5cedd67e036094c0afbb->leave($__internal_fe949fcd43d571f376461e19c24b6afa425a8476e5eb5cedd67e036094c0afbb_prof);

        
        $__internal_dee5ceed95d12ac1d5dd0cd1f15ea90b92acfad4b9db01a3b0853266b737fe3e->leave($__internal_dee5ceed95d12ac1d5dd0cd1f15ea90b92acfad4b9db01a3b0853266b737fe3e_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_cffd477dbf66af5f2cd62137cf12cd69f7057f9538e5293eba1e1286dd7492b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cffd477dbf66af5f2cd62137cf12cd69f7057f9538e5293eba1e1286dd7492b1->enter($__internal_cffd477dbf66af5f2cd62137cf12cd69f7057f9538e5293eba1e1286dd7492b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_303cdd1602b2a6bd3c028f1db75e7ade5f34836cd130e0302188e9c4f96a5250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303cdd1602b2a6bd3c028f1db75e7ade5f34836cd130e0302188e9c4f96a5250->enter($__internal_303cdd1602b2a6bd3c028f1db75e7ade5f34836cd130e0302188e9c4f96a5250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_303cdd1602b2a6bd3c028f1db75e7ade5f34836cd130e0302188e9c4f96a5250->leave($__internal_303cdd1602b2a6bd3c028f1db75e7ade5f34836cd130e0302188e9c4f96a5250_prof);

        
        $__internal_cffd477dbf66af5f2cd62137cf12cd69f7057f9538e5293eba1e1286dd7492b1->leave($__internal_cffd477dbf66af5f2cd62137cf12cd69f7057f9538e5293eba1e1286dd7492b1_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_ead9ab5713ee3b3b01c5e380cfe7810bf07416b0d9cfdfc296c2daf1e6624435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead9ab5713ee3b3b01c5e380cfe7810bf07416b0d9cfdfc296c2daf1e6624435->enter($__internal_ead9ab5713ee3b3b01c5e380cfe7810bf07416b0d9cfdfc296c2daf1e6624435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9667804c919e33f8cac03d9026f8d32d38bfb1ef0d73da3e628ec8144042f45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9667804c919e33f8cac03d9026f8d32d38bfb1ef0d73da3e628ec8144042f45a->enter($__internal_9667804c919e33f8cac03d9026f8d32d38bfb1ef0d73da3e628ec8144042f45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_9667804c919e33f8cac03d9026f8d32d38bfb1ef0d73da3e628ec8144042f45a->leave($__internal_9667804c919e33f8cac03d9026f8d32d38bfb1ef0d73da3e628ec8144042f45a_prof);

        
        $__internal_ead9ab5713ee3b3b01c5e380cfe7810bf07416b0d9cfdfc296c2daf1e6624435->leave($__internal_ead9ab5713ee3b3b01c5e380cfe7810bf07416b0d9cfdfc296c2daf1e6624435_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_9e8474519a841bb96600fd820242e3d4e650474d374da21fcb429a7af15019b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e8474519a841bb96600fd820242e3d4e650474d374da21fcb429a7af15019b8->enter($__internal_9e8474519a841bb96600fd820242e3d4e650474d374da21fcb429a7af15019b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_ec76ceb30dbd836facf530aea9fc3c9618f52e8d2b14d1d280176e14de298504 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec76ceb30dbd836facf530aea9fc3c9618f52e8d2b14d1d280176e14de298504->enter($__internal_ec76ceb30dbd836facf530aea9fc3c9618f52e8d2b14d1d280176e14de298504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_ec76ceb30dbd836facf530aea9fc3c9618f52e8d2b14d1d280176e14de298504->leave($__internal_ec76ceb30dbd836facf530aea9fc3c9618f52e8d2b14d1d280176e14de298504_prof);

        
        $__internal_9e8474519a841bb96600fd820242e3d4e650474d374da21fcb429a7af15019b8->leave($__internal_9e8474519a841bb96600fd820242e3d4e650474d374da21fcb429a7af15019b8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 21,  132 => 20,  115 => 19,  103 => 14,  99 => 13,  94 => 12,  85 => 11,  67 => 10,  55 => 23,  53 => 20,  49 => 19,  42 => 16,  40 => 11,  36 => 10,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Project Rider{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/create-style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">
{% block body %}
    {% block main %}{% endblock %}
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\User\\Desktop\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\base.html.twig");
    }
}
