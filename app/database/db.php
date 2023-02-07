<?php

  session_start();
  require("connect.php");

  function dd($value)
  {
    echo "<pre>", print_r($value, true), "</pre>";
    die();
  }

  // Execute Query
  function executeQuery($sql, $data)
  {
    global $conn;

    $stmt = $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();

    return $stmt;
  }

  // Select All Records
  function selectAll($table, $conditions=[])
  {
    global $conn;

    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
      $stmt = $conn->prepare($sql);
      $stmt->execute();
      $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
      return $records;
    } else {
      $i = 0;
      foreach ($conditions as $key => $value) {
        if ($i === 0) {
          $sql = $sql . " WHERE $key=?";
        } else {
          $sql = $sql . " AND $key=?";
        }
        $i++;
      }
          
      $stmt = executeQuery($sql, $conditions);
      $records = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
      return $records;
    }
  }

  // Select One Record
  function selectOne($table, $conditions)
  {
    global $conn;

    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) {
      if ($i === 0) {
        $sql = $sql . " WHERE $key=?";
      } else {
        $sql = $sql . " AND $key=?";
      }
      $i++;
    }

    $sql = $sql . " LIMIT 1";
    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->get_result()->fetch_assoc();
    return $records;
  }

  // Create a Record
  function create($table, $data)
  {
    global $conn;
    $sql = "INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
      if ($i === 0) {
        $sql = $sql . " $key=?";
      } else {
        $sql = $sql . ", $key=?";
      }
      $i++;
    }
      
    $stmt = executeQuery($sql, $data);
    $id = $stmt->insert_id;
    return $id;
  }

  // Update a Record
  function update($table, $id, $data)
  {
    global $conn;
    $sql = "UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
      if ($i === 0) {
        $sql = $sql . " $key=?";
      } else {
        $sql = $sql . ", $key=?";
      }
      $i++;
    }

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
  }

  // Delete a Record
  function delete($table, $id)
  {
    global $conn;
    $sql = "DELETE FROM $table WHERE id=?";

    $stmt = executeQuery($sql, ['id' => $id]);
    return $stmt->affected_rows;
  }
  
  // Get Author of Proposal
  function getPostAuthor($user_id)
  {
    global $conn;
    $sql = "SELECT firstname, lastname FROM users WHERE id=$user_id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
      return mysqli_fetch_assoc($result)['firstname'];
    } else {
      return null;
    }
  }

  function getPostAuthorLName($user_id)
  {
    global $conn;
    $sql = "SELECT firstname, lastname FROM users WHERE id=$user_id";

    $result = mysqli_query($conn, $sql);
    if ($result) {
      return mysqli_fetch_assoc($result)['lastname'];
    } else {
      return null;
    }
  }

  // Approve Paper Submission
  function approvePaper($table, $id, $data)
  {
    global $conn;
    $sql = "UPDATE $table SET status='Approved' ";

    $sql = $sql . " WHERE id=?";
    $data['id'] = $id;
    $stmt = executeQuery($sql, $data);
    return $stmt->affected_rows;
  }

?>