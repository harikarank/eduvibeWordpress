# wordpress-theme

version: 1.1
last_updated: 2026-05-16
depends_on: []

## Features
- Full WordPress theme converted from static HTML (7 pages)
- Theme folder: `next-level-academy/` — drop into `wp-content/themes/`
- Custom nav walker (`NLA_Nav_Walker`) adds `has-droupdown` / `submenu` classes matching original HTML
- Custom logo support via `add_theme_support('custom-logo')`
- Two nav menu locations: `primary` (header + mobile popup), `footer`
- Back-to-top SVG progress indicator in footer
- All vendor assets (CSS/JS) enqueued via `functions.php`; jQuery deregistered and re-registered from local vendor copy

## Template files
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

## Rules
- All asset paths use `NLA_URI` constant (= `get_template_directory_uri()`) — never hardcode URLs
- Never edit `modules/` directly; all changes go to `corrections/` first
- Page templates (`page-about.php`, `page-contact.php`) must be assigned in WP Admin → Pages → Page Attributes → Template
- `style.css` theme header is required by WordPress; actual custom CSS also lives there (CF7 overrides, etc.)

## Notes
- `assets/` folder is copied into the theme root (mirrors original HTML `assets/` structure)
- Vendor JS load order: jQuery → modernizr (head) → all others deferred to footer
- Mobile menu popup driven by `assets/js/main.js` (existing JS, unchanged)
