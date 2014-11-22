<div class="wrap">
    <h2>Arzamath_17th plugin for homework №4</h2>
    <form method="post" action="options.php">
        <?php @settings_fields('arzamath_17th-group'); ?>
        <?php @do_settings_fields('arzamath_17th-group'); ?>

        <?php do_settings_sections('arzamath_17th'); ?>

        <?php @submit_button(); ?>

</div>

<!-- select>
    <optgroup label='Main settings'>
        <option>Posts</option>
        <option data-selected>Pages</option>
        <option>Structure</option>
    </optgroup>
    <optgroup label='Secondary settings'>
        <option>Comments</option>
        <option data-selected>Images</option>
        <option>Tags</option>
        <option>Tools</option>
    </optgroup>
</select>-->

