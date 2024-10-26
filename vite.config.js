import { defineConfig } from "vite";

export default defineConfig( ({ mode })=> ({
  root: ".",
  build: {
    rollupOptions: {
      input: "./assets/js/main.js", // specify the main.js file here
      // Prevent files from being placed inside a subfolder named "assets"
      output: {
        entryFileNames: '[name]-[hash].js',
        assetFileNames: '[name]-[hash][extname]',
      },
    },
    manifest: true,
    outDir: "./assets/bundle",
    emptyOutDir: true,
  },
  server: {
    port: 3000,
    hot: true,
  }
}));
