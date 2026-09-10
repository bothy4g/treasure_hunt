<div class="rounded-lg border border-neutral-300 dark:border-neutral-600 bg-neutral-50 dark:bg-zinc-800 p-4">
    <h2 class="text-lg font-semibold text-neutral-900 dark:text-neutral-100 mb-3">Temptation Resistance</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Cultural Resistance:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100"><?php echo e($character->cultural_temptation_resistance); ?></p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Faith Resistance:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100"><?php echo e($character->faith_temptation_resistance); ?></p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Social Resistance:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100"><?php echo e($character->social_temptation_resistance); ?></p>
        </div>
        <div>
            <span class="text-sm text-neutral-600 dark:text-neutral-400">Economic Resistance:</span>
            <p class="font-medium text-neutral-900 dark:text-neutral-100"><?php echo e($character->economical_temptation_resistance); ?></p>
        </div>
    </div>
</div><?php /**PATH /var/www/html/resources/views/components/temptation-resistance.blade.php ENDPATH**/ ?>