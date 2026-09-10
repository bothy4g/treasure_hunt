<?php # [BlazeFolded]:{flux::label}:{/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/label.blade.php}:{1787062569} ?>
<?php # [BlazeFolded]:{flux::button}:{/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/button/index.blade.php}:{1787062569} ?>
<?php # [BlazeFolded]:{flux::button}:{/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/button/index.blade.php}:{1787062569} ?>
<?php # [BlazeFolded]:{flux::input.group}:{/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/input/group/index.blade.php}:{1787062569} ?>
<?php # [BlazeFolded]:{flux::field}:{/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/field.blade.php}:{1787062569} ?>
<?php
use Flux\Flux;
use Livewire\Attributes\Reactive;
use Livewire\Component;
?>

<?php ob_start(); ?><ui-field class="min-w-0 [&amp;:not(:has([data-flux-field])):has([data-flux-control][disabled])&gt;[data-flux-label]]:opacity-50 [&amp;:has(&gt;[data-flux-radio-group][disabled])&gt;[data-flux-label]]:opacity-50 [&amp;:has(&gt;[data-flux-checkbox-group][disabled])&gt;[data-flux-label]]:opacity-50 block *:data-flux-label:mb-3 [&amp;&gt;[data-flux-label]:has(+[data-flux-description])]:mb-2 [&amp;&gt;[data-flux-label]+[data-flux-description]]:mt-0 [&amp;&gt;[data-flux-label]+[data-flux-description]]:mb-3 [&amp;&gt;[data-flux-description]:first-child:has(+*)]:mb-3 [&amp;&gt;*:not([data-flux-label])+[data-flux-description]]:mt-3" data-flux-field>
    <?php ob_start(); ?>
    <?php ob_start(); ?><ui-label class="inline-flex items-center text-sm font-medium  [:where(&amp;)]:text-zinc-800 [:where(&amp;)]:dark:text-white [&amp;:has([data-flux-label-trailing])]:flex" for="<?php echo e($id); ?>" data-flux-label>
    <?php ob_start(); ?><?php echo e($label); ?><?php echo trim(ob_get_clean()); ?>


    
    
    </ui-label>
