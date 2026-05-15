First-time project analysis. Goal: populate `.claude/project-context/global.md` and `.claude/project-context/indexdb.md`, then seed module stubs — without inventing anything.

Steps:

1. Detect the tech stack from `package.json`, `pyproject.toml`, `go.mod`, `Cargo.toml`, `pom.xml`, or equivalent. Record findings in `.claude/project-context/global.md`. Mark anything ambiguous as `<TBD>`.

2. Identify domains by scanning top-level `src/` folders, route files (`routes/`, `controllers/`, `app/api/`), and DB schema / migrations. Typical domains: `auth`, `user`, `payment`, `subscription`, `video`, `notification`. List only domains with real evidence in the repo.

3. For each detected domain:
   - Add a row in `.claude/project-context/indexdb.md` (keywords + module file + obvious `depends_on`).
   - Create `.claude/project-context/modules/<domain>.md` from `_template.md`.
   - Fill ONLY what is verifiable from code (features, API table, data model). Mark unknowns as `TBD`.

4. Append a `.claude/project-context/changelog.md` entry:
   ```
   ## <today's date>
   - analyze-project: seeded N modules (<list>)
   ```

5. Set `.claude/project-context/memory.md` "Focus" to:
   `Initial analysis complete. Awaiting first task.`

6. Print a summary: detected stack, domains found, files created, and any `TBD` items needing human input.

Hard rules:
- Never guess. If a route handler is unclear, leave its API row as `TBD`.
- Do not delete or overwrite existing context files; skip and report instead.
- Do not start implementing features after this command. Stop and wait.
