@extends('layouts.app')


@section('title', $title)

@section('css')
    <!-- Kalau Ada Plugin Tambahan -->
@endsection

@section('style')
  
@endsection

@section('breadcrumb-title')
    <h3> Halaman {{ $title }}</h3>
@endsection
@section('content')    

<div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">Full Table</h3>
      <div class="block-options">
        <button type="button" class="btn-block-option">
          <i class="si si-settings"></i>
        </button>
      </div>
    </div>
    <div class="block-content">
      <p class="fs-sm text-muted">
        The first way to make a table responsive is to wrap it with <code>&lt;div class=&quot;table-responsive&quot;&gt;&lt;/div&gt;</code>. This way, the table will be horizontally scrollable and all data will be accessible on smaller screens. You could also append the following modifiers to the <code>table-responsive</code> to apply the horizontal scrolling on different screen widths: <code>-sm</code>, <code>-md</code>, <code>-lg</code>, <code>-xl</code>.
      </p>
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-vcenter">
          <thead>
            <tr>
              <th class="text-center" style="width: 100px;">
                <i class="far fa-user"></i>
              </th>
              <th>Name</th>
              <th style="width: 30%;">Email</th>
              <th style="width: 15%;">Access</th>
              <th class="text-center" style="width: 100px;">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-center">
                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar6.jpg" alt="">
              </td>
              <td class="fw-semibold fs-sm">
                <a href="be_pages_generic_profile.html">Laura Carr</a>
              </td>
              <td class="fs-sm">client1<em class="text-muted">@example.com</em></td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-fw fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar4.jpg" alt="">
              </td>
              <td class="fw-semibold fs-sm">
                <a href="be_pages_generic_profile.html">Melissa Rice</a>
              </td>
              <td class="fs-sm">client2<em class="text-muted">@example.com</em></td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-fw fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar6.jpg" alt="">
              </td>
              <td class="fw-semibold fs-sm">
                <a href="be_pages_generic_profile.html">Laura Carr</a>
              </td>
              <td class="fs-sm">client3<em class="text-muted">@example.com</em></td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">VIP</span>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-fw fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
              </td>
              <td class="fw-semibold fs-sm">
                <a href="be_pages_generic_profile.html">Judy Ford</a>
              </td>
              <td class="fs-sm">client4<em class="text-muted">@example.com</em></td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Business</span>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-fw fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td class="text-center">
                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar7.jpg" alt="">
              </td>
              <td class="fw-semibold fs-sm">
                <a href="be_pages_generic_profile.html">Helen Jacobs</a>
              </td>
              <td class="fs-sm">client5<em class="text-muted">@example.com</em></td>
              <td>
                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Trial</span>
              </td>
              <td class="text-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Edit">
                    <i class="fa fa-fw fa-pencil-alt"></i>
                  </button>
                  <button type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Delete">
                    <i class="fa fa-fw fa-times"></i>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  @endsection

  @section('script')
      
  @endsection