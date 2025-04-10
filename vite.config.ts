import { defineConfig } from 'vite'
import { resolve } from 'path'
import laravel from 'laravel-vite-plugin'

export default defineConfig(({ mode }) => {
  return {
    base: mode === 'development' ? '/' : '/dist/',
    build: {
      outDir: resolve(__dirname, 'public/dist'),
      emptyOutDir: true,
      manifest: 'manifest.json',
    },
    server: {
      host: '0.0.0.0',
      port: 5173,
      strictPort: true,
      origin: `${process.env.DDEV_PRIMARY_URL?.replace(/:\d+$/, '')}:5173`,
      cors: {
        origin: /https?:\/\/([A-Za-z0-9\-\.]+)?(\.ddev\.site)(?::\d+)?$/,
      },
    },
    plugins: [
      laravel({
        input: ['src/main.css', 'src/main.ts'],
        refresh: [
          '../site/(templates|snippets|controllers|models|layouts)/**/*.php',
          '../content/**/*',
        ],
        publicDirectory: './public',
      }),
    ],
  }
})
