@extends('admin.layout.admin')
@section('content')
<div class="page-content">
	<!-- Page Header-->
	<div class="page-header no-margin-bottom">
		<div class="container-fluid">
			<h2 class="h5 no-margin-bottom">Trang Quản Trị Hệ Thống</h2>
		</div>
	</div>
	<!-- Breadcrumb-->
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="/admin-list">Quản Trị Viên</a></li>
			<li class="breadcrumb-item active">Danh Sách</li>
		</ul>
	</div>
	<section class="no-padding-top">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="block margin-bottom-sm">
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>email</th>
										<th>Name</th>
										<th>Sex</th>
										<th>Address</th>
										<th>Tel</th>
										<th>Option</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($users as $user)
										<tr>
											<th scope="row">{{ $user->id }} </th>
											<td>{{ $user->email }}</td>
                                            <td>{{ $user->first_name }}</td>
											<td>{{ $user->AdminGender->name }}</td>
											<td>{{ $user->address }}</td>
											<td>{{ $user->tel }}</td>
											<td>
                                                <a href="{{ route('admin.user.edit', ['id' => $user->id]) }}" title="edit" class="btn btn-info"><i class='far fa-edit'></i></a>
                                                <a data-target="#modal{{ $user->id }}"
                                                    data-toggle="modal" style="cursor:pointer" title="delete" class="btn btn-danger"><i class='fa fa-trash'></i></a>
                                                <div class="modal" id="modal{{ $user->id }}">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                        </div>
                                                        <div class="modal-body">
                                                            Bạn chắc chắn chứ ?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal" style="width:180px; border-radius: 5px">Suy nghĩ lại</button>
                                                            <a href="{{ route('admin.user.destroy',['id' => $user->id]) }}" class="btn btn-danger" style="width:180px; border-radius: 5px" >Chắc chắn</a>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
											</td>
										</tr>
									@endforeach
								</tbody>
                            </table>
                            <div class="paginate">
                                {{ $users->links() }}
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
