@extends('layouts.admin')@section('title', 'All Transaction - ') 
@section('content')
@can('income_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('remittance.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.income.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.income.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Income">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.income.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.income_category') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.entry_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.description') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.assembly_secretary_approval') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.assembly_pastor_approval') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.district_pastor_approval') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.district_secretary_approval') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.district_treasurer_approval') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.area_pastor_approval') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.area_secretary_approval') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.area_treasurer_approval') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.tithe_offering') }}
                        </th>
                        <th>
                            {{ trans('cruds.income.fields.total_amount') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($incomes as $key => $income)
                        <tr data-entry-id="{{ $income->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $income->id ?? '' }}
                            </td>
                            <td>
                                {{ $income->income_category->name ?? '' }}
                            </td>
                            <td>
                                {{ $income->entry_date ?? '' }}
                            </td>
                            <td>
                                {{ $income->amount ?? '' }}
                            </td>
                            <td>
                                {{ $income->description ?? '' }}
                            </td>
                            <td>
                                {{ App\Remittance::ASSEMBLY_SECRETARY_APPROVAL_RADIO[$income->assembly_secretary_approval] ?? '' }}
                            </td>
                            <td>
                                {{ App\Remittance::ASSEMBLY_PASTOR_APPROVAL_RADIO[$income->assembly_pastor_approval] ?? '' }}
                            </td>
                            <td>
                                {{ App\Remittance::DISTRICT_PASTOR_APPROVAL_RADIO[$income->district_pastor_approval] ?? '' }}
                            </td>
                            <td>
                                {{ App\Remittance::DISTRICT_SECRETARY_APPROVAL_RADIO[$income->district_secretary_approval] ?? '' }}
                            </td>
                            <td>
                                {{ App\Remittance::DISTRICT_TREASURER_APPROVAL_RADIO[$income->district_treasurer_approval] ?? '' }}
                            </td>
                            <td>
                                {{ App\Remittance::AREA_PASTOR_APPROVAL_RADIO[$income->area_pastor_approval] ?? '' }}
                            </td>
                            <td>
                                {{ App\Remittance::AREA_SECRETARY_APPROVAL_RADIO[$income->area_secretary_approval] ?? '' }}
                            </td>
                            <td>
                                {{ App\Remittance::AREA_TREASURER_APPROVAL_RADIO[$income->area_treasurer_approval] ?? '' }}
                            </td>
                            <td>
                                {{ $income->tithe_offering ?? '' }}
                            </td>
                            <td>
                                {{ $income->total_amount ?? '' }}
                            </td>
                            <td>
                                @can('income_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.incomes.show', $income->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('income_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.incomes.edit', $income->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('income_delete')
                                    <form action="{{ route('admin.incomes.destroy', $income->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('income_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('remittance.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Income:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection