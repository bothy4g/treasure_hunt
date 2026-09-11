<div class="rounded-lg border border-neutral-300 dark:border-neutral-600 bg-neutral-50 dark:bg-zinc-800 p-4">
    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100 mb-3">Base points</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Action Points:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100"><?php echo e($character->action_points); ?></p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Health Points:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100"><?php echo e($character->health_points); ?></p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Treasure Points:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100"><?php echo e($character->treasure_points); ?></p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Scripture Points:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100"><?php echo e($character->scripture_points); ?></p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Community Points:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100"><?php echo e($character->community_points); ?></p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Skill Points:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100"><?php echo e($character->skill_points); ?></p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Faith Points:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100"><?php echo e($character->faith_points); ?></p>
        </div>
    </div>
</div><?php /**PATH /var/www/html/resources/views/components/character-points.blade.php ENDPATH**/ ?>