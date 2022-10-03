<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



	<div class="row">
		<div class="col-lg">
			<table class="table table-hover">
				<?= $this->session->flashdata('message'); ?>
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nama</th>
							<th scope="col">Email</th>
							<th scope="col">Data Created</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($list_user as $lu) : ?>
						<tr>
							<th scope="row"><?= $i; ?></th>
							<td><?= $lu->name ?></td>
							<td><?= $lu->email ?></td>
							<td><?= date('d M Y', $lu->date_created); ?></td>
							<td>
								<a class="badge badge-danger" href="<?= base_url('menu/deleteuser/'.$lu->id); ?>" onclick="return checkdelete()">
									hapus
								</a>
							</td>
						</tr>
						<?php $i++; ?>
						<?php endforeach; ?>
					</tbody>
					</table>
					<script language="javascript" type="text/javascript">
			    function checkdelete(){
			        return confirm('Apakah anda yakin menghapus user ini?');
			    }
			    </script>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<!-- Button trigger modal -->
