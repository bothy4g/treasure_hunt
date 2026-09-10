<div class="rounded-lg border border-neutral-300 dark:border-neutral-600 bg-neutral-50 dark:bg-zinc-900 p-4">
    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100 mb-3">Experience</h2>
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Cultural XP:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $character->cultural_xp }}</p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Faith XP:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $character->faith_xp }}</p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Social XP:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $character->social_xp }}</p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Economic XP:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $character->economical_xp }}</p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">General XP:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100">{{ $character->general_xp }}</p>
        </div>
    </div>
</div>