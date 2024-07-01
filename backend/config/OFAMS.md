# Database Schema for Online Field Application

## Workers Table:

This table stores information about field workers.

- **WorkerID:** Unique identifier for each worker.
- **Name:** Name of the worker.
- **Email:** Email address of the worker.
- **Phone:** Phone number of the worker.
- **Skills:** Skills and qualifications possessed by the worker (e.g., landscaping, plumbing, electrical work).
- **Availability:** Availability of the worker for tasks (e.g., full-time, part-time, weekends only).

## Tasks Table:

This table stores information about tasks to be performed in the field.

- **TaskID:** Unique identifier for each task.
- **Description:** Description of the task.
- **Location:** Location where the task needs to be performed.
- **Deadline:** Deadline by which the task should be completed.
- **Priority:** Priority level of the task (e.g., low, medium, high).
- **Status:** Current status of the task (e.g., pending, in progress, completed).

## TaskAssignments Table:

This table associates workers with tasks and tracks assignments.

- **AssignmentID:** Unique identifier for each assignment.
- **TaskID:** Identifier of the task assigned.
- **WorkerID:** Identifier of the worker assigned to the task.
- **DateAssigned:** Date when the task was assigned to the worker.
- **DateCompleted:** Date when the task was completed by the worker.
- **Notes:** Additional notes related to the assignment.

## Equipment Table:

This table stores information about equipment available for field work.

- **EquipmentID:** Unique identifier for each equipment.
- **Name:** Name of the equipment.
- **Description:** Description of the equipment.
- **Quantity:** Quantity of the equipment available.

## Expenses Table:

This table tracks expenses related to tasks.

- **ExpenseID:** Unique identifier for each expense.
- **TaskID:** Identifier of the task associated with the expense.
- **Amount:** Amount of the expense.
- **Description:** Description of the expense.
- **Date:** Date when the expense occurred.

## Reports Table:

This table stores reports submitted by field workers.

- **ReportID:** Unique identifier for each report.
- **TaskID:** Identifier of the task associated with the report.
- **WorkerID:** Identifier of the worker who submitted the report.
- **Date:** Date when the report was submitted.
- **Content:** Content of the report.









## Workers Table:

- **WorkerID:** *(INT)* Unique identifier for each worker.
  - *Possible data values:* Any integer value.
  - *Example:* 1, 2, 3

- **Name:** *(VARCHAR(100))* Name of the worker.
  - *Possible data values:* Any string up to 100 characters.
  - *Example:* John Doe, Alice Smith

- **Email:** *(VARCHAR(100))* Email address of the worker.
  - *Possible data values:* Valid email addresses up to 100 characters.
  - *Example:* john@example.com, alice@example.com

- **Phone:** *(VARCHAR(20))* Phone number of the worker.
  - *Possible data values:* Valid phone numbers up to 20 characters.
  - *Example:* +1234567890, 123-456-7890

## Tasks Table:

- **TaskID:** *(INT)* Unique identifier for each task.
  - *Possible data values:* Any integer value.
  - *Example:* 1, 2, 3

- **Description:** *(TEXT)* Description of the task.
  - *Possible data values:* Any text.
  - *Example:* Install new irrigation system in the garden, Repair leaky faucet in the kitchen

- **Location:** *(VARCHAR(100))* Location where the task needs to be performed.
  - *Possible data values:* Any string up to 100 characters.
  - *Example:* Garden, Kitchen

- **Deadline:** *(DATE)* Deadline by which the task should be completed.
  - *Possible data values:* Date in YYYY-MM-DD format.
  - *Example:* 2022-12-31, 2023-05-15

- **Priority:** *(INT)* Priority level of the task.
  - *Possible data values:* Any integer value representing the priority level.
  - *Example:* 1 (Low), 2 (Medium), 3 (High)

- **Status:** *(VARCHAR(50))* Current status of the task.
  - *Possible data values:* Any string up to 50 characters.
  - *Example:* Pending, In Progress, Completed

## TaskAssignments Table:

- **AssignmentID:** *(INT)* Unique identifier for each assignment.
  - *Possible data values:* Any integer value.
  - *Example:* 1, 2, 3

- **TaskID:** *(INT)* Identifier of the task assigned.
  - *Possible data values:* Any integer value corresponding to an existing TaskID.
  - *Example:* 1, 2, 3

- **WorkerID:** *(INT)* Identifier of the worker assigned to the task.
  - *Possible data values:* Any integer value corresponding to an existing WorkerID.
  - *Example:* 1, 2, 3

- **DateAssigned:** *(DATE)* Date when the task was assigned to the worker.
  - *Possible data values:* Date in YYYY-MM-DD format.
  - *Example:* 2022-12-31, 2023-01-15

- **DateCompleted:** *(DATE)* Date when the task was completed by the worker.
  - *Possible data values:* Date in YYYY-MM-DD format or NULL if the task is not completed yet.
  - *Example:* 2022-12-31, NULL

- **Notes:** *(TEXT)* Additional notes related to the assignment.
  - *Possible data values:* Any text.
  - *Example:* Worker requested additional equipment for this task, Task location has been changed due to unforeseen circumstances
