<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Character')] class extends Component {
} ?>

<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => ['title' => __('Character')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Character'))]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-zinc-900 p-6">
        <h1 class="text-2xl font-bold text-neutral-900 dark:text-neutral-100">
            Hello,
        </h1>

        <?php
        $character = auth()->user()->characters()->where('id', auth()->user()->active_character_id)->first()
            ?? auth()->user()->characters()->first();
        $name = $character->name ?? 'Adventurer';
        ?>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('character-selector', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-4037454769-0', $__key);

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

        <div x-data x-on:refresh-page.window="window.location.reload()" class="hidden"></div>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('character-name', ['initial-name' => $name,'character' => $character]);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-4037454769-1', $__key);

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

        <div class="flex flex-row w-full gap-4">
            <div class="w-half mt-8">
                <div class="flex justify-center">
                    <div class="w-100">
                        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('character-attributes', []);

$__keyOuter = $__key ?? null;

$__key = null;
$__componentSlots = [];

$__key ??= \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::generateKey('lw-4037454769-2', $__key);

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
                </div>
            </div>

            <div class="w-half">
                <div class="flex justify-center">
                    <div class="w-1/2">
                        <div class="mt-6 space-y-6">
                            <?php if (isset($component)) { $__componentOriginale55db279d009befe3824a1a16ec97945 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale55db279d009befe3824a1a16ec97945 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.character-points','data' => ['character' => $character]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('character-points'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['character' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($character)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale55db279d009befe3824a1a16ec97945)): ?>
<?php $attributes = $__attributesOriginale55db279d009befe3824a1a16ec97945; ?>
<?php unset($__attributesOriginale55db279d009befe3824a1a16ec97945); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale55db279d009befe3824a1a16ec97945)): ?>
<?php $component = $__componentOriginale55db279d009befe3824a1a16ec97945; ?>
<?php unset($__componentOriginale55db279d009befe3824a1a16ec97945); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginal191dd14e8b9603ac80a5f0c96c66e338 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal191dd14e8b9603ac80a5f0c96c66e338 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.temptation-resistance','data' => ['character' => $character]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('temptation-resistance'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['character' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($character)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal191dd14e8b9603ac80a5f0c96c66e338)): ?>
<?php $attributes = $__attributesOriginal191dd14e8b9603ac80a5f0c96c66e338; ?>
<?php unset($__attributesOriginal191dd14e8b9603ac80a5f0c96c66e338); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal191dd14e8b9603ac80a5f0c96c66e338)): ?>
<?php $component = $__componentOriginal191dd14e8b9603ac80a5f0c96c66e338; ?>
<?php unset($__componentOriginal191dd14e8b9603ac80a5f0c96c66e338); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginalc6251c7f3f05e12e0eca3026fb86f8f3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc6251c7f3f05e12e0eca3026fb86f8f3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.experience','data' => ['character' => $character]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('experience'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['character' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($character)]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc6251c7f3f05e12e0eca3026fb86f8f3)): ?>
<?php $attributes = $__attributesOriginalc6251c7f3f05e12e0eca3026fb86f8f3; ?>
<?php unset($__attributesOriginalc6251c7f3f05e12e0eca3026fb86f8f3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6251c7f3f05e12e0eca3026fb86f8f3)): ?>
<?php $component = $__componentOriginalc6251c7f3f05e12e0eca3026fb86f8f3; ?>
<?php unset($__componentOriginalc6251c7f3f05e12e0eca3026fb86f8f3); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81a506f898233b9e7d58286e6bea3c18)): ?>
<?php $attributes = $__attributesOriginal81a506f898233b9e7d58286e6bea3c18; ?>
<?php unset($__attributesOriginal81a506f898233b9e7d58286e6bea3c18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81a506f898233b9e7d58286e6bea3c18)): ?>
<?php $component = $__componentOriginal81a506f898233b9e7d58286e6bea3c18; ?>
<?php unset($__componentOriginal81a506f898233b9e7d58286e6bea3c18); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/pages/character/index.blade.php ENDPATH**/ ?>