<?php echo ltrim(ob_get_clean()); ?>

    <?php ob_start(); ?><div class="w-full flex *:data-flux-input:grow [&amp;&gt;[data-flux-input]:last-child:not(:first-child)&gt;[data-flux-group-target]:not([data-invalid])]:border-s-0 [&amp;&gt;[data-flux-input]:not(:first-child):not(:last-child)&gt;[data-flux-group-target]:not([data-invalid])]:border-s-0 [&amp;&gt;[data-flux-input]:has(+[data-flux-input-group-suffix])&gt;[data-flux-group-target]:not([data-invalid])]:border-e-0 [&amp;&gt;*:last-child:not(:first-child)&gt;[data-flux-group-target]:not([data-invalid])]:border-s-0 [&amp;&gt;*:not(:first-child):not(:last-child)&gt;[data-flux-group-target]:not([data-invalid])]:border-s-0 [&amp;&gt;*:has(+[data-flux-input-group-suffix])&gt;[data-flux-group-target]:not([data-invalid])]:border-e-0 [&amp;&gt;[data-flux-group-target]:last-child:not(:first-child)]:border-s-0 [&amp;&gt;[data-flux-group-target]:not(:first-child):not(:last-child)]:border-s-0 [&amp;&gt;[data-flux-group-target]:has(+[data-flux-input-group-suffix])]:border-e-0 [&amp;&gt;[data-flux-group-target]:not(:first-child):not(:last-child)]:rounded-none [&amp;&gt;[data-flux-group-target]:first-child:not(:last-child)]:rounded-e-none [&amp;&gt;[data-flux-group-target]:last-child:not(:first-child)]:rounded-s-none [&amp;&gt;*:not(:first-child):not(:last-child):not(:only-child)&gt;[data-flux-group-target]]:rounded-none [&amp;&gt;*:first-child:not(:last-child)&gt;[data-flux-group-target]]:rounded-e-none [&amp;&gt;*:last-child:not(:first-child)&gt;[data-flux-group-target]]:rounded-s-none [&amp;&gt;*:not(:first-child):not(:last-child):not(:only-child)&gt;[data-flux-input]&gt;[data-flux-group-target]]:rounded-none [&amp;&gt;*:first-child:not(:last-child)&gt;[data-flux-input]&gt;[data-flux-group-target]]:rounded-e-none [&amp;&gt;*:last-child:not(:first-child)&gt;[data-flux-input]&gt;[data-flux-group-target]]:rounded-s-none [&amp;&gt;*:not(:first-child):not(:last-child):not(:only-child)&gt;:is([data-flux-tooltip],ui-time-picker-trigger)&gt;[data-flux-group-target]]:rounded-none [&amp;&gt;*:first-child:not(:last-child)&gt;:is([data-flux-tooltip],ui-time-picker-trigger)&gt;[data-flux-group-target]]:rounded-e-none [&amp;&gt;*:last-child:not(:first-child)&gt;:is([data-flux-tooltip],ui-time-picker-trigger)&gt;[data-flux-group-target]]:rounded-s-none [&amp;&gt;*:last-child:not(:first-child)&gt;:is([data-flux-tooltip],ui-time-picker-trigger)&gt;[data-flux-group-target]:not([data-invalid])]:border-s-0 [&amp;&gt;*:not(:first-child):not(:last-child)&gt;:is([data-flux-tooltip],ui-time-picker-trigger)&gt;[data-flux-group-target]:not([data-invalid])]:border-s-0 [&amp;&gt;*:has(+[data-flux-input-group-suffix])&gt;:is([data-flux-tooltip],ui-time-picker-trigger)&gt;[data-flux-group-target]:not([data-invalid])]:border-e-0" data-flux-input-group>
        <?php ob_start(); ?>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$attributesReadonly): ?>
            <?php ob_start(); ?><button type="button" class="relative items-center font-medium justify-center whitespace-nowrap disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none justify-center h-10 text-sm rounded-lg gap-2 w-10 inline-flex  bg-white hover:bg-zinc-50 dark:bg-zinc-700 dark:hover:bg-zinc-600/75 text-zinc-800 dark:text-white border border-zinc-200 hover:border-zinc-200 disabled:border-zinc-200 border-b-zinc-300/80 dark:border-zinc-600 dark:hover:border-zinc-600 dark:disabled:border-zinc-600 shadow-xs [[data-flux-button-group]_&amp;]:border-s-0 [:is([data-flux-button-group]&gt;&amp;:first-child,_[data-flux-button-group]_:first-child&gt;&amp;)]:border-s-[1px] *:transition-opacity [&amp;[data-loading]&gt;:not([data-flux-loading-indicator])]:opacity-0 [&amp;[data-flux-loading]&gt;:not([data-flux-loading-indicator])]:opacity-0 [&amp;[data-loading]&gt;[data-flux-loading-indicator]]:opacity-100 [&amp;[data-flux-loading]&gt;[data-flux-loading-indicator]]:opacity-100 data-loading:pointer-events-none data-flux-loading:pointer-events-none" data-flux-button="data-flux-button" data-flux-group-target="data-flux-group-target" wire:target="decrementValue" wire:loading.attr="data-flux-loading" wire:click="decrementValue" <?php if (($__blazeAttr = $value <= $min || $attributesReadonly) !== false && !is_null($__blazeAttr)): ?>disabled="<?php echo e($__blazeAttr === true ? 'disabled' : $__blazeAttr); ?>"<?php endif; unset($__blazeAttr); ?>>
        <div class="absolute inset-0 flex items-center justify-center opacity-0" data-flux-loading-indicator>
                <svg class="shrink-0 [:where(&amp;)]:size-5 animate-spin" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" data-slot="icon">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
