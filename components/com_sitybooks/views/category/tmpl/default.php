<?php
/**
 * @version     1.0.0
 * @package     com_sitybooks
 * @copyright   © 2015. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      Maxim <mvovk90@mail.ru> - http://
 */
// no direct access
defined('_JEXEC') or die;


?>
<?php if ($this->item) : ?>

    <div class="item_fields">
        <table class="table">
            <tr>
			<th><?php echo JText::_('COM_SITYBOOKS_FORM_LBL_CATEGORY_ID'); ?></th>
			<td><?php echo $this->item->id; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_SITYBOOKS_FORM_LBL_CATEGORY_STATE'); ?></th>
			<td>
			<i class="icon-<?php echo ($this->item->state == 1) ? 'publish' : 'unpublish'; ?>"></i></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_SITYBOOKS_FORM_LBL_CATEGORY_CREATED_BY'); ?></th>
			<td><?php echo $this->item->created_by_name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_SITYBOOKS_FORM_LBL_CATEGORY_PARENT_ID'); ?></th>
			<td><?php echo $this->item->parent_id; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_SITYBOOKS_FORM_LBL_CATEGORY_NAME'); ?></th>
			<td><?php echo $this->item->name; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_SITYBOOKS_FORM_LBL_CATEGORY_DESCRIPTION'); ?></th>
			<td><?php echo $this->item->description; ?></td>
</tr>
<tr>
			<th><?php echo JText::_('COM_SITYBOOKS_FORM_LBL_CATEGORY_FRENDLI_URL'); ?></th>
			<td><?php echo $this->item->frendli_url; ?></td>
</tr>

        </table>
    </div>
    
    <?php
else:
    echo JText::_('COM_SITYBOOKS_ITEM_NOT_LOADED');
endif;
?>
