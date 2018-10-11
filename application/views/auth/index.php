<div class="card">
	<div class="card-header header-elements-inline">
		<h5 class="card-title"><?php if(isset($miniTitle)) echo $miniTitle; ?></h5>
		<div class="header-elements">
			<div class="list-icons">
				<a class="list-icons-item" data-action="collapse"></a>
				<a class="list-icons-item" data-action="reload"></a>
				<a class="list-icons-item" data-action="#remove"></a>
			</div>
		</div>
	</div>

	<div class="card-body">
		<div id="infoMessage"><?php if(isset($message)) echo $message;?></div>
	</div> 

	<div id="DataTables_Table_2_wrapper" class="dataTables_wrapper no-footer">
		
		<div class="datatable-scroll">
			<table class="table table-bordered table-hover datatable-highlight dataTable no-footer" id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
		<thead>
			<tr role="row">
				<th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="First Name: activate to sort column descending"><?php echo lang('index_fname_th');?>
				</th>
				<th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Last Name: activate to sort column ascending">
				<?php echo lang('index_lname_th');?>
				</th>
				<th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Job Title: activate to sort column ascending">
					<?php echo lang('index_email_th');?>
				</th>
				<th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="DOB: activate to sort column ascending">
					<?php echo lang('index_groups_th');?>
				</th>
				<th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">
					<?php echo lang('index_status_th');?>
				</th>
				<th class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 100px;">
					<?php echo lang('index_action_th');?>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $user):?>
			<tr role="row" class="odd">
				<td class="sorting_1">
					<?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?>
				</td>

				<td class="">
					<?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?>
				</td>
				<td class="">
					<?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?>
				</td>
				<td class="">
					<?php foreach ($user->groups as $group):?>
					<?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                	<?php endforeach?>
				</td>
				<td><span class="badge badge-danger">
					<?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?>
				</span></td>
				<td>
					<?php echo anchor("auth/edit_user/".$user->id, 'Edit',['class'=>'btn btn-success btn-sm']) ;?>
				</td>
			</tr>
		<?php endforeach; ?>

			</tbody>
		</table>
	</div>
	</div>
	</div>

	<p>


		<?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?>
			
	</p>