</svg>
                    </div>
        
                    <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M4 10a.75.75 0 0 1 .75-.75h10.5a.75.75 0 0 1 0 1.5H4.75A.75.75 0 0 1 4 10Z" clip-rule="evenodd"/>
</svg>
    </button>
<?php echo ltrim(ob_get_clean()); ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>

        <?php if (!function_exists('_be7746e45bd3a7a180204254bd84c2dc')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/input/index.blade.php', $__blaze->compiledPath.'/be7746e45bd3a7a180204254bd84c2dc.php'); require $__blaze->compiledPath.'/be7746e45bd3a7a180204254bd84c2dc.php'; } ?>
<?php $__blaze->pushData(['type' => 'number','id' => e($id),'name' => e($name),'wire:model.live' => 'value','min' => e($min),'max' => e($max),'class' => 'text-center','readonly' => $attributesReadonly]); ?>
<?php _be7746e45bd3a7a180204254bd84c2dc($__blaze, ['type' => 'number','id' => e($id),'name' => e($name),'wire:model.live' => 'value','min' => e($min),'max' => e($max),'class' => 'text-center','readonly' => $attributesReadonly], [], ['readonly'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>

        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if(!$attributesReadonly): ?>
        <?php ob_start(); ?><button type="button" class="relative items-center font-medium justify-center whitespace-nowrap disabled:opacity-50 dark:disabled:opacity-50 disabled:cursor-default disabled:pointer-events-none disabled:shadow-none justify-center h-10 text-sm rounded-lg gap-2 w-10 inline-flex  bg-white hover:bg-zinc-50 dark:bg-zinc-700 dark:hover:bg-zinc-600/75 text-zinc-800 dark:text-white border border-zinc-200 hover:border-zinc-200 disabled:border-zinc-200 border-b-zinc-300/80 dark:border-zinc-600 dark:hover:border-zinc-600 dark:disabled:border-zinc-600 shadow-xs [[data-flux-button-group]_&amp;]:border-s-0 [:is([data-flux-button-group]&gt;&amp;:first-child,_[data-flux-button-group]_:first-child&gt;&amp;)]:border-s-[1px] *:transition-opacity [&amp;[data-loading]&gt;:not([data-flux-loading-indicator])]:opacity-0 [&amp;[data-flux-loading]&gt;:not([data-flux-loading-indicator])]:opacity-0 [&amp;[data-loading]&gt;[data-flux-loading-indicator]]:opacity-100 [&amp;[data-flux-loading]&gt;[data-flux-loading-indicator]]:opacity-100 data-loading:pointer-events-none data-flux-loading:pointer-events-none" data-flux-button="data-flux-button" data-flux-group-target="data-flux-group-target" wire:target="incrementValue" wire:loading.attr="data-flux-loading" wire:click="incrementValue" <?php if (($__blazeAttr = $value >= $max || $remainingPoints <= 0 || $attributesReadonly) !== false && !is_null($__blazeAttr)): ?>disabled="<?php echo e($__blazeAttr === true ? 'disabled' : $__blazeAttr); ?>"<?php endif; unset($__blazeAttr); ?>>
        <div class="absolute inset-0 flex items-center justify-center opacity-0" data-flux-loading-indicator>
                <svg class="shrink-0 [:where(&amp;)]:size-5 animate-spin" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" data-slot="icon">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
</svg>
                    </div>
        
                    <svg class="shrink-0 [:where(&amp;)]:size-5" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z"/>
</svg>
    </button>
<?php echo ltrim(ob_get_clean()); ?>
        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php echo trim(ob_get_clean()); ?>

    </div>
<?php echo ltrim(ob_get_clean()); ?>
<?php echo trim(ob_get_clean()); ?>

</ui-field>
<?php echo ltrim(ob_get_clean()); ?><?php /**PATH /var/www/html/storage/framework/views/livewire/views/2380be89.blade.php ENDPATH**/ ?>