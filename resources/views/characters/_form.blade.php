@inject('location', 'App\Services\LocationService')
@inject('random', 'App\Services\RandomCharacterService')
@inject('formService', 'App\Services\FormService')

<?php // Dirty hack to know if we need the prefill or the random generator
$isRandom = false;
if (request()->route()->getName() == 'characters.random') {
    $isRandom = true;
}
?>

{{ csrf_field() }}
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>{{ trans('crud.panels.general_information') }}</h4>
            </div>
            <div class="panel-body">
                <div class="form-group required">
                    <label>{{ trans('characters.fields.name') }}</label>
                    {!! Form::text('name', ($isRandom ? $random->generate('name') : $formService->prefill('name', $source)), ['placeholder' => trans('characters.fields.name'), 'class' => 'form-control', 'maxlength' => 191]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('characters.fields.title') }}</label>
                    {!! Form::text('title', ($isRandom ? $random->generate('title') : $formService->prefill('title', $source)), ['placeholder' => trans('characters.placeholders.title'), 'class' => 'form-control', 'maxlength' => 191]) !!}
                </div>
                @if ($campaign->enabled('families'))
                <div class="form-group">
                    {!! Form::select2(
                        'family_id',
                        (isset($model) && $model->family ? $model->family : $formService->prefillSelect('family', $source)),
                        App\Models\Family::class,
                        true
                    ) !!}
                </div>
                @endif
                @if ($campaign->enabled('locations'))
                    <div class="form-group">
                        {!! Form::select2(
                            'location_id',
                            (isset($model) && $model->location ? $model->location : $formService->prefillSelect('location', $source)),
                            App\Models\Location::class,
                            true
                        ) !!}
                    </div>
                @endif
                @if ($campaign->enabled('sections'))
                    <div class="form-group">
                        {!! Form::select2(
                            'section_id',
                            (isset($model) && $model->section ? $model->section : $formService->prefillSelect('section', $source)),
                            App\Models\Section::class,
                            true
                        ) !!}
                    </div>
                @endif
                <div class="form-group">
                    <label>{{ trans('characters.fields.race') }}</label>
                    {!! Form::text('race', ($isRandom ? $random->generate('race') : $formService->prefill('race', $source)), ['placeholder' => trans('characters.placeholders.race'), 'class' => 'form-control', 'maxlength' => 45]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('characters.fields.type') }}</label>
                    {!! Form::text('type', ($isRandom ? $random->generate('type') : $formService->prefill('type', $source)), ['placeholder' => trans('characters.placeholders.type'), 'class' => 'form-control', 'maxlength' => 191]) !!}
                </div>

                <div class="form-group">
                    {!! Form::hidden('is_dead', 0) !!}
                    <label>{!! Form::checkbox('is_dead', 1, (!empty($model) ? $model->is_dead : (!empty($source) ? $formService->prefill('is_dead', $source) : 0))) !!}
                        {{ trans('characters.fields.is_dead') }}
                    </label>
                    <p class="help-block">{{ trans('characters.hints.is_dead') }}</p>
                </div>

                @if (Auth::user()->isAdmin())
                    <hr>
                    @include('cruds.fields.private')
                @endif
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>{{ trans('crud.panels.appearance') }}</h4>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label>{{ trans('characters.fields.age') }}</label>
                    {!! Form::text('age', ($isRandom ? $random->generateNumber(1, 300) : $formService->prefill('age', $source)), ['placeholder' => trans('characters.placeholders.age'), 'class' => 'form-control', 'maxlength' => 25]) !!}
                </div>
                <div class="form-group">
                    <label>{{ trans('characters.fields.sex') }}</label>
                    {!! Form::text('sex', ($isRandom ? $random->generate('sex') : $formService->prefill('sex', $source)), ['placeholder' => trans('characters.placeholders.sex'), 'class' => 'form-control', 'maxlength' => 10]) !!}
                </div>
                @foreach ((isset($model) ? $model->characterTraits()->appearance()->get() : $formService->prefillCharacterAppearance($source)) as $trait)
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::text('appearance_name[' . $trait->id . ']', $trait->name, [
                                    'class' => 'form-control',
                                    'placeholder' => trans('characters.placeholders.appearance_name')
                                ]) !!}
                            </div>
                            <div class="col-md-8">
                                {!! Form::text('appearance_entry[' . $trait->id . ']', $trait->entry, [
                                    'class' => 'form-control',
                                    'placeholder' => trans('characters.placeholders.appearance_entry')
                                ]) !!}
                            </div>
                            <div class="col-md-1">
                                <a href="#" class="personality-delete btn btn-danger pull-right" title="{{ trans('crud.remove') }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <a class="btn btn-default" id="add_appearance" href="#" title="{{ trans('characters.actions.add_appearance') }}">
                    <i class="fa fa-plus"></i> {{ trans('characters.actions.add_appearance') }}
                </a>
                <div id="template_appearance" style="display: none">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::text('appearance_name[]', null, [
                                    'class' => 'form-control',
                                    'placeholder' => trans('characters.placeholders.appearance_name')
                                ]) !!}
                            </div>
                            <div class="col-md-8">
                                {!! Form::text('appearance_entry[]', null, [
                                    'class' => 'form-control',
                                    'placeholder' => trans('characters.placeholders.appearance_entry')
                                ]) !!}
                            </div>
                            <div class="col-md-1">
                                <a href="#" class="personality-delete btn btn-danger pull-right" title="{{ trans('crud.remove') }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group"><br /></div>

                @include('cruds.fields.image')
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>{{ trans('crud.panels.history') }}</h4>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::textarea('history', $formService->prefill('history', $source), ['placeholder' => trans('characters.placeholders.history'), 'class' => 'form-control html-editor', 'id' => 'history']) !!}
                </div>
            </div>
            <div class="panel-footer">
                <a href="{{ route('helpers.link') }}" target="_blank">{{ trans('crud.linking_help') }}</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>{{ trans('characters.sections.personality') }}</h4>
            </div>
            <div class="panel-body">
                @foreach ((isset($model) ? $model->characterTraits()->personality()->get() : $formService->prefillCharacterPersonality($source)) as $trait)
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::text('personality_name[' . $trait->id . ']', $trait->name, [
                                    'class' => 'form-control',
                                    'placeholder' => trans('characters.placeholders.personality_name')
                                ]) !!}
                            </div>
                            <div class="col-md-8">
                                {!! Form::textarea('personality_entry[' . $trait->id . ']', $trait->entry, [
                                    'class' => 'form-control',
                                    'placeholder' => trans('characters.placeholders.personality_entry'),
                                    'rows' => 4
                                ]) !!}
                            </div>
                            <div class="col-md-1">
                                <a href="#" class="personality-delete btn btn-danger pull-right" title="{{ trans('crud.remove') }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <a class="btn btn-default" id="add_personality" href="#" title="{{ trans('characters.actions.add_personality') }}">
                    <i class="fa fa-plus"></i> {{ trans('characters.actions.add_personality') }}
                </a>
                <div id="template_personality" style="display: none">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                {!! Form::text('personality_name[]', null, [
                                    'class' => 'form-control',
                                    'placeholder' => trans('characters.placeholders.personality_name')
                                ]) !!}
                            </div>
                            <div class="col-md-8">
                                {!! Form::textarea('personality_entry[]', null, [
                                    'class' => 'form-control',
                                    'placeholder' => trans('characters.placeholders.personality_entry'),
                                    'rows' => 4
                                ]) !!}
                            </div>
                            <div class="col-md-1">
                                <a href="#" class="personality-delete btn btn-danger pull-right" title="{{ trans('crud.remove') }}">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                @if (Auth::user()->id < 1700)
                    <div class="form-group">
                        <p class="help-block">{{ trans('characters.helpers.free') }}</p>
                    </div>
                @endif
            </div>
            <div class="panel-footer">
                <div class="form-group">
                    {!! Form::hidden('is_personality_visible', 0) !!}
                    <label>{!! Form::checkbox('is_personality_visible', 1, (!empty($model) ? $model->is_personality_visible : (!empty($source) ? $formService->prefill('is_personality_visible', $source) : 1))) !!}
                        {{ trans('characters.fields.is_personality_visible') }}
                    </label>
                    <p class="help-block">{{ trans('characters.hints.is_personality_visible') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <button class="btn btn-success">{{ trans('crud.save') }}</button>
        <button class="btn btn-default" name="submit-new">{{ trans('crud.save_and_new') }}</button>
        {!! trans('crud.or_cancel', ['url' => (!empty($cancel) ? $cancel : url()->previous())]) !!}
    </div>
</div>
