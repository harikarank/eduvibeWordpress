# Global Context (always loaded)

> Keep this small and stable. No volatile data. No per-feature details (those go in modules).

## Tech stack

- Type: **WordPress classic theme** (PHP templates, no build step)
- Language: PHP 7.4+ / WordPress template hierarchy
- Frontend: static vendor CSS/JS (Bootstrap, Slick, SAL, Magnific Popup, jQuery) — no bundler, no npm
- Forms: Contact Form 7 plugin (assumed always active)
- Data: WordPress posts + CPT `course` + taxonomy `course_category`
- Text domain: `next-level-academy`

## Layout (IMPORTANT — changed)

- **The repository root IS the theme root.** Drop the whole repo into `wp-content/themes/`.
- Theme files live at root: `functions.php`, `header.php`, `footer.php`, `style.css`, `front-page.php`, `index.php`, `page.php`, `page-about.php`, `page-contact.php`, `single.php`, `single-course.php`, `archive.php`, `archive-course.php`.
- Assets at `assets/` (`css/`, `css/vendor/`, `js/`, `js/vendor/`, `fonts/`, `images/`, `img/`).
- The old nested `next-level-academy/` theme folder and the original static HTML source files (`index.html`, `blog.html`, etc.) have been **removed** — the theme is now standalone.

## Conventions

- Asset URLs: always `NLA_URI . '/assets/...'` (`NLA_URI` = `get_template_directory_uri()`). Root custom CSS = `NLA_URI . '/style.css'`. Never hardcode URLs.
- Constants in `functions.php`: `NLA_VERSION`, `NLA_URI`.
- Helper for course meta: `nla_course_meta($key, $default='')` — never call `get_post_meta()` directly in templates.
- Nav output: `wp_nav_menu()` with `NLA_Nav_Walker` (emits `has-droupdown` / `submenu` classes).
- Brand palette (CSS vars in root `style.css`): `--color-primary:#a53692`, `--color-secondary:#faa831`, `--color-heading/--color-dark:#543874`, `--color-body:#6F6B80`.

## Repo entry points

- Theme bootstrap: `functions.php`
- Homepage: `front-page.php`
- Shared chrome: `header.php`, `footer.php`
- Theme stylesheet header + custom CSS: `style.css` (root)

## Non-negotiables

- Two stylesheets are enqueued: `assets/css/style.css` (`nla-main`, design system) and root `style.css` (`nla-custom`, theme header + CF7 overrides). Keep both wired in `functions.php`.
- After CPT/permalink changes, flush rewrite rules (WP Admin → Settings → Permalinks → Save).
- CF7 CSS must stay scoped under `.rnt-contact-form` — never global.
- Module docs are the source of truth; do NOT edit `modules/*` directly during a task — stage in `corrections/` first.
