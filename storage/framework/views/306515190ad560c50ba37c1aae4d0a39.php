<input
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
                'type' => 'hidden',
                $applyStateBindingModifiers('wire:model') => $getStatePath(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)
            ->class(['fi-fo-hidden'])); ?>

/>
<?php /**PATH D:\SSP_Website_Sem02\Logistics_Management - Testing\Logistics_website\vendor\filament\forms\src\/../resources/views/components/hidden.blade.php ENDPATH**/ ?>