<?php defined('_JEXEC') or die('Restricted access');

/**
 * Plugin: One Page Checkout for VirtueMart byPV
 * Copyright (C) 2014 byPV.org <info@bypv.org>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

/*** TEMPLATE VARIABLES ***/

$ADVERTISEMENTS = $this->getAdvertisementsData_byPV();

?>

<div id="cart_advertisements" class="cart_block">
	<?php $this->printHeader_byPV(2, 'PLG_SYSTEM_OPC_FOR_VM_BYPV_ADVERTISEMENTS_TITLE'); ?>

	<fieldset class="clean">
		<?php foreach ($ADVERTISEMENTS->ADVERTISEMENTS_HTML as $ADVERTISEMENT_HTML) { ?>
		
			<div class="advertisement">
				<?php echo $ADVERTISEMENT_HTML; ?>
			</div>
			
		<?php } ?>
	</fieldset>
</div>
