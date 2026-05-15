# auth

version: 1.0
last_updated: 2026-04-30
depends_on: [user]

## Features
- Email + password signup
- Login → access token (15 min) + refresh token (30 days)
- Refresh token rotation (single-use)
- Logout invalidates the refresh token

## API
| Method | Path                    | Purpose                | Auth          |
| ------ | ----------------------- | ---------------------- | ------------- |
| POST   | /api/v1/auth/signup     | Create account         | none          |
| POST   | /api/v1/auth/login      | Issue tokens           | none          |
| POST   | /api/v1/auth/refresh    | Rotate access token    | refresh token |
| POST   | /api/v1/auth/logout     | Invalidate refresh     | refresh token |

## Data model
- `RefreshToken { id, userId, hash, expiresAt, revokedAt, replacedById }`

## Rules
- Passwords: bcrypt, cost 12
- Refresh tokens: single-use; on refresh, revoke old + issue new with `replacedById`
- Tokens delivered as `httpOnly`, `secure`, `sameSite=lax` cookies
- Rate limit `/login` and `/refresh` at 10 / minute / IP

## Notes
- This is an example. Replace or delete before shipping real work.
