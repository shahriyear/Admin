<div class="card">
	<div class="card-header header-elements-inline">
		<h5 class="card-title"><?php echo lang('index_heading');?></h5>
		<div class="header-elements">
			<div class="list-icons">
				<a class="list-icons-item" data-action="collapse"></a>
				<a class="list-icons-item" data-action="reload"></a>
				<a class="list-icons-item" data-action="#remove"></a>
			</div>
		</div>
	</div>

	<div class="card-body">
		<?php// echo lang('index_subheading');?>
	</div> 

	<div id="DataTables_Table_2_wrapper" class="dataTables_wrapper no-footer"><div class="datatable-header"><div id="DataTables_Table_2_filter" class="dataTables_filter"><label><span>Filter:</span> <input type="search" class="" placeholder="Type to filter..." aria-controls="DataTables_Table_2"></label></div><div class="dataTables_length" id="DataTables_Table_2_length"><label><span>Show:</span> <select name="DataTables_Table_2_length" aria-controls="DataTables_Table_2" class="select2-hidden-accessible" tabindex="-1" aria-hidden="true"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-DataTables_Table_2_length-7z-container"><span class="select2-selection__rendered" id="select2-DataTables_Table_2_length-7z-container" title="10">10</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></label></div></div><div class="datatable-scroll"><table class="table table-bordered table-hover datatable-highlight dataTable no-footer" id="DataTables_Table_2" role="grid" aria-describedby="DataTables_Table_2_info">
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
					<?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?>
				</td>
			</tr>
		<?php endforeach; ?>

			</tbody>
		</table></div><div class="datatable-footer"><div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">Showing 1 to 10 of 15 entries</div><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate"><a class="paginate_button previous disabled" aria-controls="DataTables_Table_2" data-dt-idx="0" tabindex="0" id="DataTables_Table_2_previous">←</a><span><a class="paginate_button current" aria-controls="DataTables_Table_2" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="DataTables_Table_2" data-dt-idx="2" tabindex="0">2</a></span><a class="paginate_button next" aria-controls="DataTables_Table_2" data-dt-idx="3" tabindex="0" id="DataTables_Table_2_next">→</a></div></div></div>
	</div>

	<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?></p>