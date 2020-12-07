<table cellspacing="0" id="correction" style="margin-left:auto ;margin-right:auto;width:450px">
	<tbody>
		<?php
			echo '<tr>
					<td></td>
					<td style="text-align:center">0</td>
					<td></td>
					<td></td>
					<td></td>
					<td style="text-align:center">1</td>
					<td></td>
					<td></td>
					<td></td>
					<td style="text-align:center">2</td>
					<td></td>
					<td></td>
					<td></td>
					<td style="text-align:center">3</td>
					<td></td>
					<td></td>
					<td></td>
					<td style="text-align:center">4</td>
				  </tr>';
			for($sphere = 20;$sphere >= -20; $sphere-=0.25){
						
				echo '<tr>';
				
					echo '<td width="40" style="text-align:center">'.$sphere.'</td>';
				
				for($cylindre = 0; $cylindre <= 4;$cylindre+=0.25){		
					echo '<td width="20" style="border:1px solid;min-height:20px;height:20px;" class="'.(isset($grille_stock[(string)$sphere]) && in_array((string)$cylindre,$grille_stock[(string)$sphere]) ? 'active': '').' selectionnable">
							<input type="hidden" name="sphere" value="'.$sphere.'" />
							<input type="hidden" name="cylindre" value="'.$cylindre.'" />
						  </td>';
				}
				echo '</tr>';
			}
		?>
	</tbody>
</table>