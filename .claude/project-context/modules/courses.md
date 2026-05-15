# courses

version: 1.1
last_updated: 2026-05-16
depends_on: [wordpress-theme]

## Features
- Custom Post Type `course` with archive and single templates
- Custom taxonomy `course_category` (hierarchical)
- Course meta fields stored as post meta
- Archive grid: 3 columns with hover card action overlay
- Single page: course detail + enroll sidebar card
- Homepage carousel: latest courses in Slick slider

## CPT registration (`functions.php`)
- Post type slug: `courses` → archive at `/courses/`
- Supports: `title`, `editor`, `thumbnail`, `excerpt`, `custom-fields`
- `show_in_rest: true` (Gutenberg compatible)
- Menu icon: `dashicons-welcome-learn-more`
- Taxonomy slug: `course-category`

## Post meta fields
| Key | Purpose | Helper |
| --- | ------- | ------ |
| `lessons` | e.g. "29 Lessons" | `nla_course_meta('lessons')` |
| `price` | Current price, e.g. "$29.99" | `nla_course_meta('price')` |
| `old_price` | Strikethrough price | `nla_course_meta('old_price')` |
| `duration` | e.g. "5 Hours" | `nla_course_meta('duration')` |
| `level` | e.g. "Beginner" | `nla_course_meta('level')` |
| `language` | e.g. "English" | `nla_course_meta('language')` |

Helper: `nla_course_meta($key, $default='')` in `functions.php` — returns escaped value or default.

## Template: archive-course.php (course.html)
- Breadcrumb with `post_type_archive_title()`
- Container: `edu-course-area edu-section-gap bg-color-white`
- Card class: `edu-card card-type-3 radius-small`
- Card structure:
  1. `.thumbnail` → linked image + wishlist button + category badge (`eduvibe-status status-03`)
  2. `.content` → `.card-top` (author avatar + lessons meta) → `h6.title` → `.card-bottom` (price-list + star rating)
  3. `.card-hover-action` → hover overlay with description, price, author, "Enroll Now" button
- Fallback thumbnail: `assets/images/course/course-01/course-01.jpg`
- Pagination: `edu-pagination` ul

## Template: single-course.php (course-details.html)
- Breadcrumb: Home → Courses → Course Title
- Layout: `col-xl-8` main + `col-xl-4` sidebar
- Main: category badge, title, excerpt, featured image, `the_content()`
- Sidebar card: price (current + old), "Enroll Now" button, meta list (lessons, duration, level, language)
- Meta icons: `icon-file-list-3-line`, `icon-time-line`, `icon-bar-chart-2-line`, `icon-global-line`

## API
| Method | Path | Purpose | Auth |
| ------ | ---- | ------- | ---- |
| GET | `/courses/` | Course archive | none |
| GET | `/courses/<slug>/` | Single course | none |

## Rules
- Use `nla_course_meta()` helper — never call `get_post_meta()` directly in templates
- Category badge class is `eduvibe-status status-03` (NOT `status-05` which is for blog)
- Wishlist button is UI-only; no backend wishlist functionality implemented
- Star rating in archive is static (5 stars); dynamic rating requires a plugin
- Homepage carousel requires at least 1 published course to render

## Notes
- After registering CPT, go to WP Admin → Settings → Permalinks and click Save to flush rewrite rules
- Enroll Now button in sidebar links to `#` — wire up to payment/LMS plugin as needed
