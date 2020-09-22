@extends('layouts.admin')@section('title', 'Edit Transaction - ') 
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.income.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.incomes.update", [$income->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="income_category_id">{{ trans('cruds.income.fields.income_category') }}</label>
                <select class="form-control select2 {{ $errors->has('income_category') ? 'is-invalid' : '' }}" name="income_category_id" id="income_category_id">
                    @foreach($income_categories as $id => $income_category)
                        <option value="{{ $id }}" {{ ($income->income_category ? $income->income_category->id : old('income_category_id')) == $id ? 'selected' : '' }}>{{ $income_category }}</option>
                    @endforeach
                </select>
                @if($errors->has('income_category'))
                    <span class="text-danger">{{ $errors->first('income_category') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.income_category_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="entry_date">{{ trans('cruds.income.fields.entry_date') }}</label>
                <input class="form-control date {{ $errors->has('entry_date') ? 'is-invalid' : '' }}" type="text" name="entry_date" id="entry_date" value="{{ old('entry_date', $income->entry_date) }}" required>
                @if($errors->has('entry_date'))
                    <span class="text-danger">{{ $errors->first('entry_date') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.entry_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount">{{ trans('cruds.income.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" name="amount" id="amount" value="{{ old('amount', $income->amount) }}" step="0.01" required>
                @if($errors->has('amount'))
                    <span class="text-danger">{{ $errors->first('amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.income.fields.description') }}</label>
                <input class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" type="text" name="description" id="description" value="{{ old('description', $income->description) }}">
                @if($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.income.fields.assembly_secretary_approval') }}</label>
                @foreach(App\Income::ASSEMBLY_SECRETARY_APPROVAL_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('assembly_secretary_approval') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="assembly_secretary_approval_{{ $key }}" name="assembly_secretary_approval" value="{{ $key }}" {{ old('assembly_secretary_approval', $income->assembly_secretary_approval) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="assembly_secretary_approval_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('assembly_secretary_approval'))
                    <span class="text-danger">{{ $errors->first('assembly_secretary_approval') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.assembly_secretary_approval_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.income.fields.assembly_pastor_approval') }}</label>
                @foreach(App\Income::ASSEMBLY_PASTOR_APPROVAL_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('assembly_pastor_approval') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="assembly_pastor_approval_{{ $key }}" name="assembly_pastor_approval" value="{{ $key }}" {{ old('assembly_pastor_approval', $income->assembly_pastor_approval) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="assembly_pastor_approval_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('assembly_pastor_approval'))
                    <span class="text-danger">{{ $errors->first('assembly_pastor_approval') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.assembly_pastor_approval_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.income.fields.district_pastor_approval') }}</label>
                @foreach(App\Income::DISTRICT_PASTOR_APPROVAL_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('district_pastor_approval') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="district_pastor_approval_{{ $key }}" name="district_pastor_approval" value="{{ $key }}" {{ old('district_pastor_approval', $income->district_pastor_approval) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="district_pastor_approval_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('district_pastor_approval'))
                    <span class="text-danger">{{ $errors->first('district_pastor_approval') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.district_pastor_approval_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.income.fields.district_secretary_approval') }}</label>
                @foreach(App\Income::DISTRICT_SECRETARY_APPROVAL_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('district_secretary_approval') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="district_secretary_approval_{{ $key }}" name="district_secretary_approval" value="{{ $key }}" {{ old('district_secretary_approval', $income->district_secretary_approval) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="district_secretary_approval_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('district_secretary_approval'))
                    <span class="text-danger">{{ $errors->first('district_secretary_approval') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.district_secretary_approval_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.income.fields.district_treasurer_approval') }}</label>
                @foreach(App\Income::DISTRICT_TREASURER_APPROVAL_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('district_treasurer_approval') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="district_treasurer_approval_{{ $key }}" name="district_treasurer_approval" value="{{ $key }}" {{ old('district_treasurer_approval', $income->district_treasurer_approval) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="district_treasurer_approval_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('district_treasurer_approval'))
                    <span class="text-danger">{{ $errors->first('district_treasurer_approval') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.district_treasurer_approval_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.income.fields.area_pastor_approval') }}</label>
                @foreach(App\Income::AREA_PASTOR_APPROVAL_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('area_pastor_approval') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="area_pastor_approval_{{ $key }}" name="area_pastor_approval" value="{{ $key }}" {{ old('area_pastor_approval', $income->area_pastor_approval) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="area_pastor_approval_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('area_pastor_approval'))
                    <span class="text-danger">{{ $errors->first('area_pastor_approval') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.area_pastor_approval_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.income.fields.area_secretary_approval') }}</label>
                @foreach(App\Income::AREA_SECRETARY_APPROVAL_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('area_secretary_approval') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="area_secretary_approval_{{ $key }}" name="area_secretary_approval" value="{{ $key }}" {{ old('area_secretary_approval', $income->area_secretary_approval) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="area_secretary_approval_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('area_secretary_approval'))
                    <span class="text-danger">{{ $errors->first('area_secretary_approval') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.area_secretary_approval_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.income.fields.area_treasurer_approval') }}</label>
                @foreach(App\Income::AREA_TREASURER_APPROVAL_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('area_treasurer_approval') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="area_treasurer_approval_{{ $key }}" name="area_treasurer_approval" value="{{ $key }}" {{ old('area_treasurer_approval', $income->area_treasurer_approval) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="area_treasurer_approval_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('area_treasurer_approval'))
                    <span class="text-danger">{{ $errors->first('area_treasurer_approval') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.area_treasurer_approval_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="tithe_offering">{{ trans('cruds.income.fields.tithe_offering') }}</label>
                <input class="form-control {{ $errors->has('tithe_offering') ? 'is-invalid' : '' }}" type="number" name="tithe_offering" id="tithe_offering" value="{{ old('tithe_offering', $income->tithe_offering) }}" step="0.01">
                @if($errors->has('tithe_offering'))
                    <span class="text-danger">{{ $errors->first('tithe_offering') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.tithe_offering_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="total_amount">{{ trans('cruds.income.fields.total_amount') }}</label>
                <input class="form-control {{ $errors->has('total_amount') ? 'is-invalid' : '' }}" type="number" name="total_amount" id="total_amount" value="{{ old('total_amount', $income->total_amount) }}" step="0.01" required>
                @if($errors->has('total_amount'))
                    <span class="text-danger">{{ $errors->first('total_amount') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.income.fields.total_amount_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection