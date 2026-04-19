<?php

    session_start();
    require_once "dbconnect.php";

    if (isset($_POST['signup'])) {

        $fname = $_POST['first_name'];
        $mname = $_POST['middle_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $dept = $_POST['deptartment'];
        $studID = $_POST['studID'];

        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

        $role_prefix = "STU";

        $stmtRole = 
            $conn->prepare(
                "SELECT role_id
                 FROM role
                 WHERE role_prefix = ?
                "
            );
        
        $stmtRole->bind_param("s", $role_prefix);
        $stmtRole->execute();

        $resultRole = $stmtRole->get_result();
        $roleRow = $resultRole->fetch_assoc();

        $role_id = $roleRow['role_id'];

        $stmt = $conn->prepare(
            "INSERT INTO user
            (first_name, middle_name, last_name,
            email, gender, role_id, 
            department_id, created_at)
            
            VALUES (?, ?, ?, ?, ?, ?, ?, NOW())
            "
        );

        $stmt->bind_param(
            "sssssii",
            $fname,
            $mname,
            $lname,
            $email,
            $sex,
            $role_id,
            $dept
        );

        if ($stmt->execute()) {
            $_SESSION['user_id'] = $stmt->insert_id;

            $_SESSION['role_id'] = $role_id;

            header("Location: ../index.php");
            exit();
        } else {
            echo "sign up failed";
        }
    }

?>