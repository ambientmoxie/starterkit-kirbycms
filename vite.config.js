import { defineConfig } from "vite";
import dotenv from "dotenv";

dotenv.config();

export default defineConfig({
  root: ".",
  build: {
    rollupOptions: {
      input: "./assets/js/main.js", // specify the main.js file here
      // Prevent files from being placed inside a subfolder named "assets"
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
    host: true, // Allows access from other devices on the network
    origin: `http://${process.env.VITE_DEV_SERVER_IP}:3000`, // Use the IP from the environment variable
    port: 3000,
    hot: true,
  },
});
