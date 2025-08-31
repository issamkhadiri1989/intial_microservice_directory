<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @Ai/data_collector.html.twig */
class __TwigTemplate_9b9d3dd8fe48656c6c60273ba5956bd3 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Ai/data_collector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Ai/data_collector.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 4, $this->source); })()), "platformCalls", [], "any", false, false, false, 4)) > 0)) {
            // line 5
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 6
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Ai/icon.svg", ["y" => 18]);
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 7
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "platformCalls", [], "any", false, false, false, 7)), "html", null, true);
                yield "</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">calls</span>
            </span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 12
            yield "
        ";
            // line 13
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 14
                yield "            <div class=\"sf-toolbar-info-piece\">
                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"label\">Configured Platforms</b>
                    <span class=\"sf-toolbar-status\">1</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"label\">Platform Calls</b>
                    <span class=\"sf-toolbar-status\">";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "platformCalls", [], "any", false, false, false, 21)), "html", null, true);
                yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"label\">Registered Tools</b>
                    <span class=\"sf-toolbar-status\">";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "tools", [], "any", false, false, false, 25)), "html", null, true);
                yield "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"label\">Tool Calls</b>
                    <span class=\"sf-toolbar-status\">";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "toolCalls", [], "any", false, false, false, 29)), "html", null, true);
                yield "</span>
                </div>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 33
            yield "
        ";
            // line 34
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 39
        yield "    <span class=\"label\">
        <span class=\"icon\">";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@Ai/icon.svg", ["y" => 16]);
        yield "</span>
        <strong>Symfony AI</strong>
        <span class=\"count\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 42, $this->source); })()), "platformCalls", [], "any", false, false, false, 42)), "html", null, true);
        yield "</span>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        yield "    <h2>Symfony AI</h2>
    <section class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">1</span>
                <span class=\"label\">Platforms</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "platformCalls", [], "any", false, false, false, 67)), "html", null, true);
        yield "</span>
                <span class=\"label\">Platform Calls</span>
            </div>
        </div>
        <div class=\"metric-divider\"></div>
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 74, $this->source); })()), "tools", [], "any", false, false, false, 74)), "html", null, true);
        yield "</span>
                <span class=\"label\">Tools</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 78, $this->source); })()), "toolCalls", [], "any", false, false, false, 78)), "html", null, true);
        yield "</span>
                <span class=\"label\">Tool Calls</span>
            </div>
        </div>
    </section>
    <h3>Platform Calls</h3>
    ";
        // line 84
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 84, $this->source); })()), "platformCalls", [], "any", false, false, false, 84))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 85
            yield "        <div class=\"sf-tabs\">
            <div class=\"tab ";
            // line 86
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "platformCalls", [], "any", false, false, false, 86)) == 0)) ? ("disabled") : (""));
            yield "\">
                <h3 class=\"tab-title\">Platform Calls <span class=\"badge\">";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "platformCalls", [], "any", false, false, false, 87)), "html", null, true);
            yield "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 89, $this->source); })()), "platformCalls", [], "any", false, false, false, 89));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                // line 90
                yield "                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th colspan=\"2\">Call ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 93), "html", null, true);
                yield "</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Model</th>
                                    <td><strong>";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::constant("class", CoreExtension::getAttribute($this->env, $this->source, $context["call"], "model", [], "any", false, false, false, 99)), "html", null, true);
                yield "</strong> (Version: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "model", [], "any", false, false, false, 99), "name", [], "any", false, false, false, 99), "html", null, true);
                yield ")</td>
                                </tr>
                                <tr>
                                    <th>Input</th>
                                    <td>
                                        ";
                // line 104
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "input", [], "any", false, true, false, 104), "messages", [], "any", true, true, false, 104)) {
                    // line 105
                    yield "                                            <ol>
                                                ";
                    // line 106
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "input", [], "any", false, false, false, 106), "messages", [], "any", false, false, false, 106));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 107
                        yield "                                                    <li>
                                                        <strong>";
                        // line 108
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "role", [], "any", false, false, false, 108), "value", [], "any", false, false, false, 108)), "html", null, true);
                        yield ":</strong>
                                                        ";
                        // line 109
                        if ((("assistant" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "role", [], "any", false, false, false, 109), "value", [], "any", false, false, false, 109)) && CoreExtension::getAttribute($this->env, $this->source, $context["message"], "hasToolCalls", [], "any", false, false, false, 109))) {
                            // line 110
                            yield "                                                            ";
                            yield $this->getTemplateForMacro("macro_tool_calls", $context, 110, $this->getSourceContext())->macro_tool_calls(...[CoreExtension::getAttribute($this->env, $this->source, $context["message"], "toolCalls", [], "any", false, false, false, 110)]);
                            yield "
                                                        ";
                        } elseif (("tool" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 111
$context["message"], "role", [], "any", false, false, false, 111), "value", [], "any", false, false, false, 111))) {
                            // line 112
                            yield "                                                            <i>Result of tool call with ID ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["message"], "toolCall", [], "any", false, false, false, 112), "id", [], "any", false, false, false, 112), "html", null, true);
                            yield "</i><br />
                                                            ";
                            // line 113
                            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 113), "html", null, true));
                            yield "
                                                        ";
                        } elseif (("user" == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 114
$context["message"], "role", [], "any", false, false, false, 114), "value", [], "any", false, false, false, 114))) {
                            // line 115
                            yield "                                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 115));
                            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                                // line 116
                                yield "                                                                ";
                                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", true, true, false, 116)) {
                                    // line 117
                                    yield "                                                                    ";
                                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, false, 117), "html", null, true));
                                    yield "
                                                                ";
                                } else {
                                    // line 119
                                    yield "                                                                    <img src=\"";
                                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 119), "html", null, true);
                                    yield "\" />
                                                                ";
                                }
                                // line 121
                                yield "                                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 122
                            yield "                                                        ";
                        } else {
                            // line 123
                            yield "                                                            ";
                            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 123), "html", null, true));
                            yield "
                                                        ";
                        }
                        // line 125
                        yield "                                                    </li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    yield "                                            </ol>
                                        ";
                } else {
                    // line 129
                    yield "                                            ";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "input", [], "any", false, false, false, 129));
                    yield "
                                        ";
                }
                // line 131
                yield "                                    </td>
                                </tr>
                                <tr>
                                    <th>Options</th>
                                    <td>
                                        <ul>
                                            ";
                // line 137
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["call"], "options", [], "any", false, false, false, 137));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 138
                    yield "                                                ";
                    if (($context["key"] == "tools")) {
                        // line 139
                        yield "                                                    <li>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield ":
                                                        <ul>
                                                            ";
                        // line 141
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable($context["value"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
                            // line 142
                            yield "                                                                <li>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "name", [], "any", false, false, false, 142), "html", null, true);
                            yield "</li>
                                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['tool'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 144
                        yield "                                                        </ul>
                                                    </li>
                                                ";
                    } else {
                        // line 147
                        yield "                                                    <li>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                        yield ": ";
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, $context["value"]);
                        yield "</li>
                                                ";
                    }
                    // line 149
                    yield "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 150
                yield "                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Result</th>
                                    <td>
                                        ";
                // line 156
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "input", [], "any", false, true, false, 156), "messages", [], "any", true, true, false, 156) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, $context["call"], "result", [], "any", false, false, false, 156)))) {
                    // line 157
                    yield "                                            ";
                    yield $this->getTemplateForMacro("macro_tool_calls", $context, 157, $this->getSourceContext())->macro_tool_calls(...[CoreExtension::getAttribute($this->env, $this->source, $context["call"], "result", [], "any", false, false, false, 157)]);
                    yield "
                                        ";
                } elseif (is_iterable(CoreExtension::getAttribute($this->env, $this->source,                 // line 158
$context["call"], "result", [], "any", false, false, false, 158))) {
                    // line 159
                    yield "                                            <ol>
                                                ";
                    // line 160
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["call"], "result", [], "any", false, false, false, 160));
                    foreach ($context['_seq'] as $context["_key"] => $context["vector"]) {
                        // line 161
                        yield "                                                    <li>Vector with <strong>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vector"], "dimensions", [], "any", false, false, false, 161), "html", null, true);
                        yield "</strong> dimensions</li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['vector'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 163
                    yield "                                            </ol>
                                        ";
                } else {
                    // line 165
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["call"], "result", [], "any", false, false, false, 165), "html", null, true);
                    yield "
                                        ";
                }
                // line 167
                yield "                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            yield "                </div>
            </div>
        </div>
    ";
        } else {
            // line 176
            yield "        <div class=\"empty\">
            <p>No platform calls were made.</p>
        </div>
    ";
        }
        // line 180
        yield "
    <h3>Tools</h3>
    ";
        // line 182
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 182, $this->source); })()), "tools", [], "any", false, false, false, 182))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 183
            yield "        <table class=\"table\">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Class & Method</th>
                    <th>Parameters</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 193
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 193, $this->source); })()), "tools", [], "any", false, false, false, 193));
            foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
                // line 194
                yield "                    <tr>
                        <th>";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "name", [], "any", false, false, false, 195), "html", null, true);
                yield "</th>
                        <td>";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 196), "html", null, true);
                yield "</td>
                        <td>";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "reference", [], "any", false, false, false, 197), "class", [], "any", false, false, false, 197), "html", null, true);
                yield "::";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "reference", [], "any", false, false, false, 197), "method", [], "any", false, false, false, 197), "html", null, true);
                yield "</td>
                        <td>
                            ";
                // line 199
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "parameters", [], "any", false, false, false, 199)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 200
                    yield "                                <ul>
                                    ";
                    // line 201
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "parameters", [], "any", false, false, false, 201), "properties", [], "any", false, false, false, 201));
                    foreach ($context['_seq'] as $context["name"] => $context["parameter"]) {
                        // line 202
                        yield "                                        <li>
                                            <strong>";
                        // line 203
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                        yield " (";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["parameter"], "type", [], "any", false, false, false, 203), "html", null, true);
                        yield ")</strong><br />
                                            <i>";
                        // line 204
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["parameter"], "description", [], "any", true, true, false, 204)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["parameter"], "description", [], "any", false, false, false, 204))) : ("")), "html", null, true);
                        yield "</i>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['name'], $context['parameter'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 207
                    yield "                                </ul>
                            ";
                } else {
                    // line 209
                    yield "                                <i>none</i>
                            ";
                }
                // line 211
                yield "                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tool'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            yield "            </tbody>
        </table>
    ";
        } else {
            // line 217
            yield "        <div class=\"empty\">
            <p>No tools were registered.</p>
        </div>
    ";
        }
        // line 221
        yield "
    <h3>Tool Calls</h3>
    ";
        // line 223
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 223, $this->source); })()), "toolCalls", [], "any", false, false, false, 223))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 224
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 224, $this->source); })()), "toolCalls", [], "any", false, false, false, 224));
            foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                // line 225
                yield "            <table class=\"table\">
                <thead>
                    <tr>
                        <th colspan=\"2\">";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "call", [], "any", false, false, false, 228), "name", [], "any", false, false, false, 228), "html", null, true);
                yield "</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "call", [], "any", false, false, false, 234), "id", [], "any", false, false, false, 234), "html", null, true);
                yield "</td>
                    </tr>
                    <tr>
                        <th>Arguments</th>
                        <td>";
                // line 238
                yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "call", [], "any", false, false, false, 238), "arguments", [], "any", false, false, false, 238));
                yield "</td>
                    </tr>
                    <tr>
                        <th>Result</th>
                        <td>";
                // line 242
                yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "result", [], "any", false, false, false, 242));
                yield "</td>
                    </tr>
                </tbody>
            </table>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['call'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 247
            yield "    ";
        } else {
            // line 248
            yield "        <div class=\"empty\">
            <p>No tool calls were made.</p>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
    public function macro_tool_calls($toolCalls = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "toolCalls" => $toolCalls,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tool_calls"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tool_calls"));

            // line 47
            yield "    Tool call";
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["toolCalls"]) || array_key_exists("toolCalls", $context) ? $context["toolCalls"] : (function () { throw new RuntimeError('Variable "toolCalls" does not exist.', 47, $this->source); })())) > 1)) ? ("s") : (""));
            yield ":
    <ol>
        ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["toolCalls"]) || array_key_exists("toolCalls", $context) ? $context["toolCalls"] : (function () { throw new RuntimeError('Variable "toolCalls" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["toolCall"]) {
                // line 50
                yield "            <li>
                <strong>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["toolCall"], "name", [], "any", false, false, false, 51), "html", null, true);
                yield "(";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(Twig\Extension\CoreExtension::map($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["toolCall"], "arguments", [], "any", false, false, false, 51), function ($__value__, $__key__) use ($context, $macros) { $context["value"] = $__value__; $context["key"] = $__key__; return (((isset($context["key"]) || array_key_exists("key", $context) ? $context["key"] : (function () { throw new RuntimeError('Variable "key" does not exist.', 51, $this->source); })()) . ": ") . json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 51, $this->source); })()))); }), ", "), "html", null, true);
                yield ")</strong>
                <i>(ID: ";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["toolCall"], "id", [], "any", false, false, false, 52), "html", null, true);
                yield ")</i>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['toolCall'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            yield "    </ol>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Ai/data_collector.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  712 => 55,  703 => 52,  697 => 51,  694 => 50,  690 => 49,  684 => 47,  666 => 46,  651 => 248,  648 => 247,  637 => 242,  630 => 238,  623 => 234,  614 => 228,  609 => 225,  604 => 224,  602 => 223,  598 => 221,  592 => 217,  587 => 214,  579 => 211,  575 => 209,  571 => 207,  562 => 204,  556 => 203,  553 => 202,  549 => 201,  546 => 200,  544 => 199,  537 => 197,  533 => 196,  529 => 195,  526 => 194,  522 => 193,  510 => 183,  508 => 182,  504 => 180,  498 => 176,  492 => 172,  474 => 167,  468 => 165,  464 => 163,  455 => 161,  451 => 160,  448 => 159,  446 => 158,  441 => 157,  439 => 156,  431 => 150,  425 => 149,  417 => 147,  412 => 144,  403 => 142,  399 => 141,  393 => 139,  390 => 138,  386 => 137,  378 => 131,  372 => 129,  368 => 127,  361 => 125,  355 => 123,  352 => 122,  346 => 121,  340 => 119,  334 => 117,  331 => 116,  326 => 115,  324 => 114,  320 => 113,  315 => 112,  313 => 111,  308 => 110,  306 => 109,  302 => 108,  299 => 107,  295 => 106,  292 => 105,  290 => 104,  280 => 99,  271 => 93,  266 => 90,  249 => 89,  244 => 87,  240 => 86,  237 => 85,  235 => 84,  226 => 78,  219 => 74,  209 => 67,  199 => 59,  186 => 58,  172 => 42,  167 => 40,  164 => 39,  151 => 38,  137 => 34,  134 => 33,  126 => 29,  119 => 25,  112 => 21,  103 => 14,  101 => 13,  98 => 12,  89 => 7,  84 => 6,  81 => 5,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.platformCalls|length > 0 %}
        {% set icon %}
            {{ include('@Ai/icon.svg', { y: 18 }) }}
            <span class=\"sf-toolbar-value\">{{ collector.platformCalls|length }}</span>
            <span class=\"sf-toolbar-info-piece-additional-detail\">
                <span class=\"sf-toolbar-label\">calls</span>
            </span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"label\">Configured Platforms</b>
                    <span class=\"sf-toolbar-status\">1</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"label\">Platform Calls</b>
                    <span class=\"sf-toolbar-status\">{{ collector.platformCalls|length }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"label\">Registered Tools</b>
                    <span class=\"sf-toolbar-status\">{{ collector.tools|length }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b class=\"label\">Tool Calls</b>
                    <span class=\"sf-toolbar-status\">{{ collector.toolCalls|length }}</span>
                </div>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@Ai/icon.svg', { y: 16 }) }}</span>
        <strong>Symfony AI</strong>
        <span class=\"count\">{{ collector.platformCalls|length }}</span>
    </span>
{% endblock %}

