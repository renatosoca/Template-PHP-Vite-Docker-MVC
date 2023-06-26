// vite.config.js
import { defineConfig, splitVendorChunkPlugin } from "vite";
import liveReload from "vite-plugin-live-reload";
import path from "path";

export default defineConfig({
    plugins: [
        liveReload([path.resolve(__dirname, "app/views/**/*.php")]),
        splitVendorChunkPlugin(),
    ],
    root: "src",
    base: "/",
    build: {
        outDir: path.resolve(__dirname, "public", "dist"),
        emptyOutDir: true,

        // emit manifest so PHP can find the hashed files
        manifest: true,

        // assetsDir: "build"
        rollupOptions: {
            input: path.resolve(__dirname, "src", "main.ts"),
        },
    },
    server: {
        // we need a strict port to match on PHP side
        // change freely, but update on PHP to match the same port
        // tip: choose a different port per project to run them at the same time
        strictPort: true,
        port: 4554,
        host: true,
        watch: {
            usePolling: true,
        },
    },
});
