<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_31b2cfc546513b0312611267b9b0746bdaadb4ab2e097ecd0af8289c619a3c1c extends Twig_Template
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
        $__internal_5fb5e014880d5a101de9a101e277750d340ee857382a269ce8cd6d620b99cff3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb5e014880d5a101de9a101e277750d340ee857382a269ce8cd6d620b99cff3->enter($__internal_5fb5e014880d5a101de9a101e277750d340ee857382a269ce8cd6d620b99cff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_70c73606acc6e8eff37fef04b288a70b3a8230c97b37e7bfc3f27b6c89ac6ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70c73606acc6e8eff37fef04b288a70b3a8230c97b37e7bfc3f27b6c89ac6ad1->enter($__internal_70c73606acc6e8eff37fef04b288a70b3a8230c97b37e7bfc3f27b6c89ac6ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5fb5e014880d5a101de9a101e277750d340ee857382a269ce8cd6d620b99cff3->leave($__internal_5fb5e014880d5a101de9a101e277750d340ee857382a269ce8cd6d620b99cff3_prof);

        
        $__internal_70c73606acc6e8eff37fef04b288a70b3a8230c97b37e7bfc3f27b6c89ac6ad1->leave($__internal_70c73606acc6e8eff37fef04b288a70b3a8230c97b37e7bfc3f27b6c89ac6ad1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_59bcea4ab80fc33df36b7fee4da3b95411177adde665798fcab2afba8e98ac64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59bcea4ab80fc33df36b7fee4da3b95411177adde665798fcab2afba8e98ac64->enter($__internal_59bcea4ab80fc33df36b7fee4da3b95411177adde665798fcab2afba8e98ac64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_56022094393cba42ca01fbd473d0c9390df83bd0e7d7b6d7268164957d122f16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56022094393cba42ca01fbd473d0c9390df83bd0e7d7b6d7268164957d122f16->enter($__internal_56022094393cba42ca01fbd473d0c9390df83bd0e7d7b6d7268164957d122f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_56022094393cba42ca01fbd473d0c9390df83bd0e7d7b6d7268164957d122f16->leave($__internal_56022094393cba42ca01fbd473d0c9390df83bd0e7d7b6d7268164957d122f16_prof);

        
        $__internal_59bcea4ab80fc33df36b7fee4da3b95411177adde665798fcab2afba8e98ac64->leave($__internal_59bcea4ab80fc33df36b7fee4da3b95411177adde665798fcab2afba8e98ac64_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6fac6fab6ec3adbadd5573bc2441d79fe1f509ca6ed28f56b487d7d78ad933bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fac6fab6ec3adbadd5573bc2441d79fe1f509ca6ed28f56b487d7d78ad933bb->enter($__internal_6fac6fab6ec3adbadd5573bc2441d79fe1f509ca6ed28f56b487d7d78ad933bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_76f6cd47df35d616340bd169caf61cc461f50ae86f471540cc36619fc32bd13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76f6cd47df35d616340bd169caf61cc461f50ae86f471540cc36619fc32bd13d->enter($__internal_76f6cd47df35d616340bd169caf61cc461f50ae86f471540cc36619fc32bd13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_76f6cd47df35d616340bd169caf61cc461f50ae86f471540cc36619fc32bd13d->leave($__internal_76f6cd47df35d616340bd169caf61cc461f50ae86f471540cc36619fc32bd13d_prof);

        
        $__internal_6fac6fab6ec3adbadd5573bc2441d79fe1f509ca6ed28f56b487d7d78ad933bb->leave($__internal_6fac6fab6ec3adbadd5573bc2441d79fe1f509ca6ed28f56b487d7d78ad933bb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_30a3b8440b576fd52950484c4b6b11a3f44f168f348176428a9506ca3004f75b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30a3b8440b576fd52950484c4b6b11a3f44f168f348176428a9506ca3004f75b->enter($__internal_30a3b8440b576fd52950484c4b6b11a3f44f168f348176428a9506ca3004f75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7831a3032af17531f23276c0b4c61a95a8742e719bbd1a28c0bf2d8df3935a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7831a3032af17531f23276c0b4c61a95a8742e719bbd1a28c0bf2d8df3935a84->enter($__internal_7831a3032af17531f23276c0b4c61a95a8742e719bbd1a28c0bf2d8df3935a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7831a3032af17531f23276c0b4c61a95a8742e719bbd1a28c0bf2d8df3935a84->leave($__internal_7831a3032af17531f23276c0b4c61a95a8742e719bbd1a28c0bf2d8df3935a84_prof);

        
        $__internal_30a3b8440b576fd52950484c4b6b11a3f44f168f348176428a9506ca3004f75b->leave($__internal_30a3b8440b576fd52950484c4b6b11a3f44f168f348176428a9506ca3004f75b_prof);

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
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\Symfony3_F1\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
