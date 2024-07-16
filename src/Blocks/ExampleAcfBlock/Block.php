<?php

namespace App\Blocks\ExampleAcfBlock;

use Wptf\Core\Blocks\AcfBaseBlock;
use Wptf\Core\View;

class Block extends AcfBaseBlock
{
    /**
     * Block title
     *
     * @var string $title
     */
    public string $title = 'Example ACF Block';

    /**
     * Block description
     *
     * @var string $description
     */
    public string $description = 'An example block.';

    /**
     * Block icon
     *
     * @var string $icon
     */
    public string $icon = 'admin-comments';

    /**
     * Block category
     *
     * @var string $category
     */
    public string $category = 'widgets';

    /**
     * Block keywords
     *
     * @var array $keywords
     */
    public array $keywords = ['example'];

    /**
     * Block supports
     *
     * @var array $supports
     */
    public array $supports = [
        'anchor' => true
    ];

    /**
     * @param array $block
     * @param string $content
     * @param bool $is_preview
     * @param int $post_id
     * @return string
     * @throws \Exception
     */
    public function render(array $block, string $content, bool $is_preview, int $post_id): string
    {
        return (new View(__DIR__))->make('block', [
            'content' => $content
        ]);
    }

    /**
     * @return void
     */
    public function assets(): void
    {
        // enqueue scripts and styles (no need to enqueue tailwind, that comes automatically)
    }
}