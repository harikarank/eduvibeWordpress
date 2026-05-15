Show what would be loaded for the request: $ARGUMENTS

Steps:

1. Read `.claude/project-context/indexdb.md`. Match keywords from "$ARGUMENTS" against the keyword column (case-insensitive, substring match).

2. Resolve all `depends_on` transitively until no new modules are added.

3. Read these files (and only these): `.claude/project-context/global.md`, `.claude/project-context/memory.md`, the matched module files, their dependency module files, and any files under `.claude/project-context/corrections/<each-module>/`.

4. Print a clear report:
   - Matched keywords
   - Modules loaded (direct vs via dependency)
   - Pending corrections per module (with paths)
   - Files NOT loaded (so the user can confirm nothing is missing)

5. Do NOT answer the original request. This command is diagnostic only.

If no module matches: print `Module not defined for: $ARGUMENTS` and suggest a module name + keywords to add to `indexdb.md`.
