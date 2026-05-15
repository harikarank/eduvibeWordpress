# Project Context System (auto-loaded by Claude Code)

This repo uses a modular, indexed context system. Read this fully on every session start.

## 📁 Layout

- `.claude/project-context/global.md` — always-loaded baseline (tech stack, conventions). Keep small.
- `.claude/project-context/indexdb.md` — keyword → module router; defines `depends_on`.
- `.claude/project-context/memory.md` — short-term working state (≤ 300 words).
- `.claude/project-context/changelog.md` — append-only history.
- `.claude/project-context/modules/*.md` — source of truth (one file per domain).
- `.claude/project-context/corrections/<module>/*.md` — pending, staged changes (NOT applied yet).
- `.claude/project-context/prompts/*.md` — task templates.

## 🔁 Source priority (when info conflicts)

1. `memory.md` (active state)
2. `corrections/` (pending)
3. `modules/` (truth)
4. `global.md`

## 🛡️ Hard rules — no hallucination

- Do NOT invent APIs, fields, endpoints, schemas, or business logic that are not in the loaded modules.
- If information is missing, reply: `Missing: <what>` and ask. Never guess.
- Do NOT edit `modules/*` directly during a task. All changes go to `corrections/` first.
- Do NOT load all modules. Use `indexdb.md` to pick only relevant ones plus their `depends_on`.
- Keep `memory.md` under 300 words. No completed features. No duplication of module data.

## ⚙️ Per-request workflow

1. **Read**: `.claude/project-context/global.md` + `.claude/project-context/memory.md` + `.claude/project-context/indexdb.md` → load matching modules + transitive deps + any files under `.claude/project-context/corrections/<module>/`.
2. **Reason**: only on loaded context. Gap → ask, don't fabricate.
3. **Stage changes**: create a file in `.claude/project-context/corrections/<module>/YYYY-MM-DD_HHMM_ver_N.md` using the template. Update `.claude/project-context/memory.md`.
4. **Consolidate** (only on `/consolidate`): merge corrections into modules, bump versions, append changelog, archive corrections, prune memory.

## 🚀 Slash commands available

- `/analyze-project` — first-time scan; populate `.claude/project-context/global.md`, `indexdb.md`, seed module stubs.
- `/load-context <keywords>` — show what would be loaded; verify routing.
- `/add-correction <module>` — create a properly named correction file.
- `/consolidate` — merge corrections → modules, bump versions, archive.
- `/push-to-dev "message"` — `git add .` + `git commit` + `git push origin dev`.
- `/push-to-main "message"` — `git add .` + `git commit` + `git push origin main`.

## ❌ Forbidden

- Editing modules during fixes.
- Skipping the corrections layer.
- Letting `memory.md` bloat.
- Loading the entire context tree.
- Generating code from assumptions.
