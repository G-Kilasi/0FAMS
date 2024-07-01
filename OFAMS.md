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
## Equipment Table:

- **EquipmentID:** *(INT)* Unique identifier for each equipment.
  - *Possible data values:* Any positive integer.
  - *Example:* 1, 2, 3

- **Name:** *(VARCHAR(100))* Name of the equipment.
  - *Possible data values:* Any string up to 100 characters.
  - *Example:* Lawn Mower, Hammer Drill

- **Description:** *(TEXT)* Description of the equipment.
  - *Possible data values:* Any text.
  - *Example:* Gas-powered lawn mower with 22-inch cutting deck, Corded hammer drill with 1/2-inch chuck

- **Quantity:** *(INT)* Quantity of the equipment available.
  - *Possible data values:* Any positive integer.
  - *Example:* 5, 10, 20

## Expenses Table:

- **ExpenseID:** *(INT)* Unique identifier for each expense.
  - *Possible data values:* Any positive integer.
  - *Example:* 1, 2, 3

- **TaskID:** *(INT)* Identifier of the task associated with the expense.
  - *Possible data values:* Any positive integer corresponding to an existing TaskID.
  - *Example:* 1, 2, 3

- **Amount:** *(DECIMAL(10, 2))* Amount of the expense.
  - *Possible data values:* Any positive decimal number with up to 10 digits in total and 2 decimal places.
  - *Example:* 50.00, 123.45, 1000.75

- **Description:** *(TEXT)* Description of the expense.
  - *Possible data values:* Any text.
  - *Example:* Purchase of materials for task, Transportation costs

- **Date:** *(DATE)* Date when the expense occurred.
  - *Possible data values:* Date in YYYY-MM-DD format.
  - *Example:* 2022-12-31, 2023-01-15

## Reports Table:

- **ReportID:** *(INT)* Unique identifier for each report.
  - *Possible data values:* Any positive integer.
  - *Example:* 1, 2, 3

- **TaskID:** *(INT)* Identifier of the task associated with the report.
  - *Possible data values:* Any positive integer corresponding to an existing TaskID.
  - *Example:* 1, 2, 3

- **WorkerID:** *(INT)* Identifier of the worker who submitted the report.
  - *Possible data values:* Any positive integer corresponding to an existing WorkerID.
  - *Example:* 1, 2, 3

- **Date:** *(DATE)* Date when the report was submitted.
  - *Possible data values:* Date in YYYY-MM-DD format.
  - *Example:* 2022-12-31, 2023-01-15

- **Content:** *(TEXT)* Content of the report.
  - *Possible data values:* Any text.
  - *Example:* Summary of tasks completed, Issues encountered during fieldwork
