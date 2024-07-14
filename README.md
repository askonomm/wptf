# WPTF

A thin PHP framework for building bespoke WordPress themes.

## Features

- **Modern PHP**: Utilizes current PHP practices for WordPress theme development.
- **Logic/Presentation Separation**: Enhances code maintainability by separating logic from presentation.
- **Twig Templates**: Employs Twig for flexible, reusable view templates.
- **ORM and Active Record**: Includes a simple ORM and Active Record implementation for data manipulation.
- **Routing Control**: Offers customizable routing for unique routes and endpoints.
- **ACF Blocks**: Supports ACF blocks for easy custom block creation.
- **Tailwind CSS**: Integrates Tailwind for efficient, attractive designs.

## Requirements

- PHP 8.3+
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org) (used only to compile Tailwind)

## Installation

Go to the `themes` directory and run the following command (obviously replacing `my-theme` with your theme name):

```bash
composer create-project wptf/wptf my-theme --no-dev
```

## Updating

Update instructions can be found under each new _non-pre_ release on
the [releases page](https://github.com/askonomm/wptf/releases).

## Documentation

To be written. For now, please refer to the codebase.