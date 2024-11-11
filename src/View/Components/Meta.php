<?php

namespace Paulund\SeoMeta\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class Meta extends Component
{
    public string $title = '';

    public string $description = '';

    public string $canonical = '';

    public string $author = '';

    public string $robots = '';

    public string $keywords = '';

    public string $type = 'article';

    public string $card = 'summary';

    public string $image = '';

    public ?string $url = null;

    public string $csp = '';

    public string $charset = 'utf-8';

    public string $viewport = 'width=device-width, initial-scale=1.0';

    /**
     * Create a new component instance.
     *
     * @param  array<string, string>  $meta
     */
    public function __construct(public array $meta = [])
    {
        $this->title = $this->meta['title'] ?? '';
        if (! empty($this->title) &&
            $this->title !== 'Paulund' &&
            Str::endsWith($meta['title'], ' | Paulund') === false) {
            $this->title = $meta['title'].' | Paulund';
        }

        $this->canonical = $this->meta['canonical'] ?? request()->url();
        $this->description = $this->meta['description'] ?? '';
        $this->author = $this->meta['author'] ?? '';
        $this->robots = $this->meta['robots'] ?? '';
        $this->keywords = $this->meta['keywords'] ?? '';
        $this->type = $this->meta['type'] ?? 'article';
        $this->card = $this->meta['card'] ?? 'summary';
        $this->image = $this->meta['image'] ?? '';
        $this->url = $this->meta['url'] ?? null;
        $this->csp = $this->meta['csp'] ?? '';

        $this->charset = $this->meta['charset'] ?? 'utf-8';
        $this->viewport = $this->meta['viewport'] ?? 'width=device-width, initial-scale=1.0';

        if (empty($this->image) && ! empty($this->title)) {
            $this->image = route('og-image', ['title' => $this->title]);
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    #[\Override]
    public function render(): View|Closure|string
    {
        return view('seo-meta::components.meta');
    }
}
