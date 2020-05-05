<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_1f3feda29797a5a1792a862c07ca689a139fff9ff3f3d82700dc30e202ff1509 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f65b5beff1c44081d73895758268ab7197bc25dc8d09e87377a19766d9b9587a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f65b5beff1c44081d73895758268ab7197bc25dc8d09e87377a19766d9b9587a->enter($__internal_f65b5beff1c44081d73895758268ab7197bc25dc8d09e87377a19766d9b9587a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_76c1f742aeb681df88784105a66f53c1c885a6bf61a6f15295c8d998f23a4b66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76c1f742aeb681df88784105a66f53c1c885a6bf61a6f15295c8d998f23a4b66->enter($__internal_76c1f742aeb681df88784105a66f53c1c885a6bf61a6f15295c8d998f23a4b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Ce projet est propulsé par Symfony,
            et construit grâce au MOOC OpenClassrooms et SensioLabs.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les annonces</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_core_homepage");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Annonces</a></li>
                <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
            </ul>
            <hr>
            <h4>Dernières annonces</h4>
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
            <hr>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_core_contact");
        echo "\"><h4>Nous contacter </h4></a>
        </div>
        <div id=\"content\" class=\"col-md-9\">
            ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
</div>

";
        // line 59
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "
</body>
</html>";
        
        $__internal_f65b5beff1c44081d73895758268ab7197bc25dc8d09e87377a19766d9b9587a->leave($__internal_f65b5beff1c44081d73895758268ab7197bc25dc8d09e87377a19766d9b9587a_prof);

        
        $__internal_76c1f742aeb681df88784105a66f53c1c885a6bf61a6f15295c8d998f23a4b66->leave($__internal_76c1f742aeb681df88784105a66f53c1c885a6bf61a6f15295c8d998f23a4b66_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b8b0f63bc0d815ca647e566fdc4fd7a0229dcc354f7bb904337ac2fb07d74bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b8b0f63bc0d815ca647e566fdc4fd7a0229dcc354f7bb904337ac2fb07d74bc->enter($__internal_2b8b0f63bc0d815ca647e566fdc4fd7a0229dcc354f7bb904337ac2fb07d74bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_58539d3df1aba6108cd939066111b301040e9a7f099053019e05bec2ec5cd5b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58539d3df1aba6108cd939066111b301040e9a7f099053019e05bec2ec5cd5b3->enter($__internal_58539d3df1aba6108cd939066111b301040e9a7f099053019e05bec2ec5cd5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_58539d3df1aba6108cd939066111b301040e9a7f099053019e05bec2ec5cd5b3->leave($__internal_58539d3df1aba6108cd939066111b301040e9a7f099053019e05bec2ec5cd5b3_prof);

        
        $__internal_2b8b0f63bc0d815ca647e566fdc4fd7a0229dcc354f7bb904337ac2fb07d74bc->leave($__internal_2b8b0f63bc0d815ca647e566fdc4fd7a0229dcc354f7bb904337ac2fb07d74bc_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47e3ba174f7e7c37472cf0d80558b7b4afcc760043a314443ea3e6f4d11c9b1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e3ba174f7e7c37472cf0d80558b7b4afcc760043a314443ea3e6f4d11c9b1b->enter($__internal_47e3ba174f7e7c37472cf0d80558b7b4afcc760043a314443ea3e6f4d11c9b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_992e9028b52f31389123d8110929343a9cd815e3b61dedaad5d007f7d798ae8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_992e9028b52f31389123d8110929343a9cd815e3b61dedaad5d007f7d798ae8f->enter($__internal_992e9028b52f31389123d8110929343a9cd815e3b61dedaad5d007f7d798ae8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        ";
        // line 13
        echo "        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_992e9028b52f31389123d8110929343a9cd815e3b61dedaad5d007f7d798ae8f->leave($__internal_992e9028b52f31389123d8110929343a9cd815e3b61dedaad5d007f7d798ae8f_prof);

        
        $__internal_47e3ba174f7e7c37472cf0d80558b7b4afcc760043a314443ea3e6f4d11c9b1b->leave($__internal_47e3ba174f7e7c37472cf0d80558b7b4afcc760043a314443ea3e6f4d11c9b1b_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_cebc23b837aed3d9bd30be8e1540e7eb39f3132ac489bdd08c736313dcd8ebe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cebc23b837aed3d9bd30be8e1540e7eb39f3132ac489bdd08c736313dcd8ebe0->enter($__internal_cebc23b837aed3d9bd30be8e1540e7eb39f3132ac489bdd08c736313dcd8ebe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6986fa45ea7069262a778599a50692180f80a9df20c5eb75fa1784fa7d679512 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6986fa45ea7069262a778599a50692180f80a9df20c5eb75fa1784fa7d679512->enter($__internal_6986fa45ea7069262a778599a50692180f80a9df20c5eb75fa1784fa7d679512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "            ";
        
        $__internal_6986fa45ea7069262a778599a50692180f80a9df20c5eb75fa1784fa7d679512->leave($__internal_6986fa45ea7069262a778599a50692180f80a9df20c5eb75fa1784fa7d679512_prof);

        
        $__internal_cebc23b837aed3d9bd30be8e1540e7eb39f3132ac489bdd08c736313dcd8ebe0->leave($__internal_cebc23b837aed3d9bd30be8e1540e7eb39f3132ac489bdd08c736313dcd8ebe0_prof);

    }

    // line 59
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_86da5ca8a3123d984dbef3fcbc957be11d34e83e72b1451fc681e2fa274e9645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86da5ca8a3123d984dbef3fcbc957be11d34e83e72b1451fc681e2fa274e9645->enter($__internal_86da5ca8a3123d984dbef3fcbc957be11d34e83e72b1451fc681e2fa274e9645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_224a5f3b9a0ac79cec0f06a7c3f22066e1ce797fd600f33a4cae673104b0ff5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224a5f3b9a0ac79cec0f06a7c3f22066e1ce797fd600f33a4cae673104b0ff5d->enter($__internal_224a5f3b9a0ac79cec0f06a7c3f22066e1ce797fd600f33a4cae673104b0ff5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 60
        echo "    ";
        // line 61
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
";
        
        $__internal_224a5f3b9a0ac79cec0f06a7c3f22066e1ce797fd600f33a4cae673104b0ff5d->leave($__internal_224a5f3b9a0ac79cec0f06a7c3f22066e1ce797fd600f33a4cae673104b0ff5d_prof);

        
        $__internal_86da5ca8a3123d984dbef3fcbc957be11d34e83e72b1451fc681e2fa274e9645->leave($__internal_86da5ca8a3123d984dbef3fcbc957be11d34e83e72b1451fc681e2fa274e9645_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 61,  193 => 60,  184 => 59,  174 => 48,  165 => 47,  154 => 13,  152 => 12,  143 => 11,  125 => 9,  113 => 64,  111 => 59,  104 => 55,  96 => 49,  94 => 47,  88 => 44,  83 => 42,  76 => 38,  72 => 37,  68 => 36,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}OC Plateforme{% endblock %}</title>

    {% block stylesheets %}
        {# On charge le CSS de bootstrap depuis le site directement #}
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}
</head>

<body>
<div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
        <h1>Ma plateforme d'annonces</h1>
        <p>
            Ce projet est propulsé par Symfony,
            et construit grâce au MOOC OpenClassrooms et SensioLabs.
        </p>
        <p>
            <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
                Participer au MOOC »
            </a>
        </p>
    </div>

    <div class=\"row\">
        <div id=\"menu\" class=\"col-md-3\">
            <h3>Les annonces</h3>
            <ul class=\"nav nav-pills nav-stacked\">
                <li><a href=\"{{ path('oc_core_homepage') }}\">Accueil</a></li>
                <li><a href=\"{{ path('oc_platform_home') }}\">Annonces</a></li>
                <li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
            </ul>
            <hr>
            <h4>Dernières annonces</h4>
            {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}
            <hr>
            <a href=\"{{ path('oc_core_contact') }}\"><h4>Nous contacter </h4></a>
        </div>
        <div id=\"content\" class=\"col-md-9\">
            {% block body %}
            {% endblock %}
        </div>
    </div>

    <hr>

    <footer>
        <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
</div>

{% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
{% endblock %}

</body>
</html>", "OCCoreBundle::layout.html.twig", "C:\\xampp\\htdocs\\Symfony3_F1\\src\\OC\\CoreBundle/Resources/views/layout.html.twig");
    }
}
