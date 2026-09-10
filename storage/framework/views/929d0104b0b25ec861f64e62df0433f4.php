<?php
if (!function_exists('_929d0104b0b25ec861f64e62df0433f4')):
function _929d0104b0b25ec861f64e62df0433f4($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>
<?php $iconTrailing ??= $attributes->pluck('icon:trailing'); ?>
<?php $iconVariant ??= $attributes->pluck('icon:variant'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'right',
    'tooltipKbd' => null,
    'tooltip' => null,
    'iconVariant' => 'outline',
    'iconTrailing' => null,
    'badgeColor' => null,
    'iconDot' => null,
    'accent' => true,
    'badge' => null,
    'icon' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$iconTrailing ??= $attributes['icon-trailing'] ?? $attributes['iconTrailing'] ?? $__defaults['iconTrailing']; unset($attributes['iconTrailing'], $attributes['icon-trailing']);
$badgeColor ??= $attributes['badge-color'] ?? $attributes['badgeColor'] ?? $__defaults['badgeColor']; unset($attributes['badgeColor'], $attributes['badge-color']);
$iconDot ??= $attributes['icon-dot'] ?? $attributes['iconDot'] ?? $__defaults['iconDot']; unset($attributes['iconDot'], $attributes['icon-dot']);
$accent ??= $attributes['accent'] ?? $__defaults['accent']; unset($attributes['accent']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
$icon ??= $attributes['icon'] ?? $__defaults['icon']; unset($attributes['icon']);
unset($__defaults);
?>

<?php
$tooltip ??= $slot->isNotEmpty() ? (string) $slot : null;

// Size-up icons in square/icon-only buttons...
$iconClasses = Flux::classes('size-4')
    ->add('in-data-flux-sidebar-group-dropdown:text-zinc-400! dark:in-data-flux-sidebar-group-dropdown:text-white/80!')
    ->add('[[data-flux-sidebar-item]:hover_&]:text-current!')
    ->add('[[data-flux-sidebar-item][data-active]_&]:text-current!');

$classes = Flux::classes()
    ->add('h-8 in-data-flux-sidebar-on-mobile:h-10 relative flex items-center gap-3 rounded-lg')
    ->add('in-data-flux-sidebar-collapsed-desktop:w-10 in-data-flux-sidebar-collapsed-desktop:justify-center')
    ->add('py-0 text-start w-full px-3 has-data-flux-navlist-badge:not-in-data-flux-sidebar-collapsed-desktop:pe-1.5 my-px')
    ->add('text-zinc-500 dark:text-white/80')
    ->add(match ($accent) {
        true => [
            'data-current:text-(--color-accent-content) hover:data-current:text-(--color-accent-content)',
            'data-current:bg-white dark:data-current:bg-white/[7%] data-current:border data-current:border-zinc-200 dark:data-current:border-transparent',
            'hover:text-zinc-800 dark:hover:text-white dark:hover:bg-white/[7%] hover:bg-zinc-800/5 ',
            'border border-transparent',
        ],
        false => [
            'data-current:text-zinc-800 dark:data-current:text-zinc-100 data-current:border-zinc-200',
            'data-current:bg-white dark:data-current:bg-white/10 data-current:border data-current:border-zinc-200 dark:data-current:border-white/10 data-current:shadow-xs',
            'hover:text-zinc-800 dark:hover:text-white',
        ],
    })
    // Override the default styles to match dropdowns for when the item is inside a collapsed group dropdown...
    ->add('in-data-flux-sidebar-group-dropdown:w-auto! in-data-flux-sidebar-group-dropdown:px-2!')
    ->add('in-data-flux-sidebar-group-dropdown:focus:outline-hidden!')
    ->add('in-data-flux-sidebar-group-dropdown:text-zinc-800! in-data-flux-sidebar-group-dropdown:bg-white! in-data-flux-sidebar-group-dropdown:hover:bg-zinc-50!')
    ->add('in-data-flux-sidebar-group-dropdown:data-active:bg-zinc-50!')
    ->add('dark:in-data-flux-sidebar-group-dropdown:text-white! dark:in-data-flux-sidebar-group-dropdown:bg-transparent! dark:in-data-flux-sidebar-group-dropdown:hover:bg-zinc-600! dark:in-data-flux-sidebar-group-dropdown:data-active:bg-zinc-600!')
    ;
?>

<?php if (!function_exists('_cec7784c802790833f64df83585f81df')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/cec7784c802790833f64df83585f81df.php'); require $__blaze->compiledPath.'/cec7784c802790833f64df83585f81df.php'; } ?>
<?php if (isset($__slotscec7784c802790833f64df83585f81df)) { $__slotsStackcec7784c802790833f64df83585f81df[] = $__slotscec7784c802790833f64df83585f81df; } ?>
<?php if (isset($__attrscec7784c802790833f64df83585f81df)) { $__attrsStackcec7784c802790833f64df83585f81df[] = $__attrscec7784c802790833f64df83585f81df; } ?>
<?php $__attrscec7784c802790833f64df83585f81df = ['position' => $tooltipPosition]; ?>
<?php $__slotscec7784c802790833f64df83585f81df = []; ?>
<?php $__blaze->pushData($__attrscec7784c802790833f64df83585f81df); ?>
<?php ob_start(); ?>
    <?php if (!function_exists('_eb15b5be8a0ba8532dfeb717851b16ae')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/button-or-link.blade.php', $__blaze->compiledPath.'/eb15b5be8a0ba8532dfeb717851b16ae.php'); require $__blaze->compiledPath.'/eb15b5be8a0ba8532dfeb717851b16ae.php'; } ?>
<?php if (isset($__slotseb15b5be8a0ba8532dfeb717851b16ae)) { $__slotsStackeb15b5be8a0ba8532dfeb717851b16ae[] = $__slotseb15b5be8a0ba8532dfeb717851b16ae; } ?>
<?php if (isset($__attrseb15b5be8a0ba8532dfeb717851b16ae)) { $__attrsStackeb15b5be8a0ba8532dfeb717851b16ae[] = $__attrseb15b5be8a0ba8532dfeb717851b16ae; } ?>
<?php $__attrseb15b5be8a0ba8532dfeb717851b16ae = ['attributes' => $attributes->class($classes),'dataFluxSidebarItem' => true]; ?>
<?php $__slotseb15b5be8a0ba8532dfeb717851b16ae = []; ?>
<?php $__blaze->pushData($__attrseb15b5be8a0ba8532dfeb717851b16ae); ?>
<?php ob_start(); ?>
        <?php if ($icon): ?>
            <div class="relative">
                <?php if (is_string($icon) && $icon !== ''): ?>
                    <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $icon, 'variant' => $iconVariant, 'class' => $iconClasses]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_4e4d6afd7c6fbc3d5b206b4f5ac16211')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/4e4d6afd7c6fbc3d5b206b4f5ac16211.php'); require $__blaze->compiledPath.'/4e4d6afd7c6fbc3d5b206b4f5ac16211.php'; } ?>
<?php $__blaze->pushData(['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses]); ?>
<?php _4e4d6afd7c6fbc3d5b206b4f5ac16211($__blaze, ['icon' => $icon,'variant' => $iconVariant,'class' => $iconClasses], [], ['icon', 'variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                <?php else: ?>
                    <?php echo e($icon); ?>

                <?php endif; ?>

                <?php if ($iconDot): ?>
                    <div class="absolute top-[-2px] end-[-2px]">
                        <div class="size-[6px] rounded-full bg-zinc-500 dark:bg-zinc-400"></div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if ($slot->isNotEmpty()): ?>
            <div class="
                in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden
                flex-1 text-sm font-medium truncate [[data-nav-footer]_&]:hidden [[data-nav-sidebar]_[data-nav-footer]_&]:block" data-content><?php echo e($slot); ?></div>
        <?php endif; ?>

        <?php if (is_string($iconTrailing) && $iconTrailing !== ''): ?>
            <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $iconTrailing, 'variant' => $iconVariant, 'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!']); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php if (!function_exists('_4e4d6afd7c6fbc3d5b206b4f5ac16211')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/4e4d6afd7c6fbc3d5b206b4f5ac16211.php'); require $__blaze->compiledPath.'/4e4d6afd7c6fbc3d5b206b4f5ac16211.php'; } ?>
<?php $__blaze->pushData(['icon' => $iconTrailing,'variant' => $iconVariant,'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!']); ?>
<?php _4e4d6afd7c6fbc3d5b206b4f5ac16211($__blaze, ['icon' => $iconTrailing,'variant' => $iconVariant,'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden size-4!'], [], ['icon', 'variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
        <?php elseif ($iconTrailing): ?>
            <?php echo e($iconTrailing); ?>

        <?php endif; ?>

        <?php if (isset($badge) && $badge !== ''): ?>
            <?php $badgeAttributes = Flux::attributesAfter('badge:', $attributes, ['color' => $badgeColor]); ?>
            <?php if (!function_exists('_96e091d6a67238dedfd5cad4ec331d83')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/navlist/badge.blade.php', $__blaze->compiledPath.'/96e091d6a67238dedfd5cad4ec331d83.php'); require $__blaze->compiledPath.'/96e091d6a67238dedfd5cad4ec331d83.php'; } ?>
<?php if (isset($__slots96e091d6a67238dedfd5cad4ec331d83)) { $__slotsStack96e091d6a67238dedfd5cad4ec331d83[] = $__slots96e091d6a67238dedfd5cad4ec331d83; } ?>
<?php if (isset($__attrs96e091d6a67238dedfd5cad4ec331d83)) { $__attrsStack96e091d6a67238dedfd5cad4ec331d83[] = $__attrs96e091d6a67238dedfd5cad4ec331d83; } ?>
<?php $__attrs96e091d6a67238dedfd5cad4ec331d83 = ['attributes' => $badgeAttributes,'class' => 'in-data-flux-sidebar-collapsed-desktop:not-in-data-flux-sidebar-group-dropdown:hidden']; ?>
<?php $__slots96e091d6a67238dedfd5cad4ec331d83 = []; ?>
<?php $__blaze->pushData($__attrs96e091d6a67238dedfd5cad4ec331d83); ?>
<?php ob_start(); ?><?php echo e($badge); ?><?php $__slots96e091d6a67238dedfd5cad4ec331d83['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots96e091d6a67238dedfd5cad4ec331d83); ?>
<?php _96e091d6a67238dedfd5cad4ec331d83($__blaze, $__attrs96e091d6a67238dedfd5cad4ec331d83, $__slots96e091d6a67238dedfd5cad4ec331d83, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack96e091d6a67238dedfd5cad4ec331d83)) { $__slots96e091d6a67238dedfd5cad4ec331d83 = array_pop($__slotsStack96e091d6a67238dedfd5cad4ec331d83); } ?>
<?php if (! empty($__attrsStack96e091d6a67238dedfd5cad4ec331d83)) { $__attrs96e091d6a67238dedfd5cad4ec331d83 = array_pop($__attrsStack96e091d6a67238dedfd5cad4ec331d83); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slotseb15b5be8a0ba8532dfeb717851b16ae['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotseb15b5be8a0ba8532dfeb717851b16ae); ?>
<?php _eb15b5be8a0ba8532dfeb717851b16ae($__blaze, $__attrseb15b5be8a0ba8532dfeb717851b16ae, $__slotseb15b5be8a0ba8532dfeb717851b16ae, ['attributes', 'dataFluxSidebarItem'], ['dataFluxSidebarItem' => 'data-flux-sidebar-item'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackeb15b5be8a0ba8532dfeb717851b16ae)) { $__slotseb15b5be8a0ba8532dfeb717851b16ae = array_pop($__slotsStackeb15b5be8a0ba8532dfeb717851b16ae); } ?>
<?php if (! empty($__attrsStackeb15b5be8a0ba8532dfeb717851b16ae)) { $__attrseb15b5be8a0ba8532dfeb717851b16ae = array_pop($__attrsStackeb15b5be8a0ba8532dfeb717851b16ae); } ?>
<?php $__blaze->popData(); ?>

    <?php if (!function_exists('_20d4ab197c079044706402eacf43856f')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/20d4ab197c079044706402eacf43856f.php'); require $__blaze->compiledPath.'/20d4ab197c079044706402eacf43856f.php'; } ?>
<?php if (isset($__slots20d4ab197c079044706402eacf43856f)) { $__slotsStack20d4ab197c079044706402eacf43856f[] = $__slots20d4ab197c079044706402eacf43856f; } ?>
<?php if (isset($__attrs20d4ab197c079044706402eacf43856f)) { $__attrsStack20d4ab197c079044706402eacf43856f[] = $__attrs20d4ab197c079044706402eacf43856f; } ?>
<?php $__attrs20d4ab197c079044706402eacf43856f = ['kbd' => $tooltipKbd,'class' => 'not-in-data-flux-sidebar-collapsed-desktop:hidden in-data-flux-sidebar-group-dropdown:hidden cursor-default']; ?>
<?php $__slots20d4ab197c079044706402eacf43856f = []; ?>
<?php $__blaze->pushData($__attrs20d4ab197c079044706402eacf43856f); ?>
<?php ob_start(); ?>
        <?php echo e($tooltip); ?>

    <?php $__slots20d4ab197c079044706402eacf43856f['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots20d4ab197c079044706402eacf43856f); ?>
<?php _20d4ab197c079044706402eacf43856f($__blaze, $__attrs20d4ab197c079044706402eacf43856f, $__slots20d4ab197c079044706402eacf43856f, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack20d4ab197c079044706402eacf43856f)) { $__slots20d4ab197c079044706402eacf43856f = array_pop($__slotsStack20d4ab197c079044706402eacf43856f); } ?>
<?php if (! empty($__attrsStack20d4ab197c079044706402eacf43856f)) { $__attrs20d4ab197c079044706402eacf43856f = array_pop($__attrsStack20d4ab197c079044706402eacf43856f); } ?>
<?php $__blaze->popData(); ?>
<?php $__slotscec7784c802790833f64df83585f81df['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotscec7784c802790833f64df83585f81df); ?>
<?php _cec7784c802790833f64df83585f81df($__blaze, $__attrscec7784c802790833f64df83585f81df, $__slotscec7784c802790833f64df83585f81df, ['position'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackcec7784c802790833f64df83585f81df)) { $__slotscec7784c802790833f64df83585f81df = array_pop($__slotsStackcec7784c802790833f64df83585f81df); } ?>
<?php if (! empty($__attrsStackcec7784c802790833f64df83585f81df)) { $__attrscec7784c802790833f64df83585f81df = array_pop($__attrsStackcec7784c802790833f64df83585f81df); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH /var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/sidebar/item.blade.php ENDPATH**/ ?>