			<h1>List Of Products ..::Tugas Web Dinamis Lanjut::..</h1>

			<!-- Table (TABLE) -->
			<br />
			<!-- Pencarian berdasarkan kategori -->
			<div align="right">
			<form action="<?php print site_url();?>backend/products/search/" method="POST">
			<label>Kategori</label>
				<select name="cari" class="field size3">
					<?php foreach($array_categories as $ct):?>
						<option value='<?php echo $ct->CategoryID?>'><?php echo $ct->CategoryName;?> </option>
					<?php endforeach ?>
				</select>
				&nbsp;Nama Product<input type="text" name="nama" class="field size3">
				&nbsp;<input type="submit" value="cari" class="button">
			</form>
			</br>
			</div>
			<br />
			<table>
				<tr>
					<th>Action</th>
					<th>ProductID</th>
					<th>ProductName</th>					    
				    <th>SupplierID</th>
				    <th>CategoryID</th>	
					<th>QuantityPerUnit</th>
					<th>UnitPrice</th>					    
				    <th>UnitsInStock</th>
				    <th>UnitsOnOrder</th>	
					<th>ReorderLevel</th>
					<th>Discontinued</th>					    
				</tr>
				<?php
					$no=0;
					foreach($array_products as $row):	
					$id=$row->ProductID;	
					$no++;	
					$css=($no%2==1)? '' : 'class="bg"';
				?>
				<tr <?=$css;?> >
					<td><?=anchor(site_url('backend/categories/process/delete/'.$id),'[delete]').' | '.
				    	   anchor(site_url('backend/categories/form/update/'.$id),'[update]');?></td>
				    <td><?=$row->ProductID;?></td>
				    <td><?=$row->ProductName;?></td>
					<td><?=$row->SupplierID;?></td>
				    <td><?=$row->CategoryID;?></td>
					<td><?=$row->QuantityPerUnit;?></td>
				    <td><?=$row->UnitPrice;?></td>
					<td><?=$row->UnitsInStock;?></td>
				    <td><?=$row->UnitsOnOrder;?></td>
					<td><?=$row->ReorderLevel;?></td>
				    <td><?=$row->Discontinued;?></td>
				</tr>
				<?php  endforeach; ?>
			</table>