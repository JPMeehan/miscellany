<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box">
            <div class="box-body box-profile">
                @include ('cruds._image')

                <h3 class="profile-username text-center">{{ $model->name }}
                    @if ($model->is_private)
                         <i class="fa fa-lock" title="{{ trans('crud.is_private') }}"></i>
                    @endif
                </h3>

                <ul class="list-group list-group-unbordered">
                    @if ($model->type)
                    <li class="list-group-item">
                        <b>{{ trans('journals.fields.type') }}</b> <span class="pull-right">{{ $model->type }}</span>
                        <br class="clear" />
                    </li>
                    @endif
                    @if ($model->date)
                        <li class="list-group-item">
                            <b>{{ trans('journals.fields.date') }}</b> <span class="pull-right">{{ $model->date }}</span>
                            <br class="clear" />
                        </li>
                    @endif
                    @if ($model->character)
                        <li class="list-group-item">
                            <b>{{ trans('journals.fields.author') }}</b>
                                <span class="pull-right">
                                    <a href="{{ route('characters.show', $model->character_id) }}" data-toggle="tooltip" title="{{ $model->character->tooltip() }}">{{ $model->character->name }}</a>
                                </span>
                            <br class="clear" />
                        </li>
                    @endif
                    @include('cruds.layouts.section')
                </ul>
                @include('.cruds._actions')
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>

    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="{{ (request()->get('tab') == null ? ' active' : '') }}">
                    <a href="#information" data-toggle="tooltip" title="{{ trans('crud.fields.entry') }}">
                        <i class="fa fa-align-justify"></i> <span class="hidden-sm hidden-xs">{{ trans('crud.fields.entry') }}</span></a>
                </li>
                @include('cruds._tabs', ['relations' => false])
            </ul>

            <div class="tab-content">
                <div class="tab-pane {{ (request()->get('tab') == null ? ' active' : '') }}" id="information">
                    @if (!empty($model->history))
                    <div class="post">
                        <p>{!! $model->history !!}</p>
                    </div>
                    @endif
                </div>
                @include('cruds._panes', ['relations' => false])
            </div>
        </div>

        <!-- actions -->
    </div>
</div>
