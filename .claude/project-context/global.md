# Global Context (always loaded)

> Keep this small and stable. No volatile data. No per-feature details (those go in modules).

## Tech stack

- Frontend: <e.g. React 18 + TypeScript + Vite>
- Backend: <e.g. Node.js 20 + Express>
- Database: <e.g. PostgreSQL 15>
- Cache / Queue: <e.g. Redis>
- Auth: <e.g. JWT access + refresh, httpOnly cookies>

## Conventions

- API base path: `/api/v1`
- Error format: `{ error: { code: string, message: string } }`
- Dates: ISO 8601, UTC
- IDs: UUID v4 unless noted
- Lint / format: <e.g. ESLint + Prettier; pre-commit hook required>

## Repo entry points

- Backend: `<src/server.ts>`
- Frontend: `<src/main.tsx>`
- DB migrations: `<migrations/>`

## Non-negotiables

- All endpoints must have auth declared (`none` or method).
- All breaking changes require a correction with `type: refactor` and a migration note.
