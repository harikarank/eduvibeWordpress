# blog

version: 1.1
last_updated: 2026-05-16
depends_on: [wordpress-theme]

## Features
- Blog archive (`archive.php`): grid of posts, 3 columns, with breadcrumb and pagination
- Blog single (`single.php`): full-width centered post (col-lg-10 offset-lg-1), no sidebar
- Category badge, date meta, and "Read More" link on each archive card
- Single post: category + date in flex row, featured image, content, tags, prev/next navigation

## Template: archive.php (blog.html)
- Container: `edu-elements-area edu-section-gap bg-color-white`
- Card class: `edu-blog blog-type-2 radius-small` (no `variation-2`)
- Card structure:
  1. `.thumbnail` → linked featured image
  2. `.status-group` → `eduvibe-status status-05` category link with `icon-price-tag-3-line`
  3. `h5.title` → linked post title
  4. `.blog-card-bottom` → `.blog-meta` (date with `icon-calendar-2-line`) + `.read-more-btn` (`btn-transparent`)
- Pagination: `edu-pagination` ul using `paginate_links()`
- SAL animation delay increments by 50 per card (starts at 150)

## Template: single.php (blog-details.html)
- Layout: `col-lg-10 offset-lg-1` — NO sidebar
- Wrapper: `blog-details-1 style-variation3`
- Sections in order:
  1. `.content-blog-top`: `h4.title` → `.content-status-top` (category badge + date in flex row, `justify-content-between`) → `.thumbnail.block-alignwide` (featured image)
  2. `.blog-main-content`: `the_content()`
  3. `.blog-tag-and-share.mt--50` → `.blog-tag` → `.tag-list.bg-shade` → individual `<a>` tag links
  4. `.blog-pagination` → two columns:
     - Left (`col-lg-6`): `.blog-pagination-list.style-variation-2` → `<i class="ri-arrow-left-s-line">` + `<span>prev post title</span>`
     - Right (`col-lg-6`): `.blog-pagination-list.style-variation-2.next-post` → `<span>next post title</span>` + `<i class="ri-arrow-right-s-line">`
- Category badge: `eduvibe-status status-05 color-primary w-600`, text uppercased
- Date format: `M d, Y` (e.g. "Nov 29, 2022")

## API
| Method | Path | Purpose | Auth |
| ------ | ---- | ------- | ---- |
| GET | `/blog/` | Archive listing | none |
| GET | `/blog/<slug>/` | Single post | none |

## Data model
- Standard WordPress `post` post type
- Categories: standard WordPress taxonomy
- Tags: standard WordPress taxonomy
- Featured image: `medium_large` on archive, `large` on single

## Rules
- archive.php must NOT use `variation-2` on the card class — this was a bug in the first version
- single.php must NOT have a sidebar — original HTML is full-width centered
- Prev/next: use `get_previous_post()` / `get_next_post()` with full title in the span, not excerpt
- Tags section only renders if the post has tags (guarded by `if ($tags)`)
- Pagination only renders if prev or next post exists (guarded by `if ($prev || $next)`)

## Notes
- Blog archive URL depends on WP Settings → Reading; set Posts page to a "Blog" page
- Date format on archive cards: `get_the_date('d M, Y')` → "06 Nov, 2022"
- Date format on single: `get_the_date('M d, Y')` → "Nov 29, 2022"
