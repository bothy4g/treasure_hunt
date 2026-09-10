<?php
if (!function_exists('__def73538bd40e60d7ac2bc46d9316807')):
function __def73538bd40e60d7ac2bc46d9316807($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
extract(Flux::forwardedAttributes($attributes, [
    'tooltipPosition',
    'tooltipKbd',
    'tooltip',
]));
?>

<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'top',
    'tooltipKbd' => null,
    'tooltip' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
unset($__defaults);
?>

<?php if ($tooltip): ?>
    <?php if (!function_exists('__cec7784c802790833f64df83585f81df')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/cec7784c802790833f64df83585f81df.php'); require $__blaze->compiledPath.'/cec7784c802790833f64df83585f81df.php'; } ?>
<?php if (isset($__slotscec7784c802790833f64df83585f81df)) { $__slotsStackcec7784c802790833f64df83585f81df[] = $__slotscec7784c802790833f64df83585f81df; } ?>
<?php if (isset($__attrscec7784c802790833f64df83585f81df)) { $__attrsStackcec7784c802790833f64df83585f81df[] = $__attrscec7784c802790833f64df83585f81df; } ?>
<?php $__attrscec7784c802790833f64df83585f81df = ['class' => 'inline-flex','content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slotscec7784c802790833f64df83585f81df = []; ?>
<?php $__blaze->pushData($__attrscec7784c802790833f64df83585f81df); ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slotscec7784c802790833f64df83585f81df['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotscec7784c802790833f64df83585f81df); ?>
<?php __cec7784c802790833f64df83585f81df($__blaze, $__attrscec7784c802790833f64df83585f81df, $__slotscec7784c802790833f64df83585f81df, ['content', 'position', 'kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackcec7784c802790833f64df83585f81df)) { $__slotscec7784c802790833f64df83585f81df = array_pop($__slotsStackcec7784c802790833f64df83585f81df); } ?>
<?php if (! empty($__attrsStackcec7784c802790833f64df83585f81df)) { $__attrscec7784c802790833f64df83585f81df = array_pop($__attrsStackcec7784c802790833f64df83585f81df); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH /var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/with-tooltip.blade.php ENDPATH**/ ?>