# contact-form

version: 1.1
last_updated: 2026-05-16
depends_on: [wordpress-theme]

## Features
- Contact Form 7 (CF7) integration on `page-contact.php`
- CF7 shortcode rendered inside `.rnt-contact-form.rwt-dynamic-form` wrapper div
- All CF7 default styles overridden by scoped CSS in `style.css` to exactly match original HTML design
- Google Map iframe embedded below form (Perth, Australia)
- Four contact info cards: Website, Phone, Email, Location

## CF7 Form field setup (create in WP Admin → Contact → Add New, title: "Contact Form")
```
[text* your-name placeholder "Name*"]
[email* your-email placeholder "Email*"]
[tel your-tel placeholder "Phone"]
[text your-subject placeholder "Subject"]
[textarea* your-message placeholder "Your Message"]
[submit "Submit Now"]
```
- Shortcode used: `[contact-form-7 title="Contact Form"]`
- To switch to ID-based: `[contact-form-7 id="123"]`

## API
| Method | Path | Purpose | Auth |
| ------ | ---- | ------- | ---- |
| POST | CF7 internal (AJAX) | Form submission | none |

## Data model
- No custom data model; CF7 handles storage/email routing
- CF7 form matched by `title="Contact Form"` — title must match exactly in WP Admin

## CSS overrides (all scoped to `.rnt-contact-form`)
| CF7 element | Styled to match |
| ----------- | --------------- |
| `.wpcf7-form-control-wrap` | `.form-group` block + 20px margin-bottom |
| `input[type="text/email/tel"]` | `height:60px`, `bg:#F5F5F5`, `border-radius:5px`, `padding:0 30px` |
| `textarea` | `min-height:180px`, `padding:17px 30px`, same bg/border |
| focus state | `border-color: var(--color-primary)` |
| `.wpcf7-submit` | Full `edu-btn` style — primary colour, `height:60px`, bold, `width:100%` |
| `.wpcf7-spinner` | `display:none` |
| `.wpcf7-not-valid` | `border-color: #e74c3c` |
| `.wpcf7-not-valid-tip` | 13px red text below field |
| `.wpcf7-response-output` | Green banner (sent) / red banner (failed/invalid/spam) |

## Rules
- Never apply CF7 CSS globally — all selectors must be prefixed with `.rnt-contact-form`
- Do not use CF7's built-in styling plugin — theme CSS handles everything
- CF7 spinner is hidden; submit button disabled state (`opacity:0.7`) provides loading feedback

## Notes
- `wpcf7` function check removed — CF7 is assumed to always be active on this site
- Map src targets Perth, Australia; update `src` in `page-contact.php` if location changes
