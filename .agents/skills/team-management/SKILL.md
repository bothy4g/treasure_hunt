---
name: team-management
description: Team-based auth and membership model for this project — routing scoped by team, membership/invitation tables, and the current-team relationship. Use whenever working on teams, team routes, membership, invitations, or team-scoped permissions.
---

# Team Management

- Auth is team-based: routes are prefixed with `{current_team}`.
- Membership lives in the `team_members` table; pending invitations live in `team_invitations`.
- `User::current_team()` gives the active team relationship — prefer this over querying membership tables directly in components/controllers.
- Verify these table names and relationships against the live schema (Boost's `database-schema` MCP tool) before writing new queries or migrations that touch teams — this file records intent, not a guaranteed-current schema.
