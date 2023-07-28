<?php
return [
  'passport-attachment' => 
  [
    'controller' => 'ModulePassport\\Controllers\\AttachmentController',
    'model' => 'ModulePassport\\Models\\Attachment',
    'request' => 'ModulePassport\\Requests\\AttachmentRequest',
    'service' => 'ModulePassport\\Services\\AttachmentService',
    'repository' => 'ModulePassport\\Repositories\\AttachmentRepository',
    'resource' => 'ModulePassport\\Resources\\Attachment',
    'collection' => 'ModulePassport\\Resources\\AttachmentCollection',
  ],
  'passport-attachmentInfo' => 
  [
    'controller' => 'ModulePassport\\Controllers\\AttachmentInfoController',
    'model' => 'ModulePassport\\Models\\AttachmentInfo',
    'request' => 'ModulePassport\\Requests\\AttachmentInfoRequest',
    'repository' => 'ModulePassport\\Repositories\\AttachmentInfoRepository',
    'resource' => 'ModulePassport\\Resources\\AttachmentInfo',
    'collection' => 'ModulePassport\\Resources\\AttachmentInfoCollection',
  ],
  'passport-attachmentPath' => 
  [
    'controller' => 'ModulePassport\\Controllers\\AttachmentPathController',
    'model' => 'ModulePassport\\Models\\AttachmentPath',
    'request' => 'ModulePassport\\Requests\\AttachmentPathRequest',
    'repository' => 'ModulePassport\\Repositories\\AttachmentPathRepository',
    'resource' => 'ModulePassport\\Resources\\AttachmentPath',
    'collection' => 'ModulePassport\\Resources\\AttachmentPathCollection',
  ],
  'passport-attachmentVideo' => 
  [
    'controller' => 'ModulePassport\\Controllers\\AttachmentVideoController',
    'model' => 'ModulePassport\\Models\\AttachmentVideo',
    'request' => 'ModulePassport\\Requests\\AttachmentVideoRequest',
    'repository' => 'ModulePassport\\Repositories\\AttachmentVideoRepository',
    'resource' => 'ModulePassport\\Resources\\AttachmentVideo',
    'collection' => 'ModulePassport\\Resources\\AttachmentVideoCollection',
  ],
  'passport-redis' => 
  [
    'service' => 'ModulePassport\\Services\\RedisService',
  ],
  'passport-easysms' => 
  [
    'service' => 'Framework\\Baseapp\\Services\\EasysmsService',
  ],
  'passport-entrance' => 
  [
    'controller' => 'ModulePassport\\Controllers\\EntranceController',
    'request' => 'ModulePassport\\Requests\\EntranceRequest',
  ],
  'passport-manager' => 
  [
    'controller' => 'ModulePassport\\Controllers\\ManagerController',
    'model' => 'ModulePassport\\Models\\Manager',
    'request' => 'ModulePassport\\Requests\\ManagerRequest',
    'repository' => 'ModulePassport\\Repositories\\ManagerRepository',
    'resource' => 'ModulePassport\\Resources\\Manager',
    'collection' => 'ModulePassport\\Resources\\ManagerCollection',
  ],
  'passport-permission' => 
  [
    'controller' => 'ModulePassport\\Controllers\\PermissionController',
    'model' => 'ModulePassport\\Models\\Permission',
    'request' => 'ModulePassport\\Requests\\PermissionRequest',
    'repository' => 'ModulePassport\\Repositories\\PermissionRepository',
    'resource' => 'ModulePassport\\Resources\\Permission',
    'collection' => 'ModulePassport\\Resources\\PermissionCollection',
  ],
  'passport-region' => 
  [
    'controller' => 'ModulePassport\\Controllers\\RegionController',
    'model' => 'ModulePassport\\Models\\Region',
    'request' => 'ModulePassport\\Requests\\RegionRequest',
    'repository' => 'ModulePassport\\Repositories\\RegionRepository',
    'resource' => 'ModulePassport\\Resources\\Region',
    'collection' => 'ModulePassport\\Resources\\RegionCollection',
  ],
  'passport-resource' => 
  [
    'controller' => 'ModulePassport\\Controllers\\ResourceController',
    'model' => 'ModulePassport\\Models\\Resource',
    'request' => 'ModulePassport\\Requests\\ResourceRequest',
    'repository' => 'ModulePassport\\Repositories\\ResourceRepository',
    'resource' => 'ModulePassport\\Resources\\Resource',
    'collection' => 'ModulePassport\\Resources\\ResourceCollection',
  ],
  'passport-role' => 
  [
    'controller' => 'ModulePassport\\Controllers\\RoleController',
    'model' => 'ModulePassport\\Models\\Role',
    'request' => 'ModulePassport\\Requests\\RoleRequest',
    'repository' => 'ModulePassport\\Repositories\\RoleRepository',
    'resource' => 'ModulePassport\\Resources\\Role',
    'collection' => 'ModulePassport\\Resources\\RoleCollection',
  ],
  'passport-roleManager' => 
  [
    'model' => 'ModulePassport\\Models\\RoleManager',
  ],
  'passport-rolePermission' => 
  [
    'model' => 'ModulePassport\\Models\\RolePermission',
  ],
  'passport-user' => 
  [
    'controller' => 'ModulePassport\\Controllers\\UserController',
    'model' => 'ModulePassport\\Models\\User',
    'request' => 'ModulePassport\\Requests\\UserRequest',
    'service' => 'ModulePassport\\Services\\UserService',
    'repository' => 'ModulePassport\\Repositories\\UserRepository',
    'resource' => 'ModulePassport\\Resources\\User',
    'collection' => 'ModulePassport\\Resources\\UserCollection',
  ],
  'passport-userPermission' => 
  [
    'service' => 'ModulePassport\\Services\\UserPermissionService',
  ],
];
