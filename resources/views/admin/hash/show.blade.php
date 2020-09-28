@extends('layouts.admin') @section('title', 'Show Transaction - ')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.income.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.incomes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.id') }}
                        </th>
                        <td>
                            {{ $income->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.income_category') }}
                        </th>
                        <td>
                            {{ $income->income_category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.entry_date') }}
                        </th>
                        <td>
                            {{ $income->entry_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.amount') }}
                        </th>
                        <td>
                            {{ $income->amount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.description') }}
                        </th>
                        <td>
                            {{ $income->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.assembly_secretary_approval') }}
                        </th>
                        <td>
                            {{ App\Income::ASSEMBLY_SECRETARY_APPROVAL_RADIO[$income->assembly_secretary_approval] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.assembly_pastor_approval') }}
                        </th>
                        <td>
                            {{ App\Income::ASSEMBLY_PASTOR_APPROVAL_RADIO[$income->assembly_pastor_approval] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.district_pastor_approval') }}
                        </th>
                        <td>
                            {{ App\Income::DISTRICT_PASTOR_APPROVAL_RADIO[$income->district_pastor_approval] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.district_secretary_approval') }}
                        </th>
                        <td>
                            {{ App\Income::DISTRICT_SECRETARY_APPROVAL_RADIO[$income->district_secretary_approval] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.district_treasurer_approval') }}
                        </th>
                        <td>
                            {{ App\Income::DISTRICT_TREASURER_APPROVAL_RADIO[$income->district_treasurer_approval] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.area_pastor_approval') }}
                        </th>
                        <td>
                            {{ App\Income::AREA_PASTOR_APPROVAL_RADIO[$income->area_pastor_approval] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.area_secretary_approval') }}
                        </th>
                        <td>
                            {{ App\Income::AREA_SECRETARY_APPROVAL_RADIO[$income->area_secretary_approval] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.area_treasurer_approval') }}
                        </th>
                        <td>
                            {{ App\Income::AREA_TREASURER_APPROVAL_RADIO[$income->area_treasurer_approval] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.tithe_offering') }}
                        </th>
                        <td>
                            {{ $income->tithe_offering }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.income.fields.total_amount') }}
                        </th>
                        <td>
                            {{ $income->total_amount }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.incomes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection