<!-- file path View/Subcategories/get_by_category.ctp -->
<?php foreach ($subcategories as $user): ?>
<option value="<?php echo $user['Userinfo']['USERID']; ?>"><?php echo $user['Userinfo']['Name']; ?></option>
<?php endforeach; ?>