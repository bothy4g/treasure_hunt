<?php
if (!function_exists('__25482cb811b6b3f17f11f8ed4748c8f7')):
function __25482cb811b6b3f17f11f8ed4748c8f7($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'name',
    'descriptionTrailing',
    'description',
    'label',
    'badge',
]));
?>

<?php $descriptionTrailing = $descriptionTrailing ??= $attributes->pluck('description:trailing'); ?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'descriptionTrailing' => null,
    'description' => null,
    'label' => null,
    'badge' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$descriptionTrailing ??= $attributes['description-trailing'] ?? $attributes['descriptionTrailing'] ?? $__defaults['descriptionTrailing']; unset($attributes['descriptionTrailing'], $attributes['description-trailing']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
unset($__defaults);
?>

<?php if (isset($label) || isset($description) || isset($descriptionTrailing)): ?>
    <?php

        $fieldAttributes = Flux::attributesAfter('field:', $attributes, []);
        $labelAttributes = Flux::attributesAfter('label:', $attributes, ['badge' => $badge]);
        $descriptionAttributes = Flux::attributesAfter('description:', $attributes, []);
        $errorAttributes = Flux::attributesAfter('error:', $attributes, ['name' => $name]);
    ?>
    <?php if (!function_exists('__d5cc101bbea8e708bf10883800fde797')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/field.blade.php', $__blaze->compiledPath.'/d5cc101bbea8e708bf10883800fde797.php'); require $__blaze->compiledPath.'/d5cc101bbea8e708bf10883800fde797.php'; } ?>
<?php if (isset($__slotsd5cc101bbea8e708bf10883800fde797)) { $__slotsStackd5cc101bbea8e708bf10883800fde797[] = $__slotsd5cc101bbea8e708bf10883800fde797; } ?>
<?php if (isset($__attrsd5cc101bbea8e708bf10883800fde797)) { $__attrsStackd5cc101bbea8e708bf10883800fde797[] = $__attrsd5cc101bbea8e708bf10883800fde797; } ?>
<?php $__attrsd5cc101bbea8e708bf10883800fde797 = ['attributes' => $fieldAttributes]; ?>
<?php $__slotsd5cc101bbea8e708bf10883800fde797 = []; ?>
<?php $__blaze->pushData($__attrsd5cc101bbea8e708bf10883800fde797); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php if (!function_exists('__b365cc769c4f8a5b11cbabafa044a19e')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/label.blade.php', $__blaze->compiledPath.'/b365cc769c4f8a5b11cbabafa044a19e.php'); require $__blaze->compiledPath.'/b365cc769c4f8a5b11cbabafa044a19e.php'; } ?>
<?php if (isset($__slotsb365cc769c4f8a5b11cbabafa044a19e)) { $__slotsStackb365cc769c4f8a5b11cbabafa044a19e[] = $__slotsb365cc769c4f8a5b11cbabafa044a19e; } ?>
<?php if (isset($__attrsb365cc769c4f8a5b11cbabafa044a19e)) { $__attrsStackb365cc769c4f8a5b11cbabafa044a19e[] = $__attrsb365cc769c4f8a5b11cbabafa044a19e; } ?>
<?php $__attrsb365cc769c4f8a5b11cbabafa044a19e = ['attributes' => $labelAttributes]; ?>
<?php $__slotsb365cc769c4f8a5b11cbabafa044a19e = []; ?>
<?php $__blaze->pushData($__attrsb365cc769c4f8a5b11cbabafa044a19e); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slotsb365cc769c4f8a5b11cbabafa044a19e['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotsb365cc769c4f8a5b11cbabafa044a19e); ?>
<?php __b365cc769c4f8a5b11cbabafa044a19e($__blaze, $__attrsb365cc769c4f8a5b11cbabafa044a19e, $__slotsb365cc769c4f8a5b11cbabafa044a19e, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackb365cc769c4f8a5b11cbabafa044a19e)) { $__slotsb365cc769c4f8a5b11cbabafa044a19e = array_pop($__slotsStackb365cc769c4f8a5b11cbabafa044a19e); } ?>
<?php if (! empty($__attrsStackb365cc769c4f8a5b11cbabafa044a19e)) { $__attrsb365cc769c4f8a5b11cbabafa044a19e = array_pop($__attrsStackb365cc769c4f8a5b11cbabafa044a19e); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php if (!function_exists('__5254cf35146fe4fb874bc8e717224408')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/5254cf35146fe4fb874bc8e717224408.php'); require $__blaze->compiledPath.'/5254cf35146fe4fb874bc8e717224408.php'; } ?>
<?php if (isset($__slots5254cf35146fe4fb874bc8e717224408)) { $__slotsStack5254cf35146fe4fb874bc8e717224408[] = $__slots5254cf35146fe4fb874bc8e717224408; } ?>
<?php if (isset($__attrs5254cf35146fe4fb874bc8e717224408)) { $__attrsStack5254cf35146fe4fb874bc8e717224408[] = $__attrs5254cf35146fe4fb874bc8e717224408; } ?>
<?php $__attrs5254cf35146fe4fb874bc8e717224408 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots5254cf35146fe4fb874bc8e717224408 = []; ?>
<?php $__blaze->pushData($__attrs5254cf35146fe4fb874bc8e717224408); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slots5254cf35146fe4fb874bc8e717224408['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots5254cf35146fe4fb874bc8e717224408); ?>
<?php __5254cf35146fe4fb874bc8e717224408($__blaze, $__attrs5254cf35146fe4fb874bc8e717224408, $__slots5254cf35146fe4fb874bc8e717224408, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack5254cf35146fe4fb874bc8e717224408)) { $__slots5254cf35146fe4fb874bc8e717224408 = array_pop($__slotsStack5254cf35146fe4fb874bc8e717224408); } ?>
<?php if (! empty($__attrsStack5254cf35146fe4fb874bc8e717224408)) { $__attrs5254cf35146fe4fb874bc8e717224408 = array_pop($__attrsStack5254cf35146fe4fb874bc8e717224408); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        [STARTCOMPILEDUNBLAZE:zugBDhQe6e]<?php \Livewire\Blaze\Unblaze::storeScope("zugBDhQe6e", scope: ['attributes' => $errorAttributes->getAttributes()]) ?><?php \Livewire\Blaze\Unblaze::storeReplacement("zugBDhQe6e", "CiAgICAgICAgPGZsdXg6ZXJyb3IgOmF0dHJpYnV0ZXM9Im5ldyBcSWxsdW1pbmF0ZVxWaWV3XENvbXBvbmVudEF0dHJpYnV0ZUJhZygkc2NvcGVbJ2F0dHJpYnV0ZXMnXSkiIC8+CiAgICAgICAg") ?>[ENDCOMPILEDUNBLAZE:zugBDhQe6e]

        <?php if (isset($descriptionTrailing)): ?>
            <?php if (!function_exists('__5254cf35146fe4fb874bc8e717224408')) { $__blaze->compile('/var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/5254cf35146fe4fb874bc8e717224408.php'); require $__blaze->compiledPath.'/5254cf35146fe4fb874bc8e717224408.php'; } ?>
<?php if (isset($__slots5254cf35146fe4fb874bc8e717224408)) { $__slotsStack5254cf35146fe4fb874bc8e717224408[] = $__slots5254cf35146fe4fb874bc8e717224408; } ?>
<?php if (isset($__attrs5254cf35146fe4fb874bc8e717224408)) { $__attrsStack5254cf35146fe4fb874bc8e717224408[] = $__attrs5254cf35146fe4fb874bc8e717224408; } ?>
<?php $__attrs5254cf35146fe4fb874bc8e717224408 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots5254cf35146fe4fb874bc8e717224408 = []; ?>
<?php $__blaze->pushData($__attrs5254cf35146fe4fb874bc8e717224408); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slots5254cf35146fe4fb874bc8e717224408['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slots5254cf35146fe4fb874bc8e717224408); ?>
<?php __5254cf35146fe4fb874bc8e717224408($__blaze, $__attrs5254cf35146fe4fb874bc8e717224408, $__slots5254cf35146fe4fb874bc8e717224408, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack5254cf35146fe4fb874bc8e717224408)) { $__slots5254cf35146fe4fb874bc8e717224408 = array_pop($__slotsStack5254cf35146fe4fb874bc8e717224408); } ?>
<?php if (! empty($__attrsStack5254cf35146fe4fb874bc8e717224408)) { $__attrs5254cf35146fe4fb874bc8e717224408 = array_pop($__attrsStack5254cf35146fe4fb874bc8e717224408); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slotsd5cc101bbea8e708bf10883800fde797['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotsd5cc101bbea8e708bf10883800fde797); ?>
<?php __d5cc101bbea8e708bf10883800fde797($__blaze, $__attrsd5cc101bbea8e708bf10883800fde797, $__slotsd5cc101bbea8e708bf10883800fde797, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackd5cc101bbea8e708bf10883800fde797)) { $__slotsd5cc101bbea8e708bf10883800fde797 = array_pop($__slotsStackd5cc101bbea8e708bf10883800fde797); } ?>
<?php if (! empty($__attrsStackd5cc101bbea8e708bf10883800fde797)) { $__attrsd5cc101bbea8e708bf10883800fde797 = array_pop($__attrsStackd5cc101bbea8e708bf10883800fde797); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH /var/www/html/vendor/livewire/flux/src/../stubs/resources/views/flux/with-field.blade.php ENDPATH**/ ?>