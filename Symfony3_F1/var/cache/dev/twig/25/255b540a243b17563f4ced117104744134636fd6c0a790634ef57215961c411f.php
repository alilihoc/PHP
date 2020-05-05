<?php

/* OCCoreBundle:Default:index.html.twig */
class __TwigTemplate_2a6a82bf6721e3bc59fbadfd88149f37fb977748258a474a34b81dd684d85293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle:Advert:layout.html.twig", "OCCoreBundle:Default:index.html.twig", 3);
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
        $__internal_7079dc736c0c170885daefd9dad85f64dbd56b9434b375c1a6064015e183950e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7079dc736c0c170885daefd9dad85f64dbd56b9434b375c1a6064015e183950e->enter($__internal_7079dc736c0c170885daefd9dad85f64dbd56b9434b375c1a6064015e183950e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:index.html.twig"));

        $__internal_c8d7003986613790a22d976787b63f0740f7afd014ba73fefbc9fd88a2acab2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d7003986613790a22d976787b63f0740f7afd014ba73fefbc9fd88a2acab2a->enter($__internal_c8d7003986613790a22d976787b63f0740f7afd014ba73fefbc9fd88a2acab2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7079dc736c0c170885daefd9dad85f64dbd56b9434b375c1a6064015e183950e->leave($__internal_7079dc736c0c170885daefd9dad85f64dbd56b9434b375c1a6064015e183950e_prof);

        
        $__internal_c8d7003986613790a22d976787b63f0740f7afd014ba73fefbc9fd88a2acab2a->leave($__internal_c8d7003986613790a22d976787b63f0740f7afd014ba73fefbc9fd88a2acab2a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_490efa11b0dce68109f87ae0c3bf3d7e57a03ded772c3bde9ab1b59978a390de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_490efa11b0dce68109f87ae0c3bf3d7e57a03ded772c3bde9ab1b59978a390de->enter($__internal_490efa11b0dce68109f87ae0c3bf3d7e57a03ded772c3bde9ab1b59978a390de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ded87b98e826ead083cb907737bc2abf1bd9dfd9e7260f79d650cb876cbe9a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ded87b98e826ead083cb907737bc2abf1bd9dfd9e7260f79d650cb876cbe9a4->enter($__internal_2ded87b98e826ead083cb907737bc2abf1bd9dfd9e7260f79d650cb876cbe9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "    Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2ded87b98e826ead083cb907737bc2abf1bd9dfd9e7260f79d650cb876cbe9a4->leave($__internal_2ded87b98e826ead083cb907737bc2abf1bd9dfd9e7260f79d650cb876cbe9a4_prof);

        
        $__internal_490efa11b0dce68109f87ae0c3bf3d7e57a03ded772c3bde9ab1b59978a390de->leave($__internal_490efa11b0dce68109f87ae0c3bf3d7e57a03ded772c3bde9ab1b59978a390de_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_fb908abdd1e2128d0a5b675bd791565f5bf2687abeebd366c0bcb5791e492185 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb908abdd1e2128d0a5b675bd791565f5bf2687abeebd366c0bcb5791e492185->enter($__internal_fb908abdd1e2128d0a5b675bd791565f5bf2687abeebd366c0bcb5791e492185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_d338ef98c3d4f6ab0eab15b9a7acf481a7ac5e772d5dea8feaefa5ea347bef62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d338ef98c3d4f6ab0eab15b9a7acf481a7ac5e772d5dea8feaefa5ea347bef62->enter($__internal_d338ef98c3d4f6ab0eab15b9a7acf481a7ac5e772d5dea8feaefa5ea347bef62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
    <h2>Page d'accueil de notre site</h2>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            echo "             <p class=\"bg-info text-info\" style=\"height: 40px; line-height: 40px; padding-left: 5px;\">";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listAdverts"] ?? $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 17
            echo "        ";
            if (($this->getAttribute($context["loop"], "index", array()) < 4)) {
                // line 18
                echo "            <div>
                <h3>
                    <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
                echo "\">
                        ";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
                echo "
                    </a>
                </h3>
                <p>
                    par ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
                echo ",
                    le ";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
                echo "
                </p>
                <p>
                    ";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "content", array()), "html", null, true);
                echo "
                </p>
            </div>
            <hr>
        ";
            }
            // line 34
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 35
            echo "        <p>Pas (encore !) d'annonces</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
";
        
        $__internal_d338ef98c3d4f6ab0eab15b9a7acf481a7ac5e772d5dea8feaefa5ea347bef62->leave($__internal_d338ef98c3d4f6ab0eab15b9a7acf481a7ac5e772d5dea8feaefa5ea347bef62_prof);

        
        $__internal_fb908abdd1e2128d0a5b675bd791565f5bf2687abeebd366c0bcb5791e492185->leave($__internal_fb908abdd1e2128d0a5b675bd791565f5bf2687abeebd366c0bcb5791e492185_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 37,  159 => 35,  146 => 34,  138 => 29,  132 => 26,  128 => 25,  121 => 21,  117 => 20,  113 => 18,  110 => 17,  92 => 16,  89 => 15,  80 => 13,  76 => 12,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
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

    <h2>Page d'accueil de notre site</h2>
    {% for message in app.session.flashbag.get('notice') %}
             <p class=\"bg-info text-info\" style=\"height: 40px; line-height: 40px; padding-left: 5px;\">{{ message }}</p>
    {% endfor %}

    {% for advert in listAdverts %}
        {% if loop.index < 4 %}
            <div>
                <h3>
                    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
                        {{ advert.title }}
                    </a>
                </h3>
                <p>
                    par {{ advert.author }},
                    le {{ advert.date|date('d/m/Y') }}
                </p>
                <p>
                    {{ advert.content }}
                </p>
            </div>
            <hr>
        {% endif %}
    {% else %}
        <p>Pas (encore !) d'annonces</p>
    {% endfor %}

{% endblock %}", "OCCoreBundle:Default:index.html.twig", "C:\\xampp\\htdocs\\Symfony3_F1\\src\\OC\\CoreBundle/Resources/views/Default/index.html.twig");
    }
}
