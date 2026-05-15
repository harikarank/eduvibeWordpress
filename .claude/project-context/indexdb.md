# Index — Keyword → Module Router

> Always consult before loading modules. Load matched module(s) + every entry in `depends_on`. Do not load others. If no entry matches, reply `Module not defined for: <keyword>` and suggest creating one.

## Map

| Keywords (any match, lowercase) | Module file        | Depends on         |
| ------------------------------- | ------------------ | ------------------ |
| auth, login, logout, signup, jwt, session, password, token, refresh-token | `auth.md`         | `user`             |
| user, profile, account, role, permission, rbac                            | `user.md`         | —                  |
| subscription, plan, tier, billing-cycle, upgrade, downgrade               | `subscription.md` | `user`, `payment`  |
| payment, checkout, invoice, refund, stripe, razorpay, webhook             | `payment.md`      | `user`             |
| video, stream, upload, transcode, playback, hls                           | `video.md`        | `user`             |

> Replace the rows above with your own modules after running `/analyze-project`.

## Maintenance rules

- Update this file whenever a module is added, renamed, or removed.
- Keywords must be specific enough to avoid cross-firing across unrelated modules.
- `depends_on` is transitive — Claude resolves the full chain automatically.
- If two modules share a keyword, narrow the keyword in one of them.
