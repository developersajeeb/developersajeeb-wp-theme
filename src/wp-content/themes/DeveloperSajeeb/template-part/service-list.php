<?php
    $flexible_content = get_field('flexible_content');
    foreach ($flexible_content as $section) :
        if ($section['acf_fc_layout'] === 'service_list' && !empty($section['service_list_info'])) :
?>
<div class="container services-section-wrap">
    <div class="services-heading">
        <h4 class="subtitle heading-font">Popular Services</h4>
        <h2 class="title">My <span class="text-primary-color">Special Service</span> For your Business Development</h2>
    </div>
    
    <ul class="services-items-wrap">
        <?php $counter = 1;
        foreach ($section['service_list_info'] as $service) : ?>
            <li class="services-item">
                <span class="services-item-number"><?= sprintf("%02d", $counter) ?></span>
                <div>
                    <p class="service-name heading-font"><?= esc_html($service['service_name']) ?></p>
                    <p class="service-description"><?= esc_html($service['service_short_description']) ?></p>
                </div>
            </li>
        <?php $counter++; endforeach; ?>
    </ul>
</div>
<?php endif; endforeach; ?>