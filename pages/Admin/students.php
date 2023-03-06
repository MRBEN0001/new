<!DOCTYPE html>
<html>

<head>
    <title>School Management System Admin Dashboard</title>
    <link rel="stylesheet" href="../css/adminViewStudents.css">
</head>

<body>
    <header>
        <h1>School Management System Admin Dashboard</h1>
    </header>
    <nav>
        <?php
        include_once("header.php");

        ?>
    </nav>
    <main>
        <section id="users">
            <h2>Users</h2>
            <table>
                <thead>

                    <tr>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include_once("../../classes/StudentController.php");
                    $i = 1;
                    $allStudents = new StudentController();
                    foreach ($allStudents->fetchStudents() as $student) {

                    ?>

                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $student['user_name'] ?></td>
                            <td><?php echo $student['e_mail'] ?></td>
                            <td><?php echo $student['password'] ?></td>
                            <td>
                                <a href="#"> <button class="editButton">Edit</button></a>
                                <a href="#"> <button class="deleteButton">Delete </button></a>
                            </td>
                        </tr>


                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>