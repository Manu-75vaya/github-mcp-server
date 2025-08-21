# Portfolio Logo Assets

This folder contains a flexible SVG logo system for a personal portfolio:

- `mark.svg`: Standalone abstract mark
- `wordmark.svg`: Mark + text lockup
- `public/favicon.svg`: Simplified mark for small sizes

## Quick use

Embed directly in HTML:

```html
<img src="/assets/logo/mark.svg" alt="Logo" width="128" height="128" />
<img src="/assets/logo/wordmark.svg" alt="Logo wordmark" />
```

Add the favicon to your HTML head:

```html
<link rel="icon" type="image/svg+xml" href="/public/favicon.svg" />
```

## Customize colors

All SVGs use CSS variables with sensible fallbacks. You can override them globally:

```css
:root {
  --logo-bg: transparent;
  --logo-stroke: #18181b;      /* circle stroke (mark) */
  --logo-stroke-width: 8;      /* circle stroke width (mark) */
  --logo-text: #0f172a;        /* wordmark text */
  --logo-accent: #7c3aed;      /* gradient start */
  --logo-accent-2: #22d3ee;    /* gradient end */
}
```

Or per-instance via `style`:

```html
<img src="/assets/logo/mark.svg" style="--logo-accent:#10b981;--logo-accent-2:#06b6d4" />
```

## Edit the name

Open `wordmark.svg` and change the `Your Name` and `Portfolio` text nodes. They use web-safe sans-serif fallbacks.

## Exporting PNGs

Most design tools or browsers can export these SVGs to PNG. Suggested sizes:

- Favicon: 32×32, 48×48
- Social preview: 512×512 (mark), 1600×900 (wordmark on canvas)

## Accessibility

Each SVG includes `<title>` and `<desc>`. Keep them accurate if you modify the assets.