{% macro tool_calls(toolCalls) %}
    Tool call{{ toolCalls|length > 1 ? 's' }}:
    <ol>
        {% for toolCall in toolCalls %}
            <li>
                <strong>{{ toolCall.name }}({{ toolCall.arguments|map((value, key) => \"#{key}: #{value|json_encode}\")|join(', ') }})</strong>
                <i>(ID: {{ toolCall.id }})</i>
            </li>
        {% endfor %}
    </ol>
{% endmacro %}

{% block panel %}
    <h2>Symfony AI</h2>
    <section class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">1</span>
                <span class=\"label\">Platforms</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.platformCalls|length }}</span>
                <span class=\"label\">Platform Calls</span>
            </div>
        </div>
        <div class=\"metric-divider\"></div>
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.tools|length }}</span>
                <span class=\"label\">Tools</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.toolCalls|length }}</span>
                <span class=\"label\">Tool Calls</span>
            </div>
        </div>
    </section>
    <h3>Platform Calls</h3>
    {% if collector.platformCalls|length %}
        <div class=\"sf-tabs\">
            <div class=\"tab {{ collector.platformCalls|length == 0 ? 'disabled' }}\">
                <h3 class=\"tab-title\">Platform Calls <span class=\"badge\">{{ collector.platformCalls|length }}</span></h3>
                <div class=\"tab-content\">
                    {% for call in collector.platformCalls %}
                        <table class=\"table\">
                            <thead>
                                <tr>
                                    <th colspan=\"2\">Call {{ loop.index }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Model</th>
                                    <td><strong>{{ constant('class', call.model) }}</strong> (Version: {{ call.model.name }})</td>
                                </tr>
                                <tr>
                                    <th>Input</th>
                                    <td>
                                        {% if call.input.messages is defined %}{# expect MessageBag #}
                                            <ol>
                                                {% for message in call.input.messages %}
                                                    <li>
                                                        <strong>{{ message.role.value|title }}:</strong>
                                                        {% if 'assistant' == message.role.value and message.hasToolCalls%}
                                                            {{ _self.tool_calls(message.toolCalls) }}
                                                        {% elseif 'tool' == message.role.value %}
                                                            <i>Result of tool call with ID {{ message.toolCall.id }}</i><br />
                                                            {{ message.content|nl2br }}
                                                        {% elseif 'user' == message.role.value %}
                                                            {% for item in message.content %}
                                                                {% if item.text is defined %}
                                                                    {{ item.text|nl2br }}
                                                                {% else %}
                                                                    <img src=\"{{ item.url }}\" />
                                                                {% endif %}
                                                            {% endfor %}
                                                        {% else %}
                                                            {{ message.content|nl2br }}
                                                        {% endif %}
                                                    </li>
                                                {% endfor %}
                                            </ol>
                                        {% else %}
                                            {{ dump(call.input) }}
                                        {% endif %}
                                    </td>
                                </tr>
                                <tr>
                                    <th>Options</th>
                                    <td>
                                        <ul>
                                            {% for key, value in call.options %}
                                                {% if key == 'tools' %}
                                                    <li>{{ key }}:
                                                        <ul>
                                                            {% for tool in value %}
                                                                <li>{{ tool.name }}</li>
                                                            {% endfor %}
                                                        </ul>
                                                    </li>
                                                {% else %}
                                                    <li>{{ key }}: {{ dump(value) }}</li>
                                                {% endif %}
                                            {% endfor %}
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Result</th>
                                    <td>
                                        {% if call.input.messages is defined and call.result is iterable %}{# expect array of ToolCall #}
                                            {{ _self.tool_calls(call.result) }}
                                        {% elseif call.result is iterable %}{# expect array of Vectors #}
                                            <ol>
                                                {% for vector in call.result %}
                                                    <li>Vector with <strong>{{ vector.dimensions }}</strong> dimensions</li>
                                                {% endfor %}
                                            </ol>
                                        {% else %}
                                            {{ call.result }}
                                        {% endif %}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% else %}
        <div class=\"empty\">
            <p>No platform calls were made.</p>
        </div>
    {% endif %}

    <h3>Tools</h3>
    {% if collector.tools|length %}
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Class & Method</th>
                    <th>Parameters</th>
                </tr>
            </thead>
            <tbody>
                {% for tool in collector.tools %}
                    <tr>
                        <th>{{ tool.name }}</th>
                        <td>{{ tool.description }}</td>
                        <td>{{ tool.reference.class }}::{{ tool.reference.method }}</td>
                        <td>
                            {% if tool.parameters %}
                                <ul>
                                    {% for name, parameter in tool.parameters.properties %}
                                        <li>
                                            <strong>{{ name }} ({{ parameter.type }})</strong><br />
                                            <i>{{ parameter.description|default() }}</i>
                                        </li>
                                    {% endfor %}
                                </ul>
                            {% else %}
                                <i>none</i>
                            {% endif %}
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <div class=\"empty\">
            <p>No tools were registered.</p>
        </div>
    {% endif %}

    <h3>Tool Calls</h3>
    {% if collector.toolCalls|length %}
        {% for call in collector.toolCalls %}
            <table class=\"table\">
                <thead>
                    <tr>
                        <th colspan=\"2\">{{ call.call.name }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ call.call.id }}</td>
                    </tr>
                    <tr>
                        <th>Arguments</th>
                        <td>{{ dump(call.call.arguments) }}</td>
                    </tr>
                    <tr>
                        <th>Result</th>
                        <td>{{ dump(call.result) }}</td>
                    </tr>
                </tbody>
            </table>
        {% endfor %}
    {% else %}
        <div class=\"empty\">
            <p>No tool calls were made.</p>
        </div>
    {% endif %}
{% endblock %}
", "@Ai/data_collector.html.twig", "/var/www/html/vendor/symfony/ai-bundle/templates/data_collector.html.twig");
    }
}
