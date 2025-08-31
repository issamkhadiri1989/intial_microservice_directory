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

/* @Ai/icon.svg */
class __TwigTemplate_3719dc917a0905f71105589ae917971c extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Ai/icon.svg"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Ai/icon.svg"));

        // line 1
        yield "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\">
    <!-- svg-source:excalidraw -->
    <defs>
        <style>
            @font-face {
                font-family: Lilita One;
                src: url(data:font/woff2;base64,d09GMgABAAAAAAG8AA0AAAAAA7QAAAFuAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGwwcGAZgAAQRCAoAKgsEAAE2AiQDBAQgBYMkByAb+wLIrgpsY+FkU2dFDWvuKOXBh9p0iy/i4f/3+7XPu7inv0gmWZN5gghNE15peOavTiljTUOd6ZOmib+zbYiVeKP5Oskyo1HfONwCIGtzlROtFDZJSp4td/omBwHoa/tlEAX2W5ZKFGiUJpa9tL1glG4Oi9Y1w5IM4eOYCVSl4Iq2tjhgx0csQBbP8aiU7EV2jds+KD4b+51BuLa1sSnOH5ye8khFnxAQv7M3KGQgRJ6rBwEvdQlnAuHqRSP149+s6vQFPg5W3t38OpdKRVT8KKVijvRV0C0RTsJbBMIyAwSMym1TRUklXrgnQsslMnUOkEzzdYlGqa6m/5ZpYkln1DkxhRkqod2hs5jB6NDIyNiCCzPLLWanxQ4xs0VU8AgUT77HRkZHN6DGZcTsy/uZxeqz6zRaJ+jZ5RhS4UIditeyJ2M87ZssRozQYsIdnZ8zUDjTObVgAzqg3Q1VYMZsDSuYCTpA92kjOwE5YwAA);
            }
            @font-face {
                font-family: Lilita One;
                src: url(data:font/woff2;base64,d09GMgABAAAAAAJkAA4AAAAABMAAAAISAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGhYbDBwYBmAANBEICoEogTELCAABNgIkAwwEIAWDJAcgG9ADyB6JcSzFkhILF/EAvz/ec9/7kEcmwMlOVLI64Ma6ta3PDX5n2xAv6UbzdZJVa4z2/4hYkpQ8rzs9WEIHkWv7Es7igNoCK+TP2zXhlidtYUIBYDq3hCTdm4GEH+FzVwnIAQRBJAgCsharHmXKhKVkxXISIApnwn6pRA+jndh9J8M7Xf0mAhP8k3GTJkzkCkXxySTiU94iQPgdPUWDCBFilIgFlEjRgBQpAkYnCUYlSXJLAEFIEvkgBmmI0AX9UKAEEITChoGpW3eJsnfVnthScTorZ+flZTvD5OzwzrITvt7Z8nb1jK0P/6Z00pRTe0jTtrxet7z0VenHk0XLW3Zuvbmoe9khX0wqKdm/9kjPLVUbT+buzRuudJn9PZTtqFjXfEHWjKXHrJ47traYn5VXsy97tGwmitaE89FjXZMknsw8EhBsn/41dT7K7/UtIzt+D686ZL6MxmRnIr4Xn0KGCATiUwnirwQuCHBJ7BnhhtbxLl0FxEYTQAAp3WSskJKJh/YWBiXWYSTPUoz1Y6YpHFNVKXpvmiKM0hl1TkRiVklVdofOYga66Kizzroa4ULMIovZabGrELOFo0HDkNSd3VVnXXQxQaVxGRH7cH9gsfrsOo3WCbQ2hyZwDQ55SBrzYmrdTjdZjIhCi7DN1vlp2muw+ju0ZCY6VHa3SgkMEUdgDGLC6qDJepEqBpJbugIA);
            }
        </style>
    </defs>
    <text x=\"12\" y=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["y"]) || array_key_exists("y", $context) ? $context["y"] : (function () { throw new RuntimeError('Variable "y" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\" font-family=\"Lilita One, Segoe UI Emoji\" font-size=\"14px\" fill=\"currentColor\" text-anchor=\"middle\">AI</text>
