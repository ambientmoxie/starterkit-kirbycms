import { defineConfig } from 'vite';

export default defineConfig({
  root: 'src',
  build: {
    rollupOptions: {
      input: './assets/js/main.js', // specify the main.js file here
    },
    outDir: '../assets/bundle',
    emptyOutDir: true
  },
  server: {
    port: 3000,
    hot: true
  }
});
