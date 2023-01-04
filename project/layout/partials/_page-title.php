<?php
	$page=isset($_GET['page']) ? $_GET['page'] : 'index';  // Get the page name from the URL and set it to page, if it is null set page to index
?>

<!--begin::Page title-->
<div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
	<!--begin::Title-->
	<h1 class="page-heading d-flex text-dark fw-bold fs-3 align-items-center my-0">
	<?php
		if ($page == "Leave-Application" or $page == "Leave-Details") { echo 'Absence'; }
		elseif($page == "Personal-Info" or $page == "Employment-Info") { echo 'User Profile'; } 
		elseif($page == "Add-Employee" or $page == "Employee-Details" or $page == "Leave-Approval" or $page == "Edit-Organization") { echo "Employees"; }
	
	?>
	</h1>
	<!--end::Title-->
	<!--begin::Separator-->
	<span class="h-20px border-gray-300 border-start mx-4"></span>
	<!--end::Separator-->
	<!--begin::Breadcrumb-->
	<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
		<!--begin::Item-->
		<li class="breadcrumb-item text-muted">
			<a href="?page=index" class="text-muted text-hover-primary">Home</a>
		</li>
		<!--end::Item-->
		<!--begin::Item-->
		<li class="breadcrumb-item">
			<span class="bullet bg-gray-400 w-5px h-2px"></span>
		</li>
		<!--end::Item-->
		<!--begin::Item-->
		<li class="breadcrumb-item text-muted"><?php if ($page == 'index') { echo 'Dashboard'; } else { echo ucfirst($page); } ?></li>
		<!--end::Item-->

		
	</ul>
	<!--end::Breadcrumb-->
</div>
<!--end::Page title-->