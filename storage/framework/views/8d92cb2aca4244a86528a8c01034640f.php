<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'sidebar' => false,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'sidebar' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sidebar): ?>
    <?php if (!function_exists('_0fa3a037da5b71268f994ce70a17bd55')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/sidebar/brand.blade.php', $__blaze->compiledPath.'/0fa3a037da5b71268f994ce70a17bd55.php'); require $__blaze->compiledPath.'/0fa3a037da5b71268f994ce70a17bd55.php'; } ?>
<?php if (isset($__slots0fa3a037da5b71268f994ce70a17bd55)) { $__slotsStack0fa3a037da5b71268f994ce70a17bd55[] = $__slots0fa3a037da5b71268f994ce70a17bd55; } ?>
<?php if (isset($__attrs0fa3a037da5b71268f994ce70a17bd55)) { $__attrsStack0fa3a037da5b71268f994ce70a17bd55[] = $__attrs0fa3a037da5b71268f994ce70a17bd55; } ?>
<?php $__attrs0fa3a037da5b71268f994ce70a17bd55 = ['name' => config('app.name', 'Laravel'),'attributes' => $attributes]; ?>
<?php $__slots0fa3a037da5b71268f994ce70a17bd55 = []; ?>
<?php $__blaze->pushData($__attrs0fa3a037da5b71268f994ce70a17bd55); ?>
<?php ob_start(); ?>
         <?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slots0fa3a037da5b71268f994ce70a17bd55['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
    <?php $__slots0fa3a037da5b71268f994ce70a17bd55['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots0fa3a037da5b71268f994ce70a17bd55); ?>
<?php _0fa3a037da5b71268f994ce70a17bd55($__blaze, $__attrs0fa3a037da5b71268f994ce70a17bd55, $__slots0fa3a037da5b71268f994ce70a17bd55, ['name', 'attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack0fa3a037da5b71268f994ce70a17bd55)) { $__slots0fa3a037da5b71268f994ce70a17bd55 = array_pop($__slotsStack0fa3a037da5b71268f994ce70a17bd55); } ?>
<?php if (! empty($__attrsStack0fa3a037da5b71268f994ce70a17bd55)) { $__attrs0fa3a037da5b71268f994ce70a17bd55 = array_pop($__attrsStack0fa3a037da5b71268f994ce70a17bd55); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php if (!function_exists('_05930f7f12650528d2658fedaaee3078')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/brand.blade.php', $__blaze->compiledPath.'/05930f7f12650528d2658fedaaee3078.php'); require $__blaze->compiledPath.'/05930f7f12650528d2658fedaaee3078.php'; } ?>
<?php if (isset($__slots05930f7f12650528d2658fedaaee3078)) { $__slotsStack05930f7f12650528d2658fedaaee3078[] = $__slots05930f7f12650528d2658fedaaee3078; } ?>
<?php if (isset($__attrs05930f7f12650528d2658fedaaee3078)) { $__attrsStack05930f7f12650528d2658fedaaee3078[] = $__attrs05930f7f12650528d2658fedaaee3078; } ?>
<?php $__attrs05930f7f12650528d2658fedaaee3078 = ['name' => config('app.name', 'Laravel'),'attributes' => $attributes]; ?>
<?php $__slots05930f7f12650528d2658fedaaee3078 = []; ?>
<?php $__blaze->pushData($__attrs05930f7f12650528d2658fedaaee3078); ?>
<?php ob_start(); ?>
         <?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slots05930f7f12650528d2658fedaaee3078['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
    <?php $__slots05930f7f12650528d2658fedaaee3078['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots05930f7f12650528d2658fedaaee3078); ?>
<?php _05930f7f12650528d2658fedaaee3078($__blaze, $__attrs05930f7f12650528d2658fedaaee3078, $__slots05930f7f12650528d2658fedaaee3078, ['name', 'attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack05930f7f12650528d2658fedaaee3078)) { $__slots05930f7f12650528d2658fedaaee3078 = array_pop($__slotsStack05930f7f12650528d2658fedaaee3078); } ?>
<?php if (! empty($__attrsStack05930f7f12650528d2658fedaaee3078)) { $__attrs05930f7f12650528d2658fedaaee3078 = array_pop($__attrsStack05930f7f12650528d2658fedaaee3078); } ?>
<?php $__blaze->popData(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /var/www/html/resources/views/components/app-logo.blade.php ENDPATH**/ ?>