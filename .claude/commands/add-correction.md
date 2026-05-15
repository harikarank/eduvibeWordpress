Create a correction file for module: $ARGUMENTS

Steps:

1. Verify `.claude/project-context/modules/$ARGUMENTS.md` exists.
   - If it does not exist, ASK the user whether to create the module first. Do NOT auto-create it.

2. Read the module's current `version` field.

3. Compute the correction path:
   `.claude/project-context/corrections/$ARGUMENTS/<YYYY-MM-DD_HHMM>_ver_<N>.md`
   where:
   - `YYYY-MM-DD_HHMM` is the current local time
   - `N` = (count of existing files in `corrections/$ARGUMENTS/` that aren't archived) + 1

4. Create the directory `.claude/project-context/corrections/$ARGUMENTS/` if missing.

5. Write the correction file using the shape in `.claude/project-context/corrections/_template.md`:
   - `module:` = $ARGUMENTS
   - `version:` = next module version (e.g. 1.0 → 1.1 for bugfix, 2.0 for breaking refactor)
   - `date:` = today
   - Fill `## Changes`, `## Impact`, `## Validation`, `## Rollback` from the conversation so far. If any section has no information yet, write `TBD — needs input` and ask the user.

6. Append a one-line reference under `memory.md` → "Pending corrections":
   `- corrections/$ARGUMENTS/<filename> — <short summary>`

7. Print the path created and the resolved version bump.

Hard rules:
- Never edit `.claude/project-context/modules/$ARGUMENTS.md` itself in this command.
- Never invent API surface, fields, or behavior that isn't already in the loaded module + this conversation.
