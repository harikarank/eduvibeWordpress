# wordpress-theme

version: 1.2
last_updated: 2026-05-18
depends_on: []

## Features
- Full WordPress theme converted from static HTML (7 pages)
- **Theme root = repository root** — drop the whole repo into `wp-content/themes/` (no longer a nested `next-level-academy/` subfolder)
- Original static HTML sources deleted 2026-05-18; conversion complete, no non-WordPress fallback
- Custom nav walker (`NLA_Nav_Walker`) adds `has-droupdown` / `submenu` classes matching original HTML
- Custom logo support via `add_theme_support('custom-logo')`; site logos (`assets/images/logo/logo.png`, `logo-white.png`) carry Next Level Academy branding
- Two nav menu locations: `primary` (header + mobile popup), `footer`
- Back-to-top SVG progress indicator in footer
- All vendor assets (CSS/JS) enqueued via `functions.php`; jQuery deregistered and re-registered from local vendor copy
- Brand palette in root `style.css` `:root`: `--color-primary:#a53692`, `--color-secondary:#faa831`, `--color-secondary-alt:#FFF6F4`, `--color-tertiary:#FFA41B`, `--color-heading`/`--color-dark`:`#543874`, `--color-body:#6F6B80`

## Template files
> "Source HTML" is historical reference only — the HTML files were deleted 2026-05-18. All template files now live at the repository root.

| File | Source HTML | Purpose |
| ---- | ----------- | ------- |
| `header.php` | All pages (shared) | Logo, desktop nav, mobile popup menu |
| `footer.php` | All pages (shared) | 4-col footer, copyright, `wp_footer()` |
| `front-page.php` | `index.html` | Hero, services, courses carousel, events, testimonials, features, newsletter, latest blog |
| `archive-course.php` | `course.html` | Course grid + pagination |
| `single-course.php` | `course-details.html` | Course detail + enroll sidebar |
| `archive.php` | `blog.html` | Blog card grid + pagination |
| `single.php` | `blog-details.html` | Blog post detail, tags, prev/next |
| `page-about.php` | `about-us.html` | About section + services grid (Template Name: About Us) |
| `page-contact.php` | `contact-us.html` | Contact info cards + CF7 form + Google Map (Template Name: Contact Us) |
| `page.php` | — | Generic page fallback |
| `index.php` | — | WP required fallback |

## API
| Method | Path | Purpose | Auth |
| ------ | ---- | ------- | ---- |
| N/A | — | Theme only; no REST endpoints | none |

## Data model
- Standard WordPress posts (blog)
- CPT `course` (see courses module)
- Nav menus registered: `primary`, `footer`
- Custom logo option via Customizer

## Stylesheets (both enqueued in `functions.php`)
| Handle | File | Purpose |
| ------ | ---- | ------- |
| `nla-main` | `assets/css/style.css` | Design system / theme styles |
| `nla-custom` | root `/style.css` (`NLA_URI . '/style.css'`) | WP theme header + CF7 scoped overrides |

## Rules
- All asset paths use `NLA_URI` constant (= `get_template_directory_uri()`) — never hardcode URLs
- Keep BOTH stylesheet enqueues (`nla-main` and `nla-custom`) wired in `functions.php`
- Never edit `modules/` directly; all changes go to `corrections/` first
- Page templates (`page-about.php`, `page-contact.php`) must be assigned in WP Admin → Pages → Page Attributes → Template
- Root `style.css` theme header is required by WordPress; custom CSS (CF7 overrides, brand palette) also lives there

## Notes
- `assets/` lives at repo root: `css/`, `css/vendor/`, `js/`, `js/vendor/`, `fonts/`, `images/`, `img/`
- `assets/img/` is a newer dir alongside legacy `assets/images/`; currently only `Next-Level-Academy-process-steps.jpg`
- Vendor JS load order: jQuery → modernizr (head) → all others deferred to footer
- Mobile menu popup driven by `assets/js/main.js` (existing JS, unchanged)
