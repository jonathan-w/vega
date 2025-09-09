## Vega - a Wordpress theme

**Vega** is a basic WordPress theme built using Tailwind v4 and Laravel Mix.


## Get started

- Run ``export/compose.yaml`` to get local wordpress running
- Clone this repo into ``wp-content/themes`` - ``git clone https://github.com/jonathan-w/vega.git``
- Activate Vega theme
- Install All-in-One WP Migration and import from ``export/localhost-20250909-171657-asksl1zpp0r2.wpress`` (will have to edit .htaccess to allow the large file upload)

## Future considerations

- The theme is close to the design, however a proper review would be good to ensure consistent font sizes/spaces
- Ran a basic lighthouse test but was unable to deep dive into optimizations, which would have included: Ensuring assets are minified, using proper file formats and resized correctly.
- Lazy loading assets, caching and checking if any WP assets can be cleaned out.
- Basic accessibility included but definitely needs another pass to ensure good keyboard/tab navigation and some aria elements
- Many issues with the FSE editor styling which I didn't have time to resolve
- Didn't get chance to convert any elements into Gutenberg blocks
- Basic usage of ACF for the 4 column benefits section only
- Production front end files are included in the git repo but for a real website github actions would take care of this.
- SEO considerations