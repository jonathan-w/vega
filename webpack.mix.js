const mix = require('laravel-mix');

// Public path is /dist
mix.setPublicPath('dist');

// JS entry -> dist/js/main.js (with version hash in production)
mix.js('src/main.js', 'js/main.js');

// Source maps in dev
if (!mix.inProduction()) {
  mix.sourceMaps();
}

// Version hashed files in prod (generates mix-manifest.json)
if (mix.inProduction()) {
  mix.version();
}

// Enable hot reloading (webpack-dev-server). Run `npm run hot`.
// Mix writes a 'dist/hot' file with the dev server URL; PHP reads it.
mix.options({
  hmrOptions: {
    host: 'localhost',
    port: 8080
  }
});
