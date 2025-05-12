@extends('dashboard.master')
@section('title')
مدرسة ليرن|الصفحة الرئيسية للمستويات
@stop
@section('content')

<main class="page-content">

  <button class="btn btn-primary col-12" data-bs-toggle="modal" data-bs-target="#stagesModal">
                  عرض المراحل الدراسية
                </button>

 <div class="modal fade" id="stagesModal" tabindex="-1" aria-labelledby="stagesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="stagesModalLabel">المراحل الدراسية</h5>
              <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="إغلاق"></button>
            </div>
            <div class="modal-body">

              <div class="container">

                <!-- المرحلة الابتدائية -->
                <div class="mb-4">
                  <div class="d-flex align-items-center mb-2">
                    <input class="form-check-input me-2 master-checkbox" type="checkbox" id="primary-master" data-target=".primary-group">
                    <label class="form-label fw-bold mb-0" for="primary-master">المرحلة الابتدائية</label>
                  </div>
                  <div class="d-flex flex-wrap gap-3 primary-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox"  id="primary1">
                      <label class="form-check-label" for="primary1">الأول</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input"  type="checkbox" id="primary2">
                      <label class="form-check-label" for="primary2">الثاني</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input"   type="checkbox" id="primary3">
                      <label class="form-check-label" for="primary3">الثالث</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input"   type="checkbox" id="primary4">
                      <label class="form-check-label" for="primary4">الرابع</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input"  type="checkbox" id="primary5">
                      <label class="form-check-label" for="primary5">الخامس</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="primary6">
                      <label class="form-check-label" for="primary6">السادس</label>
                    </div>
                  </div>
                </div>

                <!-- المرحلة الإعدادية -->
                <div class="mb-4">
                  <div class="d-flex align-items-center mb-2">
                    <input class="form-check-input me-2 master-checkbox" type="checkbox" id="prep-master" data-target=".prep-group">
                    <label class="form-label fw-bold mb-0" for="prep-master">المرحلة الإعدادية</label>
                  </div>
                  <div class="d-flex flex-wrap gap-3 prep-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="prep1">
                      <label class="form-check-label" for="prep1">السابع</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="prep2">
                      <label class="form-check-label" for="prep2">الثامن</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="prep3">
                      <label class="form-check-label" for="prep3">التاسع</label>
                    </div>
                  </div>
                </div>

                <!-- المرحلة الثانوية -->
                <div class="mb-4">
                  <div class="d-flex align-items-center mb-2">
                    <input class="form-check-input me-2 master-checkbox" type="checkbox" id="sec-master" data-target=".sec-group">
                    <label class="form-label fw-bold mb-0" for="sec-master">المرحلة الثانوية</label>
                  </div>
                  <div class="d-flex flex-wrap gap-3 sec-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="sec1">
                      <label class="form-check-label" for="sec1">العاشر</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="sec2">
                      <label class="form-check-label" for="sec2">الحادي عشر</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="sec3">
                      <label class="form-check-label" for="sec3">الثاني عشر</label>
                    </div>
                  </div>
                </div>

              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
              <button type="button" class="btn btn-primary">حفظ</button>
            </div>
          </div>
        </div>
      </div>


              <div class="row">
                <div class="col-12 col-lg-12 col-xl-12 d-flex">
                  <div class="card radius-10 w-100">
                    <div class="card-header bg-transparent">
                      <div class="row g-3 align-items-center">
                        <div class="col">
                          <h5 class="mb-0">جميع المستويات</h5>
                        </div>
                        <div class="col">
                          <div class="d-flex align-items-center justify-content-end gap-3 cursor-pointer">
                            <div class="dropdown">
                              <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown" aria-expanded="false"><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                  <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                       </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table id="datatable"class="table align-middle mb-0">
                          <thead class="table-light">
                            <tr>
                              <th>#</th>
                              <th>الاسم</th>
                              <th>المرحلة</th>
                              <th>العمليات</th>
                            </tr>
                          </thead>
                          <tbody>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

              </div>


            </main>
@stop
@section('js')
<script>
    $('#datatable').DataTable({
        processing:true,
        serverSide:true,
        responsive:true,
        ajax:{
         url:'{{route('dash.grade.getdata') }}'
        },
        columns:[
            {
            data:'DT_RowIndex',
            name:'DT_RowIndex',
            orderable:false,
            searchable:false,
          },
           {
            data:'name',
            name:'name',
            title:'الاسم',
            orderable:true,
            searchable:true,
          },
          {
            data:'stage',
            name:'stage_id',
            title:'المرحلة',
            orderable:true,
            searchable:true,
          },
          {
            data:'action',
            name:'action',
            title:'العمليات',
            orderable:false,
            searchable:false,
          },
        ],
    language:{
        url:'//cdn.datatables.net/plug-ins/1.13.4/i18n/ar.json'
    }

    });
$('.master-checkbox').on('change', function() {
    var target = $(this).data('target');
    var checked = $(this).prop('checked');

    if (!checked) {
      $(target).find('input[type=checkbox]').prop('disabled', true); // تعطيل التشيك بوكسات
    } else {
      $(target).find('input[type=checkbox]').prop('disabled', false); // تمكين التشيك بوكسات
    }
  });




</script>
@stop
