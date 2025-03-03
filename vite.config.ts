import { defineConfig } from 'vite'
import { resolve } from 'path'
import kirby from 'vite-plugin-kirby'

export default defineConfig(({ mode }) => {
  return {
    root: 'src',
    base: mode === 'development' ? '/' : '/dist/',
    build: {
      outDir: resolve(process.cwd(), 'public/dist'),
      emptyOutDir: true,
      rollupOptions: {
        input: [
          resolve(process.cwd(), 'src/main.ts'),
          resolve(process.cwd(), 'src/main.css'),
        ],
      },
    },
    server: {
      cors: true,
    },
    plugins: [
      kirby({
        watch: [
          '../site/(templates|snippets|controllers|models|layouts)/**/*.php',
          '../content/**/*',
        ],
      }),
    ],
  }
})
