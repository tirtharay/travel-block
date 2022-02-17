<?php
/**
 * Layout of out travel block.
 */


// Create id attribute allowing for custom "anchor" value.
$id = 'travel-itinerary-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'travel-itinerary-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$daytime            = get_field('daytime');
$image              = get_field('image');
$activity_title     = get_field('activity_title');
$image              = get_field('image');
$services           = get_field('services');
$am_description     = get_field('am_description');
$pm_description     = get_field('pm_description');
$overnight          = get_field('overnight');

?>


<div class="<?php echo esc_attr($className); ?>-row">
    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
        <div>
            <span class="travel-itinerary-block-daytime"><?php echo esc_attr($daytime); ?></span>
        </div>

        <div class="img">
            <?php echo wp_get_attachment_image( $image['id'], 'full' ); ?>
        </div>

        <div class="travel-itinerary-block-content-info">

            <?php if( $activity_title ): ?>
                <p><span class="heading-of-the-day"><?php echo esc_attr($activity_title); ?></span></p>
            <?php endif; ?>

            <?php if( $am_description ): ?>
                <p><h6 class="desc-title">Morning: </h6><?php echo esc_attr($am_description); ?></p>
            <?php endif; ?>

            <?php if( $pm_description ): ?>
                <p><h6 class="desc-title">Afternoon: </h6><?php echo esc_attr($pm_description); ?></p>
            <?php endif; ?>

            <?php if( $overnight ): ?>
            <p><h6 class="desc-title">Night: </h6><?php echo esc_attr($overnight); ?></p>
            <?php endif; ?>

        </div>

        <div class="travel-itinerary-block-services-info">

        <?php
            if( $services['breakfast'] == 1 ){
                $brkfst_class = 'available';
            } else{
                $brkfst_class = 'unavailable';
            }
            if( $services['lunch'] == 1 ){
                $lunch_class = 'available';
            } else{
                $lunch_class = 'unavailable';
            }
            if( $services['dinner'] == 1 ){
                $dnr_class = 'available';
            } else{
                $dnr_class = 'unavailable';
            }
        ?>

        <p>Breakfast<span class="<?php echo $brkfst_class; ?>"></span></p>
        <p>Lunch<span class="<?php echo $lunch_class; ?>"></span></p>
        <p>Dinner<span class="<?php echo $dnr_class; ?>"></span></p>
        
        </div>

    </div>
</div>


