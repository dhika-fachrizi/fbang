<div class="form-group">
    <label>Subcategory</label>
    <select class="form-control" name="subcategory" required>
        <option value="">-Select Option-</option>
        <?php foreach ($subcategory->result() as $row): ?>
        <?php if ($subcategory_id == $row->subcategory_id): ?>
        <option value="<?php echo $row->subcategory_id; ?>" selected>
            <?php echo $row->subcategory_name; ?></option>
        <?php else: ?>
        <option value="<?php echo $row->subcategory_id; ?>">
            <?php echo $row->subcategory_name; ?></option>
        <?php endif;?>
        <?php endforeach;?>
    </select>
</div>
<div class="form-group">
    <label>Location</label>
    <select class="form-control" name="location" required>
        <option value="">-Select Option-</option>
        <?php foreach ($location->result() as $row): ?>
        <?php if ($location_id == $row->location_id): ?>
        <option value="<?php echo $row->location_id; ?>" selected>
            <?php echo $row->location_name; ?></option>
        <?php else: ?>
        <option value="<?php echo $row->location_id; ?>">
            <?php echo $row->location_name; ?></option>
        <?php endif;?>
        <?php endforeach;?>
    </select>
</div>
<div class="form-group">
    <label>Halal</label>
    <select class="form-control" name="halal" required>
        <option value="">-Select Option-</option>
        <option value="1" <?php if ($halal_id == 1): ?> selected <?php else: ?> <?php endif;?>> Halal</option>
        <option value="2" <?php if ($halal_id == 2): ?> selected <?php else: ?> <?php endif;?>>Non Halal
        </option>
    </select>
</div>
<div class="form-group">
    <label>Additional</label>
    <select class="form-control" name="additional" required>
        <option value="">-Select Option-</option>
        <?php foreach ($additional->result() as $row): ?>
        <?php if ($additional_id == $row->additional_id): ?>
        <option value="<?php echo $row->additional_id; ?>" selected>
            <?php echo $row->additional_name; ?></option>
        <?php else: ?>
        <option value="<?php echo $row->additional_id; ?>">
            <?php echo $row->additional_name; ?></option>
        <?php endif;?>
        <?php endforeach;?>
    </select>
</div>