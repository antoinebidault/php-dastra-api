# OpenAPIClient-php

Dastra's public REST API

For more information, please visit [https://www.dastra.eu](https://www.dastra.eu).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure HTTP basic authorization: basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tenant_id = 'tenant_id_example'; // string
$workspace_id = 'workspace_id_example'; // string

try {
    $apiInstance->actorsColumns($tenant_id, $workspace_id);
} catch (Exception $e) {
    echo 'Exception when calling ActorsApi->actorsColumns: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.dastra.eu*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActorsApi* | [**actorsColumns**](docs/Api/ActorsApi.md#actorscolumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Actors/columns | 
*ActorsApi* | [**actorsCreate**](docs/Api/ActorsApi.md#actorscreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Actors | Create a new actor
*ActorsApi* | [**actorsDelete**](docs/Api/ActorsApi.md#actorsdelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/Actors/{id} | Remove the actor with his id
*ActorsApi* | [**actorsFind**](docs/Api/ActorsApi.md#actorsfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Actors/{id} | Get a single actor with his id
*ActorsApi* | [**actorsList**](docs/Api/ActorsApi.md#actorslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Actors | Get all actors (User inserted in the record of processing activities)
*ActorsApi* | [**actorsUpdate**](docs/Api/ActorsApi.md#actorsupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Actors/{id} | Edit the actor&#39;s properties
*ApplicationsApi* | [**applicationsColumns**](docs/Api/ApplicationsApi.md#applicationscolumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications/columns | 
*ApplicationsApi* | [**applicationsCreate**](docs/Api/ApplicationsApi.md#applicationscreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications | Create a new application
*ApplicationsApi* | [**applicationsDelete**](docs/Api/ApplicationsApi.md#applicationsdelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications/{id} | 
*ApplicationsApi* | [**applicationsFind**](docs/Api/ApplicationsApi.md#applicationsfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications/{id} | Get an application with his id
*ApplicationsApi* | [**applicationsJsonPatchWithModelState**](docs/Api/ApplicationsApi.md#applicationsjsonpatchwithmodelstate) | **PATCH** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications/{id} | Patch an application
*ApplicationsApi* | [**applicationsList**](docs/Api/ApplicationsApi.md#applicationslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications | Get all linked applications
*ApplicationsApi* | [**applicationsUpdate**](docs/Api/ApplicationsApi.md#applicationsupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Applications/{id} | Edit an application
*CommentsApi* | [**commentsCount**](docs/Api/CommentsApi.md#commentscount) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Comments/count | Count number of comments for display purposes
*CommentsApi* | [**commentsCreate**](docs/Api/CommentsApi.md#commentscreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Comments | Create a new comment
*CommentsApi* | [**commentsDelete**](docs/Api/CommentsApi.md#commentsdelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/Comments/{id} | Delete a comment by id
*CommentsApi* | [**commentsFind**](docs/Api/CommentsApi.md#commentsfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Comments/{id} | Get a comment by id
*CommentsApi* | [**commentsList**](docs/Api/CommentsApi.md#commentslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Comments | Get all comments by objectId and objectType
*CommentsApi* | [**commentsUpdate**](docs/Api/CommentsApi.md#commentsupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Comments/{id} | Edit comment
*DataBreachsApi* | [**dataBreachsArchive**](docs/Api/DataBreachsApi.md#databreachsarchive) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/archive/{id} | 
*DataBreachsApi* | [**dataBreachsColumns**](docs/Api/DataBreachsApi.md#databreachscolumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/columns | 
*DataBreachsApi* | [**dataBreachsCreate**](docs/Api/DataBreachsApi.md#databreachscreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs | 
*DataBreachsApi* | [**dataBreachsDelete**](docs/Api/DataBreachsApi.md#databreachsdelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/{id} | 
*DataBreachsApi* | [**dataBreachsExport**](docs/Api/DataBreachsApi.md#databreachsexport) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/export/{format} | Export the records in any format
*DataBreachsApi* | [**dataBreachsFind**](docs/Api/DataBreachsApi.md#databreachsfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/{id} | 
*DataBreachsApi* | [**dataBreachsList**](docs/Api/DataBreachsApi.md#databreachslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs | Get the databreach list
*DataBreachsApi* | [**dataBreachsRestore**](docs/Api/DataBreachsApi.md#databreachsrestore) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/restore/{id} | 
*DataBreachsApi* | [**dataBreachsUpdate**](docs/Api/DataBreachsApi.md#databreachsupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/{id} | Put a databreach
*DataBreachsApi* | [**dataBreachsUpdateWorkflow**](docs/Api/DataBreachsApi.md#databreachsupdateworkflow) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataBreachs/workflow | Switching the current state
*DataProcessingRelationshipsApi* | [**dataProcessingRelationshipsCreate**](docs/Api/DataProcessingRelationshipsApi.md#dataprocessingrelationshipscreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessingRelationships/{id} | Saving or updating a datatreatment
*DataProcessingRelationshipsApi* | [**dataProcessingRelationshipsDelete**](docs/Api/DataProcessingRelationshipsApi.md#dataprocessingrelationshipsdelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessingRelationships/{id} | 
*DataProcessingRelationshipsApi* | [**dataProcessingRelationshipsList**](docs/Api/DataProcessingRelationshipsApi.md#dataprocessingrelationshipslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessingRelationships/{dataProcessingId} | Get data treatment by id
*DataProcessingsApi* | [**dataProcessingsArchive**](docs/Api/DataProcessingsApi.md#dataprocessingsarchive) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/archive/{id} | Register insights
*DataProcessingsApi* | [**dataProcessingsColumns**](docs/Api/DataProcessingsApi.md#dataprocessingscolumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/columns | 
*DataProcessingsApi* | [**dataProcessingsCreate**](docs/Api/DataProcessingsApi.md#dataprocessingscreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings | Creating a record of processing
*DataProcessingsApi* | [**dataProcessingsDelete**](docs/Api/DataProcessingsApi.md#dataprocessingsdelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/{id} | 
*DataProcessingsApi* | [**dataProcessingsDuplicate**](docs/Api/DataProcessingsApi.md#dataprocessingsduplicate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/{id}/duplicate | Duplicate a data treatment object
*DataProcessingsApi* | [**dataProcessingsExport**](docs/Api/DataProcessingsApi.md#dataprocessingsexport) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/export/{format} | Export the records in any format
*DataProcessingsApi* | [**dataProcessingsFind**](docs/Api/DataProcessingsApi.md#dataprocessingsfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/{id} | Get data processing record by id
*DataProcessingsApi* | [**dataProcessingsInsights**](docs/Api/DataProcessingsApi.md#dataprocessingsinsights) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/insights | 
*DataProcessingsApi* | [**dataProcessingsList**](docs/Api/DataProcessingsApi.md#dataprocessingslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings | Get data treatments (Paginated)
*DataProcessingsApi* | [**dataProcessingsListPurposes**](docs/Api/DataProcessingsApi.md#dataprocessingslistpurposes) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/purposes/{id} | 
*DataProcessingsApi* | [**dataProcessingsNodes**](docs/Api/DataProcessingsApi.md#dataprocessingsnodes) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/nodes | Get data treatments (Paginated)
*DataProcessingsApi* | [**dataProcessingsPatchDataTreatment**](docs/Api/DataProcessingsApi.md#dataprocessingspatchdatatreatment) | **PATCH** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/{id} | Patching a data processing with his id
*DataProcessingsApi* | [**dataProcessingsPersonCategories**](docs/Api/DataProcessingsApi.md#dataprocessingspersoncategories) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/person-categories | Return the organizational security measures types  to generates the selectList
*DataProcessingsApi* | [**dataProcessingsRestore**](docs/Api/DataProcessingsApi.md#dataprocessingsrestore) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/restore/{id} | registerInsights              DataTreatment Archiving
*DataProcessingsApi* | [**dataProcessingsRestoreHistory**](docs/Api/DataProcessingsApi.md#dataprocessingsrestorehistory) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/restore-history | 
*DataProcessingsApi* | [**dataProcessingsStats**](docs/Api/DataProcessingsApi.md#dataprocessingsstats) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/stats | 
*DataProcessingsApi* | [**dataProcessingsSwitchWorkflowStep**](docs/Api/DataProcessingsApi.md#dataprocessingsswitchworkflowstep) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/workflow | Switching the current state
*DataProcessingsApi* | [**dataProcessingsTree**](docs/Api/DataProcessingsApi.md#dataprocessingstree) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings/tree | Get data treatments (Paginated)
*DataProcessingsApi* | [**dataProcessingsUpdate**](docs/Api/DataProcessingsApi.md#dataprocessingsupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/DataProcessings | Saving or updating a data processing record
*DataTransfersApi* | [**dataTransfersList**](docs/Api/DataTransfersApi.md#datatransferslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/DataTransfers | Get data treatments (Paginated)
*IterationsApi* | [**iterationsCreate**](docs/Api/IterationsApi.md#iterationscreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Iterations | 
*IterationsApi* | [**iterationsDelete**](docs/Api/IterationsApi.md#iterationsdelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/Iterations/{id} | Delete an iteration
*IterationsApi* | [**iterationsFind**](docs/Api/IterationsApi.md#iterationsfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Iterations/{id} | 
*IterationsApi* | [**iterationsList**](docs/Api/IterationsApi.md#iterationslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Iterations | 
*IterationsApi* | [**iterationsUpdate**](docs/Api/IterationsApi.md#iterationsupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Iterations/{id} | 
*LogsApi* | [**logsExport**](docs/Api/LogsApi.md#logsexport) | **GET** /v1/tenant/{tenantId}/Logs/export | Download logs as csv
*LogsApi* | [**logsHistory**](docs/Api/LogsApi.md#logshistory) | **GET** /v1/tenant/{tenantId}/Logs/history | 
*LogsApi* | [**logsList**](docs/Api/LogsApi.md#logslist) | **GET** /v1/tenant/{tenantId}/Logs | Get logs
*ProjectsApi* | [**projectsArchiveProject**](docs/Api/ProjectsApi.md#projectsarchiveproject) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Projects/archive/{id} | 
*ProjectsApi* | [**projectsCreate**](docs/Api/ProjectsApi.md#projectscreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Projects | 
*ProjectsApi* | [**projectsFind**](docs/Api/ProjectsApi.md#projectsfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Projects/{id} | 
*ProjectsApi* | [**projectsList**](docs/Api/ProjectsApi.md#projectslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Projects | 
*ProjectsApi* | [**projectsUpdate**](docs/Api/ProjectsApi.md#projectsupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Projects/{id} | 
*RisksApi* | [**risksColumns**](docs/Api/RisksApi.md#riskscolumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks/columns | 
*RisksApi* | [**risksCreate**](docs/Api/RisksApi.md#riskscreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks | 
*RisksApi* | [**risksDelete**](docs/Api/RisksApi.md#risksdelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks/{id} | 
*RisksApi* | [**risksFind**](docs/Api/RisksApi.md#risksfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks/{id} | Find a risk by his id
*RisksApi* | [**risksList**](docs/Api/RisksApi.md#riskslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks | List all risks
*RisksApi* | [**risksStats**](docs/Api/RisksApi.md#risksstats) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks/stats | 
*RisksApi* | [**risksUpdate**](docs/Api/RisksApi.md#risksupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Risks/{id} | 
*SecurityMeasuresApi* | [**securityMeasuresColumns**](docs/Api/SecurityMeasuresApi.md#securitymeasurescolumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/SecurityMeasures/columns | List available column for security measure
*SecurityMeasuresApi* | [**securityMeasuresCreate**](docs/Api/SecurityMeasuresApi.md#securitymeasurescreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/SecurityMeasures | Create a new security measure
*SecurityMeasuresApi* | [**securityMeasuresDelete**](docs/Api/SecurityMeasuresApi.md#securitymeasuresdelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/SecurityMeasures/{id} | Delete a security measure
*SecurityMeasuresApi* | [**securityMeasuresFind**](docs/Api/SecurityMeasuresApi.md#securitymeasuresfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/SecurityMeasures/{id} | Get security measure by id
*SecurityMeasuresApi* | [**securityMeasuresList**](docs/Api/SecurityMeasuresApi.md#securitymeasureslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/SecurityMeasures | 
*SecurityMeasuresApi* | [**securityMeasuresUpdate**](docs/Api/SecurityMeasuresApi.md#securitymeasuresupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/SecurityMeasures/{id} | Update an existing security measure
*TasksApi* | [**tasksArchive**](docs/Api/TasksApi.md#tasksarchive) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/{id}/archive | 
*TasksApi* | [**tasksBurnDownChart**](docs/Api/TasksApi.md#tasksburndownchart) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/burn-down-chart | 
*TasksApi* | [**tasksColumns**](docs/Api/TasksApi.md#taskscolumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/columns | Columns available for table display
*TasksApi* | [**tasksCreate**](docs/Api/TasksApi.md#taskscreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks | Task creation
*TasksApi* | [**tasksCumulativeFlowChart**](docs/Api/TasksApi.md#taskscumulativeflowchart) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/cumulative-flow-chart | 
*TasksApi* | [**tasksDelete**](docs/Api/TasksApi.md#tasksdelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/{id} | 
*TasksApi* | [**tasksExport**](docs/Api/TasksApi.md#tasksexport) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/export/{format} | Export the records in any format
*TasksApi* | [**tasksFind**](docs/Api/TasksApi.md#tasksfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/{id} | Get a single task by id
*TasksApi* | [**tasksList**](docs/Api/TasksApi.md#taskslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks | 
*TasksApi* | [**tasksListGrouped**](docs/Api/TasksApi.md#taskslistgrouped) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/grouped | Get tasks grouped by workflow steps
*TasksApi* | [**tasksPatch**](docs/Api/TasksApi.md#taskspatch) | **PATCH** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/{id} | 
*TasksApi* | [**tasksReporting**](docs/Api/TasksApi.md#tasksreporting) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/task-reporting | 
*TasksApi* | [**tasksSortOrder**](docs/Api/TasksApi.md#taskssortorder) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/sortOrder | Switching the current state of the element  Using this system   https://stackoverflow.com/questions/398425/maintaining-sort-order-of-database-table-rows
*TasksApi* | [**tasksStats**](docs/Api/TasksApi.md#tasksstats) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/stats | 
*TasksApi* | [**tasksUpdate**](docs/Api/TasksApi.md#tasksupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/{id} | Task update
*TasksApi* | [**tasksUpdateWorkflow**](docs/Api/TasksApi.md#tasksupdateworkflow) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/workflow | Switching the current state of the element
*TasksApi* | [**tasksVelocityChart**](docs/Api/TasksApi.md#tasksvelocitychart) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/velocity-chart | 
*TasksApi* | [**tasksWorkflowStats**](docs/Api/TasksApi.md#tasksworkflowstats) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/Tasks/workflow-stats | Get the workflow stats
*UserRequestMessagesApi* | [**userRequestMessagesCreate**](docs/Api/UserRequestMessagesApi.md#userrequestmessagescreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages | 
*UserRequestMessagesApi* | [**userRequestMessagesDelete**](docs/Api/UserRequestMessagesApi.md#userrequestmessagesdelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages/{id} | Delete customer request
*UserRequestMessagesApi* | [**userRequestMessagesDeleteAttachment**](docs/Api/UserRequestMessagesApi.md#userrequestmessagesdeleteattachment) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages/attachments/{id} | Remove attachment linked to the request
*UserRequestMessagesApi* | [**userRequestMessagesDownloadFile**](docs/Api/UserRequestMessagesApi.md#userrequestmessagesdownloadfile) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages/download/{id} | Simple doc upload
*UserRequestMessagesApi* | [**userRequestMessagesFind**](docs/Api/UserRequestMessagesApi.md#userrequestmessagesfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages/{id} | 
*UserRequestMessagesApi* | [**userRequestMessagesList**](docs/Api/UserRequestMessagesApi.md#userrequestmessageslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages | Customer request
*UserRequestMessagesApi* | [**userRequestMessagesUpdate**](docs/Api/UserRequestMessagesApi.md#userrequestmessagesupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequestMessages/{id} | Edit a user request
*UserRequestsApi* | [**userRequestsArchive**](docs/Api/UserRequestsApi.md#userrequestsarchive) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/archive/{id} | Archive an existing user request by id  It set the current state of the request to \&quot;Archived\&quot; state
*UserRequestsApi* | [**userRequestsColumns**](docs/Api/UserRequestsApi.md#userrequestscolumns) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/columns | 
*UserRequestsApi* | [**userRequestsCreate**](docs/Api/UserRequestsApi.md#userrequestscreate) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests | 
*UserRequestsApi* | [**userRequestsDelete**](docs/Api/UserRequestsApi.md#userrequestsdelete) | **DELETE** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/{id} | It remove definitly
*UserRequestsApi* | [**userRequestsExport**](docs/Api/UserRequestsApi.md#userrequestsexport) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/export/{format} | Export the records in any format
*UserRequestsApi* | [**userRequestsFind**](docs/Api/UserRequestsApi.md#userrequestsfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/{id} | Get an existing user request by id
*UserRequestsApi* | [**userRequestsList**](docs/Api/UserRequestsApi.md#userrequestslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests | User request list
*UserRequestsApi* | [**userRequestsPatch**](docs/Api/UserRequestsApi.md#userrequestspatch) | **PATCH** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/{id} | Patch an application
*UserRequestsApi* | [**userRequestsRestore**](docs/Api/UserRequestsApi.md#userrequestsrestore) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/restore/{id} | 
*UserRequestsApi* | [**userRequestsSetIdentityValidation**](docs/Api/UserRequestsApi.md#userrequestssetidentityvalidation) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/set-identity-validation/{id} | Switching the identity validation state
*UserRequestsApi* | [**userRequestsStats**](docs/Api/UserRequestsApi.md#userrequestsstats) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/stats | 
*UserRequestsApi* | [**userRequestsUpdate**](docs/Api/UserRequestsApi.md#userrequestsupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/{id} | Edit a user request
*UserRequestsApi* | [**userRequestsUpdateWorkflow**](docs/Api/UserRequestsApi.md#userrequestsupdateworkflow) | **POST** /v1/tenant/{tenantId}/ws/{workspaceId}/UserRequests/workflow | Switching the current state
*UserTasksApi* | [**userTasksGet**](docs/Api/UserTasksApi.md#usertasksget) | **GET** /v1/tenant/{tenantId}/UserTasks | Get the assigned user tasks
*WorkFlowsApi* | [**workFlowsFind**](docs/Api/WorkFlowsApi.md#workflowsfind) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/WorkFlows/{type} | Get workflows
*WorkFlowsApi* | [**workFlowsList**](docs/Api/WorkFlowsApi.md#workflowslist) | **GET** /v1/tenant/{tenantId}/ws/{workspaceId}/WorkFlows | Get the complete
*WorkFlowsApi* | [**workFlowsUpdate**](docs/Api/WorkFlowsApi.md#workflowsupdate) | **PUT** /v1/tenant/{tenantId}/ws/{workspaceId}/WorkFlows | Save workflow steps in database

## Models

- [AccessLevel](docs/Model/AccessLevel.md)
- [AccessType](docs/Model/AccessType.md)
- [ActorDto](docs/Model/ActorDto.md)
- [ActorDtoPagedList](docs/Model/ActorDtoPagedList.md)
- [ActorReferencedAs](docs/Model/ActorReferencedAs.md)
- [ActorType](docs/Model/ActorType.md)
- [ApplicationDto](docs/Model/ApplicationDto.md)
- [ApplicationState](docs/Model/ApplicationState.md)
- [ApplicationType](docs/Model/ApplicationType.md)
- [ArchivePayload](docs/Model/ArchivePayload.md)
- [AreaDataProcessingTreeItemDto](docs/Model/AreaDataProcessingTreeItemDto.md)
- [AreaDto](docs/Model/AreaDto.md)
- [AreaType](docs/Model/AreaType.md)
- [AttachmentDto](docs/Model/AttachmentDto.md)
- [AttachmentType](docs/Model/AttachmentType.md)
- [BaseRole](docs/Model/BaseRole.md)
- [ClosedReason](docs/Model/ClosedReason.md)
- [CommentCreationDto](docs/Model/CommentCreationDto.md)
- [CommentDto](docs/Model/CommentDto.md)
- [CommentObjectType](docs/Model/CommentObjectType.md)
- [DataBreachDto](docs/Model/DataBreachDto.md)
- [DataBreachDtoPagedList](docs/Model/DataBreachDtoPagedList.md)
- [DataBreachImpactScore](docs/Model/DataBreachImpactScore.md)
- [DataBreachNotificationDto](docs/Model/DataBreachNotificationDto.md)
- [DataBreachNotificationSupport](docs/Model/DataBreachNotificationSupport.md)
- [DataBreachNotificationType](docs/Model/DataBreachNotificationType.md)
- [DataBreachPersonCategoryDto](docs/Model/DataBreachPersonCategoryDto.md)
- [DataBreachProbabilityScore](docs/Model/DataBreachProbabilityScore.md)
- [DataBreachReason](docs/Model/DataBreachReason.md)
- [DataBreachRiskLevel](docs/Model/DataBreachRiskLevel.md)
- [DataBreachState](docs/Model/DataBreachState.md)
- [DataBreachType](docs/Model/DataBreachType.md)
- [DataFieldDto](docs/Model/DataFieldDto.md)
- [DataProcessingCreationDto](docs/Model/DataProcessingCreationDto.md)
- [DataProcessingDto](docs/Model/DataProcessingDto.md)
- [DataProcessingDtoPagedList](docs/Model/DataProcessingDtoPagedList.md)
- [DataProcessingLightDto](docs/Model/DataProcessingLightDto.md)
- [DataProcessingNodeType](docs/Model/DataProcessingNodeType.md)
- [DataProcessingQuery](docs/Model/DataProcessingQuery.md)
- [DataProcessingRelationShipDto](docs/Model/DataProcessingRelationShipDto.md)
- [DataProcessingRestoreDto](docs/Model/DataProcessingRestoreDto.md)
- [DataProcessingStatValueDto](docs/Model/DataProcessingStatValueDto.md)
- [DataProcessingState](docs/Model/DataProcessingState.md)
- [DataProcessingStatsDto](docs/Model/DataProcessingStatsDto.md)
- [DataProcessingTreeDto](docs/Model/DataProcessingTreeDto.md)
- [DataProcessingTreeItemDto](docs/Model/DataProcessingTreeItemDto.md)
- [DataProtectionAuthorityDto](docs/Model/DataProtectionAuthorityDto.md)
- [DataRetentionRuleDto](docs/Model/DataRetentionRuleDto.md)
- [DataSetSource](docs/Model/DataSetSource.md)
- [DataTableColumn](docs/Model/DataTableColumn.md)
- [DevelopmentType](docs/Model/DevelopmentType.md)
- [ExportFormat](docs/Model/ExportFormat.md)
- [GenericDataType](docs/Model/GenericDataType.md)
- [GuidWorkflowUpdateDto](docs/Model/GuidWorkflowUpdateDto.md)
- [HostingType](docs/Model/HostingType.md)
- [IRecordNode](docs/Model/IRecordNode.md)
- [IRecordRelationShip](docs/Model/IRecordRelationShip.md)
- [ImpactScore](docs/Model/ImpactScore.md)
- [Int32SortQueryDto](docs/Model/Int32SortQueryDto.md)
- [Int32WorkflowUpdateDto](docs/Model/Int32WorkflowUpdateDto.md)
- [IterationDto](docs/Model/IterationDto.md)
- [JobTitle](docs/Model/JobTitle.md)
- [LegalBasis](docs/Model/LegalBasis.md)
- [LogDto](docs/Model/LogDto.md)
- [LogObjectType](docs/Model/LogObjectType.md)
- [LogRecipientDto](docs/Model/LogRecipientDto.md)
- [NoCommunicationReason](docs/Model/NoCommunicationReason.md)
- [NotificationChannel](docs/Model/NotificationChannel.md)
- [Operation](docs/Model/Operation.md)
- [PermissionWorkspaceDto](docs/Model/PermissionWorkspaceDto.md)
- [PersonCategoryDto](docs/Model/PersonCategoryDto.md)
- [PersonCategoryType](docs/Model/PersonCategoryType.md)
- [PersonalDataCategory](docs/Model/PersonalDataCategory.md)
- [Priority](docs/Model/Priority.md)
- [ProbabilityScore](docs/Model/ProbabilityScore.md)
- [ProcessingState](docs/Model/ProcessingState.md)
- [ProcessingType](docs/Model/ProcessingType.md)
- [ProjectDto](docs/Model/ProjectDto.md)
- [PurposeDto](docs/Model/PurposeDto.md)
- [PurposeType](docs/Model/PurposeType.md)
- [RecipientDto](docs/Model/RecipientDto.md)
- [RecipientType](docs/Model/RecipientType.md)
- [RecordNodes](docs/Model/RecordNodes.md)
- [RelationShipType](docs/Model/RelationShipType.md)
- [RiskDto](docs/Model/RiskDto.md)
- [RiskHeatmapValue](docs/Model/RiskHeatmapValue.md)
- [RiskStatDto](docs/Model/RiskStatDto.md)
- [RoleDto](docs/Model/RoleDto.md)
- [SafeGuardType](docs/Model/SafeGuardType.md)
- [SecurityMeasureDataTreatmentDto](docs/Model/SecurityMeasureDataTreatmentDto.md)
- [SecurityMeasureDto](docs/Model/SecurityMeasureDto.md)
- [SecurityMeasureState](docs/Model/SecurityMeasureState.md)
- [SecurityMeasureType](docs/Model/SecurityMeasureType.md)
- [SelectListGroup](docs/Model/SelectListGroup.md)
- [SelectListItemResource](docs/Model/SelectListItemResource.md)
- [SensitiveDataFieldLegalJustification](docs/Model/SensitiveDataFieldLegalJustification.md)
- [SerieValue](docs/Model/SerieValue.md)
- [SetIdentityValidationDto](docs/Model/SetIdentityValidationDto.md)
- [StatSerie](docs/Model/StatSerie.md)
- [StatSerieValue](docs/Model/StatSerieValue.md)
- [SupportType](docs/Model/SupportType.md)
- [TagDto](docs/Model/TagDto.md)
- [TagType](docs/Model/TagType.md)
- [TaskDto](docs/Model/TaskDto.md)
- [TaskObjectType](docs/Model/TaskObjectType.md)
- [TaskQuery](docs/Model/TaskQuery.md)
- [TaskSerieValue](docs/Model/TaskSerieValue.md)
- [TaskStatValueDto](docs/Model/TaskStatValueDto.md)
- [TaskState](docs/Model/TaskState.md)
- [TaskStatsDto](docs/Model/TaskStatsDto.md)
- [TeamDto](docs/Model/TeamDto.md)
- [TemplateExportProcessing](docs/Model/TemplateExportProcessing.md)
- [TransferDto](docs/Model/TransferDto.md)
- [TreeItemType](docs/Model/TreeItemType.md)
- [TutorialState](docs/Model/TutorialState.md)
- [TutorialStateItem](docs/Model/TutorialStateItem.md)
- [TypeQuery](docs/Model/TypeQuery.md)
- [UserDataTreatmentDto](docs/Model/UserDataTreatmentDto.md)
- [UserDto](docs/Model/UserDto.md)
- [UserLightDto](docs/Model/UserLightDto.md)
- [UserRequestAttachmentDto](docs/Model/UserRequestAttachmentDto.md)
- [UserRequestDto](docs/Model/UserRequestDto.md)
- [UserRequestQuery](docs/Model/UserRequestQuery.md)
- [UserRequestSerieValue](docs/Model/UserRequestSerieValue.md)
- [UserRequestSource](docs/Model/UserRequestSource.md)
- [UserRequestStatValueDto](docs/Model/UserRequestStatValueDto.md)
- [UserRequestState](docs/Model/UserRequestState.md)
- [UserRequestStatsDto](docs/Model/UserRequestStatsDto.md)
- [UserSettingsDto](docs/Model/UserSettingsDto.md)
- [UserSettingsDtoColumnsConfiguration](docs/Model/UserSettingsDtoColumnsConfiguration.md)
- [UserSettingsDtoTutorialStates](docs/Model/UserSettingsDtoTutorialStates.md)
- [VendorType](docs/Model/VendorType.md)
- [WorkFlowStepDto](docs/Model/WorkFlowStepDto.md)
- [WorkFlowType](docs/Model/WorkFlowType.md)
- [WorkSpaceDto](docs/Model/WorkSpaceDto.md)

## Authorization

### basic

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

antoine.bidault@dastra.eu

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `v1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
