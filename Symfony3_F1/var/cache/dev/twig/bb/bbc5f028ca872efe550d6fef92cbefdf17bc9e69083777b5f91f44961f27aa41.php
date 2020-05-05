<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_bfa9d3e7304aa6df247f1767ad1ab12cf82e9bc49f811feaf85980e1c9860405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle:Advert:add.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_482d5a1ce3c353653f10bc9def9f1f98ec33598cc9788619ca9457e86549ce7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_482d5a1ce3c353653f10bc9def9f1f98ec33598cc9788619ca9457e86549ce7c->enter($__internal_482d5a1ce3c353653f10bc9def9f1f98ec33598cc9788619ca9457e86549ce7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_3ead43b9bc327778dd7b42787a0d3a37215331285c957c90f9597a10edab04e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ead43b9bc327778dd7b42787a0d3a37215331285c957c90f9597a10edab04e2->enter($__internal_3ead43b9bc327778dd7b42787a0d3a37215331285c957c90f9597a10edab04e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_482d5a1ce3c353653f10bc9def9f1f98ec33598cc9788619ca9457e86549ce7c->leave($__internal_482d5a1ce3c353653f10bc9def9f1f98ec33598cc9788619ca9457e86549ce7c_prof);

        
        $__internal_3ead43b9bc327778dd7b42787a0d3a37215331285c957c90f9597a10edab04e2->leave($__internal_3ead43b9bc327778dd7b42787a0d3a37215331285c957c90f9597a10edab04e2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_93e4dd95518419071b8c938a67647ac48594b3456a872e6a309ff990ac76cd5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93e4dd95518419071b8c938a67647ac48594b3456a872e6a309ff990ac76cd5c->enter($__internal_93e4dd95518419071b8c938a67647ac48594b3456a872e6a309ff990ac76cd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0001a0926922ac604a4b8ff148bb5451bf4c9bfe80ff159fbaa80f15cc2ccc7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0001a0926922ac604a4b8ff148bb5451bf4c9bfe80ff159fbaa80f15cc2ccc7d->enter($__internal_0001a0926922ac604a4b8ff148bb5451bf4c9bfe80ff159fbaa80f15cc2ccc7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0001a0926922ac604a4b8ff148bb5451bf4c9bfe80ff159fbaa80f15cc2ccc7d->leave($__internal_0001a0926922ac604a4b8ff148bb5451bf4c9bfe80ff159fbaa80f15cc2ccc7d_prof);

        
        $__internal_93e4dd95518419071b8c938a67647ac48594b3456a872e6a309ff990ac76cd5c->leave($__internal_93e4dd95518419071b8c938a67647ac48594b3456a872e6a309ff990ac76cd5c_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c61ef20fc347169811c5e629ddc516bc58f4ecaa83ba04880b90c196fcfdd9b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61ef20fc347169811c5e629ddc516bc58f4ecaa83ba04880b90c196fcfdd9b3->enter($__internal_c61ef20fc347169811c5e629ddc516bc58f4ecaa83ba04880b90c196fcfdd9b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_f8718284e4c7e7615d126f288906555d6cd2f168729f57f6bcbfa675f2ae6321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8718284e4c7e7615d126f288906555d6cd2f168729f57f6bcbfa675f2ae6321->enter($__internal_f8718284e4c7e7615d126f288906555d6cd2f168729f57f6bcbfa675f2ae6321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <div class=\"row\">
        <div class=\"col-sm-3\">
            ";
        // line 13
        if ( !(null === $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()))) {
            // line 14
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
            ";
        }
        // line 16
        echo "        </div>
        <div class=\"col-sm-9\">
            <h2>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
            <i>Par ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

            <div class=\"well\">
                ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
            </div>

            <p>
                <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
                    <i class=\"glyphicon glyphicon-chevron-left\"></i>
                    Retour à la liste
                </a>
                <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
                    <i class=\"glyphicon glyphicon-edit\"></i>
                    Modifier l'annonce
                </a>
                <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
                    <i class=\"glyphicon glyphicon-trash\"></i>
                    Supprimer l'annonce
                </a>
            </p>
        </div>
    </div>
";
        
        $__internal_f8718284e4c7e7615d126f288906555d6cd2f168729f57f6bcbfa675f2ae6321->leave($__internal_f8718284e4c7e7615d126f288906555d6cd2f168729f57f6bcbfa675f2ae6321_prof);

        
        $__internal_c61ef20fc347169811c5e629ddc516bc58f4ecaa83ba04880b90c196fcfdd9b3->leave($__internal_c61ef20fc347169811c5e629ddc516bc58f4ecaa83ba04880b90c196fcfdd9b3_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 34,  117 => 30,  110 => 26,  103 => 22,  95 => 19,  91 => 18,  87 => 16,  79 => 14,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"OCPlatformBundle:Advert:add.html.twig\" %}

{% block title %}
    Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <div class=\"row\">
        <div class=\"col-sm-3\">
            {% if advert.image is not null %}
                <img src=\"{{ advert.image.url }}\" alt=\"{{ advert.image.alt }}\">
            {% endif %}
        </div>
        <div class=\"col-sm-9\">
            <h2>{{ advert.title }}</h2>
            <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

            <div class=\"well\">
                {{ advert.content }}
            </div>

            <p>
                <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
                    <i class=\"glyphicon glyphicon-chevron-left\"></i>
                    Retour à la liste
                </a>
                <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
                    <i class=\"glyphicon glyphicon-edit\"></i>
                    Modifier l'annonce
                </a>
                <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
                    <i class=\"glyphicon glyphicon-trash\"></i>
                    Supprimer l'annonce
                </a>
            </p>
        </div>
    </div>
{% endblock %}", "OCPlatformBundle:Advert:view.html.twig", "C:\\xampp\\htdocs\\Symfony3_F1\\src\\OC\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
