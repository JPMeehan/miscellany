<?php use App\Models\CampaignPermission; ?>
@extends('layouts.' . ($ajax ? 'ajax' : 'app'), [
    'title' => __('crud.permissions.title', ['name' => $entity->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => route($entity->pluralType() . '.index'), 'label' => __($entity->pluralType() . '.index.title')],
        ['url' => route($entity->pluralType() . '.show', $entity->child->id), 'label' => $entity->name],
        __('crud.update'),
    ]
])
@inject('campaign', 'App\Services\CampaignService')

@section('content')
    @inject('permissionService', 'App\Services\PermissionService')
@php
    /** @var \App\Services\PermissionService $permissionService */
    $permissions = $permissionService->type($entity->typeId())->entityPermissions($entity);

@endphp

    <div class="panel panel-default">
        @if ($ajax)
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4>{{ __('crud.permissions.title', ['name' => $entity->name]) }}</h4>
            </div>
        @endif
        <div class="panel-body">
            <p class="text-muted">{{ __('crud.permissions.helper') }}</p>

            @include('partials.errors')

            @notEnv('shadow')
            {!! Form::open(['route' => ['entities.permissions', $entity->id], 'method' => 'POST', 'data-shortcut' => 1]) !!}
            @endif
            <table id="crud_permissions" class="table table-hover export-hidden">
                <tbody>
                <tr>
                    <th colspan="5">{{ __('crud.permissions.fields.role') }}</th>
                </tr>
                @foreach ($campaign->campaign()->roles()->withoutAdmin()->get() as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td @if($role->is_public) colspan="4"@endif>
                            <label>
                                {!! Form::checkbox('role[' . $role->id . '][]', CampaignPermission::ACTION_READ, !empty($permissions['role'][$role->id][CampaignPermission::ACTION_READ])) !!}
                                <span class="hidden-xs hidden-sm">{{ __('crud.permissions.actions.read') }}</span>

                                @if ($permissionService->inherited(CampaignPermission::ACTION_READ, $role->id))
                                    <i class="text-green fa fa-check-circle" title="{{ __('crud.permissions.inherited') }}" data-toggle="tooltip"></i>
                                @endif
                            </label>
                        </td>
                        @if (!$role->is_public)
                        <td>
                            <label>
                                {!! Form::checkbox('role[' . $role->id . '][]', CampaignPermission::ACTION_EDIT, !empty($permissions['role'][$role->id][CampaignPermission::ACTION_EDIT])) !!}
                                <span class="hidden-xs hidden-sm">{{ __('crud.permissions.actions.edit') }}</span>

                                @if ($permissionService->inherited(CampaignPermission::ACTION_EDIT, $role->id))
                                    <i class="text-green fa fa-check-circle" title="{{ __('crud.permissions.inherited') }}" data-toggle="tooltip"></i>
                                @endif
                            </label>
                        </td>
                        <td>
                            <label>
                                {!! Form::checkbox('role[' . $role->id . '][]', CampaignPermission::ACTION_DELETE, !empty($permissions['role'][$role->id][CampaignPermission::ACTION_DELETE])) !!}
                                <span class="hidden-xs hidden-sm">{{ __('crud.permissions.actions.delete') }}</span>

                                @if ($permissionService->inherited(CampaignPermission::ACTION_DELETE, $role->id))
                                    <i class="text-green fa fa-check-circle" title="{{ __('crud.permissions.inherited') }}" data-toggle="tooltip"></i>
                                @endif
                            </label>
                        </td>
                        <td>
                            <label>
                                {!! Form::checkbox('role[' . $role->id . '][]', CampaignPermission::ACTION_ENTITY_NOTE, !empty($permissions['role'][$role->id][CampaignPermission::ACTION_ENTITY_NOTE])) !!}
                                <span class="hidden-xs hidden-sm">{{ __('crud.permissions.actions.entity_note') }}</span>

                                @if ($permissionService->inherited(CampaignPermission::ACTION_ENTITY_NOTE, $role->id))
                                    <i class="text-green fa fa-check-circle" title="{{ __('crud.permissions.inherited') }}" data-toggle="tooltip"></i>
                                @endif
                            </label>
                        </td>
                        @endif
                    </tr>
                @endforeach
                <tr>
                    <td colspan="5">&nbsp;</td>
                </tr>
                <tr>
                    <th colspan="5">{{ __('crud.permissions.fields.member') }}</th>
                </tr>
                @foreach ($campaign->campaign()->members()->with('user')->get() as $member)
                    @if (!$member->isAdmin())
                        <tr>
                            <td>{{ $member->user->name }}</td>
                            <td>
                                <label>
                                    {!! Form::checkbox('user[' . $member->user_id . '][]', CampaignPermission::ACTION_READ, !empty($permissions['user'][$member->user_id][CampaignPermission::ACTION_READ])) !!}
                                    <span class="hidden-xs hidden-sm">{{ __('crud.permissions.actions.read') }}</span>

                                    @if ($permissionService->inherited(CampaignPermission::ACTION_READ, 0, $member->user_id))
                                        <i class="text-green fa fa-check-circle" title="{{ __('crud.permissions.inherited_by', [
                               'role' => e($permissionService->inheritedRole(CampaignPermission::ACTION_READ, $member->user_id))
                           ]) }}" data-toggle="tooltip"></i>
                                    @endif
                                </label>
                            </td>
                            <td>
                                <label>
                                    {!! Form::checkbox('user[' . $member->user_id . '][]', CampaignPermission::ACTION_EDIT, !empty($permissions['user'][$member->user_id][CampaignPermission::ACTION_EDIT])) !!}
                                    <span class="hidden-xs hidden-sm">{{ __('crud.permissions.actions.edit') }}</span>

                                    @if ($permissionService->inherited(CampaignPermission::ACTION_EDIT, 0, $member->user_id))
                                        <i class="text-green fa fa-check-circle" title="{{ __('crud.permissions.inherited_by', [
                               'role' => e($permissionService->inheritedRole(CampaignPermission::ACTION_EDIT, $member->user_id))
                           ]) }}" data-toggle="tooltip"></i>
                                    @endif
                                </label>
                            </td>
                            <td>
                                <label>
                                    {!! Form::checkbox('user[' . $member->user_id . '][]', CampaignPermission::ACTION_DELETE, !empty($permissions['user'][$member->user_id][CampaignPermission::ACTION_DELETE])) !!}
                                    <span class="hidden-xs hidden-sm">{{ __('crud.permissions.actions.delete') }}</span>

                                    @if ($permissionService->inherited(CampaignPermission::ACTION_DELETE, 0, $member->user_id))
                                        <i class="text-green fa fa-check-circle" title="{{ __('crud.permissions.inherited_by', [
                               'role' => e($permissionService->inheritedRole(CampaignPermission::ACTION_DELETE, $member->user_id))
                           ]) }}" data-toggle="tooltip"></i>
                                    @endif
                                </label>
                            </td>
                            <td>
                                <label>
                                    {!! Form::checkbox('user[' . $member->user_id . '][]', CampaignPermission::ACTION_ENTITY_NOTE, !empty($permissions['user'][$member->user_id][CampaignPermission::ACTION_ENTITY_NOTE])) !!}
                                    <span class="hidden-xs hidden-sm">{{ __('crud.permissions.actions.entity_note') }}</span>

                                    @if ($permissionService->inherited(CampaignPermission::ACTION_ENTITY_NOTE, 0, $member->user_id))
                                        <i class="text-green fa fa-check-circle" title="{{ __('crud.permissions.inherited_by', [
                               'role' => e($permissionService->inheritedRole(CampaignPermission::ACTION_ENTITY_NOTE, $member->user_id))
                           ]) }}" data-toggle="tooltip"></i>
                                    @endif
                                </label>
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>


            @notEnv('shadow')
            {!! Form::hidden('entity_id', $entity->id) !!}

            <div class="form-group">
                <button class="btn btn-success">{{ __('crud.save') }}</button>
            </div>

            {!! Form::close() !!}
            @endif

        </div>
    </div>
@endsection
