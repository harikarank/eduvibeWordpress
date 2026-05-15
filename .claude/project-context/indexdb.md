# Index — Keyword → Module Router

> Always consult before loading modules. Load matched module(s) + every entry in `depends_on`. Do not load others. If no entry matches, reply `Module not defined for: <keyword>` and suggest creating one.

## Map

| Keywords (any match, lowercase) | Module file        | Depends on         |
| ------------------------------- | ------------------ | ------------------ |
| theme, template, header, footer, functions, enqueue, nav, menu, walker, front-page, page, archive, single, breadcrumb, assets | `wordpress-theme.md` | — |
| contact, form, cf7, contact-form-7, wpcf7, submit, map, email, phone | `contact-form.md` | `wordpress-theme` |
| blog, post, archive, listing, card, tag, prev, next, pagination, single-post, blog-details | `blog.md` | `wordpress-theme` |
| course, courses, cpt, course-category, taxonomy, lessons, price, enroll, carousel, slick | `courses.md` | `wordpress-theme` |

## Maintenance rules

- Update this file whenever a module is added, renamed, or removed.
- Keywords must be specific enough to avoid cross-firing across unrelated modules.
- `depends_on` is transitive — Claude resolves the full chain automatically.
- If two modules share a keyword, narrow the keyword in one of them.
