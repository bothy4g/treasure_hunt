<div class="rounded-xl border border-neutral-300 dark:border-neutral-600 bg-white dark:bg-zinc-900 p-6 shadow-lg">
    <div class="space-y-4">
        <div class="flex items-center justify-between">
            <span class="font-medium text-neutral-900 dark:text-neutral-100">
                <?php echo e(__('Remaining points')); ?>: <?php echo e($remainingPoints); ?> / <?php echo e(\App\Models\Character::MAX_DISTRIBUTABLE_POINTS); ?>

            </span>
        </div>
        

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $character->getCharacterAttributes(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attribute): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <div class="flex items-center justify-between">
                <span class="font-medium text-neutral-900 dark:text-neutral-100">
                    <?php echo e(ucfirst(__($attribute))); ?>

                </span>

                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('quantity-input', ['id' => 'character-' . $attribute,'name' => ''.e($attribute).'','label' => '','min' => 1,'max' => 20,'value' => $character->$attribute ?? 1,'remaining-points' => $remainingPoints,'attributes-readonly' => $attributesReadonly]);

$__keyOuter = $__key ?? null;

$__key = 'input-'.e($attribute).'';
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-2195403986-0', $__key);

$__html = app('livewire')->mount($__name, $__params, $__key, $__componentSlots);

echo $__html;

unset($__html);
unset($__key);
$__key = $__keyOuter;
unset($__keyOuter);
unset($__name);
unset($__params);
unset($__componentSlots);
unset($__split);
?>
            </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$attributesReadonly && $remainingPoints == 0): ?>
            <div class="flex justify-center">
                <button
                    wire:click="saveGeneratedAt()"
                    type="button"
                    <?php if($remainingPoints > 0): echo 'disabled'; endif; ?>
                    class="px-4 py-2 <?php echo e($remainingPoints > 0 ? 'bg-gray-400 cursor-not-allowed' : 'bg-blue-500 hover:bg-blue-600'); ?> text-white rounded transition-colors"
                >
                    <?php echo e(__('Save')); ?>

                </button> 
            </div>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    </div>
</div><?php /**PATH /var/www/html/resources/views/livewire/character-attributes.blade.php ENDPATH**/ ?>