</svg>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@Ai/icon.svg";
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
        return array (  64 => 15,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"24\" height=\"24\">
    <!-- svg-source:excalidraw -->
    <defs>
        <style>
            @font-face {
                font-family: Lilita One;
                src: url(data:font/woff2;base64,d09GMgABAAAAAAG8AA0AAAAAA7QAAAFuAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGwwcGAZgAAQRCAoAKgsEAAE2AiQDBAQgBYMkByAb+wLIrgpsY+FkU2dFDWvuKOXBh9p0iy/i4f/3+7XPu7inv0gmWZN5gghNE15peOavTiljTUOd6ZOmib+zbYiVeKP5Oskyo1HfONwCIGtzlROtFDZJSp4td/omBwHoa/tlEAX2W5ZKFGiUJpa9tL1glG4Oi9Y1w5IM4eOYCVSl4Iq2tjhgx0csQBbP8aiU7EV2jds+KD4b+51BuLa1sSnOH5ye8khFnxAQv7M3KGQgRJ6rBwEvdQlnAuHqRSP149+s6vQFPg5W3t38OpdKRVT8KKVijvRV0C0RTsJbBMIyAwSMym1TRUklXrgnQsslMnUOkEzzdYlGqa6m/5ZpYkln1DkxhRkqod2hs5jB6NDIyNiCCzPLLWanxQ4xs0VU8AgUT77HRkZHN6DGZcTsy/uZxeqz6zRaJ+jZ5RhS4UIditeyJ2M87ZssRozQYsIdnZ8zUDjTObVgAzqg3Q1VYMZsDSuYCTpA92kjOwE5YwAA);
            }
            @font-face {
                font-family: Lilita One;
                src: url(data:font/woff2;base64,d09GMgABAAAAAAJkAA4AAAAABMAAAAISAAEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGhYbDBwYBmAANBEICoEogTELCAABNgIkAwwEIAWDJAcgG9ADyB6JcSzFkhILF/EAvz/ec9/7kEcmwMlOVLI64Ma6ta3PDX5n2xAv6UbzdZJVa4z2/4hYkpQ8rzs9WEIHkWv7Es7igNoCK+TP2zXhlidtYUIBYDq3hCTdm4GEH+FzVwnIAQRBJAgCsharHmXKhKVkxXISIApnwn6pRA+jndh9J8M7Xf0mAhP8k3GTJkzkCkXxySTiU94iQPgdPUWDCBFilIgFlEjRgBQpAkYnCUYlSXJLAEFIEvkgBmmI0AX9UKAEEITChoGpW3eJsnfVnthScTorZ+flZTvD5OzwzrITvt7Z8nb1jK0P/6Z00pRTe0jTtrxet7z0VenHk0XLW3Zuvbmoe9khX0wqKdm/9kjPLVUbT+buzRuudJn9PZTtqFjXfEHWjKXHrJ47traYn5VXsy97tGwmitaE89FjXZMknsw8EhBsn/41dT7K7/UtIzt+D686ZL6MxmRnIr4Xn0KGCATiUwnirwQuCHBJ7BnhhtbxLl0FxEYTQAAp3WSskJKJh/YWBiXWYSTPUoz1Y6YpHFNVKXpvmiKM0hl1TkRiVklVdofOYga66Kizzroa4ULMIovZabGrELOFo0HDkNSd3VVnXXQxQaVxGRH7cH9gsfrsOo3WCbQ2hyZwDQ55SBrzYmrdTjdZjIhCi7DN1vlp2muw+ju0ZCY6VHa3SgkMEUdgDGLC6qDJepEqBpJbugIA);
            }
        </style>
    </defs>
    <text x=\"12\" y=\"{{ y }}\" font-family=\"Lilita One, Segoe UI Emoji\" font-size=\"14px\" fill=\"currentColor\" text-anchor=\"middle\">AI</text>
</svg>
", "@Ai/icon.svg", "/var/www/html/vendor/symfony/ai-bundle/templates/icon.svg");
    }
}
