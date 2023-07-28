<?php
return array (
  'passport' => 
  array (
    'attachment-info' => 
    array (
      'add' => 
      array (
        'code' => 'passport_attachment-info_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/attachment-infos',
        'callback' => 'ModulePassport\\Controllers\\AttachmentInfoController@addGeneral',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_attachment-info_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-infos',
        'callback' => 'ModulePassport\\Controllers\\AttachmentInfoController@listinfoGeneral',
      ),
      'view' => 
      array (
        'code' => 'passport_attachment-info_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-infos/{id}',
        'callback' => 'ModulePassport\\Controllers\\AttachmentInfoController@viewGeneral',
      ),
    ),
    'attachment-path' => 
    array (
      'add' => 
      array (
        'code' => 'passport_attachment-path_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/attachment-paths',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@addGeneral',
      ),
      'create' => 
      array (
        'code' => 'passport_attachment-path_create',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/attachment-paths/create',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@create',
      ),
      'delete' => 
      array (
        'code' => 'passport_attachment-path_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/attachment-paths/{id?}',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@deleteGeneral',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_attachment-path_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-paths',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@listinfoGeneral',
      ),
      'path' => 
      array (
        'code' => 'passport_attachment-path_path',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-paths/path',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@path',
      ),
      'update' => 
      array (
        'code' => 'passport_attachment-path_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/attachment-paths/{id?}',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@updateGeneral',
      ),
      'view' => 
      array (
        'code' => 'passport_attachment-path_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-paths/{id}',
        'callback' => 'ModulePassport\\Controllers\\AttachmentPathController@viewGeneral',
      ),
    ),
    'attachment-video' => 
    array (
      'listinfo' => 
      array (
        'code' => 'passport_attachment-video_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-videos',
        'callback' => 'ModulePassport\\Controllers\\AttachmentVideoController@listinfoGeneral',
      ),
      'view' => 
      array (
        'code' => 'passport_attachment-video_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachment-videos/{id}',
        'callback' => 'ModulePassport\\Controllers\\AttachmentVideoController@viewGeneral',
      ),
    ),
    'attachment' => 
    array (
      'add' => 
      array (
        'code' => 'passport_attachment_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/attachments',
        'callback' => 'ModulePassport\\Controllers\\AttachmentController@addGeneral',
      ),
      'delete' => 
      array (
        'code' => 'passport_attachment_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/attachments/{id?}',
        'callback' => 'ModulePassport\\Controllers\\AttachmentController@deleteGeneral',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_attachment_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachments',
        'callback' => 'ModulePassport\\Controllers\\AttachmentController@listinfoGeneral',
      ),
      'update' => 
      array (
        'code' => 'passport_attachment_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/attachments/{id?}',
        'callback' => 'ModulePassport\\Controllers\\AttachmentController@updateGeneral',
      ),
      'upload' => 
      array (
        'code' => 'passport_attachment_upload',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/attachments/upload',
        'callback' => 'ModulePassport\\Controllers\\AttachmentController@upload',
      ),
      'view' => 
      array (
        'code' => 'passport_attachment_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/attachments/{id}',
        'callback' => 'ModulePassport\\Controllers\\AttachmentController@viewGeneral',
      ),
    ),
    'managerlog' => 
    array (
      'listinfo' => 
      array (
        'code' => 'passport_managerlog_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/managerlogs',
        'callback' => 'ModulePassport\\Controllers\\ManagerlogController@listinfoGeneral',
      ),
    ),
    'manager' => 
    array (
      'add' => 
      array (
        'code' => 'passport_manager_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/managers',
        'callback' => 'ModulePassport\\Controllers\\ManagerController@addGeneral',
      ),
      'delete' => 
      array (
        'code' => 'passport_manager_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/managers/{id}',
        'callback' => 'ModulePassport\\Controllers\\ManagerController@deleteGeneral',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_manager_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/managers',
        'callback' => 'ModulePassport\\Controllers\\ManagerController@listinfoGeneral',
      ),
      'update' => 
      array (
        'code' => 'passport_manager_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/managers/{id}',
        'callback' => 'ModulePassport\\Controllers\\ManagerController@updateGeneral',
      ),
    ),
    'permission' => 
    array (
      'add' => 
      array (
        'code' => 'passport_permission_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/permissions',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@addGeneral',
      ),
      'cache' => 
      array (
        'code' => 'passport_permission_cache',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/permissions/cache',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@cache',
      ),
      'delete' => 
      array (
        'code' => 'passport_permission_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/permissions/{code}',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@deleteGeneral',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_permission_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/permissions',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@listinfoGeneral',
      ),
      'listinfo-tree' => 
      array (
        'code' => 'passport_permission_listtree',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/permissions/listinfo-tree',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@listinfoTree',
      ),
      'update' => 
      array (
        'code' => 'passport_permission_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/permissions/{code}',
        'callback' => 'ModulePassport\\Controllers\\PermissionController@updateGeneral',
      ),
    ),
    'region' => 
    array (
      'add' => 
      array (
        'code' => 'passport_region_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/regions',
        'callback' => 'ModulePassport\\Controllers\\RegionController@addGeneral',
      ),
      'cache' => 
      array (
        'code' => 'passport_region_cache',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/regions/cache',
        'callback' => 'ModulePassport\\Controllers\\RegionController@cache',
      ),
      'delete' => 
      array (
        'code' => 'passport_region_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/regions/{code}',
        'callback' => 'ModulePassport\\Controllers\\RegionController@deleteGeneral',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_region_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/regions',
        'callback' => 'ModulePassport\\Controllers\\RegionController@listinfoGeneral',
      ),
      'listinfo-tree' => 
      array (
        'code' => 'passport_region_listtree',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/regions/listinfo-tree',
        'callback' => 'ModulePassport\\Controllers\\RegionController@listinfoTree',
      ),
      'update' => 
      array (
        'code' => 'passport_region_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/regions/{code}',
        'callback' => 'ModulePassport\\Controllers\\RegionController@updateGeneral',
      ),
    ),
    'resource' => 
    array (
      'add' => 
      array (
        'code' => 'passport_resource_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/resources',
        'callback' => 'ModulePassport\\Controllers\\ResourceController@addGeneral',
      ),
      'cache' => 
      array (
        'code' => 'passport_resource_cache',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/resources/cache',
        'callback' => 'ModulePassport\\Controllers\\ResourceController@cache',
      ),
      'delete' => 
      array (
        'code' => 'passport_resource_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/resources/{code}',
        'callback' => 'ModulePassport\\Controllers\\ResourceController@deleteGeneral',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_resource_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/resources',
        'callback' => 'ModulePassport\\Controllers\\ResourceController@listinfoGeneral',
      ),
      'update' => 
      array (
        'code' => 'passport_resource_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/resources/{code}',
        'callback' => 'ModulePassport\\Controllers\\ResourceController@updateGeneral',
      ),
    ),
    'role' => 
    array (
      'add' => 
      array (
        'code' => 'passport_role_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/roles',
        'callback' => 'ModulePassport\\Controllers\\RoleController@addGeneral',
      ),
      'authority' => 
      array (
        'code' => 'passport_role_authority',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/roles/{code}',
        'callback' => 'ModulePassport\\Controllers\\RoleController@authority',
      ),
      'delete' => 
      array (
        'code' => 'passport_role_delete',
        'method' => 
        array (
          0 => 'DELETE',
        ),
        'path' => '/roles/{code}',
        'callback' => 'ModulePassport\\Controllers\\RoleController@deleteGeneral',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_role_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/roles',
        'callback' => 'ModulePassport\\Controllers\\RoleController@listinfoGeneral',
      ),
      'update' => 
      array (
        'code' => 'passport_role_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/roles/{code}',
        'callback' => 'ModulePassport\\Controllers\\RoleController@updateGeneral',
      ),
      'view' => 
      array (
        'code' => 'passport_role_view',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/roles/{code}',
        'callback' => 'ModulePassport\\Controllers\\RoleController@viewGeneral',
      ),
    ),
    'user' => 
    array (
      'add' => 
      array (
        'code' => 'passport_user_add',
        'method' => 
        array (
          0 => 'POST',
        ),
        'path' => '/users',
        'callback' => 'ModulePassport\\Controllers\\UserController@addGeneral',
      ),
      'listinfo' => 
      array (
        'code' => 'passport_user_listinfo',
        'method' => 
        array (
          0 => 'GET',
        ),
        'path' => '/users',
        'callback' => 'ModulePassport\\Controllers\\UserController@listinfoGeneral',
      ),
      'update' => 
      array (
        'code' => 'passport_user_update',
        'method' => 
        array (
          0 => 'PUT',
        ),
        'path' => '/users/{id}',
        'callback' => 'ModulePassport\\Controllers\\UserController@updateGeneral',
      ),
    ),
  ),
);
