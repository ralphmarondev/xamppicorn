<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Taskberry</title>
  <link rel="shortcut icon" href="assets/img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/all.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo.png" alt="Logo" width="30" height="24" />
        Taskberry
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbar-supported-content"
        aria-controls="navbar-supported-content"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-supported-content">
        <ul class="nav nav-pills mx-auto">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page">In Progress</a>
          </li>
          <li class="nav-item"><a href="#" class="nav-link">Completed</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Pomodoro</a></li>
          <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        </ul>
        <div class="btn-group">
          <button type="button" class="btn btn-danger dropdown-toggle text-uppercase" data-bs-toggle="dropdown" aria-expanded="false">
            Logout
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Logout</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item text-uppercase" href="#">Reload</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-3">
    <div class="card py-3">
      <div class="container">
        <div class="b-card-body">
          <div class="align-items-center d-flex pb-2">
            <div class="mb-0 flex-grow-1">
              <div class="col-3" sm="2">
                <input
                  class="form-control form-control-sm"
                  placeholder="Search Task" />
              </div>
            </div>
            <div class="flex-shrink-0">
              <div
                class="form-check form-switch form-switch-right form-switch-md">
                <button
                  type="button"
                  class="bg-gradient btn btn-success btn-sm btn-label waves-effect waves-light"
                  data-bs-toggle="modal"
                  data-bs-target="#newTaskModal">
                  <i class="fas fa-plus icon"></i>
                  Add New Task
                </button>
              </div>
            </div>
          </div>
          <table
            id="alternative-pagination"
            class="table nowrap dt-responsive align-middle table-hover table-bordered"
            style="width: 100%">
            <thead class="table-light text-muted">
              <tr>
                <th class="sort" data-sort="pairs" scope="col" width="26%">
                  Task
                </th>
                <th scope="col" width="17%" class="text-center">
                  Start Time
                </th>
                <th class="text-center" scope="col" width="17%">End Time</th>
                <th class="text-center" scope="col" width="12%">Priority</th>
                <th class="text-center" scope="col" width="12%">Status</th>
                <th class="text-center" scope="col" width="10%">Action</th>
              </tr>
            </thead>
            <tbody class="list form-check-all">
              <!-- <tr>
                <td style="text-transform: capitalize">Eat lunch</td>
                <td class="text-center">9:21 AM Nov 5, 2024</td>
                <td class="text-center">11:21 AM Nov 5, 2024</td>
                <td class="text-center">Medium</td>
                <td class="text-center">On Going</td>
                <td class="text-center">
                  <button
                    class="bg-gradient btn btn-success btn-sm btn-icon waves-effect waves-light"
                    style="margin: 3px">
                    <i class="fas fa-pencil-alt"></i>
                  </button>
                  <button
                    class="bg-gradient btn btn-danger btn-sm btn-icon waves-effect waves-light"
                    style="margin: 3px">
                    <i class="fas fa-trash-alt"></i>
                  </button>
                </td>
              </tr> -->
            </tbody>
          </table>

          <!--Pagination Start-->
          <div class="d-flex justify-content-end mt-3">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <!--Pagination Ends-->
        </div>
      </div>
    </div>
  </div>

  <!-- modals -->
  <div
    class="modal fade"
    id="newTaskModal"
    tabindex="-1"
    aria-labelledby="newTaskModal"
    aria-hidden="true">
    <div
      class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            New Task
          </h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <form id="new-task-modal">
              <div class="row">
                <div class="col-md-12 mb-3">
                  <label for="task-name" class="form-label">Task Name</label>
                  <textarea name="tast-name" id="task-name" class="form-control" placeholder="Enter new task"></textarea>
                </div>
                <div class="col mb-3">
                  <label for="start-time" class="form-label">Start Time</label>
                  <input type="datetime-local" name="start-time" id="start-time" class="form-control" placeholder="Select start time">
                </div>
                <div class="col mb-3">
                  <label for="end-time" class="form-label">End Time</label>
                  <input type="datetime-local" name="end-time" id="end-time" class="form-control" placeholder="Select end time">
                </div>
                <div class="col-md-12 mb-3">
                  <label for="priority" class="form-label">Priority</label>
                  <select id="priority" name="priority" class="form-control">
                    <option value="low">Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                  </select>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal">
            Close
          </button>
          <button type="button" class="btn btn-primary" id="save-btn">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Confirmation Modal -->
  <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Task</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p id="delete-task-name"></p>
          <p>Are you sure you want to delete this task with priority <strong id="delete-task-priority"></strong>?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" id="confirm-delete-btn">Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Update Task Modal -->
  <div class="modal fade" id="updateTaskModal" tabindex="-1" aria-labelledby="updateTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateTaskModalLabel">Update Task</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="update-task-form">
            <input type="hidden" id="update-task-id">
            <div class="mb-3">
              <label for="update-task-name" class="form-label">Task Name</label>
              <input type="text" class="form-control" id="update-task-name" required placeholder="Task Name">
            </div>
            <div class="mb-3">
              <label for="update-start-time" class="form-label">Start Time</label>
              <input type="datetime-local" class="form-control" id="update-start-time" required>
            </div>
            <div class="mb-3">
              <label for="update-end-time" class="form-label">End Time</label>
              <input type="datetime-local" class="form-control" id="update-end-time" required>
            </div>
            <div class="mb-3">
              <label for="update-priority" class="form-label">Priority</label>
              <select class="form-control" id="update-priority" required>
                <option value="low">Low</option>
                <option value="medium">Medium</option>
                <option value="high">High</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="update-status" class="form-label">Status</label>
              <select class="form-control" id="update-status" required>
                <option value="in-progress">In Progress</option>
                <option value="Completed">Completed</option>
              </select>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="update-task-btn">Update</button>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/js/jquery.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/create_task.js"></script>
  <script src="assets/js/fetch_tasks.js"></script>
</body>

</html>