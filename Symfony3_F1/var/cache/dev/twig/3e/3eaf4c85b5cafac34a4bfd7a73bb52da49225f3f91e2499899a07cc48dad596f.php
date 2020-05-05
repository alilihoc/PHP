<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_baa7cbb9e21bc8ef3aeaa5a420b6d5fc8519a6d1f99543ad7a4203e6cca920d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle:Advert:layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle:Advert:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38472ead994584b20e0f6ed89f5c8cd619ef432f3f99c1aa7a08d9e0a36cb6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38472ead994584b20e0f6ed89f5c8cd619ef432f3f99c1aa7a08d9e0a36cb6a6->enter($__internal_38472ead994584b20e0f6ed89f5c8cd619ef432f3f99c1aa7a08d9e0a36cb6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_298c678f25a287beff76cf0b2e1804bc0981b1e516dcc14374dfc2fa6b4ba563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298c678f25a287beff76cf0b2e1804bc0981b1e516dcc14374dfc2fa6b4ba563->enter($__internal_298c678f25a287beff76cf0b2e1804bc0981b1e516dcc14374dfc2fa6b4ba563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38472ead994584b20e0f6ed89f5c8cd619ef432f3f99c1aa7a08d9e0a36cb6a6->leave($__internal_38472ead994584b20e0f6ed89f5c8cd619ef432f3f99c1aa7a08d9e0a36cb6a6_prof);

        
        $__internal_298c678f25a287beff76cf0b2e1804bc0981b1e516dcc14374dfc2fa6b4ba563->leave($__internal_298c678f25a287beff76cf0b2e1804bc0981b1e516dcc14374dfc2fa6b4ba563_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6891f36c75dad9c44f94aea4241f184f7c411058301930c48d7635f483af7720 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6891f36c75dad9c44f94aea4241f184f7c411058301930c48d7635f483af7720->enter($__internal_6891f36c75dad9c44f94aea4241f184f7c411058301930c48d7635f483af7720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d76660a7668102c7e944a6905729f437173b982999be040ff6a57a2d37b2afc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76660a7668102c7e944a6905729f437173b982999be040ff6a57a2d37b2afc3->enter($__internal_d76660a7668102c7e944a6905729f437173b982999be040ff6a57a2d37b2afc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d76660a7668102c7e944a6905729f437173b982999be040ff6a57a2d37b2afc3->leave($__internal_d76660a7668102c7e944a6905729f437173b982999be040ff6a57a2d37b2afc3_prof);

        
        $__internal_6891f36c75dad9c44f94aea4241f184f7c411058301930c48d7635f483af7720->leave($__internal_6891f36c75dad9c44f94aea4241f184f7c411058301930c48d7635f483af7720_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_4362ec9cd5e65b06ad119af8f8a71287bf55951d61836bc7c3505db627e84d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4362ec9cd5e65b06ad119af8f8a71287bf55951d61836bc7c3505db627e84d2a->enter($__internal_4362ec9cd5e65b06ad119af8f8a71287bf55951d61836bc7c3505db627e84d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_cb7a5b6e4507086a69cffd79c0b07f3ff1b7d32c7fa8267c289e0f2a43cea5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb7a5b6e4507086a69cffd79c0b07f3ff1b7d32c7fa8267c289e0f2a43cea5af->enter($__internal_cb7a5b6e4507086a69cffd79c0b07f3ff1b7d32c7fa8267c289e0f2a43cea5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>Liste des annonces</h2>

    <ul>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "            <li>
                <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
                </a>
                par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
                le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "            <li>Pas (encore !) d'annonces</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>

";
        
        $__internal_cb7a5b6e4507086a69cffd79c0b07f3ff1b7d32c7fa8267c289e0f2a43cea5af->leave($__internal_cb7a5b6e4507086a69cffd79c0b07f3ff1b7d32c7fa8267c289e0f2a43cea5af_prof);

        
        $__internal_4362ec9cd5e65b06ad119af8f8a71287bf55951d61836bc7c3505db627e84d2a->leave($__internal_4362ec9cd5e65b06ad119af8f8a71287bf55951d61836bc7c3505db627e84d2a_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  107 => 23,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  83 => 15,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle:Advert:layout.html.twig\" %}

{% block title %}
    Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

    <h2>Liste des annonces</h2>

    <ul>
        {% for advert in listAdverts %}
            <li>
                <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                    {{ advert.title }}
                </a>
                par {{ advert.author }},
                le {{ advert.date|date('d/m/Y') }}
            </li>
        {% else %}
            <li>Pas (encore !) d'annonces</li>
        {% endfor %}
    </ul>

{% endblock %}", "OCPlatformBundle:Advert:index.html.twig", "C:\\xampp\\htdocs\\Symfony3_F1\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
