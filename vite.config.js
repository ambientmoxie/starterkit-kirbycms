import { defineConfig } from "vite";
import dotenv from "dotenv";

dotenv.config();

export default defineConfig({
  root: ".",
  build: {
    rollupOptions: {
      input: "./assets/js/main.js",
      output: {
        entryFileNames: "[name]-[hash].js",
        assetFileNames: "[name]-[hash][extname]",
      },
    },
    manifest: true,
    outDir: "./assets/bundle",
    emptyOutDir: true,
  },
  server: {
    host: true,
    origin: `http://${process.env.VITE_DEV_SERVER_IP}:3000`,
    port: 3000,
    hot: true,
  },
});
