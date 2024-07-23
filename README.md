# WPTF

A boilerplate WordPress theme for creating block-based bespoke WordPress sites.

## Features

- **ACF Blocks**: Create ACF blocks with PHP, Twig templating and Tailwind CSS.
- **Gutenberg Blocks**: Create Gutenberg blocks with JavaScript and SCSS.

## Requirements

- PHP 8.3+
- [Composer](https://getcomposer.org/)

## Installation

Go to the `themes` directory and run the following command (obviously replacing `my-theme` with your theme name):

```bash
composer create-project wptf/wptf my-theme
```

## Updating

Update instructions can be found under each new _non-pre_ release on
the [releases page](https://github.com/askonomm/wptf/releases).

## Documentation

### ACF Blocks

You can create ACF blocks by creating a new AcfBaseBlock class in the `src/Blocks/{BlockName}` directory. The class
should extend the `AcfBaseBlock` class and implement the `render` method.

```php
namespace App\Blocks\ExampleAcfBlock;

use Wptf\Core\Blocks\AcfBaseBlock;
use Wptf\Core\View;

class Block extends AcfBaseBlock
{
    public function render(array $block, string $content, bool $is_preview, int $post_id): string
    {
        return (new View(__DIR__))->make('block', [
            'content' => $content
        ]);
    }
}
```

All your logic should be within this class, and the presentation of the block should be rendered using the `View` class,
which renders a Twig template.

### Gutenberg Blocks

To create a new Gutenberg block, go to the `src/Blocks` directory, and run the following command:

```bash
npx @wordpress/create-block@latest example-block
```

### Register Blocks

To register your blocks (i.e. make them available for use), you need to add them in the config file located
at `src/Blocks/config.php`. You can follow
the example set there by default.
