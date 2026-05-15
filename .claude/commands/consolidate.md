Consolidate all pending corrections into modules.

Steps:

1. List every file under `.claude/project-context/corrections/**` (excluding `_archive/` and `_template.md`).

2. Group by `module:` field.

3. For each module group:
   a. Sort corrections chronologically (oldest first using the `YYYY-MM-DD_HHMM` in the filename).
   b. Apply each correction to the corresponding `.claude/project-context/modules/<module>.md`.
   c. Resolve conflicts: latest correction wins UNLESS any correction has `manual: true` — then STOP and ask the user how to proceed.
   d. Bump the module's `version` field to the highest `version:` value declared across its corrections.
   e. Set `last_updated:` to today.
   f. Do NOT remove existing functionality unless a correction explicitly says so under `## Changes`.

4. Append a `.claude/project-context/changelog.md` entry at the top:
   ```
   ## <today>
   - <module> (<old-version> → <new-version>): <one-line summary per correction>
   ```

5. Move processed correction files into `.claude/project-context/corrections/_archive/<today>/`. Create the archive directory if it doesn't exist. Preserve the `<module>/` subfolder structure inside the archive.

6. Trim `.claude/project-context/memory.md`:
   - Remove every entry under "Pending corrections" that was just archived.
   - Remove resolved items from "Known issues" and "Active decisions".
   - If memory now exceeds 300 words, summarize aggressively.

7. Print a summary:
   - Modules updated, version before → after
   - Number of corrections archived per module
   - Any conflicts that required manual resolution

Hard rules:
- After consolidation, modules are the source of truth. Memory must NOT contradict modules.
- A correction that introduces an undefined module must first add the module file. If that's missing, abort that correction with a clear error.
- Never silently drop a correction — every input file must end up either applied or in `_archive/` with an explanation.
