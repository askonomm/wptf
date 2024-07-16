<?php

namespace App\Blocks;

use Wptf\Core\Blocks\AcfBaseBlock;
use Wptf\Core\Response;

class ExampleAcfBlock extends AcfBaseBlock
{
    /**
     * Block title
     *
     * @var string $title
     */
    public string $title = 'Example Block';

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
     * @return Response
     * @throws \Exception
     */
    public function render(array $block, string $content, bool $is_preview, int $post_id): Response
    {
        return Response::view('example-acf', [
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