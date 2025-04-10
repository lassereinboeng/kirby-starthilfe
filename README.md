# Kirby Starthilfe

This is my personal template for building websites with Kirby CMS. It's built on top of the Kirby's official "plainkit" but includes some more opinionated conveniences.

## Getting started

Recently I had to switch a lot between Laravel Herd and DDEV, so I decided to switch all my local PHP based projects to DDEV to avoid conflicts and switching in my local setup (Herd and DDEV don't like to run in parallel unfortunately). Also it's quite nice to have Mailpit available out of the box.

If you want to use this template, you can do so by running:

```bash
ddev start
ddev composer install
ddev exec pnpm dev
ddev exec pnpm build
ddev describe # lists all URLs
```

## Features

- ✅ DDEV out of the box setup (PHP 8.3, Apache FPM, Corepack enabled)
- ✅ Public folder setup with accounts etc. in a storage folder to increase security
- ✅ Centralized media folder with image, icon, document and video types and accompanying fields
- ✅ Vite as build tool and dev server via `lukaskleinschmidt/kirby-laravel-vite` and `laravel-vite-plugin`
- ✅ TypeScript support
- ✅ Tailwind CSS v4
- ✅ Typical basic fields to extend from
- ✅ Config for different environments with .env files via `beebmx/kirby-env`
- ✅ Kirby CLI installed (mainly for `make:*` commands in development)
- ✅ Backups via `sylvainjule/backups` and `bnomei/kirby3-janitor`
- ✅ Redirects via `distantnative/retour-for-kirby`
- ✅ SEO via `tobimori/kirby-seo`
- ✅ Support for Ray debugging via `genxbe/kirby3-ray`
- ✅ Prettier code formatting (frontend assets)
- ✅ PHP formatting with Laravel Pint (following Kirby's core code style)
