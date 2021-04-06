<div>
    <h1>
        <?php foreach($employees as $u): ?>
            <input type="hidden" class="form-control" name="employee_id" value="<?php echo $u['employee_id']; ?>">
            <?php echo $u['employee_name']?>
            <?php echo $u['employee_id']?>
            <?php endforeach; ?>
    </h1>
</div>