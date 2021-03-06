<?php
/**
 * NotificationChannel
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Dastra API
 *
 * Dastra's public REST API
 *
 * The version of the OpenAPI document: v1
 * Contact: antoine.bidault@dastra.eu
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * NotificationChannel Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NotificationChannel
{
    /**
     * Possible values of this enum
     */
    const PROCESSING_CREATION = 'ProcessingCreation';
    const PROCESSING_MODIFICATION = 'ProcessingModification';
    const PROCESSING_STATE_CHANGE = 'ProcessingStateChange';
    const USER_REQUEST_CREATION = 'UserRequestCreation';
    const USER_REQUEST_UPDATE = 'UserRequestUpdate';
    const USER_REQUEST_STATE_CHANGE = 'UserRequestStateChange';
    const DATA_BREACH_CREATION = 'DataBreachCreation';
    const DATA_BREACH_MODIFICATION = 'DataBreachModification';
    const TASK_CREATION = 'TaskCreation';
    const TASK_EDIT = 'TaskEdit';
    const COOKIE_WIDGET = 'CookieWidget';
    const TASK_CHANGE_STATE = 'TaskChangeState';
    const COMMENT_NEW = 'CommentNew';
    const PROCESSING_ARCHIVED = 'ProcessingArchived';
    const USER_REQUEST_ARCHIVED = 'UserRequestArchived';
    const DATA_BREACH_ARCHIVED = 'DataBreachArchived';
    const DATA_BREACH_CHANGE_STATE = 'DataBreachChangeState';
    const PROCESSING_ADD_RELATION = 'ProcessingAddRelation';
    const PROCESSING_REMOVE_RELATION = 'ProcessingRemoveRelation';
    const USER_SESSION = 'UserSession';
    const USER_INVITED = 'UserInvited';
    const USER_REVOKED = 'UserRevoked';
    const PERMISSION_CHANGE = 'PermissionChange';
    const WORKSPACE_DELETED = 'WorkspaceDeleted';
    const OWNER_ADDED = 'OwnerAdded';
    const OWNER_DELETED = 'OwnerDeleted';
    const USER_LOGIN = 'UserLogin';
    const USER_REQUEST_WIDGET_CREATION = 'UserRequestWidgetCreation';
    const USER_REQUEST_MESSAGE = 'UserRequestMessage';
    const USER_DELETED = 'UserDeleted';
    const PROCESSING_DELETED = 'ProcessingDeleted';
    const USER_REQUEST_IDENTITY_VALIDATED = 'UserRequestIdentityValidated';
    const USER_MAX_LOGIN_ATTEMPTS = 'UserMaxLoginAttempts';
    const TASK_EXPIRATION = 'TaskExpiration';
    const TASK_MENTION = 'TaskMention';
    const COMMENT_MENTION = 'CommentMention';
    const AUDIT_RESPONSE_REFUSED = 'AuditResponseRefused';
    const AUDIT_RESPONSE_VALIDATED = 'AuditResponseValidated';
    const AUDIT_RESPONSE_UPDATED = 'AuditResponseUpdated';
    const AUDIT_RESPONSE_FINALIZED = 'AuditResponseFinalized';
    const AUDIT_RESPONSE_ACTION_PLAN_GENERATED = 'AuditResponseActionPlanGenerated';
    const AUDIT_RESPONSE_PLANIFIED = 'AuditResponsePlanified';
    const AUDIT_RESPONSE_INVITATION = 'AuditResponseInvitation';
    const AUDIT_ANNOTATION_ADDED = 'AuditAnnotationAdded';
    const AUDIT_ANNOTATION_CHANGE_STATE = 'AuditAnnotationChangeState';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROCESSING_CREATION,
            self::PROCESSING_MODIFICATION,
            self::PROCESSING_STATE_CHANGE,
            self::USER_REQUEST_CREATION,
            self::USER_REQUEST_UPDATE,
            self::USER_REQUEST_STATE_CHANGE,
            self::DATA_BREACH_CREATION,
            self::DATA_BREACH_MODIFICATION,
            self::TASK_CREATION,
            self::TASK_EDIT,
            self::COOKIE_WIDGET,
            self::TASK_CHANGE_STATE,
            self::COMMENT_NEW,
            self::PROCESSING_ARCHIVED,
            self::USER_REQUEST_ARCHIVED,
            self::DATA_BREACH_ARCHIVED,
            self::DATA_BREACH_CHANGE_STATE,
            self::PROCESSING_ADD_RELATION,
            self::PROCESSING_REMOVE_RELATION,
            self::USER_SESSION,
            self::USER_INVITED,
            self::USER_REVOKED,
            self::PERMISSION_CHANGE,
            self::WORKSPACE_DELETED,
            self::OWNER_ADDED,
            self::OWNER_DELETED,
            self::USER_LOGIN,
            self::USER_REQUEST_WIDGET_CREATION,
            self::USER_REQUEST_MESSAGE,
            self::USER_DELETED,
            self::PROCESSING_DELETED,
            self::USER_REQUEST_IDENTITY_VALIDATED,
            self::USER_MAX_LOGIN_ATTEMPTS,
            self::TASK_EXPIRATION,
            self::TASK_MENTION,
            self::COMMENT_MENTION,
            self::AUDIT_RESPONSE_REFUSED,
            self::AUDIT_RESPONSE_VALIDATED,
            self::AUDIT_RESPONSE_UPDATED,
            self::AUDIT_RESPONSE_FINALIZED,
            self::AUDIT_RESPONSE_ACTION_PLAN_GENERATED,
            self::AUDIT_RESPONSE_PLANIFIED,
            self::AUDIT_RESPONSE_INVITATION,
            self::AUDIT_ANNOTATION_ADDED,
            self::AUDIT_ANNOTATION_CHANGE_STATE,
        ];
    }
}


