let flag = 0;
$(document).ready(function () {
  // function to add task
  console.log(flag);
  $("#addTask").click(function () {
    let task = $("#new-task").val();
    $("#addTask").html("Add");
    if (task == "") {
      $("#error").html("Please enter something!!!");
    } else {
      $("#error").html("");
      if (flag == 1) {
        $.ajax({
          url: "updateTaskName.php",
          type: "POST",
          data: "data=" + task,
          datatype: "text",
        }).done(function (result) {
          $("#incomplete-tasks").html(result);
          flag = 0;
        });
      } else {
        $.ajax({
          url: "addTask.php",
          type: "POST",
          data: "data=" + task,
          datatype: "text",
        }).done(function (result) {
          $("#incomplete-tasks").html(result);
        });
      }
    }
  });
});
// function to add completed item to completed list
function completed(id) {
  $.ajax({
    url: "addComplete.php",
    type: "POST",
    data: "id=" + id,
  }).done(function (result) {
    $("#completed-tasks").html(result);
    deleteTask(id);
  });
}

// function to delete item from todo
function deleteTask(id) {
  $.ajax({
    url: "delete.php",
    type: "POST",
    data: "id=" + id,
  }).done(function (result) {
    $("#incomplete-tasks").html(result);
  });
  console.log(flag);
}
// function to delete item from completed
function deleteTaskCompleted(id) {
  $.ajax({
    url: "deleteCompleted.php",
    type: "POST",
    data: "id=" + id,
  }).done(function (result) {
    $("#completed-tasks").html(result);
  });
}
// function to edit task
function editTask(id) {
  flag = 1;
  $.ajax({
    url: "updatetask.php",
    type: "POST",
    data: "id=" + id,
  }).done(function (result) {
    $("#new-task").val(result);
    $("#addTask").html("Update");
  });
  console.log(flag);
}
// function to revert back the completed task
function completedRevert(id) {
  $.ajax({
    url: "completeRevert.php",
    type: "POST",
    data: "id=" + id,
  }).done(function (result) {
    $("#incomplete-tasks").html(result);
    deleteTaskCompleted(id);
  });
}
