# Memory — Active Working State

> ≤ 300 words. Current focus only. Remove items the moment they are resolved or merged.

## Focus
- WordPress theme conversion complete for Next Level Academy (education site)

## Active decisions
- CF7 assumed always active on the site; no native form fallback maintained
- Blog single page is full-width (col-lg-10 offset-lg-1) — no sidebar, matches original HTML
- All CF7 CSS scoped under `.rnt-contact-form` to avoid global style bleed

## Constraints
- Flush WP permalinks after activating theme (CPT requires it)
- CF7 form must be created manually in Admin with title "Contact Form"
- Page templates (About Us, Contact Us) must be assigned in Admin → Pages → Attributes

## Known issues
- (none)

