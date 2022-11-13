<div class="ropduct-statistic">
        <?php
        $pst_qty = $product->get_stock_quantity();
        $pts_qty = $product->get_total_sales();

        $was_total_product = $pst_qty + $pts_qty;

        if ($pst_qty > 0) {
            $pstock_progress = round(100 - ($pts_qty / $was_total_orduct * 100));
        } else {
            $pstock_progress = 100;
        }

        if ($product->get_manage_stock() == 1) {
            $show_pstock = $product->get_stock_quantity();
        } else {
            $show_pstock = $product->get_stock_status();
        }
        ?>

        <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo esc_attr($pstock_progress); ?>%" aria-valuenow="<?php echo esc_attr($pstock_progress); ?>" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        
    </div>
