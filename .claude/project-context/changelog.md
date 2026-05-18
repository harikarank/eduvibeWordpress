# Changelog

> Append-only. Newest entry at top. One section per consolidation date.

## 2026-05-18
- wordpress-theme (1.1 → 1.2): theme relocated from `next-level-academy/` subfolder to repo root; static HTML sources deleted; brand palette locked (`#a53692`/`#faa831`/`#543874`); dual stylesheet enqueue documented (`nla-main` + `nla-custom`); `assets/img/` added; logos rebranded — affects blog/courses/contact-form (file location only, content unchanged)

## 2026-05-16
- wordpress-theme (1.0 → 1.1): initial full theme conversion from 7 HTML pages — header/footer, nav walker, all page templates, CPT hooks, asset enqueueing
- contact-form (1.0 → 1.1): CF7 integration with scoped CSS overrides preserving original form design
- blog (1.0 → 1.1): bugfix — corrected archive card structure (`edu-elements-area`, `blog-type-2 radius-small`, `blog-card-bottom`), removed sidebar from single, fixed prev/next to `blog-pagination-list style-variation-2` pattern
- courses (1.0 → 1.1): CPT `course` + taxonomy `course_category` registration, archive/single templates, `nla_course_meta()` helper, homepage Slick carousel

<!--
## YYYY-MM-DD
- auth (1.0 → 1.1): added refresh token rotation
- payment (1.2 → 1.3): fixed webhook idempotency
-->
