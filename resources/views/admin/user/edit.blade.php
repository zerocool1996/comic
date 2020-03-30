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
			<li class="breadcrumb-item"><a href="#">Quản Trị Viên</a></li>
			<li class="breadcrumb-item active">Chỉnh sửa </li>
		</ul>
	</div>
	<section class="no-padding-top">
		<div class="container-fluid">
			<div class="row">
				<!-- Form Elements -->
				<div class="col-lg-12">
					<div class="block col-sm-8">
						<div class="title"><strong>Chỉnh sửa</strong></div>
						<div class="block-body">
                            <form class="form-horizontal" action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="POST">
								@csrf
								<div class="form-group row">
									<strong class="col-sm-3 form-control-label">Email</strong>
									<div class="col-sm-9">
                                        <input class="form-control" type="email" name="email" value="{{ $user->email }}"  placeholder="Nhập Tài Khoản" value="" autocomplete="off" required >
									</div>
                                </div>
								<div class="line"></div>
								<div class="form-group row">
									<strong class="col-sm-3 form-control-label">Họ và Tên</strong>
									<div class="col-sm-4">
										<input placeholder="Họ" value="{{ $user->first_name }}" name="firstname" type="text" class="form-control" required>
									</div>
									<div class="col-sm-1"></div>
									<div class="col-sm-4">
                                        <input placeholder="Tên" value="{{ $user->last_name }}" name="lastname" type="text" class="form-control" required>
									</div>
								</div>
								<div class="line"></div>
								<div class="form-group row">
									<strong class="col-sm-3 form-control-label">Giới Tính</strong>
									<div class="col-sm-9">
										<input id="radioCustom1" type="radio"  value="1" name="gender" class="radio-template" {{ ($user->gender_id == 1) ? 'checked': '' }}>
										<label for="radioCustom1">Nam</label>
										<input style="margin-left : 100px" id="radioCustom2" type="radio" value="2" name="gender" class="radio-template" {{ ($user->gender_id == 2) ? 'checked': '' }}>
										<label for="radioCustom2">Nữ</label>
										<input style="margin-left : 100px" id="radioCustom3" type="radio" value="3" name="gender" class="radio-template" {{ ($user->gender_id == 3) ? 'checked': '' }}>
										<label for="radioCustom3">Khác</label>
									</div>
								</div>
								<div class="line"></div>
								<div class="form-group row">
									<strong class="col-sm-3 form-control-label">Địa Chỉ</strong>
									<div class="col-sm-9">
										<input placeholder="Nhập Địa Chỉ" value="{{ $user->address }}" name="address" type="text" class="form-control">
									</div>
								</div>
								<div class="line"></div>
								<div class="form-group row">
									<strong class="col-sm-3 form-control-label">Số Điện Thoại</strong>
									<div class="col-sm-3">
										<input type="text" value="{{ $user->tel }}" name="tel" class="form-control">
									</div>
									{{-- <div class="col-sm-3">
										<input type="text" value="" name="tel-2" class="form-control">
									</div>
									<div class="col-sm-3">
										<input type="text" value="" name="tel-3" class="form-control">
									</div> --}}
								</div>
								<div class="line"></div>
								<div class="form-group row">
									<div class="col-sm-9 ml-auto">
										<button type="reset" class="btn btn-danger">Hủy</button>
										<button type="submit" class="btn btn-success">Hoàn Thành</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
