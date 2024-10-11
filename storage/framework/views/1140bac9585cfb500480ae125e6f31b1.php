<div
    <?php echo e($attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)); ?>

>
    <?php echo e($getChildComponentContainer()); ?>

</div>
<?php /**PATH D:\SSP_Website_Sem02\Logistics_Management -Web\Logistics_website\vendor\filament\forms\src\/../resources/views/components/group.blade.php ENDPATH**/ ?>